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
    <title>Politica de Privacidad</title>
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
                                    <a><img src="../images/hotelx.png" alt="logo" /></a>
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
                                                    <li> <a href="../frontend/index">Inicio</a> </li>
                                                    <?php 
                                                     if($_SESSION['tip_us']==1)
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
                                                    <li class="active"> <a href="../frontend/politica_privacidad">Politica de Datos</a> </li>
                                                    <li> <a href="../backend/cierre">Cerrar Sesión</a> </li>
                                                <?php
                                            }
                                            else {
                                                ?>
                                                    <!--GENERAL-->
                                                    <li> <a href="../frontend/index">Inicio</a> </li>
                                                    <li  class="active"> <a href="../frontend/politica_privacidad">Politica de Datos</a> </li>
                                                    <li> <a href="login">Iniciar Sesion</a> </li>
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
    <!-- end header -->
    <div class="blogbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blogtitlepage">
                        <h2>Politica de Privacidad</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Lastestnews -->
    <div class="Lastestnews blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <span> <div align="justify"> La información requerida por la presente página web es utilizada como fin principal para cumplir, proveer, procesar y confirmar los servicios adquiridos por el usuario a la hora de generar una reserva en cualquiera de los hoteles que aquí se promueven, así como para promocionar las actividades ludo-recreativas que se realicen en cada una de las instalaciones de los diferentes hoteles, además de dar a conocer sus servicios, realizar transacciones, efectuar reportes a las distintas autoridades administrativas de control y vigilancia nacionales o internacionales, autoridades de policía o autoridades judiciales, entidades bancarias y/o compañías aseguradoras, para fines administrativos internos y/o comerciales tales como, investigación de mercados, auditorías, reportes contables, análisis estadísticos, facturación, y ofrecimiento y/o reconocimiento de beneficios propios de nuestros programas de lealtad la cual brindo con anterioridad en el presente sitio web.</span>
                        <br> </br>
                         <span> <div align="justify"> Al aceptar esta POLÍTICA DE TRATAMIENTO PROTECCIÓN DE DATOS PERSONALES los huéspedes, visitantes, clientes, usuarios y proveedores en su calidad de titulares de los datos recolectados, autorizan que el aplicativo web Dream Hotel realice el tratamiento de los mismos, de forma parcial o total, incluyendo la recolección, almacenamiento, grabación, uso, circulación, procesamiento, supresión, para la ejecución de las actividades relacionadas con los servicios y productos adquiridos, tales como, realización de reservas, modificaciones, cancelaciones y cambios de la misma, atención de consultas, quejas y reclamos, verificación de tarjetas de crédito, débito y otros instrumentos de pago, para el funcionamiento de los programas de lealtad y demás finalidades indicadas en este documento.</span>
                         <br> </br>
                         <span> <div align="justify"> Se advierte que en estas actividades pueden estar involucrados terceros proveedores, tales como proveedores de sistemas de reservas, agencias de viajes, call centers, entidades bancarias, aseguradoras, etc.</span>
                         <br> </br>
                         <span> <div align="justify">  Adicionalmente, nuestros clientes y usuarios, en su calidad de titulares de los datos recolectados, al aceptar esta política de privacidad, nos autorizan para: </span>
                         <br> </br>
                         <span> <div align="justify">  a. Utilizar la información recibida de ellos, para fines de mercadeo de sus productos y servicios. </span>
                         <br> </br>
                         <span> <div align="justify">  b. Suministrar los datos personales a las autoridades de control y vigilancia de policía o judiciales, en virtud de un requerimiento legal o reglamentario y/o usar o revelar esta información y datos personales en defensa de sus derechos y/o su patrimonio en cuanto dicha defensa tenga relación con los productos y/o servicios contratados por sus viajeros, clientes y usuarios. </span>
                         <br> </br>
                         <span> <div align="justify">  c. Permitir el acceso a la información y datos personales a los auditores o terceros contratados para llevar a cabo procesos de auditoría interna o externa propios de la actividad comercial que se desarrolla.</span>
                         <br> </br>
                         <span> <div align="justify">  d. Consultar y actualizar los datos personales, en cualquier tiempo, con el fin de mantener actualizada dicha información. </span>
                         <br> </br> 
                         <span> <div align="justify">  e. Contratar con terceros el almacenamiento y/o procesamiento de la información y datos personales para la correcta ejecución de los contratos, bajo los estándares de seguridad y confidencialidad a los cuales estamos obligados. </span>
                         <br> </br> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img src="../images/seguridad.jpg" alt="img" /></figure>
                        <h3>Informacion Personal</h3>
                        <span> Febrero 20</span>
                        <p>Al registrarse en el hotel de su preferencia esta de acuerdo con que la entidad conozca su informacion.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img src="../images/norma.jpg" alt="img" /></figure>
                        <h3>Hoteles</h3>
                        <span> Abril 10</span>
                        <p>Al registrarse en cualquiera de los hoteles su informacion personal sera conocida por los mismos, ningun tercero tendra acceso a sus datos. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img src="../images/seguridad1.jpg" alt="img" /></figure>
                        <h3>Seguridad</h3>
                        <span> Marzo 18</span>
                        <p>Se garantiza absoluta reserva con los datos que ingrese en el presente sitio web, los unicos que conooceran la informacion son las personas encargadas del hotel en el cual hizo sus reservaciones. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Lastestnews -->

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