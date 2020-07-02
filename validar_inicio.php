<?php
include ("recursos/conexion.php");
$email=(isset($_POST['email']))?$_POST['email']:"";
$contrasena=(isset($_POST['contrasena']))?$_POST['contrasena']:"";
$boton=(isset($_POST['btn_conn']))?$_POST['btn_conn']:"";
print_r($email);
print_r($contrasena);
print_r($boton);
print_r($servidor);
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
  //Error:  Fatal error: Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in C:\wamp64\www\Tehe1.3\index.php on line 32
  // PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in C:\wamp64\www\Tehe1.3\index.php on line 32
  // Hay algo mal cuando se ejecuta la consulta
  //$consulta = $pdo->prepare("SELECT * FROM tehe.cliente WHERE Correo=:email AND Contrasena=:contrasena");
  //Error solucionado!, se debe realizar la consulta de la siguiente forma:
case "btn_conn":
  $consulta = "SELECT * FROM tehe.cliente WHERE Correo='".$email."' AND Contrasena='".$contrasena."'";
$result=mysqli_query($conexion,$consulta);
$cont=mysqli_num_rows($result);
$fila=mysqli_fetch_array($result);

/*$consulta->bindParam(':Correo',$email);
$consulta->bindParam(':Contrasena',$contrasena);
$consulta->execute();*/
if($cont>0){
    session_start();
   // $fila=$consulta->fetch();
    $_SESSION['nombre']= $fila['Nombre'];
    $_SESSION['apellido']=$fila['Apellido'];
    $_SESSION['cargo']=$fila['Cargo_idCargo'];
    $_SESSION['contrasena']=$fila['Contrasena'];
    $_SESSION['email']=$fila['Correo'];
    
    header("Location: menu-principal.php");
    

    
}else{
      //header("Location: home.php");
}
break;

}
?>