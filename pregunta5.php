<?php
    session_start();
    $_SESSION['Pregunta4']=$_POST['preg4'];
?>

<?php include 'encabezado.php'; ?>

<form method="POST" action="pregunta1.php" id="formQ1">
    <div class="questionOne-question">
        <div class="span">
            <span class="details">¿Usted conoce las medidas que implementa la policía de Tlapa para disminuir la delincuencia?</span>
        </div>

    </div>

    <div class="questionOne-details">
        <input type="radio" value="Sí" name="preg5" id="dot-1" checked>
        <input type="radio" value="No" name="preg5" id="dot-2">
        <div class="category">
            <label for="dot-1">
                <span class="dot one"></span>
                <span class="questionOne">Sí</span>
            </label>
            <label for="dot-2">
                <span class="dot two"></span>
                <span class="questionOne">No</span>
            </label>
        </div>
    </div>

    <div class="botones">
        <div class="button-wrapper">
            <input type="submit" value="< Anterior" onclick="this.form.action='pregunta4.php'" />
        </div>

        <div class="button-wrapper">
            <input type="submit" value="Siguiente >" onclick="this.form.action='informe.php'" />
        </div>
    </div>
</form>

<?php include 'pie.php'; ?>