<?php require_once('../header.php'); ?>
<div class="w3-container w3-center w3-blue w3-large">
<?php
echo "Matriz completa <br><br>";
$array = array(array());
$cont=0;
$dimension= $_POST["matriz"];
for($i=0;$i<$dimension;$i++){
    for($j=0;$j<$dimension;$j++){
        $cont++;
        $array[$i][$j]=$cont;
        echo $array[$i][$j];
        echo "-";
    }
    echo "<br>";
}
?>
</div>
<br>
<div class="w3-container w3-center w3-blue w3-large">
    <?php
    echo "Diagonal principal <br><br>";
    for($i=0;$i<$dimension;$i++){
        echo $array[$i][$i];
        echo "-";
    }
    ?>
</div>
<br>
<div class="w3-container w3-center w3-blue w3-large">
    <?php
    echo "Diagonal secundaria <br><br>";
    for($i=0;$i<$dimension;$i++){
        echo $array[$i][($dimension-1)-$i];
        echo "-";
    }
    ?>
</div>
<br>
<div class="w3-container w3-center w3-blue w3-large">
    <?php
    $suma=0;
    for($i=0;$i<$dimension;$i++){
        for($j=0;$j<$dimension;$j++){
            $suma = $suma + $array[$i][$j];
        }
    }
    echo "La suma de todos los numeros es : $suma";
    ?>
</div>
<?php require_once('../footer.php'); ?>
