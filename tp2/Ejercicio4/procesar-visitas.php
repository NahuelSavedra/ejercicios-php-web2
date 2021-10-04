<?php require_once('../header.php'); ?>

<?php

$nombre = $_POST["nombre"];
$planeta = $_POST["planeta"];
$archivo = "./usuarios/".$nombre . ".json";

if(!file_exists($archivo)) {
    $usuarioMatriz = array("nombre"=>$nombre,"planeta"=>$planeta);
    file_put_contents($archivo,json_encode($usuarioMatriz));
} else {
    header("Location: contador-visitas.php");
    exit();
}
function obtenerUsuarios(){
    $folder_path = './usuarios/';
    $num_files = glob($folder_path . "*.{json}", GLOB_BRACE);
    $folder = opendir($folder_path);
    $i=0;
    $datos[]="";
    if($num_files > 0){
        while(false !== ($file = readdir($folder)))  {
            $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
            if($extension=='json') {
                $info = pathinfo($file);
                $datos[$i]=$info['filename'];;
                $i++;
            }
        }
    }
    closedir($folder);
    return $datos;
}

function contador()
{
    $contenedor = "contador.txt";
    $f = fopen($contenedor, "r");
    $planeta = $_POST['planeta'];
    if($f)
    {
        $contador = fread($f, filesize($contenedor));
        if(strcasecmp($planeta, "tierra")!== 0) {
            $contador = $contador + 1;
            fclose($f);
        }else{
            return $contador;
        }
    }
    $f = fopen($contenedor, "w+");
    if($f)
    {
        fwrite($f, $contador);
        fclose($f);
    }
    return $contador;
}

?>

<?php
$visitas = contador();
?>


<div class="w3-container w3-center w3-xlarge w3-grey">
    <?php
    echo "<h3>Las visitas extraterrestres fueron : $visitas </h3>";
    ?>
</div>
<?php
$usuarios=obtenerUsuarios();
?>
<div class="w3-container w3-center w3-xlarge">
    <?php
    echo "<br> Todos las personas que visitaron La Tierra son : ";
    ?>
</div>

<?php
for($i=0;$i<count($usuarios);$i++){
    if($usuarios[$i]){
        echo "<p class='w3-container w3-center'>- ".strtoupper($usuarios[$i])."</p>";
    }
}
?>

<?php require_once('../footer.php'); ?>

