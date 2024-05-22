<!DOCTYPE html>
<html>
<head>
    <title>Formulario Mujer</title>
</head>
<body>
    <h1>Formulario Mujer</h1>
    <form action="procesar_formulario1.php" method="post">
        <br>
        <label for="numero"></label>
        <input type="number" id="numero" name="numero" required> Número de cedula
        <br>
        <br>
        <br>
        <label for="nombre"></label>
        <input type="text" name="nombre" required> Nombre
        <br>
        <br>
        <br>
        <label for="apellido"></label>
        <input type="text" name="apellido" required> Apellido
        <br>
        <br>
        <br>
        <label for="correo"></label>
        <input type="email" name="correo" required> Correo
        <br>
        <br>
        <br>
        <label for="celular"></label>
        <input type="number" name="celular" required> Celular
        <br>
        <br>
        <br>
        <label for="fecha nacimiento"></label>
        <input type="date" name="fecha nacimiento" required> Fecha de nacimiento
        <br>
        <br>
        <br>
        <button type="submit">Enviar</button>
        <br>
        <br>
        <button onclick="window.location.href='index.php'">Home</button>
    </form>
</body>
</html>
