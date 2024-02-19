<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "mi_base_de_datos";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
?>
