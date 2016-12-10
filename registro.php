<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro</title>
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
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. May 21, 2012! </div>
            <div class="container_12 top-4">

                <div class="grid_8">
                    <div class="left-1">
                        <h2>Registro</h2>
                        <form id="form" method="post" action="add_cliente.php">
                            <fieldset>
                                <label><strong>Nombres:</strong><input type="text" name="nombres" required></label>
                                <label><strong>Apellidos:</strong><input type="text" name="apellidos" required></label>
                                <label><strong>Dirección:</strong><input type="text" name="direccion" required></label>
                                <label><strong>Telefono:</strong><input type="text" name="telefono" required></label>
                                <label><strong>Correo:</strong><input type="text" name="correo" required></label>
                                <label><strong>usuario:</strong><input type="text" name="cliente" required></label>
                                <label><strong>Contraseña:</strong><input type="text" name="clave" required></label>
                                <input type="SUBMIT" value="Aceptar" style="background:#ef6f53; min-height:30px;  cursor:pointer; display:inline-block;  width:130px; font-size:18px;  color:#fff; font-weight:normal;">
                            </fieldset>  
                        </form> 
                    </div>
                </div>
                <div class="clear"></div>
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