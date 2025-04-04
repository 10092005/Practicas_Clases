<?php
    $server = "localhost" ;
    $user = "root" ;
    $pass = "" ;
    $database = "bbdd_biblioteca" ;

    $conexion = mysqli_connect($server , $user , $pass) or
    die ("Error de conexión con el servidor") ;

    mysqli_select_db($conexion , $database) ;
?>