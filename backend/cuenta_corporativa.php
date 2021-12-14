<?php 
	include("../../conexion_sis.php");
    include("../frontend/login.php");
?>
        <?php
          if(isset($_POST['insertar_cuenta_corp'])){
            $nombre_h = htmlentities(addslashes($_POST['Nombre_h']));
            $documento_h = htmlentities(addslashes($_POST['Documento_h']));
            $correo_h = htmlentities(addslashes($_POST['Email_h']));
            $direccion_h = htmlentities(addslashes($_POST['Direccion_h']));
            $telefono_h = htmlentities(addslashes($_POST['Phone_h']));
            $descripcion_h = htmlentities(addslashes($_POST['describir_h']));
            $nombre_owner = htmlentities(addslashes($_POST['Nombre_Owner']));
            $apellido_owner = htmlentities(addslashes($_POST['Apellido_Owner']));
            $id_tip_doc_owner = htmlentities(addslashes($_POST['Id_tip_doc_Owner']));
            $doc_owner = htmlentities(addslashes($_POST['Doc_Owner']));
            $correo_owner = htmlentities(addslashes($_POST['Email_Owner']));
            $direccion_owner = htmlentities(addslashes($_POST['Direccion_Owner']));
            $id_sexo_owner = htmlentities(addslashes($_POST['Id_sexo_Owner']));
            $telefono_owner = htmlentities(addslashes($_POST['Phone_Owner']));
            $nombre_cuenta_owner = htmlentities(addslashes($_POST['Nombre_cuenta_Owner']));
            $clave_owner = md5($_POST['Password_Owner']) ;

            $insertar = "EXEC [dbo].[PA_CREAR_CUENTA_CORPORATIVA]
                        @NOMBRE_H = N'$nombre_h',
                        @DOCUMENTO_H = N'$documento_h',
                        @CORREO_H = N'$correo_h',
                        @DIRECCION_H = N'$direccion_h',
                        @TELEFONO_H = N'$telefono_h',
                        @DESCRIPCION_H = N'$descripcion_h',
                        @NOMBRE = N'$nombre_owner',
                        @APELLIDO = N'$apellido_owner',
                        @ID_TIPO_DOCUMENTO = $id_tip_doc_owner,
                        @DOCUMENTO = $doc_owner,
                        @CORREO = N'$correo_owner',
                        @DIRECCION = N'$direccion_owner',
                        @ID_SEXO = $id_sexo_owner,
                        @TELEFONO = N'$telefono_owner',
                        @NOMBRE_SUB_CUENTA = N'$nombre_cuenta_owner',
                        @CLAVE = N'$clave_owner'";

            $ejecutar = sqlsrv_query($conn, $insertar);

            

            if(!$ejecutar){
              die( print_r( sqlsrv_errors(), true));

            }
          }

	?>
