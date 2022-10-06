--
-- Database: `autoverhuur`
--
CREATE DATABASE IF NOT EXISTS `autoverhuur` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `autoverhuur`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `kenteken` varchar(8) NOT NULL DEFAULT '',
  `merk` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `datumAPK` date NOT NULL DEFAULT '0000-00-00',
  `kilometerstand` int(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`kenteken`, `merk`, `type`, `datumAPK`, `kilometerstand`) VALUES
('DT-LT-87', 'Citroen', 'XM', '1999-09-23', 34500),
('GF-NX-07', 'Volkswagen', 'Polo', '1999-07-12', 78000),
('GF-PD-34', 'Volkswagen', 'Polo', '1999-07-22', 57500),
('KR-RT-65', 'Volkswagen', 'Golf', '1999-08-08', 42000),
('PT-ER-45', 'Ford', 'Fiesta', '1999-03-02', 25000),
('TT-PR-73', 'Citroen', 'XM', '0000-00-00', 1200),
('TT-RW-01', 'Volkswagen', 'Polo', '1999-11-14', 4500);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `huurders`
--

CREATE TABLE `huurders` (
  `huurdernr` int(11) DEFAULT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `adres` varchar(50) DEFAULT NULL,
  `postcode` varchar(8) DEFAULT NULL,
  `plaats` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `huurders`
--

INSERT INTO `huurders` (`huurdernr`, `naam`, `adres`, `postcode`, `plaats`) VALUES
(12563, 'De Gier', 'Lokkerlandsdijk 23', '3234 KN', 'Tinte'),
(13876, 'Plomp Acc', 'Fuutstraat 28', '1121 BN', 'Landsmeer'),
(20036, 'Jos Francke', 'Mathernesserlaan 437', '3081 FV', 'Rotterdam'),
(23135, 'Gekroonden', 'Lange haven 72', '3111 CH', 'Schiedam'),
(48212, 'Medina BV', 'Erfdijk 38', '3079 TR', 'Rotterdam'),
(51884, 'Wendel', 'Weteringlaan 149', '5032 XX', 'Tilburg'),
(53441, 'Van Aal / De Graaf', 'Duifstraat 12', '3136 XH', 'Vlaardingen'),
(59067, 'Van Waveren', 'Churchillstraat 40', '1411 XD', 'Naarden'),
(73775, 'Paardekoper BV', 'Sluisjesdijk 103', '3087 AE', 'Rotterdam'),
(84930, 'Van Aalst', 'Coolhaven 128 a', '3024 AK', 'Rotterdam'),
(93323, 'Strijbosch', 'Houtvester 46', '3834 CX', 'Leusden'),
(95201, 'Pieters', 'Gouwsingel 26', '1566 XB', 'Assendelft');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `prijs`
--

CREATE TABLE `prijs` (
  `merk` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `prijsperdag` decimal(10,2) NOT NULL DEFAULT 0.00,
  `prijsperdagdeel` decimal(10,2) NOT NULL DEFAULT 0.00,
  `prijsperweek` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `prijs`
--

INSERT INTO `prijs` (`merk`, `type`, `prijsperdag`, `prijsperdagdeel`, `prijsperweek`) VALUES
('Citroen', 'XM', '93.00', '67.50', '525.70'),
('Ford', 'Fiesta', '67.00', '43.00', '325.00'),
('Volkswagen', 'Golf', '82.00', '44.00', '475.00'),
('Volkswagen', 'Polo', '72.50', '45.90', '396.00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verhuur`
--

CREATE TABLE `verhuur` (
  `kenteken` varchar(8) NOT NULL DEFAULT '',
  `datumverhuur` date NOT NULL DEFAULT '0000-00-00',
  `huurdernr` int(4) NOT NULL DEFAULT 0,
  `identificatie` varchar(15) NOT NULL DEFAULT '',
  `datumretour` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `verhuur`
--

INSERT INTO `verhuur` (`kenteken`, `datumverhuur`, `huurdernr`, `identificatie`, `datumretour`) VALUES
('DT-LT-87', '1999-11-10', 20036, 'P 78JKD', '1999-11-11'),
('DT-LT-87', '1999-11-12', 51884, 'A 3644-33', '1999-11-12'),
('DT-LT-87', '1999-11-12', 95201, 'A 7373893', '1999-11-18'),
('DT-LT-87', '1999-11-15', 53441, 'L 66336', '1999-11-16'),
('GF-NX-07', '1999-11-10', 12563, 'R 8844944l', '1999-11-11'),
('GF-NX-07', '1999-11-11', 93323, 'P 83390', '1999-11-11'),
('GF-NX-07', '1999-11-13', 12563, 'R 8844944l', '1999-11-14'),
('GF-NX-07', '1999-11-14', 59067, 'P 89833K', '1999-11-14'),
('GF-PD-34', '1999-11-15', 23135, 'R 883733G', '1999-11-15'),
('KR-RT-65', '1999-11-10', 59067, 'A 9933KP8', '1999-11-13'),
('KR-RT-65', '1999-11-14', 48212, 'R 88333GH', '0000-00-00'),
('PT-ER-45', '1999-11-10', 48212, 'R 88333GH', '1999-11-10'),
('PT-ER-45', '1999-11-11', 23135, 'R 88333GH', '1999-11-11'),
('PT-ER-45', '1999-11-13', 53441, 'L 66336', '1999-11-14'),
('PT-ER-45', '1999-11-14', 93323, 'P 83390', '1999-11-14'),
('tt-rw-01', '1999-03-01', 84930, 'sadas', '1999-05-01'),
('TT-RW-01', '1999-11-11', 93323, 'P 83390', '1999-11-12'),
('TT-RW-01', '1999-11-12', 73775, 'P 744478', '1999-11-12'),
('TT-RW-01', '1999-11-13', 84930, 'P J773HJ', '1999-11-13'),
('TT-RW-01', '1999-11-14', 84930, 'P J773HJ', '1999-11-27');