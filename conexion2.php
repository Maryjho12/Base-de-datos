<?php
include("conexion.php");

if (isset($_POST['register']))  {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['name']);
        $email =trim($_POST['email']);
        $fecharegis = date("d/m/y");
        $consulta ="INSERT INTO 'clientes'('nombre', 'email', 'fecha_regis') VALUES ('$name','$email','$fecharegis')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado) {
            ?>
            <h3 class = "ok" > ¡Te has Registrado Correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class = "bad" > ¡ups ha ocurrido un error! </h3>
            <?php
        }
    } else {
        ?>
            <h3 class = "bad" > ¡Por Favor Complete los Campos!</h3>
            <?php
    }
    
}
?>