<?php include ('../header.php');?>

<section>

    <form action="procesar-matriz.php" method="POST" enctype="multipart/form-data" class="w3-container">
        <h3>Indique la dimension de la matriz:</h3>
        <div class="w3-margin">
            <label name="matriz">Ingrese un numero del 1 al 10:</label>
            <input type="number" placeholder="ingresar..." name="matriz" mim=1 max=10>
        </div>

        <div class="w3-margin">
            <input type="submit" value="Enviar">
        </div>
    </form>

</section>

<?php include ('../footer.php');?>
