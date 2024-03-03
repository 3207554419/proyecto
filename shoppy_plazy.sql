-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2024 a las 14:25:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shoppy_plazy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Id` int(10) NOT NULL,
  `IdRol` int(2) NOT NULL,
  `Nombres` varchar(40) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `NombreUsuario` varchar(40) NOT NULL,
  `Clave` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Idcliente` int(10) NOT NULL,
  `IdRol` int(2) DEFAULT NULL,
  `Nombres` varchar(40) DEFAULT NULL,
  `Apellidos` varchar(40) DEFAULT NULL,
  `NombreUsuario` varchar(11) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `Clave` varchar(100) DEFAULT NULL,
  `FechaNacimiento` int(11) DEFAULT NULL,
  `Genero` varchar(1) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `dateadd` datetime NOT NULL DEFAULT current_timestamp(),
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Idcliente`, `IdRol`, `Nombres`, `Apellidos`, `NombreUsuario`, `Correo`, `Clave`, `FechaNacimiento`, `Genero`, `Direccion`, `usuario_id`, `dateadd`, `estatus`) VALUES
(2344, 0, 'wgng', 'Romero', 'reyred', 'johanisromero38@gmail.com', '245', 0, 'f', 'fchdtht', 6457, '2024-02-13 08:46:39', 1),
(53722955, 1, 'Lorena', 'Hernandez', 'Lorena57', 'lorena57@gmail.com', '202cb962ac59075b964b07152d234b70', 11122005, 'F', 'calle 139#109-12', 0, '2023-12-06 07:15:51', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id` int(10) NOT NULL,
  `idProveedor` int(10) NOT NULL,
  `IdProductos` int(10) NOT NULL,
  `FechaCompra` int(10) NOT NULL,
  `CantidadProductos` int(4) NOT NULL,
  `PagoTotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseños`
--

CREATE TABLE `diseños` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `Id` int(10) NOT NULL,
  `IdProducto` int(10) NOT NULL,
  `CantidadCompra` int(4) NOT NULL,
  `NumeroFactura` int(10) NOT NULL,
  `SubTotal` int(8) NOT NULL,
  `Total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `Id` int(3) NOT NULL,
  `Nombre` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Categoria` int(3) NOT NULL,
  `id_talla` int(11) NOT NULL,
  `Color` int(3) NOT NULL,
  `Diseño` int(3) NOT NULL,
  `Material` int(3) NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Idcompra` int(10) NOT NULL,
  `PrecioCompra` int(8) NOT NULL,
  `PrecioVenta` int(3) NOT NULL,
  `imagen` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Id` int(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Contacto` varchar(30) NOT NULL,
  `TelefonoContacto` int(10) NOT NULL,
  `Correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `IdRol` int(2) NOT NULL,
  `Rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`IdRol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Supervisores'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `Id` int(11) NOT NULL,
  `Talla` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`Id`, `Talla`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Correo`, `usuario`, `clave`, `rol`, `estatus`) VALUES
(32456244, 'Lorena', 'Lorena22@gmail.com', 'Lorena57', '202cb962ac59075b964b07152d234b70', 1, 1),
(32456248, 'vanessa', 'vane584@gmail.com', 'vane123', '9f8e1dc0923dfdc1ee37b3ff8d6735cd', 2, 1),
(32456250, 'sofia', 'hdgd@gmail.com', 'ttyy5', 'f21b26f488cbceca3df0d6e56972110c', 2, 1),
(32456251, 'Roberto Ordoñez', 'eeeeeee@gmail.com', 'roberto44', '344ce11731eabe910ccd433aa9458db8', 1, 1),
(32456252, 'David ', 'david@gmail.com', 'david1', '5ff84c7646419ffeb65cb5625de99723', 3, 0),
(32456253, 'lola', 'lolahernandez@gmail.com', 'lola66', 'f2a5c6ddd68aed5a1a810295d8ea7c5c', 1, 0),
(32456254, 'Sara Suarez ', 'sara123@gmail.com', 'sr12', '827ccb0eea8a706c4c34a16891f84e7b', 3, 1),
(32456258, 'pedro', 'pedro@gmail.com', 'pdro21', '2be9bd7a3434f7038ca27d1918de58bd', 2, 1),
(32456259, 'marcos', 'marc@gmail.com', 'marc1234', '257a27036b614b8b35441be13b50d5c1', 3, 1),
(32456260, 'regina', 'regin@gmail.com', 're1234', '90bed51510b09ad5d325d8d174fa616c', 2, 1),
(32456261, 'sandra', 'sandravasquez@gmail.com', 'sanvasquez12', '5379884c5ec4e06879f7400fd40be0d9', 2, 1),
(32456262, 'silvia', 'sil1265@gmail.com', 's342', 'dcddb75469b4b4875094e14561e573d8', 2, 1),
(32456263, 'Luis', 'luis@hotmail.com', 'luis', '09ba3f0df1447f40e98674ba9d62c747', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `IdVenta` int(10) NOT NULL,
  `IdCliente` int(10) NOT NULL,
  `IdFactura` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `IdRol` (`IdRol`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Idcliente`),
  ADD KEY `IdRol` (`IdRol`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `idProveedor` (`idProveedor`),
  ADD KEY `IdProductos` (`IdProductos`);

--
-- Indices de la tabla `diseños`
--
ALTER TABLE `diseños`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `Categoria` (`Categoria`),
  ADD KEY `Diseño` (`Diseño`),
  ADD KEY `Material` (`Material`),
  ADD KEY `Color` (`Color`),
  ADD KEY `Idcompra` (`Idcompra`),
  ADD KEY `fk_talla` (`id_talla`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`IdVenta`),
  ADD KEY `IdCliente` (`IdCliente`),
  ADD KEY `IdFactura` (`IdFactura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32456264;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `roles` (`IdRol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `productos` (`Categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `colores`
--
ALTER TABLE `colores`
  ADD CONSTRAINT `colores_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `productos` (`Color`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`IdProductos`) REFERENCES `productos` (`Idcompra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `diseños`
--
ALTER TABLE `diseños`
  ADD CONSTRAINT `diseños_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `productos` (`Diseño`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `productos` (`Material`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_talla` FOREIGN KEY (`id_talla`) REFERENCES `tallas` (`Id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `roles` (`IdRol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`IdVenta`) REFERENCES `facturas` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`IdCliente`) REFERENCES `clientes` (`Idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
