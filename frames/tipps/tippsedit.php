<html>
<head>
<link rel="stylesheet" href="../../css/style.css">
<title>Website</title>
</head>
<body>
<?php
$quelle = $_GET["titel"] . ".txt";
$daten = file_get_contents("data/$quelle");
$data = explode("\n",$daten);
$autor = $data[0];
$titel = $data[1];
$champ = $data[2];

$titel = str_replace("_"," ",$titel);
$champ = str_replace(" ","",$champ);
$champ = str_replace("'","",$champ);

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
?>
<div id="mittestyle">
<a href="../hauptseite.php" target="_self">Zur&uumlck </a><br>
<br>
<h1>Bearbeite einen Guide</h1>
<br>
Änderst du den Namen des Guides wird ein neuer Guide erstellt!
<br>
<br>
<form method="post" action="speichernedit.php">
<p><label>Titel:<br><input type="text" name="Titel" value="<?php echo("$titel"); ?>"></label></p>
<p><label>Champion:<br>
<select name="Champion">
<option value="Aatrox"<?php if($champ == "Aatrox"){echo (" selected"); } ?> >Aatrox</option>
<option value="Ahri"<?php if($champ == "Ahri"){echo (" selected"); } ?> >Ahri</option>
<option value="Akali"<?php if($champ == "Akali"){echo (" selected"); } ?> >Akali</option>
<option value="Alistar"<?php if($champ == "Alistar"){echo (" selected"); } ?>>Alistar</option>
<option value="Amumu"<?php if($champ == "Amumu"){echo (" selected"); } ?>>Amumu</option>
<option value="Anivia"<?php if($champ == "Anivia"){echo (" selected"); } ?>>Anivia</option>
<option value="Annie"<?php if($champ == "Annie"){echo (" selected"); } ?>>Annie</option>
<option value="Ashe"<?php if($champ == "Ashe"){echo (" selected"); } ?>>Ashe</option>
<option value="AurelionSol"<?php if($champ == "AurelionSol"){echo (" selected"); } ?>>Aurelion Sol</option>
<option value="Azir"<?php if($champ == "Azir"){echo (" selected"); } ?>>Azir</option>
<option value="Bard"<?php if($champ == "Bard"){echo (" selected"); } ?>>Bard</option>
<option value="Blitzcrank"<?php if($champ == "Blitzcrank"){echo (" selected"); } ?>>Blitzcrank</option>
<option value="Brand"<?php if($champ == "Brand"){echo (" selected"); } ?>>Brand</option>
<option value="Braum"<?php if($champ == "Braum"){echo (" selected"); } ?>>Braum</option>
<option value="Caitlyn"<?php if($champ == "Caitlyn"){echo (" selected"); } ?>>Caitlyn</option>
<option value="Camille"<?php if($champ == "Camille"){echo (" selected"); } ?>>Camille</option>
<option value="Cassiopeia"<?php if($champ == "Cassiopeia"){echo (" selected"); } ?>>Cassiopeia</option>
<option value="ChoGath"<?php if($champ == "ChoGath"){echo (" selected"); } ?>>Cho'Gath</option>
<option value="Corki"<?php if($champ == "Corki"){echo (" selected"); } ?>>Corki</option>
<option value="Darius"<?php if($champ == "Darius"){echo (" selected"); } ?>>Darius</option>
<option value="Diana"<?php if($champ == "Diana"){echo (" selected"); } ?>>Diana</option>
<option value="DrMundo"<?php if($champ == "DrMundo"){echo (" selected"); } ?>>Dr. Mundo</option>
<option value="Draven"<?php if($champ == "Draven"){echo (" selected"); } ?>>Draven</option>
<option value="Ekko"<?php if($champ == "Ekko"){echo (" selected"); } ?>>Ekko</option>
<option value="Elise"<?php if($champ == "Elise"){echo (" selected"); } ?>>Elise</option>
<option value="Evelynn"<?php if($champ == "Evelynn"){echo (" selected"); } ?>>Evelynn</option>
<option value="Ezreal"<?php if($champ == "Ezreal"){echo (" selected"); } ?>>Ezreal</option>
<option value="Fiddlesticks"<?php if($champ == "Fiddlesticks"){echo (" selected"); } ?>>Fiddlesticks</option>
<option value="Fiora"<?php if($champ == "Fiora"){echo (" selected"); } ?>>Fiora</option>
<option value="Fizz"<?php if($champ == "Fizz"){echo (" selected"); } ?>>Fizz</option>
<option value="Galio"<?php if($champ == "Galio"){echo (" selected"); } ?>>Galio</option>
<option value="Gangplank"<?php if($champ == "Gangplank"){echo (" selected"); } ?>>Gangplank</option>
<option value="Garen"<?php if($champ == "Garen"){echo (" selected"); } ?>>Garen</option>
<option value="Gnar"<?php if($champ == "Gnar"){echo (" selected"); } ?>>Gnar</option>
<option value="Gragas"<?php if($champ == "Gragas"){echo (" selected"); } ?>>Gragas</option>
<option value="Graves"<?php if($champ == "Graves"){echo (" selected"); } ?>>Graves</option>
<option value="Hecarim"<?php if($champ == "Hecarim"){echo (" selected"); } ?>>Hecarim</option>
<option value="Heimerdinger"<?php if($champ == "Heimerdinger"){echo (" selected"); } ?>>Heimerdinger</option>
<option value="Illaoi"<?php if($champ == "Illaoi"){echo (" selected"); } ?>>Illaoi</option>
<option value="Irelia"<?php if($champ == "Irelia"){echo (" selected"); } ?>>Irelia</option>
<option value="Ivern"<?php if($champ == "Ivern"){echo (" selected"); } ?>>Ivern</option>
<option value="Janna"<?php if($champ == "Janna"){echo (" selected"); } ?>>Janna</option>
<option value="JarvanIV"<?php if($champ == "JarvanIV"){echo (" selected"); } ?>>Jarvan IV.</option>
<option value="Jax"<?php if($champ == "Jax"){echo (" selected"); } ?>>Jax</option>
<option value="Jayce"<?php if($champ == "Jayce"){echo (" selected"); } ?>>Jayce</option>
<option value="Jhin"<?php if($champ == "Jhin"){echo (" selected"); } ?>>Jhin</option>
<option value="Jinx"<?php if($champ == "Jinx"){echo (" selected"); } ?>>Jinx</option>
<option value="Kalista"<?php if($champ == "Kalista"){echo (" selected"); } ?>>Kalista</option>
<option value="Karma"<?php if($champ == "Karma"){echo (" selected"); } ?>>Karma</option>
<option value="Karthus"<?php if($champ == "Karthus"){echo (" selected"); } ?>>Karthus</option>
<option value="Kassadin"<?php if($champ == "Kassadin"){echo (" selected"); } ?>>Kassadin</option>
<option value="Katarina"<?php if($champ == "Katarina"){echo (" selected"); } ?>>Katarina</option>
<option value="Kayle"<?php if($champ == "Kayle"){echo (" selected"); } ?>>Kayle</option>
<option value="Kayn"<?php if($champ == "Kayn"){echo (" selected"); } ?>>Kayn</option>
<option value="Kennen"<?php if($champ == "Kennen"){echo (" selected"); } ?>>Kennen</option>
<option value="KhaZix"<?php if($champ == "KhaZix"){echo (" selected"); } ?>>Kha'Zix</option>
<option value="Kindred"<?php if($champ == "Kindred"){echo (" selected"); } ?>>Kindred</option>
<option value="Kled"<?php if($champ == "Kled"){echo (" selected"); } ?>>Kled</option>
<option value="KogMaw"<?php if($champ == "KogMaw"){echo (" selected"); } ?>>Kog'Maw</option>
<option value="LeBlanc"<?php if($champ == "LeBlanc"){echo (" selected"); } ?>>LeBlanc</option>
<option value="LeeSin"<?php if($champ == "LeeSin"){echo (" selected"); } ?>>Lee Sin</option>
<option value="Leona"<?php if($champ == "Leona"){echo (" selected"); } ?>>Leona</option>
<option value="Lissandra"<?php if($champ == "Lissandra"){echo (" selected"); } ?>>Lissandra</option>
<option value="Lucian"<?php if($champ == "Lucian"){echo (" selected"); } ?>>Lucian</option>
<option value="Lulu"<?php if($champ == "Lulu"){echo (" selected"); } ?>>Lulu</option>
<option value="Lux"<?php if($champ == "Lux"){echo (" selected"); } ?>>Lux</option>
<option value="Malphite"<?php if($champ == "Malphite"){echo (" selected"); } ?>>Malphite</option>
<option value="Malzahar"<?php if($champ == "Malzahar"){echo (" selected"); } ?>>Malzahar</option>
<option value="Maokai"<?php if($champ == "Maokai"){echo (" selected"); } ?>>Maokai</option>
<option value="MasterYi"<?php if($champ == "MasterYi"){echo (" selected"); } ?>>Master Yi</option>
<option value="MissFortune"<?php if($champ == "MissFortune"){echo (" selected"); } ?>>Miss Fortune</option>
<option value="Mordekaiser"<?php if($champ == "Mordekaiser"){echo (" selected"); } ?>>Mordekaiser</option>
<option value="Morgana"<?php if($champ == "Morgana"){echo (" selected"); } ?>>Morgana</option>
<option value="Nami"<?php if($champ == "Nami"){echo (" selected"); } ?>>Nami</option>
<option value="Nasus"<?php if($champ == "Nasus"){echo (" selected"); } ?>>Nasus</option>
<option value="Nautilus"<?php if($champ == "Nautilus"){echo (" selected"); } ?>>Nautilus</option>
<option value="Nidalee"<?php if($champ == "Nidalee"){echo (" selected"); } ?>>Nidalee</option>
<option value="Nocturne"<?php if($champ == "Nocturne"){echo (" selected"); } ?>>Nocturne</option>
<option value="Nunu"<?php if($champ == "Nunu"){echo (" selected"); } ?>>Nunu</option>
<option value="Olaf"<?php if($champ == "Olaf"){echo (" selected"); } ?>>Olaf</option>
<option value="Orianna"<?php if($champ == "Orianna"){echo (" selected"); } ?>>Orianna</option>
<option value="Ornn"<?php if($champ == "Ornn"){echo (" selected"); } ?>>Ornn</option>
<option value="Pantheon"<?php if($champ == "Pantheon"){echo (" selected"); } ?>>Pantheon</option>
<option value="Poppy"<?php if($champ == "Poppy"){echo (" selected"); } ?>>Poppy</option>
<option value="Quinn"<?php if($champ == "Quinn"){echo (" selected"); } ?>>Quinn</option>
<option value="Rakan"<?php if($champ == "Rakan"){echo (" selected"); } ?>>Rakan</option>
<option value="Rammus"<?php if($champ == "Rammus"){echo (" selected"); } ?>>Rammus</option>
<option value="RekSai"<?php if($champ == "RekSai"){echo (" selected"); } ?>>Rek'Sai</option>
<option value="Renekton"<?php if($champ == "Renekton"){echo (" selected"); } ?>>Renekton</option>
<option value="Rengar"<?php if($champ == "Rengar"){echo (" selected"); } ?>>Rengar</option>
<option value="Riven"<?php if($champ == "Riven"){echo (" selected"); } ?>>Riven</option>
<option value="Rumble"<?php if($champ == "Rumble"){echo (" selected"); } ?>>Rumble</option>
<option value="Ryze"<?php if($champ == "Ryze"){echo (" selected"); } ?>>Ryze</option>
<option value="Sejuani"<?php if($champ == "Sejuani"){echo (" selected"); } ?>>Sejuani</option>
<option value="Shaco"<?php if($champ == "Shaco"){echo (" selected"); } ?>>Shaco</option>
<option value="Shen"<?php if($champ == "Shen"){echo (" selected"); } ?>>Shen</option>
<option value="Shyvana"<?php if($champ == "Shyvana"){echo (" selected"); } ?>>Shyvana</option>
<option value="Singed"<?php if($champ == "Singed"){echo (" selected"); } ?>>Singed</option>
<option value="Sion"<?php if($champ == "Sion"){echo (" selected"); } ?>>Sion</option>
<option value="Sivir"<?php if($champ == "Sivir"){echo (" selected"); } ?>>Sivir</option>
<option value="Skarner"<?php if($champ == "Skarner"){echo (" selected"); } ?>>Skarner</option>
<option value="Sona"<?php if($champ == "Sona"){echo (" selected"); } ?>>Sona</option>
<option value="Soraka"<?php if($champ == "Soraka"){echo (" selected"); } ?>>Soraka</option>
<option value="Swain"<?php if($champ == "Swain"){echo (" selected"); } ?>>Swain</option>
<option value="Syndra"<?php if($champ == "Syndra"){echo (" selected"); } ?>>Syndra</option>
<option value="TahmKench"<?php if($champ == "TahmKench"){echo (" selected"); } ?>>Tahm Kench</option>
<option value="Taliyah"<?php if($champ == "Taliyah"){echo (" selected"); } ?>>Taliyah</option>
<option value="Talon"<?php if($champ == "Talon"){echo (" selected"); } ?>>Talon</option>
<option value="Taric"<?php if($champ == "Taric"){echo (" selected"); } ?>>Taric</option>
<option value="Teemo"<?php if($champ == "Teemo"){echo (" selected"); } ?>>Teemo</option>
<option value="Thresh"<?php if($champ == "Thresh"){echo (" selected"); } ?>>Thresh</option>
<option value="Tristana"<?php if($champ == "Tristana"){echo (" selected"); } ?>>Tristana</option>
<option value="Trundle"<?php if($champ == "Trundle"){echo (" selected"); } ?>>Trundle</option>
<option value="Tryndamere"<?php if($champ == "Tryndamere"){echo (" selected"); } ?>>Tryndamere</option>
<option value="TwistedFate"<?php if($champ == "TwistedFate"){echo (" selected"); } ?>>Twisted Fate</option>
<option value="Twitch"<?php if($champ == "Twitch"){echo (" selected"); } ?>>Twitch</option>
<option value="Udyr"<?php if($champ == "Udyr"){echo (" selected"); } ?>>Udyr</option>
<option value="Urgot"<?php if($champ == "Urgot"){echo (" selected"); } ?>>Urgot</option>
<option value="Varus"<?php if($champ == "Varus"){echo (" selected"); } ?>>Varus</option>
<option value="Vayne"<?php if($champ == "Vayne"){echo (" selected"); } ?>>Vayne</option>
<option value="Veigar"<?php if($champ == "Veigar"){echo (" selected"); } ?>>Veigar</option>
<option value="VelKoz"<?php if($champ == "VelKoz"){echo (" selected"); } ?>>Vel'Koz</option>
<option value="Vi"<?php if($champ == "Vi"){echo (" selected"); } ?>>Vi</option>
<option value="Viktor"<?php if($champ == "Viktor"){echo (" selected"); } ?>>Viktor</option>
<option value="Vladimir"<?php if($champ == "Vladimir"){echo (" selected"); } ?>>Vladimir</option>
<option value="Volibear"<?php if($champ == "Volibear"){echo (" selected"); } ?>>Volibear</option>
<option value="Warwick"<?php if($champ == "Warwick"){echo (" selected"); } ?>>Warwick</option>
<option value="Wukong"<?php if($champ == "Wukong"){echo (" selected"); } ?>>Wukong</option>
<option value="Xayah"<?php if($champ == "Xayah"){echo (" selected"); } ?>>Xayah</option>
<option value="Xerath"<?php if($champ == "Xerath"){echo (" selected"); } ?>>Xerath</option>
<option value="XinZhao"<?php if($champ == "XinZhao"){echo (" selected"); } ?>>Xin Zhao</option>
<option value="Yasuo"<?php if($champ == "Yasuo"){echo (" selected"); } ?>>Yasuo</option>
<option value="Yorick"<?php if($champ == "Yorick"){echo (" selected"); } ?>>Yorick</option>
<option value="Zac"<?php if($champ == "Zac"){echo (" selected"); } ?>>Zac</option>
<option value="Zed"<?php if($champ == "Zed"){echo (" selected"); } ?>>Zed</option>
<option value="Ziggs"<?php if($champ == "Ziggs"){echo (" selected"); } ?>>Ziggs</option>
<option value="Zilean"<?php if($champ == "Zilean"){echo (" selected"); } ?>>Zilean</option>
<option value="Zyra"<?php if($champ == "Zyra"){echo (" selected"); } ?>>Zyra</option>
</select>
</label></p>
<fieldset>
<legend>Startitems</legend>
<p><label>Startitem 1:<br>
<select name="startitemI">
<option value="keinItem" <?php if($startitemI == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="Abwehrtotem" <?php if($startitemI == "Abwehrtotem"){echo (" selected"); } ?>>Abwehrtotem</option>
<option value="Spaeherlinse" <?php if($startitemI == "Spaeherlinse"){echo (" selected"); } ?>>Sp&aumlherlinse </option>
<option value="Heiltrank" <?php if($startitemI == "Heiltrank"){echo (" selected"); } ?>>Heiltrank</option>
<option value="NachfuellbarerTrank" <?php if($startitemI == "NachfuellbarerTrank"){echo (" selected"); } ?>>Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers" <?php if($startitemI == "TalismanDesJaegers"){echo (" selected"); } ?>>Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers" <?php if($startitemI == "MacheteDesJaegers"){echo (" selected"); } ?>>Machete des J&aumlgers </option>
<option value="TrankDesJaegers" <?php if($startitemI == "TrankDesJaegers"){echo (" selected"); } ?>>Trank des J&aumlgers </option>
<option value="KontrollAuge" <?php if($startitemI == "KontrollAuge"){echo (" selected"); } ?>>Kontroll-Auge</option>
<option value="Langschwert" <?php if($startitemI == "Langschwert"){echo (" selected"); } ?>>Langschwert</option>
<option value="DasDunkleSiegel" <?php if($startitemI == "DasDunkleSiegel"){echo (" selected"); } ?>>Das dunkle Siegel</option>
<option value="UralteMuenze" <?php if($startitemI == "UralteMuenze"){echo (" selected"); } ?>>Uralte M&uumlnze </option>
<option value="Reliktschild" <?php if($startitemI == "Reliktschild"){echo (" selected"); } ?>>Reliktschild</option>
<option value="DolchDesZauberdiebs" <?php if($startitemI == "DolchDesZauberdiebs"){echo (" selected"); } ?>>Dolch des Zauberdiebs</option>
<option value="DoransRing" <?php if($startitemI == "DoransRing"){echo (" selected"); } ?>>Dorans Ring</option>
<option value="DoransSchild" <?php if($startitemI == "DoransSchild"){echo (" selected"); } ?>>Dorans Schild</option>
<option value="DoransKlinge" <?php if($startitemI == "DoransKlinge"){echo (" selected"); } ?>>Dorans Klinge</option>
<option value="Sichel" <?php if($startitemI == "Sichel"){echo (" selected"); } ?>>Sichel</option>
<option value="VerderbenderTrank" <?php if($startitemI == "VerderbenderTrank"){echo (" selected"); } ?>>Verderbender Trank</option>
<option value="Stoffruestung" <?php if($startitemI == "Stoffruestung"){echo (" selected"); } ?>>Stoffr&uumlstung </option>
<option value="Rubinkristall" <?php if($startitemI == "Rubinkristall"){echo (" selected"); } ?>>Rubinkristall</option>
<option value="PerleDerVerjuengung" <?php if($startitemI == "PerleDerVerjuengung"){echo (" selected"); } ?>>Perle der Verj&uumlngung </option>
<option value="NullmagieMantel" <?php if($startitemI == "NullmagieMantel"){echo (" selected"); } ?>>Nullmagie-Mantel</option>
<option value="Dolch" <?php if($startitemI == "Dolch"){echo (" selected"); } ?>>Dolch</option>
<option value="HandschuheDesSchlaegers" <?php if($startitemI == "HandschuheDesSchlaegers"){echo (" selected"); } ?>>Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall" <?php if($startitemI == "Saphirkristall"){echo (" selected"); } ?>>Saphirkristall</option>
<option value="Feenamulett" <?php if($startitemI == "Feenamulett"){echo (" selected"); } ?>>Feenamulett</option>
<option value="VerstaerkenderWaelzer" <?php if($startitemI == "VerstaerkenderWaelzer"){echo (" selected"); } ?>>Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel" <?php if($startitemI == "Laufstiefel"){echo (" selected"); } ?>>Laufstiefel</option>
</select></label></p>
<p><label>Startitem 2:<br>
<select name="startitemII">
<option value="keinItem" <?php if($startitemII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="Abwehrtotem" <?php if($startitemII == "Abwehrtotem"){echo (" selected"); } ?>>Abwehrtotem</option>
<option value="Spaeherlinse" <?php if($startitemII == "Spaeherlinse"){echo (" selected"); } ?>>Sp&aumlherlinse </option>
<option value="Heiltrank" <?php if($startitemII == "Heiltrank"){echo (" selected"); } ?>>Heiltrank</option>
<option value="NachfuellbarerTrank" <?php if($startitemII == "NachfuellbarerTrank"){echo (" selected"); } ?>>Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers" <?php if($startitemII == "TalismanDesJaegers"){echo (" selected"); } ?>>Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers" <?php if($startitemII == "MacheteDesJaegers"){echo (" selected"); } ?>>Machete des J&aumlgers </option>
<option value="TrankDesJaegers" <?php if($startitemII == "TrankDesJaegers"){echo (" selected"); } ?>>Trank des J&aumlgers </option>
<option value="KontrollAuge" <?php if($startitemII == "KontrollAuge"){echo (" selected"); } ?>>Kontroll-Auge</option>
<option value="Langschwert" <?php if($startitemII == "Langschwert"){echo (" selected"); } ?>>Langschwert</option>
<option value="DasDunkleSiegel" <?php if($startitemII == "DasDunkleSiegel"){echo (" selected"); } ?>>Das dunkle Siegel</option>
<option value="UralteMuenze" <?php if($startitemII == "UralteMuenze"){echo (" selected"); } ?>>Uralte M&uumlnze </option>
<option value="Reliktschild" <?php if($startitemII == "Reliktschild"){echo (" selected"); } ?>>Reliktschild</option>
<option value="DolchDesZauberdiebs" <?php if($startitemII == "DolchDesZauberdiebs"){echo (" selected"); } ?>>Dolch des Zauberdiebs</option>
<option value="DoransRing" <?php if($startitemII == "DoransRing"){echo (" selected"); } ?>>Dorans Ring</option>
<option value="DoransSchild" <?php if($startitemII == "DoransSchild"){echo (" selected"); } ?>>Dorans Schild</option>
<option value="DoransKlinge" <?php if($startitemII == "DoransKlinge"){echo (" selected"); } ?>>Dorans Klinge</option>
<option value="Sichel" <?php if($startitemII == "Sichel"){echo (" selected"); } ?>>Sichel</option>
<option value="VerderbenderTrank" <?php if($startitemII == "VerderbenderTrank"){echo (" selected"); } ?>>Verderbender Trank</option>
<option value="Stoffruestung" <?php if($startitemII == "Stoffruestung"){echo (" selected"); } ?>>Stoffr&uumlstung </option>
<option value="Rubinkristall" <?php if($startitemII == "Rubinkristall"){echo (" selected"); } ?>>Rubinkristall</option>
<option value="PerleDerVerjuengung" <?php if($startitemII == "PerleDerVerjuengung"){echo (" selected"); } ?>>Perle der Verj&uumlngung </option>
<option value="NullmagieMantel" <?php if($startitemII == "NullmagieMantel"){echo (" selected"); } ?>>Nullmagie-Mantel</option>
<option value="Dolch" <?php if($startitemII == "Dolch"){echo (" selected"); } ?>>Dolch</option>
<option value="HandschuheDesSchlaegers" <?php if($startitemII == "HandschuheDesSchlaegers"){echo (" selected"); } ?>>Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall" <?php if($startitemII == "Saphirkristall"){echo (" selected"); } ?>>Saphirkristall</option>
<option value="Feenamulett" <?php if($startitemII == "Feenamulett"){echo (" selected"); } ?>>Feenamulett</option>
<option value="VerstaerkenderWaelzer" <?php if($startitemII == "VerstaerkenderWaelzer"){echo (" selected"); } ?>>Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel" <?php if($startitemII == "Laufstiefel"){echo (" selected"); } ?>>Laufstiefel</option>
</select></label></p>
<p><label>Startitem 3:<br>
<select name="startitemIII">
<option value="keinItem" <?php if($startitemIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="Abwehrtotem" <?php if($startitemIII == "Abwehrtotem"){echo (" selected"); } ?>>Abwehrtotem</option>
<option value="Spaeherlinse" <?php if($startitemIII == "Spaeherlinse"){echo (" selected"); } ?>>Sp&aumlherlinse </option>
<option value="Heiltrank" <?php if($startitemIII == "Heiltrank"){echo (" selected"); } ?>>Heiltrank</option>
<option value="NachfuellbarerTrank" <?php if($startitemIII == "NachfuellbarerTrank"){echo (" selected"); } ?>>Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers" <?php if($startitemIII == "TalismanDesJaegers"){echo (" selected"); } ?>>Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers" <?php if($startitemIII == "MacheteDesJaegers"){echo (" selected"); } ?>>Machete des J&aumlgers </option>
<option value="TrankDesJaegers" <?php if($startitemIII == "TrankDesJaegers"){echo (" selected"); } ?>>Trank des J&aumlgers </option>
<option value="KontrollAuge" <?php if($startitemIII == "KontrollAuge"){echo (" selected"); } ?>>Kontroll-Auge</option>
<option value="Langschwert" <?php if($startitemIII == "Langschwert"){echo (" selected"); } ?>>Langschwert</option>
<option value="DasDunkleSiegel" <?php if($startitemIII == "DasDunkleSiegel"){echo (" selected"); } ?>>Das dunkle Siegel</option>
<option value="UralteMuenze" <?php if($startitemIII == "UralteMuenze"){echo (" selected"); } ?>>Uralte M&uumlnze </option>
<option value="Reliktschild" <?php if($startitemIII == "Reliktschild"){echo (" selected"); } ?>>Reliktschild</option>
<option value="DolchDesZauberdiebs" <?php if($startitemIII == "DolchDesZauberdiebs"){echo (" selected"); } ?>>Dolch des Zauberdiebs</option>
<option value="DoransRing" <?php if($startitemIII == "DoransRing"){echo (" selected"); } ?>>Dorans Ring</option>
<option value="DoransSchild" <?php if($startitemIII == "DoransSchild"){echo (" selected"); } ?>>Dorans Schild</option>
<option value="DoransKlinge" <?php if($startitemIII == "DoransKlinge"){echo (" selected"); } ?>>Dorans Klinge</option>
<option value="Sichel" <?php if($startitemIII == "Sichel"){echo (" selected"); } ?>>Sichel</option>
<option value="VerderbenderTrank" <?php if($startitemIII == "VerderbenderTrank"){echo (" selected"); } ?>>Verderbender Trank</option>
<option value="Stoffruestung" <?php if($startitemIII == "Stoffruestung"){echo (" selected"); } ?>>Stoffr&uumlstung </option>
<option value="Rubinkristall" <?php if($startitemIII == "Rubinkristall"){echo (" selected"); } ?>>Rubinkristall</option>
<option value="PerleDerVerjuengung" <?php if($startitemIII == "PerleDerVerjuengung"){echo (" selected"); } ?>>Perle der Verj&uumlngung </option>
<option value="NullmagieMantel" <?php if($startitemIII == "NullmagieMantel"){echo (" selected"); } ?>>Nullmagie-Mantel</option>
<option value="Dolch" <?php if($startitemIII == "Dolch"){echo (" selected"); } ?>>Dolch</option>
<option value="HandschuheDesSchlaegers" <?php if($startitemIII == "HandschuheDesSchlaegers"){echo (" selected"); } ?>>Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall" <?php if($startitemIII == "Saphirkristall"){echo (" selected"); } ?>>Saphirkristall</option>
<option value="Feenamulett" <?php if($startitemIII == "Feenamulett"){echo (" selected"); } ?>>Feenamulett</option>
<option value="VerstaerkenderWaelzer" <?php if($startitemIII == "VerstaerkenderWaelzer"){echo (" selected"); } ?>>Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel" <?php if($startitemIII == "Laufstiefel"){echo (" selected"); } ?>>Laufstiefel</option>
</select></label></p>
<p><label>Startitem 4:<br>
<select name="startitemIIII">
<option value="keinItem" <?php if($startitemIIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="Abwehrtotem" <?php if($startitemIIII == "Abwehrtotem"){echo (" selected"); } ?>>Abwehrtotem</option>
<option value="Spaeherlinse" <?php if($startitemIIII == "Spaeherlinse"){echo (" selected"); } ?>>Sp&aumlherlinse </option>
<option value="Heiltrank" <?php if($startitemIIII == "Heiltrank"){echo (" selected"); } ?>>Heiltrank</option>
<option value="NachfuellbarerTrank" <?php if($startitemIIII == "NachfuellbarerTrank"){echo (" selected"); } ?>>Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers" <?php if($startitemIIII == "TalismanDesJaegers"){echo (" selected"); } ?>>Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers" <?php if($startitemIIII == "MacheteDesJaegers"){echo (" selected"); } ?>>Machete des J&aumlgers </option>
<option value="TrankDesJaegers" <?php if($startitemIIII == "TrankDesJaegers"){echo (" selected"); } ?>>Trank des J&aumlgers </option>
<option value="KontrollAuge" <?php if($startitemIIII == "KontrollAuge"){echo (" selected"); } ?>>Kontroll-Auge</option>
<option value="Langschwert" <?php if($startitemIIII == "Langschwert"){echo (" selected"); } ?>>Langschwert</option>
<option value="DasDunkleSiegel" <?php if($startitemIIII == "DasDunkleSiegel"){echo (" selected"); } ?>>Das dunkle Siegel</option>
<option value="UralteMuenze" <?php if($startitemIIII == "UralteMuenze"){echo (" selected"); } ?>>Uralte M&uumlnze </option>
<option value="Reliktschild" <?php if($startitemIIII == "Reliktschild"){echo (" selected"); } ?>>Reliktschild</option>
<option value="DolchDesZauberdiebs" <?php if($startitemIIII == "DolchDesZauberdiebs"){echo (" selected"); } ?>>Dolch des Zauberdiebs</option>
<option value="DoransRing" <?php if($startitemIIII == "DoransRing"){echo (" selected"); } ?>>Dorans Ring</option>
<option value="DoransSchild" <?php if($startitemIIII == "DoransSchild"){echo (" selected"); } ?>>Dorans Schild</option>
<option value="DoransKlinge" <?php if($startitemIIII == "DoransKlinge"){echo (" selected"); } ?>>Dorans Klinge</option>
<option value="Sichel" <?php if($startitemIIII == "Sichel"){echo (" selected"); } ?>>Sichel</option>
<option value="VerderbenderTrank" <?php if($startitemIIII == "VerderbenderTrank"){echo (" selected"); } ?>>Verderbender Trank</option>
<option value="Stoffruestung" <?php if($startitemIIII == "Stoffruestung"){echo (" selected"); } ?>>Stoffr&uumlstung </option>
<option value="Rubinkristall" <?php if($startitemIIII == "Rubinkristall"){echo (" selected"); } ?>>Rubinkristall</option>
<option value="PerleDerVerjuengung" <?php if($startitemIIII == "PerleDerVerjuengung"){echo (" selected"); } ?>>Perle der Verj&uumlngung </option>
<option value="NullmagieMantel" <?php if($startitemIIII == "NullmagieMantel"){echo (" selected"); } ?>>Nullmagie-Mantel</option>
<option value="Dolch" <?php if($startitemIIII == "Dolch"){echo (" selected"); } ?>>Dolch</option>
<option value="HandschuheDesSchlaegers" <?php if($startitemIIII == "HandschuheDesSchlaegers"){echo (" selected"); } ?>>Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall" <?php if($startitemIIII == "Saphirkristall"){echo (" selected"); } ?>>Saphirkristall</option>
<option value="Feenamulett" <?php if($startitemIIII == "Feenamulett"){echo (" selected"); } ?>>Feenamulett</option>
<option value="VerstaerkenderWaelzer" <?php if($startitemIIII == "VerstaerkenderWaelzer"){echo (" selected"); } ?>>Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel" <?php if($startitemIIII == "Laufstiefel"){echo (" selected"); } ?>>Laufstiefel</option>
</select></label></p>
<p><label>Startitem 5:<br>
<select name="startitemIIIII">
<option value="keinItem" <?php if($startitemIIIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="Abwehrtotem" <?php if($startitemIIIII == "Abwehrtotem"){echo (" selected"); } ?>>Abwehrtotem</option>
<option value="Spaeherlinse" <?php if($startitemIIIII == "Spaeherlinse"){echo (" selected"); } ?>>Sp&aumlherlinse </option>
<option value="Heiltrank" <?php if($startitemIIIII == "Heiltrank"){echo (" selected"); } ?>>Heiltrank</option>
<option value="NachfuellbarerTrank" <?php if($startitemIIIII == "NachfuellbarerTrank"){echo (" selected"); } ?>>Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers" <?php if($startitemIIIII == "TalismanDesJaegers"){echo (" selected"); } ?>>Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers" <?php if($startitemIIIII == "MacheteDesJaegers"){echo (" selected"); } ?>>Machete des J&aumlgers </option>
<option value="TrankDesJaegers" <?php if($startitemIIIII == "TrankDesJaegers"){echo (" selected"); } ?>>Trank des J&aumlgers </option>
<option value="KontrollAuge" <?php if($startitemIIIII == "KontrollAuge"){echo (" selected"); } ?>>Kontroll-Auge</option>
<option value="Langschwert" <?php if($startitemIIIII == "Langschwert"){echo (" selected"); } ?>>Langschwert</option>
<option value="DasDunkleSiegel" <?php if($startitemIIIII == "DasDunkleSiegel"){echo (" selected"); } ?>>Das dunkle Siegel</option>
<option value="UralteMuenze" <?php if($startitemIIIII == "UralteMuenze"){echo (" selected"); } ?>>Uralte M&uumlnze </option>
<option value="Reliktschild" <?php if($startitemIIIII == "Reliktschild"){echo (" selected"); } ?>>Reliktschild</option>
<option value="DolchDesZauberdiebs" <?php if($startitemIIIII == "DolchDesZauberdiebs"){echo (" selected"); } ?>>Dolch des Zauberdiebs</option>
<option value="DoransRing" <?php if($startitemIIIII == "DoransRing"){echo (" selected"); } ?>>Dorans Ring</option>
<option value="DoransSchild" <?php if($startitemIIIII == "DoransSchild"){echo (" selected"); } ?>>Dorans Schild</option>
<option value="DoransKlinge" <?php if($startitemIIIII == "DoransKlinge"){echo (" selected"); } ?>>Dorans Klinge</option>
<option value="Sichel" <?php if($startitemIIIII == "Sichel"){echo (" selected"); } ?>>Sichel</option>
<option value="VerderbenderTrank" <?php if($startitemIIIII == "VerderbenderTrank"){echo (" selected"); } ?>>Verderbender Trank</option>
<option value="Stoffruestung" <?php if($startitemIIIII == "Stoffruestung"){echo (" selected"); } ?>>Stoffr&uumlstung </option>
<option value="Rubinkristall" <?php if($startitemIIIII == "Rubinkristall"){echo (" selected"); } ?>>Rubinkristall</option>
<option value="PerleDerVerjuengung" <?php if($startitemIIIII == "PerleDerVerjuengung"){echo (" selected"); } ?>>Perle der Verj&uumlngung </option>
<option value="NullmagieMantel" <?php if($startitemIIIII == "NullmagieMantel"){echo (" selected"); } ?>>Nullmagie-Mantel</option>
<option value="Dolch" <?php if($startitemIIIII == "Dolch"){echo (" selected"); } ?>>Dolch</option>
<option value="HandschuheDesSchlaegers" <?php if($startitemIIIII == "HandschuheDesSchlaegers"){echo (" selected"); } ?>>Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall" <?php if($startitemIIIII == "Saphirkristall"){echo (" selected"); } ?>>Saphirkristall</option>
<option value="Feenamulett" <?php if($startitemIIIII == "Feenamulett"){echo (" selected"); } ?>>Feenamulett</option>
<option value="VerstaerkenderWaelzer" <?php if($startitemIIIII == "VerstaerkenderWaelzer"){echo (" selected"); } ?>>Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel" <?php if($startitemIIIII == "Laufstiefel"){echo (" selected"); } ?>>Laufstiefel</option>
</select></label></p>
<p><label>Startitem 6:<br>
<select name="startitemIIIIII">
<option value="keinItem" <?php if($startitemIIIIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="Abwehrtotem" <?php if($startitemIIIIII == "Abwehrtotem"){echo (" selected"); } ?>>Abwehrtotem</option>
<option value="Spaeherlinse" <?php if($startitemIIIIII == "Spaeherlinse"){echo (" selected"); } ?>>Sp&aumlherlinse </option>
<option value="Heiltrank" <?php if($startitemIIIIII == "Heiltrank"){echo (" selected"); } ?>>Heiltrank</option>
<option value="NachfuellbarerTrank" <?php if($startitemIIIIII == "NachfuellbarerTrank"){echo (" selected"); } ?>>Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers" <?php if($startitemIIIIII == "TalismanDesJaegers"){echo (" selected"); } ?>>Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers" <?php if($startitemIIIIII == "MacheteDesJaegers"){echo (" selected"); } ?>>Machete des J&aumlgers </option>
<option value="TrankDesJaegers" <?php if($startitemIIIIII == "TrankDesJaegers"){echo (" selected"); } ?>>Trank des J&aumlgers </option>
<option value="KontrollAuge" <?php if($startitemIIIIII == "KontrollAuge"){echo (" selected"); } ?>>Kontroll-Auge</option>
<option value="Langschwert" <?php if($startitemIIIIII == "Langschwert"){echo (" selected"); } ?>>Langschwert</option>
<option value="DasDunkleSiegel" <?php if($startitemIIIIII == "DasDunkleSiegel"){echo (" selected"); } ?>>Das dunkle Siegel</option>
<option value="UralteMuenze" <?php if($startitemIIIIII == "UralteMuenze"){echo (" selected"); } ?>>Uralte M&uumlnze </option>
<option value="Reliktschild" <?php if($startitemIIIIII == "Reliktschild"){echo (" selected"); } ?>>Reliktschild</option>
<option value="DolchDesZauberdiebs" <?php if($startitemIIIIII == "DolchDesZauberdiebs"){echo (" selected"); } ?>>Dolch des Zauberdiebs</option>
<option value="DoransRing" <?php if($startitemIIIIII == "DoransRing"){echo (" selected"); } ?>>Dorans Ring</option>
<option value="DoransSchild" <?php if($startitemIIIIII == "DoransSchild"){echo (" selected"); } ?>>Dorans Schild</option>
<option value="DoransKlinge" <?php if($startitemIIIIII == "DoransKlinge"){echo (" selected"); } ?>>Dorans Klinge</option>
<option value="Sichel" <?php if($startitemIIIIII == "Sichel"){echo (" selected"); } ?>>Sichel</option>
<option value="VerderbenderTrank" <?php if($startitemIIIIII == "VerderbenderTrank"){echo (" selected"); } ?>>Verderbender Trank</option>
<option value="Stoffruestung" <?php if($startitemIIIIII == "Stoffruestung"){echo (" selected"); } ?>>Stoffr&uumlstung </option>
<option value="Rubinkristall" <?php if($startitemIIIIII == "Rubinkristall"){echo (" selected"); } ?>>Rubinkristall</option>
<option value="PerleDerVerjuengung" <?php if($startitemIIIIII == "PerleDerVerjuengung"){echo (" selected"); } ?>>Perle der Verj&uumlngung </option>
<option value="NullmagieMantel" <?php if($startitemIIIIII == "NullmagieMantel"){echo (" selected"); } ?>>Nullmagie-Mantel</option>
<option value="Dolch" <?php if($startitemIIIIII == "Dolch"){echo (" selected"); } ?>>Dolch</option>
<option value="HandschuheDesSchlaegers" <?php if($startitemIIIIII == "HandschuheDesSchlaegers"){echo (" selected"); } ?>>Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall" <?php if($startitemIIIIII == "Saphirkristall"){echo (" selected"); } ?>>Saphirkristall</option>
<option value="Feenamulett" <?php if($startitemIIIIII == "Feenamulett"){echo (" selected"); } ?>>Feenamulett</option>
<option value="VerstaerkenderWaelzer" <?php if($startitemIIIIII == "VerstaerkenderWaelzer"){echo (" selected"); } ?>>Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel" <?php if($startitemIIIIII == "Laufstiefel"){echo (" selected"); } ?>>Laufstiefel</option>
</select></label></p>
<p><label>Startitem 7:<br>
<select name="startitemIIIIIII">
<option value="keinItem" <?php if($startitemIIIIIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="Abwehrtotem" <?php if($startitemIIIIIII == "Abwehrtotem"){echo (" selected"); } ?>>Abwehrtotem</option>
<option value="Spaeherlinse" <?php if($startitemIIIIIII == "Spaeherlinse"){echo (" selected"); } ?>>Sp&aumlherlinse </option>
<option value="Heiltrank" <?php if($startitemIIIIIII == "Heiltrank"){echo (" selected"); } ?>>Heiltrank</option>
<option value="NachfuellbarerTrank" <?php if($startitemIIIIIII == "NachfuellbarerTrank"){echo (" selected"); } ?>>Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers" <?php if($startitemIIIIIII == "TalismanDesJaegers"){echo (" selected"); } ?>>Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers" <?php if($startitemIIIIIII == "MacheteDesJaegers"){echo (" selected"); } ?>>Machete des J&aumlgers </option>
<option value="TrankDesJaegers" <?php if($startitemIIIIIII == "TrankDesJaegers"){echo (" selected"); } ?>>Trank des J&aumlgers </option>
<option value="KontrollAuge" <?php if($startitemIIIIIII == "KontrollAuge"){echo (" selected"); } ?>>Kontroll-Auge</option>
<option value="Langschwert" <?php if($startitemIIIIIII == "Langschwert"){echo (" selected"); } ?>>Langschwert</option>
<option value="DasDunkleSiegel" <?php if($startitemIIIIIII == "DasDunkleSiegel"){echo (" selected"); } ?>>Das dunkle Siegel</option>
<option value="UralteMuenze" <?php if($startitemIIIIIII == "UralteMuenze"){echo (" selected"); } ?>>Uralte M&uumlnze </option>
<option value="Reliktschild" <?php if($startitemIIIIIII == "Reliktschild"){echo (" selected"); } ?>>Reliktschild</option>
<option value="DolchDesZauberdiebs" <?php if($startitemIIIIIII == "DolchDesZauberdiebs"){echo (" selected"); } ?>>Dolch des Zauberdiebs</option>
<option value="DoransRing" <?php if($startitemIIIIIII == "DoransRing"){echo (" selected"); } ?>>Dorans Ring</option>
<option value="DoransSchild" <?php if($startitemIIIIIII == "DoransSchild"){echo (" selected"); } ?>>Dorans Schild</option>
<option value="DoransKlinge" <?php if($startitemIIIIIII == "DoransKlinge"){echo (" selected"); } ?>>Dorans Klinge</option>
<option value="Sichel" <?php if($startitemIIIIIII == "Sichel"){echo (" selected"); } ?>>Sichel</option>
<option value="VerderbenderTrank" <?php if($startitemIIIIIII == "VerderbenderTrank"){echo (" selected"); } ?>>Verderbender Trank</option>
<option value="Stoffruestung" <?php if($startitemIIIIIII == "Stoffruestung"){echo (" selected"); } ?>>Stoffr&uumlstung </option>
<option value="Rubinkristall" <?php if($startitemIIIIIII == "Rubinkristall"){echo (" selected"); } ?>>Rubinkristall</option>
<option value="PerleDerVerjuengung" <?php if($startitemIIIIIII == "PerleDerVerjuengung"){echo (" selected"); } ?>>Perle der Verj&uumlngung </option>
<option value="NullmagieMantel" <?php if($startitemIIIIIII == "NullmagieMantel"){echo (" selected"); } ?>>Nullmagie-Mantel</option>
<option value="Dolch" <?php if($startitemIIIIIII == "Dolch"){echo (" selected"); } ?>>Dolch</option>
<option value="HandschuheDesSchlaegers" <?php if($startitemIIIIIII == "HandschuheDesSchlaegers"){echo (" selected"); } ?>>Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall" <?php if($startitemIIIIIII == "Saphirkristall"){echo (" selected"); } ?>>Saphirkristall</option>
<option value="Feenamulett" <?php if($startitemIIIIIII == "Feenamulett"){echo (" selected"); } ?>>Feenamulett</option>
<option value="VerstaerkenderWaelzer" <?php if($startitemIIIIIII == "VerstaerkenderWaelzer"){echo (" selected"); } ?>>Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel" <?php if($startitemIIIIIII == "Laufstiefel"){echo (" selected"); } ?>>Laufstiefel</option>
</select></label></p>
<p><label>Erkl&aumlrung (Startitems):<br>
<textarea name="textstartitems" cols="50" rows="8"><?php echo("$erI");?></textarea></label></p>
</fieldset>
<br>
<fieldset>
<legend>Fullbuild</legend>
<p><label>Fullbuilditem 1:<br>
<select name="fullitemI">
<option value="keinItem" <?php if($fullitemI == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="StiefelDerWendigkeit" <?php if($fullitemI == "StiefelDerWendigkeit"){echo (" selected"); } ?>>Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit" <?php if($fullitemI == "StiefelDerBeweglichkeit"){echo (" selected"); } ?>>Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit" <?php if($fullitemI == "IonischeStiefelDerDeutlichkeit"){echo (" selected"); } ?>>Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers" <?php if($fullitemI == "BeinschienenDesBerserkers"){echo (" selected"); } ?>>Beinschienen des Berserkers</option>
<option value="Zaubererschuhe" <?php if($fullitemI == "Zaubererschuhe"){echo (" selected"); } ?>>Zaubererschuhe</option>
<option value="NinjaTabi"<?php if($fullitemI == "NinjaTabi"){echo (" selected"); } ?>>Ninja-Tabi</option>
<option value="MerkursSchuhe" <?php if($fullitemI == "MerkursSchuhe"){echo (" selected"); } ?>>Merkurs Schuhe</option>
<option value="MejaisSeelenstehler" <?php if($fullitemI == "MejaisSeelenstehler"){echo (" selected"); } ?>>Mejais Seelenstehler</option>
<option value="SehenderRubinstein" <?php if($fullitemI == "SehenderRubinstein"){echo (" selected"); } ?>>Sehender Rubinstein</option>
<option value="AugeDerOase" <?php if($fullitemI == "AugeDerOase"){echo (" selected"); } ?>>Auge der Oase</option>
<option value="Befreiungsschlag" <?php if($fullitemI == "Befreiungsschlag"){echo (" selected"); } ?>>Befreiungsschlag</option>
<option value="AthenesUnheiligerGral" <?php if($fullitemI == "AthenesUnheiligerGral"){echo (" selected"); } ?>>Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel" <?php if($fullitemI == "MikaelsSchmelztiegel"){echo (" selected"); } ?>>Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter" <?php if($fullitemI == "AugeDerWaechter"){echo (" selected"); } ?>>Auge der W&aumlchter </option>
<option value="Kommandobanner" <?php if($fullitemI == "Kommandobanner"){echo (" selected"); } ?>>Kommandobanner</option>
<option value="AmulettDesAufstiegs" <?php if($fullitemI == "AmulettDesAufstiegs"){echo (" selected"); } ?>>Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin" <?php if($fullitemI == "AnrechtDerFrostkoenigin"){echo (" selected"); } ?>>Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur" <?php if($fullitemI == "Ritterschwur"){echo (" selected"); } ?>>Ritterschwur</option>
<option value="AmulettDerEisernenSolari" <?php if($fullitemI == "AmulettDerEisernenSolari"){echo (" selected"); } ?>>Amulett der eisernen Solari </option>
<option value="Gebirgspanzer" <?php if($fullitemI == "Gebirgspanzer"){echo (" selected"); } ?>>Gebirgspanzer</option>
<option value="ZekesKonvergenz" <?php if($fullitemI == "ZekesKonvergenz"){echo (" selected"); } ?>>Zekes Konvergenz</option>
<option value="AugeDerSonnenwende" <?php if($fullitemI == "AugeDerSonnenwende"){echo (" selected"); } ?>>Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker" <?php if($fullitemI == "GluehenderRauchschwenker"){echo (" selected"); } ?>>Gl&uumlhender Rauchschwenker</option>
<option value="Manamune" <?php if($fullitemI == "Manamune"){echo (" selected"); } ?>>Manamune</option>
<option value="Schutzengel" <?php if($fullitemI == "Schutzengel"){echo (" selected"); } ?>>Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss" <?php if($fullitemI == "KlingeDesPirschersGlutkoloss"){echo (" selected"); } ?>>Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss" <?php if($fullitemI == "MesserDesFaehrtenlesersGlutkoloss"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss" <?php if($fullitemI == "SaebelDesPlaenklersGlutkoloss"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit" <?php if($fullitemI == "EndeDerWeisheit"){echo (" selected"); } ?>>Ende der Weisheit</option>
<option value="HextechProtoguertel01" <?php if($fullitemI == "HextechProtoguertel01"){echo (" selected"); } ?>>Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers" <?php if($fullitemI == "SteinpanzerDesWasserspeiers"){echo (" selected"); } ?>>Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung" <?php if($fullitemI == "SterblicheMahnung"){echo (" selected"); } ?>>Sterbliche Mahnung</option>
<option value="LordDominiksGruesze" <?php if($fullitemI == "LordDominiksGruesze"){echo (" selected"); } ?>>Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer" <?php if($fullitemI == "Phantomtaenzer"){echo (" selected"); } ?>>Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm" <?php if($fullitemI == "RunaansWirbelsturm"){echo (" selected"); } ?>>Runaans Wirbelsturm</option>
<option value="StatikksStich" <?php if($fullitemI == "StatikksStich"){echo (" selected"); } ?>>Statikks Stich</option>
<option value="SchnellfeuerGeschuetz" <?php if($fullitemI == "SchnellfeuerGeschuetz"){echo (" selected"); } ?>>Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter" <?php if($fullitemI == "RylaisKristallzepter"){echo (" selected"); } ?>>Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger" <?php if($fullitemI == "KlingeDesPirschersKrieger"){echo (" selected"); } ?>>Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho" <?php if($fullitemI == "KlingeDesPirschersRunenecho"){echo (" selected"); } ?>>Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger" <?php if($fullitemI == "MesserDesFaehrtenlesersKrieger"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho" <?php if($fullitemI == "MesserDesFaehrtenlesersRunenecho"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger" <?php if($fullitemI == "SaebelDesPlaenklersKrieger"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho" <?php if($fullitemI == "SaebelDesPlaenklersRunenecho"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter" <?php if($fullitemI == "KlingeDesPirschersBlutschnitter"){echo (" selected"); } ?>>Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter" <?php if($fullitemI == "MesserDesFaehrtenlesersBlutschnitter"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter" <?php if($fullitemI == "SaebelDesPlaenklersBlutschnitter"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer" <?php if($fullitemI == "Ohmzerstoerer"){echo (" selected"); } ?>>Ohmzerst&oumlrer </option>
<option value="Leerenstab" <?php if($fullitemI == "Leerenstab"){echo (" selected"); } ?>>Leerenstab</option>
<option value="RedlichePracht" <?php if($fullitemI == "RedlichePracht"){echo (" selected"); } ?>>Redliche Pracht</option>
<option value="EisgeborenenHandschuhe" <?php if($fullitemI == "EisgeborenenHandschuhe"){echo (" selected"); } ?>>Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter" <?php if($fullitemI == "StabDerZeitalter"){echo (" selected"); } ?>>Stab der Zeitalter</option>
<option value="GefrorenesHerz" <?php if($fullitemI == "GefrorenesHerz"){echo (" selected"); } ?>>Gefrorenes Herz</option>
<option value="ZzRotPortal" <?php if($fullitemI == "ZzRotPortal"){echo (" selected"); } ?>>Zz'Rot-Portal</option>
<option value="Geistessicht" <?php if($fullitemI == "Geistessicht"){echo (" selected"); } ?>>Geistessicht</option>
<option value="AdaptiverHelm" <?php if($fullitemI == "AdaptiverHelm"){echo (" selected"); } ?>>Adaptiver Helm</option>
<option value="WarmogsRuestung" <?php if($fullitemI == "WarmogsRuestung"){echo (" selected"); } ?>>Warmogs R&uumlstung </option>
<option value="Hoellenmaske" <?php if($fullitemI == "Hoellenmaske"){echo (" selected"); } ?>>H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang" <?php if($fullitemI == "SonnenfeuerUmhang"){echo (" selected"); } ?>>Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer" <?php if($fullitemI == "Dornenpanzer"){echo (" selected"); } ?>>Dornenpanzer</option>
<option value="YoumusGeistklinge" <?php if($fullitemI == "YoumusGeistklinge"){echo (" selected"); } ?>>Youmus Geistklinge</option>
<option value="RanduinsOmen" <?php if($fullitemI == "RanduinsOmen"){echo (" selected"); } ?>>Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr" <?php if($fullitemI == "DaemmerungsklingeVonDraktharr"){echo (" selected"); } ?>>D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas" <?php if($fullitemI == "ZhonyasStundenglas"){echo (" selected"); } ?>>Zhonyas Stundenglas</option>
<option value="Morellonomikon" <?php if($fullitemI == "Morellonomikon"){echo (" selected"); } ?>>Morellonomikon</option>
<option value="PanzerDesTotenMannes" <?php if($fullitemI == "PanzerDesTotenMannes"){echo (" selected"); } ?>>Panzer des toten Mannes</option>
<option value="HextechGLP800" <?php if($fullitemI == "HextechGLP800"){echo (" selected"); } ?>>Hextech-GLP 800</option>
<option value="SchwarzesBeil" <?php if($fullitemI == "SchwarzesBeil"){echo (" selected"); } ?>>Schwarzes Beil</option>
<option value="SchleierDerTodesfee" <?php if($fullitemI == "SchleierDerTodesfee"){echo (" selected"); } ?>>Schleier der Todesfee</option>
<option value="NashorsZahn" <?php if($fullitemI == "NashorsZahn"){echo (" selected"); } ?>>Nashors Zahn</option>
<option value="PerfekterHexKern" <?php if($fullitemI == "PerfekterHexKern"){echo (" selected"); } ?>>Perfekter Hex-Kern</option>
<option value="StabDesErzengels" <?php if($fullitemI == "StabDesErzengels"){echo (" selected"); } ?>>Stab des Erzengels</option>
<option value="Frosthammer" <?php if($fullitemI == "Frosthammer"){echo (" selected"); } ?>>Frosthammer</option>
<option value="LiandrysQual" <?php if($fullitemI == "LiandrysQual"){echo (" selected"); } ?>>Liandrys Qual</option>
<option value="SaumDerNacht" <?php if($fullitemI == "SaumDerNacht"){echo (" selected"); } ?>>Saum der Nacht</option>
<option value="SteraksPegel" <?php if($fullitemI == "SteraksPegel"){echo (" selected"); } ?>>Steraks Pegel</option>
<option value="FluchDesLichs" <?php if($fullitemI == "FluchDesLichs"){echo (" selected"); } ?>>Fluch des Lichs</option>
<option value="LudensEcho" <?php if($fullitemI == "LudensEcho"){echo (" selected"); } ?>>Ludens Echo</option>
<option value="SchlundDesMalmortius" <?php if($fullitemI == "SchlundDesMalmortius"){echo (" selected"); } ?>>Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit" <?php if($fullitemI == "KlingeDerUnendlichkeit"){echo (" selected"); } ?>>Klinge der Unendlichkeit</option>
<option value="HextechGunblade" <?php if($fullitemI == "HextechGunblade"){echo (" selected"); } ?>>Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs" <?php if($fullitemI == "KlingeDesgestuerztenKoenigs"){echo (" selected"); } ?>>Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber" <?php if($fullitemI == "Essenzraeuber"){echo (" selected"); } ?>>Essenzr&aumluber </option>
<option value="GefraeszigeHydra" <?php if($fullitemI == "GefraeszigeHydra"){echo (" selected"); } ?>>Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra" <?php if($fullitemI == "TitanischeHydra"){echo (" selected"); } ?>>Titanische Hydra</option>
<option value="TanzDesTodes" <?php if($fullitemI == "TanzDesTodes"){echo (" selected"); } ?>>Tanz des Todes</option>
<option value="GuinsoosWutklinge" <?php if($fullitemI == "GuinsoosWutklinge"){echo (" selected"); } ?>>Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel" <?php if($fullitemI == "FlinkerKrummsaebel"){echo (" selected"); } ?>>Flinker Krumms&aumlbel </option>
<option value="Blutduerster" <?php if($fullitemI == "Blutduerster"){echo (" selected"); } ?>>Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit" <?php if($fullitemI == "StaerkeDerDreieinigkeit"){echo (" selected"); } ?>>St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube" <?php if($fullitemI == "RabadonsTodeshaube"){echo (" selected"); } ?>>Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 2:<br>
<select name="fullitemII">
<option value="keinItem" <?php if($fullitemII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="StiefelDerWendigkeit" <?php if($fullitemII == "StiefelDerWendigkeit"){echo (" selected"); } ?>>Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit" <?php if($fullitemII == "StiefelDerBeweglichkeit"){echo (" selected"); } ?>>Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit" <?php if($fullitemII == "IonischeStiefelDerDeutlichkeit"){echo (" selected"); } ?>>Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers" <?php if($fullitemII == "BeinschienenDesBerserkers"){echo (" selected"); } ?>>Beinschienen des Berserkers</option>
<option value="Zaubererschuhe" <?php if($fullitemII == "Zaubererschuhe"){echo (" selected"); } ?>>Zaubererschuhe</option>
<option value="NinjaTabi"<?php if($fullitemII == "NinjaTabi"){echo (" selected"); } ?>>Ninja-Tabi</option>
<option value="MerkursSchuhe" <?php if($fullitemII == "MerkursSchuhe"){echo (" selected"); } ?>>Merkurs Schuhe</option>
<option value="MejaisSeelenstehler" <?php if($fullitemII == "MejaisSeelenstehler"){echo (" selected"); } ?>>Mejais Seelenstehler</option>
<option value="SehenderRubinstein" <?php if($fullitemII == "SehenderRubinstein"){echo (" selected"); } ?>>Sehender Rubinstein</option>
<option value="AugeDerOase" <?php if($fullitemII == "AugeDerOase"){echo (" selected"); } ?>>Auge der Oase</option>
<option value="Befreiungsschlag" <?php if($fullitemII == "Befreiungsschlag"){echo (" selected"); } ?>>Befreiungsschlag</option>
<option value="AthenesUnheiligerGral" <?php if($fullitemII == "AthenesUnheiligerGral"){echo (" selected"); } ?>>Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel" <?php if($fullitemII == "MikaelsSchmelztiegel"){echo (" selected"); } ?>>Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter" <?php if($fullitemII == "AugeDerWaechter"){echo (" selected"); } ?>>Auge der W&aumlchter </option>
<option value="Kommandobanner" <?php if($fullitemII == "Kommandobanner"){echo (" selected"); } ?>>Kommandobanner</option>
<option value="AmulettDesAufstiegs" <?php if($fullitemII == "AmulettDesAufstiegs"){echo (" selected"); } ?>>Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin" <?php if($fullitemII == "AnrechtDerFrostkoenigin"){echo (" selected"); } ?>>Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur" <?php if($fullitemII == "Ritterschwur"){echo (" selected"); } ?>>Ritterschwur</option>
<option value="AmulettDerEisernenSolari" <?php if($fullitemII == "AmulettDerEisernenSolari"){echo (" selected"); } ?>>Amulett der eisernen Solari </option>
<option value="Gebirgspanzer" <?php if($fullitemII == "Gebirgspanzer"){echo (" selected"); } ?>>Gebirgspanzer</option>
<option value="ZekesKonvergenz" <?php if($fullitemII == "ZekesKonvergenz"){echo (" selected"); } ?>>Zekes Konvergenz</option>
<option value="AugeDerSonnenwende" <?php if($fullitemII == "AugeDerSonnenwende"){echo (" selected"); } ?>>Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker" <?php if($fullitemII == "GluehenderRauchschwenker"){echo (" selected"); } ?>>Gl&uumlhender Rauchschwenker</option>
<option value="Manamune" <?php if($fullitemII == "Manamune"){echo (" selected"); } ?>>Manamune</option>
<option value="Schutzengel" <?php if($fullitemII == "Schutzengel"){echo (" selected"); } ?>>Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss" <?php if($fullitemII == "KlingeDesPirschersGlutkoloss"){echo (" selected"); } ?>>Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss" <?php if($fullitemII == "MesserDesFaehrtenlesersGlutkoloss"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss" <?php if($fullitemII == "SaebelDesPlaenklersGlutkoloss"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit" <?php if($fullitemII == "EndeDerWeisheit"){echo (" selected"); } ?>>Ende der Weisheit</option>
<option value="HextechProtoguertel01" <?php if($fullitemII == "HextechProtoguertel01"){echo (" selected"); } ?>>Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers" <?php if($fullitemII == "SteinpanzerDesWasserspeiers"){echo (" selected"); } ?>>Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung" <?php if($fullitemII == "SterblicheMahnung"){echo (" selected"); } ?>>Sterbliche Mahnung</option>
<option value="LordDominiksGruesze" <?php if($fullitemII == "LordDominiksGruesze"){echo (" selected"); } ?>>Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer" <?php if($fullitemII == "Phantomtaenzer"){echo (" selected"); } ?>>Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm" <?php if($fullitemII == "RunaansWirbelsturm"){echo (" selected"); } ?>>Runaans Wirbelsturm</option>
<option value="StatikksStich" <?php if($fullitemII == "StatikksStich"){echo (" selected"); } ?>>Statikks Stich</option>
<option value="SchnellfeuerGeschuetz" <?php if($fullitemII == "SchnellfeuerGeschuetz"){echo (" selected"); } ?>>Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter" <?php if($fullitemII == "RylaisKristallzepter"){echo (" selected"); } ?>>Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger" <?php if($fullitemII == "KlingeDesPirschersKrieger"){echo (" selected"); } ?>>Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho" <?php if($fullitemII == "KlingeDesPirschersRunenecho"){echo (" selected"); } ?>>Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger" <?php if($fullitemII == "MesserDesFaehrtenlesersKrieger"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho" <?php if($fullitemII == "MesserDesFaehrtenlesersRunenecho"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger" <?php if($fullitemII == "SaebelDesPlaenklersKrieger"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho" <?php if($fullitemII == "SaebelDesPlaenklersRunenecho"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter" <?php if($fullitemII == "KlingeDesPirschersBlutschnitter"){echo (" selected"); } ?>>Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter" <?php if($fullitemII == "MesserDesFaehrtenlesersBlutschnitter"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter" <?php if($fullitemII == "SaebelDesPlaenklersBlutschnitter"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer" <?php if($fullitemII == "Ohmzerstoerer"){echo (" selected"); } ?>>Ohmzerst&oumlrer </option>
<option value="Leerenstab" <?php if($fullitemII == "Leerenstab"){echo (" selected"); } ?>>Leerenstab</option>
<option value="RedlichePracht" <?php if($fullitemII == "RedlichePracht"){echo (" selected"); } ?>>Redliche Pracht</option>
<option value="EisgeborenenHandschuhe" <?php if($fullitemII == "EisgeborenenHandschuhe"){echo (" selected"); } ?>>Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter" <?php if($fullitemII == "StabDerZeitalter"){echo (" selected"); } ?>>Stab der Zeitalter</option>
<option value="GefrorenesHerz" <?php if($fullitemII == "GefrorenesHerz"){echo (" selected"); } ?>>Gefrorenes Herz</option>
<option value="ZzRotPortal" <?php if($fullitemII == "ZzRotPortal"){echo (" selected"); } ?>>Zz'Rot-Portal</option>
<option value="Geistessicht" <?php if($fullitemII == "Geistessicht"){echo (" selected"); } ?>>Geistessicht</option>
<option value="AdaptiverHelm" <?php if($fullitemII == "AdaptiverHelm"){echo (" selected"); } ?>>Adaptiver Helm</option>
<option value="WarmogsRuestung" <?php if($fullitemII == "WarmogsRuestung"){echo (" selected"); } ?>>Warmogs R&uumlstung </option>
<option value="Hoellenmaske" <?php if($fullitemII == "Hoellenmaske"){echo (" selected"); } ?>>H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang" <?php if($fullitemII == "SonnenfeuerUmhang"){echo (" selected"); } ?>>Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer" <?php if($fullitemII == "Dornenpanzer"){echo (" selected"); } ?>>Dornenpanzer</option>
<option value="YoumusGeistklinge" <?php if($fullitemII == "YoumusGeistklinge"){echo (" selected"); } ?>>Youmus Geistklinge</option>
<option value="RanduinsOmen" <?php if($fullitemII == "RanduinsOmen"){echo (" selected"); } ?>>Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr" <?php if($fullitemII == "DaemmerungsklingeVonDraktharr"){echo (" selected"); } ?>>D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas" <?php if($fullitemII == "ZhonyasStundenglas"){echo (" selected"); } ?>>Zhonyas Stundenglas</option>
<option value="Morellonomikon" <?php if($fullitemII == "Morellonomikon"){echo (" selected"); } ?>>Morellonomikon</option>
<option value="PanzerDesTotenMannes" <?php if($fullitemII == "PanzerDesTotenMannes"){echo (" selected"); } ?>>Panzer des toten Mannes</option>
<option value="HextechGLP800" <?php if($fullitemII == "HextechGLP800"){echo (" selected"); } ?>>Hextech-GLP 800</option>
<option value="SchwarzesBeil" <?php if($fullitemII == "SchwarzesBeil"){echo (" selected"); } ?>>Schwarzes Beil</option>
<option value="SchleierDerTodesfee" <?php if($fullitemII == "SchleierDerTodesfee"){echo (" selected"); } ?>>Schleier der Todesfee</option>
<option value="NashorsZahn" <?php if($fullitemII == "NashorsZahn"){echo (" selected"); } ?>>Nashors Zahn</option>
<option value="PerfekterHexKern" <?php if($fullitemII == "PerfekterHexKern"){echo (" selected"); } ?>>Perfekter Hex-Kern</option>
<option value="StabDesErzengels" <?php if($fullitemII == "StabDesErzengels"){echo (" selected"); } ?>>Stab des Erzengels</option>
<option value="Frosthammer" <?php if($fullitemII == "Frosthammer"){echo (" selected"); } ?>>Frosthammer</option>
<option value="LiandrysQual" <?php if($fullitemII == "LiandrysQual"){echo (" selected"); } ?>>Liandrys Qual</option>
<option value="SaumDerNacht" <?php if($fullitemII == "SaumDerNacht"){echo (" selected"); } ?>>Saum der Nacht</option>
<option value="SteraksPegel" <?php if($fullitemII == "SteraksPegel"){echo (" selected"); } ?>>Steraks Pegel</option>
<option value="FluchDesLichs" <?php if($fullitemII == "FluchDesLichs"){echo (" selected"); } ?>>Fluch des Lichs</option>
<option value="LudensEcho" <?php if($fullitemII == "LudensEcho"){echo (" selected"); } ?>>Ludens Echo</option>
<option value="SchlundDesMalmortius" <?php if($fullitemII == "SchlundDesMalmortius"){echo (" selected"); } ?>>Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit" <?php if($fullitemII == "KlingeDerUnendlichkeit"){echo (" selected"); } ?>>Klinge der Unendlichkeit</option>
<option value="HextechGunblade" <?php if($fullitemII == "HextechGunblade"){echo (" selected"); } ?>>Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs" <?php if($fullitemII == "KlingeDesgestuerztenKoenigs"){echo (" selected"); } ?>>Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber" <?php if($fullitemII == "Essenzraeuber"){echo (" selected"); } ?>>Essenzr&aumluber </option>
<option value="GefraeszigeHydra" <?php if($fullitemII == "GefraeszigeHydra"){echo (" selected"); } ?>>Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra" <?php if($fullitemII == "TitanischeHydra"){echo (" selected"); } ?>>Titanische Hydra</option>
<option value="TanzDesTodes" <?php if($fullitemII == "TanzDesTodes"){echo (" selected"); } ?>>Tanz des Todes</option>
<option value="GuinsoosWutklinge" <?php if($fullitemII == "GuinsoosWutklinge"){echo (" selected"); } ?>>Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel" <?php if($fullitemII == "FlinkerKrummsaebel"){echo (" selected"); } ?>>Flinker Krumms&aumlbel </option>
<option value="Blutduerster" <?php if($fullitemII == "Blutduerster"){echo (" selected"); } ?>>Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit" <?php if($fullitemII == "StaerkeDerDreieinigkeit"){echo (" selected"); } ?>>St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube" <?php if($fullitemII == "RabadonsTodeshaube"){echo (" selected"); } ?>>Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 3:<br>
<select name="fullitemIII">
<option value="keinItem" <?php if($fullitemIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="StiefelDerWendigkeit" <?php if($fullitemIII == "StiefelDerWendigkeit"){echo (" selected"); } ?>>Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit" <?php if($fullitemIII == "StiefelDerBeweglichkeit"){echo (" selected"); } ?>>Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit" <?php if($fullitemIII == "IonischeStiefelDerDeutlichkeit"){echo (" selected"); } ?>>Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers" <?php if($fullitemIII == "BeinschienenDesBerserkers"){echo (" selected"); } ?>>Beinschienen des Berserkers</option>
<option value="Zaubererschuhe" <?php if($fullitemIII == "Zaubererschuhe"){echo (" selected"); } ?>>Zaubererschuhe</option>
<option value="NinjaTabi"<?php if($fullitemIII == "NinjaTabi"){echo (" selected"); } ?>>Ninja-Tabi</option>
<option value="MerkursSchuhe" <?php if($fullitemIII == "MerkursSchuhe"){echo (" selected"); } ?>>Merkurs Schuhe</option>
<option value="MejaisSeelenstehler" <?php if($fullitemIII == "MejaisSeelenstehler"){echo (" selected"); } ?>>Mejais Seelenstehler</option>
<option value="SehenderRubinstein" <?php if($fullitemIII == "SehenderRubinstein"){echo (" selected"); } ?>>Sehender Rubinstein</option>
<option value="AugeDerOase" <?php if($fullitemIII == "AugeDerOase"){echo (" selected"); } ?>>Auge der Oase</option>
<option value="Befreiungsschlag" <?php if($fullitemIII == "Befreiungsschlag"){echo (" selected"); } ?>>Befreiungsschlag</option>
<option value="AthenesUnheiligerGral" <?php if($fullitemIII == "AthenesUnheiligerGral"){echo (" selected"); } ?>>Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel" <?php if($fullitemIII == "MikaelsSchmelztiegel"){echo (" selected"); } ?>>Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter" <?php if($fullitemIII == "AugeDerWaechter"){echo (" selected"); } ?>>Auge der W&aumlchter </option>
<option value="Kommandobanner" <?php if($fullitemIII == "Kommandobanner"){echo (" selected"); } ?>>Kommandobanner</option>
<option value="AmulettDesAufstiegs" <?php if($fullitemIII == "AmulettDesAufstiegs"){echo (" selected"); } ?>>Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin" <?php if($fullitemIII == "AnrechtDerFrostkoenigin"){echo (" selected"); } ?>>Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur" <?php if($fullitemIII == "Ritterschwur"){echo (" selected"); } ?>>Ritterschwur</option>
<option value="AmulettDerEisernenSolari" <?php if($fullitemIII == "AmulettDerEisernenSolari"){echo (" selected"); } ?>>Amulett der eisernen Solari </option>
<option value="Gebirgspanzer" <?php if($fullitemIII == "Gebirgspanzer"){echo (" selected"); } ?>>Gebirgspanzer</option>
<option value="ZekesKonvergenz" <?php if($fullitemIII == "ZekesKonvergenz"){echo (" selected"); } ?>>Zekes Konvergenz</option>
<option value="AugeDerSonnenwende" <?php if($fullitemIII == "AugeDerSonnenwende"){echo (" selected"); } ?>>Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker" <?php if($fullitemIII == "GluehenderRauchschwenker"){echo (" selected"); } ?>>Gl&uumlhender Rauchschwenker</option>
<option value="Manamune" <?php if($fullitemIII == "Manamune"){echo (" selected"); } ?>>Manamune</option>
<option value="Schutzengel" <?php if($fullitemIII == "Schutzengel"){echo (" selected"); } ?>>Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss" <?php if($fullitemIII == "KlingeDesPirschersGlutkoloss"){echo (" selected"); } ?>>Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss" <?php if($fullitemIII == "MesserDesFaehrtenlesersGlutkoloss"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss" <?php if($fullitemIII == "SaebelDesPlaenklersGlutkoloss"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit" <?php if($fullitemIII == "EndeDerWeisheit"){echo (" selected"); } ?>>Ende der Weisheit</option>
<option value="HextechProtoguertel01" <?php if($fullitemIII == "HextechProtoguertel01"){echo (" selected"); } ?>>Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers" <?php if($fullitemIII == "SteinpanzerDesWasserspeiers"){echo (" selected"); } ?>>Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung" <?php if($fullitemIII == "SterblicheMahnung"){echo (" selected"); } ?>>Sterbliche Mahnung</option>
<option value="LordDominiksGruesze" <?php if($fullitemIII == "LordDominiksGruesze"){echo (" selected"); } ?>>Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer" <?php if($fullitemIII == "Phantomtaenzer"){echo (" selected"); } ?>>Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm" <?php if($fullitemIII == "RunaansWirbelsturm"){echo (" selected"); } ?>>Runaans Wirbelsturm</option>
<option value="StatikksStich" <?php if($fullitemIII == "StatikksStich"){echo (" selected"); } ?>>Statikks Stich</option>
<option value="SchnellfeuerGeschuetz" <?php if($fullitemIII == "SchnellfeuerGeschuetz"){echo (" selected"); } ?>>Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter" <?php if($fullitemIII == "RylaisKristallzepter"){echo (" selected"); } ?>>Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger" <?php if($fullitemIII == "KlingeDesPirschersKrieger"){echo (" selected"); } ?>>Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho" <?php if($fullitemIII == "KlingeDesPirschersRunenecho"){echo (" selected"); } ?>>Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger" <?php if($fullitemIII == "MesserDesFaehrtenlesersKrieger"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho" <?php if($fullitemIII == "MesserDesFaehrtenlesersRunenecho"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger" <?php if($fullitemIII == "SaebelDesPlaenklersKrieger"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho" <?php if($fullitemIII == "SaebelDesPlaenklersRunenecho"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter" <?php if($fullitemIII == "KlingeDesPirschersBlutschnitter"){echo (" selected"); } ?>>Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter" <?php if($fullitemIII == "MesserDesFaehrtenlesersBlutschnitter"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter" <?php if($fullitemIII == "SaebelDesPlaenklersBlutschnitter"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer" <?php if($fullitemIII == "Ohmzerstoerer"){echo (" selected"); } ?>>Ohmzerst&oumlrer </option>
<option value="Leerenstab" <?php if($fullitemIII == "Leerenstab"){echo (" selected"); } ?>>Leerenstab</option>
<option value="RedlichePracht" <?php if($fullitemIII == "RedlichePracht"){echo (" selected"); } ?>>Redliche Pracht</option>
<option value="EisgeborenenHandschuhe" <?php if($fullitemIII == "EisgeborenenHandschuhe"){echo (" selected"); } ?>>Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter" <?php if($fullitemIII == "StabDerZeitalter"){echo (" selected"); } ?>>Stab der Zeitalter</option>
<option value="GefrorenesHerz" <?php if($fullitemIII == "GefrorenesHerz"){echo (" selected"); } ?>>Gefrorenes Herz</option>
<option value="ZzRotPortal" <?php if($fullitemIII == "ZzRotPortal"){echo (" selected"); } ?>>Zz'Rot-Portal</option>
<option value="Geistessicht" <?php if($fullitemIII == "Geistessicht"){echo (" selected"); } ?>>Geistessicht</option>
<option value="AdaptiverHelm" <?php if($fullitemIII == "AdaptiverHelm"){echo (" selected"); } ?>>Adaptiver Helm</option>
<option value="WarmogsRuestung" <?php if($fullitemIII == "WarmogsRuestung"){echo (" selected"); } ?>>Warmogs R&uumlstung </option>
<option value="Hoellenmaske" <?php if($fullitemIII == "Hoellenmaske"){echo (" selected"); } ?>>H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang" <?php if($fullitemIII == "SonnenfeuerUmhang"){echo (" selected"); } ?>>Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer" <?php if($fullitemIII == "Dornenpanzer"){echo (" selected"); } ?>>Dornenpanzer</option>
<option value="YoumusGeistklinge" <?php if($fullitemIII == "YoumusGeistklinge"){echo (" selected"); } ?>>Youmus Geistklinge</option>
<option value="RanduinsOmen" <?php if($fullitemIII == "RanduinsOmen"){echo (" selected"); } ?>>Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr" <?php if($fullitemIII == "DaemmerungsklingeVonDraktharr"){echo (" selected"); } ?>>D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas" <?php if($fullitemIII == "ZhonyasStundenglas"){echo (" selected"); } ?>>Zhonyas Stundenglas</option>
<option value="Morellonomikon" <?php if($fullitemIII == "Morellonomikon"){echo (" selected"); } ?>>Morellonomikon</option>
<option value="PanzerDesTotenMannes" <?php if($fullitemIII == "PanzerDesTotenMannes"){echo (" selected"); } ?>>Panzer des toten Mannes</option>
<option value="HextechGLP800" <?php if($fullitemIII == "HextechGLP800"){echo (" selected"); } ?>>Hextech-GLP 800</option>
<option value="SchwarzesBeil" <?php if($fullitemIII == "SchwarzesBeil"){echo (" selected"); } ?>>Schwarzes Beil</option>
<option value="SchleierDerTodesfee" <?php if($fullitemIII == "SchleierDerTodesfee"){echo (" selected"); } ?>>Schleier der Todesfee</option>
<option value="NashorsZahn" <?php if($fullitemIII == "NashorsZahn"){echo (" selected"); } ?>>Nashors Zahn</option>
<option value="PerfekterHexKern" <?php if($fullitemIII == "PerfekterHexKern"){echo (" selected"); } ?>>Perfekter Hex-Kern</option>
<option value="StabDesErzengels" <?php if($fullitemIII == "StabDesErzengels"){echo (" selected"); } ?>>Stab des Erzengels</option>
<option value="Frosthammer" <?php if($fullitemIII == "Frosthammer"){echo (" selected"); } ?>>Frosthammer</option>
<option value="LiandrysQual" <?php if($fullitemIII == "LiandrysQual"){echo (" selected"); } ?>>Liandrys Qual</option>
<option value="SaumDerNacht" <?php if($fullitemIII == "SaumDerNacht"){echo (" selected"); } ?>>Saum der Nacht</option>
<option value="SteraksPegel" <?php if($fullitemIII == "SteraksPegel"){echo (" selected"); } ?>>Steraks Pegel</option>
<option value="FluchDesLichs" <?php if($fullitemIII == "FluchDesLichs"){echo (" selected"); } ?>>Fluch des Lichs</option>
<option value="LudensEcho" <?php if($fullitemIII == "LudensEcho"){echo (" selected"); } ?>>Ludens Echo</option>
<option value="SchlundDesMalmortius" <?php if($fullitemIII == "SchlundDesMalmortius"){echo (" selected"); } ?>>Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit" <?php if($fullitemIII == "KlingeDerUnendlichkeit"){echo (" selected"); } ?>>Klinge der Unendlichkeit</option>
<option value="HextechGunblade" <?php if($fullitemIII == "HextechGunblade"){echo (" selected"); } ?>>Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs" <?php if($fullitemIII == "KlingeDesgestuerztenKoenigs"){echo (" selected"); } ?>>Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber" <?php if($fullitemIII == "Essenzraeuber"){echo (" selected"); } ?>>Essenzr&aumluber </option>
<option value="GefraeszigeHydra" <?php if($fullitemIII == "GefraeszigeHydra"){echo (" selected"); } ?>>Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra" <?php if($fullitemIII == "TitanischeHydra"){echo (" selected"); } ?>>Titanische Hydra</option>
<option value="TanzDesTodes" <?php if($fullitemIII == "TanzDesTodes"){echo (" selected"); } ?>>Tanz des Todes</option>
<option value="GuinsoosWutklinge" <?php if($fullitemIII == "GuinsoosWutklinge"){echo (" selected"); } ?>>Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel" <?php if($fullitemIII == "FlinkerKrummsaebel"){echo (" selected"); } ?>>Flinker Krumms&aumlbel </option>
<option value="Blutduerster" <?php if($fullitemIII == "Blutduerster"){echo (" selected"); } ?>>Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit" <?php if($fullitemIII == "StaerkeDerDreieinigkeit"){echo (" selected"); } ?>>St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube" <?php if($fullitemIII == "RabadonsTodeshaube"){echo (" selected"); } ?>>Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 4:<br>
<select name="fullitemIIII">
<option value="keinItem" <?php if($fullitemIIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="StiefelDerWendigkeit" <?php if($fullitemIIII == "StiefelDerWendigkeit"){echo (" selected"); } ?>>Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit" <?php if($fullitemIIII == "StiefelDerBeweglichkeit"){echo (" selected"); } ?>>Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit" <?php if($fullitemIIII == "IonischeStiefelDerDeutlichkeit"){echo (" selected"); } ?>>Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers" <?php if($fullitemIIII == "BeinschienenDesBerserkers"){echo (" selected"); } ?>>Beinschienen des Berserkers</option>
<option value="Zaubererschuhe" <?php if($fullitemIIII == "Zaubererschuhe"){echo (" selected"); } ?>>Zaubererschuhe</option>
<option value="NinjaTabi"<?php if($fullitemIIII == "NinjaTabi"){echo (" selected"); } ?>>Ninja-Tabi</option>
<option value="MerkursSchuhe" <?php if($fullitemIIII == "MerkursSchuhe"){echo (" selected"); } ?>>Merkurs Schuhe</option>
<option value="MejaisSeelenstehler" <?php if($fullitemIIII == "MejaisSeelenstehler"){echo (" selected"); } ?>>Mejais Seelenstehler</option>
<option value="SehenderRubinstein" <?php if($fullitemIIII == "SehenderRubinstein"){echo (" selected"); } ?>>Sehender Rubinstein</option>
<option value="AugeDerOase" <?php if($fullitemIIII == "AugeDerOase"){echo (" selected"); } ?>>Auge der Oase</option>
<option value="Befreiungsschlag" <?php if($fullitemIIII == "Befreiungsschlag"){echo (" selected"); } ?>>Befreiungsschlag</option>
<option value="AthenesUnheiligerGral" <?php if($fullitemIIII == "AthenesUnheiligerGral"){echo (" selected"); } ?>>Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel" <?php if($fullitemIIII == "MikaelsSchmelztiegel"){echo (" selected"); } ?>>Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter" <?php if($fullitemIIII == "AugeDerWaechter"){echo (" selected"); } ?>>Auge der W&aumlchter </option>
<option value="Kommandobanner" <?php if($fullitemIIII == "Kommandobanner"){echo (" selected"); } ?>>Kommandobanner</option>
<option value="AmulettDesAufstiegs" <?php if($fullitemIIII == "AmulettDesAufstiegs"){echo (" selected"); } ?>>Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin" <?php if($fullitemIIII == "AnrechtDerFrostkoenigin"){echo (" selected"); } ?>>Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur" <?php if($fullitemIIII == "Ritterschwur"){echo (" selected"); } ?>>Ritterschwur</option>
<option value="AmulettDerEisernenSolari" <?php if($fullitemIIII == "AmulettDerEisernenSolari"){echo (" selected"); } ?>>Amulett der eisernen Solari </option>
<option value="Gebirgspanzer" <?php if($fullitemIIII == "Gebirgspanzer"){echo (" selected"); } ?>>Gebirgspanzer</option>
<option value="ZekesKonvergenz" <?php if($fullitemIIII == "ZekesKonvergenz"){echo (" selected"); } ?>>Zekes Konvergenz</option>
<option value="AugeDerSonnenwende" <?php if($fullitemIIII == "AugeDerSonnenwende"){echo (" selected"); } ?>>Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker" <?php if($fullitemIIII == "GluehenderRauchschwenker"){echo (" selected"); } ?>>Gl&uumlhender Rauchschwenker</option>
<option value="Manamune" <?php if($fullitemIIII == "Manamune"){echo (" selected"); } ?>>Manamune</option>
<option value="Schutzengel" <?php if($fullitemIIII == "Schutzengel"){echo (" selected"); } ?>>Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss" <?php if($fullitemIIII == "KlingeDesPirschersGlutkoloss"){echo (" selected"); } ?>>Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss" <?php if($fullitemIIII == "MesserDesFaehrtenlesersGlutkoloss"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss" <?php if($fullitemIIII == "SaebelDesPlaenklersGlutkoloss"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit" <?php if($fullitemIIII == "EndeDerWeisheit"){echo (" selected"); } ?>>Ende der Weisheit</option>
<option value="HextechProtoguertel01" <?php if($fullitemIIII == "HextechProtoguertel01"){echo (" selected"); } ?>>Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers" <?php if($fullitemIIII == "SteinpanzerDesWasserspeiers"){echo (" selected"); } ?>>Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung" <?php if($fullitemIIII == "SterblicheMahnung"){echo (" selected"); } ?>>Sterbliche Mahnung</option>
<option value="LordDominiksGruesze" <?php if($fullitemIIII == "LordDominiksGruesze"){echo (" selected"); } ?>>Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer" <?php if($fullitemIIII == "Phantomtaenzer"){echo (" selected"); } ?>>Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm" <?php if($fullitemIIII == "RunaansWirbelsturm"){echo (" selected"); } ?>>Runaans Wirbelsturm</option>
<option value="StatikksStich" <?php if($fullitemIIII == "StatikksStich"){echo (" selected"); } ?>>Statikks Stich</option>
<option value="SchnellfeuerGeschuetz" <?php if($fullitemIIII == "SchnellfeuerGeschuetz"){echo (" selected"); } ?>>Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter" <?php if($fullitemIIII == "RylaisKristallzepter"){echo (" selected"); } ?>>Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger" <?php if($fullitemIIII == "KlingeDesPirschersKrieger"){echo (" selected"); } ?>>Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho" <?php if($fullitemIIII == "KlingeDesPirschersRunenecho"){echo (" selected"); } ?>>Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger" <?php if($fullitemIIII == "MesserDesFaehrtenlesersKrieger"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho" <?php if($fullitemIIII == "MesserDesFaehrtenlesersRunenecho"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger" <?php if($fullitemIIII == "SaebelDesPlaenklersKrieger"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho" <?php if($fullitemIIII == "SaebelDesPlaenklersRunenecho"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter" <?php if($fullitemIIII == "KlingeDesPirschersBlutschnitter"){echo (" selected"); } ?>>Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter" <?php if($fullitemIIII == "MesserDesFaehrtenlesersBlutschnitter"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter" <?php if($fullitemIIII == "SaebelDesPlaenklersBlutschnitter"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer" <?php if($fullitemIIII == "Ohmzerstoerer"){echo (" selected"); } ?>>Ohmzerst&oumlrer </option>
<option value="Leerenstab" <?php if($fullitemIIII == "Leerenstab"){echo (" selected"); } ?>>Leerenstab</option>
<option value="RedlichePracht" <?php if($fullitemIIII == "RedlichePracht"){echo (" selected"); } ?>>Redliche Pracht</option>
<option value="EisgeborenenHandschuhe" <?php if($fullitemIIII == "EisgeborenenHandschuhe"){echo (" selected"); } ?>>Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter" <?php if($fullitemIIII == "StabDerZeitalter"){echo (" selected"); } ?>>Stab der Zeitalter</option>
<option value="GefrorenesHerz" <?php if($fullitemIIII == "GefrorenesHerz"){echo (" selected"); } ?>>Gefrorenes Herz</option>
<option value="ZzRotPortal" <?php if($fullitemIIII == "ZzRotPortal"){echo (" selected"); } ?>>Zz'Rot-Portal</option>
<option value="Geistessicht" <?php if($fullitemIIII == "Geistessicht"){echo (" selected"); } ?>>Geistessicht</option>
<option value="AdaptiverHelm" <?php if($fullitemIIII == "AdaptiverHelm"){echo (" selected"); } ?>>Adaptiver Helm</option>
<option value="WarmogsRuestung" <?php if($fullitemIIII == "WarmogsRuestung"){echo (" selected"); } ?>>Warmogs R&uumlstung </option>
<option value="Hoellenmaske" <?php if($fullitemIIII == "Hoellenmaske"){echo (" selected"); } ?>>H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang" <?php if($fullitemIIII == "SonnenfeuerUmhang"){echo (" selected"); } ?>>Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer" <?php if($fullitemIIII == "Dornenpanzer"){echo (" selected"); } ?>>Dornenpanzer</option>
<option value="YoumusGeistklinge" <?php if($fullitemIIII == "YoumusGeistklinge"){echo (" selected"); } ?>>Youmus Geistklinge</option>
<option value="RanduinsOmen" <?php if($fullitemIIII == "RanduinsOmen"){echo (" selected"); } ?>>Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr" <?php if($fullitemIIII == "DaemmerungsklingeVonDraktharr"){echo (" selected"); } ?>>D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas" <?php if($fullitemIIII == "ZhonyasStundenglas"){echo (" selected"); } ?>>Zhonyas Stundenglas</option>
<option value="Morellonomikon" <?php if($fullitemIIII == "Morellonomikon"){echo (" selected"); } ?>>Morellonomikon</option>
<option value="PanzerDesTotenMannes" <?php if($fullitemIIII == "PanzerDesTotenMannes"){echo (" selected"); } ?>>Panzer des toten Mannes</option>
<option value="HextechGLP800" <?php if($fullitemIIII == "HextechGLP800"){echo (" selected"); } ?>>Hextech-GLP 800</option>
<option value="SchwarzesBeil" <?php if($fullitemIIII == "SchwarzesBeil"){echo (" selected"); } ?>>Schwarzes Beil</option>
<option value="SchleierDerTodesfee" <?php if($fullitemIIII == "SchleierDerTodesfee"){echo (" selected"); } ?>>Schleier der Todesfee</option>
<option value="NashorsZahn" <?php if($fullitemIIII == "NashorsZahn"){echo (" selected"); } ?>>Nashors Zahn</option>
<option value="PerfekterHexKern" <?php if($fullitemIIII == "PerfekterHexKern"){echo (" selected"); } ?>>Perfekter Hex-Kern</option>
<option value="StabDesErzengels" <?php if($fullitemIIII == "StabDesErzengels"){echo (" selected"); } ?>>Stab des Erzengels</option>
<option value="Frosthammer" <?php if($fullitemIIII == "Frosthammer"){echo (" selected"); } ?>>Frosthammer</option>
<option value="LiandrysQual" <?php if($fullitemIIII == "LiandrysQual"){echo (" selected"); } ?>>Liandrys Qual</option>
<option value="SaumDerNacht" <?php if($fullitemIIII == "SaumDerNacht"){echo (" selected"); } ?>>Saum der Nacht</option>
<option value="SteraksPegel" <?php if($fullitemIIII == "SteraksPegel"){echo (" selected"); } ?>>Steraks Pegel</option>
<option value="FluchDesLichs" <?php if($fullitemIIII == "FluchDesLichs"){echo (" selected"); } ?>>Fluch des Lichs</option>
<option value="LudensEcho" <?php if($fullitemIIII == "LudensEcho"){echo (" selected"); } ?>>Ludens Echo</option>
<option value="SchlundDesMalmortius" <?php if($fullitemIIII == "SchlundDesMalmortius"){echo (" selected"); } ?>>Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit" <?php if($fullitemIIII == "KlingeDerUnendlichkeit"){echo (" selected"); } ?>>Klinge der Unendlichkeit</option>
<option value="HextechGunblade" <?php if($fullitemIIII == "HextechGunblade"){echo (" selected"); } ?>>Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs" <?php if($fullitemIIII == "KlingeDesgestuerztenKoenigs"){echo (" selected"); } ?>>Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber" <?php if($fullitemIIII == "Essenzraeuber"){echo (" selected"); } ?>>Essenzr&aumluber </option>
<option value="GefraeszigeHydra" <?php if($fullitemIIII == "GefraeszigeHydra"){echo (" selected"); } ?>>Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra" <?php if($fullitemIIII == "TitanischeHydra"){echo (" selected"); } ?>>Titanische Hydra</option>
<option value="TanzDesTodes" <?php if($fullitemIIII == "TanzDesTodes"){echo (" selected"); } ?>>Tanz des Todes</option>
<option value="GuinsoosWutklinge" <?php if($fullitemIIII == "GuinsoosWutklinge"){echo (" selected"); } ?>>Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel" <?php if($fullitemIIII == "FlinkerKrummsaebel"){echo (" selected"); } ?>>Flinker Krumms&aumlbel </option>
<option value="Blutduerster" <?php if($fullitemIIII == "Blutduerster"){echo (" selected"); } ?>>Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit" <?php if($fullitemIIII == "StaerkeDerDreieinigkeit"){echo (" selected"); } ?>>St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube" <?php if($fullitemIIII == "RabadonsTodeshaube"){echo (" selected"); } ?>>Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 5:<br>
<select name="fullitemIIIII">
<option value="keinItem" <?php if($fullitemIIIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="StiefelDerWendigkeit" <?php if($fullitemIIIII == "StiefelDerWendigkeit"){echo (" selected"); } ?>>Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit" <?php if($fullitemIIIII == "StiefelDerBeweglichkeit"){echo (" selected"); } ?>>Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit" <?php if($fullitemIIIII == "IonischeStiefelDerDeutlichkeit"){echo (" selected"); } ?>>Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers" <?php if($fullitemIIIII == "BeinschienenDesBerserkers"){echo (" selected"); } ?>>Beinschienen des Berserkers</option>
<option value="Zaubererschuhe" <?php if($fullitemIIIII == "Zaubererschuhe"){echo (" selected"); } ?>>Zaubererschuhe</option>
<option value="NinjaTabi"<?php if($fullitemIIIII == "NinjaTabi"){echo (" selected"); } ?>>Ninja-Tabi</option>
<option value="MerkursSchuhe" <?php if($fullitemIIIII == "MerkursSchuhe"){echo (" selected"); } ?>>Merkurs Schuhe</option>
<option value="MejaisSeelenstehler" <?php if($fullitemIIIII == "MejaisSeelenstehler"){echo (" selected"); } ?>>Mejais Seelenstehler</option>
<option value="SehenderRubinstein" <?php if($fullitemIIIII == "SehenderRubinstein"){echo (" selected"); } ?>>Sehender Rubinstein</option>
<option value="AugeDerOase" <?php if($fullitemIIIII == "AugeDerOase"){echo (" selected"); } ?>>Auge der Oase</option>
<option value="Befreiungsschlag" <?php if($fullitemIIIII == "Befreiungsschlag"){echo (" selected"); } ?>>Befreiungsschlag</option>
<option value="AthenesUnheiligerGral" <?php if($fullitemIIIII == "AthenesUnheiligerGral"){echo (" selected"); } ?>>Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel" <?php if($fullitemIIIII == "MikaelsSchmelztiegel"){echo (" selected"); } ?>>Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter" <?php if($fullitemIIIII == "AugeDerWaechter"){echo (" selected"); } ?>>Auge der W&aumlchter </option>
<option value="Kommandobanner" <?php if($fullitemIIIII == "Kommandobanner"){echo (" selected"); } ?>>Kommandobanner</option>
<option value="AmulettDesAufstiegs" <?php if($fullitemIIIII == "AmulettDesAufstiegs"){echo (" selected"); } ?>>Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin" <?php if($fullitemIIIII == "AnrechtDerFrostkoenigin"){echo (" selected"); } ?>>Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur" <?php if($fullitemIIIII == "Ritterschwur"){echo (" selected"); } ?>>Ritterschwur</option>
<option value="AmulettDerEisernenSolari" <?php if($fullitemIIIII == "AmulettDerEisernenSolari"){echo (" selected"); } ?>>Amulett der eisernen Solari </option>
<option value="Gebirgspanzer" <?php if($fullitemIIIII == "Gebirgspanzer"){echo (" selected"); } ?>>Gebirgspanzer</option>
<option value="ZekesKonvergenz" <?php if($fullitemIIIII == "ZekesKonvergenz"){echo (" selected"); } ?>>Zekes Konvergenz</option>
<option value="AugeDerSonnenwende" <?php if($fullitemIIIII == "AugeDerSonnenwende"){echo (" selected"); } ?>>Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker" <?php if($fullitemIIIII == "GluehenderRauchschwenker"){echo (" selected"); } ?>>Gl&uumlhender Rauchschwenker</option>
<option value="Manamune" <?php if($fullitemIIIII == "Manamune"){echo (" selected"); } ?>>Manamune</option>
<option value="Schutzengel" <?php if($fullitemIIIII == "Schutzengel"){echo (" selected"); } ?>>Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss" <?php if($fullitemIIIII == "KlingeDesPirschersGlutkoloss"){echo (" selected"); } ?>>Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss" <?php if($fullitemIIIII == "MesserDesFaehrtenlesersGlutkoloss"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss" <?php if($fullitemIIIII == "SaebelDesPlaenklersGlutkoloss"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit" <?php if($fullitemIIIII == "EndeDerWeisheit"){echo (" selected"); } ?>>Ende der Weisheit</option>
<option value="HextechProtoguertel01" <?php if($fullitemIIIII == "HextechProtoguertel01"){echo (" selected"); } ?>>Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers" <?php if($fullitemIIIII == "SteinpanzerDesWasserspeiers"){echo (" selected"); } ?>>Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung" <?php if($fullitemIIIII == "SterblicheMahnung"){echo (" selected"); } ?>>Sterbliche Mahnung</option>
<option value="LordDominiksGruesze" <?php if($fullitemIIIII == "LordDominiksGruesze"){echo (" selected"); } ?>>Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer" <?php if($fullitemIIIII == "Phantomtaenzer"){echo (" selected"); } ?>>Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm" <?php if($fullitemIIIII == "RunaansWirbelsturm"){echo (" selected"); } ?>>Runaans Wirbelsturm</option>
<option value="StatikksStich" <?php if($fullitemIIIII == "StatikksStich"){echo (" selected"); } ?>>Statikks Stich</option>
<option value="SchnellfeuerGeschuetz" <?php if($fullitemIIIII == "SchnellfeuerGeschuetz"){echo (" selected"); } ?>>Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter" <?php if($fullitemIIIII == "RylaisKristallzepter"){echo (" selected"); } ?>>Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger" <?php if($fullitemIIIII == "KlingeDesPirschersKrieger"){echo (" selected"); } ?>>Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho" <?php if($fullitemIIIII == "KlingeDesPirschersRunenecho"){echo (" selected"); } ?>>Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger" <?php if($fullitemIIIII == "MesserDesFaehrtenlesersKrieger"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho" <?php if($fullitemIIIII == "MesserDesFaehrtenlesersRunenecho"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger" <?php if($fullitemIIIII == "SaebelDesPlaenklersKrieger"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho" <?php if($fullitemIIIII == "SaebelDesPlaenklersRunenecho"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter" <?php if($fullitemIIIII == "KlingeDesPirschersBlutschnitter"){echo (" selected"); } ?>>Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter" <?php if($fullitemIIIII == "MesserDesFaehrtenlesersBlutschnitter"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter" <?php if($fullitemIIIII == "SaebelDesPlaenklersBlutschnitter"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer" <?php if($fullitemIIIII == "Ohmzerstoerer"){echo (" selected"); } ?>>Ohmzerst&oumlrer </option>
<option value="Leerenstab" <?php if($fullitemIIIII == "Leerenstab"){echo (" selected"); } ?>>Leerenstab</option>
<option value="RedlichePracht" <?php if($fullitemIIIII == "RedlichePracht"){echo (" selected"); } ?>>Redliche Pracht</option>
<option value="EisgeborenenHandschuhe" <?php if($fullitemIIIII == "EisgeborenenHandschuhe"){echo (" selected"); } ?>>Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter" <?php if($fullitemIIIII == "StabDerZeitalter"){echo (" selected"); } ?>>Stab der Zeitalter</option>
<option value="GefrorenesHerz" <?php if($fullitemIIIII == "GefrorenesHerz"){echo (" selected"); } ?>>Gefrorenes Herz</option>
<option value="ZzRotPortal" <?php if($fullitemIIIII == "ZzRotPortal"){echo (" selected"); } ?>>Zz'Rot-Portal</option>
<option value="Geistessicht" <?php if($fullitemIIIII == "Geistessicht"){echo (" selected"); } ?>>Geistessicht</option>
<option value="AdaptiverHelm" <?php if($fullitemIIIII == "AdaptiverHelm"){echo (" selected"); } ?>>Adaptiver Helm</option>
<option value="WarmogsRuestung" <?php if($fullitemIIIII == "WarmogsRuestung"){echo (" selected"); } ?>>Warmogs R&uumlstung </option>
<option value="Hoellenmaske" <?php if($fullitemIIIII == "Hoellenmaske"){echo (" selected"); } ?>>H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang" <?php if($fullitemIIIII == "SonnenfeuerUmhang"){echo (" selected"); } ?>>Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer" <?php if($fullitemIIIII == "Dornenpanzer"){echo (" selected"); } ?>>Dornenpanzer</option>
<option value="YoumusGeistklinge" <?php if($fullitemIIIII == "YoumusGeistklinge"){echo (" selected"); } ?>>Youmus Geistklinge</option>
<option value="RanduinsOmen" <?php if($fullitemIIIII == "RanduinsOmen"){echo (" selected"); } ?>>Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr" <?php if($fullitemIIIII == "DaemmerungsklingeVonDraktharr"){echo (" selected"); } ?>>D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas" <?php if($fullitemIIIII == "ZhonyasStundenglas"){echo (" selected"); } ?>>Zhonyas Stundenglas</option>
<option value="Morellonomikon" <?php if($fullitemIIIII == "Morellonomikon"){echo (" selected"); } ?>>Morellonomikon</option>
<option value="PanzerDesTotenMannes" <?php if($fullitemIIIII == "PanzerDesTotenMannes"){echo (" selected"); } ?>>Panzer des toten Mannes</option>
<option value="HextechGLP800" <?php if($fullitemIIIII == "HextechGLP800"){echo (" selected"); } ?>>Hextech-GLP 800</option>
<option value="SchwarzesBeil" <?php if($fullitemIIIII == "SchwarzesBeil"){echo (" selected"); } ?>>Schwarzes Beil</option>
<option value="SchleierDerTodesfee" <?php if($fullitemIIIII == "SchleierDerTodesfee"){echo (" selected"); } ?>>Schleier der Todesfee</option>
<option value="NashorsZahn" <?php if($fullitemIIIII == "NashorsZahn"){echo (" selected"); } ?>>Nashors Zahn</option>
<option value="PerfekterHexKern" <?php if($fullitemIIIII == "PerfekterHexKern"){echo (" selected"); } ?>>Perfekter Hex-Kern</option>
<option value="StabDesErzengels" <?php if($fullitemIIIII == "StabDesErzengels"){echo (" selected"); } ?>>Stab des Erzengels</option>
<option value="Frosthammer" <?php if($fullitemIIIII == "Frosthammer"){echo (" selected"); } ?>>Frosthammer</option>
<option value="LiandrysQual" <?php if($fullitemIIIII == "LiandrysQual"){echo (" selected"); } ?>>Liandrys Qual</option>
<option value="SaumDerNacht" <?php if($fullitemIIIII == "SaumDerNacht"){echo (" selected"); } ?>>Saum der Nacht</option>
<option value="SteraksPegel" <?php if($fullitemIIIII == "SteraksPegel"){echo (" selected"); } ?>>Steraks Pegel</option>
<option value="FluchDesLichs" <?php if($fullitemIIIII == "FluchDesLichs"){echo (" selected"); } ?>>Fluch des Lichs</option>
<option value="LudensEcho" <?php if($fullitemIIIII == "LudensEcho"){echo (" selected"); } ?>>Ludens Echo</option>
<option value="SchlundDesMalmortius" <?php if($fullitemIIIII == "SchlundDesMalmortius"){echo (" selected"); } ?>>Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit" <?php if($fullitemIIIII == "KlingeDerUnendlichkeit"){echo (" selected"); } ?>>Klinge der Unendlichkeit</option>
<option value="HextechGunblade" <?php if($fullitemIIIII == "HextechGunblade"){echo (" selected"); } ?>>Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs" <?php if($fullitemIIIII == "KlingeDesgestuerztenKoenigs"){echo (" selected"); } ?>>Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber" <?php if($fullitemIIIII == "Essenzraeuber"){echo (" selected"); } ?>>Essenzr&aumluber </option>
<option value="GefraeszigeHydra" <?php if($fullitemIIIII == "GefraeszigeHydra"){echo (" selected"); } ?>>Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra" <?php if($fullitemIIIII == "TitanischeHydra"){echo (" selected"); } ?>>Titanische Hydra</option>
<option value="TanzDesTodes" <?php if($fullitemIIIII == "TanzDesTodes"){echo (" selected"); } ?>>Tanz des Todes</option>
<option value="GuinsoosWutklinge" <?php if($fullitemIIIII == "GuinsoosWutklinge"){echo (" selected"); } ?>>Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel" <?php if($fullitemIIIII == "FlinkerKrummsaebel"){echo (" selected"); } ?>>Flinker Krumms&aumlbel </option>
<option value="Blutduerster" <?php if($fullitemIIIII == "Blutduerster"){echo (" selected"); } ?>>Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit" <?php if($fullitemIIIII == "StaerkeDerDreieinigkeit"){echo (" selected"); } ?>>St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube" <?php if($fullitemIIIII == "RabadonsTodeshaube"){echo (" selected"); } ?>>Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 6:<br>
<select name="fullitemIIIIII">
<option value="keinItem" <?php if($fullitemIIIIII == "keinItem"){echo (" selected"); } ?>>-Kein Item-</option>
<option value="StiefelDerWendigkeit" <?php if($fullitemIIIIII == "StiefelDerWendigkeit"){echo (" selected"); } ?>>Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit" <?php if($fullitemIIIIII == "StiefelDerBeweglichkeit"){echo (" selected"); } ?>>Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit" <?php if($fullitemIIIIII == "IonischeStiefelDerDeutlichkeit"){echo (" selected"); } ?>>Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers" <?php if($fullitemIIIIII == "BeinschienenDesBerserkers"){echo (" selected"); } ?>>Beinschienen des Berserkers</option>
<option value="Zaubererschuhe" <?php if($fullitemIIIIII == "Zaubererschuhe"){echo (" selected"); } ?>>Zaubererschuhe</option>
<option value="NinjaTabi"<?php if($fullitemIIIIII == "NinjaTabi"){echo (" selected"); } ?>>Ninja-Tabi</option>
<option value="MerkursSchuhe" <?php if($fullitemIIIIII == "MerkursSchuhe"){echo (" selected"); } ?>>Merkurs Schuhe</option>
<option value="MejaisSeelenstehler" <?php if($fullitemIIIIII == "MejaisSeelenstehler"){echo (" selected"); } ?>>Mejais Seelenstehler</option>
<option value="SehenderRubinstein" <?php if($fullitemIIIIII == "SehenderRubinstein"){echo (" selected"); } ?>>Sehender Rubinstein</option>
<option value="AugeDerOase" <?php if($fullitemIIIIII == "AugeDerOase"){echo (" selected"); } ?>>Auge der Oase</option>
<option value="Befreiungsschlag" <?php if($fullitemIIIIII == "Befreiungsschlag"){echo (" selected"); } ?>>Befreiungsschlag</option>
<option value="AthenesUnheiligerGral" <?php if($fullitemIIIIII == "AthenesUnheiligerGral"){echo (" selected"); } ?>>Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel" <?php if($fullitemIIIIII == "MikaelsSchmelztiegel"){echo (" selected"); } ?>>Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter" <?php if($fullitemIIIIII == "AugeDerWaechter"){echo (" selected"); } ?>>Auge der W&aumlchter </option>
<option value="Kommandobanner" <?php if($fullitemIIIIII == "Kommandobanner"){echo (" selected"); } ?>>Kommandobanner</option>
<option value="AmulettDesAufstiegs" <?php if($fullitemIIIIII == "AmulettDesAufstiegs"){echo (" selected"); } ?>>Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin" <?php if($fullitemIIIIII == "AnrechtDerFrostkoenigin"){echo (" selected"); } ?>>Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur" <?php if($fullitemIIIIII == "Ritterschwur"){echo (" selected"); } ?>>Ritterschwur</option>
<option value="AmulettDerEisernenSolari" <?php if($fullitemIIIIII == "AmulettDerEisernenSolari"){echo (" selected"); } ?>>Amulett der eisernen Solari </option>
<option value="Gebirgspanzer" <?php if($fullitemIIIIII == "Gebirgspanzer"){echo (" selected"); } ?>>Gebirgspanzer</option>
<option value="ZekesKonvergenz" <?php if($fullitemIIIIII == "ZekesKonvergenz"){echo (" selected"); } ?>>Zekes Konvergenz</option>
<option value="AugeDerSonnenwende" <?php if($fullitemIIIIII == "AugeDerSonnenwende"){echo (" selected"); } ?>>Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker" <?php if($fullitemIIIIII == "GluehenderRauchschwenker"){echo (" selected"); } ?>>Gl&uumlhender Rauchschwenker</option>
<option value="Manamune" <?php if($fullitemIIIIII == "Manamune"){echo (" selected"); } ?>>Manamune</option>
<option value="Schutzengel" <?php if($fullitemIIIIII == "Schutzengel"){echo (" selected"); } ?>>Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss" <?php if($fullitemIIIIII == "KlingeDesPirschersGlutkoloss"){echo (" selected"); } ?>>Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss" <?php if($fullitemIIIIII == "MesserDesFaehrtenlesersGlutkoloss"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss" <?php if($fullitemIIIIII == "SaebelDesPlaenklersGlutkoloss"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit" <?php if($fullitemIIIIII == "EndeDerWeisheit"){echo (" selected"); } ?>>Ende der Weisheit</option>
<option value="HextechProtoguertel01" <?php if($fullitemIIIIII == "HextechProtoguertel01"){echo (" selected"); } ?>>Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers" <?php if($fullitemIIIIII == "SteinpanzerDesWasserspeiers"){echo (" selected"); } ?>>Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung" <?php if($fullitemIIIIII == "SterblicheMahnung"){echo (" selected"); } ?>>Sterbliche Mahnung</option>
<option value="LordDominiksGruesze" <?php if($fullitemIIIIII == "LordDominiksGruesze"){echo (" selected"); } ?>>Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer" <?php if($fullitemIIIIII == "Phantomtaenzer"){echo (" selected"); } ?>>Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm" <?php if($fullitemIIIIII == "RunaansWirbelsturm"){echo (" selected"); } ?>>Runaans Wirbelsturm</option>
<option value="StatikksStich" <?php if($fullitemIIIIII == "StatikksStich"){echo (" selected"); } ?>>Statikks Stich</option>
<option value="SchnellfeuerGeschuetz" <?php if($fullitemIIIIII == "SchnellfeuerGeschuetz"){echo (" selected"); } ?>>Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter" <?php if($fullitemIIIIII == "RylaisKristallzepter"){echo (" selected"); } ?>>Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger" <?php if($fullitemIIIIII == "KlingeDesPirschersKrieger"){echo (" selected"); } ?>>Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho" <?php if($fullitemIIIIII == "KlingeDesPirschersRunenecho"){echo (" selected"); } ?>>Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger" <?php if($fullitemIIIIII == "MesserDesFaehrtenlesersKrieger"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho" <?php if($fullitemIIIIII == "MesserDesFaehrtenlesersRunenecho"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger" <?php if($fullitemIIIIII == "SaebelDesPlaenklersKrieger"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho" <?php if($fullitemIIIIII == "SaebelDesPlaenklersRunenecho"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter" <?php if($fullitemIIIIII == "KlingeDesPirschersBlutschnitter"){echo (" selected"); } ?>>Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter" <?php if($fullitemIIIIII == "MesserDesFaehrtenlesersBlutschnitter"){echo (" selected"); } ?>>Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter" <?php if($fullitemIIIIII == "SaebelDesPlaenklersBlutschnitter"){echo (" selected"); } ?>>S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer" <?php if($fullitemIIIIII == "Ohmzerstoerer"){echo (" selected"); } ?>>Ohmzerst&oumlrer </option>
<option value="Leerenstab" <?php if($fullitemIIIIII == "Leerenstab"){echo (" selected"); } ?>>Leerenstab</option>
<option value="RedlichePracht" <?php if($fullitemIIIIII == "RedlichePracht"){echo (" selected"); } ?>>Redliche Pracht</option>
<option value="EisgeborenenHandschuhe" <?php if($fullitemIIIIII == "EisgeborenenHandschuhe"){echo (" selected"); } ?>>Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter" <?php if($fullitemIIIIII == "StabDerZeitalter"){echo (" selected"); } ?>>Stab der Zeitalter</option>
<option value="GefrorenesHerz" <?php if($fullitemIIIIII == "GefrorenesHerz"){echo (" selected"); } ?>>Gefrorenes Herz</option>
<option value="ZzRotPortal" <?php if($fullitemIIIIII == "ZzRotPortal"){echo (" selected"); } ?>>Zz'Rot-Portal</option>
<option value="Geistessicht" <?php if($fullitemIIIIII == "Geistessicht"){echo (" selected"); } ?>>Geistessicht</option>
<option value="AdaptiverHelm" <?php if($fullitemIIIIII == "AdaptiverHelm"){echo (" selected"); } ?>>Adaptiver Helm</option>
<option value="WarmogsRuestung" <?php if($fullitemIIIIII == "WarmogsRuestung"){echo (" selected"); } ?>>Warmogs R&uumlstung </option>
<option value="Hoellenmaske" <?php if($fullitemIIIIII == "Hoellenmaske"){echo (" selected"); } ?>>H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang" <?php if($fullitemIIIIII == "SonnenfeuerUmhang"){echo (" selected"); } ?>>Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer" <?php if($fullitemIIIIII == "Dornenpanzer"){echo (" selected"); } ?>>Dornenpanzer</option>
<option value="YoumusGeistklinge" <?php if($fullitemIIIIII == "YoumusGeistklinge"){echo (" selected"); } ?>>Youmus Geistklinge</option>
<option value="RanduinsOmen" <?php if($fullitemIIIIII == "RanduinsOmen"){echo (" selected"); } ?>>Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr" <?php if($fullitemIIIIII == "DaemmerungsklingeVonDraktharr"){echo (" selected"); } ?>>D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas" <?php if($fullitemIIIIII == "ZhonyasStundenglas"){echo (" selected"); } ?>>Zhonyas Stundenglas</option>
<option value="Morellonomikon" <?php if($fullitemIIIIII == "Morellonomikon"){echo (" selected"); } ?>>Morellonomikon</option>
<option value="PanzerDesTotenMannes" <?php if($fullitemIIIIII == "PanzerDesTotenMannes"){echo (" selected"); } ?>>Panzer des toten Mannes</option>
<option value="HextechGLP800" <?php if($fullitemIIIIII == "HextechGLP800"){echo (" selected"); } ?>>Hextech-GLP 800</option>
<option value="SchwarzesBeil" <?php if($fullitemIIIIII == "SchwarzesBeil"){echo (" selected"); } ?>>Schwarzes Beil</option>
<option value="SchleierDerTodesfee" <?php if($fullitemIIIIII == "SchleierDerTodesfee"){echo (" selected"); } ?>>Schleier der Todesfee</option>
<option value="NashorsZahn" <?php if($fullitemIIIIII == "NashorsZahn"){echo (" selected"); } ?>>Nashors Zahn</option>
<option value="PerfekterHexKern" <?php if($fullitemIIIIII == "PerfekterHexKern"){echo (" selected"); } ?>>Perfekter Hex-Kern</option>
<option value="StabDesErzengels" <?php if($fullitemIIIIII == "StabDesErzengels"){echo (" selected"); } ?>>Stab des Erzengels</option>
<option value="Frosthammer" <?php if($fullitemIIIIII == "Frosthammer"){echo (" selected"); } ?>>Frosthammer</option>
<option value="LiandrysQual" <?php if($fullitemIIIIII == "LiandrysQual"){echo (" selected"); } ?>>Liandrys Qual</option>
<option value="SaumDerNacht" <?php if($fullitemIIIIII == "SaumDerNacht"){echo (" selected"); } ?>>Saum der Nacht</option>
<option value="SteraksPegel" <?php if($fullitemIIIIII == "SteraksPegel"){echo (" selected"); } ?>>Steraks Pegel</option>
<option value="FluchDesLichs" <?php if($fullitemIIIIII == "FluchDesLichs"){echo (" selected"); } ?>>Fluch des Lichs</option>
<option value="LudensEcho" <?php if($fullitemIIIIII == "LudensEcho"){echo (" selected"); } ?>>Ludens Echo</option>
<option value="SchlundDesMalmortius" <?php if($fullitemIIIIII == "SchlundDesMalmortius"){echo (" selected"); } ?>>Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit" <?php if($fullitemIIIIII == "KlingeDerUnendlichkeit"){echo (" selected"); } ?>>Klinge der Unendlichkeit</option>
<option value="HextechGunblade" <?php if($fullitemIIIIII == "HextechGunblade"){echo (" selected"); } ?>>Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs" <?php if($fullitemIIIIII == "KlingeDesgestuerztenKoenigs"){echo (" selected"); } ?>>Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber" <?php if($fullitemIIIIII == "Essenzraeuber"){echo (" selected"); } ?>>Essenzr&aumluber </option>
<option value="GefraeszigeHydra" <?php if($fullitemIIIIII == "GefraeszigeHydra"){echo (" selected"); } ?>>Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra" <?php if($fullitemIIIIII == "TitanischeHydra"){echo (" selected"); } ?>>Titanische Hydra</option>
<option value="TanzDesTodes" <?php if($fullitemIIIIII == "TanzDesTodes"){echo (" selected"); } ?>>Tanz des Todes</option>
<option value="GuinsoosWutklinge" <?php if($fullitemIIIIII == "GuinsoosWutklinge"){echo (" selected"); } ?>>Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel" <?php if($fullitemIIIIII == "FlinkerKrummsaebel"){echo (" selected"); } ?>>Flinker Krumms&aumlbel </option>
<option value="Blutduerster" <?php if($fullitemIIIIII == "Blutduerster"){echo (" selected"); } ?>>Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit" <?php if($fullitemIIIIII == "StaerkeDerDreieinigkeit"){echo (" selected"); } ?>>St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube" <?php if($fullitemIIIIII == "RabadonsTodeshaube"){echo (" selected"); } ?>>Rabadons Todeshaube</option>
</select></label></p>
<p><label>Erkl&aumlrung (Fullbuild):<br>
<textarea name="textfullitems" cols="50" rows="8"><?php echo("$erII"); ?></textarea></label></p>
</fieldset>
<br>
<fieldset>
<legend>Weitere Infos</legend>
<p><label>Erkl&aumlrung (Sonstiges):<br>
<textarea name="textsonstiges" cols="50" rows="8"><?php echo("$erIII"); ?></textarea></label></p>
</fieldset>
<br>
<fieldset>
<legend>Runen</legend>
<p><label>Runentree<br>
	<label for="przision"><font color="#5e5400">Pr&aumlzision </font></label>
	<input type="radio" id="przision" name="Tree" <?php if($tree == "Pr&aumlzision"){echo("checked");} ?> value="Pr&aumlzision">
	<br>
	<label for="dominanz"><font color="#5e0000">Dominanz </font></label>
	<input type="radio" id="dominanz" name="Tree"  <?php if($tree == "Dominanz"){echo("checked");} ?> value="Dominanz">
	<br>
	<label for="zauberei"><font color="#001c5e">Zauberei </font></label>
	<input type="radio" id="zauberei" name="Tree" <?php if($tree == "Zauberei"){echo("checked");} ?> value="Zauberei">
	<br>
	<label for="entschlossen"><font color="#045e00">Entschlossenheit</font></label>
	<input type="radio" id="entschlossen" name="Tree" <?php if($tree == "Entschlossenheit"){echo("checked");} ?> value="Entschlossenheit">
	<br>
	<label for="inspiration"><font color="#005c5e">Inspiration</font></label>
	<input type="radio" id="inspiration" name="Tree" <?php if($tree == "Inspiration"){echo("checked");} ?> value="Inspiration">
  </p>
  </label>
  
  <p><label>Keystone-Rune<br>
	<label for="keystoneI">
	<font color="#5e5400">Fokussierter Angriff</font>/
	<font color="#5e0000">Elektrisieren</font>/
	<font color="#001c5e">Benefee-Beschw&oumlrung </font>/
	<font color="#045e00">Umklammerung der Untoten</font>/
	<font color="#005c5e">Entsiegeltes Zauberbuch</font>
	</label>
	<input type="radio" id="keystoneI" name="Keystone" <?php if($keystone == "KeystoneI"){echo("checked");} ?> value="KeystoneI">
	<br>
	<label for="keystoneII">
	<font color="#5e5400">T&oumldliches Tempo</font>/
	<font color="#5e0000">R&aumluber </font>/
	<font color="#001c5e">Arkaner Komet</font>/
	<font color="#045e00">Nachbeben</font>/
	<font color="#005c5e">Eiszeit</font>
	</label>
	<input type="radio" id="keystoneII" name="Keystone" <?php if($keystone == "KeystoneII"){echo("checked");} ?> value="KeystoneII">
	<br>
	<label for="keystoneIII">
	<font color="#5e5400">Leichtf&uumlssigkeit </font>/
	<font color="#5e0000">Dunkle Seelenernte</font>/
	<font color="#001c5e">Phasenrausch</font>/
	<font color="#045e00">Bewahrer</font>/
	<font color="#005c5e">Kleptomanie</font>
	</label>
	<input type="radio" id="keystoneIII" name="Keystone" <?php if($keystone == "KeystoneIII"){echo("checked");} ?> value="KeystoneIII">
	<br>
  </p>
  </label>
  <br>
  
  
  <p><label>Prim&aumlre Runen<br>
	<label for="priIruneI">
	<font color="#5e5400">&Uumlberheilung </font>/
	<font color="#5e0000">Perfider Trick</font>/
	<font color="#001c5e">Kugel der Aufhebung</font>/
	<font color="#045e00">Unerschrocken</font>/
	<font color="#005c5e">Hextech-Blitzfalle</font>
	</label>
	<input type="radio" id="priIruneI" name="priI" <?php if($priIrune == "PriIRuneI"){echo("checked");} ?> value="PriIRuneI">
	<br>
	<label for="priIruneII">
	<font color="#5e5400">Triumph</font>/
	<font color="#5e0000">Geschmack von Blut </font>/
	<font color="#001c5e">Manafluss</font>/
	<font color="#045e00">Abriss</font>/
	<font color="#005c5e">Kekslieferung</font>
	</label>
	<input type="radio" id="priIruneII" name="priI" <?php if($priIrune == "PriIRuneII"){echo("checked");} ?> value="PriIRuneII">
	<br>
	<label for="priIruneIII">
	<font color="#5e5400">Geistesgegenwart </font>/
	<font color="#5e0000">Pl&oumltzlicher Einschlag</font>/
	<font color="#001c5e">Der ultimative Hut</font>/
	<font color="#045e00">Lebensquelle</font>/
	<font color="#005c5e">Perfektes Timing</font>
	</label>
	<input type="radio" id="priIruneIII" name="priI" <?php if($priIrune == "PriIRuneIII"){echo("checked");} ?> value="PriIRuneIII">
	<br>
  </p>
  <br>
  
  
  
  
  <p>
	<label for="priIIruneI">
	<font color="#5e5400">Legende: Eifer </font>/
	<font color="#5e0000">Zombie-Auge</font>/
	<font color="#001c5e">&Uumlberlegenheit </font>/
	<font color="#045e00">Eisenhaut</font>/
	<font color="#005c5e">Magisches Schuhwerk</font>
	</label>
	<input type="radio" id="priIIruneI" name="priII" <?php if($priIIrune == "PriIIRuneI"){echo("checked");} ?> value="PriIIRuneI">
	<br>
	<label for="priIIruneII">
	<font color="#5e5400">Legende: Z&aumlhigkeit </font>/
	<font color="#5e0000">Gespenster-Poro </font>/
	<font color="#001c5e">Flinkheit</font>/
	<font color="#045e00">Spiegelschale</font>/
	<font color="#005c5e">Zukunftsmarkt</font>
	</label>
	<input type="radio" id="priIIruneII" name="priII" <?php if($priIIrune == "PriIIRuneII"){echo("checked");} ?> value="PriIIRuneII">
	<br>
	<label for="priIIruneIII">
	<font color="#5e5400">Legende: Blutdurst </font>/
	<font color="#5e0000">Argus' Verm&aumlchtnis </font>/
	<font color="#001c5e">Absoluter Fokus</font>/
	<font color="#045e00">Konditionierung</font>/
	<font color="#005c5e">Vasallenaufl&oumlser </font>
	</label>
	<input type="radio" id="priIIruneIII" name="priII" <?php if($priIIrune == "PriIIRuneIII"){echo("checked");} ?> value="PriIIRuneIII">
	<br>
  </p>
   <br>
  
  
  
  
  <p>
	<label for="priIIIruneI">
	<font color="#5e5400">Gnadenstoss</font>/
	<font color="#5e0000">Gefr&aumlssiger J&aumlger </font>/
	<font color="#001c5e">Hitzewelle</font>/
	<font color="#045e00">Zuwachs</font>/
	<font color="#005c5e">Kosmische Einsicht</font>
	</label>
	<input type="radio" id="priIIIruneI" name="priIII" <?php if($priIIIrune == "PriIIIRuneI"){echo("checked");} ?> value="PriIIIRuneI">
	<br>
	<label for="priIIIruneII">
	<font color="#5e5400">Niederm&aumlher </font>/
	<font color="#5e0000">Raffinierter J&aumlger </font>/
	<font color="#001c5e">Wasserlauf</font>/
	<font color="#045e00">Frische</font>/
	<font color="#005c5e">Anziehungskraft</font>
	</label>
	<input type="radio" id="priIIIruneII" name="priIII" <?php if($priIIIrune == "PriIIIRuneII"){echo("checked");} ?> value="PriIIIRuneII">
	<br>
	<label for="priIIIruneIII">
	<font color="#5e5400">Letztes Gefecht</font>/
	<font color="#5e0000">Erbarmungsloser J&aumlger </font>/
	<font color="#001c5e">Aufziehender Sturm</font>/
	<font color="#045e00">Aufschwung</font>/
	<font color="#005c5e">Himmelsk&oumlrper </font>
	</label>
	<input type="radio" id="priIIIruneIII" name="priIII" <?php if($priIIIrune == "PriIIIRuneIII"){echo("checked");} ?> value="PriIIIRuneIII">
	<br>
	<br>
  </p>
  </label>
  
  </fieldset>
  <br>
  <br>
  <fieldset>
  <legend>Sekund&aumlre Runen</legend>
  <p>
  <label for="przision"><font color="#5e5400">Pr&aumlzision </font></label>
	<input type="radio" id="przision" name="secTree" <?php if($sectree == "Pr&aumlzision"){echo("checked");} ?> value="Pr&aumlzision">
	<br>
	<label for="dominanz"><font color="#5e0000">Dominanz </font></label>
	<input type="radio" id="dominanz" name="secTree" <?php if($sectree == "Dominanz"){echo("checked");} ?> value="Dominanz">
	<br>
	<label for="zauberei"><font color="#001c5e">Zauberei </font></label>
	<input type="radio" id="zauberei" name="secTree" <?php if($sectree == "Zauberei"){echo("checked");} ?> value="Zauberei">
	<br>
	<label for="entschlossen"><font color="#045e00">Entschlossenheit</font></label>
	<input type="radio" id="entschlossen" name="secTree" <?php if($sectree == "Entschlossenheit"){echo("checked");} ?> value="Entschlossenheit">
	<br>
	<label for="inspiration"><font color="#005c5e">Inspiration</font></label>
	<input type="radio" id="inspiration" name="secTree" <?php if($sectree == "Inspiration"){echo("checked");} ?> value="Inspiration">
	</p>
	<br>
	<p>
	<fieldset>
	<legend>Erste Rune</legend>
	<label for="secIruneI">
	<font color="#5e5400">&Uumlberheilung </font>/
	<font color="#5e0000">Perfider Trick</font>/
	<font color="#001c5e">Kugel der Aufhebung</font>/
	<font color="#045e00">Unerschrocken</font>/
	<font color="#005c5e">Hextech-Blitzfalle</font>
	</label>
	<input type="radio" id="secIruneI" name="SecI" <?php if($SecI == "SecIRuneI"){echo("checked");} ?> value="SecIRuneI">
	<br>
	<label for="SecIruneII">
	<font color="#5e5400">Triumph</font>/
	<font color="#5e0000">Geschmack von Blut </font>/
	<font color="#001c5e">Manafluss</font>/
	<font color="#045e00">Abriss</font>/
	<font color="#005c5e">Kekslieferung</font>
	</label>
	<input type="radio" id="secIruneII" name="SecI" <?php if($SecI == "SecIRuneII"){echo("checked");} ?> value="SecIRuneII">
	<br>
	<label for="SecIruneIII">
	<font color="#5e5400">Geistesgegenwart </font>/
	<font color="#5e0000">Pl&oumltzlicher Einschlag</font>/
	<font color="#001c5e">Der ultimative Hut</font>/
	<font color="#045e00">Lebensquelle</font>/
	<font color="#005c5e">Perfektes Timing</font>
	</label>
	<input type="radio" id="secIruneIII" name="SecI" <?php if($SecI == "SecIRuneIII"){echo("checked");} ?> value="SecIRuneIII">
	<br>
	<br>
	</p>
  <p>
  <label for="secIIruneI">
	<font color="#5e5400">Legende: Eifer </font>/
	<font color="#5e0000">Zombie-Auge</font>/
	<font color="#001c5e">&Uumlberlegenheit </font>/
	<font color="#045e00">Eisenhaut</font>/
	<font color="#005c5e">Magisches Schuhwerk</font>
	</label>
	<input type="radio" id="secIIruneI" name="SecI" <?php if($SecI == "SecIIRuneI"){echo("checked");} ?> value="SecIIRuneI">
	<br>
	<label for="secIIruneII">
	<font color="#5e5400">Legende: Z&aumlhigkeit </font>/
	<font color="#5e0000">Gespenster-Poro </font>/
	<font color="#001c5e">Flinkheit</font>/
	<font color="#045e00">Spiegelschale</font>/
	<font color="#005c5e">Zukunftsmarkt</font>
	</label>
	<input type="radio" id="secIIruneII" name="SecI" <?php if($SecI == "SecIIRuneII"){echo("checked");} ?> value="SecIIRuneII">
	<br>
	<label for="secIIruneIII">
	<font color="#5e5400">Legende: Blutdurst </font>/
	<font color="#5e0000">Argus' Verm&aumlchtnis </font>/
	<font color="#001c5e">Absoluter Fokus</font>/
	<font color="#045e00">Konditionierung</font>/
	<font color="#005c5e">Vasallenaufl&oumlser </font>
	</label>
	<input type="radio" id="secIIruneIII" name="SecI" <?php if($SecI == "SecIIRuneIII"){echo("checked");} ?> value="SecIIRuneIII">
	<br>
	<br>
  </p>
  <p>
  <label for="secIIIruneI">
	<font color="#5e5400">Gnadenstoss</font>/
	<font color="#5e0000">Gefr&aumlssiger J&aumlger </font>/
	<font color="#001c5e">Hitzewelle</font>/
	<font color="#045e00">Zuwachs</font>/
	<font color="#005c5e">Kosmische Einsicht</font>
	</label>
	<input type="radio" id="secIIIruneI" name="SecI" <?php if($SecI == "SecIIIRuneI"){echo("checked");} ?> value="SecIIIRuneI">
	<br>
	<label for="secIIIruneII">
	<font color="#5e5400">Niederm&aumlher </font>/
	<font color="#5e0000">Raffinierter J&aumlger </font>/
	<font color="#001c5e">Wasserlauf</font>/
	<font color="#045e00">Frische</font>/
	<font color="#005c5e">Anziehungskraft</font>
	</label>
	<input type="radio" id="secIIIruneII" name="SecI" <?php if($SecI == "SecIIIRuneII"){echo("checked");} ?> value="SecIIIRuneII">
	<br>
	<label for="secIIIruneIII">
	<font color="#5e5400">Letztes Gefecht</font>/
	<font color="#5e0000">Erbarmungsloser J&aumlger </font>/
	<font color="#001c5e">Aufziehender Sturm</font>/
	<font color="#045e00">Aufschwung</font>/
	<font color="#005c5e">Himmelsk&oumlrper </font>
	</label>
	<input type="radio" id="secIIIruneIII" name="SecI" <?php if($SecI == "SecIIIRuneIII"){echo("checked");} ?> value="SecIIIRuneIII">
	<br>
	<br>
  </fieldset>
  </p>
  <br>
  <br>
  <p>
  <fieldset>
  <legend>Zweite Rune</legend>
  <label for="secIruneI">
	<font color="#5e5400">&Uumlberheilung </font>/
	<font color="#5e0000">Perfider Trick</font>/
	<font color="#001c5e">Kugel der Aufhebung</font>/
	<font color="#045e00">Unerschrocken</font>/
	<font color="#005c5e">Hextech-Blitzfalle</font>
	</label>
	<input type="radio" id="secIruneI" name="SecII" <?php if($SecII == "SecIRuneI"){echo("checked");} ?> checked value="SecIRuneI">
	<br>
	<label for="SecIruneII">
	<font color="#5e5400">Triumph</font>/
	<font color="#5e0000">Geschmack von Blut </font>/
	<font color="#001c5e">Manafluss</font>/
	<font color="#045e00">Abriss</font>/
	<font color="#005c5e">Kekslieferung</font>
	</label>
	<input type="radio" id="secIruneII" name="SecII" <?php if($SecII == "SecIRuneII"){echo("checked");} ?> value="SecIRuneII">
	<br>
	<label for="SecIruneIII">
	<font color="#5e5400">Geistesgegenwart </font>/
	<font color="#5e0000">Pl&oumltzlicher Einschlag</font>/
	<font color="#001c5e">Der ultimative Hut</font>/
	<font color="#045e00">Lebensquelle</font>/
	<font color="#005c5e">Perfektes Timing</font>
	</label>
	<input type="radio" id="secIruneIII" name="SecII" <?php if($SecII == "SecIRuneIII"){echo("checked");} ?> value="SecIRuneIII">
	<br>
	<br>
  </p>
  <p>
  <label for="secIIruneI">
	<font color="#5e5400">Legende: Eifer </font>/
	<font color="#5e0000">Zombie-Auge</font>/
	<font color="#001c5e">&Uumlberlegenheit </font>/
	<font color="#045e00">Eisenhaut</font>/
	<font color="#005c5e">Magisches Schuhwerk</font>
	</label>
	<input type="radio" id="secIIruneI" name="SecII" <?php if($SecII == "SecIIRuneI"){echo("checked");} ?> value="SecIIRuneI">
	<br>
	<label for="secIIruneII">
	<font color="#5e5400">Legende: Z&aumlhigkeit </font>/
	<font color="#5e0000">Gespenster-Poro </font>/
	<font color="#001c5e">Flinkheit</font>/
	<font color="#045e00">Spiegelschale</font>/
	<font color="#005c5e">Zukunftsmarkt</font>
	</label>
	<input type="radio" id="secIIruneII" name="SecII" <?php if($SecII == "SecIIRuneII"){echo("checked");} ?> value="SecIIRuneII">
	<br>
	<label for="secIIruneIII">
	<font color="#5e5400">Legende: Blutdurst </font>/
	<font color="#5e0000">Argus' Verm&aumlchtnis </font>/
	<font color="#001c5e">Absoluter Fokus</font>/
	<font color="#045e00">Konditionierung</font>/
	<font color="#005c5e">Vasallenaufl&oumlser </font>
	</label>
	<input type="radio" id="secIIruneIII" name="SecII" <?php if($SecII == "SecIIRuneIII"){echo("checked");} ?> value="SecIIRuneIII">
	<br>
	<br>
  </p>
  <p>
  <label for="secIIIruneI">
	<font color="#5e5400">Gnadenstoss</font>/
	<font color="#5e0000">Gefr&aumlssiger J&aumlger </font>/
	<font color="#001c5e">Hitzewelle</font>/
	<font color="#045e00">Zuwachs</font>/
	<font color="#005c5e">Kosmische Einsicht</font>
	</label>
	<input type="radio" id="secIIIruneI" name="SecII" <?php if($SecII == "SecIIIRuneI"){echo("checked");} ?> value="SecIIIRuneI">
	<br>
	<label for="secIIIruneII">
	<font color="#5e5400">Niederm&aumlher </font>/
	<font color="#5e0000">Raffinierter J&aumlger </font>/
	<font color="#001c5e">Wasserlauf</font>/
	<font color="#045e00">Frische</font>/
	<font color="#005c5e">Anziehungskraft</font>
	</label>
	<input type="radio" id="secIIIruneII" name="SecII" <?php if($SecII == "SecIIIRuneII"){echo("checked");} ?> value="SecIIIRuneII">
	<br>
	<label for="secIIIruneIII">
	<font color="#5e5400">Letztes Gefecht</font>/
	<font color="#5e0000">Erbarmungsloser J&aumlger </font>/
	<font color="#001c5e">Aufziehender Sturm</font>/
	<font color="#045e00">Aufschwung</font>/
	<font color="#005c5e">Himmelsk&oumlrper </font>
	</label>
	<input type="radio" id="secIIIruneIII" name="SecII" <?php if($SecII == "SecIIIRuneIII"){echo("checked");} ?> value="SecIIIRuneIII">
	<br>
	<br>
	</fieldset>
  </p>
   <br>
  <p><label>Erkl&aumlrung (Runen):<br>
<textarea name="textrunen" cols="50" rows="8"><?php echo("$erIIII"); ?></textarea></label></p>
  </fieldset>
<input type="submit" value="Speichern">
</form>
</div>
</body>
</html>
