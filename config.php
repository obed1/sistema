<?php 
$username="root";
$password="";
$host="localhost";
$database="bdpedidos";
$db_link=mysqli_connect($host,$username,$password,$database)or die("ERROR".mysqli_error($db_link));

if (mysqli_connect_error()){
	echo "No es posible la conexion a mysql. Porfavor intente nuevamente";
	exit();
}else
?>
