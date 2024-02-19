<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pagar</title>
    <link rel="stylesheet" type="text/css" href="pagar.css">
</head>
<body>
    <h1>Información de Pago</h1>
    <div class="container">
        <form action="procesar_pago.php" method="post">
            <div class="left">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion">
                <label for="portal">Portal:</label>
                <input type="text" id="portal" name="portal">
                <label for="piso">Piso:</label>
                <input type="text" id="piso" name="piso">
                <label for="cp">Código Postal:</label>
                <input type="text" id="cp" name="cp">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad">
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais">
                <label for="telefono">Número de Teléfono:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div class="right">
                <label for="metodo_pago">Método de Pago:</label>
                <select id="metodo_pago" name="metodo_pago">
                    <option value="visa">Visa</option>
                    <option value="paypal">PayPal</option>
                    <option value="mastercard">MasterCard</option>
                </select>
                <input type="submit" value="Pagar">
            </div>
        </form>
    </div>
    <p>Fecha aproximada de llegada: <?php echo date('d-m-Y', strtotime('+' . rand(2,3) . ' weeks')); ?></p>
</body>
</html>