<?php 
	include("../../conexion_sis.php");
  include("../frontend/actualizar_habitaciones.php");

        if(isset($_POST['actualhabitacion'])){
            $id_habt =  htmlentities(addslashes($_POST['id_habt']));
            $habton =  htmlentities(addslashes($_POST['habton']));
            $descpon =  htmlentities(addslashes($_POST['descpon']));
            $valrr =  htmlentities(addslashes($_POST['valrr']));
            $id_tip_habitan =  htmlentities(addslashes($_POST['id_tip_habitan']));
           

            $insertar = "EXECUTE  [dbo].[PA_ACTUALIZAR_HABITACIONES]
            @ID_HABITACION = $id_habt,
            @HABITACION = N'$habton',
            @DESCRIPCION = N'$descpon',
            @VALOR = $valrr,
            @ID_TIPO_HABITACION =  $id_tip_habitan";
                         

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
