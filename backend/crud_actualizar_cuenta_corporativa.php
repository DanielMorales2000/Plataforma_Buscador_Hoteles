<?php 
	include("../../conexion_sis.php");
    include("../frontend/actualizar_cuenta_corporativa.php");

        if(isset($_POST['actualcuentacorpo'])){
            $id_htel = $_SESSION["hot_cc"];
            $nommb =  htmlentities(addslashes($_POST['nommb']));
            $dctmo =  htmlentities(addslashes($_POST['dctmo']));
            $correoo =  htmlentities(addslashes($_POST['correoo']));
            $diren =  htmlentities(addslashes($_POST['diren']));
            $tefon =  htmlentities(addslashes($_POST['tefon']));
            $deson =  htmlentities(addslashes($_POST['deson']));
           

            $insertar = "EXECUTE  [dbo].[PA_ACTUALIZAR_CUENTA_CORPORATIVA]
            @ID_HOTEL = $id_htel,
            @NOMBRE = N'$nommb',
            @DOCUMENTO = N'$dctmo',
            @CORREO = N' $correoo',
            @DIRECCION = N'$diren',
            @TELEFONO = N' $tefon',
            @DESCRIPCION = N' $deson'";
                         

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
