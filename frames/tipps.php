<html>
<head>
<?php
session_start();
?>
<link rel="stylesheet" href="../css/style.css">
<title>Website</title>
</head>
<body>
<div id="mittestyle">
Hier findest du Tipps der Community<br><br>
<div id="tipps">
<?php
if($_SESSION["angemeldet"] == 1)
{
	echo("<a href='tipps/tippsform.php' target='_self'>Eigenen Guide erstellen </a><br>");
}
echo("<br />");
$alledateien = scandir('tipps/data'); 
$alledaten = str_replace(".txt","",$alledateien);
$i =0;
echo("<table>");
foreach ($alledaten as $datei) 
{
	$daten = file_get_contents("tipps/data/" . $alledateien[$i]);
	$data = explode("\n",$daten);
	$champ = $data[2];
	
	$ausg = str_replace("_"," ",$datei);
	if($i>1)
	{
   echo ("<tr><td><a href=tipps/tipps.php?titel=$datei>$ausg</a></td><td><img src='tipps/bilder/champs/" . $champ . ".png' width=32px height=32px></td></tr>"); 
	}
	$i ++;
};
echo("</table>");
?>
</div>
</div>
</body>
</html>
