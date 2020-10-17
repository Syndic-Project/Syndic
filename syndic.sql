-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 17 oct. 2020 à 23:59
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
(3, 'el mediouni 1', 1, 'Appartement', 3, 9, '2020-10-22', NULL, NULL),
(4, 'poo', 1, 'Bureau', 12, 19, '2020-10-14', NULL, NULL);

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
(1, 'AP19', 17, '2020-10-13 14:39:09', '2020-10-13 14:39:09');

-- --------------------------------------------------------

--
-- Structure de la table `caisses`
--

CREATE TABLE `caisses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Date_Paiment` date DEFAULT NULL,
  `Dernier_Mois_Paye` date DEFAULT NULL,
  `email` date DEFAULT NULL,
  `Nbr_Mois_Paye` date DEFAULT NULL,
  `MT_Paye` date DEFAULT NULL,
  `id_Locataire` bigint(20) UNSIGNED DEFAULT NULL,
  `id_Appartement` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `caisses`
--

INSERT INTO `caisses` (`id`, `Date_Paiment`, `Dernier_Mois_Paye`, `email`, `Nbr_Mois_Paye`, `MT_Paye`, `id_Locataire`, `id_Appartement`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-10-16 17:33:46', '2020-10-16 17:33:46'),
(2, NULL, NULL, NULL, NULL, NULL, 1, 2, '2020-10-16 17:33:46', '2020-10-16 17:33:46'),
(4, NULL, NULL, NULL, NULL, NULL, 4, 4, '2020-10-16 22:20:15', '2020-10-16 22:20:15'),
(5, NULL, NULL, NULL, NULL, NULL, 5, 3, '2020-10-16 22:20:25', '2020-10-16 22:20:25');

-- --------------------------------------------------------

--
-- Structure de la table `confirm_logments`
--

CREATE TABLE `confirm_logments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DateD` date NOT NULL,
  `DateF` date NOT NULL,
  `Accorder` tinyint(1) NOT NULL,
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
(1, 'EL MEDIOUNI', 1, 200.00, 0.00, '2020-10-14 15:08:08', '2020-10-14 15:08:08');

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
(3, 'ss', 'pp', 'sohaib.elmediouni23@gmail.com', NULL, 'sohaib elmediouni', '0616091794', 'F592729', NULL, '2020-10-16 22:19:12', '2020-10-16 22:19:12'),
(4, 'ss', 'pp', 'sohaib.elmediouni23@gmail.com', NULL, 'sohaibez1234', '0616091794', 'F592729', NULL, '2020-10-16 22:20:15', '2020-10-16 22:20:15'),
(5, 'ss', 'pp', 'sohaib.elmediouni23@gmail.com', NULL, 'ppp', '0616091794', 'F592729', NULL, '2020-10-16 22:20:25', '2020-10-16 22:20:25');

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_10_12_160804_create_syndics_table', 1),
(3, '2020_10_12_161141_create_villes_table', 2),
(4, '2020_10_12_161237_create_residences_table', 2),
(5, '2020_10_12_161452_create_blocs_table', 3),
(6, '2020_10_12_161720_create_immeubles_table', 4),
(7, '2020_10_14_145732_create_locataires_table', 5),
(8, '2020_10_14_150601_create_appartements_table', 6),
(9, '2020_10_15_010212_create_appartements_table', 7),
(10, '2020_10_16_153540_create_appartements_table', 8),
(11, '2020_10_16_153659_create_locataires_table', 8),
(12, '2020_10_16_180222_create_caisses_table', 9),
(13, '2020_10_16_183759_update_locataire_to_locataires_table', 10),
(14, '2020_10_17_170734_create_recus_table', 11),
(15, '2020_10_17_171042_create_type_factures_table', 11),
(16, '2020_10_17_171110_create_locateurs_table', 11),
(17, '2020_10_17_171152_create_confirm_logments_table', 11),
(18, '2020_10_17_171211_create_factures_table', 11);

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
(1, 'DOHA', 2, 'SIDIYAHYA', 1, NULL, NULL),
(10, 'sohaib el mediouni', 17, 'hd', 3, '2020-10-13 03:41:56', '2020-10-13 03:41:56'),
(14, 'mouhidine', 20, 'HAY EL MOUSTAKBAL RUE BOUCHIHA\r\nHASSAN N°13 SIDI YAHYA OUJDA', 6, '2020-10-13 14:16:22', '2020-10-13 14:16:22'),
(16, 'pooo', 21, 'pppp', 7, '2020-10-13 14:36:32', '2020-10-13 14:36:32'),
(17, 'poo', 19, 'hdhjbhbj', 8, '2020-10-13 14:39:09', '2020-10-13 14:39:09');

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
(1, 'sohaib', 'elmediouni', 'test@gmail.com', NULL, 'AZERTY1234', NULL, NULL, NULL),
(3, 'hicham', 'safih', 'ss@test.com', NULL, '1234', NULL, NULL, NULL),
(6, 'amine', 'haou', 'ss@bpo.com', NULL, 'test', NULL, NULL, NULL),
(7, 'pp', 'jn', 'n', NULL, 'i', NULL, NULL, NULL),
(8, 'j', 'O', 'HUIU', NULL, 'JN', NULL, NULL, NULL),
(9, 'bj', 'j', 'j', NULL, 'jh', NULL, NULL, NULL),
(10, 'jnerjf', 'njej', 'jkfrf', NULL, 'jde', NULL, NULL, NULL);

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
(1, 'Oudja', NULL, NULL),
(2, 'Agadir', NULL, NULL),
(3, 'Al Hocïema', NULL, NULL),
(4, 'Béni Mellal', NULL, NULL),
(5, 'Casablanca', NULL, NULL),
(6, 'El Jadida', NULL, NULL),
(7, 'Errachidia', NULL, NULL),
(8, 'Fès', NULL, NULL),
(9, 'Kénitra', NULL, NULL),
(10, 'Khénifra', NULL, NULL),
(11, 'Khouribga', NULL, NULL),
(12, 'Larache', NULL, NULL),
(13, 'Marrakech', NULL, NULL),
(14, 'Meknès', NULL, NULL),
(15, 'Nador', NULL, NULL),
(16, 'Ouarzazate', NULL, NULL),
(17, 'Oujda', NULL, NULL),
(18, 'Rabat', NULL, NULL),
(19, 'Safi', NULL, NULL),
(20, 'Salé', NULL, NULL),
(21, 'Settat', NULL, NULL),
(22, 'Tanger', NULL, NULL),
(23, 'Taza', NULL, NULL),
(24, 'Tétouan', NULL, NULL);

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
  ADD UNIQUE KEY `caisses_email_unique` (`email`),
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `blocs`
--
ALTER TABLE `blocs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `caisses`
--
ALTER TABLE `caisses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `locateurs`
--
ALTER TABLE `locateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `recus`
--
ALTER TABLE `recus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `residences`
--
ALTER TABLE `residences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `syndics`
--
ALTER TABLE `syndics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `type_factures`
--
ALTER TABLE `type_factures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
