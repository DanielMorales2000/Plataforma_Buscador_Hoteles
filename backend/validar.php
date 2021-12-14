<?php

include('../../conexion_sis.php');
$usuario= htmlentities(addslashes($_POST['usuario']));
$contraseña=md5(htmlentities(addslashes($_POST['contraseña'])));

//Se valida la sesion del usuario
$consulta="EXEC	[dbo].[PA_LOGIN]
@USUARIO = N'$usuario',
@CLAVE = N'$contraseña'";

$resultado=sqlsrv_query($conn, $consulta);
$filas=sqlsrv_fetch_array($resultado);

//Se obtienen datos de sesion del usuario
$consulta_tip_us="EXEC	[dbo].[PA_TIPO_USUARIO]
@USUARIO = N'$usuario',
@CLAVE = N'$contraseña'";

$ejecutar_tip_us = sqlsrv_query($conn, $consulta_tip_us);
$fila_tip_us = sqlsrv_fetch_array($ejecutar_tip_us);

if($filas){
  session_start();
  session_destroy();
  
  session_start();
  $_SESSION["user"]=$_POST["usuario"];
  $_SESSION["tip_us"]= $fila_tip_us[0];
  $_SESSION["id_per"]= $fila_tip_us[1];
  $_SESSION["id_us"]= $fila_tip_us[2];

  if ($fila_tip_us[0] == 2) {
    $_SESSION["id_c_corp"]=$fila_tip_us[3];
    $_SESSION["rol_cc"]=$fila_tip_us[4];
    $_SESSION["hot_cc"]=$fila_tip_us[5];

  }
  header("Location:../frontend/index");

}else{
    ?>
    <?php
    include("../frontend/login.php");
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
sqlsrv_close($conn);
//sqlsrv_free_stmt($resultado);
?>