-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 19 jun 2019 om 17:03
-- Serverversie: 5.7.21
-- PHP-versie: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenementen`
--

DROP TABLE IF EXISTS `evenementen`;
CREATE TABLE IF NOT EXISTS `evenementen` (
  `evenement_id` int(6) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `omschrijving` varchar(60) NOT NULL,
  PRIMARY KEY (`evenement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `evenementen`
--

INSERT INTO `evenementen` (`evenement_id`, `datum`, `omschrijving`) VALUES
(1, '2019-06-23', 'Motorrit Ardennnen'),
(2, '2019-06-29', 'Weekend Parijs'),
(3, '2019-07-10', 'Bbq zomereditie'),
(4, '2019-07-13', 'Motortreffen'),
(5, '2019-08-24', 'Midzomernacht drive'),
(6, '2019-10-19', 'Oldtimer beurs'),
(7, '2019-12-21', 'kerst');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenementuser`
--

DROP TABLE IF EXISTS `evenementuser`;
CREATE TABLE IF NOT EXISTS `evenementuser` (
  `evenement_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `evenementuser`
--

INSERT INTO `evenementuser` (`evenement_id`, `user_id`) VALUES
(3, 19),
(1, 0),
(1, 16),
(2, 16),
(1, 19),
(2, 8),
(4, 19),
(1, 9),
(1, 20),
(3, 20),
(1, 1),
(3, 1),
(2, 7),
(6, 1),
(5, 1),
(3, 7),
(5, 7),
(1, 8),
(3, 8),
(5, 8),
(6, 8),
(3, 9),
(4, 9),
(6, 9),
(1, 6),
(3, 6),
(5, 6),
(2, 6),
(1, 2),
(2, 2),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(6) NOT NULL AUTO_INCREMENT,
  `naam` varchar(60) NOT NULL,
  `wachtwoord` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `toegelaten` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `naam`, `wachtwoord`, `email`, `toegelaten`) VALUES
(1, 'administrator', 'admin', 'admin@mail.com', 1),
(2, 'Luc Smeulders', '123', 'luc@gmail.com', 1),
(12, 'Rebecca', '123', 'bex@gmail.com', 1),
(11, 'Vince', '123', 'v@live.nl', 0),
(5, 'Tom', '123', 'tom@hotmail.com', 0),
(6, 'Lesley', '123', 'ministrare@hotmail.com', 1),
(7, 'Dimphy', '123', 'dimphy_@hotmail.com', 1),
(8, 'Frederik', '123', 'fre@gmail.com', 1),
(9, 'Mathias', '123', 'Mathias@hotmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
