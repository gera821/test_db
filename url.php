<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PETICION URL</title>
</head>
<body bgcolor="orange">
	<center>

<?php
echo "<h2>Peticion URL <br></h2>";
 $url = 'https://www.w3resource.com/php-exercises/php-basic-
exercises.php';
 $url = parse_url($url);
 echo 'Scheme : '.$url['scheme']."<br>";
 echo 'Host : '.$url['host']."<br>";
 echo 'Path : '.$url['path']."<br>";
 echo "<h2><br><br><br>Rey Gerardo Avalos Mellado";
 echo "<br>5pv";
 echo "<br>Programacion";

?>
		





	</center>

</body>
</html>