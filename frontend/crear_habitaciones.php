<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    session_start();
    include("../../conexion_sis.php");
    if (!isset($_SESSION['user']) OR $_SESSION["tip_us"] != 2) {
        header("location:index.php");
    }
?>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Habitaciones</title>
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

<body class="main-layout about-page">
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
                                                if($_SESSION['tip_us']==2)
                                                {
                                                    ?>
                                                        <!--CORPORATIVA-->
                                                        <li> <a href="../frontend/index">Inicio</a> </li>
                                                        <li> <a href="../frontend/listar_empleados">Empleados</a> </li>
                                                        <li  class="active"> <a href="../frontend/listar_habitaciones_hoteles">Habitaciones</a> </li>
                                                        <li> <a href="../frontend/actualizar_cuenta_corporativa">Tu Organizacion</a> </li>
                                                        <li> <a href="../backend/cierre">Cerrar Sesi??n</a> </li>
                                                    <?php
                                                }
                                                else {
                                                    ?>
                                                    <!--PERSONAL-->
                                                    <li> <a href="../frontend/index">Inicio</a> </li>
                                                    <li> <a href="../frontend/hoteles">Hoteles</a> </li>
                                                    <li> <a href="../frontend/Actualizar_Usuarios">Tus Datos</a> </li>
                                                    <li> <a href="../backend/cierre">Cerrar Sesi??n</a> </li>
                                                    <?php
                                                }
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

    <div class="aboutbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="abouttitlepage">
                        <h2>Habitacion</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- music-box  -->
    <div class="music-box about">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 offset-md-3">
                    <div class="address">
                        <form method="POST" action="../backend/crud_habitacion">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Habitacion</label>
                                    <input class="contactus" type="text" name="habt" placeholder="Inserte la Habitacion" required=true maxlength="30">
                                </div>
                                <div class="col-sm-12">
                                    <label> Descripcion</label>
                                    <input class="contactus" type="text" name="descp" placeholder="Inserte una descripcion" required=true>
                                </div>
                                <div class="col-sm-12">
                                    <label>Valor</label>
                                    <input class="contactus" type="text" name="val" placeholder="Inserte el Valor" required=true maxlength="20">
                                </div>
                                <div class="col-sm-12">
                                    <label>Tipo Habitacion</label>
                                    <select name="id_tip_hab" required=true>
                                    <option value="0">.:Seleccione:.</option>
                                    <?php
                                        include("../../conexion_sis.php");
                                        $consulta="SELECT [ID_TIPO_HABITACION]
                                                ,[TIPO_HABITACION]
                                            FROM [dbo].[TIPOS_HABITACIONES]";
                                        $ejecutar = sqlsrv_query($conn, $consulta);
                                        while($fila_tipo_hab=sqlsrv_fetch_array($ejecutar))
                                        {
                                            echo '<option value="'.$fila_tipo_hab[0].'">'.$fila_tipo_hab[1].'</option>';
                                        }
                                    ?>	
                                </select>
                                </div>
                                <div class="form-group">				
                                    <input type="submit" name="inserthabitacion" class="send" value="INSERTAR DATOS"><br />
                                </div>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->
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
                <p>?? 2019 All Rights Reserved.</p>
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