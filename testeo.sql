-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2019 a las 03:19:32
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testeo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombres`
--

CREATE TABLE `nombres` (
  `idNombre` int(10) NOT NULL,
  `nombreNombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nombres`
--

INSERT INTO `nombres` (`idNombre`, `nombreNombre`) VALUES
(1, 'yolo'),
(2, 'yolin'),
(3, 'que hay'),
(4, 'por que tan solito'),
(5, 'ni yo se que esta pasando'),
(6, 'que whay'),
(7, 'lol'),
(8, 'supa cool'),
(9, 'hi'),
(10, 'pues por que no'),
(11, 'yo tambien tengo una relacion'),
(12, 'y trabajo a jornada completa'),
(13, 'conejito'),
(14, 'momazo'),
(15, 'ijole bro'),
(16, 'ha'),
(17, 'holoa bro'),
(18, 'berth'),
(19, 'como estas'),
(20, 'bunny'),
(21, ''),
(22, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nombres`
--
ALTER TABLE `nombres`
  ADD PRIMARY KEY (`idNombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nombres`
--
ALTER TABLE `nombres`
  MODIFY `idNombre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
