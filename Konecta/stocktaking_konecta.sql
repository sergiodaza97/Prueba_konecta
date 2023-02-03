-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2023 a las 23:38:26
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stocktaking_konecta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocktaking`
--

CREATE TABLE `stocktaking` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `value` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `url` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stocktaking`
--

INSERT INTO `stocktaking` (`id`, `name`, `reference`, `value`, `weight`, `category`, `stock`, `created_at`, `url`) VALUES
(2, 'Jugo de Mora', 'Jugo de mora en agua o leche', 2500, 2, 'Bebidas', 5, '2023-02-03', 'https://www.recetasparavivirmejor.com/wp-content/uploads/2021/02/recetas_para_vivir_mejor_jugo_de_mora_con_leche_batidos_2021-1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `stocktaking`
--
ALTER TABLE `stocktaking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `stocktaking`
--
ALTER TABLE `stocktaking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
