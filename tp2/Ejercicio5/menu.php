
<?php include ('../header.php');?>

<section class="w3-container w3-center" >

    <form action="archivo-ini.php" method="POST" enctype="multipart/form-data" class="w3-container">
        <h3>Complete el Menu:</h3>

        <label name="entrada">Entrada:</label>
        <input type="checkbox" value="snacks" name="entrada"><br>

        <br>
        <label name="principal">Plato Principal:</label>
        <input type="checkbox" value="milanesas" name="principal"><br>

        <br>
        <label name="acomp">Acompañamiento:</label>
        <input type="checkbox" value="papas" name="acomp"><br>

        <br>
        <label name="postre">Postre:</label>
        <input type="checkbox" value="helado" name="postre"><br>

        <br>

        </div>

        <div class="w3-margin">
            <input type="submit" value="Enviar">
        </div>
    </form>

    <?php


    ?>


</section>

<?php include ('../footer.php');?>
