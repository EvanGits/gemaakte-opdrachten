--
-- Database: `oop`
--
CREATE DATABASE IF NOT EXISTS `oop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `oop`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets`
--

CREATE TABLE `fiets` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fiets`
--

INSERT INTO `fiets` (`id`, `naam`) VALUES
(1, 'Canyon'),
(2, 'Gazelle'),
(3, 'Factor'),
(4, 'Haibike');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `renner`
--

CREATE TABLE `renner` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL,
  `fiets_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `renner`
--

INSERT INTO `renner` (`id`, `naam`, `fiets_id`) VALUES
(3, 'Greg Van Avermaet', 1),
(5, 'Dylan van Baarle', 2),
(6, 'Wout Poels', 4),
(7, 'Niki Terpstra', 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fiets`
--
ALTER TABLE `fiets`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `renner`
--
ALTER TABLE `renner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fiets_id` (`fiets_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fiets`
--
ALTER TABLE `fiets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `renner`
--
ALTER TABLE `renner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `renner`
--
ALTER TABLE `renner`
  ADD CONSTRAINT `renner_ibfk_1` FOREIGN KEY (`fiets_id`) REFERENCES `fiets` (`id`);