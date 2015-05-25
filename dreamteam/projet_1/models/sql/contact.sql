-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 25 Mai 2015 à 14:48
-- Version du serveur: 5.5.41-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `filrouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `nom` varchar(128) COLLATE utf8_bin NOT NULL,
  `objet` varchar(128) COLLATE utf8_bin NOT NULL,
  `message` varchar(2048) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `nom`, `objet`, `message`, `date`) VALUES
(1, 'hgd', 'hgdhgd', 'hgdhgd', 'hgdhgd', '2015-05-25 11:51:16'),
(2, 'jhfjhf', 'jhfjhf', 'jfjhf', 'jfhjhf', '2015-05-25 11:51:38'),
(3, 'lkhljhlkh', 'eazrze', 'fdsfsdq', 'qdsfgjgkjhljk', '2015-05-25 11:51:51'),
(4, 'lkhljhlkh', 'eazrze', 'fdsfsdq', 'qdsfgjgkjhljk', '2015-05-25 11:58:26'),
(5, 'lkhljhlkh', 'eazrze', 'fdsfsdq', 'qdsfgjgkjhljk', '2015-05-25 11:59:52'),
(6, 'lkhljhlkh', 'eazrze', 'fdsfsdq', 'qdsfgjgkjhljk', '2015-05-25 12:00:08'),
(7, 'lkhljhlkh', 'eazrze', 'fdsfsdq', 'qdsfgjgkjhljk', '2015-05-25 12:00:29'),
(8, 'lkhljhlkh', 'eazrze', 'fdsfsdq', 'qdsfgjgkjhljk', '2015-05-25 12:24:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
