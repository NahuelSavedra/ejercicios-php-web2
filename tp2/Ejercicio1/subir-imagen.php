<?php
if($_FILES["imagen"]["error"] > 0)
{
    echo "Error: " . $_FILES["imagen"]["error"] . "<br />";
}
else
{
    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];


    }else {
        $nombre = $_FILES['imagen']["name"];

    }
    move_uploaded_file($_FILES["imagen"]["tmp_name"],
        "../imagenes/" . $nombre);

        header('Location: instragramo.php');

}
