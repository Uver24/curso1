<!-- <?php include 'conexion.php'?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="guardar.php" method="post">
      <input type="text" name="Nombre" placeholder="Nombre del Alumno "><br>
      <input type="text" name="Paterno" placeholder="Apellido Paterno"><br>
      <input type="text" name="Materno" placeholder="Apellido Materno"><br>
      <input type="submit" value="Guardar">
    </form>
    <table>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno </th>
        <th></th>
        <th></th>
        <?php
        $sel = $con -> query("SELECT * FROM alumnos ");
        while($fila = $sel -> fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $fila ['id'] ?></td>
            <td><?php echo $fila ['nombre'] ?></td>
            <td><?php echo $fila ['paterno'] ?></td>
            <td><?php echo $fila ['materno'] ?></td>
            <td><a href="actualizacion.php?id=<?php echo $fila['id']?>">EDITAR</a></td>
            <th><a href="borrar.php?id=<?php echo $fila['id']?>">Eliminar</a></th>
        </tr>
        <?php }?>
    </table>
</body>
</html>