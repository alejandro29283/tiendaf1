<?php
include 'conexion.php';


$correo = $_POST['correo'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        
        session_start();
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['correo'] = $row['correo'];
        $_SESSION['pais'] = $row['pais'];
        $_SESSION['equipo'] = $row['equipo'];
        
        header('Location: index.php');
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "No existe una cuenta con ese correo electrónico.";
}

$conn->close();
?>
