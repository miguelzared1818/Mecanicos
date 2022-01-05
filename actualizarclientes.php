<?php
    include("conexion.php");
    
    

$placa=$_GET['edit'];
$sql="SELECT * FROM clientes WHERE placa='$placa'";
$query=mysqli_query($conectar, $sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <form action="guardar.php" method="POST">
    <h1>ACTUALIZAR DATOS</h1><hr>
    <div class="form-group">
         <div class="col-md-6">
            <input name="placa" class="form-control" value="<?php echo $row['placa'] ?>" placeholder="Ej. AAA-123" type="hidden">
         </div>
    </div>
    <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nombre">Nombre</label>
                                      <input name="nombre" value="<?php echo $row['nombre'] ?>" class="form-control" placeholder="Ej. Arturo" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="apellidos">Apellidos</label>
                                      <input name="apellidos" value="<?php echo $row['apellidos'] ?>" class="form-control" placeholder="Ej. Peréz Hernández" type="text">
                                      </div>
                                    </div>

                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Marca</label>
                                      <input name="marca" value="<?php echo $row['marca'] ?>" class="form-control" placeholder="Ej. BMW" type="text">
                                      </div>
                                    </div>
                          
                                  <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Modelo</label>
                                        <input name="modelo" value="<?php echo $row['modelo'] ?>" class="form-control" placeholder="Ej. BMW Serie 3 " type="text">
                                      </div>
                                    </div>
                          
                                    
                                    

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="anio">Año</label>
                                        <input name="anio" value="<?php echo $row['anio'] ?>" class="form-control" placeholder="2000" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="color">color</label>
                                        <input name="color" value="<?php echo $row['color'] ?>" class="form-control" placeholder="Rojo" type="text">
                                      </div>
                                    </div>
    <button type="submit" class="btn btn-info" name="actualizardatos">Guardar</button>
    
    <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>
</div>
</body>
</html>