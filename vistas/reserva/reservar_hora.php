<!doctype html>
<html lang="en">
<head>
    <title>Reservar Hora de atención</title>
<?php include_once 'vistas/navegacion/menu.php';?>
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>
<header class="w3-container " style="padding: 80px 8px; width: 100%; height: 300px; background: #F4A031 ">
        
        <h1 style="font-size: 100px" class="w3-center w3-text-white"><strong>Servicios</strong> </h1>
        
    </header>

    <div class="info">
        <div class="w3-container w3-padding-64 w3-center" id="team">
            <h2 class="w3-xxxlarge">Reserva tu hora</h2>
            <br>
            <div class="w3-medium">
                <form method="POST" action="index.php?controlador=reserva&accion=guardar" >
                <center>
                <div class="container">
                    <div class="row">
                        
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name="txtFecha" id="txtFecha" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                        
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker();
                            });
                        </script>
                    </div>
                </div>
                            <button style="margin: 0px 5px; background-color: #F4A031; color: #575756; " class="w3-button w3-section w3-ripple w3-padding w3-hover-gray w3-hover-text-white"><strong>Generar Reserva</strong> </button>
                </center>
                </form>
                <?php echo (isset($mensajeReserva))?$mensajeReserva: '';?>
            </div>




        </div>
            <br>
        <!-- Team Container -->
        <div class="w3-container w3-padding-64 w3-center" id="team">
            <h2 class="w3-xxxlarge">Nuestros servicios</h2>
            <p class="w3-xlarge w3-text-gray">
                Estamos orientados en brindar la mejor atención y servicio en la mantención de su vehículo, 
                dándole un valor agregado y  ofreciéndole la seguridad que su inversión siempre estará 
                en buenas manos.
            </p>
        
            <div class="w3-row"><br><br><br><br>
            
                <div class="w3-quarter">
                    <img src="publico/img/icono2.png" alt="Cambio de aceite" style="width:45%" class="w3-circle w3-hover-opacity">
                    <h3>Cambios de aceite</h3>
                </div>
            
                <div class="w3-quarter">
                    <img src="publico/img/icono5.png" alt="Electricidad" style="width:45%" class="w3-circle w3-hover-opacity">
                    <h3>Electricidad</h3>
                </div>
            
                <div class="w3-quarter">
                    <img src="publico//img/icono7.png" alt="Alineamientos" style="width:45%" class="w3-circle w3-hover-opacity">
                    <h3>Alineamientos</h3>
                </div>

                <div class="w3-quarter">
                    <img src="publico/img/icono4.png" alt="Scanner" style="width:45%" class="w3-circle w3-hover-opacity">
                    <h3>Reparaciones</h3>
                </div>

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