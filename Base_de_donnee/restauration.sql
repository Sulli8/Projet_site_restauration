-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 04 fév. 2020 à 10:02
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restauration`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `telephone` int(11) NOT NULL,
  `mot_de_passe` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`ID`, `nom`, `prenom`, `mail`, `adresse`, `telephone`, `mot_de_passe`) VALUES
(1, 'fadi', 'az', 'sullivan.sextius@gmail.com', '2 avenue du jean ', 0, 'az'),
(2, 'az', 'az', 'az', 'az', 1, 'az'),
(3, 'az', 'az', 'az', 'az', 1, 'az');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `repas` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`ID`, `repas`) VALUES
(46, '10.90'),
(47, '25.90'),
(48, '10.90'),
(49, '10.90'),
(50, '10.90'),
(51, '10.90'),
(52, '20.90'),
(53, '20.90'),
(54, '20.90'),
(55, '20.90'),
(56, '20.90'),
(57, '15.60'),
(58, '20.90'),
(59, '20.90'),
(60, '20.90'),
(61, '15.60'),
(62, '20.90'),
(63, '15.60'),
(64, '15.60'),
(65, '20.90'),
(66, '20.90'),
(67, '20.90'),
(68, '10.90'),
(69, '10.90'),
(70, '20.90');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `telephone` varchar(40) NOT NULL,
  `dates` varchar(40) NOT NULL,
  `nombre_de_personne` int(2) NOT NULL,
  `heure` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`ID`, `nom`, `prenom`, `mail`, `telephone`, `dates`, `nombre_de_personne`, `heure`) VALUES
(1, 'az', 'az', 'az.az@gmail.com', '0782676026', '122', 12, '12'),
(2, 'az', 'az', 'az.az@gmail.com', '0782676026', '122', 12, '12'),
(3, 'az', 'az', 'az.az@gmail.com', '0782676026', '122', 12, '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
