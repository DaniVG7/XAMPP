-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:23:15
-- Versión del servidor: 10.5.8-MariaDB-1:10.5.8+maria~buster
-- Versión de PHP: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nascor04_bddCurso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GB_Propietario`
--

CREATE TABLE `GB_Propietario` (
  `idPropietario` int(11) NOT NULL,
  `numeroSocio` int(11) NOT NULL,
  `libroActual` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `GB_Propietario`
--

INSERT INTO `GB_Propietario` (`idPropietario`, `numeroSocio`, `libroActual`) VALUES
(1, 12345678, 'El nombre del Viento');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GB_Propietario`
--
ALTER TABLE `GB_Propietario`
  ADD PRIMARY KEY (`idPropietario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GB_Propietario`
--
ALTER TABLE `GB_Propietario`
  ADD CONSTRAINT `GB_Propietario_idPropietario` FOREIGN KEY (`idPropietario`) REFERENCES `GB_Persona` (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
