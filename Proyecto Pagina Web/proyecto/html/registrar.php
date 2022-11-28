<?php
include("con_db.php");


if (isset($_POST['Enviar'])) {
    if (strlen($_POST['nombres'])>= 1 && strlen($_POST['correo'])>=1) {
        $nombres=trim($_POST['nombres']);
        $telefono=trim($_POST['telefono']);
        $correo=trim($_POST['correo']);
        $fecha=date("d/m/y");
        $valor=trim($_POST['valor']);
        $consulta ="INSERT INTO datos(nombres, telefono, correo, fecha, valor) VALUES ('$nombres','$telefono','$correo','$fecha','$valor')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Has donado correctamente</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">Has donado incorrectamente</h3>
            <?php 
        }
    }
}


?>

