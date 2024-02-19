<?php

session_start();

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_producto = $_POST["id_producto"];
    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = array();
    }
    array_push($_SESSION["carrito"], $id_producto);
}

if (!empty($_SESSION["carrito"])) {
    $sql = "SELECT id, nombre, descripcion, precio, imagen, talla FROM Productos WHERE id IN (" . implode(',', $_SESSION["carrito"]) . ")";
    $result = $conn->query($sql);
} else {
    $result = false;
}

$total = 0;
if ($result) {
    while($row = $result->fetch_assoc()) {
        $total += $row["precio"];
    }
}

if (!empty($_SESSION["carrito"])) {
    $result = $conn->query($sql);
}

echo '<html><head>';
echo '<link rel="stylesheet" type="text/css" href="cesta.css">';
echo '</head><body>';


echo '<h1>Carrito</h1>';

echo '<div class="contenedor-productos">';

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="caja-producto">';
        echo '<img src="merchf1.jpg" alt="Imagen del producto" width="100" height="100">';
        echo '<div class="nombre-producto">' . $row["nombre"] . '</div>';
        echo '<div class="precio-producto">' . $row["precio"] . '€</div>';
        echo '<div class="talla-producto">Talla: ' . $row["talla"] . '</div>';
        echo '<form action="cesta_eliminar.php" method="post">';
        echo '<input type="hidden" name="id_producto" value="' . $row["id"] . '">';
        echo '<input type="submit" class="boton-eliminar" value="Eliminar">';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo "<h2>No hay productos en el carrito</h2>";
}

echo '</div>';

echo '<div class="resumen-carrito">';
echo '<h2>Resumen del carrito</h2>';
echo '<p>Precio total: ' . $total . '€</p>';

if (isset($_SESSION['nombre'])) {
    echo '<form action="pagar.php" method="post">';
    echo '<input type="submit" class="boton-carrito" value="Pagar">';
    echo '</form>';
} else {
    echo '<p>Debes iniciar sesión para poder comprar.</p>';
}

echo '<a href="tienda.php"><button class="boton-carrito">Volver a la tienda</button></a>';

echo '</div>';

$conn->close();

echo '</body></html>';

?>
