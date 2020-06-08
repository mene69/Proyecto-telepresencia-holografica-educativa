<?php include ("assets/Templates/header.php");?>
<?php include ("assets/Templates/menu-usuario.php");?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
        <h2 class="animated fadeInDown">Sus <span>Contactos</span></h2>
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

        <div class="col-lg-4">
            <div class="info">
            <div class="address">
                <!-- Colocar un icono aqui: <i class="icofont-google-map"></i> -->
                <h3>Contactos : </h3>
                <!--<p>A108 Adam Street, New York, NY 535022</p>-->
            </div>

            </div>

        </div>

        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="col-md-6 form-group">
                <input type="text" name="buscar_usuarios" class="form-control" id="buscar_usuarios" placeholder="Buscar usuarios" data-rule="minlen:4" data-msg="Por favor, Ingrese al menos 4 caracteres." />
                <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <div class="text-center"><button type="submit">Buscar</button></div>
                    <div class="validate"></div>
                </div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
        
            </form>
        </div>
        </div>
    </div>
    <div class="container col-md-10 php-email-form ">
        <div class="form-group justify-content-end">
            <table class="table table-info " data-aos="fade-right" data-aos-delay="100">
                <tbody>
                    <tr>
                        <th width="10%" class="text-center">Nombre</th>
                        <th width="10%" class="text-center">Apellido</th>
                        <th width="10%" class="text-center">Añadir contacto</th>
                        <th width="10%" class="text-center">Actualizar contacto</th>
                        <th width="10%" class="text-center">Eliminar contacto</th>
                        <th width="10%" class="text-center">Llamar</th>
                    </tr>

                    <tr>
                        <th width="10%" class="text-center">Pepe</th>
                        <th width="10%" class="text-center">Sepúlveda</th>
                        <th width="10%" class="text-center"><button class="text-center" type="submit">Añadir</button></th>
                        <th width="10%" class="text-center"><button type="submit">Actualizar</button></th>
                        <th width="10%" class="text-center"><button type="submit">Eliminar</button></th>
                        <form action="realizar_llamada.php" method="GET" name="llamar" id="llamar">
                        <th width="10%" class="text-center"><button type="submit"><i class="icofont-phone"><a href="realizar_llamada.php"></i></button></th>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </section>
    
    <!-- Fin de la sección de busqueda de contactos -->
</main>

<br>
<hr>
<br>
<?php include ("assets/Templates/footer.php");?>