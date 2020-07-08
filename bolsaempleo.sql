-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2019 a las 02:45:33
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bolsaempleo`
--
CREATE DATABASE IF NOT EXISTS `bolsaempleo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bolsaempleo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idadmin`, `password`) VALUES
(123456, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `nitempresa` int(11) NOT NULL,
  `emailempresa` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Logoempresa` varchar(100) NOT NULL,
  `Nombrecomercial` varchar(200) NOT NULL,
  `Descripcionemp` varchar(1000) NOT NULL,
  `Razonsocial` varchar(100) NOT NULL,
  `Telefono` bigint(20) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Numerotrabajadores` int(11) NOT NULL,
  PRIMARY KEY (`nitempresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`nitempresa`, `emailempresa`, `password`, `Logoempresa`, `Nombrecomercial`, `Descripcionemp`, `Razonsocial`, `Telefono`, `Ciudad`, `Direccion`, `Numerotrabajadores`) VALUES
(999, 'cocacola@gmail.com', '$5$$Owen3NVCaQEoztGSs5z/vuFhiFdz0z4ddeMXlqMxiIB', 'Logosempresa/999.jpg', 'cocacola', ' se distrubuye bebidas gasesos', 'bebidas', 1234, 'Barranquilla', 'los tres postes', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE IF NOT EXISTS `ofertas` (
  `idoferta` int(11) NOT NULL AUTO_INCREMENT,
  `titulooferta` varchar(50) NOT NULL,
  `descripcionoferta` varchar(1000) NOT NULL,
  `salario` varchar(200) NOT NULL,
  `tipotrabajo` varchar(50) NOT NULL,
  `lugartrabajo` varchar(100) NOT NULL,
  `fk_empresa` int(11) NOT NULL,
  PRIMARY KEY (`idoferta`),
  KEY `fk_empresa` (`fk_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`idoferta`, `titulooferta`, `descripcionoferta`, `salario`, `tipotrabajo`, `lugartrabajo`, `fk_empresa`) VALUES
(4, 'Desarrollador php', ' asdsdas', '1231231', 'sddsf', 'Barranquilla', 999),
(5, 'Desarrollador php', ' asdsdas', '1231231', 'sddsf', 'Barranquilla', 999),
(6, 'Vendedor TAT', 'Se necesita vendedor puerta a puerta de lunes a viernes. ', '900000', 'medio tiempo', 'Medellin', 999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulados`
--

CREATE TABLE IF NOT EXISTS `postulados` (
  `idpostulacion` int(11) NOT NULL AUTO_INCREMENT,
  `fk_empresa` int(11) NOT NULL,
  `fk_oferta` int(11) NOT NULL,
  `fk_trabajador` int(11) NOT NULL,
  PRIMARY KEY (`idpostulacion`),
  KEY `fk_empresa` (`fk_empresa`,`fk_oferta`,`fk_trabajador`),
  KEY `foranea` (`fk_oferta`),
  KEY `fk_trabajador` (`fk_trabajador`),
  KEY `fk_trabajador_2` (`fk_trabajador`),
  KEY `fk_trabajador_3` (`fk_trabajador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `postulados`
--

INSERT INTO `postulados` (`idpostulacion`, `fk_empresa`, `fk_oferta`, `fk_trabajador`) VALUES
(1, 999, 4, 144),
(2, 999, 5, 144),
(3, 999, 6, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `iddocumento` int(11) NOT NULL,
  `Fotoperfil` varchar(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fechanacimiento` varchar(30) NOT NULL,
  `Genero` varchar(30) NOT NULL,
  `lugarnacimiento` varchar(50) NOT NULL,
  `direccionresidencia` varchar(100) NOT NULL,
  `Telefono` bigint(20) NOT NULL,
  `tituloprofesional` varchar(100) NOT NULL,
  `descripcionperfil` varchar(1000) NOT NULL,
  `nombreempresa` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `fechainicioexp` varchar(20) NOT NULL,
  `fechafinexp` varchar(20) NOT NULL,
  `funciones` varchar(1000) NOT NULL,
  `nominst` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fechainicioest` varchar(20) NOT NULL,
  `fechafinest` varchar(20) NOT NULL,
  `idioma` varchar(20) NOT NULL,
  `nivelidioma` varchar(20) NOT NULL,
  `estudiocomplementario` varchar(100) NOT NULL,
  `lugarestudio` varchar(100) NOT NULL,
  PRIMARY KEY (`iddocumento`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`iddocumento`, `Fotoperfil`, `Nombre`, `email`, `password`, `fechanacimiento`, `Genero`, `lugarnacimiento`, `direccionresidencia`, `Telefono`, `tituloprofesional`, `descripcionperfil`, `nombreempresa`, `cargo`, `fechainicioexp`, `fechafinexp`, `funciones`, `nominst`, `titulo`, `fechainicioest`, `fechafinest`, `idioma`, `nivelidioma`, `estudiocomplementario`, `lugarestudio`) VALUES
(123, 'Fotousuario/123.jpg', 'jesus', 'jesus@gmail.com', '$5$$Owen3NVCaQEoztGSs5z/vuFhiFdz0z4ddeMXlqMxiIB', '2019-11-01', 'Masculino', 'Barranquilla', 'los tres postes', 3024284090, 'desarrollo', ' soasndjasnkdjn', 'fundacion universidad del norte', 'tecnico en mantenimiento', '2019-09-05', '2019-07-04', '-a\r\n-a\r\n-b', 'Corporacion salamanca', 'desarrollo de software', '2019-09-20', '2019-08-29', 'Ingles', 'intermedio', 'word', 'sena'),
(144, 'Fotousuario/144.jpg', 'prueb', 'juan@gmail.com', '$5$$Owen3NVCaQEoztGSs5z/vuFhiFdz0z4ddeMXlqMxiIB', '2019-11-12', 'Masculino', 'Bogota D.C', '', 0, 'campesino', '  ssss', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `empresa` FOREIGN KEY (`fk_empresa`) REFERENCES `empresa` (`nitempresa`);

--
-- Filtros para la tabla `postulados`
--
ALTER TABLE `postulados`
  ADD CONSTRAINT `traba` FOREIGN KEY (`fk_trabajador`) REFERENCES `trabajador` (`iddocumento`),
  ADD CONSTRAINT `empresar` FOREIGN KEY (`fk_empresa`) REFERENCES `empresa` (`nitempresa`),
  ADD CONSTRAINT `oferta` FOREIGN KEY (`fk_oferta`) REFERENCES `ofertas` (`idoferta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
