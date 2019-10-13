-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2019 a las 05:31:24
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
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `idCiclo` int(10) NOT NULL,
  `idConeja` int(10) NOT NULL,
  `idConejo` int(10) NOT NULL,
  `estadoConeja` varchar(20) NOT NULL,
  `iniEstado_finCiclo` date NOT NULL,
  `iniCiclo` date NOT NULL
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
(7, 'pipipupu', 'M', 0, 2, 'NO', 2123123),
(8, 'La Loca', 'H', 0, 1, 'NO', 1231),
(9, 'saseeqw', 'M', 0, 1, 'NO', 123123),
(10, 'mas', 'H', 0, 1, 'NO', 1231),
(11, 'masConejos', 'H', 0, 1, 'NO', 12123),
(12, 'conejitos', 'H', 0, 1, 'NO', 987),
(13, 'qewqweqw', 'H', 0, 1, 'NO', 123123),
(14, '234234', 'H', 0, 1, 'NO', 6),
(15, 'aaaa', 'H', 0, 1, 'NO', 12312),
(16, '2323423', 'H', 0, 1, 'NO', 23234234),
(17, '12213', 'M', 0, 1, 'NO', 1111),
(18, '2rwerwe', 'M', 0, 1, 'NO', 1223123),
(19, '23234', 'H', 0, 1, 'NO', 234234),
(20, 'primer conejito', 'M', 0, 2, 'NO', 12312),
(21, 'otro conejo', 'M', 0, 2, 'NO', 10),
(22, 'qweqw', 'M', 0, 2, 'MUERTO', 5),
(23, 'otro que no', 'M', 0, 2, 'NO', 11),
(24, 'werwer', 'M', 0, 2, 'MUERTO', 12312),
(25, '123123', 'M', 0, 2, 'MUERTO', 123123),
(26, 'qweqwe', 'H', 0, 2, 'MUERTO', 123123),
(27, '2312312', 'H', 0, 2, 'MUERTO', 7),
(28, 'y otro mas', 'M', 0, 2, 'MUERTO', 12312),
(29, 'moto moto', 'M', 0, 2, 'NO', 9990),
(30, 'qweqw', 'H', 0, 2, 'MUERTO', 3),
(31, 'a ver', 'H', 0, 2, 'MUERTO', 1),
(32, 'conejito', 'M', 0, 2, 'NO', 12213),
(33, 'animalejo', 'H', 0, 2, 'MUERTO', 123),
(34, 'werwer', 'H', 0, 2, 'MUERTO', 12312),
(35, 'qweqwe', 'H', 0, 2, 'MUERTO', 32);

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
-- Estructura de tabla para la tabla `muerte`
--

CREATE TABLE `muerte` (
  `idDeath` int(10) NOT NULL,
  `idConejo` int(10) NOT NULL,
  `numeroPerdidas` int(10) NOT NULL,
  `RazonDeMuerte` varchar(50) NOT NULL,
  `tipoConejo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `muerte`
--

INSERT INTO `muerte` (`idDeath`, `idConejo`, `numeroPerdidas`, `RazonDeMuerte`, `tipoConejo`) VALUES
(1, 25, 1, 'ENFERMO', 'CONEJO'),
(2, 27, 1, 'VIEJO', 'CONEJO'),
(3, 34, 1, 'REGALO', 'CONEJO'),
(4, 31, 1, 'PERDIDO', 'CONEJO'),
(5, 30, 1, 'REGALO', 'CONEJO'),
(6, 22, 1, 'ENFERMO', 'CONEJO'),
(7, 24, 1, 'ENFERMO', 'CONEJO'),
(8, 26, 1, 'ENFERMO', 'CONEJO'),
(9, 35, 1, 'PERDIDO', 'CONEJO');

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
  ADD PRIMARY KEY (`idCAMADAS`),
  ADD KEY `idCONEJO` (`idCONEJO`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`idCiclo`),
  ADD KEY `idConeja` (`idConeja`,`idConejo`);

--
-- Indices de la tabla `conejos`
--
ALTER TABLE `conejos`
  ADD PRIMARY KEY (`idCONEJO`),
  ADD KEY `idUSR` (`idUSR`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`idGASTOS`);

--
-- Indices de la tabla `muerte`
--
ALTER TABLE `muerte`
  ADD PRIMARY KEY (`idDeath`),
  ADD KEY `idTipoConejo` (`idConejo`);

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
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `idCiclo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `conejos`
--
ALTER TABLE `conejos`
  MODIFY `idCONEJO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `idGASTOS` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `muerte`
--
ALTER TABLE `muerte`
  MODIFY `idDeath` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUSR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
