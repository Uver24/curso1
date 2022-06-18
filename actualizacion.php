<?php 
 include 'conexion.php';
   $id = $_REQUEST['id'];
   
    $sel = $con -> query("SELECT * FROM alumnos WHERE id='$id' ");
     if ($fila = $sel -> fetch_assoc()) {
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id?>">
      <input type="text" name="Nombre" placeholder="Nombre del Alumno " value="<?php  echo $fila['nombre']?>"><br>
      <input type="text" name="Paterno" placeholder="Apellido Paterno" value="<?php  echo $fila['paterno']?>"><br>
      <input type="text" name="Materno" placeholder="Apellido Materno" value="<?php  echo $fila['materno']?>"><br>
      <input type="submit" value="Actualizar">
    </form>
</body>
</html>