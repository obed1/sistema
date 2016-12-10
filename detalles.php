<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Detalles</title>
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
        <!--==============================header=================================-->
        <header>
            <div class="main">
                <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
                <div class="social-icons">
                    <span>Contactenos:</span>
                    <a href="#" class="icon-3"></a>
                    <a href="#" class="icon-2"></a>
                    <a href="#" class="icon-1"></a>
                </div>
                <div class="clear"></div>
            </div>
        </header>  
        <nav>  
            <ul class="menu">
                <li class="current"><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="detalles.php">Detalles</a></li>
                <li><a href="registro.php">Registro</a></li>
                <li><a href="ingresar.php">Ingresar</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
        <!--==============================content================================-->
        <section id="content">

            <table border="1" cellpadding="0" cellspacing="0" width="80%">
                <tr>
                    <th colspan="8" align="center" height="55px" style="border-bottom:1px solid #033; background: #033; color:#FFF;">Detalles de productos</th>
                </tr>
                <tr height="30px">
                    <th style="border-bottom:1px solid #333;">Tipo</th>
                    <th style="border-bottom:1px solid #333;">Funcion</th>
                    <th style="border-bottom:1px solid #333;">Producto</th>
                    <th style="border-bottom:1px solid #333;">Espesor</th>
                    <th style="border-bottom:1px solid #333;">Medida</th>
                    <th style="border-bottom:1px solid #333;">Descripcion</th>
                    <th style="border-bottom:1px solid #333;">Precio Unitario</th>
                    <th style="border-bottom:1px solid #333;">Stock</th>
                </tr>

                <?php
                require('config.php');
                $query = "SELECT tipo, funcion, producto, grosor, medida,descripcion,preciounitario, stock 
                FROM productos p, tipos t, funciones f, espesores e, medidas m 
                where p.idtipo=t.idtipo AND p.idfuncion=f.idfuncion AND p.idespesor=e.idespesor AND p.idmedida=m.idmedida";
                $result = mysqli_query($db_link, $query);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr align="center" style="height:25px">
                        <td style="border-bottom:1px solid #333;"> <?php echo $row['tipo']; ?> </td>
                        <td style="border-bottom:1px solid #333;"> <?php echo $row['funcion']; ?> </td>
                        <td style="border-bottom:1px solid #333;"> <?php echo $row['producto']; ?> </td>
                        <td style="border-bottom:1px solid #333;">mm <?php echo $row['grosor']; ?> </td>
                        <td style="border-bottom:1px solid #333;"> <?php echo $row['medida']; ?> </td>
                        <td style="border-bottom:1px solid #333;"> <?php echo $row['descripcion']; ?> </td>
                        <td style="border-bottom:1px solid #333;">Bs <?php echo $row['preciounitario']; ?> </td>
                        <td style="border-bottom:1px solid #333;"> <?php echo $row['stock']; ?> </td>
                        </td>
                    </tr>
                <?php }
                ?>
            </table>


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
                <h3><a href="login.php"><font color="White">Login</font></a></h3>
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