<!DOCTYPE html>
<html>
<head>
<title>Registro de Cliente</title>
<?php include_once 'vistas/navegacion/menu.php';?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
   <header class="w3-container " style="padding: 80px 8px; width: 100%; height: 300px; background: #F4A031 ">

        <h1 style="font-size: 100px" class="w3-center w3-text-white"><strong>Registro</strong> </h1>
        
    </header>
    
    <div class="info">
        
        <div class="w3-container w3-padding-64 w3-center" id="team">
            <h2 class="w3-xxxlarge">Registro de usuario</h2>
            <p class="w3-xlarge w3-text-gray">
                Para realizar una reserva, debe estar registrado en nuetro sistema. 
                Complete los datos  a continuación para garantizar una mejor atención.
            </p>
        
            <br>
                <?php if(isset($errores)&&count($errores)>0): ?>
                <h5>Se han encontrado errores en el formulario</h5>
               
                    <?php foreach ($errores as $err):  ?>
                        <li><?php echo $err;?></li>
                    <?php endforeach; ?>
               
                <?php endif; ?>

              <?php if(isset($mensajeRegistrar)) {?>
              <div class="alert alert-success">
                <strong>   <?php echo (isset($mensajeRegistrar))?$mensajeRegistrar: '';?></strong>
              </div> 
              <?php } ?>   

            <form method="POST" action="index.php?controlador=usuario&accion=guardar" class="w3-container w3-card-4 w3-light-grey w3-text-gray w3-margin">
                <h2 class="w3-center">Información de contacto</h2>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-o"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="txtRut" id="txtRut" type="text" placeholder="Rut">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                    <div class="w3-rest">
                      <input class="w3-input w3-border" name="txtNombre" id="txtNombre" type="text" placeholder="Nombre y Apellido">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
                    <div class="w3-rest">
                      <input class="w3-input w3-border" name="txtTelefono" id="txtTelefono" type="text" placeholder="Teléfono">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                    <div class="w3-rest">
                      <input class="w3-input w3-border" name="txtMail" id="txtMail" type="text" placeholder="Email">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marker"></i></div>
                    <div class="w3-rest">
                      <input class="w3-input w3-border" name="txtDireccion" id="txtDireccion" type="text" placeholder="Dirección">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-circle"></i></div>
                    <div class="w3-rest">
                      <input class="w3-input w3-border" name="txtNombre_usuario" id="txtNombre_usuario" type="text" placeholder="Nombre de usuario">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
                    <div class="w3-rest">
                      <input  type="password"class="w3-input w3-border" name="txtContrasenia" id="txtContrasenia" type="text" placeholder="Contraseña"><br>
                      <input type="password" class="w3-input w3-border" name="txtContrasenia2" id="txtContrasenia" type="text" placeholder="Ingrese nuevamente Contraseña">
                    </div>
                </div><br><br><br>
                
	            <button type="submit" name="btnGuardar" id="btnGuardar" style="margin: 0px 5px; background-color: #F4A031; color: #575756; " class="w3-button w3-section w3-ripple w3-padding w3-hover-gray w3-hover-text-white"><strong>Registrarse</strong> </button>
	            <button style="background-color: #F4A031; color:#575756" class="w3-button w3-section w3-ripple w3-padding w3-hover-gray w3-hover-text-white"><strong>Cancelar</strong> </button>
            </form>
            <br>


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
     <!--Header-->
 

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