--
-- Database: `stored_procedure`
--
CREATE DATABASE IF NOT EXISTS `stored_procedure` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `stored_procedure`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tabel 1`
--

CREATE TABLE `tabel 1` (
  `id` int(11) NOT NULL,
  `naam` varchar(35) NOT NULL,
  `nummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `tabel 1`
--

INSERT INTO `tabel 1` (`id`, `naam`, `nummer`) VALUES
(104, 'Weer', 3),
(105, 'Voertuig', 7),
(106, 'Hallo', 43),
(109, 'Evan', 44),
(110, '435', 0),
(111, '76', 0),
(113, 'Gewoon', 435),
(114, 'LN ', 76);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tabel 1`
--
ALTER TABLE `tabel 1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tabel 1`
--
ALTER TABLE `tabel 1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;