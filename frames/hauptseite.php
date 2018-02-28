<html>
<head>
<?php
session_start();
?>
<link rel="stylesheet" href="../css/style.css">
<title>Website</title>
</head>
<body>
<div id="mittestyle">
<img src="../bilder/sonne.png" align=left width=25%>
<?php
if($_SESSION["angemeldet"] == 1)
{
$logout = 'http://www.lukasmartin.net/frames/anmeldung/logout.html';
$pwchange ='http://www.lukasmartin.net/frames/anmeldung/pwchange.html';
   echo("<br><a href=$logout target='inhalt'>-Logout</a>");
   echo("<br><a href=$pwchange target='inhalt'>-Passwort &aumlndern</a>");
   
   if($_SESSION["benutzer"] == "Big SolidSnake")
   {
	   $reg = 'http://www.lukasmartin.net/frames/anmeldung/index.html';
	   echo("<br><a href=$reg target='inhalt'>-Registrierung</a>");
   }
}
?>
<br>
<br>
<br>
<br>
<br>
Die Alpha Centauri B Community ist ein Zusammenschluss von Gamern aus ganz Deutschland um gemeinsam erfolgreich zu zocken.<br>Besonders League of Legends steht im Fokus.<br>Hier findest du neben den offiziellen Teammitgliedern des ACB E-Sport Clubs auch Guides und Spielstrategien um selbst mehr Erfolg in LoL zu haben.<br clear=all>
M&oumlchtest du auch Teil der Alpha Centauri B Community werden? Dann klick auf den "Bewerbung" Link und bewirb dich!<br><br>
<img src="../bilder/aurelionsol.png" width=100%>
</div>
</body>
</html>
