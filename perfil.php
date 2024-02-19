<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Perfil F1</title>
    <link rel="stylesheet" type="text/css" href="perfil.css">
</head>
<body>
    <div class="header">
        <h1 class="title">Perfil F1</h1>
    </div>
    <div class="content">
        <?php
        session_start();
        if (isset($_SESSION['nombre'])) {
            echo "<div class='info-box'>Nombre: " . $_SESSION['nombre'] . "</div>";
            echo "<div class='info-box'>Correo: " . $_SESSION['correo'] . "</div>";
            echo "<div class='info-box'>País: " . $_SESSION['pais'] . "</div>";
            echo "<div class='info-box'>Equipo de F1 Preferido: " . $_SESSION['equipo'] . "</div>";
        } else {
            echo "No has iniciado sesión.";
        }
        ?>
    </div>
    <div class="footer">
        <p>© 2024 F1. Todos los derechos reservados.</p>
    </div>
</body>
</html>
