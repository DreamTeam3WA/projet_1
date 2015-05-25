-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 22 Mai 2015 à 17:01
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
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(4096) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_forum` int(11) NOT NULL,
  `id_user` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `description`, `date`, `id_forum`, `id_user`) VALUES
(4, '<p>Énorme ce gars !</p>', '2015-05-19 14:13:28', 4, 0),
(5, '<p>Lol il me fait tellement rire !</p>', '2015-05-19 14:29:30', 4, 0),
(7, '<p>Franchement super article !</p>', '2015-05-20 10:35:17', 4, 0),
(16, '<p>Trop cool styl&eacute;</p>', '2015-05-20 12:48:18', 6, 0),
(17, '<p>aaaaaaaaaaaaaaa</p>', '2015-05-20 13:08:59', 6, 0),
(18, '', '2015-05-20 13:28:22', 6, 0),
(19, '<p>blablabla</p>', '2015-05-20 13:36:03', 6, 0),
(20, '<p>Tropppppppp cooooooooooooool !</p>', '2015-05-21 14:38:18', 10, 0),
(21, '<p>Lol excellent xptrrt mdrrr loool loooool mdrrrr MDRR</p>', '2015-05-21 14:51:27', 2, 0),
(22, '<p>Lol excellent xptrrt mdrrr loool loooool mdrrrr MDRR</p>', '2015-05-21 14:51:45', 2, 0),
(23, '<p>Lol excellent !</p>', '2015-05-22 09:00:21', 12, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
