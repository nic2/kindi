<?php 

# index.php
# Hauptsite des Webauftritts der Schönbuchstrolche Waldkindergarten Hildrizhausen e.V
# Erstellt 2018: Nicole und Florian Schön

?>
<!DOCTYPE HTML>
<!-- 
    Schönbuchstrolche Waldkindergarten Hildrizhausen e.V.
    (C) 2018 
-->
<html>
	<head>
		<title>Schönbuchstrolche Waldkindergarten Hildrizhausen e.V.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/jquery.modal.min.css" />
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<?php
						include('./header.html')
					?>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="image mban">
						<img src="images/logo_schoenbuchstrolche_trans_w.png" alt="Logo der Schönbuchstrolche">
					</div>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Herzlich Willkommen!</h2>
							<p class="align-justify">Mit unserem Online-Angebot können Sie sich über unseren Kindergarten informieren und
								sich einen ersten Eindruck von den Schönbuchstrolchen verschaffen. Gerne können Sie uns 
								kontaktieren, wenn Sie einen Schnuppertag für ihr Kind vereinbaren möchten oder weitere Fragen haben.
							</p>
						</header>
					</section>

					<section class="box special">
						<section class="spotlight left">
							<a href="unserWaldkindergarten.php"><img class="image" src="images/huette.jpg" alt="Bild der Hütte des Waldkindergartens Schönbuchstrolche" /></a>
							<div class="content">
								<h3>Unser Waldkindergarten</h3>
								<p>
									Den Waldkindergarten Schönbuchstrolche in Hildrizhausen gibt es seit mehr als 15 Jahren. Er stellt eine Ergänzung des allgemeinen Hildrizhausener Kindergartenangebots dar. 
									Es werden 20 Kinder im Alter von 3 Jahren bis zum Schuleintritt vormittags betreut. Darüberhinaus besteht an zwei Tagen die Möglichkeit einer Nachmittagsbetreuung.
									Eine Blockhütte mit angrenzendem Spielbereich bildet den Ausgangspunkt für die täglichen Waldbesuche.
								</p>
								<a href="unserWaldkindergarten.php" class="button alt small">Mehr erfahren</a>
							</div>
						</section>
						<section class="spotlight right">
							<a href="imWald.php" ><img class="image" src="images/imWald.jpg" alt="Bild von Kindern und Erziehern im Schönbuch" /></a>
							<div class="content">
								<h3>Im Wald</h3>
								<p>Der Wald bietet viel Platz zum Rennen, Klettern, Toben und Springen. Die Kinder nehmen ihre Umgebung mit allen Sinnen wahr. 
									Je nach Waldplatz und Witterung kann gemalt, geschnitzt, gebastelt, gebaut oder geplanscht werden.  
								</p>
								<a href="imWald.php" class="button alt small">Mehr erfahren</a>
							</div>
						</section>
						<section class="spotlight left">
							<a href="tagImWald.php" ><img class="image" src="images/einTag.jpg" alt="" /></a>
							<div class="content">
								<h3>Ein Tag im Waldkindergarten</h3>
								<p>
									Der tägliche Aufenthalt im Wald zu jeder Jahreszeit gibt den Kindern Raum mit der sie umgebenden Natur unmittelbar in Kontakt zu kommen. Kein Tag ist wie der andere. 
								</p>
								<a href="tagImWald.php" class="button alt small">Bericht lesen</a>
							</div>
						</section>
					</section>

					<!-- Team -->
					<section class="box special features">
						<h2>Das Team</h2>
						<p>
							Unser Team besteht aus 3 festangestellten Fachkräften. Daneben werden wir regelmäßig von einer engagierten Studentin unterstützt.
						</p>
						<div class="features-row">
							<?php include("team/team_klara_short.html") ?>
							<?php include("team/team_elena_short.html") ?>
							<?php include("team/team_richard_short.html") ?>
						</div>
					</section>

					<div class="row">
						<div class="6u 12u(narrower)">
                            <?php
                            include("termine.php")
                            ?>
						</div>
						<div class="6u 12u(narrower)">
							<?php
							include("blog.php")
							?>
						</div>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Sie möchten uns kennenlernen?</h2>
						<p>Dann vereinbaren Sie mit uns einen Schnuppertag oder ein Infogespräch.</p>
						<a href="contact.php?pg=1" class="button">Termin vereinbaren</a>
				</section>

			<!-- Footer -->
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
			<script src="assets/js/jquery.modal.min.js"></script>
	</body>
</html>