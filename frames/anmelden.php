<?php
$email = $_POST["email"];
$benutzer = $_POST["benutzer"];
setcookie("angemeldet","$benutzer",0);
$returnPage = 'http://www.lukasmartin.net/frames/anmeldung/erfolg.html';
$returnPageError = 'http://www.lukasmartin.net/frames/anmeldung/error.html';

$mysqli = new mysqli("mysql.webhosting75.1blu.de", "s268836_2645131", "Cssistcool123!", "db268836x2645131");

$forumsmitglieder = $mysqli->query("SELECT Benutzer, Email FROM Acc");
$anzumeldenderBenutzer = $forumsmitglieder->fetch_array();

while($anzumeldenderBenutzer != NULL)
{ 
if($anzumeldenderBenutzer["Benutzer"] == $benutzer && $anzumeldenderBenutzer["Email"] == $email)
{ 
$vorhanden = true;
break; 
}
$anzumeldenderBenutzer = $forumsmitglieder->fetch_array(); 
}
if($vorhanden == true)
{
header("Location: " . $returnPage);
}
else
{
	setcookie("angemeldet","", -360000);
	header("Location: " . $returnPageError);
}
?>