-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2019 a las 07:39:41
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conejos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camadas`
--

CREATE TABLE `camadas` (
  `idCAMADAS` int(10) NOT NULL,
  `numerodeCAMADAS` int(5) NOT NULL,
  `idCONEJO` int(10) NOT NULL,
  `numerodconejosCAMADAS` int(10) NOT NULL,
  `tiempodvidaCAMADAS` int(10) NOT NULL,
  `preciodventaCAMADAS` int(10) NOT NULL,
  `diaNacimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conejos`
--

CREATE TABLE `conejos` (
  `idCONEJO` int(20) NOT NULL,
  `nombreCONEJO` varchar(50) NOT NULL,
  `sexoCONEJO` varchar(2) NOT NULL,
  `camadasCONEJO` int(10) NOT NULL,
  `idUSR` int(10) NOT NULL,
  `estadoCONEJO` varchar(20) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conejos`
--

INSERT INTO `conejos` (`idCONEJO`, `nombreCONEJO`, `sexoCONEJO`, `camadasCONEJO`, `idUSR`, `estadoCONEJO`, `precio`) VALUES
(1, 'pipipupu', '0', 0, 1, 'NO', 15),
(2, 'pipipupu2', '0', 0, 1, 'NO', 15),
(3, 'pipipupu2', '0', 0, 1, 'NO', 15),
(4, 'qweqwe', '0', 0, 1, 'NO', 234234),
(5, 'jorgen2', 'M', 0, 1, 'NO', 234117),
(6, 'no aun no', 'H', 0, 1, 'NO', 234063),
(7, 'pipipupu', 'M', 0, 2, 'NO', 2123123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `idGASTOS` int(10) NOT NULL,
  `nombreGASTOS` varchar(50) NOT NULL,
  `costoGASTOS` int(10) NOT NULL,
  `cantidadGASTOS` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUSR` int(10) NOT NULL,
  `nombreUSR` varchar(50) NOT NULL,
  `passUSR` varchar(50) NOT NULL,
  `correoUSR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUSR`, `nombreUSR`, `passUSR`, `correoUSR`) VALUES
(1, 'Antonio Islas', '12345', 'a@gmail.com'),
(2, 'Gregorio', '12345', 'g@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camadas`
--
ALTER TABLE `camadas`
  ADD PRIMARY KEY (`idCAMADAS`);

--
-- Indices de la tabla `conejos`
--
ALTER TABLE `conejos`
  ADD PRIMARY KEY (`idCONEJO`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`idGASTOS`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUSR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camadas`
--
ALTER TABLE `camadas`
  MODIFY `idCAMADAS` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `conejos`
--
ALTER TABLE `conejos`
  MODIFY `idCONEJO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `idGASTOS` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUSR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
