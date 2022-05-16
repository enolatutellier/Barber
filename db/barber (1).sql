-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 16 mai 2022 à 07:54
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
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Id_article` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Description` text NOT NULL,
  `Photo` varchar(40) NOT NULL,
  `Id_categorie` int(11) NOT NULL,
  `Id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Id_article`, `Nom`, `Description`, `Photo`, `Id_categorie`, `Id`) VALUES
(1, 'Barbe Courte', 'La barbe courte est est à mi-chemin entre la barbe de 3 jours et la barbe longue. Si vous avez quelques trous dans votre barbe de 3 jours, le style de la barbe courte donnera un effet plus rempli à votre barbe.\r\nEn effet en laissant quelques millimètre de plus, votre barbe aura plus de volume et gagnera en uniformité. La barbe courte, aussi appelée barbe de 10 jours, est selon une étude Anglaise, le type de barbe qui plait le plus aux femmes.\r\nSi vous voulez adopter le style de barbe court, vous devez impérativement tailler votre barbe régulièrement à l’aide d’une tondeuse à barbe courte. L’entretien est la clé d’une belle barbe courte.', 'Barbe courte.webp', 7, 0),
(2, 'Barbe de 3 jours', 'La barbe de 3 jours est l’un des types de barbe les plus courants en 2020. Simple à réaliser mais elle nécessite tout de même un entretien régulier du poil. Si vous n’avez pas une implantation très dense cela peut donner un aspect négligé. Privilégiez ce type de barbe si vous avez une pilosité conséquente. Avoir une barbe de 3 jours est un bon compromis si vous voulez avoir de la barbe sans forcément de voir la brosser plusieurs fois par semaines ou investir dans une tondeuse à barbe longue. La majorité des tondeuses feront l’affaire pour tailler votre barbe de 3 jours.', 'Barbe de 3 jours.webp', 7, 0),
(3, 'Barbe naissante', 'La barbe naissante est le style de barbe qui se situe juste avant la barbe de 3 jours. Généralement la barbe courte est d’une longueur de 0.5 à 1mm. Pour avoir l’effet attendu, vous devez avoir une barbe avec une bonne implantation, sans trous de barbe. Ce type de barbe demande un entretien régulier pour que les poils soient de la même longueur.', 'Barbe naissante.webp', 7, 0),
(4, 'Barbe en pointe', 'La barbe en pointe est un mixte entre la barbe longue et la barge mi-longue. Le principe de ce style de barbe est de jouer sur les longueurs au niveau du menton et des joues. Ce type de barbe permet d’avoir une barbe longue tout en étant soignée et moderne.\r\n', 'Barbe en pointe.webp', 7, 0),
(5, 'Bouc', 'Le bouc ou Goatee, est un type de barbe qui convient particulièrement aux visages ronds. C’est aussi une bonne alternative si vous manquez de poils sur les joues. Mais le bouc est un style de barbe qui demande tout autant d’attention, puisque vous avez moins de poils à tailler, cela doit être fait de manière irréprochable.\r\nRappel de ce style de barbe : le bouc est le mélange d’une moustache rejoignant les poils du menton. Attention, pour les hommes entre 18 et 25 ans, porter un bouc aura tendance à vous donner un look plus mature. Ce qui est une bonne idée si vous souhaitez paraitre plus vieux.', 'Barbe avec bouc.webp', 7, 0),
(6, 'Barbiche', 'La barbiche est la combinaison d’une moustache et d’une barbe sous le menton sans ce ceux-ci ne se rejoignent. Si vous n’avez pas de barbe au niveau des joues et que vous ne voulez pas porter de bouc c’est la solution idéale.', 'Barbiche.webp', 7, 0),
(7, 'Barbe Nicolas II', 'La barbe Nicolas II était un type de barbe très en vogue au début du 20ème siècle. Elle refait son apparition et donne une originalité à votre look masculin. La barbe Nicolas II est composée d’une barbe longue au niveau du menton, taillée en pointe, ainsi que d’une moustache travaillée et cirée pour une tenue parfaite.\r\nSi vous voulez avoir une forme de barbe originale et sophistiquée, c’est exactement ce qu’il vous faut. Elle donne du caractère à l’homme qui la porte, mais il devra en prendre soin pour avoir un résultat digne de ce nom. Le peignage de barbe est indispensable, tout comme le fait d’avoir une tondeuse adaptée.', 'Barbe nicolas 2.webp', 7, 0),
(8, 'Barbe sculptée', 'Le style de la barbe sculptée se rapproche le plus de la barbe de 3 jours. C’est une barbe assez courte qui a la particularité d’avoir des contours parfaitement dessinés et un taillage de barbe irréprochable.', 'Barbe sculpte.webp', 7, 0),
(9, 'Barbe Longue', 'La barbe longue revient de plus en plus à la mode, elle vous donnera un style viril et masculin. Attention, l’entretien de ce type de barbe n’est pas à négliger. Un mauvais entretien de votre barbe longue, et votre look viril se transformera en une barbe négligée.', 'Barbe longue.webp', 7, 0),
(10, 'Coupe courte classique modernisée', 'L\'avantage de cette coupe de cheveux ? Elle convient aux hommes de tous âges et de tout poil. Ou presque. Les cheveux raides préféreront une version plus nette avec une cire pour fixer, tandis que les cheveux plus souples pourront se permettre de ne porter qu\'un simple spray.', 'Coupe courte classique.webp', 8, 0),
(11, 'Coupe Clark Kent', 'Envie de passer pour le gendre idéal ? C\'est la coiffure parfaite. N\'oubliez pas de laisser un peu de longueur sur le dessus pour rester dans la tendance du moment.', 'Coupe Clark Kent.webp', 8, 0),
(12, 'Coupe plateau long', 'Vous souhaitez être pile dans la tendance actuelle sans trop passer pour un modeux obsédé par ses cheveux ? Imprimez cette photo et amenez-la à votre coiffeur pour qu\'il s\'en serve de modèle pour vous couper les cheveux.', 'Coupe plateau long.webp', 8, 0),
(13, 'Coupe asymetrique', 'De la longueur sur le dessus, des côtés courts et un mouvement de côté, voilà le secret de cette coupe ultra moderne.', 'Coupe asymetrique.webp', 8, 0),
(14, 'Coupe courte légèrement rétro', 'Côtés courts et dessus du crâne un peu long, c\'est sûr, cette coiffure est dans l\'ère du temps. Son plus ? La mèche au-dessus du front est légèrement bombée histoire de donner une signature rétro au look.', 'Coupe courte legerement retro.webp', 8, 0),
(15, 'Coupe à plateau plaquée', 'Côtés bien courts et dessus légèrement plus long, cette coiffure assure un style de bureau parfait grâce à des longueurs bien plaquées en arrière.', 'Coupe a plateau plaquee.webp', 8, 0),
(16, 'Coiffure de rockeur tendre', 'On reste dans le ton du moment avec cette coiffure aux côtés courts et dessus de la tête bien long. Le tout est rabattu en arrière en douceur avec un peu de volume pour un esprit rock, mais pas trash. Crêpez si besoin pour recréer cette ampleur capillaire.', 'Coiffure de rockeur tendre.webp', 8, 0),
(17, 'Coupe classique hipster', 'Une coupe parfaite pour tous les habitants des 9ème, 10ème et 18ème arrondissements de Paris et de Montreuil. Et tous ceux qui rêvent de s\'y installer.', 'Coupe classique hipster.webp', 8, 0),
(18, 'Coupe pyramide', 'Des côtés courts, des longueurs en dégradé de manière à ce que le milieu soit la zone la plus longue et voici la coupe pyramide ! Mention spéciale pour la barbe. Et la pipe.', 'Coupe pyramide.webp', 8, 0),
(19, 'Coupe courte à longue mèche', 'Sur la base d\'une coupe courte classique, laissez pousser votre frange et rabattez-la en arrière.', 'Coupe courte a longue meche.webp', 8, 0),
(20, 'La mèche rabattue', 'Marre de cette mode de mettre ses cheveux en arrière. Pas de souci ! Mettez-les devant et sur le côté.', 'La meche rabattue.webp', 8, 0),
(25, 'Coloration barbe', 'Coloration', 'coloration barbe.jpg', 5, 0),
(26, 'Coloration cheveux', 'Coloration', 'coloration cheveux.jpg', 5, 0),
(27, 'Coloration cheveux et barbe', 'Coloration', 'coloration barbe et cheveux.jpg', 5, 0),
(28, 'Soin complet', 'Soin cheveux, barbe et massage', 'forfait par defaut.webp', 6, 0),
(29, 'Coupe cheveux et barbe', '', 'forfait par defaut.webp', 6, 0),
(30, 'Forfait coupe cheveux barbe soin', '', 'forfait par defaut.webp', 6, 0),
(31, 'Forfait coloration et soin', '', 'forfait par defaut.webp', 6, 0),
(32, 'Forfait cheveux soin', '', 'forfait par defaut.webp', 6, 0),
(35, 'FUSIO-DOSE DE KÉRASTASE', 'Après un vrai diagnostic au cours duquel il détermine la nature du cheveu et ses besoins, le coiffeur crée un mélange personnalisé à partir de quatre concentrés et cinq boosters. Vingt mélanges différents sont dont possibles pour élaborer un petit cocktail magique parfaitement adapté. Après le shampoing, les cheveux sont bien essorés pour que le produit pénètre au maximum, le mélange est appliqué mèche-à-mèche, les mèches sont twistées et le mélange émulsionné. S’en suit un rinçage rapide car il n’y a pas de temps de pose.', 'soin fusio-dose.jpg', 4, 0),
(36, 'SOIN DE BONHEUR DE LISSFACTOR', 'Ce soin se déroule en pas moins de cinq étapes. Il restaure et revitalise pour deux mois les cheveux longs ou mi-longs sensibilisés et ternis par les traitements capillaires ou les changements de saison, grâce à un cocktail de protéines, d’acides aminés et de kératine. En salon, le coiffeur réalise deux shampoings, sèche les cheveux, applique le soin et le laisse poser sous cellophane et sous appareil chauffant pendant vingt minutes. Après un rinçage, il applique un deuxième soin, masse le cuir chevelu et vaporise les pointes avec le spray Ô de bonheur avant de passer au brushing.', 'soin lissfactor.jfif', 4, 0),
(37, 'PRO FIBER DE L’ORÉAL PRO', 'Ce soin nourrit et reconstruit à la fois. Il s’adresse aux cheveux très longs, en manque de brillance, fourchus ou colorés. Réactivé à la maison par la cliente, il conserve ses effets pendant deux à trois mois. En salon, le coiffeur réalise un diagnostic via une application iPad pour déterminer laquelle des trois gammes Pro Fiber est la plus adaptée en fonction des habitudes de sa cliente, de son profil capillaire et du niveau de sensibilisation du cheveu. Le soin concentré est ensuite appliqué et un temps de pose respecté. La cliente repart ensuite avec son set de produits pour entretenir le soin : un shampoing, un après-shampoing ou un masque et une recharge pour réactiver le soin au bout du quatrième shampoing.', 'soin pro fiber.jpg', 4, 0),
(38, 'Le soin profond', 'Cette méthode en plusieurs étapes et avec des produits adaptés à chaque étape, permet d’hydrater ou de nourrir en profondeur la fibre de vos cheveux. C’est-à-dire que contrairement aux produits capillaires qui restent à la surface des cheveux, votre tige capillaire va ici être nourrie et hydratée de l’intérieur. Ce soin agit sur le cheveu à la fois en surface et en profondeur, ce qui lui vaut ce nom de « soin profond ».', 'soin profond.jpg', 4, 0),
(39, 'Massage du cuir chevelu', 'Masser son cuir chevelu a des vertus bien plus importantes que vous ne pourriez le penser. Hormis le bien-être que cela vous procure, ce massage permet de faire du bien à vos cheveux. Alors, pas question de s\'en priver. ', 'soin massage.jpg', 4, 0),
(40, 'Masque charbon noir', 'La peau de l’homme a besoin de soins particuliers. Nous mettons tout en œuvre pour protéger votre épiderme. Tout au long de la journée, diverses saletés s’accumulent sur le visage. Grâce à un nettoyant et des soins hydratants, nous veillons à ce qu’il reste sain et doux à chaque instant.', 'soin masque charbon.jpg', 4, 0),
(41, 'Masque argile jaune', 'Le visage est soumis à des agressions au quotidien. Pollution, soleil, produits cosmétiques, poussière sont autant d’éléments invisibles et qui pourtant se déposent sur notre peau et viennent l’étouffer et la fragiliser. Le résultat ? La peau devient terne, parfois trop grasse ou trop sèche (les deux à la fois !) et présente des irrégularités telles que des rougeurs, des irritations, des points noirs… Le masque peau parfaite à l’argile jaune est conçu pour prévenir ces désagréments et redonner à votre peau une seconde jeunesse.', 'soin masque argile.jpg', 4, 0),
(42, 'Application baume à barbe', 'Notre baume à barbe agit à 3 niveaux: il la nourrit, aide à contrôler les poils rebelles et la protège. Délogez une noisette de baume, frottez-la entre vos paumes et appliquez sur la barbe. Le baume pénètre et transmet ses propriétés nutritives à la barbe, tout en aidant à lui donner une forme harmonieuse. De plus, ses ingrédients contribuent à lui offrir une protection naturelle contre les éléments.', 'soin baume.jpg', 4, 0),
(43, 'Application huile pour barbe', 'Tu souhaites une jolie barbe entretenue et qui sent bon ? Ne cherche plus, la solution se trouve dans les ingrédients de ce petit flacon miracle qui t’offrira de nombreux bénéfices. N’as-tu jamais rêvé d’avoir un poil fort et soyeux, bien nourri, une peau hydratée et pour couronner le tout : une odeur agréable qui émane de ta belle toison ? Ce sont tous ces rôles que jouent les huiles pour barbes !  Elles représentent le point indispensable d’un bon entretien pour barbu, un soin homme premium pour le groomer exceptionnel que tu es. N’est-ce pas un somptueux avantage que de laisser une trace agréable sur son passage ? Avec notre large choix d’huiles pour barbe, tu trouveras forcément ton bonheur !', 'soin huile barbe.png', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `Id_categorie` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Parent` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`Id_categorie`, `Nom`, `Parent`) VALUES
(1, 'Prestation', NULL),
(2, 'Produit de soin', NULL),
(3, 'Equipement et accessoire', NULL),
(4, 'Soin', 1),
(5, 'Coloration', 1),
(6, 'Forfait', 1),
(7, 'Barbe', 1),
(8, 'Coiffure', 1),
(9, 'Huiles', 2),
(10, 'Cires', 2),
(11, 'Shampoings', 2),
(12, 'Baumes', 2),
(17, 'Rasoirs', 3),
(18, 'Blaireaux', 3),
(19, 'Supports', 3),
(20, 'Brosses/Peignes', 3),
(21, 'Bijoux', 3);

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `Id_statut` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Droits` int(10) UNSIGNED NOT NULL
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
  `Id_status` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Id_article`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id_categorie`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Id_statut`);

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
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `Id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id_categorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `Id_statut` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
