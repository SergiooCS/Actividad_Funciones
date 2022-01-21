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

        include_once("libreria.php");
        /* REQUIRE VS INCLUDE: Include se utiliza cuando no es necesario 100% cargarlo y REQUIRE cuando es fundamental cargarlo. */
        /* INCLUDE_ONCE o REQUIRE_ONCE se utiliza para que cargue solo 1 vez aunque este escrito 20 */

        echo "<h2>Estructura de control</h2>";
        function manejador(){
            echo "Llamando a manejador";
        }
        manejador();    //llamamos a la funcion

        $a=1;
        if($a>=0){
            manejador();
        }

        echo register_tick_function('manejador');

        function sumar($n1,$n2){
            $suma=$n1+$n2;
            echo "<p>La suma es ".$suma."</p>";
        }
        sumar(5,6);
        echo "<br>";
        function restar($n1,$n2){
            $resta=$n1-$n2;
            return $resta;
        }
        echo "<p>La resta es ".restar(10,9)."</p>";
        
        /* FUNCIONES PASADAS POR REFERENCIA O POR VALOR */
        /* $ ES PARA VALOR Y & PARA  REFERENCIA*/
        /* & MODIFICA EL VALOR ORIGINAL DE LA VARIABLE */
        echo "<h3>Paso de parametros</h3>";
        //function saludar($nombre){ //PASO POR VALOR
        function saludar(&$nombre){ //PASO POR REFERENCIA
            $nombre="<p>Cliente 1 ".$nombre."</p>";   //modificamos la variable
            echo "Hola ".$nombre;
        }
        //saludar("juan");
        $cliente="Maria";
        saludar($cliente);
        echo $cliente;

        /* FUNCION ANONIMA */
        




    ?>
</body>
</html>