<?php 

# contact.php
# Kontaktformular für die Webseite der Schönbuchstrolche
# Erstellt 2018: Nicole und Florian Schön


//Notwendige Variablen mit entsprechenden Werten initialisieren
$page=0;
$form_name ='';
$form_mail ='';
$form_subject='';
$form_message='';
$form_recipient ='oeffentlichkeitsarbeit@schoenbuchstrolche.de';

// Abfrage ob eine spezielle Version des Contactforms angefragt wurde
// Wird kein Parameter angegeben wird das normale Kontaktformular ausgegeben
// Die weitere Kodierung sieht wie folgt aus
// 1: Termin Vereinbaren

if (isset($_GET['pg'])){
    $pg = htmlspecialchars(stripcslashes(trim($_GET['pg'])));
    switch ($pg) {
        case 1:
            $page=1;
            $form_subject = "Schnuppertermin vereinbaren vereinbaren";
			$form_message = "Hallo ich möchte gernen einen Schnuppertermin vereinbaren. Bitte kontaktieren Sie mich unter der oben angegebenen Adresse";
			//$form_recipient = 'info@schoenbuchstrolche.de';
            break;
        default:
            $form_name ='';
            $form_mail ='';
            $form_subject='';
            $form_message='';
    }
}

// Verarbeitung der Eingaben des Formulars
if(isset($_POST['submit'])){
	if(!empty($_POST['phone'])){																		//Falls der Honeypot (Spamschutz durch verstecktes Feld aktiviert wurde, sofort abbrechen)
		die;
	}	
	
	$form_name = htmlspecialchars(stripslashes(trim($_POST['name'])));
  	$form_subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
  	$form_mail = htmlspecialchars(stripslashes(trim($_POST['email'])));
	$form_message = htmlspecialchars(stripslashes(trim($_POST['message'])));
	
	if(!isset($_POST['ack_trans'])){
		$ack_error = 'Bitte stimmen Sie der weiteren Verarbeitung Ihrer Daten zu';																			
	}
  	if(!preg_match("/^[A-Za-zäÄöÖüÜß .'-]+$/", $form_name)){
		  $name_error = 'Der Name darf nicht leer sein und keine Sonderzeichen enthalten';
	}
  	if(!preg_match("/^[A-Za-zäÄöÖüÜß .'-]+$/", $form_subject)){
    	$subject_error = 'Das Thema darf nicht leer sein und keine Sonderzeichen enthalten';
  	}
  	if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $form_mail)){
    	$email_error = 'Es wurde keine gültige Mailadresse angegeben';
  	}
  	if(strlen($form_message) === 0){
    	$message_error = 'Die Nachricht sollte nicht leer sein';
  	}
}

?>

<!DOCTYPE HTML>
<!-- 
    Schönbuchstrolche Waldkindergarten Hildrizhausen e.V.
    (C) 2018 
-->
<html>
	<head>
		<title>Schönbuchstrolche - Kontakt</title>
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
			<section id="main" class="container">
				<header>
					<h2>Kontakt</h2>
				</header>
				<div class="box">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		                <div class="row uniform 50%">
			                <div class="6u 12u(mobilep)">
				                <input type="text" name="name" id="name" value="<?php echo $form_name?>" placeholder="Name" />
			                </div>
			                <div class="6u 12u(mobilep)">
				                <input type="email" name="email" id="email" value="<?php echo $form_mail?>" placeholder="Email" />
			                </div>
		                </div>
		                <div class="row uniform 50%">
			                <div class="12u">
				                <input type="text" name="subject" id="subject" value="<?php echo $form_subject?>" placeholder="Thema" />
			                </div>
		                </div>
		                <div class="row uniform 50%">
			                <div class="12u">
				                <textarea name="message" id="message" placeholder="Nachricht" value="" rows="6"><?php echo $form_message?></textarea>
			                </div>
						</div>
						<div class="row uniform">
							<div class="12u">
								<input type="checkbox" id="ack_trans" name="ack_trans">
								<label for="ack_trans">Ich stimme zu, dass meine Angaben aus dem Kontaktformular zur Beantwortung meiner Anfrage erhoben und verarbeitet werden. 
								Ihre Daten werden verschlüsselt über SSL übertragen und lediglich für den angegeben Zweck verwendet.
								Weitere Informationen finden Sie in unserer <a href="datenschutz.php">Datenschutzerklärung</a> </label>
							</div>
							<input type="text" name="phone" id="phone" value="" style="display:none !important" tabindex="-1" autocomplete="off">
						</div>
		                <div class="row uniform">
			                <div class="12u">
				                <ul class="actions align-center">
					                <li><input name="submit" type="submit" value="Nachricht abschicken" /></li>
				                </ul>
							</div>
						</div>
						<?php 
							if(isset($_POST['submit'])) {
								if(!isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error) && !isset($ack_error)){
									$to = $form_recipient;
									$headers = "From:".$form_mail. "\r\n";
									$form_message = wordwrap($form_message, 70, "\r\n");
									$body = "Es ist eine neue Mail über unsere Webseite verschickt worden:\n  Name: $form_name  \n E-mail: $form_mail \n Nachricht:\n $form_message";
									$headers .= "Mime-Version: 1.0\r\n";
									$headers .= "Content-type: text/plain; charset=utf-8";
          							if(mail($to, $form_subject, $body, $headers)){
	            						echo '<p>Vielen Dank '.$form_name.'</br>Mit folgender Mailsadresse '.$form_mail.' haben wir die folgenden Nachricht von Ihnen erhalten</br><div class="box impressum">'.$form_message.'</div></p>';
    	      						}else{
        	    						echo '<p>Leider ist ein Fehler beim Nachrichtenversand aufgetreten</p>';
									  }
								}else{
									if(isset($ack_error)){
										echo '<p><strong>'.$ack_error.'</strong></p>';
									}
									if(isset($name_error)){
										echo '<p><strong>'.$name_error.'</strong></p>';
									}
									if(isset($subject_error)){
										echo '<p><strong>'.$subject_error.'</strong></p>';
									}
									if(isset($email_error)){
										echo '<p><strong>'.$email_error.'</strong></p>';
									}
									if(isset($message_error)){
										echo '<p><strong>'.$message_error.'</strong></p>';
									}
								}
							}
      					?>
	                </form>
                    . 
                </div>
                <div class="box">
					<p>Natürlich können Sie uns auch gerne direkt per <a href="mailto:info@schoenbuchstrolche.de">Mail </a> erreichen</p>
				</div>

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
	</body>
</html>