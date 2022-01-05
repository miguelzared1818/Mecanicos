<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taller</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

  

        <div id="wrapper" class="container">
   
                
                 <center>
                  
                    <h1>TALLER DE MECANICA AUTOMOTRIZ</h1><hr>

                             <form  method="POST" name="form-work" action="guardar.php">
                    
                                <fieldset>
                                
                                <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="placa">Placa</label>
                                        <input name="placa" class="form-control" placeholder="Ej. AAA-123" type="text">
                                      </div>
                                    </div>

                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nombre">Nombre</label>
                                      <input name="nombre" class="form-control" placeholder="Ej. Arturo" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="apellidos">Apellidos</label>
                                      <input name="apellidos" class="form-control" placeholder="Ej. Peréz Hernández" type="text">
                                      </div>
                                    </div>

                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Marca</label>
                                      <input name="marca" class="form-control" placeholder="Ej. BMW" type="text">
                                      </div>
                                    </div>
                          
                                  <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Modelo</label>
                                        <input name="modelo" class="form-control" placeholder="Ej. BMW Serie 3 " type="text">
                                      </div>
                                    </div>
                          
                                    
                                    

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="anio">Año</label>
                                        <input name="anio" class="form-control" placeholder="2000" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="color">color</label>
                                        <input name="color" class="form-control" placeholder="Rojo" type="text">
                                      </div>
                                    </div>

                                                          
                                    
                                    <button type="submit" class="btn btn-info" name="guardardatos">Guardar</button>
                                    
          
                                    
                                </fieldset> 
                              </form>
                 </center>
              </div>

    <!--INICIO DE TABLA-->
   
        
    <div class="container">
    <?php
       $mysqli= new mysqli('localhost','root','','mecanicos') or die(mysqli_error($mysqli));
       $result = $mysqli->query("SELECT * FROM clientes") or die($mysqli->error);
    ?>
        <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th>Placa</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th colspan="2">Acciones</th>
              </tr>
            </thead>
            <?php
            while ($row=$result->fetch_assoc()):?>
              <tr>
                <td><?php echo $row['placa']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['marca']; ?></td>
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['anio']; ?></td>
                <td><?php echo $row['color']; ?></td>
                <td>
                  <a href="actualizarclientes.php?edit=<?php echo $row['placa']; ?>"
                    class="btn btn-info">Editar</a>
                  <a href="guardar.php?delete=<?php echo $row['placa']; ?>"
                    class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
              <?php endwhile; ?>
           </table>
        </div>

    <?php
        function pre_r($array){
         echo '<pre>';
         print_r($array);
         echo '</pre>';
       }
    ?>


</div>
<!--FIN DE TABLA--> 
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>