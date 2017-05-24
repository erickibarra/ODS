-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2017 a las 21:22:57
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
  `Password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Clients`
--

INSERT INTO `Clients` (`id`, `Name`, `Email`, `Password`, `created_at`, `updated_at`, `Status`) VALUES
(6, 'Alfonso Peres', 'alfonso@gmail.com', '$2y$10$rHS4IRrRyu/IVEIjsodGJeGP94FbP9S/xWr6iPKrKOJG.SDGspgv.', '2017-05-24 18:17:38', '2017-05-24 18:17:38', 0),
(7, 'Carlos Santillan', 'carlos@gmail.com', '$2y$10$sL5FgVpHM3BUihlSvbbFU.9e/KJ/URNMaaB7seEFhSOcKO502842G', '2017-05-24 18:18:56', '2017-05-24 18:18:56', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Employees`
--

CREATE TABLE `Employees` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Employees`
--

INSERT INTO `Employees` (`id`, `Name`, `Email`, `Password`, `Role`, `created_at`, `updated_at`, `Status`) VALUES
(5, 'Pedro Rodriguez', 'pedro@gmail.com', '$2y$10$uOrTioYRLxpZN27z24x3/uaMqKxGdhV7KTSCL5P9Kfqn2w6ojGjVa', 1, '2017-05-24 18:16:48', '2017-05-24 18:16:48', 0),
(6, 'Fernando Trujillo', 'fernando@gmail.com', '$2y$10$5zAY1sw2G8UmSpD2FuiYcO0WH9tGAz1JtkoPSrggIOwhcCd7W4zVu', 1, '2017-05-24 18:19:17', '2017-05-24 18:19:17', 0);

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
(20, 1, 5, 6, 3, 'Instalacion de antivirus', '2017-05-24 18:17:58', '2017-05-24 18:17:58', 1),
(21, 1, 5, 6, 1, 'MacBook Pro', '2017-05-24 18:18:15', '2017-05-24 18:20:00', 3),
(22, 1, 6, 7, 4, 'Equipo de escritorio e impresora', '2017-05-24 18:19:42', '2017-05-24 19:07:39', 2),
(23, 1, 5, 7, 3, 'pc limpia', '2017-05-24 19:05:11', '2017-05-24 19:05:38', 3);

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
(2, 'Mantenimiento '),
(3, 'Formateo'),
(4, 'Limpieza');

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
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ramon Quiñonez', 'q.castro1655@gmail.com', '$2y$10$/Rm/i6/SQHm5GwgVVLnHrO79xk/YTLobho63ZLzbW4Z0WoVNYdeTm', 'eCVC0beX6AeSDCOguuf3wU3wCIkOTH9WZUrHvEFWKcLjYuXvdZD0Us6YNFXk', '2017-04-07 01:26:50', '2017-05-24 22:45:15', 0),
(2, 'Chamito', 'chamito@chamito.com', '$2y$10$9xGU0C99HNj3ykH/wP3sfOAHvhM5bIcRJuIQsY1Z9fGXGhqFOl862', 'GvW0RBChuW4rLiokF6FHhB5fXI3IZ8fWvuoIAXfhkZZRuJpVemn85jAH7hsx', '2017-04-07 01:30:53', '2017-05-24 05:57:02', 1),
(3, 'Erick Ibarra', 'erick@gmail.com', '$2y$10$xvd8OaRTOX1qoDettIrqi.BOPDlFUoE1RF5UqQjmVYUQfNrx1Nwd.', 'gkjXq2IeEMztYCvFD97KLVh0ZCIKsy7D1Cr5zmsWws6vPwCJa7Py2mQpZsNv', '2017-04-27 21:50:06', '2017-05-24 06:21:05', 0),
(6, 'a', 'a@a.com', '$2y$10$.naSdfbKR/1VMFLSabqWUO2XbQVFVSuMVaAeuCFBd32E4EETBFIh.', 'WgDXm2Xhjv8LhsiaV0sVTe0SpSkSdfUAkdayV9IGGHPwDMKAx3qO2rE1xnOV', '2017-05-24 11:09:13', '2017-05-24 12:42:02', 1),
(8, 'Prueba', 'prueba@gmail.com', '$2y$10$ws7meJ9DJjVameC6aYCxIuQNYZXoWje7LTUOYXHetlGDvXxm.URFC', 'gG5ae52gWLBv2oHJvuW9MyXhRKOvx7TZ2jHQjE9H2B20kQNNm7AYcSF3jIC4', '2017-05-24 16:38:33', '2017-05-24 16:38:33', 1),
(9, 'Hector Lopez', 'hector@gmail.com', '$2y$10$0kVDq1dVC9ICy4PVIoyYae1rPUdjswAzaSbzN9urFr3cRtoi.XxfG', NULL, '2017-05-25 00:11:51', '2017-05-25 00:11:51', 0),
(10, 'juan perez', 'q.castro15@gmail.com', '$2y$10$qkI0UNm3eLmmjGOLJ0j9z.T2lGYDk0IbNlruwcAvfQx6z81oscqye', NULL, '2017-05-25 01:06:31', '2017-05-25 01:06:38', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `Employees`
--
ALTER TABLE `Employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `Services`
--
ALTER TABLE `Services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Status`
--
ALTER TABLE `Status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
