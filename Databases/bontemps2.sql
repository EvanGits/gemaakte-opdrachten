--
-- Database: `bontemps2`
--
CREATE DATABASE IF NOT EXISTS `bontemps2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bontemps2`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL,
  `adres` varchar(35) NOT NULL,
  `plaats` varchar(35) NOT NULL,
  `telefoonnr` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `postcode` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`id`, `naam`, `adres`, `plaats`, `telefoonnr`, `email`, `postcode`) VALUES
(3, 'Evan', 'Hoekstraat 11', 'Rotterdam', '0628374782', 'evan.geerts@imail.com', '7893UZ'),
(4, 'rene', 'timstraat 11', 'suickerbroek', '5', 'evaerts@imail.com', '9893UZ'),
(5, 'rene', 'timstraat 11', 'suickerbroek', '5', 'evaerts@imail.com', '9893UZ'),
(6, 'rene', 'timstraat 11', 'suickerbroek', '5', 'evaerts@imail.com', '9893UZ'),
(7, 'rene', 'timstraat 11', 'suickerbroek', '5', 'evaerts@imail.com', '9893UZ'),
(8, 'Pieter', 'Stijnbroek 11', 'Oeteldonk', '8977', 'evan.geerts@lmail.com', '5351GZ'),
(9, 'Pieter', 'Veegstraat 41', 'Oss', '069878979', 'evan.geerts@Imail.com', '9780YZ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL,
  `voorgerecht` varchar(35) NOT NULL,
  `hoofdgerecht` varchar(35) NOT NULL,
  `nagerecht` varchar(35) NOT NULL,
  `prijs` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering`
--

CREATE TABLE `reservering` (
  `id` int(11) NOT NULL,
  `klant_id` int(11) NOT NULL,
  `tafel_id` int(11) NOT NULL,
  `n_personen` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijdstip` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering_menu`
--

CREATE TABLE `reservering_menu` (
  `menu_id` int(11) NOT NULL,
  `reservering_id` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tafel`
--

CREATE TABLE `tafel` (
  `id` int(11) NOT NULL,
  `aantal_zitplaatsen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klant_id` (`klant_id`),
  ADD KEY `tafel_id` (`tafel_id`);

--
-- Indexen voor tabel `reservering_menu`
--
ALTER TABLE `reservering_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `reservering_id` (`reservering_id`);

--
-- Indexen voor tabel `tafel`
--
ALTER TABLE `tafel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reservering`
--
ALTER TABLE `reservering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `tafel`
--
ALTER TABLE `tafel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `reservering`
--
ALTER TABLE `reservering`
  ADD CONSTRAINT `reservering_ibfk_1` FOREIGN KEY (`klant_id`) REFERENCES `klant` (`id`),
  ADD CONSTRAINT `reservering_ibfk_2` FOREIGN KEY (`tafel_id`) REFERENCES `tafel` (`id`);

--
-- Beperkingen voor tabel `reservering_menu`
--
ALTER TABLE `reservering_menu`
  ADD CONSTRAINT `reservering_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `reservering_menu_ibfk_2` FOREIGN KEY (`reservering_id`) REFERENCES `reservering` (`id`);
--