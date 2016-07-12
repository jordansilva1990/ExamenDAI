-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2016 a las 01:07:30
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcreditos`
--
CREATE DATABASE IF NOT EXISTS `bdcreditos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdcreditos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE `comuna` (
  `id_com` int(11) NOT NULL,
  `nombre_com` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `id_edu` int(11) NOT NULL,
  `nombre_edu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE `estado_civil` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `rut_post` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apel_pat` varchar(20) NOT NULL,
  `apel_mat` varchar(20) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `hijo` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `sueldo_liquido` int(11) NOT NULL,
  `enfermedad_cronica` varchar(1) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `id_edu` int(11) NOT NULL,
  `id_renta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renta`
--

CREATE TABLE `renta` (
  `id_renta` int(11) NOT NULL,
  `nombre_renta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `rut_post` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut_usu` varchar(10) NOT NULL,
  `nombre_usu` varchar(20) NOT NULL,
  `apel_pat` varchar(20) NOT NULL,
  `apel_mat` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`id_com`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id_edu`);

--
-- Indices de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`rut_post`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_comuna` (`id_comuna`),
  ADD KEY `id_edu` (`id_edu`),
  ADD KEY `id_renta` (`id_renta`);

--
-- Indices de la tabla `renta`
--
ALTER TABLE `renta`
  ADD PRIMARY KEY (`id_renta`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `rut_post` (`rut_post`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut_usu`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD CONSTRAINT `postulante_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado_civil` (`id_estado`),
  ADD CONSTRAINT `postulante_ibfk_2` FOREIGN KEY (`id_comuna`) REFERENCES `comuna` (`id_com`),
  ADD CONSTRAINT `postulante_ibfk_3` FOREIGN KEY (`id_edu`) REFERENCES `educacion` (`id_edu`),
  ADD CONSTRAINT `postulante_ibfk_4` FOREIGN KEY (`id_renta`) REFERENCES `renta` (`id_renta`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`rut_post`) REFERENCES `postulante` (`rut_post`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
