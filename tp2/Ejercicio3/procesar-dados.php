<?php require_once('../header.php'); ?>

<section class="w3-container w3-center" style="height: 600px;">
    <?php

    $cantidad_dados = $_POST["dados"];
    $numero1 = 0;
    $numero2 = 0;
    $numero3 = 0;
    $min = 1;
    $max = 6;

    switch($cantidad_dados){
        case 1:
            $numero1 = rand($min, $max);
            break;

        case 2:
            $numero1 = rand($min, $max);
            $numero2 = rand($min, $max);
            break;

        case 3:
            $numero1 = rand($min, $max);
            $numero2 = rand($min, $max);
            $numero3 = rand($min, $max);
            break;
    }

    if($numero1 == 0){
        echo "<div>El dado 1 no se ha lanzado</div>";
    }
    else{
        echo "<img class='w3-margin' src='../imagenes/dado". $numero1 . ".png'/>";
    };


    if($numero2 == 0){
        echo "<div>El dado 2 no se ha lanzado</div>";
    }
    else{
        echo "<img class='w3-margin' src='../imagenes/dado". $numero2 . ".png'/>";
    }

    if($numero3 == 0){
        echo "<div>El dado 3 no se ha lanzado</div>";
    }
    else{
        echo "<img class='w3-margin' src='../imagenes/dado". $numero3 . ".png'/>";
    }

    $total = $numero1 + $numero2 + $numero3;

    echo "<h1>La suma de los valores de los dados es: " . $total .".";




    ?>
</section>
<?php require_once('../footer.php'); ?>
