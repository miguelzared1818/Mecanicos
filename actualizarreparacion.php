<?php
    include("conexion.php");

$folio=$_GET['edit'];
$sql="SELECT * FROM reparacion WHERE folio='$folio'";
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
    <form action="logicareparacion.php" method="POST">
    <h1>ACTUALIZAR DATOS</h1><hr>
    <div class="form-group">
        <div class="col-md-6">
        <input name="folio" value="<?php echo $row['folio'] ?>" class="form-control" placeholder="Ej. 00070531" type="hidden">
        </div>
    </div>
    <div class="form-group">
    <div class="form-group">
    <div class="col-md-6">
        <label class="control-label" for="tipo">Tipo de reparación</label>
        
        <select value="<?php echo $row['tipo'] ?>" name="tipo" id="tipo">
        <option value="Preventiva">Preventiva</option>
        <option value="Por daños">Por daños</option>
        </select>
        </div>
    </div>

    <div class="form-group">
    <div class="col-md-6">
        <label class="control-label" for="descripcion">Descripción</label>
        <input name="descripcion" value="<?php echo $row['descripcion'] ?>" class="form-control" placeholder="Describa el problema" type="text">
        </div>
    </div>

    <div class="form-group">
    <div class="col-md-6">
        <label class="control-label" for="costo">Costo</label>
        <input name="costo" value="<?php echo $row['costo'] ?>" class="form-control" placeholder="$9,999" type="text">
        </div>
    </div>
    <button type="submit" class="btn btn-info" name="actualizardatos">Guardar</button>
    
    <a href="reparacion.php" class="btn btn-danger">Cancelar</a>
    </form>
</div>
</body>
</html>