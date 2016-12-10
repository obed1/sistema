<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Productos</title>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/uCarousel.js"></script>
        <script src="js/tms-0.4.1.js"></script>
        <script src="js/cufon-yui.js"></script>
        <script src="js/cufon-replace.js"></script>
        <script src="js/Kozuka_L_300.font.js"></script>
        <script src="js/Kozuka_B_700.font.js"></script>
        <script>
            $(document).ready(function() {
                $('.gallery')._TMS({
                    show: 0,
                    pauseOnHover: true,
                    prevBu: false,
                    nextBu: false,
                    playBu: false,
                    duration: 700,
                    preset: 'fade',
                    pagination: $('.img-pags').uCarousel({show: 3, shift: 0, rows: 4}),
                    pagNums: false,
                    slideshow: 7000,
                    numStatus: true,
                    banners: false,
                    waitBannerAnimation: false,
                    progressBar: false
                })
            })
        </script>

    </head>

    <body >
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
                                    <div id="slide">        
                                        <div class="gallery">
                                            <ul class="items">
                                                <li><img src="images/gallery-1-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-2-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-3-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-4-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-5-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-6-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-7-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-8-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-9-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-10-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-11-big.jpg" alt=""></li>
                                                <li><img src="images/gallery-12-big.jpg" alt=""></li>
                                            </ul>
                                        </div>
                                    </div> 
                                    <!--==============================content================================-->
                                    <section id="content"><div class="ic"> </div>
                                        <div class="container_12 top-1">
                                            <div class="grid_12">
                                                <div class="pag">
                                                    <div class="img-pags">
                                                        <ul>
                                                            <li><a href="#"><span><img src="images/gallery-1.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-2.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-3.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-4.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-5.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-6.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-7.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-8.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-9.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-10.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-11.jpg" alt=""></span></a></li>
                                                            <li><a href="#"><span><img src="images/gallery-12.jpg" alt=""></span></a></li>
                                                        </ul>
                                                    </div>
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