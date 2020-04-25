<!DOCTYPE html>
<html lang="es">
<title>ScalaNegocios</title>
<head>
  <link rel="stylesheet" href="/cssC/estilos.css">
  <link rel="stylesheet" href="/cssC/animate.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700|Roboto:300,400,700&display=swap"
      rel="stylesheet">
  <script src="https://kit.fontawesome.com/d00b1f9a63.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Jomolhari&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="owl/owl.carousel.min.css">
  <link rel="stylesheet" href="owl/owl.theme.default.min.css">
  <meta name="viewport" content="width=device-width,user-scalable=no">
</head>


<body>

<header id="index">

  <?php
  require_once 'navbar.php';
?>

<div class="contenedor">
 <div class="contenedor-titulo">
   <div class="titulo">
     <h1 class="animated bounceInUp slow delay-1s">TODO EMPIEZA CON</h1>
     <h2 class="animated bounceInUp slow delay-1s">UNA "IDEA"</h2>
     <!-- <a>VER MIS TRABAJOS</a> -->
    </div>
 </div>
</div>
</header>

<main>

  <section id="como-lo-hacemos">
  <div class="contenedor">
      <div class="contenedor-title">
          <div class="title">
              <h1>¿Cómo lo hacemos?</h1>
          </div>
          <div class="como-text">
            <p>Basándonos en la experiencia analizamos el entorno y creamos un plan de acción enfocado al desarrollo económico-social. Aprovechamos la infraestructura empresarial existente y fortalecemos el capital humano con base en la capacitación continua.</p>

            </div>

      </div>
  </div>
  <div class="contenedor" id="animate">
      <div class="contenedor-infoInd">
          <div class="infoInd">
              <i class="fas fa-lightbulb"></i>
              <h3>Innovación</h3>
              <p>Creamos estrategias de negocios.</p>
          </div>
          <div class="infoInd">
              <i class="fas fa-map-marker-alt"></i>
              <h3>Asesoria</h3>
              <p>Asesoramos municipios.</p>
          </div>
          <div class="infoInd">
            <i class="fas fa-user-tie"></i>
              <h3>Desarrollo</h3>
              <p>Desarrollamos emprendedores y Pymes.</p>
          </div>
          <div class="infoInd">
              <i class="fas fa-chart-line"></i>
              <h3>Gestión</h3>
              <p>Gestionamos inversión pública y privada.</p>
          </div>
      </div>
  </div>
  </section>



<!-- <section id="trabajos">
  <div class="contenedor">
    <h1>Nuestros clientes</h1>
    <div class="contenedor-trabajos owl-carousel owl-theme">

      <div class="trabajo item">
        <img src="imagenes/malinaltepec.jpg" width="120" height="190" alt="The Cookie Way"></a>

      </div>
      <div class="trabajo item">
        <img src="imagenes/copalillo.png" width="100" height="170" alt="The Cookie Way"></a>

      </div>
      <div class="trabajo item">
        <img src="imagenes/tepecoa.png" height="230" alt="The Cookie Way"></a>
      </div>

      <div class="trabajo item">
        <img src="imagenes/tetipac.png"  height="220" alt="Tetipac"></a>
      </div>

      <div class="trabajo item">
        <img src="imagenes/apaxtla.jpg"   height="250"  alt="Wodin Digital"></a>
      </div>

      <div class="trabajo item">
        <img src="imagenes/sabrosur.png"  height="200" alt="Tetipac"></a>
      </div>

      <div class="trabajo item">
        <img src="imagenes/fertipoch.png"   height="210"  alt="Wodin Digital"></a>
      </div>


      </div>
  </div>
</secton> -->

<div class="wrapper">
  <div>
    <img src="imagenes/copalillo.png"><img src="imagenes/tetipac.png"><img src="imagenes/apaxtla.jpg"><img src="imagenes/sabrosur.png">
  </div>
</div>


</main>

<footer>
    <?php
    require_once 'footer.php';
?>
</footer>

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="owl/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      loop:true,
      autoplay:true,
      autoplayTimeout:1500,
      autoplayHoverPause:true,
      margin:50,
      nav:false,
      merge:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:4
          }
      }
  })
});
</script>

</body>


</html>
