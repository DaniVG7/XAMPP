-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:20:14
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
-- Estructura de tabla para la tabla `GA_Alu_Curso`
--

CREATE TABLE `GA_Alu_Curso` (
  `idAluCurso` int(11) NOT NULL,
  `idAlumno` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GA_Alu_Curso`
--
ALTER TABLE `GA_Alu_Curso`
  ADD PRIMARY KEY (`idAluCurso`),
  ADD UNIQUE KEY `idAlumno` (`idAlumno`,`idCurso`),
  ADD KEY `GA_Alu_Curso_idCurso` (`idCurso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `GA_Alu_Curso`
--
ALTER TABLE `GA_Alu_Curso`
  MODIFY `idAluCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GA_Alu_Curso`
--
ALTER TABLE `GA_Alu_Curso`
  ADD CONSTRAINT `GA_Alu_Curso_idAlumno` FOREIGN KEY (`idAlumno`) REFERENCES `GA_Alumno` (`idAlumno`),
  ADD CONSTRAINT `GA_Alu_Curso_idCurso` FOREIGN KEY (`idCurso`) REFERENCES `GA_Curso` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
