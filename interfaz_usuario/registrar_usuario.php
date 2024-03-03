<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styles.css"> 
  <link rel="icon" href="../img/logo.png" type="image/png">
  <title>Registro Usuario</title>
</head>
<body class="body_registrar_usuario">

<div class="register-container">
  <div class="register-image">
    <img src="/img/iniciosesionnnn.jpg" alt="">
  </div>
  <div class="login-form">
    <div class="close-button">
      <a href="../interfaz_usuario/iniciar_sesion.php"><img src="/img/cerrar X.png" alt=""></a>
    </div>
  <div class="register-form">
    <div class="logo-and-title">
      <img src="/img/logo.png" alt="" class="register-logo">
      <h2>Registro Usuario</h2>
    </div>
    <form class="form_registrar_usuario">
      <div class="formulario-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" placeholder="Ingrese su nombre" />
      </div>
      <div class="formulario-group">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" placeholder="Ingrese su apellido" />
      </div>
      <div class="formulario-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" placeholder="Ingrese su correo electrónico" />
      </div>
      <div class="formulario-row">
        <div class="formulario-group-half">
          <label for="telefono">Teléfono:</label>
          <input type="number" id="telefono" placeholder="Ingrese su teléfono" />
        </div>
        <div class="formulario-group-half">
          <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
          <input type="date" id="fecha_nacimiento" />
        </div>
      </div>
      <div class="formulario-row">
        <div class="formulario-group-half">
          <label for="nombre_usuario">Nombre Usuario:</label>
          <input type="text" id="nombre_usuario" placeholder="Ingrese su nombre de usuario" />
        </div>
        <div class="formulario-group-half">
          <label for="contrasena">Contraseña:</label>
          <input type="password" id="contrasena" placeholder="Ingrese su contraseña" />
        </div>
      </div>
      <div class="form-buttons">
        <button class="boton_registrarse" type="submit">Registrarse</button>
        <a class="boton_cancelar" href="../interfaz_usuario/iniciar_sesion.php">Cancelar</a>
      </div>
    </form>
  </div>
</div>
