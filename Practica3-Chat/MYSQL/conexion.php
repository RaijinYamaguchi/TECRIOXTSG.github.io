<?php
define('SERVER',"localhost");
define('USER',"root");
define('PASSWORD',"");
define('DBNAME',"chat");
$conexion_error = mysqli_report(MYSQLI_REPORT_ERROR||MYSQLI_REPORT_STRICT);
try{
    $conexion = new mysqli(SERVER,USER,PASSWORD,DBNAME);
}catch(mysqli_sql_exception){
    die("Error de conexion: ".$conexion_error);
}
?>