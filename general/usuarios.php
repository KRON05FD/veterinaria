<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Registro Usuarios</title>
    <link rel="stylesheet" href="../css/form.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <br />
    <div id="contenedor">
      <div id="central">
        <div id="login">
          <div class="titulo">Registrar usuarios</div>
          <br />
          <form class="form-horizontal" method="post" autocomplete="off" id="form">
            <br>
            <table class="input-group">
              <tbody>
                <tr>
                <td>* Fecha creación:</td>
                  <td class="input-container">
                    <input type="date" id="fecha_creacion" name="fecha_creacion" value="today()" min="2024-01-01" max="2094-12-31" />
                  </td>
                  <td>* Identificación:</td>
                  <td class="input-container">
                    <input type="text" name="identificacion" placeholder="Ingresa identificación" />
                  </td>
                </tr>
                <tr>
                <td>* Nombres:</td>
                  <td class="input-container">
                    <input type="text" name="nombres" placeholder="Ingresa nombres"/>
                  </td>
                  <td>* Apellidos:</td>
                  <td class="input-container">
                    <input type="text" name="apellidos" placeholder="Ingresa apellidos" />
                  </td>
                </tr>
                <tr>
                <td>* Email:</td>
                  <td class="input-container">
                    <input type="email" name="email" placeholder="Ingresa email" />
                  </td>
                  <td>* Usuario:</td>
                  <td class="input-container">
                    <input type="text" name="login" placeholder="Ingresa usuario" />
                  </td>
                </tr>
                <tr>
                  <td>* Estado:</td>
                  <td class="select">
                    <select name="estado" id="estado">
                      <option value="A" selected>Activo</option>
                      <option value="I">Inactivo</option>
                    </select>
                  </td>
                </tr>
                  <td colspan="2"></td>
                </tr>
              </tbody>
            </table>
            <br>
            <input name="send" type="submit" class="btn" value="Enviar">
            <br>
          </form>         
        </div>
      </div>
    </div>
    <?php
        include ("../db/send.php")
    ?>
  </body>
</html>
