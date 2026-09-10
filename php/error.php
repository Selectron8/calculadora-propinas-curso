<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>ERROR</h1>
        <?php
            $error=$_GET['fallo'];
            if ($error>99) {
                echo "<p>Falta introducir el nombre del cliente.</p>";
                $error-=100;
            }
            if ($error>9) {
                echo "<p>Falta introducir el importe de la cuenta.</p>";
                $error-=10;
            }
            if ($error>0) echo "<p>Falta introducir la propina.</p>";
        ?>
        <a href="../index.html">Volver</a>
    </div>
</body>
</html>