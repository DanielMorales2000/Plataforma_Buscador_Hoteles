<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include("../../conexion_sis.php");
?>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <body style="background-color:SkyBlue;">
    </body>
    <title>Buscador Hoteles</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a><img src="../images/hotelx.png" alt="logo"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <?php 
                                            if (isset($_SESSION['user'])) {
                                                ?>
                                                    <!--GENERAL-->
                                                    <li class="active"> <a href="../frontend/index">Inicio</a> </li>
                                                    <?php 
                                                     if($_SESSION['tip_us'] == 1)
                                                     {
                                                        ?>
                                                            <li> <a href="../frontend/listar_habitaciones_personas">Tu cuenta</a> </li>
                                                        <?php
                                                     }
                                                     else {
                                                        ?>
                                                        <li> <a href="../frontend/listar_empleados">Tu cuenta</a> </li>
                                                        <?php
                                                     }
                                                    
                                                    ?>
                                                    <li> <a href="../frontend/politica_privacidad">Politica de Datos</a> </li>
                                                    <li> <a href="../backend/cierre">Cerrar Sesión</a> </li>
                                                <?php
                                            }
                                            else {
                                                ?>
                                                    <!--GENERAL-->
                                                    <li class="active"> <a href="index">Inicio</a> </li>
                                                    <li> <a href="../frontend/politica_privacidad">Politica de Datos</a> </li>
                                                    <li> <a href="../frontend/login">Iniciar Sesion</a> </li>
                                                <?php
                                            }

                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- end header inner -->
    </header>

    <?php 
    if (isset($_SESSION['user'])) {
    ?>
    <main>
        <div class="container-fluid">
        <div class="card mb-4">
                <div class="card-header">
                <h1 align="center">Bienvenido <?php
                echo $_SESSION["user"].'!!!';
                ?> <span class="sr-only">(current)</span>
                <i class="fa fa-user-circle" aria-hidden="true" style="color:aqua"></i></h1>
                <p class="lead letra" align="center" >Has ingresado con una sesion de <?php if($_SESSION["tip_us"]== 1)
                { echo 'USUARIO PERSONAL';} else {
                    echo 'USUARIO CORPORATIVO';
                } ?></p>
                </div>

            </div>

        </div>
    </main>
    <?php
    }
    ?>
    <!-- end header -->
    <center>
    <section class="banner_section">
        <div class="banner-main">
            <img src="../images/1.jpeg" height=”1000” width=1000” alt="Descripción de la imagen" />
            <div class="container">

              

            </div>
        </div>

    </section>
</center>


    <!-- music-box  -->
    <div class="music-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="../icon/hotel.jpg" width="800" height="800"  alt= "icon"  /></i>
                        <h3>Plan 1</h3>
                        <p>5 Dias en el hotel </p>
                        <a href="#">Leer Mas</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="../icon/hotel1.jpg" width="200" height="200"  alt="icon"/></i>
                        <h3>Plan 2</h3>
                        <p>10 dias en el hotel </p>
                        <a href="#">Leer Mas</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="../icon/hotel2.jpg" width="200" height="200" alt="icon"/></i>
                        <h3>Plan 3</h3>
                        <p>15 dias en el hotel </p>
                        <a href="#">Leer Mas</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="../icon/hotel3.jpg" width="200" height="200" alt="icon"/></i>
                        <h3>Plan 4</h3>
                        <p>20 dias en el hotel </p>
                        <a href="#">Leer Mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    <!-- Download -->
    <div id="screenshot" class="Lastestnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <p></p>
                        <h2>Noticias</h2>
                        <p></p>
                        <span>Puedes observar la informacion de tu hotel favorito <br> y conocer todo lo que esta sucediendo. </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="../images/ubi.PNG"  alt="img" /></figure>
                        <h3>Hotel Casa Dann Carlton </h3>
                        <span> Abril 15 </span>
                        <p> Es un Hotel 5 estrellas, el cual ofrece Wifi,Desayuno y Parqueadero gratuito para sus huespedes. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="../images/3hotel.JPG"  alt="img" /></figure>
                        <h3>Hotel W</h3>
                        <span> Abril 10</span>
                        <p>Hotel 5 estrellas, que ofrece a sus visitantes servicio de wifi, piscina cubierta, aire acondicionado. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="../images/4hotel.JPG" alt="img" /></figure>
                        <h3>Hotel Colombia at Home </h3>
                        <span> Marzo 30</span>
                        <p>Hotel 3 estrellas, ofrece servicio de Wifi para sus clientes, ademas de ser un lugar muy tranquilo para compartir en familia. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Download -->

    <!--  footer -->
    <footr>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contactanos</h3>
                            <ul class="locarion_icon">
                                <li><img src="../icon/1.png" alt="icon" />104 Zipaquira , Colombia</li>
                                <li><img src="../icon/2.png" alt="icon" />Telefono : ( +57 8965475 )</li>
                                <li><img src="../icon/3.png" alt="icon" />Correo Electronico: DDMInnovation's@gmail.com</li>

                            </ul>

                            <ul class="contant_icon">
                                <li><img src="../icon/fb.png" alt="icon" /></li>
                                <li><img src="../icon/tw.png" alt="icon" /></li>
                                <li><img src="../icon/lin(2).png" alt="icon" /></li>
                                <li><img src="../icon/instagram.png" alt="icon" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Danos tus Opiniones</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Nombre" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Telefono" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Correo Electronico" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Mensaje" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Mas Hoteles </h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="../images/h1.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="../images/h3.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="../images/h2.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="../images/h4.jpg" /></figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© 2019 All Rights Reserved.</p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.0.0.min.js"></script>
    <script src="../js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>