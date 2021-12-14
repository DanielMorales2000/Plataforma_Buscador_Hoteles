<?php 
	include("../../conexion_sis.php");
    include("../frontend/login.php");

        if(isset($_POST['insertusuario'])){
            $nom = htmlentities(addslashes($_POST['nom']));
            $ape = htmlentities(addslashes($_POST['ape']));
            $tipdoc = htmlentities(addslashes($_POST['tipdoc']));
            $doc = htmlentities(addslashes($_POST['doc']));
            $correo = htmlentities(addslashes($_POST['correo']));
            $direccion = htmlentities(addslashes($_POST['direccion']));
            $sexo = htmlentities(addslashes($_POST['sexo']));
            $telefono = htmlentities(addslashes($_POST['telefono']));
            $nomcuenta = htmlentities(addslashes($_POST['nomcuenta']));
            $clave = md5($_POST['clave']);

            $insertar = "EXECUTE [dbo].[PA_CREAR_USUARIO]
            @NOMBRE = N'$nom',
            @APELLIDO = N'$ape',
            @ID_TIPO_DOCUMENTO = N'$tipdoc',
            @DOCUMENTO = N'$doc',
            @CORREO = N'$correo',
            @DIRECCION = N'$direccion',
            @ID_SEXO = N'$sexo',
            @TELEFONO = N'$telefono',
            @NOMBRE_CUENTA = N'$nomcuenta',
            @CLAVE = N'$clave'";                     

            $ejecutar = sqlsrv_query($conn, $insertar);

            if($ejecutar){
              echo "<h3>Insertado correctamente</h3>";
            }
            else
            {
              die( print_r( sqlsrv_errors(), true));
            }

          }

	?>

	