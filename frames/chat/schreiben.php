<?php
session_start();

$autor = $_SESSION["benutzer"];
$text = $_POST["chattext"];

$returnPage = "http://www.lukasmartin.net/frames/chat.php";



file_put_contents("chat.txt","-". $autor ."\n". $text ."\n\n",FILE_APPEND);

header("Location: " . $returnPage);

?>