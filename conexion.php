<?php 
// datos para la coneccion a mysql 
$host="127.13.98.130:3306";
$usuario="adminvaJ9Jt2";
$password="hUw7v2w7h38Q";
$conectar=mysql_connect($host, $usuario, $password);
mysql_select_db("votacion",$conectar);
