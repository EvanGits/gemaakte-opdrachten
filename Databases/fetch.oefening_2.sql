--
-- Database: `fetch_oefening_2`
--
CREATE DATABASE IF NOT EXISTS `fetch_oefening_2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fetch_oefening_2`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gegevens`
--

CREATE TABLE `gegevens` (
  `stad` int(10) NOT NULL,
  `straat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
