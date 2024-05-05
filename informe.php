<?php
session_start();
$_SESSION['Pregunta5'] = $_POST['preg5'];
?>

<?php include 'encabezado.php'; ?>

<!-- ANSWERS -->
<?php
$dni = $_SESSION['dni'];
$nombre = $_SESSION['nombre'];
$aPaterno = $_SESSION['aPaterno'];
$aMaterno = $_SESSION['aMaterno'];
$pregunta1 = $_SESSION['Pregunta1'];
$pregunta2 = $_SESSION['Pregunta2'];
$pregunta3 = $_SESSION['Pregunta3'];
$pregunta4 = $_SESSION['Pregunta4'];
?>



<form method="POST" action="index.php" id="formQ1">
    <div id="informe">
        <div class="span">
            <span class="details"><strong>Informe de encuesta</strong></span>
        </div>
    </div>


    <div class="user-details">
        <div class="input-box">
            <span class="details">DNI</span>
            <input type="text" value="<?php echo $dni = $_SESSION['dni']; ?>" readonly>
        </div>
        <div class="input-box">
            <span class="details">Nombre</span>
            <input type="text" value="<?php echo $nombre = $_SESSION['nombre']; ?>" readonly>
        </div>
        <div class="input-box">
            <span class="details">Apellido paterno</span>
            <input type="text" value="<?php echo $aPaterno = $_SESSION['aPaterno']; ?>" readonly>
        </div>
        <div class="input-box">
            <span class="details">Apellido materno</span>
            <input type="text" value="<?php echo $aMaterno = $_SESSION['aMaterno']; ?>" readonly>
        </div>

        <!--QUESTIONS-->
        <div class="questionOne-question">
            <div class="span">
                <span class="details"> <strong>1.</strong> ¿Como siente usted el nivel de seguridad en la ciudad de Tlapa?</span>
                <br>
                <span class="details" id="answer"><?php echo $pregunta1 = $_SESSION['Pregunta1']; ?></span>
            </div>
        </div>
        <div class="questionOne-question">
            <div class="span">
                <span class="details"><strong>2.</strong> ¿Qué tipo de delito cree usted que es el más común en su zona de residencia?</span>
                <br>
                <span class="details" id="answer"><?php echo $pregunta2 = $_SESSION['Pregunta2']; ?></span>
            </div>

        </div>
        <div class="questionOne-question">
            <div class="span">
                <span class="details"><strong>3.</strong> Generalmente ¿Qué día cree usted que ocurren más incidencias?</span>
                <br>
                <span class="details" id="answer"><?php echo $pregunta3 = $_SESSION['Pregunta3']; ?></span>
            </div>

        </div>
        <div class="questionOne-question">
            <div class="span">
                <span class="details"><strong>4.</strong> ¿Cuáles cree usted que deben ser las medidas que las autoridades deben aplicar para combatir estas incidencias?</span>
                <br>
                <span class="details" id="answer"><?php echo $pregunta4 = $_SESSION['Pregunta4']; ?></span>
            </div>

        </div>
        <div class="questionOne-question">
            <div class="span">
                <span class="details"><strong>5.</strong> ¿Usted conoce las medidas que implementa la policía de Tlapa para disminuir la delincuencia?</span>
                <br>
                <span class="details" id="answer"><?php echo $pregunta5 = $_SESSION['Pregunta5']; ?></span>
            </div>

        </div>


    </div>

    <div class="botones">
        <div class="button-wrapper">
            <input type="submit" value="< Anterior" onclick="this.form.action='index.php'" />
        </div>

        <div class="button-wrapper">
            <input type="submit" value="Reiniciar" onclick="this.form.action='index.php'" />
        </div>
    </div>
</form>

<?php include 'pie.php'; ?>