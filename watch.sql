-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 03:58:07
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `watch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `correoUsuario` varchar(50) NOT NULL,
  `numTarjeta` int(16) NOT NULL,
  `titular` varchar(100) NOT NULL,
  `cvv` int(3) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `fechaVen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `correo` varchar(50) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `nombre`, `apellidos`, `contrasenia`, `deleted_at`) VALUES
('adrian@gmail.com', 'Adrian', 'Vazquez Sanchez', 'qawsedrf', NULL),
('Andre@gmail.com', 'Andre', 'Vazquez Sanchez', 'qawsedrf', NULL),
('mariano117a@watch.com', 'Adrian', 'Vazquez Sanchez', 'QQWREWQRQWERT', NULL),
('Sandra@gmail.com', 'Sandra', 'Vazquez Sanchez', 'qawsedrf', NULL),
('yoad@gmail.com', 'Yoad', 'Vazquez Sanchez', 'qawsedrf', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
