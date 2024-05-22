<!DOCTYPE html>
<html>
<head>
    <title>Página de Inicio</title>
</head>
<body>
    <h1>Seleccione un formulario:</h1>
    <button onclick="window.location.href='./formh.php'">Hombre</button>
    <button onclick="window.location.href='formm.php'">Mujer</button>

<?php
    $conexion = mysqli_connect(
        'localhost',
        'root',
        '');

        //si hay un puerto diferente toca poner: 
   // '',
   // '',
   // 3306); //
   
    if($conexion){
        echo "estoy conectado";
    }else{
        echo "error de conexion";
    }
?>
</body>
</html>