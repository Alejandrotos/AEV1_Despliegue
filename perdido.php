<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Perdiste!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="resultado">
        <h1>Lo siento, has perdido :(</h1>
        <p>La palabra era: <strong><?php echo $_SESSION['palabra']; ?></strong></p>
        <a href="index.php" class="boton">Intentar de nuevo</a>
    </div>
</body>
</html>
