-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2017 a las 05:38:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project_iw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clients`
--

CREATE TABLE `Clients` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Clients`
--

INSERT INTO `Clients` (`id`, `Name`, `Email`, `Password`, `created_at`, `updated_at`, `Status`) VALUES
(1, 'Erick', 'Erick', '123123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'Ramon', 'Ramon', '123123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Hector', 'Hector', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Employees`
--

CREATE TABLE `Employees` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Employees`
--

INSERT INTO `Employees` (`id`, `Name`, `Email`, `Password`, `Role`, `created_at`, `updated_at`, `Status`) VALUES
(1, 'empleado', 'empleado', 'empleado', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'empleado2', 'empleado2', 'empleado2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `idEmployee` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idServices` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Orders`
--

INSERT INTO `Orders` (`id`, `idAdmin`, `idEmployee`, `idClient`, `idServices`, `Description`, `created_at`, `updated_at`, `Status`) VALUES
(1, 1, 1, 1, 1, '', '2017-05-01 00:00:00', '2017-05-24 03:19:52', 1),
(2, 2, 2, 2, 2, '', '2017-05-01 00:00:00', '2017-05-24 03:20:09', 2),
(3, 3, 2, 2, 1, '', '2017-05-01 00:00:00', '2017-05-09 00:00:00', 3),
(4, 1, 2, 1, 2, '', '2017-05-16 00:00:00', '2017-05-18 00:00:00', 2),
(5, 1, 1, 1, 1, '1', '2017-05-24 02:26:32', '2017-05-24 02:26:32', 1),
(6, 1, 1, 1, 1, 'Hola', '2017-05-24 02:27:27', '2017-05-24 02:27:27', 1),
(7, 1, 1, 1, 1, 's', '2017-05-24 02:28:00', '2017-05-24 02:28:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Services`
--

CREATE TABLE `Services` (
  `id` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Services`
--

INSERT INTO `Services` (`id`, `Type`) VALUES
(1, 'Equipo de computo'),
(2, 'Mantenimiento ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Status`
--

CREATE TABLE `Status` (
  `id` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Status`
--

INSERT INTO `Status` (`id`, `Status`) VALUES
(1, 'Pendiente'),
(2, 'En proceso'),
(3, 'Finalizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ramon Quiñonez Castro', 'q.castro1655@gmail.com', '$2y$10$/Rm/i6/SQHm5GwgVVLnHrO79xk/YTLobho63ZLzbW4Z0WoVNYdeTm', 'abrF7ZZlkywjOCrtxcz7AuvIydvdaNw1lEWg9p8hSGoinEYIkCMPrx7naDuC', '2017-04-07 01:26:50', '2017-05-24 05:56:56', 0),
(2, 'Chamito', 'chamito@chamito.com', '$2y$10$9xGU0C99HNj3ykH/wP3sfOAHvhM5bIcRJuIQsY1Z9fGXGhqFOl862', 'GvW0RBChuW4rLiokF6FHhB5fXI3IZ8fWvuoIAXfhkZZRuJpVemn85jAH7hsx', '2017-04-07 01:30:53', '2017-05-24 05:57:02', 1),
(3, 'Erick Ibarra', 'erick@gmail.com', '$2y$10$xvd8OaRTOX1qoDettIrqi.BOPDlFUoE1RF5UqQjmVYUQfNrx1Nwd.', 'gkjXq2IeEMztYCvFD97KLVh0ZCIKsy7D1Cr5zmsWws6vPwCJa7Py2mQpZsNv', '2017-04-27 21:50:06', '2017-05-24 06:21:05', 0),
(4, 'a', 'q.castro1655@gmail.com', 'Guns-1994', NULL, '2017-05-24 05:59:49', '2017-05-24 06:00:20', 1),
(5, 'Victor Rodriguez', 'victor@gmail.com', '123123', NULL, '2017-05-24 06:00:16', '2017-05-24 06:20:51', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Status` (`Status`),
  ADD KEY `idEmployee` (`idEmployee`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `orders_ibfk_6` (`idServices`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indices de la tabla `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Clients`
--
ALTER TABLE `Clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Employees`
--
ALTER TABLE `Employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `Services`
--
ALTER TABLE `Services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Status`
--
ALTER TABLE `Status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Status`) REFERENCES `Status` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`idEmployee`) REFERENCES `Employees` (`id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`idClient`) REFERENCES `Clients` (`id`),
  ADD CONSTRAINT `orders_ibfk_6` FOREIGN KEY (`idServices`) REFERENCES `Services` (`id`),
  ADD CONSTRAINT `orders_ibfk_7` FOREIGN KEY (`idAdmin`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
