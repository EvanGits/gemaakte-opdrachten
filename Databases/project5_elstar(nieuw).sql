--
-- Database: `project5_elstar(nieuw)`
--
CREATE DATABASE IF NOT EXISTS `project5_elstar(nieuw)` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project5_elstar(nieuw)`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets`
--

CREATE TABLE `fiets` (
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
-- Indexen voor tabel `fiets`
--
ALTER TABLE `fiets`
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
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `verhuur`
--
ALTER TABLE `verhuur`
  ADD CONSTRAINT `verhuur_ibfk_1` FOREIGN KEY (`gebruikersnaam`) REFERENCES `persoon` (`gebruikersnaam`),
  ADD CONSTRAINT `verhuur_ibfk_2` FOREIGN KEY (`fietsnummer`) REFERENCES `fiets` (`nummer`);