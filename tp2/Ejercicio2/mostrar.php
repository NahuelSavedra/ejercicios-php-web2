<?php require_once('../header.php'); ?>

<div class="w3-container w3-center">
    <?php
    $imagen = $_GET['foto'];
    echo "<p>$imagen</p>";
    echo "<img class='w3-margin'
  src='../imagenes/$imagen'> <br>";
    ?>
</div>
<?php require_once('../footer.php'); ?>
