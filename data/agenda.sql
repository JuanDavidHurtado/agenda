-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2024 a las 21:02:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL,
  `conNombre` varchar(50) NOT NULL,
  `conApellido` varchar(50) NOT NULL,
  `conTelefono` varchar(10) NOT NULL,
  `conDireccion` varchar(50) NOT NULL,
  `conCorreo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idContacto`, `conNombre`, `conApellido`, `conTelefono`, `conDireccion`, `conCorreo`) VALUES
(3, 'Gerardo', 'Pérez', '1234567890', 'Calle 1, Ciudad', 'gperez@example.com'),
(4, 'María', 'Gómez', '1234567890', 'Avenida 2, Ciudad', 'sadds@das.sdsa'),
(5, 'Carlos', 'Hernández', '1122334455', 'Boulevard 3, Ciudad', 'carlos.hernandez@example.com'),
(6, 'Luisa', 'Martínez', '5566778899', 'Carretera 4, Ciudad', 'luisa.martinez@example.com'),
(7, 'Ana', 'Torres', '6677889900', 'Camino 5, Ciudad', 'ana.torres@example.com'),
(8, 'Juan David', 'Hurtado Delgado', '3202344321', 'Calle # 5 ', 'juanda0101011993@gmail.com'),
(10, 'Lorena', 'Luna', '1234567890', 'Avenida 814', 'luna@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
