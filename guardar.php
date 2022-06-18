<?php
    include 'conexion.php';
        $nombre = $_POST['Nombre'];
        $apellido1 = $_POST['Paterno'];
        $apellido2 = $_POST['Materno'];

    $ins = $con ->query("INSERT INTO alumnos (id,nombre,paterno,materno) VALUES
    ('','$nombre','$apellido1','$apellido2')");
        if ($ins) {
        echo "guardo ";
        }else{
            echo "no guardo";
    }
?>