<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="dester_app";
    $tbl_name=usuario;
    $con=mysql_connct($server,$user,$pass) or die("error de base de datos".mysql_error());
    mysql_select_db($db,$con);

    return $con;
}