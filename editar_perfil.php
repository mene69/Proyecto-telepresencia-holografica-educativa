<?php include ("recursos/conexion.php"); ?>
<?php include ("assets/Templates/header.php");?>
<?php include ("assets/Templates/menu-usuario.php");?>
<?php 


?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
        <h2 class="animated fadeInDown">Modifique su <span>Perfil</span></h2>
        </div>
    </div>
</section>
<!-- End Hero -->
<br>
<hr>
<main id="main">
    <!-- ======= Sección de busqueda de contactos ======= -->
    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="row mt-2 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

    </div>

	<div class="container">
    <div class="row"> 
    <form method="post" id="perfil" class="php-email-form">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad">


        <div class="panel panel-success"><br>
            <h2 class="panel-title"><center><font size="5"><i class="icofont-user-alt-1"></i>PERFIL</font></center></h2>

            <div class="panel-body">
                <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> 
				<div id="load_img">
					<img class="img-responsive" alt="Logo">
				</div>
				<br>				
					<div class="row">
  					    <div class="col-md-12">
							<div class="form-group">
								<input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
							</div>
						</div>
						
					</div>
				</div>
                <div class=" col-md-8 col-lg-8 "> 
                  <table class="table table-condensed">
                    <tbody>

					<tr>
                        <td>Nombre:</td>
                        <td><input class="form-control input-sm" type="text" placeholder="&#128100;  Nombre" name="nombre" id="nombre" value="<?php //echo $nombre; ?>" required autofocus></td>
                    </tr>

					<tr>
                        <td>Apellido:</td>
                        <td><input class="form-control input-sm" type="text" placeholder="&#128100;  Apellidos" name="apellido" id="apellido" value="<?php //echo $apellido; ?>"  required autofocus></td>
                    </tr>

					<tr>
                        <td>Contraseña:</td>
                        <td><input class="form-control input-sm" type="password" placeholder="&#9919;  Contraseña" name="contrasena" id="contrasena" value="<?php //echo $contrasena; ?>" required autofocus></td>
                    </tr>

					<tr>
					
                        <td>RUT:</td>
						<td><input class="form-control input-sm" type="text" placeholder="&#128199;  Rut" name="rut" id="rut" value="<?php //echo $rut; ?>" required autofocus></td> 
						<style>
							#rutver{
							width: 60px;
							border: none;
							border-bottom: solid #C8C8C8 .2rem;
							transition: all .5s;
							}
						</style>
						<td> <input class="form-control input-sm" type="text" placeholder="9/k" name="rutver" id="rutver" value="<?php //echo $rutver; ?>"  required autofocus> </td>
                    </tr>

					<tr>
                        <td>Fecha de nacimiento:</td>
                        <td><input class="form-control input-sm" type="text" placeholder="&#128197; YYYY-MM-DD (Año/Mes/Día)" name="nac" id="nac" value="<?php //echo $nac; ?>" required></td>
                    </tr> 

					<tr>
                        <td>Dirección:</td>
                        <td><input class="form-control input-sm" type="text" placeholder="&#127968; Sector-#-Ciudad" name="direccion" id="direccion" value="<?php //echo $direccion; ?>" required></td>
                    </tr> 

                    <tr>
                        <td>Correo electrónico:</td>
                        <td><input type="email" class="form-control input-sm" placeholder="&#128232; pepe@gmail.com" name="email" id="email" value="<?php //echo $row['correo']?>" ></td>
                    </tr>
					<tr>
                        <td>Telefono:</td>
                        <td><input class="form-control input-sm" type="tel" pattern="[0-8]{8}" maxlenght="8" placeholder="&#128222; Número telefónico: XXXXXXXX" ;  name="telefono" id="telefono" value="<?php //echo $telefono; ?>" required></td>
                    </tr>
                    
                    </tbody>
                </table>

                </div>
				<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>
                <div class="panel-footer text-center">
				<button type="submit" id="btn_modificar" name="boton"  class="btn btn-sm btn-success"><i class="glyphicon glyphicon-refresh"></i> Actualizar hoja de vida</button>    
                </div>
            
        </div>
        </div>
		</form>
    </div>

<!--<script type="text/javascript" src="js/bootstrap-filestyle.js"> </script>
<script>
$( "#perfil" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_perfil.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);

		  }
	});
  event.preventDefault();
})

		
</script>-->

<!--<script>
		function upload_image(){
				
				var inputFileImage = document.getElementById("imagefile");
				var file = inputFileImage.files[0];
				if( (typeof file === "object") && (file !== null) )
				{
					$("#load_img").text('Cargando...');	
					var data = new FormData();
					data.append('imagefile',file);
					
					
					$.ajax({
						url: "ajax/imagen_ajax.php",        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#load_img").html(data);
							
						}
					});	
				}
				
				
			}
    </script>-->
    </section>
    <!-- Fin de la sección de busqueda de contactos -->
</main>

<br>
<hr>
<br>
<?php include ("assets/Templates/footer.php");?>