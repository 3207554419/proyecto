<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="icon" href="../img/logo.png" type="image/png">
  <title>Registro Usuario</title>
</head>

<body class="body_registrar_usuario">

  <div class="register-container">
    <div class="register-image">
      <img src="../img/iniciosesionnnn.jpg" alt="" class="close-button">
    </div>
    <div class="login-form">
      <div class="close-button">
        <a href="../sistema/index.php"><img src="../img/cerrar X.png" alt=""></a>
      </div>
      <div class="register-form">
        <div class="logo-and-title">
          <img src="../img/logo.png" alt="" class="register-logo">

          <form method="POST" action="../interfaz_usuario/confirmar_usuario.php">

            <h2>Registro Usuario</h2>
        </div>
        <form class="form_registrar_usuario" method="POST">
          <div class="formulario-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" placeholder="Ingrese su nombre" />
          </div>
          <div class="formulario-group">
            <label for="Apellido">Apellido:</label>
            <input type="text" name="Apellido" placeholder="Ingrese su apellido" />
          </div>
          <div class="formulario-group">
            <label for="Correo">E-mail:</label>
            <input type="Correo" name="Correo" placeholder="Ingrese su correo electrónico" />
          </div>
          <div class="formulario-row">
            <div class="formulario-group-half">
              <label name=Teléfono for="Teléfono">Teléfono:</label>
              <input type="text" name="Teléfono" placeholder="Ingrese su teléfono" />
            </div>
            <div class="formulario-group-half">
              <label for="FechaDeNacimiento">Fecha de Nacimiento:</label>
              <input type="date" name="FechaDeNacimiento" />
            </div>
          </div>

          <div class="formulario-row">
            <div class="formulario-group-half">
              <label for="NombreUsuario">Nombre Usuario:</label>
              <input type="text" name="NombreUsuario" placeholder="Ingrese su nombre de usuario" />
            </div>
            <div class="formulario-group-half">
              <label for="Contraseña">Contraseña:</label>
              <input type="password" name="Contraseña" placeholder="Ingrese su contraseña" />
            </div>
          </div>
          <div class="form-buttons">
            <button class="boton_registrarse" type="submit"><a href="../interfaz_usuario/confirmar_usuario.php"></a> Registrarse</button>

            <button class="boton_cancelar" type="button"><a href="../interfaz_usuario/iniciar_sesion.php">Cancelar</a></button>
          </div>
        </form>

</html>