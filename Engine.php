<?php 

require_once ('Conexion.php');


class Engine extends Conexion
{
	
	function __construct()
	{
		$this->db = parent::__construct();
	}

	
	public function Add($nombre, $cargo, $area,$ciudad, $correo, $telefono, $observacion)
	{
		$query = $this->db->prepare("INSERT INTO tickets (Fecha , Nombre, Cargo, Area, Ciudad, Correo, Telefono, Observacion) VALUES (NOW(),:Nombre,:Cargo,:Area,:Ciudad,:Correo,:Telefono,:Observacion);");

		$query->bindParam(':Nombre',$nombre);
		$query->bindParam(':Cargo',$cargo);
		$query->bindParam(':Area', $area);
		$query->bindParam(':Ciudad', $ciudad);
		$query->bindParam(':Correo',$correo);
		$query->bindParam(':Telefono',$telefono);
		$query->bindParam(':Observacion',$observacion);

		if($query->execute())
		{
			echo "Se agrego un nuevo ticket de: ".$nombre;
		}
		else 
		{
			echo "Error en la ejecucuion del query";
		}
	}
}


$Conexion1 = new Engine();

$nombre = $_POST['Nombre'];
$cargo = $_POST['Cargo'];
$area = $_POST['Area'];
$ciudad = $_POST['Ciudad'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$observacion = $_POST['Observacion'];

$valores = array("Nombre" => $nombre, "Cargo" => $cargo, "Area" => $area, "Ciudad" => $ciudad, "Email" => $email, "Telefono" => $telefono, "Observacion" => $observacion);

$Conexion1->Add($nombre,$cargo,$area,$ciudad,$email,$telefono,$observacion);

?>

<br><br>
<button><a href="Usuario.php">Crear un nuevo ticket</a></button>

<br><br><h4>Los datos exportados son</h4>

<table border="1">
	<tr>
		<th>Campo</th>
		<th>Dato</th>
	</tr>
	<?php foreach ($valores as $key => $value) {?>
	<tr>
		<td><?php echo $key ?></td>
		<td><?php echo $value  ?></td>
	</tr>
	<?php } ?>
</table>