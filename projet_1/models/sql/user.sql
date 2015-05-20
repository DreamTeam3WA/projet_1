-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 20 Mai 2015 à 16:40
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
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(512) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom` varchar(64) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(64) COLLATE utf8_bin NOT NULL,
  `date_naissance` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nbr_sujets` int(11) NOT NULL,
  `avatar` varchar(512) COLLATE utf8_bin NOT NULL,
  `droits` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `date_register`, `nom`, `prenom`, `date_naissance`, `nbr_sujets`, `avatar`, `droits`) VALUES
(1, 'mikiletoss', 'mdp', 'don_cabral@hotmail.fr', '2015-05-15 09:21:07', '', '', '0000-00-00 00:00:00', 0, '', 0),
(2, 'test', 'test', '', '2015-05-20 08:01:23', '', '', '0000-00-00 00:00:00', 0, '', 0),
(3, 'Mika', 'mdp', 'don_cabral@hotmail.fr', '2015-05-20 10:04:02', '', '', '0000-00-00 00:00:00', 0, '', 0),
(4, 'MikaMika', 'mika', 'Mika@hotmail.fr', '2015-05-20 11:41:51', '', '', '0000-00-00 00:00:00', 0, '', 0),
(5, 'admin', 'admin', 'admin@hotmail.fr', '2015-05-20 13:42:15', '', '', '0000-00-00 00:00:00', 0, '', 0),
(6, 'admin', 'admin', 'admin@hotmail.fr', '2015-05-20 13:46:26', '', '', '0000-00-00 00:00:00', 0, '', 0),
(7, 'admin', 'admin', 'admin@hotmail.fr', '2015-05-20 13:46:47', '', '', '0000-00-00 00:00:00', 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
