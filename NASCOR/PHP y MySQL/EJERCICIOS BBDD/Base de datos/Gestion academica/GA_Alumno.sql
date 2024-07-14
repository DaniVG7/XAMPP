-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:20:01
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
-- Estructura de tabla para la tabla `GA_Alumno`
--

CREATE TABLE `GA_Alumno` (
  `idAlumno` int(11) NOT NULL,
  `estudios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `GA_Alumno`
--

INSERT INTO `GA_Alumno` (`idAlumno`, `estudios`) VALUES
(52, 'Master'),
(53, 'Universitarios'),
(54, 'Formacion profesional'),
(56, 'Universitarios'),
(57, 'Formacion profesional'),
(58, 'Formacion profesional');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GA_Alumno`
--
ALTER TABLE `GA_Alumno`
  ADD PRIMARY KEY (`idAlumno`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GA_Alumno`
--
ALTER TABLE `GA_Alumno`
  ADD CONSTRAINT `GA_Alumno_idAlumno` FOREIGN KEY (`idAlumno`) REFERENCES `GA_Persona` (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
