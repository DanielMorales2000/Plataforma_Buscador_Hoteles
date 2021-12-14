<?php 
	include("../../conexion_sis.php");
  include("../frontend/crear_habitaciones.php");

        if(isset($_POST['inserthabitacion'])){
            $habt = htmlentities(addslashes($_POST['habt']));
            $id_hotel = $_SESSION["hot_cc"];
            $descp = htmlentities(addslashes($_POST['descp']));
            $val = htmlentities(addslashes($_POST['val']));
            $id_tip_hab = htmlentities(addslashes($_POST['id_tip_hab']));
           

            $insertar = "EXECUTE  [dbo].[PA_CREAR_HABITACIONES]
            @HABITACION = N'$habt ',
            @ID_HOTEL = $id_hotel,
            @DESCRIPCION = N'$descp',
            @VALOR = $val,
            @ID_TIPO_HABITACION = $id_tip_hab";
                         

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
