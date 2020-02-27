/*J'ai ajouter des nouvelles tables comme remise,fournisseur,client et groupe*/



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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `remise`
--
ALTER TABLE `remise`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `remise`
--
ALTER TABLE `remise`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_ibi_fournisseurs`
--
ALTER TABLE `pos_ibi_fournisseurs`
  ADD PRIMARY KEY (`ID`);





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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_ibi_clients_groups`
--
ALTER TABLE `pos_ibi_clients_groups`
  ADD PRIMARY KEY (`ID_GROUP`);

--
-- AUTO_INCREMENT pour les tables exportées
--

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
(19, 'BIGABO', 'Jean Claude', 0, '78392842', 'bigabo@gmail.com', 'erjk', '1992-02-08 06:34:00', '', 0, 0, 0, 0, '', '', '', 'Bujumbura', '', 'Burundi', '283902', '2020-02-21 16:35:10', '2020-02-21 16:35:10', 8, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_ibi_clients`
--
ALTER TABLE `pos_ibi_clients`
  ADD PRIMARY KEY (`ID_CLIENT`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pos_ibi_clients`
--
ALTER TABLE `pos_ibi_clients`
  MODIFY `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
(15, 'tyd', 2, 0, 8, 3, 120, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 23000, 0, 0, '78', '9', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '2020-02-27 19:25:30', '2020-02-27 19:53:49', '1', 0, 0, 0, 0, '', 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_store_2_ibi_articles`
--
ALTER TABLE `pos_store_2_ibi_articles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_articles`
--
ALTER TABLE `pos_store_2_ibi_articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_store_2_ibi_rayons`
--
ALTER TABLE `pos_store_2_ibi_rayons`
  ADD PRIMARY KEY (`ID_RAYON`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pos_store_2_ibi_rayons`
--
ALTER TABLE `pos_store_2_ibi_rayons`
  MODIFY `ID_RAYON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;