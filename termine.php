<?php
// Ausgabe allgemeine Section Box für Formatierung
echo "<section class=\"box\">\n";
// Einbinden der Datenbankinformatiuonen
include_once('database.php');
if ($mysqli->connect_errno) {
    // Falls ein Fehler im Verbindungsaufbau aufgetreten ist
    echo "Leider sind Probleme bei der Anfrage aufgetreten";
}
else{
    //Das Encoding auf UTF-8 stellen damit die Umlaute passend ausgegeben werden'
    $mysqli->set_charset("utf8");
    // Abfrage für öffentliche Termine

    $sql = "SELECT p.id, p.post_content AS termin, p.post_title AS titel, pm.meta_key AS startkey, pm.meta_value AS startzeit, wpm.meta_key AS stopkey, wpm.meta_value AS endzeit, wtt.taxonomy FROM `sftz_posts` AS p INNER JOIN `sftz_postmeta` AS pm ON (p.id = pm.post_id) INNER JOIN `sftz_term_relationships` AS wtr ON wtr.object_id = p.id INNER JOIN `sftz_term_taxonomy` AS wtt ON wtr.term_taxonomy_id = wtt.term_taxonomy_id  INNER JOIN `sftz_terms` AS wpt ON wpt.term_id = wtt.term_id INNER JOIN `sftz_postmeta` AS wpm ON wpm.post_id = pm.post_id WHERE p.post_status LIKE 'publish' AND pm.meta_key LIKE 'ecwd_event_date_from' AND wtt.taxonomy LIKE 'ecwd_event_category' AND wpt.name LIKE 'Externe Veranstaltung' AND wpm.meta_key LIKE 'ecwd_event_date_to'";
    if (!$result = $mysqli->query($sql)) {
        // Fehler bei der Abfrage
        echo "Leider sind Probleme bei der Anfrage aufgetreten";
    }
    if ($result->num_rows === 0) {
        // Falls die Anzahl der Zeilen null ist
        echo "Es wurden keine passenden Einträge gefunden";
    }

    // Starten der Ausgabe mit passender Formatierung des HTML Quellcode

    echo "\t\t\t\t\t\t\t\t<h3>Termine</h3>\n";
    echo "\t\t\t\t\t\t\t\t<ul class=\"alt\">\n";
    $num_term = 0;
    while ($termine= $result->fetch_assoc()) {
        $start_timestring = $termine['startzeit'];
        $start_datum = strtotime($start_timestring);
        $now = time();
            if ($start_datum > $now) {
                $num_term = $num_term+1;
                $eventdatum = date('d.m.Y', $start_datum);
                echo "\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t<details>\n\t\t\t\t\t\t\t\t\t\t\t<summary>\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"floating-box\">". $eventdatum. "</span>\n";
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"floating-box\">".$termine['titel']."</span>\n\t\t\t\t\t\t\t\t\t\t\t</summary>\n";
                echo "\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: .5em 0 .5em 1.5em\">".$termine['termin']."</p>\n\t\t\t\t\t\t\t\t\t\t</details>\n";  	
                echo "\t\t\t\t\t\t\t\t\t</li>\n";
            }
    }
    if ($num_term == 0){
        echo "\t\t\t\t\t\t\t\t\t<li>Leider sind keine derzeit keine aktuellen Termine verfügbar</li>";
    }
    $result->free();
    $mysqli->close();
}
echo "\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t</section>\n";
?>