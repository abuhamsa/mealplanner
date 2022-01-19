-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Erstellungszeit: 19. Jan 2022 um 11:50
-- Server-Version: 5.5.68-MariaDB
-- PHP-Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mealplanner`
--
CREATE DATABASE IF NOT EXISTS `mealplanner` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mealplanner`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dayplan_simple`
--

CREATE TABLE `dayplan_simple` (
  `dayplan_s_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `mittag_nat` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mittag_jan` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `abend_nat` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `abend_jan` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `dayplan_simple`
--
ALTER TABLE `dayplan_simple`
  ADD PRIMARY KEY (`dayplan_s_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `dayplan_simple`
--
ALTER TABLE `dayplan_simple`
  MODIFY `dayplan_s_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
