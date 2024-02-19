<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consultas</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Consultas a la base de datos</h1>
    <form method="post">
        <label for="consulta">Escribe tu consulta SQL:</label><br>
        <textarea id="consulta" name="consulta" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Ejecutar consulta">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        include 'conexion.php';

        
        $sql = $_POST["consulta"];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            echo "<table>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach($row as $cell) {
                    echo "<td>" . $cell . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 resultados";
        }
        $conn->close();
    }
    ?>
</body>
</html>
