<?php
session_start();

$autor = $_SESSION["benutzer"];
$text = $_POST["kommentar"];
$quelle = $_POST["Quellen"];
$titel = str_replace(".txt","",$quelle);

$returnPage = "http://www.lukasmartin.net/frames/tipps/tipps.php?titel=$titel";



file_put_contents("data/"."$quelle", "\n". $text."\n"."-". $autor."\n",FILE_APPEND);

header("Location: " . $returnPage);

?>