<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha de Participación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }
        .ficha {
            background-color: white;
            padding: 20px;
            border: 1px solid green;
            width: 350px;
            margin: 0 auto;
        }
        h2 {
            color: green;
        }
    </style>
</head>
<body>

    <div class="ficha">
        <h2>Ficha de Registro</h2>

        <?php
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $arboles = $_POST['arboles'];
        $fecha = $_POST['fecha'];
        $experiencia = $_POST['experiencia'];

        echo "<p><b>Nombre:</b> $nombre</p>";
        echo "<p><b>Correo:</b> $correo</p>";
        echo "<p><b>Árboles a plantar:</b> $arboles</p>";
        echo "<p><b>Fecha seleccionada:</b> $fecha</p>";
        echo "<p><b>Experiencia:</b> $experiencia</p>";
        ?>

        <hr>
        <p>¡Gracias por registrarte!</p>
        <p><small>Alumnas: Cardoza Gordillo Ana Dalay y García Ramírez Alejandra</small></p>
        
        <a href="index.html">Volver al inicio</a>
    </div>

</body>
</html>