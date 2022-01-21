<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplos con funciones y estructuras de control</h2>
    <?php
    require_once("repositorio.php");

    echo "<h3>Ejercicio1</h3>";
    $resultado=transformar("un texto");
    echo $resultado;

    $totalFactura=calcularTotal(10,5,0.21);
    echo "<p>El total de la factura es ".$totalFactura."€ (iva incluido)</p>";

    $totalFactura2=calcularTotal2(10,5,"reducido");
    echo "<p>El total de la factura es ".$totalFactura2."€ (iva dependiendo del tipo)</p>";

    $mensajeResultado=manipularString("En un lugar de la mancha");
    echo $mensajeResultado;

    


    ?>  




</body>
</html>