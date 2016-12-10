<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Contacts</title>
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
    <body>
        <?php
        session_start();
        if (!isset($_SESSION['cliente'])) {
            header('location:ingresar.php');
        }
        ?>

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
                                        <table width="83%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="741" height="37" align="center" >
                                                    <a href="javascript:void(0)" onclick="toggle_visibility('popup-box1')"><input type="button" id="btn" value="Nuevo Pedido" /></a>
                                                </td>
                                            </tr>
                                        </table>  

                                        <table border="1" cellpadding="0" cellspacing="0" width="80%">
                                            <tr>
                                                <th colspan="5" align="center" height="55px" style="border-bottom:1px solid #033; background: #033; color:#FFF;">Informacion de Pedidos</th>
                                            </tr>
                                            <tr height="30px">
                                                <th style="border-bottom:1px solid #333;">Fecha</th>
                                                <th style="border-bottom:1px solid #333;">Producto</th>
                                                <th style="border-bottom:1px solid #333;">Cantidad</th>
                                                <th style="border-bottom:1px solid #333;">Total</th>
                                                <th style="border-bottom:1px solid #333;">Proceso</th>
                                            </tr>

                                            <?php
                                            require('config.php');
                                            $query = "SELECT * FROM pedidos";
                                            $result = mysqli_query($db_link, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr align="center" style="height:25px">
                                                    <td style="border-bottom:1px solid #333;"> <?php echo $row['fechahora']; ?> </td>
                                                    <td style="border-bottom:1px solid #333;"> <?php echo $row['idproducto']; ?> </td>
                                                    <td style="border-bottom:1px solid #333;"> <?php echo $row['cantidadpedido']; ?> </td>
                                                    <td style="border-bottom:1px solid #333;"> <?php echo $row['total']; ?> </td>
                                                    <td style="border-bottom:1px solid #333;"> <?php echo $row['idproceso']; ?> </td>
                                                    </td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </table>


                                        <div id="popup-box1" class="popup-position">
                                            <div id="popup-wrapper">
                                                <div id="popup-container">

                                                    <div id="popup-head-color1">
                                                        <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="#FFF"> X </font></a></p>
                                                        <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"> Agregar Producto</p>
                                                    </div>
                                                    <br>

                                                    <?php
                                                    if (isset($_POST['sub'])) {

                                                        @$total = $_POST['total'];
                                                        @$quant = $_POST['quant'];
                                                        @$profit = $_POST['profit'];
                                                        @$profit = $profit;
                                                        @$quant = $quant;
                                                    }
                                                    ?>
                                                    <form action="insert_productos.php" method="POST">

                                                    <?php
                                                    if (isset($_POST['calculate'])) {
                                                        @$amnt = $_POST['amount'];
                                                        @$quant = $_POST['quant'];
                                                        @$quant = $quant;
                                                        @$total = $amnt * $quant;
                                                    }
                                                    ?>
                                                        <table border="0" align="center">
                                                            <td align="right"> Fecha Actual: </td>
                                                            <td> <input type="text" name="dates" id="txtbox" value="<?php echo "  " . date("Y/m/d") ?>" readonly> 
                                                            </td>

                                                            <tr>
                                                                <td align="right">Id Producto:</td>
                                                                <td>
                                                                    <select name="idproducto" id="txtbox">
<?php
require('config.php');
$query = "SELECT * FROM productos";
$result1 = mysqli_query($db_link, $query);
while ($row1 = mysqli_fetch_array($result1)) {
    ?>
                                                                            <option><?php echo $row1['idproducto']; ?></option>
                                                                        <?php }
                                                                        ?>
                                                                    </select>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td align="right">Precio Venta:</td>
                                                                <td><input type="text" id="txtbox" name="amount" value="<?php echo $row['preciounitario']; ?>" readonly><br></td>
                                                            </tr>

                                                            <tr>
                                                                <td align="right">Cantidad:</td>
                                                                <td><input type="text" id="txtbox" name="quant" value="<?php echo @$quant ?>" placeholder="Cantidad" required></td>
                                                            </tr>

                                                            <tr>
                                                                <td align="right">Monto Total a Pagar:</td>
                                                                <td><input type="text" id="txtbox" name="total" value="<?php echo @$total ?>" readonly></td>
                                                                <td><input type="submit" name="calculate" value="Calcular" id="btncalc"></td>
                                                            </tr>


                                                            <br>
                                                            <tr  align="left">
                                                                <td>&nbsp;  </td>
                                                                <td><input type="SUBMIT" id="btn" value="Pedir"></a></td>
                                                            </tr>
                                                        </table>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

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
                                        </div> 

                                    </footer>  	       
                                    <script>
                                        Cufon.now();
                                    </script>
                                    </body>
                                    </html>