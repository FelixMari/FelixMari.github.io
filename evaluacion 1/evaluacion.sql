-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 01:56:28
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Ubicacion` varchar(200) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Sexo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombre`, `Ubicacion`, `Telefono`, `Correo`, `Fecha_Nacimiento`, `Sexo`) VALUES
(1, 'Felix Gastelum', 'Culiacan Sinaloa, Solidaridad 2030', '6677889900', 'felix22@hotmail.com', '1997-07-10', 1),
(2, 'Bella Alvarez', 'Culiacan Sinaloa, Infonavit 9089', '6674567890', 'bellota99@gmail.com', '1992-12-31', 2),
(3, 'Arturo Perez', 'Culiacan Sinaloa, Manaslu 7890', '1234567890', 'arthurr34@hotmail.com', '2000-03-20', 1),
(4, 'Elizabeth Medina', 'Culiacan Sinaloa, Carrazco 2020', '6677554409', 'bety123@gmail.com', '2001-01-03', 2),
(5, 'Luis Ramos', 'Culiacan Sinaloa, plompo 2043', '6678512094', 'pamplinas0@gmail.com', '2003-06-29', 1),
(6, 'jungkook jeon', 'busan corea, 56748', '5556667890', 'yungcok@hotmail.com', '1997-09-12', 1),
(7, 'kim seok jin', 'seoul corea, 78956', '12556783349', 'wordwildhandsome92@gmail.com', '1992-12-04', 1),
(8, 'kim namjoon', 'seoul corea, 999000', '5547389120', 'NamJoon13@gmail.com', '1994-09-02', 1),
(9, 'kim taehyung', 'busan corea, 12345', '67845612334', 'tannies99@hotmail.com', '1995-12-30', 1),
(10, 'min yoongi', 'corea del sur, 7869', '8930678278', 'yoonie56@gmail.com', '1993-03-09', 1),
(11, 'jung hoseok ', 'corea del sur, 098890', '1234561232', 'imyourhope95@gmail.com', '1995-02-18', 1),
(12, 'park jimin', 'busan corea, 7562', '6573829045', 'friends45@gmail.com', '1995-10-13', 1),
(13, 'lucas tang', 'taiwan, 76853', '9076839465', 'lucashandsome22@gmail.com', '1997-09-05', 1),
(14, 'mabafe de kim', 'guasave sinaloa, 783484', '6688546720', 'magubafe888@hotmail.com', '2012-12-12', 2),
(15, 'anhia ernes', 'culiacan sinaloa, 2936', '6654281900', 'kimseok12@gmail.com', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Precio` double NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Existencia` int(11) NOT NULL,
  `Tamaño` varchar(30) NOT NULL,
  `Especificaciones` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Nombre`, `Precio`, `Color`, `Existencia`, `Tamaño`, `Especificaciones`) VALUES
(1, 'libro dce terror', 200, 'azul', 564789, 'pequeño', 'no es extenso'),
(2, 'muñeca de hello kitty', 150, 'rosa', 3000, 'grande', 'hermosa para regalo de cumpleaños'),
(3, 'computadora vieja', 5, 'negro', 1, 'mediano', 'poco uso, virus'),
(4, 'reloj ', 34455, 'rojo', 30, 'moderable', 'es de marca, nuevo y lujoso'),
(5, 'pastel', 300, 'del que guste', 100000, 'de todos', 'muy buenos, dulces y salados'),
(6, 'pantalones', 500, 'azul', 95786, '3579', 'amoldable, comodo'),
(7, 'usb con virus', 3, 'verde', 2, 'chiquito', 'tiene virus'),
(8, 'pastas', 15, 'amarillo', 20202, 'medianas', 'integrales, llenadoras'),
(9, 'otro pastel', 400, 'rosa', 34, 'grandes', 'son deliciosos y bonitos'),
(10, 'lentes', 13, 'rojos', 2, 'medianos', 'mucho aumento, mejora tu vista'),
(11, 'teclado gamer', 7777, 'de todos', 1, 'grandote', 'juegas muy bien cod'),
(12, 'camisa', 123, 'amarilla', 3, 'todos', 'esta en mal uso '),
(13, 'torta', 50, 'cafe', 868, 'bueno', 'de cochinita'),
(14, 'raton', 2445, 'azul', 756, 'pequeño', 'muy fluido, gamer '),
(15, 'sueter', 789, 'morado', 67895, 'de todos', 'son muy comodos y agradables');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
