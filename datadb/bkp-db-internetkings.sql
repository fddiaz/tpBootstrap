-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2023 a las 23:56:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `internetkings`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `cats` int(2) NOT NULL,
  `percent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `discounts`
--

INSERT INTO `discounts` (`id`, `cats`, `percent`) VALUES
(1, 1, 15),
(2, 2, 50),
(3, 3, 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minions`
--

CREATE TABLE `minions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `tithe_id` int(11) NOT NULL,
  `plus` decimal(15,2) NOT NULL,
  `tithe_multiplier` int(2) NOT NULL,
  `catsown` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Administrador', '\"Un gran poder conlleva una gran amsiedad.\"\r\n- Tío Ben'),
(2, 'Usuario', 'Un simple usuario.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tithes`
--

CREATE TABLE `tithes` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tithes`
--

INSERT INTO `tithes` (`id`, `title`, `amount`, `image`) VALUES
(1, 'Noble', '30000.00', './templates/media/img/tithe/noble.jpeg'),
(2, 'Caballero', '15000.00', './templates/media/img/tithe/caballero.png'),
(3, 'Campesino', '7000.00', './templates/media/img/tithe/campesino.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `disable` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `role_id`, `mail`, `password`, `disable`) VALUES
(1, 'admin', 1, 'administrador@thekingsoftheinternet.mau', '1234qwer', 0),
(2, 'user', 2, 'usuario@thekingsoftheinternet.mau', 'qwer1234', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `minions`
--
ALTER TABLE `minions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `minions_FK` (`tithe_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tithes`
--
ALTER TABLE `tithes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_FK` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `minions`
--
ALTER TABLE `minions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tithes`
--
ALTER TABLE `tithes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `minions`
--
ALTER TABLE `minions`
  ADD CONSTRAINT `minions_FK` FOREIGN KEY (`tithe_id`) REFERENCES `tithes` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
