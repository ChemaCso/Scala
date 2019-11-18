<div class="contenedor" id="contenedor-navBar">
            <img class="logo" src="/img/ScalaBlanco.gif" alt="ScalaNegocios">
          <img class="menu-icon" src="/imagenes/menubla.png" alt="menus">
            <nav>
                <ul>
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="nosotros.php">NOSOTROS</a></li>
                    <li><a href="servicios.php">SERVICIOS</a></li>
                    <li><a href="contacto.php">CONTACTO</a></li>
                </ul>
            </nav>

</div>

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>

<script>
$(document).ready(function(){
  $('.menu-icon').click(function(){
    $('header nav').slideToggle();
  })
})
</script>
