-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 17-05-2018 a les 14:49:46
-- Versió del servidor: 10.1.28-MariaDB
-- Versió de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `kw`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `contacto`
--

CREATE TABLE `contacto` (
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `equipo`
--

CREATE TABLE `equipo` (
  `staff` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `eSport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `eventos`
--

CREATE TABLE `eventos` (
  `eSport` int(11) NOT NULL,
  `nombre_rival` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `resultado_kw` int(11) NOT NULL,
  `resultado_rival` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int(11) NOT NULL,
  `Album` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `fRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `eSport` int(11) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`email`);

--
-- Index de la taula `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`eSport`);

--
-- Index de la taula `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`fecha`),
  ADD UNIQUE KEY `eSport` (`eSport`);

--
-- Index de la taula `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Index de la taula `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_jugador`),
  ADD UNIQUE KEY `eSport` (`eSport`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_equipo_evento` FOREIGN KEY (`eSport`) REFERENCES `equipo` (`eSport`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per la taula `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `fk_equipo_jugador` FOREIGN KEY (`eSport`) REFERENCES `equipo` (`eSport`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
