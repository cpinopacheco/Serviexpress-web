
    <!--Header-->
    <header class="w3-container w3-center " style="padding: 80px 8px; width: 100%; height: 660px; background-color: #F4A031; background-image: url(publico/img/fondo-metalico.png)">

        <img style="margin-top: 70px" id="logo" class="w3-image" src="publico/img/logo-header.png" alt="logo">
        <br><br><br>
        <?php if(isset($_SESSION['USUARIO'])) {?>
        <a style="width: 400px; height: 50px; color: #575756" class="w3-button w3-dark-orange w3-padding-large w3-large w3-margin-top w3-round-xlarge w3-hover-dark-grey w3-hover-text-orange" href="index.php?controlador=reserva&accion=guardar">Reserva Hora de Atención</a>
        <?php } ?>
        <?php if(!isset($_SESSION['USUARIO'])) {?>
        <a style="width: 400px; height: 50px; color: #575756" class="w3-button w3-dark-orange w3-padding-large w3-large w3-margin-top w3-round-xlarge w3-hover-dark-grey w3-hover-text-orange" href="index.php?controlador=usuario&accion=guardar">¡Regístrate y reserva tu hora!</a>
        <?php } ?>
    </header>
    
    <!--Slider-->
    <div class="bxslider">
        <div><img  class="img_slider" src="publico/img/foto16-estandar.jpg" alt="foto1"></div>
        <div><img  class="img_slider" src="publico/img/foto17-estandar.jpg" alt="foto12"></div>
        <div><img  class="img_slider" src="publico/img/foto14-estandar.jpg" alt="foto3"></div>
        <div><img  class="img_slider" src="publico/img/foto15-estandar.jpg" alt="foto4"></div>
        <div><img  class="img_slider" src="publico/img/foto3-estandar.jpg" alt="foto5"></div>
    </div>

    <!-- Primer Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Quienes Somos</h1>
            <h4 class="w3-padding-32">
                Somos un taller multimarca que ofrece para tu auto las mantenciones y reparaciones necesarias 
                para asegurar siempre su perfecta condición y duración,
                Contamos con infraestructura de punta, tecnologia de punta y siempre usando repuestos de alta calidad.
            </h4>
    
            <p class="w3-text-grey w3-large"> 
                Somos rápidos y transparentes para hacer el mantenimiento y las reparaciones de su vehículo.
                <br><br>
                ¡Te invitamos a vivir la experiencia de ServiExpress!
            </p>
            </div>

        <div class="w3-third w3-center">
            <img style="margin-top: 50px; margin-left: 0px;" src="publico/img/icono-index.png" alt="">
        </div>
    </div>
    </div>

    <!-- Segundo Grid 
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">
        <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
        </div>

        <div class="w3-twothird">
        <h1>Lorem Ipsum</h1>
        <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

        <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    </div>
    -->

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
        <h1 class="w3-margin w3-xlarge">Brindamos el mejor servicio</h1>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-center">  
        <div class="w3-xxxlarge w3-padding-32 ">
            <h4 id="txt_siguenos" class="w3-center w3-text-grey">Siguenos en nuestras redes sociales</h4>
            <a href="https://www.facebook.com" target="blank"><i id="redes_sociales" class="fa fa-facebook-official "></i></a> 
            <a href="https://www.instagram.com" target="blank"><i id="redes_sociales" class="fa fa-instagram "></i></a>
            <a href="https://twitter.com" target="blank"><i id="redes_sociales" class="fa fa-twitter "></i></a>
            <br>
            <h6 id="txt_derechos" class="w3-center w3-text-grey">&copy; Todos los derechos reservados</h6>
        </div>
    </footer>