--
-- Database: `password_hash`
--
CREATE DATABASE IF NOT EXISTS `password_hash` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `password_hash`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password`
--

CREATE TABLE `password` (
  `id` int(255) NOT NULL,
  `password` int(255) NOT NULL,
  `hash` binary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `password`
--
ALTER TABLE `password`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;