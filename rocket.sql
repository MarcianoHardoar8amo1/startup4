-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 mei 2019 om 12:17
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rocket`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `username`, `email`, `password`) VALUES
(1, 'marciano', 'Marciano-hardoar@live.nl', '5025ec2e934c3cef213a2d25622e2b36'),
(2, 'Pander', 'pandergamed@gmail.com', 'b0106648c7a5cfbe385c28dfb6422873');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `toernooi`
--

CREATE TABLE `toernooi` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `plaatje` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `toernooi`
--

INSERT INTO `toernooi` (`id`, `titel`, `plaatje`, `prijs`) VALUES
(1, 'Mockit League', 'rocketleague.png', 'Skin: headwave - Cash: 25k'),
(2, 'Cloud9', 'octane.jpg', 'Car: Octane_ZSR - Cash: 20k'),
(3, 'PSG-Esport', 'keys.jpg', 'Keys: 20! - Cash: 17,5k'),
(4, 'The flying dutchman', 'crate.jpg', 'Crate: Legendary crate - Price: 20k');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `toernooi`
--
ALTER TABLE `toernooi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `toernooi`
--
ALTER TABLE `toernooi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
