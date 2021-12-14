<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body background="images/13.jpg">
   <form action="../backend/validar" method="post">
   <h1 class="animate__animated animate__backInLeft">LOGIN</h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario" placeholder="user" minlength="8" required=true maxlength="50"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña" minlength="8" required=true maxlength="30"></p>
   <input type="submit" value="Ingresar">
   <br><br>
   <a href="../frontend/crear_cuenta_corporativa" style="color:#8d96e7;">Crea tu Cuenta Corporativa</a>
   <br>
   <a href="../frontend/crear_usuarios" style="color:#8d96e7;">Crea tu Usuario</a>
   <br>
   <a href="../frontend/index" style="color:#8d96e7;">Regresar al inicio</a>
   </form> 
</body>
</html>