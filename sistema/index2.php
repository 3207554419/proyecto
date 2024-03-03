<?php

$alert = "";
session_start();

if (!empty($_SESSION['active'])) {
    header('location: sistema/');
} else {

    if (!empty($_POST)) {
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = 'Ingrese su usuario y su clave';
        } else {

            require_once "../sistema/conexion.php";

            $user = mysqli_real_escape_string($conection, $_POST['usuario']);
            $pass = md5(mysqli_real_escape_string($conection, $_POST['clave']));




            $query = mysqli_query($conection, "SELECT * FROM clientes WHERE NombreUsuario= '$user' AND clave = '$pass'");
            $result = mysqli_num_rows($query);


            if ($result > 0) {
                $data = mysqli_fetch_array($query);

                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['idCliente'];
                $_SESSION['rol'] = $data['idRol'];
                $_SESSION['names'] = $data['Nombres'];
                $_SESSION['lastnames'] = $data['Apellidos'];
                $_SESSION['user'] = $data['NombreUsuario'];
                $_SESSION['email'] = $data['Correo'];
                $_SESSION['password'] = $data['Clave'];

                header('location: sistema/');
            } else {
                $alert = 'El usuario o la clave son incorrectos';
                session_destroy();
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../img/logo.png" type="image/png">
<link rel="stylesheet" href="css/style.css">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

</head>

    <body>

    <section id="container_sistema">

        <form action="" method="post">
            <h3>Iniciar Sesión</h3>
            <img src="../img/logo.png" alt="Login">

            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="clave" placeholder="Contraseña">
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            <input type="submit" value="Ingresar">
            <center><a href="../interfaz_usuario/iniciar_sesion.php">Cancelar</a></center>
           
        </form>

    </section>




    </body>

</html>
<!-- <input type="submit" -->