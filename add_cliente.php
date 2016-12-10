<?php
session_start();
require('config.php');

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$cliente=$_POST['cliente'];
$clave=$_POST['clave'];
$acl='2';

$register="INSERT INTO clientes(nombres,apellidos,direccion,telefono,correo,cliente,clave,idacceso) VALUES('$nombres','$apellidos','$direccion','$telefono','$correo','$cliente','$clave',$acl)" or die("error".mysqli_errno($db_link));
$result=mysqli_query($db_link,$register);
?>
	<script type="text/javascript">
		alert("Cliente/Registrado");
		window.location.href = "registro.php";
	</script>
<?php
mysqli_close($db_link);
?>