<!DOCTYPE html>
<html>
<head>
<title>Registro de Cliente</title>
<?php include_once 'vistas/navegacion/menu.php';?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
<header class="w3-container " style="padding: 80px 8px; width: 100%; height: 300px; background: #F4A031 ">
        
        <h1 style="font-size: 100px" class="w3-center w3-text-white"><strong>Contacto</strong> </h1>
        
    </header>

    <div class="info">
        <!-- Team Container -->
        <div class="w3-container w3-padding-64 w3-center" id="team">
            <h2 class="w3-xxxlarge">Medios y Ubicación</h2>
            <p class="w3-xlarge w3-text-gray">
                Estamos para ayudarte. Si tienes alguna duda o reclamo, no dudes en contactarnos.
            </p>
            <br>
            <div class="w3-container w3-center w3-xxlarge">
                <i class="fa fa-map-marker" style="margin-right: 10px;"></i>Puente Alto, Santiago.<br> 
                <i class="fa fa-phone" style="margin-right: 10px;"></i>Telefono: 9 876 78 50<br>
                <i class="fa fa-envelope" style="margin-right: 10px;"></i>Email: Serviexpress@contacto.com<br>
                <i class="fa fa-whatsapp" style="margin-right: 10px;"></i>Whatsapp: +569 7889 76 54<br>
            </div>
                  
            
        
        </div>
    
    </div>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
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

    <!--Codigo JavaScript-->
    <script>
        // Función JS que permite alternar el menu en pantallas pequeñas al hacer click
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else { 
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // Código Jquery para el control del bxSlider
        $(document).ready(function(){

            $('.bxslider').bxSlider({
                auto: true,
                autoControls: true,
                stopAutoOnClick: true,
                pager: true,
                slideWidth: 1500,
                controls: false,
                mode: 'fade',
                adaptiveHeight: true
            });
        });
    </script>
</body>
</html>
