<?php require_once('../header.php'); ?>

<div class="w3-container w3-center w3-xlarge w3-blue" style="height: 600px;">
    <h1>Se mostraran los platos del dia para las opciones seleccionadas:</h1>
    <?php
    $mostrar = parse_ini_file("menu.ini");

    if(empty($_POST["entrada"]) && empty($_POST["principal"]) && empty($_POST["acomp"]) && empty($_POST["postre"])){
        echo "<div>No se seleccionaron opciones del menu</div>";
    }

    if(!empty($_POST["entrada"])){
        echo "<div>";
        print_r ($mostrar["entrada"]);
        echo "</div>";
    }

    if(!empty($_POST["principal"])){
        echo "<div>";
        print_r ($mostrar["plato_principal"]);
        echo "</div>";
    }
    if(!empty($_POST["acomp"])){
        echo "<div>";
        print_r ($mostrar["acompanamiento"]);
        echo "</div>";
    }
    if(!empty($_POST["postre"])){
        echo "<div>";
        print_r ($mostrar["postre"]);
        echo "</div>";
    }

    ?>
</div>
<?php require_once('../footer.php'); ?>



