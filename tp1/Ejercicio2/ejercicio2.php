<?php
    if (isset($_GET['a']) && isset($_GET['b'])){
        $a = $_GET['a'];
        $b = $_GET['b'];

        echo "Solucion a " .binomioCuadradoPerfecto_a($a, $b) . "<br>";
        echo "Solucion b " .binomioCuadradoPerfecto_b($a, $b) . "<br>";
    }
    function binomioCuadradoPerfecto_a($a,$b){
        return pow(($a+$b),2);
    }
    function binomioCuadradoPerfecto_b($a, $b){
        return (pow($a,2)+ 2*$a*$b + pow($b,2));
    }

