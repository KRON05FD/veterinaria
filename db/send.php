<?php

    include("conexion.php");

    if (isset($_POST['send'])){

        if (
            strlen($_POST['fecha_creacion']) >= 1 &&
            strlen($_POST['identificacion']) >= 1 &&
            strlen($_POST['nombres']) >= 1 &&
            strlen($_POST['apellidos']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['login']) >= 1 &&
            strlen($_POST['estado']) >= 1
        ){            
            $fecha_creacion = trim($_POST['fecha_creacion']);
            $identificacion = trim($_POST['identificacion']);
            $nombres = trim($_POST['nombres']);
            $apellidos = trim($_POST['apellidos']);
            $email = trim($_POST['email']);
            $login = trim($_POST['login']);
            $estado = trim($_POST['estado']);
            $query = "INSERT INTO usuarios2 (fecha_creacion, identificacion, nombres, apellidos, email, login, clave, estado)
                         VALUES ('$fecha_creacion', '$identificacion', '$nombres', '$apellidos', '$email', '$login', '$login', '$estado')";

            $response = mysqli_query($conex, $query);

            if($query) {
                ?>
                    <h3 class="success" >Registro exitoso</h3>
                <?php
            } else{
                    ?>
                        <h3 class="error" >Ocurrior un error</h3>
                    <?php
            }
        } else { ?> <h3 class="error" > Llena todos los campos</h3> <?php }

    }

?>