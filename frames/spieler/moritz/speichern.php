<?php
session_start();

$autor = $_SESSION["benutzer"];
$inhalt = $_POST["inhalt"];

$returnPage = "http://www.lukasmartin.net/frames/spieler/moritz.php";


$datei = fopen("kommentare.txt","w");
	fwrite($datei,"$inhalt");
	fclose($datei);
	
header("Location: " . $returnPage);

?>