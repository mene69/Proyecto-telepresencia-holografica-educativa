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
    <form method="POST" name="form_login" id="form_login" action="validar_inicio.php" enctype="multipart/form-data">
      <input type="text" class="fadeIn second" name="email" id="email" placeholder="ejemplo1@email.com" required>
      <input type="text"  class="fadeIn third" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" required>
      <a class="underlineHover" href="#" name="rec_contrasenia" id="rec_contrasenia">¿Ha olvidado su contraseña?</a>
      <button type="submit" class="fadeIn fourth" name="btn_conn" id="btn_conn" value="btn_conn">Conectarse</button>
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