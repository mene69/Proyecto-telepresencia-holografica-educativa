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
		<div class="form__top">
			<h2>Formulario <span>Registro</span></h2>
      </div>
      <!-- Formulario de registro de usuario, Campos: -->
		<form class="form__reg" action="">
            <input class="input" type="text" placeholder="&#128100;  Nombre" name="nombre" required autofocus>
            <input class="input" type="text" placeholder="&#128100;  Apellidos" name="apellido"  required autofocus>
            <input class="input" type="email" placeholder="&#128231;  Email" name="email" required>
            <input class="input" type="date" placeholder="# ; Fecha de Nacimiento" name="fech" required>
            <div>
            <input class="input" type="text" placeholder="&#128199;  Rut" name="rut" id="rut" required autofocus> <input class="input" type="text" placeholder="" name="rutver" id="rutver"  required autofocus>
            </div>
            <input class="input" type="text" placeholder="&#128188;  Cargo" name="cargo" required autofocus>
            <div class="container">
            <form>
            <!--<div class="form-group">
                  <label for="sel1">Cargo:</label>
                  <select class="form-control" id="sel1">
                        <option>Alumno</option>
                        <option>Profesor</option>
                  </select>
            </div>
            </form>
            </div>-->
            <input class="input" type="text" placeholder="&#128222;  Telefono" name="telefono" required>
            <input class="input" type="text" placeholder="&#8962;  Región" name="region" required>
            <input class="input" type="password" placeholder="&#9919;  Contraseña" name="contraseña" required autofocus>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">
            </div>
		</form>
	</div>

<?php

//Incluimos la conexión a la base de datos.
include '../recursos/conexion.php';

//Rescatamos los datos del otro archivo mediante el metodo POST.
//$nombre = $_POST["nombre"];
//$apellido = $_POST["apellido"];
//$email = $_POST["email"];
//$fech = $_POST["fech"];
//$region = $_POST["region"];
//$clave = $_POST["clave"];
//$rut = $_POST["rut"];
//$telefono = $_POST["telefono"];

//Consulta para insertar en la pagina web
$insertar = "INSERT INTO Usuario(NPropioVinculacion, FechaInscripcion, Nombre, Apellido, Telefono, Correo, NomUsuario, Clave) VALUES (null, '2019-06-26','$nombre', '$apellido', '$telefono', '$correo', '$usuario', '$clave')";

//Ejecutamos la consulta mysqli_query la cual nos permitirar rescatar los resultados para convertirlos en un buffer.

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
      echo 'Error al registrarse';
} else {
      header("location:../index.html");
}

//Cerrar la conexión
mysqli_close($conexion);
?>

</body>
</html>