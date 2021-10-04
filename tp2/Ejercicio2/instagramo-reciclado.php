<?php require_once('../header.php'); ?>


<div class="w3-container">
    <h2>Insta-gramo reciclado</h2>
    <?php
    $gestor = opendir('../imagenes');

    if ($gestor){
        while (($imagen = readdir($gestor))!== false ){
            if ($imagen != '.' && $imagen != '..'){
                echo "<p><a href='mostrar.php?foto=$imagen'/>$imagen</p>";
            }
        }
    }

    ?>


    <form class="w3-margin-top" action="subir-imagen.php" method="post" enctype="multipart/form-data">

        <label>Nombre de la imagen:</label>
        <input type="text" name="nombre" placeholder="Ingrese nombre de la imagen"/>

        <input type="file" name="imagen"/>

        <input type="submit" value="Enviar"/>


    </form>

</div>








<?php require_once ('../footer.php'); ?>


