<?php

session_start();

include 'conexion.php';

$sql = "SELECT id, nombre, descripcion, precio, imagen, talla FROM Productos";
$result = $conn->query($sql);

echo '<html><head>';
echo '<link rel="stylesheet" type="text/css" href="tienda.css">';
echo '</head><body>';

echo '<h1>Tienda</h1>'; 

echo '<div class="contenedor-productos">';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<form action="cesta.php" method="post">';
        echo '<div class="caja-producto">';
        echo '<img src="merchf1.jpg" alt="Imagen del producto" width="100" height="100">'; 
        echo '<div class="nombre-producto">' . $row["nombre"] . '</div>';
        echo '<div class="precio-producto">' . $row["precio"] . '€</div>';
        echo '<div class="talla-producto">Talla: ' . $row["talla"] . '</div>';
        echo '<input type="hidden" name="id_producto" value="' . $row["id"] . '">';
        echo '<input type="submit" class="boton-carrito" value="Añadir al carrito">';
        echo '</div>';
        echo '</form>';
    }
} else {
    echo "No se encontraron productos";
}

echo '</div>';


echo '<div class="contenedor-boton">';
echo '<a href="index.php"><button class="boton-carrito">Volver a la página principal</button></a>';
echo '</div>';

$conn->close();

echo '</body></html>';

?>
