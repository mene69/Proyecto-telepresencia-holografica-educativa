<?php
session_start();
$email=($_SESSION['email']);
$elcargo=($_SESSION['cargo']);
//print_r($email);
$sentencia="SELECT * FROM tehe.cliente WHERE correo='".$email."'";
$result=mysqli_query($conexion,$sentencia);
$cont=mysqli_num_rows($result);
$fila = mysqli_fetch_array($result);
//print_r($_SESSION['email']);
//print_r($cont);
//print_r($fila);

$sentencia2="SELECT * FROM tehe.cargo WHERE idCargo='".$elcargo."'";
$result2=mysqli_query($conexion,$sentencia2);
$cont1=mysqli_num_rows($result2);
$fila2=mysqli_fetch_array($result2);
//print_r($fila2);

if($cont1>0){
  $elcargo= $fila2['Cargoa'];
}

?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#header" class="scrollto">T.E.H.E</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="menu-principal">Menú Principal</a></li>
          <li><a href="contactos.php #contact">Contactos</a></li>
          <li><a href="realizar_llamada.php #hero">Realizar llamada</a></li>
          <li><a href="#services">¿Ayuda?</a></li>
          <li><a href="modulo_plantillas.php #contact">Módulo de plantillas</a></li>
          <li>
          <p class="animated fadeInUp "><a>Saludos! <span> <?php echo $elcargo; echo(" ");  echo $fila['Nombre']; echo(" "); echo $fila['Apellido']; ?> </span></a></p> 
          </li>
          <li><a href="editar_perfil.php #contact">Editar Perfil</a></li>
          <li><a href="index.php">Cerrar Sesión</a>
            <!--<ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>-->
          </li>
        </ul>
      </nav>
      <!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->