<?php
session_start();
if (isset($_SESSION['username'])) {
  require_once ("inc/header.php");
?>
<table align="center" border=1>
  <thead>
    <th colspan="7">USUARIOS REGISTRADOS</th>
  </thead>
  <tbody>
    <tr>
      <td>ID</td>
      <td>Usuario</td>
      <td>Contrasenha</td>
      <td>Cedula de Identidad</td>
    </tr>
    <?php
      include("conexion.php");
      $query="SELECT * FROM admin";
      $resultado=$conexion->query($query);
      while($row=$resultado->fetch_assoc()){
    ?>
      <tr>
        <td><?php echo $row['Id'];?></td>
        <td><?php echo $row['usuario'];?></td>
        <td><?php echo $row['password'];?></td>
        <td><?php echo $row['cedula'];?></td>
        <?php
          if($_SESSION['username']['tipo_usuario']==1){
        ?>
          <td clas="marcador"><a href="modificarUsuario.php?id=<?php echo $row['Id']; ?>">Modificar</a></td>
          <td clas="marcador"><a href="eliminarUsuario.php?id=<?php echo $row['Id'];?>">Eliminar</a></td>

         <?php
          }
         ?>

      </tr>
      <?php

      }
    ?>
  </tbody>
</table>

  <div align="center">
        <h2 align="center">Registrar nuevo Usuario</h2>
        <form action="registrar.php" method="POST" >

            <label for="username" >USUARIO</label>
            <input type="text" name="username" id="username" required="" placeholder="Ingrese el usuario" autocomplete="off">

            <label for="password" >CONTRASEÑA</label>
            <input type="password" name="password" id="password" required="" placeholder="Ingrese la contraseña">

            <label for="cedula" >CEDULA DE IDENTIDAD</label>
            <input type="text" name="cedula" id="cedula" required="" placeholder="Ingrese su C.I." autocomplete="off">

            <label for="administrador">ADMINISTRADOR</label>
            <input type="radio" name="tipo_usuario" id="administrador" value="1" required="">

            <label for="usuario">USUARIO</label>
            <input type="radio" name="tipo_usuario" id="usuario" value="0" required="">


          <input type="submit" value="REGISTRAR">
        </form>
</div>

<?php

} else {
  header('Location: index.php');
}
require_once ("./inc/footer.php");
?>
