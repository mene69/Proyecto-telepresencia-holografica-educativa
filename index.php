<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="assets/css/inicio.css">
</head>
<body>
<div class="wrapper fadeInDown">
<center> <div class="wrapper fadeInDown"> <img src="assets/img/Logo TEHE.png" width="100" lenght="100"></div> </center>
<h1>Proyecto T.E.H.E</h1>
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Inicio de sesión </h2>

    <!-- Icono -->
    <!--<div class="fadeIn first">
      <img src="assets/img/favicon.png" id="icon" alt="Icono de Usuario" />
    </div>-->

    <!-- Inicio Formulario de Inicio de Sesion -->
    <form method="POST" name="form_login" id="form_login" action="menu-principal.php">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingrese su correo">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="Ingrese su contraseña">
      <a class="underlineHover" href="#" name="rec_contrasenia" id="rec_contrasenia">¿Ha olvidado su contraseña?</a>
      <input type="submit" class="fadeIn fourth" value="Conectarse">
    </form>
    <!-- Cierre Formulario de Inicio de Sesion -->
    
    <!-- Recuperar contraseña -->
    <div id="formFooter">
      <a class="underlineHover" href="Registro.php">Registro de cuenta</a>
    </div>
  </div>
</div>
</body>
</html>