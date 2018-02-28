
<?php
session_start();
$returnPage = 'http://www.lukasmartin.net/frames/anmeldung/erfolgaus.html';

$_SESSION["angemeldet"] = 0;
$_SESSION["benutzer"] = "1";
header("Location: " . $returnPage);
?>
