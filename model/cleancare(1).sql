-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2018 a las 17:53:14
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cleancare`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `pk_producto` int(11) NOT NULL,
  `nombre_p` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_p` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`pk_producto`, `nombre_p`, `descripcion_p`) VALUES
(21, 'Cloro', 'Para limpiar superficies muy dificiles'),
(25, 'Mistolin', 'Limpiador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `pk_sucursal` int(11) NOT NULL,
  `nombre_s` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_s` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_S` int(11) NOT NULL,
  `latitud` int(11) NOT NULL,
  `longitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_accesos`
--

CREATE TABLE `tipos_accesos` (
  `pk_acceso` int(11) NOT NULL,
  `tipo_usuario` varchar(32) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipos_accesos`
--

INSERT INTO `tipos_accesos` (`pk_acceso`, `tipo_usuario`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `pk_usuario` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(12) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `password_2` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fk_acceso` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`pk_usuario`, `email`, `nombre`, `apellido`, `telefono`, `usuario`, `password`, `password_2`, `fk_acceso`) VALUES
(1, '1@mail.com', '1', '1', 1, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 1),
(6, '5@mail.com', '5', '5', 5, '5', 'e4da3b7fbbce2345d7772b0674a318d5', 'e4da3b7fbbce2345d777', 2),
(7, 'Critijo@gmail.com', 'Christopher', 'Chirino', 2147483647, 'Christopher', 'f148ffc57798e3d5998030bdcaec0842', 'f148ffc57798e3d59980', 1),
(8, '2@mail', '2', '2', 2, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'c81e728d9d4c2f636f06', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pk_producto`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`pk_sucursal`);

--
-- Indices de la tabla `tipos_accesos`
--
ALTER TABLE `tipos_accesos`
  ADD PRIMARY KEY (`pk_acceso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`pk_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `fk_acceso` (`fk_acceso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `pk_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `pk_sucursal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_accesos`
--
ALTER TABLE `tipos_accesos`
  MODIFY `pk_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `pk_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
