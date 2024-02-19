<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direccion = $_POST['direccion'];
    $portal = $_POST['portal'];
    $piso = $_POST['piso'];
    $cp = $_POST['cp'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $metodo_pago = $_POST['metodo_pago'];

    echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>Pedido Realizado Con Éxito</title>";
    echo '<link rel="stylesheet" type="text/css" href="procesar_pago.css">';
    echo "</head><body>";
    echo "<h1>Pedido Realizado Con Éxito</h1>
        <div class='container'>
            <div class='left'>
                <h2>Dirección</h2>
                <p>Dirección: $direccion</p>
                <p>Portal: $portal</p>
                <p>Piso: $piso</p>
                <p>Código Postal: $cp</p>
                <p>Ciudad: $ciudad</p>
                <p>País: $pais</p>
                <p>Teléfono: $telefono</p>
            </div>
            <div class='right'>
                <h2>Método de Pago</h2>
                <p>$metodo_pago</p>
            </div>
        </div>
        <div class='footer'>
            <h2>Fecha de Llegada</h2>
            <p>Fecha aproximada de llegada: " . date('d-m-Y', strtotime('+' . rand(2,3) . ' weeks')) . "</p>
        </div>
    </body>
    </html>";
}
?>
