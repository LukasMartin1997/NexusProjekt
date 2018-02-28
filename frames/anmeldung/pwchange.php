<?php
$pwalt = $_POST["pwalt"];
$pwneu = $_POST["pwneu"];
session_start();
$benutzer = $_SESSION["benutzer"];

$returnPage = 'http://www.lukasmartin.net/frames/anmeldung/erfolg.html';
$returnPageError = 'http://www.lukasmartin.net/frames/anmeldung/error.html';

$mysqli = new mysqli("mysql.webhosting75.1blu.de", "s268836_2645131", "Cssistcool123!", "db268836x2645131");

$passw = $mysqli->query("SELECT Passwort FROM Acc WHERE Benutzer = '$benutzer'");
$passwcheck = $passw->fetch_array();

while($passwcheck != NULL)
{ 
if($passwcheck["Passwort"] == $pwalt)
{ 
$vorhanden = true;
break; 
}
$passwcheck = $passw->fetch_array(); 
}

if($vorhanden == true)
{
	$pwchange = "UPDATE Acc SET Passwort= '$pwneu' WHERE Benutzer = '$benutzer'";
	$mysqli->query($pwchange);
	header("Location: " . $returnPage);
}

else
{
	header("Location: " . $returnPageError);
}
?>