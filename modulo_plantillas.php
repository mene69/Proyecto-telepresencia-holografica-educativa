<?php include ("recursos/conexion.php"); ?>
<?php include ("assets/Templates/header.php");?>
<?php include ("assets/Templates/menu-usuario.php");?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
        <h2 class="animated fadeInDown">Modulo de: <span>Plantillas</span></h2>
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
                <h3>Plantillas para subir : </h3>
                <!--<p>A108 Adam Street, New York, NY 535022</p>-->
            </div>

            </div>

        </div>

        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="#" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="col-md-6 form-group">
                <img src="">
                <input type="file" name="subir_plantilla" class="form-control" id="subir_plantilla" placeholder="Subir plantilla" />
                <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <div class="text-center"><button type="submit">Subir</button></div>
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

    </section>
    
    <!-- Fin de la sección de busqueda de contactos -->
</main>

<br>
<hr>
<br>
<?php include ("assets/Templates/footer.php");?>