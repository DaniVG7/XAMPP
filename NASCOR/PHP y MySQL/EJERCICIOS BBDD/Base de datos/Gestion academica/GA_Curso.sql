-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:20:32
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
-- Estructura de tabla para la tabla `GA_Curso`
--

CREATE TABLE `GA_Curso` (
  `idCurso` int(11) NOT NULL,
  `nombreCurso` varchar(50) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `numHoras` int(11) NOT NULL,
  `idAula` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `GA_Curso`
--

INSERT INTO `GA_Curso` (`idCurso`, `nombreCurso`, `fechaInicio`, `fechaFinal`, `numHoras`, `idAula`, `idProfesor`) VALUES
(66, 'HTMX', NULL, NULL, 400, 2, 55),
(74, 'Swift', '2023-12-01', '2024-04-01', 400, 3, 21),
(78, 'C #', NULL, NULL, 280, 1, 62),
(79, 'PHP y MySQL', NULL, NULL, 280, 2, 70),
(80, 'JavaScript', '2023-12-01', NULL, 380, 1, 70),
(81, 'COBOL', '2024-04-01', '2024-08-01', 400, 3, 71);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GA_Curso`
--
ALTER TABLE `GA_Curso`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `GA_Curso_idAula` (`idAula`),
  ADD KEY `GA_Curso_idProfesor` (`idProfesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `GA_Curso`
--
ALTER TABLE `GA_Curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GA_Curso`
--
ALTER TABLE `GA_Curso`
  ADD CONSTRAINT `GA_Curso_idAula` FOREIGN KEY (`idAula`) REFERENCES `GA_Aula` (`idAula`),
  ADD CONSTRAINT `GA_Curso_idProfesor` FOREIGN KEY (`idProfesor`) REFERENCES `GA_Profesor` (`idProfesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
