<?php
session_start();
$returnPage = 'http://www.lukasmartin.net/frames/spieler/alex.php';

if($_SESSION["angemeldet"] == 1)
{
if( isset($_POST)) 
{	
file_put_contents("kommentare.txt",$_SESSION["benutzer"]."\n".$_POST["kommentar"]."\n\n",FILE_APPEND);
}
else
{
	echo("Du musst angemeldet sein um Kommentare zu schreiben");
}
}
header("Location: " . $returnPage);
?>