<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body bgcolor="orange">
<form action="" method="GET">
	<input type="number" name="cantidad" id="cantidad">
	<input type="submit" name="calcular">
</form>
<?php
if(isset($_GET['cantidad'])){
	$cantidad = $_GET['cantidad'];
	if($cantidad > 0){
		$descuento = $cantidad*0.25;
		$total = $cantidad - $descuento;
		 echo "La cantidad es $cantidad<br>";
		 echo "El descuento es $descuento<br>";
		 echo "El total es $total<br>";
	}else {
		
	}
}	



?>	


</form>
</body>
</html>