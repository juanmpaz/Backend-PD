-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2021 a las 06:17:20
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(256) NOT NULL,
  `precio` int(50) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `disponible`, `categoria`) VALUES
(1501, 'Big Hamburguesa', 'Hamburguesa triple carne con salsa barbacoa', 350, 1, 'Comida rapida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `dni` varchar(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `habilitado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`dni`, `nombre`, `apellido`, `email`, `password`, `habilitado`) VALUES
('26700362', 'Maria', 'Lopez', 'marialopez@gmail.com', '$2y$10$f3H9u5fbFgEM.Kng44M0IevmwwxL7HBeEepgAePaEqKq2xCPLaZ3C', 1),
('35936367', 'Juan', 'Paz', 'juanmpaz91@gmail.com', '$2y$10$y/EZ50Y2rW4ucg0PU7aO3eDxLATWgZVlxQGzwJp1.zazZ9Qf4eRRq', 1),
('38410236', 'Carlos', 'Perez', 'carlosperez@gmail.com', '$2y$10$M.CVTwY9uD1DnQN/XO/fweuT6YFE5ZmE.eC4T3kY0.KFy05QJlcSG', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
