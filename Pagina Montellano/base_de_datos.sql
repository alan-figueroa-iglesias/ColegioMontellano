-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 22:29:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_de_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admi`
--

CREATE TABLE `admi` (
  `id` int(11) NOT NULL,
  `num_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `clave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admi`
--

INSERT INTO `admi` (`id`, `num_usuario`, `nombre`, `apellidos`, `clave`) VALUES
(1, 20164818, 'Alan', 'Figueroa Iglesias', '32FTH06D'),
(2, 20161789, 'Jose', 'Anguiano Tapia', '1234'),
(3, 20164982, 'Alex', 'García Figueroa', '4321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta_asignatura`
--

CREATE TABLE `alta_asignatura` (
  `asignatura` varchar(50) NOT NULL,
  `nivel_asignatura` int(11) NOT NULL,
  `profesor_imparte` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alta_asignatura`
--

INSERT INTO `alta_asignatura` (`asignatura`, `nivel_asignatura`, `profesor_imparte`) VALUES
('Matematicas', 3, 'alan figueroa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta_usuarios`
--

CREATE TABLE `alta_usuarios` (
  `login` int(11) NOT NULL,
  `clave` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alta_usuarios`
--

INSERT INTO `alta_usuarios` (`login`, `clave`, `nombre`, `apellidos`, `nivel`) VALUES
(20190612, 4321, 'Julieta ', 'GarcÃ­a De Dios', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricular_alumnos`
--

CREATE TABLE `matricular_alumnos` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `asignatura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matricular_alumnos`
--

INSERT INTO `matricular_alumnos` (`nombre`, `apellidos`, `asignatura`) VALUES
('', '', ''),
('ALAN', 'FIGUEROA IGLESIAS', 'FÃ­sica'),
('JUAN', 'MORAN MARTINEZ', 'FISICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profes`
--

CREATE TABLE `profes` (
  `login` int(11) NOT NULL,
  `clave` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `materia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profes`
--

INSERT INTO `profes` (`login`, `clave`, `nombre`, `apellidos`, `email`, `materia`) VALUES
(20192010, 1234, 'Pedro', 'De La Cruz Santana', 'pedro@hotmail.com', 'matemÃ¡ticas ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alta_asignatura`
--
ALTER TABLE `alta_asignatura`
  ADD UNIQUE KEY `asignatura` (`asignatura`);

--
-- Indices de la tabla `alta_usuarios`
--
ALTER TABLE `alta_usuarios`
  ADD UNIQUE KEY `login` (`login`);

--
-- Indices de la tabla `matricular_alumnos`
--
ALTER TABLE `matricular_alumnos`
  ADD UNIQUE KEY `apellidos` (`apellidos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admi`
--
ALTER TABLE `admi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
