-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 oct. 2020 à 15:49
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `syndic`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartements`
--

CREATE TABLE `appartements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Immeuble` bigint(20) UNSIGNED NOT NULL,
  `Type_du_bien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nbr_Max_chambre` int(11) NOT NULL,
  `Num_Porte` int(11) NOT NULL,
  `Dernier_Mois_Pays` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `appartements`
--

INSERT INTO `appartements` (`id`, `nom`, `id_Immeuble`, `Type_du_bien`, `Nbr_Max_chambre`, `Num_Porte`, `Dernier_Mois_Pays`, `created_at`, `updated_at`) VALUES
(1, 'BureauN°1', 1, 'Bureau', 6, 1, '2020-10-22', '2020-10-21 17:34:22', '2020-10-21 17:34:22');

-- --------------------------------------------------------

--
-- Structure de la table `blocs`
--

CREATE TABLE `blocs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_bloc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_residence` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blocs`
--

INSERT INTO `blocs` (`id`, `nom_bloc`, `id_residence`, `created_at`, `updated_at`) VALUES
(1, 'bloc-1', 1, NULL, NULL),
(2, 'Willy Lubowitz', 7, NULL, NULL),
(3, 'Randal Bosco', 12, NULL, NULL),
(4, 'Daniela Schuster', 2, NULL, NULL),
(5, 'Jamison Olson', 5, NULL, NULL),
(7, 'Mr. Dee Schroeder', 11, NULL, NULL),
(17, 'Eric Erdman', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `caisses`
--

CREATE TABLE `caisses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Date_Paiment` date DEFAULT NULL,
  `id_Locataire` bigint(20) UNSIGNED DEFAULT NULL,
  `id_Appartement` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `montant` double(8,2) NOT NULL,
  `mois_concerne` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `caisses`
--

INSERT INTO `caisses` (`id`, `Date_Paiment`, `id_Locataire`, `id_Appartement`, `created_at`, `updated_at`, `montant`, `mois_concerne`) VALUES
(1, '2020-10-21', 1, 1, NULL, '2020-10-21 17:39:45', 0.00, '2020-10'),
(2, '2020-10-21', 1, 1, '2020-10-21 17:39:45', '2020-10-21 17:40:09', 300.00, '2020-11'),
(3, '2020-10-21', 1, 1, '2020-10-21 17:40:09', '2020-10-21 17:40:28', 300.00, '2020-12'),
(4, '2020-10-21', 1, 1, '2020-10-21 17:40:28', '2020-10-21 17:41:34', 300.00, '2021-1'),
(5, '2020-10-21', 1, 1, '2020-10-21 17:41:34', '2020-10-21 17:41:58', 530.00, '2021-2'),
(6, NULL, 1, 1, '2020-10-21 17:41:58', '2020-10-21 17:41:58', 530.00, '2021-3');

-- --------------------------------------------------------

--
-- Structure de la table `confirm_logments`
--

CREATE TABLE `confirm_logments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DateD` date NOT NULL,
  `DateF` date NOT NULL,
  `Accorder` tinyint(4) NOT NULL,
  `id_Locateur` bigint(20) UNSIGNED NOT NULL,
  `id_Appartement` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_de_paiment_facture` date NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Montant` double(8,2) NOT NULL,
  `preuve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Recu` bigint(20) UNSIGNED NOT NULL,
  `id_Type_facture` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `immeubles`
--

CREATE TABLE `immeubles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom_Immeuble` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bloc` bigint(20) UNSIGNED NOT NULL,
  `Montant_Cotisation_Mensuelle` double(8,2) NOT NULL,
  `Montant_Disponible_En_Caisse` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `immeubles`
--

INSERT INTO `immeubles` (`id`, `Nom_Immeuble`, `id_bloc`, `Montant_Cotisation_Mensuelle`, `Montant_Disponible_En_Caisse`, `created_at`, `updated_at`) VALUES
(1, 'immeuble-sohaib', 1, 530.00, 0.00, '2020-10-21 17:33:33', '2020-10-21 17:33:33'),
(2, 'immeuble-Hicham', 1, 200.00, 0.00, '2020-10-21 21:46:35', '2020-10-21 21:46:35');

-- --------------------------------------------------------

--
-- Structure de la table `locataires`
--

CREATE TABLE `locataires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CIN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `locataires`
--

INSERT INTO `locataires` (`id`, `nom`, `prenom`, `email`, `email_verified_at`, `password`, `Tel`, `CIN`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sohaib', 'el mediouni', 'sohaib.elmediouni23@gmail.com', NULL, '1234', '0616091794', 'F592729', NULL, '2020-10-21 17:35:34', '2020-10-21 17:35:34');

-- --------------------------------------------------------

--
-- Structure de la table `locateurs`
--

CREATE TABLE `locateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CIN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nbr_Invite` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_18_003207_create_appartements_table', 1),
(2, '2020_10_18_003207_create_blocs_table', 1),
(3, '2020_10_18_003207_create_caisses_table', 1),
(4, '2020_10_18_003207_create_confirm_logments_table', 1),
(5, '2020_10_18_003207_create_factures_table', 1),
(6, '2020_10_18_003207_create_failed_jobs_table', 1),
(7, '2020_10_18_003207_create_immeubles_table', 1),
(8, '2020_10_18_003207_create_locataires_table', 1),
(9, '2020_10_18_003207_create_locateurs_table', 1),
(10, '2020_10_18_003207_create_recus_table', 1),
(11, '2020_10_18_003207_create_residences_table', 1),
(12, '2020_10_18_003207_create_syndics_table', 1),
(13, '2020_10_18_003207_create_type_factures_table', 1),
(14, '2020_10_18_003207_create_villes_table', 1),
(15, '2020_10_18_003209_add_foreign_keys_to_appartements_table', 1),
(16, '2020_10_18_003209_add_foreign_keys_to_blocs_table', 1),
(17, '2020_10_18_003209_add_foreign_keys_to_caisses_table', 1),
(18, '2020_10_18_003209_add_foreign_keys_to_confirm_logments_table', 1),
(19, '2020_10_18_003209_add_foreign_keys_to_factures_table', 1),
(20, '2020_10_18_003209_add_foreign_keys_to_immeubles_table', 1),
(21, '2020_10_18_003209_add_foreign_keys_to_residences_table', 1),
(22, '2020_10_18_003855_update_columns_caisses', 1),
(23, '2020_10_18_005033_add_columns_caisse', 1),
(24, '2020_10_21_181639_just_test_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `recus`
--

CREATE TABLE `recus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `residences`
--

CREATE TABLE `residences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ville` bigint(20) UNSIGNED NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_syndic` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `residences`
--

INSERT INTO `residences` (`id`, `nom_residence`, `id_ville`, `adresse`, `id_syndic`, `created_at`, `updated_at`) VALUES
(1, 'Residence-Hicham', 1, 'Adress 1, Quartier test', 1, NULL, NULL),
(2, 'Luz Beier', 10, '5845 Becker Ville\nKuvalisborough, KS 22105-1568', 20, NULL, NULL),
(5, 'Katelynn Heaney', 18, '96029 Mattie Curve Suite 426\nStoneport, SC 45219', 21, NULL, NULL),
(7, 'Miss Carole Deckow', 11, '42815 Buster Landing Apt. 069\nGloverton, CT 84300', 13, NULL, NULL),
(9, 'Trey McCullough', 17, '189 Christa Forges Suite 167\nNew Lexus, WA 66527-0716', 17, NULL, NULL),
(10, 'Caitlyn Mitchell', 2, '430 Blanca Corners\nVonhaven, AL 65093', 6, NULL, NULL),
(11, 'Prof. Aurelia Jacobs', 16, '365 Ward Valleys\nBayerstad, OR 82221', 16, NULL, NULL),
(12, 'Briana Bauch', 8, '635 Howe Mountain Suite 933\nVonRuedenberg, OK 27651', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `syndics`
--

CREATE TABLE `syndics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `syndics`
--

INSERT INTO `syndics` (`id`, `nom`, `prenom`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nom-syndic', 'prenom-syndic', 'syndic@gmail.com', NULL, 'test1234', NULL, NULL, NULL),
(2, 'Jadon Hoppe', 'Dickens', 'tito.runolfsdottir@gmail.com', NULL, '0=6Q|@/)H6)a^]', NULL, NULL, NULL),
(3, 'Ms. Jennifer DuBuque III', 'Brown', 'erdman.london@gmail.com', NULL, 'zl?9d<rT:}bB8_#gNo-i', NULL, NULL, NULL),
(4, 'Rita Greenholt', 'Fadel', 'zhammes@hotmail.com', NULL, '+/z|l7HRR9%*', NULL, NULL, NULL),
(5, 'Myah Langosh', 'Frami', 'toy.lucy@hotmail.com', NULL, 'z``IjSfL\"', NULL, NULL, NULL),
(6, 'Prof. Abe Satterfield', 'Bins', 'tremayne.stehr@trantow.com', NULL, 'B`\"8\\Bz', NULL, NULL, NULL),
(7, 'Ryley Wilkinson', 'Spinka', 'kristin82@hotmail.com', NULL, '\"kOkSt', NULL, NULL, NULL),
(8, 'Skyla Harris I', 'Lynch', 'everette78@upton.com', NULL, 't\"b\\Ti_=trAT\"chA(6c!', NULL, NULL, NULL),
(9, 'Rosemarie Bruen DDS', 'Skiles', 'purdy.scottie@hotmail.com', NULL, 'it%QUnB.', NULL, NULL, NULL),
(10, 'Annetta Wintheiser', 'Nader', 'tremayne01@hotmail.com', NULL, '~TG-(VPj\'', NULL, NULL, NULL),
(11, 'Pierce Bruen', 'Grant', 'kilback.jonatan@runolfsdottir.net', NULL, '=M>pYrALr`e[X]DLnZI', NULL, NULL, NULL),
(12, 'Frank Weimann V', 'Aufderhar', 'mabelle40@emmerich.biz', NULL, '~J[p?q%,/G,zQ!{>y7', NULL, NULL, NULL),
(13, 'Virgie Hegmann', 'Beier', 'jacklyn.kuvalis@gmail.com', NULL, 'Al|-=u6(o', NULL, NULL, NULL),
(14, 'Reynold Reinger', 'Davis', 'dallas26@windler.com', NULL, '!./j}RF', NULL, NULL, NULL),
(15, 'Clare Emard', 'Kunze', 'gregory.boehm@hotmail.com', NULL, 'JK2^CJG-gdBG9rJ', NULL, NULL, NULL),
(16, 'Alfonso Okuneva DDS', 'Bergnaum', 'sim04@yahoo.com', NULL, '>44*w%x}', NULL, NULL, NULL),
(17, 'Dr. Craig Altenwerth MD', 'Smith', 'rfarrell@orn.com', NULL, 'zS4^3dD03`!3nOC', NULL, NULL, NULL),
(18, 'Marietta Leuschke', 'Herzog', 'mafalda63@gmail.com', NULL, '%Z1zv}#PH;:ym+=N!', NULL, NULL, NULL),
(19, 'Dr. Buck Johnson III', 'Stoltenberg', 'rmurray@fritsch.com', NULL, '{%opbzo1]U,v#-,', NULL, NULL, NULL),
(20, 'Prof. Norbert Gottlieb III', 'Lakin', 'okon.rosemarie@hilpert.com', NULL, '\"HnC)W>UK.<Wh', NULL, NULL, NULL),
(21, 'Khalil Lynch', 'Schamberger', 'krajcik.leon@abbott.info', NULL, ']_6&!DBE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `testt`
--

CREATE TABLE `testt` (
  `string` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_factures`
--

CREATE TABLE `type_factures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom_ville`, `created_at`, `updated_at`) VALUES
(1, 'Rabat', NULL, NULL),
(2, 'Keeblerchester', NULL, NULL),
(3, 'East Britney', NULL, NULL),
(4, 'Port Reynamouth', NULL, NULL),
(5, 'Port Fredrick', NULL, NULL),
(6, 'Lueilwitzton', NULL, NULL),
(7, 'Lake Isac', NULL, NULL),
(8, 'Koeppville', NULL, NULL),
(9, 'East Jacintoview', NULL, NULL),
(10, 'Collinsborough', NULL, NULL),
(11, 'Millermouth', NULL, NULL),
(12, 'South Evangelineton', NULL, NULL),
(13, 'Caliland', NULL, NULL),
(14, 'Felipaside', NULL, NULL),
(15, 'North Darien', NULL, NULL),
(16, 'Emmerichfort', NULL, NULL),
(17, 'Willchester', NULL, NULL),
(18, 'Kemmerberg', NULL, NULL),
(19, 'Bufordside', NULL, NULL),
(20, 'Camrynfurt', NULL, NULL),
(21, 'Lake Margarette', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartements`
--
ALTER TABLE `appartements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appartements_id_immeuble_foreign` (`id_Immeuble`);

--
-- Index pour la table `blocs`
--
ALTER TABLE `blocs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blocs_id_residence_unique` (`id_residence`);

--
-- Index pour la table `caisses`
--
ALTER TABLE `caisses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caisses_id_locataire_foreign` (`id_Locataire`),
  ADD KEY `caisses_id_appartement_foreign` (`id_Appartement`);

--
-- Index pour la table `confirm_logments`
--
ALTER TABLE `confirm_logments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `confirm_logments_id_locateur_foreign` (`id_Locateur`),
  ADD KEY `confirm_logments_id_appartement_foreign` (`id_Appartement`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factures_id_recu_foreign` (`id_Recu`),
  ADD KEY `factures_id_type_facture_foreign` (`id_Type_facture`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `immeubles`
--
ALTER TABLE `immeubles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `immeubles_id_bloc_foreign` (`id_bloc`);

--
-- Index pour la table `locataires`
--
ALTER TABLE `locataires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `locateurs`
--
ALTER TABLE `locateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locateurs_email_unique` (`email`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recus`
--
ALTER TABLE `recus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `residences`
--
ALTER TABLE `residences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `residences_id_ville_unique` (`id_ville`),
  ADD UNIQUE KEY `residences_id_syndic_unique` (`id_syndic`);

--
-- Index pour la table `syndics`
--
ALTER TABLE `syndics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `syndics_email_unique` (`email`);

--
-- Index pour la table `type_factures`
--
ALTER TABLE `type_factures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartements`
--
ALTER TABLE `appartements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `blocs`
--
ALTER TABLE `blocs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `caisses`
--
ALTER TABLE `caisses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `confirm_logments`
--
ALTER TABLE `confirm_logments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `immeubles`
--
ALTER TABLE `immeubles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `locataires`
--
ALTER TABLE `locataires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `locateurs`
--
ALTER TABLE `locateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `recus`
--
ALTER TABLE `recus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `residences`
--
ALTER TABLE `residences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `syndics`
--
ALTER TABLE `syndics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `type_factures`
--
ALTER TABLE `type_factures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartements`
--
ALTER TABLE `appartements`
  ADD CONSTRAINT `appartements_id_immeuble_foreign` FOREIGN KEY (`id_Immeuble`) REFERENCES `immeubles` (`id`);

--
-- Contraintes pour la table `blocs`
--
ALTER TABLE `blocs`
  ADD CONSTRAINT `blocs_id_residence_foreign` FOREIGN KEY (`id_residence`) REFERENCES `residences` (`id`);

--
-- Contraintes pour la table `caisses`
--
ALTER TABLE `caisses`
  ADD CONSTRAINT `caisses_id_appartement_foreign` FOREIGN KEY (`id_Appartement`) REFERENCES `appartements` (`id`),
  ADD CONSTRAINT `caisses_id_locataire_foreign` FOREIGN KEY (`id_Locataire`) REFERENCES `locataires` (`id`);

--
-- Contraintes pour la table `confirm_logments`
--
ALTER TABLE `confirm_logments`
  ADD CONSTRAINT `confirm_logments_id_appartement_foreign` FOREIGN KEY (`id_Appartement`) REFERENCES `appartements` (`id`),
  ADD CONSTRAINT `confirm_logments_id_locateur_foreign` FOREIGN KEY (`id_Locateur`) REFERENCES `locateurs` (`id`);

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_id_recu_foreign` FOREIGN KEY (`id_Recu`) REFERENCES `recus` (`id`),
  ADD CONSTRAINT `factures_id_type_facture_foreign` FOREIGN KEY (`id_Type_facture`) REFERENCES `type_factures` (`id`);

--
-- Contraintes pour la table `immeubles`
--
ALTER TABLE `immeubles`
  ADD CONSTRAINT `immeubles_id_bloc_foreign` FOREIGN KEY (`id_bloc`) REFERENCES `blocs` (`id`);

--
-- Contraintes pour la table `residences`
--
ALTER TABLE `residences`
  ADD CONSTRAINT `residences_id_syndic_foreign` FOREIGN KEY (`id_syndic`) REFERENCES `syndics` (`id`),
  ADD CONSTRAINT `residences_id_ville_foreign` FOREIGN KEY (`id_ville`) REFERENCES `villes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
