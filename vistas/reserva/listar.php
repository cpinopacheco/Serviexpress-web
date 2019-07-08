

<!DOCTYPE html>
<html>
<head>
	<title>Hola</title>
</head>
<body>
 <center>            
                    <h3> Listado de atenciones</h3>
                    <br>
                    <br>
                    </center>
                    <div class="container"> 
                        <table>
                            <thead>                         
                            <tr>
                                <center>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>usuario_rut</th>
                                    <th>estado</th>
                                </center>
                            </tr>
                            </thead>  
                            <tbody>
                            <?php foreach ($reserva as $res): ?>
                                <tr>
                                    <td><?php echo $res->getIdReserva(); ?></td>
                                    <td><?php echo $res->getFecha(); ?></td>
                                    <td><?php echo $res->getUsuario(); ?></td>
                                    <td><?php echo $res->getEstado(); ?></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>   
</body>
</html>