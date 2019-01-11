-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 17 déc. 2018 à 15:44
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dimbusiness`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes`
--

CREATE TABLE `abonnes` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

CREATE TABLE `actu` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id`, `titre`, `categorie`, `photo`, `description`) VALUES
(1, 'yyyy', 'pmea', './assets/uploads/pricing11.jpg', 'ggg'),
(2, 'yyyy', 'pmea', './assets/uploads/pricing12.jpg', 'ggg'),
(3, 'yyyy', 'pmea', './assets/uploads/pricing13.jpg', 'ggg'),
(4, 'yyyy', 'pmea', './assets/uploads/pricing14.jpg', 'ggg'),
(5, 'yyyy', 'pmea', './assets/uploads/pricing15.jpg', 'ggg'),
(6, 'yyyy', 'pmea', './assets/uploads/pricing16.jpg', 'ggg'),
(7, 'yyyy', 'pmea', './assets/uploads/pricing17.jpg', 'ggg'),
(8, 'yyyy', 'pmea', './assets/uploads/pricing18.jpg', 'ggg'),
(9, 'yyyy', 'pmea', './assets/uploads/pricing19.jpg', 'ggg'),
(10, 'yyyy', 'pmea', './assets/uploads/pricing110.jpg', 'ggg'),
(11, 'yyyy', 'pmea', './assets/uploads/pricing111.jpg', 'ggg'),
(12, 'yyyy', 'pmea', './assets/uploads/pricing112.jpg', 'ggg'),
(13, 'yyyy', 'pmea', './assets/uploads/pricing113.jpg', 'ggg'),
(14, 'yyyy', 'pmea', './assets/uploads/pricing114.jpg', 'ggg'),
(15, 'yyyy', 'pmea', './assets/uploads/pricing115.jpg', 'ggg'),
(16, 'yyyy', 'pmea', './assets/uploads/pricing116.jpg', 'ggg'),
(17, 'yyyy', 'pmea', './assets/uploads/pricing117.jpg', 'ggg'),
(18, 'yyyy', 'pmea', './assets/uploads/pricing118.jpg', 'ggg'),
(19, 'yyyy', 'pmea', './assets/uploads/pricing119.jpg', 'ggg'),
(20, 'yyyy', 'pmea', './assets/uploads/pricing120.jpg', 'ggg'),
(21, 'yyyy', 'pmea', './assets/uploads/pricing121.jpg', 'ggg'),
(22, 'yyyy', 'pmea', './assets/uploads/pricing122.jpg', 'ggg'),
(23, 'yyyy', 'pmea', './assets/uploads/pricing123.jpg', 'ggg'),
(24, 'yyyy', 'pmea', './assets/uploads/pricing124.jpg', 'ggg'),
(25, 'yyyy', 'pmea', './assets/uploads/pricing125.jpg', 'ggg'),
(26, 'yyyy', 'pmea', './assets/uploads/pricing126.jpg', 'ggg'),
(27, 'yyyy', 'pmea', './assets/uploads/pricing127.jpg', 'ggg'),
(28, 'yyyy', 'pmea', './assets/uploads/pricing128.jpg', 'ggg'),
(29, 'yyyy', 'pmea', './assets/uploads/pricing129.jpg', 'ggg'),
(30, 'yyyy', 'pmea', './assets/uploads/pricing130.jpg', 'ggg'),
(31, 'yyyy', 'pmea', './assets/uploads/pricing131.jpg', 'ggg'),
(32, 'yyyy', 'pmea', './assets/uploads/pricing132.jpg', 'ggg'),
(33, 'yyyy', 'pmea', './assets/uploads/pricing133.jpg', 'ggg'),
(34, 'yyyy', 'pmea', './assets/uploads/pricing134.jpg', 'ggg'),
(35, 'yyyy', 'pmea', './assets/uploads/pricing135.jpg', 'ggg'),
(36, 'yyyy', 'pmea', './assets/uploads/pricing136.jpg', 'ggg'),
(37, 'yyyy', 'pmea', './assets/uploads/pricing137.jpg', 'ggg'),
(38, 'yyyy', 'pmea', './assets/uploads/pricing138.jpg', 'ggg'),
(39, 'yyyy', 'pmea', './assets/uploads/pricing139.jpg', 'ggg'),
(40, 'yyyy', 'pmea', './assets/uploads/pricing140.jpg', 'ggg'),
(41, 'yyyy', 'pmea', './assets/uploads/pricing141.jpg', 'ggg'),
(42, 'yyyy', 'pmea', './assets/uploads/pricing142.jpg', 'ggg'),
(43, 'yyyy', 'pmea', './assets/uploads/pricing143.jpg', 'ggg'),
(44, 'yyyy', 'pmea', './assets/uploads/pricing144.jpg', 'ggg'),
(45, 'yyyy', 'pmea', './assets/uploads/pricing145.jpg', 'ggg'),
(46, 'yyyy', 'pmea', './assets/uploads/pricing146.jpg', 'ggg'),
(47, 'yyyy', 'pmea', './assets/uploads/pricing147.jpg', 'ggg'),
(48, 'yyyy', 'pmea', './assets/uploads/pricing148.jpg', 'ggg'),
(49, 'yyyy', 'pmea', './assets/uploads/pricing149.jpg', 'ggg'),
(50, 'yyyy', 'pmea', './assets/uploads/pricing150.jpg', 'ggg'),
(51, 'yyyy', 'pmea', './assets/uploads/pricing151.jpg', 'ggg'),
(52, 'yyyy', 'pmea', './assets/uploads/pricing152.jpg', 'ggg'),
(53, 'yyyy', 'pmea', './assets/uploads/pricing153.jpg', 'ggg'),
(54, 'yyyy', 'pmea', './assets/uploads/pricing154.jpg', 'ggg'),
(55, 'yyyy', 'pmea', './assets/uploads/pricing155.jpg', 'ggg'),
(56, 'yyyy', 'pmea', './assets/uploads/pricing156.jpg', 'ggg'),
(57, 'yyyy', 'pmea', './assets/uploads/pricing157.jpg', 'ggg'),
(58, 'yyyy', 'pmea', './assets/uploads/pricing158.jpg', 'ggg'),
(59, 'yyyy', 'pmea', './assets/uploads/pricing159.jpg', 'ggg'),
(60, 'yyyy', 'pmea', './assets/uploads/pricing160.jpg', 'ggg'),
(61, 'yyyy', 'pmea', './assets/uploads/pricing161.jpg', 'ggg'),
(62, 'yyyy', 'pmea', './assets/uploads/pricing162.jpg', 'ggg'),
(63, 'yyyy', 'pmea', './assets/uploads/pricing163.jpg', 'ggg'),
(64, 'yyyy', 'pmea', './assets/uploads/pricing164.jpg', 'ggg'),
(65, 'yyyy', 'pmea', './assets/uploads/pricing165.jpg', 'ggg'),
(66, 'yyyy', 'pmea', './assets/uploads/pricing166.jpg', 'ggg'),
(67, 'yyyy', 'pmea', './assets/uploads/pricing167.jpg', 'ggg'),
(68, 'yyyy', 'pmea', './assets/uploads/pricing168.jpg', 'ggg'),
(69, 'yyyy', 'pmea', './assets/uploads/pricing169.jpg', 'ggg'),
(70, 'yyyy', 'pmea', './assets/uploads/pricing170.jpg', 'ggg'),
(71, 'yyyy', 'pmea', './assets/uploads/pricing171.jpg', 'ggg'),
(72, 'yyyy', 'pmea', './assets/uploads/pricing172.jpg', 'ggg'),
(73, 'yyyy', 'pmea', './assets/uploads/pricing173.jpg', 'ggg'),
(74, 'yyyy', 'pmea', './assets/uploads/pricing174.jpg', 'ggg'),
(75, 'yyyy', 'pmea', './assets/uploads/pricing175.jpg', 'ggg'),
(76, 'yyyy', 'pmea', './assets/uploads/pricing176.jpg', 'ggg'),
(77, 'yyyy', 'pmea', './assets/uploads/pricing177.jpg', 'ggg'),
(78, 'yyyy', 'pmea', './assets/uploads/pricing178.jpg', 'ggg'),
(79, 'yyyy', 'pmea', './assets/uploads/pricing179.jpg', 'ggg'),
(80, 'yyyy', 'pmea', './assets/uploads/pricing180.jpg', 'ggg'),
(81, 'yyyy', 'pmea', './assets/uploads/pricing181.jpg', 'ggg'),
(82, 'yyyy', 'pmea', './assets/uploads/pricing182.jpg', 'ggg'),
(83, 'yyyy', 'pmea', './assets/uploads/pricing183.jpg', 'ggg'),
(84, 'yyyy', 'pmea', './assets/uploads/pricing184.jpg', 'ggg'),
(85, 'yyyy', 'pmea', './assets/uploads/pricing185.jpg', 'ggg'),
(86, 'yyyy', 'pmea', './assets/uploads/pricing186.jpg', 'ggg'),
(87, 'yyyy', 'pmea', './assets/uploads/pricing187.jpg', 'ggg'),
(88, 'yyyy', 'pmea', './assets/uploads/pricing188.jpg', 'ggg'),
(89, 'yyyy', 'pmea', './assets/uploads/pricing189.jpg', 'ggg'),
(90, 'yyyy', 'pmea', './assets/uploads/pricing190.jpg', 'ggg'),
(91, 'yyyy', 'pmea', './assets/uploads/pricing191.jpg', 'ggg'),
(92, 'yyyy', 'pmea', './assets/uploads/pricing192.jpg', 'ggg'),
(93, 'yyyy', 'pmea', './assets/uploads/pricing193.jpg', 'ggg'),
(94, 'yyyy', 'pmea', './assets/uploads/pricing194.jpg', 'ggg'),
(95, 'yyyy', 'pmea', './assets/uploads/pricing195.jpg', 'ggg'),
(96, 'yyyy', 'pmea', './assets/uploads/pricing196.jpg', 'ggg'),
(97, 'yyyy', 'pmea', './assets/uploads/pricing197.jpg', 'ggg'),
(98, 'yyyy', 'pmea', './assets/uploads/pricing198.jpg', 'ggg'),
(99, 'yyyy', 'pmea', './assets/uploads/pricing199.jpg', 'ggg');

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `communiquer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `communiquer`) VALUES
(1, 'tttt1'),
(2, 'tttt2'),
(3, 'tttt3'),
(4, 'tttt4'),
(5, 'ttt5');

-- --------------------------------------------------------

--
-- Structure de la table `bureau_etude`
--

CREATE TABLE `bureau_etude` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `faculte` varchar(50) NOT NULL,
  `nom_universite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` text NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecommerce`
--

CREATE TABLE `ecommerce` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `investisement`
--

CREATE TABLE `investisement` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `jeune`
--

CREATE TABLE `jeune` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `fonction` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeune`
--

INSERT INTO `jeune` (`id`, `nom`, `fonction`, `photo`, `description`) VALUES
(5, 'elsa', 'ceo', './assets/uploads/team12.jpg', 'gggg');

-- --------------------------------------------------------

--
-- Structure de la table `main_oeuvre`
--

CREATE TABLE `main_oeuvre` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_m` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `lien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `startup`
--

CREATE TABLE `startup` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `lien` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `startup`
--

INSERT INTO `startup` (`id`, `nom`, `description`, `photo`, `lien`, `adresse`) VALUES
(1, 'elsa', 'tttt', './assets/uploads/pricing22.jpg', 'iiiiiiiiiii@rrr.c0m', 'tttt');

-- --------------------------------------------------------

--
-- Structure de la table `syndicat`
--

CREATE TABLE `syndicat` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vue`
--

CREATE TABLE `vue` (
  `id` int(11) NOT NULL,
  `adresseip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnes`
--
ALTER TABLE `abonnes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`mail`);

--
-- Index pour la table `actu`
--
ALTER TABLE `actu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bureau_etude`
--
ALTER TABLE `bureau_etude`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `investisement`
--
ALTER TABLE `investisement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeune`
--
ALTER TABLE `jeune`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `main_oeuvre`
--
ALTER TABLE `main_oeuvre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_m`),
  ADD UNIQUE KEY `UNIQUE` (`mail`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `startup`
--
ALTER TABLE `startup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `syndicat`
--
ALTER TABLE `syndicat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vue`
--
ALTER TABLE `vue`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`adresseip`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnes`
--
ALTER TABLE `abonnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `actu`
--
ALTER TABLE `actu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `bureau_etude`
--
ALTER TABLE `bureau_etude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ecommerce`
--
ALTER TABLE `ecommerce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `investisement`
--
ALTER TABLE `investisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jeune`
--
ALTER TABLE `jeune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `main_oeuvre`
--
ALTER TABLE `main_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `startup`
--
ALTER TABLE `startup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `syndicat`
--
ALTER TABLE `syndicat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vue`
--
ALTER TABLE `vue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
