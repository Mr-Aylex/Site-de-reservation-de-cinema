-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 31 mars 2020 à 07:05
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `resume` longtext COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `bande_annonce` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `salle` varchar(4) COLLATE utf8mb4_bin NOT NULL,
  `tweet` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `resume`, `image`, `bande_annonce`, `salle`, `tweet`) VALUES
(37, 'L\'appel de la foret', 'Lorsque vous regardez l\'appel, il semble que la forêt de la forêt peut parler. Avec les mots « Serendipity » - un résultat inattendu - il semble qu\'un complot devait arriver juste pour la forêt du destin. On dit que la forêt a regardé des événements depuis des années, en attendant un en particulier se produire.      Sur le site, les créateurs expliquent l\'histoire de la forêt. On dit que, après les bombes atomiques sont tombées sur Hiroshima et Nagasaki, les gens avaient peur que la guerre serait une réalité pour toujours. Afin de prévenir la guerre nucléaire, la forêt aurait dit aux quatre dirigeants japonais que si elles existent encore, ils doivent soit remise ou être tués par la forêt. Au fil du temps, le Japon n\'a pas respecté l\'avertissement de la forêt, et finissent par se rendre, devenant ainsi la cinquième nation à succomber à la guerre atomique.      L\'appel de la forêt se poursuit l\'histoire de nous dire que peu importe ce qui se passe, la forêt sera là pour voir et faire nos choix. Le film est une histoire très intéressante avec beaucoup de rebondissements. Avec son mélange de thriller et mystère, on se demande comment vous devez interpréter ce que la forêt vous dit.', 'Appel_de_la_foret.jpg', 'bande_annonce_laforet.jpg', '1', 'https://twitter.com/Lappeldelafort2?ref_src=twsrc%5Etfw'),
(38, 'The boy', 'Le garçon: La Malédiction de Brahms est une adaptation de film de série du roman de Victor Hugo. Ceci est l\'un des plus populaires des listes de lecture dans de nombreuses écoles publiques à travers les Etats-Unis. Dans cette série intéressante, vous apprendrez tout sur l\'histoire de la musique classique, la littérature classique, et les techniques classiques du cinéma. Le film récapitule quatre jours très amusant dans la vie d\'un héros improbable. L\'apprentissage de la classique histoire de la musique: Films semblent avoir beaucoup plus de temps et de soins d\'entrer dans ces adaptations, donc nous allons parler ici. Une caractéristique fantastique dans ce film est qu\'il documente de nombreux grands et célèbres compositeurs qui étaient en vie au cours de la même période de temps que les personnages principaux.', 'the_boy.jpeg', 'bande_annonce_theboy.jpg', '2', 'https://twitter.com/TheBoyMovie?ref_src=twsrc%5Etf'),
(39, 'Sonic le film', 'Il y a tellement de choses que vous pouvez vous renseigner sur Sonic the Hedgehog, de la franchise de film et tous les jouets, qu\'il est vraiment difficile de tout faire à partir de zéro. Si vous voulez en savoir beaucoup sur ce personnage, ou si vous voulez en savoir plus sur d\'autres personnages célèbres, vous allez avoir besoin d\'aide dans votre recherche.  La meilleure chose que vous pouvez faire pour votre recherche est de commencer par les sources en ligne. Bien qu\'il existe des sites Web qui traitent exclusivement avec les nouvelles, ils peuvent aussi être grande pour établir des liens et l\'apprentissage de nombreuses personnalités célèbres. Ces sites ont des bases de données de livres, de films et d\'autres médias qui peuvent vous aider à comprendre ce que le sujet est au sujet.  La meilleure façon d\'en apprendre davantage sur le film est d\'aller sur le lien qui vous donne les informations. Cela vous donnera un outil interactif pour commencer dans votre recherche pour plus d\'informations sur ce film. Tout ce que vous avez à faire est d\'entrer les mots-clés que vous voulez, et vous obtiendrez des informations sur la série.', 'sonic.jpeg', 'sonic.jpg', '3', 'https://twitter.com/SonicMovie?ref_src=twsrc%5Etfw'),
(40, 'Bad Boys 3', 'Si vous êtes un fan de Bad Boys pour la vie, alors vous apprécierez certainement ce film. Le film a beaucoup de         violence et de scénarios sexuels qu\'elle fait appel à la fois les hommes et les femmes. Cette série raconte         l\'histoire de deux hommes d\'âge moyen qui ont eu une longue association avec la force de police.          Howard (James Caan) est un préretraité qui daté de jeunes filles pendant des années et quand il se retire enfin, il         décide de rencontrer une ancienne flamme. Cependant, il est peu de temps avant qu\'il ne soit accusé d\'avoir enlevé         son ex-petite amie et sa vendant comme esclave sexuelle. Cependant, il est peu de temps avant qu\'il est appelé en         service quand l\'homme qu\'il avait été juré de protéger meurt dans des circonstances mystérieuses. Pendant ce temps,         Owen (Thomas Haden Church) se retrouve coincé dans une profonde forêt sombre à l\'âge de 35 après toute sa famille         est tué dans un accident de la maison monstre.', 'bad_boys.jpeg', 'bad_boys_3.jpg', '4', 'https://twitter.com/BadBoys?ref_src=twsrc%5Etfw'),
(41, 'Birds of prey', '« Oiseaux de proie et Fantabuleuse » est une série de bandes dessinées bien connues qui suit les exploits d\'un justicier nommé Harley Quinn. Il est sur la vie quotidienne de Harley Quinn, ses relations avec sa famille, et d\'autres personnes à Gotham City.  L\'histoire du spectacle est aussi le même que celui de la bande dessinée: Il commence quand Harley est licenciée de son travail pour l\'utilisation de ses compétences criminelles pour commettre un crime sans être pris. Après l\'événement humiliant, elle décide de changer ses manières en devenant un super-héros avec la mission pour attraper les criminels qui commettent des crimes sans être détectés.  Katie Goldmar a joué le rôle de Harley Quinn alors qu\'elle était en train de filmer le film. Elle avait beaucoup de travail amusant sur le film parce qu\'il est son premier rôle de super-héros. Elle a dit dans une interview qu\'elle a été enthousiasmés par les nouveaux défis auxquels il faisait face sur le film.', 'birds_of_prey.jpeg', 'bande_annonce_harleyquinn.jpg', '5', 'https://twitter.com/birds_quinn?ref_src=twsrc%5Etfw');

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `numero` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tarif` int(11) DEFAULT NULL,
  `type_de_tarif` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `salle` varchar(5) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `clee_film` (`id_film`),
  KEY `clee_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `mdp` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `admin` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `adresse`, `mdp`, `admin`) VALUES
(1, 'CARMONE', 'Alexandre', 'a.carmone@lprs.fr', '21 rue Paul renaud', '123456', 'root'),
(2, '', '', '', '', 'Admin', 'root'),
(3, '', '', '', '', 'Admin', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `clee_film` FOREIGN KEY (`id_film`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `clee_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
