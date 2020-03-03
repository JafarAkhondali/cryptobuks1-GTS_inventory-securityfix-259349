-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 24 Février 2020 à 12:11
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ibiafric_gts2`
--

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_categories`
--

CREATE TABLE `pos_ibi_categories` (
  `ID_CATEGORIE` int(11) NOT NULL,
  `NOM_CATEGORIE` varchar(200) NOT NULL,
  `DESCRIPTION_CATEGORIE` text NOT NULL,
  `DATE_CREATION_CATEGORIE` datetime NOT NULL,
  `DATE_MOD_CATEGORIE` datetime NOT NULL,
  `AUTHOR_CATEGORIE` int(11) NOT NULL,
  `PARENT_REF_ID_CATEGORIE` int(11) NOT NULL,
  `THUMB_CATEGORIE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_categories`
--

INSERT INTO `pos_ibi_categories` (`ID_CATEGORIE`, `NOM_CATEGORIE`, `DESCRIPTION_CATEGORIE`, `DATE_CREATION_CATEGORIE`, `DATE_MOD_CATEGORIE`, `AUTHOR_CATEGORIE`, `PARENT_REF_ID_CATEGORIE`, `THUMB_CATEGORIE`) VALUES
(1, 'Accessoires', 'h', '2020-02-22 11:55:51', '0000-00-00 00:00:00', 1, 0, '20200222115551-2020-02-22pos_ibi_categories115545.html'),
(2, 'Radio', 'k', '2020-02-22 11:57:51', '0000-00-00 00:00:00', 1, 1, '20200222115751-2020-02-22pos_ibi_categories115748.html'),
(3, 'Materiaux metalliques', 'y', '2020-02-24 08:50:30', '0000-00-00 00:00:00', 1, 1, '20200224085030-2020-02-24pos_ibi_categories085027.html'),
(4, 'Mteriaux de bureau', 'e', '2020-02-24 08:51:30', '0000-00-00 00:00:00', 1, 0, '20200224085130-2020-02-24pos_ibi_categories085127.html'),
(5, 'y', 'y', '2020-02-24 08:52:03', '0000-00-00 00:00:00', 1, 3, '20200224085203-2020-02-24pos_ibi_categories085159.html'),
(6, 'Pieces de rechanges', 'hys', '2020-02-24 09:04:12', '0000-00-00 00:00:00', 1, 0, '20200224090412-2020-02-24pos_ibi_categories090410.html'),
(7, 'Tissu', 'Hey', '2020-02-24 09:06:42', '0000-00-00 00:00:00', 1, 1, '20200224090642-2020-02-24pos_ibi_categories090640.html'),
(8, 'Besoins specifiques', '', '2020-02-24 10:13:16', '0000-00-00 00:00:00', 1, 0, ''),
(9, 'Magasins', 'haush', '2020-02-24 10:13:55', '0000-00-00 00:00:00', 1, 3, '20200224101355-2020-02-24pos_ibi_categories101352.html'),
(10, 'Besoins A', '', '2020-02-24 13:08:36', '0000-00-00 00:00:00', 1, 6, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_ibi_categories`
--
ALTER TABLE `pos_ibi_categories`
  ADD PRIMARY KEY (`ID_CATEGORIE`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pos_ibi_categories`
--
ALTER TABLE `pos_ibi_categories`
  MODIFY `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
