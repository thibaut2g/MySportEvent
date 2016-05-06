-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 04 Mai 2016 à 00:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mysportevent`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `commentaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `dateredaction` timestamp NOT NULL,
  `etudiant_id` int(11) NOT NULL,
  `evenement_id` int(11) NOT NULL,
  PRIMARY KEY (`commentaire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`commentaire_id`, `message`, `dateredaction`, `etudiant_id`, `evenement_id`) VALUES
(25, 'Salut ! Tu comptes faire combien de km ?', '2016-05-03 21:31:15', 8, 17),
(27, 'Je peux ramener un ballon si tu veux', '2016-05-03 21:47:59', 9, 16),
(30, 'Environ  10 km ça te va ?', '2016-05-03 21:55:48', 11, 17),
(31, 'Salut ! je n''ai jamais fais de semi, il faut beaucoup s''entrainer avant ?', '2016-05-03 22:28:36', 10, 25),
(32, 'ça coûte combien ?', '2016-05-03 22:29:21', 9, 25),
(33, 'Moi je cours une fois par semaine ! et ça coûte 30 euros', '2016-05-03 22:30:03', 8, 25);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE IF NOT EXISTS `etudiants` (
  `etudiant_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `ecole` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`etudiant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`etudiant_id`, `nom`, `prenom`, `datenaissance`, `ecole`, `mail`, `mdp`) VALUES
(8, 'Decrocq', 'Cyrille', '1995-07-03', 'ICAM', 'cyrille@icam.fr', '36d2756d696f6582673acca1a3f96a09'),
(9, 'De Gouberville', 'Thibaut', '1995-07-26', 'ICAM', 'thibaut@icam.fr', 'e4ad5491aeb13e04a4d60de329270da4'),
(10, 'Hannecart', 'Jeremy', '1994-02-16', 'HEI', 'jeremy@hei.fr', 'd7d9701f9abcebc45797a4b04ebc6326'),
(11, 'Dalzon', 'Grégoire', '1995-02-22', 'ISSEN', 'gregoire@issen.fr', '2917b441db21509270e1cb2ae28cbf9f');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `evenement_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_evenement` varchar(50) NOT NULL,
  `date_evenement` date NOT NULL,
  `heure_evenement` time NOT NULL,
  `type_sport` varchar(30) NOT NULL,
  `informations` varchar(255) NOT NULL,
  `nbjoursmax` int(11) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `evenement_admin` int(11) NOT NULL,
  PRIMARY KEY (`evenement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`evenement_id`, `nom_evenement`, `date_evenement`, `heure_evenement`, `type_sport`, `informations`, `nbjoursmax`, `lieu`, `image`, `evenement_admin`) VALUES
(16, 'Football entre ICAM', '2016-05-07', '14:00:00', 'football', 'Bonjour à tous ! j''organise un football dans la cour de la MI ce wk, inscrivez vous si vous êtes motivés !', 10, 'maison des icams', 'img/Football.jpg', 11),
(17, 'Course à la Citadelle', '2016-05-09', '20:00:00', 'running', 'Bonjour, qui est motivé pour aller courir à la Citadelle lundi soir ?', 5, 'Citadelle', 'img/triathlon-running.jpg', 11),
(19, 'Football ouvert à tous', '2016-05-05', '16:00:00', 'football', 'Demain il fait, qui veut aller faire un foot sur terrain synthétique ?\r\nPrenez vos crampons !', 12, 'Stade de Bois Blanc', 'img/4711d7b80000000000000000_MEDIUM.jpg', 10),
(20, 'Course fractioné', '2016-05-18', '19:00:00', 'running', 'Je m''entraine à la course fractionnée, vous pouvez me rejoindre si vous voulez !', 8, 'Départ Cormontaigne', 'img/accueil1.jpg', 9),
(25, 'Semi Marathon', '2016-09-03', '10:00:00', 'running', 'Qui veut faire le semi-marathon de la braderie ?', 50, 'Lille', 'img/PC_Semi-Marathon_01.jpg', 8);

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE IF NOT EXISTS `participe` (
  `etudiant_id` int(11) NOT NULL,
  `evenement_id` int(11) NOT NULL,
  PRIMARY KEY (`etudiant_id`,`evenement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participe`
--

INSERT INTO `participe` (`etudiant_id`, `evenement_id`) VALUES
(8, 17),
(8, 25),
(9, 16),
(9, 20),
(9, 25),
(10, 19),
(10, 25),
(11, 16),
(11, 17);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
