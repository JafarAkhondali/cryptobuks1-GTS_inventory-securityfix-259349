<<<<<<< HEAD
=======
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 27 Février 2020 à 17:39
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
-- Structure de la table `aauth_groups`
--

CREATE TABLE `aauth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aauth_groups`
--

INSERT INTO `aauth_groups` (`id`, `name`, `definition`) VALUES
(1, 'Admin', 'Superadmin Group'),
(2, 'Public', 'Public Group'),
(3, 'Default', 'Default Access Group'),
(4, 'Member', 'Member Access Group');

-- --------------------------------------------------------

--
-- Structure de la table `aauth_group_to_group`
--

CREATE TABLE `aauth_group_to_group` (
  `group_id` int(11) UNSIGNED NOT NULL,
  `subgroup_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aauth_login_attempts`
--

CREATE TABLE `aauth_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(39) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `login_attempts` tinyint(2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aauth_perms`
--

CREATE TABLE `aauth_perms` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aauth_perms`
--

INSERT INTO `aauth_perms` (`id`, `name`, `definition`) VALUES
(1, 'menu_dashboard', NULL),
(2, 'menu_crud_builder', NULL),
(3, 'menu_api_builder', NULL),
(4, 'menu_page_builder', NULL),
(5, 'menu_form_builder', NULL),
(6, 'menu_menu', NULL),
(7, 'menu_auth', NULL),
(8, 'menu_user', NULL),
(9, 'menu_group', NULL),
(10, 'menu_access', NULL),
(11, 'menu_permission', NULL),
(12, 'menu_api_documentation', NULL),
(13, 'menu_web_documentation', NULL),
(14, 'menu_settings', NULL),
(15, 'user_list', NULL),
(16, 'user_update_status', NULL),
(17, 'user_export', NULL),
(18, 'user_add', NULL),
(19, 'user_update', NULL),
(20, 'user_update_profile', NULL),
(21, 'user_update_password', NULL),
(22, 'user_profile', NULL),
(23, 'user_view', NULL),
(24, 'user_delete', NULL),
(25, 'blog_list', NULL),
(26, 'blog_export', NULL),
(27, 'blog_add', NULL),
(28, 'blog_update', NULL),
(29, 'blog_view', NULL),
(30, 'blog_delete', NULL),
(31, 'form_list', NULL),
(32, 'form_export', NULL),
(33, 'form_add', NULL),
(34, 'form_update', NULL),
(35, 'form_view', NULL),
(36, 'form_manage', NULL),
(37, 'form_delete', NULL),
(38, 'crud_list', NULL),
(39, 'crud_export', NULL),
(40, 'crud_add', NULL),
(41, 'crud_update', NULL),
(42, 'crud_view', NULL),
(43, 'crud_delete', NULL),
(44, 'rest_list', NULL),
(45, 'rest_export', NULL),
(46, 'rest_add', NULL),
(47, 'rest_update', NULL),
(48, 'rest_view', NULL),
(49, 'rest_delete', NULL),
(50, 'group_list', NULL),
(51, 'group_export', NULL),
(52, 'group_add', NULL),
(53, 'group_update', NULL),
(54, 'group_view', NULL),
(55, 'group_delete', NULL),
(56, 'permission_list', NULL),
(57, 'permission_export', NULL),
(58, 'permission_add', NULL),
(59, 'permission_update', NULL),
(60, 'permission_view', NULL),
(61, 'permission_delete', NULL),
(62, 'access_list', NULL),
(63, 'access_add', NULL),
(64, 'access_update', NULL),
(65, 'menu_list', NULL),
(66, 'menu_add', NULL),
(67, 'menu_update', NULL),
(68, 'menu_delete', NULL),
(69, 'menu_save_ordering', NULL),
(70, 'menu_type_add', NULL),
(71, 'page_list', NULL),
(72, 'page_export', NULL),
(73, 'page_add', NULL),
(74, 'page_update', NULL),
(75, 'page_view', NULL),
(76, 'page_delete', NULL),
(77, 'blog_list', NULL),
(78, 'blog_export', NULL),
(79, 'blog_add', NULL),
(80, 'blog_update', NULL),
(81, 'blog_view', NULL),
(82, 'blog_delete', NULL),
(83, 'setting', NULL),
(84, 'setting_update', NULL),
(85, 'dashboard', NULL),
(86, 'extension_list', NULL),
(87, 'extension_activate', NULL),
(88, 'extension_deactivate', NULL),
(89, 'pos_ibi_stores_add', ''),
(90, 'pos_ibi_stores_update', ''),
(91, 'pos_ibi_stores_view', ''),
(92, 'pos_ibi_stores_delete', ''),
(93, 'pos_ibi_stores_list', ''),
(94, 'menu_boutiques', ''),
(100, 'pos_store_2_ibi_articles_add', ''),
(101, 'pos_store_2_ibi_articles_update', ''),
(102, 'pos_store_2_ibi_articles_view', ''),
(103, 'pos_store_2_ibi_articles_delete', ''),
(104, 'pos_store_2_ibi_articles_list', ''),
(105, 'eleve_add', ''),
(106, 'eleve_update', ''),
(107, 'eleve_view', ''),
(108, 'eleve_delete', ''),
(109, 'eleve_list', ''),
(110, 'menu_eleve', ''),
(111, 'menu_fournisseurs', ''),
(112, 'pos_ibi_fournisseurs_add', ''),
(113, 'pos_ibi_fournisseurs_update', ''),
(114, 'pos_ibi_fournisseurs_view', ''),
(115, 'pos_ibi_fournisseurs_delete', ''),
(116, 'pos_ibi_fournisseurs_list', ''),
(117, 'menu_nouveau_fournisseur', ''),
(118, 'menu_liste_des__fournisseurs', ''),
(124, 'menu_clients', ''),
(125, 'menu_groupes', ''),
(136, 'menu_liste_des_clients', ''),
(142, 'pos_ibi_clients_groups_add', ''),
(143, 'pos_ibi_clients_groups_update', ''),
(144, 'pos_ibi_clients_groups_view', ''),
(145, 'pos_ibi_clients_groups_delete', ''),
(146, 'pos_ibi_clients_groups_list', ''),
(147, 'pos_ibi_clients_add', ''),
(148, 'pos_ibi_clients_update', ''),
(149, 'pos_ibi_clients_view', ''),
(150, 'pos_ibi_clients_delete', ''),
(151, 'pos_ibi_clients_list', ''),
(152, 'pos_ibi_categories_add', ''),
(153, 'pos_ibi_categories_update', ''),
(154, 'pos_ibi_categories_view', ''),
(155, 'pos_ibi_categories_delete', ''),
(156, 'pos_ibi_categories_list', ''),
(157, 'menu_inventaire', ''),
(158, 'menu_listes_des_categories', ''),
(159, 'menu_categories_seulement', ''),
(160, 'menu_sous_categories', ''),
(161, 'menu_inventaires', ''),
(162, 'menu_listes_des_articles', ''),
(163, 'pos_store_2_ibi_rayons_add', ''),
(164, 'pos_store_2_ibi_rayons_update', ''),
(165, 'pos_store_2_ibi_rayons_view', ''),
(166, 'pos_store_2_ibi_rayons_delete', ''),
(167, 'pos_store_2_ibi_rayons_list', ''),
(168, 'menu_item_location', ''),
(169, 'pos_ibi_taxes_add', ''),
(170, 'pos_ibi_taxes_update', ''),
(171, 'pos_ibi_taxes_view', ''),
(172, 'pos_ibi_taxes_delete', ''),
(173, 'pos_ibi_taxes_list', ''),
(174, 'menu_taxes', '');

-- --------------------------------------------------------

--
-- Structure de la table `aauth_perm_to_group`
--

CREATE TABLE `aauth_perm_to_group` (
  `perm_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aauth_perm_to_group`
--

INSERT INTO `aauth_perm_to_group` (`perm_id`, `group_id`) VALUES
(94, 1),
(110, 1),
(110, 3),
(111, 1),
(111, 3),
(111, 1),
(111, 3),
(117, 1),
(117, 3),
(124, 1),
(124, 3),
(125, 1),
(125, 3),
(136, 1),
(136, 3),
(158, 1),
(158, 3),
(159, 1),
(159, 3),
(160, 1),
(160, 3),
(160, 1),
(160, 3),
(160, 1),
(160, 3),
(160, 1),
(160, 3),
(160, 4),
(160, 1),
(160, 3),
(160, 4),
(160, 1),
(160, 3),
(160, 4),
(160, 1),
(160, 3),
(160, 1),
(160, 3),
(160, 1),
(160, 3),
(160, 1),
(160, 3),
(162, 1),
(162, 3),
(168, 1),
(168, 3),
(174, 1),
(174, 3),
(161, 1),
(161, 3);

-- --------------------------------------------------------

--
-- Structure de la table `aauth_perm_to_user`
--

CREATE TABLE `aauth_perm_to_user` (
  `perm_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aauth_pms`
--

CREATE TABLE `aauth_pms` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(225) NOT NULL,
  `message` text,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `pm_deleted_sender` int(1) DEFAULT NULL,
  `pm_deleted_receiver` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aauth_user`
--

CREATE TABLE `aauth_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aauth_users`
--

CREATE TABLE `aauth_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `oauth_uid` text,
  `oauth_provider` varchar(100) DEFAULT NULL,
  `pass` varchar(64) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `avatar` text NOT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `top_secret` varchar(16) DEFAULT NULL,
  `ip_address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aauth_users`
--

INSERT INTO `aauth_users` (`id`, `email`, `oauth_uid`, `oauth_provider`, `pass`, `username`, `full_name`, `avatar`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `top_secret`, `ip_address`) VALUES
(1, 'admin@admin.com', NULL, NULL, '10f553383434b6e80e05f335d91dbf3cfc9c2fa5d8573fc1b68803bade4dc45f', 'admin', 'admin', '', 0, '2020-02-27 11:09:58', '2020-02-27 11:09:58', '2020-02-18 14:54:56', NULL, NULL, NULL, NULL, NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Structure de la table `aauth_user_to_group`
--

CREATE TABLE `aauth_user_to_group` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aauth_user_to_group`
--

INSERT INTO `aauth_user_to_group` (`user_id`, `group_id`) VALUES
(1, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `aauth_user_variables`
--

CREATE TABLE `aauth_user_variables` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `data_key` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `tags` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `viewers` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `content`, `image`, `tags`, `category`, `status`, `author`, `viewers`, `created_at`, `updated_at`) VALUES
(1, 'Hello Wellcome To Ibi Builder', 'Hello-Wellcome-To-IBI-Builder', 'greetings from our team I hope to be happy! ', 'wellcome.jpg', 'greetings', '1', 'publish', 'admin', 0, '2020-02-18 14:54:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `blog_category`
--

CREATE TABLE `blog_category` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `blog_category`
--

INSERT INTO `blog_category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Technology', ''),
(2, 'Lifestyle', '');

-- --------------------------------------------------------

--
-- Structure de la table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` int(11) UNSIGNED NOT NULL,
  `captcha_time` int(10) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cc_options`
--

CREATE TABLE `cc_options` (
  `id` int(11) UNSIGNED NOT NULL,
  `option_name` varchar(200) NOT NULL,
  `option_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cc_options`
--

INSERT INTO `cc_options` (`id`, `option_name`, `option_value`) VALUES
(1, 'active_theme', 'ibi'),
(2, 'favicon', 'default.png'),
(3, 'site_name', 'GTS'),
(4, 'enable_disqus', NULL),
(5, 'disqus_id', ''),
(6, 'email', 'jude@ibi-africa.com'),
(7, 'author', ''),
(8, 'site_description', ''),
(9, 'keywords', ''),
(10, 'landing_page_id', 'default'),
(11, 'timezone', 'Africa/Bujumbura'),
(12, 'google_id', ''),
(13, 'google_secret', '');

-- --------------------------------------------------------

--
-- Structure de la table `cc_session`
--

CREATE TABLE `cc_session` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `primary_key` varchar(200) NOT NULL,
  `page_read` varchar(20) DEFAULT NULL,
  `page_create` varchar(20) DEFAULT NULL,
  `page_update` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crud`
--

INSERT INTO `crud` (`id`, `title`, `subject`, `table_name`, `primary_key`, `page_read`, `page_create`, `page_update`) VALUES
(1, 'Pos Ibi Stores', 'Pos Ibi Stores', 'pos_ibi_stores', 'ID', 'yes', 'yes', 'yes'),
(3, 'Articles', 'Articles', 'pos_store_2_ibi_articles', 'ID', 'yes', 'yes', 'yes'),
(4, 'Etudiant', 'Espace Enregistrement', 'eleve', 'id', 'yes', 'yes', 'yes'),
(5, 'Fournisseurs', 'Fournisseurs', 'pos_ibi_fournisseurs', 'ID', 'yes', 'yes', 'yes'),
(10, 'Groups', 'Groups', 'pos_ibi_clients_groups', 'ID_GROUP', 'yes', 'yes', 'yes'),
(11, 'Clients', 'Clients', 'pos_ibi_clients', 'ID_CLIENT', 'yes', 'yes', 'yes'),
(12, 'Categories', 'Categories', 'pos_ibi_categories', 'ID_CATEGORIE', 'yes', 'yes', 'yes'),
(13, 'Rayons', 'Rayons', 'pos_store_2_ibi_rayons', 'ID_RAYON', 'yes', 'yes', 'yes'),
(14, 'Taxes', 'Taxes', 'pos_ibi_taxes', 'ID_TAXE', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `crud_custom_option`
--

CREATE TABLE `crud_custom_option` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crud_custom_option`
--

INSERT INTO `crud_custom_option` (`id`, `crud_field_id`, `crud_id`, `option_value`, `option_label`) VALUES
(3, 10, 1, 'opened', 'Ouvert'),
(4, 10, 1, 'close', 'Fermé'),
(5, 722, 6, '0', 'ok');

-- --------------------------------------------------------

--
-- Structure de la table `crud_field`
--

CREATE TABLE `crud_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_form` varchar(10) DEFAULT NULL,
  `show_update_form` varchar(10) DEFAULT NULL,
  `show_detail_page` varchar(10) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crud_field`
--

INSERT INTO `crud_field` (`id`, `crud_id`, `field_name`, `field_label`, `input_type`, `show_column`, `show_add_form`, `show_update_form`, `show_detail_page`, `sort`, `relation_table`, `relation_value`, `relation_label`) VALUES
(9, 1, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(10, 1, 'STATUT', 'STATUT', 'custom_select', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(11, 1, 'NAME', 'NAME', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(12, 1, 'IMAGE', 'IMAGE', 'file', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(13, 1, 'DESCRIPTION', 'DESCRIPTION', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(14, 1, 'DATE_CREATION', 'DATE_CREATION', 'timestamp', 'yes', 'yes', '', 'yes', 6, '', '', ''),
(15, 1, 'DATE_MOD', 'DATE_MOD', 'timestamp', 'yes', '', 'yes', 'yes', 7, '', '', ''),
(16, 1, 'AUTHOR', 'AUTHOR', 'current_user_id', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(17, 2, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(18, 2, 'DESIGN', 'DESIGN', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(19, 2, 'REF_RAYON', 'REF_RAYON', 'number', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(20, 2, 'REF_SHIPPING', 'REF_SHIPPING', 'number', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(21, 2, 'REF_CATEGORIE', 'REF_CATEGORIE', 'number', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(22, 2, 'REF_SOUS_CATEGORIE', 'REF_SOUS_CATEGORIE', 'number', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(23, 2, 'REF_PROVIDER', 'REF_PROVIDER', 'number', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(24, 2, 'REF_TAXE', 'REF_TAXE', 'number', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(25, 2, 'QUANTITY', 'QUANTITY', 'number', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(26, 2, 'SKU', 'SKU', 'input', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(27, 2, 'QUANTITE_RESTANTE', 'QUANTITE_RESTANTE', 'number', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(28, 2, 'QUANTITE_VENDU', 'QUANTITE_VENDU', 'number', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(29, 2, 'DEFECTUEUX', 'DEFECTUEUX', 'number', 'yes', 'yes', 'yes', 'yes', 13, '', '', ''),
(30, 2, 'PRIX_DACHAT', 'PRIX_DACHAT', 'input', 'yes', 'yes', 'yes', 'yes', 14, '', '', ''),
(31, 2, 'FRAIS_ACCESSOIRE', 'FRAIS_ACCESSOIRE', 'input', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(32, 2, 'COUT_DACHAT', 'COUT_DACHAT', 'input', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(33, 2, 'TAUX_DE_MARGE', 'TAUX_DE_MARGE', 'input', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(34, 2, 'PRIX_DE_VENTE', 'PRIX_DE_VENTE', 'input', 'yes', 'yes', 'yes', 'yes', 18, '', '', ''),
(35, 2, 'PRIX_DE_VENTE_TTC', 'PRIX_DE_VENTE_TTC', 'input', 'yes', 'yes', 'yes', 'yes', 19, '', '', ''),
(36, 2, 'SHADOW_PRICE', 'SHADOW_PRICE', 'input', 'yes', 'yes', 'yes', 'yes', 20, '', '', ''),
(37, 2, 'TAILLE', 'TAILLE', 'input', 'yes', 'yes', 'yes', 'yes', 21, '', '', ''),
(38, 2, 'POIDS', 'POIDS', 'input', 'yes', 'yes', 'yes', 'yes', 22, '', '', ''),
(39, 2, 'COULEUR', 'COULEUR', 'input', 'yes', 'yes', 'yes', 'yes', 23, '', '', ''),
(40, 2, 'HAUTEUR', 'HAUTEUR', 'input', 'yes', 'yes', 'yes', 'yes', 24, '', '', ''),
(41, 2, 'LARGEUR', 'LARGEUR', 'input', 'yes', 'yes', 'yes', 'yes', 25, '', '', ''),
(42, 2, 'PRIX_PROMOTIONEL', 'PRIX_PROMOTIONEL', 'input', 'yes', 'yes', 'yes', 'yes', 26, '', '', ''),
(43, 2, 'SPECIAL_PRICE_START_DATE', 'SPECIAL_PRICE_START_DATE', 'datetime', 'yes', 'yes', 'yes', 'yes', 27, '', '', ''),
(44, 2, 'SPECIAL_PRICE_END_DATE', 'SPECIAL_PRICE_END_DATE', 'datetime', 'yes', 'yes', 'yes', 'yes', 28, '', '', ''),
(45, 2, 'DESCRIPTION', 'DESCRIPTION', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 29, '', '', ''),
(46, 2, 'APERCU', 'APERCU', 'input', 'yes', 'yes', 'yes', 'yes', 30, '', '', ''),
(47, 2, 'CODEBAR', 'CODEBAR', 'input', 'yes', 'yes', 'yes', 'yes', 31, '', '', ''),
(48, 2, 'DATE_CREATION', 'DATE_CREATION', 'datetime', 'yes', 'yes', 'yes', 'yes', 32, '', '', ''),
(49, 2, 'DATE_MOD', 'DATE_MOD', 'datetime', 'yes', 'yes', 'yes', 'yes', 33, '', '', ''),
(50, 2, 'AUTHOR', 'AUTHOR', 'number', 'yes', 'yes', 'yes', 'yes', 34, '', '', ''),
(51, 2, 'TYPE', 'TYPE', 'number', 'yes', 'yes', 'yes', 'yes', 35, '', '', ''),
(52, 2, 'STATUS', 'STATUS', 'number', 'yes', 'yes', 'yes', 'yes', 36, '', '', ''),
(53, 2, 'STOCK_ENABLED', 'STOCK_ENABLED', 'number', 'yes', 'yes', 'yes', 'yes', 37, '', '', ''),
(54, 2, 'AUTO_BARCODE', 'AUTO_BARCODE', 'number', 'yes', 'yes', 'yes', 'yes', 38, '', '', ''),
(55, 2, 'BARCODE_TYPE', 'BARCODE_TYPE', 'input', 'yes', 'yes', 'yes', 'yes', 39, '', '', ''),
(56, 2, 'USE_VARIATION', 'USE_VARIATION', 'number', 'yes', 'yes', 'yes', 'yes', 40, '', '', ''),
(57, 2, 'MINIMUM_QUANTITY', 'MINIMUM_QUANTITY', 'input', 'yes', 'yes', 'yes', 'yes', 41, '', '', ''),
(673, 4, 'id', 'id', 'number', '', '', '', 'yes', 1, '', '', ''),
(674, 4, 'nom', 'Nom:', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(675, 4, 'age', 'Age:', 'number', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(676, 4, 'classe', 'classe', 'select', 'yes', 'yes', 'yes', 'yes', 4, 'blog', 'id', 'title'),
(677, 4, 'date_creation', 'date_creation', 'timestamp', '', 'yes', '', 'yes', 5, '', '', ''),
(678, 4, 'created_by', 'created_by', 'current_user_id', 'yes', 'yes', '', 'yes', 6, '', '', ''),
(679, 4, 'date_modified', 'date_modified', 'timestamp', '', '', 'yes', 'yes', 7, '', '', ''),
(680, 4, 'modified_by', 'modified_by', 'current_user_id', '', '', 'yes', 'yes', 8, '', '', ''),
(708, 5, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(709, 5, 'NOM', 'Nom du fournisseur', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(710, 5, 'BP', 'Boite postal(BP)', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(711, 5, 'TEL', 'Telephone', 'input', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(712, 5, 'EMAIL', 'Email', 'email', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(713, 5, 'DATE_CREATION', 'DATE_CREATION', 'timestamp', '', 'yes', '', 'yes', 6, '', '', ''),
(714, 5, 'DATE_MOD', 'DATE_MOD', 'timestamp', '', '', 'yes', 'yes', 7, '', '', ''),
(715, 5, 'AUTHOR', 'Auteur', 'current_user_id', 'yes', 'yes', '', 'yes', 8, '', '', ''),
(716, 5, 'DESCRIPTION', 'Desciption', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(717, 6, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(718, 6, 'NAME', 'Nom', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(719, 6, 'DESCRIPTION', 'Description', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(720, 6, 'DATE_CREATION', 'Date_creation', 'timestamp', '', 'yes', '', 'yes', 4, '', '', ''),
(721, 6, 'DATE_MODIFICATION', 'Date_modification', 'datetime', '', '', 'yes', 'yes', 5, '', '', ''),
(722, 6, 'DISCOUNT_TYPE', 'Type de remise', 'yes_no', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(723, 6, 'DISCOUNT_PERCENT', 'Pourcentage de la remise', 'number', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(724, 6, 'DISCOUNT_AMOUNT', 'Montant de la remise', 'number', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(725, 6, 'DISCOUNT_ENABLE_SCHEDULE', 'Activer la planification', 'yes_no', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(726, 6, 'DISCOUNT_START', 'Debut de la planification', 'datetime', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(727, 6, 'DISCOUNT_END', 'Fin de la planification', 'datetime', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(728, 6, 'AUTHOR', 'Auteur', 'current_user_id', 'yes', 'yes', '', 'yes', 12, '', '', ''),
(729, 7, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(730, 7, 'NAME', 'Nom', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(731, 7, 'DESCRIPTION', 'Description', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(732, 7, 'DATE_CREATION', 'Date_creation', 'timestamp', '', 'yes', '', 'yes', 4, '', '', ''),
(733, 7, 'DATE_MODIFICATION', 'Date_modification', 'timestamp', '', '', 'yes', 'yes', 5, '', '', ''),
(734, 7, 'DISCOUNT_TYPE', 'Type de remise', 'select', 'yes', 'yes', 'yes', 'yes', 6, 'remise', 'ID', 'type_remise'),
(735, 7, 'DISCOUNT_PERCENT', 'Pourcentage de la remise(Sans "%")', 'number', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(736, 7, 'DISCOUNT_AMOUNT', 'Montant de la remise', 'number', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(737, 7, 'DISCOUNT_ENABLE_SCHEDULE', 'Activer la planification ', 'yes_no', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(738, 7, 'DISCOUNT_START', 'Debut de la planification', 'datetime', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(739, 7, 'DISCOUNT_END', 'Fin de la planification', 'datetime', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(740, 7, 'AUTHOR', 'Auteur', 'current_user_id', 'yes', 'yes', '', 'yes', 12, '', '', ''),
(943, 8, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(944, 8, 'NOM', 'Nom', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(945, 8, 'PRENOM', 'Prenom', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(946, 8, 'POIDS', 'POIDS', 'number', '', '', '', '', 4, '', '', ''),
(947, 8, 'TEL', 'Telephone', 'input', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(948, 8, 'EMAIL', 'Email', 'email', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(949, 8, 'DESCRIPTION', 'Description', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(950, 8, 'DATE_NAISSANCE', 'Date de naissance', 'datetime', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(951, 8, 'ADRESSE', 'Adresse', 'input', '', '', '', '', 9, '', '', ''),
(952, 8, 'NBR_COMMANDES', 'NBR_COMMANDES', 'number', '', '', '', '', 10, '', '', ''),
(953, 8, 'OVERALL_COMMANDES', 'OVERALL_COMMANDES', 'number', '', '', '', '', 11, '', '', ''),
(954, 8, 'DISCOUNT_ACTIVE', 'DISCOUNT_ACTIVE', 'number', '', '', '', '', 12, '', '', ''),
(955, 8, 'TOTAL_SPEND', 'TOTAL_SPEND', 'input', '', '', '', '', 13, '', '', ''),
(956, 8, 'LAST_ORDER', 'LAST_ORDER', 'input', '', '', '', '', 14, '', '', ''),
(957, 8, 'AVATAR', 'AVATAR', 'input', '', '', '', '', 15, '', '', ''),
(958, 8, 'STATE', 'STATE', 'input', '', '', '', '', 16, '', '', ''),
(959, 8, 'CITY', 'Ville', 'input', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(960, 8, 'POST_CODE', 'NIF du client', 'input', 'yes', 'yes', 'yes', 'yes', 18, '', '', ''),
(961, 8, 'COUNTRY', 'Pays', 'input', 'yes', 'yes', 'yes', 'yes', 19, '', '', ''),
(962, 8, 'COMPANY_NAME', 'COMPANY_NAME', 'input', '', '', '', '', 20, '', '', ''),
(963, 8, 'DATE_CREATION', 'Date_creation', 'timestamp', 'yes', 'yes', '', 'yes', 21, '', '', ''),
(964, 8, 'DATE_MOD', 'Date_modification', 'timestamp', '', '', 'yes', 'yes', 22, '', '', ''),
(965, 8, 'REF_GROUP', 'Assigner a un groupe', 'select', 'yes', 'yes', 'yes', 'yes', 23, 'pos_ibi_clients_groups', 'ID', 'NAME'),
(966, 8, 'AUTHOR', 'Auteur', 'number', '', '', '', '', 24, '', '', ''),
(967, 8, 'AUTHORS', 'Auteur', 'number', '', '', '', '', 25, '', '', ''),
(968, 8, 'AUTHOR_client', 'Auteur', 'current_user_id', 'yes', 'yes', '', 'yes', 26, '', '', ''),
(1113, 9, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(1114, 9, 'NOM', 'Nom', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(1115, 9, 'PRENOM', 'Prenom', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(1116, 9, 'POIDS', 'POIDS', 'number', '', '', '', '', 4, '', '', ''),
(1117, 9, 'TEL', 'Telephone', 'input', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(1118, 9, 'EMAIL', 'Email', 'email', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(1119, 9, 'DESCRIPTION', 'Description', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(1120, 9, 'DATE_NAISSANCE', 'Date_naissance', 'datetime', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(1121, 9, 'ADRESSE', 'ADRESSE', 'editor_wysiwyg', '', '', '', '', 9, '', '', ''),
(1122, 9, 'NBR_COMMANDES', 'NBR_COMMANDES', 'number', '', '', '', '', 10, '', '', ''),
(1123, 9, 'OVERALL_COMMANDES', 'OVERALL_COMMANDES', 'number', '', '', '', '', 11, '', '', ''),
(1124, 9, 'DISCOUNT_ACTIVE', 'DISCOUNT_ACTIVE', 'number', '', '', '', '', 12, '', '', ''),
(1125, 9, 'TOTAL_SPEND', 'TOTAL_SPEND', 'input', '', '', '', '', 13, '', '', ''),
(1126, 9, 'LAST_ORDER', 'LAST_ORDER', 'input', '', '', '', '', 14, '', '', ''),
(1127, 9, 'AVATAR', 'AVATAR', 'input', '', '', '', '', 15, '', '', ''),
(1128, 9, 'STATE', 'STATE', 'input', '', '', '', '', 16, '', '', ''),
(1129, 9, 'CITY', 'Ville', 'input', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(1130, 9, 'POST_CODE', 'POST_CODE', 'input', '', '', '', '', 18, '', '', ''),
(1131, 9, 'COUNTRY', 'Pays', 'input', 'yes', 'yes', 'yes', 'yes', 19, '', '', ''),
(1132, 9, 'COMPANY_NAME', 'COMPANY_NAME', 'input', '', '', '', '', 20, '', '', ''),
(1133, 9, 'DATE_CREATION', 'DATE_CREATION', 'timestamp', '', 'yes', '', 'yes', 21, '', '', ''),
(1134, 9, 'DATE_MOD', 'DATE_MOD', 'timestamp', '', '', 'yes', 'yes', 22, '', '', ''),
(1135, 9, 'REF_GROUP', 'Assigner a un groupe', 'select', 'yes', 'yes', 'yes', 'yes', 23, 'pos_ibi_clients_groups', 'ID', 'NAME'),
(1136, 9, 'AUTHOR_client', 'Auteur', 'current_user_id', 'yes', 'yes', '', 'yes', 24, '', '', ''),
(1137, 10, 'ID_GROUP', 'ID_GROUP', 'number', '', '', '', 'yes', 1, '', '', ''),
(1138, 10, 'NAME_GROUP', 'Nom', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(1139, 10, 'DESCRIPTION_GROUP', 'Description', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(1140, 10, 'DATE_CREATION_GROUP', 'Date de creation', 'timestamp', '', 'yes', '', 'yes', 4, '', '', ''),
(1141, 10, 'DATE_MODIFICATION_GROUP', 'Date de modification', 'timestamp', '', '', 'yes', 'yes', 5, '', '', ''),
(1142, 10, 'DISCOUNT_TYPE_GROUP', 'Type de remise', 'select', 'yes', 'yes', 'yes', 'yes', 6, 'remise', 'ID', 'type_remise'),
(1143, 10, 'DISCOUNT_PERCENT_GROUP', 'Pourcentange de remise', 'number', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(1144, 10, 'DISCOUNT_AMOUNT_GROUP', 'Montant de remise', 'number', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(1145, 10, 'DISCOUNT_ENABLE_SCHEDULE_GROUP', 'Activer la planification', 'yes_no', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(1146, 10, 'DISCOUNT_START_GROUP', 'Debut de la planification', 'datetime', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(1147, 10, 'DISCOUNT_END_GROUP', 'Fin de la planification', 'datetime', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(1148, 10, 'AUTHOR_GROUP', 'Auteur', 'current_user_id', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(1149, 11, 'ID_CLIENT', 'ID_CLIENT', 'number', '', '', '', 'yes', 1, '', '', ''),
(1150, 11, 'NOM_CLIENT', 'Nom', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(1151, 11, 'PRENOM_CLIENT', 'Prenom', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(1152, 11, 'POIDS_CLIENT', 'POIDS_CLIENT', 'number', '', '', '', '', 4, '', '', ''),
(1153, 11, 'TEL_CLIENT', 'Telephone', 'input', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(1154, 11, 'EMAIL_CLIENT', 'Email', 'email', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(1155, 11, 'DESCRIPTION_CLIENT', 'Description', 'textarea', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(1156, 11, 'DATE_NAISSANCE_CLIENT', 'Date de naissance', 'datetime', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(1157, 11, 'ADRESSE_CLIENT', 'ADRESSE_CLIENT', 'editor_wysiwyg', '', '', '', '', 9, '', '', ''),
(1158, 11, 'NBR_COMMANDES_CLIENT_CLIENT', 'NBR_COMMANDES_CLIENT_CLIENT', 'number', '', '', '', '', 10, '', '', ''),
(1159, 11, 'OVERALL_COMMANDES_CLIENT', 'OVERALL_COMMANDES_CLIENT', 'number', '', '', '', '', 11, '', '', ''),
(1160, 11, 'DISCOUNT_ACTIVE_CLIENT', 'DISCOUNT_ACTIVE_CLIENT', 'number', '', '', '', '', 12, '', '', ''),
(1161, 11, 'TOTAL_SPEND_CLIENT', 'TOTAL_SPEND_CLIENT', 'input', '', '', '', '', 13, '', '', ''),
(1162, 11, 'LAST_ORDER_CLIENT', 'LAST_ORDER_CLIENT', 'input', '', '', '', '', 14, '', '', ''),
(1163, 11, 'AVATAR_CLIENT', 'AVATAR_CLIENT', 'input', '', '', '', '', 15, '', '', ''),
(1164, 11, 'STATE_CLIENT', 'STATE_CLIENT', 'input', '', '', '', '', 16, '', '', ''),
(1165, 11, 'CITY_CLIENT', 'Ville', 'input', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(1166, 11, 'POST_CODE_CLIENT', 'POST_CODE_CLIENT', 'input', '', '', '', '', 18, '', '', ''),
(1167, 11, 'COUNTRY_CLIENT', 'Pays', 'input', 'yes', 'yes', 'yes', 'yes', 19, '', '', ''),
(1168, 11, 'COMPANY_NAME_CLIENT', 'NIF du client', 'number', 'yes', 'yes', 'yes', 'yes', 20, '', '', ''),
(1169, 11, 'DATE_CREATION_CLIENT', 'Date de creation', 'timestamp', 'yes', 'yes', 'yes', 'yes', 21, '', '', ''),
(1170, 11, 'DATE_MOD_CLIENT', 'Date de modification', 'timestamp', 'yes', 'yes', 'yes', 'yes', 22, '', '', ''),
(1171, 11, 'REF_GROUP_CLIENT', 'Assigner a un groupe', 'select', 'yes', 'yes', 'yes', 'yes', 23, 'pos_ibi_clients_groups', 'ID_GROUP', 'NAME_GROUP'),
(1172, 11, 'AUTHOR_CLIENT', 'Auteur', 'current_user_id', 'yes', 'yes', 'yes', 'yes', 24, '', '', ''),
(1189, 12, 'ID_CATEGORIE', 'ID de la catagorie', 'number', '', '', '', 'yes', 1, '', '', ''),
(1190, 12, 'NOM_CATEGORIE', 'Nom de la categorie', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(1191, 12, 'PARENT_REF_ID_CATEGORIE', 'Categorie parente', 'select', 'yes', 'yes', 'yes', 'yes', 3, 'pos_ibi_categories', 'ID_CATEGORIE', 'NOM_CATEGORIE'),
(1192, 12, 'DESCRIPTION_CATEGORIE', 'Description', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(1193, 12, 'THUMB_CATEGORIE', 'Apercu de la categorie', 'file', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(1194, 12, 'DATE_CREATION_CATEGORIE', 'Date de creation', 'timestamp', '', 'yes', '', 'yes', 6, '', '', ''),
(1195, 12, 'DATE_MOD_CATEGORIE', 'Date de modification', 'timestamp', '', '', 'yes', 'yes', 7, '', '', ''),
(1196, 12, 'AUTHOR_CATEGORIE', 'Auteur', 'current_user_id', 'yes', 'yes', '', 'yes', 8, '', '', ''),
(1484, 3, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(1485, 3, 'DESIGN', 'Nom du produit', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(1486, 3, 'REF_RAYON', 'Emplacement', 'select', '', 'yes', 'yes', 'yes', 3, 'emplacement', 'id_emplacement', 'Nom_emplacement'),
(1487, 3, 'REF_SHIPPING', 'REF_SHIPPING', 'number', '', '', '', '', 4, '', '', ''),
(1488, 3, 'REF_CATEGORIE', 'Categorie', 'select', 'yes', 'yes', 'yes', 'yes', 5, 'pos_ibi_categories', 'ID_CATEGORIE', 'NOM_CATEGORIE'),
(1489, 3, 'REF_SOUS_CATEGORIE', 'REF_SOUS_CATEGORIE', 'select', 'yes', 'yes', 'yes', 'yes', 6, 'pos_ibi_categories', 'ID_CATEGORIE', 'NOM_CATEGORIE'),
(1490, 3, 'REF_PROVIDER', 'Part n0', 'number', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(1491, 3, 'REF_TAXE', 'Type Articles', 'yes_no', '', 'yes', 'yes', 'yes', 8, '', '', ''),
(1492, 3, 'QUANTITY', 'Etat', 'yes_no', '', 'yes', 'yes', 'yes', 9, '', '', ''),
(1493, 3, 'SKU', 'Gestion de stock', 'yes_no', '', 'yes', 'yes', 'yes', 10, '', '', ''),
(1494, 3, 'QUANTITE_RESTANTE', 'QUANTITE_RESTANTE', 'number', '', '', '', '', 11, '', '', ''),
(1495, 3, 'QUANTITE_VENDU', 'QUANTITE_VENDU', 'number', '', '', '', '', 12, '', '', ''),
(1496, 3, 'DEFECTUEUX', 'DEFECTUEUX', 'number', '', '', '', '', 13, '', '', ''),
(1497, 3, 'PRIX_DACHAT', 'PRIX_DACHAT', 'input', '', '', '', '', 14, '', '', ''),
(1498, 3, 'FRAIS_ACCESSOIRE', 'FRAIS_ACCESSOIRE', 'input', '', '', '', '', 15, '', '', ''),
(1499, 3, 'PRIX_DE_VENTE', 'Prix de vente', 'input', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(1500, 3, 'SHADOW_PRICE', 'Prix fictif', 'input', '', 'yes', 'yes', 'yes', 17, '', '', ''),
(1501, 3, 'PRIX_PROMOTIONEL', 'Prix promotionnel', 'input', '', 'yes', 'yes', 'yes', 18, '', '', ''),
(1502, 3, 'SPECIAL_PRICE_START_DATE', 'Debut de la promotion', 'datetime', '', 'yes', 'yes', 'yes', 19, '', '', ''),
(1503, 3, 'SPECIAL_PRICE_END_DATE', 'Fin de la promotion', 'datetime', '', 'yes', 'yes', 'yes', 20, '', '', ''),
(1504, 3, 'TAUX_DE_MARGE', 'TAUX DE MARGE', 'datetime', '', '', '', '', 21, '', '', ''),
(1505, 3, 'PRIX_DE_VENTE_TTC', 'PRIX_DE_VENTE_TTC', 'input', '', '', '', '', 22, '', '', ''),
(1506, 3, 'COUT_DACHAT', 'COUT_ACHAT', 'datetime', '', '', '', '', 23, '', '', ''),
(1507, 3, 'TAILLE', 'Taille', 'input', '', 'yes', 'yes', 'yes', 24, '', '', ''),
(1508, 3, 'POIDS', 'Unite', 'input', '', 'yes', 'yes', 'yes', 25, '', '', ''),
(1509, 3, 'COULEUR', 'Couleur', 'input', '', 'yes', 'yes', 'yes', 26, '', '', ''),
(1510, 3, 'HAUTEUR', 'Hauteur', 'input', '', 'yes', 'yes', 'yes', 27, '', '', ''),
(1511, 3, 'LARGEUR', 'Largeur', 'input', '', 'yes', 'yes', 'yes', 28, '', '', ''),
(1512, 3, 'DESCRIPTION', 'Description', 'editor_wysiwyg', '', 'yes', 'yes', 'yes', 29, '', '', ''),
(1513, 3, 'APERCU', 'Apercu', 'file', '', 'yes', 'yes', 'yes', 30, '', '', ''),
(1514, 3, 'CODEBAR', 'Codebar', 'input', '', '', '', 'yes', 31, '', '', ''),
(1515, 3, 'DATE_CREATION', 'Date_creation', 'timestamp', '', 'yes', '', 'yes', 32, '', '', ''),
(1516, 3, 'DATE_MOD', 'Date_modification', 'timestamp', '', '', 'yes', 'yes', 33, '', '', ''),
(1517, 3, 'AUTHOR', 'Auteur', 'number', 'yes', '', '', 'yes', 34, '', '', ''),
(1518, 3, 'TYPE', 'TYPE', 'number', '', '', '', '', 35, '', '', ''),
(1519, 3, 'STATUS', 'STATUS', 'number', '', '', '', '', 36, '', '', ''),
(1520, 3, 'STOCK_ENABLED', 'STOCK_ENABLED', 'number', '', '', '', '', 37, '', '', ''),
(1521, 3, 'AUTO_BARCODE', 'AUTO_BARCODE', 'number', '', '', '', '', 38, '', '', ''),
(1522, 3, 'BARCODE_TYPE', 'BARCODE_TYPE', 'input', '', '', '', '', 39, '', '', ''),
(1523, 3, 'USE_VARIATION', 'USE_VARIATION', 'number', '', '', '', '', 40, '', '', ''),
(1524, 3, 'MINIMUM_QUANTITY', 'MINIMUM_QUANTITY', 'input', '', '', '', '', 41, '', '', ''),
(1531, 13, 'ID_RAYON', 'ID_RAYON', 'number', '', '', '', 'yes', 1, '', '', ''),
(1532, 13, 'TITRE_RAYON', 'TITRE_RAYON', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(1533, 13, 'DESCRIPTION_RAYON', 'DESCRIPTION_RAYON', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(1534, 13, 'DATE_CREATION_RAYON', 'DATE_CREATION_RAYON', 'timestamp', '', 'yes', '', 'yes', 4, '', '', ''),
(1535, 13, 'DATE_MOD_RAYON', 'DATE_MOD_RAYON', 'timestamp', '', '', 'yes', 'yes', 5, '', '', ''),
(1536, 13, 'AUTHOR_RAYON', 'AUTHOR_RAYON', 'current_user_id', 'yes', 'yes', '', 'yes', 6, '', '', ''),
(1558, 14, 'ID_TAXE', 'ID_TAXE', 'number', '', '', '', 'yes', 1, '', '', ''),
(1559, 14, 'NAME_TAXE', 'Nom de la taxe', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(1560, 14, 'DESCRIPTION_TAXE', 'Description de la taxe', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(1561, 14, 'RATE_TAXE', 'Taux Imposition', 'input', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(1562, 14, 'AUTHOR_TAXE', 'Auteur', 'current_user_id', 'yes', 'yes', '', 'yes', 5, '', '', ''),
(1563, 14, 'DATE_CREATION_TAXE', 'Date de creation', 'timestamp', '', 'yes', '', 'yes', 6, '', '', ''),
(1564, 14, 'DATE_MOD_TAXE', 'Date de modification', 'timestamp', '', '', 'yes', 'yes', 7, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `crud_field_validation`
--

CREATE TABLE `crud_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crud_field_validation`
--

INSERT INTO `crud_field_validation` (`id`, `crud_field_id`, `crud_id`, `validation_name`, `validation_value`) VALUES
(13, 10, 1, 'required', ''),
(14, 11, 1, 'required', ''),
(15, 11, 1, 'max_length', '50'),
(16, 13, 1, 'max_length', '200'),
(17, 18, 2, 'required', ''),
(18, 18, 2, 'max_length', '200'),
(19, 19, 2, 'required', ''),
(20, 19, 2, 'max_length', '11'),
(21, 20, 2, 'required', ''),
(22, 20, 2, 'max_length', '11'),
(23, 21, 2, 'required', ''),
(24, 21, 2, 'max_length', '11'),
(25, 22, 2, 'required', ''),
(26, 22, 2, 'max_length', '11'),
(27, 23, 2, 'required', ''),
(28, 23, 2, 'max_length', '11'),
(29, 24, 2, 'required', ''),
(30, 24, 2, 'max_length', '11'),
(31, 25, 2, 'required', ''),
(32, 25, 2, 'max_length', '11'),
(33, 26, 2, 'required', ''),
(34, 26, 2, 'max_length', '200'),
(35, 27, 2, 'required', ''),
(36, 27, 2, 'max_length', '11'),
(37, 28, 2, 'required', ''),
(38, 28, 2, 'max_length', '11'),
(39, 29, 2, 'required', ''),
(40, 29, 2, 'max_length', '11'),
(41, 30, 2, 'required', ''),
(42, 31, 2, 'required', ''),
(43, 32, 2, 'required', ''),
(44, 33, 2, 'required', ''),
(45, 34, 2, 'required', ''),
(46, 35, 2, 'required', ''),
(47, 36, 2, 'required', ''),
(48, 37, 2, 'required', ''),
(49, 37, 2, 'max_length', '200'),
(50, 38, 2, 'required', ''),
(51, 38, 2, 'max_length', '200'),
(52, 39, 2, 'required', ''),
(53, 39, 2, 'max_length', '200'),
(54, 40, 2, 'required', ''),
(55, 40, 2, 'max_length', '200'),
(56, 41, 2, 'required', ''),
(57, 41, 2, 'max_length', '200'),
(58, 42, 2, 'required', ''),
(59, 43, 2, 'required', ''),
(60, 44, 2, 'required', ''),
(61, 45, 2, 'required', ''),
(62, 46, 2, 'required', ''),
(63, 46, 2, 'max_length', '200'),
(64, 47, 2, 'required', ''),
(65, 47, 2, 'max_length', '200'),
(66, 48, 2, 'required', ''),
(67, 49, 2, 'required', ''),
(68, 50, 2, 'required', ''),
(69, 50, 2, 'max_length', '11'),
(70, 51, 2, 'required', ''),
(71, 51, 2, 'max_length', '11'),
(72, 52, 2, 'required', ''),
(73, 52, 2, 'max_length', '11'),
(74, 53, 2, 'required', ''),
(75, 53, 2, 'max_length', '11'),
(76, 54, 2, 'required', ''),
(77, 54, 2, 'max_length', '11'),
(78, 55, 2, 'required', ''),
(79, 55, 2, 'max_length', '200'),
(80, 56, 2, 'required', ''),
(81, 56, 2, 'max_length', '11'),
(82, 57, 2, 'required', ''),
(795, 674, 4, 'required', ''),
(796, 674, 4, 'max_length', '20'),
(797, 675, 4, 'required', ''),
(798, 675, 4, 'max_length', '11'),
(799, 676, 4, 'required', ''),
(800, 676, 4, 'max_length', '11'),
(801, 677, 4, 'required', ''),
(802, 678, 4, 'required', ''),
(803, 678, 4, 'max_length', '11'),
(804, 679, 4, 'required', ''),
(805, 680, 4, 'required', ''),
(806, 680, 4, 'max_length', '11'),
(838, 709, 5, 'required', ''),
(839, 710, 5, 'required', ''),
(840, 711, 5, 'required', ''),
(841, 712, 5, 'required', ''),
(842, 716, 5, 'required', ''),
(843, 718, 6, 'required', ''),
(844, 728, 6, 'required', ''),
(845, 730, 7, 'required', ''),
(846, 731, 7, 'required', ''),
(847, 734, 7, 'required', ''),
(927, 943, 8, 'required', ''),
(928, 944, 8, 'required', ''),
(929, 945, 8, 'required', ''),
(930, 947, 8, 'required', ''),
(931, 950, 8, 'required', ''),
(932, 959, 8, 'required', ''),
(933, 962, 8, 'required', ''),
(1102, 1114, 9, 'required', ''),
(1103, 1115, 9, 'required', ''),
(1104, 1117, 9, 'required', ''),
(1105, 1118, 9, 'required', ''),
(1106, 1120, 9, 'required', ''),
(1107, 1121, 9, 'required', ''),
(1108, 1122, 9, 'required', ''),
(1109, 1122, 9, 'max_length', '11'),
(1110, 1123, 9, 'required', ''),
(1111, 1123, 9, 'max_length', '11'),
(1112, 1124, 9, 'required', ''),
(1113, 1124, 9, 'max_length', '11'),
(1114, 1125, 9, 'required', ''),
(1115, 1126, 9, 'required', ''),
(1116, 1126, 9, 'max_length', '200'),
(1117, 1127, 9, 'required', ''),
(1118, 1127, 9, 'max_length', '200'),
(1119, 1128, 9, 'required', ''),
(1120, 1128, 9, 'max_length', '200'),
(1121, 1129, 9, 'required', ''),
(1122, 1130, 9, 'required', ''),
(1123, 1130, 9, 'max_length', '200'),
(1124, 1131, 9, 'required', ''),
(1125, 1132, 9, 'required', ''),
(1126, 1132, 9, 'max_length', '200'),
(1127, 1135, 9, 'required', ''),
(1128, 1138, 10, 'required', ''),
(1129, 1140, 10, 'required', ''),
(1130, 1141, 10, 'required', ''),
(1131, 1148, 10, 'required', ''),
(1132, 1150, 11, 'required', ''),
(1133, 1151, 11, 'required', ''),
(1134, 1152, 11, 'required', ''),
(1135, 1153, 11, 'required', ''),
(1136, 1154, 11, 'required', ''),
(1137, 1156, 11, 'required', ''),
(1138, 1157, 11, 'required', ''),
(1139, 1158, 11, 'required', ''),
(1140, 1159, 11, 'required', ''),
(1141, 1160, 11, 'required', ''),
(1142, 1160, 11, 'max_length', '11'),
(1143, 1161, 11, 'required', ''),
(1144, 1162, 11, 'required', ''),
(1145, 1163, 11, 'required', ''),
(1146, 1163, 11, 'max_length', '200'),
(1147, 1164, 11, 'required', ''),
(1148, 1165, 11, 'required', ''),
(1149, 1166, 11, 'required', ''),
(1150, 1167, 11, 'required', ''),
(1151, 1168, 11, 'required', ''),
(1152, 1169, 11, 'required', ''),
(1153, 1170, 11, 'required', ''),
(1154, 1172, 11, 'required', ''),
(1160, 1190, 12, 'required', ''),
(1382, 1485, 3, 'required', ''),
(1383, 1488, 3, 'required', ''),
(1384, 1490, 3, 'required', ''),
(1385, 1491, 3, 'required', ''),
(1386, 1492, 3, 'required', ''),
(1387, 1493, 3, 'required', ''),
(1388, 1494, 3, 'required', ''),
(1389, 1494, 3, 'max_length', '11'),
(1390, 1495, 3, 'required', ''),
(1391, 1495, 3, 'max_length', '11'),
(1392, 1496, 3, 'required', ''),
(1393, 1496, 3, 'max_length', '11'),
(1394, 1497, 3, 'required', ''),
(1395, 1498, 3, 'required', ''),
(1396, 1499, 3, 'required', ''),
(1397, 1500, 3, 'required', ''),
(1398, 1505, 3, 'required', ''),
(1399, 1506, 3, 'required', ''),
(1400, 1507, 3, 'required', ''),
(1401, 1518, 3, 'required', ''),
(1402, 1518, 3, 'max_length', '11'),
(1403, 1519, 3, 'required', ''),
(1404, 1519, 3, 'max_length', '11'),
(1405, 1520, 3, 'required', ''),
(1406, 1520, 3, 'max_length', '11'),
(1407, 1521, 3, 'required', ''),
(1408, 1521, 3, 'max_length', '11'),
(1409, 1522, 3, 'required', ''),
(1410, 1523, 3, 'required', ''),
(1411, 1523, 3, 'max_length', '11'),
(1412, 1524, 3, 'required', ''),
(1417, 1532, 13, 'required', ''),
(1427, 1559, 14, 'required', ''),
(1428, 1561, 14, 'required', '');

-- --------------------------------------------------------

--
-- Structure de la table `crud_input_type`
--

CREATE TABLE `crud_input_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `custom_value` int(11) NOT NULL,
  `validation_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crud_input_type`
--

INSERT INTO `crud_input_type` (`id`, `type`, `relation`, `custom_value`, `validation_group`) VALUES
(1, 'input', '0', 0, 'input'),
(2, 'textarea', '0', 0, 'text'),
(3, 'select', '1', 0, 'select'),
(4, 'editor_wysiwyg', '0', 0, 'editor'),
(5, 'password', '0', 0, 'password'),
(6, 'email', '0', 0, 'email'),
(7, 'address_map', '0', 0, 'address_map'),
(8, 'file', '0', 0, 'file'),
(9, 'file_multiple', '0', 0, 'file_multiple'),
(10, 'datetime', '0', 0, 'datetime'),
(11, 'date', '0', 0, 'date'),
(12, 'timestamp', '0', 0, 'timestamp'),
(13, 'number', '0', 0, 'number'),
(14, 'yes_no', '0', 0, 'yes_no'),
(15, 'time', '0', 0, 'time'),
(16, 'year', '0', 0, 'year'),
(17, 'select_multiple', '1', 0, 'select_multiple'),
(18, 'checkboxes', '1', 0, 'checkboxes'),
(19, 'options', '1', 0, 'options'),
(20, 'true_false', '0', 0, 'true_false'),
(21, 'current_user_username', '0', 0, 'user_username'),
(22, 'current_user_id', '0', 0, 'current_user_id'),
(23, 'custom_option', '0', 1, 'custom_option'),
(24, 'custom_checkbox', '0', 1, 'custom_checkbox'),
(25, 'custom_select_multiple', '0', 1, 'custom_select_multiple'),
(26, 'custom_select', '0', 1, 'custom_select');

-- --------------------------------------------------------

--
-- Structure de la table `crud_input_validation`
--

CREATE TABLE `crud_input_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `validation` varchar(200) NOT NULL,
  `input_able` varchar(20) NOT NULL,
  `group_input` text NOT NULL,
  `input_placeholder` text NOT NULL,
  `call_back` varchar(10) NOT NULL,
  `input_validation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crud_input_validation`
--

INSERT INTO `crud_input_validation` (`id`, `validation`, `input_able`, `group_input`, `input_placeholder`, `call_back`, `input_validation`) VALUES
(1, 'required', 'no', 'input, file, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes, true_false, address_map, custom_option, custom_checkbox, custom_select_multiple, custom_select, file_multiple', '', '', ''),
(2, 'max_length', 'yes', 'input, number, text, select, password, email, editor, yes_no, time, year, select_multiple, options, checkboxes, address_map', '', '', 'numeric'),
(3, 'min_length', 'yes', 'input, number, text, select, password, email, editor, time, year, select_multiple, address_map', '', '', 'numeric'),
(4, 'valid_email', 'no', 'input, email', '', '', ''),
(5, 'valid_emails', 'no', 'input, email', '', '', ''),
(6, 'regex', 'yes', 'input, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes', '', 'yes', 'callback_valid_regex'),
(7, 'decimal', 'no', 'input, number, text, select', '', '', ''),
(8, 'allowed_extension', 'yes', 'file, file_multiple', 'ex : jpg,png,..', '', 'callback_valid_extension_list'),
(9, 'max_width', 'yes', 'file, file_multiple', '', '', 'numeric'),
(10, 'max_height', 'yes', 'file, file_multiple', '', '', 'numeric'),
(11, 'max_size', 'yes', 'file, file_multiple', '... kb', '', 'numeric'),
(12, 'max_item', 'yes', 'file_multiple', '', '', 'numeric'),
(13, 'valid_url', 'no', 'input, text', '', '', ''),
(14, 'alpha', 'no', 'input, text, select, password, editor, yes_no', '', '', ''),
(15, 'alpha_numeric', 'no', 'input, number, text, select, password, editor', '', '', ''),
(16, 'alpha_numeric_spaces', 'no', 'input, number, text,select, password, editor', '', '', ''),
(17, 'valid_number', 'no', 'input, number, text, password, editor, true_false', '', 'yes', ''),
(18, 'valid_datetime', 'no', 'input, datetime, text', '', 'yes', ''),
(19, 'valid_date', 'no', 'input, datetime, date, text', '', 'yes', ''),
(20, 'valid_max_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
(21, 'valid_min_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
(22, 'valid_alpha_numeric_spaces_underscores', 'no', 'input, text,select, password, editor', '', 'yes', ''),
(23, 'matches', 'yes', 'input, number, text, password, email', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
(24, 'valid_json', 'no', 'input, text, editor', '', 'yes', ' '),
(25, 'valid_url', 'no', 'input, text, editor', '', 'no', ' '),
(26, 'exact_length', 'yes', 'input, text, number', '0 - 99999*', 'no', 'numeric'),
(27, 'alpha_dash', 'no', 'input, text', '', 'no', ''),
(28, 'integer', 'no', 'input, text, number', '', 'no', ''),
(29, 'differs', 'yes', 'input, text, number, email, password, editor, options, select', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
(30, 'is_natural', 'no', 'input, text, number', '', 'no', ''),
(31, 'is_natural_no_zero', 'no', 'input, text, number', '', 'no', ''),
(32, 'less_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
(33, 'less_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
(34, 'greater_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
(35, 'greater_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
(36, 'in_list', 'yes', 'input, text, number, select, options', '', 'no', 'callback_valid_multiple_value'),
(37, 'valid_ip', 'no', 'input, text', '', 'no', '');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `classe` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`id`, `nom`, `age`, `classe`, `date_creation`, `created_by`, `date_modified`, `modified_by`) VALUES
(1, 'KANEZA', 17, 1, '2020-02-20 08:58:28', 1, '2020-02-20 09:32:05', 1);

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE `emplacement` (
  `id_emplacement` int(11) NOT NULL,
  `Nom_emplacement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emplacement`
--

INSERT INTO `emplacement` (`id_emplacement`, `Nom_emplacement`) VALUES
(1, 'A1'),
(2, 'B1');

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `form_custom_attribute`
--

CREATE TABLE `form_custom_attribute` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `attribute_value` text NOT NULL,
  `attribute_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `form_custom_option`
--

CREATE TABLE `form_custom_option` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `form_field`
--

CREATE TABLE `form_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `input_type` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `placeholder` text,
  `auto_generate_help_block` varchar(10) DEFAULT NULL,
  `help_block` text,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `form_field_validation`
--

CREATE TABLE `form_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_addresses` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, '4E5898E344776A69132C4C1990C3EC3E', 0, 0, 0, NULL, '2020-02-18 12:54:55');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `label` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `icon_color` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `menu_type_id` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `label`, `type`, `icon_color`, `link`, `sort`, `parent`, `icon`, `menu_type_id`, `active`) VALUES
(1, 'MAIN NAVIGATION', 'label', '', 'administrator/dashboard', 1, 0, '', 1, 1),
(2, 'Dashboard', 'menu', '', 'administrator/dashboard', 2, 0, 'fa-dashboard', 1, 1),
(3, 'CRUD Builder', 'menu', '', 'administrator/crud', 4, 0, 'fa-table', 1, 1),
(4, 'API Builder', 'menu', '', 'administrator/rest', 5, 0, 'fa-code', 1, 1),
(5, 'Page Builder', 'menu', '', 'administrator/page', 6, 0, 'fa-file-o', 1, 1),
(6, 'Form Builder', 'menu', '', 'administrator/form', 7, 0, 'fa-newspaper-o', 1, 1),
(7, 'Blog', 'menu', '', 'administrator/blog', 8, 0, 'fa-file-text-o', 1, 1),
(8, 'Menu', 'menu', '', 'administrator/menu', 9, 0, 'fa-bars', 1, 1),
(9, 'Auth', 'menu', '', '', 19, 0, 'fa-shield', 1, 1),
(10, 'User', 'menu', '', 'administrator/user', 20, 9, '', 1, 1),
(11, 'Groups', 'menu', '', 'administrator/group', 21, 9, '', 1, 1),
(12, 'Access', 'menu', '', 'administrator/access', 22, 9, '', 1, 1),
(13, 'Permission', 'menu', '', 'administrator/permission', 23, 9, '', 1, 1),
(14, 'API Keys', 'menu', '', 'administrator/keys', 24, 9, '', 1, 1),
(15, 'Extension', 'menu', '', 'administrator/extension', 25, 0, 'fa-puzzle-piece', 1, 1),
(16, 'OTHER', 'label', '', '', 26, 0, '', 1, 1),
(17, 'Settings', 'menu', 'text-red', 'administrator/setting', 27, 0, 'fa-circle-o', 1, 1),
(18, 'Web Documentation', 'menu', 'text-blue', 'administrator/doc/web', 28, 0, 'fa-circle-o', 1, 1),
(19, 'API Documentation', 'menu', 'text-yellow', 'administrator/doc/api', 29, 0, 'fa-circle-o', 1, 1),
(20, 'Home', 'menu', '', '/', 1, 0, '', 2, 1),
(21, 'Blog', 'menu', '', 'blog', 4, 0, '', 2, 1),
(22, 'Dashboard', 'menu', '', 'administrator/dashboard', 5, 0, '', 2, 1),
(23, 'Boutiques', 'menu', 'default', 'administrator/Pos_ibi_stores', 3, 0, 'fa-cubes', 1, 1),
(26, 'Fournisseurs', 'menu', 'default', 'administrator/cellule', 10, 0, 'fa-truck', 1, 1),
(27, 'Liste des  fournisseurs', 'menu', 'default', 'administrator/pos_ibi_fournisseurs', 11, 26, 'fa-archive', 1, 1),
(28, 'Clients', 'menu', 'default', 'administrator/pos_ibi_clients_groups', 16, 0, 'fa-group', 1, 1),
(29, 'Groupes', 'menu', 'default', 'administrator/pos_ibi_clients_groups', 17, 28, '', 1, 1),
(30, 'Liste des clients', 'menu', 'default', 'administrator/pos_ibi_clients', 18, 28, '', 1, 1),
(32, 'Listes des categories', 'menu', 'default', 'administrator/pos_ibi_categories', 13, 35, '', 1, 1),
(33, 'Categories seulement', 'menu', 'default', 'administrator/pos_ibi_categories/categories_only', 14, 35, '', 1, 1),
(35, 'Inventaires', 'menu', 'default', '#', 12, 0, 'fa-archive', 1, 1),
(38, 'Sous Categories', 'menu', 'default', 'administrator/pos_ibi_categories/sous_categories_only', 30, 0, '', 1, 1),
(39, 'Listes des articles', 'menu', 'default', 'administrator/pos_store_2_ibi_articles', 32, 35, 'fa-sticky-note', 1, 1),
(40, 'Item Location', 'menu', 'default', 'administrator/pos_store_2_ibi_rayons', 33, 35, '', 1, 1),
(41, 'Taxes', 'menu', 'default', 'administrator/pos_ibi_taxes', 34, 35, '', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `menu_type`
--

CREATE TABLE `menu_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu_type`
--

INSERT INTO `menu_type` (`id`, `name`, `definition`) VALUES
(1, 'side menu', NULL),
(2, 'top menu', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(1);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `fresh_content` text NOT NULL,
  `keyword` text,
  `description` text,
  `link` varchar(200) DEFAULT NULL,
  `template` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `page_block_element`
--

CREATE TABLE `page_block_element` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image_preview` varchar(200) NOT NULL,
  `block_name` varchar(200) NOT NULL,
  `content_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(8, 'Besoins specifiques admi', '', '2020-02-24 10:13:16', '2020-02-26 01:04:36', 1, 0, ''),
(9, 'Magasins', 'haush', '2020-02-24 10:13:55', '0000-00-00 00:00:00', 1, 3, '20200224101355-2020-02-24pos_ibi_categories101352.html'),
(10, 'Besoins A', '', '2020-02-24 13:08:36', '0000-00-00 00:00:00', 1, 6, '');

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_clients`
--

CREATE TABLE `pos_ibi_clients` (
  `ID_CLIENT` int(11) NOT NULL,
  `NOM_CLIENT` varchar(200) NOT NULL,
  `PRENOM_CLIENT` varchar(200) NOT NULL,
  `POIDS_CLIENT` int(11) NOT NULL,
  `TEL_CLIENT` varchar(200) NOT NULL,
  `EMAIL_CLIENT` varchar(200) NOT NULL,
  `DESCRIPTION_CLIENT` text NOT NULL,
  `DATE_NAISSANCE_CLIENT` datetime NOT NULL,
  `ADRESSE_CLIENT` text NOT NULL,
  `NBR_COMMANDES_CLIENT_CLIENT` int(11) NOT NULL,
  `OVERALL_COMMANDES_CLIENT` int(11) NOT NULL,
  `DISCOUNT_ACTIVE_CLIENT` int(11) NOT NULL,
  `TOTAL_SPEND_CLIENT` float NOT NULL,
  `LAST_ORDER_CLIENT` varchar(200) NOT NULL,
  `AVATAR_CLIENT` varchar(200) NOT NULL,
  `STATE_CLIENT` varchar(200) NOT NULL,
  `CITY_CLIENT` varchar(200) NOT NULL,
  `POST_CODE_CLIENT` varchar(200) NOT NULL,
  `COUNTRY_CLIENT` varchar(200) NOT NULL,
  `COMPANY_NAME_CLIENT` varchar(200) NOT NULL,
  `DATE_CREATION_CLIENT` datetime NOT NULL,
  `DATE_MOD_CLIENT` datetime NOT NULL,
  `REF_GROUP_CLIENT` int(11) NOT NULL,
  `AUTHOR_CLIENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_clients`
--

INSERT INTO `pos_ibi_clients` (`ID_CLIENT`, `NOM_CLIENT`, `PRENOM_CLIENT`, `POIDS_CLIENT`, `TEL_CLIENT`, `EMAIL_CLIENT`, `DESCRIPTION_CLIENT`, `DATE_NAISSANCE_CLIENT`, `ADRESSE_CLIENT`, `NBR_COMMANDES_CLIENT_CLIENT`, `OVERALL_COMMANDES_CLIENT`, `DISCOUNT_ACTIVE_CLIENT`, `TOTAL_SPEND_CLIENT`, `LAST_ORDER_CLIENT`, `AVATAR_CLIENT`, `STATE_CLIENT`, `CITY_CLIENT`, `POST_CODE_CLIENT`, `COUNTRY_CLIENT`, `COMPANY_NAME_CLIENT`, `DATE_CREATION_CLIENT`, `DATE_MOD_CLIENT`, `REF_GROUP_CLIENT`, `AUTHOR_CLIENT`) VALUES
(19, 'BIGABO', 'Jean Claude', 0, '78392842', 'bigabo@gmail.com', 'erjk', '1992-02-08 06:34:00', '', 0, 0, 0, 0, '', '', '', 'Bujumbura', '', 'Burundi', '283902', '2020-02-21 16:35:10', '2020-02-21 16:35:10', 8, 1),
(20, 'NIYONKURU', 'Fiston', 0, '79828392', 'niyo@gmail.com', 'hh', '1998-02-04 08:21:00', 'Kigobe av twinyoni no 2', 0, 0, 0, 0, '', '', '', 'Bujumbura', '', 'Burundi', '988997', '2020-02-27 18:21:47', '2020-02-27 18:21:47', 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_clients_groups`
--

CREATE TABLE `pos_ibi_clients_groups` (
  `ID_GROUP` int(11) NOT NULL,
  `NAME_GROUP` varchar(200) NOT NULL,
  `DESCRIPTION_GROUP` text NOT NULL,
  `DATE_CREATION_GROUP` datetime NOT NULL,
  `DATE_MODIFICATION_GROUP` datetime NOT NULL,
  `DISCOUNT_TYPE_GROUP` varchar(220) NOT NULL,
  `DISCOUNT_PERCENT_GROUP` float NOT NULL,
  `DISCOUNT_AMOUNT_GROUP` float NOT NULL,
  `DISCOUNT_ENABLE_SCHEDULE_GROUP` varchar(220) NOT NULL,
  `DISCOUNT_START_GROUP` datetime NOT NULL,
  `DISCOUNT_END_GROUP` datetime NOT NULL,
  `AUTHOR_GROUP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_clients_groups`
--

INSERT INTO `pos_ibi_clients_groups` (`ID_GROUP`, `NAME_GROUP`, `DESCRIPTION_GROUP`, `DATE_CREATION_GROUP`, `DATE_MODIFICATION_GROUP`, `DISCOUNT_TYPE_GROUP`, `DISCOUNT_PERCENT_GROUP`, `DISCOUNT_AMOUNT_GROUP`, `DISCOUNT_ENABLE_SCHEDULE_GROUP`, `DISCOUNT_START_GROUP`, `DISCOUNT_END_GROUP`, `AUTHOR_GROUP`) VALUES
(8, 'ONG', 'y', '2020-02-21 16:18:23', '0000-00-00 00:00:00', '2', 20, 30000, 'no', '2020-02-05 06:18:00', '2020-02-22 06:18:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_fournisseurs`
--

CREATE TABLE `pos_ibi_fournisseurs` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(200) NOT NULL,
  `BP` varchar(200) NOT NULL,
  `TEL` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `DATE_CREATION` datetime NOT NULL,
  `DATE_MOD` datetime NOT NULL,
  `AUTHOR` varchar(200) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_fournisseurs`
--

INSERT INTO `pos_ibi_fournisseurs` (`ID`, `NOM`, `BP`, `TEL`, `EMAIL`, `DATE_CREATION`, `DATE_MOD`, `AUTHOR`, `DESCRIPTION`) VALUES
(1, 'VYAGIZIMANA', '1234', '78392018', 'hab@gmail.com', '2020-02-20 10:15:54', '0000-00-00 00:00:00', '', 'hhhhhhhhhhhhhhhhhh'),
(5, 'KAGABO', '123', '78493023', 'Habimana@gmail.com', '2020-02-20 14:02:07', '0000-00-00 00:00:00', '1', 'jwqkuyhweh');

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_stores`
--

CREATE TABLE `pos_ibi_stores` (
  `ID` int(11) NOT NULL,
  `STATUT` varchar(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `IMAGE` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `DATE_CREATION` datetime NOT NULL,
  `DATE_MOD` datetime NOT NULL,
  `AUTHOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_stores`
--

INSERT INTO `pos_ibi_stores` (`ID`, `STATUT`, `NAME`, `IMAGE`, `DESCRIPTION`, `DATE_CREATION`, `DATE_MOD`, `AUTHOR`) VALUES
(1, 'opened', 'SAV', '', '', '2020-02-18 16:24:37', '0000-00-00 00:00:00', 1),
(2, 'opened', 'VENTE', '', '', '2020-02-18 16:24:58', '2020-02-19 11:13:49', 1),
(3, 'opened', 'PRODUCTION', '', '', '2020-02-18 16:25:37', '2020-02-19 11:14:11', 1),
(4, 'opened', 'ENTREPÔT SOUS DOUANE', '', '', '2020-02-18 16:26:14', '0000-00-00 00:00:00', 1),
(5, 'opened', 'SEMI-FINI', '', '', '2020-02-18 16:26:39', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_taxes`
--

CREATE TABLE `pos_ibi_taxes` (
  `ID_TAXE` int(11) NOT NULL,
  `NAME_TAXE` varchar(200) NOT NULL,
  `DESCRIPTION_TAXE` text NOT NULL,
  `RATE_TAXE` float NOT NULL,
  `AUTHOR_TAXE` int(11) NOT NULL,
  `DATE_CREATION_TAXE` datetime NOT NULL,
  `DATE_MOD_TAXE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_taxes`
--

INSERT INTO `pos_ibi_taxes` (`ID_TAXE`, `NAME_TAXE`, `DESCRIPTION_TAXE`, `RATE_TAXE`, `AUTHOR_TAXE`, `DATE_CREATION_TAXE`, `DATE_MOD_TAXE`) VALUES
(1, 'tva', 'j', 12, 1, '2020-02-27 15:29:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_articles`
--

CREATE TABLE `pos_store_2_ibi_articles` (
  `ID` int(11) NOT NULL,
  `DESIGN` varchar(200) NOT NULL,
  `REF_RAYON` int(11) NOT NULL,
  `REF_SHIPPING` int(11) NOT NULL,
  `REF_CATEGORIE` int(11) NOT NULL,
  `REF_SOUS_CATEGORIE` int(11) DEFAULT NULL,
  `REF_PROVIDER` int(11) NOT NULL,
  `REF_TAXE` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `SKU` varchar(200) NOT NULL,
  `QUANTITE_RESTANTE` int(11) NOT NULL,
  `QUANTITE_VENDU` int(11) NOT NULL,
  `DEFECTUEUX` int(11) NOT NULL,
  `PRIX_DACHAT` float NOT NULL,
  `FRAIS_ACCESSOIRE` float NOT NULL,
  `COUT_DACHAT` float NOT NULL,
  `TAUX_DE_MARGE` float NOT NULL,
  `PRIX_DE_VENTE` float NOT NULL,
  `PRIX_DE_VENTE_TTC` float NOT NULL,
  `SHADOW_PRICE` float NOT NULL,
  `TAILLE` varchar(200) NOT NULL,
  `POIDS` varchar(200) NOT NULL,
  `COULEUR` varchar(200) NOT NULL,
  `HAUTEUR` varchar(200) NOT NULL,
  `LARGEUR` varchar(200) NOT NULL,
  `PRIX_PROMOTIONEL` float NOT NULL,
  `SPECIAL_PRICE_START_DATE` datetime NOT NULL,
  `SPECIAL_PRICE_END_DATE` datetime NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `APERCU` varchar(200) NOT NULL,
  `CODEBAR` varchar(200) NOT NULL,
  `DATE_CREATION` datetime NOT NULL,
  `DATE_MOD` datetime NOT NULL,
  `AUTHOR` varchar(200) NOT NULL,
  `TYPE` int(11) NOT NULL COMMENT 'pour Article physique la valeur est 0 et pour les articles numeriques c''est 0',
  `STATUS` int(11) NOT NULL COMMENT 'pour l''etat en vente c''est 1 et pour indisponible c''est 0',
  `STOCK_ENABLED` int(11) NOT NULL COMMENT 'Losque la valeur est 1 c''est a dire que c''est active et si on 0 c''est a dire que c''est desactive ',
  `AUTO_BARCODE` int(11) NOT NULL,
  `BARCODE_TYPE` varchar(200) NOT NULL,
  `USE_VARIATION` int(11) NOT NULL,
  `MINIMUM_QUANTITY` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_articles`
--

INSERT INTO `pos_store_2_ibi_articles` (`ID`, `DESIGN`, `REF_RAYON`, `REF_SHIPPING`, `REF_CATEGORIE`, `REF_SOUS_CATEGORIE`, `REF_PROVIDER`, `REF_TAXE`, `QUANTITY`, `SKU`, `QUANTITE_RESTANTE`, `QUANTITE_VENDU`, `DEFECTUEUX`, `PRIX_DACHAT`, `FRAIS_ACCESSOIRE`, `COUT_DACHAT`, `TAUX_DE_MARGE`, `PRIX_DE_VENTE`, `PRIX_DE_VENTE_TTC`, `SHADOW_PRICE`, `TAILLE`, `POIDS`, `COULEUR`, `HAUTEUR`, `LARGEUR`, `PRIX_PROMOTIONEL`, `SPECIAL_PRICE_START_DATE`, `SPECIAL_PRICE_END_DATE`, `DESCRIPTION`, `APERCU`, `CODEBAR`, `DATE_CREATION`, `DATE_MOD`, `AUTHOR`, `TYPE`, `STATUS`, `STOCK_ENABLED`, `AUTO_BARCODE`, `BARCODE_TYPE`, `USE_VARIATION`, `MINIMUM_QUANTITY`) VALUES
(1, 'p1', 2, 0, 3, NULL, 8, 0, 0, 'Active', 0, 0, 0, 0, 0, 0, 0, 7000, 0, 0, '7', '5', 'rouge', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 01:06:29', '0000-00-00 00:00:00', '0', 0, 0, 0, 0, '', 0, 0),
(2, 'p2', 2, 0, 3, NULL, 43, 0, 0, 'Active', 0, 0, 0, 0, 0, 0, 0, 7990, 0, 0, '78', '9', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 01:17:44', '0000-00-00 00:00:00', '0', 0, 0, 0, 0, '', 0, 0),
(3, 'jfu', 2, 0, 5, NULL, 3, 0, 0, 'Active', 0, 0, 0, 0, 0, 0, 0, 12000, 0, 0, '2', '3', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 01:42:23', '0000-00-00 00:00:00', '0', 0, 0, 0, 0, '', 0, 0),
(4, 'ks', 1, 0, 3, NULL, 2, 0, 0, 'Active', 0, 0, 0, 0, 0, 0, 0, 10000, 0, 0, '1', '2', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 01:52:45', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(5, 'kfi', 2, 0, 9, NULL, 4, 0, 0, 'Active', 0, 0, 0, 0, 0, 0, 0, 10000, 0, 0, '8m', '5', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 02:03:02', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(6, 'jsmuas', 1, 0, 4, 0, 1, 0, 0, 'Active', 0, 0, 0, 0, 0, 0, 0, 19000, 0, 0, '7m', '12', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 02:18:22', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(7, 'mark x', 1, 0, 8, 7, 12, 0, 0, 'Active', 0, 0, 0, 0, 0, 0, 0, 120990, 0, 0, '23', '23', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 02:19:53', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(8, 'nhy', 1, 0, 4, 0, 7, 0, 0, 'Desactive', 0, 0, 0, 0, 0, 0, 0, 78000, 0, 0, '9m', '80', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 02:29:13', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(9, 'ed', 2, 0, 6, 0, 3, 0, 0, 'Desactive', 0, 0, 0, 0, 0, 0, 0, 20000, 0, 0, '12', '3', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 02:35:02', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(10, 'peo', 1, 0, 4, 0, 10, 1, 0, 'Desactive', 0, 0, 0, 0, 0, 0, 0, 19200, 0, 0, '19', '3', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 02:48:15', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(11, 'ndu', 1, 0, 4, 0, 12, 1, 0, '', 0, 0, 0, 0, 0, 0, 0, 10000, 0, 0, '1m', '23', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 18:49:41', '0000-00-00 00:00:00', '1', 0, 0, 0, 0, '', 0, 0),
(12, 'hsnb', 1, 0, 6, 0, 2, 1, 1, '', 0, 0, 0, 0, 0, 0, 0, 13900, 0, 0, '34', '243', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 18:51:27', '0000-00-00 00:00:00', '1', 0, 0, 1, 0, '', 0, 0),
(13, 'nduads', 1, 0, 8, 0, 10, 1, 1, '', 0, 0, 0, 0, 0, 0, 0, 290330, 0, 0, '33', '4', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 19:04:00', '0000-00-00 00:00:00', '1', 0, 0, 1, 0, '', 0, 0),
(14, 'bst', 1, 0, 4, 0, 990, 1, 0, '', 0, 0, 0, 0, 0, 0, 0, 290100, 0, 0, '34', '50', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 19:15:15', '0000-00-00 00:00:00', '1', 0, 1, 1, 0, '', 0, 0),
(15, 'tyd', 2, 0, 8, 3, 120, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 23000, 0, 0, '78', '9', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 19:25:30', '2020-02-27 19:53:49', '1', 0, 0, 0, 0, '', 0, 0),
(16, 'why', 3, 0, 4, 0, 12, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 6000, 0, 0, '20', '3', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 13:34:25', '0000-00-00 00:00:00', '1', 0, 1, 0, 0, '', 0, 0),
(17, 'yeu', 2, 0, 6, 0, 565, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 23000, 0, 0, '36', '4', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 13:56:56', '0000-00-00 00:00:00', '1', 1, 1, 1, 0, '', 0, 0),
(18, 'js', 3, 0, 4, 0, 23, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 200, 0, 0, '29', '9', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 14:02:46', '0000-00-00 00:00:00', '1', 1, 1, 1, 0, '', 0, 0),
(19, 'jsu', 2, 0, 4, 0, 12, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 3000, 0, 0, '12', '3', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 14:06:35', '0000-00-00 00:00:00', '1', 0, 1, 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_commandes`
--

CREATE TABLE `pos_store_2_ibi_commandes` (
  `ID` int(11) NOT NULL,
  `TITRE` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `CODE` varchar(250) NOT NULL,
  `REF_CLIENT` int(11) NOT NULL,
  `REF_REGISTER` int(11) NOT NULL,
  `TYPE` varchar(200) NOT NULL,
  `DATE_CREATION` datetime NOT NULL,
  `DATE_MOD` datetime NOT NULL,
  `PAYMENT_TYPE` varchar(220) NOT NULL,
  `CASHIER` int(11) NOT NULL,
  `AUTHOR` varchar(200) NOT NULL,
  `SOMME_PERCU` float NOT NULL,
  `REMISE` float NOT NULL,
  `RABAIS` float NOT NULL,
  `RISTOURNE` float NOT NULL,
  `REMISE_TYPE` varchar(200) NOT NULL,
  `REMISE_PERCENT` float NOT NULL,
  `RABAIS_PERCENT` float NOT NULL,
  `RISTOURNE_PERCENT` float NOT NULL,
  `TOTAL` float NOT NULL,
  `DISCOUNT_TYPE` varchar(200) NOT NULL,
  `TVA` float NOT NULL,
  `GROUP_DISCOUNT` float DEFAULT NULL,
  `REF_SHIPPING_ADDRESS` int(11) NOT NULL,
  `SHIPPING_AMOUNT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_commandes_produits`
--

CREATE TABLE `pos_store_2_ibi_commandes_produits` (
  `ID` int(11) NOT NULL,
  `REF_PRODUCT_CODEBAR` varchar(250) NOT NULL,
  `REF_COMMAND_CODE` varchar(250) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `PRIX` float NOT NULL,
  `PRIX_TOTAL` float NOT NULL,
  `DISCOUNT_TYPE` varchar(200) NOT NULL,
  `DISCOUNT_AMOUNT` float NOT NULL,
  `DISCOUNT_PERCENT` float NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `INLINE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_rayons`
--

CREATE TABLE `pos_store_2_ibi_rayons` (
  `ID_RAYON` int(11) NOT NULL,
  `TITRE_RAYON` varchar(200) NOT NULL,
  `DESCRIPTION_RAYON` text NOT NULL,
  `DATE_CREATION_RAYON` datetime NOT NULL,
  `DATE_MOD_RAYON` datetime NOT NULL,
  `AUTHOR_RAYON` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_rayons`
--

INSERT INTO `pos_store_2_ibi_rayons` (`ID_RAYON`, `TITRE_RAYON`, `DESCRIPTION_RAYON`, `DATE_CREATION_RAYON`, `DATE_MOD_RAYON`, `AUTHOR_RAYON`) VALUES
(2, 'A20', '6', '2020-02-27 11:11:36', '0000-00-00 00:00:00', 1),
(3, 'A89', 'j', '2020-02-27 11:12:52', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `remise`
--

CREATE TABLE `remise` (
  `ID` int(11) NOT NULL,
  `type_remise` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `remise`
--

INSERT INTO `remise` (`ID`, `type_remise`) VALUES
(1, 'Desactive'),
(2, 'Remise a prix fixe'),
(3, 'Remise au pourcentage');

-- --------------------------------------------------------

--
-- Structure de la table `rest`
--

CREATE TABLE `rest` (
  `id` int(11) UNSIGNED NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `primary_key` varchar(200) NOT NULL,
  `x_api_key` varchar(20) DEFAULT NULL,
  `x_token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rest_field`
--

CREATE TABLE `rest_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `rest_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_api` varchar(10) DEFAULT NULL,
  `show_update_api` varchar(10) DEFAULT NULL,
  `show_detail_api` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rest_field_validation`
--

CREATE TABLE `rest_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `rest_field_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rest_input_type`
--

CREATE TABLE `rest_input_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `validation_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rest_input_type`
--

INSERT INTO `rest_input_type` (`id`, `type`, `relation`, `validation_group`) VALUES
(1, 'input', '0', 'input'),
(2, 'timestamp', '0', 'timestamp'),
(3, 'file', '0', 'file');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aauth_group_to_group`
--
ALTER TABLE `aauth_group_to_group`
  ADD PRIMARY KEY (`group_id`,`subgroup_id`);

--
-- Index pour la table `aauth_login_attempts`
--
ALTER TABLE `aauth_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aauth_perm_to_user`
--
ALTER TABLE `aauth_perm_to_user`
  ADD PRIMARY KEY (`user_id`,`perm_id`);

--
-- Index pour la table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aauth_user`
--
ALTER TABLE `aauth_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aauth_users`
--
ALTER TABLE `aauth_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aauth_user_to_group`
--
ALTER TABLE `aauth_user_to_group`
  ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Index pour la table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`);

--
-- Index pour la table `cc_options`
--
ALTER TABLE `cc_options`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crud_field`
--
ALTER TABLE `crud_field`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crud_input_type`
--
ALTER TABLE `crud_input_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crud_input_validation`
--
ALTER TABLE `crud_input_validation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emplacement`
--
ALTER TABLE `emplacement`
  ADD PRIMARY KEY (`id_emplacement`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form_custom_attribute`
--
ALTER TABLE `form_custom_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form_custom_option`
--
ALTER TABLE `form_custom_option`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form_field_validation`
--
ALTER TABLE `form_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page_block_element`
--
ALTER TABLE `page_block_element`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pos_ibi_categories`
--
ALTER TABLE `pos_ibi_categories`
  ADD PRIMARY KEY (`ID_CATEGORIE`);

--
-- Index pour la table `pos_ibi_clients`
--
ALTER TABLE `pos_ibi_clients`
  ADD PRIMARY KEY (`ID_CLIENT`);

--
-- Index pour la table `pos_ibi_clients_groups`
--
ALTER TABLE `pos_ibi_clients_groups`
  ADD PRIMARY KEY (`ID_GROUP`);

--
-- Index pour la table `pos_ibi_fournisseurs`
--
ALTER TABLE `pos_ibi_fournisseurs`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pos_ibi_stores`
--
ALTER TABLE `pos_ibi_stores`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pos_ibi_taxes`
--
ALTER TABLE `pos_ibi_taxes`
  ADD PRIMARY KEY (`ID_TAXE`);

--
-- Index pour la table `pos_store_2_ibi_articles`
--
ALTER TABLE `pos_store_2_ibi_articles`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pos_store_2_ibi_rayons`
--
ALTER TABLE `pos_store_2_ibi_rayons`
  ADD PRIMARY KEY (`ID_RAYON`);

--
-- Index pour la table `remise`
--
ALTER TABLE `remise`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rest_field`
--
ALTER TABLE `rest_field`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rest_field_validation`
--
ALTER TABLE `rest_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rest_input_type`
--
ALTER TABLE `rest_input_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `aauth_login_attempts`
--
ALTER TABLE `aauth_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT pour la table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aauth_user`
--
ALTER TABLE `aauth_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aauth_users`
--
ALTER TABLE `aauth_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `cc_options`
--
ALTER TABLE `cc_options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `crud_field`
--
ALTER TABLE `crud_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1565;
--
-- AUTO_INCREMENT pour la table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1429;
--
-- AUTO_INCREMENT pour la table `crud_input_type`
--
ALTER TABLE `crud_input_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `crud_input_validation`
--
ALTER TABLE `crud_input_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `emplacement`
--
ALTER TABLE `emplacement`
  MODIFY `id_emplacement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `form_custom_attribute`
--
ALTER TABLE `form_custom_attribute`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `form_custom_option`
--
ALTER TABLE `form_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `form_field_validation`
--
ALTER TABLE `form_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `page_block_element`
--
ALTER TABLE `page_block_element`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_ibi_categories`
--
ALTER TABLE `pos_ibi_categories`
  MODIFY `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `pos_ibi_clients`
--
ALTER TABLE `pos_ibi_clients`
  MODIFY `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `pos_ibi_clients_groups`
--
ALTER TABLE `pos_ibi_clients_groups`
  MODIFY `ID_GROUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `pos_ibi_fournisseurs`
--
ALTER TABLE `pos_ibi_fournisseurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `pos_ibi_stores`
--
ALTER TABLE `pos_ibi_stores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `pos_ibi_taxes`
--
ALTER TABLE `pos_ibi_taxes`
  MODIFY `ID_TAXE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_articles`
--
ALTER TABLE `pos_store_2_ibi_articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_rayons`
--
ALTER TABLE `pos_store_2_ibi_rayons`
  MODIFY `ID_RAYON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `remise`
--
ALTER TABLE `remise`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `rest`
--
ALTER TABLE `rest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rest_field`
--
ALTER TABLE `rest_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rest_field_validation`
--
ALTER TABLE `rest_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rest_input_type`
--
ALTER TABLE `rest_input_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> aletta
