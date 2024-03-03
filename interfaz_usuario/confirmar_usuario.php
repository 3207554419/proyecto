<?php

include 'coneccion.php';

if($_SERVER["REQUEST_METHOD"]=="POST") {

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Correo'];
$telefono = $_POST['Teléfono'];
$genero = $_POST['Genero'];
$fecha_nacimiento = date('Y-m-d', strtotime($_POST['FechaDeNacimiento']));
$nombreUsuario = $_POST['NombreUsuario'];
$contraseña = md5($_POST['Contraseña']);


$query = "INSERT INTO registrous (Nombre, Apellido, Correo, Teléfono, FechaDeNacimiento, NombreUsuario, Contraseña) 
VALUES('$nombre','$apellido ','$email','$telefono','$fecha_nacimiento','$nombreUsuario','$contraseña')";

$ejecutar = mysqli_query($conetion, $query);

if($ejecutar){

  echo '
  <script>
      alert ("Usuario Almacenado exitosamente")
      window.location.href "../interfaz_usuario/registrar_usuario.php";
  </script>
    
  ';
}else{
  echo '
  <script>
       alert ("Error al almacenar el usuario. Por favor. Intentelo de nuevo")
       window.location.href "../interfaz_usuario/registrar_usuario.php";
  </script>
  ';
}
}else{

  header('Location: ../interfaz_usuario/registrar_usuario.php');

  exit();
}

mysqli_close($conetion);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Confirmar Registro</title>
</head>
<body> 


     <section class="forget-password-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        <div class="close-button">
        <a href="../interfaz_usuario/iniciar_sesion.php"><img src="/img/cerrar X.png" alt=""></a>
      </div>
        <div class="login-form">
      
          <a class="logo" href="../interfaz_usuario/iniciar_sesion.php">
           
          <h3>Shopzy Place</h3></a>  
          <h2 class="text-center">REGISTRO EXITOSO</h2>
          <img class="verificado" src="/img/verificado.png" alt="">
         
         
          <form class="text-left clearfix">  
            <div class="text-center">
         <a href="../interfaz_usuario/iniciar_sesion.php" class="btn btn-main text-center"> Volver Inicio </a>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>

  <style>
    
  
    body {
            
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }


        
          h2 {
            font-size: 30px;
            margin-top: 75px;
            margin-bottom: 14px;
            color: #000;
            text-align: center;
                    }

          h3{
            font-size: 28px;
          }

          a .logo {
            text-align: center;
            font-size: 24px;
            margin-top: 28px;
            }



        .close-button{
          text-align: right;
        }     
        
        

        img{
          position: relative;
          height: 29px;
          width: 28px;
          text-align: right;
        }

        img.verificado {
            display: block;
            margin: auto;
        }
        
        .verificado{
          position:relative;
          height: 45px;
          width: 45px;
          text-align: center;
        }


        .account .block {
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(222, 222, 222);
            padding: 30px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            
        }

        .form-group {
            margin-bottom: 20px;
        }

        .account .block form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .btn-main {
          background-color: rgb(93, 19, 87);
          color: #fff;
          padding: 16px;
          border: none;
          cursor: pointer;
          font-size: 16px;
          text-decoration: none;
          margin-top: 85px;
        }


        a{
          text-decoration: none;
          color: #000;
          text-align: center;
        }



</style>

</section>

</body>
</html> 