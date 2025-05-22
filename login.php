<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomerceropa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["password"];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM clientes WHERE email = '$usuario' AND password = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();

        $_SESSION["id"] = $row["id"];
        $_SESSION["usuario"] = $row["usuario"];
        $_SESSION["nombre"] = $row["nombre"];

        header("Location: indexRopa.php");
    } else {
        echo "Usuario y password incorrectos";
    }
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomerce - Iniciar sesión</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <form action="" method="post">
        <h2>Iniciar sesión</h2>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar sesión</button>
    </form>

</body>
</html>
