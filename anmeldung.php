<?php 

# anmeldung.php
# Beschreibung des Anmeldeprozedere im Waldkindergarten
# Erstellt 2018: Nicole und Florian Schön

$dokumentsdir ='https://schoenbuchstrolche.de/dokumente/';
?>

<!DOCTYPE HTML>
<!-- 
    Schönbuchstrolche Waldkindergarten Hildrizhausen e.V.
    (C) 2018 
-->
<html>
	<head>
		<title>Anmeldung</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
            <header id="header" class="alt">
					<?php
						include('./header.html')
					?>
			</header>
            <section id="generic_banner">
					
			</section>
			<!-- Main -->
	        </div>
				<section id="main" class="container">
					<header>
						<h2>Anmeldung</h2>
					</header>
					<div class="box">
                        <h3>Interesse geweckt</h3>
                        <p>
						Haben wir Ihr Interesse geweckt. Sie möchten den Waldkindergarten und die Erzieher zusammen mit Ihrem Kind einmal bei ihrer praktischen Arbeit erleben und kennenlernen. Oder sie sind sich schon ganz sicher, dass Sie einen kleinen Schönbuchstrolch 
						zu Hause haben. Dann nichts wie los. Im folgenden ist kurz unser übliches Prozedere beschrieben. Weitere Informationen finden sich zudem auch in unserer <a href="<?php echo $dokumentsdir.'Waldkindergartenordnung.pdf'; ?>">Kindergartenordnung</a>
                        </p>
						<h3>Üblicher Ablauf</h3>
                            <h4>Schnuppertag</h4>
							<p>
							Interessierte Eltern können jederzeit in Absprache mit dem pädagogischen Team zu einen Schnuppertag in den Waldkindergarten kommen. Eine Hospitation möglichst beider Eltern mit 
							dem aufzunehmenden Kind ist aus Sicht des Vereins wünschenswert, aber keine Voraussetzung für die Anmeldung eines Kindes im Waldkindergarten.
							</p>
							<h4>Formular für die Voranmeldung</h4>
							<p>Ein von den Eltern schriftlich gestellter Antrag zur Voranmeldung wird vom Vorstand in die Warteliste aufgenommen. Die Anmeldung eines Kindes wird frühestens 3 Monate nach der 
							Geburt angenommen. Dieser Antrag ist nicht gleichzusetzen mit einer verbindlichen Zusage für einen Waldkindergartenplatz. 
							</p>
							<h4>Zusage zur Aufnahme</h4>
							<p>
							Der Verein spricht eine verbindliche Zusage zur Aufnahme in den Waldkindergarten in der 
							Regel ca. ein halbes Jahr vor Beginn des Kindergartenjahrs aus, in dem das Kind 
							aufgenommen werden soll. Über die Aufnahme eines Kindes entscheidet der Vorstand mit der Einrichtungsleitung.
							</p>
							<h4>Verbindliche Aufnahme</h4>
							<p>
							Nach der Zustellung der Aufnahmeunterlagen und dem Kindergarten-ABC von Seiten des Vereins haben die Personensorgeberechtigten 4 Wochen Zeit die Unterlagen unterschrieben zurückzuschicken 
							oder im Waldkindergarten abzugeben. Der Eingang der Anmeldeunterlagen gilt als verbindliche Zusage.
							</p>
							<h3>Dokumente</h3>
							<ul>
								<li><a href="<?php echo $dokumentsdir.'Waldkindergartenordnung.pdf'; ?>">Waldkindergartenordnung </a></li>
								<li><a href="<?php echo $dokumentsdir.'Voranmeldeformular.pdf'; ?>">Voranmeldeunterlagen </a></li>								
								<li><a href="<?php echo $dokumentsdir.'Vereinsmitgliedschaft_Einzugsermaechtigung.pdf'; ?>">Einzugsermächtigung Vereinsmitgliedschaft </a></li>
								<li><a href="<?php echo $dokumentsdir.'Vereinsmitgliedschaft_Mitgliederdaten.pdf'; ?>">Anmeldeformular für Vereinsmitglieder </a></li>
								<li><a href="<?php echo $dokumentsdir.'Datenschutzerklaerung.pdf'; ?>">Datenschutzerklärung </a></li>
							</ul>
                        </div>
					</div>
				</section>
            <footer id="footer">
                    <?php
						include('./footer.html')
					?>
			</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>