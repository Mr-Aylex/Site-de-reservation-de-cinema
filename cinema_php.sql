-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 04 mai 2020 à 09:08
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinema_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `resume` longtext COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `bande_annonce` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `salle` varchar(4) COLLATE utf8mb4_bin NOT NULL,
  `tweet` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `resume`, `image`, `bande_annonce`, `salle`, `tweet`) VALUES
(37, 'L\'appel de la foret', 'Lorsque vous regardez l\'appel, il semble que la forêt de la forêt peut parler. Avec les mots « Serendipity » - un résultat inattendu - il semble qu\'un complot devait arriver juste pour la forêt du destin. On dit que la forêt a regardé des événements depuis des années, en attendant un en particulier se produire.      Sur le site, les créateurs expliquent l\'histoire de la forêt. On dit que, après les bombes atomiques sont tombées sur Hiroshima et Nagasaki, les gens avaient peur que la guerre serait une réalité pour toujours. Afin de prévenir la guerre nucléaire, la forêt aurait dit aux quatre dirigeants japonais que si elles existent encore, ils doivent soit remise ou être tués par la forêt. Au fil du temps, le Japon n\'a pas respecté l\'avertissement de la forêt, et finissent par se rendre, devenant ainsi la cinquième nation à succomber à la guerre atomique.      L\'appel de la forêt se poursuit l\'histoire de nous dire que peu importe ce qui se passe, la forêt sera là pour voir et faire nos choix. Le film est une histoire très intéressante avec beaucoup de rebondissements. Avec son mélange de thriller et mystère, on se demande comment vous devez interpréter ce que la forêt vous dit.', 'Appel_de_la_foret.jpg', 'bande_annonce_laforet.jpg', '1', 'https://twitter.com/Lappeldelafort2?ref_src=twsrc%5Etfw'),
(38, 'The boy', 'Le garçon: La Malédiction de Brahms est une adaptation de film de série du roman de Victor Hugo. Ceci est l\'un des plus populaires des listes de lecture dans de nombreuses écoles publiques à travers les Etats-Unis. Dans cette série intéressante, vous apprendrez tout sur l\'histoire de la musique classique, la littérature classique, et les techniques classiques du cinéma. Le film récapitule quatre jours très amusant dans la vie d\'un héros improbable. L\'apprentissage de la classique histoire de la musique: Films semblent avoir beaucoup plus de temps et de soins d\'entrer dans ces adaptations, donc nous allons parler ici. Une caractéristique fantastique dans ce film est qu\'il documente de nombreux grands et célèbres compositeurs qui étaient en vie au cours de la même période de temps que les personnages principaux.', 'the_boy.jpeg', 'bande_annonce_theboy.jpg', '2', 'https://twitter.com/TheBoyMovie?ref_src=twsrc%5Etfw'),
(39, 'Sonic le film', 'Il y a tellement de choses que vous pouvez vous renseigner sur Sonic the Hedgehog, de la franchise de film et tous les jouets, qu\'il est vraiment difficile de tout faire à partir de zéro. Si vous voulez en savoir beaucoup sur ce personnage, ou si vous voulez en savoir plus sur d\'autres personnages célèbres, vous allez avoir besoin d\'aide dans votre recherche.  La meilleure chose que vous pouvez faire pour votre recherche est de commencer par les sources en ligne. Bien qu\'il existe des sites Web qui traitent exclusivement avec les nouvelles, ils peuvent aussi être grande pour établir des liens et l\'apprentissage de nombreuses personnalités célèbres. Ces sites ont des bases de données de livres, de films et d\'autres médias qui peuvent vous aider à comprendre ce que le sujet est au sujet.  La meilleure façon d\'en apprendre davantage sur le film est d\'aller sur le lien qui vous donne les informations. Cela vous donnera un outil interactif pour commencer dans votre recherche pour plus d\'informations sur ce film. Tout ce que vous avez à faire est d\'entrer les mots-clés que vous voulez, et vous obtiendrez des informations sur la série.', 'sonic.jpeg', 'sonic.jpg', '3', 'https://twitter.com/SonicMovie?ref_src=twsrc%5Etfw'),
(40, 'Bad Boys 3', 'Si vous êtes un fan de Bad Boys pour la vie, alors vous apprécierez certainement ce film. Le film a beaucoup de         violence et de scénarios sexuels qu\'elle fait appel à la fois les hommes et les femmes. Cette série raconte         l\'histoire de deux hommes d\'âge moyen qui ont eu une longue association avec la force de police.          Howard (James Caan) est un préretraité qui daté de jeunes filles pendant des années et quand il se retire enfin, il         décide de rencontrer une ancienne flamme. Cependant, il est peu de temps avant qu\'il ne soit accusé d\'avoir enlevé         son ex-petite amie et sa vendant comme esclave sexuelle. Cependant, il est peu de temps avant qu\'il est appelé en         service quand l\'homme qu\'il avait été juré de protéger meurt dans des circonstances mystérieuses. Pendant ce temps,         Owen (Thomas Haden Church) se retrouve coincé dans une profonde forêt sombre à l\'âge de 35 après toute sa famille         est tué dans un accident de la maison monstre.', 'bad_boys.jpeg', 'bad_boys_3.jpg', '4', 'https://twitter.com/BadBoys?ref_src=twsrc%5Etfw'),
(41, 'Birds of prey', '« Oiseaux de proie et Fantabuleuse » est une série de bandes dessinées bien connues qui suit les exploits d\'un justicier nommé Harley Quinn. Il est sur la vie quotidienne de Harley Quinn, ses relations avec sa famille, et d\'autres personnes à Gotham City.  L\'histoire du spectacle est aussi le même que celui de la bande dessinée: Il commence quand Harley est licenciée de son travail pour l\'utilisation de ses compétences criminelles pour commettre un crime sans être pris. Après l\'événement humiliant, elle décide de changer ses manières en devenant un super-héros avec la mission pour attraper les criminels qui commettent des crimes sans être détectés.  Katie Goldmar a joué le rôle de Harley Quinn alors qu\'elle était en train de filmer le film. Elle avait beaucoup de travail amusant sur le film parce qu\'il est son premier rôle de super-héros. Elle a dit dans une interview qu\'elle a été enthousiasmés par les nouveaux défis auxquels il faisait face sur le film.', 'birds_of_prey.jpeg', 'bande_annonce_harleyquinn.jpg', '5', 'https://twitter.com/birds_quinn?ref_src=twsrc%5Etfw');

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE `liens` (
  `id` int(11) NOT NULL,
  `lien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `nom`, `prenom`, `mail`, `message`) VALUES
(1, 'Sextius', 'Sullivan', 'sullivan.sextius@gmail.com', 'commentaires'),
(2, 'Sextius', 'Sullivan', 'sullivan.sextius@gmail.com', 'commentaires'),
(3, 'Sextius', 'Sullivan', 'sullivan.sextius@gmail.com', 'commentaires');

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `numero` int(10) UNSIGNED NOT NULL,
  `tarif` int(11) DEFAULT NULL,
  `type_de_tarif` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `salle` varchar(5) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `place`
--

INSERT INTO `place` (`numero`, `tarif`, `type_de_tarif`, `salle`, `id_film`, `id_utilisateur`) VALUES
(15, 2, 'nb_enfant', '3', 38, 2),
(16, 2, 'nb_enfant', '3', 38, 2),
(17, 2, 'nb_enfant', '3', 38, 2),
(18, 2, 'nb_enfant', '3', 38, 2),
(19, 2, 'nb_enfant', '3', 38, 2),
(20, 2, 'nb_enfant', '3', 38, 2),
(21, 2, 'nb_enfant', '3', 38, 2),
(22, 2, 'nb_enfant', '3', 38, 2),
(23, 2, 'nb_enfant', '3', 38, 2),
(24, 2, 'nb_enfant', '3', 38, 2),
(25, 2, 'nb_enfant', '3', 38, 2),
(26, 2, 'nb_enfant', '3', 38, 2),
(27, 2, 'nb_enfant', '3', 38, 11),
(28, 2, 'nb_enfant', '3', 38, 11),
(29, 2, 'nb_enfant', '3', 38, 11),
(30, 2, 'nb_enfant', '3', 38, 11),
(31, 2, 'nb_enfant', '3', 38, 11),
(32, 2, 'nb_enfant', '3', 38, 11),
(33, 2, 'nb_enfant', '3', 38, 11),
(34, 2, 'nb_enfant', '3', 38, 11),
(35, 2, 'nb_enfant', '3', 38, 11),
(36, 2, 'nb_enfant', '3', 38, 11),
(37, 2, 'nb_enfant', '3', 38, 11),
(38, 2, 'nb_enfant', '3', 38, 11),
(39, 2, 'nb_enfant', '3', 38, 11),
(40, 2, 'nb_enfant', '3', 38, 11),
(41, 2, 'nb_enfant', '3', 38, 11),
(42, 2, 'nb_enfant', '3', 38, 11),
(43, 2, 'nb_enfant', '3', 38, 11),
(44, 2, 'nb_enfant', '3', 38, 11),
(45, 2, 'nb_enfant', '3', 38, 11),
(46, 2, 'nb_enfant', '3', 38, 11),
(47, 2, 'nb_enfant', '3', 38, 11),
(48, 2, 'nb_enfant', '3', 38, 11),
(49, 2, 'nb_enfant', '3', 38, 11),
(50, 2, 'nb_enfant', '3', 38, 11),
(51, 2, 'nb_enfant', '3', 38, 11),
(52, 2, 'nb_enfant', '3', 38, 11),
(53, 2, 'nb_enfant', '3', 38, 11),
(54, 2, 'nb_enfant', '3', 38, 11),
(55, 2, 'nb_enfant', '3', 38, 11),
(56, 2, 'nb_enfant', '3', 38, 11),
(57, 2, 'nb_enfant', '3', 38, 11),
(58, 2, 'nb_enfant', '3', 38, 11),
(59, 2, 'nb_enfant', '3', 38, 11),
(60, 2, 'nb_enfant', '3', 38, 11),
(61, 2, 'nb_enfant', '3', 38, 11),
(62, 2, 'nb_enfant', '3', 38, 11),
(63, 2, 'nb_enfant', '3', 38, 11),
(64, 2, 'nb_enfant', '3', 38, 11),
(65, 2, 'nb_enfant', '3', 38, 11),
(66, 2, 'nb_enfant', '3', 38, 11),
(67, 2, 'nb_enfant', '3', 38, 11),
(68, 2, 'nb_enfant', '3', 38, 11),
(69, 2, 'nb_enfant', '3', 38, 11),
(70, 2, 'nb_enfant', '3', 38, 11),
(71, 2, 'nb_enfant', '3', 38, 11),
(72, 2, 'nb_enfant', '3', 38, 11),
(73, 2, 'nb_enfant', '3', 38, 11),
(74, 2, 'nb_enfant', '3', 38, 11),
(75, 2, 'nb_enfant', '3', 38, 11),
(76, 2, 'nb_enfant', '3', 38, 11),
(77, 2, 'nb_enfant', '3', 38, 11),
(78, 2, 'nb_enfant', '3', 38, 11),
(79, 2, 'nb_enfant', '3', 38, 11),
(80, 2, 'nb_enfant', '3', 38, 11),
(81, 2, 'nb_enfant', '3', 38, 11),
(82, 2, 'nb_enfant', '3', 38, 11),
(83, 2, 'nb_enfant', '3', 38, 11),
(84, 2, 'nb_enfant', '3', 38, 11),
(85, 2, 'nb_enfant', '3', 38, 11),
(86, 2, 'nb_enfant', '3', 38, 11),
(87, 2, 'nb_enfant', '3', 38, 11),
(88, 2, 'nb_enfant', '3', 38, 11),
(89, 2, 'nb_enfant', '3', 38, 11),
(90, 2, 'nb_enfant', '3', 38, 11),
(91, 2, 'nb_enfant', '3', 38, 11),
(92, 2, 'nb_enfant', '3', 38, 11),
(93, 2, 'nb_enfant', '3', 38, 11),
(94, 2, 'nb_enfant', '3', 38, 11),
(95, 2, 'nb_enfant', '3', 38, 11),
(96, 2, 'nb_enfant', '3', 38, 11),
(97, 2, 'nb_enfant', '3', 38, 11),
(98, 2, 'nb_enfant', '3', 38, 11),
(99, 2, 'nb_enfant', '3', 38, 11),
(100, 2, 'nb_enfant', '3', 38, 11),
(101, 2, 'nb_enfant', '3', 38, 11),
(102, 2, 'nb_enfant', '3', 38, 11),
(103, 2, 'nb_enfant', '3', 38, 11),
(104, 2, 'nb_enfant', '3', 38, 11),
(105, 2, 'nb_enfant', '3', 38, 11),
(106, 2, 'nb_enfant', '3', 38, 11),
(107, 2, 'nb_enfant', '3', 38, 11),
(108, 2, 'nb_enfant', '3', 38, 11),
(109, 2, 'nb_enfant', '3', 38, 11),
(110, 2, 'nb_enfant', '3', 38, 11),
(111, 2, 'nb_enfant', '3', 38, 11),
(112, 2, 'nb_enfant', '3', 38, 11),
(113, 2, 'nb_enfant', '3', 38, 11),
(114, 2, 'nb_enfant', '3', 38, 11),
(115, 2, 'nb_enfant', '3', 38, 11),
(116, 2, 'nb_enfant', '3', 38, 11),
(117, 2, 'nb_enfant', '3', 38, 11),
(118, 2, 'nb_enfant', '3', 38, 11),
(119, 2, 'nb_enfant', '3', 38, 11),
(120, 2, 'nb_enfant', '3', 38, 11),
(121, 2, 'nb_enfant', '3', 38, 11),
(122, 2, 'nb_enfant', '3', 38, 11),
(123, 2, 'nb_enfant', '3', 38, 11),
(124, 2, 'nb_enfant', '3', 38, 11),
(125, 2, 'nb_enfant', '3', 38, 11),
(126, 2, 'nb_enfant', '3', 38, 11),
(127, 2, 'nb_enfant', '3', 38, 11),
(128, 2, 'nb_enfant', '3', 38, 11),
(129, 2, 'nb_enfant', '3', 38, 11),
(130, 2, 'nb_enfant', '3', 38, 11),
(131, 2, 'nb_enfant', '3', 38, 11),
(132, 2, 'nb_enfant', '3', 38, 11),
(133, 2, 'nb_enfant', '3', 38, 11),
(134, 2, 'nb_enfant', '3', 38, 11),
(135, 2, 'nb_enfant', '3', 38, 11),
(136, 2, 'nb_enfant', '3', 38, 11),
(137, 2, 'nb_enfant', '3', 38, 11),
(138, 2, 'nb_enfant', '3', 38, 11),
(139, 2, 'nb_enfant', '3', 38, 11),
(140, 2, 'nb_enfant', '3', 38, 11),
(141, 2, 'nb_enfant', '3', 38, 11),
(142, 2, 'nb_enfant', '3', 38, 11),
(143, 2, 'nb_enfant', '3', 38, 11),
(144, 2, 'nb_enfant', '3', 38, 11),
(145, 2, 'nb_enfant', '3', 38, 11),
(146, 2, 'nb_enfant', '3', 38, 11),
(147, 2, 'nb_enfant', '3', 38, 11),
(148, 2, 'nb_enfant', '3', 38, 11),
(149, 2, 'nb_enfant', '3', 38, 11),
(150, 2, 'nb_enfant', '3', 38, 11),
(151, 2, 'nb_enfant', '3', 38, 11),
(152, 2, 'nb_enfant', '3', 38, 11),
(153, 2, 'nb_enfant', '3', 38, 11),
(154, 2, 'nb_enfant', '3', 38, 11),
(155, 2, 'nb_enfant', '3', 38, 11),
(156, 2, 'nb_enfant', '3', 38, 11),
(157, 2, 'nb_enfant', '3', 38, 11),
(158, 2, 'nb_enfant', '3', 38, 11),
(159, 2, 'nb_enfant', '3', 38, 11),
(160, 2, 'nb_enfant', '3', 38, 11),
(161, 2, 'nb_enfant', '3', 38, 11),
(162, 2, 'nb_enfant', '3', 38, 11),
(163, 2, 'nb_enfant', '3', 38, 11),
(164, 2, 'nb_enfant', '3', 38, 11),
(165, 2, 'nb_enfant', '3', 38, 11),
(166, 2, 'nb_enfant', '3', 38, 11),
(167, 2, 'nb_enfant', '3', 38, 11),
(168, 2, 'nb_enfant', '3', 38, 11),
(169, 2, 'nb_enfant', '3', 38, 11),
(170, 2, 'nb_enfant', '3', 38, 11),
(171, 2, 'nb_enfant', '3', 38, 11),
(172, 2, 'nb_enfant', '3', 38, 11),
(173, 2, 'nb_enfant', '3', 38, 11),
(174, 2, 'nb_enfant', '3', 38, 11),
(175, 2, 'nb_enfant', '3', 38, 11),
(176, 2, 'nb_enfant', '3', 38, 11),
(177, 2, 'nb_enfant', '3', 38, 11),
(178, 2, 'nb_enfant', '3', 38, 11),
(179, 2, 'nb_enfant', '3', 38, 11),
(180, 2, 'nb_enfant', '3', 38, 11),
(181, 2, 'nb_enfant', '3', 38, 11),
(182, 2, 'nb_enfant', '3', 38, 11),
(183, 2, 'nb_enfant', '3', 38, 11),
(184, 2, 'nb_enfant', '3', 38, 11),
(185, 2, 'nb_enfant', '3', 38, 11),
(186, 2, 'nb_enfant', '3', 38, 11),
(187, 2, 'nb_enfant', '3', 38, 11);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `mdp` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `admin` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `adresse`, `mdp`, `admin`) VALUES
(1, 'CARMONE', 'Alexandre', 'a.carmone@lprs.fr', '21 rue Paul renaud', '123456', NULL),
(2, 'sextius', 'Sullivan', 'sullivan.sextius@gmail.com', '19 avenue jean jaurès', 'test', 'root'),
(4, 'admin', 'admin', 'admin', 'admin', 'root', NULL),
(5, 'adm', '', '', '', '', NULL),
(6, 'admin_2', 'admin_2', 'admin_2', 'admin_2', 'admin_2', 'root'),
(7, 'admin_2', 'admin_2', 'admin_2', 'admin_2', 'admin_2', 'root'),
(8, 'admin', 'su', 'dmin', 'admin', 'admin', 'root'),
(9, 'test', 'test', '', '', '', 'root'),
(10, 'test', 'test', 'test', 'tes', 'tes', 'root'),
(11, 'Sextius', 'Sullivan', 'sullivan.sextius@gmail.com', '19 avenue jean jaurès', 'root', 'root'),
(12, 'Sextius', 'Sullivan', 'sullivan.sextius@gmail.com', '19 avenue jean jaurès', '', 'root'),
(13, 'Sextius', 'Sullivan', 'sullivan.sextius@gmail.com', '19 avenue jean jaurès', 'Droit admin', 'root'),
(14, 'root', 'root', 'root', 'root', 'Admin', 'test'),
(15, 'eeeee', 'eeeeee', 'eeeee', 'eeeeee', 'eeeeeeee', NULL),
(16, 'zzz', 'zzz', 'zzz', 'az', 'az', NULL),
(17, 'sssss', 'ssssss', 'ssssss', 'sssssss', 'ssssssss', NULL),
(18, 'ddddd', 'ddddd', 'ddddd', 'dddddd', 'ddddddd', NULL),
(19, 'dddddd', 'dddddd', 'd.d@gmail.com', 'ddddd', 'ddddd', NULL),
(24, 'IUBIUBUB', 'KBMIOBOB', 'KJBMBJMI', 'LKBMB', 'JBIB', NULL),
(25, 'dddddd', 'Sullivanddddddddd', 's.sextius@lprs.fr', 'dddddddd avenue ilbumiuv', 'svdqvzv', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `liens`
--
ALTER TABLE `liens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `clee_film` (`id_film`),
  ADD KEY `clee_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `liens`
--
ALTER TABLE `liens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `place`
--
ALTER TABLE `place`
  MODIFY `numero` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `clee_film` FOREIGN KEY (`id_film`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `clee_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
