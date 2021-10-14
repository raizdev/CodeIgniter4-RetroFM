-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 sep 2021 om 14:58
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `habnetfm`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `habnet_events`
--

CREATE TABLE `habnet_events` (
  `id` int(255) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `verhaal` varchar(255) NOT NULL,
  `afbeelding` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `habnet_events`
--

INSERT INTO `habnet_events` (`id`, `titel`, `verhaal`, `afbeelding`, `author`) VALUES
(1, 'Event Testing #1', 'jdwdewanfns v oang nvdf ', 'https://cdn.davidv053.nl/habnet/nieuws/promo_clouds.gif', 'Milan');

-- --------------------------------------------------------

-- ----------------------------
-- Table structure for habnet_nieuws
-- ----------------------------
DROP TABLE IF EXISTS `habnet_nieuws`;
CREATE TABLE `habnet_nieuws`  (
  `id` int(20) NOT NULL,
  `titel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uitleg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tekst` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `afbeelding` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of habnet_nieuws
-- ----------------------------
INSERT INTO `habnet_nieuws` VALUES (1, 'Test', 'Testen van het uitleg', 'TEKSTEN VAN NIEUWS 1 NATUURLIJK', 'https://cdn.davidv053.nl/habnet/nieuws/VxT0uw1.jpg', '2');
INSERT INTO `habnet_nieuws` VALUES (2, 'Testen 2', 'Testen van het uitleg', 'TEKSTEN VAN NIEUWS 2', 'https://cdn.davidv053.nl/habnet/nieuws/carnaval_topstory.gif', '2');
INSERT INTO `habnet_nieuws` VALUES (3, 'Blabla', 'Testassaas', 'SAASSAASASSA', 'https://cdn.davidv053.nl/habnet/nieuws/VxT0uw1.jpg', '2');
INSERT INTO `habnet_nieuws` VALUES (4, 'SASAS', 'SSASASAASAS', 'SASASSA', 'https://cdn.davidv053.nl/habnet/nieuws/carnaval_topstory.gif', '2');
INSERT INTO `habnet_nieuws` VALUES (5, 'ASASSASA', 'ASASSA', 'ASSASASA', 'https://cdn.davidv053.nl/habnet/nieuws/carnaval_topstory.gif', '2');

-- ----------------------------
-- Table structure for habnet_nieuws_reacties
-- ----------------------------
DROP TABLE IF EXISTS `habnet_nieuws_reacties`;
CREATE TABLE `habnet_nieuws_reacties`  (
  `id` int(11) NOT NULL,
  `article_id` int(11) NULL DEFAULT NULL,
  `message` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of habnet_nieuws_reacties
-- ----------------------------
INSERT INTO `habnet_nieuws_reacties` VALUES (1, 1, 'test', 2);
INSERT INTO `habnet_nieuws_reacties` VALUES (2, 1, 'tassa', 2);

--
-- Tabelstructuur voor tabel `habnet_verzoeken`
--

CREATE TABLE `habnet_verzoeken` (
  `id` int(11) NOT NULL,
  `habnet_naam` varchar(255) NOT NULL,
  `verzoeken` varchar(255) DEFAULT NULL,
  `userlook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `habnet_verzoeken`
--

INSERT INTO `habnet_verzoeken` (`id`, `habnet_naam`, `verzoeken`, `userlook`) VALUES
(9, 'Milan', 'feefefefef', 'hr-115-42.hd-195-19.ch-3030-82.lg-275-1408.fa-1201.ca-1804-64'),
(10, 'TestAccount', 'David dit werkt hehe', 'cc-3158-110.wa-2007-0.ha-1004-1195.fa-570698-1195.sh-290-1195.hr-100-0.lg-275-89.hd-3092-24.ch-215-83');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `panelranks`
--

CREATE TABLE `panelranks` (
  `id` int(11) NOT NULL,
  `djrank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `panelranks`
--

INSERT INTO `panelranks` (`id`, `djrank`) VALUES
(1, 'Speler'),
(2, 'DJ in Opleiding');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `real_name` varchar(25) NOT NULL DEFAULT 'KREWS DEV',
  `password` varchar(64) NOT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `mail_verified` enum('0','1') NOT NULL DEFAULT '0',
  `account_created` int(11) NOT NULL,
  `account_day_of_birth` int(11) NOT NULL DEFAULT 0,
  `last_login` int(11) NOT NULL DEFAULT 0,
  `last_online` int(11) NOT NULL DEFAULT 0,
  `motto` varchar(127) NOT NULL DEFAULT '',
  `look` varchar(256) NOT NULL DEFAULT 'hr-115-42.hd-195-19.ch-3030-82.lg-275-1408.fa-1201.ca-1804-64',
  `gender` enum('M','F') NOT NULL DEFAULT 'M',
  `rank` int(2) NOT NULL DEFAULT 1,
  `credits` int(11) NOT NULL DEFAULT 2500,
  `pixels` int(11) NOT NULL DEFAULT 500,
  `points` int(11) NOT NULL DEFAULT 10,
  `online` enum('0','1','2') NOT NULL DEFAULT '0',
  `auth_ticket` varchar(256) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `ip_register` varchar(45) NOT NULL,
  `ip_current` varchar(45) NOT NULL COMMENT 'Have your CMS update this IP. If you do not do this IP banning won''t work!',
  `machine_id` varchar(64) NOT NULL DEFAULT '',
  `home_room` int(32) NOT NULL DEFAULT 0,
  `secret_key` varchar(40) DEFAULT NULL,
  `pincode` varchar(11) DEFAULT NULL,
  `extra_rank` int(2) DEFAULT NULL,
  `profile_background` varchar(50) NOT NULL DEFAULT 'bg_colour_03.gif',
  `hotelview` varchar(50) NOT NULL DEFAULT 'view_us_wide.png',
  `panelrank` int(11) NOT NULL DEFAULT 1,
  `force_logoff` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `real_name`, `password`, `mail`, `mail_verified`, `account_created`, `account_day_of_birth`, `last_login`, `last_online`, `motto`, `look`, `gender`, `rank`, `credits`, `pixels`, `points`, `online`, `auth_ticket`, `ip_register`, `ip_current`, `machine_id`, `home_room`, `secret_key`, `pincode`, `extra_rank`, `profile_background`, `hotelview`, `panelrank`, `force_logoff`) VALUES
(2, 'Milan', 'KREWS DEV', 'verborgen', 'verborgen@gmial.com', '0', 1623773045, 0, 1624462704, 0, 'none', 'hr-115-42.hd-195-19.ch-3030-82.lg-275-1408.fa-1201.ca-1804-64', 'M', 7, 2500, 500, 10, '0', 'GoldFish-0151aedd-e151-4cfc-b7e8-bf9014affa48', '::1', '127.0.0.1', '', 0, NULL, NULL, NULL, '05.gif', 'view_us_wide.png', 2, 0),
(3, 'TestAccount', 'KREWS DEV', 'verborgen', 'lmao@gmail.com', '0', 1623773045, 0, 1624462704, 0, 'none', 'cc-3158-110.wa-2007-0.ha-1004-1195.fa-570698-1195.sh-290-1195.hr-100-0.lg-275-89.hd-3092-24.ch-215-83', 'M', 7, 2500, 500, 10, '0', 'GoldFish-0151aedd-e151-4cfc-b7e8-bf9014affa48', '::1', '127.0.0.1', '', 0, NULL, NULL, NULL, '05.gif', 'view_us_wide.png', 1, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `habnet_events`
--
ALTER TABLE `habnet_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `habnet_nieuws`
--
ALTER TABLE `habnet_nieuws`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `habnet_verzoeken`
--
ALTER TABLE `habnet_verzoeken`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `panelranks`
--
ALTER TABLE `panelranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `habnet_verzoeken`
--
ALTER TABLE `habnet_verzoeken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `panelranks`
--
ALTER TABLE `panelranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
