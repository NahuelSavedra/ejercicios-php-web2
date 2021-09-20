<?php
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    incrementar($numero);
}
function incrementar($var)
{
    echo "numero incrementado " . ++$var;
}
