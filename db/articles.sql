-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 17 mai 2022 à 13:01
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


--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Nom`, `Description`, `Photo`, `Id_categorie`, `Id`) VALUES
('Brosse à barbe Darwin', 'La brosse à barbe Darwin permet un brossage délicat pour soigner les poils de la barbe grâce à ses soies naturelles de sanglier. Les poils de sanglier sont parfaitement adaptés pour brosser les barbes, car ils sont les plus efficaces pour bien répartir le sébum que la barbe et la peau produisent naturellement. Un brossage quotidien permet de maintenir votre barbe en ordre, d\'évacuer les éventuelles impuretés et poils cassés, votre barbe n\'en sera que plus belle !  Le manche assure à la fois une excellente prise en main grâce à sa poignée longue et fine, mais aussi une bonne vision du passage de la brosse puisque votre main est décalée par rapport à la zone de brossage. Sa taille medium en fait un accessoire de choix pour votre barbe : elle ne prend pas trop de place, mais sait rester efficace en toute situation. Elle est plutôt légère pour sa taille, elle fait donc une bonne brosse de voyage !  Dureté du poil  Il s\'agit d\'une brosse souple, qui conviendra pour les barbes courtes à mi-longues. Sa souplesse, rare sur le marché, est très agréable à utiliser pour mettre en forme votre barbe, mais pour un démêlage intensif nous vous conseillons une brosse à poils plus drus. Conviendra également pour les cheveux fins!  Les plus  Fabriquée en bois de hêtre provenant de forêts gérées de façon responsable (bois garanti contrôlé FSC), entièrement en Allemagne. Le logo est gravé au laser, le tout est ensuite laqué noir. Soies naturelles de porc / sanglier souples. Petit sac en toile de coton bio inclus, pour la protéger ! Dimensions  15,5 x 2,5 cm, légère.', 'brosse-a-barbe-darwin.webp', 20, 0),
('BROSSE POUR GRANDE BARBE \"MONSTER\" - KENT', 'Grande brosse pour barbe  Cette étonnante brosse à barbe a été conçue par les maîtres brossiers de chez Kent. Il s\'agit d\'une très belle brosse, le fruit d\'une réflexion attentive sur les besoins de l\'homme barbu.  Les poils sont constitués d\'un savant mélange de crin de cheval naturel et de nylon, d\'une longueur et d\'une souplesse choisies pour coiffer en douceur tout type de barbe et plus particulièrement les barbes longues.   La poignée est en retrait, pour faire en sorte que la main ne gêne pas le passage de la brosse. La poignée reprend la forme d\'un pistolet ancien, car ça faisait bien masculin tout en restant esthétique (ils ont pensé à une tronçonneuse, mais ça faisait moins classe).  La brosse est fournie dans une belle boite cadeau, et un petit sac en toile est inclus, vous permettant de protéger votre brosses des éléments extérieurs !  CARACTÉRISTIQUES Poids : 65 g Dimensions : 20 x 5 cm au total, 9 x 5 x 3 cm utile.', 'brosse-pour-grande-barbe-monster-kent.webp', 20, 0),
('PEIGNE DE POCHE PLIANT NOIR - SÉLECTION RC', 'Peigne de Poche Pliant Noir Sélection Rasage Classique Ce mignon petit peigne pliant s\'emportera partout, grâce à son format \"de poche\". Dimensions plié : 10 x 2.3cm Dimensions déplié : 18 x 2.1cm, dont 7.5cm utiles. Espacement des dents : 1mm', 'peigne-de-poche-pliant-noir-selection-rc.webp', 20, 0),
('Perles Viking pour barbe ou cheveux', 'Perles Viking pour barbe ou cheveux, pour couture, entretoise, accessoires de décoration, crâne, tresse, anneaux, Dreadlock,perles fabrication de bijoux,breloque pour fabrication bijoux,', 'Perles-Viking-pour-barbe-ou-cheveux.webp', 21, 0),
('Lacer à barbe avec perles noires et crâne noir', 'Beaucoup plus facile qu’une tresse. Au lieu de tresser ou d’enfiler des perles sur vos cheveux, lacez-les facilement avec une dentelle. La liste est pour 1 corde Lacer Brown, Black, Maroon, Red ou Grey (vous choisissez) avec des perles noires et un crâne noir.   ~ Lacer est aprox. 10&quot; . (Peut être coupé à la taille) ~ Beaucoup plus rapide et plus facile que le tressage. ~ Facile 1,2,3, instructions incluses. Plus de modèles de lacer pour la barbe et les cheveux: https://www.etsy.com/shop/OldCrowShop?section_id=14626627', 'lacet a barbe avec perles noires et crane noir.webp', 21, 0),
('Cheveux en cuir celtique/perle de barbe', 'Ces perles vikings uniques de cheveux/barbe ont été fabriquées à la main utilisant le cuir européen de qualité supérieure et conçues dans la maison, chaque perle de cheveux/barbe est coupée à la main, outillée, dyed, scellée et cousue à la main.  Diamètre interne des perles en moyenne autour de 16-17mm diamètre et sont d’environ 1 pouce de hauteur.  Avec un design de nœud celtique.', 'Cheveux en cuir celtique perle de barbe.webp', 21, 0),
('Coupe choux à lame 5/8ème évidée et manche en bois Olivier THIERS ISSARD', 'rasoir barbier : C\'est le coupe choux, préféré des barbiers, qui rase de plus près avec une précision très supérieure aux autres types de rasage. Vous le garderez votre vie entière si vous l\'entretenez bien', 'coupe-chou-58eme-evide-sonnant-1196-manche-en-bois-dolivier-thiers-issard.jpg', 17, 0),
('Rasoir de Sureté de Voyage MERKUR à manche court, peigne dentelé ouvert', 'Rasoir de Sureté MERKUR à peigne ouvert pour faciliter le rasage de la barbe de 3 jours, ouverture totale  Le manche est court : idéal pour le voyage', 'rasoir-de-surete-de-voyage-peigne-dentele-merkur.jpg', 17, 0),
('FEATHER Lames de rasoir HI Stainless, étui de 10', 'Les aciers des montagnes de Seki sont exceptionnels : une longue tradition de fabrication des sabres au service des lames de rasoir, ciseaux et manucure de très grande qualité', 'boite-de-10-lames-feather-super-stainless.jpg', 17, 0),
('Monsieur barbier Blaireau de barbier', 'Monsieur BARBIER Blaireau De Barbier est l\'outil authentique d\'un véritable Barbier. Offrez-vous un outil de compétition pour le rasage des champions. Que vous soyez plutôt crème ou plutôt savon, ce magnifique blaireau vegan vous garantit une mousse onctueuse et un confort tout terrain, chaque matin. En bonus, Monsieur BARBIER vous apporte tous ses conseils de pro, pour allier le plaisir à l\'élégance du rasage traditionnel.', 'monsieur barbier blaireau.webp', 18, 0),
('Blaireau de rasage tête de mort en poils naturels', 'Étaler de la mousse à raser avec les doigts est peut-être parfois inconfortable pour vous ? Vous avez l\'impression qu\'il vous manque un blaireau de rasage ?  Avec votre blaireau de rasage tête de mort, vous alliez style et confort de rasage ! Avec ses poils naturels, le blaireau apporte une douceur vraiment très appréciable.', 'blaireau-de-barbier-tete-de-mort.webp', 18, 0),
('BLAIREAU DE RASAGE VEGAN - CAPTAIN FAWCETT', 'Ce magnifique blaireau à raser aux couleurs de Captain Fawcett présent un manche American Style dont la forme s\'inspire des anciens modèles américains iconiques : Rubberset, Dubl Duck, Ever-Ready....  Ce blaireau de rasage en fibres synthétiques lorsqu\'il est utilisé conjointement avec un savon ou une crème à raser produira une mousse luxuriante, riche et volumineuse permettant un rasage de qualité.  La fibre synthétique possèdent des pointes incroyablement douces, idéales pour les peaux sensibles. Un blaireau conçu en bois provenant de sources durables et respectueux des végétaliens.  ', 'blaireau-de-rasage-vegan-captain-fawcett.webp', 18, 0),
('Support Rasoir & Blaireau en Olivier', 'Ce Support Rasoir & Blaireau en Bois d\'Olivier - Olivenhorz Erleben se compose d\'un joli pavé en bois d\'olivier massif naturel sur lequel repose un bol incliné en porcelaine (non collé) pour former sa mousse de rasage avec simplicité et élégance.  Il est fait pour soutenir le blaireau de rasage en olivier de la même collection ainsi que le rasoir en olivier.  Support / support de rasage: hauteur d\'environ 12 cm, base d\'environ 14 x 7 cm Bol de rasage en porcelaine : hauteur d\'environ 4,5 cm, diamètre d\'environ 9,5 cm (pour le modèle biseauté) / 7,5 cm (pour le modèle rond)', 'Support Rasoir & Blaireau en Olivier.jpg', 19, 0),
('SUPPORT DE RASAGE EN FAUSSE CORNE', 'Ce support de rasage a un emplacement pour un rasoir de sécurité et un emplacement pour votre blaireau afin qu\'il puisse être accroché avec ses poils vers le bas. Lorsque les blaireaux pendent tête en bas, ils sèchent correctement, ont de meilleures performances et durent beaucoup plus longtemps.  Le support a une pièce centrale en fausse corne et une semelle antidérapante en caoutchouc souple sur son fond.', 'SUPPORT DE RASAGE EN FAUSSE CORNE.webp', 19, 0),
('BIG MOUSTACHE  Support en bambou pour blaireau et rasoir', 'On tient le bambou !  Avec ce support rasoir et blaireau en bambou, votre salle de bain ne va pas en revenir. De quoi tout ranger en deux temps, trois mouvements pour toujours avoir vos précieux alliés à portée de main !', 'support-rasoir-et-blaireau-en-bambou.jpg', 19, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
