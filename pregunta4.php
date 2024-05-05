<?php
    session_start();
    $_SESSION['Pregunta3']=$_POST['preg3'];
?>

<?php include 'encabezado.php'; ?>

<form method="POST" action="pregunta4.php" id="formQ1">
    <div class="questionOne-question">
        <div class="span">
            <span class="details">¿Cuáles cree usted que deben ser las medidas que las autoridades deben aplicar para combatir estas incidencias?</span>
        </div>

    </div>

    <div class="questionOne-details">
        <input type="radio" value="Mayor número de policías" name="preg4" id="dot-1" checked>
        <input type="radio" value="Mayor profesionalismo de las autoridades" name="preg4" id="dot-2">
        <input type="radio" value="Aumentar las penas y que sean ejecutadas" name="preg4" id="dot-3">
        <input type="radio" value="Nada" name="preg4" id="dot-4">
        <div class="category">
            <label for="dot-1">
                <span class="dot one"></span>
                <span class="questionOne">Mayor número de policías</span>
            </label>
            <label for="dot-2">
                <span class="dot two"></span>
                <span class="questionOne">Mayor profesionalismo de las autoridades</span>
            </label>
            <label for="dot-3">
                <span class="dot three"></span>
                <span class="questionOne">Aumentar las penas y que sean ejecutadas</span>
            </label>
            <label for="dot-4">
                <span class="dot four"></span>
                <span class="questionOne">Nada</span>
            </label>
        </div>
    </div>

    <div class="botones">
        <div class="button-wrapper">
            <input type="submit" value="< Anterior" onclick="this.form.action='pregunta3.php'" />
        </div>

        <div class="button-wrapper">
            <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta5.php'" />
        </div>
    </div>
</form>

<?php include 'pie.php'; ?>