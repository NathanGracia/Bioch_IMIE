-- phpMyAdmin SQL Dump
-- version 4.8.3 
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 08 déc. 2018 à 01:04
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `biochimie`
--

-- --------------------------------------------------------

--
-- Structure de la table `parties`
--

DROP TABLE IF EXISTS `parties`;
CREATE TABLE IF NOT EXISTS `parties` (
  `nom` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `victoire` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parties`
--

INSERT INTO `parties` (`nom`, `date`, `victoire`, `id`) VALUES
('partie1', '2018-12-07', 1, 1),
('Alchimie', '2018-12-08', 1, 2),
('les meilleurs', '2018-12-08', 1, 3),
('les meilleurs', '2018-12-08', 1, 4),
('les meia', '2018-12-08', 1, 5),
('Y\'a un mec derriÃ¨re toi nico', '2018-12-08', 1, 6),
('Vend dacia duster 5 places familiales', '2018-12-08', 1, 7),
('On peux pas rentrer de defaites mdr', '2018-12-08', 1, 8),
('Ah si c\'est bon j\'ai reglÃ©', '2018-12-08', 0, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
