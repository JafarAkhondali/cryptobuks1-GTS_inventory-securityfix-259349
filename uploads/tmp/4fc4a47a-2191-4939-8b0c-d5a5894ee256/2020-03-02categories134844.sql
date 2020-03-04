-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 09 Mars 2019 à 07:39
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ciblog`
--
CREATE DATABASE IF NOT EXISTS `ciblog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ciblog`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`category_id`, `user_id`, `name`, `created_at`) VALUES
(15, 0, 'Sante', '2019-02-20 09:00:17'),
(16, 0, 'Education', '2019-02-20 09:00:24'),
(17, 0, 'n', '2019-02-20 09:14:19'),
(18, 0, 'jijij', '2019-02-20 09:14:58'),
(19, 0, 'sport', '2019-02-20 09:15:13'),
(20, 0, 'b', '2019-02-20 10:48:45'),
(21, 0, 'commedie', '2019-02-21 07:36:12'),
(22, 0, 's', '2019-02-21 07:36:21'),
(23, 0, 'sw', '2019-02-21 07:36:29'),
(24, 0, 'musique', '2019-02-21 09:44:45'),
(25, 0, 'stage', '2019-02-25 09:34:13'),
(26, 0, 'industrie', '2019-03-06 10:30:45');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 8, 'd', 'dhdh@gmail.com', 'dbdbddbdbdbdbd', '2018-12-18 08:50:23'),
(2, 8, 'felicite', 'feli@gmail.com', 'thank you very match', '2018-12-18 09:20:57'),
(3, 8, 'd', 'dhdh@gmail.com', 'je vous aime', '2018-12-18 17:11:50'),
(4, 36, 'bbbb', 'chanice@gmail.com', 'xxxxxxb', '2019-01-28 09:33:14');

-- --------------------------------------------------------

--
-- Structure de la table `emission`
--

CREATE TABLE `emission` (
  `emission_id` int(11) NOT NULL,
  `souscategory_id` int(11) NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `jours` enum('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(45, 6, 1, 'course', 'course', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkssssssssssssssssssssssssssssssnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnxxxxxxxxxxxxxxxxxxxxxxxxxxxxmmmmmmmmmmmmmmmmmmmmmmmmmmcxcccccccccxxxxxxxxxxxxxxxxxxxxx', 'picture001.jpg', '0000-00-00 00:00:00'),
(46, 6, 1, 'competition', 'competition', '', 'Screenshot_(2)5.png', '0000-00-00 00:00:00'),
(47, 8, 1, 'voiture', 'voiture', 'qjjjjjjjjjjjjwwwwwwwwwwwwwwwwjdsjjjjjjjjj', 'Screenshot_(2)6.png', '0000-00-00 00:00:00'),
(48, 19, 1, 'ok', 'ok', 'snmmmmmmmmmmmmnx', 'Screenshot_(2)7.png', '0000-00-00 00:00:00'),
(49, 15, 1, 'maladie', 'maladie', 'mamnsmnmsxbdmnd', 'Screenshot_(2)8.png', '0000-00-00 00:00:00'),
(50, 16, 1, 'ego', 'ego', 'nabandi barabizi', '2.jpg', '0000-00-00 00:00:00'),
(51, 19, 1, 'Ouverture', 'Ouverture', 'Hahahaaa ca fonctionne parfaitement', '20.jpg', '0000-00-00 00:00:00'),
(52, 19, 1, 'match', 'match', 'Aigle Noir contre le messager', '4_.jpg', '0000-00-00 00:00:00'),
(53, 19, 1, 'competition', 'competition', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkssssssssssssssssssssssssssssssnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnxxxxxxxxxxxxxxxxxxxxxxxxxxxxmmmmmmmmmmmmmmmmmmmmmmmmmmcxcccccccccxxxxxxxxxxxxxxxxxxxxx', '1.jpg', '0000-00-00 00:00:00'),
(54, 18, 1, 'industrie', 'industrie', 'Ouverture d''une usine de production du savon ', 'P1.jpg', '0000-00-00 00:00:00'),
(55, 19, 1, 'course', 'course', 'mmmmmmmmmm', 'images_(8).jpg', '0000-00-00 00:00:00'),
(56, 24, 1, 'ttttttt', 'ttttttt', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkssssssssssssssssssssssssssssssnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnxxxxxxxxxxxxxxxxxxxxxxxxxxxxmmmmmmmmmmmmmmmmmmmmmmmmmmcxcccccccccxxxxxxxxxxxxxxxxxxxxx', '6.jpg', '0000-00-00 00:00:00'),
(57, 19, 1, 'course', 'course', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaalllllllllllllllllllllllllllllllllllllllllllllnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '5.jpg', '0000-00-00 00:00:00'),
(58, 16, 1, 'Arrivage', 'Arrivage', 'jjjjjjjjjjjjjiiiiiiiiiiiiiiiiiiiiiiiiijjjjjjjjjjjjjj', 'images_(2).jpg', '0000-00-00 00:00:00'),
(59, 26, 1, 'ahahahahha', 'ahahahahha', 'nnnnnnnnnnnnnnnnnnnsnnnnnnnnnnnnnnnnnn', '7.jpg', '0000-00-00 00:00:00'),
(60, 25, 1, 'aaahn', 'aaahn', ' nannnnnnnnnnnnnn', '240_F_103762775_TAR9ZkEQSNfrXjiAPrukzCiWGDo2Pwxj.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `souscategories`
--

CREATE TABLE `souscategories` (
  `souscategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `souscatname` varchar(255) NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `jours` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `souscategories`
--

INSERT INTO `souscategories` (`souscategory_id`, `category_id`, `user_id`, `souscatname`, `heure_debut`, `heure_fin`, `jours`, `created_at`) VALUES
(11, 17, 0, 'nnnn', '00:00:00', '00:00:00', 'Lundi', '2019-03-01 08:13:49'),
(12, 21, 0, 'bsss', '03:23:00', '12:01:00', 'Mardi,Merecredi', '0000-00-00 00:00:00'),
(14, 16, 0, 'hkynm', '17:12:00', '18:12:00', 'Mardi,Jeudi', '0000-00-00 00:00:00'),
(15, 21, 0, 'hy', '23:12:00', '01:02:00', 'Lundi,Vendredi', '0000-00-00 00:00:00'),
(16, 21, 0, 'hy', '23:12:00', '01:02:00', 'Lundi,Vendredi', '0000-00-00 00:00:00'),
(17, 16, 0, 'hy', '11:11:00', '12:12:00', 'Merecredi,Jeudi', '0000-00-00 00:00:00'),
(18, 21, 0, 'nqnnqnqn', '12:14:00', '14:15:00', 'Mardi,Merecredi,Jeudi', '0000-00-00 00:00:00'),
(19, 20, 0, 'iqjjks', '19:19:00', '20:19:00', 'Lundi,Dimanche', '0000-00-00 00:00:00'),
(20, 19, 0, 'nqnnqnqn', '14:14:00', '15:15:00', 'Mardi,Jeudi,Samedi', '0000-00-00 00:00:00'),
(21, 23, 0, 'ddds', '18:19:00', '19:20:00', 'Mardi,Dimanche', '0000-00-00 00:00:00'),
(22, 25, 0, 'ahjsjak', '18:12:00', '19:20:00', 'Lundi,Dimanche', '0000-00-00 00:00:00'),
(23, 18, 0, 'nnnn', '17:01:00', '18:19:00', 'Mardi,Vendredi', '0000-00-00 00:00:00'),
(24, 16, 0, 'nnnn', '12:13:00', '13:01:00', 'Mardi', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, '0', 123456, 'feli4@gmail.com', 'kezanadine', '123123', '2018-12-18 11:07:01'),
(2, '0', 12393, 'yego@gmail.com', 'yegomama', 'fca154d64f34dda1322c4888c4da90cf', '2018-12-18 17:06:33'),
(3, '0', 88888, 'fefe@gmail.com', 'feffewow', '0d06fd8cb26eb57f1a690f493663cc55', '2018-12-18 17:10:40'),
(4, '0', 789789, 'igiraneza@gmail.com', 'igiranezadivine', 'c2610f901735286e712ef0a11df1535b', '2018-12-18 18:39:30'),
(5, '0', 88888, 'claude@gmailcom', 'claudeclaude', '8bb75b3015682d910daf88b6d728be2c', '2018-12-18 19:46:45'),
(6, '0', 333, 'belyse@gmail.com', 'belysekajebukeye', 'b2d34f60496796a50f159f923911dc20', '2018-12-19 06:02:27'),
(7, 'chanice', 11111, 'chanice@gmail.com', 'chanicechacha', '64dae22589ac6b2cb92c567939e7ee47', '2018-12-19 06:44:01');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `souscategories`
--
ALTER TABLE `souscategories`
  ADD PRIMARY KEY (`souscategory_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `souscategories`
--
ALTER TABLE `souscategories`
  MODIFY `souscategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;--
-- Base de données :  `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Contenu de la table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{"angular_direct":"direct","snap_to_grid":"off","relation_lines":"true"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Contenu de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"ciblog","table":"souscategories"},{"db":"ciblog","table":"posts"},{"db":"ciblog","table":"categories"},{"db":"ciblog","table":"users"},{"db":"sgci_database","table":"rubrique"},{"db":"ciblog","table":"emission"},{"db":"sgci_database","table":"personne"},{"db":"sgci_database","table":"user"},{"db":"sgci_database","table":"compte_patron"},{"db":"sgci_database","table":"budget_trimestre"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Contenu de la table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ciblog', 'posts', '{"sorted_col":"`posts`.`id`  ASC limit 3"}', '2019-03-05 12:04:34'),
('root', 'sgci_database', 'compte', '{"sorted_col":"`compte`.`libelle` ASC"}', '2018-09-20 19:39:43'),
('root', 'sgci_database', 'compte_patron', '{"sorted_col":"`compte_patron`.`id_patron`  DESC"}', '2019-02-06 11:54:47');

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Contenu de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-09-11 17:33:09', '{"lang":"fr","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Base de données :  `sgci_database`
--
CREATE DATABASE IF NOT EXISTS `sgci_database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sgci_database`;

-- --------------------------------------------------------

--
-- Structure de la table `alimentation_compte`
--

CREATE TABLE `alimentation_compte` (
  `id_alimentation_compte` int(8) NOT NULL,
  `id_budget_trimestre_compte_patron` int(8) NOT NULL,
  `montant_alimentation` int(8) NOT NULL,
  `date_alimentation` varchar(150) DEFAULT NULL,
  `id_piece_justificatif` int(8) NOT NULL,
  `reference_BRB` varchar(50) NOT NULL,
  `statut` int(2) NOT NULL,
  `id_user` int(8) DEFAULT NULL,
  `date_demande` varchar(150) DEFAULT NULL,
  `motif_rejet` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `beneficiare`
--

CREATE TABLE `beneficiare` (
  `id_beneficiaire` int(8) NOT NULL,
  `id_personne` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `beneficiare`
--

INSERT INTO `beneficiare` (`id_beneficiaire`, `id_personne`) VALUES
(2, 1),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(25, 2),
(22, 3),
(23, 6),
(24, 9);

-- --------------------------------------------------------

--
-- Structure de la table `budget`
--

CREATE TABLE `budget` (
  `id_budget` int(8) NOT NULL,
  `annee` int(5) NOT NULL,
  `designation` varchar(35) DEFAULT NULL,
  `consommation` int(8) NOT NULL,
  `montant_budget` int(8) NOT NULL,
  `date_prevision` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `budget`
--

INSERT INTO `budget` (`id_budget`, `annee`, `designation`, `consommation`, `montant_budget`, `date_prevision`) VALUES
(1, 2019, 'le buget pour 2019', 0, 1000000, '05-01-2019 11:05');

-- --------------------------------------------------------

--
-- Structure de la table `budget_trimestre`
--

CREATE TABLE `budget_trimestre` (
  `id_budget_trimestre` int(8) NOT NULL,
  `id_budget` int(8) NOT NULL,
  `id_trimestre` int(8) NOT NULL,
  `montant_trimestre` int(8) NOT NULL,
  `consommation_trimestre` int(9) NOT NULL,
  `date_trimestre` varchar(100) NOT NULL,
  `statut` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `budget_trimestre`
--

INSERT INTO `budget_trimestre` (`id_budget_trimestre`, `id_budget`, `id_trimestre`, `montant_trimestre`, `consommation_trimestre`, `date_trimestre`, `statut`) VALUES
(1, 1, 1, 200000, -5000000, '2019-01-05', 1),
(2, 1, 2, 250000, -5000000, '2019-01-05', 1),
(3, 1, 3, 250000, -5000000, '2019-01-05', 1),
(4, 1, 4, 250000, -5000000, '2019-01-05', 1);

-- --------------------------------------------------------

--
-- Structure de la table `budget_trimestre_compte_patron`
--

CREATE TABLE `budget_trimestre_compte_patron` (
  `id_budget_trimestre_compte_patron` int(8) NOT NULL,
  `id_budget_trimestre` int(8) NOT NULL,
  `id_compte_patron` int(8) NOT NULL,
  `montant_trimestre` int(8) NOT NULL,
  `date_trimestre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `budget_trimestre_compte_patron`
--

INSERT INTO `budget_trimestre_compte_patron` (`id_budget_trimestre_compte_patron`, `id_budget_trimestre`, `id_compte_patron`, `montant_trimestre`, `date_trimestre`) VALUES
(1, 1, 1, 3800, '05-01-2019');

-- --------------------------------------------------------

--
-- Structure de la table `caisse`
--

CREATE TABLE `caisse` (
  `id_caisse` int(8) NOT NULL,
  `designation_caisse` varchar(35) DEFAULT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `caisse`
--

INSERT INTO `caisse` (`id_caisse`, `designation_caisse`, `id_user`) VALUES
(3, 'caisse carmel', 2),
(4, 'caisse kabezya', 4),
(5, 'caisse6', 6),
(6, 'caisse7', 8),
(7, 'caisse12', 9);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compte` int(8) NOT NULL,
  `numero` varchar(35) NOT NULL,
  `libelle` varchar(35) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`id_compte`, `numero`, `libelle`, `statut`) VALUES
(1, '669', 'frais de mission', 1),
(2, '6325', 'frais de transport', 1),
(3, '56829', 'frais de loisirs', 1),
(4, '45367', 'frais de connexion', 1),
(5, '920-219', 'frais medicaux', 1),
(7, '728-1982', 'frais medicau', 1),
(8, '738-29', 'frais de stage', 0),
(9, '7890', 'hy', 0),
(10, '32873', 'cx', 0),
(11, '920-210', 'l', 0),
(12, '123', 'frais funeraire', 1);

-- --------------------------------------------------------

--
-- Structure de la table `compte_patron`
--

CREATE TABLE `compte_patron` (
  `id_compte_patron` int(8) NOT NULL,
  `id_patron` int(8) NOT NULL,
  `id_compte` int(8) NOT NULL,
  `montant_compte` int(15) NOT NULL,
  `statut` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte_patron`
--

INSERT INTO `compte_patron` (`id_compte_patron`, `id_patron`, `id_compte`, `montant_compte`, `statut`) VALUES
(1, 1, 1, 27800, 1),
(2, 2, 1, 0, 1),
(3, 1, 2, 0, 1),
(4, 2, 2, 0, 1),
(5, 1, 3, 0, 1),
(6, 2, 4, 0, 1),
(7, 1, 12, 0, 1),
(8, 2, 12, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `compte_patron_caisse`
--

CREATE TABLE `compte_patron_caisse` (
  `id_compte_caisse_patron` int(8) NOT NULL,
  `id_compte_patron` int(8) NOT NULL,
  `id_caisse` int(8) NOT NULL,
  `statut` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte_patron_caisse`
--

INSERT INTO `compte_patron_caisse` (`id_compte_caisse_patron`, `id_compte_patron`, `id_caisse`, `statut`) VALUES
(1, 1, 3, 1),
(2, 2, 3, 1),
(3, 1, 4, 0),
(4, 2, 4, 0),
(5, 3, 4, 1),
(6, 4, 4, 1),
(7, 1, 5, 0),
(8, 2, 5, 0),
(9, 3, 5, 0),
(10, 4, 5, 0),
(11, 5, 3, 0),
(12, 5, 4, 0),
(13, 5, 5, 1),
(14, 1, 6, 0),
(15, 2, 6, 0),
(16, 3, 6, 0),
(17, 4, 6, 0),
(18, 5, 6, 0),
(19, 6, 3, 0),
(20, 6, 4, 0),
(21, 6, 5, 0),
(22, 6, 6, 1),
(24, 6, 3, 0),
(25, 6, 4, 0),
(26, 6, 5, 0),
(27, 6, 6, 0),
(28, 6, 3, 0),
(29, 6, 4, 0),
(30, 6, 5, 0),
(31, 6, 6, 0),
(32, 6, 3, 0),
(33, 6, 4, 0),
(34, 6, 5, 0),
(35, 6, 6, 0),
(36, 7, 3, 0),
(37, 7, 4, 0),
(38, 7, 5, 0),
(39, 7, 6, 1),
(40, 8, 3, 0),
(41, 8, 4, 0),
(42, 8, 5, 0),
(43, 8, 6, 1),
(44, 1, 7, 0),
(45, 2, 7, 0),
(46, 3, 7, 0),
(47, 4, 7, 0),
(48, 5, 7, 0),
(49, 6, 7, 0),
(50, 7, 7, 0),
(51, 8, 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `id_droit` int(8) NOT NULL,
  `id_fonction` int(8) NOT NULL,
  `d_users` int(2) DEFAULT '0',
  `d_fonction` int(2) DEFAULT '0',
  `d_droit` int(2) DEFAULT '0',
  `d_caisse` int(2) DEFAULT '0',
  `d_affectation_caisse_compte` int(2) DEFAULT '0',
  `d_compte` int(2) DEFAULT '0',
  `d_affectation_compte_patron` int(2) DEFAULT '0',
  `d_budget` int(2) DEFAULT '0',
  `d_demande_approvisionnement_caisse` int(2) DEFAULT '0',
  `d_validation_demande` int(2) DEFAULT '0',
  `d_sortie_fonds` int(2) DEFAULT '0',
  `d_rapport_budget` int(2) DEFAULT '0',
  `d_rapport_caisse` int(2) DEFAULT '0',
  `d_administration` int(2) DEFAULT '0',
  `d_archivage` int(2) DEFAULT '0',
  `d_g_caisse` int(2) DEFAULT '0',
  `d_post` int(2) DEFAULT '0',
  `d_download` int(2) DEFAULT '0',
  `nb_droit` int(8) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `droit`
--

INSERT INTO `droit` (`id_droit`, `id_fonction`, `d_users`, `d_fonction`, `d_droit`, `d_caisse`, `d_affectation_caisse_compte`, `d_compte`, `d_affectation_compte_patron`, `d_budget`, `d_demande_approvisionnement_caisse`, `d_validation_demande`, `d_sortie_fonds`, `d_rapport_budget`, `d_rapport_caisse`, `d_administration`, `d_archivage`, `d_g_caisse`, `d_post`, `d_download`, `nb_droit`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(2, 2, 0, 0, 1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 8),
(3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `fichierID` int(11) NOT NULL,
  `id_sous_rubrique` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `nom_fichier` varchar(50) NOT NULL,
  `date_post` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fichier`
--

INSERT INTO `fichier` (`fichierID`, `id_sous_rubrique`, `titre`, `nom_fichier`, `date_post`, `id_user`) VALUES
(18, 8, 'rapport du 08/02', 'stock_article_boutique1.pdf', '2019-02-08 07:02:40', 1),
(19, 8, 'rapport du 07/02', 'livre_caisse4.pdf', '2019-02-08 07:02:44', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `statut` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `designation`, `statut`) VALUES
(1, 'admin', 1),
(2, 'g8', 1),
(3, 'comptable', 1),
(4, 'ministre', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fonction_user`
--

CREATE TABLE `fonction_user` (
  `id_fonction_user` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `id_fonction` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fonction_user`
--

INSERT INTO `fonction_user` (`id_fonction_user`, `id_user`, `id_fonction`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4),
(6, 6, 3),
(7, 7, 2),
(8, 8, 3),
(9, 9, 3);

-- --------------------------------------------------------

--
-- Structure de la table `historique_alimentation_compte`
--

CREATE TABLE `historique_alimentation_compte` (
  `id_alimentation_compte` int(8) NOT NULL,
  `id_budget_trimestre_compte_patron` int(8) NOT NULL,
  `montant_alimentation` int(8) NOT NULL,
  `date_alimentation` varchar(150) DEFAULT NULL,
  `statut` int(2) NOT NULL,
  `id_user` int(8) DEFAULT NULL,
  `id_piece_justificatif` int(8) NOT NULL,
  `reference_BRB` varchar(50) NOT NULL,
  `date_demande` varchar(150) NOT NULL,
  `motif_rejet` text,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_beneficiare`
--

CREATE TABLE `historique_beneficiare` (
  `id_beneficiaire` int(8) NOT NULL,
  `id_personne` int(8) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_beneficiare`
--

INSERT INTO `historique_beneficiare` (`id_beneficiaire`, `id_personne`, `operation`, `date`, `id_user_operation`) VALUES
(3, 2, 'delete', '05-02-2019', 2),
(1, 2, 'delete', '05-02-2019', 2);

-- --------------------------------------------------------

--
-- Structure de la table `historique_budget`
--

CREATE TABLE `historique_budget` (
  `id_budget` int(8) NOT NULL,
  `annee` int(5) NOT NULL,
  `designation` varchar(35) DEFAULT NULL,
  `montant_budget` int(8) NOT NULL,
  `date_prevision` varchar(45) NOT NULL,
  `consommation` int(8) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_budget`
--

INSERT INTO `historique_budget` (`id_budget`, `annee`, `designation`, `montant_budget`, `date_prevision`, `consommation`, `operation`, `date`, `id_user_operation`) VALUES
(1, 2019, 'le buget pour 2019', 2147483647, '05-01-2019 11:05', 2147483647, 'update', '05-01-2019 11:05', 1),
(1, 2019, 'le buget pour 2019', 1000000, '05-01-2019 11:05', 1000000, 'update', '05-01-2019 11:05', 1),
(1, 2019, 'le buget pour 2019', 1000000, '05-01-2019 11:05', 750000, 'update', '05-01-2019 11:05', 1),
(1, 2019, 'le buget pour 2019', 1000000, '05-01-2019 11:05', 500000, 'update', '05-01-2019 11:05', 1),
(1, 2019, 'le buget pour 2019', 1000000, '05-01-2019 11:05', 250000, 'update', '05-01-2019 11:05', 1);

-- --------------------------------------------------------

--
-- Structure de la table `historique_budget_trimestre`
--

CREATE TABLE `historique_budget_trimestre` (
  `id_budget_trimestre` int(8) NOT NULL,
  `id_budget` int(8) NOT NULL,
  `id_trimestre` int(8) NOT NULL,
  `montant_trimestre` int(8) NOT NULL,
  `consmmation_trimestre` int(9) NOT NULL,
  `date_trimestre` varchar(100) NOT NULL,
  `statut` int(2) DEFAULT '1',
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_budget_trimestre`
--

INSERT INTO `historique_budget_trimestre` (`id_budget_trimestre`, `id_budget`, `id_trimestre`, `montant_trimestre`, `consmmation_trimestre`, `date_trimestre`, `statut`, `operation`, `date`, `id_user_operation`) VALUES
(1, 1, 1, 0, 0, '05-01-2019', 1, 'update', '05-01-2019 11:05', 1),
(2, 1, 2, 0, 0, '05-01-2019', 1, 'update', '05-01-2019 11:05', 1),
(3, 1, 3, 0, 0, '05-01-2019', 1, 'update', '05-01-2019 11:05', 1),
(3, 1, 3, 250000, 0, '2019-01-05', 1, 'update', '05-01-2019 11:05', 1),
(4, 1, 4, 0, 0, '05-01-2019', 1, 'update', '05-01-2019 11:05', 1),
(4, 1, 4, 250000, 0, '2019-01-05', 1, 'update', '05-01-2019 11:05', 1);

-- --------------------------------------------------------

--
-- Structure de la table `historique_budget_trimestre_compte`
--

CREATE TABLE `historique_budget_trimestre_compte` (
  `id_budget_trimestre_compte` int(8) NOT NULL,
  `id_budget_trimestre` int(8) NOT NULL,
  `id_compte` int(8) NOT NULL,
  `montant_trimestre` int(8) NOT NULL,
  `date_trimestre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_caisse`
--

CREATE TABLE `historique_caisse` (
  `id_caisse` int(8) NOT NULL,
  `id_compte` int(8) NOT NULL,
  `designation_caisse` varchar(35) DEFAULT NULL,
  `id_user` int(8) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_compte`
--

CREATE TABLE `historique_compte` (
  `id_compte` int(8) NOT NULL,
  `numero` varchar(35) NOT NULL,
  `libelle` varchar(35) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_compte_caisse_patron`
--

CREATE TABLE `historique_compte_caisse_patron` (
  `id_compte_caisse_patron` int(8) NOT NULL,
  `id_compte_patron` int(8) NOT NULL,
  `id_caisse` int(8) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_compte_patron`
--

CREATE TABLE `historique_compte_patron` (
  `id_compte_patron` int(8) NOT NULL,
  `id_patron` int(8) NOT NULL,
  `id_compte` int(8) NOT NULL,
  `montant_compte` int(15) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_compte_patron`
--

INSERT INTO `historique_compte_patron` (`id_compte_patron`, `id_patron`, `id_compte`, `montant_compte`, `operation`, `date`, `id_user_operation`) VALUES
(1, 1, 1, 26000, 'delete', '05-02-2019', 2),
(1, 1, 1, 36000, 'update', '05-02-2019', 2),
(1, 1, 1, 27900, 'update', '05-02-2019', 2),
(1, 1, 1, 26900, 'update', '05-02-2019', 2),
(1, 1, 1, 25900, 'update', '05-02-2019', 2),
(1, 1, 1, 24900, 'update', '05-02-2019', 2),
(1, 1, 1, 26900, 'update', '05-02-2019', 2),
(1, 1, 1, 27400, 'update', '05-02-2019', 2),
(1, 1, 1, 27300, 'update', '05-02-2019', 2),
(1, 1, 1, 27400, 'update', '05-02-2019', 2);

-- --------------------------------------------------------

--
-- Structure de la table `historique_fonction`
--

CREATE TABLE `historique_fonction` (
  `id_fonction` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_fonction_user`
--

CREATE TABLE `historique_fonction_user` (
  `id_fonction_user` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `id_fonction` int(8) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_fonction_user`
--

INSERT INTO `historique_fonction_user` (`id_fonction_user`, `id_user`, `id_fonction`, `operation`, `date`, `id_user_operation`) VALUES
(2, 2, 3, 'update', '2018-12-31 20:52:56', 2),
(5, 5, 4, 'update', '2018-12-31 21:24:45', 5),
(1, 1, 1, 'update', '2019-01-18 18:46:20', 7);

-- --------------------------------------------------------

--
-- Structure de la table `historique_personne`
--

CREATE TABLE `historique_personne` (
  `id_personne` int(8) NOT NULL,
  `matricule` varchar(40) DEFAULT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `cni` varchar(25) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_personne`
--

INSERT INTO `historique_personne` (`id_personne`, `matricule`, `nom`, `prenom`, `genre`, `cni`, `operation`, `date`, `id_user_operation`) VALUES
(2, '1231', 'nkeshimana', 'carmel', 'masculin', '12346', 'update', '2018-12-31 20:52:56', 2),
(5, '963', 'kaze', 'aletta', 'feminin', '963', 'update', '2018-12-31 21:24:44', 5),
(1, '123', 'admin@sgci.bi', 'admin', 'homme', '123', 'update', '2019-01-18 18:46:20', 7),
(2, '1231', 'nkeshimana', 'carmel', 'masculin', '12346', 'delete', '05-02-2019', 2),
(2, '1231', 'nkeshimana', 'carmel', 'masculin', '12346', 'delete', '05-02-2019', 2);

-- --------------------------------------------------------

--
-- Structure de la table `historique_piece_justificatif`
--

CREATE TABLE `historique_piece_justificatif` (
  `id_piece_justificatif` int(8) NOT NULL,
  `id_type_piece` int(8) NOT NULL,
  `id_beneficiaire` int(8) NOT NULL,
  `reference` varchar(35) NOT NULL,
  `motif` varchar(35) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_sortie_compte`
--

CREATE TABLE `historique_sortie_compte` (
  `id_sortie_compte` int(8) NOT NULL,
  `id_compte_patron` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `montant_sortie_compte` int(12) NOT NULL,
  `date_operation` varchar(150) DEFAULT NULL,
  `id_piece_justificatif` int(8) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_sortie_compte`
--

INSERT INTO `historique_sortie_compte` (`id_sortie_compte`, `id_compte_patron`, `id_user`, `montant_sortie_compte`, `date_operation`, `id_piece_justificatif`, `operation`, `date`, `id_user_operation`) VALUES
(1, 1, 2, 10000, '05-02-2019', 2, 'update', '05-02-2019', 2),
(1, 1, 2, 10000, '05-02-2019', 2, 'delete', '05-02-2019', 2),
(3, 1, 2, 9000, '05-02-2019', 21, 'update', '05-02-2019', 2),
(2, 1, 2, 5000, '05-02-2019', 20, 'update', '05-02-2019', 2),
(2, 1, 2, 4000, '05-02-2019', 20, 'update', '05-02-2019', 2),
(2, 1, 2, 3000, '05-02-2019', 20, 'update', '05-02-2019', 2),
(2, 1, 2, 4000, '05-02-2019', 20, 'update', '05-02-2019', 2),
(2, 1, 2, 2000, '05-02-2019', 20, 'update', '05-02-2019', 2),
(3, 1, 2, 900, '05-02-2019', 21, 'update', '05-02-2019', 2),
(2, 1, 2, 1500, '05-02-2019', 20, 'update', '05-02-2019', 2),
(2, 1, 2, 1400, '05-02-2019', 20, 'update', '05-02-2019', 2);

-- --------------------------------------------------------

--
-- Structure de la table `historique_type_operation`
--

CREATE TABLE `historique_type_operation` (
  `id_type_operation` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_type_pieces`
--

CREATE TABLE `historique_type_pieces` (
  `id_type_piece` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique_user`
--

CREATE TABLE `historique_user` (
  `id_user` int(8) NOT NULL,
  `id_personne` int(8) NOT NULL,
  `login` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `statut` int(2) NOT NULL DEFAULT '1',
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `historique_user`
--

INSERT INTO `historique_user` (`id_user`, `id_personne`, `login`, `password`, `statut`, `operation`, `date`, `id_user_operation`) VALUES
(2, 2, 'O33LY9', 'TQWV4R', 1, 'update', '2018-12-31 20:52:56', 2),
(5, 5, 'SJ9JFJ', 'AS4F25', 1, 'update', '2018-12-31 21:24:45', 5),
(1, 1, 'admin@sgci.bi', 'e10adc3949ba59abbe56e057f20f883e', 1, 'update', '2019-01-18 18:46:20', 7);

-- --------------------------------------------------------

--
-- Structure de la table `historique_validation`
--

CREATE TABLE `historique_validation` (
  `id_validation` int(8) NOT NULL,
  `id_budget_trimestre_compte_patron` int(8) NOT NULL,
  `date_validation` varchar(150) NOT NULL,
  `statut_validaton` int(2) NOT NULL,
  `id_user` int(8) NOT NULL,
  `motif_rejet` text,
  `operation` varchar(35) NOT NULL,
  `date` varchar(50) NOT NULL,
  `id_user_operation` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patron`
--

CREATE TABLE `patron` (
  `id_patron` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patron`
--

INSERT INTO `patron` (`id_patron`, `designation`) VALUES
(1, 'FDNB'),
(2, 'MDNAC');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(8) NOT NULL,
  `matricule` varchar(40) DEFAULT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `cni` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `matricule`, `nom`, `prenom`, `genre`, `cni`) VALUES
(1, '123', 'admin@sgci.bi', 'admin', 'feminin', '123'),
(2, '1231', 'nkeshimana', 'carmel', 'masculin', '12346'),
(3, '741', 'rusuku', 'yves', 'masculin', '741'),
(4, '852', 'kabezya', 'Martin', 'masculin', '852'),
(5, '963', 'kaze', 'aletta', 'feminin', '963'),
(6, '26738', 'Nzoyihaya', 'Freddy', 'masculin', '2314'),
(7, '1231122', 'rusuku', 'yves', 'masculin', '1234555'),
(8, '78906', 'BIZOZA', 'Ariella', 'feminin', '12321'),
(9, NULL, 'Rwasa', 'Benoit', 'masculin', 'ben234'),
(10, '2389', 'BIkora', 'Alan', 'Masculin', '172/2109.192');

-- --------------------------------------------------------

--
-- Structure de la table `piece_justificatif`
--

CREATE TABLE `piece_justificatif` (
  `id_piece_justificatif` int(8) NOT NULL,
  `id_type_piece` int(8) NOT NULL,
  `id_beneficiaire` int(8) NOT NULL,
  `reference` varchar(35) NOT NULL,
  `motif` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `piece_justificatif`
--

INSERT INTO `piece_justificatif` (`id_piece_justificatif`, `id_type_piece`, `id_beneficiaire`, `reference`, `motif`) VALUES
(2, 2, 2, '12323', 'frais de mission mission caval'),
(4, 1, 4, 'kf200', 'frais de mission'),
(5, 1, 5, 'kf200', 'frais de mission\r\n'),
(6, 1, 6, 'kf200', 'frais de mission'),
(7, 1, 7, 'kf200', 'mofae'),
(8, 1, 9, 'kf200', 'mofae'),
(9, 1, 10, 'kf200', 'motif'),
(10, 1, 11, 'kf20045', 'motif'),
(11, 1, 12, '123', 'motif'),
(12, 1, 13, 'kf200', 'motif'),
(13, 1, 14, 'kf200', 'frais de  mission'),
(16, 1, 17, '1516', 'motif'),
(17, 1, 18, 'kf200', 'motif'),
(18, 1, 20, 'ref45', 'alimentation ligne frais de transpo'),
(19, 1, 21, 'ref67', 'motif'),
(20, 2, 22, 'rusuku sortie', 'motif rusuku'),
(21, 1, 23, 'letre33', 'motif 122'),
(22, 1, 25, 'kf200', 'motif');

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE `rubrique` (
  `rubriqueID` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rubrique`
--

INSERT INTO `rubrique` (`rubriqueID`, `designation`, `id_user`) VALUES
(10, 'rapport', 1),
(12, 'securite interieure', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sortie_compte`
--

CREATE TABLE `sortie_compte` (
  `id_sortie_compte` int(8) NOT NULL,
  `id_compte_patron` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `montant_sortie_compte` int(12) NOT NULL,
  `date_operation` varchar(150) DEFAULT NULL,
  `id_piece_justificatif` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sortie_compte`
--

INSERT INTO `sortie_compte` (`id_sortie_compte`, `id_compte_patron`, `id_user`, `montant_sortie_compte`, `date_operation`, `id_piece_justificatif`) VALUES
(2, 1, 2, 1000, '02-05-2019', 20),
(3, 1, 2, 1000, '02-05-2019', 21);

-- --------------------------------------------------------

--
-- Structure de la table `sous_rubrique`
--

CREATE TABLE `sous_rubrique` (
  `id_sous_rubrique` int(11) NOT NULL,
  `rubriqueID` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sous_rubrique`
--

INSERT INTO `sous_rubrique` (`id_sous_rubrique`, `rubriqueID`, `designation`, `userID`) VALUES
(8, 10, 'rapport journalier', 1),
(9, 12, 'grenades lancees', 1),
(10, 12, 'corps sans vie', 1);

-- --------------------------------------------------------

--
-- Structure de la table `trimestre`
--

CREATE TABLE `trimestre` (
  `id_trimestre` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `trimestre`
--

INSERT INTO `trimestre` (`id_trimestre`, `designation`) VALUES
(1, '1er Trimestre'),
(2, '2eme Trimestre'),
(3, '3eme Trimestre'),
(4, '4eme Trimestre');

-- --------------------------------------------------------

--
-- Structure de la table `type_operation`
--

CREATE TABLE `type_operation` (
  `id_type_operation` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_pieces`
--

CREATE TABLE `type_pieces` (
  `id_type_piece` int(8) NOT NULL,
  `designation` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_pieces`
--

INSERT INTO `type_pieces` (`id_type_piece`, `designation`) VALUES
(1, 'lettre'),
(2, 'facture');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(8) NOT NULL,
  `id_personne` int(8) NOT NULL,
  `login` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `statut` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `id_personne`, `login`, `password`, `statut`) VALUES
(1, 1, 'admin@sgci.bi', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 2, 'carmel', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 3, 'B9ITC8', 'ZFR6ZS', 1),
(4, 4, 'kabezya', 'e10adc3949ba59abbe56e057f20f883e', 1),
(5, 5, 'aletta', 'e10adc3949ba59abbe56e057f20f883e', 1),
(6, 6, '731DK5', '6EK4S7', 1),
(7, 7, 'yvanovich', 'e10adc3949ba59abbe56e057f20f883e', 1),
(8, 8, 'PYLV8Y', 'MKZE8Y', 1),
(9, 10, 'CU3P33', '0O2A11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `validation`
--

CREATE TABLE `validation` (
  `id_validation` int(8) NOT NULL,
  `id_budget_trimestre_compte_patron` int(8) NOT NULL,
  `date_validation` varchar(150) NOT NULL,
  `statut_validaton` int(2) NOT NULL,
  `id_user` int(8) NOT NULL,
  `motif_rejet` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alimentation_compte`
--
ALTER TABLE `alimentation_compte`
  ADD PRIMARY KEY (`id_alimentation_compte`),
  ADD KEY `alimtion1` (`id_budget_trimestre_compte_patron`),
  ADD KEY `alimtion2` (`id_user`),
  ADD KEY `alimtion3` (`id_piece_justificatif`);

--
-- Index pour la table `beneficiare`
--
ALTER TABLE `beneficiare`
  ADD PRIMARY KEY (`id_beneficiaire`),
  ADD KEY `ben1` (`id_personne`);

--
-- Index pour la table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id_budget`);

--
-- Index pour la table `budget_trimestre`
--
ALTER TABLE `budget_trimestre`
  ADD PRIMARY KEY (`id_budget_trimestre`),
  ADD KEY `buget3` (`id_budget`),
  ADD KEY `buget2` (`id_trimestre`);

--
-- Index pour la table `budget_trimestre_compte_patron`
--
ALTER TABLE `budget_trimestre_compte_patron`
  ADD PRIMARY KEY (`id_budget_trimestre_compte_patron`),
  ADD KEY `bujetrimcopa1` (`id_budget_trimestre`),
  ADD KEY `bujetrimcopa2` (`id_compte_patron`);

--
-- Index pour la table `caisse`
--
ALTER TABLE `caisse`
  ADD PRIMARY KEY (`id_caisse`),
  ADD UNIQUE KEY `caisse2` (`id_user`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compte`),
  ADD UNIQUE KEY `libelle` (`libelle`),
  ADD UNIQUE KEY `compte8` (`numero`);

--
-- Index pour la table `compte_patron`
--
ALTER TABLE `compte_patron`
  ADD PRIMARY KEY (`id_compte_patron`),
  ADD KEY `co_patr1` (`id_compte`),
  ADD KEY `co_patr2` (`id_patron`);

--
-- Index pour la table `compte_patron_caisse`
--
ALTER TABLE `compte_patron_caisse`
  ADD PRIMARY KEY (`id_compte_caisse_patron`),
  ADD KEY `co_pat_cai1` (`id_compte_patron`),
  ADD KEY `co_pat_cai2` (`id_caisse`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id_droit`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`fichierID`),
  ADD UNIQUE KEY `titre` (`titre`),
  ADD UNIQUE KEY `nom_fichier` (`nom_fichier`),
  ADD KEY `fk_id_sous_rubrique_fichier` (`id_sous_rubrique`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`),
  ADD UNIQUE KEY `designation` (`designation`);

--
-- Index pour la table `fonction_user`
--
ALTER TABLE `fonction_user`
  ADD PRIMARY KEY (`id_fonction_user`),
  ADD KEY `fonct1` (`id_user`),
  ADD KEY `fonct2` (`id_fonction`);

--
-- Index pour la table `historique_type_operation`
--
ALTER TABLE `historique_type_operation`
  ADD PRIMARY KEY (`id_type_operation`);

--
-- Index pour la table `patron`
--
ALTER TABLE `patron`
  ADD PRIMARY KEY (`id_patron`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`),
  ADD UNIQUE KEY `cni` (`cni`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- Index pour la table `piece_justificatif`
--
ALTER TABLE `piece_justificatif`
  ADD PRIMARY KEY (`id_piece_justificatif`),
  ADD KEY `type1` (`id_type_piece`),
  ADD KEY `type2` (`id_beneficiaire`);

--
-- Index pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`rubriqueID`),
  ADD UNIQUE KEY `designation` (`designation`);

--
-- Index pour la table `sortie_compte`
--
ALTER TABLE `sortie_compte`
  ADD PRIMARY KEY (`id_sortie_compte`),
  ADD KEY `sort_comp2` (`id_user`),
  ADD KEY `sort_comp3` (`id_piece_justificatif`),
  ADD KEY `sort_comp5` (`id_compte_patron`);

--
-- Index pour la table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  ADD PRIMARY KEY (`id_sous_rubrique`),
  ADD UNIQUE KEY `designation` (`designation`),
  ADD KEY `fk_rubriqueID_sous_rubrique` (`rubriqueID`);

--
-- Index pour la table `trimestre`
--
ALTER TABLE `trimestre`
  ADD PRIMARY KEY (`id_trimestre`);

--
-- Index pour la table `type_operation`
--
ALTER TABLE `type_operation`
  ADD PRIMARY KEY (`id_type_operation`);

--
-- Index pour la table `type_pieces`
--
ALTER TABLE `type_pieces`
  ADD PRIMARY KEY (`id_type_piece`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `user1` (`id_personne`);

--
-- Index pour la table `validation`
--
ALTER TABLE `validation`
  ADD PRIMARY KEY (`id_validation`),
  ADD KEY `validation1` (`id_budget_trimestre_compte_patron`),
  ADD KEY `validation2` (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alimentation_compte`
--
ALTER TABLE `alimentation_compte`
  MODIFY `id_alimentation_compte` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beneficiare`
--
ALTER TABLE `beneficiare`
  MODIFY `id_beneficiaire` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `budget`
--
ALTER TABLE `budget`
  MODIFY `id_budget` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `budget_trimestre`
--
ALTER TABLE `budget_trimestre`
  MODIFY `id_budget_trimestre` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `budget_trimestre_compte_patron`
--
ALTER TABLE `budget_trimestre_compte_patron`
  MODIFY `id_budget_trimestre_compte_patron` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `caisse`
--
ALTER TABLE `caisse`
  MODIFY `id_caisse` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `compte_patron`
--
ALTER TABLE `compte_patron`
  MODIFY `id_compte_patron` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `compte_patron_caisse`
--
ALTER TABLE `compte_patron_caisse`
  MODIFY `id_compte_caisse_patron` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `id_droit` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `fichierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `fonction_user`
--
ALTER TABLE `fonction_user`
  MODIFY `id_fonction_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `historique_type_operation`
--
ALTER TABLE `historique_type_operation`
  MODIFY `id_type_operation` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `patron`
--
ALTER TABLE `patron`
  MODIFY `id_patron` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `piece_justificatif`
--
ALTER TABLE `piece_justificatif`
  MODIFY `id_piece_justificatif` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `rubrique`
--
ALTER TABLE `rubrique`
  MODIFY `rubriqueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `sortie_compte`
--
ALTER TABLE `sortie_compte`
  MODIFY `id_sortie_compte` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  MODIFY `id_sous_rubrique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `id_trimestre` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `type_operation`
--
ALTER TABLE `type_operation`
  MODIFY `id_type_operation` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type_pieces`
--
ALTER TABLE `type_pieces`
  MODIFY `id_type_piece` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `validation`
--
ALTER TABLE `validation`
  MODIFY `id_validation` int(8) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `alimentation_compte`
--
ALTER TABLE `alimentation_compte`
  ADD CONSTRAINT `alimtion1` FOREIGN KEY (`id_budget_trimestre_compte_patron`) REFERENCES `budget_trimestre_compte_patron` (`id_budget_trimestre_compte_patron`) ON DELETE CASCADE,
  ADD CONSTRAINT `alimtion2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `alimtion3` FOREIGN KEY (`id_piece_justificatif`) REFERENCES `piece_justificatif` (`id_piece_justificatif`) ON DELETE CASCADE;

--
-- Contraintes pour la table `beneficiare`
--
ALTER TABLE `beneficiare`
  ADD CONSTRAINT `ben1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`) ON DELETE CASCADE;

--
-- Contraintes pour la table `budget_trimestre`
--
ALTER TABLE `budget_trimestre`
  ADD CONSTRAINT `buget2` FOREIGN KEY (`id_trimestre`) REFERENCES `trimestre` (`id_trimestre`) ON DELETE CASCADE,
  ADD CONSTRAINT `buget3` FOREIGN KEY (`id_budget`) REFERENCES `budget` (`id_budget`) ON DELETE CASCADE;

--
-- Contraintes pour la table `budget_trimestre_compte_patron`
--
ALTER TABLE `budget_trimestre_compte_patron`
  ADD CONSTRAINT `bujetrimcopa1` FOREIGN KEY (`id_budget_trimestre`) REFERENCES `budget_trimestre` (`id_budget_trimestre`) ON DELETE CASCADE,
  ADD CONSTRAINT `bujetrimcopa2` FOREIGN KEY (`id_compte_patron`) REFERENCES `compte_patron` (`id_compte_patron`) ON DELETE CASCADE;

--
-- Contraintes pour la table `caisse`
--
ALTER TABLE `caisse`
  ADD CONSTRAINT `caisse1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `compte_patron`
--
ALTER TABLE `compte_patron`
  ADD CONSTRAINT `co_patr1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`) ON DELETE CASCADE,
  ADD CONSTRAINT `co_patr2` FOREIGN KEY (`id_patron`) REFERENCES `patron` (`id_patron`) ON DELETE CASCADE;

--
-- Contraintes pour la table `compte_patron_caisse`
--
ALTER TABLE `compte_patron_caisse`
  ADD CONSTRAINT `co_pat_cai1` FOREIGN KEY (`id_compte_patron`) REFERENCES `compte_patron` (`id_compte_patron`) ON DELETE CASCADE,
  ADD CONSTRAINT `co_pat_cai2` FOREIGN KEY (`id_caisse`) REFERENCES `caisse` (`id_caisse`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `fk_id_sous_rubrique_fichier` FOREIGN KEY (`id_sous_rubrique`) REFERENCES `sous_rubrique` (`id_sous_rubrique`);

--
-- Contraintes pour la table `fonction_user`
--
ALTER TABLE `fonction_user`
  ADD CONSTRAINT `fonct1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `fonct2` FOREIGN KEY (`id_fonction`) REFERENCES `fonction` (`id_fonction`) ON DELETE CASCADE;

--
-- Contraintes pour la table `piece_justificatif`
--
ALTER TABLE `piece_justificatif`
  ADD CONSTRAINT `type1` FOREIGN KEY (`id_type_piece`) REFERENCES `type_pieces` (`id_type_piece`) ON DELETE CASCADE,
  ADD CONSTRAINT `type2` FOREIGN KEY (`id_beneficiaire`) REFERENCES `beneficiare` (`id_beneficiaire`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sortie_compte`
--
ALTER TABLE `sortie_compte`
  ADD CONSTRAINT `sort_comp2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `sort_comp3` FOREIGN KEY (`id_piece_justificatif`) REFERENCES `piece_justificatif` (`id_piece_justificatif`) ON DELETE CASCADE,
  ADD CONSTRAINT `sort_comp5` FOREIGN KEY (`id_compte_patron`) REFERENCES `compte_patron` (`id_compte_patron`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  ADD CONSTRAINT `fk_rubriqueID_sous_rubrique` FOREIGN KEY (`rubriqueID`) REFERENCES `rubrique` (`rubriqueID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`) ON DELETE CASCADE;

--
-- Contraintes pour la table `validation`
--
ALTER TABLE `validation`
  ADD CONSTRAINT `validation1` FOREIGN KEY (`id_budget_trimestre_compte_patron`) REFERENCES `budget_trimestre_compte_patron` (`id_budget_trimestre_compte_patron`) ON DELETE CASCADE,
  ADD CONSTRAINT `validation2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;
--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
