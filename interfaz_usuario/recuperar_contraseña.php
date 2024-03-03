<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Recuperar Contraseña</title>
</head>
<body>

<section class="forget-password-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        <div class="close-button">
        <a href="/interfaz_usuario/iniciar_sesion.php"><img src="../img/cerrar X.png" alt=""></a>
      </div>
        <div class="login-form">
      
          <a class="logo" href="../interfaz_usuario/index.php">
            <h3>Shopzy Place</h3></a>
          <h2 class="text-center">BIENVENIDO DE NUEVO</h2>
          <form class="text-left clearfix">
            <p>Introduzca la dirección de correo electrónico de su cuenta. Se le enviará un código de verificación. Una vez que haya recibido el código de verificación, podrá elegir una nueva contraseña para su cuenta.</p>
            
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electrónico de la cuenta">
            
            <div class="text-center">
            <a href="../interfaz_usuario/Solicitar_contraseña.php"><button type="submit" class="btn btn-main text-center" > Solicitar contraseña </a></button>
            </div>
          </form>
          <p class="mt-20"><a href="../interfaz_usuario/iniciar_sesion.php">Volver inicio sesión</a></p>
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
            background-color: #f8f9fa; /* Cambia el color de fondo según tu preferencia */
        }


        
          h2 {
            font-size: 30px;
            margin-top: 53px;
            margin-bottom: 48px;
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


        .account .block {
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(222, 222, 222);
            padding: 30px;
            max-width: 500px; /* Ajusta el ancho según tus necesidades */
            width: 100%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            
        }



        p {
          text-align: left;
            color: #777; /* Cambia el color del texto según tu preferencia */
            font-size: 16px;
            margin: 0 0 44px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .account .block form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="email"] {
          width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 15px; /* Agregado para espacio entre el campo y el botón */
        }

        .btn-main {
          background-color: rgb(93, 19, 87);
          color: #ffffff;
          padding: 16px;
          border: none;
          cursor: pointer;
          font-size: 16px;
          text-decoration: none;
          margin-top: 41px;
        }

        .mt-20 {
            margin-top: 22px;
            text-align: center;
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