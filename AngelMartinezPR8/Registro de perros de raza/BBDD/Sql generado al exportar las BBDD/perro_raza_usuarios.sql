-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 08-02-2021 a las 10:47:43
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.2.18
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  AUTOCOMMIT = 0;

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Base de datos: `perro_raza_usuarios`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `usuarios`
--
DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(16) NOT NULL,
  `contraseña` varchar(64) NOT NULL,
  `foto` longblob NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;