<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RopaShop</title>
    <link rel="icon" href="images/remeraroja.jpg" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="btn-checkout">
            <a href="checkout.php">
                <img src="images/icono-cuadrados.jpg" title="Carrito" alt="Carrito">

            </a>
            Hola, <?php echo $_SESSION["nombre"];?>
            <span id="cantidadcarrito"></span>
        </div>
        <h1>RopaShop.com.ar</h1>
        <p>Prendas usadas en perfecta calidad y estado!.</p>
        <hr>
    </header>
    <main>
        <div class="container">
            <!-- Aquí va todo lo dinámico -->


            <div class="card-error ocultar">
                <h2>Houston, tenemos un problema 🧨</h2>
                <h3>No pudimos cargar los productos. 🤦🏻‍♂️</h3>
                <h3>Intenta nuevamente en unos instantes...</h3>
            </div>

        </div>
    </main>
    <script src="js/ropa.js"></script>
    <script src="js/index.js"></script>
</body>
</html>