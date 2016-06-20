<?php 
// datos para la coneccion a mysql 
$host="127.5.250.130";
$usuario="adminvxnFy9E";
$password="_uR1uSnCXlFV";
$conectar=mysql_connect($host, $usuario, $password);
mysql_select_db("votacion",$conectar);
