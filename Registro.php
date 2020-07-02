<?php
include ("recursos/conexion.php");
session_start();
//Rescate de variables del formulario utilizando metodo POST
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$apellido=(isset($_POST['apellido']))?$_POST['apellido']:"";
$contrasena=(isset($_POST['contrasena']))?$_POST['contrasena']:"";
$rut=(isset($_POST['rut']))?$_POST['rut']:"";
$rutver=(isset($_POST['rutver']))?$_POST['rutver']:"";
$nac=(isset($_POST['nac']))?$_POST['nac']:"";
$direccion=(isset($_POST['direccion']))?$_POST['direccion']:"";
$email=(isset($_POST['email']))?$_POST['email']:"";
$telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
$estado='4';
$cargo=(isset($_POST['cargo']))?$_POST['cargo']:"";
$boton=(isset($_POST['btn_registro']))?$_POST['btn_registro']:"";

switch($boton)
{
// estructura de la base de datos: Tabla Cliente:
// idCliente, 
// Nombre, 
// Apellido, 
// Rut, 
// NumeroVerificador, 
// FechaNacimiento, (YYYY-MM-DD)
// Direccion, 
// Correo, 
// Telefono, 
// Estado_idEstado, 
// Cargo_idCargo, 
// Contrasena
	case "btn_registro":
	$sentencia=$pdo->prepare("INSERT INTO tehe.cliente(idCliente, Nombre, Apellido, Rut, NumeroVerificador, FechaNacimiento, Direccion, Correo, Telefono, Estado_idEstado, Cargo_idCargo, Contrasena)VALUES(NULL,'".$nombre."','".$apellido."','".$rut."','".$rutver."','".$nac."','".$direccion."','".$email."','".$telefono."','".$estado."','".$cargo."','".$contrasena."')");
	$sentencia->bindParam("Nombre",$nombre);
	$sentencia->bindParam("Apellido",$apellido);
	$sentencia->bindParam("Rut",$rut);
	$sentencia->bindParam("NumeroVerificador",$rutver);
	$sentencia->bindParam("FechaNacimiento",$nac);
      $sentencia->bindParam("Direccion",$direccion);
      $sentencia->bindParam("Correo",$email);
      $sentencia->bindParam("Telefono",$telefono);
      $sentencia->bindParam("Estado_idEstado",$estado);
      $sentencia->bindParam("Cargo_idCargo",$cargo);
      $sentencia->bindParam("Contrasena",$contrasena);
	$sentencia->execute();
      header("location: index.php");
	break;
		
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
<link rel="stylesheet" href="assets/css/mainrg.css">
<link rel="stylesheet" href="assets/css/resetrg.css">
	<title>Formulario de Registro</title>
</head>
<body>
<div class="container">
<a href="index.php">Volver</a>
		<div class="form__top">
			<h2>Formulario <span>Registro</span></h2>
      </div>
      <!-- Formulario de registro de usuario, Campos: -->
	<form class="form__reg" id="form_reg" name="form_reg" enctype="multipart/form-data" method="POST" action="">
            <input class="input" type="text" placeholder="&#128100;  Nombre" name="nombre" id="nombre" value="<?php echo $nombre; ?>" required autofocus>
            <input class="input" type="text" placeholder="&#128100;  Apellidos" name="apellido" id="apellido" value="<?php echo $apellido; ?>"  required autofocus>
            <input class="input" type="password" placeholder="&#9919;  Contraseña" name="contrasena" id="contrasena" value="<?php echo $contrasena; ?>" required autofocus>
            <div>
            <input class="input" type="text" placeholder="&#128199;  Rut" name="rut" id="rut" value="<?php echo $rut; ?>" required autofocus> <input class="input" type="text" placeholder="" name="rutver" id="rutver" value="<?php echo $rutver; ?>"  required autofocus>
            </div>
            <input class="input" type="text" placeholder="&#128197; YYYY-MM-DD ; Fecha de Nacimiento " name="nac" id="nac" value="<?php echo $nac; ?>" required>
            <input class="input" type="text" placeholder="&#127968; Sector-#-Ciudad" name="direccion" id="direccion" value="<?php echo $direccion; ?>" required>
            <input class="input" type="email" placeholder="&#128232; pepe@gmail.com" name="email" id="email" value="<?php echo $email; ?>"  required>
            <input class="input" type="tel" pattern="[0-8]{8}" maxlenght="8" placeholder="&#128222; Número telefónico: XXXXXXXX" ;  name="telefono" id="telefono" value="<?php echo $telefono; ?>" required>
            <input class="input" type="number" lenght="2" min="1" max="2" placeholder="&#128188;  Cargo, 1: Estudiante 2: Docente" name="cargo" id="cargo" value="<?php echo $cargo; ?>" required autofocus>
            <div class="btn__form">
                  <input  class="btn__reset" type="reset" name="btn_reset" value="Limpiar"></input> <br>
            	<button class="btn__submit" type="submit" name="btn_registro" value="btn_registro">Registrarse</button> <br>
            </div>
                  <div class="container"> 

                  </div>
	</form>
</div>




</body>
</html>