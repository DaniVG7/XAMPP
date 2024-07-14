-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:23:07
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
-- Estructura de tabla para la tabla `GB_Libro`
--

CREATE TABLE `GB_Libro` (
  `idLibro` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `numPaginas` int(11) DEFAULT NULL,
  `idioma` varchar(50) NOT NULL,
  `añoPublicacion` year(4) NOT NULL,
  `idEstante` int(11) DEFAULT NULL,
  `idPropietario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `GB_Libro`
--

INSERT INTO `GB_Libro` (`idLibro`, `titulo`, `numPaginas`, `idioma`, `añoPublicacion`, `idEstante`, `idPropietario`) VALUES
(2, 'El nombre del viento', 880, 'Español', '2007', 1, 1),
(18, 'Tormenta de espadas', NULL, 'Inglés', '2000', NULL, 1),
(19, 'La sombra del viento', NULL, 'Español', '2003', NULL, 1),
(20, 'Las reliquias de la muerte', NULL, 'Inglés', '2006', NULL, 1),
(21, 'Se lo que estas pensando', NULL, 'Castellano', '2010', NULL, 1),
(22, 'Las gafas de la felicidad', NULL, 'Català', '2014', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GB_Libro`
--
ALTER TABLE `GB_Libro`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `GB_Libro_idEstante` (`idEstante`),
  ADD KEY `GB_Libro_idPropietario` (`idPropietario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `GB_Libro`
--
ALTER TABLE `GB_Libro`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GB_Libro`
--
ALTER TABLE `GB_Libro`
  ADD CONSTRAINT `GB_Libro_idEstante` FOREIGN KEY (`idEstante`) REFERENCES `GB_Estante` (`idEstante`),
  ADD CONSTRAINT `GB_Libro_idPropietario` FOREIGN KEY (`idPropietario`) REFERENCES `GB_Propietario` (`idPropietario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
