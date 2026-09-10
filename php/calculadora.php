<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Resultado</h1>
        <div class="resultado">
            <?php

            // Recogida de variables
            $cliente=$_POST['fnombre'];
            $importe=$_POST['fimporte'];
            $propina=$_POST['fpropina'];

            // Comprobación de valores
            $error=0;
            if (empty($cliente)) $error=100;
            if (empty($importe)||$importe<=0) $error+=10;
            if (empty($propina)) $error+=1;
            if ($error>0) {
                header("Location: error.php?fallo=".$error);
                exit();
            }
            
            // Presentación del resultado
            echo "<p>Cliente: <span class='var'>".$cliente."</span></p>";
            echo "<p>Importe de la cuenta: <span class='var'>".number_format($importe,2,",",".")." €</span></p>";
            echo "<p>Porcentaje aplicado: <span class='var'>".$propina." %</span></p>";
            echo "<p>Propina: <span class='var'>".number_format($importe*$propina/100,2,",",".")." €</span></p>";
            echo "<p>Total final: <span class='var'>".number_format($importe*(1+$propina/100),2,",",".")." €</span></p>";
            ?>
        </div>
            <?php
                echo "<div class='mensaje' style='background-color: ";
                if($propina<5){
                    echo "red; color: white;'><p>Propina baja</p>";
                } else if($propina<15){
                    echo "palegreen;'><p>¡Gracias por su visita!</p>";
                } else echo "purple; color: yellow; box-shadow: 10px 10px 20px blue, -10px -10px 20px red; font-weight: bold;'><p>CLIENTE MUY GENEROSO</p>";
                echo "</div>";
            ?>
        <a href="../index.html">Volver</a>
    </div>
</body>
</html>