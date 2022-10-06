--
-- Database: `excellent_taste`
--
CREATE DATABASE IF NOT EXISTS `excellent_taste` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `excellent_taste`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling`
--

CREATE TABLE `bestelling` (
  `id` int(11) NOT NULL,
  `reservering_id` int(11) NOT NULL,
  `menu_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL,
  `categorie` enum('gerecht','drank','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering`
--

CREATE TABLE `reservering` (
  `id` int(11) NOT NULL,
  `klant_naam` varchar(35) NOT NULL,
  `klant_telefoonnummer` varchar(10) NOT NULL,
  `aantal_personen` int(11) NOT NULL,
  `tafelnummer` varchar(2) NOT NULL,
  `tijdstip` datetime NOT NULL,
  `allergieën` text NOT NULL,
  `opmerkingen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_item_id` (`menu_item_id`),
  ADD KEY `reservering_id` (`reservering_id`);

--
-- Indexen voor tabel `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reservering`
--
ALTER TABLE `reservering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `bestelling_ibfk_1` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_item` (`id`),
  ADD CONSTRAINT `bestelling_ibfk_2` FOREIGN KEY (`reservering_id`) REFERENCES `reservering` (`id`);