--
-- Database: `assesment`
--
CREATE DATABASE IF NOT EXISTS `assesment` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `assesment`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `antwoorden`
--

CREATE TABLE `antwoorden` (
  `Antwoord_1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Antwoord_2` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `antwoorden`
--

INSERT INTO `antwoorden` (`Antwoord_1`, `Antwoord_2`) VALUES
('Banaan', 'Appel');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assesments`
--

CREATE TABLE `assesments` (
  `id` int(11) NOT NULL,
  `assesment_name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `richting_id` int(11) NOT NULL,
  `husselen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `assesments`
--

INSERT INTO `assesments` (`id`, `assesment_name`, `type_id`, `richting_id`, `husselen_id`) VALUES
(2, 'Test_1', 1, 1, 1),
(3, 'Test_2', 2, 1, 2),
(4, 'Test_3', 3, 1, 2),
(5, 'Test_4', 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fill-in`
--

CREATE TABLE `fill-in` (
  `id` int(11) NOT NULL,
  `antwoorden` varchar(255) NOT NULL,
  `vraag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikersantwoord`
--

CREATE TABLE `gebruikersantwoord` (
  `user_id` int(11) NOT NULL,
  `antwoord` varchar(255) NOT NULL,
  `vraag_id` int(11) NOT NULL,
  `keuze_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `husselen`
--

CREATE TABLE `husselen` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `husselen`
--

INSERT INTO `husselen` (`id`, `state`, `user_id`) VALUES
(1, 'anwoorden', 0),
(2, 'vragen\r\n', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `multiple-choice`
--

CREATE TABLE `multiple-choice` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `antwoorden` varchar(255) NOT NULL,
  `correct` int(11) NOT NULL,
  `vraag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `multiple-choice`
--

INSERT INTO `multiple-choice` (`id`, `number`, `antwoorden`, `correct`, `vraag_id`) VALUES
(1, 1, 'Frambozen\r\n', 0, 3),
(2, 2, 'Bananen', 0, 3),
(3, 3, 'Bramen', 0, 3),
(4, 4, 'Dadels', 1, 3),
(5, 5, 'Aardbeien', 0, 3),
(6, 1, '5', 0, 4),
(7, 2, '18', 0, 4),
(8, 3, '6', 0, 4),
(9, 4, '12', 1, 4),
(10, 5, '20', 0, 4),
(11, 1, '1098', 0, 5),
(12, 2, '1215', 0, 5),
(13, 3, '1161', 1, 5),
(14, 4, '1387', 0, 5),
(15, 5, '1412', 0, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `open`
--

CREATE TABLE `open` (
  `id` int(11) NOT NULL,
  `antwoord` varchar(255) NOT NULL,
  `vraag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `richting`
--

CREATE TABLE `richting` (
  `id` int(11) NOT NULL,
  `richting` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `richting`
--

INSERT INTO `richting` (`id`, `richting`) VALUES
(1, 'front-end'),
(2, 'back-end');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'multiple-choice'),
(2, 'fill-in'),
(3, 'open\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vragen`
--

CREATE TABLE `vragen` (
  `id` int(11) NOT NULL,
  `assesment_id` int(11) NOT NULL,
  `vraag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `vragen`
--

INSERT INTO `vragen` (`id`, `assesment_id`, `vraag`) VALUES
(3, 2, 'Welk van de onderstaande fruitsoorten is het meest eiwitrijk?'),
(4, 2, 'Hoeveel zitten er in een dozijn?'),
(5, 2, 'Uit welk jaar stamt de oudste (bekende) vermelding van de plaats Oss?');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `antwoorden`
--
ALTER TABLE `antwoorden`
  ADD PRIMARY KEY (`Antwoord_1`);

--
-- Indexen voor tabel `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assesment_name` (`assesment_name`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `husselen_id` (`husselen_id`),
  ADD KEY `richting_id` (`richting_id`);

--
-- Indexen voor tabel `fill-in`
--
ALTER TABLE `fill-in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fill-in_ibfk_1` (`vraag_id`);

--
-- Indexen voor tabel `gebruikersantwoord`
--
ALTER TABLE `gebruikersantwoord`
  ADD PRIMARY KEY (`user_id`,`vraag_id`),
  ADD KEY `vraag_id` (`vraag_id`),
  ADD KEY `number_id` (`keuze_id`);

--
-- Indexen voor tabel `husselen`
--
ALTER TABLE `husselen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `multiple-choice`
--
ALTER TABLE `multiple-choice`
  ADD PRIMARY KEY (`id`,`number`),
  ADD KEY `multiple-choice_ibfk_1` (`vraag_id`);

--
-- Indexen voor tabel `open`
--
ALTER TABLE `open`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vraag_id` (`vraag_id`);

--
-- Indexen voor tabel `richting`
--
ALTER TABLE `richting`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vragen`
--
ALTER TABLE `vragen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assesment_id` (`assesment_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `assesments`
--
ALTER TABLE `assesments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `husselen`
--
ALTER TABLE `husselen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `richting`
--
ALTER TABLE `richting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `vragen`
--
ALTER TABLE `vragen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `assesments`
--
ALTER TABLE `assesments`
  ADD CONSTRAINT `assesments_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`),
  ADD CONSTRAINT `assesments_ibfk_2` FOREIGN KEY (`husselen_id`) REFERENCES `husselen` (`id`),
  ADD CONSTRAINT `assesments_ibfk_3` FOREIGN KEY (`richting_id`) REFERENCES `richting` (`id`);

--
-- Beperkingen voor tabel `fill-in`
--
ALTER TABLE `fill-in`
  ADD CONSTRAINT `fill-in_ibfk_1` FOREIGN KEY (`vraag_id`) REFERENCES `vragen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `gebruikersantwoord`
--
ALTER TABLE `gebruikersantwoord`
  ADD CONSTRAINT `gebruikersantwoord_ibfk_1` FOREIGN KEY (`vraag_id`) REFERENCES `vragen` (`id`),
  ADD CONSTRAINT `gebruikersantwoord_ibfk_4` FOREIGN KEY (`keuze_id`) REFERENCES `multiple-choice` (`id`);

--
-- Beperkingen voor tabel `multiple-choice`
--
ALTER TABLE `multiple-choice`
  ADD CONSTRAINT `multiple-choice_ibfk_1` FOREIGN KEY (`vraag_id`) REFERENCES `vragen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `open`
--
ALTER TABLE `open`
  ADD CONSTRAINT `open_ibfk_1` FOREIGN KEY (`vraag_id`) REFERENCES `vragen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `vragen`
--
ALTER TABLE `vragen`
  ADD CONSTRAINT `vragen_ibfk_1` FOREIGN KEY (`assesment_id`) REFERENCES `assesments` (`id`);