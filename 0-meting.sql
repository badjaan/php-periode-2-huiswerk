-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 nov 2023 om 10:04
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `0-meting`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_id`
--

CREATE TABLE `user_id` (
  `voornaam` varchar(255) NOT NULL,
  `tussenvoegsel` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `telefoon` varchar(255) NOT NULL,
  `colum` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user_id`
--

INSERT INTO `user_id` (`voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `telefoon`, `colum`, `user_id`) VALUES
('kaas', 'van', 'der stok', 'oregam', '643gd', '09876543', 0, 5),
('kaas', 'kaas', 'kaas', 'kaas', 'kaas', 'kaas', 0, 6),
('kees', 'van', 'stengel', 'orlando', '46895DG', '93y60466047', 0, 7);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `user_id`
--
ALTER TABLE `user_id`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `user_id`
--
ALTER TABLE `user_id`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
