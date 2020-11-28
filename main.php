<?php  

$ciudades = array("","Bogota","Medellin","Cali","Barranquilla","Bucaramanga","Manizales","Cartagena","Pereira");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Centro De Tickets</title>
</head>
<body>
	<h1 align="Center">Creacion de Ticket</h1>
	<button><a href="Usuario.php">Volver al Inicio</a>	<br></button>
	<h4>Ingrese sus datos a Continuacion</h4>
	<form action="Engine.php" method="POST">
	<input type="text" name="Nombre" placeholder="Nombre" required="">
	<input type="text" name="Cargo" placeholder="Cargo" required="">
	<br><br>
	<input type="text" name="Area" placeholder="Area" required="">
	Ciudad   

	<select name = "Ciudad" required="">
		<?php foreach ($ciudades as $value) {?>
		<option value="<?php Echo $value?>"><?php echo $value  ?> </option>
		<?php } ?>
	</select>
	
	<br><br>
	<input type="email" name="Email" placeholder="Email" required="">
	<input type="text" name="Telefono" placeholder="Telefono" required="">
	<br><br>
	<textarea name="Observacion" rows="20" cols="100" placeholder="Ingrese su novedad"></textarea>
	<br>
	<input type="submit" name="Submit">
	</form>
</body>
</html>
