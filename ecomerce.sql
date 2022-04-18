

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `ecomerce`
--
CREATE DATABASE IF NOT EXISTS `ecomerce` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecomerce`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `Nombre`) VALUES
(1, 'Electrodomesticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Descripcion` text NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio_und` decimal(10,2) NOT NULL,
  `Imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `ID_Categoria`, `Nombre`, `Descripcion`, `Cantidad`, `Precio_und`, `Imagen`) VALUES
(1, 1, 'Artefacto', 'Es un artefacto', 1, '10.20', 'https://cdn.pixabay.com/photo/2018/02/16/02/03/pocket-watch-3156771__340.jpg'),
(3, 1, 'Licuadora', 'Es un artefacto', 1, '30.00', 'https://cdn.pixabay.com/photo/2012/04/25/00/54/blender-41486_960_720.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Pw` varchar(255) NOT NULL,
  `Rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Apellido`, `DNI`, `Celular`, `Correo`, `Pw`, `Rol`) VALUES
(4, 'Usuario', 'nuevo4', '12345678', '10', 'correo1@mail.com', '$2y$10$OeWiWA5VyknWfvCr40Xvre5SM9k6Tf5HuJwhqPmT5hXN10GG1dKnK', ''),
(5, 'Usuario', '1', '12345678', '12', 'gmail@mail.com', '$2y$10$8PL.ZFMxIAbr0nQUf9GHp.uZ.yZbh9s4XnrEChyO/Z0KgMc6zfRxu', ''),
(6, 'Usuario', '10', '12345678', '100', 'hola100@mail.com', '$2y$10$HXqF7wjg8Drrx3YphuoMyOJoJ9nFUBuNqx4YIMyBfEJkJwUsDmk7i', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `Fecha` date NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID`, `ID_Cliente`, `Monto`, `Fecha`, `Estado`) VALUES
(2, 6, '30.60', '2022-04-17', 'Pendiente'),
(3, 6, '40.80', '2022-04-17', 'Pendiente'),
(4, 6, '40.90', '2022-04-17', 'Pendiente'),
(5, 6, '51.00', '2022-04-17', 'Pendiente'),
(6, 4, '10.20', '2022-04-17', 'Pendiente'),
(10, 4, '10.00', '2022-04-17', 'Pendiente'),
(11, 4, '10.00', '2022-04-17', 'Pendiente'),
(12, 4, '10.00', '2022-04-17', 'Pendiente'),
(13, 4, '10.00', '2022-04-17', 'Pendiente'),
(14, 4, '10.00', '2022-04-17', 'Pendiente'),
(15, 4, '10.00', '2022-04-17', 'Pendiente'),
(16, 4, '10.00', '2022-04-17', 'Pendiente'),
(17, 4, '10.00', '2022-04-17', 'Pendiente'),
(18, 4, '10.00', '2022-04-17', 'Pendiente'),
(19, 4, '10.00', '2022-04-17', 'Pendiente'),
(20, 4, '10.00', '2022-04-17', 'Pendiente'),
(21, 4, '10.00', '2022-04-17', 'Pendiente'),
(22, 4, '10.00', '2022-04-17', 'Pendiente'),
(23, 4, '10.00', '2022-04-17', 'Pendiente'),
(24, 4, '10.00', '2022-04-17', 'Pendiente'),
(25, 4, '10.00', '2022-04-17', 'Pendiente'),
(26, 4, '10.00', '2022-04-17', 'Pendiente'),
(27, 4, '10.00', '2022-04-17', 'Pendiente'),
(28, 4, '10.00', '2022-04-17', 'Pendiente'),
(29, 4, '10.00', '2022-04-17', 'Pendiente'),
(30, 4, '10.00', '2022-04-17', 'Pendiente'),
(31, 4, '10.00', '2022-04-17', 'Pendiente'),
(32, 4, '10.00', '2022-04-17', 'Pendiente'),
(33, 4, '10.00', '2022-04-17', 'Pendiente'),
(34, 4, '10.00', '2022-04-17', 'Pendiente'),
(35, 4, '10.00', '2022-04-17', 'Pendiente'),
(36, 4, '10.00', '2022-04-17', 'Pendiente'),
(37, 4, '10.00', '2022-04-17', 'Pendiente'),
(38, 4, '10.00', '2022-04-17', 'Pendiente'),
(39, 4, '10.00', '2022-04-17', 'Pendiente'),
(41, 5, '20.40', '2022-04-17', 'Pendiente'),
(42, 5, '20.40', '2022-04-17', 'Pendiente'),
(43, 5, '20.40', '2022-04-17', 'Pendiente'),
(44, 5, '30.60', '2022-04-18', 'Pendiente'),
(45, 4, '10.20', '2022-04-18', 'Pendiente'),
(46, 5, '20.40', '2022-04-18', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_productos`
--

CREATE TABLE `venta_productos` (
  `ID` int(11) NOT NULL,
  `ID_Venta` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `Cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta_productos`
--

INSERT INTO `venta_productos` (`ID`, `ID_Venta`, `ID_Producto`, `Cantidad`) VALUES
(1, 4, 1, 1),
(2, 4, 1, 1),
(3, 4, 1, 1),
(4, 4, 1, 1),
(5, 5, 1, 1),
(6, 5, 1, 1),
(7, 5, 1, 1),
(8, 5, 1, 1),
(9, 5, 1, 1),
(10, 6, 1, 1),
(31, 42, 1, 1),
(32, 42, 1, 1),
(33, 43, 1, 1),
(34, 43, 1, 1),
(35, 44, 1, 1),
(36, 44, 1, 1),
(37, 44, 1, 1),
(38, 45, 1, 1),
(39, 46, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Cliente` (`ID_Cliente`);

--
-- Indices de la tabla `venta_productos`
--
ALTER TABLE `venta_productos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Venta` (`ID_Venta`),
  ADD KEY `ID_Producto` (`ID_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `venta_productos`
--
ALTER TABLE `venta_productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_Cliente`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_productos`
--
ALTER TABLE `venta_productos`
  ADD CONSTRAINT `venta_productos_ibfk_1` FOREIGN KEY (`ID_Venta`) REFERENCES `ventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_productos_ibfk_2` FOREIGN KEY (`ID_Producto`) REFERENCES `productos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
