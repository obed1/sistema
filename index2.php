<!DOCTYPE html>
<html lang="es">
    <head>
        <title>index2</title>
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
        if (!isset($_SESSION['empleado'])) {
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
                            <th scope="col">Empleado: <?php echo $_SESSION['empleado']; ?> </th>
                            <th scope="col">
                                <?php
                                include_once("date1.php");
                                $Today = date('y:m:d', time());
                                ?>
                            </th>
                            <th scope="col" width="20px"><a href="salir.php">
                                    <th scope="col" width="20px"><a href="salir2.php">
                                            <input type="button" value="Cerrar Sesión" align="middle" style="background:#ef6f53; min-height:30px;  cursor:pointer; display:inline-block;  width:130px; font-size:18px;  color:#fff;"> 
                                            </th>      
                                            </th>
                                            </tr>
                                            </table>
                                            </tr>
                                            </table>
                                            </div>

                                            </header>  
                                            <nav>  
                                                <ul class="menu">
                                                    <li class="current"><a href="index2.php">Inicio</a></li>
                                                    <li><a href="proveedor.php">Proveedor</a></li>
                                                    <li><a href="tipos.php">Tipos</a></li>
                                                    <li><a href="funciones.php">Funciones</a></li>
                                                    <li><a href="espesores.php">Espesores</a></li>
                                                    <li><a href="medidas.php">Medidas</a></li>
                                                    <li><a href="productos2">Productos</a></li>
                                                    <li><a href="accesos.php">Accesos</a></li>
                                                    <li><a href="clientes1.php">Clientes</a></li>
                                                    <li><a href="empleados.php">Empleados</a></li>
                                                    <li><a href="procesos.php">Procesos</a></li>
                                                    <li><a href="operacion.php">Operacion</a></li>
                                                    <li><a href="consolidar.php">Consolidar</a></li>
                                                </ul>
                                                <div class="clear"></div>
                                            </nav>
                                            <!--==============================content================================-->
                                            <section id="content"><div class="ic"> </div>


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