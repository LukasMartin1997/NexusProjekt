<html>
<head>
<link rel="stylesheet" href="../../css/style.css">
<title>Website</title>
</head>
<body>
<div id="mittestyle">
<a href="../hauptseite.php" target="_self">Zur&uumlck </a><br>
<br>
<h1>Erstelle einen Guide</h1>
<br>
<form method="post" action="speichern.php">
<p><label>Titel:<br><input type="text" name="Titel"></label></p>
<p><label>Champion:<br>
<select name="Champion">
<option value="Aatrox">Aatrox</option>
<option value="Ahri">Ahri</option>
<option value="Akali">Akali</option>
<option value="Alistar">Alistar</option>
<option value="Amumu">Amumu</option>
<option value="Anivia">Anivia</option>
<option value="Annie">Annie</option>
<option value="Ashe">Ashe</option>
<option value="AurelionSol">Aurelion Sol</option>
<option value="Azir">Azir</option>
<option value="Bard">Bard</option>
<option value="Blitzcrank">Blitzcrank</option>
<option value="Brand">Brand</option>
<option value="Braum">Braum</option>
<option value="Caitlyn">Caitlyn</option>
<option value="Camille">Camille</option>
<option value="Cassiopeia">Cassiopeia</option>
<option value="ChoGath">Cho'Gath</option>
<option value="Corki">Corki</option>
<option value="Darius">Darius</option>
<option value="Diana">Diana</option>
<option value="DrMundo">Dr. Mundo</option>
<option value="Draven">Draven</option>
<option value="Ekko">Ekko</option>
<option value="Elise">Elise</option>
<option value="Evelynn">Evelynn</option>
<option value="Ezreal">Ezreal</option>
<option value="Fiddlesticks">Fiddlesticks</option>
<option value="Fiora">Fiora</option>
<option value="Fizz">Fizz</option>
<option value="Galio">Galio</option>
<option value="Gangplank">Gangplank</option>
<option value="Garen">Garen</option>
<option value="Gnar">Gnar</option>
<option value="Gragas">Gragas</option>
<option value="Graves">Graves</option>
<option value="Hecarim">Hecarim</option>
<option value="Heimerdinger">Heimerdinger</option>
<option value="Illaoi">Illaoi</option>
<option value="Irelia">Irelia</option>
<option value="Ivern">Ivern</option>
<option value="Janna">Janna</option>
<option value="JarvanIV">Jarvan IV.</option>
<option value="Jax">Jax</option>
<option value="Jayce">Jayce</option>
<option value="Jhin">Jhin</option>
<option value="Jinx">Jinx</option>
<option value="Kalista">Kalista</option>
<option value="Karma">Karma</option>
<option value="Karthus">Karthus</option>
<option value="Kassadin">Kassadin</option>
<option value="Katarina">Katarina</option>
<option value="Kayle">Kayle</option>
<option value="Kayn">Kayn</option>
<option value="Kennen">Kennen</option>
<option value="KhaZix">Kha'Zix</option>
<option value="Kindred">Kindred</option>
<option value="Kled">Kled</option>
<option value="KogMaw">Kog'Maw</option>
<option value="LeBlanc">LeBlanc</option>
<option value="LeeSin">Lee Sin</option>
<option value="Leona">Leona</option>
<option value="Lissandra">Lissandra</option>
<option value="Lucian">Lucian</option>
<option value="Lulu">Lulu</option>
<option value="Lux">Lux</option>
<option value="Malphite">Malphite</option>
<option value="Malzahar">Malzahar</option>
<option value="Maokai">Maokai</option>
<option value="MasterYi">Master Yi</option>
<option value="MissFortune">Miss Fortune</option>
<option value="Mordekaiser">Mordekaiser</option>
<option value="Morgana">Morgana</option>
<option value="Nami">Nami</option>
<option value="Nasus">Nasus</option>
<option value="Nautilus">Nautilus</option>
<option value="Nidalee">Nidalee</option>
<option value="Nocturne">Nocturne</option>
<option value="Nunu">Nunu</option>
<option value="Olaf">Olaf</option>
<option value="Orianna">Orianna</option>
<option value="Ornn">Ornn</option>
<option value="Pantheon">Pantheon</option>
<option value="Poppy">Poppy</option>
<option value="Quinn">Quinn</option>
<option value="Rakan">Rakan</option>
<option value="Rammus">Rammus</option>
<option value="RekSai">Rek'Sai</option>
<option value="Renekton">Renekton</option>
<option value="Rengar">Rengar</option>
<option value="Riven">Riven</option>
<option value="Rumble">Rumble</option>
<option value="Ryze">Ryze</option>
<option value="Sejuani">Sejuani</option>
<option value="Shaco">Shaco</option>
<option value="Shen">Shen</option>
<option value="Shyvana">Shyvana</option>
<option value="Singed">Singed</option>
<option value="Sion">Sion</option>
<option value="Sivir">Sivir</option>
<option value="Skarner">Skarner</option>
<option value="Sona">Sona</option>
<option value="Soraka">Soraka</option>
<option value="Swain">Swain</option>
<option value="Syndra">Syndra</option>
<option value="TahmKench">Tahm Kench</option>
<option value="Taliyah">Taliyah</option>
<option value="Talon">Talon</option>
<option value="Taric">Taric</option>
<option value="Teemo">Teemo</option>
<option value="Thresh">Thresh</option>
<option value="Tristana">Tristana</option>
<option value="Trundle">Trundle</option>
<option value="Tryndamere">Tryndamere</option>
<option value="TwistedFate">Twisted Fate</option>
<option value="Twitch">Twitch</option>
<option value="Udyr">Udyr</option>
<option value="Urgot">Urgot</option>
<option value="Varus">Varus</option>
<option value="Vayne">Vayne</option>
<option value="Veigar">Veigar</option>
<option value="VelKoz">Vel'Koz</option>
<option value="Vi">Vi</option>
<option value="Viktor">Viktor</option>
<option value="Vladimir">Vladimir</option>
<option value="Volibear">Volibear</option>
<option value="Warwick">Warwick</option>
<option value="Wukong">Wukong</option>
<option value="Xayah">Xayah</option>
<option value="Xerath">Xerath</option>
<option value="XinZhao">Xin Zhao</option>
<option value="Yasuo">Yasuo</option>
<option value="Yorick">Yorick</option>
<option value="Zac">Zac</option>
<option value="Zed">Zed</option>
<option value="Ziggs">Ziggs</option>
<option value="Zilean">Zilean</option>
<option value="Zyra">Zyra</option>
</select>
</label></p>
<fieldset>
<legend>Startitems</legend>
<p><label>Startitem 1:<br>
<select name="startitemI">
<option value="keinItem" >-Kein Item-</option>
<option value="Abwehrtotem" >Abwehrtotem</option>
<option value="Spaeherlinse">Sp&aumlherlinse </option>
<option value="Heiltrank">Heiltrank</option>
<option value="NachfuellbarerTrank">Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers">Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers">Machete des J&aumlgers </option>
<option value="TrankDesJaegers">Trank des J&aumlgers </option>
<option value="KontrollAuge">Kontroll-Auge</option>
<option value="Langschwert">Langschwert</option>
<option value="DasDunkleSiegel">Das dunkle Siegel</option>
<option value="UralteMuenze">Uralte M&uumlnze </option>
<option value="Reliktschild">Reliktschild</option>
<option value="DolchDesZauberdiebs">Dolch des Zauberdiebs</option>
<option value="DoransRing">Dorans Ring</option>
<option value="DoransSchild">Dorans Schild</option>
<option value="DoransKlinge">Dorans Klinge</option>
<option value="Sichel">Sichel</option>
<option value="VerderbenderTrank">Verderbender Trank</option>
<option value="Stoffruestung">Stoffr&uumlstung </option>
<option value="Rubinkristall">Rubinkristall</option>
<option value="PerleDerVerjuengung">Perle der Verj&uumlngung </option>
<option value="NullmagieMantel">Nullmagie-Mantel</option>
<option value="Dolch">Dolch</option>
<option value="HandschuheDesSchlaegers">Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall">Saphirkristall</option>
<option value="Feenamulett">Feenamulett</option>
<option value="VerstaerkenderWaelzer">Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel">Laufstiefel</option>
</select></label></p>
<p><label>Startitem 2:<br>
<select name="startitemII">
<option value="keinItem" >-Kein Item-</option>
<option value="Abwehrtotem">Abwehrtotem</option>
<option value="Spaeherlinse">Sp&aumlherlinse </option>
<option value="Heiltrank">Heiltrank</option>
<option value="NachfuellbarerTrank">Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers">Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers">Machete des J&aumlgers </option>
<option value="TrankDesJaegers">Trank des J&aumlgers </option>
<option value="KontrollAuge">Kontroll-Auge</option>
<option value="Langschwert">Langschwert</option>
<option value="DasDunkleSiegel">Das dunkle Siegel</option>
<option value="UralteMuenze">Uralte M&uumlnze </option>
<option value="Reliktschild">Reliktschild</option>
<option value="DolchDesZauberdiebs">Dolch des Zauberdiebs</option>
<option value="DoransRing">Dorans Ring</option>
<option value="DoransSchild">Dorans Schild</option>
<option value="DoransKlinge">Dorans Klinge</option>
<option value="Sichel">Sichel</option>
<option value="VerderbenderTrank">Verderbender Trank</option>
<option value="Stoffruestung">Stoffr&uumlstung </option>
<option value="Rubinkristall">Rubinkristall</option>
<option value="PerleDerVerjuengung">Perle der Verj&uumlngung </option>
<option value="NullmagieMantel">Nullmagie-Mantel</option>
<option value="Dolch">Dolch</option>
<option value="HandschuheDesSchlaegers">Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall">Saphirkristall</option>
<option value="Feenamulett">Feenamulett</option>
<option value="VerstaerkenderWaelzer">Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel">Laufstiefel</option>
</select></label></p>
<p><label>Startitem 3:<br>
<select name="startitemIII">
<option value="keinItem" >-Kein Item-</option>
<option value="Abwehrtotem">Abwehrtotem</option>
<option value="Spaeherlinse">Sp&aumlherlinse </option>
<option value="Heiltrank">Heiltrank</option>
<option value="NachfuellbarerTrank">Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers">Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers">Machete des J&aumlgers </option>
<option value="TrankDesJaegers">Trank des J&aumlgers </option>
<option value="KontrollAuge">Kontroll-Auge</option>
<option value="Langschwert">Langschwert</option>
<option value="DasDunkleSiegel">Das dunkle Siegel</option>
<option value="UralteMuenze">Uralte M&uumlnze </option>
<option value="Reliktschild">Reliktschild</option>
<option value="DolchDesZauberdiebs">Dolch des Zauberdiebs</option>
<option value="DoransRing">Dorans Ring</option>
<option value="DoransSchild">Dorans Schild</option>
<option value="DoransKlinge">Dorans Klinge</option>
<option value="Sichel">Sichel</option>
<option value="VerderbenderTrank">Verderbender Trank</option>
<option value="Stoffruestung">Stoffr&uumlstung </option>
<option value="Rubinkristall">Rubinkristall</option>
<option value="PerleDerVerjuengung">Perle der Verj&uumlngung </option>
<option value="NullmagieMantel">Nullmagie-Mantel</option>
<option value="Dolch">Dolch</option>
<option value="HandschuheDesSchlaegers">Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall">Saphirkristall</option>
<option value="Feenamulett">Feenamulett</option>
<option value="VerstaerkenderWaelzer">Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel">Laufstiefel</option>
</select></label></p>
<p><label>Startitem 4:<br>
<select name="startitemIIII">
<option value="keinItem" >-Kein Item-</option>
<option value="Abwehrtotem">Abwehrtotem</option>
<option value="Spaeherlinse">Sp&aumlherlinse </option>
<option value="Heiltrank">Heiltrank</option>
<option value="NachfuellbarerTrank">Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers">Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers">Machete des J&aumlgers </option>
<option value="TrankDesJaegers">Trank des J&aumlgers </option>
<option value="KontrollAuge">Kontroll-Auge</option>
<option value="Langschwert">Langschwert</option>
<option value="DasDunkleSiegel">Das dunkle Siegel</option>
<option value="UralteMuenze">Uralte M&uumlnze </option>
<option value="Reliktschild">Reliktschild</option>
<option value="DolchDesZauberdiebs">Dolch des Zauberdiebs</option>
<option value="DoransRing">Dorans Ring</option>
<option value="DoransSchild">Dorans Schild</option>
<option value="DoransKlinge">Dorans Klinge</option>
<option value="Sichel">Sichel</option>
<option value="VerderbenderTrank">Verderbender Trank</option>
<option value="Stoffruestung">Stoffr&uumlstung </option>
<option value="Rubinkristall">Rubinkristall</option>
<option value="PerleDerVerjuengung">Perle der Verj&uumlngung </option>
<option value="NullmagieMantel">Nullmagie-Mantel</option>
<option value="Dolch">Dolch</option>
<option value="HandschuheDesSchlaegers">Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall">Saphirkristall</option>
<option value="Feenamulett">Feenamulett</option>
<option value="VerstaerkenderWaelzer">Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel">Laufstiefel</option>
</select></label></p>
<p><label>Startitem 5:<br>
<select name="startitemIIIII">
<option value="keinItem" >-Kein Item-</option>
<option value="Abwehrtotem">Abwehrtotem</option>
<option value="Spaeherlinse">Sp&aumlherlinse </option>
<option value="Heiltrank">Heiltrank</option>
<option value="NachfuellbarerTrank">Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers">Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers">Machete des J&aumlgers </option>
<option value="TrankDesJaegers">Trank des J&aumlgers </option>
<option value="KontrollAuge">Kontroll-Auge</option>
<option value="Langschwert">Langschwert</option>
<option value="DasDunkleSiegel">Das dunkle Siegel</option>
<option value="UralteMuenze">Uralte M&uumlnze </option>
<option value="Reliktschild">Reliktschild</option>
<option value="DolchDesZauberdiebs">Dolch des Zauberdiebs</option>
<option value="DoransRing">Dorans Ring</option>
<option value="DoransSchild">Dorans Schild</option>
<option value="DoransKlinge">Dorans Klinge</option>
<option value="Sichel">Sichel</option>
<option value="VerderbenderTrank">Verderbender Trank</option>
<option value="Stoffruestung">Stoffr&uumlstung </option>
<option value="Rubinkristall">Rubinkristall</option>
<option value="PerleDerVerjuengung">Perle der Verj&uumlngung </option>
<option value="NullmagieMantel">Nullmagie-Mantel</option>
<option value="Dolch">Dolch</option>
<option value="HandschuheDesSchlaegers">Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall">Saphirkristall</option>
<option value="Feenamulett">Feenamulett</option>
<option value="VerstaerkenderWaelzer">Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel">Laufstiefel</option>
</select></label></p>
<p><label>Startitem 6:<br>
<select name="startitemIIIIII">
<option value="keinItem" >-Kein Item-</option>
<option value="Abwehrtotem">Abwehrtotem</option>
<option value="Spaeherlinse">Sp&aumlherlinse </option>
<option value="Heiltrank">Heiltrank</option>
<option value="NachfuellbarerTrank">Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers">Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers">Machete des J&aumlgers </option>
<option value="TrankDesJaegers">Trank des J&aumlgers </option>
<option value="KontrollAuge">Kontroll-Auge</option>
<option value="Langschwert">Langschwert</option>
<option value="DasDunkleSiegel">Das dunkle Siegel</option>
<option value="UralteMuenze">Uralte M&uumlnze </option>
<option value="Reliktschild">Reliktschild</option>
<option value="DolchDesZauberdiebs">Dolch des Zauberdiebs</option>
<option value="DoransRing">Dorans Ring</option>
<option value="DoransSchild">Dorans Schild</option>
<option value="DoransKlinge">Dorans Klinge</option>
<option value="Sichel">Sichel</option>
<option value="VerderbenderTrank">Verderbender Trank</option>
<option value="Stoffruestung">Stoffr&uumlstung </option>
<option value="Rubinkristall">Rubinkristall</option>
<option value="PerleDerVerjuengung">Perle der Verj&uumlngung </option>
<option value="NullmagieMantel">Nullmagie-Mantel</option>
<option value="Dolch">Dolch</option>
<option value="HandschuheDesSchlaegers">Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall">Saphirkristall</option>
<option value="Feenamulett">Feenamulett</option>
<option value="VerstaerkenderWaelzer">Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel">Laufstiefel</option>
</select></label></p>
<p><label>Startitem 7:<br>
<select name="startitemIIIIIII">
<option value="keinItem" >-Kein Item-</option>
<option value="Abwehrtotem">Abwehrtotem</option>
<option value="Spaeherlinse">Sp&aumlherlinse </option>
<option value="Heiltrank">Heiltrank</option>
<option value="NachfuellbarerTrank">Nachf&uumlllbarer Trank </option>
<option value="TalismanDesJaegers">Talisman des J&aumlgers </option>
<option value="MacheteDesJaegers">Machete des J&aumlgers </option>
<option value="TrankDesJaegers">Trank des J&aumlgers </option>
<option value="KontrollAuge">Kontroll-Auge</option>
<option value="Langschwert">Langschwert</option>
<option value="DasDunkleSiegel">Das dunkle Siegel</option>
<option value="UralteMuenze">Uralte M&uumlnze </option>
<option value="Reliktschild">Reliktschild</option>
<option value="DolchDesZauberdiebs">Dolch des Zauberdiebs</option>
<option value="DoransRing">Dorans Ring</option>
<option value="DoransSchild">Dorans Schild</option>
<option value="DoransKlinge">Dorans Klinge</option>
<option value="Sichel">Sichel</option>
<option value="VerderbenderTrank">Verderbender Trank</option>
<option value="Stoffruestung">Stoffr&uumlstung </option>
<option value="Rubinkristall">Rubinkristall</option>
<option value="PerleDerVerjuengung">Perle der Verj&uumlngung </option>
<option value="NullmagieMantel">Nullmagie-Mantel</option>
<option value="Dolch">Dolch</option>
<option value="HandschuheDesSchlaegers">Handschuhe des Schl&aumlgers </option>
<option value="Saphirkristall">Saphirkristall</option>
<option value="Feenamulett">Feenamulett</option>
<option value="VerstaerkenderWaelzer">Verst&aumlrkender W&aumllzer </option>
<option value="Laufstiefel">Laufstiefel</option>
</select></label></p>
<p><label>Erkl&aumlrung (Startitems):<br>
<textarea name="textstartitems" cols="50" rows="8"></textarea></label></p>
</fieldset>
<br>
<fieldset>
<legend>Fullbuild</legend>
<p><label>Fullbuilditem 1:<br>
<select name="fullitemI">
<option value="keinItem" >-Kein Item-</option>
<option value="StiefelDerWendigkeit" >Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit">Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit">Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers">Beinschienen des Berserkers</option>
<option value="Zaubererschuhe">Zaubererschuhe</option>
<option value="NinjaTabi">Ninja-Tabi</option>
<option value="MerkursSchuhe">Merkurs Schuhe</option>
<option value="MejaisSeelenstehler">Mejais Seelenstehler</option>
<option value="SehenderRubinstein">Sehender Rubinstein</option>
<option value="AugeDerOase">Auge der Oase</option>
<option value="Befreiungsschlag">Befreiungsschlag</option>
<option value="AthenesUnheiligerGral">Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel">Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter">Auge der W&aumlchter </option>
<option value="Kommandobanner">Kommandobanner</option>
<option value="AmulettDesAufstiegs">Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin">Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur">Ritterschwur</option>
<option value="AmulettDerEisernenSolari">Amulett der eisernen Solari </option>
<option value="Gebirgspanzer">Gebirgspanzer</option>
<option value="ZekesKonvergenz">Zekes Konvergenz</option>
<option value="AugeDerSonnenwende">Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker">Gl&uumlhender Rauchschwenker</option>
<option value="Manamune">Manamune</option>
<option value="Schutzengel">Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss">Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss">Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss">S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit">Ende der Weisheit</option>
<option value="HextechProtoguertel01">Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers">Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung">Sterbliche Mahnung</option>
<option value="LordDominiksGruesze">Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer">Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm">Runaans Wirbelsturm</option>
<option value="StatikksStich">Statikks Stich</option>
<option value="SchnellfeuerGeschuetz">Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter">Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger">Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho">Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger">Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho">Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger">S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho">S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter">Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter">Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter">S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer">Ohmzerst&oumlrer </option>
<option value="Leerenstab">Leerenstab</option>
<option value="RedlichePracht">Redliche Pracht</option>
<option value="EisgeborenenHandschuhe">Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter">Stab der Zeitalter</option>
<option value="GefrorenesHerz">Gefrorenes Herz</option>
<option value="ZzRotPortal">Zz'Rot-Portal</option>
<option value="Geistessicht">Geistessicht</option>
<option value="AdaptiverHelm">Adaptiver Helm</option>
<option value="WarmogsRuestung">Warmogs R&uumlstung </option>
<option value="Hoellenmaske">H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang">Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer">Dornenpanzer</option>
<option value="YoumusGeistklinge">Youmus Geistklinge</option>
<option value="RanduinsOmen">Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr">D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas">Zhonyas Stundenglas</option>
<option value="Morellonomikon">Morellonomikon</option>
<option value="PanzerDesTotenMannes">Panzer des toten Mannes</option>
<option value="HextechGLP800">Hextech-GLP 800</option>
<option value="SchwarzesBeil">Schwarzes Beil</option>
<option value="SchleierDerTodesfee">Schleier der Todesfee</option>
<option value="NashorsZahn">Nashors Zahn</option>
<option value="PerfekterHexKern">Perfekter Hex-Kern</option>
<option value="StabDesErzengels">Stab des Erzengels</option>
<option value="Frosthammer">Frosthammer</option>
<option value="LiandrysQual">Liandrys Qual</option>
<option value="SaumDerNacht">Saum der Nacht</option>
<option value="SteraksPegel">Steraks Pegel</option>
<option value="FluchDesLichs">Fluch des Lichs</option>
<option value="LudensEcho">Ludens Echo</option>
<option value="SchlundDesMalmortius">Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit">Klinge der Unendlichkeit</option>
<option value="HextechGunblade">Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs">Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber">Essenzr&aumluber </option>
<option value="GefraeszigeHydra">Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra">Titanische Hydra</option>
<option value="TanzDesTodes">Tanz des Todes</option>
<option value="GuinsoosWutklinge">Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel">Flinker Krumms&aumlbel </option>
<option value="Blutduerster">Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit">St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube">Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 2:<br>
<select name="fullitemII">
<option value="keinItem" >-Kein Item-</option>
<option value="StiefelDerWendigkeit" >Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit">Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit">Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers">Beinschienen des Berserkers</option>
<option value="Zaubererschuhe">Zaubererschuhe</option>
<option value="NinjaTabi">Ninja-Tabi</option>
<option value="MerkursSchuhe">Merkurs Schuhe</option>
<option value="MejaisSeelenstehler">Mejais Seelenstehler</option>
<option value="SehenderRubinstein">Sehender Rubinstein</option>
<option value="AugeDerOase">Auge der Oase</option>
<option value="Befreiungsschlag">Befreiungsschlag</option>
<option value="AthenesUnheiligerGral">Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel">Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter">Auge der W&aumlchter </option>
<option value="Kommandobanner">Kommandobanner</option>
<option value="AmulettDesAufstiegs">Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin">Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur">Ritterschwur</option>
<option value="AmulettDerEisernenSolari">Amulett der eisernen Solari </option>
<option value="Gebirgspanzer">Gebirgspanzer</option>
<option value="ZekesKonvergenz">Zekes Konvergenz</option>
<option value="AugeDerSonnenwende">Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker">Gl&uumlhender Rauchschwenker</option>
<option value="Manamune">Manamune</option>
<option value="Schutzengel">Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss">Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss">Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss">S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit">Ende der Weisheit</option>
<option value="HextechProtoguertel01">Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers">Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung">Sterbliche Mahnung</option>
<option value="LordDominiksGruesze">Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer">Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm">Runaans Wirbelsturm</option>
<option value="StatikksStich">Statikks Stich</option>
<option value="SchnellfeuerGeschuetz">Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter">Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger">Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho">Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger">Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho">Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger">S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho">S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter">Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter">Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter">S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer">Ohmzerst&oumlrer </option>
<option value="Leerenstab">Leerenstab</option>
<option value="RedlichePracht">Redliche Pracht</option>
<option value="EisgeborenenHandschuhe">Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter">Stab der Zeitalter</option>
<option value="GefrorenesHerz">Gefrorenes Herz</option>
<option value="ZzRotPortal">Zz'Rot-Portal</option>
<option value="Geistessicht">Geistessicht</option>
<option value="AdaptiverHelm">Adaptiver Helm</option>
<option value="WarmogsRuestung">Warmogs R&uumlstung </option>
<option value="Hoellenmaske">H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang">Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer">Dornenpanzer</option>
<option value="YoumusGeistklinge">Youmus Geistklinge</option>
<option value="RanduinsOmen">Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr">D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas">Zhonyas Stundenglas</option>
<option value="Morellonomikon">Morellonomikon</option>
<option value="PanzerDesTotenMannes">Panzer des toten Mannes</option>
<option value="HextechGLP800">Hextech-GLP 800</option>
<option value="SchwarzesBeil">Schwarzes Beil</option>
<option value="SchleierDerTodesfee">Schleier der Todesfee</option>
<option value="NashorsZahn">Nashors Zahn</option>
<option value="PerfekterHexKern">Perfekter Hex-Kern</option>
<option value="StabDesErzengels">Stab des Erzengels</option>
<option value="Frosthammer">Frosthammer</option>
<option value="LiandrysQual">Liandrys Qual</option>
<option value="SaumDerNacht">Saum der Nacht</option>
<option value="SteraksPegel">Steraks Pegel</option>
<option value="FluchDesLichs">Fluch des Lichs</option>
<option value="LudensEcho">Ludens Echo</option>
<option value="SchlundDesMalmortius">Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit">Klinge der Unendlichkeit</option>
<option value="HextechGunblade">Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs">Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber">Essenzr&aumluber </option>
<option value="GefraeszigeHydra">Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra">Titanische Hydra</option>
<option value="TanzDesTodes">Tanz des Todes</option>
<option value="GuinsoosWutklinge">Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel">Flinker Krumms&aumlbel </option>
<option value="Blutduerster">Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit">St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube">Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 3:<br>
<select name="fullitemIII">
<option value="keinItem" >-Kein Item-</option>
<option value="StiefelDerWendigkeit" >Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit">Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit">Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers">Beinschienen des Berserkers</option>
<option value="Zaubererschuhe">Zaubererschuhe</option>
<option value="NinjaTabi">Ninja-Tabi</option>
<option value="MerkursSchuhe">Merkurs Schuhe</option>
<option value="MejaisSeelenstehler">Mejais Seelenstehler</option>
<option value="SehenderRubinstein">Sehender Rubinstein</option>
<option value="AugeDerOase">Auge der Oase</option>
<option value="Befreiungsschlag">Befreiungsschlag</option>
<option value="AthenesUnheiligerGral">Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel">Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter">Auge der W&aumlchter </option>
<option value="Kommandobanner">Kommandobanner</option>
<option value="AmulettDesAufstiegs">Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin">Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur">Ritterschwur</option>
<option value="AmulettDerEisernenSolari">Amulett der eisernen Solari </option>
<option value="Gebirgspanzer">Gebirgspanzer</option>
<option value="ZekesKonvergenz">Zekes Konvergenz</option>
<option value="AugeDerSonnenwende">Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker">Gl&uumlhender Rauchschwenker</option>
<option value="Manamune">Manamune</option>
<option value="Schutzengel">Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss">Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss">Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss">S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit">Ende der Weisheit</option>
<option value="HextechProtoguertel01">Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers">Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung">Sterbliche Mahnung</option>
<option value="LordDominiksGruesze">Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer">Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm">Runaans Wirbelsturm</option>
<option value="StatikksStich">Statikks Stich</option>
<option value="SchnellfeuerGeschuetz">Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter">Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger">Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho">Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger">Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho">Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger">S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho">S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter">Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter">Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter">S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer">Ohmzerst&oumlrer </option>
<option value="Leerenstab">Leerenstab</option>
<option value="RedlichePracht">Redliche Pracht</option>
<option value="EisgeborenenHandschuhe">Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter">Stab der Zeitalter</option>
<option value="GefrorenesHerz">Gefrorenes Herz</option>
<option value="ZzRotPortal">Zz'Rot-Portal</option>
<option value="Geistessicht">Geistessicht</option>
<option value="AdaptiverHelm">Adaptiver Helm</option>
<option value="WarmogsRuestung">Warmogs R&uumlstung </option>
<option value="Hoellenmaske">H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang">Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer">Dornenpanzer</option>
<option value="YoumusGeistklinge">Youmus Geistklinge</option>
<option value="RanduinsOmen">Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr">D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas">Zhonyas Stundenglas</option>
<option value="Morellonomikon">Morellonomikon</option>
<option value="PanzerDesTotenMannes">Panzer des toten Mannes</option>
<option value="HextechGLP800">Hextech-GLP 800</option>
<option value="SchwarzesBeil">Schwarzes Beil</option>
<option value="SchleierDerTodesfee">Schleier der Todesfee</option>
<option value="NashorsZahn">Nashors Zahn</option>
<option value="PerfekterHexKern">Perfekter Hex-Kern</option>
<option value="StabDesErzengels">Stab des Erzengels</option>
<option value="Frosthammer">Frosthammer</option>
<option value="LiandrysQual">Liandrys Qual</option>
<option value="SaumDerNacht">Saum der Nacht</option>
<option value="SteraksPegel">Steraks Pegel</option>
<option value="FluchDesLichs">Fluch des Lichs</option>
<option value="LudensEcho">Ludens Echo</option>
<option value="SchlundDesMalmortius">Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit">Klinge der Unendlichkeit</option>
<option value="HextechGunblade">Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs">Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber">Essenzr&aumluber </option>
<option value="GefraeszigeHydra">Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra">Titanische Hydra</option>
<option value="TanzDesTodes">Tanz des Todes</option>
<option value="GuinsoosWutklinge">Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel">Flinker Krumms&aumlbel </option>
<option value="Blutduerster">Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit">St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube">Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 4:<br>
<select name="fullitemIIII">
<option value="keinItem" >-Kein Item-</option>
<option value="StiefelDerWendigkeit" >Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit">Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit">Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers">Beinschienen des Berserkers</option>
<option value="Zaubererschuhe">Zaubererschuhe</option>
<option value="NinjaTabi">Ninja-Tabi</option>
<option value="MerkursSchuhe">Merkurs Schuhe</option>
<option value="MejaisSeelenstehler">Mejais Seelenstehler</option>
<option value="SehenderRubinstein">Sehender Rubinstein</option>
<option value="AugeDerOase">Auge der Oase</option>
<option value="Befreiungsschlag">Befreiungsschlag</option>
<option value="AthenesUnheiligerGral">Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel">Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter">Auge der W&aumlchter </option>
<option value="Kommandobanner">Kommandobanner</option>
<option value="AmulettDesAufstiegs">Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin">Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur">Ritterschwur</option>
<option value="AmulettDerEisernenSolari">Amulett der eisernen Solari </option>
<option value="Gebirgspanzer">Gebirgspanzer</option>
<option value="ZekesKonvergenz">Zekes Konvergenz</option>
<option value="AugeDerSonnenwende">Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker">Gl&uumlhender Rauchschwenker</option>
<option value="Manamune">Manamune</option>
<option value="Schutzengel">Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss">Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss">Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss">S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit">Ende der Weisheit</option>
<option value="HextechProtoguertel01">Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers">Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung">Sterbliche Mahnung</option>
<option value="LordDominiksGruesze">Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer">Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm">Runaans Wirbelsturm</option>
<option value="StatikksStich">Statikks Stich</option>
<option value="SchnellfeuerGeschuetz">Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter">Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger">Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho">Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger">Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho">Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger">S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho">S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter">Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter">Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter">S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer">Ohmzerst&oumlrer </option>
<option value="Leerenstab">Leerenstab</option>
<option value="RedlichePracht">Redliche Pracht</option>
<option value="EisgeborenenHandschuhe">Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter">Stab der Zeitalter</option>
<option value="GefrorenesHerz">Gefrorenes Herz</option>
<option value="ZzRotPortal">Zz'Rot-Portal</option>
<option value="Geistessicht">Geistessicht</option>
<option value="AdaptiverHelm">Adaptiver Helm</option>
<option value="WarmogsRuestung">Warmogs R&uumlstung </option>
<option value="Hoellenmaske">H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang">Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer">Dornenpanzer</option>
<option value="YoumusGeistklinge">Youmus Geistklinge</option>
<option value="RanduinsOmen">Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr">D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas">Zhonyas Stundenglas</option>
<option value="Morellonomikon">Morellonomikon</option>
<option value="PanzerDesTotenMannes">Panzer des toten Mannes</option>
<option value="HextechGLP800">Hextech-GLP 800</option>
<option value="SchwarzesBeil">Schwarzes Beil</option>
<option value="SchleierDerTodesfee">Schleier der Todesfee</option>
<option value="NashorsZahn">Nashors Zahn</option>
<option value="PerfekterHexKern">Perfekter Hex-Kern</option>
<option value="StabDesErzengels">Stab des Erzengels</option>
<option value="Frosthammer">Frosthammer</option>
<option value="LiandrysQual">Liandrys Qual</option>
<option value="SaumDerNacht">Saum der Nacht</option>
<option value="SteraksPegel">Steraks Pegel</option>
<option value="FluchDesLichs">Fluch des Lichs</option>
<option value="LudensEcho">Ludens Echo</option>
<option value="SchlundDesMalmortius">Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit">Klinge der Unendlichkeit</option>
<option value="HextechGunblade">Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs">Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber">Essenzr&aumluber </option>
<option value="GefraeszigeHydra">Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra">Titanische Hydra</option>
<option value="TanzDesTodes">Tanz des Todes</option>
<option value="GuinsoosWutklinge">Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel">Flinker Krumms&aumlbel </option>
<option value="Blutduerster">Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit">St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube">Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 5:<br>
<select name="fullitemIIIII">
<option value="keinItem" >-Kein Item-</option>
<option value="StiefelDerWendigkeit" >Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit">Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit">Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers">Beinschienen des Berserkers</option>
<option value="Zaubererschuhe">Zaubererschuhe</option>
<option value="NinjaTabi">Ninja-Tabi</option>
<option value="MerkursSchuhe">Merkurs Schuhe</option>
<option value="MejaisSeelenstehler">Mejais Seelenstehler</option>
<option value="SehenderRubinstein">Sehender Rubinstein</option>
<option value="AugeDerOase">Auge der Oase</option>
<option value="Befreiungsschlag">Befreiungsschlag</option>
<option value="AthenesUnheiligerGral">Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel">Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter">Auge der W&aumlchter </option>
<option value="Kommandobanner">Kommandobanner</option>
<option value="AmulettDesAufstiegs">Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin">Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur">Ritterschwur</option>
<option value="AmulettDerEisernenSolari">Amulett der eisernen Solari </option>
<option value="Gebirgspanzer">Gebirgspanzer</option>
<option value="ZekesKonvergenz">Zekes Konvergenz</option>
<option value="AugeDerSonnenwende">Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker">Gl&uumlhender Rauchschwenker</option>
<option value="Manamune">Manamune</option>
<option value="Schutzengel">Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss">Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss">Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss">S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit">Ende der Weisheit</option>
<option value="HextechProtoguertel01">Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers">Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung">Sterbliche Mahnung</option>
<option value="LordDominiksGruesze">Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer">Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm">Runaans Wirbelsturm</option>
<option value="StatikksStich">Statikks Stich</option>
<option value="SchnellfeuerGeschuetz">Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter">Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger">Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho">Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger">Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho">Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger">S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho">S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter">Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter">Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter">S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer">Ohmzerst&oumlrer </option>
<option value="Leerenstab">Leerenstab</option>
<option value="RedlichePracht">Redliche Pracht</option>
<option value="EisgeborenenHandschuhe">Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter">Stab der Zeitalter</option>
<option value="GefrorenesHerz">Gefrorenes Herz</option>
<option value="ZzRotPortal">Zz'Rot-Portal</option>
<option value="Geistessicht">Geistessicht</option>
<option value="AdaptiverHelm">Adaptiver Helm</option>
<option value="WarmogsRuestung">Warmogs R&uumlstung </option>
<option value="Hoellenmaske">H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang">Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer">Dornenpanzer</option>
<option value="YoumusGeistklinge">Youmus Geistklinge</option>
<option value="RanduinsOmen">Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr">D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas">Zhonyas Stundenglas</option>
<option value="Morellonomikon">Morellonomikon</option>
<option value="PanzerDesTotenMannes">Panzer des toten Mannes</option>
<option value="HextechGLP800">Hextech-GLP 800</option>
<option value="SchwarzesBeil">Schwarzes Beil</option>
<option value="SchleierDerTodesfee">Schleier der Todesfee</option>
<option value="NashorsZahn">Nashors Zahn</option>
<option value="PerfekterHexKern">Perfekter Hex-Kern</option>
<option value="StabDesErzengels">Stab des Erzengels</option>
<option value="Frosthammer">Frosthammer</option>
<option value="LiandrysQual">Liandrys Qual</option>
<option value="SaumDerNacht">Saum der Nacht</option>
<option value="SteraksPegel">Steraks Pegel</option>
<option value="FluchDesLichs">Fluch des Lichs</option>
<option value="LudensEcho">Ludens Echo</option>
<option value="SchlundDesMalmortius">Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit">Klinge der Unendlichkeit</option>
<option value="HextechGunblade">Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs">Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber">Essenzr&aumluber </option>
<option value="GefraeszigeHydra">Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra">Titanische Hydra</option>
<option value="TanzDesTodes">Tanz des Todes</option>
<option value="GuinsoosWutklinge">Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel">Flinker Krumms&aumlbel </option>
<option value="Blutduerster">Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit">St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube">Rabadons Todeshaube</option>
</select></label></p>
<p><label>Fullbuilditem 6:<br>
<select name="fullitemIIIIII">
<option value="keinItem" >-Kein Item-</option>
<option value="StiefelDerWendigkeit" >Stiefel der Wendigkeit</option>
<option value="StiefelDerBeweglichkeit">Stiefel der Beweglichkeit </option>
<option value="IonischeStiefelDerDeutlichkeit">Ionische Stiefel der Deutlichkeit</option>
<option value="BeinschienenDesBerserkers">Beinschienen des Berserkers</option>
<option value="Zaubererschuhe">Zaubererschuhe</option>
<option value="NinjaTabi">Ninja-Tabi</option>
<option value="MerkursSchuhe">Merkurs Schuhe</option>
<option value="MejaisSeelenstehler">Mejais Seelenstehler</option>
<option value="SehenderRubinstein">Sehender Rubinstein</option>
<option value="AugeDerOase">Auge der Oase</option>
<option value="Befreiungsschlag">Befreiungsschlag</option>
<option value="AthenesUnheiligerGral">Athenes unheiliger Gral</option>
<option value="MikaelsSchmelztiegel">Mikaels Schmelztiegel</option>
<option value="AugeDerWaechter">Auge der W&aumlchter </option>
<option value="Kommandobanner">Kommandobanner</option>
<option value="AmulettDesAufstiegs">Amulett des Aufstiegs</option>
<option value="AnrechtDerFrostkoenigin">Anrecht der Frostk&oumlnigin </option>
<option value="Ritterschwur">Ritterschwur</option>
<option value="AmulettDerEisernenSolari">Amulett der eisernen Solari </option>
<option value="Gebirgspanzer">Gebirgspanzer</option>
<option value="ZekesKonvergenz">Zekes Konvergenz</option>
<option value="AugeDerSonnenwende">Auge der Sonnenwende</option>
<option value="GluehenderRauchschwenker">Gl&uumlhender Rauchschwenker</option>
<option value="Manamune">Manamune</option>
<option value="Schutzengel">Schutzengel</option>
<option value="KlingeDesPirschersGlutkoloss">Klinge des Pirschers (Glutkoloss)</option>
<option value="MesserDesFaehrtenlesersGlutkoloss">Messer des F&aumlhrtenlesers (Glutkoloss)</option>
<option value="SaebelDesPlaenklersGlutkoloss">S&aumlbel des Pl&aumlnklers (Glutkoloss)</option>
<option value="EndeDerWeisheit">Ende der Weisheit</option>
<option value="HextechProtoguertel01">Hextech-Protog&uumlrtel 01</option>
<option value="SteinpanzerDesWasserspeiers">Steinpanzer des Wasserspeiers</option>
<option value="SterblicheMahnung">Sterbliche Mahnung</option>
<option value="LordDominiksGruesze">Lord Dominiks Gr&uuml;&szlig;e</option>
<option value="Phantomtaenzer">Phantomt&aumlnzer </option>
<option value="RunaansWirbelsturm">Runaans Wirbelsturm</option>
<option value="StatikksStich">Statikks Stich</option>
<option value="SchnellfeuerGeschuetz">Schnellfeuer-Gesch&uumltz </option>
<option value="RylaisKristallzepter">Rylais Kristallzepter</option>
<option value="KlingeDesPirschersKrieger">Klinge des Pirschers (Krieger)</option>
<option value="KlingeDesPirschersRunenecho">Klinge des Pirschers (Runenecho)</option>
<option value="MesserDesFaehrtenlesersKrieger">Messer des F&aumlhrtenlesers (Krieger)</option>
<option value="MesserDesFaehrtenlesersRunenecho">Messer des F&aumlhrtenlesers (Runenecho)</option>
<option value="SaebelDesPlaenklersKrieger">S&aumlbel des Pl&aumlnklers (Krieger)</option>
<option value="SaebelDesPlaenklersRunenecho">S&aumlbel des Pl&aumlnklers (Runenecho)</option>
<option value="KlingeDesPirschersBlutschnitter">Klinge des Pirschers (Blutschnitter)</option>
<option value="MesserDesFaehrtenlesersBlutschnitter">Messer des F&aumlhrtenlesers (Blutschnitter)</option>
<option value="SaebelDesPlaenklersBlutschnitter">S&aumlbel des Pl&aumlnklers (Blutschnitter)</option>
<option value="Ohmzerstoerer">Ohmzerst&oumlrer </option>
<option value="Leerenstab">Leerenstab</option>
<option value="RedlichePracht">Redliche Pracht</option>
<option value="EisgeborenenHandschuhe">Eisgeborenen-Handschuhe</option>
<option value="StabDerZeitalter">Stab der Zeitalter</option>
<option value="GefrorenesHerz">Gefrorenes Herz</option>
<option value="ZzRotPortal">Zz'Rot-Portal</option>
<option value="Geistessicht">Geistessicht</option>
<option value="AdaptiverHelm">Adaptiver Helm</option>
<option value="WarmogsRuestung">Warmogs R&uumlstung </option>
<option value="Hoellenmaske">H&oumlllenmaske </option>
<option value="SonnenfeuerUmhang">Sonnenfeuer-Umhang</option>
<option value="Dornenpanzer">Dornenpanzer</option>
<option value="YoumusGeistklinge">Youmus Geistklinge</option>
<option value="RanduinsOmen">Randuins Omen</option>
<option value="DaemmerungsklingeVonDraktharr">D&aumlmmerungsklinge von Draktharr</option>
<option value="ZhonyasStundenglas">Zhonyas Stundenglas</option>
<option value="Morellonomikon">Morellonomikon</option>
<option value="PanzerDesTotenMannes">Panzer des toten Mannes</option>
<option value="HextechGLP800">Hextech-GLP 800</option>
<option value="SchwarzesBeil">Schwarzes Beil</option>
<option value="SchleierDerTodesfee">Schleier der Todesfee</option>
<option value="NashorsZahn">Nashors Zahn</option>
<option value="PerfekterHexKern">Perfekter Hex-Kern</option>
<option value="StabDesErzengels">Stab des Erzengels</option>
<option value="Frosthammer">Frosthammer</option>
<option value="LiandrysQual">Liandrys Qual</option>
<option value="SaumDerNacht">Saum der Nacht</option>
<option value="SteraksPegel">Steraks Pegel</option>
<option value="FluchDesLichs">Fluch des Lichs</option>
<option value="LudensEcho">Ludens Echo</option>
<option value="SchlundDesMalmortius">Schlund des Malmortius</option>
<option value="KlingeDerUnendlichkeit">Klinge der Unendlichkeit</option>
<option value="HextechGunblade">Hextech-Gunblade</option>
<option value="KlingeDesgestuerztenKoenigs">Klinge des gest&uumlrzten K&oumlnigs </option>
<option value="Essenzraeuber">Essenzr&aumluber </option>
<option value="GefraeszigeHydra">Gefr&auml&szligige Hydra </option>
<option value="TitanischeHydra">Titanische Hydra</option>
<option value="TanzDesTodes">Tanz des Todes</option>
<option value="GuinsoosWutklinge">Guinsoos Wutklinge</option>
<option value="FlinkerKrummsaebel">Flinker Krumms&aumlbel </option>
<option value="Blutduerster">Blutd&uumlrster </option>
<option value="StaerkeDerDreieinigkeit">St&aumlrke der Dreieinigkeit </option>
<option value="RabadonsTodeshaube">Rabadons Todeshaube</option>
</select></label></p>
<p><label>Erkl&aumlrung (Fullbuild):<br>
<textarea name="textfullitems" cols="50" rows="8"></textarea></label></p>
</fieldset>
<br>
<fieldset>
<legend>Weitere Infos</legend>
<p><label>Erkl&aumlrung (Sonstiges):<br>
<textarea name="textsonstiges" cols="50" rows="8"></textarea></label></p>
</fieldset>
<br>
<fieldset>
<legend>Runen</legend>
<p><label>Runentree<br>
	<label for="przision"><font color="#5e5400">Pr&aumlzision </font></label>
	<input type="radio" id="przision" name="Tree" checked value="Pr&aumlzision">
	<br>
	<label for="dominanz"><font color="#5e0000">Dominanz </font></label>
	<input type="radio" id="dominanz" name="Tree" value="Dominanz">
	<br>
	<label for="zauberei"><font color="#001c5e">Zauberei </font></label>
	<input type="radio" id="zauberei" name="Tree" value="Zauberei">
	<br>
	<label for="entschlossen"><font color="#045e00">Entschlossenheit</font></label>
	<input type="radio" id="entschlossen" name="Tree" value="Entschlossenheit">
	<br>
	<label for="inspiration"><font color="#005c5e">Inspiration</font></label>
	<input type="radio" id="inspiration" name="Tree" value="Inspiration">
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
	<input type="radio" id="keystoneI" name="Keystone" checked value="KeystoneI">
	<br>
	<label for="keystoneII">
	<font color="#5e5400">T&oumldliches Tempo</font>/
	<font color="#5e0000">R&aumluber </font>/
	<font color="#001c5e">Arkaner Komet</font>/
	<font color="#045e00">Nachbeben</font>/
	<font color="#005c5e">Eiszeit</font>
	</label>
	<input type="radio" id="keystoneII" name="Keystone" value="KeystoneII">
	<br>
	<label for="keystoneIII">
	<font color="#5e5400">Leichtf&uumlssigkeit </font>/
	<font color="#5e0000">Dunkle Seelenernte</font>/
	<font color="#001c5e">Phasenrausch</font>/
	<font color="#045e00">Bewahrer</font>/
	<font color="#005c5e">Kleptomanie</font>
	</label>
	<input type="radio" id="keystoneIII" name="Keystone" value="KeystoneIII">
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
	<input type="radio" id="priIruneI" name="priI" checked value="PriIRuneI">
	<br>
	<label for="priIruneII">
	<font color="#5e5400">Triumph</font>/
	<font color="#5e0000">Geschmack von Blut </font>/
	<font color="#001c5e">Manafluss</font>/
	<font color="#045e00">Abriss</font>/
	<font color="#005c5e">Kekslieferung</font>
	</label>
	<input type="radio" id="priIruneII" name="priI" value="PriIRuneII">
	<br>
	<label for="priIruneIII">
	<font color="#5e5400">Geistesgegenwart </font>/
	<font color="#5e0000">Pl&oumltzlicher Einschlag</font>/
	<font color="#001c5e">Der ultimative Hut</font>/
	<font color="#045e00">Lebensquelle</font>/
	<font color="#005c5e">Perfektes Timing</font>
	</label>
	<input type="radio" id="priIruneIII" name="priI" value="PriIRuneIII">
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
	<input type="radio" id="priIIruneI" name="priII" checked value="PriIIRuneI">
	<br>
	<label for="priIIruneII">
	<font color="#5e5400">Legende: Z&aumlhigkeit </font>/
	<font color="#5e0000">Gespenster-Poro </font>/
	<font color="#001c5e">Flinkheit</font>/
	<font color="#045e00">Spiegelschale</font>/
	<font color="#005c5e">Zukunftsmarkt</font>
	</label>
	<input type="radio" id="priIIruneII" name="priII" value="PriIIRuneII">
	<br>
	<label for="priIIruneIII">
	<font color="#5e5400">Legende: Blutdurst </font>/
	<font color="#5e0000">Argus' Verm&aumlchtnis </font>/
	<font color="#001c5e">Absoluter Fokus</font>/
	<font color="#045e00">Konditionierung</font>/
	<font color="#005c5e">Vasallenaufl&oumlser </font>
	</label>
	<input type="radio" id="priIIruneIII" name="priII" value="PriIIRuneIII">
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
	<input type="radio" id="priIIIruneI" name="priIII" checked value="PriIIIRuneI">
	<br>
	<label for="priIIIruneII">
	<font color="#5e5400">Niederm&aumlher </font>/
	<font color="#5e0000">Raffinierter J&aumlger </font>/
	<font color="#001c5e">Wasserlauf</font>/
	<font color="#045e00">Frische</font>/
	<font color="#005c5e">Anziehungskraft</font>
	</label>
	<input type="radio" id="priIIIruneII" name="priIII" value="PriIIIRuneII">
	<br>
	<label for="priIIIruneIII">
	<font color="#5e5400">Letztes Gefecht</font>/
	<font color="#5e0000">Erbarmungsloser J&aumlger </font>/
	<font color="#001c5e">Aufziehender Sturm</font>/
	<font color="#045e00">Aufschwung</font>/
	<font color="#005c5e">Himmelsk&oumlrper </font>
	</label>
	<input type="radio" id="priIIIruneIII" name="priIII" value="PriIIIRuneIII">
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
	<input type="radio" id="przision" name="secTree" checked value="Pr&aumlzision">
	<br>
	<label for="dominanz"><font color="#5e0000">Dominanz </font></label>
	<input type="radio" id="dominanz" name="secTree" value="Dominanz">
	<br>
	<label for="zauberei"><font color="#001c5e">Zauberei </font></label>
	<input type="radio" id="zauberei" name="secTree" value="Zauberei">
	<br>
	<label for="entschlossen"><font color="#045e00">Entschlossenheit</font></label>
	<input type="radio" id="entschlossen" name="secTree" value="Entschlossenheit">
	<br>
	<label for="inspiration"><font color="#005c5e">Inspiration</font></label>
	<input type="radio" id="inspiration" name="secTree" value="Inspiration">
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
	<input type="radio" id="secIruneI" name="SecI" checked value="SecIRuneI">
	<br>
	<label for="SecIruneII">
	<font color="#5e5400">Triumph</font>/
	<font color="#5e0000">Geschmack von Blut </font>/
	<font color="#001c5e">Manafluss</font>/
	<font color="#045e00">Abriss</font>/
	<font color="#005c5e">Kekslieferung</font>
	</label>
	<input type="radio" id="secIruneII" name="SecI" value="SecIRuneII">
	<br>
	<label for="SecIruneIII">
	<font color="#5e5400">Geistesgegenwart </font>/
	<font color="#5e0000">Pl&oumltzlicher Einschlag</font>/
	<font color="#001c5e">Der ultimative Hut</font>/
	<font color="#045e00">Lebensquelle</font>/
	<font color="#005c5e">Perfektes Timing</font>
	</label>
	<input type="radio" id="secIruneIII" name="SecI" value="SecIRuneIII">
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
	<input type="radio" id="secIIruneI" name="SecI" value="SecIIRuneI">
	<br>
	<label for="secIIruneII">
	<font color="#5e5400">Legende: Z&aumlhigkeit </font>/
	<font color="#5e0000">Gespenster-Poro </font>/
	<font color="#001c5e">Flinkheit</font>/
	<font color="#045e00">Spiegelschale</font>/
	<font color="#005c5e">Zukunftsmarkt</font>
	</label>
	<input type="radio" id="secIIruneII" name="SecI" value="SecIIRuneII">
	<br>
	<label for="secIIruneIII">
	<font color="#5e5400">Legende: Blutdurst </font>/
	<font color="#5e0000">Argus' Verm&aumlchtnis </font>/
	<font color="#001c5e">Absoluter Fokus</font>/
	<font color="#045e00">Konditionierung</font>/
	<font color="#005c5e">Vasallenaufl&oumlser </font>
	</label>
	<input type="radio" id="secIIruneIII" name="SecI" value="SecIIRuneIII">
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
	<input type="radio" id="secIIIruneI" name="SecI" value="SecIIIRuneI">
	<br>
	<label for="secIIIruneII">
	<font color="#5e5400">Niederm&aumlher </font>/
	<font color="#5e0000">Raffinierter J&aumlger </font>/
	<font color="#001c5e">Wasserlauf</font>/
	<font color="#045e00">Frische</font>/
	<font color="#005c5e">Anziehungskraft</font>
	</label>
	<input type="radio" id="secIIIruneII" name="SecI" value="SecIIIRuneII">
	<br>
	<label for="secIIIruneIII">
	<font color="#5e5400">Letztes Gefecht</font>/
	<font color="#5e0000">Erbarmungsloser J&aumlger </font>/
	<font color="#001c5e">Aufziehender Sturm</font>/
	<font color="#045e00">Aufschwung</font>/
	<font color="#005c5e">Himmelsk&oumlrper </font>
	</label>
	<input type="radio" id="secIIIruneIII" name="SecI" value="SecIIIRuneIII">
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
	<input type="radio" id="secIruneI" name="SecII" checked value="SecIRuneI">
	<br>
	<label for="SecIruneII">
	<font color="#5e5400">Triumph</font>/
	<font color="#5e0000">Geschmack von Blut </font>/
	<font color="#001c5e">Manafluss</font>/
	<font color="#045e00">Abriss</font>/
	<font color="#005c5e">Kekslieferung</font>
	</label>
	<input type="radio" id="secIruneII" name="SecII" value="SecIRuneII">
	<br>
	<label for="SecIruneIII">
	<font color="#5e5400">Geistesgegenwart </font>/
	<font color="#5e0000">Pl&oumltzlicher Einschlag</font>/
	<font color="#001c5e">Der ultimative Hut</font>/
	<font color="#045e00">Lebensquelle</font>/
	<font color="#005c5e">Perfektes Timing</font>
	</label>
	<input type="radio" id="secIruneIII" name="SecII" value="SecIRuneIII">
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
	<input type="radio" id="secIIruneI" name="SecII" value="SecIIRuneI">
	<br>
	<label for="secIIruneII">
	<font color="#5e5400">Legende: Z&aumlhigkeit </font>/
	<font color="#5e0000">Gespenster-Poro </font>/
	<font color="#001c5e">Flinkheit</font>/
	<font color="#045e00">Spiegelschale</font>/
	<font color="#005c5e">Zukunftsmarkt</font>
	</label>
	<input type="radio" id="secIIruneII" name="SecII" value="SecIIRuneII">
	<br>
	<label for="secIIruneIII">
	<font color="#5e5400">Legende: Blutdurst </font>/
	<font color="#5e0000">Argus' Verm&aumlchtnis </font>/
	<font color="#001c5e">Absoluter Fokus</font>/
	<font color="#045e00">Konditionierung</font>/
	<font color="#005c5e">Vasallenaufl&oumlser </font>
	</label>
	<input type="radio" id="secIIruneIII" name="SecII" value="SecIIRuneIII">
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
	<input type="radio" id="secIIIruneI" name="SecII" value="SecIIIRuneI">
	<br>
	<label for="secIIIruneII">
	<font color="#5e5400">Niederm&aumlher </font>/
	<font color="#5e0000">Raffinierter J&aumlger </font>/
	<font color="#001c5e">Wasserlauf</font>/
	<font color="#045e00">Frische</font>/
	<font color="#005c5e">Anziehungskraft</font>
	</label>
	<input type="radio" id="secIIIruneII" name="SecII" value="SecIIIRuneII">
	<br>
	<label for="secIIIruneIII">
	<font color="#5e5400">Letztes Gefecht</font>/
	<font color="#5e0000">Erbarmungsloser J&aumlger </font>/
	<font color="#001c5e">Aufziehender Sturm</font>/
	<font color="#045e00">Aufschwung</font>/
	<font color="#005c5e">Himmelsk&oumlrper </font>
	</label>
	<input type="radio" id="secIIIruneIII" name="SecII" value="SecIIIRuneIII">
	<br>
	<br>
	</fieldset>
  </p>
  <br>
  <p><label>Erkl&aumlrung (Runen):<br>
<textarea name="textrunen" cols="50" rows="8"></textarea></label></p>
  
  </fieldset>

<input type="submit" value="Speichern">
</form>
</div>
</body>
</html>
