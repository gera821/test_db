<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="orange">


	<form action="" method="GET">
	<input type="number" name="edad" id="edad">
	<input type="submit" name="votar">
</form>

<?php
if(isset($_GET['edad'])){
	$cantidad = $_GET['edad'];

$a = 18;

$b = 9;

//$result = ($a <= 18 and $b <> 9);

//if ( $result == true) {

echo "Se cumple la condición $edad";

}else {

echo "No se cumple la condición $edad";

}
//}

?>

	





</body>
</html>