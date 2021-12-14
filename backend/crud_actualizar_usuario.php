<?php 
	include("../../conexion_sis.php");
  include("../frontend/Actualizar_Usuarios.php");

        if(isset($_POST['actualizausu'])){
            $id_prsna = $_SESSION['id_per'];
            $nomr_cta =  htmlentities(addslashes($_POST['nomr_cta']));
            $nobr =  htmlentities(addslashes($_POST['nobr']));
            $aplli =  htmlentities(addslashes($_POST['aplli']));
            $correeo =  htmlentities(addslashes($_POST['correeo']));
            $drcn =  htmlentities(addslashes($_POST['drcn']));
            $tellno =  htmlentities(addslashes($_POST['tellno']));
           

            $insertar = "EXECUTE  [dbo].[PA_ACTUALIZAR_USUARIOS]
            @ID_PERSONA =  $id_prsna,
            @NOMBRE_CUENTA = N'$nomr_cta',
            @NOMBRE = N'$nobr',
            @APELLIDO = N'$aplli',
            @CORREO = N'$correeo',
            @DIRECCION = N'$drcn',
            @TELEFONO = N'$tellno' ";
                         

            $ejecutar = sqlsrv_query($conn, $insertar);
            if(!$ejecutar){
              die( print_r( sqlsrv_errors(), true));
            }
          }
          // Claves
          if(isset($_POST['actualizaclaveusu'])){
            $id_prsna = $_SESSION['id_per'];
            $claves = md5($_POST['claves']);
            $claves1 = md5($_POST['claves1']);

            if ($claves == $claves1) {
              $insertar = "EXECUTE  [dbo].[PA_ACTUALIZAR_USUARIOS]
              @ID_PERSONA =  $id_prsna,
              @CLAVE = N'$claves'";
                           
              $ejecutar = sqlsrv_query($conn, $insertar);
              
              if(!$ejecutar){
                die( print_r( sqlsrv_errors(), true));
              }
            }
            
          }

	?>
