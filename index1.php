<!DOCTYPE html>
<html lang="es">
    <head>
        <title>index</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/cufon-yui.js"></script>
        <script src="js/cufon-replace.js"></script>
        <script src="js/Kozuka_L_300.font.js"></script>
        <script src="js/Kozuka_B_700.font.js"></script>

    </head>

    <link rel="stylesheet" type="text/css" href="css/css1.css">
    <script>
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }
    </script>

    <body>

        <?php
        session_start();
        if (!isset($_SESSION['cliente'])) {
            header('location:ingresar.php');
        }
        ?>


        <!--==============================header=================================-->
        <header>
            <div class="main">
                <h1><a href="index1.php"><img src="images/logo.png" alt=""></a></h1>
                <div class="social-icons">
                    <span>Contactenos:</span>
                    <a href="#" class="icon-3"></a>
                    <a href="#" class="icon-2"></a>
                    <a href="#" class="icon-1"></a>
                </div>
                <div class="clear"></div>
                <!--==============================info grant=================================-->
                <table cellspacing="1" width="100%" border="0" cellpadding="20px">
                    <tr>
                    <table border="0" cellspacing="10px" width="100%" cellpadding="5px" style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
                        <tr>
                            <th scope="col">Cliente: <?php echo $_SESSION['cliente']; ?> </th>
                            <th scope="col">
                                <?php
                                include_once("date1.php");
                                $Today = date('y:m:d', time());
                                ?>
                            </th>
                            <th scope="col" width="20px"><a href="salir.php">
                                    <input type="button" value="Cerrar Sesión" align="middle" style="background:#ef6f53; min-height:30px;  cursor:pointer; display:inline-block;  width:130px; font-size:18px;  color:#fff;"> 
                                    </th>
                                    </tr>
                                    </table>
                                    </tr>
                                    </table>
                                    </div>

                                    </header>  
                                    <nav>  
                                        <ul class="menu">
                                            <li class="current"><a href="index1.php">Inicio</a></li>
                                            <li><a href="productos1.php">Productos</a></li>
                                            <li><a href="detalles1.php">Detalles</a></li>
                                            <li><a href="pedidos.php">Pedidos</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </nav>
                                    <!--==============================content================================-->
                                    <section id="content"><div class="ic"> </div>
                                        <tr>
                                            <td>
                                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#033;">
                                                    <tr>
                                                        <th colspan="8" align="center" height="55px" style="border-bottom:1px solid #033; background: #033; color:#FFF;">Informacion de Cliente</th>
                                                    </tr>
                                                    <tr height="30px">
                                                        <th style="border-bottom:1px solid #333;">Nombres</th>
                                                        <th style="border-bottom:1px solid #333;">Apellidos</th>
                                                        <th style="border-bottom:1px solid #333;">Direccion</th>
                                                        <th style="border-bottom:1px solid #333;">Telefono</th>
                                                        <th style="border-bottom:1px solid #333;">Correo</th>
                                                        <th style="border-bottom:1px solid #333;">Cliente</th>
                                                        <th style="border-bottom:1px solid #333;">Clave</th>
                                                        <th style="border-bottom:1px solid #333;">Editar</th>
                                                    </tr>
                                                    <?php
                                                    require('config.php');
                                                    $user = $_SESSION['cliente'];
                                                    $query = "SELECT * FROM clientes WHERE cliente ='$user' ";
                                                    $result = mysqli_query($db_link, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <tr align="center" style="height:25px">
                                                            <td style="border-bottom:1px solid #333;"> <?php echo $row['nombres']; ?> </td>
                                                            <td style="border-bottom:1px solid #333;"> <?php echo $row['apellidos']; ?> </td>
                                                            <td style="border-bottom:1px solid #333;"> <?php echo $row['direccion']; ?> pcs. </td>
                                                            <td style="border-bottom:1px solid #333;"> <?php echo $row['telefono']; ?> </td>
                                                            <td style="border-bottom:1px solid #333;"> <?php echo $row['correo']; ?> </td>
                                                            <td style="border-bottom:1px solid #333;"> <?php echo $row['cliente']; ?> </td>
                                                            <td style="border-bottom:1px solid #333;"> <?php echo $row['clave']; ?> </td>
                                                            <td style="border-bottom:1px solid #333;">
                                                                <a href="edit_cliente.php?id=<?php echo md5($row['idcliente']); ?>"><input type="button" value="Editar" style="width:50px; height:20; color:#FFF; background:#069; border:1px solid #069; border-radius:3px;"></a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                </table>
                                            </td>
                                        </tr>


                                    </section> 
                                    <!--==============================footer=================================-->
                                    <footer>
                                        <div class="footer-col-1">
                                            <h3>Sistema</h3>
                                            <ul class="list-1">
                                                <li><a href="#">Ingenieria de sistemas</a></li>
                                                <li><a href="#">Tecnologias Emergentes I</a></li>
                                                <li><a href="#">Sistema de Pedidos</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-col-2">
                                            <h3>Direccion</h3>
                                            <dl class="adrss">
                                                <dd><span>Pais:</span>Bolivia</dd>
                                                <dd><span>Depto.:</span>La Paz</dd>
                                                <dd><span>Ciudad:</span>El Alto</dd>
                                                <dd><span>Email:</span><a href="#" class="link">infoimport@import.com</a></dd>
                                            </dl> 
                                        </div>  
                                        <div class="footer-col-3">
                                            <h3>Informacion</h3>
                                            <form id="form-search" method="post">
                                                <input type="text" value="" onBlur="if (this.value == '')
                                    this.value = ''" onFocus="if (this.value == '')
                                                this.value = ''"  /><a href="#" onClick="document.getElementById('form-search').submit()"></a>
                                            </form>
                                        </div>  
                                        <div class="footer-col-4">
                                            <p>© 2016 Importadora<br>
                                            <p>Desarrolladores: <br>
                                                <a rel="nofollow" href="http://www.obed.com/" target="_blank" class="link">Obed Mena Chuquimia</a>.Diseño</p>
                                            <a rel="nofollow" href="http://www.ivan.com/" target="_blank" class="link">Ivan Monzon Intipampa</a>.Programación</p>
                                            <a rel="nofollow" href="http://www.francia.com/" target="_blank" class="link">Francia Zulma Chura Gutierrez</a>.Maquetación</p>
                                        </div>  
                                    </footer>  

                                    <script>
                                        Cufon.now();
                                    </script>
                                    </body>
                                    </html>