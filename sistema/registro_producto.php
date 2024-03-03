<?php
include "../sistema/conexion.php";

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['IdProducto']) || empty($_POST['Nombre']) || empty($_POST['Categoria']) || empty($_POST['Talla']) || empty($_POST['Color']) || empty($_POST['Diseño']) || empty($_POST['Material']) || empty($_POST['Cantidad']) || empty($_POST['Idcompra']) || empty($_POST['PrecioCompra']) || empty($_POST['PrecioVenta'])) {
        $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
    } else {
        $idProducto = $_POST['IdProducto'];
        $nombre = $_POST['Nombre'];
        $categoria = $_POST['Categoria'];
        $talla = $_POST['Talla'];
        $color = $_POST['Color'];
        $diseño = $_POST['Diseño'];
        $material = $_POST['Material'];
        $cantidad = $_POST['Cantidad'];
        $idcompra = $_POST['Idcompra'];
        $precioCompra = $_POST['PrecioCompra'];
        $precioVenta = $_POST['PrecioVenta'];

        // Verifica si la clave 'img' está presente en $_FILES antes de intentar acceder a ella
        if (isset($_FILES['img']['name'])) {
            $imagen = $_FILES['img']['name'];
            $ruta_temporal = $_FILES['img']['tmp_name'];
            $ruta_destino = "../sistema/img/productos/pantalones" . $imagen;
            move_uploaded_file($ruta_temporal, $ruta_destino);

            $query = mysqli_query($conection, "SELECT * FROM productos WHERE Nombre = '$nombre' OR Categoria = '$categoria'");

            $result = mysqli_fetch_array($query);

            if ($result > 0) {
                $alert = '<p class="msg_error">El producto ya existe.</p>';
            } else {
                $query_insert = mysqli_query($conection, "INSERT INTO productos (IdProducto,Nombre,Categoria,Talla,Color,Diseño,Material,Cantidad,Idcompra,PrecioCompra,PrecioVenta,Imagen) 
                VALUES ('$idProducto','$nombre', '$categoria','$talla','$color','$diseño','$material','$cantidad','$idcompra','$precioCompra','$precioVenta','$ruta_destino')");

                if ($query_insert) {
                    $alert = '<p class="msg_save">Producto creado correctamente.</p>';
                } else {
                    $alert = '<p class="msg_error">Error al crear el producto.</p>';
                }
            }
        } else {
            $alert = '<p class="msg_error">No se ha seleccionado ninguna imagen.</p>';
        }
    }
}
?>

<!-- Resto del código HTML -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/sistema/css/style.css">
    <?php include "../sistema/includes/scripts.php"; ?>
    <title>Registro Producto</title>
</head>

<body>
    <?php include "../sistema/includes/header.php"; ?>
    <section id="container">

        <div class="form_register">
            <h1>Registro Producto</h1>
            <hr>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

            <form action="" method="post" enctype="multipart/form-data">
                <label for=" IdProducto">id producto</label>
                <input type="text" name="IdProducto" id="IdProducto" placeholder="id del producto">
                <label for="Nombre">nombre</label>
                <input name="Nombre" id="Nombre" placeholder="nombre del producto"></input>
                <label for="Categoria">categoria</label>
                <input type="number" name="Categoria" id="Categoria" placeholder="categoria del producto">
                <label for="Talla">talla</label>
                <input type="number" name="Talla" id="Talla" placeholder="tallas disponibles">
                <label for="Color">color</label>
                <input type="text" name="Color" id="Color" placeholder="color del producto">
                <label for="Diseño">diseño</label>
                <input type="text" name="Diseño" id="Diseño" placeholder="diseño del producto">
                <label for="Material">material</label>
                <input type="text" name="Material" id="Material" placeholder="material del producto">
                <label for="Cantidad">cantidad</label>
                <input type="text" name="Cantidad" id="Cantidad" placeholder="cantidad del producto">
                <label for="Idcompra">idcompra</label>
                <input type="text" name="Idcompra" id="Idcompra" placeholder="idcompra del producto">
                <label for="PrecioCompra">precio compra</label>
                <input type="text" name="PrecioCompra" id="PrecioCompra" placeholder="precio compra del producto">
                <label for="PrecioVenta">precio venta</label>
                <input type="text" name="PrecioVenta" id="PrecioVenta" placeholder="precio venta del producto">
                <label for="img">imagen</label>
                <input type="file" name="img" accept="img/productos/pantalones">
                <input type="submit" value="Crear Producto" class="btn_save">
            </form>
        </div>
    </section>
    <?php include "../sistema/includes/footer.php"; ?>
</body>

</html>