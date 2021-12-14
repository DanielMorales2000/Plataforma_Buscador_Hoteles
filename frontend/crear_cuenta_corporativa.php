<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    session_start();
    include("../../conexion_sis.php");
?>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Cuenta Corporativa</title>
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

<body class="main-layout contact-page">
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
                                                            <li> <a href="../frontend/hoteles">Tu cuenta</a> </li>
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
                                                    <li> <a href="../frontend/index">Inicio</a> </li>
                                                    <li> <a href="../frontend/politica_privacidad">Politica de Datos</a> </li>
                                                    <li class="active"> <a href="../frontend/login">Iniciar Sesion</a> </li>
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

    <div class="contactbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contacttitlepage">
                        <h2>Crea tu Cuenta Corporativa!!</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class=" col-md-6 offset-md-3">
                <div class="address">
                    <form method="POST" action="../backend/cuenta_corporativa" name="f1">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Nombre del Hotel:</label>
                                <input class="contactus" placeholder="Nombre del Hotel" type="text" name="Nombre_h" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>No de identificación delHotel(Nit):</label>
                                <input class="contactus" placeholder="Numero de identificación" type="text" name="Documento_h" required=true maxlength="30">
                            </div>                            
                            <div class="col-sm-12">
                                <label>Correo del hotel o de su dueño:</label>
                                <input class="contactus" placeholder="Correo del Hotel o Dueño" type="email" name="Email_h" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>Direccion del Hotel:</label>
                                <input class="contactus" placeholder="Direccion del Hotel" type="text" name="Direccion_h" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>Numero de Telefono del Hotel:</label>
                                <input class="contactus" placeholder="Numero de Teléfono" type="number" name="Phone_h" required=true maxlength="20">
                            </div>
                            <div class="col-sm-12">
                                <label>Describe brevemente tu Hotel:</label>
                                <textarea class="textarea" placeholder="Describe tu Hotel" type="text" name="describir_h"  required=true></textarea>
                            </div>

                            <div class="col-sm-12">
                                <label>Tu Nombre:</label>
                                <input class="contactus" placeholder="Tu Nombre" type="text" name="Nombre_Owner" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>Tu Apellido:</label>
                                <input class="contactus" placeholder="Tu Apellido" type="text" name="Apellido_Owner" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>Tipo de Documento:</label>
                                <select name="Id_tip_doc_Owner"  required=true>
                                    <option value="0">.:Seleccione:.</option>
                                    <?php
                                        include("../../conexion_sis.php");
                                        $consulta="SELECT [ID_TIPO_DOCUMENTO]
                                                ,[TIPO_DOCUMENTO]
                                            FROM [dbo].[TIPOS_DOCUMENTOS]";
                                        $ejecutar = sqlsrv_query($conn, $consulta);
                                        while($fila_tipo_doc=sqlsrv_fetch_array($ejecutar))
                                        {
                                            echo '<option value="'.$fila_tipo_doc[0].'">'.$fila_tipo_doc[1].'</option>';
                                        }
                                    ?>	
                                </select>
                            </div> 
                            <div class="col-sm-12">
                                <label>Numero de identificación:</label>
                                <input class="contactus" placeholder="Tu documento de identificación" type="number" name="Doc_Owner" required=true maxlength="20">
                            </div>                            
                            <div class="col-sm-12">
                                <label>Tu correo:</label>
                                <input class="contactus" placeholder="Tu Correo" type="email" name="Email_Owner" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>Tu Dirección:</label>
                                <input class="contactus" placeholder="Tu Direccion" type="text" name="Direccion_Owner" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>Sexo:</label>
                                <br>
                                <select name="Id_sexo_Owner" required=true>
                                <option value="0">.:Seleccione:.</option>
                                    <?php
                                        include("../../conexion_sis.php");
                                        $consulta="SELECT [ID_SEXO]
                                              ,[SEXO]
                                          FROM [dbo].[SEXOS]";
                                        $ejecutar = sqlsrv_query($conn, $consulta);
                                        while($fila_sexo=sqlsrv_fetch_array($ejecutar))
                                        {
                                            echo '<option value="'.$fila_sexo[0].'">'.$fila_sexo[1].'</option>';
                                        }
                                    ?>	
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label>Numero de telefono:</label>
                                <input class="contactus" placeholder="Numero de Teléfono" type="number" name="Phone_Owner" required=true maxlength="20">
                            </div>

                            <div class="col-sm-12">
                                <label>Pon un nombre a tu cuenta:</label>
                                <input class="contactus" placeholder="Nombre de tu Cuenta" type="text" name="Nombre_cuenta_Owner" required=true maxlength="50">
                            </div>
                            <div class="col-sm-12">
                                <label>Ingresa una clave:</label>
                                <input class="contactus" placeholder="Clave" type="password" name="Password_Owner" minlength="8" required=true maxlength="30">
                            </div>
                            <div class="col-md-12 col-sm-4" align="justify">
                                   <input type="radio"  name="validacionpol" value="1" required=true>
                                   <label for="1">Acepta el Uso de Datos e Informacion en Cumplimiento a lo establecido en la Ley 1581 de 2012: “Por medio de la cual se dictan
                                        disposiciones generales para la Protección de Datos Personales”, se informa que los datos aportados
                                        a través de este instrumento serán manejados únicamente con fines académicos.</label>
                            </div>
                            <div class="col-sm-12">
                                <p>
                                <button type="submit" name="insertar_cuenta_corp" class="send">Crear</button>
                            </p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  footer -->

    <div class="copyright">
        <div class="container">
            <p>© 2021 All Rights Reserved. <a href="https://html.design/"></a></p>
        </div>
    </div>

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