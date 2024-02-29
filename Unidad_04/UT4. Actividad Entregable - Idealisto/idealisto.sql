-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-02-2024 a las 16:28:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `idealisto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprados`
--

CREATE TABLE `comprados` (
  `usuario_comprador` int(5) DEFAULT NULL,
  `codigo_piso` int(11) DEFAULT NULL,
  `Precio_final` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `codigo_piso` int(11) NOT NULL,
  `calle` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `puerta` varchar(5) NOT NULL,
  `cp` int(11) NOT NULL,
  `metros` int(11) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `usuario_id` int(5) DEFAULT NULL,
  `vendido` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`codigo_piso`, `calle`, `numero`, `piso`, `puerta`, `cp`, `metros`, `precio`, `imagen`, `usuario_id`, `vendido`) VALUES
(1, 'Calle Serrano', 10, 1, 'A', 28001, 80, 150000, 'https://www.redpiso.es/upload/properties/thumbs/img_1145185_min.jpg', 1, 0),
(2, 'Avenida Diagonal', 20, 2, 'B', 8002, 100, 200000, 'https://www.aproperties.es/thumb?src=/media/properties/51644/51644_17077404078851527.jpg&w=640&h=480', 2, 1),
(3, 'Calle Gran Vía', 30, 3, 'C', 28003, 120, 250000, 'https://www.realia.es/storage/Blog/pisos-en-venta-en-madrid-1698921232IRQfz.jpg', 3, 0),
(4, 'Paseo de Gracia', 40, 4, 'D', 8004, 90, 180000, 'https://www.aproperties.es/thumb?src=/media/properties/49298/49298_16971520429466749.jpg&w=640&h=480', 4, 0),
(5, 'Calle Mayor', 50, 5, 'E', 28005, 110, 220000, 'https://www.bhhsspain.com/media/properties/7142/7142_16475329847905.jpg', 5, 1),
(6, 'Calle Alcalá', 60, 6, 'F', 28006, 95, 170000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 6, 0),
(7, 'Plaza de España', 70, 7, 'G', 28007, 105, 190000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 7, 0),
(8, 'Paseo del Prado', 80, 8, 'H', 28008, 115, 230000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 8, 0),
(9, 'Calle Valencia', 90, 9, 'I', 46009, 85, 160000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 9, 0),
(10, 'Calle Aragón', 100, 10, 'J', 50010, 125, 240000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 10, 0),
(11, 'Rambla Cataluña', 110, 11, 'K', 8011, 100, 200000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 11, 0),
(12, 'Calle del Arenal', 120, 12, 'L', 28012, 80, 150000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 12, 0),
(13, 'Calle Pelayo', 130, 13, 'M', 28013, 130, 260000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 13, 0),
(14, 'Calle Fuencarral', 140, 14, 'N', 28014, 95, 170000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 14, 0),
(15, 'Calle Goya', 150, 15, 'O', 28015, 105, 190000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 15, 0),
(16, 'Calle Preciados', 160, 16, 'P', 28016, 110, 220000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 16, 0),
(17, 'Calle Atocha', 170, 17, 'Q', 28017, 120, 250000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 17, 0),
(18, 'Calle del Carmen', 180, 18, 'R', 28018, 100, 200000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 18, 0),
(19, 'Calle Hortaleza', 190, 19, 'S', 28019, 125, 240000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 19, 0),
(20, 'Calle Velázquez', 200, 20, 'T', 28020, 90, 180000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 20, 0),
(21, 'Calle Sants', 210, 21, 'U', 8021, 115, 230000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 21, 0),
(22, 'Calle Bailén', 220, 22, 'V', 28022, 105, 190000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 22, 0),
(23, 'Calle Sagasta', 230, 23, 'W', 28023, 100, 200000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 23, 0),
(24, 'Calle Don Ramón de la Cruz', 240, 24, 'X', 28024, 120, 250000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 24, 0),
(25, 'Calle del Marqués de Urquijo', 250, 25, 'Y', 28025, 110, 220000, 'https://www.fincahogarinmobiliaria.es/images/venta-chalets-torrelavega.jpg', 25, 0),
(26, 'calle Triunfada', 123, 5, 'A', 33011, 144, 234000, 'imagen.jpeg', 2, 0),
(27, 'Calle de Prueba', 24, 5, 'C', 34958, 120, 340000, 'imagen.jpg', 2, 0),
(29, 'Potsdamerstrasse', 234234, 21, 'q', 1241243, 23424, 213424, 'wrdfqwf', 1, 0),
(30, 'Calle de prueba ', 32, 3, 'C', 33021, 120, 341201, 'image.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(5) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellidos` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `tipo_usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nombre`, `apellidos`, `email`, `password`, `tipo_usuario`) VALUES
(1, 'Adrian', 'Bourdelande Gonzalez', 'adrian@gmail.com', '4321', 'admin'),
(2, 'Vendedor', 'Uno', 'vendedoruno@gmail.com', '1234', 'vendedor'),
(3, 'Comprador', 'Uno', 'compradoruno@gmail.com', '1234', 'comprador'),
(10, 'Francisco', 'Bourdelande', 'fran@gmail.com', '1234', 'vendedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`codigo_piso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `codigo_piso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
