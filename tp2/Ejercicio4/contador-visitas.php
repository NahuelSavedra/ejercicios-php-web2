
<?php include ('../header.php');?>

<section class="w3-container w3-center" style="height: 600px;">


    <form action="procesar-visitas.php" method="POST" enctype="multipart/form-data" class="w3-container">
        <div class="w3-margin">
            <label name="nombre">Ingrese su nombre:</label>
            <input type="text" name="nombre" placeholder="Ingrese su nombre">
        </div>

        <div class="w3-margin">
            <label name="planeta">Ingrese su planeta:</label>
            <input type="text" name="planeta" placeholder="Ingrese su planeta">
            <input type="submit" value="Enviar">
        </div>
    </form>

</section>

<?php include ('../footer.php');?>
