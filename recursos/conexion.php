<?php
/*Conexion a la base de datos*/
/*Servidor, nombre del usuario, contraseña, nombre de la base de datos todo para poder conectarse a la base de datos*/

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "";

//$servidor = "localhost";
//$usuario = "cge51357";
//$contrasena = "23qy}w1jx4xxEQ%";
//$basedatos = "cge51357_geolation";

$conexion = mysqli_connect($servidor,$usuario,$contrasena) or die ("<strong>No se ha podido establecer la conexión con el SERVIDOR</strong>");

mysqli_set_charset($conexion,"utf8");		
$bd = mysqli_select_db($conexion,$basedatos) or die ("<strong>No se ha podido establecer con la BASE DE DATOS</strong>");
/* LISTO!!! */

?>

<!--try{
	$pdo = new PDO($servidor, $usuario, $contrasena,
	ARRAY(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
	);
	
	}catch(PDOException $e)
	{
		echo "<script>alert('Error de conexión')</script>";
	}-->