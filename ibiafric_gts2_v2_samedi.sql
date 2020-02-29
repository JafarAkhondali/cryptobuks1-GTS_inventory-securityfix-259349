-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 29 Février 2020 à 12:12
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  7.0.1

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
(1, 'Admin', 'Can create users, install modules, manage options'),
(2, 'Manager', 'Can install modules, manage options'),
(3, 'Controlleur', 'Just a user'),
(4, 'Caissier', 'Can manage item sales, managing customers.'),
(5, 'Vendeur', 'allow managing item, customers, settings and reports access.'),
(6, 'Magasinier', 'Proceed all task of adding or editing. Cannot delete content.');

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
(95, 'menu_ventes', ''),
(96, 'menu_proforma', ''),
(97, 'pos_store_2_ibi_client_file_add', ''),
(98, 'pos_store_2_ibi_client_file_update', ''),
(99, 'pos_store_2_ibi_client_file_view', ''),
(100, 'pos_store_2_ibi_client_file_delete', ''),
(101, 'pos_store_2_ibi_client_file_list', ''),
(102, 'menu_liste_de_proforma', ''),
(103, 'menu_liste_de_bon_de_commande', ''),
(104, 'menu_generer_une_commande', ''),
(115, 'pos_store_2_ibi_proforma_add', ''),
(116, 'pos_store_2_ibi_proforma_update', ''),
(117, 'pos_store_2_ibi_proforma_view', ''),
(118, 'pos_store_2_ibi_proforma_delete', ''),
(119, 'pos_store_2_ibi_proforma_list', ''),
(120, 'menu_devis', ''),
(121, 'menu_nouveau_devis', ''),
(122, 'menu_commande', ''),
(123, 'menu_fiche_de_travail', ''),
(124, 'menu_inventaires', ''),
(125, 'menu_liste_des_categories', ''),
(126, 'menu_taxes', ''),
(127, 'menu_item_location', ''),
(128, 'menu_fournisseurs', ''),
(129, 'menu_liste_des__fournisseurs', ''),
(130, 'menu_clients', ''),
(131, 'menu_liste_des_clients', ''),
(132, 'menu_groupes', ''),
(133, 'menu_fiche_du_client', ''),
(134, 'menu_g??n??rer_une_commande', ''),
(135, 'pos_ibi_fournisseurs_add', ''),
(136, 'pos_ibi_fournisseurs_update', ''),
(137, 'pos_ibi_fournisseurs_view', ''),
(138, 'pos_ibi_fournisseurs_delete', ''),
(139, 'pos_ibi_fournisseurs_list', ''),
(140, 'pos_ibi_clients_add', ''),
(141, 'pos_ibi_clients_update', ''),
(142, 'pos_ibi_clients_view', ''),
(143, 'pos_ibi_clients_delete', ''),
(144, 'pos_ibi_clients_list', ''),
(145, 'menu_facturation', ''),
(146, 'pos_ibi_clients_groups_add', ''),
(147, 'pos_ibi_clients_groups_update', ''),
(148, 'pos_ibi_clients_groups_view', ''),
(149, 'pos_ibi_clients_groups_delete', ''),
(150, 'pos_ibi_clients_groups_list', ''),
(151, 'pos_ibi_taxes_add', ''),
(152, 'pos_ibi_taxes_update', ''),
(153, 'pos_ibi_taxes_view', ''),
(154, 'pos_ibi_taxes_delete', ''),
(155, 'pos_ibi_taxes_list', ''),
(156, 'pos_ibi_categories_add', ''),
(157, 'pos_ibi_categories_update', ''),
(158, 'pos_ibi_categories_view', ''),
(159, 'pos_ibi_categories_delete', ''),
(160, 'pos_ibi_categories_list', ''),
(161, 'pos_store_2_ibi_rayons_add', ''),
(162, 'pos_store_2_ibi_rayons_update', ''),
(163, 'pos_store_2_ibi_rayons_view', ''),
(164, 'pos_store_2_ibi_rayons_delete', ''),
(165, 'pos_store_2_ibi_rayons_list', ''),
(166, 'pos_store_2_ibi_articles_add', ''),
(167, 'pos_store_2_ibi_articles_update', ''),
(168, 'pos_store_2_ibi_articles_view', ''),
(169, 'pos_store_2_ibi_articles_delete', ''),
(170, 'pos_store_2_ibi_articles_list', ''),
(171, 'pos_ibi_facture_add', ''),
(172, 'pos_ibi_facture_update', ''),
(173, 'pos_ibi_facture_view', ''),
(174, 'pos_ibi_facture_delete', ''),
(175, 'pos_ibi_facture_list', ''),
(176, 'menu_listes_des_articles', ''),
(177, 'pos_store_2_ibi_devis_add', ''),
(178, 'pos_store_2_ibi_devis_update', ''),
(179, 'pos_store_2_ibi_devis_view', ''),
(180, 'pos_store_2_ibi_devis_delete', ''),
(181, 'pos_store_2_ibi_devis_list', ''),
(182, 'pos_store_2_ibi_fiche_travail_add', ''),
(183, 'pos_store_2_ibi_fiche_travail_update', ''),
(184, 'pos_store_2_ibi_fiche_travail_view', ''),
(185, 'pos_store_2_ibi_fiche_travail_delete', ''),
(186, 'pos_store_2_ibi_fiche_travail_list', '');

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
(124, 1),
(124, 2),
(125, 1),
(125, 2),
(125, 1),
(125, 2),
(126, 1),
(126, 2),
(127, 1),
(127, 2),
(128, 1),
(128, 2),
(129, 1),
(129, 2),
(130, 1),
(130, 2),
(131, 1),
(131, 2),
(131, 1),
(131, 2),
(132, 1),
(132, 2),
(176, 1),
(176, 2);

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
(1, 'jude@ibi-africa.com', NULL, NULL, '10f553383434b6e80e05f335d91dbf3cfc9c2fa5d8573fc1b68803bade4dc45f', 'jude', 'jude', '', 0, '2020-02-29 12:04:59', '2020-02-29 12:04:59', '2020-02-18 14:54:56', NULL, NULL, NULL, NULL, NULL, '::1');

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
(2, 'Pos Store 2 Ibi Client File', 'Pos Store 2 Ibi Client File', 'pos_store_2_ibi_client_file', 'ID_CLIENT_FILE', 'yes', 'yes', 'yes'),
(5, 'Pos Store 2 Ibi Proforma', 'Pos Store 2 Ibi Proforma', 'pos_store_2_ibi_proforma', 'ID_PROFORMA', 'yes', 'yes', 'yes'),
(8, 'Fournisseurs', 'Fournisseurs', 'pos_ibi_fournisseurs', 'ID', 'yes', 'yes', 'yes'),
(10, 'Pos Ibi Clients', 'Pos Ibi Clients', 'pos_ibi_clients', 'ID_CLIENT', 'yes', 'yes', 'yes'),
(12, 'Groups', 'Groups', 'pos_ibi_clients_groups', 'ID_GROUP', 'yes', 'yes', 'yes'),
(14, 'Taxes', 'Taxes', 'pos_ibi_taxes', 'ID_TAXE', 'yes', 'yes', 'yes'),
(16, 'Categories', 'Categories', 'pos_ibi_categories', 'ID_CATEGORIE', 'yes', 'yes', 'yes'),
(18, 'Rayons', 'Rayons', 'pos_store_2_ibi_rayons', 'ID_RAYON', 'yes', 'yes', 'yes'),
(19, 'Articles', 'Articles', 'pos_store_2_ibi_articles', 'ID_ARTICLE', 'yes', 'yes', 'yes'),
(20, 'Facture', 'Facture', 'pos_ibi_facture', 'ID_FACTURE', 'yes', 'yes', 'yes'),
(21, 'Pos Store 2 Ibi Devis', 'Pos Store 2 Ibi Devis', 'pos_store_2_ibi_devis', 'ID_DEVIS', 'yes', 'yes', 'yes'),
(22, 'Pos Store 2 Ibi Fiche Travail', 'Pos Store 2 Ibi Fiche Travail', 'pos_store_2_ibi_fiche_travail', 'ID_FICHE', 'yes', 'yes', 'yes');

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
(4, 10, 1, 'close', 'Fermé');

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
(17, 2, 'ID_CLIENT_FILE', 'ID_CLIENT_FILE', 'number', '', '', '', 'yes', 1, '', '', ''),
(18, 2, 'PROFORMA_ID_CLIENT_FILE', 'PROFORMA_ID_CLIENT_FILE', 'number', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(19, 2, 'REF_CLIENT_FILE', 'REF_CLIENT_FILE', 'number', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(20, 2, 'REF_PROFORMA_CODE_CLIENT_FILE', 'REF_PROFORMA_CODE_CLIENT_FILE', 'input', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(21, 2, 'NUMBER_PURCHASE_CLIENT_FILE', 'NUMBER_PURCHASE_CLIENT_FILE', 'input', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(22, 2, 'FILE_PURCHASE_CLIENT_FILE', 'FILE_PURCHASE_CLIENT_FILE', 'file', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(23, 2, 'COMMISSIONING_CLIENT_FILE', 'COMMISSIONING_CLIENT_FILE', 'file', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(24, 2, 'CONTRAT_GARANTIE_CLIENT_FILE', 'CONTRAT_GARANTIE_CLIENT_FILE', 'file', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(25, 2, 'CONTRAT_MAINTENANCE_CLIENT_FILE', 'CONTRAT_MAINTENANCE_CLIENT_FILE', 'file', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(26, 2, 'INVOICE_NUMBER_CLIENT_FILE', 'INVOICE_NUMBER_CLIENT_FILE', 'input', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(27, 2, 'DATE_CREATION_CLIENT_FILE', 'DATE_CREATION_CLIENT_FILE', 'timestamp', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(28, 2, 'DATE_MODIFICATION_CLIENT_FILE', 'DATE_MODIFICATION_CLIENT_FILE', 'timestamp', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(29, 2, 'OPERATING_STATUT', 'OPERATING_STATUT', 'number', 'yes', 'yes', 'yes', 'yes', 13, '', '', ''),
(30, 2, 'APPROUVE_BY', 'APPROUVE_BY', 'number', 'yes', 'yes', 'yes', 'yes', 14, '', '', ''),
(31, 2, 'CLOSURE_DATE_CLIENT_FILE', 'CLOSURE_DATE_CLIENT_FILE', 'timestamp', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(32, 2, 'CLOSURE_BY_CLIENT_FILE', 'CLOSURE_BY_CLIENT_FILE', 'number', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(33, 2, 'AUTHOR', 'AUTHOR', 'number', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(34, 3, 'commande_id', 'commande_id', 'number', '', '', '', 'yes', 1, '', '', ''),
(35, 3, 'commande_numero', 'commande_numero', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(36, 3, 'commande_article_decription', 'commande_article_decription', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(37, 3, 'commande_client_id', 'commande_client_id', 'number', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(38, 3, 'commande_user_id', 'commande_user_id', 'number', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(39, 3, 'commande_categorie_id', 'commande_categorie_id', 'number', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(40, 3, 'delai', 'delai', 'number', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(41, 3, 'delai_value', 'delai_value', 'number', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(42, 3, 'validite', 'validite', 'number', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(43, 3, 'validite_value', 'validite_value', 'number', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(44, 3, 'a_la_commande', 'a_la_commande', 'input', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(45, 3, 'a_la_livraison', 'a_la_livraison', 'input', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(46, 3, 'condition_payement', 'condition_payement', 'number', 'yes', 'yes', 'yes', 'yes', 13, '', '', ''),
(47, 3, 'commande_status', 'commande_status', 'input', 'yes', 'yes', 'yes', 'yes', 14, '', '', ''),
(48, 3, 'commande_suppression_status', 'commande_suppression_status', 'input', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(49, 3, 'commande_date', 'commande_date', 'datetime', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(50, 3, 'commande_date_modification', 'commande_date_modification', 'datetime', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(51, 4, 'fiche_id', 'fiche_id', 'number', '', '', '', 'yes', 1, '', '', ''),
(52, 4, 'fiche_numero', 'fiche_numero', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(53, 4, 'fiche_description_article', 'fiche_description_article', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(54, 4, 'fiche_article_categorie_id', 'fiche_article_categorie_id', 'number', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(55, 4, 'fiche_client_id', 'fiche_client_id', 'number', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(56, 4, 'fiche_user_id', 'fiche_user_id', 'number', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(57, 4, 'fiche_stutus', 'fiche_stutus', 'input', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(58, 4, 'fiche_suppresion_status', 'fiche_suppresion_status', 'input', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(59, 4, 'fiche_date', 'fiche_date', 'datetime', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(60, 4, 'fiche_date_modification', 'fiche_date_modification', 'datetime', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(61, 5, 'ID_PROFORMA', 'ID_PROFORMA', 'number', '', '', '', 'yes', 1, '', '', ''),
(62, 5, 'TITRE_PROFORMA', 'TITRE_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(63, 5, 'CODE_PROFORMA', 'CODE_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(64, 5, 'REF_CLIENT_PROFORMA', 'REF_CLIENT_PROFORMA', 'select', 'yes', 'yes', 'yes', 'yes', 4, 'pos_ibi_clients', 'ID_CLIENT', 'NOM_CLIENT'),
(65, 5, 'TYPE_PROFORMA', 'TYPE_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(66, 5, 'DATE_CREATION_PROFORMA', 'DATE_CREATION_PROFORMA', 'datetime', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(67, 5, 'DATE_MOD_PROFORMA', 'DATE_MOD_PROFORMA', 'datetime', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(68, 5, 'PAYMENT_TYPE_PROFORMA', 'PAYMENT_TYPE_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(69, 5, 'AUTHOR_PROFORMA', 'AUTHOR_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(70, 5, 'SOMME_PERCU_PROFORMA', 'SOMME_PERCU_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(71, 5, 'TOTAL_PROFORMA', 'TOTAL_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(72, 5, 'DISCOUNT_TYPE_PROFORMA', 'DISCOUNT_TYPE_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(73, 5, 'TVA_PROFORMA', 'TVA_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 13, '', '', ''),
(74, 5, 'GROUP_DISCOUNT_PROFORMA', 'GROUP_DISCOUNT_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 14, '', '', ''),
(75, 5, 'REF_SHIPPING_ADDRESS_PROFORMA', 'REF_SHIPPING_ADDRESS_PROFORMA', 'number', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(76, 5, 'SHIPPING_AMOUNT_PROFORMA', 'SHIPPING_AMOUNT_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(77, 5, 'TYPE_DELAY_PROFORMA', 'TYPE_DELAY_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(78, 5, 'TEMPS_DELAY_PROFORMA', 'TEMPS_DELAY_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 18, '', '', ''),
(79, 5, 'COND_PAID_PROFORMA', 'COND_PAID_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 19, '', '', ''),
(80, 5, 'PERCENT_PAID_PROFORMA', 'PERCENT_PAID_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 20, '', '', ''),
(81, 5, 'PERCENT_PAID_LIVR_PROFORMA', 'PERCENT_PAID_LIVR_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 21, '', '', ''),
(82, 5, 'VALID_OFFRE_PROFORMA', 'VALID_OFFRE_PROFORMA', 'input', 'yes', 'yes', 'yes', 'yes', 22, '', '', ''),
(83, 8, 'ID', 'ID', 'number', '', '', '', 'yes', 1, '', '', ''),
(84, 8, 'NOM', 'NOM', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(85, 8, 'BP', 'BP', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(86, 8, 'TEL', 'TEL', 'input', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(87, 8, 'EMAIL', 'EMAIL', 'email', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(88, 8, 'DATE_CREATION', 'DATE_CREATION', 'timestamp', '', 'yes', '', 'yes', 6, '', '', ''),
(89, 8, 'DATE_MOD', 'DATE_MOD', 'timestamp', '', '', 'yes', 'yes', 7, '', '', ''),
(90, 8, 'AUTHOR', 'AUTHOR', 'current_user_id', 'yes', 'yes', '', 'yes', 8, '', '', ''),
(91, 8, 'DESCRIPTION', 'DESCRIPTION', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(92, 10, 'ID_CLIENT', 'ID_CLIENT', 'number', '', '', '', 'yes', 1, '', '', ''),
(93, 10, 'NOM_CLIENT', 'NOM_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(94, 10, 'PRENOM_CLIENT', 'PRENOM_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(95, 10, 'POIDS_CLIENT', 'POIDS_CLIENT', 'number', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(96, 10, 'TEL_CLIENT', 'TEL_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(97, 10, 'EMAIL_CLIENT', 'EMAIL_CLIENT', 'email', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(98, 10, 'DESCRIPTION_CLIENT', 'DESCRIPTION_CLIENT', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(99, 10, 'DATE_NAISSANCE_CLIENT', 'DATE_NAISSANCE_CLIENT', 'datetime', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(100, 10, 'ADRESSE_CLIENT', 'ADRESSE_CLIENT', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(101, 10, 'NBR_COMMANDES_CLIENT_CLIENT', 'NBR_COMMANDES_CLIENT_CLIENT', 'number', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(102, 10, 'OVERALL_COMMANDES_CLIENT', 'OVERALL_COMMANDES_CLIENT', 'number', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(103, 10, 'DISCOUNT_ACTIVE_CLIENT', 'DISCOUNT_ACTIVE_CLIENT', 'number', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(104, 10, 'TOTAL_SPEND_CLIENT', 'TOTAL_SPEND_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 13, '', '', ''),
(105, 10, 'LAST_ORDER_CLIENT', 'LAST_ORDER_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 14, '', '', ''),
(106, 10, 'AVATAR_CLIENT', 'AVATAR_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(107, 10, 'STATE_CLIENT', 'STATE_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(108, 10, 'CITY_CLIENT', 'CITY_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(109, 10, 'POST_CODE_CLIENT', 'POST_CODE_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 18, '', '', ''),
(110, 10, 'COUNTRY_CLIENT', 'COUNTRY_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 19, '', '', ''),
(111, 10, 'COMPANY_NAME_CLIENT', 'COMPANY_NAME_CLIENT', 'input', 'yes', 'yes', 'yes', 'yes', 20, '', '', ''),
(112, 10, 'DATE_CREATION_CLIENT', 'DATE_CREATION_CLIENT', 'timestamp', 'yes', 'yes', 'yes', 'yes', 21, '', '', ''),
(113, 10, 'DATE_MOD_CLIENT', 'DATE_MOD_CLIENT', 'timestamp', 'yes', 'yes', 'yes', 'yes', 22, '', '', ''),
(114, 10, 'REF_GROUP_CLIENT', 'REF_GROUP_CLIENT', 'number', 'yes', 'yes', 'yes', 'yes', 23, '', '', ''),
(115, 10, 'AUTHOR_CLIENT', 'AUTHOR_CLIENT', 'current_user_id', 'yes', 'yes', 'yes', 'yes', 24, '', '', ''),
(116, 12, 'ID_GROUP', 'ID_GROUP', 'number', '', '', '', 'yes', 1, '', '', ''),
(117, 12, 'NAME_GROUP', 'NAME_GROUP', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(118, 12, 'DESCRIPTION_GROUP', 'DESCRIPTION_GROUP', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(119, 12, 'DATE_CREATION_GROUP', 'DATE_CREATION_GROUP', 'timestamp', '', 'yes', '', 'yes', 4, '', '', ''),
(120, 12, 'DATE_MODIFICATION_GROUP', 'DATE_MODIFICATION_GROUP', 'timestamp', '', '', 'yes', 'yes', 5, '', '', ''),
(121, 12, 'DISCOUNT_TYPE_GROUP', 'DISCOUNT_TYPE_GROUP', 'select', 'yes', 'yes', 'yes', 'yes', 6, 'remise', 'ID', 'type_remise'),
(122, 12, 'DISCOUNT_PERCENT_GROUP', 'DISCOUNT_PERCENT_GROUP', 'input', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(123, 12, 'DISCOUNT_AMOUNT_GROUP', 'DISCOUNT_AMOUNT_GROUP', 'input', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(124, 12, 'DISCOUNT_ENABLE_SCHEDULE_GROUP', 'DISCOUNT_ENABLE_SCHEDULE_GROUP', 'yes_no', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(125, 12, 'DISCOUNT_START_GROUP', 'DISCOUNT_START_GROUP', 'datetime', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(126, 12, 'DISCOUNT_END_GROUP', 'DISCOUNT_END_GROUP', 'datetime', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(127, 12, 'AUTHOR_GROUP', 'AUTHOR_GROUP', 'current_user_id', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(128, 14, 'ID_TAXE', 'ID_TAXE', 'number', '', '', '', 'yes', 1, '', '', ''),
(129, 14, 'NAME_TAXE', 'NAME_TAXE', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(130, 14, 'DESCRIPTION_TAXE', 'DESCRIPTION_TAXE', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(131, 14, 'RATE_TAXE', 'RATE_TAXE', 'input', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(132, 14, 'AUTHOR_TAXE', 'AUTHOR_TAXE', 'current_user_id', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(133, 14, 'DATE_CREATION_TAXE', 'DATE_CREATION_TAXE', 'timestamp', '', 'yes', '', 'yes', 6, '', '', ''),
(134, 14, 'DATE_MOD_TAXE', 'DATE_MOD_TAXE', 'timestamp', '', '', 'yes', 'yes', 7, '', '', ''),
(135, 16, 'ID_CATEGORIE', 'ID_CATEGORIE', 'number', '', '', '', 'yes', 1, '', '', ''),
(136, 16, 'NOM_CATEGORIE', 'NOM_CATEGORIE', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(137, 16, 'DESCRIPTION_CATEGORIE', 'DESCRIPTION_CATEGORIE', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(138, 16, 'DATE_CREATION_CATEGORIE', 'DATE_CREATION_CATEGORIE', 'timestamp', '', 'yes', '', 'yes', 4, '', '', ''),
(139, 16, 'DATE_MOD_CATEGORIE', 'DATE_MOD_CATEGORIE', 'timestamp', '', '', 'yes', 'yes', 5, '', '', ''),
(140, 16, 'AUTHOR_CATEGORIE', 'AUTHOR_CATEGORIE', 'number', 'yes', 'yes', '', 'yes', 6, '', '', ''),
(141, 16, 'PARENT_REF_ID_CATEGORIE', 'PARENT_REF_ID_CATEGORIE', 'input', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(142, 16, 'THUMB_CATEGORIE', 'THUMB_CATEGORIE', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(143, 18, 'ID_RAYON', 'ID_RAYON', 'number', '', '', '', 'yes', 1, '', '', ''),
(144, 18, 'TITRE_RAYON', 'TITRE_RAYON', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(145, 18, 'DESCRIPTION_RAYON', 'DESCRIPTION_RAYON', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(146, 18, 'DATE_CREATION_RAYON', 'DATE_CREATION_RAYON', 'timestamp', '', 'yes', '', 'yes', 4, '', '', ''),
(147, 18, 'DATE_MOD_RAYON', 'DATE_MOD_RAYON', 'timestamp', '', '', 'yes', 'yes', 5, '', '', ''),
(148, 18, 'AUTHOR_RAYON', 'AUTHOR_RAYON', 'current_user_id', 'yes', 'yes', '', 'yes', 6, '', '', ''),
(220, 19, 'ID_ARTICLE', 'ID_ARTICLE', 'number', '', '', '', 'yes', 1, '', '', ''),
(221, 19, 'DESIGN_ARTICLE', 'Nom du produit', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(222, 19, 'REF_RAYON_ARTICLE', 'Emplacement', 'select', 'yes', 'yes', 'yes', 'yes', 3, 'pos_store_2_ibi_rayons', 'ID_RAYON', 'TITRE_RAYON'),
(223, 19, 'REF_SHIPPING_ARTICLE', 'REF_SHIPPING_ARTICLE', 'number', '', '', '', '', 4, '', '', ''),
(224, 19, 'REF_CATEGORIE_ARTICLE', 'Categorie', 'select', 'yes', 'yes', 'yes', 'yes', 5, 'pos_ibi_categories', 'ID_CATEGORIE', 'ID_CATEGORIE'),
(225, 19, 'REF_SOUS_CATEGORIE_ARTICLE', 'Sous categorie', 'input', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(226, 19, 'SKU_ARTICLE', 'Part no', 'input', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(227, 19, 'REF_PROVIDER_ARTICLE', 'REF_PROVIDER_ARTICLE', 'number', '', '', '', '', 8, '', '', ''),
(228, 19, 'REF_TAXE_ARTICLE', 'REF_TAXE_ARTICLE', 'number', '', '', '', '', 9, '', '', ''),
(229, 19, 'QUANTITY_ARTICLE', 'QUANTITY_ARTICLE', 'number', '', '', '', '', 10, '', '', ''),
(230, 19, 'QUANTITE_RESTANTE_ARTICLE', 'QUANTITE_RESTANTE_ARTICLE', 'number', '', '', '', '', 11, '', '', ''),
(231, 19, 'QUANTITE_VENDU_ARTICLE', 'QUANTITE_VENDU_ARTICLE', 'number', '', '', '', '', 12, '', '', ''),
(232, 19, 'DEFECTUEUX_ARTICLE', 'DEFECTUEUX_ARTICLE', 'number', '', '', '', '', 13, '', '', ''),
(233, 19, 'PRIX_DACHAT_ARTICLE', 'PRIX_DACHAT_ARTICLE', 'input', '', '', '', '', 14, '', '', ''),
(234, 19, 'TYPE_ARTICLE', 'Type Article', 'yes_no', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(235, 19, 'STATUS_ARTICLE', 'Etat', 'yes_no', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(236, 19, 'STOCK_ENABLED_ARTICLE', 'Gestion de stock', 'yes_no', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(237, 19, 'FRAIS_ACCESSOIRE_ARTICLE', 'FRAIS_ACCESSOIRE_ARTICLE', 'input', '', '', '', '', 18, '', '', ''),
(238, 19, 'COUT_DACHAT_ARTICLE', 'COUT_DACHAT_ARTICLE', 'input', '', '', '', '', 19, '', '', ''),
(239, 19, 'TAUX_DE_MARGE_ARTICLE', 'TAUX_DE_MARGE_ARTICLE', 'input', '', '', '', '', 20, '', '', ''),
(240, 19, 'PRIX_DE_VENTE_ARTICLE', 'Prix de vente', 'number', 'yes', 'yes', 'yes', 'yes', 21, '', '', ''),
(241, 19, 'SHADOW_PRICE_ARTICLE', 'Prix fictif', 'number', 'yes', 'yes', 'yes', 'yes', 22, '', '', ''),
(242, 19, 'PRIX_PROMOTIONEL_ARTICLE', 'Prix promotionnel', 'number', 'yes', 'yes', 'yes', 'yes', 23, '', '', ''),
(243, 19, 'SPECIAL_PRICE_START_DATE_ARTICLE', 'Debut de la promotion', 'datetime', 'yes', 'yes', 'yes', 'yes', 24, '', '', ''),
(244, 19, 'SPECIAL_PRICE_END_DATE_ARTICLE', 'Fin de la promotion', 'datetime', 'yes', 'yes', 'yes', 'yes', 25, '', '', ''),
(245, 19, 'PRIX_DE_VENTE_TTC_ARTICLE', 'PRIX_DE_VENTE_TTC_ARTICLE', 'input', '', '', '', '', 26, '', '', ''),
(246, 19, 'TAILLE_ARTICLE', 'Taille', 'input', 'yes', 'yes', 'yes', 'yes', 27, '', '', ''),
(247, 19, 'POIDS_ARTICLE', 'Unite', 'input', 'yes', 'yes', 'yes', 'yes', 28, '', '', ''),
(248, 19, 'COULEUR_ARTICLE', 'Couleur', 'input', 'yes', 'yes', 'yes', 'yes', 29, '', '', ''),
(249, 19, 'HAUTEUR_ARTICLE', 'Hauteur', 'input', 'yes', 'yes', 'yes', 'yes', 30, '', '', ''),
(250, 19, 'LARGEUR_ARTICLE', 'Largeur', 'input', 'yes', 'yes', 'yes', 'yes', 31, '', '', ''),
(251, 19, 'DESCRIPTION_ARTICLE', 'Description', 'editor_wysiwyg', 'yes', 'yes', 'yes', 'yes', 32, '', '', ''),
(252, 19, 'APERCU_ARTICLE', 'Apercu', 'file', 'yes', 'yes', 'yes', 'yes', 33, '', '', ''),
(253, 19, 'CODEBAR_ARTICLE', 'CODEBAR_ARTICLE', 'input', '', '', '', '', 34, '', '', ''),
(254, 19, 'DATE_CREATION_ARTICLE', 'DATE_CREATION_ARTICLE', 'timestamp', '', 'yes', '', 'yes', 35, '', '', ''),
(255, 19, 'DATE_MOD_ARTICLE', 'DATE_MOD_ARTICLE', 'timestamp', '', '', 'yes', 'yes', 36, '', '', ''),
(256, 19, 'AUTHOR_ARTICLE', 'AUTHOR_ARTICLE', 'current_user_id', 'yes', 'yes', '', 'yes', 37, '', '', ''),
(257, 19, 'AUTO_BARCODE_ARTICLE', 'AUTO_BARCODE_ARTICLE', 'number', '', '', '', '', 38, '', '', ''),
(258, 19, 'BARCODE_TYPE_ARTICLE', 'BARCODE_TYPE_ARTICLE', 'input', '', '', '', '', 39, '', '', ''),
(259, 19, 'USE_VARIATION_ARTICLE', 'USE_VARIATION_ARTICLE', 'number', '', '', '', '', 40, '', '', ''),
(260, 19, 'MINIMUM_QUANTITY_ARTICLE', 'MINIMUM_QUANTITY_ARTICLE', 'input', '', '', '', '', 41, '', '', ''),
(261, 20, 'ID_FACTURE', 'ID_FACTURE', 'number', '', '', '', 'yes', 1, '', '', ''),
(262, 20, 'NUMERO_FACTURE', 'NUMERO_FACTURE', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(263, 20, 'REF_CODE_COMMAND_FACTURE', 'REF_CODE_COMMAND_FACTURE', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(264, 20, 'STORE_BY_FACTURE', 'STORE_BY_FACTURE', 'number', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(265, 20, 'DATE_CREATION_FACTURE', 'DATE_CREATION_FACTURE', 'datetime', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(266, 20, 'AUTHOR_FACTURE', 'AUTHOR_FACTURE', 'number', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(267, 20, 'STATUT_FACTURE', 'STATUT_FACTURE', 'number', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(268, 21, 'ID_DEVIS', 'ID_DEVIS', 'number', '', '', '', 'yes', 1, '', '', ''),
(269, 21, 'TITRE_DEVIS', 'TITRE_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(270, 21, 'CODE_DEVIS', 'CODE_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(271, 21, 'REF_CLIENT_DEVIS', 'REF_CLIENT_DEVIS', 'select', 'yes', 'yes', 'yes', 'yes', 4, 'pos_ibi_clients', 'ID_CLIENT', 'NOM_CLIENT'),
(272, 21, 'TYPE_DEVIS', 'TYPE_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(273, 21, 'DATE_CREATION_DEVIS', 'DATE_CREATION_DEVIS', 'datetime', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(274, 21, 'DATE_MOD_DEVIS', 'DATE_MOD_DEVIS', 'datetime', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(275, 21, 'AUTHOR_DEVIS', 'AUTHOR_DEVIS', 'number', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(276, 21, 'COEFFICIENT_DEVIS', 'COEFFICIENT_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(277, 21, 'TOTAL_DEVIS', 'TOTAL_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(278, 21, 'TOTAL_FINAL_DEVIS', 'TOTAL_FINAL_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(279, 21, 'TYPE_DELAY_DEVIS', 'TYPE_DELAY_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(280, 21, 'TEMPS_DELAY_DEVIS', 'TEMPS_DELAY_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 13, '', '', ''),
(281, 21, 'COND_PAID_DEVIS', 'COND_PAID_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 14, '', '', ''),
(282, 21, 'PERCENT_PAID_DEVIS', 'PERCENT_PAID_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(283, 21, 'PERCENT_PAID_LIVR_DEVIS', 'PERCENT_PAID_LIVR_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(284, 21, 'VALID_OFFRE_DEVIS', 'VALID_OFFRE_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(285, 21, 'STATUT_DEVIS', 'STATUT_DEVIS', 'input', 'yes', 'yes', 'yes', 'yes', 18, '', '', ''),
(286, 22, 'ID_FICHE', 'ID_FICHE', 'number', '', '', '', 'yes', 1, '', '', ''),
(287, 22, 'TITRE_FICHE', 'TITRE_FICHE', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(288, 22, 'DEVIS_CODE_FICHE', 'DEVIS_CODE_FICHE', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(289, 22, 'NUMERO_FICHE', 'NUMERO_FICHE', 'input', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(290, 22, 'REF_CLIENT_FICHE', 'REF_CLIENT_FICHE', 'select', 'yes', 'yes', 'yes', 'yes', 5, 'pos_ibi_clients', 'ID_CLIENT', 'NOM_CLIENT'),
(291, 22, 'TYPE_DEVIS_FICHE', 'TYPE_DEVIS_FICHE', 'input', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(292, 22, 'DATE_CREATION_FICHE', 'DATE_CREATION_FICHE', 'datetime', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(293, 22, 'DATE_MOD_FICHE', 'DATE_MOD_FICHE', 'datetime', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(294, 22, 'AUTHOR_FICHE', 'AUTHOR_FICHE', 'current_user_id', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(295, 22, 'REF_CATEGORIE_FICHE', 'REF_CATEGORIE_FICHE', 'number', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(296, 22, 'TOTAL_FICHE', 'TOTAL_FICHE', 'input', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(297, 22, 'STATUT_FICHE', 'STATUT_FICHE', 'number', 'yes', 'yes', 'yes', 'yes', 12, '', '', '');

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
(18, 19, 2, 'required', ''),
(19, 20, 2, 'required', ''),
(20, 21, 2, 'required', ''),
(21, 84, 8, 'required', ''),
(22, 88, 8, 'required', ''),
(23, 89, 8, 'required', ''),
(24, 90, 8, 'required', ''),
(25, 93, 10, 'required', ''),
(26, 94, 10, 'required', ''),
(27, 95, 10, 'required', ''),
(28, 95, 10, 'max_length', '11'),
(29, 96, 10, 'required', ''),
(30, 96, 10, 'max_length', '200'),
(31, 97, 10, 'required', ''),
(32, 97, 10, 'max_length', '200'),
(33, 98, 10, 'required', ''),
(34, 99, 10, 'required', ''),
(35, 100, 10, 'required', ''),
(36, 101, 10, 'required', ''),
(37, 101, 10, 'max_length', '11'),
(38, 102, 10, 'required', ''),
(39, 102, 10, 'max_length', '11'),
(40, 103, 10, 'required', ''),
(41, 103, 10, 'max_length', '11'),
(42, 104, 10, 'required', ''),
(43, 105, 10, 'required', ''),
(44, 105, 10, 'max_length', '200'),
(45, 106, 10, 'required', ''),
(46, 106, 10, 'max_length', '200'),
(47, 107, 10, 'required', ''),
(48, 107, 10, 'max_length', '200'),
(49, 108, 10, 'required', ''),
(50, 108, 10, 'max_length', '200'),
(51, 109, 10, 'required', ''),
(52, 109, 10, 'max_length', '200'),
(53, 110, 10, 'required', ''),
(54, 110, 10, 'max_length', '200'),
(55, 111, 10, 'required', ''),
(56, 111, 10, 'max_length', '200'),
(57, 112, 10, 'required', ''),
(58, 113, 10, 'required', ''),
(59, 114, 10, 'required', ''),
(60, 114, 10, 'max_length', '11'),
(61, 115, 10, 'required', ''),
(62, 115, 10, 'max_length', '11'),
(63, 117, 12, 'required', ''),
(64, 119, 12, 'required', ''),
(65, 120, 12, 'required', ''),
(66, 121, 12, 'required', ''),
(67, 124, 12, 'required', ''),
(68, 124, 12, 'max_length', '220'),
(69, 125, 12, 'required', ''),
(70, 126, 12, 'required', ''),
(71, 127, 12, 'required', ''),
(72, 127, 12, 'max_length', '11'),
(73, 129, 14, 'required', ''),
(74, 132, 14, 'required', ''),
(75, 133, 14, 'required', ''),
(76, 134, 14, 'required', ''),
(77, 136, 16, 'required', ''),
(78, 137, 16, 'required', ''),
(79, 138, 16, 'required', ''),
(80, 139, 16, 'required', ''),
(81, 140, 16, 'required', ''),
(82, 140, 16, 'max_length', '11'),
(83, 141, 16, 'required', ''),
(84, 141, 16, 'max_length', '11'),
(85, 142, 16, 'required', ''),
(86, 144, 18, 'required', ''),
(87, 145, 18, 'required', ''),
(88, 146, 18, 'required', ''),
(89, 147, 18, 'required', ''),
(90, 148, 18, 'required', ''),
(91, 148, 18, 'max_length', '11'),
(165, 221, 19, 'required', ''),
(166, 221, 19, 'max_length', '200'),
(167, 223, 19, 'required', ''),
(168, 223, 19, 'max_length', '11'),
(169, 224, 19, 'required', ''),
(170, 226, 19, 'required', ''),
(171, 227, 19, 'required', ''),
(172, 227, 19, 'max_length', '11'),
(173, 228, 19, 'required', ''),
(174, 228, 19, 'max_length', '11'),
(175, 229, 19, 'required', ''),
(176, 229, 19, 'max_length', '11'),
(177, 230, 19, 'required', ''),
(178, 230, 19, 'max_length', '11'),
(179, 231, 19, 'required', ''),
(180, 231, 19, 'max_length', '11'),
(181, 232, 19, 'required', ''),
(182, 232, 19, 'max_length', '11'),
(183, 233, 19, 'required', ''),
(184, 234, 19, 'required', ''),
(185, 235, 19, 'required', ''),
(186, 236, 19, 'required', ''),
(187, 237, 19, 'required', ''),
(188, 238, 19, 'required', ''),
(189, 239, 19, 'required', ''),
(190, 240, 19, 'required', ''),
(191, 245, 19, 'required', ''),
(192, 247, 19, 'required', ''),
(193, 253, 19, 'required', ''),
(194, 253, 19, 'max_length', '200'),
(195, 257, 19, 'required', ''),
(196, 257, 19, 'max_length', '11'),
(197, 258, 19, 'required', ''),
(198, 258, 19, 'max_length', '200'),
(199, 259, 19, 'required', ''),
(200, 259, 19, 'max_length', '11'),
(201, 260, 19, 'required', ''),
(202, 265, 20, 'required', ''),
(203, 266, 20, 'required', ''),
(204, 266, 20, 'max_length', '11'),
(205, 267, 20, 'required', ''),
(206, 267, 20, 'max_length', '11'),
(207, 269, 21, 'required', ''),
(208, 271, 21, 'required', ''),
(209, 287, 22, 'required', ''),
(210, 290, 22, 'required', '');

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
(1, 0, '4E5898E344776A69132C4C1990C3EC3E', 0, 0, 0, NULL, '2020-02-18 10:54:55');

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
(3, 'CRUD Builder', 'menu', '', 'administrator/crud', 14, 0, 'fa-table', 1, 1),
(4, 'API Builder', 'menu', '', 'administrator/rest', 15, 0, 'fa-code', 1, 1),
(5, 'Page Builder', 'menu', '', 'administrator/page', 25, 0, 'fa-file-o', 1, 1),
(6, 'Form Builder', 'menu', '', 'administrator/form', 27, 0, 'fa-newspaper-o', 1, 1),
(7, 'Blog', 'menu', '', 'administrator/blog', 28, 0, 'fa-file-text-o', 1, 1),
(8, 'Menu', 'menu', '', 'administrator/menu', 26, 0, 'fa-bars', 1, 1),
(9, 'Auth', 'menu', '', '', 29, 0, 'fa-shield', 1, 1),
(10, 'User', 'menu', '', 'administrator/user', 30, 9, '', 1, 1),
(11, 'Groups', 'menu', '', 'administrator/group', 31, 9, '', 1, 1),
(12, 'Access', 'menu', '', 'administrator/access', 32, 9, '', 1, 1),
(13, 'Permission', 'menu', '', 'administrator/permission', 33, 9, '', 1, 1),
(14, 'API Keys', 'menu', '', 'administrator/keys', 34, 9, '', 1, 1),
(15, 'Extension', 'menu', '', 'administrator/extension', 35, 0, 'fa-puzzle-piece', 1, 1),
(16, 'OTHER', 'label', '', '', 36, 0, '', 1, 1),
(17, 'Settings', 'menu', 'text-red', 'administrator/setting', 37, 0, 'fa-circle-o', 1, 1),
(18, 'Web Documentation', 'menu', 'text-blue', 'administrator/doc/web', 38, 0, 'fa-circle-o', 1, 1),
(19, 'API Documentation', 'menu', 'text-yellow', 'administrator/doc/api', 39, 0, 'fa-circle-o', 1, 1),
(20, 'Home', 'menu', '', '/', 1, 0, '', 2, 1),
(21, 'Blog', 'menu', '', 'blog', 4, 0, '', 2, 1),
(22, 'Dashboard', 'menu', '', 'administrator/dashboard', 5, 0, '', 2, 1),
(23, 'Boutiques', 'menu', 'default', 'administrator/Pos_ibi_stores', 3, 0, 'fa-cubes', 1, 1),
(24, 'Ventes', 'menu', 'default', 'administrator/registers/', 8, 0, 'fa-shopping-cart', 1, 1),
(25, 'Proforma', 'menu', 'default', 'administrator/pos_store_2_ibi_proforma', 9, 0, 'fa-book', 1, 1),
(29, 'Devis', 'menu', 'default', '#', 4, 0, 'fa-list-alt', 1, 1),
(30, 'Nouveau devis', 'menu', 'default', 'administrator/pos_store_2_ibi_devis/add', 5, 29, '', 1, 1),
(31, 'Commande', 'menu', 'default', 'administrator/pos_store_2_ibi_commande', 6, 29, '', 1, 1),
(32, 'Fiche de travail', 'menu', 'default', 'administrator/pos_store_2_ibi_fiche_travail', 7, 29, '', 1, 1),
(33, 'Inventaires', 'menu', 'default', '#', 21, 0, 'fa-archive', 1, 1),
(34, 'Liste des categories', 'menu', 'default', 'administrator\\pos_ibi_categories', 22, 33, '', 1, 1),
(36, 'Taxes', 'menu', 'default', 'administrator\\pos_ibi_taxes', 23, 33, '', 1, 1),
(37, 'Item Location', 'menu', 'default', 'administrator\\pos_store_2_ibi_rayons', 24, 33, '', 1, 1),
(38, 'Fournisseurs', 'menu', 'default', '#', 16, 0, 'fa-truck', 1, 1),
(39, 'Liste des  fournisseurs', 'menu', 'default', 'administrator\\Pos_ibi_fournisseurs', 17, 38, '', 1, 1),
(40, 'Clients', 'menu', 'default', '#', 18, 0, 'fa-group', 1, 1),
(41, 'Liste des clients', 'menu', 'default', 'administrator\\Pos_ibi_clients', 19, 40, '', 1, 1),
(42, 'Groupes', 'menu', 'default', 'administrator/pos_ibi_clients_groups', 20, 40, '', 1, 1),
(43, 'Liste de proforma', 'menu', 'default', 'administrator/proforma', 10, 25, '', 1, 1),
(44, 'Fiche du client', 'menu', 'default', 'administrator/client_file', 11, 25, '', 1, 1),
(45, 'Générer une commande', 'menu', 'default', 'administrator/registers/generate_commande', 12, 25, '', 1, 1),
(46, 'Facturation', 'menu', 'default', 'administrator/facturation', 13, 0, 'fa-dedent', 1, 1),
(47, 'Listes des articles', 'menu', 'default', 'administrator/pos_store_2_ibi_articles', 42, 33, '', 1, 1);

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
(10, 'Besoins A', '', '2020-02-24 13:08:36', '0000-00-00 00:00:00', 1, 6, ''),
(11, 'Besoins c', 'dh', '2020-02-27 21:01:12', '0000-00-00 00:00:00', 1, 0, '20200227210112-2020-02-27pos_ibi_categories210108.html');

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
(20, 'NIYONKURU', 'Fiston', 0, '79828390', 'niyo@gmail.com', '', '1956-02-10 11:23:00', 'Kigobe av twinyoni no 9', 0, 0, 0, 0, '', '', '', 'Bujumbura', '', 'Burundi', '930323', '2020-02-27 21:23:59', '2020-02-27 21:23:59', 8, 1);

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
(8, 'ONG', 'y', '2020-02-21 16:18:23', '0000-00-00 00:00:00', '2', 20, 30000, 'no', '2020-02-05 06:18:00', '2020-02-22 06:18:00', 1),
(9, 'jhhh', 'h', '2020-02-27 21:38:25', '0000-00-00 00:00:00', '', 0, 0, 'yes', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(10, 'jhhh', '', '2020-02-27 21:48:03', '0000-00-00 00:00:00', '2', 0, 0, 'no', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_facture`
--

CREATE TABLE `pos_ibi_facture` (
  `ID_FACTURE` int(11) NOT NULL,
  `NUMERO_FACTURE` varchar(50) NOT NULL,
  `REF_CODE_COMMAND_FACTURE` varchar(50) NOT NULL,
  `STORE_BY_FACTURE` int(11) NOT NULL,
  `DATE_CREATION_FACTURE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AUTHOR_FACTURE` int(11) NOT NULL,
  `STATUT_FACTURE` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_facture`
--

INSERT INTO `pos_ibi_facture` (`ID_FACTURE`, `NUMERO_FACTURE`, `REF_CODE_COMMAND_FACTURE`, `STORE_BY_FACTURE`, `DATE_CREATION_FACTURE`, `AUTHOR_FACTURE`, `STATUT_FACTURE`) VALUES
(1, '0001/02/2020', 'Z73ARG', 2, '2020-02-28 17:05:27', 1, 0),
(2, '0002/02/2020', 'R2EMF9', 2, '2020-02-28 17:06:06', 1, 0);

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
(5, 'KAGABO', '123', '78493023', 'Habimana@gmail.com', '2020-02-20 14:02:07', '0000-00-00 00:00:00', '1', 'jwqkuyhweh'),
(6, 'NZOYIHAYA', '12398', '78493023', 'ndayi@gmail.com', '2020-02-27 21:16:40', '0000-00-00 00:00:00', '1', 'jj');

-- --------------------------------------------------------

--
-- Structure de la table `pos_ibi_stores`
--

CREATE TABLE `pos_ibi_stores` (
  `ID_STORE` int(11) NOT NULL,
  `STATUT_STORE` varchar(50) NOT NULL,
  `NAME_STORE` varchar(50) NOT NULL,
  `IMAGE_STORE` varchar(200) NOT NULL,
  `DESCRIPTION_STORE` varchar(200) NOT NULL,
  `DATE_CREATION_STORE` datetime NOT NULL,
  `DATE_MOD_STORE` datetime NOT NULL,
  `AUTHOR_STORE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_stores`
--

INSERT INTO `pos_ibi_stores` (`ID_STORE`, `STATUT_STORE`, `NAME_STORE`, `IMAGE_STORE`, `DESCRIPTION_STORE`, `DATE_CREATION_STORE`, `DATE_MOD_STORE`, `AUTHOR_STORE`) VALUES
(1, 'opened', 'SAV', '', '', '2020-02-18 16:24:37', '0000-00-00 00:00:00', 1),
(2, 'opened', 'VENTE', '', '', '2020-02-18 16:24:58', '0000-00-00 00:00:00', 1),
(3, 'opened', 'CONSOMMABLE', '', '', '2020-02-18 16:25:37', '0000-00-00 00:00:00', 1),
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
(1, 'tva', 'j', 12, 1, '2020-02-27 15:29:44', '0000-00-00 00:00:00'),
(2, 'TRP', '', 15, 1, '2020-02-27 21:09:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_1_ibi_commandes`
--

CREATE TABLE `pos_store_1_ibi_commandes` (
  `ID_COMMAND` int(11) NOT NULL,
  `TITRE_COMMAND` varchar(200) NOT NULL,
  `CODE_COMMAND` varchar(250) NOT NULL,
  `REF_CLIENT_COMMAND` int(11) NOT NULL,
  `TYPE_COMMAND` varchar(200) NOT NULL,
  `DATE_CREATION_COMMAND` datetime NOT NULL,
  `DATE_MOD_COMMAND` datetime NOT NULL,
  `PAYMENT_TYPE_COMMAND` varchar(220) NOT NULL,
  `AUTHOR_COMMAND` int(11) NOT NULL,
  `SOMME_PERCU_COMMAND` float NOT NULL,
  `TOTAL_COMMAND` float NOT NULL,
  `DISCOUNT_TYPE_COMMAND` varchar(200) NOT NULL,
  `TVA_COMMAND` float NOT NULL,
  `GROUP_DISCOUNT_COMMAND` float DEFAULT NULL,
  `REF_SHIPPING_ADDRESS_COMMAND` int(11) NOT NULL,
  `SHIPPING_AMOUNT_COMMAND` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_1_ibi_commandes_produits`
--

CREATE TABLE `pos_store_1_ibi_commandes_produits` (
  `ID_COMMAND_PROD` int(11) NOT NULL,
  `REF_PRODUCT_CODEBAR_COMMAND_PROD` varchar(250) NOT NULL,
  `REF_COMMAND_CODE_PROD` varchar(250) NOT NULL,
  `QUANTITE_COMMAND_PROD` int(11) NOT NULL,
  `PRIX_COMMAND_PROD` float NOT NULL,
  `PRIX_TOTAL_COMMAND_PROD` float NOT NULL,
  `DISCOUNT_TYPE_COMMAND_PROD` varchar(200) NOT NULL,
  `DISCOUNT_AMOUNT_COMMAND_PROD` float NOT NULL,
  `DISCOUNT_PERCENT_COMMAND_PROD` float NOT NULL,
  `NAME_COMMAND_PROD` varchar(200) NOT NULL,
  `INLINE_COMMAND_PROD` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_1_ibi_proforma`
--

CREATE TABLE `pos_store_1_ibi_proforma` (
  `ID_PROFORMA` int(11) NOT NULL,
  `TITRE_PROFORMA` varchar(200) NOT NULL,
  `CODE_PROFORMA` varchar(250) NOT NULL,
  `REF_CLIENT_PROFORMA` int(11) NOT NULL,
  `TYPE_PROFORMA` varchar(200) NOT NULL,
  `DATE_CREATION_PROFORMA` datetime NOT NULL,
  `DATE_MOD_PROFORMA` datetime NOT NULL,
  `PAYMENT_TYPE_PROFORMA` varchar(220) NOT NULL,
  `AUTHOR_PROFORMA` varchar(200) NOT NULL,
  `SOMME_PERCU_PROFORMA` float NOT NULL,
  `TOTAL_PROFORMA` float NOT NULL,
  `DISCOUNT_TYPE_PROFORMA` varchar(200) NOT NULL,
  `TVA_PROFORMA` float NOT NULL,
  `GROUP_DISCOUNT_PROFORMA` float DEFAULT NULL,
  `REF_SHIPPING_ADDRESS_PROFORMA` int(11) NOT NULL,
  `SHIPPING_AMOUNT_PROFORMA` float NOT NULL,
  `TYPE_DELAY_PROFORMA` float NOT NULL,
  `TEMPS_DELAY_PROFORMA` float NOT NULL,
  `COND_PAID_PROFORMA` float NOT NULL,
  `PERCENT_PAID_PROFORMA` float NOT NULL COMMENT 'percentage ',
  `PERCENT_PAID_LIVR_PROFORMA` float NOT NULL COMMENT 'percentage ',
  `VALID_OFFRE_PROFORMA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_1_ibi_proforma_produits`
--

CREATE TABLE `pos_store_1_ibi_proforma_produits` (
  `D_PROFORMA_PROD` int(11) NOT NULL,
  `REF_PRODUCT_CODEBAR_PROFORMA_PROD` varchar(250) NOT NULL,
  `REF_PROFORMA_CODE_PROD` varchar(250) NOT NULL,
  `QUANTITE_PROFORMA_PROD` int(11) NOT NULL,
  `PRIX_PROFORMA_PROD` float NOT NULL,
  `PRIX_TOTAL_PROFORMA_PROD` float NOT NULL,
  `DISCOUNT_TYPE_PROFORMA_PROD` varchar(200) NOT NULL,
  `DISCOUNT_AMOUNT_PROFORMA_PROD` float NOT NULL,
  `DISCOUNT_PERCENT_PROFORMA_PROD` float NOT NULL,
  `NAME_PROFORMA_PROD` varchar(200) NOT NULL,
  `INLINE_PROFORMA_PROD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_articles`
--

CREATE TABLE `pos_store_2_ibi_articles` (
  `ID_ARTICLE` int(11) NOT NULL,
  `DESIGN_ARTICLE` varchar(200) NOT NULL,
  `REF_RAYON_ARTICLE` int(11) NOT NULL,
  `REF_SHIPPING_ARTICLE` int(11) NOT NULL,
  `REF_CATEGORIE_ARTICLE` int(11) NOT NULL,
  `REF_SOUS_CATEGORIE_ARTICLE` int(11) DEFAULT NULL,
  `REF_PROVIDER_ARTICLE` int(11) NOT NULL,
  `REF_TAXE_ARTICLE` int(11) NOT NULL,
  `QUANTITY_ARTICLE` int(11) NOT NULL,
  `SKU_ARTICLE` varchar(200) NOT NULL,
  `QUANTITE_RESTANTE_ARTICLE` int(11) NOT NULL,
  `QUANTITE_VENDU_ARTICLE` int(11) NOT NULL,
  `DEFECTUEUX_ARTICLE` int(11) NOT NULL,
  `PRIX_DACHAT_ARTICLE` float NOT NULL,
  `FRAIS_ACCESSOIRE_ARTICLE` float NOT NULL,
  `COUT_DACHAT_ARTICLE` float NOT NULL,
  `TAUX_DE_MARGE_ARTICLE` float NOT NULL,
  `PRIX_DE_VENTE_ARTICLE` float NOT NULL,
  `PRIX_DE_VENTE_TTC_ARTICLE` float NOT NULL,
  `SHADOW_PRICE_ARTICLE` float NOT NULL,
  `TAILLE_ARTICLE` varchar(200) NOT NULL,
  `POIDS_ARTICLE` varchar(200) NOT NULL,
  `COULEUR_ARTICLE` varchar(200) NOT NULL,
  `HAUTEUR_ARTICLE` varchar(200) NOT NULL,
  `LARGEUR_ARTICLE` varchar(200) NOT NULL,
  `PRIX_PROMOTIONEL_ARTICLE` float NOT NULL,
  `SPECIAL_PRICE_START_DATE_ARTICLE` datetime NOT NULL,
  `SPECIAL_PRICE_END_DATE_ARTICLE` datetime NOT NULL,
  `DESCRIPTION_ARTICLE` text NOT NULL,
  `APERCU_ARTICLE` varchar(200) NOT NULL,
  `CODEBAR_ARTICLE` varchar(200) NOT NULL,
  `DATE_CREATION_ARTICLE` datetime NOT NULL,
  `DATE_MOD_ARTICLE` datetime NOT NULL,
  `AUTHOR_ARTICLE` int(11) NOT NULL,
  `TYPE_ARTICLE` int(11) NOT NULL,
  `STATUS_ARTICLE` int(11) NOT NULL,
  `STOCK_ENABLED_ARTICLE` int(11) NOT NULL,
  `AUTO_BARCODE_ARTICLE` int(11) NOT NULL,
  `BARCODE_TYPE_ARTICLE` varchar(200) NOT NULL,
  `USE_VARIATION_ARTICLE` int(11) NOT NULL,
  `MINIMUM_QUANTITY_ARTICLE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_articles`
--

INSERT INTO `pos_store_2_ibi_articles` (`ID_ARTICLE`, `DESIGN_ARTICLE`, `REF_RAYON_ARTICLE`, `REF_SHIPPING_ARTICLE`, `REF_CATEGORIE_ARTICLE`, `REF_SOUS_CATEGORIE_ARTICLE`, `REF_PROVIDER_ARTICLE`, `REF_TAXE_ARTICLE`, `QUANTITY_ARTICLE`, `SKU_ARTICLE`, `QUANTITE_RESTANTE_ARTICLE`, `QUANTITE_VENDU_ARTICLE`, `DEFECTUEUX_ARTICLE`, `PRIX_DACHAT_ARTICLE`, `FRAIS_ACCESSOIRE_ARTICLE`, `COUT_DACHAT_ARTICLE`, `TAUX_DE_MARGE_ARTICLE`, `PRIX_DE_VENTE_ARTICLE`, `PRIX_DE_VENTE_TTC_ARTICLE`, `SHADOW_PRICE_ARTICLE`, `TAILLE_ARTICLE`, `POIDS_ARTICLE`, `COULEUR_ARTICLE`, `HAUTEUR_ARTICLE`, `LARGEUR_ARTICLE`, `PRIX_PROMOTIONEL_ARTICLE`, `SPECIAL_PRICE_START_DATE_ARTICLE`, `SPECIAL_PRICE_END_DATE_ARTICLE`, `DESCRIPTION_ARTICLE`, `APERCU_ARTICLE`, `CODEBAR_ARTICLE`, `DATE_CREATION_ARTICLE`, `DATE_MOD_ARTICLE`, `AUTHOR_ARTICLE`, `TYPE_ARTICLE`, `STATUS_ARTICLE`, `STOCK_ENABLED_ARTICLE`, `AUTO_BARCODE_ARTICLE`, `BARCODE_TYPE_ARTICLE`, `USE_VARIATION_ARTICLE`, `MINIMUM_QUANTITY_ARTICLE`) VALUES
(1, 'HELICE VENTILATEUR', 32, 1, 3, 22, 0, 0, 2, 'NA', 2, 0, 0, 1, 0, 0, 0, 25000, 25000, 0, '', 'PIECE', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '<p>\n CLIMATISEUR</p>\n', '', '0001-01-000002', '2019-10-29 15:15:49', '2019-12-26 09:20:36', 25, 1, 1, 1, 0, '', 0, 1),
(2, 'VALVE DE CHARGE GAZ', 15, 1, 3, 22, 0, 0, 7, 'UE-VACH4', 8, 0, 0, 0.153846, 0, 0, 0, 2500, 2500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'CLIMATISEUR', '', '0001-01-000004', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(3, 'VALVE DE CHARGE GAZ', 15, 1, 3, 22, 0, 0, 7, 'UE-VACH4', 7, 0, 0, 1, 0, 0, 0, 2500, 2500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'CLIMATISEUR', '', '0001-01-000006', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(4, 'TELECOMMANDE', 30, 1, 3, 22, 0, 0, 13, 'UE-TEL1', 13, 0, 0, 1, 0, 0, 0, 30000, 30000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'CLIMATISEUR', '', '0001-01-000003', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(5, 'TELECOMMANDE', 30, 1, 3, 22, 0, 0, 13, 'UE-TEL1', 13, 0, 0, 1, 0, 0, 0, 30000, 30000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'CLIMATISEUR', '', '0001-01-000005', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(6, 'DETENDEUR', 13, 1, 3, 22, 0, 0, 1, '068Z3403', 2, 0, 0, 0.153846, 0, 0, 0, 315000, 315000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'CLIMATISEUR', '', '0001-01-000001', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(7, 'HELICE POUR CLIM 18M/24M BTU', 27, 1, 3, 22, 0, 0, 4, '3735050A1', 5, -1, 0, 1, 0, 0, 0, 30000, 30000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'CLIMATISEUR 18/24M BTU', '', '0001-01-000007', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(8, 'HELICE POUR CLIM 9M/12M BTU', 27, 1, 3, 22, 0, 0, 6, 'NA', 7, -1, 0, 1, 0, 0, 0, 25000, 25000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'CLIMATISEUR 19/12M BTU', '', '0001-01-000008', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(9, 'SONDE EN CUIVRE', 15, 1, 3, 22, 0, 0, 28, 'NA', 28, 0, 0, 1, 0, 0, 0, 37500, 37500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UN 9/12/18/24', '', '0001-01-000009', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(10, 'SONDE EN CUIVRE', 11, 1, 3, 22, 0, 0, 147, 'NA', 147, 0, 0, 1, 0, 0, 0, 37500, 37500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UN 9/12/18/25', '', '0001-01-000010', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(11, 'CABLE DE CARTE D AFFICHAGE ', 15, 1, 3, 22, 0, 0, 59, 'NA', 59, 0, 0, 1, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000011', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(12, 'CABLE DE CARTE D AFFICHAGE ', 15, 1, 3, 22, 0, 0, 59, 'NA', 59, 0, 0, 1, 0, 0, 0, 12000, 12000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000013', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(13, 'CARTE D AFFICHAGE 48000 BTU', 15, 1, 3, 22, 0, 0, 2, 'NA', 2, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000015', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(14, 'CARTE ELECTRONIQUE 48000 BTU', 15, 1, 3, 22, 0, 0, 2, 'NA', 3, 0, 0, 0.153846, 0, 0, 0, 215000, 215000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000016', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(15, 'CONDANSATEUR  1,5MF', 26, 1, 3, 22, 0, 0, 59, 'UE-CON13', 59, 0, 0, 1, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000017', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(16, 'CONDANSATEUR  2,5MF', 26, 1, 3, 22, 0, 0, 86, 'UE-CON12', 86, 0, 0, 1, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000018', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(17, 'CONDANSATEUR  2MF', 26, 1, 3, 22, 0, 0, 63, 'UE-CON6', 63, 0, 0, 1, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000019', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(18, 'CONDANSATEUR  3,5MF', 26, 1, 3, 22, 0, 0, 91, 'UE-CON7', 91, 0, 0, 1, 0, 0, 0, 55000, 55000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000020', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(19, 'CONDANSATEUR  30MF', 26, 1, 3, 22, 0, 0, 35, 'UE-CON14', 35, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000021', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(20, 'CONDANSATEUR  35MF', 26, 1, 3, 22, 0, 0, 30, 'UE-CON8', 30, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000022', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(21, 'CONDANSATEUR  40MF', 26, 1, 3, 22, 0, 0, 45, 'UE-CON9', 45, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000023', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(22, 'CONDANSATEUR  45MF', 26, 1, 3, 22, 0, 0, 38, 'UE-CON10', 39, 0, 0, 0.153846, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000024', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(23, 'CONDANSATEUR  50MF', 26, 1, 3, 22, 0, 0, 28, 'UE-CON11', 28, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000025', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(24, 'CONDANSATEUR  60MF', 26, 1, 3, 22, 0, 0, 45, 'UE-CON15', 45, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000026', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(25, 'CABLE DE CARTE D AFFICHAGE ', 11, 1, 3, 22, 0, 0, 134, 'NA', 135, 0, 0, 0.153846, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000012', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(26, 'CABLE DE CARTE D AFFICHAGE ', 11, 1, 3, 22, 0, 0, 134, 'NA', 134, 0, 0, 1, 0, 0, 0, 12000, 12000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE', '', '0001-01-000014', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(27, 'MOTEUR VENTILATEUR EXTERNE 9M&18M BTU', 31, 1, 3, 22, 0, 0, 20, 'NA', 20, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE  9000/18000', '', '0001-01-000027', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(28, 'FILTRE A AIR 12000 BTU', 28, 1, 3, 22, 0, 0, 3, 'NA', 3, 0, 0, 1, 0, 0, 0, 22000, 22000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 12000', '', '0001-01-000028', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(29, 'MOTEUR VENTILATEUR 12V DE LOUVER', 30, 1, 3, 22, 0, 0, 13, 'NA', 13, 0, 0, 1, 0, 0, 0, 30000, 30000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 12000', '', '0001-01-000029', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(30, 'LOUVER 12000BTU', 29, 1, 3, 22, 0, 0, 10, 'NA', 10, 0, 0, 1, 0, 0, 0, 12000, 12000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 12000 BTU', '', '0001-01-000030', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(31, 'MOTEUR VENTILATEUR  INTERNE 18 & 24 BTU', 13, 1, 3, 22, 0, 0, 20, 'NA', 20, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 18/24', '', '0001-01-000031', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(32, 'FILTRE A AIR 24000 BTU', 28, 1, 3, 22, 0, 0, 2, 'NA', 2, 0, 0, 1, 0, 0, 0, 22000, 22000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 24000', '', '0001-01-000032', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(33, 'MOTEUR VENTILATEUR EXTERNE 24M BTU', 11, 1, 3, 22, 0, 0, 11, 'NA', 11, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 24000', '', '0001-01-000033', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(34, 'LOUVER 24000BTU', 29, 1, 3, 22, 0, 0, 8, 'NA', 8, 0, 0, 1, 0, 0, 0, 12000, 12000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 24000 BTU', '', '0001-01-000034', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(35, 'MOTEUR VENTILATEUR SWINGING 48000 BTU', 15, 1, 3, 22, 0, 0, 1, 'NA', 1, 0, 0, 1, 0, 0, 0, 30000, 30000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 48M BTU', '', '0001-01-000036', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(36, 'MOTEUR VENTILATEUR EXTERNE 48M BTU', 31, 1, 3, 22, 0, 0, 12, 'NA', 12, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 48M BTU', '', '0001-01-000035', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(37, 'MOTEUR VENTILATEUR  INTERNE 9 & 12 BTU', 13, 1, 3, 22, 0, 0, 25, 'NA', 25, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'UNIONAIRE 9000/12000', '', '0001-01-000037', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(38, 'FILTRE POUR FRIGO', 30, 1, 3, 9, 0, 0, 500, 'NA', 500, 0, 0, 1, 0, 0, 0, 3500, 3500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FRIGO', '', '0001-05-000001', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(39, 'MAIN D''ŒUVRE ENTRETIEN CLIMATISEUR I', 270, 1, 3, 24, 0, 0, 1000000, 'NA', 1000000, 0, 0, 1, 0, 0, 0, 30000, 30000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'MAIN D''ŒUVRE', '', '0001-15-000049', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(40, 'MAIN D''ŒUVRE ENTRETIEN CLIMATISEUR II', 270, 1, 3, 24, 0, 0, 1000000, 'NA', 999999, 1, 0, 1, 0, 0, 0, 40000, 40000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'MAIN D''ŒUVRE', '', '0001-15-000050', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(41, 'MAIN D''ŒUVRE DEPLACEMENT CLIMATISEUR I', 270, 1, 3, 24, 0, 0, 1000000, 'NA', 1000000, 0, 0, 1, 0, 0, 0, 30000, 30000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'MAIN D''ŒUVRE', '', '0001-15-000051', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(42, 'MAIN D''ŒUVRE DEPLACEMENT CLIMATISEUR II', 270, 1, 3, 24, 0, 0, 1000000, 'NA', 1000000, 0, 0, 1, 0, 0, 0, 40000, 40000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'MAIN D''ŒUVRE', '', '0001-15-000052', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(43, 'MAIN D''ŒUVRE INSTALLATION CLIMATISEUR I', 270, 1, 3, 24, 0, 0, 1000000, 'NA', 1000000, 0, 0, 1, 0, 0, 0, 60000, 60000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'MAIN D''ŒUVRE', '', '0001-15-000053', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(44, 'MAIN D''ŒUVRE INSTALLATION CLIMATISEUR II', 270, 1, 3, 24, 0, 0, 1000000, 'NA', 1000000, 0, 0, 1, 0, 0, 0, 80000, 80000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'MAIN D''ŒUVRE', '', '0001-15-000054', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(45, 'RELAIS 12V ', 25, 1, 5, 6, 0, 0, 26, 'NA', 26, 0, 0, 1, 0, 0, 0, 55000, 55000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000001', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(46, 'RETROV EXTER FAW DROIT ', 63, 1, 5, 6, 0, 0, 2, 'NA', 2, 0, 0, 1, 0, 0, 0, 25000, 25000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000070', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(47, 'RETROV EXTER FAW MINIBUS DROIT ', 63, 1, 5, 6, 0, 0, 3, ' RETROV EXTER FAW MINIBUS DROIT ', 3, 0, 0, 1, 0, 0, 0, 25000, 25000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000071', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(48, 'RELAIS24V021 ', 1, 1, 5, 6, 0, 0, 2, '64 705 019', 2, 0, 0, 1, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-07-000011', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(49, 'BOITE COMPLET FAW', 40, 1, 5, 6, 0, 0, 1, 'NA', 1, 0, 0, 1, 0, 0, 0, 1950000, 1950000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000009', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(50, 'BOITE DE FUSIBLE FAW', 41, 1, 5, 6, 0, 0, 6, 'FAW-BOIT FUS20', 6, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000010', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(51, 'POMPE A HUILE FAW', 41, 1, 5, 6, 0, 0, 6, 'FAW-POMP34', 6, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000065', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(52, 'CTC DE LAME FAW', 50, 1, 5, 6, 0, 0, 52, 'FAW-CTC31', 52, 0, 0, 1, 0, 0, 0, 12500, 12500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000031', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(53, 'JEU DE CABLE DE BOUGIE FAW', 45, 1, 5, 6, 0, 0, 8, 'FAW-CABL BOU44', 8, 0, 0, 1, 0, 0, 0, 85000, 85000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000018', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(54, 'CABLE DE FREIN A MAIN FAW', 45, 1, 5, 6, 0, 0, 29, 'FAW-CABL FR52', 29, 0, 0, 1, 0, 0, 0, 37500, 37500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000019', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(55, 'CABLE DE VITESSE FAW', 45, 1, 5, 6, 0, 0, 1, 'FAW-CABL VIT54', 1, 0, 0, 1, 0, 0, 0, 47500, 47500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000020', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(56, 'JOINT COLLECTEUR (QUATRE SOQUET) FAW', 45, 1, 5, 6, 0, 0, 10, 'FAW-JOIN COLL17', 10, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000047', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(57, 'JOINT D''ECHAPPEMENT FAW', 45, 1, 5, 6, 0, 0, 2, 'FAW-JOIN ECHAP16', 2, 0, 0, 1, 0, 0, 0, 27500, 27500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000048', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(58, 'POIGNET INTERIEUR FAW', 45, 1, 5, 6, 0, 0, 43, 'FAW-POIGN01', 43, 0, 0, 1, 0, 0, 0, 24500, 24500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000064', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(59, 'BOBINE DE BOUGIE FAW', 38, 1, 5, 6, 0, 0, 1, '10A6', 1, 0, 0, 1, 0, 0, 0, 185000, 185000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000007', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(60, 'COUVERCLE DE BOBINE FAW', 38, 1, 5, 6, 0, 0, 1, 'FAW-COUV BOBI 45', 1, 0, 0, 1, 0, 0, 0, 34500, 34500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000026', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(61, 'CYLINDRE DE ROUE POUR REGLAGE DE FREIN FAW', 38, 1, 5, 6, 0, 0, 11, 'FAW-CYL ROUE09', 11, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000033', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(62, 'FLASQUE DE BOITE FAW', 38, 1, 5, 6, 0, 0, 2, 'FAW-FLASQ42', 2, 0, 0, 1, 0, 0, 0, 118500, 118500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000041', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(63, 'FLASQUE DE BOITE FAW', 38, 1, 5, 6, 0, 0, 2, 'FAW-FLASQ42', 2, 0, 0, 1, 0, 0, 0, 118500, 118500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000042', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(64, 'KIT JOINT MOTEUR FAW', 38, 1, 5, 6, 0, 0, 1, 'FAW-KIT JOIN18', 1, 0, 0, 1, 0, 0, 0, 175000, 175000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000050', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(65, 'MACHINE LEVE VITRE FAW', 38, 1, 5, 6, 0, 0, 13, 'NA', 13, 0, 0, 1, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000052', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(66, 'BAVETTE FAW', 35, 1, 5, 6, 0, 0, 4, '41', 4, 0, 0, 1, 0, 0, 0, 5500, 5500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000004', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(67, 'BUTEE D''AMBRAYAGE', 35, 1, 5, 6, 0, 0, 8, 'FAW-BUT10', 8, 0, 0, 1, 0, 0, 0, 82500, 82500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000015', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(68, 'CARBURATEUR', 35, 1, 5, 6, 0, 0, 2, '55', 2, 0, 0, 1, 0, 0, 0, 60000, 60000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000022', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(69, 'CTC BARRE TIRANT FAW', 35, 1, 5, 6, 0, 0, 14, 'FAW-CTC BAR27', 14, 0, 0, 1, 0, 0, 0, 10500, 10500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000030', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(70, 'ENJOLIVEUR FAW', 35, 1, 5, 6, 0, 0, 14, 'FAW-ENJOL25', 14, 0, 0, 1, 0, 0, 0, 17500, 17500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000034', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(71, 'ENJOLIVEUR FAW', 35, 1, 5, 6, 0, 0, 14, 'FAW-ENJOL25', 14, 0, 0, 1, 0, 0, 0, 17500, 17500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000035', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(72, 'JUMELLE DE CREMAILLERE', 35, 1, 5, 6, 0, 0, 14, 'FAW-JUM46', 14, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000049', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(73, 'PLAQUETTE AVANT FAW', 35, 1, 5, 6, 0, 0, 17, 'FAW-PLAQ33', 17, 0, 0, 1, 0, 0, 0, 67500, 67500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000061', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(74, 'POIGNET INTERIEUR FAW', 35, 1, 5, 6, 0, 0, 48, '1', 48, 0, 0, 1, 0, 0, 0, 25000, 25000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000063', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(75, 'POMPE HYDROLIC', 35, 1, 5, 6, 0, 0, 1, '50', 1, 0, 0, 1, 0, 0, 0, 415000, 415000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000066', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(76, 'SUPPORT PORTE FAW', 35, 1, 5, 6, 0, 0, 7, 'NA', 7, 0, 0, 1, 0, 0, 0, 15000, 15000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000081', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(77, 'RETULE DE CREMAILLERE FAW', 21, 1, 5, 6, 0, 0, 8, 'FAW-RETU48', 8, 0, 0, 1, 0, 0, 0, 42500, 42500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000075', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(78, 'COUVERCLE POIGNET FAW', 49, 1, 5, 6, 0, 0, 17, 'FAW-COUV POI02', 17, 0, 0, 1, 0, 0, 0, 10500, 10500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000028', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(79, 'PORTE FILTRE A AIR+FILTRE AIR FAW', 49, 1, 5, 6, 0, 0, 10, 'FAW-PORFIL-75', 10, 0, 0, 1, 0, 0, 0, 115000, 115000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000067', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(80, 'PORTE MAIN INTERIEUR FAW', 49, 1, 5, 6, 0, 0, 10, 'FAW-PORTE30', 10, 0, 0, 1, 0, 0, 0, 15000, 15000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000068', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(81, 'JEU DE BANDE FREIN FAW', 34, 1, 5, 6, 0, 0, 29, 'NA', 29, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000003', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(82, 'COUVERCLE LEVIER DE VITESSE FAW', 48, 1, 5, 6, 0, 0, 2, 'FAW-COUV-369', 2, 0, 0, 1, 0, 0, 0, 32500, 32500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000027', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(83, 'FREIN A MAIN FAW', 48, 1, 5, 6, 0, 0, 20, 'FAW-FREIN46', 20, 0, 0, 1, 0, 0, 0, 15000, 15000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000043', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(84, 'RETROVISEUR INTERIEUR FAW', 48, 1, 5, 6, 0, 0, 1, 'FAW-RETRO29', 1, 0, 0, 1, 0, 0, 0, 115000, 115000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000074', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(85, 'BLOC MOTEUR FAW', 37, 1, 5, 6, 0, 0, 2, 'GON-BLOC MO41', 2, 0, 0, 1, 0, 0, 0, 1350000, 1350000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000006', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(86, 'CABLE D''ACCELLERATEUR FAW', 44, 1, 5, 6, 0, 0, 29, 'FAW-CABL ACC53', 29, 0, 0, 1, 0, 0, 0, 42500, 42500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000017', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(87, 'POIGNET EXTERIEUR FAW', 44, 1, 5, 6, 0, 0, 5, 'FAW-POIGN04', 5, 0, 0, 1, 0, 0, 0, 32500, 32500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000062', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(88, 'CARBURATEUR FAW', 46, 1, 5, 6, 0, 0, 4, '26', 4, 0, 0, 1, 0, 0, 0, 275000, 275000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000023', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(89, 'CTC AMORTISSEUR FAW', 46, 1, 5, 6, 0, 0, 175, 'FAW-CTC AMO47', 175, 0, 0, 1, 0, 0, 0, 9500, 9500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000029', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(90, 'HYDROVAC FAW', 46, 1, 5, 6, 0, 0, 6, '58', 6, 0, 0, 1, 0, 0, 0, 175000, 175000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000044', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(91, 'MANIVELLE POUR VITRE FAW', 46, 1, 5, 6, 0, 0, 20, 'FAW-MANIV03', 20, 0, 0, 1, 0, 0, 0, 18500, 18500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000055', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(92, 'MANIVELLE POUR VITRE FAW', 46, 1, 5, 6, 0, 0, 20, 'NA', 20, 0, 0, 1, 0, 0, 0, 18000, 18000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000056', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(93, 'SOUFFLET DE TRANSMISSION', 46, 1, 5, 6, 0, 0, 3, 'FAW-SOUF21', 3, 0, 0, 1, 0, 0, 0, 22500, 22500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000077', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(94, 'SOUFFLET MOTEUR FAW', 46, 1, 5, 6, 0, 0, 22, 'FAW-SOUF22', 22, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000078', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(95, 'TIGE DE POIGNET INTERIEUR FAW', 46, 1, 5, 6, 0, 0, 9, 'FAW-TIGE51', 9, 0, 0, 1, 0, 0, 0, 10500, 10500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000083', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(96, 'TUYAU FLEXIBLE DE FREIN AVANT', 46, 1, 5, 6, 0, 0, 7, 'FAW-TUY FLEX43', 7, 0, 0, 1, 0, 0, 0, 27500, 27500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000084', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(97, 'SUPPORT FILTRE A GASOIL', 12, 1, 5, 6, 0, 0, 3, 'NA', 3, 0, 0, 1, 0, 0, 0, 10500, 10500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000079', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(98, 'BAVETTE POUR ROUE ARRIERE', 36, 1, 5, 6, 0, 0, 12, 'FAW-BAV24', 12, 0, 0, 1, 0, 0, 0, 15000, 15000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000005', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(99, 'ROTULE DE DIRECTION FAW', 65, 1, 5, 6, 0, 0, 12, 'FAW-ROTUL49', 12, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000076', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(100, 'BOURRAGE ARRIERE POUR POULIE DE COURROIE', 42, 1, 5, 6, 0, 0, 3, 'FAW-BOUR14', 3, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000011', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(101, 'BOURRAGE AVANT POUR POULIE DE COURROIE', 42, 1, 5, 6, 0, 0, 3, 'FAW-BOUR13', 3, 0, 0, 1, 0, 0, 0, 55000, 55000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000012', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(102, 'BOURRAGE DE MOYEU FAW', 42, 1, 5, 6, 0, 0, 2, 'FAW-BOUR15', 2, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000013', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(103, 'BOURRAGE MOTEUR FAW', 42, 1, 5, 6, 0, 0, 4, 'FAW-BOUR12', 4, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000014', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(104, 'CYLINDRE DE ROUE ARRIERE FAW', 42, 1, 5, 6, 0, 0, 9, 'FAW-CYL ROUE08', 9, 0, 0, 1, 0, 0, 0, 37500, 37500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000032', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(105, 'MAITRE CYLINDRE DE FREIN FAW', 42, 1, 5, 6, 0, 0, 8, 'FAW-MAITR CYL23', 8, 0, 0, 1, 0, 0, 0, 155000, 155000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000053', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(106, 'MAITRE CYLINDRE DE FREIN FAW', 42, 1, 5, 6, 0, 0, 8, 'FAW-MAITR CYL23', 8, 0, 0, 1, 0, 0, 0, 155000, 155000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000054', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(107, 'REGULATEUR DE CHARGE', 59, 1, 5, 6, 0, 0, 4, 'FAW-REGUL40', 4, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000069', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(108, 'SUPPORT MOTEUR FAW', 59, 1, 5, 6, 0, 0, 22, 'FAW-SUPP MOT06', 22, 0, 0, 1, 0, 0, 0, 75500, 75500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000080', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(109, 'TERMOSTAT FAW', 59, 1, 5, 6, 0, 0, 5, 'FAW-TERMO39', 5, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000082', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(110, 'VOLANT MOTEUR FAW', 59, 1, 5, 6, 0, 0, 1, 'FAW-VOLANT28', 1, 0, 0, 1, 0, 0, 0, 995000, 995000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000085', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(111, 'BOITE A GANG DE PORTIER FAW', 39, 1, 5, 6, 0, 0, 8, 'FAW-BOITE41', 8, 0, 0, 1, 0, 0, 0, 28500, 28500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000008', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(112, 'PHARE AVANT DROITE FAW 6350', 60, 1, 5, 6, 0, 0, 9, '3711020-2E2', 9, 0, 0, 1, 0, 0, 0, 210000, 210000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000057', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(113, 'PHARE AVANT GAUCHE FAW 6350', 60, 1, 5, 6, 0, 0, 4, '3711015-2E2', 4, 0, 0, 1, 0, 0, 0, 210000, 210000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000060', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(114, 'FEU ARRIERE DROITE FAW 1010', 51, 1, 5, 6, 0, 0, 6, 'FAW-FEU-52', 6, 0, 0, 1, 0, 0, 0, 115000, 115000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000036', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(115, 'PHARE AVANT DROITE FAW 6350', 61, 1, 5, 6, 0, 0, 8, '3711020-2E2', 8, 0, 0, 1, 0, 0, 0, 210000, 210000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000058', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(116, 'PHARE AVANT GAUCHE ', 61, 1, 5, 6, 0, 0, 24, '3711015-V01', 24, 0, 0, 1, 0, 0, 0, 210000, 210000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-07-000195', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(117, 'CLIGNOTANT DE COTE FAW', 47, 1, 5, 6, 0, 0, 6, 'FAW-CLICOTE-49', 6, 0, 0, 1, 0, 0, 0, 22500, 22500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000024', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(118, 'CLIGNOTANT FAW COTE', 47, 1, 5, 6, 0, 0, 4, 'FAW-CLICOTE-50', 4, 0, 0, 1, 0, 0, 0, 22500, 22500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000025', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(119, 'FRONT BUMPER GRILL', 56, 1, 5, 6, 0, 0, 1, '2803012-M00', 1, 0, 0, 1, 0, 0, 0, 67000, 67000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-07-000193', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(120, 'FEU ARRIERE DROITE FAW 6350', 52, 1, 5, 6, 0, 0, 4, 'FAW-FEU-43', 4, 0, 0, 1, 0, 0, 0, 165000, 165000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000037', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(121, 'RETROVISEUR GAUCHE FAW 6350', 64, 1, 5, 6, 0, 0, 1, 'FAW-RET-36', 1, 0, 0, 1, 0, 0, 0, 105000, 105000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000072', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(122, 'RETROVISEUR GAUCHE FAW CA 1010', 64, 1, 5, 6, 0, 0, 5, 'FAW-RET-30', 5, 0, 0, 1, 0, 0, 0, 95000, 95000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000073', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(123, 'CABLE ACCELERATOIRE', 43, 1, 5, 6, 0, 0, 14, '11081100-V01', 14, 0, 0, 1, 0, 0, 0, 17000, 17000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000016', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(124, 'CABLE DE VITESSE FAW', 43, 1, 5, 6, 0, 0, 1, '54', 1, 0, 0, 1, 0, 0, 0, 47500, 47500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000021', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(125, 'LOCK  FAW', 58, 1, 5, 6, 0, 0, 15, 'NA', 15, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000051', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(126, 'FILTRE A ESSENCE', 54, 1, 5, 6, 0, 0, 16, '23300-26080', 16, 0, 0, 1, 0, 0, 0, 25000, 25000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000039', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(127, 'FILTRE A HUILE', 55, 1, 5, 6, 0, 0, 48, '106523', 48, 0, 0, 1, 0, 0, 0, 85000, 85000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000040', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(128, 'FILTRE A AIR FAW', 53, 1, 5, 6, 0, 0, 43, '43', 43, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000038', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(129, 'PHARE AVANT FAW MINIBUS', 62, 1, 5, 6, 0, 0, 1, '3111020-2E2', 1, 0, 0, 1, 0, 0, 0, 210000, 210000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000059', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(130, 'PHARE AVANT DROITE PERI', 62, 1, 5, 6, 0, 0, 2, '4121200-M16', 2, 0, 0, 1, 0, 0, 0, 325000, 325000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-07-000194', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(131, 'PHARE AVANT GAUCHE PERI', 62, 1, 5, 6, 0, 0, 2, '4121100-M16', 2, 0, 0, 1, 0, 0, 0, 325000, 325000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-07-000196', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(132, 'JANTE FEW ', 57, 1, 5, 6, 0, 0, 6, '3101015-2E2', 6, 0, 0, 1, 0, 0, 0, 95000, 95000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000045', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(133, 'JANTE NORMAL FAW', 57, 1, 5, 6, 0, 0, 5, '3101015-2E2', 5, 0, 0, 1, 0, 0, 0, 95000, 95000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000046', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(134, 'AMORTISSEUR ARRIERE FAW', 33, 1, 5, 6, 0, 0, 45, 'FAW-AMORT-80', 45, 0, 0, 1, 0, 0, 0, 62500, 62500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-02-000002', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(135, 'VITRE PORTIERE AVANT FAW MINIBUS', 270, 1, 5, 6, 0, 0, 2, '6103022-V01', 2, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-13-000319', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(136, 'VITRE PORTIERE FEW ', 270, 1, 5, 6, 0, 0, 3, '5403011-201', 3, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FAW', '', '0001-13-000320', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(137, 'CABLE D''ACCELERATEUR FORLAND', 76, 1, 5, 7, 0, 0, 1, '11039118M0001', 1, 0, 0, 1, 0, 0, 0, 87000, 87000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '0', '', '0001-13-000172', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(138, 'BIELLE', 146, 1, 5, 7, 0, 0, 4, '6102-04-10AA0984A', 4, 0, 0, 1, 0, 0, 0, 215000, 215000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '10 T', '', '0001-13-000075', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(139, 'BREAKE LAMP SWITCH', 23, 1, 5, 7, 0, 0, 1, 'G0373060004A0', 1, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '10T', '', '0001-13-000150', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(140, 'BREAKE MASTER CYLINDER', 73, 1, 5, 7, 0, 0, 2, 'EQ140A1839A', 2, 0, 0, 1, 0, 0, 0, 29500, 29500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '10T', '', '0001-13-000151', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(141, 'AIR VALVE', 133, 1, 5, 7, 0, 0, 2, '11082356M0044', 2, 0, 0, 1, 0, 0, 0, 45000, 45000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '10T', '', '0001-13-000017', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(142, 'BRAKE LIGHT SWITCH', 135, 1, 5, 7, 0, 0, 5, '1B249373M0058', 5, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '10T', '', '0001-13-000144', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(143, 'BOITE DE VITESSE FORLAND', 138, 1, 5, 7, 0, 0, 1, '13042171M0070', 1, 0, 0, 1, 0, 0, 0, 2850000, 2850000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '4 T', '', '0001-13-000086', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(144, 'ANTIVOE COMPLET', 75, 1, 5, 7, 0, 0, 1, 'G037301000A0', 1, 0, 0, 1, 0, 0, 0, 145000, 145000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '4 TONNES', '', '0001-13-000037', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(145, 'ALTERNATEUR ', 131, 1, 5, 7, 0, 0, 6, '3701100AA1201A', 6, 0, 0, 1, 0, 0, 0, 850000, 850000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '4 TONNES', '', '0001-13-000022', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(146, 'BANDE A FREIN', 170, 1, 5, 7, 0, 0, 2, 'BJ1090-127A1839A', 2, 0, 0, 1, 0, 0, 0, 225000, 225000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', '4 TONNES', '', '0001-13-000053', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(147, 'BOURRAGE DE SOUPAPE', 92, 1, 5, 7, 0, 0, 8, 'E04931000006', 8, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'BENNE', '', '0001-13-000128', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(148, 'BOURRAGE DE SOUPAPE', 88, 1, 5, 7, 0, 0, 2, '170 2112-00A 1350A', 2, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'BENNE', '', '0001-13-000127', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(149, 'BANDE FREIN  ', 70, 1, 5, 7, 0, 0, 2, '350204C10QZ', 2, 0, 0, 1, 0, 0, 0, 225000, 225000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'BENNE', '', '0001-13-000056', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(150, 'BOURRAGE SOUPAPE', 85, 1, 5, 7, 0, 0, 8, 'E049301000006', 8, 0, 0, 1, 0, 0, 0, 95000, 95000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'BENNE', '', '0001-13-000139', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(151, 'RIP PARE CHOC AVANT FORLAND BENNE', 270, 1, 5, 7, 0, 0, 2, 'FORL-RIP PAR CH18', 2, 0, 0, 1, 0, 0, 0, 15000, 15000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'BENNE', '', '0001-13-000297', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(152, 'RETROVISEUR 10T ', 156, 1, 5, 7, 0, 0, 6, '41', 6, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000003', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(153, 'RETROVISEUR ', 154, 1, 5, 7, 0, 0, 6, '40', 6, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000001', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(154, 'RELANT ', 153, 1, 5, 7, 0, 0, 2, ' 13062366M0010 ', 2, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000241', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(155, 'TUYAUX RADIATEUR ', 173, 1, 5, 7, 0, 0, 1, ' 11049130M0004 ', 1, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000279', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(156, 'RELAIS  ', 152, 1, 5, 7, 0, 0, 1, ' 1B24937500006 ', 1, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000237', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(157, 'RELAIS  ', 152, 1, 5, 7, 0, 0, 1, ' 1B24937500105 ', 1, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000238', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(158, 'RELAIS  ', 152, 1, 5, 7, 0, 0, 1, ' 1B24937550031 ', 1, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000239', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(159, 'RELAIS DE DEMAREUR ', 152, 1, 5, 7, 0, 0, 1, '45', 1, 0, 0, 1, 0, 0, 0, 85000, 85000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000240', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(160, 'RELAI 24V ', 151, 1, 5, 7, 0, 0, 4, '34', 4, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000236', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(161, ' PLATEAU D''AMBRAYAGE FORLAND 10T ', 148, 1, 5, 7, 0, 0, 3, ' 4102B.26.20A984A ', 3, 0, 0, 1, 0, 0, 0, 450000, 450000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000217', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(162, 'RETROVISEUR DROIT FORLAND ', 158, 1, 5, 7, 0, 0, 1, ' 1B17882100032 ', 1, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000005', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(163, 'FILTRE A AIR', 107, 1, 5, 7, 0, 0, 5, 'K2038', 5, 0, 0, 1, 0, 0, 0, 75000, 75000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000107', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(164, 'ENGINE WATER OUTLET HOSE ', 93, 1, 5, 7, 0, 0, 1, '13042133W0092', 1, 0, 0, 1, 0, 0, 0, 55000, 55000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000084', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(165, 'FRONT DOOR GLASS LIFTER ASSY LH', 93, 1, 5, 7, 0, 0, 1, '1B1786143-012', 1, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000135', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(166, 'FRONT DOOR GLASS LIFTER ASSY RH', 93, 1, 5, 7, 0, 0, 1, '1B1786143-011', 1, 0, 0, 1, 0, 0, 0, 35000, 35000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000136', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(167, 'OIL SEAL RING', 93, 1, 5, 7, 0, 0, 2, '1029AE-3103090A1839A', 2, 0, 0, 1, 0, 0, 0, 55000, 55000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000187', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(168, 'WATER OUTLET HOSE RADIATOR', 93, 1, 5, 7, 0, 0, 1, '60130210031AO', 1, 0, 0, 1, 0, 0, 0, 65000, 65000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000287', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(169, 'WATER PUMP', 93, 1, 5, 7, 0, 0, 1, 'E049351000052', 1, 0, 0, 1, 0, 0, 0, 850000, 850000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000291', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(170, 'OIL SUPUMP WASHER ', 139, 1, 5, 7, 0, 0, 1, 'D30-1009011CA1201A', 1, 0, 0, 1, 0, 0, 0, 7500, 7500, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000189', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(171, 'SPIDER ', 167, 1, 5, 7, 0, 0, 3, '1304025015-34-46', 3, 0, 0, 1, 0, 0, 0, 125000, 125000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000252', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(172, 'NEZ INJECTEUR ', 138, 1, 5, 7, 0, 0, 9, '42', 9, 0, 0, 1, 0, 0, 0, 350000, 350000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000179', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1);
INSERT INTO `pos_store_2_ibi_articles` (`ID_ARTICLE`, `DESIGN_ARTICLE`, `REF_RAYON_ARTICLE`, `REF_SHIPPING_ARTICLE`, `REF_CATEGORIE_ARTICLE`, `REF_SOUS_CATEGORIE_ARTICLE`, `REF_PROVIDER_ARTICLE`, `REF_TAXE_ARTICLE`, `QUANTITY_ARTICLE`, `SKU_ARTICLE`, `QUANTITE_RESTANTE_ARTICLE`, `QUANTITE_VENDU_ARTICLE`, `DEFECTUEUX_ARTICLE`, `PRIX_DACHAT_ARTICLE`, `FRAIS_ACCESSOIRE_ARTICLE`, `COUT_DACHAT_ARTICLE`, `TAUX_DE_MARGE_ARTICLE`, `PRIX_DE_VENTE_ARTICLE`, `PRIX_DE_VENTE_TTC_ARTICLE`, `SHADOW_PRICE_ARTICLE`, `TAILLE_ARTICLE`, `POIDS_ARTICLE`, `COULEUR_ARTICLE`, `HAUTEUR_ARTICLE`, `LARGEUR_ARTICLE`, `PRIX_PROMOTIONEL_ARTICLE`, `SPECIAL_PRICE_START_DATE_ARTICLE`, `SPECIAL_PRICE_END_DATE_ARTICLE`, `DESCRIPTION_ARTICLE`, `APERCU_ARTICLE`, `CODEBAR_ARTICLE`, `DATE_CREATION_ARTICLE`, `DATE_MOD_ARTICLE`, `AUTHOR_ARTICLE`, `TYPE_ARTICLE`, `STATUS_ARTICLE`, `STOCK_ENABLED_ARTICLE`, `AUTO_BARCODE_ARTICLE`, `BARCODE_TYPE_ARTICLE`, `USE_VARIATION_ARTICLE`, `MINIMUM_QUANTITY_ARTICLE`) VALUES
(173, 'PHARE AVANT GAUCHE FORLAND BENNE', 145, 1, 5, 7, 0, 0, 4, '1B15837100032', 4, 0, 0, 1, 0, 0, 0, 405000, 405000, 0, '', 'PIECE\n', '', '', '', 0, '2019-10-29 15:15:49', '0000-00-00 00:00:00', 'FORLAND', '', '0001-03-000199', '2019-10-29 15:15:49', '0000-00-00 00:00:00', 2, 1, 1, 1, 0, '', 0, 1),
(174, 'hksg', 3, 0, 4, 0, 0, 0, 0, '23', 0, 0, 0, 0, 0, 0, 0, 2300, 0, 9000, '12', '1', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-28 03:31:51', '0000-00-00 00:00:00', 1, 1, 0, 1, 0, '', 0, 0),
(175, 'kj', 3, 0, 11, 0, 0, 0, 0, '9', 0, 0, 0, 0, 0, 0, 0, 8000, 0, 0, '', '8', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-28 03:37:02', '0000-00-00 00:00:00', 1, 1, 1, 0, 0, '', 0, 0),
(176, 'nas', 5, 0, 4, 3, 0, 0, 0, '78', 0, 0, 0, 0, 0, 0, 0, 12000, 0, 0, '', '34', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-28 19:06:11', '0000-00-00 00:00:00', 1, 1, 1, 1, 0, '', 0, 0),
(177, 'ed', 2, 0, 1, 7, 0, 0, 0, '89', 0, 0, 0, 0, 0, 0, 0, 8900, 0, 0, '', '80', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-28 19:07:31', '2020-02-29 09:50:56', 1, 1, 0, 1, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_client_file`
--

CREATE TABLE `pos_store_2_ibi_client_file` (
  `ID_CLIENT_FILE` int(11) NOT NULL,
  `PROFORMA_ID_CLIENT_FILE` int(11) NOT NULL,
  `REF_CLIENT_FILE` int(11) NOT NULL,
  `REF_PROFORMA_CODE_CLIENT_FILE` varchar(50) NOT NULL,
  `NUMBER_PURCHASE_CLIENT_FILE` varchar(50) NOT NULL,
  `FILE_PURCHASE_CLIENT_FILE` varchar(200) NOT NULL,
  `COMMISSIONING_CLIENT_FILE` varchar(200) NOT NULL,
  `CONTRAT_GARANTIE_CLIENT_FILE` varchar(200) NOT NULL,
  `CONTRAT_MAINTENANCE_CLIENT_FILE` varchar(200) NOT NULL,
  `INVOICE_NUMBER_CLIENT_FILE` varchar(50) NOT NULL,
  `DATE_CREATION_CLIENT_FILE` datetime NOT NULL,
  `DATE_MODIFICATION_CLIENT_FILE` datetime NOT NULL,
  `OPERATING_STATUT` int(11) NOT NULL DEFAULT '0',
  `APPROUVE_BY` int(11) NOT NULL,
  `CLOSURE_DATE_CLIENT_FILE` datetime NOT NULL,
  `CLOSURE_BY_CLIENT_FILE` int(11) NOT NULL,
  `AUTHOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_client_file`
--

INSERT INTO `pos_store_2_ibi_client_file` (`ID_CLIENT_FILE`, `PROFORMA_ID_CLIENT_FILE`, `REF_CLIENT_FILE`, `REF_PROFORMA_CODE_CLIENT_FILE`, `NUMBER_PURCHASE_CLIENT_FILE`, `FILE_PURCHASE_CLIENT_FILE`, `COMMISSIONING_CLIENT_FILE`, `CONTRAT_GARANTIE_CLIENT_FILE`, `CONTRAT_MAINTENANCE_CLIENT_FILE`, `INVOICE_NUMBER_CLIENT_FILE`, `DATE_CREATION_CLIENT_FILE`, `DATE_MODIFICATION_CLIENT_FILE`, `OPERATING_STATUT`, `APPROUVE_BY`, `CLOSURE_DATE_CLIENT_FILE`, `CLOSURE_BY_CLIENT_FILE`, `AUTHOR`) VALUES
(1, 3, 19, '00003/02/2020', '20005600', '20200228143358-2020-02-28client_file143340.accdb', '', '', '', '0000001/2020', '2020-02-28 14:33:58', '0000-00-00 00:00:00', 1, 0, '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_commandes`
--

CREATE TABLE `pos_store_2_ibi_commandes` (
  `ID_COMMAND` int(11) NOT NULL,
  `TITRE_COMMAND` varchar(200) NOT NULL,
  `CODE_COMMAND` varchar(250) NOT NULL,
  `REF_CLIENT_COMMAND` int(11) NOT NULL,
  `TYPE_COMMAND` varchar(200) NOT NULL,
  `STATUT_COMMAND` varchar(50) NOT NULL,
  `DATE_CREATION_COMMAND` datetime NOT NULL,
  `DATE_MOD_COMMAND` datetime NOT NULL,
  `PAYMENT_TYPE_COMMAND` varchar(220) NOT NULL,
  `AUTHOR_COMMAND` int(11) NOT NULL,
  `SOMME_PERCU_COMMAND` float NOT NULL,
  `TOTAL_COMMAND` float NOT NULL,
  `DISCOUNT_TYPE_COMMAND` varchar(200) NOT NULL,
  `TVA_COMMAND` float NOT NULL,
  `GROUP_DISCOUNT_COMMAND` float DEFAULT NULL,
  `REF_SHIPPING_ADDRESS_COMMAND` int(11) NOT NULL,
  `SHIPPING_AMOUNT_COMMAND` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_commandes`
--

INSERT INTO `pos_store_2_ibi_commandes` (`ID_COMMAND`, `TITRE_COMMAND`, `CODE_COMMAND`, `REF_CLIENT_COMMAND`, `TYPE_COMMAND`, `STATUT_COMMAND`, `DATE_CREATION_COMMAND`, `DATE_MOD_COMMAND`, `PAYMENT_TYPE_COMMAND`, `AUTHOR_COMMAND`, `SOMME_PERCU_COMMAND`, `TOTAL_COMMAND`, `DISCOUNT_TYPE_COMMAND`, `TVA_COMMAND`, `GROUP_DISCOUNT_COMMAND`, `REF_SHIPPING_ADDRESS_COMMAND`, `SHIPPING_AMOUNT_COMMAND`) VALUES
(1, 'test', 'BQQJGB', 19, 'ibi_order_attente', '', '2020-02-22 10:43:44', '0000-00-00 00:00:00', '', 1, 0, 50000, '', 9000, NULL, 0, 0),
(2, 'test', '1IQ6OA', 19, 'ibi_order_attente', '', '2020-02-22 12:57:07', '0000-00-00 00:00:00', '', 1, 0, 30000, '', 5400, NULL, 0, 0),
(3, 'test prof', 'K2T1CX', 19, 'ibi_order_attente', '', '2020-02-22 12:57:12', '2020-02-25 14:06:37', '', 1, 0, 57000, '', 10260, NULL, 0, 0),
(4, 'test commande mod', '3D4VJ5', 19, 'ibi_order_attente', '', '2020-02-24 12:09:03', '2020-02-25 12:13:01', '', 1, 0, 33500, '', 6030, NULL, 0, 0),
(5, 'test comm client', '2I68R0', 19, 'ibi_order_attente', '', '2020-02-25 13:22:01', '2020-02-25 13:39:30', '', 1, 0, 92500, '', 16650, NULL, 0, 0),
(6, 'test vv', '1U31N6', 19, 'ibi_order_attente', '', '2020-02-27 14:59:06', '0000-00-00 00:00:00', '', 1, 0, 33500, '', 6030, NULL, 0, 0),
(7, 'indefini', 'R2EMF9', 19, 'ibi_order_attente', 'is_invoice', '2020-02-27 16:38:19', '2020-02-27 16:42:50', '', 1, 0, 50000, '', 9000, NULL, 0, 0),
(8, 'Non Défini', 'Z73ARG', 19, 'ibi_order_attente', 'is_invoice', '2020-02-28 14:55:30', '0000-00-00 00:00:00', '', 1, 0, 67500, '', 12150, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_commandes_paiements`
--

CREATE TABLE `pos_store_2_ibi_commandes_paiements` (
  `ID_PAIEMENT` int(11) NOT NULL,
  `REF_COMMAND_CODE_PAIEMENT` varchar(250) NOT NULL,
  `MONTANT_PAIEMENT` float NOT NULL,
  `AUTHOR_PAIEMENT` int(11) NOT NULL,
  `DATE_CREATION_PAIEMENT` datetime NOT NULL,
  `PAYMENT_TYPE_PAIEMENT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_commandes_produits`
--

CREATE TABLE `pos_store_2_ibi_commandes_produits` (
  `ID_COMMAND_PROD` int(11) NOT NULL,
  `REF_PRODUCT_CODEBAR_COMMAND_PROD` varchar(250) NOT NULL,
  `REF_COMMAND_CODE_PROD` varchar(250) NOT NULL,
  `QUANTITE_COMMAND_PROD` int(11) NOT NULL,
  `PRIX_COMMAND_PROD` float NOT NULL,
  `PRIX_TOTAL_COMMAND_PROD` float NOT NULL,
  `DISCOUNT_TYPE_COMMAND_PROD` varchar(200) NOT NULL,
  `DISCOUNT_AMOUNT_COMMAND_PROD` float NOT NULL,
  `DISCOUNT_PERCENT_COMMAND_PROD` float NOT NULL,
  `NAME_COMMAND_PROD` varchar(200) NOT NULL,
  `INLINE_COMMAND_PROD` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_commandes_produits`
--

INSERT INTO `pos_store_2_ibi_commandes_produits` (`ID_COMMAND_PROD`, `REF_PRODUCT_CODEBAR_COMMAND_PROD`, `REF_COMMAND_CODE_PROD`, `QUANTITE_COMMAND_PROD`, `PRIX_COMMAND_PROD`, `PRIX_TOTAL_COMMAND_PROD`, `DISCOUNT_TYPE_COMMAND_PROD`, `DISCOUNT_AMOUNT_COMMAND_PROD`, `DISCOUNT_PERCENT_COMMAND_PROD`, `NAME_COMMAND_PROD`, `INLINE_COMMAND_PROD`) VALUES
(1, '0001-01-000008', 'BQQJGB', 1, 25000, 25000, 'percentage', 0, 0, 'HELICE POUR CLIM 9M/12M BTU', 0),
(2, '0001-01-000002', 'BQQJGB', 1, 25000, 25000, 'percentage', 0, 0, 'HELICE VENTILATEUR', 0),
(4, '0001-01-000007', 'K2T1CX', 1, 30000, 27000, 'percentage', 0, 3000, 'HELICE POUR CLIM 18M/24M BTU', 0),
(16, '0001-05-000001', '3D4VJ5', 1, 3500, 3500, 'percentage', 0, 0, 'FILTRE POUR FRIGO - 0001-05-000001', 0),
(20, '0001-01-000007', '2I68R0', 1, 30000, 30000, 'percentage', 0, 0, 'HELICE POUR CLIM 18M/24M BTU - 0001-01-000007', 0),
(21, '0001-01-000008', '2I68R0', 1, 25000, 25000, 'percentage', 0, 0, 'HELICE POUR CLIM 9M/12M BTU - 0001-01-000008', 0),
(22, '0001-01-000009', '2I68R0', 1, 37500, 37500, 'percentage', 0, 0, 'SONDE EN CUIVRE - 0001-01-000009', 0),
(23, '0001-01-000003', 'K2T1CX', 1, 30000, 30000, 'percentage', 0, 0, 'TELECOMMANDE', 0),
(24, '0001-01-000007', '1U31N6', 1, 30000, 30000, 'percentage', 0, 0, 'HELICE POUR CLIM 18M/24M BTU', 0),
(25, '0001-05-000001', '1U31N6', 1, 3500, 3500, 'percentage', 0, 0, 'FILTRE POUR FRIGO', 0),
(26, '0001-01-000002', 'R2EMF9', 1, 25000, 25000, 'percentage', 0, 0, 'HELICE VENTILATEUR', 0),
(27, '0001-02-000071', 'R2EMF9', 1, 25000, 25000, 'percentage', 0, 0, 'RETROV EXTER FAW MINIBUS DROIT ', 0),
(28, '0001-01-000003', 'T8XOZO', 1, 30000, 30000, 'percentage', 0, 0, 'TELECOMMANDE', 0),
(29, '0001-01-000009', 'T8XOZO', 1, 37500, 37500, 'percentage', 0, 0, 'SONDE EN CUIVRE', 0),
(30, '0001-01-000003', 'CDMQED', 1, 30000, 30000, 'percentage', 0, 0, 'TELECOMMANDE', 0),
(31, '0001-01-000009', 'CDMQED', 1, 37500, 37500, 'percentage', 0, 0, 'SONDE EN CUIVRE', 0),
(32, '0001-01-000003', 'Z73ARG', 1, 30000, 30000, 'percentage', 0, 0, 'TELECOMMANDE', 0),
(33, '0001-01-000009', 'Z73ARG', 1, 37500, 37500, 'percentage', 0, 0, 'SONDE EN CUIVRE', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_devis`
--

CREATE TABLE `pos_store_2_ibi_devis` (
  `ID_DEVIS` int(11) NOT NULL,
  `TITRE_DEVIS` varchar(200) NOT NULL,
  `CODE_DEVIS` varchar(250) NOT NULL,
  `REF_CLIENT_DEVIS` int(11) NOT NULL,
  `TYPE_DEVIS` varchar(20) NOT NULL,
  `DATE_CREATION_DEVIS` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_MOD_DEVIS` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AUTHOR_DEVIS` int(11) NOT NULL,
  `COEFFICIENT_DEVIS` float NOT NULL,
  `TOTAL_DEVIS` float NOT NULL,
  `TOTAL_FINAL_DEVIS` float NOT NULL,
  `TYPE_DELAY_DEVIS` float NOT NULL,
  `TEMPS_DELAY_DEVIS` float NOT NULL,
  `COND_PAID_DEVIS` float NOT NULL,
  `PERCENT_PAID_DEVIS` float NOT NULL COMMENT 'percentage',
  `PERCENT_PAID_LIVR_DEVIS` float NOT NULL COMMENT 'percentage',
  `VALID_OFFRE_DEVIS` varchar(50) NOT NULL,
  `STATUT_DEVIS` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_devis_produits`
--

CREATE TABLE `pos_store_2_ibi_devis_produits` (
  `ID_DEVIS_PROD` int(11) NOT NULL,
  `REF_PRODUCT_CODEBAR_DEVIS_PROD` varchar(250) NOT NULL,
  `REF_DEVIS_CODE_DEVIS_PROD` varchar(250) NOT NULL,
  `QUANTITE_DEVIS_PROD` float NOT NULL,
  `QUANTITE_ADD_DEVIS_PROD` float NOT NULL,
  `UNIT_DEVIS_PROD` varchar(50) NOT NULL,
  `PRIX_DEVIS_PROD` float NOT NULL,
  `PRIX_TOTAL_DEVIS_PROD` float NOT NULL,
  `NAME_DEVIS_PROD` varchar(200) NOT NULL,
  `STATUT_DEVIS_PROD` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_fiche_travail`
--

CREATE TABLE `pos_store_2_ibi_fiche_travail` (
  `ID_FICHE` int(11) NOT NULL,
  `TITRE_FICHE` varchar(200) NOT NULL,
  `DEVIS_CODE_FICHE` varchar(50) NOT NULL,
  `NUMERO_FICHE` varchar(20) NOT NULL,
  `REF_CLIENT_FICHE` int(11) NOT NULL,
  `TYPE_DEVIS_FICHE` varchar(20) NOT NULL,
  `DATE_CREATION_FICHE` datetime NOT NULL,
  `DATE_MOD_FICHE` datetime NOT NULL,
  `AUTHOR_FICHE` int(11) NOT NULL,
  `REF_CATEGORIE_FICHE` int(11) NOT NULL,
  `TOTAL_FICHE` float NOT NULL,
  `STATUT_FICHE` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_proforma`
--

CREATE TABLE `pos_store_2_ibi_proforma` (
  `ID_PROFORMA` int(11) NOT NULL,
  `TITRE_PROFORMA` varchar(200) NOT NULL,
  `CODE_PROFORMA` varchar(250) NOT NULL,
  `REF_CLIENT_PROFORMA` int(11) NOT NULL,
  `TYPE_PROFORMA` varchar(200) NOT NULL,
  `DATE_CREATION_PROFORMA` datetime NOT NULL,
  `DATE_MOD_PROFORMA` datetime NOT NULL,
  `PAYMENT_TYPE_PROFORMA` varchar(220) NOT NULL,
  `AUTHOR_PROFORMA` varchar(200) NOT NULL,
  `SOMME_PERCU_PROFORMA` float NOT NULL,
  `TOTAL_PROFORMA` float NOT NULL,
  `DISCOUNT_TYPE_PROFORMA` varchar(200) NOT NULL,
  `TVA_PROFORMA` float NOT NULL,
  `GROUP_DISCOUNT_PROFORMA` float DEFAULT NULL,
  `REF_SHIPPING_ADDRESS_PROFORMA` int(11) NOT NULL,
  `SHIPPING_AMOUNT_PROFORMA` float NOT NULL,
  `TYPE_DELAY_PROFORMA` float NOT NULL,
  `TEMPS_DELAY_PROFORMA` float NOT NULL,
  `COND_PAID_PROFORMA` float NOT NULL,
  `PERCENT_PAID_PROFORMA` float NOT NULL COMMENT 'percentage ',
  `PERCENT_PAID_LIVR_PROFORMA` float DEFAULT NULL COMMENT 'percentage ',
  `VALID_OFFRE_PROFORMA` varchar(200) NOT NULL,
  `STATUT_PROFORMA` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_proforma`
--

INSERT INTO `pos_store_2_ibi_proforma` (`ID_PROFORMA`, `TITRE_PROFORMA`, `CODE_PROFORMA`, `REF_CLIENT_PROFORMA`, `TYPE_PROFORMA`, `DATE_CREATION_PROFORMA`, `DATE_MOD_PROFORMA`, `PAYMENT_TYPE_PROFORMA`, `AUTHOR_PROFORMA`, `SOMME_PERCU_PROFORMA`, `TOTAL_PROFORMA`, `DISCOUNT_TYPE_PROFORMA`, `TVA_PROFORMA`, `GROUP_DISCOUNT_PROFORMA`, `REF_SHIPPING_ADDRESS_PROFORMA`, `SHIPPING_AMOUNT_PROFORMA`, `TYPE_DELAY_PROFORMA`, `TEMPS_DELAY_PROFORMA`, `COND_PAID_PROFORMA`, `PERCENT_PAID_PROFORMA`, `PERCENT_PAID_LIVR_PROFORMA`, `VALID_OFFRE_PROFORMA`, `STATUT_PROFORMA`) VALUES
(1, 'proforma du 28', '00001/02/2020', 20, 'ibi_proforma_pv', '2020-02-28 11:54:19', '0000-00-00 00:00:00', '', '1', 0, 32500, '', 5850, NULL, 0, 0, 0, 0, 1, 0, 0, '3 jour(s)', 0),
(2, 'proforma du 28', '00002/02/2020', 20, 'ibi_proforma_pv', '2020-02-28 14:23:21', '0000-00-00 00:00:00', '', '1', 0, 55000, '', 9900, NULL, 0, 0, 0, 0, 1, 0, 0, '3 jour(s)', 0),
(3, 'proforma du 28 14h', '00003/02/2020', 19, 'ibi_proforma_pv', '2020-02-28 14:24:37', '0000-00-00 00:00:00', '', '1', 0, 67500, '', 12150, NULL, 0, 0, 0, 0, 1, 0, 0, '3 jour(s)', 2);

-- --------------------------------------------------------

--
-- Structure de la table `pos_store_2_ibi_proforma_produits`
--

CREATE TABLE `pos_store_2_ibi_proforma_produits` (
  `ID_PROFORMA_PROD` int(11) NOT NULL,
  `REF_PRODUCT_CODEBAR_PROFORMA_PROD` varchar(250) NOT NULL,
  `REF_PROFORMA_CODE_PROD` varchar(250) NOT NULL,
  `QUANTITE_PROFORMA_PROD` int(11) NOT NULL,
  `PRIX_PROFORMA_PROD` float NOT NULL,
  `PRIX_TOTAL_PROFORMA_PROD` float NOT NULL,
  `DISCOUNT_TYPE_PROFORMA_PROD` varchar(200) NOT NULL,
  `DISCOUNT_AMOUNT_PROFORMA_PROD` float NOT NULL,
  `DISCOUNT_PERCENT_PROFORMA_PROD` float NOT NULL,
  `NAME_PROFORMA_PROD` varchar(200) NOT NULL,
  `INLINE_PROFORMA_PROD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_store_2_ibi_proforma_produits`
--

INSERT INTO `pos_store_2_ibi_proforma_produits` (`ID_PROFORMA_PROD`, `REF_PRODUCT_CODEBAR_PROFORMA_PROD`, `REF_PROFORMA_CODE_PROD`, `QUANTITE_PROFORMA_PROD`, `PRIX_PROFORMA_PROD`, `PRIX_TOTAL_PROFORMA_PROD`, `DISCOUNT_TYPE_PROFORMA_PROD`, `DISCOUNT_AMOUNT_PROFORMA_PROD`, `DISCOUNT_PERCENT_PROFORMA_PROD`, `NAME_PROFORMA_PROD`, `INLINE_PROFORMA_PROD`) VALUES
(1, '0001-01-000007', '00001/02/2020', 1, 30000, 30000, 'percentage', 0, 0, 'HELICE POUR CLIM 18M/24M BTU', 0),
(2, '0001-01-000006', '00001/02/2020', 1, 2500, 2500, 'percentage', 0, 0, 'VALVE DE CHARGE GAZ', 0),
(3, '0001-01-000007', '00002/02/2020', 1, 30000, 30000, 'percentage', 0, 0, 'HELICE POUR CLIM 18M/24M BTU', 0),
(4, '0001-01-000008', '00002/02/2020', 1, 25000, 25000, 'percentage', 0, 0, 'HELICE POUR CLIM 9M/12M BTU', 0),
(5, '0001-01-000003', '00003/02/2020', 1, 30000, 30000, 'percentage', 0, 0, 'TELECOMMANDE', 0),
(6, '0001-01-000009', '00003/02/2020', 1, 37500, 37500, 'percentage', 0, 0, 'SONDE EN CUIVRE', 0);

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
(3, 'A89', 'j', '2020-02-27 11:12:52', '0000-00-00 00:00:00', 1),
(4, 'A89', 'ko', '2020-02-27 21:11:25', '0000-00-00 00:00:00', 1),
(5, 'B56', 'n', '2020-02-28 01:57:49', '0000-00-00 00:00:00', 1);

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
-- Index pour la table `pos_ibi_facture`
--
ALTER TABLE `pos_ibi_facture`
  ADD PRIMARY KEY (`ID_FACTURE`);

--
-- Index pour la table `pos_ibi_fournisseurs`
--
ALTER TABLE `pos_ibi_fournisseurs`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pos_ibi_stores`
--
ALTER TABLE `pos_ibi_stores`
  ADD PRIMARY KEY (`ID_STORE`);

--
-- Index pour la table `pos_ibi_taxes`
--
ALTER TABLE `pos_ibi_taxes`
  ADD PRIMARY KEY (`ID_TAXE`);

--
-- Index pour la table `pos_store_1_ibi_commandes`
--
ALTER TABLE `pos_store_1_ibi_commandes`
  ADD PRIMARY KEY (`ID_COMMAND`);

--
-- Index pour la table `pos_store_1_ibi_commandes_produits`
--
ALTER TABLE `pos_store_1_ibi_commandes_produits`
  ADD PRIMARY KEY (`ID_COMMAND_PROD`);

--
-- Index pour la table `pos_store_1_ibi_proforma`
--
ALTER TABLE `pos_store_1_ibi_proforma`
  ADD PRIMARY KEY (`ID_PROFORMA`);

--
-- Index pour la table `pos_store_1_ibi_proforma_produits`
--
ALTER TABLE `pos_store_1_ibi_proforma_produits`
  ADD PRIMARY KEY (`D_PROFORMA_PROD`);

--
-- Index pour la table `pos_store_2_ibi_articles`
--
ALTER TABLE `pos_store_2_ibi_articles`
  ADD PRIMARY KEY (`ID_ARTICLE`);

--
-- Index pour la table `pos_store_2_ibi_client_file`
--
ALTER TABLE `pos_store_2_ibi_client_file`
  ADD PRIMARY KEY (`ID_CLIENT_FILE`);

--
-- Index pour la table `pos_store_2_ibi_commandes`
--
ALTER TABLE `pos_store_2_ibi_commandes`
  ADD PRIMARY KEY (`ID_COMMAND`);

--
-- Index pour la table `pos_store_2_ibi_commandes_paiements`
--
ALTER TABLE `pos_store_2_ibi_commandes_paiements`
  ADD PRIMARY KEY (`ID_PAIEMENT`);

--
-- Index pour la table `pos_store_2_ibi_commandes_produits`
--
ALTER TABLE `pos_store_2_ibi_commandes_produits`
  ADD PRIMARY KEY (`ID_COMMAND_PROD`);

--
-- Index pour la table `pos_store_2_ibi_devis`
--
ALTER TABLE `pos_store_2_ibi_devis`
  ADD PRIMARY KEY (`ID_DEVIS`);

--
-- Index pour la table `pos_store_2_ibi_devis_produits`
--
ALTER TABLE `pos_store_2_ibi_devis_produits`
  ADD PRIMARY KEY (`ID_DEVIS_PROD`);

--
-- Index pour la table `pos_store_2_ibi_fiche_travail`
--
ALTER TABLE `pos_store_2_ibi_fiche_travail`
  ADD PRIMARY KEY (`ID_FICHE`);

--
-- Index pour la table `pos_store_2_ibi_proforma`
--
ALTER TABLE `pos_store_2_ibi_proforma`
  ADD PRIMARY KEY (`ID_PROFORMA`);

--
-- Index pour la table `pos_store_2_ibi_proforma_produits`
--
ALTER TABLE `pos_store_2_ibi_proforma_produits`
  ADD PRIMARY KEY (`ID_PROFORMA_PROD`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `aauth_login_attempts`
--
ALTER TABLE `aauth_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `crud_field`
--
ALTER TABLE `crud_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;
--
-- AUTO_INCREMENT pour la table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
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
  MODIFY `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `pos_ibi_clients`
--
ALTER TABLE `pos_ibi_clients`
  MODIFY `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `pos_ibi_clients_groups`
--
ALTER TABLE `pos_ibi_clients_groups`
  MODIFY `ID_GROUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `pos_ibi_facture`
--
ALTER TABLE `pos_ibi_facture`
  MODIFY `ID_FACTURE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pos_ibi_fournisseurs`
--
ALTER TABLE `pos_ibi_fournisseurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `pos_ibi_stores`
--
ALTER TABLE `pos_ibi_stores`
  MODIFY `ID_STORE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `pos_ibi_taxes`
--
ALTER TABLE `pos_ibi_taxes`
  MODIFY `ID_TAXE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pos_store_1_ibi_commandes`
--
ALTER TABLE `pos_store_1_ibi_commandes`
  MODIFY `ID_COMMAND` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_1_ibi_commandes_produits`
--
ALTER TABLE `pos_store_1_ibi_commandes_produits`
  MODIFY `ID_COMMAND_PROD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_1_ibi_proforma`
--
ALTER TABLE `pos_store_1_ibi_proforma`
  MODIFY `ID_PROFORMA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_1_ibi_proforma_produits`
--
ALTER TABLE `pos_store_1_ibi_proforma_produits`
  MODIFY `D_PROFORMA_PROD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_articles`
--
ALTER TABLE `pos_store_2_ibi_articles`
  MODIFY `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_client_file`
--
ALTER TABLE `pos_store_2_ibi_client_file`
  MODIFY `ID_CLIENT_FILE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_commandes`
--
ALTER TABLE `pos_store_2_ibi_commandes`
  MODIFY `ID_COMMAND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_commandes_paiements`
--
ALTER TABLE `pos_store_2_ibi_commandes_paiements`
  MODIFY `ID_PAIEMENT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_commandes_produits`
--
ALTER TABLE `pos_store_2_ibi_commandes_produits`
  MODIFY `ID_COMMAND_PROD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_devis`
--
ALTER TABLE `pos_store_2_ibi_devis`
  MODIFY `ID_DEVIS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_devis_produits`
--
ALTER TABLE `pos_store_2_ibi_devis_produits`
  MODIFY `ID_DEVIS_PROD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_fiche_travail`
--
ALTER TABLE `pos_store_2_ibi_fiche_travail`
  MODIFY `ID_FICHE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_proforma`
--
ALTER TABLE `pos_store_2_ibi_proforma`
  MODIFY `ID_PROFORMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_proforma_produits`
--
ALTER TABLE `pos_store_2_ibi_proforma_produits`
  MODIFY `ID_PROFORMA_PROD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_rayons`
--
ALTER TABLE `pos_store_2_ibi_rayons`
  MODIFY `ID_RAYON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
