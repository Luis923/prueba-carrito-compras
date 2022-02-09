-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 15:01:41
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcarritocompras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedidos` int(4) UNSIGNED NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `direccion_entrega` varchar(50) NOT NULL,
  `detalle_direccion` varchar(50) NOT NULL,
  `referencias` varchar(30) NOT NULL,
  `telefono` int(9) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `metodo_pago` varchar(30) NOT NULL,
  `productos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedidos`, `distrito`, `direccion_entrega`, `detalle_direccion`, `referencias`, `telefono`, `fecha_entrega`, `metodo_pago`, `productos`) VALUES
(11, 'CALLAO', 'Asent. H. Jose Maria Arguedas Mz. X Lt.2', 'Asent. H. Jose Maria Arguedas Mz. X Lt.2', 'asdf', 123456987, '2022-02-25', 'Transferencia', '[{\"foto\":\"src/images/televisor.webp\",\"producto\":\"Televisor \",\"cantidad\":\"2\",\"precio\":\"1139.00\",\"total\":2278}]'),
(12, 'VILLA EL SALVADOR', 'Asent. H. Jose Maria Arguedas Mz. X Lt.2', 'Asent. H. Jose Maria Arguedas Mz. X Lt.2', 'parque', 987456311, '2022-02-17', 'Paypal', '[{\"foto\":\"src/images/televisor.webp\",\"producto\":\"Televisor \",\"cantidad\":\"2\",\"precio\":\"1139.00\",\"total\":2278}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproduct` int(4) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_description` varchar(50) NOT NULL,
  `precio` decimal(10,2) UNSIGNED NOT NULL,
  `detalle` longtext NOT NULL,
  `image` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproduct`, `product_name`, `product_description`, `precio`, `detalle`, `image`, `status`) VALUES
(1, 'Batidora', 'Batidora planetaria con potent motor FPS', '999.00', '', 'src/images/batidora.webp', 1),
(2, 'Televisor ', 'Televisor SAMSUNG LED 32 HD Smart TV UN3', '1139.00', '', 'src/images/televisor.webp', 1),
(3, 'Batidora ', 'Batidora De Inmersión FPSTHB261 Oster', '99.00', '', 'src/images/batidora2.webp', 1),
(4, 'Lavadora ', 'Lavadora LG Carga Superior 16Kg WT16BS6H', '2099.00', '', 'src/images/lavadora.webp', 1),
(5, 'Batidora', 'Batidora planetaria con potent motor FPS', '999.00', '', 'src/images/batidora.webp', 1),
(6, 'Televisor ', 'Televisor SAMSUNG LED 32 HD Smart TV UN3', '1139.00', '', 'src/images/televisor.webp', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedidos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproduct`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedidos` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproduct` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
