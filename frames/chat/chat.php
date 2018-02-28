<html>
<head>
<meta http-equiv='Refresh' content='3'>
<?php
session_start();
?>
<link rel="stylesheet" href="../css/style.css">
<title>Website</title>
</head>
<body>
<div id="mittestyle">
<?php
$text = file_get_contents ("chat.txt");
$data = explode("\n",$text);
$data = array_reverse($data);
foreach ($data as $chat)
{
	echo("$chat");
	echo("<br>");
}
?>
</div>
</body>
</html>
