<?php
    // Conexión a la base de datos
    include("../db/conexion.php");
    //$conn = mysqli_connect('localhost', 'usuario', 'contraseña', 'basededatos');
    if (isset($_POST['iniciarsesion'])){
        if (
            strlen($_POST['login']) >= 1 &&
            strlen($_POST['clave']) >= 1
        ){
            $login = trim($_POST['login']);
            $clave = trim($_POST['clave']);
            // Consulta para verificar las credenciales del usuario
            $query = "SELECT * FROM usuarios WHERE login='$login' AND clave='$clave'";
            $response = mysqli_query($conex, $query);

            // Verificar si se encontraron coincidencias en la base de datos
            if (mysqli_num_rows($response) == 1) {
            // Credenciales válidas, iniciar sesión
            session_start();
            $_SESSION['login'] = $login;
            // Redirigir al usuario a la página de inicio
                header('Location: menu.php');
            } else {
                // Credenciales inválidas, mostrar mensaje de error
                echo "Nombre de usuario o contraseña incorrectos.";
            }

        }
}
?>