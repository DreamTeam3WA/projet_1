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
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(64) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(9192) COLLATE utf8_bin NOT NULL,
  `id_user` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`id`, `sujet`, `date`, `description`, `id_user`) VALUES
(1, 'Foot, les femmes et la biere', '2015-05-19 11:50:35', 'Que c''est bon ! Surtout les blondes.. mais lesquels ? ', 2),
(2, 'Dev intégration la bataille !', '2015-05-19 11:50:35', 'Clash of Dev at 3WA strasbourg !! ', 1),
(3, 'Coca contre Pepsi', '2015-05-19 12:29:23', '<p>&lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo voluptatum quibusdam at praesentium quae debitis deserunt molestias optio, harum tempora eum dicta recusandae quam maiores! Blanditiis doloremque fuga rem, quod?&lt;/div&gt;<br />&lt;div&gt;Suscipit porro cupiditate temporibus, quisquam, nesciunt eos quae doloribus odio atque vitae, est officiis ducimus deleniti distinctio fugiat harum ipsam sequi animi amet esse ad eum adipisci. Maiores, expedita, reiciendis.&lt;/div&gt;<br />&lt;div&gt;Sint modi maiores deleniti est ad illum molestiae, totam voluptatem explicabo corporis a, mollitia possimus dolores. Molestias ipsa veniam praesentium, est illo, dolorem nam voluptate facilis cumque. Adipisci ad, voluptatem.&lt;/div&gt;<br />&lt;div&gt;Veniam vero assumenda dolores maxime iusto inventore reprehenderit officia asperiores laboriosam repellendus, sunt delectus optio sit rerum perspiciatis ipsum, obcaecati ut reiciendis! Illo architecto alias cum aliquam doloremque, repudiandae expedita!&lt;/div&gt;<br />&lt;div&gt;Magnam esse necessitatibus blanditiis nemo sint tenetur quo, vitae consequuntur at libero nobis sapiente cupiditate suscipit, numquam nisi temporibus, sed dignissimos assumenda? Doloremque quisquam temporibus, facilis ratione accusamus accusantium! Error?&lt;/div&gt;</p>', 3),
(4, 'Liste de citations de Jean-Claude VanDamme ', '2015-05-19 12:57:39', '<ul>\r\n<li>Etre aware <br /><small> "Y a des gens qui n''ont pas r&eacute;ussi parce qu''ils ne sont pas aware, ils ne sont pas "au courant". Ils ne sont pas &agrave; l''attention de savoir qu''ils existent. Les pauvres, ils savent pas. Il faut r&eacute;veiller les gens. C''est-&agrave;-dire qu''y a des gens qui font leur travail, qui font leurs &eacute;tudes, ils ont un dipl&ocirc;me, ils sont au contact tout &ccedil;a. Tu as un rhume et tu fais toujours "snif". Faut que tu te mouches. Tu veux un mouchoir ? Alors y a des gens comme &ccedil;a qui ne sont pas aware. Moi je suis aware tu vois, c''est un exemple, je suis aware."JC Van Damme. </small></li>\r\n<li>L''air <br /><small> " Je suis fascine par l''air. Si on enlevait l''air du ciel, tous les oiseaux tomberaient par terre....Et les avions aussi.... En meme temps l''air tu peux pas le toucher...ca existe et ca existe pas...Ca nourrit l''homme sans qu''il ait faim...It''s magic...L''air c''est beau en meme temps tu peux pas le voir, c''est doux et tu peux pas le toucher.....L''air c''est un peu comme mon cerveau... " J.C. VanDamme</small></li>\r\n<li>La noisette <br /><small> " Une noisette, j''la casse entre mes fesses tu vois... " J.C. VanDamme</small></li>\r\n<li>La cacahuete <br /><small> " J''adore les cacahuetes. Tu bois une biere et tu en as marre du gout. Alors tu manges des cacahuetes. Les cacahuetes c''est doux et sal&eacute;, fort et tendre,comme une femme. Manger des cacahuetes, it''s a really strong feeling. Et apres tu as de nouveau envie de boire de la bi&egrave;re. Les cacahuetes c''est le mouvement perp&eacute;tuel &agrave; la port&eacute;e de l''homme ". J.C. VanDamme" </small></li>\r\n<li>La Coke <br /><small> "La coke la coke y a pas plus merdique que la coke ok ? &ccedil;a arr&ecirc;te la t&ecirc;te, &ccedil;a te fout tout en l''air, hein, on sait pas ce qu''on dit, on sait pas ce qu''on fait, ok ? [...] La coke faut pas toucher c''est de la merde. J''ai essayer moi de la battre. On peut pas la battre. Alors elle devient, quand on la conna&icirc;t, elle devient un compagnon qu''on touche pas. Je suis allergique &agrave; la coke, c''est tr&egrave;s simple, et c''est pour &ccedil;a que je sais parler maintenant, je suis en forme, j''ai peur de personne, je suis fort dans les yeux, parce que j''ai pas de coke tu vois ? Bon je parle un peu vite. C''est pas un probl&egrave;me non si je suis rapide. Chuis un mec qu''est rapide, je suis speed, pourquoi ? Je mange que des l&eacute;gumes."JC Van Damme.</small></li>\r\n<li>La femme <br /><small> " Une femme qui est enceinte, par exemple, elle est aware qu''elle attend un enfant ... " J.C. VanDamme</small></li>\r\n<li>Jean Claude Camille Francois VanDamme <br /><small> "Mes autres pr&eacute;noms sont Camille et Fran&ccedil;ois. J''aime bien Camille, non ? Ca fait "old fashion", tu trouves pas ? Ca respire le meuble de provence !" JC Vandamme</small></li>\r\n<li>L''univers <br /><small> " Le monde est compos&eacute; de fl&egrave;ches et de mol&eacute;cules, et d''&eacute;lectricit&eacute;,comme le Big-Bang tu vois, et tout &ccedil;a ensemble, &ccedil;a forme l''Univers. " J.C. VanDamme</small> <a name="proust"></a> </li>\r\n<li><a name="proust"></a>Marcel Proust <br /><small> "Marcel Proust, oui. Un peu comme moi. Longtemps il s''est couch&eacute;</small><small><a href="http://www.echolaliste.com/explose.htm"> aware</a>". J.C. VanDamme</small></li>\r\n<li>Le jeu de Go <br /><small> "Quand tu joues au Go.. faut &ecirc;tre aware. Si t''es pas aware, tes pierres sont mortes, et toi avec." J.C VanDamme</small></li>\r\n<li>La vache <br /><small> " Une vache, &ccedil;a te bouffe trois hectares, moi, avec trois hectares, je te fais deux mille kilos de riz... avec trois hectares, je te nourris Avignon, tu vois... " J.C. VanDamme</small></li>\r\n<li>L'' oxyg&egrave;ne <br /><small> " Entre toi et moi il y a un produit qui s''appelle un produit, et c''est un produit qui s''appelle l''oxyg&egrave;ne, alors si tu fais &ccedil;a (inspiration/expiration) comme &ccedil;a, tu vis, mais si je tue l''oxyg&egrave;ne comme sur la lune, tu meurs !! " J.C. VanDamme</small></li>\r\n<li>La relativit&eacut', 5),
(6, 'Trop cool on a découvert pourquoi ça buggué !', '2015-05-20 12:48:06', '<p>Lalalalalallalala !</p>', 2),
(10, 'La culture de la banane en lorraine', '2015-05-21 13:31:25', '<p>Les plants de <strong>banane sont</strong> vert pu<span style="text-decoration: underline;">is ja</span>une.</p>', 0),
(11, 'aaaaaaaaaaa', '2015-05-21 14:54:03', '<p>aaaaaaaaaaaaa</p>', 0),
(12, 'Nouveau sujet', '2015-05-22 08:59:55', '<p><strong>Trop cool</strong>&nbsp; l<em>alallaa</em></p>', 0),
(13, 'dfdsdf', '2015-05-22 14:54:33', '<p>dfssdgsd</p>', 0),
(14, 'La déchéance de la DreamTeam', '2015-05-22 14:58:55', '<p style="text-align: center;">La "DreamTeam" a &eacute;t&eacute; cr&eacute;&eacute;e il y a quelques jours mais elle a fait son temps.</p>\r\n<p style="text-align: center;">C''est &agrave; mon tour de r&eacute;gner.</p>\r\n<p style="text-align: center;"><span style="text-decoration: underline;"><strong>MOUAHAHAHAH !!!!!</strong></span></p>', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
