<?php
    session_start();
    $_SESSION['Pregunta1']=$_POST['preg1'];
?>

<?php include 'encabezado.php'; ?>

<form method="POST" action="pregunta2.php" id="formQ1">
    <div class="questionOne-question">
        <div class="span">
            <span class="details">¿Qué tipo de delito cree usted que es el más común en su zona de residencia?</span>
        </div>

    </div>

    <div class="questionOne-details">
        <input type="radio" value="Hurto" name="preg2" id="dot-1" checked>
        <input type="radio" value="Robo or descuido" name="preg2" id="dot-2">
        <input type="radio" value="Robo de vehículo" name="preg2" id="dot-3">
        <input type="radio" value="Intento de hurto" name="preg2" id="dot-4">
        <input type="radio" value="Estafa" name="preg2" id="dot-5">
        <input type="radio" value="Asesinato" name="preg2" id="dot-6">
        <div class="category">
            <label for="dot-1">
                <span class="dot one"></span>
                <span class="questionOne">Hurto</span>
            </label>
            <label for="dot-2">
                <span class="dot two"></span>
                <span class="questionOne">Robo por descuido</span>
            </label>
            <label for="dot-3">
                <span class="dot three"></span>
                <span class="questionOne">Robo de vehículo</span>
            </label>
            <label for="dot-4">
                <span class="dot four"></span>
                <span class="questionOne">Intento de hurto</span>
            </label>
            <label for="dot-5">
                <span class="dot five"></span>
                <span class="questionOne">Estafa</span>
            </label>
            <label for="dot-6">
                <span class="dot six"></span>
                <span class="questionOne">Asesinato</span>
            </label>
        </div>
    </div>

    <div class="botones">
        <div class="button-wrapper">
            <input type="submit" value="< Anterior" onclick="this.form.action='pregunta1.php'" />
        </div>

        <div class="button-wrapper">
            <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta3.php'" />
        </div>
    </div>
</form>

<?php include 'pie.php'; ?>