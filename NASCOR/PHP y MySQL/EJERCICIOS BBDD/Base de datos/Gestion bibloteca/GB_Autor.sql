-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:22:55
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
-- Estructura de tabla para la tabla `GB_Autor`
--

CREATE TABLE `GB_Autor` (
  `idAutor` int(11) NOT NULL,
  `generoLiterario` varchar(50) NOT NULL,
  `premios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `GB_Autor`
--

INSERT INTO `GB_Autor` (`idAutor`, `generoLiterario`, `premios`) VALUES
(1, '', NULL),
(2, 'Fantasía', 'The Reading List award for fantasy 2008');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GB_Autor`
--
ALTER TABLE `GB_Autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GB_Autor`
--
ALTER TABLE `GB_Autor`
  ADD CONSTRAINT `GB_Autor_idAutor` FOREIGN KEY (`idAutor`) REFERENCES `GB_Persona` (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
