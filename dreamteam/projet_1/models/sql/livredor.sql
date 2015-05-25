-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 18 Mai 2015 à 10:25
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
-- Structure de la table `livredor`
--

CREATE TABLE IF NOT EXISTS `livredor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) COLLATE utf8_bin NOT NULL,
  `titre` varchar(32) COLLATE utf8_bin NOT NULL,
  `description` varchar(2048) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `livredor`
--

INSERT INTO `livredor` (`id`, `nom`, `titre`, `description`, `date`) VALUES
(1, 'Steve', 'EXCELLENT!!!!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eaque perferendis mollitia numquam quae harum voluptatum veritatis magnam, dicta aspernatur quia delectus beatae! Eaque consequatur, expedita quidem nostrum dolor veniam!', '2015-05-18 08:23:28'),
(2, 'Toto ;-)', 'Tres bien !!!!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eaque perferendis mollitia numquam quae harum voluptatum veritatis magnam, dicta aspernatur quia delectus beatae! Eaque consequatur, expedita quidem nostrum dolor veniam!', '2015-05-18 08:23:28'),
(3, 'Laurent', 'super site !!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum tenetur in consequatur incidunt sapiente ab laudantium vero odio numquam totam! Doloribus autem sit sed totam tenetur quos recusandae, quibusdam laboriosam?', '2015-05-18 08:24:59'),
(4, 'Eric', 'Un peu moche !!!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum tenetur in consequatur incidunt sapiente ab laudantium vero odio numquam totam! Doloribus autem sit sed totam tenetur quos recusandae, quibusdam laboriosam?', '2015-05-18 08:24:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
