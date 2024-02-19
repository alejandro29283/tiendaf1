<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tienda F1</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="header">
        <div class="left">
            <h1 class="title">Tienda F1</h1>
            <div class="auth-links">
                <?php
                if (isset($_SESSION['nombre'])) {
                    
                    echo "Bienvenido, " . $_SESSION['nombre'];
                    echo '<a href="cerrar_sesion.php" class="auth-button special-button">Cerrar Sesión</a>';
                } else {
                    
                    echo '<a href="login.html" class="auth-button special-button">Iniciar Sesión</a>';
                    echo '<span class="separator">|</span>';
                    echo '<a href="registro.html" class="auth-button special-button">Registrarse</a>';
                }
                ?>
            </div>
        </div>
        <div class="right">
            <div class="top-links">
                <a href="consutas.php" class="auth-button special-button">Consultas</a>
                <a href="tienda.php" class="auth-button special-button">Tienda</a>
            </div>
            <div class="bottom-links">
                <a href="perfil.php" class="auth-button special-button">Perfil</a>
                <a href="cesta.php" class="auth-button special-button">Cesta</a>
            </div>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="box">
            <h2>¿Qué es la Fórmula 1?</h2>
            <p>La Fórmula 1 es la principal competición de automovilismo internacional y el campeonato de deportes de motor más popular y prestigioso del mundo. La entidad que la dirige es la Federación Internacional del Automóvil (FIA). Desde septiembre del 2016, tras la adquisición de Formula One Group, la empresa estadounidense Liberty Media es la responsable de gestionar y operar el campeonato.</p>
        </div>
        <div class="box">
            <h2>Leyendas de la F1</h2>
            <p>Algunos de los pilotos más destacados de la Fórmula 1 incluyen a Ayrton Senna, Alain Prost, Jackie Stewart, entre otros. Cada uno de estos pilotos ha dejado una huella indeleble en la historia de la Fórmula 1.</p>
        </div>
        <div class="box">
            <h2>Escuderías Importantes</h2>
            <p>Las escuderías más relevantes de la Fórmula 1 incluyen a Ferrari, McLaren, Williams, Red Bull, entre otras. Estas escuderías han tenido un impacto significativo en la Fórmula 1 a lo largo de los años.</p>
        </div>
    </div>
    <div class="additional-links">
        <a href="noticias.html" class="info-button">Noticias de F1</a>
        <a href="pilotos.html" class="info-button">Pilotos Actuales</a>
        <a href="calendario.html" class="info-button">Calendario 2024</a>
        <a href="normas.html" class="info-button">Normas Y Penalizaciones</a>
        <a href="telefono.html" class="info-button special-button contact-button">Telefono de contacto</a>
    </div>
</body>
</html>
