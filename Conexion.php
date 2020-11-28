<?php 

class Conexion
{

protected $db;
private $drive = "mysql";
private $host = "localhost";
private $dbname = "PipesBase";
private $user = "root";
private $password = "";

public function __construct()
{
	try
	{	
		$db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conexion completa con la base de datos";
		return $db;
	}
	catch (PDOException $e)
	{	
		echo "Ha surgido un error: <br>".$e->getMessage();
	}
}

}

?>