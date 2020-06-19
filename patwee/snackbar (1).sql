-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 19 jun 2020 om 20:08
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
-- Gegevens worden geëxporteerd voor tabel `snackbar`
--

INSERT INTO `snackbar` (`id`, `naam`, `afbeelding`, `beschrijving`, `prijs`, `type`) VALUES
(1, 'zoete popcorn', 'zoete_popcorn.png', '', '5.49', 'popcorn'),
(2, 'zoute popcorn', 'zoute_popcorn.png', '', '5.49', 'popcorn'),
(3, 'mixed popcorn', 'mixed_popcorn.png', '', '5.79', 'popcorn'),
(4, 'nacho\'s Met guacamole', 'nachos_guacamole.png', '', '6.49', 'nachos'),
(5, 'nacho\'s met salsa', 'nachos_salsa.png', '', '6.49', 'nachos'),
(6, 'nacho dip', 'nachos_dip.png', '', '1.00', 'nachos'),
(7, 'lays naturel', 'lays_naturel.png', '', '1.99', 'chips'),
(8, 'lays fromage', 'lays_fromage.png', '', '1.99', 'chips'),
(9, 'lays paprika', 'lays_paprika.png', '', '1.99', 'chips'),
(10, 'doritos Sweet chilli pepper  ', 'doritos_sweetChilliPepper.png', '', '2.50', 'chips'),
(11, 'doritos roulette', 'doritos_roulette.png', '', '2.50', 'chips'),
(12, 'doritos spicy Sweet Chilli', 'doritos_spicySweetChilli.png', '', '2.50', 'chips'),
(13, 'mars', 'mars.png', '', '0.99', 'snoep'),
(14, 'snickers', 'snickers.png', '', '0.99', 'snoep'),
(15, 'twix', 'twix.png', '', '1.49', 'snoep'),
(16, 'm&m\'s', 'm&m.png', '', '1.99', 'snoep'),
(17, 'Skittles', 'skittles.png', '', '1.99', 'snoep'),
(18, 'Maltesers', 'maltesers.png', '', '1.99', 'snoep'),
(19, 'coca_cola', 'coca_cola.png', '', '1.69', 'drankje'),
(20, 'coca cola zero', 'coca_cola_zero.png', '', '1.69', 'drankje'),
(21, 'coca cola light', 'coca_cola_light.png', '', '1.69', 'drankje'),
(22, 'Ice tea bubbles', 'Ice_tea_bubbles.png', '', '1.69', 'drankje'),
(23, 'Ice tea no peach', 'Ice_tea_peach.png', '', '1.69', 'drankje'),
(24, 'fanta', 'fanta.png', '', '1.69', 'drankje'),
(25, 'capri sun', 'caprisun.png', '', '1.69', 'drankje'),
(26, 'multi vicee', 'multi_vicee.png', '', '1.69', 'drankje'),
(27, 'appelsap', 'appelsap.png', '', '1.69', 'drankje'),
(28, 'fernadez cherry bouquet', 'fernadez_cherrybouquet.png', '', '1.39', 'drankje'),
(29, 'fernandez green punch', 'fernandez_greenpunch.png', '', '1.39', 'drankje'),
(30, 'fernandez super pineapple', 'fernandez_superpineapple.png', '', '1.39', 'drankje'),
(31, 'kidz menu box 1', 'box1.png', '', '10.49', 'kidzMenu'),
(32, 'kidz menu box 2', 'box2.png', '', '12.49', 'kidzMenu'),
(33, 'kidz menu box 3', 'box3.png', '', '3.99', 'kidzMenu');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `snackbar`
--
ALTER TABLE `snackbar`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
