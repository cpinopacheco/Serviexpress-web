
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<!--Cosido CSS-->
<style>

    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
    h1{font-size:64px;}

    #redes_sociales{
        margin: 0px 20px;
        color: gray;
    }

    #redes_sociales:hover{
        color: orange;
    }

    #header{
        margin-top: 0px;
    }

    #txt_derechos{
        margin-top: 5px;
    }
    
    .img_slider{
        width:100%;   
    }

    #logo{
        width: 590px;
        height: 300px;
    }


</style>

    <!-- Barra de navegación -->
    <div class="w3-top">
        <div class="w3-bar w3-dark-grey w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-dark-grey" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-orange"><i style="margin-right: 3px" class="fa fa-home w3-xlarge"></i>Inicio</a>
            <a href="index.php?controlador=usuario&accion=servicio" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-grey">Servicios</a>
            <a href="index.php?controlador=usuario&accion=contacto" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-grey">Contacto</a>
            <?php if(!isset($_SESSION['USUARIO'])) {?>
            <a href="index.php?controlador=usuario&accion=guardar" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-grey">Registrarse</a>
            <?php } ?>
            
            <!-- Login -->
            <div class="w3-container">
                <?php if(isset($_SESSION['USUARIO'])) {?>
                <a href="index.php?controlador=usuario&accion=cerrar" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-grey w3-display-topright">Cerrar Sesi&#243;n</a>
                <?php } ?>
                <?php if(!isset($_SESSION['USUARIO'])) {?>
                <a onclick="document.getElementById('id01').style.display='block'" href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-grey w3-display-topright">
                <img style="width: 25px; height: 25px; margin-right: 10px" src="publico/img/user.png" alt="logo">Iniciar Sesión</a>
                <?php } ?>



                <input hidden type="checkbox" id="myCheck" onmouseover="myFunction()" onclick="document.getElementById('id01').style.display='block'">


                <div id="id01" class="w3-modal">
                    <div  class="w3-modal-content w3-card-4 w3-animate-zoom w3-light-grey" style="max-width:600px">
                
                      <div class="w3-center"><br>
                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-text-black w3-hover-orange w3-display-topright" title="Close Modal">X</span>
                        <img src="publico/img/logo.png" alt="Avatar" style="width:40%" class=" w3-margin-top">
                      </div>
                    <br>
                    <form class="w3-container" action="index.php?controlador=login&accion=login" method="post">
                        <div class="w3-section">
                          <label style="color:#575756"><b>Nombre de Usuario</b></label>
                          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese Nombre de Usuario" name="txtNombreUsuario" id="txtNombreUsuario" required>
                          <label style="color:#575756"><b>Contraseña</b></label>
                          <input class="w3-input w3-border" type="password" placeholder="Ingrese Contraseña" name="txtPassword" id="txtPassword" required>
                          <h4 class="advertencia"><?php echo (isset($mensaje))?$mensaje: '';?></h4>
                          <button class="w3-button w3-block w3-orange w3-hover-dark-grey w3-section w3-padding" type="submit">Ingresar</button>
                        </div>
                      </form>
                
                      <div class="w3-container w3-border-top w3-padding-16 w3-dark-grey">
                        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-orange w3-hover-grey">Cancelar</button>
                        <a style="margin-left: 20px; width: 290px" class="w3-button w3-orange w3-hover-grey" href="index.php?controlador=usuario&accion=guardar">Registrarse</a>
                      </div>
                
                    </div>
                  </div>
            </div>
            <!-- Fin Login -->
        </div>

        <!-- Barra de navegación en pantalla pequeña -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

            <a onclick="document.getElementById('id01').style.display='block'" href="#" class="w3-bar-item w3-button w3-padding-large w3-center">
                <img style="width: 25px; height: 25px; margin-right: 10px" src="publico/img/user.png" alt="logo"><strong>Iniciar Sesión</strong> </a>

                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-center">Inicio</a>
            <a href="index.php?controlador=usuario&accion=servicio" class="w3-bar-item w3-button w3-padding-large w3-center">Servicios</a>
            <a href="index.php?controlador=usuario&accion=contacto" class="w3-bar-item w3-button w3-padding-large w3-center">Contacto</a>
            <a href="index.php?controlador=usuario&accion=guardar" class="w3-bar-item w3-button w3-padding-large w3-center">Registrarse</a>
        </div>
    </div>



<?php if(isset($mensaje)) {?>
<script>
  document.getElementById("myCheck").click();
</script>
<?php } ?>







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

