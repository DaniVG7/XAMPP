-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:20:37
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
-- Estructura de tabla para la tabla `GA_Persona`
--

CREATE TABLE `GA_Persona` (
  `idPersona` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape1` varchar(100) NOT NULL,
  `ape2` varchar(100) DEFAULT NULL,
  `DNI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `GA_Persona`
--

INSERT INTO `GA_Persona` (`idPersona`, `nombre`, `ape1`, `ape2`, `DNI`) VALUES
(2, 'Borja', 'Mulleras', 'Vinzia', '43566645R'),
(21, 'Maia', 'Lorenzo', 'García', '37794495X'),
(52, 'Alberto', 'Vargas', 'García', '47732343C'),
(53, 'Arnau', 'Pérez', 'Muniesa', '23222211X'),
(54, 'Laura', 'Masquefa', 'Palá', '37783224X'),
(55, 'Marc', 'Sabata', 'Lara', '47777782S'),
(56, 'Laia', 'Guerra', 'Gracia', '477345532C'),
(57, 'Ivan', 'Herencia', 'Cabestany', '39448223S'),
(58, 'Marta', 'Valencia', 'Costa', '43365543D'),
(62, 'David', 'Marcó', 'Martinez', '43211334J'),
(70, 'Borja', 'Mulleras', 'Vinzia', '37794121X'),
(71, 'David', 'Alcolea', 'Martinez', '34343281T');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GA_Persona`
--
ALTER TABLE `GA_Persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `GA_Persona`
--
ALTER TABLE `GA_Persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
