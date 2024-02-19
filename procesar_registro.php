<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro F1</title>
    <link rel="stylesheet" type="text/css" href="procesar_registro.css">
</head>
<body>
    <div class="header">
        <h1 class="title">Registro F1</h1>
    </div>
    <div class="content">
        <?php
        include 'conexion.php';

        
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $pais = $_POST['pais'];
        $equipo = $_POST['equipo'];

        
        $sql = "INSERT INTO usuarios (nombre, correo, password, pais, equipo) VALUES ('$nombre', '$correo', '$password', '$pais', '$equipo')";

        
        if ($conn->query($sql) === TRUE) {
            echo "<div class='info-box'>Nuevo cuenta creada con éxito.</div>";
            echo "<div class='info-box'><a href='login.html' style='color: #FFFFFF;'>Iniciar Sesión</a></div>"; // Agrega un enlace a la página de inicio de sesión
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
    </div>
    <div class="footer">
        <p>© 2024 F1. Todos los derechos reservados.</p>
    </div>
</body>
</html>
