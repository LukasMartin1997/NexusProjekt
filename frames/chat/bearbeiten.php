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
$inhalt = file_get_contents("chat.txt");
?>
<form method="post" action="speichern.php">
<textarea name="inhalt" cols="50" rows="8"><?php echo("$inhalt"); ?></textarea>
<br>
<br>
<input type="submit" value="Speichern">
</form>
</div>
</body>
</html>
