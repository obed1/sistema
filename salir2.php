<?php

session_start();
session_destroy();
unset($_SESSION['empleado']);
header('location:login.php');
exit();
?>