-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 juin 2021 à 17:05
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
  `NomCarte` varchar(50) NOT NULL,
  `TypeCarte` varchar(15) NOT NULL,
  `LienImage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Nom` (`NomCarte`),
  KEY `LienImage` (`LienImage`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

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
(47, 'Sceau Hiératique des Sphères Divines', 'Extra', '');

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
(1, 15, 3);

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
