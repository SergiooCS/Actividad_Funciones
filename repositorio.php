<?php
function transformar($dato){    //funcion de paso de argumento por valor
    return $dato." transformado";
}

function calcularTotal($unidades, $precio,$iva){
    $subtotal=$unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    $total=$subtotal*$cuotaIva;
    return $total;
}

function calcularTotal2($unidades, $precio,$tipoOperacion){
    $subtotal=$unidades*$precio;
    //$cuotaIva=0;
    if($tipoOperacion=="normal"){
        $cuotaIva=$subtotal*0.21;
    }elseif($tipoOperacion=="reducido"){
        $cuotaIva=$subtotal*0.1;
    }else{
        $cuotaIva=$subtotal*0.4;
    }
    $total=$subtotal*$cuotaIva;
    return $total;
}

function manipularString($mensaje){
    return "En mayusculas ".strtoupper($mensaje);
}

function primeraMayucula($dato1){
    //retorna el dato con la primera letra mayuscula
    return "El texto es: ".ucfirst($dato1);
}

function reemplazar($valorBuscado, $valorRemplazado,$texto1){
    //le das que buscas una a, y que muestre una e (en la frase)
    $reemplazar=str_replace($valorBuscado,$valorRemplazado,$texto1);
    return $reemplazar;
}

function mostrarMes($fecha){
    //envias la fecha y retorna el mes en castellano
    setlocale(LC_TIME, "spanish");
    echo strftime("%B");
}

function info(){
    //mostrar la version de php y del servidor
    phpinfo(INFO_ALL);
}

function numeroPi($numero1){
    //retorna si el numero introducido es primo o no
    gmp_prob_prime($numero1);
}
function bisiesto($año){
    //retorna si el año es bisiesto o no
    $año = date("L");
    if ($año == 1)
    echo "<h3>Año bisiesto</h3>";
  else
    echo "<h3>Año no bisiesto</h3>";
}

