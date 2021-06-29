-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 juin 2021 à 14:12
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
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id`, `NomCarte`, `TypeCarte`, `LienImage`) VALUES
(1, 'Assaut de l\'Air - As - Raye', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-259.jpg'),
(2, 'Assaut de l\'Air - As - Roze', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/IGAS/IGAS-20p.jpg'),
(3, 'Floraison de Cendres et Joyeux Printemps', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-11B.jpg'),
(4, 'Ogre Fantômes et Lapins des Neiges', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-9B.jpg'),
(5, 'Illusioniste d\'Effet', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDCH/SDCH-17.jpg'),
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
(16, 'Assaut de l\'air - As - Kaina', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP20/MP20-23.jpg'),
(17, 'Dragon Bombe Topologique', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUDE/DUDE-25.jpg'),
(18, 'Dragon Epéborelle', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-97.jpg'),
(19, 'Assaut de l\'air - As - Kagari', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-38B.jpg'),
(20, 'Assaut de l\'air - As - Shizuku', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-258.jpg'),
(21, 'Assaut de l\'air - As - Hayaté', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-109.jpg'),
(22, 'Assaut de l\'air - As - Zeke', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUOV/DUOV-24.jpg'),
(23, 'Dragonirène Lorpar', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYFI/MYFI-21.jpg'),
(24, 'Dragonirène Tinkhec', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYFI/MYFI-19.jpg'),
(25, 'Dragonirène Ernus', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYFI/MYFI-15.jpg'),
(26, 'Chambre Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/ETCO/ETCO-101.jpg'),
(27, 'Cuisine Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-22.jpg'),
(28, 'Petit Salon Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-23.jpg'),
(29, 'Infirmière Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-20.jpg'),
(30, 'Linge Dragonirène', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-21.jpg'),
(31, 'Appelé par la Tombe', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-156.jpg'),
(32, 'Dragonirène Adieux', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/IGAS/IGAS-64.jpg'),
(33, 'Dragonirène Bienvenue', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYFI/MYFI-24.jpg'),
(34, 'Dragonirène Hospitalité', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYFI/MYFI-23.jpg'),
(35, 'Dragonirène Passage', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYFI/MYFI-25.jpg'),
(36, 'Pot de Cupidité', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/YGLD/YGLD-68.jpg'),
(37, 'Sacrifice Inutile', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SBCB/SBCB-139S.jpg'),
(38, 'Super Polymérisation', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-47.jpg'),
(39, 'Dragonirène Pause', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYFI/MYFI-26.jpg'),
(40, 'Inifini Éphémère', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-52.jpg'),
(41, 'Dragonirène Sheou', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/ETCO/ETCO-41.jpg'),
(42, 'Dragon Chargeborrelle', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDRR/SDRR-44.jpg'),
(43, 'Maison Dragonirène', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-27.jpg'),
(44, 'Triphyovérutum Prédaplante', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED5/LED5-45.jpg'),
(45, 'Dragon Fusion Venin Affamé', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED5/LED5-52.jpg'),
(46, 'Dragostapelia Prédaplante', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED5/LED5-53.jpg'),
(47, 'Sceau Hiératique des Sphères Divines', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/GFTP/GFTP-53.jpg'),
(48, 'Talaya, Princesse Des Fleurs De Cerisier', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SESL/SESL-52.jpg'),
(49, 'Bergamote Arômage', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/CORE/CORE-37.jpg'),
(50, 'Marjolaine Arômage', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/CHIM/CHIM-18.jpg'),
(51, 'Romarin Arômage', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUPO/DUPO-83.jpg'),
(52, 'Cananga Arômage', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP16/MP16-70.jpg'),
(53, 'Chevalier De La Rose Du Crépuscule', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/LDS2/LDS2-96.jpg'),
(54, 'Floraison De Feu', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SESL/SESL-40.jpg'),
(55, 'Jasmin Arômage', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUPO/DUPO-82.jpg'),
(56, 'Amoureux de la Rose', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/LDS2/LDS2-102.jpg'),
(57, 'Angélique Aromaséraphie', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/INOV/INOV-31.jpg'),
(58, 'Jardin d\'Arôma', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP16/MP16-86.jpg'),
(59, 'Jardinage d\'Arôma', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/CHIM/CHIM-59.jpg'),
(60, 'Poison du Vieillard', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/YS14/YS14-30.jpg'),
(61, 'Pot de Dualité', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-26.jpg'),
(62, 'Terra Formation', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-141.jpg'),
(63, 'Typhon d\'Espace Mystique', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSA/SDSA-33.jpg'),
(64, 'Vents Bénis', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/CHIM/CHIM-74.jpg'),
(65, 'Vents Humides', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP16/MP16-92.jpg'),
(66, 'Douce Marjolaine Arômaséraphie', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/CHIM/CHIM-34.jpg'),
(67, 'Romarin Arômaséraphie', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/INOV/INOV-47.jpg'),
(68, 'Jasmin Arômaséraphie', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUDE/DUDE-25.jpg'),
(69, 'Lienkuriboh', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/MAGO/MAGO-135.jpg'),
(70, 'Yeux Impairs, Roi suprême du dragon', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-78.jpg'),
(71, 'Dragon pendule aux yeux impairs', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUPO/DUPO-105.jpg'),
(72, 'Magicien balourdragon', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-16.jpg'),
(73, 'Sorcier chronographe', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED6/LED6-52.jpg'),
(74, 'Darkwurm, Roi suprême du dragon', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/BLRR/BLRR-63.jpg'),
(75, 'Magicien croc noir', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-4.jpg'),
(76, 'Magicien du ciel potartiste', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED6/LED6-45.jpg'),
(77, 'Magicien poison violet', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-6.jpg'),
(78, 'Magicienne aile blanche', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-5.jpg'),
(79, 'Magicienne de l\'harmonie', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED6/LED6-53.jpg'),
(80, 'Magicien observateur du temps', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED6/LED6-50.jpg'),
(81, 'Appel pendule', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-36.jpg'),
(82, 'Arrêt pendule', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP20/MP20-98.jpg'),
(83, 'Fusion pendule', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/DPDG/DPDG-5.jpg'),
(84, 'L\'alliance des dueliste', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/BLRR/BLRR-97.jpg'),
(85, 'Pendulegraphe des étoiles', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-7.jpg'),
(86, 'Assaut de la sorcière', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP20/MP20-35.jpg'),
(87, 'Pendulegraphe du temps', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-8.jpg'),
(88, 'Rage suprême', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/COTD/COTD-70.jpg'),
(89, 'Z-arc, roi suprême', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED6/LED6-54.jpg'),
(90, 'Ailes claire, roi suprême du dragon', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-106.jpg'),
(91, 'Dragon fusion venin affamé', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED5/LED5-52.jpg'),
(92, 'Dragon poussière d\'étoiles', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/TOCH/TOCH-50.jpg'),
(93, 'Paladin de l\'illumination', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-31.jpg'),
(94, 'Venin affamé, roi suprême du dragon', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-102.jpg'),
(95, 'Dragon du vortex aux yeux impairs', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-103.jpg'),
(96, 'Dragon météorimpact aux yeux impairs', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-107.jpg'),
(97, 'Dragon suprêmes aux yeux impairs', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-110.jpg'),
(98, 'Magicien étoiles du temps', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/PEVO/PEVO-9.jpg'),
(99, 'Rébellion des ténèbres, roi suprême du dragon', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/LEDD/LEDD-109.jpg'),
(100, 'Soldat du Lustre Noir - Emissaire du Commencement', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/TOCH/TOCH-29.jpg'),
(101, 'Dragon Armé Des Ténèbres', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-14.jpg'),
(102, 'Bête Marionnette de l\'Ombre', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-8.jpg'),
(103, 'Ariel Marionnette de l\'Ombre Nae', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-3.jpg'),
(104, 'Clown Farceur Mageartiste', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-16.jpg'),
(105, 'Dragon Marionnette de l\'Ombre', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/OP15/OP15-4.jpg'),
(106, 'Squamate Marionnette de l\'Ombre', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-6.jpg'),
(107, 'Hérisson Marionnette de l\'Ombre', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-5.jpg'),
(108, 'Mathématicien', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/DLCS/DLCS-25P.jpg'),
(109, 'Wendi Marionnette de l\'Ombre Ree', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-2.jpg'),
(110, 'Faucon Marionnette de l\'Ombre', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-4.jpg'),
(111, 'Keios Marionnette de l\'Ombre QaD', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-1.jpg'),
(112, 'Fusion Marionnette de l\'Ombre', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-49.jpg'),
(113, 'Fusion Marionnette de l\'Ombre El', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-24.jpg'),
(114, 'Invitation Des Ténèbres', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SS05/SS05-26.jpg'),
(115, 'Jeux de l\'Ombre Sinistres', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-35.jpg'),
(116, 'Noyau Marionnette de l\'Ombre', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-34.jpg'),
(117, 'Resh Incarnation Marionnette de l\'Ombre', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-33.jpg'),
(118, 'Shekhinaga Marionnette de l\'Ombre El', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-48.jpg'),
(119, 'Anoyatyllis Marionnette de l\'Ombre El', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-43.jpg'),
(120, 'Constructution Marionnette de l\'Ombre El', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-46.jpg'),
(121, 'Grysta Marionnette de l\'Ombre El', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-41.jpg'),
(122, 'Apkallone Marionnette de l\'Ombre El', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-45.jpg'),
(123, 'Wendigo Marionnette de l\'Ombre El', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-42.jpg'),
(124, 'Winda Marionnette de l\'Ombre El', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-47.jpg'),
(125, 'Construction Marionnette de L\'ombre', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-44.jpg'),
(126, 'Yasha, Mayakashi du Squelette', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-31.jpg'),
(127, 'Gozuki', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SR07/SR07-13.jpg'),
(128, 'Mezuki', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/SR07/SR07-12.jpg'),
(129, 'Shafu, Mayakashi des Roues', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-30.jpg'),
(130, 'Dakki, Mayakashi de la Grâce', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-27.jpg'),
(131, 'Tsukahagi, Mayakashi du Poison', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-28.jpg'),
(132, 'Hajun, Mayakashi des Ailes', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-29.jpg'),
(133, 'Yuki-Musume, Mayakashi de la Glace', 'Monstre', 'https://www.otk-expert.fr/cartes/yugioh_ext/DANE/DANE-16.jpg'),
(134, 'Canon Immortel Des Enfers', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/LCJW/LCJW-214.jpg'),
(135, 'Enterrement d\'une Autre Dimension', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SR07/SR07-32.jpg'),
(136, 'Hiver Mayakashi', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/DANE/DANE-57.jpg'),
(137, 'L\'Appel de la Momie', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SR07/SR07-28.jpg'),
(138, 'Lutte de Pouvoir Zombie', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/SR07/SR07-24.jpg'),
(139, 'Rencontre d\'un Fantôme et d\'une Fille - Manuscrit Mayakashi', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/IGAS/IGAS-63.jpg'),
(140, 'Retour Mayakashi', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-38.jpg'),
(141, 'Royaume Vampire', 'Magie', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP14/MP14-171.jpg'),
(142, 'Force de Miroir', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/EGS1/EGS1-34.jpg'),
(143, 'Métamorphose Mayakashi', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-39.jpg'),
(144, 'Pagaille Mayakashi', 'Piege', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUOV/DUOV-56.jpg'),
(145, 'Gashadokuro, Mayakashi du Squelette', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-36.jpg'),
(146, 'Saga-Soleil Shiranui', 'Extra', 'https://static.wikia.nocookie.net/yugioh-gx/images/7/7e/SagaSoleilShiranui-MP17-FR-R-1E.png/revision/latest/scale-to-width-down/300?cb=20180904194433&path-prefix=fr'),
(147, 'Yoko, Mayakashi de la Grâce', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-35.jpg'),
(148, 'Tengu, Mayakashi des Ailes', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-34.jpg'),
(149, 'Tsuchigumo, Mayakashi du Poison', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-33.jpg'),
(150, 'Oboro-Guruma, Mayakashi des Roues', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-32.jpg'),
(151, 'Yuki-Onna, Mayakashi de la Glace', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/HISU/HISU-37.jpg'),
(152, 'Yuki-Onna, Mayakashi du Zéro Absolu', 'Extra', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUOV/DUOV-25.jpg');

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
(2, 24, 2),
(2, 25, 3),
(2, 26, 3),
(2, 27, 3),
(2, 28, 3),
(2, 29, 2),
(2, 30, 1),
(2, 31, 2),
(2, 32, 2),
(2, 33, 2),
(2, 34, 2),
(2, 35, 2),
(2, 36, 2),
(2, 37, 2),
(2, 38, 2),
(2, 39, 2),
(2, 40, 2),
(2, 41, 2),
(2, 42, 3),
(2, 43, 2),
(2, 44, 2),
(2, 45, 2),
(2, 46, 2),
(2, 42, 1),
(2, 18, 1),
(2, 47, 2),
(3, 48, 2),
(3, 49, 2),
(3, 50, 2),
(3, 51, 3),
(3, 52, 2),
(3, 53, 3),
(3, 54, 3),
(3, 55, 3),
(3, 56, 2),
(3, 57, 2),
(3, 58, 2),
(3, 59, 2),
(3, 60, 2),
(3, 61, 2),
(3, 62, 2),
(3, 63, 2),
(3, 64, 2),
(3, 65, 2),
(3, 66, 3),
(3, 67, 3),
(3, 17, 2),
(3, 68, 3),
(3, 69, 2),
(4, 70, 1),
(4, 71, 1),
(4, 72, 2),
(4, 73, 2),
(4, 74, 3),
(4, 75, 2),
(4, 76, 3),
(4, 77, 2),
(4, 78, 2),
(4, 79, 3),
(4, 80, 1),
(4, 81, 3),
(4, 82, 2),
(4, 83, 2),
(4, 84, 3),
(4, 85, 2),
(4, 86, 2),
(4, 87, 2),
(4, 88, 2),
(4, 89, 1),
(4, 90, 1),
(4, 91, 1),
(4, 92, 1),
(4, 93, 2),
(4, 94, 2),
(4, 95, 1),
(4, 96, 1),
(4, 97, 1),
(4, 98, 2),
(4, 99, 2),
(5, 100, 2),
(5, 101, 1),
(5, 102, 2),
(5, 103, 1),
(5, 104, 1),
(5, 105, 2),
(5, 106, 3),
(5, 107, 2),
(5, 108, 3),
(5, 109, 3),
(5, 110, 1),
(5, 111, 2),
(5, 112, 3),
(5, 113, 3),
(5, 114, 3),
(5, 37, 1),
(5, 38, 3),
(5, 115, 2),
(5, 116, 1),
(5, 117, 1),
(5, 118, 2),
(5, 119, 1),
(5, 120, 3),
(5, 121, 2),
(5, 122, 2),
(5, 123, 1),
(5, 124, 3),
(5, 125, 1),
(6, 126, 2),
(6, 127, 2),
(6, 128, 2),
(6, 129, 3),
(6, 130, 3),
(6, 131, 2),
(6, 132, 3),
(6, 133, 2),
(6, 134, 1),
(6, 135, 2),
(6, 136, 2),
(6, 137, 1),
(6, 138, 2),
(6, 139, 3),
(6, 140, 3),
(6, 141, 1),
(6, 37, 1),
(6, 142, 1),
(6, 143, 3),
(6, 144, 2),
(6, 145, 2),
(6, 146, 1),
(6, 147, 2),
(6, 148, 2),
(6, 149, 2),
(6, 150, 2),
(6, 151, 2),
(6, 152, 2);

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
(1, 'Sky-Striker', 'https://www.otk-expert.fr/cartes/yugioh_ext/MP19/MP19-259.jpg', '[28/02/2020]', 1),
(2, 'Dragon-Maid', 'https://www.otk-expert.fr/cartes/yugioh_ext/MYF1/MYF1-022.jpg', '[06/04/2020]', 1),
(3, 'Aromage', 'https://www.otk-expert.fr/cartes/yugioh_ext/INOV/INOV-047.jpg', '[27/01/2020]', 1),
(4, 'Z-arc', 'https://www.otk-expert.fr/cartes/yugioh_ext/LED6/LED6-054.jpg', '[19/06/2019]', 1),
(5, 'Shadoll', 'https://www.otk-expert.fr/cartes/yugioh_ext/SDSH/SDSH-047.jpg', '[01/11/2020]', 1),
(6, 'Mayakashi', 'https://www.otk-expert.fr/cartes/yugioh_ext/DUOV/DUOV-025.jpg', '[01/11/2020]', 1);

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

--
-- Contraintes pour la table `listedeck`
--
ALTER TABLE `listedeck`
  ADD CONSTRAINT `listedeck_ibfk_1` FOREIGN KEY (`User`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `listedeck` (`User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
