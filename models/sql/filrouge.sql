-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 28 Mai 2015 à 15:00
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `date`, `user`, `lien`, `description`) VALUES
(1, 'La naissance de la légende', '2015-05-15 11:34:55', 'Mika', 'http://www.google.fr/url?source=imglanding&ct=img&q=http://movieparodie.free.fr/hercule6.jpg&sa=X&ei=xktTVfvcMsW7ygPezYDQCA&ved=0CAkQ8wc&usg=AFQjCNFZtwX_dybq8-P0vmNgYZGew-9i8A', 'La naissance de la légende'),
(3, 'Le Clasico attendra son tour', '2015-05-15 11:36:29', 'alex', 'http://i.eurosport.com/2015/05/13/1520844-32414096-1600-900.jpg', 'LIGUE DES CHAMPIONS - Moins "stratosphérique" qu''un duel entre le Real Madrid et le FC Barcelone, l''affiche de la finale 2015 entre le Barça et la Juventus Turin n''en est pas moins savoureuse. A bien des égards, c''est même la meilleure possible.On va peut-être finir par appeler ça la "malédiction du Clasico". Pour la quatrième fois en cinq ans, le Real Madrid et le FC Barcelone se sont retrouvés ensemble dans le dernier carré. Quatre occasions sérieuses, donc, d''accoucher d''un duel castillano-catalan en finale. Raté. Encore. En 2011, les deux géants espagnols avaient croisé le fer dès les demies. En 2012 et 2013, ils avaient perdu tous les deux aux portes de la finale. L''an dernier, le Real a fait le job mais le Barça avait disparu dès les quarts contre l''Atlético, futur adversaire et victime des Merengue en finale.En 2015, ce devait être la bonne. Parce que le Barça, redevenu la référence européenne, était trop fort pour un Bayern qui plus est diminué. Et parce que le Real partait quand même avec les faveurs du pronostic face à cette Juve si longtemps absente de ce type de débats et dont le parcours (un Dortmund fantomatique et l''AS Monaco) résonnait plus comme un retour sur la pointe des pieds qu''à une entrée à grands coups de tocsin. Caramba, donc, encore raté !  Ce sera Barça-Juve. Et à vrai dire, il y a de très bonnes raisons de s''en réjouir. Au vu du tirage au sort des demi-finales, c''est même sans doute la finale idéale. '),
(4, 'O técnico italiano Carlo Ancelot', '2015-05-20 10:43:51', 'Mika', 'http://www.abola.pt/img/fotos/ABOLA2015/FOTOSAP/ESPANHA/ronaldoancelotti1.jpg', 'O técnico italiano Carlo Ancelotti continua com um forte apoio por parte dos jogadores como, por exemplo, Cristiano Ronaldo, Pepe, Sérgio Ramos, Marcelo, Toni Kroos ou Gareth Bale.\r\n\r\nDe acordo com o as, ainda não é certa a continuidade do treinador Ancelotti na próxima época, mas os responsáveis do Real Madrid sabem que o italiano ainda conta com um forte apoio por parte dos principais jogadores do plantel «merengue».\r\n\r\nAinda assim, os responsáveis do colosso espanhol têm dúvidas acerca da manutenção de Ancelotti e ainda não confirmaram ao treinador que irá continuar na próxima época.\r\n\r\nO facto do Real Madrid ter investido novamente fortemente no reforço do plantel e não ter conquistado nenhum troféu está a pesar na decisão.\r\nO presidente Florentino Pérez sabe que não pode ficar mais um ano em branco.'),
(5, 'Voilà, c’est fini…', '2015-05-25 08:11:11', 'Mika', 'http://s-www.dna.fr/images/F2335292-AB46-4611-BD42-E7F52E873B19/DNA_03/la-meinau-etait-pleine-a-craquer-pour-voir-les-bleus-battre-colomiers-lors-de-cette-derniere-sortie-de-la-saison-mais-la-victoire-du-racing-n-a-malheureusement-pas-suffi-pour-la-ligue-2', 'La saison de National est terminée pour les deux clubs alsaciens. Rendez-vous le 8 août prochain pour le début de l’exercice 2015/2016...\r\nJOIE. – Dans le vestiaire colmarien, situé dans le gymnase attenant au stade La Martine, l’humeur était badine, forcément. Après deux ou trois gentils recadrages, Didier Ollé-Nicolle a laissé son groupe exploser de joie.\r\n\r\nÀ un premier chant a succédé un cri de ralliement scandé par Jordan Pierre-Charles. Amusés, certains supporters marseillais ont attendu la fin des festivités pour demander un maillot. Quelques-uns ont obtenu gain de cause.\r\n\r\nCURIOSITÉ. – Cédric Mensah l’avait dit dans un sourire. « Je crois que je vais planquer un smartphone dans ma chaussette pour suivre le multiplex du National en direct. »\r\n\r\nSi le gardien des Verts ne s’est pas exécuté, ils ont été nombreux, à l’instar de Judicaël Crillon ou du capitaine Abdoulaye Diawara, une fois leur douzième victoire de la saison empochée, à s’enquérir des résultats des équipes du haut de tableau, et notamment du voisin strasbourgeois.\r\n\r\nDÉTENTE. – Les Colmariens ont profité des rayons de soleil provençaux pour faire deux excursions, le jour et le lendemain du match, à la plage, leur hôtel étant situé à proximité. Un tournoi de tennis de table est également venu agrémenter le séjour marseillais qui avait des airs de colonie de vacances.\r\n\r\nSOUTIEN. – Ils étaient quelques-uns, dans la tribune de La Martine, à soutenir l’équipe alsacienne. Jacques, Julien et Bernard, tout d’abord, les vaillants supporters. Les parents du portier haut-rhinois Cédric Mensah, ensuite, venus en voisins puisqu’ils résident à cinq minutes du stade. Aikel Gadacha, enfin. Après avoir quitté les SRC cette saison après deux ans de présence au club, le milieu offensif s’est rappelé au bon souvenir de ses ex-coéquipiers.\r\nReprise le 29 juin pour les SRC et le Racing\r\n\r\nTUDELA. – Laurent Tudela, qui n’avait plus remis les gants depuis le mois d’octobre, a été titularisé pour la troisième fois de la saison face aux SRC. Le portier de Consolat, dix ans de présence au club, fêtait en quelque sorte son jubilé puisque cette dernière rencontre de championnat était aussi sa dernière sortie officielle avant de devenir le coach des gardiens du club des quartiers Nord. Remplacé par Michaël Fabre à l’heure de jeu, il a eu le droit aux applaudissements du public.\r\n\r\nREPRISE. – C’est les vacances mais l’heure de la reprise a déjà été définie. Didier Ollé-Nicolle retrouvera ses joueurs le 29 juin. Le coach, lui, sera encore au Stadium en ce début de semaine pour faire passer des essais à plusieurs dizaines de joueurs susceptibles de renforcer les SRC la saison prochaine.\r\n\r\nREPRISE II. – La reprise, côté Racing, a elle aussi été fixée au lundi 29 juin.\r\n\r\nTIFO. – Les UB 90 ont déployé un immense tifo pour fêter leur 25e année d’existence, vendredi soir, à la Meinau. Avec un seul message : “Une dernière pièce à nous apporter : la montée pour notre 25e année”. Raté, malheureusement.\r\n\r\nJEU EN TRIANGLE. – Vincent Collet, le coach de la SIG, a donné le coup d’envoi de l’ultime rencontre disputée à la Meinau. Surprise, celui qui est aussi sélectionneur des Bleus a été accompagné par deux sportives venues des IS : Kristina Mladenovic, finaliste malheureuse face à Samantha Stosur et Virginie Razzano, demi-finaliste de l’édition 2015 du tournoi strasbourgeois.\r\n\r\nAVEC LE MAILLOT. – Cravates et costumes sont de rigueur dans la corbeille présidentielle. Enfin, pas pour tout le monde… Alain Fontanel, premier adjoint au maire, avait ainsi revêtu le maillot bleu, en vrai supporteur.\r\n\r\nLE LION RUGIT ENCORE. – Marc Keller, premier à s’exprimer en conférence de presse d’après-match, a traité Jacky Duguépéroux de « vieux lion ». Ce qui a eu le don d’amuser l’entraîneur, qui a lancé à son arrivé devant les journalistes, « le vieux lion, il est sous le chapiteau, à côté »… Référence à l’installation du cirque Arlette Gruss, sur le parking des Vanneaux.\r\n\r\nLEBŒUF FAIT LE BUZZ. – Frank Lebœuf a créé un petit buzz en Alsace hier, suite à des déclarations sur Téléfoot. « Si Marc Keller a besoin de moi, je suis là », a indiqué l’international, ancien coéquipier de Marc Keller sous le maillot strasbourgeois.\r\n\r\nJOUR POUR JOUR. – Ils sont toujours quelques glorieux anciens à investir la tribune présidentielle, en toutes occasions et donc, évidemment, vendredi. D’anciens joueurs – en même temps que l’espoir de voir leur Racing monter en L 2 – avaient dans un coin de leur tête l’un des hauts faits dans l’histoire du club strasbourgeois.\r\n\r\n49 ans avant, jour pour jour, le 22 mai 1966 donc, le Racing battait Nantes, au Parc des Princes et accrochait la deuxième Coupe de France au palmarès du club. Roland Merschel et Raymond Stieber n’ont pas manqué de se souvenir.'),
(20, 'L’Elsau écrit son blabla', '2015-05-25 09:46:52', 'Mika', 'http://s-www.dna.fr/images/E31D0446-55DA-440C-8A5D-484244B2CBF9/DNA_v0_03/l-elsau-ecrit-son-histoire.jpg', 'Les Portugais de l’Elsau ont fait respecter la hiérarchie hier après-midi face à la Menora pour s’adjuger la Coupe du Crédit Mutuel. Également qualifiés pour la finale de la Coupe d’Alsace, Azzedine Naji et ses hommes ont l’occasion de réaliser le doublé dans quelques jours… ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=63 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `description`, `date`, `id_forum`, `id_user`) VALUES
(62, '<p>LOl</p>', '2015-05-28 12:59:49', 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(64) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(9192) COLLATE utf8_bin NOT NULL,
  `id_user` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=221 ;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`id`, `sujet`, `date`, `description`, `id_user`) VALUES
(2, 'Dev intégration la bataille !', '2015-05-19 11:50:35', 'Clash of Dev at 3WA strasbourg !! ', 1),
(4, 'Liste de citations de Jean-Claude VanDamme ', '2015-05-19 12:57:39', '<ul>\r\n<li>Etre aware <br /><small> "Y a des gens qui n''ont pas r&eacute;ussi parce qu''ils ne sont pas aware, ils ne sont pas "au courant". Ils ne sont pas &agrave; l''attention de savoir qu''ils existent. Les pauvres, ils savent pas. Il faut r&eacute;veiller les gens. C''est-&agrave;-dire qu''y a des gens qui font leur travail, qui font leurs &eacute;tudes, ils ont un dipl&ocirc;me, ils sont au contact tout &ccedil;a. Tu as un rhume et tu fais toujours "snif". Faut que tu te mouches. Tu veux un mouchoir ? Alors y a des gens comme &ccedil;a qui ne sont pas aware. Moi je suis aware tu vois, c''est un exemple, je suis aware."JC Van Damme. </small></li>\r\n<li>L''air <br /><small> " Je suis fascine par l''air. Si on enlevait l''air du ciel, tous les oiseaux tomberaient par terre....Et les avions aussi.... En meme temps l''air tu peux pas le toucher...ca existe et ca existe pas...Ca nourrit l''homme sans qu''il ait faim...It''s magic...L''air c''est beau en meme temps tu peux pas le voir, c''est doux et tu peux pas le toucher.....L''air c''est un peu comme mon cerveau... " J.C. VanDamme</small></li>\r\n<li>La noisette <br /><small> " Une noisette, j''la casse entre mes fesses tu vois... " J.C. VanDamme</small></li>\r\n<li>La cacahuete <br /><small> " J''adore les cacahuetes. Tu bois une biere et tu en as marre du gout. Alors tu manges des cacahuetes. Les cacahuetes c''est doux et sal&eacute;, fort et tendre,comme une femme. Manger des cacahuetes, it''s a really strong feeling. Et apres tu as de nouveau envie de boire de la bi&egrave;re. Les cacahuetes c''est le mouvement perp&eacute;tuel &agrave; la port&eacute;e de l''homme ". J.C. VanDamme" </small></li>\r\n<li>La Coke <br /><small> "La coke la coke y a pas plus merdique que la coke ok ? &ccedil;a arr&ecirc;te la t&ecirc;te, &ccedil;a te fout tout en l''air, hein, on sait pas ce qu''on dit, on sait pas ce qu''on fait, ok ? [...] La coke faut pas toucher c''est de la merde. J''ai essayer moi de la battre. On peut pas la battre. Alors elle devient, quand on la conna&icirc;t, elle devient un compagnon qu''on touche pas. Je suis allergique &agrave; la coke, c''est tr&egrave;s simple, et c''est pour &ccedil;a que je sais parler maintenant, je suis en forme, j''ai peur de personne, je suis fort dans les yeux, parce que j''ai pas de coke tu vois ? Bon je parle un peu vite. C''est pas un probl&egrave;me non si je suis rapide. Chuis un mec qu''est rapide, je suis speed, pourquoi ? Je mange que des l&eacute;gumes."JC Van Damme.</small></li>\r\n<li>La femme <br /><small> " Une femme qui est enceinte, par exemple, elle est aware qu''elle attend un enfant ... " J.C. VanDamme</small></li>\r\n<li>Jean Claude Camille Francois VanDamme <br /><small> "Mes autres pr&eacute;noms sont Camille et Fran&ccedil;ois. J''aime bien Camille, non ? Ca fait "old fashion", tu trouves pas ? Ca respire le meuble de provence !" JC Vandamme</small></li>\r\n<li>L''univers <br /><small> " Le monde est compos&eacute; de fl&egrave;ches et de mol&eacute;cules, et d''&eacute;lectricit&eacute;,comme le Big-Bang tu vois, et tout &ccedil;a ensemble, &ccedil;a forme l''Univers. " J.C. VanDamme</small> <a name="proust"></a> </li>\r\n<li><a name="proust"></a>Marcel Proust <br /><small> "Marcel Proust, oui. Un peu comme moi. Longtemps il s''est couch&eacute;</small><small><a href="http://www.echolaliste.com/explose.htm"> aware</a>". J.C. VanDamme</small></li>\r\n<li>Le jeu de Go <br /><small> "Quand tu joues au Go.. faut &ecirc;tre aware. Si t''es pas aware, tes pierres sont mortes, et toi avec." J.C VanDamme</small></li>\r\n<li>La vache <br /><small> " Une vache, &ccedil;a te bouffe trois hectares, moi, avec trois hectares, je te fais deux mille kilos de riz... avec trois hectares, je te nourris Avignon, tu vois... " J.C. VanDamme</small></li>\r\n<li>L'' oxyg&egrave;ne <br /><small> " Entre toi et moi il y a un produit qui s''appelle un produit, et c''est un produit qui s''appelle l''oxyg&egrave;ne, alors si tu fais &ccedil;a (inspiration/expiration) comme &ccedil;a, tu vis, mais si je tue l''oxyg&egrave;ne comme sur la lune, tu meurs !! " J.C. VanDamme</small></li>\r\n<li>La relativit&eacut', 1),
(6, 'Trop cool on a découvert pourquoi ça buggué !', '2015-05-20 12:48:06', '<p>Lalalalalallalala !</p>', 1),
(10, 'La culture de la banane en lorraine', '2015-05-21 13:31:25', '<p>Les plants de <strong>banane sont</strong> vert pu<span style="text-decoration: underline;">is ja</span>une.</p>', 1),
(14, 'La déchéance de la DreamTeam', '2015-05-22 14:58:55', '<p style="text-align: center;">La "DreamTeam" a &eacute;t&eacute; cr&eacute;&eacute;e il y a quelques jours mais elle a fait son temps.</p>\r\n<p style="text-align: center;">C''est &agrave; mon tour de r&eacute;gner.</p>\r\n<p style="text-align: center;"><span style="text-decoration: underline;"><strong>MOUAHAHAHAH !!!!!</strong></span></p>', 1);

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

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

CREATE TABLE IF NOT EXISTS `tchat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(256) COLLATE utf8_bin NOT NULL,
  `id_user` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=198 ;

--
-- Contenu de la table `tchat`
--

INSERT INTO `tchat` (`id`, `date`, `message`, `id_user`) VALUES
(1, '2015-05-15 13:18:28', 'lol ptdr', 0),
(2, '2015-05-15 13:18:56', 'hahahah hahahha haha h ahah hah', 0),
(3, '2015-05-15 13:18:56', 'il fait super beau aujourd''hui lol', 0),
(4, '2015-05-15 13:19:15', 'toto est naze', 0),
(5, '2015-05-15 14:10:18', 'klhfgv fgklnj gnkj ngskgj nhsgjknb soij gsfjkgnb jsgnb lkjsgn ', 0),
(6, '2015-05-15 14:10:18', 'Il était une fois blabla bla bla ', 0),
(7, '2015-05-15 14:10:29', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!', 0),
(8, '2015-05-15 14:10:29', 'Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!', 0),
(9, '2015-05-15 14:10:43', 'Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!', 0),
(10, '2015-05-15 14:10:43', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus aut dolor aspernatur voluptas earum quos sequi architecto ducimus, quis, libero laudantium saepe unde delectus, vel ea autem dicta harum? Nulla!', 0),
(11, '2015-05-20 13:39:11', 'jkgjk', 0),
(12, '2015-05-20 13:39:20', 'fdtghdfgh', 0),
(13, '2015-05-20 13:39:30', 'Tetstresv', 0),
(14, '2015-05-20 13:42:30', '', 0),
(15, '2015-05-20 13:42:37', 'hvjkk', 0),
(16, '2015-05-20 13:43:37', 'sdrfg', 0),
(17, '2015-05-20 13:43:48', 'hgjh', 0),
(18, '2015-05-20 13:56:59', 'toto', 0),
(19, '2015-05-20 13:56:59', 'toto', 0),
(20, '2015-05-20 13:57:04', 'gfhgfh', 0),
(21, '2015-05-20 13:57:04', 'gfhgfh', 0),
(22, '2015-05-20 13:57:11', 'dgfhdfgh', 0),
(23, '2015-05-20 13:57:11', 'dgfhdfgh', 0),
(24, '2015-05-20 13:57:24', 'alex', 0),
(25, '2015-05-20 13:57:24', 'alex', 0),
(26, '2015-05-20 13:57:37', 'toto', 0),
(27, '2015-05-20 13:57:37', 'toto', 0),
(28, '2015-05-20 13:57:53', '123', 0),
(29, '2015-05-20 13:57:53', '123', 0),
(30, '2015-05-20 14:02:10', '1234', 0),
(31, '2015-05-20 14:02:10', '1234', 0),
(32, '2015-05-20 14:02:17', '457', 0),
(33, '2015-05-20 14:02:17', '457', 0),
(34, '2015-05-20 14:04:12', 'tyjrtjrtuyj', 0),
(35, '2015-05-20 14:04:30', '458378', 0),
(36, '2015-05-20 14:06:38', 'htrhty', 0),
(37, '2015-05-20 14:08:26', 'hgfjfghjfhgj', 0),
(38, '2015-05-20 14:08:55', 'hgfjfghjfhgj', 0),
(39, '2015-05-20 14:09:00', 'dfghdh', 0),
(40, '2015-05-20 14:12:02', 'jkk', 0),
(41, '2015-05-20 14:13:03', 'hjlkjl', 0),
(42, '2015-05-20 14:13:03', 'hjlkjl', 0),
(43, '2015-05-20 14:15:32', 'tyub', 0),
(44, '2015-05-20 14:16:49', '123', 0),
(45, '2015-05-20 14:16:57', '132', 0),
(46, '2015-05-20 14:17:04', '26580', 0),
(47, '2015-05-20 14:17:15', '26580', 0),
(48, '2015-05-20 14:17:51', 'ghfj', 0),
(49, '2015-05-20 14:18:54', 'ghfj', 0),
(50, '2015-05-20 14:19:43', 'ghfj', 0),
(51, '2015-05-20 14:20:38', 'ghfj', 0),
(52, '2015-05-20 14:20:41', 'ghfj', 0),
(53, '2015-05-20 14:20:43', 'ghfj', 0),
(54, '2015-05-20 14:20:46', 'ghfj', 0),
(55, '2015-05-20 14:20:48', 'ghfj', 0),
(56, '2015-05-20 14:20:49', 'ghfj', 0),
(57, '2015-05-20 14:20:51', 'ghfj', 0),
(58, '2015-05-20 14:20:52', 'ghfj', 0),
(59, '2015-05-20 14:20:54', 'ghfj', 0),
(60, '2015-05-20 14:20:56', 'ghfj', 0),
(61, '2015-05-20 14:24:30', 'dfghjhjhgfj', 0),
(62, '2015-05-20 14:24:34', 'fhgjfghj', 0),
(63, '2015-05-20 14:25:54', 'hjhgjgfjfgj', 0),
(64, '2015-05-20 14:28:07', 'dfgsgf', 0),
(65, '2015-05-20 14:28:07', 'dfgsgf', 0),
(66, '2015-05-20 14:28:24', 'fdgsd', 0),
(67, '2015-05-20 14:30:57', 'plop', 0),
(68, '2015-05-20 14:31:16', 'plup', 0),
(69, '2015-05-20 14:31:23', 'plop', 0),
(70, '2015-05-20 14:31:35', 'vergetures anal', 0),
(71, '2015-05-20 14:32:19', 'mon site ne fonctionne pas -> je ne sais pas pourquoi', 0),
(72, '2015-05-20 14:32:39', 'mon site fonctionne -> je ne sais pas pourquoi', 0),
(73, '2015-05-20 14:32:43', 'alt + F4 ressoud tout les problemes', 0),
(74, '2015-05-20 14:33:08', 'Bonjour je m''appel Ping Pong j''ai piraté votre site, il n''y a aucune sécurité hahahahah !!', 0),
(75, '2015-05-20 14:33:13', 'Bonjour je m''appel Ping Pong j''ai piraté votre site, il n''y a aucune sécurité hahahahah !!', 0),
(76, '2015-05-20 14:33:13', 'Envoi ça à Nico... le petit', 0),
(77, '2015-05-20 14:33:31', 'mon site fonctionne -> je ne sais pas pourquoi', 0),
(78, '2015-05-20 14:33:42', 'tu ne seras jamais qui je suis mouahhaha', 0),
(79, '2015-05-20 14:34:07', 'non jamais et je bas les couilles tellement fort.....', 0),
(80, '2015-05-20 14:34:07', 'je vais mettre un db quote mdr', 0),
(81, '2015-05-20 14:34:22', 'mdrrrr', 0),
(82, '2015-05-20 14:34:34', 'steve BIP BIP BIP', 0),
(83, '2015-05-20 14:34:40', 'nous sommes legion nous hackons tout les sites internet comme intranet !!! anonymous.fr !!', 0),
(84, '2015-05-20 14:35:30', 'je suis fatiguééééé', 0),
(85, '2015-05-20 14:35:32', 'loule', 0),
(86, '2015-05-20 14:35:40', 'bordel de merda mika jtai capter', 0),
(87, '2015-05-20 14:35:49', 'lol', 0),
(88, '2015-05-20 14:52:40', 'lol', 0),
(89, '2015-05-20 14:52:45', 'test', 0),
(90, '2015-05-20 14:52:51', 'ca roule', 0),
(91, '2015-05-22 12:00:26', 'wdfbfsgbxfgsbxfgb', 0),
(92, '2015-05-22 12:04:11', 'hjklmkjmjkm', 0),
(93, '2015-05-22 13:05:26', 'xcvhgxdgxgdwh', 0),
(94, '2015-05-22 13:07:12', 'fyjfghj fghjfj', 0),
(95, '2015-05-22 13:12:50', 'gfhjfghjfgjfgj', 0),
(96, '2015-05-22 13:13:27', 'fghjfjghfj', 0),
(97, '2015-05-22 13:14:15', 'test', 0),
(98, '2015-05-22 13:27:18', 'test 2', 0),
(99, '2015-05-22 13:27:37', ' dqrgsdgbfdsg', 0),
(100, '2015-05-22 13:27:58', ' info.com', 0),
(101, '2015-05-22 13:33:05', 'test.com', 0),
(102, '2015-05-22 13:35:07', 'fdhgdfh', 0),
(103, '2015-05-22 13:37:23', 'dfghdfghdfgh', 0),
(104, '2015-05-22 13:40:53', 'bjgvjksfdghl', 0),
(105, '2015-05-22 13:41:37', 'coucou les blaireaux !!', 0),
(106, '2015-05-22 13:43:42', 'toto', 0),
(107, '2015-05-22 13:43:46', ' tata', 0),
(108, '2015-05-22 13:43:48', ' BOUYAH', 0),
(109, '2015-05-22 13:43:56', 'BON ALLAY', 0),
(110, '2015-05-22 13:45:24', 'sfbvsdbvdfsvg', 0),
(111, '2015-05-22 13:45:43', ' alert', 0),
(112, '2015-05-22 13:46:04', ' <script>alert</script>', 0),
(113, '2015-05-22 13:54:54', 'ghghdfghgfh', 0),
(114, '2015-05-22 13:54:57', ' dfghdfghdfg', 0),
(115, '2015-05-22 13:59:52', 'alert("S3ri0usH4cK WuZ H3r3")@h4ck3d.com', 0),
(116, '2015-05-22 14:09:57', '<script>fugh sldg', 0),
(117, '2015-05-22 14:55:03', 'dfghdfgh', 0),
(118, '2015-05-22 14:59:07', '$message', 0),
(119, '2015-05-22 15:05:12', 'dfghdh', 0),
(120, '2015-05-25 07:48:36', 'fthujtfyhjfgjfgjf', 0),
(121, '2015-05-25 07:57:54', 'alex', 0),
(122, '2015-05-25 07:59:01', 'alex2', 0),
(123, '2015-05-25 08:04:15', 'ghjkjkjk', 0),
(124, '2015-05-25 08:05:12', 'Alex', 0),
(125, '2015-05-25 08:09:15', 'ghdgdfgh', 0),
(126, '2015-05-25 08:15:18', 'dyhggdfh', 0),
(127, '2015-05-25 08:28:30', ' gfsgsdg', 0),
(128, '2015-05-25 08:29:14', 'test', 0),
(129, '2015-05-25 08:30:30', 'test2', 0),
(130, '2015-05-25 08:35:58', 'wfgdfgdsfgdsfg', 0),
(132, '2015-05-25 08:38:01', ' dghdfh', 8),
(133, '2015-05-25 08:42:54', 'xdghffhh', 0),
(134, '2015-05-25 08:44:01', 'dqfgsdgdfsg', 0),
(135, '2015-05-25 08:44:18', 'fdgdfg', 0),
(136, '2015-05-25 08:44:52', ' dfgfdsgdsfg', 0),
(137, '2015-05-25 08:55:42', 'test 12453', 8),
(138, '2015-05-25 08:55:42', '''test 12453''', 0),
(139, '2015-05-25 08:57:25', 'test 12454', 8),
(140, '2015-05-25 08:57:25', '''test 12454''', 0),
(141, '2015-05-25 08:57:30', 'test 12454', 8),
(142, '2015-05-25 08:57:30', '''test 12454''', 0),
(143, '2015-05-25 08:57:30', 'test 12454', 8),
(144, '2015-05-25 08:57:30', '''test 12454''', 0),
(145, '2015-05-25 08:57:31', 'test 12454', 8),
(146, '2015-05-25 08:57:31', '''test 12454''', 0),
(147, '2015-05-25 09:00:07', 'xvchbm', 8),
(148, '2015-05-25 09:00:07', '''xvchbm''', 0),
(149, '2015-05-25 09:00:13', 'fxgg', 8),
(150, '2015-05-25 09:00:13', '''fxgg''', 0),
(151, '2015-05-25 09:00:23', 'fgdfgfdsg', 8),
(152, '2015-05-25 09:00:23', '''fgdfgfdsg''', 0),
(153, '2015-05-25 09:01:33', 'test 12455', 8),
(154, '2015-05-25 09:14:37', ' test', 8),
(155, '2015-05-25 09:36:55', 'test', 8),
(156, '2015-05-25 09:37:00', ' fvgsdhkvfd$', 8),
(157, '2015-05-25 09:37:01', ' vbds hjhsdbv', 8),
(158, '2015-05-25 09:37:02', ' qhv hjfsqb vhjsqv', 8),
(159, '2015-05-25 09:37:03', ' v chj vyhsb vliu', 8),
(160, '2015-05-25 09:37:05', ' jhv jshb vyudwbv', 8),
(161, '2015-05-25 09:37:06', ' jhqsb vjhbqs gsfil', 8),
(162, '2015-05-25 09:44:03', 'C''est quoi ce chat de merde', 10),
(163, '2015-05-25 09:59:50', ' test', 8),
(164, '2015-05-25 10:00:08', ' test', 8),
(165, '2015-05-25 10:00:18', 'naaaaan n''efface pas mon précieuuuux', 10),
(166, '2015-05-25 10:01:10', 'vide', 8),
(167, '2015-05-25 10:01:13', ' test', 8),
(168, '2015-05-25 10:53:28', ' test', 8),
(169, '2015-05-25 10:53:35', ' test 2', 8),
(170, '2015-05-25 10:53:51', ' gfhfgh', 8),
(171, '2015-05-25 11:01:04', 'fdgdfg ', 8),
(172, '2015-05-25 11:10:07', ' sdfgsdg', 8),
(173, '2015-05-25 11:29:33', 'jghjg', 2),
(174, '2015-05-26 12:28:30', 'jk', 2),
(175, '2015-05-26 12:28:32', ' l', 2),
(176, '2015-05-26 13:57:24', 'actualise ta page Mika', 4),
(177, '2015-05-27 11:23:32', 'sdfsd15641', 37),
(178, '2015-05-27 11:23:32', ' ', 37),
(179, '2015-05-27 11:23:33', ' fg546h156156+21', 37),
(180, '2015-05-27 11:23:33', ' 6', 37),
(181, '2015-05-27 11:23:34', ' g.', 37),
(182, '2015-05-27 11:23:34', ' h5k1fgj8h5', 37),
(183, '2015-05-27 11:23:34', ' d', 37),
(184, '2015-05-27 11:23:35', ' 56h14518.', 37),
(185, '2015-05-27 11:23:35', ' g.+h1', 37),
(186, '2015-05-27 11:23:35', ' 7h', 37),
(187, '2015-05-27 11:23:35', ' ', 37),
(188, '2015-05-27 11:23:37', ' df*', 37),
(189, '2015-05-28 07:08:05', 'fsf', 2),
(190, '2015-05-28 07:08:07', ' dddd', 2),
(191, '2015-05-28 07:08:34', 'jjhfjf', 2),
(192, '2015-05-28 11:33:58', 'sdfgsdfg', 1),
(193, '2015-05-28 11:34:00', 'dsfsdf', 1),
(194, '2015-05-28 11:34:02', 'sdfsdsd', 1),
(195, '2015-05-28 11:34:03', 'sdfsfsd', 1),
(196, '2015-05-28 11:34:06', 'sfsfs', 1),
(197, '2015-05-28 11:34:08', 'sdsdssdfd', 1);

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
  `date_naissance` date NOT NULL,
  `nbr_sujets` int(11) NOT NULL,
  `avatar` varchar(512) COLLATE utf8_bin NOT NULL,
  `droits` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `date_register`, `nom`, `prenom`, `date_naissance`, `nbr_sujets`, `avatar`, `droits`) VALUES
(1, 'Mika', '$2y$10$W1J/U6JSGg/JbTyMVSEkMOpriYLFKyxONsKzWl20aFeY3pWdEvcGi', 'mika@hotmail.fr', '2015-05-27 14:27:38', '', '', '1994-06-10', 0, '', 1),
(3, 'alex', '$2y$10$HHKrIjoNULm.vVfvPxELyOusm3TIi6LcomtcY7P8NIDuie6coReDO', 'alex@gmail.fr', '2015-05-28 12:54:54', 'Pas renseigné', 'Pas renseigné', '1980-01-31', 0, 'http://www.google.fr/url?source=imglanding&ct=img&q=http://2.bp.blogspot.com/-omUBwmauN5o/UzVo2kr-NaI/AAAAAAAAAD0/lHpilGBoKoU/s1600/profileholder.gif&sa=X&ei=19hgVbCyF8T6UvjFgNAF&ved=0CAkQ8wc&usg=AFQjCNEjhQzaRNZcHzHLJHf7vq7CJAZDlw', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
