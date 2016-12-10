<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/tms-0.4.1.js"></script>
        <script src="js/cufon-yui.js"></script>
        <script src="js/cufon-replace.js"></script>
        <script src="js/Kozuka_L_300.font.js"></script>
        <script src="js/Kozuka_B_700.font.js"></script>
        <script>
            $(document).ready(function() {
                $('.slider')._TMS({
                    show: 0,
                    pauseOnHover: true,
                    prevBu: '.prev',
                    nextBu: '.next',
                    playBu: true,
                    duration: 1000,
                    preset: 'zoomer',
                    pagination: true,
                    pagNums: false,
                    slideshow: 1000,
                    numStatus: false,
                    banners: 'fade',
                    waitBannerAnimation: false,
                    progressBar: false
                })
            });
        </script>

    </head>
    <body>
        <!--==============================header=================================-->
        <header>
            <div class="main">
                <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
                <div class="social-icons">
                    <span>Contactenos:</span>
                    <div>
                        <a href="#" class="icon-3"></a>
                        <a href="#" class="icon-2"></a>
                        <a href="#" class="icon-1"></a>
                    </div>
                </div>
                <div class="clear"></div>
            </div >
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
        <div id="slide">		
            <div class="slider">
                <ul class="items">
                    <li><img src="images/slider-1.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Laminas de vidrios industriales</strong><span>Ideales para micro-empresas</span></p></div></li>
                    <li><img src="images/slider-2.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Ideales para la construcción</strong><span>Para diferentes tipos de la construccion</span></p></div></li>
                    <li><img src="images/slider-3.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Estetica para el hogar</strong><span>Diversidad de tipos y marcas</span></p></div></li>
                    <li><img src="images/slider-4.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Para todo tipo de ocacion</strong><span>Amplia gama de modelos para muebleria</span></p></div></li>
                    <li><img src="images/slider-5.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Contamos con diferentes estilos</strong><span>Ideal para la obra fina de construcciones</span></p></div></li>
                    <li><img src="images/slider-6.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Seguridad en la construccion externa </strong><span>Ideal para la obra bruta de costrucciones</span></p></div></li>

                </ul>
            </div>	
            <a href="#" class="prev"></a><a href="#" class="next"></a>
        </div> 
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