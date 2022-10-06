--
-- Database: `kerstlijst`
--
CREATE DATABASE IF NOT EXISTS `kerstlijst` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kerstlijst`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `naam`) VALUES
(1, 'versiering'),
(2, 'eten en drinken'),
(3, 'overig');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kerst_items`
--

CREATE TABLE `kerst_items` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) CHARACTER SET utf8 NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `kerst_items`
--

INSERT INTO `kerst_items` (`id`, `naam`, `categorie_id`) VALUES
(1, 'kransjes', 2),
(2, 'kerstboom', 1),
(3, 'playstation 5', 3),
(4, 'kalkoen', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `kerst_items`
--
ALTER TABLE `kerst_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `kerst_items`
--
ALTER TABLE `kerst_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `kerst_items`
--
ALTER TABLE `kerst_items`
  ADD CONSTRAINT `kerst_items_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);