<?php
//variable que almacena la conexion a la base de datos
$conect=new mysqli(
    "localhost",
    "root",
    "",
    "bdjsyse"
);

    //comprobamos la conexion
    if($conect -> connect_errno){
        die("fallo de conexion");

    }else{

    }
?>