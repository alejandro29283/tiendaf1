<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_producto = $_POST["id_producto"];

    
    if (($key = array_search($id_producto, $_SESSION["carrito"])) !== false) {
        unset($_SESSION["carrito"][$key]);
    }
}


header("Location: cesta.php");
?>
