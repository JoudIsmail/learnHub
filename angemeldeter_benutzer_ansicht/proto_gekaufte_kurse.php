<?php
echo "<!DOCTYPE html>\n";
echo "<html lang=\"de\">\n";
echo "	<head>\n";
echo "		<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style3.css\"> \n";
echo "		<link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Poppins'>\n";
echo "		<link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">\n";
echo "		<meta charset=\"UTF-8\">\n";
echo "		<title> Gekaufte Kurse - Learnhub </title>\n";
echo "		<style>\n";
echo "		</style>\n";
echo "	</head>\n";
echo "	<body>\n";
echo "		<div class=\"fullscreen\">\n";
echo "			<nav>\n";
echo "				<div class=\"container\">\n";
echo "					<img class=\"logo\" alt=\"Logo der Internetseite. In schwarz geschrieben: Learnhub. Das hub in Learnhub steht vor orangenem Hintergrund.\" src=\"../bilder/learnhublogo.png\">\n";
echo "					<a title=\"hier finden sie nützliche Informationen über unsere Organisation\" href=\"proto_about-us.php\">Über uns</a>\n";
echo "					<a title=\"hier können sie zum Shop gelangen\" href=\"proto_shopansicht.php\">Shop</a>\n";
echo "					<a title=\"hier finden sie ihre erstellten Kurse\" href=\"proto_erstellte_kurse.php\">erstellte Kurse</a>\n";
echo "					<a title=\"hier finden sie ihre gekauften Kurse\" class=\"active\" href=\"proto_gekaufte_kurse.php\">gekaufte Kurse</a>\n";
echo "					<a title=\"hier gelangen sie zum Gästebuch in dem User Bewertungen für die Seite hinterlassen können\" href=\"proto_gaestebuch.php\">Gästebuch</a>\n";
echo "					<a title=\"hier können sie sich ausloggen\" href=\"#abmelden\">abmelden</a>\n";
echo "					<a class=\"a-abc\" href=\"#\"><img class=\"img-abc\" src=\"../bilder/abc.png\" alt=\"\" title=\"Font für Legastheniker benutzen\"></a>\n";
echo "				</div>\n";
echo "			</nav>\n";
echo "			<div>\n";
echo "				<h1 class=\"h1gekauft\"> Hier findest du deine gekauften Kurse </h1>\n";
echo "			</div>\n";
echo "			<div class=\"grid_container_EK\">\n";
echo "				<div class=\"grid_element_EK1\">\n";
echo "					<a href=\"proto_kursansicht_teilnehmender-Benutzer.php\"> <img alt=\"obligatorisches Python Bild\" class=\"grid_element_bild_EK\" src=\"../bilder/python.png\"> </a>\n";
echo "					<h3 class=\"grid_element_titel_EK\" >Python Bootcamp</h3>\n";
echo "				</div>\n";
echo "	\n";
echo "				<div class=\"grid_element_EK1\">\n";
echo "					<a href=\"proto_kursansicht_teilnehmender-Benutzer.php\"> <img alt=\"obligatorisches Java Bild\" class=\"grid_element_bild_EK\" src=\"../bilder/java.png\"> </a>\n";
echo "					<h3 class=\"grid_element_titel_EK\" >Java 101</h3>\n";
echo "				</div>\n";
echo "	\n";
echo "				<div class=\"grid_element_EK1\">\n";
echo "					<a href=\"proto_kursansicht_teilnehmender-Benutzer.php\"> <img alt=\"obligatorisches Web-Entwicklungs Bild\" class=\"grid_element_bild_EK\" src=\"../bilder/web-entwicklung.png\"> </a>\n";
echo "					<h3 class=\"grid_element_titel_EK\"> Einstieg WWW</h3>\n";
echo "				</div>\n";
echo "	\n";
echo "				<div class=\"grid_element_EK1\">\n";
echo "					<a href=\"proto_kurserstell.php\"> <img alt=\"obligatorisches Kurserstell Bild\" class=\"grid_element_bild_EK\" src=\"../bilder/java.png\"> </a>\n";
echo "					<h3 class=\"grid_element_titel_EK\" > Eigenen Kurs erstellen </h3>\n";
echo "				</div>	\n";
echo "			</div>\n";
echo "			<footer class=\"footer-distributed\">\n";
echo "\n";
echo "				<div class=\"footer-left\">	\n";
echo "			  <img alt=\"Logo der Internetseite. In schwarz geschrieben: Learnhub. Das hub in Learnhub steht vor orangenem Hintergrund.\" src=\"../bilder/learnhublogo.png\">\n";
echo "					<h3>About<span class=\"learn\">Learn</span><span class=\"hub\"><mark>hub</mark></span></h3>\n";
echo "	\n";
echo "					<p class=\"footer-company-name\">© 2020 E-Learning Platform. Ltd.</p>\n";
echo "				</div>\n";
echo "	\n";
echo "				<div class=\"footer-center\">\n";
echo "					<div>\n";
echo "						<i class=\"fa fa-map-marker\"></i>\n";
echo "						  <p><span>Hochschule</span>\n";
echo "							Trier</p>\n";
echo "					</div>\n";
echo "					<div>\n";
echo "						<i class=\"fa fa-envelope\"></i>\n";
echo "						<p><a href=\"ismailj@hochschule-trier.de\">ismailj@hochschule-trier.de</a></p>\n";
echo "						<!-- <i class=\"fa fa-envelope\"></i>\n";
echo "						<p><a href=\"mxtr0669@hochschule-trier.de\">mxtr0669@hochschule-trier.de</a></p>\n";
echo "						<i class=\"fa fa-envelope\"></i>\n";
echo "						<p><a href=\"fachriw@hochschule-trier.de\">fachriw@hochschule-trier.de</a></p> -->\n";
echo "					</div>\n";
echo "				</div>\n";
echo "				<div class=\"footer-right\">\n";
echo "					<p class=\"footer-company-about\">\n";
echo "						<span>Über das Unternehmen</span>\n";
echo "					Wir bieten Schulungen und Kurse zum Aufbau von Fähigkeiten in den Bereichen Technologie, Design, Business und Wissenschaft an\n";
echo "					</p>\n";
echo "					<div class=\"footer-icons\">\n";
echo "						<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>\n";
echo "						<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>\n";
echo "						<a href=\"#\"><i class=\"fa fa-instagram\"></i></a>\n";
echo "						<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>\n";
echo "						<a href=\"#\"><i class=\"fa fa-youtube\"></i></a>\n";
echo "					</div>\n";
echo "				</div>\n";
echo "			</footer>\n";
echo "		</div>\n";
echo "	</body>\n";
echo "</html>\n";
?>