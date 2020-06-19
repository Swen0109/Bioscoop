-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 19 jun 2020 om 13:10
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patwee`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bezoekers`
--

CREATE TABLE `bezoekers` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `leeftijd` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `telNummer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bezoekers`
--

INSERT INTO `bezoekers` (`id`, `naam`, `leeftijd`, `telNummer`) VALUES
(1, 'swen sperling', '16', '06-11111111');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `snackbar`
--

CREATE TABLE `snackbar` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `beschrijving` text COLLATE utf8mb4_general_ci NOT NULL,
  `prijs` decimal(65,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bezoekers`
--
ALTER TABLE `bezoekers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `snackbar`
--
ALTER TABLE `snackbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bezoekers`
--
ALTER TABLE `bezoekers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
