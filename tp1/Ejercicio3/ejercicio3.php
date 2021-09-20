<?php
if (isset($_GET['texto1']) && isset($_GET['texto2'])) {
    $texto1 = $_GET['texto1'];
    $texto2 = $_GET['texto2'];
    echo concatenar($texto1, $texto2);
}

function concatenar($texto1, $texto2)
{
    return $texto1 . " " . $texto2;
}
