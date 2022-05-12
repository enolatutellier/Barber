-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 12 mai 2022 à 12:33
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `barber`
--

-- --------------------------------------------------------

--
-- Structure de la table `barbe`
--

CREATE TABLE `barbe` (
  `Id_barbe` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `barbe`
--

INSERT INTO `barbe` (`Id_barbe`, `Nom`, `Description`, `Photo`) VALUES
(3, 'Barbe Courte', 'La barbe courte est est à mi-chemin entre la barbe de 3 jours et la barbe longue. Si vous avez quelques trous dans votre barbe de 3 jours, le style de la barbe courte donnera un effet plus rempli à votre barbe.\r\nEn effet en laissant quelques millimètre de plus, votre barbe aura plus de volume et gagnera en uniformité. La barbe courte, aussi appelée barbe de 10 jours, est selon une étude Anglaise, le type de barbe qui plait le plus aux femmes.\r\nSi vous voulez adopter le style de barbe court, vous devez impérativement tailler votre barbe régulièrement à l’aide d’une tondeuse à barbe courte. L’entretien est la clé d’une belle barbe courte.', 'Barbe courte.webp'),
(4, 'Barbe de 3 jours', 'La barbe de 3 jours est l’un des types de barbe les plus courants en 2020. Simple à réaliser mais elle nécessite tout de même un entretien régulier du poil. Si vous n’avez pas une implantation très dense cela peut donner un aspect négligé. Privilégiez ce type de barbe si vous avez une pilosité conséquente.\r\nAvoir une barbe de 3 jours est un bon compromis si vous voulez avoir de la barbe sans forcément de voir la brosser plusieurs fois par semaines ou investir dans une tondeuse à barbe longue. La majorité des tondeuses feront l’affaire pour tailler votre barbe de 3 jours.', 'Barbe de 3 jours.webp'),
(6, 'Barbe naissante', 'La barbe naissante est le style de barbe qui se situe juste avant la barbe de 3 jours. Généralement la barbe courte est d’une longueur de 0.5 à 1mm. Pour avoir l’effet attendu, vous devez avoir une barbe avec une bonne implantation, sans trous de barbe. Ce type de barbe demande un entretien régulier pour que les poils soient de la même longueur.', 'Barbe naissante.webp'),
(7, 'Barbe en pointe', 'La barbe en pointe est un mixte entre la barbe longue et la barge mi-longue. Le principe de ce style de barbe est de jouer sur les longueurs au niveau du menton et des joues. Ce type de barbe permet d’avoir une barbe longue tout en étant soignée et moderne.\r\n', 'Barbe en pointe.webp'),
(8, 'Dégradé barbe', 'Si vous voulez avoir un style de barbe moderne et dans l’air du temps, la barbe dégradé est la solution. Peut importe votre âge, c’est une forme de barbe qui convient à tous les hommes.\r\nPour avoir un beau dégradé de barbe vous devez avoir une densité de poils minium, il est donc recommandé de faire des routines de soins de la barbe, pour bien stimuler et faire pousser la barbe de façon homogène.', 'Barbe degrade.webp'),
(9, 'Bouc', 'Le bouc ou Goatee, est un type de barbe qui convient particulièrement aux visages ronds. C’est aussi une bonne alternative si vous manquez de poils sur les joues. Mais le bouc est un style de barbe qui demande tout autant d’attention, puisque vous avez moins de poils à tailler, cela doit être fait de manière irréprochable.\r\nRappel de ce style de barbe : le bouc est le mélange d’une moustache rejoignant les poils du menton. Attention, pour les hommes entre 18 et 25 ans, porter un bouc aura tendance à vous donner un look plus mature. Ce qui est une bonne idée si vous souhaitez paraitre plus vieux.', 'Barbe avec bouc.webp'),
(10, 'Barbiche', 'La barbiche est la combinaison d’une moustache et d’une barbe sous le menton sans ce ceux-ci ne se rejoignent. Si vous n’avez pas de barbe au niveau des joues et que vous ne voulez pas porter de bouc c’est la solution idéale.', 'Barbiche.webp'),
(11, 'Barbe Nicolas II', 'La barbe Nicolas II était un type de barbe très en vogue au début du 20ème siècle. Elle refait son apparition et donne une originalité à votre look masculin. La barbe Nicolas II est composée d’une barbe longue au niveau du menton, taillée en pointe, ainsi que d’une moustache travaillée et cirée pour une tenue parfaite.\r\nSi vous voulez avoir une forme de barbe originale et sophistiquée, c’est exactement ce qu’il vous faut. Elle donne du caractère à l’homme qui la porte, mais il devra en prendre soin pour avoir un résultat digne de ce nom. Le peignage de barbe est indispensable, tout comme le fait d’avoir une tondeuse adaptée.', 'Barbe nicolas 2.webp'),
(12, 'Barbe sculptée', 'Le style de la barbe sculptée se rapproche le plus de la barbe de 3 jours. C’est une barbe assez courte qui a la particularité d’avoir des contours parfaitement dessinés et un taillage de barbe irréprochable.', 'Barbe sculpte.webp'),
(13, 'Barbe Longue', 'La barbe longue revient de plus en plus à la mode, elle vous donnera un style viril et masculin. Attention, l’entretien de ce type de barbe n’est pas à négliger. Un mauvais entretien de votre barbe longue, et votre look viril se transformera en une barbe négligée.', 'Barbe longue.webp');

-- --------------------------------------------------------

--
-- Structure de la table `coiffure`
--

CREATE TABLE `coiffure` (
  `Id_coiffure` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Description` text NOT NULL,
  `Photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coiffure`
--

INSERT INTO `coiffure` (`Id_coiffure`, `Nom`, `Description`, `Photo`) VALUES
(1, 'Coupe courte classique modernisée', 'L\'avantage de cette coupe de cheveux ? Elle convient aux hommes de tous âges et de tout poil. Ou presque. Les cheveux raides préféreront une version plus nette avec une cire pour fixer, tandis que les cheveux plus souples pourront se permettre de ne porter qu\'un simple spray.', 'Coupe courte classique.webp'),
(2, 'Coupe Clark Kent', 'Envie de passer pour le gendre idéal ? C\'est la coiffure parfaite. N\'oubliez pas de laisser un peu de longueur sur le dessus pour rester dans la tendance du moment.', 'Coupe Clark Kent.webp'),
(3, 'Coupe plateau long', 'Vous souhaitez être pile dans la tendance actuelle sans trop passer pour un modeux obsédé par ses cheveux ? Imprimez cette photo et amenez-la à votre coiffeur pour qu\'il s\'en serve de modèle pour vous couper les cheveux.', 'Coupe plateau long.webp'),
(4, 'Coupe asymetrique', 'De la longueur sur le dessus, des côtés courts et un mouvement de côté, voilà le secret de cette coupe ultra moderne.', 'Coupe asymetrique.webp'),
(5, 'Coupe courte légèrement rétro', 'Côtés courts et dessus du crâne un peu long, c\'est sûr, cette coiffure est dans l\'ère du temps. Son plus ? La mèche au-dessus du front est légèrement bombée histoire de donner une signature rétro au look.', 'Coupe courte legerement retro.webp'),
(6, 'Coupe à plateau plaquée', 'Côtés bien courts et dessus légèrement plus long, cette coiffure assure un style de bureau parfait grâce à des longueurs bien plaquées en arrière.', 'Coupe a plateau plaquee.webp'),
(7, 'Coiffure de rockeur tendre', 'On reste dans le ton du moment avec cette coiffure aux côtés courts et dessus de la tête bien long. Le tout est rabattu en arrière en douceur avec un peu de volume pour un esprit rock, mais pas trash. Crêpez si besoin pour recréer cette ampleur capillaire.', 'Coiffure de rockeur tendre.webp'),
(8, 'Coupe classique hipster', 'Une coupe parfaite pour tous les habitants des 9ème, 10ème et 18ème arrondissements de Paris et de Montreuil. Et tous ceux qui rêvent de s\'y installer.', 'Coupe classique hipster.webp'),
(9, 'Coupe pyramide', 'Des côtés courts, des longueurs en dégradé de manière à ce que le milieu soit la zone la plus longue et voici la coupe pyramide ! Mention spéciale pour la barbe. Et la pipe.', 'Coupe pyramide.webp'),
(10, 'Coupe courte à longue mèche', 'Sur la base d\'une coupe courte classique, laissez pousser votre frange et rabattez-la en arrière.', 'Coupe courte a longue meche.webp'),
(11, 'La mèche rabattue', 'Marre de cette mode de mettre ses cheveux en arrière. Pas de souci ! Mettez-les devant et sur le côté.', 'La meche rabattue.webp');

-- --------------------------------------------------------

--
-- Structure de la table `coloration`
--

CREATE TABLE `coloration` (
  `Id_coloration` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Description` text NOT NULL,
  `Photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

CREATE TABLE `forfait` (
  `Id_forfait` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `soin`
--

CREATE TABLE `soin` (
  `Id_soin` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id_user` int(10) UNSIGNED NOT NULL,
  `Identifiant` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Status` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `barbe`
--
ALTER TABLE `barbe`
  ADD PRIMARY KEY (`Id_barbe`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `coiffure`
--
ALTER TABLE `coiffure`
  ADD PRIMARY KEY (`Id_coiffure`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `coloration`
--
ALTER TABLE `coloration`
  ADD PRIMARY KEY (`Id_coloration`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `forfait`
--
ALTER TABLE `forfait`
  ADD PRIMARY KEY (`Id_forfait`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `soin`
--
ALTER TABLE `soin`
  ADD PRIMARY KEY (`Id_soin`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_user`),
  ADD UNIQUE KEY `Mail` (`Mail`),
  ADD UNIQUE KEY `Identifiant` (`Identifiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `barbe`
--
ALTER TABLE `barbe`
  MODIFY `Id_barbe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `coiffure`
--
ALTER TABLE `coiffure`
  MODIFY `Id_coiffure` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `coloration`
--
ALTER TABLE `coloration`
  MODIFY `Id_coloration` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forfait`
--
ALTER TABLE `forfait`
  MODIFY `Id_forfait` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `soin`
--
ALTER TABLE `soin`
  MODIFY `Id_soin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
