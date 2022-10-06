--
-- Database: `project5_elstar`
--
CREATE DATABASE IF NOT EXISTS `project5_elstar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project5_elstar`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets_grootte`
--

CREATE TABLE `fiets_grootte` (
  `id` int(11) NOT NULL,
  `grootte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fiets_grootte`
--

INSERT INTO `fiets_grootte` (`id`, `grootte`) VALUES
(1, '10-inch'),
(2, '12-inch'),
(3, '14-inch'),
(4, '16-inch'),
(5, '18-inch'),
(6, '20-inch'),
(7, '22-inch'),
(8, '24-inch'),
(9, '26-inch'),
(10, '28-inch');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets_merk`
--

CREATE TABLE `fiets_merk` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fiets_merk`
--

INSERT INTO `fiets_merk` (`id`, `naam`) VALUES
(1, 'Gazelle'),
(2, 'Sparta'),
(3, 'Batavus'),
(4, 'Giant'),
(5, 'Cortina'),
(6, 'Koga'),
(7, 'Pointer'),
(8, 'Cube'),
(9, 'Stella'),
(10, 'Amslod');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets_type`
--

CREATE TABLE `fiets_type` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fiets_type`
--

INSERT INTO `fiets_type` (`id`, `naam`) VALUES
(1, 'E-bike'),
(2, 'Hybride'),
(3, 'Speed-pedelec'),
(4, 'Stadsfiets'),
(5, 'Mountainbike'),
(6, 'Vouwfiets'),
(7, 'Bakfiets'),
(8, 'Kinderfiets');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gehuurde_fietsen`
--

CREATE TABLE `gehuurde_fietsen` (
  `registratienummer` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `grootte` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `conditie` varchar(255) NOT NULL,
  `huurdatum` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gehuurde_fietsen`
--

INSERT INTO `gehuurde_fietsen` (`registratienummer`, `merk`, `model`, `grootte`, `type`, `conditie`, `huurdatum`) VALUES
(82131241, 'Stella', 'Amigo E-Pulse', '28-inch', 'Damesfiets', '', '2022-04-12');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `nummer_id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `geslacht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fiets_grootte`
--
ALTER TABLE `fiets_grootte`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `fiets_merk`
--
ALTER TABLE `fiets_merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `fiets_type`
--
ALTER TABLE `fiets_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gehuurde_fietsen`
--
ALTER TABLE `gehuurde_fietsen`
  ADD PRIMARY KEY (`registratienummer`);

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`nummer_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fiets_grootte`
--
ALTER TABLE `fiets_grootte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `fiets_merk`
--
ALTER TABLE `fiets_merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `fiets_type`
--
ALTER TABLE `fiets_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `gehuurde_fietsen`
--
ALTER TABLE `gehuurde_fietsen`
  MODIFY `registratienummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82131243;

--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `nummer_id` int(11) NOT NULL AUTO_INCREMENT;