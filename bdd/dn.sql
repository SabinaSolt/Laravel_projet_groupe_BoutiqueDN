-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 02 avr. 2020 à 08:18
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dn`
--

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalcode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `lastname`, `firstname`, `address`, `postalcode`, `city`) VALUES
(1, 'Norris', 'Chuck', '1 avenue Charles de Gaulle', '38500', 'Voiron'),
(2, 'Theron', 'Charlize', '3 place de la cabane de kangourou', '65120', 'Renard-chasse-sur-tronche'),
(11, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(14, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(15, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(16, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(17, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(18, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(19, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(20, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(21, 'Fabergé', 'Fabien', '4 rue de l\'impasse', '69500', 'Curieux-villeneuf'),
(22, 'Sabina', 'Sabina', 'bla bla bla', '38500', 'Bla'),
(23, 'Chebourator', 'Evgenii', 'cabine téléphonique 2 rue des Oranges', '52140', 'Index Postale'),
(24, 'Chebourator', 'Evgenii', 'cabine téléphonique 2 rue des Oranges', '52140', 'Index Postale'),
(25, 'gaston', 'lagaffe', 'place des faignants', '51200', 'Grhhh'),
(26, 'gaston', 'lagaffe', 'place des faignants', '51200', 'Grhhh'),
(27, 'gaston', 'lagaffe', 'place des faignants', '51200', 'Grhhh'),
(28, 'gaston', 'lagaffe', 'place des faignants', '51200', 'Grhhh'),
(29, 'Gaston', 'Lagaffe', 'place de faignants', '54100', 'Grrr'),
(30, 'Chebourator', 'Evgenii', 'cabine téléphonique 2 rue des Oranges', '52140', 'Index Postale'),
(31, 'Chebourator', 'Evgenii', 'cabine téléphonique 2 rue des Oranges', '52140', 'Index Postale'),
(32, 'Chebourator', 'Evgenii', 'cabine téléphonique 2 rue des Oranges', '52140', 'Index Postale');

-- --------------------------------------------------------

--
-- Structure de la table `orderlines`
--

DROP TABLE IF EXISTS `orderlines`;
CREATE TABLE IF NOT EXISTS `orderlines` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `orderId` varchar(10) NOT NULL,
  `productId` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idCommande_idx` (`orderId`),
  KEY `idProduit_idx` (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orderlines`
--

INSERT INTO `orderlines` (`id`, `orderId`, `productId`, `quantity`) VALUES
(3, 'C2020-0001', 4, 1),
(4, 'C2020-0001', 5, 2),
(5, 'C2020-0002', 9, 1),
(6, 'C2020-0002', 8, 2),
(7, 'C2019-0003', 10, 1),
(8, 'C2019-0003', 14, 1),
(9, 'C2020-0004', 5, 2),
(10, 'C2020-0004', 15, 1),
(11, 'C2020-0005', 4, 1),
(12, 'C2020-0005', 16, 1),
(13, 'C2020-0006', 11, 1),
(14, 'C2020-0006', 9, 1),
(15, 'C2020-0006', 13, 1),
(16, 'C2020-0007', 11, 1),
(17, 'C2020-0007', 9, 1),
(18, 'C2020-0007', 13, 1),
(19, 'C2020-0008', 8, 2),
(20, 'C2020-0008', 9, 2),
(21, 'C2020-0008', 10, 2),
(22, 'C2020-0009', 4, 1),
(23, 'C2020-0009', 6, 1),
(24, 'C2020-0009', 8, 2),
(25, 'C2020-0009', 15, 1),
(26, 'C2020-0010', 5, 2),
(27, 'C2020-0010', 6, 2),
(28, 'C2020-0011', 13, 4),
(29, 'C2020-0011', 14, 4),
(30, 'C2020-0012', 6, 1),
(31, 'C2020-0012', 7, 1),
(32, 'C2020-0013', 4, 1),
(33, 'C2020-0013', 5, 1),
(34, 'C2020-0014', 10, 1),
(35, 'C2020-0014', 11, 1),
(36, 'C2020-0015', 6, 1),
(37, 'C2020-0015', 19, 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  `transporterId` int(10) NOT NULL,
  `amount` decimal(9,2) DEFAULT NULL,
  `transportcost` decimal(9,2) DEFAULT NULL,
  `totalamount` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idClient_idx` (`customerId`),
  KEY `idClient` (`transporterId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `date`, `customerId`, `transporterId`, `amount`, `transportcost`, `totalamount`) VALUES
('C2019-0003', '2019-12-08 00:00:00', 2, 1, '150.00', '0.00', '150.00'),
('C2020-0001', '2020-02-14 00:00:00', 1, 1, '120.00', '0.00', '120.00'),
('C2020-0002', '2020-02-05 00:00:00', 1, 1, '600.00', '0.00', '600.00'),
('C2020-0004', '2020-02-07 00:00:00', 2, 2, '520.00', '0.00', '520.00'),
('C2020-0005', '2020-02-14 00:00:00', 2, 3, '600.00', '0.00', '600.00'),
('C2020-0006', '2020-02-12 00:00:00', 2, 3, '523.00', '0.00', '523.00'),
('C2020-0007', '2020-02-17 00:00:00', 2, 1, '523.65', '0.00', '523.65'),
('C2020-0008', '2020-02-18 00:00:00', 20, 1, '1305.00', '0.00', '1305.00'),
('C2020-0009', '2020-02-18 00:00:00', 21, 2, '715.00', '0.00', '715.00'),
('C2020-0010', '2020-02-19 00:00:00', 22, 3, '40.00', '0.00', '40.00'),
('C2020-0011', '2020-03-18 00:00:00', 24, 1, '264.60', '5.50', '270.10'),
('C2020-0012', '2020-03-19 00:00:00', 29, 3, '23.65', '1.00', '24.65'),
('C2020-0013', '2020-03-19 00:00:00', 30, 2, '110.00', '1.50', '111.50'),
('C2020-0014', '2020-03-19 00:00:00', 31, 3, '110.00', '1.50', '111.50'),
('C2020-0015', '2020-03-19 00:00:00', 32, 1, '25.00', '5.50', '30.50');

-- --------------------------------------------------------

--
-- Structure de la table `productcategories`
--

DROP TABLE IF EXISTS `productcategories`;
CREATE TABLE IF NOT EXISTS `productcategories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idCategorieProduit_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `productcategories`
--

INSERT INTO `productcategories` (`id`, `name`) VALUES
(1, 'cat 1'),
(2, 'cat 2'),
(3, 'cat 3');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `weight` int(10) UNSIGNED DEFAULT NULL,
  `stockquantity` int(10) UNSIGNED DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `price` decimal(6,2) UNSIGNED NOT NULL,
  `categoryId` int(10) UNSIGNED DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCategorieProduit_idx` (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `weight`, `stockquantity`, `available`, `price`, `categoryId`, `updated_at`, `created_at`) VALUES
(4, 'Chapka 1', 'Un magnifique chapka de l\'armée russe! Tailles disponible: s-m-l-xl-xxl-xxxl\r\nMatière: fourrure de l\'ours.\r\nDesign: coopératif des anciens combattants des troupes des voies ferrées', 'images/chapka.jpg', 1000, 10, 1, '110.00', 1, '2020-04-01', NULL),
(5, 'Valenki', 'Les bottes pour les hivers russes! Les traditionnels VALENKI!\r\nMatière: Les poils feutrés du bataillon des chars de la haute montagne.\r\nTailles disponibles: xl-xxl-xxl-xxxl-\"ça ce sont les pieds d\'un vrai communiste\"', 'images/valenki.jpg', 500, 1, 1, '10.00', 1, NULL, NULL),
(6, 'Manteau 1', 'Le fameux manteau qui était porté par un homme politique connu! \r\nMatière: Laine de mouton \r\nTailles disponibles: s-m-l-xl-xxl-xxxl', 'images/manteau.jpg', 500, 1, 0, '20.00', 1, '2020-04-01', NULL),
(7, 'Haut \"faucille et marteau\"', 'Le haut \"faucille et marteau\" pour faire savoir à tout le monde vos opinions politiques!\r\nMatière: polypropylène,\r\nTailles disponible: s-m-l-xl-xxl-xxxl', 'images/haut.jpg', 500, 100, 1, '13.65', 2, NULL, NULL),
(8, 'T-shirt \"From Russia with Love\"', 'Votre personnage préféré de l\'enfance revisité au goût du jour!\r\nMatière: Acrylique\r\nTailles disponible: s-m-l-xl-xxl', 'images/russia_with_love.jpg', 1200, 2, 1, '52.50', 2, NULL, NULL),
(9, 'Peluche animée', 'Retrouve ce symbole de la Russie dans votre maison en peluche animée', 'images/ours.jpg', 1200, 5, 1, '500.00', 3, NULL, NULL),
(10, 'Chapka Modèle 2', 'Un magnifique chapka de l\'armée russe! Tailles disponible: s-m-l-xl-xxl-xxxl\r\nMatière: fourrure de l\'ours.\r\nDesign: coopératif des anciens combattants des troupes des voies ferrées', 'images/chapka.jpg', 1000, 10, 1, '100.00', 1, NULL, NULL),
(11, 'Valenki Modèle 2', 'Les bottes pour les hivers russes! Les traditionnels VALENKI!\r\nMatière: Les poils feutrés du bataillon des chars de la haute montagne.\r\nTailles disponibles: xl-xxl-xxl-xxxl-\"ça ce sont les pieds d\'un vrai communiste\"', 'images/valenki.jpg', 500, 1, 1, '10.00', 1, NULL, NULL),
(12, 'Manteau Modèle 2', 'Le fameux manteau qui était porté par un homme politique connu! \r\nMatière: Laine de mouton \r\nTailles disponibles: s-m-l-xl-xxl-xxxl', 'images/manteau.jpg', 500, 1, 0, '10.00', 1, NULL, NULL),
(13, 'Short \"faucille et marteau\" ', 'Le short \"faucille et marteau\" pour faire savoir à tout le monde vos opinions politiques!\r\nMatière: polypropylène,\r\nTailles disponible: s-m-l-xl-xxl-xxxl', 'images/short.jpg', 500, 0, 1, '13.65', 2, NULL, NULL),
(14, 'T-shirt CCCP', 'Le t-shirt pour les nostalgiques!\r\nMatière: Acrylique\r\nTailles disponible: s-m-l-xl-xxl', 'images/tshirt_cccp.jpg', 1200, 2, 1, '52.50', 2, NULL, NULL),
(15, 'Peluche Cheburashka', 'Retrouvez votre personnage préféré de l\'enfance', 'images/cheburashka.jpg', 1200, 5, 1, '500.00', 3, NULL, NULL),
(16, 'Peluche Ours Olympique', 'Collector , la mascotte des Jeux Olympiques d’Été 1980', 'images/ours_olympique.jpg', 1200, 5, 1, '500.00', 3, NULL, NULL),
(19, 'Drapeau Modèle 2', 'Magnifique drapeau de CCCP. Matière: non inflammable', 'images/drapeau.jpg', 200, 5, 1, '15.00', 2, NULL, NULL),
(21, 'Lapti 1', 'Les lapti ou laptis  sont des chaussures traditionnelles russes fabriquées avec des lanières d’écorce de tilleul, de bouleau ou d’orme.\r\n\r\nElles sont portées depuis la préhistoire. Des moules en bois servant à leur fabrication ont été retrouvés lors de fouilles sur des sites néolithiques.\r\n\r\nOn trouvait les laptis principalement chez les habitants des forêts du nord de l’Europe. Elles étaient portées par les plus pauvres chez les peuples finnois, baltes et slaves orientaux. Elles étaient facile à fabriquer mais d’une durée de vie courte.', 'images/lapti.jpg', 100, 1, 1, '20.00', 1, '2020-04-01', '2020-03-31'),
(22, 'Veste bordeaux 90xx', 'Cette veste est le symbole des années de perestroïka et de l\'époque du \"capitalisme sauvage\". Elle était portée par les hommes d\'affaire à l\'époque la frontière entre un businessman et un criminel était la plus floue que jamais.', 'images/veste.jpg', 100, 1, 1, '65.00', 2, '2020-03-31', '2020-03-31'),
(23, 'Veste bordeaux 90xx', 'Cette veste est le symbole des années de perestroïka et de l\'époque du \"capitalisme sauvage\". Elle était portée par les hommes d\'affaire à l\'époque la frontière entre un businessman et un criminel était la plus floue que jamais.', 'images/veste.jpg', 100, 1, 1, '75.00', 3, '2020-03-31', '2020-03-31'),
(24, 'Veste bordeaux 90xx', 'Cette veste est le symbole des années de perestroïka et de l\'époque du \"capitalisme sauvage\". Elle était portée par les hommes d\'affaire à l\'époque la frontière entre un businessman et un criminel était la plus floue que jamais.', 'images/veste.jpg', 100, 1, 1, '75.00', 3, '2020-03-31', '2020-03-31'),
(27, 'Lapti', 'Les lapti ou laptis  sont des chaussures traditionnelles russes fabriquées avec des lanières d’écorce de tilleul, de bouleau ou d’orme.\r\n\r\nElles sont portées depuis la préhistoire. Des moules en bois servant à leur fabrication ont été retrouvés lors de fouilles sur des sites néolithiques.\r\n\r\nOn trouvait les laptis principalement chez les habitants des forêts du nord de l’Europe. Elles étaient portées par les plus pauvres chez les peuples finnois, baltes et slaves orientaux. Elles étaient facile à fabriquer mais d’une durée de vie courte.', 'images/lapti.jpg', 100, 1, 1, '15.00', 1, '2020-04-01', '2020-04-01'),
(28, 'Veste bordeaux 90xx', 'Cette veste est le symbole des années de perestroïka et de l\'époque du \"capitalisme sauvage\". Elle était portée par les hommes d\'affaire à l\'époque la frontière entre un businessman et un criminel était la plus floue que jamais.', 'images/veste.jpg', 500, 3, 1, '25.00', 1, '2020-04-01', '2020-04-01');

-- --------------------------------------------------------

--
-- Structure de la table `tariffs_no_tracking`
--

DROP TABLE IF EXISTS `tariffs_no_tracking`;
CREATE TABLE IF NOT EXISTS `tariffs_no_tracking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `transporterId` int(10) NOT NULL,
  `weight_min` int(10) NOT NULL,
  `weight_max` int(10) NOT NULL,
  `tariff` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idTransporteur` (`transporterId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tariffs_no_tracking`
--

INSERT INTO `tariffs_no_tracking` (`id`, `transporterId`, `weight_min`, `weight_max`, `tariff`) VALUES
(1, 1, 0, 500, '1.50'),
(2, 1, 501, 1500, '2.50'),
(3, 1, 1501, 3000, '3.50'),
(4, 1, 3001, 5000, '4.50'),
(5, 1, 5001, 7500, '5.50'),
(6, 1, 7501, 10000, '6.50'),
(7, 2, 0, 1000, '3.00'),
(8, 2, 1001, 5000, '5.00'),
(9, 2, 5001, 10000, '7.50'),
(10, 2, 10001, 15000, '10.00'),
(11, 3, 0, 750, '1.00'),
(12, 3, 751, 1500, '2.50'),
(13, 3, 1501, 2500, '4.00'),
(14, 3, 2501, 5000, '5.00'),
(15, 3, 5001, 7500, '6.00'),
(16, 3, 7501, 12500, '8.00');

-- --------------------------------------------------------

--
-- Structure de la table `tariffs_tracking`
--

DROP TABLE IF EXISTS `tariffs_tracking`;
CREATE TABLE IF NOT EXISTS `tariffs_tracking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `transporterId` int(10) NOT NULL,
  `tarifftype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight_min` int(10) NOT NULL,
  `weight_max` int(10) NOT NULL,
  `tariff` decimal(9,5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idTransporteur` (`transporterId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tariffs_tracking`
--

INSERT INTO `tariffs_tracking` (`id`, `transporterId`, `tarifftype`, `weight_min`, `weight_max`, `tariff`) VALUES
(1, 1, 'montant_fixe', 0, 5000, '5.50000'),
(2, 2, 'multiple_poids', 0, 1000, '0.00100'),
(3, 2, 'multiple_poids', 1001, 5000, '0.00075'),
(4, 2, 'multiple_poids', 5001, 15000, '0.00050'),
(5, 3, 'multiple_poids', 0, 2500, '0.00100'),
(6, 3, 'multiple_poids', 2501, 5000, '0.00050'),
(7, 3, 'multiple_poids', 5001, 12500, '0.00030');

-- --------------------------------------------------------

--
-- Structure de la table `transporter`
--

DROP TABLE IF EXISTS `transporter`;
CREATE TABLE IF NOT EXISTS `transporter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `transporter`
--

INSERT INTO `transporter` (`id`, `name`) VALUES
(1, 'La Poste'),
(2, 'GLS'),
(3, 'Hermes');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orderlines`
--
ALTER TABLE `orderlines`
  ADD CONSTRAINT `idCommande` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `idProduit` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `idClient` FOREIGN KEY (`transporterId`) REFERENCES `transporter` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `idCategorieProduit` FOREIGN KEY (`categoryId`) REFERENCES `productcategories` (`id`);

--
-- Contraintes pour la table `tariffs_no_tracking`
--
ALTER TABLE `tariffs_no_tracking`
  ADD CONSTRAINT `tariffs_no_tracking_ibfk_1` FOREIGN KEY (`transporterId`) REFERENCES `transporter` (`id`);

--
-- Contraintes pour la table `tariffs_tracking`
--
ALTER TABLE `tariffs_tracking`
  ADD CONSTRAINT `tariffs_tracking_ibfk_1` FOREIGN KEY (`transporterId`) REFERENCES `transporter` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
