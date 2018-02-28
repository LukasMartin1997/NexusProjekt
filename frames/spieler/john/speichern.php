<?php
session_start();

$autor = $_SESSION["benutzer"];
$inhalt = $_POST["inhalt"];

$returnPage = "http://www.lukasmartin.net/frames/spieler/john.php";


$datei = fopen("kommentare.txt","w");
	fwrite($datei,"$inhalt");
	fclose($datei);
	
header("Location: " . $returnPage);

?>