<?php 
	include("../../conexion_sis.php");
    include("../frontend/crear_empleados.php");

        if(isset($_POST['insertempleado'])){
            $nome =  htmlentities(addslashes($_POST['nome']));
            $apel =  htmlentities(addslashes($_POST['apel']));
            $tipdocument =  htmlentities(addslashes($_POST['tipdocument']));
            $documen =  htmlentities(addslashes($_POST['documen']));
            $correoelec =  htmlentities(addslashes($_POST['correoelec']));
            $direc =  htmlentities(addslashes($_POST['direc']));
            $sexx =  htmlentities(addslashes($_POST['sexx']));
            $tel =  htmlentities(addslashes($_POST['tel']));
            $Rol =  htmlentities(addslashes($_POST['Rol']));
            $id_cuenta = $_SESSION["id_c_corp"];
            $nomsubcuenta = htmlentities(addslashes($_POST['nomsubcuenta']));
            $clavee = md5($_POST['clavee']);

            $insertar = "EXECUTE  [dbo].[PA_CREAR_EMPLEADOS]
            @NOMBRE = N'$nome',
            @APELLIDO = N'$apel',
            @ID_TIPO_DOCUMENTO = $tipdocument,
            @DOCUMENTO = $documen ,
            @CORREO = N'$correoelec',
            @DIRECCION = N'$direc',
            @ID_SEXO = $sexx,
            @TELEFONO = N'$tel',
            @ID_ROL = $Rol,
            @ID_CUENTA_CORPORATIVA = $id_cuenta,
            @NOMBRE_SUB_CUENTA = N'$nomsubcuenta ',
            @CLAVE = N'$clavee'";                     

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
