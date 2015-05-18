-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 15 Mai 2015 à 14:25
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
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(32) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(32) COLLATE utf8_bin NOT NULL,
  `lien` varchar(256) COLLATE utf8_bin NOT NULL,
  `description` varchar(9192) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `date`, `user`, `lien`, `description`) VALUES
(1, 'La naissance de la légende', '2015-05-15 11:34:55', 'admin', 'http://www.google.fr/url?source=imglanding&ct=img&q=http://movieparodie.free.fr/hercule6.jpg&sa=X&ei=xktTVfvcMsW7ygPezYDQCA&ved=0CAkQ8wc&usg=AFQjCNFZtwX_dybq8-P0vmNgYZGew-9i8A', 'La naissance de la légende'),
(2, 'Les fous', '2015-05-15 11:35:42', 'admin', 'http://www.google.fr/url?source=imglanding&ct=img&q=http://quebecme.me/images/posts/ZGHlAGR/thumb_640.jpg&sa=X&ei=6k5TVf__MKeaygOwqIG4Dg&ved=0CAkQ8wc4OA&usg=AFQjCNGOs7oI_WGRDOYHk3IlpqkzkwBI2Q', 'Blablablabla'),
(3, 'Le Clasico attendra son tour', '2015-05-15 11:36:29', 'admin', 'http://i.eurosport.com/2015/05/13/1520844-32414096-1600-900.jpg', 'LIGUE DES CHAMPIONS - Moins "stratosphérique" qu''un duel entre le Real Madrid et le FC Barcelone, l''affiche de la finale 2015 entre le Barça et la Juventus Turin n''en est pas moins savoureuse. A bien des égards, c''est même la meilleure possible.On va peut-être finir par appeler ça la "malédiction du Clasico". Pour la quatrième fois en cinq ans, le Real Madrid et le FC Barcelone se sont retrouvés ensemble dans le dernier carré. Quatre occasions sérieuses, donc, d''accoucher d''un duel castillano-catalan en finale. Raté. Encore. En 2011, les deux géants espagnols avaient croisé le fer dès les demies. En 2012 et 2013, ils avaient perdu tous les deux aux portes de la finale. L''an dernier, le Real a fait le job mais le Barça avait disparu dès les quarts contre l''Atlético, futur adversaire et victime des Merengue en finale.En 2015, ce devait être la bonne. Parce que le Barça, redevenu la référence européenne, était trop fort pour un Bayern qui plus est diminué. Et parce que le Real partait quand même avec les faveurs du pronostic face à cette Juve si longtemps absente de ce type de débats et dont le parcours (un Dortmund fantomatique et l''AS Monaco) résonnait plus comme un retour sur la pointe des pieds qu''à une entrée à grands coups de tocsin. Caramba, donc, encore raté !  Ce sera Barça-Juve. Et à vrai dire, il y a de très bonnes raisons de s''en réjouir. Au vu du tirage au sort des demi-finales, c''est même sans doute la finale idéale. ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
