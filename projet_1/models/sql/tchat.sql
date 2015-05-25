-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 15 Mai 2015 à 16:25
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
-- Structure de la table `tchat`
--

CREATE TABLE IF NOT EXISTS `tchat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Contenu de la table `tchat`
--

INSERT INTO `tchat` (`id`, `date`, `message`) VALUES
(1, '2015-05-15 13:18:28', 'lol ptdr'),
(2, '2015-05-15 13:18:56', 'hahahah hahahha haha h ahah hah'),
(3, '2015-05-15 13:18:56', 'il fait super beau aujourd''hui lol'),
(4, '2015-05-15 13:19:15', 'toto est naze'),
(5, '2015-05-15 14:10:18', 'klhfgv fgklnj gnkj ngskgj nhsgjknb soij gsfjkgnb jsgnb lkjsgn '),
(6, '2015-05-15 14:10:18', 'Il était une fois blabla bla bla '),
(7, '2015-05-15 14:10:29', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!'),
(8, '2015-05-15 14:10:29', 'Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!'),
(9, '2015-05-15 14:10:43', 'Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!'),
(10, '2015-05-15 14:10:43', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
