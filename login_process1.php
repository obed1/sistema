<?php

session_start();
require('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$login = "SELECT * FROM empleados WHERE empleado='$username' AND clave='$password'";
$result_login = mysqli_query($db_link, $login);

if (@mysqli_num_rows($result_login) == 1) {
    $_SESSION = mysqli_fetch_array($result_login, MYSQLI_ASSOC);
    ?>
    <script type="text/javascript">
        alert("Cliente/Credenciales de ingreso correctas..!");
        window.location.href = "index2.php";
    </script>
<?php } else {
    ?>
    <script type="text/javascript">
        alert("Cliente/ Clave es incorrecta");
        window.location.href = "login.php";
    </script><?php

}
mysqli_close($db_link);
?>