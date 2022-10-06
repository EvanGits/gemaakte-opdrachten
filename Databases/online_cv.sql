--
-- Database: `online_cv`
--
CREATE DATABASE IF NOT EXISTS `online_cv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `online_cv`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cms`
--

CREATE TABLE `cms` (
  `content_id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `block_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `cms`
--

INSERT INTO `cms` (`content_id`, `page`, `block_id`, `name`) VALUES
(2, 'home', 1, 'description'),
(1, 'home', 1, 'title');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `languages`
--

CREATE TABLE `languages` (
  `language_id` int(11) NOT NULL,
  `name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `languages`
--

INSERT INTO `languages` (`language_id`, `name`) VALUES
(1, 'nl-nl'),
(2, 'en-gb');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `site_content`
--

CREATE TABLE `site_content` (
  `content_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `site_content`
--

INSERT INTO `site_content` (`content_id`, `language_id`, `content`) VALUES
(1, 1, 'titel tekst'),
(1, 2, 'title text'),
(2, 1, 'beschrijving'),
(2, 2, 'description');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`content_id`),
  ADD UNIQUE KEY `page` (`page`,`block_id`,`name`);

--
-- Indexen voor tabel `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexen voor tabel `site_content`
--
ALTER TABLE `site_content`
  ADD PRIMARY KEY (`content_id`,`language_id`),
  ADD KEY `language_id` (`language_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cms`
--
ALTER TABLE `cms`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `site_content`
--
ALTER TABLE `site_content`
  ADD CONSTRAINT `site_content_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`),
  ADD CONSTRAINT `site_content_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `cms` (`content_id`);