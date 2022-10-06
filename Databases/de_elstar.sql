--
-- Database: `de_elstar`
--
CREATE DATABASE IF NOT EXISTS `de_elstar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `de_elstar`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `tussenvoegsel` varchar(25) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `geslacht` varchar(6) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `postcode` varchar(50) NOT NULL,
  `plaats` varchar(15) DEFAULT NULL,
  `telefoon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(13, 'admin', '$2y$10$D53GGNtmCTPz9NQ0EQYage5t.E0txDqGNvQpOLDePkZWvBWQiORyW', NULL, NULL, NULL, 'super');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bicycles`
--

CREATE TABLE `bicycles` (
  `nummer` varchar(3) NOT NULL,
  `merk` varchar(35) NOT NULL,
  `model` varchar(35) NOT NULL,
  `grootte` int(3) NOT NULL,
  `type` varchar(35) NOT NULL,
  `conditie` varchar(35) NOT NULL,
  `prijs` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `persoon`
--

CREATE TABLE `persoon` (
  `gebruikersnaam` varchar(35) NOT NULL,
  `klant_pasnummer` int(11) NOT NULL,
  `voornaam` varchar(35) NOT NULL,
  `achternaam` varchar(35) NOT NULL,
  `telefoonnummer` varchar(10) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `huisnummer` varchar(3) NOT NULL,
  `plaatsnaam` varchar(35) NOT NULL,
  `geboortedatum` date NOT NULL,
  `akkoordvoorwaarden` tinyint(4) NOT NULL,
  `personeel_wachtwoord` varchar(256) NOT NULL,
  `personeel_afdeling` varchar(35) NOT NULL,
  `personeel_akkoord` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verhuur`
--

CREATE TABLE `verhuur` (
  `gebruikersnaam` varchar(35) NOT NULL,
  `fietsnummer` varchar(3) NOT NULL,
  `huurdatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexen voor tabel `bicycles`
--
ALTER TABLE `bicycles`
  ADD PRIMARY KEY (`nummer`);

--
-- Indexen voor tabel `persoon`
--
ALTER TABLE `persoon`
  ADD PRIMARY KEY (`gebruikersnaam`);

--
-- Indexen voor tabel `verhuur`
--
ALTER TABLE `verhuur`
  ADD KEY `gebruikersnaam` (`gebruikersnaam`),
  ADD KEY `fietsnummer` (`fietsnummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `verhuur`
--
ALTER TABLE `verhuur`
  ADD CONSTRAINT `verhuur_ibfk_1` FOREIGN KEY (`gebruikersnaam`) REFERENCES `persoon` (`gebruikersnaam`),
  ADD CONSTRAINT `verhuur_ibfk_2` FOREIGN KEY (`fietsnummer`) REFERENCES `bicycles` (`nummer`);

