-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:22:59
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
-- Estructura de tabla para la tabla `GB_Autor_Libro`
--

CREATE TABLE `GB_Autor_Libro` (
  `idAutorLibro` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `GB_Autor_Libro`
--

INSERT INTO `GB_Autor_Libro` (`idAutorLibro`, `idLibro`, `idAutor`) VALUES
(1, 2, 2),
(2, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GB_Autor_Libro`
--
ALTER TABLE `GB_Autor_Libro`
  ADD PRIMARY KEY (`idAutorLibro`),
  ADD KEY `GB_Autor_Libro_idLibro` (`idLibro`),
  ADD KEY `GB_Autor_Libro_idAutor` (`idAutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `GB_Autor_Libro`
--
ALTER TABLE `GB_Autor_Libro`
  MODIFY `idAutorLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GB_Autor_Libro`
--
ALTER TABLE `GB_Autor_Libro`
  ADD CONSTRAINT `GB_Autor_Libro_idAutor` FOREIGN KEY (`idAutor`) REFERENCES `GB_Autor` (`idAutor`),
  ADD CONSTRAINT `GB_Autor_Libro_idLibro` FOREIGN KEY (`idLibro`) REFERENCES `GB_Libro` (`idLibro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
