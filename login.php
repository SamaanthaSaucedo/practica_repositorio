<?php
session_start();

$username= $_POST['user'];
$contrasenia = $_POST['pass'];


include 'conexion.php';

$consulta = mysqli_query ($conect, "SELECT * FROM usuarios WHERE  username= '$username' AND contrasenia = '$contrasenia'");


if(!$consulta){


echo mysqli_error($mysqli);


exit;


}


if($user = mysqli_fetch_assoc($consulta)) {

include 'bienvenido.html';

} else {

    include 'index.php';

    echo '<script language="javascript">alert("Error de autentificacion");window.location.href="index.php"</script>';
    
   


}

?>