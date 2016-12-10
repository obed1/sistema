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
                                            <li><a href="cotizaciones1.php">Cotizaciones</a></li>
                                            <li><a href="pedidos.php">Pedidos</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </nav>
                                    <!--==============================content================================-->


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

                                    <!--==============================popup=================================-->
                                    <!--==============================ventana emergente editar=================================-->
                                    <div id="popup-box2" class="popup-position1">
                                        <div id="popup-wrapper1">
                                            <div id="popup-container1">
                                                <div id="popup-head-color1">
                                                    <br>
                                                    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;">Editar Cliente</p>
                                                </div>
                                                <?php
                                                include 'config.php';
                                                $id = $_GET['id'];
                                                $view = "SELECT * from clientes where md5(idcliente) = '$id'";
                                                $result = $db_link->query($view);
                                                $row = $result->fetch_assoc();
                                                if (isset($_POST['update'])) {
                                                    $nom = $_POST['nombres'];
                                                    $ape = $_POST['apellidos'];
                                                    $dir = $_POST['direccion'];
                                                    $tel = $_POST['telefono'];
                                                    $cor = $_POST['correo'];
                                                    $cli = $_POST['cliente'];
                                                    $clav = $_POST['clave'];
                                                    $insert = "UPDATE clientes set nombres = '$nom', apellidos = '$ape', direccion = '$dir', telefono = '$tel', correo = '$cor', cliente = '$cli', clave = '$clav' where md5(idcliente) = '$id'";
                                                    if ($db_link->query($insert) == TRUE) {
                                                        echo "Registro Actualizado correctamente";
                                                        header('location:index1.php');
                                                    } else {
                                                        echo "Ooppss Algun Error" . $conn->error;
                                                        header('location:index1.php');
                                                    }
                                                    $db_link->close();
                                                }
                                                ?>   
                                                <br>
                                                <form action="" method="POST">
                                                    <table border="0" align="center">    
                                                        <tr>
                                                            <td align="right">Nombres:</td>
                                                            <td><input type="text" id="txtbox" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']; ?>" required><br></td>
                                                        </tr>

                                                        <tr>
                                                            <td align="right">Apellidos:</td>
                                                            <td><input type="text" id="txtbox" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']; ?>" required><br></td>
                                                        </tr>

                                                        <tr>
                                                            <td align="right">Direccion:</td>
                                                            <td><input type="text" id="txtbox" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>" required><br></td>
                                                        </tr>

                                                        <tr>
                                                            <td align="right">Telefono:</td>
                                                            <td><input type="text" id="txtbox" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" required><br></td>
                                                        </tr>

                                                        <tr>
                                                            <td align="right">Correo:</td>
                                                            <td><input type="text" id="txtbox" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>" required><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Cliente:</td>
                                                            <td><input type="text" id="txtbox" name="cliente" placeholder="Cliente" value="<?php echo $row['cliente']; ?>" required><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Clave:</td>
                                                            <td><input type="text" id="txtbox" name="clave" placeholder="Clave" value="<?php echo $row['clave']; ?>" required><br></td>
                                                        </tr>

                                                        <br>
                                                        <tr  align="center">
                                                            <td>&nbsp;  </td>
                                                            <td>
                                                                <br>
                                                                <input type="SUBMIT" name="update" id="btnnav" value="Actualizar"></form>
                                                                <a href="index1.php"><input type="button" style="border:1px solid #900; background:#900; height:40px; width:105px; border-radius:3px; color:#FFF;" value="Cancelar"></a>

                                                            </td>
                                                        </tr>

                                                    </table>

                                            </div>
                                        </div>
                                    </div>

                                    <br>

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


                                    <script>
                                        Cufon.now();
                                    </script>
                                    </body>
                                    </html>