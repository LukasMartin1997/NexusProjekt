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
<?php
$angemeldet = $_SESSION["angemeldet"];
$benutzer = $_SESSION["benutzer"];
if($angemeldet == 1)
{
	echo("
<iframe src='chat/chat.php' width='99%' height='50%' frameBorder='1' id='chat'></iframe>
<form method='post' action='chat/schreiben.php'>
<p>
<textarea name='chattext' cols= '50' rows='8'></textarea></p>
<input type='submit' value='Senden'>
</form>

");
if($benutzer == "Big SolidSnake")
{
	echo("<br><br><a href='chat/bearbeiten.php'>Chat bearbeiten</a>");
}

}

else
{
	echo("Du musst angemeldet sein um den Teamchat nutzen zu k&ouml;nnen");
}
?>
<br>
<br>
<br>
<img src="../bilder/aurelionsol.png" width=100%>
</div>
</body>
</html>
