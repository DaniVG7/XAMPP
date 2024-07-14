-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 13:15:52
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `fecha_conexion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `password`, `valor`, `fecha_conexion`) VALUES
('albertovargas', '6f0e40fdd54d792d01d7ada08858f42a', 'inojh2gvnpa0bh5ahcujdumbpe', '2023-10-11 00:00:00'),
('danielvargas', '87afc9109595a7111b19ed57c77d7542', 'a79aagfh60d8ko4gd2lmt35s5a', '2023-10-13 11:16:52'),
('tonacovargas', 'b1379118cabf0ee7aa44c4a0b708c019', 'a79aagfh60d8ko4gd2lmt35s5a', '2023-10-13 10:11:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
