<html>
<head>
<?php
session_start();
?>
<link rel="stylesheet" href="../../css/style.css">
<title>Website</title>
</head>
<body>
<div id="mittestyle">
<?php
$datei = $_GET["titel"];
$quelle = $_GET["titel"] . ".txt";
$daten = file_get_contents("data/$quelle");
$data = explode("\n",$daten);
$benutzer = $_SESSION["benutzer"];
$angemeldet = $_SESSION["angemeldet"];

$autor = $data[0];
$titel = $data[1];
$champ = $data[2];

$titel = str_replace("_"," ",$titel);
$champname = str_replace(" ","",$champ);
$champname = str_replace("'","",$champname);

$startitemI = $data["3"];
$startitemII = $data["4"];
$startitemIII = $data["5"];
$startitemIIII = $data["6"];
$startitemIIIII = $data["7"];
$startitemIIIIII = $data["8"];
$startitemIIIIIII = $data["9"];

$erI = $data["10"];

$fullitemI = $data["11"];
$fullitemII = $data["12"];
$fullitemIII = $data["13"];
$fullitemIIII = $data["14"];
$fullitemIIIII = $data["15"];
$fullitemIIIIII = $data["16"];

$erII = $data["17"];
$erIII = $data["18"];

$tree = $data["19"];
$keystone = $data["20"];
$priIrune = $data["21"];
$priIIrune = $data["22"];
$priIIIrune = $data["23"];
$sectree = $data["24"];
$SecI = $data["25"];
$SecII = $data["26"];

$erIIII = $data["27"];
$i = 0;

if($keystone == "KeystoneI")
{
	if($tree == "Pr&aumlzision")
	{
		$keystone = "Fokussierter Angriff";
	}
	
	else if($tree == "Dominanz")
	{
		$keystone = "Elektrisieren";
	}
	
	else if($tree == "Zauberei")
	{
		$keystone = "Benefee-Beschw&oumlrung";
	}
	
	else if($tree == "Entschlossenheit")
	{
		$keystone = "Umklammerung der Untoten";
	}
	
	else if($tree == "Inspiration")
	{
		$keystone = "Entsiegeltes Zauberbuch";
	}
}

if($keystone == "KeystoneII")
{
	if($tree == "Pr&aumlzision")
	{
		$keystone = "T&oumldliches Tempo";
	}
	
	else if($tree == "Dominanz")
	{
		$keystone = "R&aumlber";
	}
	
	else if($tree == "Zauberei")
	{
		$keystone = "Arkaner Komet";
	}
	
	else if($tree == "Entschlossenheit")
	{
		$keystone = "Nachbeben";
	}
	
	else if($tree == "Inspiration")
	{
		$keystone = "Eiszeit";
	}
}

if($keystone == "KeystoneIII")
{
	if($tree == "Pr&aumlzision")
	{
		$keystone = "Leichtf&uumlssigkeit";
	}
	
	else if($tree == "Dominanz")
	{
		$keystone = "Dunkle Seelenernte";
	}
	
	else if($tree == "Zauberei")
	{
		$keystone = "Phasenrausch";
	}
	
	else if($tree == "Entschlossenheit")
	{
		$keystone = "Bewahrer";
	}
	
	else if($tree == "Inspiration")
	{
		$keystone = "Kleptomanie";
	}
}

if($tree == "Pr&aumlzision")
{
	if($priIrune == "PriIRuneI")
	{
		$priIrune = "&Uumlberheilung";
	}
	
	else if($priIrune == "PriIRuneII")
	{
		$priIrune = "Triumph";
	}
	
	else if($priIrune == "PriIRuneIII")
	{
		$priIrune = "Geistesgegenwart";
	}
	
	if($priIIrune == "PriIIRuneI")
	{
		$priIIrune = "Legende: Eifer";
	}
	
	else if($priIIrune == "PriIIRuneII")
	{
		$priIIrune = "Legende: Z&aumlhigkeit";
	}
	
	else if($priIIrune == "PriIIRuneIII")
	{
		$priIIrune = "Legende: Blutdurst";
	}
	
	if($priIIIrune == "PriIIIRuneI")
	{
		$priIIIrune = "Gnadenstoss";
	}
	
	else if($priIIIrune == "PriIIIRuneII")
	{
		$priIIIrune = "Niederm&aumlher";
	}
	
	else if($priIIIrune == "PriIIIRuneIII")
	{
		$priIIIrune = "Letztes Gefecht";
	}
}

if($tree == "Dominanz")
{
	if($priIrune == "PriIRuneI")
	{
		$priIrune = "Perfider Trick";
	}
	
	else if($priIrune == "PriIRuneII")
	{
		$priIrune = "Geschmack von Blut";
	}
	
	else if($priIrune == "PriIRuneIII")
	{
		$priIrune = "Pl&oumltzlicher Einschlag";
	}
	
	if($priIIrune == "PriIIRuneI")
	{
		$priIIrune = "Zombie-Auge";
	}
	
	else if($priIIrune == "PriIIRuneII")
	{
		$priIIrune = "Gespenster-Poro";
	}
	
	else if($priIIrune == "PriIIRuneIII")
	{
		$priIIrune = "Argus' Verm&aumlchtnis";
	}
	
	if($priIIIrune == "PriIIIRuneI")
	{
		$priIIIrune = "Gefr&aumlssiger J&aumlger";
	}
	
	else if($priIIIrune == "PriIIIRuneII")
	{
		$priIIIrune = "Raffinierter J&aumlger";
	}
	
	else if($priIIIrune == "PriIIIRuneIII")
	{
		$priIIIrune = "Erbarmungsloser J&aumlger";
	}
}

if($tree == "Zauberei")
{
	if($priIrune == "PriIRuneI")
	{
		$priIrune = "Kugel der Aufhebung";
	}
	
	else if($priIrune == "PriIRuneII")
	{
		$priIrune = "Manafluss";
	}
	
	else if($priIrune == "PriIRuneIII")
	{
		$priIrune = "Der ultimative Hut";
	}
	
	if($priIIrune == "PriIIRuneI")
	{
		$priIIrune = "&Uumlberlegenheit";
	}
	
	else if($priIIrune == "PriIIRuneII")
	{
		$priIIrune = "Flinkheit";
	}
	
	else if($priIIrune == "PriIIRuneIII")
	{
		$priIIrune = "Absoluter Fokus";
	}
	
	if($priIIIrune == "PriIIIRuneI")
	{
		$priIIIrune = "Hitzewelle";
	}
	
	else if($priIIIrune == "PriIIIRuneII")
	{
		$priIIIrune = "Wasserlauf";
	}
	
	else if($priIIIrune == "PriIIIRuneIII")
	{
		$priIIIrune = "Aufziehender Sturm";
	}
}

if($tree == "Entschlossenheit")
{
	if($priIrune == "PriIRuneI")
	{
		$priIrune = "Unerschrocken";
	}
	
	else if($priIrune == "PriIRuneII")
	{
		$priIrune = "Abriss";
	}
	
	else if($priIrune == "PriIRuneIII")
	{
		$priIrune = "Lebensquelle";
	}
	
	if($priIIrune == "PriIIRuneI")
	{
		$priIIrune = "Eisenhaut";
	}
	
	else if($priIIrune == "PriIIRuneII")
	{
		$priIIrune = "Spiegelschale";
	}
	
	else if($priIIrune == "PriIIRuneIII")
	{
		$priIIrune = "Konditionierung";
	}
	
	if($priIIIrune == "PriIIIRuneI")
	{
		$priIIIrune = "Zuwachs";
	}
	
	else if($priIIIrune == "PriIIIRuneII")
	{
		$priIIIrune = "Frische";
	}
	
	else if($priIIIrune == "PriIIIRuneIII")
	{
		$priIIIrune = "Aufschwung";
	}
}

if($tree == "Inspiration")
{
	if($priIrune == "PriIRuneI")
	{
		$priIrune = "Hextech-Blitzfalle";
	}
	
	else if($priIrune == "PriIRuneII")
	{
		$priIrune = "Kekslieferung";
	}
	
	else if($priIrune == "PriIRuneIII")
	{
		$priIrune = "Perfektes Timing";
	}
	
	if($priIIrune == "PriIIRuneI")
	{
		$priIIrune = "Magisches Schuhwerk";
	}
	
	else if($priIIrune == "PriIIRuneII")
	{
		$priIIrune = "Zukunftsmarkt";
	}
	
	else if($priIIrune == "PriIIRuneIII")
	{
		$priIIrune = "Vasallenaufl&oumlser";
	}
	
	if($priIIIrune == "PriIIIRuneI")
	{
		$priIIIrune = "Kosmische Einsicht";
	}
	
	else if($priIIIrune == "PriIIIRuneII")
	{
		$priIIIrune = "Anziehungskraft";
	}
	
	else if($priIIIrune == "PriIIIRuneIII")
	{
		$priIIIrune = "Himmelskörper";
	}
}


if($sectree == "Pr&aumlzision")
{
	if($SecI == "SecIRuneI")
	{
		$SecI = "&Uumlberheilung";
	}
	
	else if($SecI == "SecIRuneII")
	{
		$SecI = "Triumph";
	}
	
	else if($SecI == "SecIRuneIII")
	{
		$SecI = "Geistesgegenwart";
	}
	
	else if($SecI == "SecIIRuneI")
	{
		$SecI = "Legende: Eifer";
	}
	
	else if($SecI == "SecIIRuneII")
	{
		$SecI = "Legende: Z&aumlhigkeit";
	}
	
	else if($SecI == "SecIIRuneIII")
	{
		$SecI = "Legende: Blutdurst";
	}
	
	else if($SecI == "SecIIIRuneI")
	{
		$SecI = "Gnadenstoss";
	}
	
	else if($SecI == "SecIIIRuneII")
	{
		$SecI = "Niederm&aumlher";
	}
	
	else if($SecI == "SecIIIRuneIII")
	{
		$SecI = "Letztes Gefecht";
	}
	
	if($SecII == "SecIRuneI")
	{
		$SecII = "&Uumlberheilung";
	}
	
	else if($SecII == "SecIRuneII")
	{
		$SecII = "Triumph";
	}
	
	else if($SecII == "SecIRuneIII")
	{
		$SecII = "Geistesgegenwart";
	}
	
	else if($SecII == "SecIIRuneI")
	{
		$SecII = "Legende: Eifer";
	}
	
	else if($SecII == "SecIIRuneII")
	{
		$SecII = "Legende: Z&aumlhigkeit";
	}
	
	else if($SecII == "SecIIRuneIII")
	{
		$SecII = "Legende: Blutdurst";
	}
	
	else if($SecII == "SecIIIRuneI")
	{
		$SecII = "Gnadenstoss";
	}
	
	else if($SecII == "SecIIIRuneII")
	{
		$SecII = "Niederm&aumlher";
	}
	
	else if($SecII == "SecIIIRuneIII")
	{
		$SecII = "Letztes Gefecht";
	}
}

if($sectree == "Dominanz")
{
		if($SecI == "SecIRuneI")
	{
		$SecI = "Perfider Trick";
	}
	
	else if($SecI == "SecIRuneII")
	{
		$SecI = "Geschmack von Blut";
	}
	
	else if($SecI == "SecIRuneIII")
	{
		$SecI = "Pl&oumltzlicher Einschlag";
	}
	
	else if($SecI == "SecIIRuneI")
	{
		$SecI = "Zombie-Auge";
	}
	
	else if($SecI == "SecIIRuneII")
	{
		$SecI = "Gespenster-Poro";
	}
	
	else if($SecI == "SecIIRuneIII")
	{
		$SecI = "Argus' Verm&aumlchtnis";
	}
	
	else if($SecI == "SecIIIRuneI")
	{
		$SecI = "Gefr&aumlssiger J&aumlger";
	}
	
	else if($SecI == "SecIIIRuneII")
	{
		$SecI = "Raffinierter J&aumlger";
	}
	
	else if($SecI == "SecIIIRuneIII")
	{
		$SecI = "Erbarmungsloser J&aumlger";
	}
	
	if($SecII == "SecIRuneI")
	{
		$SecII = "Perfider Trick";
	}
	
	else if($SecII == "SecIRuneII")
	{
		$SecII = "Geschmack von Blut";
	}
	
	else if($SecII == "SecIRuneIII")
	{
		$SecII = "Pl&oumltzlicher Einschlag";
	}
	
	else if($SecII == "SecIIRuneI")
	{
		$SecII = "Zombie-Auge";
	}
	
	else if($SecII == "SecIIRuneII")
	{
		$SecII = "Gespenster-Poro";
	}
	
	else if($SecII == "SecIIRuneIII")
	{
		$SecII = "Argus' Auge";
	}
	
	else if($SecII == "SecIIIRuneI")
	{
		$SecII = "Gefr&aumlssiger J&aumlger";
	}
	
	else if($SecII == "SecIIIRuneII")
	{
		$SecII = "Raffinierter J&aumlger";
	}
	
	else if($SecII == "SecIIIRuneIII")
	{
		$SecII = "Erbarmungsloser J&aumlger";
	}
}

if($sectree == "Zauberei")
{
	if($SecI == "SecIRuneI")
	{
		$SecI = "Kugel der Aufhebung";
	}
	
	else if($SecI == "SecIRuneII")
	{
		$SecI = "Manafluss";
	}
	
	else if($SecI == "SecIRuneIII")
	{
		$SecI = "Der ultimative Hut";
	}
	
	else if($SecI == "SecIIRuneI")
	{
		$SecI = "&Uumlberlegenheit";
	}
	
	else if($SecI == "SecIIRuneII")
	{
		$SecI = "Flinkheit";
	}
	
	else if($SecI == "SecIIRuneIII")
	{
		$SecI = "Absoluter Fokus";
	}
	
	else if($SecI == "SecIIIRuneI")
	{
		$SecI = "Hitzewelle";
	}
	
	else if($SecI == "SecIIIRuneII")
	{
		$SecI = "Wasserlauf";
	}
	
	else if($SecI == "SecIIIRuneIII")
	{
		$SecI = "Aufziehender Sturm";
	}
	
	if($SecII == "SecIRuneI")
	{
		$SecII = "Kugel der Aufhebung";
	}
	
	else if($SecII == "SecIRuneII")
	{
		$SecII = "Manafluss";
	}
	
	else if($SecII == "SecIRuneIII")
	{
		$SecII = "Der ultimative Hut";
	}
	
	else if($SecII == "SecIIRuneI")
	{
		$SecII = "&Uumlberlegenheit";
	}
	
	else if($SecII == "SecIIRuneII")
	{
		$SecII = "Flinkheit";
	}
	
	else if($SecII == "SecIIRuneIII")
	{
		$SecII = "Absoluter Fokus";
	}
	
	else if($SecII == "SecIIIRuneI")
	{
		$SecII = "Hitzewelle";
	}
	
	else if($SecII == "SecIIIRuneII")
	{
		$SecII = "Wasserlauf";
	}
	
	else if($SecII == "SecIIIRuneIII")
	{
		$SecII = "Aufziehender Sturm";
	}
}

if($sectree == "Entschlossenheit")
{
if($SecI == "SecIRuneI")
	{
		$SecI = "Unerschrocken";
	}
	
	else if($SecI == "SecIRuneII")
	{
		$SecI = "Abriss";
	}
	
	else if($SecI == "SecIRuneIII")
	{
		$SecI = "Lebensquelle";
	}
	
	else if($SecI == "SecIIRuneI")
	{
		$SecI = "Eisenhaut";
	}
	
	else if($SecI == "SecIIRuneII")
	{
		$SecI = "Spiegelschale";
	}
	
	else if($SecI == "SecIIRuneIII")
	{
		$SecI = "Konditionierung";
	}
	
	else if($SecI == "SecIIIRuneI")
	{
		$SecI = "Zuwachs";
	}
	
	else if($SecI == "SecIIIRuneII")
	{
		$SecI = "Frische";
	}
	
	else if($SecI == "SecIIIRuneIII")
	{
		$SecI = "Aufschwung";
	}
	
	if($SecII == "SecIRuneI")
	{
		$SecII = "Unerschrocken";
	}
	
	else if($SecII == "SecIRuneII")
	{
		$SecII = "Abriss";
	}
	
	else if($SecII == "SecIRuneIII")
	{
		$SecII = "Lebensquelle";
	}
	
	else if($SecII == "SecIIRuneI")
	{
		$SecII = "Eisenhaut";
	}
	
	else if($SecII == "SecIIRuneII")
	{
		$SecII = "Spiegelschale";
	}
	
	else if($SecII == "SecIIRuneIII")
	{
		$SecII = "Konditionierung";
	}
	
	else if($SecII == "SecIIIRuneI")
	{
		$SecII = "Zuwachs";
	}
	
	else if($SecII == "SecIIIRuneII")
	{
		$SecII = "Frische";
	}
	
	else if($SecII == "SecIIIRuneIII")
	{
		$SecII = "Aufschwung";
	}
}

if($sectree == "Inspiration")
{
if($SecI == "SecIRuneI")
	{
		$SecI = "Hextech-Blitzfalle";
	}
	
	else if($SecI == "SecIRuneII")
	{
		$SecI = "Kekslieferung";
	}
	
	else if($SecI == "SecIRuneIII")
	{
		$SecI = "Perfektes Timing";
	}
	
	else if($SecI == "SecIIRuneI")
	{
		$SecI = "Magisches Schuhwerk";
	}
	
	else if($SecI == "SecIIRuneII")
	{
		$SecI = "Zukunftsmarkt";
	}
	
	else if($SecI == "SecIIRuneIII")
	{
		$SecI = "Vasallenaufl&oumlser";
	}
	
	else if($SecI == "SecIIIRuneI")
	{
		$SecI = "Kosmische Einsicht";
	}
	
	else if($SecI == "SecIIIRuneII")
	{
		$SecI = "Anziehungskraft";
	}
	
	else if($SecI == "SecIIIRuneIII")
	{
		$SecI = "Himmelskörper";
	}
	
	if($SecII == "SecIRuneI")
	{
		$SecII = "Hextech-Blitzfalle";
	}
	
	else if($SecII == "SecIRuneII")
	{
		$SecII = "Kekslieferung";
	}
	
	else if($SecII == "SecIRuneIII")
	{
		$SecII = "Perfektes Timing";
	}
	
	else if($SecII == "SecIIRuneI")
	{
		$SecII = "Magisches Schuhwerk";
	}
	
	else if($SecII == "SecIIRuneII")
	{
		$SecII = "Zukunftsmarkt";
	}
	
	else if($SecII == "SecIIRuneIII")
	{
		$SecII = "Vasallenaufl&oumlser";
	}
	
	else if($SecII == "SecIIIRuneI")
	{
		$SecII = "Kosmische Einsicht";
	}
	
	else if($SecII == "SecIIIRuneII")
	{
		$SecII = "Anziehungskraft";
	}
	
	else if($SecII == "SecIIIRuneIII")
	{
		$SecII = "Himmelskörper";
	}
}


echo("<img src='bilder/champs/" . "$champname" . ".png' alt='$champ' width='64px' height='64px' align=right>");
echo("Autor: $autor");
echo("<br>");
echo("<br>");
echo("<h1>$titel</h1>");
echo("<br>");
echo("Champ: $champ");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<h4>Startitems</h4>");
echo("<br>");
echo("<br>");
echo("<table style='width:50%'>");
echo("<tr>");
echo("<td>$startitemI</td>");
echo("<td><img src='bilder/items/$startitemI.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$startitemII</td>");
echo("<td><img src='bilder/items/$startitemII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$startitemIII</td>");
echo("<td><img src='bilder/items/$startitemIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$startitemIIII</td>");
echo("<td><img src='bilder/items/$startitemIIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$startitemIIIII</td>");
echo("<td><img src='bilder/items/$startitemIIIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$startitemIIIIII</td>");
echo("<td><img src='bilder/items/$startitemIIIIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$startitemIIIIIII</td>");
echo("<td><img src='bilder/items/$startitemIIIIIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("</table>");
echo("<br>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Erkl&aumlrung (Startitems)</legend>");
echo("$erI");
echo("</fieldset>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<h4>Fullbuild</h4>");
echo("<br>");
echo("<br>");
echo("<table style='width:50%'>");
echo("<tr>");
echo("<td>$fullitemI</td>");
echo("<td><img src='bilder/items/$fullitemI.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$fullitemII</td>");
echo("<td><img src='bilder/items/$fullitemII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$fullitemIII</td>");
echo("<td><img src='bilder/items/$fullitemIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$fullitemIIII</td>");
echo("<td><img src='bilder/items/$fullitemIIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$fullitemIIIII</td>");
echo("<td><img src='bilder/items/$fullitemIIIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>$fullitemIIIIII</td>");
echo("<td><img src='bilder/items/$fullitemIIIIII.png' width=32px height=32px></td>");
echo("</tr>");
echo("</table>");
echo("<br>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Erkl&aumlrung (Fullbuild)</legend>");
echo("$erII");
echo("</fieldset>");
echo("<br>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Weitere Tipps</legend>");
echo("$erIII");
echo("</fieldset>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<h4>Runen</h4>");
echo("<br>");
echo("Prim&aumlrer Baum: $tree");
echo("<br>");
echo("Keystone: $keystone");
echo("<br>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Prim&aumlre Runen</legend>");
echo("$priIrune");
echo("<br>");
echo("$priIIrune");
echo("<br>");
echo("$priIIIrune");
echo("</fieldset>");
echo("<br>");
echo("<br>");
echo("Sekund&aumlrer Baum: $sectree");
echo("<br>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Sekund&aumlre Runen</legend>");
echo("$SecI");
echo("<br>");
echo("$SecII");
echo("</fieldset>");
echo("<br>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Erkl&aumlrung (Runen)</legend>");
echo("$erIIII");
echo("</fieldset>");
echo("<br>");
echo("<br>");
if($angemeldet == 1)

{
	if($benutzer == $autor)
	{
	
	echo("<a href='tippsedit.php?titel=$datei' target='_self'>Bearbeiten </a>");
	echo("<br>");
	echo("<br>");
	
	}
}

else
{
	echo(" ");
	echo("<br>");
	echo("<br>");
}
echo("<br>");
echo("<br>");

echo("<fieldset>");
echo("<legend>Kommentare</legend>");
foreach ($data as $kommi)
{
	if($i > 27)
	{
	echo("$kommi");
	echo("<br>");
	}
	$i++;
}
echo("</fieldset>");
echo("<br>");

echo("<form method='post' action='kommentar.php'>");
if($angemeldet == 1)
{
echo("
<textarea name='kommentar' cols='50' rows='8'></textarea>
<div id='quelle'>
<input type='text' name='Quellen' value='" . "$quelle" ."'>
</div>
<br>
<input type='submit' value='Senden'>
</form>
");
}
else
{
	echo("<br>");
}
?>
</div>
</body>
</html>
