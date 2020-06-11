<?php include ("assets/Templates/header.php");?>
<?php include ("assets/Templates/menu-usuario.php");?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
        <h2 class="animated fadeInDown"><span>Modulo de llamada</span></h2>
        </div>
    </div>
</section>

<hr> <br> <br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Llamada</h2>
        </div>

        <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="col-lg-3 form-group">
                <h1 class="text-center">Contactos</h1>
                <table class="table table-info " data-aos="fade-right" data-aos-delay="100">
                <tbody>
                    <tr>
                        <th width="10%" class="text-center">Nombre</th>
                        <th width="10%" class="text-center">Apellido</th>
                    </tr>

                    <tr>
                        <th width="10%" class="text-center">Pepe</th>
                        <th width="10%" class="text-center">Sepúlveda</th>
                    </tr>

                    <tr>
                        <th width="10%" class="text-center">Nicolas</th>
                        <th width="10%" class="text-center">Arancibia</th>
                    </tr>
                    
                    <tr>
                        <th width="10%" class="text-center">Felipe</th>
                        <th width="10%" class="text-center">Moreira</th>
                    </tr>
                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <th><button type="submit"><i class="icofont-phone">Agregar<a href="contactos.php"></i></th>
                    </tr>
                </tbody>
            </table>
                </div>
                <div class="col-lg-7 form-group">
                <video id="vid" autoplay></video>

                    <script>

    navigator.mediaDevices.getUserMedia({
        video: {
            width: {
                min: 500,
                max: 500
            },
            height: {
                min: 500,
                max: 500
            },

        }
    })
    .then(stream => {
        document.getElementById("vid").srcObject = stream;
    })


                    </script>
            </div >

                <div id="contenedor-chat" class="col-lg-2 form-group">
                <h1>Chat en Linea</h1>
                <div id="conversaciones" ></div>
                <!--<input type="text" class="form-control" placeholder="Usuario">-->
                <textarea id="mensaje" placeholder="mensaje" class="form-control"></textarea>
                <button class="btn btn-outline-info btn-lg btn-block" onclick="escribir()">Enviar</button>
                </div>

            </div>

        </div>
        
    </div>


    </section>
    <!-- Fin Section -->


<?php include ("assets/Templates/footer.php");?>