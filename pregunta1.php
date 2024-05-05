<?php
    session_start();
    $_SESSION['dni'] = $_POST['txtDNI'];
    $_SESSION['nombre'] = $_POST['txtNombre'];
    $_SESSION['aPaterno'] = $_POST['txtAPaterno'];
    $_SESSION['aMaterno'] = $_POST['txtAMaterno'];
?>


<?php include 'encabezado.php'; ?>

<form method="POST" action="pregunta1.php" id="formQ1">
    <div class="questionOne-question">
        <div class="span">
            <span class="details">¿Como siente usted el nivel de seguridad en la ciudad de Tlapa?</span>
        </div>

    </div>

    <div class="questionOne-details">
        <input type="radio" value="Muy inseguro" name="preg1" id="dot-1" checked>
        <input type="radio" value="Algo inseguro" name="preg1" id="dot-2">
        <input type="radio" value="Muy seguro" name="preg1" id="dot-3">
        <input type="radio" value="Algo seguro" name="preg1" id="dot-4">
        <div class="category">
            <label for="dot-1">
                <span class="dot one"></span>
                <span class="questionOne">Muy inseguro</span>
            </label>
            <label for="dot-2">
                <span class="dot two"></span>
                <span class="questionOne">Algo inseguro</span>
            </label>
            <label for="dot-3">
                <span class="dot three"></span>
                <span class="questionOne">Muy seguro</span>
            </label>
            <label for="dot-4">
                <span class="dot four"></span>
                <span class="questionOne">Algo seguro</span>
            </label>
        </div>
    </div>

    <div class="botones">
        <div class="button-wrapper">
            <input type="submit" value="< Anterior" onclick="this.form.action='index.php'" />
        </div>

        <div class="button-wrapper">
            <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta2.php'" />
        </div>
    </div>
</form>

<?php include 'pie.php'; ?>