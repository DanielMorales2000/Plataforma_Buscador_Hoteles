<?php 
	include("../../conexion_sis.php");
    include('../frontend/Actualizar_Empleados.php');
    
        
        if(isset($_POST['actualizaremple'])){
            $id_person = $_SESSION['emp_id']; 
            $nombre_subcta = htmlentities(addslashes($_POST['nombre_subcta']));
            $noombre = htmlentities(addslashes($_POST['noombre']));
            $Apellidoo = htmlentities(addslashes($_POST['Apellidoo']));
            $corr = htmlentities(addslashes($_POST['corr']));
            $dircn = htmlentities(addslashes($_POST['dircn']));
            $telefno = htmlentities(addslashes($_POST['telefno']));
            
            $insertar = "EXECUTE  [dbo].[PA_ACTUALIZAR_EMPLEADOS]
            @ID_PERSONA = $id_person,
            @NOMBRE_SUB_CUENTA = N'$nombre_subcta',
            @NOMBRE = N'$noombre',
            @APELLIDO = N'$Apellidoo',
            @CORREO = N'$corr',
            @DIRECCION = N'$dircn',
            @TELEFONO = N'$telefno'";

            $ejecutar = sqlsrv_query($conn, $insertar);

            if($ejecutar){
                echo "<h3>Insertado correctamente</h3>";
                
            }
            else
            {
              die( print_r( sqlsrv_errors(), true));
            }
          }
          // Claves
          if(isset($_POST['actualizaclaveemp'])){
            $id_prsna = $_SESSION['emp_id'];
            $claves = md5($_POST['clav']);
            $claves1 = md5($_POST['clav1']);

            if ($claves == $claves1) {
              $insertar = "EXECUTE  [dbo].[PA_ACTUALIZAR_EMPLEADOS]
              @ID_PERSONA =  $id_prsna,
              @CLAVE = N'$claves'";
                           
              $ejecutar = sqlsrv_query($conn, $insertar);
              
              if(!$ejecutar){
                die( print_r( sqlsrv_errors(), true));
              }
            }
            
          }

	?>