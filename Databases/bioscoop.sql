--
-- Database: `bioscoop`
--
CREATE DATABASE IF NOT EXISTS `bioscoop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bioscoop`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zaal`
--

CREATE TABLE `zaal` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL,
  `zitplaatsen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `zaal`
--

INSERT INTO `zaal` (`id`, `naam`, `zitplaatsen`) VALUES
(1, 'Zaal 1', 75),
(2, 'Zaal 2', 35);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `zaal`
--
ALTER TABLE `zaal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `zaal`
--
ALTER TABLE `zaal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;