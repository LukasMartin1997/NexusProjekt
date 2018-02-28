<?php
session_start();

$autor = $_SESSION["benutzer"];
$inhalt = $_POST["inhalt"];

$returnPage = "http://www.lukasmartin.net/frames/chat.php";


$datei = fopen("chat.txt","w");
	fwrite($datei,"$inhalt");
	fclose($datei);
	
header("Location: " . $returnPage);

?>