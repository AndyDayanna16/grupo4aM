-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2025 a las 17:11:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fruteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutas`
--

CREATE TABLE `frutas` (
  `id` int(11) NOT NULL,
  `Fruta` varchar(25) NOT NULL,
  `Color` text NOT NULL,
  `Sabor` text NOT NULL,
  `Temporada` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frutas`
--

INSERT INTO `frutas` (`id`, `Fruta`, `Color`, `Sabor`, `Temporada`) VALUES
(1, 'Manzana', 'rojo/verde', 'dulce/acido', 'otoño/invierno'),
(2, 'platano', 'amarillo', 'dulce', 'todo el año'),
(3, 'fresa', 'roja', 'dulce/acido', 'primavera'),
(4, 'naranja', 'naranja', 'dulce/acido', 'invierno'),
(5, 'uva', 'verde/purpura', 'dulce', 'verano'),
(6, 'piña', 'amarillo', 'dulce/acido', 'todo el año'),
(7, 'mango', 'amarillo/naranja', 'dulce', 'verano'),
(8, 'sandia', 'verde/rosa', 'dulce', 'verano'),
(9, 'kiwi', 'marron/verde', 'acido/dulce', 'invierno/primavera'),
(10, 'pera', 'verde/amarillo', 'dulce', 'otoño/invierno'),
(11, 'durazno', 'amarillo/rosa', 'dulce/acido', 'verano');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `frutas`
--
ALTER TABLE `frutas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `frutas`
--
ALTER TABLE `frutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
