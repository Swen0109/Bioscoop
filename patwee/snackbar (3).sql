-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 22 jun 2020 om 13:31
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
(1, 'zoete popcorn', 'zoete_popcorn.png', 'zoete popcorn. wij bij Patwee halen al onze zoete popcorn van het bedrijf JIMMY’s Popcorn. JIMMY’s Popcorn bevat minder vet, suiker en zout dan gewone popcorn en is van nature ook rijk aan gezonde voedingsvezels, en daarom de beste keuze voor onze klant.', '5.49', 'popcorn'),
(2, 'zoute popcorn', 'zoute_popcorn.png', 'zoute popcorn. wij bij Patwee halen al onze zoute popcorn van het bedrijf JIMMY’s Popcorn. JIMMY’s Popcorn bevat minder vet, suiker en zout dan gewone popcorn en is van nature ook rijk aan gezonde voedingsvezels, en daarom de beste keuze voor onze klant.', '5.49', 'popcorn'),
(3, 'mixed popcorn', 'mixed_popcorn.png', 'mixed popcorn. wij bij Patwee halen al onze mixed popcorn van het bedrijf JIMMY’s Popcorn. JIMMY’s Popcorn bevat minder vet, suiker en zout dan gewone popcorn en is van nature ook rijk aan gezonde voedingsvezels, en daarom de beste keuze voor onze klant.', '5.79', 'popcorn'),
(4, 'nacho\'s Met guacamole', 'nachos_guacamole.png', 'nacho\'s bedacht in 1943 maar opnieuw uitgevonden door jimmy met heerlijke guacamole dip en nu ook een heerlijk gerecht voor tijdens de film bij Patwee. ', '6.49', 'nachos'),
(5, 'nacho\'s met salsa', 'nachos_salsa.png', 'nacho\'s bedacht in 1943 maar opnieuw uitgevonden door jimmy met heerlijke salsa dip en nu ook een heerlijk gerecht voor tijdens de film bij Patwee.', '6.49', 'nachos'),
(6, 'nacho dip', 'nachos_dip.png', 'niet genoeg dip bij je nacho\'s hier heb je wat extra. tip: probeer ze ook is met doritos.', '1.00', 'nachos'),
(7, 'lays naturel', 'lays_naturel.png', 'De enige echte Lay\'s chips, knapperig gebakken, met een beetje zout voor de smaak.', '1.99', 'chips'),
(8, 'lays fromage', 'lays_fromage.png', 'De enige echte Lay\'s chips, knapperig gebakken, en nu met kaas smaak.', '1.99', 'chips'),
(9, 'lays paprika', 'lays_paprika.png', 'De enige echte Lay\'s chips, knapperig gebakken, en nu voor de pikante onder ons met paprika smaak', '1.99', 'chips'),
(10, 'doritos Sweet chilli pepper  ', 'doritos_sweetChilliPepper.png', 'doritos sweet chilli pepper. is het zoet? smaakt het naar chilli? of is het een pepper vermomd als chip?', '2.50', 'chips'),
(11, 'doritos roulette', 'doritos_roulette.png', 'doritos roullete, heerlijk om met een groep vrienden te eten. maak er een leuk spel van door allemaal omstebeurt een chip te pakken en kijk toe hoe iemand een van de hete chips pakt ', '2.50', 'chips'),
(12, 'doritos spicy Sweet Chilli', 'doritos_spicySweetChilli.png', 'na het grote succes van doritos sweet chilli pepper is er nu ook SPICY sweet chilli voor net iets meer... PIT!!!', '2.50', 'chips'),
(13, 'mars', 'mars.png', 'mars niet de planeet maar de chocolade reep. Mars, geeft je energie', '0.99', 'snoep'),
(14, 'snickers', 'snickers.png', 'you always lose your edge when you\'r hungry. snickers steelt stevige trek', '0.99', 'snoep'),
(15, 'twix', 'twix.png', 'twix 2 verschillende chocolade repen in een verpakking.try both and pick a side.', '1.49', 'snoep'),
(16, 'm&m\'s', 'm&m.png', 'M&m\'s chocolade omhulde noten. smelt in je mond niet in je hand.', '1.99', 'snoep'),
(17, 'Skittles', 'skittles.png', 'skittle\'s kleur rijken snoepjes gevuld met smaak. taste the rainbow', '1.99', 'snoep'),
(18, 'Maltesers', 'maltesers.png', 'maltesers een leuke fun bol chocolade.The lighter way to enjoy chocolate.', '1.99', 'snoep'),
(19, 'coca_cola', 'coca_cola.png', 'coca cola een heerlijk verfrissend drankje. taste the feeling.', '1.69', 'drankje'),
(20, 'coca cola zero', 'coca_cola_zero.png', 'coca cola nu ook met minder suiker. coca cola zero, taste the feeling.', '1.69', 'drankje'),
(21, 'coca cola light', 'coca_cola_light.png', 'coca cola light met maar slechts 1 calorie de beste keuze voor mensen op dieet.taste the feeling', '1.69', 'drankje'),
(22, 'Ice tea bubbles', 'Ice_tea_bubbles.png', 'lipton ice tea bubbles een heerlijke verfrissing gemaakt van natuurlijke producten en een beetje bubbles.', '1.69', 'drankje'),
(23, 'Ice tea peach', 'Ice_tea_peach.png', 'lipton ice tea peach een heerlijke verfrissing gemaakt van natuurlijke groene thee blaadjes en perziken.', '1.69', 'drankje'),
(24, 'fanta', 'fanta.png', 'fanta een heelrijke verfrissing gemaakt met verse sinaasappels. ontdek de FANTAstische smaak van fanta.', '1.69', 'drankje'),
(25, 'capri sun', 'caprisun.png', 'capri sun volledig organisch, geen kunstmatig kleur of smaak stoffen toe gevoegd. maar toch de heerlijke smaak van sinaasappel.', '1.69', 'drankje'),
(26, 'roos vicee', 'multi_vicee.png', 'roos vicee bom vol vitamine en smaak, schenk vertrouwen.\r\n', '1.69', 'drankje'),
(27, 'appelsap', 'appelsap.png', 'appelsap vers gepersd en bordevol smaak gemaakt met dank aan de nauur.', '1.69', 'drankje'),
(28, 'fernades cherry bouquet', 'fernadez_cherrybouquet.png', 'de heerlijke smaak cherry in een heerlijk drankje,fernandes maak er wat van.', '1.39', 'drankje'),
(29, 'fernandez green punch', 'fernandez_greenpunch.png', 'green punch een heerlijk drankje,fernandes maak er wat van.', '1.39', 'drankje'),
(30, 'fernandez super pineapple', 'fernandez_superpineapple.png', 'de heerlijke PINEAPPLE smaak in een SUPER heerlijk drankje,fernandes maak er wat van.', '1.39', 'drankje'),
(31, 'kidz menu box 1', 'box1.png', 'box 1 kinder menu. dit menu bevat het volgende: 1 bakje popcorn zoet of zout,1 zakje skittles, een appelsap en een verassing.', '10.49', 'kidzMenu'),
(32, 'kidz menu box 2', 'box2.png', 'box 2 kinder menu. dit menu bevat het volgende: 1 zakje lays chips naturel of paprika,1 zakje skittles, een appelsap en een leukere verassing.', '12.49', 'kidzMenu'),
(33, 'kidz menu box 3', 'box3.png', 'box 3 kinder menu. dit menu is voor de kinderen die alleen de verassing willen.', '3.99', 'kidzMenu');

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
