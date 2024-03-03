<?php
include "../sistema/conexion.php";

// Consulta para obtener la lista de productos
$query = mysqli_query($conection, "SELECT * FROM productos");
$productos = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <?php include "includes/scripts.php"; ?>
    <title>Lista de Productos</title>
</head>

<body>
    <?php include "includes/header.php"; ?>
    <section id="container">

        <div class="formregister">
            <h1>Lista de Productos</h1>
            <a href="../sistema/registro_producto.php" class="btn_new">Crear Producto</a>
            <table>
                <thead>
                    <tr>
                        <th>ID Producto</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Talla</th>
                        <th>Color</th>
                        <th>Diseño</th>
                        <th>Material</th>
                        <th>Cantidad</th>
                        <th>ID Compra</th>
                        <th>Precio Compra</th>
                        <th>Precio Venta</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($productos as $producto) {
                        echo "<tr>";
                        echo "<td>{$producto['IdProducto']}</td>";
                        echo "<td>{$producto['Nombre']}</td>";
                        echo "<td>{$producto['Categoria']}</td>";
                        echo "<td>{$producto['Talla']}</td>";
                        echo "<td>{$producto['Color']}</td>";
                        echo "<td>{$producto['Diseño']}</td>";
                        echo "<td>{$producto['Material']}</td>";
                        echo "<td>{$producto['Cantidad']}</td>";
                        echo "<td>{$producto['Idcompra']}</td>";
                        echo "<td>{$producto['PrecioCompra']}</td>";
                        echo "<td>{$producto['PrecioVenta']}</td>";
                        echo "<td><img src='{$producto['imagen']}' alt='Imagen del Producto' style='width: 50px; height: 50px;'></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php include "includes/footer.php"; ?>
</body>

</html>