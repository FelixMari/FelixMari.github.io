-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:36:35
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TiendaOnline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(2, 'telefono', 1500, 'calidad precio', 'rojo', 20, 'semsang', '6 x 3'),
(3, 'otro telefono', 3000, 'feo y roto', 'verde caca', 20000, 'aifon', '7 x 4'),
(4, 'telefono de teclas', 700, 'bonito', 'rosa', 2, 'pinkberry', '4 x 3'),
(5, 'computadora ', 4444, 'grande y rara', 'negro', 20, 'tecso', '10 x 8'),
(6, 'computadora numero dos', 777, 'fea y rota', 'rojo', 777777, 'manzana', '15 x 9'),
(7, 'galletas', 80, 'es magica', 'cafe', 2, 'galletas', '2 x 2'),
(8, 'galleta buena', 20, 'esta buena', 'blanco', 10, 'peras', '2 x 2'),
(9, 'champu', 300, 'esta cariñoso', 'blanco', 40, 'ogy', '600'),
(10, 'otro champu', 70, 'esta barato', 'rosa', 500000, 'caspacero', '500'),
(11, 'bebida rica', 38, 'energetica', 'negro', 4000000, 'manster', '400');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
