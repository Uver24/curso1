<?php
   include 'conexion.php';
   $id = $_POST['id'];
   $nombre = $_POST['Nombre'];
   $paterno = $_POST['Paterno'];
   $materno = $_POST['Materno'];

  $up =  $con -> query("UPDATE alumnos SET Nombre='$nombre',Paterno ='$paterno', Materno='$materno'
  WHERE id='$id'");
  if ($up) {
    echo "<script>
    location.href='formulario2.php';
    </script>";
  }else{
    echo "<script>
    location.href='actualizacion.php?id=".$id."';
    </script>";
  }
?>