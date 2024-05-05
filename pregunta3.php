<?php
    session_start();
    $_SESSION['Pregunta2']=$_POST['preg2'];
?>

<?php include 'encabezado.php'; ?>

<form method="POST" action="pregunta3.php" id="formQ1">
    <div class="questionOne-question">
        <div class="span">
            <span class="details">Generalmente ¿Qué día cree usted que ocurren más incidencias?</span>
        </div>

    </div>

    <div class="questionOne-details">
        <input type="radio" value="Cualquier día" name="preg3" id="dot-1" checked>
        <input type="radio" value="Fin de semana" name="preg3" id="dot-2">
        <input type="radio" value="Fin de mes" name="preg3" id="dot-3">
        <input type="radio" value="Fechas de pago" name="preg3" id="dot-4">
        <div class="category">
            <label for="dot-1">
                <span class="dot one"></span>
                <span class="questionOne">Cualquier día</span>
            </label>
            <label for="dot-2">
                <span class="dot two"></span>
                <span class="questionOne">Fin de semana</span>
            </label>
            <label for="dot-3">
                <span class="dot three"></span>
                <span class="questionOne">Fin de mes</span>
            </label>
            <label for="dot-4">
                <span class="dot four"></span>
                <span class="questionOne">Fechas de pago</span>
            </label>
        </div>
    </div>

    <div class="botones">
        <div class="button-wrapper">
            <input type="submit" value="< Anterior" onclick="this.form.action='pregunta2.php'" />
        </div>

        <div class="button-wrapper">
            <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta4.php'" />
        </div>
    </div>
</form>

<?php include 'pie.php'; ?>