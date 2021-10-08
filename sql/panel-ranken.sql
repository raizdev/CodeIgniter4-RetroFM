CREATE TABLE `panelranks` (
  `id` int(11) NOT NULL,
  `djrank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `panelranks` (`id`, `djrank`) VALUES
	(1, 'Speler'),
	(2, 'DJ in Opleiding');

alter table users
	ADD `panelrank` int(11) NOT NULL DEFAULT 1,
	ADD `force_logoff` int(11) DEFAULT 0