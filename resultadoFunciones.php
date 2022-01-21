<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("repositorio.php");
        echo "<h2>El resultado de las funciones son</h2>";
        echo "<br>";
        $funcion1=primeraMayucula("coche");
        echo $funcion1;
        echo "<br>";
        $funcion2=reemplazar("a","e","jajaja");
        echo $funcion2;
        echo "<br>";
        $funcion3=mostrarMes('21-01-2022');
        echo $funcion3;
        echo "<br>";
        $funcion4=info();
        echo $funcion4;
        echo "<br>";
        $funcion5=numeroPi("");
        echo $funcion5;
        echo "<br>";
        $funcion6=bisiesto("2022");
        echo $funcion6;
    ?>
</body>
</html>