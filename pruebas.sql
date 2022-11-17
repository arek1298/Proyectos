-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 19:18:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gym`
--

CREATE TABLE `gym` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gym`
--

INSERT INTO `gym` (`id`, `email`, `name`) VALUES
(1, 'cesar@gmail.com', 'cesar'),
(2, 'javimtzflores3@gmail.com', 'arekjavi12'),
(3, 'arekflores123@gmail.com', 'ximena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `precio` varchar(100) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `precio`, `descripcion`, `imagen`) VALUES
(8, 'Xiaomi Redmi 10', '3500', 'EXCELENTE', '../fotos/redmi10.jpg'),
(9, 'SILLA', '600', 'EXCELENTE, COMODA', '../fotos/silla.jpg'),
(10, 'Laptop', '12800', 'Laptop Acer Gamer', '../fotos/laptop.jpeg'),
(11, 'Audifonos Gamer', '599 MXN', 'EXCELENTE', '../fotos/audifonos.jpeg'),
(12, 'Mouse Gamer', '359 MXN', 'Excelente para jugar', '../fotos/mouse.jpeg'),
(13, 'Mando Inhalámbrico PC', '150 MXN', 'Ideal para jugar', '../fotos/mando.jpeg'),
(14, 'Teclado Mecánico', '450 MXN', 'RGB', '../fotos/teclado.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(17, 'Arek', 'Martinez Flores', 'ark', '1234'),
(18, 'Javi', 'Flores', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gym`
--
ALTER TABLE `gym`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
