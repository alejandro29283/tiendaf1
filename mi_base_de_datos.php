<?php
$servername = "localhost";
$username = "admin";
$password = "password";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "DROP DATABASE IF EXISTS mi_base_de_datos";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos borrada con éxito";
} else {
    echo "Error al borrar la base de datos: " . $conn->error;
}


$sql = "CREATE DATABASE mi_base_de_datos";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada con éxito";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}


$conn->select_db("mi_base_de_datos");


$sql = "CREATE TABLE Usuarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
correo VARCHAR(50),
pais VARCHAR(50),
equipo VARCHAR(50),
password VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla Usuarios creada con éxito";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}


$sql = "CREATE TABLE Productos (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(50) NOT NULL,
descripcion TEXT,
precio DECIMAL(10, 2),
imagen VARCHAR(255),
talla VARCHAR(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla Productos creada con éxito";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}


$sql = "INSERT INTO Productos (nombre, descripcion, precio, imagen, talla) VALUES
('Camiseta F1', 'Camiseta de algodón con logo de F1', 19.99, 'camiseta_f1.jpg', 'M'),
('Sudadera F1', 'Sudadera con capucha y logo de F1', 39.99, 'sudadera_f1.jpg', 'L'),
('Pantalones F1', 'Pantalones deportivos con logo de F1', 29.99, 'pantalones_f1.jpg', 'M'),
('Gorra F1', 'Gorra ajustable con logo de F1', 14.99, 'gorra_f1.jpg', 'Única'),
('Calcetines F1', 'Calcetines de algodón con logo de F1', 9.99, 'calcetines_f1.jpg', 'Única'),
('Chaqueta F1', 'Chaqueta impermeable con logo de F1', 49.99, 'chaqueta_f1.jpg', 'XL'),
('Guantes F1', 'Guantes de carreras con logo de F1', 79.99, 'guantes_f1.jpg', 'L'),
('Mochila F1', 'Mochila resistente con logo de F1', 34.99, 'mochila_f1.jpg', 'Única'),
('Reloj F1', 'Reloj deportivo con logo de F1', 99.99, 'reloj_f1.jpg', 'Única'),
('Bufanda F1', 'Bufanda de lana con logo de F1', 24.99, 'bufanda_f1.jpg', 'Única');";

if ($conn->multi_query($sql) === TRUE) {
    echo "Productos añadidos con éxito";
} else {
    echo "Error al añadir productos: " . $conn->error;
}

$conn->close();
?>
