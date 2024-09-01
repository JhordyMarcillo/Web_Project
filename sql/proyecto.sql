-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-09-2024 a las 18:55:09
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `fechaNacimiento` varchar(25) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `estadoCivil`, `fechaNacimiento`, `user`, `password`, `rol`, `estado`) VALUES
(1, '1234567890', 'paul', 'mora', 'sangolqui', '0999999999', 'a@gmail.com', 'Casado', '2024-12-12', 'jhordy1', 'abc', '', 'Activo'),
(2, '1234567891', 'Jhory', 'marcillo', 'sangolqui', '0999999998', 'b@gmail.com', 'Soltero', '2003-12-12', 'jeffrey1', '123', '', 'Inactivo'),
(3, '1234567890', 'Jhordy', 'Marcillo', 'aaaaa', '1111111111', 'jhordypaulsb2@gmail.com', 'Casado', '2002-12-12', 'jhordy123', '123', '', 'Activo'),
(4, '1234567890', 'Paul', 'Mora', 'Naranjal, casa ploma', '0995743333', 'iiii@gmail.com', '', '2024-09-05', 'aaa', '123', '', 'Activo'),
(5, '', '', '', '', '', '', '', '', '', '', '', 'Activo'),
(6, '1234567890', 'Jhordy', 'Marcillo', 'aaaaa', '1111111111', 'jhordypaulsb2@gmail.com', 'Casado', '2024-09-10', 'jhordy123', '123', '', 'Activo'),
(7, '1234567890', 'Jhordy', 'Marcillo', 'aaaaa', '1111111111', 'jhordypaulsb2@gmail.com', 'Casado', '2024-09-10', 'jhordy123', '123', '', 'Activo'),
(8, '1234567890', 'Jhordy', 'Marcillo', 'aaaaa', '1111111111', 'jhordypaulsb2@gmail.com', 'Casado', '2024-09-10', 'jhordy124', '123', '', 'Activo'),
(9, '1234567890', 'AAAAA', 'Marcillo', 'AAAAA', '1111111111', 'sAA@hotmail.com', 'Casado', '2024-09-04', 'AAA', 'AA123', '', 'Activo'),
(10, '1234567890', 'AAAAA', 'Marcillo', 'AAAAA', '1111111111', 'sAA@hotmail.com', 'Casado', '2024-09-03', 'AAA', '123', '', 'Activo'),
(11, '1234567890', 'BBBB', 'Marcillo', 'BBB', '1111111111', 'sAA@hotmail.com', 'Casado', '', 'BBB', '$BB123', '', 'Activo'),
(12, '1234567890', 'BBBB', 'Marcillo', 'BBB', '1111111111', 'sAA@hotmail.com', 'Casado', '', 'BBB', '$', '', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `nombre`, `user`, `password`) VALUES
(1, 'paul', 'paul1', 'abc'),
(2, 'jeffrey', 'jeffrey1', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `codigo` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `unidades` int(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `qr` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `unidades`, `precio`, `categoria`, `marca`, `qr`) VALUES
(1, 1, 'Leche saborizada', 10, '2.33', 'Lacteos', 'Toni', 0x696d6167656e65732f71722f315f4c65636865207361626f72697a6164615f4c616374656f735f546f6e695f2e706e67),
(2, 0, '', 0, '', '', '', 0x696d6167656e65732f71722f5f5f5f5f2e706e67),
(3, 2, 'Sal De Mesa ', 12, '3.44', 'Confiteria', 'Cris-Sal', 0x696d6167656e65732f71722f325f53616c204465204d657361205f436f6e666974657269615f437269732d53616c5f2e706e67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(10) NOT NULL,
  `ruc` int(20) NOT NULL,
  `compania` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `ruc`, `compania`, `direccion`, `telefono`, `email`, `web`) VALUES
(1, 1, 'Pepsi', 'av enriquez', '1234567890', 'pepsi@gmail.com', 'www.pepsi.com.ec'),
(2, 1, 'Pepsi', 'av enriquez', '1234567890', 'pepsi@gmail.com', 'www.pepsi.com.ec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `descripcion` varchar(3000) NOT NULL,
  `accesos` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `accesos`) VALUES
(1, 'Administrador 1', 'sjdaksjafhj ksajdkja', 'Agregar usuarios,Modificar Usuarios,Eliminar Usuarios,Productos,Ventas,Agregar proveedor,Ver Proveedores,Inventario,Reportes'),
(2, 'Role 2', 'jdakbaf jkasbkjaf asbkjafs', 'Agregar usuarios,Modificar Usuarios,Inventario,Reportes'),
(9, 'Rol 34', 'sandkanj fkdfjakn', 'Agregar usuarios,Eliminar Usuarios,Agregar usuarios');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
