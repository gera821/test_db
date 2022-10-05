<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="orange">
	<?php
	echo date('d-m-y');
	$nombre ='Gerardo';
	$carrera ='programacion';
	$grupo = "5pv";


	?>

	<ul>
		<li><?=$nombre;?></li>
		<li><?php echo $carrera; ?></li>
		<li><?=$grupo;?></li>
		<select name="" id="">
			<option value=""><?= $nombre; ?></option>
			<option value=""><?= $carrera; ?></option>
			<option value=""><?= $grupo; ?></option>
		</select>



	</ul>

	<input type="text" name="" id="" value="<?= $nombre; ?>">
	<input type="text" name="" id="" value="<?= $carrera; ?>">
	<input type="text" name="" id="" value="<?= $grupo; ?>">

</body>
</html>