<?php
include 'conexion.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username= $_POST['user'];
    $contrasenia = $_POST['pass'];

  $query = "SELECT * FROM usuarios WHERE  username= '$username' AND contrasenia = '$contrasenia'";
  $result = mysqli_query($conect, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $rol_id = $row['id_rol'];

    $_SESSION['username'] = $username;
    $_SESSION['id_rol'] = $rol_id;
    
    switch ($rol_id) {
      case 1:
        header("Location: bienvenido.php");
        exit();
      case 2:
        header("Location: bienvenido.php");
        exit();
      case 3:
        header("Location: bienvenido.php");
        exit();
      default:
        echo "Rol no válido";
        break;
    }
  } else {
    include 'index.php';
    echo '<script language="javascript">alert("Error de autentificacion");window.location.href="index.php"</script>';
  }
}
?>