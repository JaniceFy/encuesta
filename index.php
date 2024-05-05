<?php
    session_start();
?>

<?php include 'encabezado.php'; ?>

<form method="POST" action="pregunta1.php">
    <div class="user-details">
        <div class="input-box">
            <span class="details">DNI</span>
            <input type="text" name="txtDNI" placeholder="Ingrese su DNI" required>
        </div>
        <div class="input-box">
            <span class="details">Nombre</span>
            <input type="text" name="txtNombre" placeholder="Ingrese su nombre" required>
        </div>
        <div class="input-box">
            <span class="details">Apellido paterno</span>
            <input type="text" name="txtAPaterno" placeholder="Ingrese su apellido paterno" required>
        </div>
        <div class="input-box">
            <span class="details">Apellido materno</span>
            <input type="text" name="txtAMaterno" placeholder="Ingrese su apellido materno" required>
        </div>
    </div>

    <div class="button">
        <input type="submit" value="Iniciar">
    </div>
</form>

<?php include 'pie.php'; ?>