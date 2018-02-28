<?php
$email = $_POST["email"];
$benutzer = $_POST["benutzer"];
$passwort = $_POST["passwort"];
session_start();
$returnPage = 'http://www.lukasmartin.net/frames/anmeldung/erfolg.html';
$returnPageError = 'http://www.lukasmartin.net/frames/anmeldung/error.html';

$mysqli = new mysqli("mysql.webhosting75.1blu.de", "s268836_2645131", "Cssistcool123!", "db268836x2645131");

$forumsmitglieder = $mysqli->query("SELECT Benutzer, Email, Passwort FROM Acc");
$anzumeldenderBenutzer = $forumsmitglieder->fetch_array();

while($anzumeldenderBenutzer != NULL)
{ 
if($anzumeldenderBenutzer["Benutzer"] == $benutzer && $anzumeldenderBenutzer["Email"] == $email && $anzumeldenderBenutzer["Passwort"] == $passwort)
{ 
$vorhanden = true;
break; 
}
$anzumeldenderBenutzer = $forumsmitglieder->fetch_array(); 
}

if($vorhanden == true)
{
	$_SESSION["angemeldet"] = 1;
	$_SESSION["benutzer"] = $benutzer;
header("Location: " . $returnPage);
}

else
{
	header("Location: " . $returnPageError);
}
?>