<?php
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $basedatos = "formhd";
    $puerto = 3306;

    $conexion = new mysqli($host, $usuario, $password, $basedatos, $puerto);

    if($conexion->connect_errno){
        echo "La conexion a la base de datos fallo" . connect_errno;
    } else {
        echo " Se establecio conexion con la base de datos";
    }

    $cedula =$_POST['cedula'];
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $correo =$_POST['correo'];
    $celular =$_POST['celular'];
    $fecha =$_POST['fecha_nacimiento'];

    $sql = "INSERT INTO hombre (cedula,nombre,apellido,correo,celular,fecha_nacimiento) VALUES ('$cedula','$nombre','$apellido','$correo','$celular','$fecha_nacimiento')";

    $cedula = 123456789;
    $nombre = "sebas";
    $apellido = "zapata";
    $correo = "s@mail.com";
    $celular = 321654987;
    $fecha_nacimiento = "1902/11/04"


    $conexion->query($sql);

    if($conexion->query($sql)){
        echo "<br>Registro agregado exitosamente";
    } else {
        echo "<br>El registro no se pudo agregar" . $conexion->error;
    }

    $conexion->close();

    
?>