<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!DOCTYPE html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
  <head>
    <meta charset="utf-8" />

    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="author" content="Videojuegos & Desarrollo" />
    <meta
      name="description"
      content="Muestra de un formulario de acceso en HTML y CSS"
    />
    <meta name="keywords" content="Formulario Acceso, Formulario de LogIn" />

    <link
      href="https://fonts.googleapis.com/css?family=Nunito&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Overpass&display=swap"
      rel="stylesheet"
    />

    <!-- Link hacia el archivo de estilos css -->
    <link rel="stylesheet" href="../css/index.css" />

    <style type="text/css"></style>

    <script type="text/javascript"></script>
  </head>

  <body>
    <div id="contenedor">
      <div id="central">
        <div id="login">
          <div class="titulo">Bienvenidos</div>
          <img
            src="../images/logoveterinaria.jpeg"
            alt="logoveterinaria"
            width="260"
            height="210"
          />
          <br />
          <br />
          <form id="loginform"  method="post" autocomplete="off">
            <input
              type="text"
              placeholder="Usuario"
              name="login"
              required
            />
            <input
              type="password"
              placeholder="Contraseña"
              name="clave"
              required
            />
            <button name="iniciarsesion" type="submit" title="Ingresar" >
              Ingresar
            </button>
          </form>
          <div class="pie-form">
            <a href="#">¿Perdiste tu contraseña?</a>
            <a href="#">¿No tienes Cuenta? Registrate</a>
          </div>
        </div>
        <div class="inferior">
          <a href="#">Volver</a>
        </div>
      </div>
    </div>
    <?php
        include ("login.php")
    ?>
  </body>
</html>