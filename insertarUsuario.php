<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div align="center">
            <h2 align="center">Registrar nuevo Usuario</h2>
            <form action="registrar.php" method="POST" >

                <label for="username" >USUARIO</label>
                <input type="text" name="username" id="username" required="" placeholder="Ingrese el usuario" autocomplete="off">
                <br>
                <label for="password" >CONTRASEÑA</label>
                <input type="password" name="password" id="password" required="" placeholder="Ingrese la contraseña">
<br>
                <label for="cedula" >CEDULA DE IDENTIDAD</label>
                <input type="text" name="cedula" id="cedula" required="" placeholder="Ingrese su C.I." autocomplete="off">
<br>
                <label for="administrador">ADMINISTRADOR</label>
                <input type="radio" name="tipo_usuario" id="administrador" value="1" required="">
<br>
                <label for="usuario">USUARIO</label>
                <input type="radio" name="tipo_usuario" id="usuario" value="0" required="">
<br>

              <input type="submit" value="REGISTRAR">
            </form>
    </div>
  </body>
</html>
