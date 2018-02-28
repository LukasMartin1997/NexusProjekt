<?php
$email = $_POST["email"];
$benutzer = $_POST["benutzer"];
$passwort = $_POST["passwort"];
$returnPage = 'http://www.lukasmartin.net/frames/anmeldung/index.html';

$mysqli = new mysqli("mysql.webhosting75.1blu.de", "s268836_2645131", "Cssistcool123!", "db268836x2645131");

$forumsmitglieder = $mysqli->query("SELECT Benutzer, Email FROM Acc");
$anzumeldenderBenutzer = $forumsmitglieder->fetch_array();
while($anzumeldenderBenutzer != NULL)
{ 
if($anzumeldenderBenutzer["benutzer"] == $benutzer)
{ 
echo "Der Benutzername $benutzer existiert bereits</br>";
echo "<a href = 'registrieren.html'>Hier geht's wieder zum Registrierformular</a></br>";
$mysqli->close();
exit(); 
}
$anzumeldenderBenutzer = $forumsmitglieder->fetch_array(); 
}

$neuesMitglied = "INSERT INTO Acc (Benutzer, Email, Passwort, Status) VALUES ('$benutzer', '$email', '$passwort','0')";
$mysqli->query($neuesMitglied);

header("Location: " . $returnPage);

?>