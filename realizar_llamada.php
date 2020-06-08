<?php include ("assets/Templates/header.php");?>
<?php include ("assets/Templates/menu-usuario.php");?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="row d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <br> <br> <br> <br>
    <!-- Slide 1 -->
    <div class="carousel-item active col-lg-4">
        <div class="carousel-container">
        <video id="vid" autoplay></video>
<script>
    navigator.mediaDevices.getUserMedia({
        video: {
            width: {
                min: 640,
                max: 1280
            },
            height: {
                min: 480,
                max: 720
            },

        }
    })
    .then(stream => {
        document.getElementById("vid").srcObject = stream;
    })
</script>
        <!--<a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>-->
        </div>
    </div>

    </div>
</section>
<!-- End Hero -->
<hr> <br> <br>

<?php include ("assets/Templates/footer.php");?>