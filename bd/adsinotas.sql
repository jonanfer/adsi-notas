-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2013 a las 05:22:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adsinotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materias`
--

CREATE TABLE IF NOT EXISTS `tbl_materias` (
  `ide_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nom_materia` varchar(32) DEFAULT NULL,
  `inf_materia` text NOT NULL,
  `est_materia` varchar(32) NOT NULL,
  PRIMARY KEY (`ide_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tbl_materias`
--

INSERT INTO `tbl_materias` (`ide_materia`, `nom_materia`, `inf_materia`, `est_materia`) VALUES
(1, 'Ingles Basico', 'Simplifica el vocabulario y la gramatica de la lengua inglesa natural.', 'Activo'),
(2, 'Etica', 'Se ocupa del estudio racional de la moral, la virtud, el deber, la felicidad y el buen vivir.', 'Activo'),
(3, 'Cultura Fisica', 'Es la disciplina que abarca todo lo relacionado con el uso del cuerpo.', 'Activo'),
(4, 'Analisis', 'Es la ciencia encargada del analisis de sistemas grandes y complejos y su interaccion.', 'Activo'),
(5, 'Desarrollo', 'Es la aplicacion de un enfoque disciplinado y cuantificable al desarrollo de software.', 'Activo'),
(6, 'Excel Avanzado', 'Es el estudio avanzado de una herramienta de trabajo contable.', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notas`
--

CREATE TABLE IF NOT EXISTS `tbl_notas` (
  `ide_nota` int(11) NOT NULL AUTO_INCREMENT,
  `nt1_nota` float DEFAULT NULL,
  `nt2_nota` float DEFAULT NULL,
  `nt3_nota` float DEFAULT NULL,
  `usuario_ide` int(11) DEFAULT NULL,
  `materia_ide` int(11) DEFAULT NULL,
  PRIMARY KEY (`ide_nota`),
  KEY `usuario_ide` (`usuario_ide`),
  KEY `materia_ide` (`materia_ide`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Volcado de datos para la tabla `tbl_notas`
--

INSERT INTO `tbl_notas` (`ide_nota`, `nt1_nota`, `nt2_nota`, `nt3_nota`, `usuario_ide`, `materia_ide`) VALUES
(0, 2.5, 3.5, 4.5, 75111000, 2),
(2, 3.5, 4.5, 4.5, 75111000, 4),
(3, 1.5, 0.5, 2.5, 75111000, 5),
(4, 3.5, 4.5, 4.5, 75444000, 4),
(5, 4.2, 3.5, 1.5, 75222000, 1),
(6, 2.8, 3.2, 3.5, 75222000, 3),
(7, 1.8, 1.2, 1.3, 75222000, 5),
(8, 3, 2.8, 4.6, 75777000, 5),
(9, 3, 2.5, 4.8, 75555000, 4),
(10, 3.5, 2.4, 3.3, 75333000, 2),
(11, 3, 4.5, 4.5, 76111000, 1),
(12, 3, 4.5, 4.5, 76666000, 1),
(13, 4, 4.5, 0.5, 75888000, 3),
(14, 3, 2.4, 4.8, 76111000, 3),
(15, 3, 5, 1.8, 76666000, 6),
(16, 4.5, 5, 0.2, 75111000, 1),
(17, 4, 2.4, 3.3, 75111000, 3),
(18, 4, 4.5, 4.5, 75222000, 2),
(19, 3, 2.8, 1.8, 75222000, 4),
(20, 5, 5, 4.8, 75333000, 1),
(21, 2, 2.4, 3.6, 75333000, 3),
(22, 4, 2.8, 0.5, 75333000, 4),
(23, 4.5, 4.5, 4.5, 75333000, 5),
(24, 3, 4.5, 4.5, 75111000, 6),
(25, 4, 2.4, 0.5, 75222000, 6),
(26, 3, 5, 4.8, 75333000, 6),
(27, 4, 5, 3.3, 75444000, 1),
(28, 3, 2.8, 3.3, 75444000, 2),
(29, 4, 2.4, 4.8, 75444000, 3),
(30, 5, 2.4, 4.8, 75444000, 5),
(31, 2, 2.5, 1.8, 75444000, 6),
(32, 5, 5, 5, 75555000, 1),
(33, 4, 4.5, 4.8, 75555000, 2),
(34, 5, 5, 4.8, 75555000, 3),
(35, 4.5, 5, 3.3, 75555000, 5),
(36, 4, 5, 3.3, 75555000, 6),
(37, 3, 4.5, 3.3, 75777000, 1),
(38, 4, 2.4, 0.5, 75777000, 2),
(39, 3, 2.4, 4.8, 75777000, 3),
(40, 3, 4.5, 4.5, 75777000, 4),
(41, 4, 5, 4.5, 75777000, 6),
(42, 3, 2.4, 4.8, 75888000, 1),
(43, 4, 4.5, 0.5, 75888000, 2),
(44, 4, 2.4, 3.3, 75888000, 4),
(45, 3, 5, 4.8, 75888000, 5),
(46, 3, 4.5, 0.5, 75999000, 1),
(47, 4, 4.5, 3.3, 75999000, 2),
(48, 4, 2.4, 4.5, 75999000, 3),
(49, 3, 5, 4.8, 75999000, 5),
(50, 4, 5, 3.3, 76111000, 2),
(51, 3, 4.5, 4.8, 76111000, 6),
(52, 3, 4.5, 3.3, 76111000, 4),
(53, 3, 2.4, 3.3, 76666000, 2),
(54, 3, 4.5, 4.8, 76666000, 3),
(55, 4.7, 3.9, 4.9, 76666000, 4),
(56, 4, 2.4, 4.8, 75999000, 6),
(57, 4.5, 2.5, 3.3, 76777000, 1),
(58, 3.5, 4.5, 1.4, 76777000, 2),
(59, 1.4, 5, 2.6, 76777000, 3),
(60, 1.5, 3.4, 4.5, 76777000, 4),
(61, 3.3, 3.5, 4.6, 76777000, 5),
(62, 3.3, 3.4, 3.8, 76777000, 6),
(63, 1.6, 3.6, 4.7, 76888000, 1),
(64, 0.5, 4.3, 2.5, 76888000, 2),
(65, 1.5, 4.6, 3.7, 76888000, 3),
(66, 1.3, 2.3, 4.8, 76888000, 4),
(67, 1.2, 3.5, 0.5, 76888000, 5),
(68, 2.6, 1.5, 3.4, 76888000, 6),
(69, 1.5, 3.4, 5, 76999000, 1),
(70, 4, 3.7, 0.9, 76999000, 2),
(71, 1.5, 3.4, 5, 76999000, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `ide_usuario` int(11) NOT NULL DEFAULT '0',
  `nom_usuario` varchar(64) DEFAULT NULL,
  `ape_usuario` varchar(64) NOT NULL,
  `nick_usuario` varchar(32) NOT NULL,
  `ima_usuario` varchar(64) NOT NULL,
  `eda_usuario` int(2) DEFAULT NULL,
  `cor_usuario` varchar(64) DEFAULT NULL,
  `rol_usuario` varchar(32) DEFAULT NULL,
  `est_usuario` varchar(32) DEFAULT NULL,
  `clave` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`ide_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`ide_usuario`, `nom_usuario`, `ape_usuario`, `nick_usuario`, `ima_usuario`, `eda_usuario`, `cor_usuario`, `rol_usuario`, `est_usuario`, `clave`) VALUES
(75111000, 'Cristian Camilo', 'Sanchez', 'Cristian', '../dist/imgs/usuarios/lider.jpg', 18, 'lider36@mail.com', 'Aprendiz', 'Activo', '123456'),
(75222000, 'Daniel', 'Garcia Galeano', 'Daniel', '../dist/imgs/usuarios/daniel.jpg', 19, 'daniel458@mail.com', 'Aprendiz', 'Activo', '123456'),
(75333000, 'Juan Daniel', 'Becerra', 'Juan Daniel', '../dist/imgs/usuarios/negro.jpg', 18, 'juanda46@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(75444000, 'July Alejandra', 'Wilches', 'Alejandra', '../dist/imgs/usuarios/aleja.jpg', 25, 'alejita45@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(75555000, 'Jhonathan Fernando', 'Beltran Gonzalez', 'Jhonathan', '../dist/imgs/usuarios/jonan.jpg', 24, 'jfdobg-18@hotmail.com', 'Aprendiz', 'Activo', '123456'),
(75666000, 'Oscar Fernando', 'Aristizabal Cardona', 'Oscar', '../dist/imgs/usuarios/ofac.jpg', 26, 'ofac45@misena.edu.co', 'Instructor', 'Activo', '123456'),
(75777000, 'Marcela', 'Sanchez Manrique', 'Marcela', '../dist/imgs/usuarios/marce.jpg', 25, 'marce45@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(75888000, 'Steven Alexander', 'Prado Ruiz', 'Steven', '../dist/imgs/usuarios/steven.jpg', 21, 'stev456@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(75999000, 'Viviana Carolina', 'Martinez ', 'Viviana', '../dist/imgs/usuarios/vivi.jpg', 22, 'vicamos@gmail.com', 'Aprendiz', 'Activo', '123456'),
(76111000, 'Yeny Paola', 'Cardona Marin', 'Yeny', '../dist/imgs/usuarios/yeny.jpg', 19, 'yenypaoc@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(76222000, 'Yamileth', 'Erazo Becerra', 'Yamileth', '../dist/imgs/usuarios/yami.jpg', 30, 'yamierazo@misena.edu.co', 'Instructor', 'Activo', '123456'),
(76333000, 'Carmen Elena', 'Hernandez', 'Carmen', '../dist/imgs/usuarios/carmen.jpg', 28, 'carelena@misena.edu.co', 'Instructor', 'Activo', '123456'),
(76444000, 'Angela Marcela', 'Castellanos', 'Angela', '../dist/imgs/usuarios/angela.jpg', 32, 'angela4526@misena.edu.co', 'Instructor', 'Activo', '123456'),
(76555000, 'Luisa Fernanda', 'Calvo', 'Luisa', '../dist/imgs/usuarios/luisa.jpg', 28, 'luisafercal@misena.edu.co', 'Instructor', 'Activo', '123456'),
(76666000, 'Diego Alejandro', 'Hernandez', 'Diego', '../dist/imgs/usuarios/diego.jpg', 18, 'dahored@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(76777000, 'Claudia Natalia', 'Ospina', 'Natalia', '../dist/imgs/usuarios/nata.jpg', 20, 'nataos46@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(76888000, 'Lina', 'Campos', 'Lina', '../dist/imgs/usuarios/megan_fox.jpg', 21, 'lina396844@misena.edu.co', 'Aprendiz', 'Activo', '123456'),
(76999000, 'Leonardo', 'Gomez Diaz', 'Leonardo', '../dist/imgs/usuarios/leo2.jpg', 22, 'leogodi@misena.edu.co', 'Aprendiz', 'Activo', '123456');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_notas`
--
ALTER TABLE `tbl_notas`
  ADD CONSTRAINT `tbl_notas_ibfk_1` FOREIGN KEY (`usuario_ide`) REFERENCES `tbl_usuarios` (`ide_usuario`),
  ADD CONSTRAINT `tbl_notas_ibfk_2` FOREIGN KEY (`materia_ide`) REFERENCES `tbl_materias` (`ide_materia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
