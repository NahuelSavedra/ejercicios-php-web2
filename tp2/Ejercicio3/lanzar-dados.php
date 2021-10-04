<?php require_once('../header.php'); ?>

<h2>Lanzar dados</h2>
<form action="procesar-dados.php" method="POST" enctype="multipart/form-data" class="w3-container">
    <p>Seleccione la cantidad de dados a lanzar:</p>
    <div class="w3-margin">
        <select name="dados">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>

    <div class="w3-margin">
        <input type="submit" value="Lanzar Dados">
    </div>
</form>

<?php require_once('../footer.php'); ?>
