-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 11 juin 2021 à 14:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yugioh`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomCarte` varchar(100) NOT NULL,
  `TypeCarte` varchar(15) NOT NULL,
  `LienImage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Nom` (`NomCarte`),
  KEY `LienImage` (`LienImage`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id`, `NomCarte`, `TypeCarte`, `LienImage`) VALUES
(1, 'Assaut de l\'Air - As - Raye', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-259.jpg'),
(2, 'Assaut de l\'Air - As - Roze', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/IGAS/IGAS-020.jpg'),
(3, 'Floraison de Cendres et Joyeux Printemps', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUDE/DUDE-003.jpg'),
(4, 'Ogre Fantômes et Lapins des Neiges', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUDE/DUDE-001.jpg'),
(5, 'Illusioniste d\'Effet', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/ETCO/ETCO-100.jpg'),
(6, 'Assaut de l\'air - Espace Aérien - Zone Zéro', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-269.jpg'),
(7, 'Assaut de l\'air - Manoeuvre - Ondes de Brouillage', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-262.jpg'),
(8, 'Assaut de l\'air - Manoeuvre - Postcombustion !', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-261.jpg'),
(9, 'Assaut de l\'air - Mécha - Ancre Veuve', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-264.jpg'),
(10, 'Assaut de l\'air - Mécha - Boost Aigle', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-265.jpg'),
(11, 'Assaut de l\'air - Mécha - Canon Requin', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-266.jpg'),
(12, 'Assaut de l\'air - Mécha - Drones Frelon', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-263.jpg'),
(13, 'Assaut de l\'air - Méchamodules - Multirôle', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-268.jpg'),
(14, 'Assaut de l\'air - Mécharmure - Base Hercule', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-267.jpg'),
(15, 'Assaut de l\'air - Mobilisation - A l\'attaque !', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-260.jpg'),
(16, 'Assaut de l\'air - As - Kaina', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-023.jpg'),
(17, 'Dragon Bombe Topologique', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUDE/DUDE-025.jpg'),
(18, 'Dragon Epéborelle', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-097.jpg'),
(19, 'Assaut de l\'air - As - Kagari', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUOV/DUOV-060.jpg'),
(20, 'Assaut de l\'air - As - Shizuku', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-258.jpg'),
(21, 'Assaut de l\'air - As - Hayaté', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-109.jpg'),
(22, 'Assaut de l\'air - As - Zeke', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUOV/DUOV-024.jpg'),
(23, 'Dragonirène Lorpar', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-021.jpg'),
(24, 'Dragonirène Tinkhec', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-019.jpg'),
(25, 'Dragonirène Ernus', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-015.jpg'),
(26, 'Chambre Dragonirène', 'Monstre', ''),
(27, 'Cuisine Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-018.jpg'),
(28, 'Petit Salon Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-020.jpg'),
(29, 'Infirmière Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-014.jpg'),
(30, 'Linge Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-016.jpg'),
(31, 'Appelé par la Tombe', 'Magie', ''),
(32, 'Dragonirène Adieux', 'Magie', ''),
(33, 'Dragonirène Bienvenue', 'Magie', ''),
(34, 'Dragonirène Hospitalité', 'Magie', ''),
(35, 'Dragonirène Passage', 'Magie', ''),
(36, 'Pot de Cupidité', 'Magie', ''),
(37, 'Sacrifice Inutile', 'Magie', ''),
(38, 'Super Polymérisation', 'Magie', ''),
(39, 'Dragonirène Pause', 'Piège', ''),
(40, 'Inifini Éphémère', 'Piège', ''),
(41, 'Dragonirène Sheou', 'Extra', ''),
(42, 'Dragon Chargeborrelle', 'Extra', ''),
(43, 'Maison Dragonirène', 'Extra', ''),
(44, 'Triphyovérutum Prédaplante', 'Extra', ''),
(45, 'Dragon Fusion Venin Affamé', 'Extra', ''),
(46, 'Dragostapelia Prédaplante', 'Extra', ''),
(47, 'Sceau Hiératique des Sphères Divines', 'Extra', ''),
(48, 'Talaya, Princesse Des Fleurs De Cerisier', 'Monstre', ''),
(49, 'Bergamote Arômage', 'Monstre', ''),
(50, 'Marjolaine Arômage', 'Monstre', ''),
(51, 'Romarin Arômage', 'Monstre', ''),
(52, 'Cananga Arômage', 'Monstre', ''),
(53, 'Chevalier De La Rose Du Crépuscule', 'Monstre', ''),
(54, 'Floraison De Feu', 'Monstre', ''),
(55, 'Jasmin Arômage', 'Monstre', ''),
(56, 'Amoureux de la Rose', 'Monstre', ''),
(57, 'Angélique Aromaséraphie', 'Monstre', ''),
(58, 'Jardin d\'Arôma', 'Magie', ''),
(59, 'Jardinage d\'Arôma', 'Magie', ''),
(60, 'Poison du Vieillard', 'Magie', ''),
(61, 'Pot de Dualité', 'Magie', ''),
(62, 'Terra Formation', 'Magie', ''),
(63, 'Typhon d\'Espace Mystique', 'Magie', ''),
(64, 'Vents Bénis', 'Piège', ''),
(65, 'Vents Humides', 'Piège', ''),
(66, 'Douce Marjolaine Arômaséraphie', 'Extra', ''),
(67, 'Romarin Arômaséraphie', 'Extra', ''),
(68, 'Dragon Bombe Topologique', 'Extra', ''),
(69, 'Jasmin Arômaséraphie', 'Extra', ''),
(70, 'Lienkuriboh', 'Extra', ''),
(71, 'Yeux Impairs, Roi suprême du dragon', 'Monstre', ''),
(72, 'Dragon pendule aux yeux impairs', 'Monstre', ''),
(73, 'Magicien balourdragon', 'Monstre', ''),
(74, 'Sorcier chronographe', 'Monstre', ''),
(75, 'Darkwurm, Roi suprême du dragon', 'Monstre', ''),
(76, 'Magicien croc noir', 'Monstre', ''),
(77, 'Magicien du ciel potartiste', 'Monstre', ''),
(78, 'Magicienne poison violet', 'Monstre', ''),
(79, 'Magicienne aile blanche', '', ''),
(80, 'Magicienne de l\'harmonie', 'Monstre', ''),
(81, 'Magicien observateur du temps', 'Monstre', ''),
(82, 'Appel pendule', 'Magie', ''),
(83, 'Arrêt pendule', 'Magie', ''),
(84, 'Fusion pendule', 'Magie', ''),
(85, 'L\'alliance des dueliste', 'Magie', ''),
(86, 'Pendulegraphe des étoiles', 'Magie', ''),
(87, 'Assaut de la sorcière', 'Piège', ''),
(88, 'Pendulegraphe du temps', 'Piège', ''),
(89, 'Rage suprême', 'Piège', ''),
(90, 'Z-arc, roi suprême', 'Extra', ''),
(91, 'Ailes claire, roi suprême du dragon', 'Extra', ''),
(92, 'Dragon fusion venin affamé', 'Extra', ''),
(93, 'Dragon poussière d\'étoiles', 'Extra', ''),
(94, 'Paladin de l\'illumination', 'Extra', ''),
(95, 'Venin affamé, roi suprême du dragon', 'Extra', ''),
(96, 'Dragon du vortex aux yeux impairs', 'Extra', ''),
(97, 'Dragon météorimpact aux yeux impairs', 'Extra', ''),
(98, 'Dragon suprêmes aux yeux impairs', 'Extra', ''),
(99, 'Magicien étoiles du temps', 'Extra', ''),
(100, 'Rébellion des ténèbres, roi suprême du dragon', 'Extra', ''),
(101, 'Soldat du Lustre Noir - Emissaire du Commencement', 'Monstre', ''),
(102, 'Dragon Armé Des Ténèbres', 'Monstre', ''),
(103, 'Bête Marionnette de l\'Ombre', 'Monstre', ''),
(104, 'Ariel Marionnette de l\'Ombre Nae', 'Monstre', ''),
(105, 'Clown Farceur Mageartiste', 'Monstre', ''),
(106, 'Dragon Marionnette de l\'Ombre', 'Monstre', ''),
(107, 'Squamate Marionnette de l\'Ombre', 'Monstre', ''),
(108, 'Hérisson Marionnette de l\'Ombre', 'Monstre', ''),
(109, 'Mathématicien', 'Monstre', ''),
(110, 'Wendi Marionnette de l\'Ombre Ree', 'Monstre', ''),
(111, 'Faucon Marionnette de l\'Ombre', 'Monstre', ''),
(112, 'Keios Marionnette de l\'Ombre QaD', 'Monstre', ''),
(113, 'Fusion Marionnette de l\'Ombre', 'Magie', ''),
(114, 'Fusion Marionnette de l\'Ombre El', 'Magie', ''),
(115, 'Invitation Des Ténèbres', 'Magie', ''),
(116, 'Jeux de l\'Ombre Sinistres', 'Piège', ''),
(117, 'Noyau Marionnette de l\'Ombre', 'Piège', ''),
(118, 'Resh Incarnation Marionnette de l\'Ombre', 'Piège', ''),
(119, 'Shekhinaga Marionnette de l\'Ombre El', 'Extra', ''),
(120, 'Anoyatyllis Marionnette de l\'Ombre El', 'Extra', ''),
(121, 'Constructution Marionnette de l\'Ombre El', 'Extra', ''),
(122, 'Grysta Marionnette de l\'Ombre El', 'Extra', ''),
(123, 'Apkallone Marionnette de l\'Ombre El', 'Extra', ''),
(124, 'Wendigo Marionnette de l\'Ombre El', 'Extra', ''),
(125, 'Winda Marionnette de l\'Ombre El', 'Extra', ''),
(126, 'Construction Marionnette de L\'ombre', 'Extra', ''),
(154, 'Yasha, Mayakashi du Squelette', 'Monstre', ''),
(155, 'Gozuki', 'Monstre', ''),
(156, 'Mezuki', 'Monstre', ''),
(157, 'Shafu, Mayakashi des Roues', 'Monstre', ''),
(158, 'Dakki, Mayakashi de la Grâce', 'Monstre', ''),
(159, 'Tsukahagi, Mayakashi du Poison', 'Monstre', ''),
(160, 'Hajun, Mayakashi des Ailes', 'Monstre', ''),
(161, 'Yuki-Musume, Mayakashi de la Glace', 'Monstre', ''),
(162, 'Canon Immortel Des Enfers', 'Magie', ''),
(163, 'Enterrement d\'une Autre Dimension', 'Magie', ''),
(164, 'Hiver Mayakashi', 'Magie', ''),
(165, 'L\'Appel de la Momie', 'Magie', ''),
(166, 'Lutte de Pouvoir Zombie', 'Magie', ''),
(167, 'Rencontre d\'un Fantôme et d\'une Fille - Manuscrit Mayakashi', 'Magie', ''),
(168, 'Retour Mayakashi', 'Magie', ''),
(169, 'Royaume Vampire', 'Magie', ''),
(170, 'Force de Miroir', 'Piège', ''),
(171, 'Métamorphose Mayakash', 'Piège', ''),
(172, 'Pagaille Mayakashi', 'Piège', ''),
(173, 'Gashadokuro, Mayakashi du Squelette', 'Extra', ''),
(174, 'Saga-Soleil Shiranui', 'Extra', ''),
(175, 'Yoko, Mayakashi de la Grâce', 'Extra', ''),
(176, 'Tengu, Mayakashi des Ailes', 'Extra', ''),
(177, 'Tsuchigumo, Mayakashi du Poison', 'Extra', ''),
(178, 'Oboro-Guruma, Mayakashi des Roues', 'Extra', ''),
(179, 'Yuki-Onna, Mayakashi de la Glace', 'Extra', ''),
(180, 'Yuki-Onna, Mayakashi du Zéro Absolu', 'Extra', '');

-- --------------------------------------------------------

--
-- Structure de la table `decklist`
--

DROP TABLE IF EXISTS `decklist`;
CREATE TABLE IF NOT EXISTS `decklist` (
  `idDeck` int(11) NOT NULL,
  `Carte` int(11) NOT NULL,
  `NbCarte` int(11) NOT NULL,
  KEY `idDeck` (`idDeck`),
  KEY `Carte` (`Carte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `decklist`
--

INSERT INTO `decklist` (`idDeck`, `Carte`, `NbCarte`) VALUES
(1, 1, 3),
(1, 2, 3),
(1, 3, 3),
(1, 4, 3),
(1, 5, 3),
(1, 6, 2),
(1, 7, 1),
(1, 8, 1),
(1, 9, 3),
(1, 10, 1),
(1, 11, 1),
(1, 12, 2),
(1, 13, 2),
(1, 14, 3),
(1, 15, 3),
(1, 16, 2),
(1, 17, 1),
(1, 18, 1),
(1, 19, 3),
(1, 20, 3),
(1, 21, 3),
(1, 22, 2),
(2, 23, 2),
(2, 24, 2);

-- --------------------------------------------------------

--
-- Structure de la table `listedeck`
--

DROP TABLE IF EXISTS `listedeck`;
CREATE TABLE IF NOT EXISTS `listedeck` (
  `idNombre` int(11) NOT NULL AUTO_INCREMENT,
  `NomDeck` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `DateCreation` varchar(100) NOT NULL,
  `User` int(11) NOT NULL,
  PRIMARY KEY (`idNombre`),
  KEY `User` (`User`),
  KEY `Nom` (`NomDeck`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `listedeck`
--

INSERT INTO `listedeck` (`idNombre`, `NomDeck`, `Image`, `DateCreation`, `User`) VALUES
(1, 'Sky-Striker', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-259.jpg', 'par Zerzeusse le [28/02/2020]', 1),
(2, 'Dragon-Maid', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-022.jpg', 'par Zerzeusse le [06/04/2020]', 1),
(3, 'Aromage', 'https://www.otk-expert.fr/cartes/yugioh_ext/INOV/INOV-047.jpg', 'par Zerzeusse le [27/01/2020]', 1),
(4, 'Z-arc', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED6/LED6-054.jpg', 'par Zerzeusse le [19/06/2019]', 1),
(5, 'Shadoll', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-047.jpg', 'par Zerzeusse le [01/11/2020]', 1),
(6, 'Mayakashi', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUOV/DUOV-025.jpg', 'par Zerzeusse le [01/11/2020]', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(11) NOT NULL,
  `Mdp` varchar(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `Nom`, `Mdp`) VALUES
(1, 'Greg', 'Greg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `decklist`
--
ALTER TABLE `decklist`
  ADD CONSTRAINT `decklist_ibfk_1` FOREIGN KEY (`Carte`) REFERENCES `carte` (`id`),
  ADD CONSTRAINT `decklist_ibfk_2` FOREIGN KEY (`idDeck`) REFERENCES `listedeck` (`idNombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
