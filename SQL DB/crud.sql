-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2024 a las 00:49:30
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
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`, `codigo`) VALUES
(1, 'ADMINISTRATIVO', 'ADM'),
(2, 'RECURSOS HUMANOS', 'RRHH'),
(3, 'INGENIERIA', 'ING');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `salario` int(3) DEFAULT NULL,
  `puesto` varchar(20) DEFAULT NULL,
  `fecha_contratacion` date DEFAULT current_timestamp(),
  `fk_id_departamento` int(11) DEFAULT NULL,
  `fk_id_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `email`, `salario`, `puesto`, `fecha_contratacion`, `fk_id_departamento`, `fk_id_role`) VALUES
(4, 'Sophie', 'desarr@gmail.com', 5000, 'Auxiliar     ', '2024-09-11', 0, 0),
(8, 'Karen', 'ksass@asdas.com', 38000, 'Contador   ', '2024-09-21', 1, 1),
(10, 'Norlys', 'asdjosad@iasjdi.com', 3489734, 'Recepcion  ', '2024-09-21', NULL, NULL),
(11, 'sadfsdf', 'sdfsdf@asdsad.com', 343434, 'sdfsdf  ', '2024-09-21', NULL, NULL),
(12, 'Luis', 'lu434@asd.com', 56568, 'sd   ', '2024-09-21', 2, 1),
(13, 'edicson', 'pepo@gmail.com', 8000000, 'Desarrollador Senior', '2024-09-21', 3, 1),
(14, 'Carlos', 'carlos@gmail.com', 8000000, 'Desarrollador Senior', '2024-09-21', 3, 1),
(16, 'Sophie', 'Sop@gmail.com', 8000000, 'Analista', '2024-09-21', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_role`, `role`) VALUES
(1, 'Tecnico'),
(2, 'Administrativo'),
(3, 'Analista');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
