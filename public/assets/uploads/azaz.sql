-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table si_anoc_bd.absence: ~0 rows (approximately)
/*!40000 ALTER TABLE `absence` DISABLE KEYS */;
/*!40000 ALTER TABLE `absence` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.adherent_race: ~0 rows (approximately)
/*!40000 ALTER TABLE `adherent_race` DISABLE KEYS */;
INSERT INTO `adherent_race` (`id`, `adherent_id`, `race_id`, `effectif`, `date_debut`, `date_fin`, `categorie`) VALUES
	(1, 1, 1, 30, '2020-10-21', NULL, 'Viande'),
	(2, 3, 5, 33, '2020-10-21', NULL, 'Viande');
/*!40000 ALTER TABLE `adherent_race` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.adhesion_eleveurs: ~6 rows (approximately)
/*!40000 ALTER TABLE `adhesion_eleveurs` DISABLE KEYS */;
INSERT INTO `adhesion_eleveurs` (`id`, `commune_id`, `groupement_id`, `eleveur_id`, `gerant_id`, `code`, `nom_fr`, `prenom_fr`, `num_cin`, `date_demande_adhesion`, `validite_cin`, `nom_ar`, `prenom_ar`, `adresse_fr`, `adresse_ar`, `type_adherent`, `date_saisie_secteur`, `personnel_saisie_secteur`, `num_pv_groupement`, `date_pv_groupement`, `lien_pv_groupement`, `num_reference_arrivee_secteur`, `date_reference_arrivee_secteur`, `num_reference_depart_secteur`, `date_reference_depart_secteur`, `num_reference_arrivee_siege`, `date_reference_arrivee_siege`, `decision_ca`, `num_decision_ca`, `date_decision_ca`, `lien_decision_ca`, `date_saisie_decision_ca`, `personnel_saisie_decision_ca`, `type_adhesion`, `sexe`, `adresse2_fr`, `adresse2_ar`, `cin_file`, `engagement_file`, `demande_file`, `photo`) VALUES
	(1, 2, 3, NULL, NULL, 'S-10033006', '321', '231', '321', '2020-10-21', '2020-10-21', '32', '13213', '21', '321', 'Eleveur', '2020-10-21', 'chef deparetement groupement', '12', NULL, 'f2bc2cadd2f364ac76008db3eae74f3e.jpeg', '321', '2020-10-21', '321', '2020-10-21', '321', '2020-10-21', NULL, NULL, NULL, NULL, NULL, NULL, 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 2, 7, NULL, NULL, 'S-30011006', '321', '231', '987987987', '2020-10-21', '2020-10-21', '32', '13213', '21', '321', 'Eleveur', '2020-10-21', 'chef deparetement groupement', '12', '2020-10-08', '34e804c75aef3f98fdc8eb7b39dec15b.jpeg', '321', '2020-10-21', '321', '2020-10-21', '321', '2020-10-21', NULL, NULL, NULL, NULL, NULL, NULL, 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 2, 2, NULL, NULL, 'S-1002001', 'aze', 'aze', 'eaz', '2020-10-21', '2020-10-23', 'aez', 'aez', 'ae', 'e', 'Eleveur', '2020-10-21', 'chef deparetement groupement', 'eza', '2020-10-08', '10a8eb4b88ef8c2002b9e03cedbab080.jpeg', 'aze', '2020-10-09', 'eaz', '2020-10-17', 'aze', '2020-10-08', NULL, NULL, NULL, NULL, NULL, NULL, 'Normal', NULL, 'aez', 'eaz', NULL, 'C:\\xampp\\tmp\\php44E0.tmp', 'C:\\xampp\\tmp\\php44CF.tmp', 'C:\\xampp\\tmp\\php44BF.tmp'),
	(4, 2, 7, NULL, NULL, 'S-30011006', 'aze', 'aze', 'eazee', '2020-10-21', '2020-10-23', 'aez', 'aez', 'aeeee', 'e', 'Eleveur', '2020-10-21', 'chef deparetement groupement', 'eza', '2020-10-08', '1c731b28940db3d18effab9bf126f151.jpeg', 'aze', '2020-10-09', 'eaz', '2020-10-17', 'aze', '2020-10-08', NULL, NULL, NULL, NULL, NULL, NULL, 'Normal', NULL, 'aez', 'eaz', 'C:\\xampp\\tmp\\php4AFA.tmp', 'C:\\xampp\\tmp\\php4B0C.tmp', 'C:\\xampp\\tmp\\php4AFB.tmp', 'C:\\xampp\\tmp\\php4AEA.tmp'),
	(5, 2, 5, NULL, NULL, 'S-20022006', 'aze', 'aze', 'eazeess', '2020-10-21', '2020-10-23', 'aez', 'aez', 'aeeee', 'e', 'Eleveur', '2020-10-22', 'chef deparetement groupement', 'eza', '2020-10-08', 'ee0d67420246ba6657ed4c46c51add5a.jpeg', 'aze', '2020-10-09', 'eaz', '2020-10-17', 'aze', '2020-10-08', 'Accepter', '321', '2020-10-23', '6eec6b953b910545b6715df45dc1e037.jpeg', '2020-10-23', 'chef deparetement groupement ', 'Normal', NULL, 'aez', 'eaz', NULL, NULL, NULL, NULL),
	(6, NULL, 15, 46, NULL, 'aze', 'eaz', 'zae', NULL, NULL, NULL, 'zae', 'eza', 'aze', 'aze', 'Eleveur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepter', '321', '2020-10-23', '6eec6b953b910545b6715df45dc1e037.jpeg', '2020-10-23', 'chef deparetement groupement ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, NULL, 3, 47, NULL, 'aze', 'eaz', 'zae', NULL, NULL, NULL, 'zae', 'eza', 'aze', 'aze', 'Eleveur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepter', '321', '2020-10-23', '6eec6b953b910545b6715df45dc1e037.jpeg', '2020-10-23', 'chef deparetement groupement ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 2, 11, NULL, NULL, 'S-111005555555551014', NULL, NULL, 'mehdi', NULL, NULL, NULL, NULL, '654', '65', 'Eleveur', '2020-10-25', 'technicien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Normal', NULL, '46', '54', 'b1c17d12b2a6dd430fb961bad8e7e0cb.jpeg', '9f861da302ace42821baf99564e83db0.jpeg', '7d7e3e190326ab9e1888e9c2a4868b38.jpeg', 'da9562c72df830802f5fb208f6cc9fe5.jpeg'),
	(9, NULL, 7, 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '123', 'Eleveur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `adhesion_eleveurs` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.affectation_recu_paiment: ~0 rows (approximately)
/*!40000 ALTER TABLE `affectation_recu_paiment` DISABLE KEYS */;
INSERT INTO `affectation_recu_paiment` (`id`, `personnel_id`, `date_affectation`, `num_recu_debut`, `num_recu_fin`, `obs`) VALUES
	(1, NULL, '2020-10-25', 'kmlk4\r\n', NULL, NULL);
/*!40000 ALTER TABLE `affectation_recu_paiment` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.affectation_technicien: ~0 rows (approximately)
/*!40000 ALTER TABLE `affectation_technicien` DISABLE KEYS */;
/*!40000 ALTER TABLE `affectation_technicien` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.alimentation_caisse_groupement: ~0 rows (approximately)
/*!40000 ALTER TABLE `alimentation_caisse_groupement` DISABLE KEYS */;
/*!40000 ALTER TABLE `alimentation_caisse_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.animateur_formation: ~0 rows (approximately)
/*!40000 ALTER TABLE `animateur_formation` DISABLE KEYS */;
/*!40000 ALTER TABLE `animateur_formation` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.animaux: ~0 rows (approximately)
/*!40000 ALTER TABLE `animaux` DISABLE KEYS */;
/*!40000 ALTER TABLE `animaux` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.annee_adhesion: ~0 rows (approximately)
/*!40000 ALTER TABLE `annee_adhesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `annee_adhesion` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.assurance: ~0 rows (approximately)
/*!40000 ALTER TABLE `assurance` DISABLE KEYS */;
/*!40000 ALTER TABLE `assurance` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.banque: ~2 rows (approximately)
/*!40000 ALTER TABLE `banque` DISABLE KEYS */;
INSERT INTO `banque` (`id`, `nom`) VALUES
	(3, 'lee'),
	(5, 'banque populaire');
/*!40000 ALTER TABLE `banque` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.bureau_groupement: ~0 rows (approximately)
/*!40000 ALTER TABLE `bureau_groupement` DISABLE KEYS */;
/*!40000 ALTER TABLE `bureau_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.caisse_groupment: ~15 rows (approximately)
/*!40000 ALTER TABLE `caisse_groupment` DISABLE KEYS */;
INSERT INTO `caisse_groupment` (`id`, `groupement_id`, `montant_actuel`) VALUES
	(1, 1, 0),
	(2, 2, 0),
	(3, 3, 1023),
	(4, 4, 0),
	(5, 5, 0),
	(6, 6, 0),
	(7, 7, 0),
	(8, 8, 0),
	(9, 9, 0),
	(10, 10, 0),
	(11, 11, 0),
	(12, 12, 0),
	(13, 13, 0),
	(14, 14, 0),
	(15, 15, 0),
	(16, 16, 0),
	(17, 17, 0),
	(18, 18, 360),
	(19, 19, 0);
/*!40000 ALTER TABLE `caisse_groupment` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.carnet_banque: ~6 rows (approximately)
/*!40000 ALTER TABLE `carnet_banque` DISABLE KEYS */;
INSERT INTO `carnet_banque` (`id`, `banque_groupement_id`, `nbrcheque`, `num_debut`, `num_fin`, `statut`) VALUES
	(1, 1, 50, '1', '22', 'Inactif'),
	(2, 1, 55, '123', '133', 'Actif'),
	(3, 2, 25, '123', '255', 'Actif'),
	(4, 2, 25, '123', '255', 'Actif'),
	(5, 5, 25, '1', '25', 'Actif'),
	(6, 6, 25, '12', '32', 'Actif');
/*!40000 ALTER TABLE `carnet_banque` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.categorie: ~0 rows (approximately)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.categorie_eleveur: ~0 rows (approximately)
/*!40000 ALTER TABLE `categorie_eleveur` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie_eleveur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.categorie_troupeau: ~0 rows (approximately)
/*!40000 ALTER TABLE `categorie_troupeau` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie_troupeau` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.chat_participant: ~2 rows (approximately)
/*!40000 ALTER TABLE `chat_participant` DISABLE KEYS */;
INSERT INTO `chat_participant` (`id`, `user_id`, `conversation_id`, `message_read_at`) VALUES
	(1, 3, 1, '2020-10-30 13:41:21.000000'),
	(2, 2, 1, '2020-10-30 13:41:36.000000');
/*!40000 ALTER TABLE `chat_participant` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.cheque: ~309 rows (approximately)
/*!40000 ALTER TABLE `cheque` DISABLE KEYS */;
INSERT INTO `cheque` (`id`, `carnet_id`, `num`, `etat`) VALUES
	(1, 2, '123', 'Utilisé'),
	(2, 2, '124', 'Utilisé'),
	(3, 2, '125', 'Utilisé'),
	(4, 2, '126', 'Utilisé'),
	(5, 2, '127', 'en cours'),
	(6, 2, '66666666666666666666', 'Utilisé'),
	(7, 2, '129', 'en cours'),
	(8, 2, '130', 'en cours'),
	(9, 2, '131', 'en cours'),
	(10, 2, '132', 'en cours'),
	(11, 2, '133', 'en cours'),
	(12, 3, '123', 'en cours'),
	(13, 3, '124', 'en cours'),
	(14, 3, '125', 'en cours'),
	(15, 3, '126', 'en cours'),
	(16, 3, '127', 'en cours'),
	(17, 3, '128', 'en cours'),
	(18, 3, '129', 'en cours'),
	(19, 3, '130', 'Annuler'),
	(20, 3, '131', 'Annuler'),
	(21, 3, '132', 'en cours'),
	(22, 3, '133', 'en cours'),
	(23, 3, '134', 'en cours'),
	(24, 3, '135', 'en cours'),
	(25, 3, '136', 'en cours'),
	(26, 3, '137', 'en cours'),
	(27, 3, '138', 'en cours'),
	(28, 3, '139', 'en cours'),
	(29, 3, '140', 'en cours'),
	(30, 3, '141', 'en cours'),
	(31, 3, '142', 'en cours'),
	(32, 3, '143', 'en cours'),
	(33, 3, '144', 'en cours'),
	(34, 3, '145', 'en cours'),
	(35, 3, '146', 'en cours'),
	(36, 3, '147', 'en cours'),
	(37, 3, '148', 'en cours'),
	(38, 3, '149', 'en cours'),
	(39, 3, '150', 'en cours'),
	(40, 3, '151', 'en cours'),
	(41, 3, '152', 'en cours'),
	(42, 3, '153', 'en cours'),
	(43, 3, '154', 'en cours'),
	(44, 3, '155', 'en cours'),
	(45, 3, '156', 'en cours'),
	(46, 3, '157', 'en cours'),
	(47, 3, '158', 'en cours'),
	(48, 3, '159', 'en cours'),
	(49, 3, '160', 'en cours'),
	(50, 3, '161', 'en cours'),
	(51, 3, '162', 'en cours'),
	(52, 3, '163', 'en cours'),
	(53, 3, '164', 'en cours'),
	(54, 3, '165', 'en cours'),
	(55, 3, '166', 'en cours'),
	(56, 3, '167', 'en cours'),
	(57, 3, '168', 'en cours'),
	(58, 3, '169', 'en cours'),
	(59, 3, '170', 'en cours'),
	(60, 3, '171', 'en cours'),
	(61, 3, '172', 'en cours'),
	(62, 3, '173', 'en cours'),
	(63, 3, '174', 'en cours'),
	(64, 3, '175', 'en cours'),
	(65, 3, '176', 'en cours'),
	(66, 3, '177', 'en cours'),
	(67, 3, '178', 'en cours'),
	(68, 3, '179', 'en cours'),
	(69, 3, '180', 'en cours'),
	(70, 3, '181', 'en cours'),
	(71, 3, '182', 'en cours'),
	(72, 3, '183', 'en cours'),
	(73, 3, '184', 'en cours'),
	(74, 3, '185', 'en cours'),
	(75, 3, '186', 'en cours'),
	(76, 3, '187', 'en cours'),
	(77, 3, '188', 'en cours'),
	(78, 3, '189', 'en cours'),
	(79, 3, '190', 'en cours'),
	(80, 3, '191', 'en cours'),
	(81, 3, '192', 'en cours'),
	(82, 3, '193', 'en cours'),
	(83, 3, '194', 'en cours'),
	(84, 3, '195', 'en cours'),
	(85, 3, '196', 'en cours'),
	(86, 3, '197', 'en cours'),
	(87, 3, '198', 'en cours'),
	(88, 3, '199', 'en cours'),
	(89, 3, '200', 'en cours'),
	(90, 3, '201', 'en cours'),
	(91, 3, '202', 'en cours'),
	(92, 3, '203', 'en cours'),
	(93, 3, '204', 'en cours'),
	(94, 3, '205', 'en cours'),
	(95, 3, '206', 'en cours'),
	(96, 3, '207', 'en cours'),
	(97, 3, '208', 'en cours'),
	(98, 3, '209', 'en cours'),
	(99, 3, '210', 'en cours'),
	(100, 3, '211', 'en cours'),
	(101, 3, '212', 'en cours'),
	(102, 3, '213', 'en cours'),
	(103, 3, '214', 'en cours'),
	(104, 3, '215', 'en cours'),
	(105, 3, '216', 'en cours'),
	(106, 3, '217', 'en cours'),
	(107, 3, '218', 'en cours'),
	(108, 3, '219', 'en cours'),
	(109, 3, '220', 'en cours'),
	(110, 3, '221', 'en cours'),
	(111, 3, '222', 'en cours'),
	(112, 3, '223', 'en cours'),
	(113, 3, '224', 'en cours'),
	(114, 3, '225', 'en cours'),
	(115, 3, '226', 'en cours'),
	(116, 3, '227', 'en cours'),
	(117, 3, '228', 'en cours'),
	(118, 3, '229', 'en cours'),
	(119, 3, '230', 'en cours'),
	(120, 3, '231', 'en cours'),
	(121, 3, '232', 'en cours'),
	(122, 3, '233', 'en cours'),
	(123, 3, '234', 'en cours'),
	(124, 3, '235', 'en cours'),
	(125, 3, '236', 'en cours'),
	(126, 3, '237', 'en cours'),
	(127, 3, '238', 'en cours'),
	(128, 3, '239', 'en cours'),
	(129, 3, '240', 'en cours'),
	(130, 3, '241', 'en cours'),
	(131, 3, '242', 'en cours'),
	(132, 3, '243', 'en cours'),
	(133, 3, '244', 'en cours'),
	(134, 3, '245', 'en cours'),
	(135, 3, '246', 'en cours'),
	(136, 3, '247', 'en cours'),
	(137, 3, '248', 'en cours'),
	(138, 3, '249', 'en cours'),
	(139, 3, '250', 'en cours'),
	(140, 3, '251', 'en cours'),
	(141, 3, '252', 'en cours'),
	(142, 3, '253', 'en cours'),
	(143, 3, '254', 'en cours'),
	(144, 3, '255', 'en cours'),
	(145, 4, '123', 'en cours'),
	(146, 4, '124', 'en cours'),
	(147, 4, '125', 'en cours'),
	(148, 4, '126', 'en cours'),
	(149, 4, '127', 'en cours'),
	(150, 4, '128', 'en cours'),
	(151, 4, '129', 'en cours'),
	(152, 4, '130', 'en cours'),
	(153, 4, '131', 'en cours'),
	(154, 4, '132', 'en cours'),
	(155, 4, '133', 'en cours'),
	(156, 4, '134', 'en cours'),
	(157, 4, '135', 'en cours'),
	(158, 4, '136', 'en cours'),
	(159, 4, '137', 'en cours'),
	(160, 4, '138', 'en cours'),
	(161, 4, '139', 'en cours'),
	(162, 4, '140', 'en cours'),
	(163, 4, '141', 'en cours'),
	(164, 4, '142', 'en cours'),
	(165, 4, '143', 'en cours'),
	(166, 4, '144', 'en cours'),
	(167, 4, '145', 'en cours'),
	(168, 4, '146', 'en cours'),
	(169, 4, '147', 'en cours'),
	(170, 4, '148', 'en cours'),
	(171, 4, '149', 'en cours'),
	(172, 4, '150', 'en cours'),
	(173, 4, '151', 'en cours'),
	(174, 4, '152', 'en cours'),
	(175, 4, '153', 'en cours'),
	(176, 4, '154', 'en cours'),
	(177, 4, '155', 'en cours'),
	(178, 4, '156', 'en cours'),
	(179, 4, '157', 'en cours'),
	(180, 4, '158', 'en cours'),
	(181, 4, '159', 'en cours'),
	(182, 4, '160', 'en cours'),
	(183, 4, '161', 'en cours'),
	(184, 4, '162', 'en cours'),
	(185, 4, '163', 'en cours'),
	(186, 4, '164', 'en cours'),
	(187, 4, '165', 'en cours'),
	(188, 4, '166', 'en cours'),
	(189, 4, '167', 'en cours'),
	(190, 4, '168', 'en cours'),
	(191, 4, '169', 'en cours'),
	(192, 4, '170', 'en cours'),
	(193, 4, '171', 'en cours'),
	(194, 4, '172', 'en cours'),
	(195, 4, '173', 'en cours'),
	(196, 4, '174', 'en cours'),
	(197, 4, '175', 'en cours'),
	(198, 4, '176', 'en cours'),
	(199, 4, '177', 'en cours'),
	(200, 4, '178', 'en cours'),
	(201, 4, '179', 'en cours'),
	(202, 4, '180', 'en cours'),
	(203, 4, '181', 'en cours'),
	(204, 4, '182', 'en cours'),
	(205, 4, '183', 'en cours'),
	(206, 4, '184', 'en cours'),
	(207, 4, '185', 'en cours'),
	(208, 4, '186', 'en cours'),
	(209, 4, '187', 'en cours'),
	(210, 4, '188', 'en cours'),
	(211, 4, '189', 'en cours'),
	(212, 4, '190', 'en cours'),
	(213, 4, '191', 'en cours'),
	(214, 4, '192', 'en cours'),
	(215, 4, '193', 'en cours'),
	(216, 4, '194', 'en cours'),
	(217, 4, '195', 'en cours'),
	(218, 4, '196', 'en cours'),
	(219, 4, '197', 'en cours'),
	(220, 4, '198', 'en cours'),
	(221, 4, '199', 'en cours'),
	(222, 4, '200', 'en cours'),
	(223, 4, '201', 'en cours'),
	(224, 4, '202', 'en cours'),
	(225, 4, '203', 'en cours'),
	(226, 4, '204', 'en cours'),
	(227, 4, '205', 'en cours'),
	(228, 4, '206', 'en cours'),
	(229, 4, '207', 'en cours'),
	(230, 4, '208', 'en cours'),
	(231, 4, '209', 'en cours'),
	(232, 4, '210', 'en cours'),
	(233, 4, '211', 'en cours'),
	(234, 4, '212', 'en cours'),
	(235, 4, '213', 'en cours'),
	(236, 4, '214', 'en cours'),
	(237, 4, '215', 'en cours'),
	(238, 4, '216', 'en cours'),
	(239, 4, '217', 'en cours'),
	(240, 4, '218', 'en cours'),
	(241, 4, '219', 'en cours'),
	(242, 4, '220', 'en cours'),
	(243, 4, '221', 'en cours'),
	(244, 4, '222', 'en cours'),
	(245, 4, '223', 'en cours'),
	(246, 4, '224', 'en cours'),
	(247, 4, '225', 'en cours'),
	(248, 4, '226', 'en cours'),
	(249, 4, '227', 'en cours'),
	(250, 4, '228', 'en cours'),
	(251, 4, '229', 'en cours'),
	(252, 4, '230', 'en cours'),
	(253, 4, '231', 'en cours'),
	(254, 4, '232', 'en cours'),
	(255, 4, '233', 'en cours'),
	(256, 4, '234', 'en cours'),
	(257, 4, '235', 'en cours'),
	(258, 4, '236', 'en cours'),
	(259, 4, '237', 'en cours'),
	(260, 4, '238', 'en cours'),
	(261, 4, '239', 'en cours'),
	(262, 4, '240', 'en cours'),
	(263, 4, '241', 'en cours'),
	(264, 4, '242', 'en cours'),
	(265, 4, '243', 'en cours'),
	(266, 4, '244', 'en cours'),
	(267, 4, '245', 'en cours'),
	(268, 4, '246', 'en cours'),
	(269, 4, '247', 'en cours'),
	(270, 4, '248', 'en cours'),
	(271, 4, '249', 'en cours'),
	(272, 4, '250', 'en cours'),
	(273, 4, '251', 'en cours'),
	(274, 4, '252', 'en cours'),
	(275, 4, '253', 'en cours'),
	(276, 4, '254', 'en cours'),
	(277, 4, '255', 'en cours'),
	(278, 5, '1', 'en cours'),
	(279, 5, '2', 'en cours'),
	(280, 5, '3', 'en cours'),
	(281, 5, '4', 'en cours'),
	(282, 5, '5', 'en cours'),
	(283, 5, '6', 'en cours'),
	(284, 5, '7', 'en cours'),
	(285, 5, '8', 'en cours'),
	(286, 5, '9', 'en cours'),
	(287, 5, '10', 'en cours'),
	(288, 5, '11', 'en cours'),
	(289, 5, '12', 'en cours'),
	(290, 5, '13', 'en cours'),
	(291, 5, '14', 'en cours'),
	(292, 5, '15', 'en cours'),
	(293, 5, '16', 'en cours'),
	(294, 5, '17', 'en cours'),
	(295, 5, '18', 'en cours'),
	(296, 5, '19', 'en cours'),
	(297, 5, '20', 'en cours'),
	(298, 5, '21', 'en cours'),
	(299, 5, '22', 'en cours'),
	(300, 5, '23', 'en cours'),
	(301, 5, '24', 'en cours'),
	(302, 5, '25', 'en cours'),
	(303, 6, '12', 'en cours'),
	(304, 6, '13', 'en cours'),
	(305, 6, '14', 'en cours'),
	(306, 6, '15', 'en cours'),
	(307, 6, '16', 'en cours'),
	(308, 6, '17', 'en cours'),
	(309, 6, '18', 'en cours'),
	(310, 6, '19', 'en cours'),
	(311, 6, '20', 'en cours'),
	(312, 6, '21', 'en cours'),
	(313, 6, '22', 'en cours'),
	(314, 6, '23', 'en cours'),
	(315, 6, '24', 'en cours'),
	(316, 6, '25', 'en cours'),
	(317, 6, '26', 'en cours'),
	(318, 6, '27', 'en cours'),
	(319, 6, '28', 'en cours'),
	(320, 6, '29', 'en cours'),
	(321, 6, '30', 'en cours'),
	(322, 6, '31', 'en cours'),
	(323, 6, '32', 'en cours');
/*!40000 ALTER TABLE `cheque` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.cnsm: ~0 rows (approximately)
/*!40000 ALTER TABLE `cnsm` DISABLE KEYS */;
/*!40000 ALTER TABLE `cnsm` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.cnsmanimaux: ~0 rows (approximately)
/*!40000 ALTER TABLE `cnsmanimaux` DISABLE KEYS */;
/*!40000 ALTER TABLE `cnsmanimaux` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.commune: ~0 rows (approximately)
/*!40000 ALTER TABLE `commune` DISABLE KEYS */;
INSERT INTO `commune` (`id`, `province_id`, `commune_ar`, `commune_fr`) VALUES
	(2, 1, 'بلدية - 2', 'Commune test-2');
/*!40000 ALTER TABLE `commune` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.compagne: ~0 rows (approximately)
/*!40000 ALTER TABLE `compagne` DISABLE KEYS */;
/*!40000 ALTER TABLE `compagne` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.compagne_grpmnt: ~0 rows (approximately)
/*!40000 ALTER TABLE `compagne_grpmnt` DISABLE KEYS */;
/*!40000 ALTER TABLE `compagne_grpmnt` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.compagne_secteur: ~0 rows (approximately)
/*!40000 ALTER TABLE `compagne_secteur` DISABLE KEYS */;
/*!40000 ALTER TABLE `compagne_secteur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.compte_banquaire: ~7 rows (approximately)
/*!40000 ALTER TABLE `compte_banquaire` DISABLE KEYS */;
INSERT INTO `compte_banquaire` (`id`, `banque_id`, `groupement_id`, `rib`, `agence`, `obs`, `date_debut`, `date_fin`, `attestation_rib`, `statut`, `num_rib`, `date_rib`, `arrivee_secteur`, `date_arrivee_secteur`, `depart_secteur`, `date_depart_secteur`, `arrivee_siege`, `date_arrive_siege`, `solde`, `delta`) VALUES
	(1, 5, 1, '123456', 'agence principal', NULL, '2020-09-30', '2020-10-15', '87324c7d527cd372b7f87fc2c095dc55.jpeg', 'Actif', 'atesstation', '2020-09-30', NULL, '2020-10-01', 'ds', '2020-10-29', 'as', '2020-10-21', 10000, 100),
	(2, 3, 3, '1234', '2', NULL, '2020-10-08', '2020-10-07', 'b1977d5ac3ba5dfae8dd183268ecd1af.jpeg', 'Actif', '453', '2020-10-14', NULL, '2020-10-20', '123', '2020-10-20', '123', '2020-10-06', 10000, 3720),
	(3, 3, 5, '123', '', NULL, '2020-10-01', '2020-10-08', '82604c08ce49d3c18abb44dd31ab2be0.jpeg', 'Actif', 'atesstation', '2020-10-07', NULL, '2020-10-13', '123', '2020-10-14', '123', '2020-10-07', 10000, 100),
	(4, 5, 3, '321', '', NULL, '2020-10-06', '2020-10-25', NULL, 'Inactif', '321', '2001-12-31', '', '2001-12-31', '321321321321', '2001-12-31', '321321321', '2001-12-31', 10000, 100),
	(5, 5, 4, '321', '321', NULL, '2020-10-25', '2020-10-25', NULL, 'Actif', '321', '2001-12-31', NULL, '2060-02-13', '3213213', '2060-02-13', '32132132', '2060-02-13', 7039, 100),
	(6, 5, 18, '321', '321', NULL, '2020-10-07', '2020-10-25', NULL, 'Actif', '321', '3213-01-31', NULL, '2001-12-31', '321321321', '2060-01-31', '321', '2060-01-31', 9700, 100),
	(7, 5, 19, '321', 'aze', NULL, '2020-10-14', '2020-10-25', NULL, 'Actif', '3213213', '0021-12-31', NULL, '2001-12-31', '321', '2001-12-31', '321321', '0213-12-31', 10000, 100);
/*!40000 ALTER TABLE `compte_banquaire` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.conseil_anoc: ~0 rows (approximately)
/*!40000 ALTER TABLE `conseil_anoc` DISABLE KEYS */;
/*!40000 ALTER TABLE `conseil_anoc` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.conversation: ~0 rows (approximately)
/*!40000 ALTER TABLE `conversation` DISABLE KEYS */;
INSERT INTO `conversation` (`id`, `last_message_id`) VALUES
	(1, 2);
/*!40000 ALTER TABLE `conversation` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.coordonnees_anoc: ~23 rows (approximately)
/*!40000 ALTER TABLE `coordonnees_anoc` DISABLE KEYS */;
INSERT INTO `coordonnees_anoc` (`id`, `property`, `value`, `observation`) VALUES
	(1, 'NomAbrege', 'ANOC', NULL),
	(2, 'nomCompletFR', 'Association Nationale Ovine et Caprine', NULL),
	(3, 'nomCompletAR', 'الجمعية الوطنية لمربي الأغنام والماعز', NULL),
	(4, 'fixe1', '+212 537 69 08 02', NULL),
	(5, 'fixe2', '+212 537 69 08 03', NULL),
	(6, 'fax', '+212 537 23 13 71', NULL),
	(7, 'email', 'contact@anoc.ma', NULL),
	(8, 'adressefr', 'Résidence Maryam, Immeuble B, Appartement 10 et 27 457, Avenue Hassan II – Agdal – Rabat', NULL),
	(9, 'adressear', 'إقامة مريم، عمارة ب، شقة 10، 457 شارع الحسن الثاني ــ أكدال ــ الرباط', NULL),
	(10, 'siteweb', 'www.anoc.ma', NULL),
	(11, 'fixe3', NULL, NULL),
	(12, 'fax2', NULL, NULL),
	(13, 'email2', NULL, NULL),
	(14, 'ice_anoc', '1826279000029', NULL),
	(15, 'nom_complet_president', 'Mr Mejdoubi Abderrahmane', NULL),
	(16, 'cin_president', 'FH66', NULL),
	(17, 'nom_comple_directeur_general', 'Mr CHATIBI Said', NULL),
	(18, 'cin_directeur_general', 'F00000000', NULL),
	(19, 'nomCompletAM', 'Nom Anoc en langue bérbére Tifinagh ', NULL),
	(20, 'decretDebut', '2-88-189', NULL),
	(21, 'decretCompletion', '2-12-241', NULL),
	(22, 'dateDecretDebut', '11 Chaabane 1408 (30 Mars 1988)', NULL),
	(23, 'dateDecretCompletion', '1er Rajab 1433 (23 Mai 2012)', NULL);
/*!40000 ALTER TABLE `coordonnees_anoc` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.demande_document: ~0 rows (approximately)
/*!40000 ALTER TABLE `demande_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `demande_document` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.departement: ~0 rows (approximately)
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depense_banque: ~7 rows (approximately)
/*!40000 ALTER TABLE `depense_banque` DISABLE KEYS */;
INSERT INTO `depense_banque` (`id`, `compte_banquaire_id`, `mois`, `rubrique`, `type_document`, `num_cheque`, `date`, `piece_jointe`, `montant_ht`, `tva`, `montant_ttc`, `remarque`, `date_banque`, `date_accord`, `ref_accord`, `rubrique_comtable`, `num_compte`, `personnel_saisie`, `date_saisie`, `comptable_saisie`, `date_comptable_saisie`) VALUES
	(3, 2, 'Octobre', NULL, NULL, '123', '2020-10-07', NULL, 321, 321, 1000, 'Annulé', NULL, NULL, NULL, NULL, NULL, 'technicien@anoc.ma', '2020-10-17', NULL, NULL),
	(4, 2, 'Octobre', '1123', NULL, '321', '2020-10-16', NULL, 321, 321, 321, 'En cours', NULL, NULL, NULL, NULL, NULL, 'technicien@anoc.ma', '2020-10-25', NULL, NULL),
	(5, 2, 'Octobre', '1123', NULL, '321', '2020-10-10', NULL, 30, 0, 50, 'En cours', NULL, NULL, NULL, NULL, NULL, 'technicien@anoc.ma', '2020-10-27', NULL, NULL),
	(6, 6, 'Octobre', 'nm88', NULL, '321', '2020-10-30', NULL, 300, 300, 300, 'En cours', NULL, NULL, NULL, NULL, NULL, 'technicien@anoc.ma', '2020-10-30', NULL, NULL),
	(7, 6, 'Octobre', 'nm88', NULL, '321', '2020-10-30', NULL, 300, 300, 300, 'En cours', NULL, NULL, NULL, NULL, NULL, 'technicien@anoc.ma', '2020-10-30', NULL, NULL),
	(8, 5, 'Octobre', 'Carburant', NULL, '', '2020-10-04', NULL, 987, 987, 987, 'En cours', NULL, '2020-10-09', NULL, NULL, '1111', 'technicien@anoc.ma', '2020-10-30', NULL, NULL),
	(9, 5, 'Octobre', 'Carburant', NULL, '', '2020-10-04', 'b7155801e00cadede77ef5246c8e06b4.jpeg', 987, 987, 987, 'En cours', NULL, '2020-10-09', 'f73a19199da7eb1d8da5ec0a04211d04.jpeg', NULL, '1111', 'technicien@anoc.ma', '2020-10-30', NULL, NULL),
	(10, 5, 'Octobre', 'Carburant', NULL, '126', '2020-10-04', 'fe7d4dcaede10c2284039a741784fb74.jpeg', 987, 987, 987, 'En cours', NULL, '2020-10-09', '6a661e60df828b9728efff25ebbf9eac.jpeg', NULL, '1111', 'technicien@anoc.ma', '2020-10-30', NULL, NULL);
/*!40000 ALTER TABLE `depense_banque` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depense_caisse: ~5 rows (approximately)
/*!40000 ALTER TABLE `depense_caisse` DISABLE KEYS */;
INSERT INTO `depense_caisse` (`id`, `caisse_groupment_id`, `mois`, `type_document`, `date_depense`, `fournisseur`, `num_compte_rubrique`, `num_document`, `piece_jointe`, `taux_tva`, `montant_tva`, `montant_ht`, `montant_ttc`, `remarque`, `personnel_saisie`, `date_saisie`, `date_depense_comptable`, `num_compte_rubrique_comptable`, `date_cheque`, `obs`, `status`) VALUES
	(1, 4, 'Octobre', 'Procès Verbal', '2020-10-15', 'aze', '1111', '888', '5effb32d70475b113601001ee81bb09e.jpeg', 20, 5, 6, 45, NULL, 'technicien@anoc.ma', '2020-10-17', NULL, NULL, '2020-10-23', NULL, 'En cours'),
	(2, 4, 'Octobre', 'Facture', '2020-10-28', 'lhaj 7med', '1111', 'azezae', '8098517e565ce62390750c5bf91f4cb9.jpeg', 20, 12, 321, 321, NULL, 'technicien@anoc.ma', '2020-10-17', NULL, NULL, '2020-10-22', NULL, 'En cours'),
	(3, 3, 'Octobre', 'Procès Verbal', '2020-10-22', '654', '1111', '654', 'e164da4fe893d326db13f186e3b887fc.jpeg', 20, 500, 25, 888, NULL, 'technicien@anoc.ma', '2020-10-19', NULL, NULL, '2020-10-19', NULL, 'En cours,null'),
	(4, 3, 'Novembre', 'Procès Verbal', '2020-11-27', 'lib', '1123', 'aze', 'c8fdb6bf9efdeb691139862e0aa64ea1.jpeg', 20, 500, 500, 500, NULL, 'technicien@anoc.ma', '2020-11-01', NULL, NULL, '2020-11-09', NULL, 'En cours,null'),
	(5, 3, 'Novembre', 'Facture', '0002-02-22', '23', '1111', '22', 'd5230902d28a53c5ce3aa7ed51c09749.jpeg', 20, 1, 3, 3, NULL, 'technicien@anoc.ma', '2020-11-01', NULL, NULL, '2020-11-20', NULL, 'En cours,null');
/*!40000 ALTER TABLE `depense_caisse` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depot_groupement: ~0 rows (approximately)
/*!40000 ALTER TABLE `depot_groupement` DISABLE KEYS */;
/*!40000 ALTER TABLE `depot_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depot_medic_groupement: ~0 rows (approximately)
/*!40000 ALTER TABLE `depot_medic_groupement` DISABLE KEYS */;
/*!40000 ALTER TABLE `depot_medic_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depot_medic_secteur: ~0 rows (approximately)
/*!40000 ALTER TABLE `depot_medic_secteur` DISABLE KEYS */;
/*!40000 ALTER TABLE `depot_medic_secteur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depot_medic_technicien: ~0 rows (approximately)
/*!40000 ALTER TABLE `depot_medic_technicien` DISABLE KEYS */;
/*!40000 ALTER TABLE `depot_medic_technicien` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depot_secteur: ~0 rows (approximately)
/*!40000 ALTER TABLE `depot_secteur` DISABLE KEYS */;
/*!40000 ALTER TABLE `depot_secteur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.depot_technicien: ~0 rows (approximately)
/*!40000 ALTER TABLE `depot_technicien` DISABLE KEYS */;
/*!40000 ALTER TABLE `depot_technicien` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.diplome: ~0 rows (approximately)
/*!40000 ALTER TABLE `diplome` DISABLE KEYS */;
/*!40000 ALTER TABLE `diplome` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.doctrine_migration_versions: ~0 rows (approximately)
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.document: ~0 rows (approximately)
/*!40000 ALTER TABLE `document` DISABLE KEYS */;
/*!40000 ALTER TABLE `document` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.document_externe: ~0 rows (approximately)
/*!40000 ALTER TABLE `document_externe` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_externe` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.document_type: ~0 rows (approximately)
/*!40000 ALTER TABLE `document_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_type` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.doc_personnel: ~0 rows (approximately)
/*!40000 ALTER TABLE `doc_personnel` DISABLE KEYS */;
/*!40000 ALTER TABLE `doc_personnel` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.droit_conge: ~0 rows (approximately)
/*!40000 ALTER TABLE `droit_conge` DISABLE KEYS */;
/*!40000 ALTER TABLE `droit_conge` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.droit_cotisation: ~0 rows (approximately)
/*!40000 ALTER TABLE `droit_cotisation` DISABLE KEYS */;
/*!40000 ALTER TABLE `droit_cotisation` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.droit_financier_grpt: ~0 rows (approximately)
/*!40000 ALTER TABLE `droit_financier_grpt` DISABLE KEYS */;
/*!40000 ALTER TABLE `droit_financier_grpt` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.droit_fonctionement_complexe: ~35 rows (approximately)
/*!40000 ALTER TABLE `droit_fonctionement_complexe` DISABLE KEYS */;
INSERT INTO `droit_fonctionement_complexe` (`id`, `race_id`, `groupement_id`, `nbr_de`, `nbr_a`, `montant`, `type`, `date_debut`, `date_fin`, `categorie`) VALUES
	(15, 1, 3, NULL, NULL, 10, 'Taux Complexe', '2020-10-15', '2020-10-16', 'Viande'),
	(16, 2, 3, NULL, NULL, 20, 'Taux Complexe', '2020-10-15', '2020-10-16', 'Viande'),
	(17, 3, 3, NULL, NULL, 30, 'Taux Complexe', '2020-10-15', '2020-10-16', 'Viande'),
	(18, 4, 3, NULL, NULL, 40, 'Taux Complexe', '2020-10-15', '2020-10-16', 'Lait'),
	(19, 5, 3, NULL, NULL, 50, 'Taux Complexe', '2020-10-15', '2020-10-16', 'Lait'),
	(20, 6, 3, NULL, NULL, 60, 'Taux Complexe', '2020-10-15', '2020-10-16', 'Viande'),
	(21, 1, 4, 1, 100, 100, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(22, 1, 4, 101, 200, 200, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(23, 1, 4, 201, 300, 300, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(24, 1, 4, 301, 400, 400, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(25, 2, 4, 1, 100, 100, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(26, 2, 4, 101, 200, 200, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(27, 2, 4, 201, 300, 300, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(28, 2, 4, 301, 400, 400, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(29, 3, 4, 1, 100, 100, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(30, 3, 4, 101, 200, 200, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(31, 3, 4, 201, 300, 300, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(32, 3, 4, 301, 400, 400, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(33, 4, 4, 1, 100, 100, 'Baréme Complexe', '2020-10-15', NULL, 'Lait'),
	(34, 4, 4, 101, 200, 200, 'Baréme Complexe', '2020-10-15', NULL, 'Lait'),
	(35, 4, 4, 201, 300, 300, 'Baréme Complexe', '2020-10-15', NULL, 'Lait'),
	(36, 4, 4, 301, 400, 400, 'Baréme Complexe', '2020-10-15', NULL, 'Lait'),
	(37, 4, 4, 1, 100, 100, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(38, 4, 4, 101, 200, 200, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(39, 4, 4, 201, 300, 300, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(40, 4, 4, 301, 400, 400, 'Baréme Complexe', '2020-10-15', NULL, 'Viande'),
	(41, 1, 3, NULL, NULL, 10, 'Taux Complexe', '2020-10-16', NULL, 'Viande'),
	(42, 2, 3, NULL, NULL, 20, 'Taux Complexe', '2020-10-16', NULL, 'Viande'),
	(43, 3, 3, NULL, NULL, 30, 'Taux Complexe', '2020-10-16', NULL, 'Viande'),
	(44, 4, 3, NULL, NULL, 40, 'Taux Complexe', '2020-10-16', NULL, 'Lait'),
	(45, 5, 3, NULL, NULL, 50, 'Taux Complexe', '2020-10-16', NULL, 'Lait'),
	(46, 6, 3, NULL, NULL, 60, 'Taux Complexe', '2020-10-16', NULL, 'Lait'),
	(47, 4, 3, NULL, NULL, 70, 'Taux Complexe', '2020-10-16', NULL, 'Viande'),
	(48, 5, 3, NULL, NULL, 80, 'Taux Complexe', '2020-10-16', NULL, 'Viande'),
	(49, 6, 3, NULL, NULL, 90, 'Taux Complexe', '2020-10-16', NULL, 'Viande');
/*!40000 ALTER TABLE `droit_fonctionement_complexe` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.droit_fonctionement_simple: ~4 rows (approximately)
/*!40000 ALTER TABLE `droit_fonctionement_simple` DISABLE KEYS */;
INSERT INTO `droit_fonctionement_simple` (`id`, `groupement_id`, `nbr_de`, `nbr_a`, `montant`, `type`, `categorie`, `date_debut`, `date_fin`) VALUES
	(1, 1, -1, -1, 0, 'Taux Fixe', 'Viande', '2020-10-22', NULL),
	(2, 1, NULL, NULL, 0, 'Taux Fixe', 'Lait', '2020-10-22', NULL),
	(3, 1, -1, -1, 0, 'Taux Fixe', 'Viande', '2020-10-22', NULL),
	(4, 1, NULL, NULL, 0, 'Taux Fixe', 'Lait', '2020-10-22', NULL);
/*!40000 ALTER TABLE `droit_fonctionement_simple` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.droit_fonctionnement_decision: ~2 rows (approximately)
/*!40000 ALTER TABLE `droit_fonctionnement_decision` DISABLE KEYS */;
INSERT INTO `droit_fonctionnement_decision` (`id`, `groupement_id`, `date_debut`, `date_fin`, `num_pv`, `date_pv`, `fichier_pv`, `num_decision`, `date_decision`, `decision_fichier`) VALUES
	(1, 1, '2020-10-22', '2020-10-22', '987', '2020-10-03', '7005a06bd07648bb2ea41a1b74f39626.jpeg', '456', '2020-10-17', '1b88ae70562772826ae61a31b168844e.jpeg'),
	(2, 1, '2020-10-22', NULL, '987', '2020-10-03', 'e541b2c0d746f0ba6de7906135a609b5.jpeg', '456', '2020-10-17', '070eaea266676d412789bfe19d6909b3.jpeg');
/*!40000 ALTER TABLE `droit_fonctionnement_decision` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.duree_re_adhesion: ~0 rows (approximately)
/*!40000 ALTER TABLE `duree_re_adhesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `duree_re_adhesion` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.eleveur: ~47 rows (approximately)
/*!40000 ALTER TABLE `eleveur` DISABLE KEYS */;
INSERT INTO `eleveur` (`id`, `commune_id`, `groupement_id`, `statut_eleveur_id`, `position_eleveur_id`, `gerant_pm_id`, `code`, `nom_fr`, `prenom_fr`, `num_cin`, `date_adhesion`, `categorie_ovin`, `categorie_caprin`, `validite_cin`, `nom_ar`, `prenom_ar`, `adresse_fr`, `adresse_ar`, `type_adherent`, `date_debut`, `adresse2_fr`, `adresse2_ar`, `photo`, `demande_file`, `engagement_file`, `cin_file`) VALUES
	(1, NULL, 11, 6, 4, NULL, 'S-11100555551010', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Selectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Eleveur', '2015-04-25', '213', '123', 'C:\\xampp\\tmp\\phpFCBE.tmp', 'C:\\xampp\\tmp\\phpFCD0.tmp', 'C:\\xampp\\tmp\\phpFCBF.tmp', 'C:\\xampp\\tmp\\phpFCAD.tmp'),
	(2, NULL, 11, 6, 1, NULL, 'S-111005555551011', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, NULL, 11, 6, 1, NULL, NULL, 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Selectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Eleveur', '2015-04-25', 'zerezze', 'ezrrze', NULL, NULL, NULL, NULL),
	(4, NULL, 11, 6, 1, NULL, 'S-11100555555551013', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(5, NULL, 11, 6, 4, NULL, 'S-1001005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(6, NULL, 15, 6, 4, NULL, 'S-1002001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(7, NULL, 15, 6, 4, NULL, 'S-1002002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(8, NULL, 15, 6, 1, NULL, 'S-1002003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, NULL, 15, 6, 1, NULL, 'S-1002004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(10, NULL, 15, 6, 1, NULL, 'S-1002005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(11, NULL, 18, 6, 1, NULL, 'S-1003001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(12, NULL, 19, 6, 1, NULL, 'S-1003002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(13, NULL, 18, 6, 1, NULL, 'S-1003003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(14, NULL, 19, 6, 1, NULL, 'S-1003004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(15, NULL, 18, 6, 1, NULL, 'S-1003005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(16, NULL, 4, 6, 1, NULL, 'S-2001001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(17, NULL, 4, 6, 1, NULL, 'S-2001002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(18, NULL, 4, 6, 1, NULL, 'S-2001003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(19, NULL, 4, 6, 1, NULL, 'S-2001004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(20, NULL, 4, 6, 1, NULL, 'S-2001005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(21, NULL, 5, 6, 1, NULL, 'S-2002001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(22, NULL, 5, 6, 1, NULL, 'S-2002002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(23, NULL, 5, 6, 1, NULL, 'S-2002003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(24, NULL, 5, 6, 1, NULL, 'S-2002004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(25, NULL, 5, 6, 1, NULL, 'S-2002005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(26, NULL, 6, 6, 1, NULL, 'S-2003001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(27, NULL, 6, 6, 1, NULL, 'S-2003002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(28, NULL, 6, 6, 1, NULL, 'S-2003003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(29, NULL, 6, 6, 1, NULL, 'S-2003004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(30, NULL, 6, 6, 1, NULL, 'S-2003005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(31, NULL, 7, 6, 1, NULL, 'S-3001001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(32, NULL, 7, 6, 1, NULL, 'S-3001002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(33, NULL, 7, 6, 1, NULL, 'S-3001003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(34, NULL, 7, 6, 1, NULL, 'S-3001004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(35, NULL, 7, 6, 1, NULL, 'S-3001005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(36, NULL, 8, 6, 1, NULL, 'S-3002001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(37, NULL, 8, 6, 1, NULL, 'S-3002002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(38, NULL, 8, 6, 1, NULL, 'S-3002003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(39, NULL, 8, 6, 1, NULL, 'S-3002004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(40, NULL, 8, 6, 1, NULL, 'S-3002005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(41, NULL, 9, 6, 1, NULL, 'S-3003001', 'Nom-Elvr-1', 'Prenom-Elvr-1', 'Cin-1', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '1-الاسم', '1-الكنية', 'Adresse , Rue 1', '1عنوان الشارع', 'Type-Adhérent-1', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(42, NULL, 9, 6, 1, NULL, 'S-3003002', 'Nom-Elvr-2', 'Prenom-Elvr-2', 'Cin-2', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '2-الاسم', '2-الكنية', 'Adresse , Rue 2', '2عنوان الشارع', 'Type-Adhérent-2', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(43, NULL, 9, 6, 1, NULL, 'S-3003003', 'Nom-Elvr-3', 'Prenom-Elvr-3', 'Cin-3', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '3-الاسم', '3-الكنية', 'Adresse , Rue 3', '3عنوان الشارع', 'Type-Adhérent-3', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(44, NULL, 9, 6, 1, NULL, 'S-3003004', 'Nom-Elvr-4', 'Prenom-Elvr-4', 'Cin-4', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '4-الاسم', '4-الكنية', 'Adresse , Rue 4', '4عنوان الشارع', 'Type-Adhérent-4', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(45, NULL, 9, 6, 1, NULL, 'S-3003005', 'Nom-Elvr-5', 'Prenom-Elvr-5', 'Cin-5', '2017-04-25', 'Sélectionneur', 'Multiplicateur', '2027-07-28', '5-الاسم', '5-الكنية', 'Adresse , Rue 5', '5عنوان الشارع', 'Type-Adhérent-5', '2015-04-25', NULL, NULL, NULL, NULL, NULL, NULL),
	(46, 2, 15, 1, 5, NULL, 'aze', 'eaz', 'zae', 'zae', '2020-10-16', 'Multiplicateur', 'Multiplicateur', '2020-10-17', 'zae', 'eza', 'aze', 'aze', 'Eleveur', '2020-10-24', 'eaz', 'zae', NULL, NULL, NULL, NULL),
	(47, 2, 19, 1, 5, NULL, 'aze', 'eaz', 'zae', 'zae', '2020-10-16', 'Multiplicateur', 'Multiplicateur', '2020-10-17', 'zae', 'eza', 'aze', 'aze', 'Eleveur', '2020-10-24', 'eaz', 'zae', NULL, NULL, NULL, NULL),
	(48, 2, 5, 7, 5, NULL, 'S-20022006', 'aze', 'aze', 'eazeess', '2020-10-21', NULL, NULL, NULL, 'aez', 'aez', 'aeeee', 'e', 'Eleveur', '2020-10-21', NULL, NULL, NULL, NULL, NULL, NULL),
	(49, NULL, 15, 7, 5, NULL, 'aze', 'eaz', 'zae', NULL, NULL, NULL, NULL, NULL, 'zae', 'eza', 'aze', 'aze', 'Eleveur', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(50, NULL, 3, 7, 5, NULL, 'aze', 'eaz', 'zae', NULL, NULL, NULL, NULL, NULL, 'zae', 'eza', 'aze', 'aze', 'Eleveur', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(51, 2, 7, 3, 5, NULL, NULL, NULL, NULL, '231', NULL, 'Selectionneur', 'Selectionneur', NULL, NULL, NULL, '123', '123', 'Eleveur', NULL, '123', '123', '40ec9a32ad47de67b1efe61be5111245.jpeg', NULL, NULL, NULL);
/*!40000 ALTER TABLE `eleveur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.eleveur_animaux: ~0 rows (approximately)
/*!40000 ALTER TABLE `eleveur_animaux` DISABLE KEYS */;
/*!40000 ALTER TABLE `eleveur_animaux` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.eleveur_fichier: ~2 rows (approximately)
/*!40000 ALTER TABLE `eleveur_fichier` DISABLE KEYS */;
INSERT INTO `eleveur_fichier` (`id`, `eleveur_id`, `adherent_id`, `filename`, `created_at`) VALUES
	(1, 51, NULL, 'faa3e5a42e33f147ca79f48949058df4.jpeg', '2020-10-26 18:46:00.923419'),
	(2, 51, NULL, '6c7bfbc806f7ac5a710d9916644ad44e.jpeg', '2020-10-26 18:46:00.994388'),
	(3, 51, NULL, 'b8a3907fa122136a8e542f1b5266a11b.png', '2020-10-26 18:46:01.504235');
/*!40000 ALTER TABLE `eleveur_fichier` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.eleveur_intervention: ~0 rows (approximately)
/*!40000 ALTER TABLE `eleveur_intervention` DISABLE KEYS */;
/*!40000 ALTER TABLE `eleveur_intervention` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.eleveur_paiment_droit: ~4 rows (approximately)
/*!40000 ALTER TABLE `eleveur_paiment_droit` DISABLE KEYS */;
INSERT INTO `eleveur_paiment_droit` (`id`, `groupement_id`, `eleveur_id`, `versement_banque_id`, `date_versement`, `montant_droit_fonctionnement`, `montant_droit_cotisation`, `montantautre_droit`, `nbr_femelle_ovin`, `nbr_femelle_caprin`, `annee`, `num_recu`, `date_recu`, `obs`, `technicien`, `label`) VALUES
	(76, 3, 11, 5, '2020-10-27', 120, 20, NULL, 1885, 5, 2020, NULL, NULL, NULL, 'technicien ', NULL),
	(77, 3, 12, 5, NULL, 0, 20, NULL, 6, 0, 2019, '77', '2020-10-07', NULL, 'technicien ', NULL),
	(78, 3, 13, 10, NULL, 4000, 20, NULL, 32, 100, 2020, NULL, NULL, NULL, 'technicien ', NULL),
	(79, 3, 14, NULL, NULL, 200, 20, NULL, 0, 5, 2019, '79', '2020-10-15', NULL, 'technicien ', NULL);
/*!40000 ALTER TABLE `eleveur_paiment_droit` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.eleveur_race: ~86 rows (approximately)
/*!40000 ALTER TABLE `eleveur_race` DISABLE KEYS */;
INSERT INTO `eleveur_race` (`id`, `eleveur_id`, `race_id`, `categorie_troupeau_id`, `effectif`, `date_debut`, `date_fin`, `categorie`) VALUES
	(1, 11, 4, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(2, 11, 3, NULL, 2, '2020-10-16', '2020-10-16', 'Viande'),
	(3, 11, 4, NULL, 2, '2020-10-16', '2020-10-16', 'Lait'),
	(4, 11, 1, NULL, 66, '2020-10-16', '2020-10-16', 'Viande'),
	(5, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(6, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(7, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(8, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(9, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(10, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(11, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(12, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(13, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(14, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(15, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(16, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(17, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(18, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(19, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(20, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(21, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(22, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(23, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(24, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(25, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(26, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(27, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(28, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(29, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(30, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(31, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(32, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(33, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(34, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(35, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(36, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(37, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(38, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(39, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(40, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(41, 11, 1, NULL, 15, '2020-10-16', '2020-10-16', 'Viande'),
	(42, 11, 1, NULL, 12, '2020-10-16', '2020-10-16', 'Lait'),
	(43, 11, 1, NULL, 60, '2020-10-16', '2020-10-16', 'Viande'),
	(44, 11, 1, NULL, 80, '2020-10-16', '2020-10-16', 'Lait'),
	(45, 13, 1, NULL, 16, '2020-10-16', '2020-10-16', 'Viande'),
	(46, 13, 1, NULL, 16, '2020-10-16', '2020-10-16', 'Viande'),
	(47, 11, 1, NULL, 5, '2020-10-16', '2020-10-16', 'Viande'),
	(48, 11, 2, NULL, 10, '2020-10-16', '2020-10-16', 'Viande'),
	(49, 11, 1, NULL, 5, '2020-10-16', '2020-10-16', 'Viande'),
	(50, 11, 2, NULL, 10, '2020-10-16', '2020-10-16', 'Viande'),
	(51, 11, 1, NULL, 5, '2020-10-16', '2020-10-16', 'Viande'),
	(52, 11, 2, NULL, 10, '2020-10-16', '2020-10-16', 'Viande'),
	(53, 11, 1, NULL, 5, '2020-10-16', '2020-10-16', 'Viande'),
	(54, 11, 2, NULL, 10, '2020-10-16', '2020-10-16', 'Viande'),
	(55, 11, 1, NULL, 5, '2020-10-16', '2020-10-16', 'Viande'),
	(56, 11, 2, NULL, 10, '2020-10-16', '2020-10-16', 'Viande'),
	(57, 11, 1, NULL, 5, '2020-10-16', '2020-10-16', 'Viande'),
	(58, 11, 2, NULL, 10, '2020-10-16', '2020-10-16', 'Viande'),
	(59, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(60, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(61, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(62, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(63, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(64, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(65, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(66, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(67, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(68, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(69, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(70, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(71, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(72, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(73, 11, 1, NULL, 3, '2020-10-16', '2020-10-16', 'Viande'),
	(74, 11, 1, NULL, 5, '2020-10-16', '2020-10-16', 'Lait'),
	(75, 11, 2, NULL, 4, '2020-10-16', '2020-10-16', 'Lait'),
	(76, 11, 2, NULL, 6, '2020-10-16', '2020-10-16', 'Lait'),
	(77, 11, 3, NULL, 6, '2020-10-16', '2020-10-16', 'Lait'),
	(78, 12, 3, NULL, 6, '2020-10-16', NULL, 'Lait'),
	(79, 13, 4, NULL, 100, '2020-10-16', NULL, 'Lait'),
	(80, 14, 4, NULL, 5, '2020-10-16', NULL, 'Lait'),
	(81, 15, 3, NULL, 4, '2020-10-16', NULL, 'Lait'),
	(82, 15, 2, NULL, 5, '2020-10-16', NULL, 'Lait'),
	(83, 15, 3, NULL, 3, '2020-10-16', NULL, 'Lait'),
	(84, 15, 2, NULL, 7, '2020-10-16', NULL, 'Viande'),
	(85, 11, 1, NULL, 1, '2020-10-16', '2020-10-16', 'Viande'),
	(86, 11, 3, NULL, 4, '2020-10-16', NULL, 'Viande'),
	(87, 50, 1, NULL, 200, '2020-11-01', NULL, 'Viande');
/*!40000 ALTER TABLE `eleveur_race` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.espece: ~2 rows (approximately)
/*!40000 ALTER TABLE `espece` DISABLE KEYS */;
INSERT INTO `espece` (`id`, `espece_fr`, `espece_ar`) VALUES
	(1, 'Ovins', 'الأغنام'),
	(2, 'Caprins', 'ماعز');
/*!40000 ALTER TABLE `espece` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.etat_rm: ~0 rows (approximately)
/*!40000 ALTER TABLE `etat_rm` DISABLE KEYS */;
/*!40000 ALTER TABLE `etat_rm` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.evaluation: ~0 rows (approximately)
/*!40000 ALTER TABLE `evaluation` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluation` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.exclusion_param: ~0 rows (approximately)
/*!40000 ALTER TABLE `exclusion_param` DISABLE KEYS */;
/*!40000 ALTER TABLE `exclusion_param` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.fonction: ~0 rows (approximately)
/*!40000 ALTER TABLE `fonction` DISABLE KEYS */;
/*!40000 ALTER TABLE `fonction` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.formation: ~0 rows (approximately)
/*!40000 ALTER TABLE `formation` DISABLE KEYS */;
/*!40000 ALTER TABLE `formation` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.fournisseur: ~1 rows (approximately)
/*!40000 ALTER TABLE `fournisseur` DISABLE KEYS */;
INSERT INTO `fournisseur` (`id`, `nom_fournisseur`, `adresse`, `tel`, `type`, `email`, `tel2`, `site_web`, `ice`, `rc`, `ville_rc`, `patente`, `cnss`, `banque`, `rib`, `ville`, `specialite`) VALUES
	(1, 'mehdi', 'oujda', '3454677', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `fournisseur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.fournisseur_medicament: ~1 rows (approximately)
/*!40000 ALTER TABLE `fournisseur_medicament` DISABLE KEYS */;
INSERT INTO `fournisseur_medicament` (`id`, `fournisseur_id`, `medicament_id`, `prix_unitaire`, `qte`) VALUES
	(1, 1, 1, 345, NULL);
/*!40000 ALTER TABLE `fournisseur_medicament` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.gerant_eleveur_pm: ~0 rows (approximately)
/*!40000 ALTER TABLE `gerant_eleveur_pm` DISABLE KEYS */;
/*!40000 ALTER TABLE `gerant_eleveur_pm` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.groupement: ~16 rows (approximately)
/*!40000 ALTER TABLE `groupement` DISABLE KEYS */;
INSERT INTO `groupement` (`id`, `secteur_id`, `technicien_id`, `mere_id`, `fils_id`, `code`, `nom_fr`, `nom_ar`, `date_creation`, `type_droit_fonctionnement`, `source_groupement`, `reference_creation`, `lien_doc_creation`, `num_pv_creation`, `date_pv_creation`, `lien_pv_creation`, `num_courrier_depart`, `date_courrier_depart`, `num_courrier_arrivee`, `date_courrier_arrivee`, `num_reference_siege`, `date_reference_siege`, `lien_reference_siege`, `decision_ca`, `num_decision_ca`, `date_decision_ca`, `personnel_saisie`, `obs`, `date_separation`, `date_fusion`, `date_dissolution`, `lien_decision_ca`) VALUES
	(1, 3, NULL, NULL, 16, 'S-1001', 'Groupement-1', NULL, NULL, 'Taux Fixe', NULL, NULL, NULL, 'bumpv1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, '2020-10-14', NULL, NULL),
	(2, 1, NULL, NULL, 16, 'S-1002', 'Groupement-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4f6ddca7eea57f87c1867e409f00d246.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, '2020-10-14', NULL, '688f18ff164181bedb36fc8f620ac02f.jpeg'),
	(3, 1, 2, NULL, NULL, 'S-1003', 'grp test 1', NULL, NULL, 'Taux Complexe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 2, 2, NULL, NULL, 'S-2001', 'grp test 2', NULL, NULL, 'Baréme Complexe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 2, NULL, NULL, NULL, 'S-2002', 'Groupement-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 2, NULL, NULL, NULL, 'S-2003', 'Groupement-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 3, NULL, NULL, NULL, 'S-3001', 'Groupement-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 3, NULL, NULL, NULL, 'S-3002', 'Groupement-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 3, NULL, NULL, NULL, 'S-3003', 'Groupement-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 1, NULL, NULL, NULL, 'S-11004', NULL, NULL, NULL, NULL, 'Projet', NULL, 'c0a858ad6fe284427a6121a7810c6245.jpeg', NULL, NULL, '16a9f2cd7b7dbd20bb99488179857ca3.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL, '0321-01-31', '51041f1b12a9282f0bc51efc2416e1c6.jpeg'),
	(11, 1, NULL, 1, NULL, 'S-111005', 'sep1', NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\php813D.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(12, 1, NULL, 1, NULL, 'S-111005', 'sep 2', NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\php814E.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(13, 1, NULL, 1, NULL, 'S-1111006', NULL, NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\phpAED8.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpAED9.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\phpAEE9.tmp'),
	(14, 1, NULL, 1, NULL, 'S-1111006', NULL, NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\phpAEEA.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpAEFB.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(15, 1, NULL, NULL, NULL, NULL, 'fusion', NULL, NULL, NULL, 'fusion', NULL, 'C:\\xampp\\tmp\\php7CE7.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php7CE8.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL, NULL, NULL),
	(16, 1, NULL, NULL, NULL, NULL, 'fusion', NULL, NULL, NULL, 'fusion', NULL, 'C:\\xampp\\tmp\\phpC950.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpC951.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL, NULL, NULL),
	(17, 1, NULL, NULL, NULL, 'S-11111007', 'groupement 1', NULL, NULL, NULL, 'Projet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL, NULL, NULL),
	(18, 2, 2, 3, NULL, 'S-22004', 'aze', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(19, 2, 2, 3, NULL, 'S-22004', 'zer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_achat_medicament: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_achat_medicament` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_achat_medicament` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_affectation_technicien: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_affectation_technicien` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_affectation_technicien` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_banque: ~6 rows (approximately)
/*!40000 ALTER TABLE `histo_banque` DISABLE KEYS */;
INSERT INTO `histo_banque` (`id`, `compte_id`, `mois`, `annee`, `total_depense`, `total_recette`, `solde_debut_mois`, `solde_fin_mois`) VALUES
	(3, 2, 'Octobre', 2020, 371, 11131, 0, 10760),
	(4, 3, 'Octobre', 2020, 0, 0, 0, 0),
	(5, 4, 'Octobre', 2020, 0, 0, 0, 0),
	(6, 5, 'Octobre', 2020, 0, 0, 0, 0),
	(7, 6, 'Octobre', 2020, 0, 0, 0, 0),
	(8, 7, 'Octobre', 2020, 0, 0, 0, 0),
	(9, 5, 'Octobre', 2020, 2961, 220, 0, -2741),
	(10, 6, 'Octobre', 2020, 900, 0, 0, -900);
/*!40000 ALTER TABLE `histo_banque` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_caisse: ~6 rows (approximately)
/*!40000 ALTER TABLE `histo_caisse` DISABLE KEYS */;
INSERT INTO `histo_caisse` (`id`, `caisse_id`, `solde_debut_mois`, `solde_fin_mois`, `total_recettes`, `total_depenses`, `mois`, `annee`) VALUES
	(3, 3, 0, 500, 500, 0, '10', 2020),
	(4, 3, 0, -99, 789, 888, 'Octobre', 2020),
	(5, 3, 0, 234, 234, 0, 'Octobre', 2020),
	(6, 18, 0, 60, 60, 0, 'Octobre', 2020),
	(7, 18, 0, 300, 300, 0, 'Novembre', 2020),
	(8, 3, 0, -503, 0, 503, 'Novembre', 2020);
/*!40000 ALTER TABLE `histo_caisse` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_correction_recette_banque: ~3 rows (approximately)
/*!40000 ALTER TABLE `histo_correction_recette_banque` DISABLE KEYS */;
INSERT INTO `histo_correction_recette_banque` (`id`, `recette_id`, `date`, `technicien`, `compte_id`) VALUES
	(1, 7, '2020-10-27', 'technicien@anoc.ma', NULL),
	(2, 8, '2020-10-28', 'charge_comptabilite@anoc.ma', 2),
	(3, 9, '2020-10-28', 'technicien@anoc.ma', 2);
/*!40000 ALTER TABLE `histo_correction_recette_banque` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_cotisation_annuelle: ~2 rows (approximately)
/*!40000 ALTER TABLE `histo_cotisation_annuelle` DISABLE KEYS */;
INSERT INTO `histo_cotisation_annuelle` (`id`, `montant`, `date_debut`, `date_fin`) VALUES
	(1, 0, '2020-10-16', '2020-10-16'),
	(2, 20, '2020-10-16', NULL);
/*!40000 ALTER TABLE `histo_cotisation_annuelle` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_date_cloture: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_date_cloture` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_date_cloture` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_depot_groupement: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_depot_groupement` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_depot_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_depot_secteur: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_depot_secteur` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_depot_secteur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_depot_technicien: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_depot_technicien` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_depot_technicien` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_document: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_document` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_droit_cotisation: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_droit_cotisation` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_droit_cotisation` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_generation_paiment: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_generation_paiment` DISABLE KEYS */;
INSERT INTO `histo_generation_paiment` (`id`, `annee`, `date_saisie`, `personnel_saisie`) VALUES
	(10, 2020, '2020-10-17', 'charge_comptabilite@anoc.ma');
/*!40000 ALTER TABLE `histo_generation_paiment` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_groupement_eleveur: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_groupement_eleveur` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_groupement_eleveur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.histo_personnel: ~0 rows (approximately)
/*!40000 ALTER TABLE `histo_personnel` DISABLE KEYS */;
/*!40000 ALTER TABLE `histo_personnel` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.indemnite_param: ~0 rows (approximately)
/*!40000 ALTER TABLE `indemnite_param` DISABLE KEYS */;
/*!40000 ALTER TABLE `indemnite_param` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.indemnite_techniciens: ~0 rows (approximately)
/*!40000 ALTER TABLE `indemnite_techniciens` DISABLE KEYS */;
/*!40000 ALTER TABLE `indemnite_techniciens` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.intervention: ~0 rows (approximately)
/*!40000 ALTER TABLE `intervention` DISABLE KEYS */;
/*!40000 ALTER TABLE `intervention` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.inventaire: ~0 rows (approximately)
/*!40000 ALTER TABLE `inventaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventaire` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.lien_parentaux: ~0 rows (approximately)
/*!40000 ALTER TABLE `lien_parentaux` DISABLE KEYS */;
/*!40000 ALTER TABLE `lien_parentaux` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.liste_maladies: ~0 rows (approximately)
/*!40000 ALTER TABLE `liste_maladies` DISABLE KEYS */;
INSERT INTO `liste_maladies` (`id`, `nom`) VALUES
	(1, 'maladie 1');
/*!40000 ALTER TABLE `liste_maladies` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.list_affectation: ~0 rows (approximately)
/*!40000 ALTER TABLE `list_affectation` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_affectation` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.lot: ~0 rows (approximately)
/*!40000 ALTER TABLE `lot` DISABLE KEYS */;
/*!40000 ALTER TABLE `lot` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.lot_brebis: ~0 rows (approximately)
/*!40000 ALTER TABLE `lot_brebis` DISABLE KEYS */;
/*!40000 ALTER TABLE `lot_brebis` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.males_points: ~0 rows (approximately)
/*!40000 ALTER TABLE `males_points` DISABLE KEYS */;
/*!40000 ALTER TABLE `males_points` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.medicament: ~0 rows (approximately)
/*!40000 ALTER TABLE `medicament` DISABLE KEYS */;
INSERT INTO `medicament` (`id`, `nom_medicament`) VALUES
	(1, 'dolipran');
/*!40000 ALTER TABLE `medicament` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.message: ~2 rows (approximately)
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`id`, `user_id`, `conversation_id`, `subject`, `content`, `created_at`) VALUES
	(1, 3, 1, 'test', 'content', '2020-10-30 13:42:04.000000'),
	(2, 2, 1, 'test 2', 'response', '2020-10-30 13:49:19.000000');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.model_document: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_document` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.modif_groupement: ~4 rows (approximately)
/*!40000 ALTER TABLE `modif_groupement` DISABLE KEYS */;
INSERT INTO `modif_groupement` (`id`, `groupement_id`, `nom_fr`, `nom_ar`, `type_droit_fonctionnement`, `num_pv_creation`, `date_pv_creation`, `lien_pv_creation`, `num_courrier_depart`, `date_courrier_depart`, `num_courrier_arrivee`, `date_courrier_arivee`, `num_reference_siege`, `date_reference_siege`, `lien_reference_siege`, `decision_ca`, `num_decision_ca`, `date_decision_ca`, `lien_decision_ca`, `date_saisie`, `personnel_saisie`, `obs`, `date_modification`) VALUES
	(1, 2, 'Groupement-2', NULL, NULL, NULL, NULL, '4f6ddca7eea57f87c1867e409f00d246.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, '688f18ff164181bedb36fc8f620ac02f.jpeg', NULL, 'chef_depart_groupement@anoc.ma', NULL, '2020-10-14'),
	(2, 1, 'Groupement-1', NULL, NULL, 'bumpv1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, 'chef_depart_groupement@anoc.ma', NULL, '2020-10-14'),
	(3, 3, 'grp test 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, 'chef_depart_groupement@anoc.ma', NULL, '2020-10-15'),
	(4, 4, 'grp test 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, NULL, 'chef_depart_groupement@anoc.ma', NULL, '2020-10-15');
/*!40000 ALTER TABLE `modif_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.motif_rejet: ~0 rows (approximately)
/*!40000 ALTER TABLE `motif_rejet` DISABLE KEYS */;
/*!40000 ALTER TABLE `motif_rejet` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.mouvement_personnel: ~0 rows (approximately)
/*!40000 ALTER TABLE `mouvement_personnel` DISABLE KEYS */;
/*!40000 ALTER TABLE `mouvement_personnel` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.moyen_transport: ~0 rows (approximately)
/*!40000 ALTER TABLE `moyen_transport` DISABLE KEYS */;
/*!40000 ALTER TABLE `moyen_transport` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.nature_conge: ~0 rows (approximately)
/*!40000 ALTER TABLE `nature_conge` DISABLE KEYS */;
/*!40000 ALTER TABLE `nature_conge` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.nombre_cheque: ~2 rows (approximately)
/*!40000 ALTER TABLE `nombre_cheque` DISABLE KEYS */;
INSERT INTO `nombre_cheque` (`id`, `nombre`, `date_debut`, `date_fin`) VALUES
	(1, 25, '2020-10-15', NULL),
	(2, 50, '2020-10-15', '2020-10-15'),
	(3, NULL, '2020-10-17', '2020-10-23'),
	(4, 55, '2020-10-23', NULL);
/*!40000 ALTER TABLE `nombre_cheque` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.parametre_application: ~0 rows (approximately)
/*!40000 ALTER TABLE `parametre_application` DISABLE KEYS */;
/*!40000 ALTER TABLE `parametre_application` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.parame_exlu: ~0 rows (approximately)
/*!40000 ALTER TABLE `parame_exlu` DISABLE KEYS */;
/*!40000 ALTER TABLE `parame_exlu` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.participant: ~0 rows (approximately)
/*!40000 ALTER TABLE `participant` DISABLE KEYS */;
/*!40000 ALTER TABLE `participant` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.personnel: ~4 rows (approximately)
/*!40000 ALTER TABLE `personnel` DISABLE KEYS */;
INSERT INTO `personnel` (`id`, `type_contrat_id`, `secteur_id`, `motif_id`, `chef_id`, `departement_id`, `email_professionnel`, `roles`, `password`, `matricule`, `num_cin`, `validite_cin`, `nom_fr`, `nom_ar`, `prenom_fr`, `prenom_ar`, `nom_conjoint_ar`, `prenom_conjoint_ar`, `nombre_enfants`, `adresse_fr`, `adresse_ar`, `sexe`, `date_naissance`, `lieu_naissance`, `num_cnss`, `num_cimr`, `tel_personnel`, `tel_professionnel`, `email_personnel`, `date_entree`, `situation_familiale`, `salaire`, `banque`, `num_rib`, `date_titularisation`, `est_personnel`, `photo`, `etat`, `nationalite`, `nom_conjoint_fr`, `prenom_conjoint_fr`, `date_depart`, `utilise_application`, `est_chef`, `compte_bloque`) VALUES
	(1, 1, 1, NULL, NULL, NULL, 'email.pro@gmail.com', '[]', '$argon2i$v=19$m=65536,t=4,p=1$Q1NOWTFsa2JETUxtYjBuYg$lrFjsGcAbb5AayFkHKso9fjih8xZsOl0tZ8qJGU7cFI', 'Matricule-157856', 'F784512', '2024-01-25', 'SADKI', 'صادقي', 'Mohammed', 'محمد', '', '', 0, 'Hay andalous Rue laymoune', 'الحي الأندلسي ، شارع ليمون', 'Homme', '1997-08-25', 'Rabat', 'Cnss-98965', 'Cimr-112233', '0666201740', '0102030405', 'email.personnel@gmail.com', '2020-01-15', 'Célibataire', 15000, 'La Banque Populaire', 'Rib-148-587-412-966', '2015-06-10', 1, 'user.png', NULL, 'Marocaine', 'Khemiri', 'Mohammed', NULL, 1, 0, 0),
	(2, NULL, NULL, NULL, NULL, NULL, 'technicien@anoc.ma', '["ROLE_TECHNICIEN"]', '$argon2id$v=19$m=65536,t=4,p=1$SVd6VGVnOE5uZVo0NmVSSg$g6yf/UPP1jzxHZA4c/Vx2cP/MYM0K2zjPAgAPCPzGp4', NULL, '1234', NULL, 'technicien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-14', NULL, NULL, NULL, NULL, NULL, 1, 'user.png', NULL, NULL, NULL, NULL, NULL, 1, 1, 0),
	(3, NULL, NULL, NULL, NULL, NULL, 'chef_depart_groupement@anoc.ma', '["ROLE_CHEF_D_GROUPEMENT"]', '$argon2id$v=19$m=65536,t=4,p=1$ZGhEOXpVN2phQXVXUVUvYw$S2+yqSaJlVf5WKKkdG48xk55myS4/1EML/mQq3C4piw', NULL, '1234', NULL, 'chef deparetement groupement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-14', NULL, NULL, NULL, NULL, NULL, 1, 'user.png', NULL, NULL, NULL, NULL, NULL, 1, 1, 0),
	(4, NULL, 1, NULL, NULL, NULL, 'charge_comptabilite@anoc.ma', '["ROLE_CHARGE_COMPTA_SECTEUR"]', '$argon2id$v=19$m=65536,t=4,p=1$RXZtOEN3SWFiRnM3UXRjWg$qiJ+R5eK10RCsaeNXsTT6kD1K9LLEs5YveqEE7Yg5Og', NULL, '1234', NULL, 'charge comptabilité groupement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-14', NULL, NULL, NULL, NULL, NULL, 1, 'user.png', NULL, NULL, NULL, NULL, NULL, 1, 1, 0);
/*!40000 ALTER TABLE `personnel` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.personnel_conge: ~0 rows (approximately)
/*!40000 ALTER TABLE `personnel_conge` DISABLE KEYS */;
/*!40000 ALTER TABLE `personnel_conge` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.personnel_diplome: ~0 rows (approximately)
/*!40000 ALTER TABLE `personnel_diplome` DISABLE KEYS */;
/*!40000 ALTER TABLE `personnel_diplome` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.personnel_document_externe: ~0 rows (approximately)
/*!40000 ALTER TABLE `personnel_document_externe` DISABLE KEYS */;
/*!40000 ALTER TABLE `personnel_document_externe` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.personnel_fonction: ~0 rows (approximately)
/*!40000 ALTER TABLE `personnel_fonction` DISABLE KEYS */;
/*!40000 ALTER TABLE `personnel_fonction` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.personnel_mission: ~0 rows (approximately)
/*!40000 ALTER TABLE `personnel_mission` DISABLE KEYS */;
/*!40000 ALTER TABLE `personnel_mission` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.position_eleveur: ~5 rows (approximately)
/*!40000 ALTER TABLE `position_eleveur` DISABLE KEYS */;
INSERT INTO `position_eleveur` (`id`, `position`) VALUES
	(1, 'E-transfer'),
	(2, 'I-Sans Troupeau'),
	(3, 'Exclu'),
	(4, 'Suspendu'),
	(5, 'Adhérent');
/*!40000 ALTER TABLE `position_eleveur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.pourcentage_jeune_race: ~0 rows (approximately)
/*!40000 ALTER TABLE `pourcentage_jeune_race` DISABLE KEYS */;
/*!40000 ALTER TABLE `pourcentage_jeune_race` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.pourcentage_perte_race: ~0 rows (approximately)
/*!40000 ALTER TABLE `pourcentage_perte_race` DISABLE KEYS */;
/*!40000 ALTER TABLE `pourcentage_perte_race` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.presentation_medicament: ~0 rows (approximately)
/*!40000 ALTER TABLE `presentation_medicament` DISABLE KEYS */;
/*!40000 ALTER TABLE `presentation_medicament` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.province: ~4 rows (approximately)
/*!40000 ALTER TABLE `province` DISABLE KEYS */;
INSERT INTO `province` (`id`, `region_id`, `province_ar`, `province_fr`) VALUES
	(1, 1, '1-المحافظة', 'Province-1'),
	(2, 2, '2-المحافظة', 'Province-2'),
	(3, 3, '3-المحافظة', 'Province-3'),
	(4, 4, '4-المحافظة', 'Province-4');
/*!40000 ALTER TABLE `province` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.race: ~6 rows (approximately)
/*!40000 ALTER TABLE `race` DISABLE KEYS */;
INSERT INTO `race` (`id`, `espece_id`, `race_fr`, `race_ar`, `vocation`, `pourcentage_jeune`) VALUES
	(1, 1, 'Béni-Guil', 'بني جيل', 'Viande', NULL),
	(2, 1, 'Boujaâd', 'بوجاد', 'Viande', NULL),
	(3, 1, 'Sardi', 'صردي', 'Viande', NULL),
	(4, 2, 'Draâ', 'درعة', 'Viande', NULL),
	(5, 2, 'Boer', 'بوير', 'Viande', NULL),
	(6, 2, 'Saanen', 'سانين', 'Viande', NULL);
/*!40000 ALTER TABLE `race` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.rapprochement_bancaire: ~0 rows (approximately)
/*!40000 ALTER TABLE `rapprochement_bancaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `rapprochement_bancaire` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.recette_caisse: ~7 rows (approximately)
/*!40000 ALTER TABLE `recette_caisse` DISABLE KEYS */;
INSERT INTO `recette_caisse` (`id`, `caisse_groupment_id`, `mois`, `date_saisie`, `date_recette`, `date_recette_comptable`, `date_cheque`, `num_cheque_avis`, `montant`, `num_compte_rubrique`, `obs`, `personnel_saisie`, `num_compte_rubrique_comptable`, `status`, `piece_jointe`, `annee`) VALUES
	(1, 3, 'Février', NULL, NULL, NULL, NULL, '123', 600, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 3, 'Février', NULL, NULL, NULL, NULL, '123', 600, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 3, 'Février', NULL, NULL, NULL, NULL, '123', 600, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 3, 'Septembre', '2020-10-19', NULL, NULL, NULL, 'zaddza', 543, '1221', NULL, NULL, NULL, NULL, NULL, 2020),
	(5, 3, NULL, '2020-10-19', NULL, NULL, NULL, '123', 503, '', NULL, 'technicien@anoc.ma', NULL, 'En cours', NULL, 2020),
	(6, 3, 'Janvier', '2020-10-20', NULL, NULL, NULL, '123', 234, NULL, NULL, 'technicien@anoc.ma', NULL, 'En cours', NULL, 2020),
	(7, 3, 'Octobre', '2020-10-20', NULL, NULL, NULL, '"é\'', 234, NULL, NULL, 'technicien@anoc.ma', NULL, 'En cours', NULL, 2020),
	(8, 18, 'Janvier', '2020-10-25', NULL, NULL, NULL, 'zaddza', 60, NULL, NULL, 'technicien@anoc.ma', NULL, 'En cours', NULL, 2020),
	(9, 18, 'Janvier', '2020-11-01', NULL, NULL, NULL, '123', 300, NULL, NULL, 'technicien@anoc.ma', NULL, 'En cours', NULL, 2020);
/*!40000 ALTER TABLE `recette_caisse` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.regie_caisse_param: ~2 rows (approximately)
/*!40000 ALTER TABLE `regie_caisse_param` DISABLE KEYS */;
INSERT INTO `regie_caisse_param` (`id`, `date_debut`, `date_fin`, `montant`, `date_saisie`, `personnel_saisie`) VALUES
	(1, '2020-10-28', '2020-10-28', 500, '2020-10-28', 'lee'),
	(2, '2020-10-28', NULL, 550, '2020-10-28', 'charge_comptabilite@anoc.ma');
/*!40000 ALTER TABLE `regie_caisse_param` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.region: ~4 rows (approximately)
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` (`id`, `region_fr`, `region_ar`) VALUES
	(1, 'region-1', '1-منطقة'),
	(2, 'region-2', '2-منطقة'),
	(3, 'region-3', '3-منطقة'),
	(4, 'region-4', '4-منطقة');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.rubrique: ~4 rows (approximately)
/*!40000 ALTER TABLE `rubrique` DISABLE KEYS */;
INSERT INTO `rubrique` (`id`, `rubrique`, `num_compte`, `caisse`, `banque`, `secteur_id`, `demande_accord`, `rubrique_condition`, `remarque`) VALUES
	(1, 'Carburant', '1111', 0, 1, NULL, NULL, NULL, NULL),
	(2, 'Toubib', '1123', 1, 1, 1, 0, '', ''),
	(3, 'Panne de voiture', '1234', 0, 1, NULL, NULL, NULL, NULL),
	(4, 'num9', 'nm88', 0, 1, 2, 1, 'cond2', 'rem');
/*!40000 ALTER TABLE `rubrique` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.secteur: ~3 rows (approximately)
/*!40000 ALTER TABLE `secteur` DISABLE KEYS */;
INSERT INTO `secteur` (`id`, `animateur_id`, `libelle_fr`, `libelle_ar`, `code`, `adresse`, `email1`, `email2`, `fixe1`, `fixe2`, `gsm1`, `gsm2`, `fax`) VALUES
	(1, NULL, 'Secteur-1', NULL, 'S-1', NULL, 'secteur1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
	(2, NULL, 'Secteur-2', NULL, 'S-2', NULL, 'secteur2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, NULL, 'Secteur-3', NULL, 'S-3', NULL, 'secteur3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `secteur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.semences: ~0 rows (approximately)
/*!40000 ALTER TABLE `semences` DISABLE KEYS */;
/*!40000 ALTER TABLE `semences` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.se_eleveur: ~17 rows (approximately)
/*!40000 ALTER TABLE `se_eleveur` DISABLE KEYS */;
INSERT INTO `se_eleveur` (`id`, `eleveur_id`, `groupement_id`, `operation`, `motif`, `num_pv_groupement`, `date_pv_groupement`, `lien_pv_groupement`, `num_arrivee_secteur`, `date_arrivee_secteur`, `num_depart_secteur`, `date_depart_secteur`, `decision_ca`, `num_decision_ca`, `date_decision_ca`, `lien_decision_ca`, `date_saisie_secteur`, `personnel_saisie_secteur`, `date_saisie_decision_ca`, `personnel_saisie_decision_ca`, `num_arrivee_siege`, `date_arrivee_siege`, `lien_arrivee_siege`) VALUES
	(1, 1, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '56ddb365035c61e3a1cc0c24df435b1e.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', 'c203a166712086943ed42594f7a30cc6.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(2, 1, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '39a5e57b28103e51da37299601998126.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', 'b7c4c7e2250bd9e540e7ed44d1107386.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(3, 1, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '667a68e00cebcded98f6bf41a172cf11.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', '002ec04b313d47c931d38b32c2e2fbcc.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(4, 2, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '667a68e00cebcded98f6bf41a172cf11.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', '002ec04b313d47c931d38b32c2e2fbcc.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(5, 3, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '667a68e00cebcded98f6bf41a172cf11.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', '002ec04b313d47c931d38b32c2e2fbcc.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(6, 1, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '4dccd9d70ad37468a93e4d4019009361.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', '717e3f67b65910c9a1c5b99d5c2998f0.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(7, 2, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '4dccd9d70ad37468a93e4d4019009361.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', '717e3f67b65910c9a1c5b99d5c2998f0.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(8, 3, NULL, 'Exclusion', 'eaz', '123', '2020-10-13', '4dccd9d70ad37468a93e4d4019009361.jpeg', 'aze', '2020-10-08', 'numCourrierDepart', '2020-10-01', 'EnCours', 'aze', '2020-10-07', '717e3f67b65910c9a1c5b99d5c2998f0.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(9, 1, NULL, 'Suspension', 'aez', 'aze', '2020-10-14', '3a2fb94a8c372d5df7df9eabb2471d82.jpeg', 'aze', '2020-10-07', 'numCourrierDepart', '2020-10-07', 'EnCours', 'aze', '2020-10-06', '614ba638667e3828de10716e07e8a1ad.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(10, 4, NULL, 'Suspension', 'aez', 'aze', '2020-10-14', '3a2fb94a8c372d5df7df9eabb2471d82.jpeg', 'aze', '2020-10-07', 'numCourrierDepart', '2020-10-07', 'EnCours', 'aze', '2020-10-06', '614ba638667e3828de10716e07e8a1ad.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(11, 5, NULL, 'Suspension', 'aez', 'aze', '2020-10-14', '3a2fb94a8c372d5df7df9eabb2471d82.jpeg', 'aze', '2020-10-07', 'numCourrierDepart', '2020-10-07', 'EnCours', 'aze', '2020-10-06', '614ba638667e3828de10716e07e8a1ad.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(12, 6, NULL, 'Suspension', 'aez', 'aze', '2020-10-14', '3a2fb94a8c372d5df7df9eabb2471d82.jpeg', 'aze', '2020-10-07', 'numCourrierDepart', '2020-10-07', 'EnCours', 'aze', '2020-10-06', '614ba638667e3828de10716e07e8a1ad.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(13, 7, NULL, 'Suspension', 'aez', 'aze', '2020-10-14', '3a2fb94a8c372d5df7df9eabb2471d82.jpeg', 'aze', '2020-10-07', 'numCourrierDepart', '2020-10-07', 'EnCours', 'aze', '2020-10-06', '614ba638667e3828de10716e07e8a1ad.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(14, 1, NULL, 'Exclusion', '321', '321', '2020-10-07', 'b47813e23df334f7b2e9fcd934d4cc86.jpeg', '321', '2020-10-23', 'numCourrierDepart', '2020-10-23', 'EnCours', '321', '2020-10-23', '820260e5bdd6c74534dcf3bae9d719b6.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(15, 2, NULL, 'Exclusion', '321', '321', '2020-10-07', 'b47813e23df334f7b2e9fcd934d4cc86.jpeg', '321', '2020-10-23', 'numCourrierDepart', '2020-10-23', 'EnCours', '321', '2020-10-23', '820260e5bdd6c74534dcf3bae9d719b6.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(16, 3, NULL, 'Exclusion', '321', '321', '2020-10-07', 'b47813e23df334f7b2e9fcd934d4cc86.jpeg', '321', '2020-10-23', 'numCourrierDepart', '2020-10-23', 'EnCours', '321', '2020-10-23', '820260e5bdd6c74534dcf3bae9d719b6.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(17, 4, NULL, 'Exclusion', '321', '321', '2020-10-07', 'b47813e23df334f7b2e9fcd934d4cc86.jpeg', '321', '2020-10-23', 'numCourrierDepart', '2020-10-23', 'EnCours', '321', '2020-10-23', '820260e5bdd6c74534dcf3bae9d719b6.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-23', 'chef_depart_groupement@anoc.ma', NULL, NULL, NULL),
	(18, 1, NULL, 'Suspension', 'fs', '654', '2020-10-07', 'e9c1d2a4789f616113c6f4b12fadd864.jpeg', '654654', '2020-10-22', 'numdepartSecteur', '2020-10-14', 'Accepter', '98798', '2020-10-29', '4d9e654906cee11db4d43c2f10d272e1.jpeg', NULL, 'chef_depart_groupement@anoc.ma', '2020-10-24', 'chef_depart_groupement@anoc.ma', '978', '2020-10-21', NULL);
/*!40000 ALTER TABLE `se_eleveur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.sfd_groupement: ~6 rows (approximately)
/*!40000 ALTER TABLE `sfd_groupement` DISABLE KEYS */;
INSERT INTO `sfd_groupement` (`id`, `groupement_id`, `operation`, `reference_arrivee_secteur`, `reference_depart_secteur`, `reference_siege`, `decision_ca`, `num_decision_ca`, `date_decision_ca`, `lien_decision_ca`, `date_saisie_operation`, `personnel_saisie_operation`, `obs`, `motif`) VALUES
	(1, 10, 'Dissolution', '123', '123', '456', '321', '321', '0001-02-13', NULL, '2020-10-14', 'chef_depart_groupement@anoc.ma', '321', NULL),
	(2, 1, 'Séparation', NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, '2020-10-14', 'chef_depart_groupement@anoc.ma', '', ''),
	(3, 1, 'Séparation', NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, '2020-10-14', 'chef_depart_groupement@anoc.ma', '', ''),
	(4, 1, 'Fusion', NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, '2020-10-14', 'chef_depart_groupement@anoc.ma', '', ''),
	(5, 2, 'Fusion', NULL, NULL, NULL, NULL, 'Accepté', NULL, '688f18ff164181bedb36fc8f620ac02f.jpeg', '2020-10-14', 'chef_depart_groupement@anoc.ma', '', ''),
	(6, 1, 'Fusion', NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, '2020-10-14', 'chef_depart_groupement@anoc.ma', '', ''),
	(7, 2, 'Fusion', NULL, NULL, NULL, NULL, 'Accepté', NULL, '688f18ff164181bedb36fc8f620ac02f.jpeg', '2020-10-14', 'chef_depart_groupement@anoc.ma', '', ''),
	(8, 3, 'Séparation', NULL, NULL, NULL, NULL, 'Accepté', NULL, NULL, '2020-10-22', 'chef_depart_groupement@anoc.ma', '', '');
/*!40000 ALTER TABLE `sfd_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.stage: ~0 rows (approximately)
/*!40000 ALTER TABLE `stage` DISABLE KEYS */;
/*!40000 ALTER TABLE `stage` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.stagiaire: ~0 rows (approximately)
/*!40000 ALTER TABLE `stagiaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `stagiaire` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.statut_eleveur: ~7 rows (approximately)
/*!40000 ALTER TABLE `statut_eleveur` DISABLE KEYS */;
INSERT INTO `statut_eleveur` (`id`, `statut`) VALUES
	(1, 'Président'),
	(2, 'Vice Président'),
	(3, 'Trésorier'),
	(4, 'Vice Trésorier'),
	(5, 'Secretaire'),
	(6, 'Vice Secretaire'),
	(7, 'Membre');
/*!40000 ALTER TABLE `statut_eleveur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.suivi_banque_groupement: ~0 rows (approximately)
/*!40000 ALTER TABLE `suivi_banque_groupement` DISABLE KEYS */;
/*!40000 ALTER TABLE `suivi_banque_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.suivi_caisses_groupement: ~0 rows (approximately)
/*!40000 ALTER TABLE `suivi_caisses_groupement` DISABLE KEYS */;
/*!40000 ALTER TABLE `suivi_caisses_groupement` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.traitement_compagne: ~0 rows (approximately)
/*!40000 ALTER TABLE `traitement_compagne` DISABLE KEYS */;
/*!40000 ALTER TABLE `traitement_compagne` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.transfert_eleveur: ~8 rows (approximately)
/*!40000 ALTER TABLE `transfert_eleveur` DISABLE KEYS */;
INSERT INTO `transfert_eleveur` (`id`, `eleveur_id`, `code_eleveur_sortant`, `code_eleveur_entrant`, `num_pv_groupement_sortant`, `date_pv_groupement_sortant`, `lien_pv_groupement_sortant`, `num_courrier_depart`, `num_courrier_arrivee`, `date_courrier_arrivee`, `num_reference_siege`, `date_reference_siege`, `lien_reference_siege`, `decision_ca`, `num_decision_ca`, `date_decision_ca`, `personnel_saisie_secteur`, `date_saisie_decision_ca`, `personnel_saisie_decision_ca`, `date_courrier_depart`, `motif`, `code_groupement_sortant`, `code_groupement_entrant`, `lien_decision_ca`) VALUES
	(1, 1, NULL, 'S-1110051006', '321', '2020-10-14', '05fdcd2a19185765dd0abbff28c204dd.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'c1d3f98b6644e54b1e5a4f3b23d5955c.jpeg'),
	(2, 2, 'S-1001002', 'S-11100551007', '321', '2020-10-14', '05fdcd2a19185765dd0abbff28c204dd.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'c1d3f98b6644e54b1e5a4f3b23d5955c.jpeg'),
	(3, 3, 'S-1001003', 'S-111005551008', '321', '2020-10-14', '05fdcd2a19185765dd0abbff28c204dd.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'c1d3f98b6644e54b1e5a4f3b23d5955c.jpeg'),
	(4, 4, 'S-1001004', 'S-1110055551009', '321', '2020-10-14', '05fdcd2a19185765dd0abbff28c204dd.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'c1d3f98b6644e54b1e5a4f3b23d5955c.jpeg'),
	(5, 1, 'S-1110051006', 'S-11100555551010', '321', '2020-10-14', '971ebda118114f432d5c6b6906680c23.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'cdc93cb40c51c26e5983de354ebb7601.jpeg'),
	(6, 2, 'S-11100551007', 'S-111005555551011', '321', '2020-10-14', '971ebda118114f432d5c6b6906680c23.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'cdc93cb40c51c26e5983de354ebb7601.jpeg'),
	(7, 3, 'S-111005551008', 'S-1110055555551012', '321', '2020-10-14', '971ebda118114f432d5c6b6906680c23.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'cdc93cb40c51c26e5983de354ebb7601.jpeg'),
	(8, 4, 'S-1110055551009', 'S-11100555555551013', '321', '2020-10-14', '971ebda118114f432d5c6b6906680c23.jpeg', '321', '321', '2020-10-02', '321', '2020-10-21', NULL, 'EnCours', '32132', '0213-12-31', NULL, '2020-10-23', NULL, '2020-10-22', '321', 'S-111005', 'sep1', 'cdc93cb40c51c26e5983de354ebb7601.jpeg');
/*!40000 ALTER TABLE `transfert_eleveur` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.troupeau: ~0 rows (approximately)
/*!40000 ALTER TABLE `troupeau` DISABLE KEYS */;
INSERT INTO `troupeau` (`id`, `eleveur_id`, `categorie`, `date_ctegorie`) VALUES
	(1, NULL, 'Elite', NULL);
/*!40000 ALTER TABLE `troupeau` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.troupeau_inventaire: ~0 rows (approximately)
/*!40000 ALTER TABLE `troupeau_inventaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `troupeau_inventaire` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.type_contrat: ~2 rows (approximately)
/*!40000 ALTER TABLE `type_contrat` DISABLE KEYS */;
INSERT INTO `type_contrat` (`id`, `libelle_fr`, `libelle_ar`, `acquis_mois`) VALUES
	(1, 'CDI', 'عقد دائم', 15000),
	(2, 'CDD', 'عقد محدد المدة', 17000);
/*!40000 ALTER TABLE `type_contrat` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.type_intervention: ~0 rows (approximately)
/*!40000 ALTER TABLE `type_intervention` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_intervention` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.type_saillie: ~0 rows (approximately)
/*!40000 ALTER TABLE `type_saillie` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_saillie` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.type_source_medicament: ~0 rows (approximately)
/*!40000 ALTER TABLE `type_source_medicament` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_source_medicament` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.vaccination_compagne: ~0 rows (approximately)
/*!40000 ALTER TABLE `vaccination_compagne` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccination_compagne` ENABLE KEYS */;

-- Dumping data for table si_anoc_bd.versement_banque: ~7 rows (approximately)
/*!40000 ALTER TABLE `versement_banque` DISABLE KEYS */;
INSERT INTO `versement_banque` (`id`, `groupement_id`, `technicien_id`, `banque_id`, `rib`, `date_operation`, `total_fonctionnement`, `total_cotisation`, `montant`, `recu_versement_num`, `obs`, `rubrique`, `date_banque`, `ref`, `date_avis`, `num_avis`, `file_avis`, `personnel_saisie_recette`, `date_saisie_recette`, `mois`) VALUES
	(2, 3, 2, 2, '1234', '2020-10-25', 4120, 60, 4560, NULL, 'aze', NULL, '2020-10-25', 'Eleveur', '2020-10-21', 'zea', '5fe9498a138e969608c33345463c810e.jpeg', 'technicien@anoc.ma', '2020-10-25', 'Octobre'),
	(4, 3, 2, 2, '1234', '2020-10-27', 340, 40, 380, NULL, '', NULL, '2020-10-27', 'Eleveur', '0021-12-31', '321', 'f1e2d63fb7efd451fad7799c67229962.jpeg', 'technicien@anoc.ma', '2020-10-27', 'Octobre'),
	(5, 3, 2, 2, '1234', '2020-10-27', 120, 40, 160, NULL, '', NULL, '2020-10-27', 'Eleveur', '2132-12-31', '321', '4ecce6f0c7cbea95bf3e099620521952.jpeg', 'technicien@anoc.ma', '2020-10-27', 'Octobre'),
	(6, 3, NULL, 2, '1234', NULL, NULL, NULL, 60, NULL, '', '2', '2020-10-27', 'Anoc', '2020-10-27', '321', 'bce4958820c16ea0319975f5074e002c.jpeg', 'technicien@anoc.ma', '2020-10-27', 'Octobre'),
	(7, 3, NULL, 2, '1234', NULL, NULL, NULL, 60, NULL, '', '2', '2020-10-27', 'Anoc', '2020-10-27', '321', '5fbfdd13ee2a8d4c23f31d557896a09c.jpeg', 'technicien@anoc.ma', '2020-10-27', 'Octobre'),
	(8, 3, NULL, 2, '1234', NULL, NULL, NULL, 50, NULL, 'yes', '2', '2020-10-28', 'Anoc', '5555-05-05', '12345', 'a2edebf7755821baa6e692fc6064cc9d.jpeg', 'charge_comptabilite@anoc.ma', '2020-10-28', 'Octobre'),
	(9, 3, NULL, 2, '1234', NULL, NULL, NULL, 100, NULL, '3215', '2', '2020-10-28', 'Anoc', '0021-12-31', '321', '28e8963b17fd4bb66b6386111e5b0875.jpeg', 'technicien@anoc.ma', '2020-10-28', 'Octobre'),
	(10, 3, 2, 2, '1234', '2020-10-28', 4000, 20, 4020, NULL, '', NULL, '2020-10-28', 'Eleveur', '2020-10-28', '321', '54e5f4a8e94a3936bd41264496503f4b.jpeg', 'technicien@anoc.ma', '2020-10-28', 'Octobre');
/*!40000 ALTER TABLE `versement_banque` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
