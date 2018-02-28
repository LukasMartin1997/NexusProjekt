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
include("pchart/pChart/pData.class");
include("pchart/pChart/pChart.class");
include("../Daten/spfunc.php");

$DataSet = new pData;

$pref = "Midlane";
$champname = file('../Daten/champ.txt');

$beschwrer = urlbea("https://euw1.api.riotgames.com/lol/summoner/v3/summoners/85017125?api_key=RGAPI-b1feb78c-bf06-4ab2-97ca-d4dff08a3344");
$champs = urlbea("https://euw1.api.riotgames.com/lol/champion-mastery/v3/champion-masteries/by-summoner/85017125?api_key=RGAPI-b1feb78c-bf06-4ab2-97ca-d4dff08a3344");
$liga = urlbea("https://euw1.api.riotgames.com/lol/league/v3/positions/by-summoner/85017125?api_key=RGAPI-b1feb78c-bf06-4ab2-97ca-d4dff08a3344");
$match = urlbea("https://euw1.api.riotgames.com/lol/match/v3/matchlists/by-account/226824244/recent?api_key=RGAPI-b1feb78c-bf06-4ab2-97ca-d4dff08a3344");

$datena=(array) json_decode($beschwrer);
$datenb = convertObjectToArray(json_decode($champs));
$datenc = convertObjectToArray(json_decode($liga));
$datend = convertObjectToArray(json_decode($match));

$champI = $datenb['0']['championId'];
$champII = $datenb['1']['championId'];
$champIII = $datenb['2']['championId'];

$mpunkteI = $datenb['0']['championPoints'];
$mpunkteII = $datenb['1']['championPoints'];
$mpunkteIII = $datenb['2']['championPoints'];

$ligasolo = $datenc['0']['tier'];
$ligaflex = $datenc['1']['tier'];
$rangsolo = $datenc['0']['rank'];
$rangflex = $datenc['1']['rank'];

$matchlaneI = $datend['matches']['0']['lane'];
$matchlaneII = $datend['matches']['1']['lane'];
$matchlaneIII = $datend['matches']['2']['lane'];

$matchchampI = $datend['matches']['0']['champion'];
$matchchampII = $datend['matches']['1']['champion'];
$matchchampIII = $datend['matches']['2']['champion'];

$toplane = prolane($datend,"TOP");
$jungle = prolane($datend,"JUNGLE");
$midlane = prolane($datend,"MID");
$adc = prolane($datend,"ADC");
$support = prolane($datend,"SUPPORT");

echo("<br>");
echo("<fieldset>");
echo("<legend>$datena[name]</legend>");
echo("<img src='../../bilder/$pref.png' align=right>");
echo("Level: $datena[summonerLevel] <br>");
echo("Ranked (Soloque): $ligasolo $rangsolo <br>");
echo("Ranked (Flex): $ligaflex $rangflex <br>");
echo("Bevorzugte Rolle: $pref <br>");
echo("</fieldset>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Bevorzugte Champs</legend>");
echo("<table style='width:25%'>");
echo("<tr>");
echo("<td>" . $champname[$champI] . "</td>");
echo("<td><img src='../tipps/bilder/champs/" . $champname[$champI] . ".png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>" . $champname[$champII] . "</td>");
echo("<td><img src='../tipps/bilder/champs/" . $champname[$champII] . ".png' width=32px height=32px></td>");
echo("</tr>");
echo("<tr>");
echo("<td>" . $champname[$champIII] . "</td>");
echo("<td><img src='../tipps/bilder/champs/" . $champname[$champIII] . ".png' width=32px height=32px></td>");
echo("</tr>");
echo("</table>");
echo("</fieldset>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Matchhistory</legend>");
echo("<fieldset>");
echo("<legend>Letzten 3 Matches</legend>");
echo("<table style='width:50%'>");
echo("<tr>");
echo("<th>Lane</th>");
echo("<th>Champion</th>");
echo("</tr>");
echo("<tr>");
echo("<td>$matchlaneI</td>");
echo("<td>". $champname[$matchchampI] . "</td>");
echo("<td> <img src='../tipps/bilder/champs/" . $champname[$matchchampI] . ".png' width=32px height=32px> </td>");
echo("</tr>");
echo("<tr>");
echo("<td>$matchlaneII</td>");
echo("<td>". $champname[$matchchampII] . "</td>");
echo("<td> <img src='../tipps/bilder/champs/" . $champname[$matchchampII] . ".png' width=32px height=32px> </td>");
echo("</tr>");
echo("<tr>");
echo("<td>$matchlaneIII</td>");
echo("<td>". $champname[$matchchampIII] . "</td>");
echo("<td> <img src='../tipps/bilder/champs/" . $champname[$matchchampIII] . ".png' width=32px height=32px> </td>");
echo("</tr>");
echo("</table>");
echo("</fieldset>");
echo("<br>");
echo("<fieldset>");
echo("<legend>Letzten 20 Matches</legend>");


$DataSet->AddPoint(array($toplane,$jungle,$midlane,$adc,$support),"Serie1");  
 $DataSet->AddPoint(array("Toplane","Jungle","Midlane","ADC","Support"),"Serie2");  
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie("Serie2");  
  
 // Initialise the graph  
 $Test = new pChart(300,200);  
 $Test->loadColorPalette("pchart/Sample/tones.txt");  
 $Test->drawFilledRoundedRectangle(7,7,293,193,5,240,240,240);  
 $Test->drawRoundedRectangle(5,5,295,195,5,230,230,230);  
  
 // This will draw a shadow under the pie chart  
 $Test->drawFilledCircle(122,102,70,200,200,200);  
  
 // Draw the pie chart  
 $Test->setFontProperties("pchart/Fonts/tahoma.ttf",8);  
 $Test->drawBasicPieGraph($DataSet->GetData(),$DataSet->GetDataDescription(),120,100,70,PIE_PERCENTAGE,255,255,218);  
 $Test->drawPieLegend(230,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);  
  
 $Test->Render("moritz/diagram.png");  
 
echo("<img src='moritz/diagram.png'>"); 
echo("</fieldset>");
echo("<br>");
echo("</fieldset>");
?>
<br>
<br>
<fieldset>
<legend>Kommentare</legend>
<iframe src="moritz/kommentare.txt" width="100%" frameBorder="1" id="kommentare"></iframe>

<?php
$angemeldet = $_SESSION["angemeldet"];
$benutzer = $_SESSION["benutzer"];
if($angemeldet == 1)
{
	echo("
<form method='post' action='moritz/senden.php'><p><label>Nachricht:<br><textarea name='kommentar' cols='50' rows='8' id='kommentar'></textarea></label></p><input type='submit' value='Senden'></form>
<br>
<br>
");

if($benutzer == "Big SolidSnake")
{
echo("<a href='moritz/bearbeiten.php'>Chat bearbeiten</a><br><br>");
}
}
?>
</fieldset>
<br>
</body>
</html>
