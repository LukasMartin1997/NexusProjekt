<?php
session_start();
$autor = $_SESSION["benutzer"];
$autorsp = str_replace(" ","_",$autor);
$titel = $_POST["Titel"];
$titelsp = str_replace(" ","_",$titel);
$titel = $titelsp;
$titelsp = $titelsp . "_-" . $autorsp;
$champ = $_POST["Champion"];
$tree = $_POST["Tree"];
$keystone = $_POST["Keystone"];

$priIrune = $_POST["priI"];
$priIIrune = $_POST["priII"];
$priIIIrune = $_POST["priIII"];

$sectree = $_POST["secTree"];

$SecI = $_POST["SecI"];
$SecII = $_POST["SecII"];

$startitemI = $_POST["startitemI"];
$startitemII = $_POST["startitemII"];
$startitemIII = $_POST["startitemIII"];
$startitemIIII = $_POST["startitemIIII"];
$startitemIIIII = $_POST["startitemIIIII"];
$startitemIIIIII = $_POST["startitemIIIIII"];
$startitemIIIIIII = $_POST["startitemIIIIIII"];

$erI = $_POST["textstartitems"];

$fullitemI = $_POST["fullitemI"];
$fullitemII = $_POST["fullitemII"];
$fullitemIII = $_POST["fullitemIII"];
$fullitemIIII = $_POST["fullitemIIII"];
$fullitemIIIII = $_POST["fullitemIIIII"];
$fullitemIIIIII = $_POST["fullitemIIIIII"];

$erII = $_POST["textfullitems"];
$erIII = $_POST["textsonstiges"];
$erIIII = $_POST["textrunen"];

$erI = str_replace("\n"," ",$erI);
$erII = str_replace("\n"," ",$erII);
$erIII = str_replace("\n"," ",$erIII);
$erIIII = str_replace("\n"," ",$erIII);

$returnPage = 'http://www.lukasmartin.net/frames/tipps/tipps.php?titel='. "$titelsp";
$returnPageError = 'http://www.lukasmartin.net/frames/tipps/tippsform.php';

if (file_exists("data/" . "$titelsp" . ".txt") == true)
{
	header("Location: " . $returnPageError);
}

else
{
	$datei = fopen("data/"."$titelsp" . ".txt","w");
	fwrite($datei,"$autor"."\n"."$titel" . "\n" . "$champ" . "\n" . "$startitemI" . "\n" . "$startitemII" . "\n" . "$startitemIII" . "\n" . "$startitemIIII" . "\n" . "$startitemIIIII" . "\n" . "$startitemIIIIII" . "\n" . "$startitemIIIIIII" . "\n" . "$erI"  . "\n" . "$fullitemI" . "\n" . "$fullitemII" . "\n" . "$fullitemIII" . "\n" . "$fullitemIIII" . "\n" . "$fullitemIIIII" . "\n" . "$fullitemIIIIII" . "\n". "$erII" . "\n" . "$erIII" . "\n" . "$tree" . "\n" . "$keystone" . "\n" . "$priIrune" . "\n" . "$priIIrune" . "\n" . "$priIIIrune" . "\n" . "$sectree" . "\n" . "$SecI" . "\n" . "$SecII". "\n" . "$erIIII");
	fclose($datei);
	header("Location: " . $returnPage);
}
?>