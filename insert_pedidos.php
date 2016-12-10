<?php

session_start();
require('config.php');
$prod = $_POST['producto'];
$descri = $_POST['descripcion'];
$canti = $_POST['cantidad'];
$register = "INSERT INTO productos(producto,descripcion,cantidad) VALUES('$prod','$descri',$canti)" or die("error" . mysqli_errno($db_link));
$result = mysqli_query($db_link, $register);
header('location:pedidos.php');
mysqli_close($db_link);
?>
