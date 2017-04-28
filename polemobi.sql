-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Avril 2017 à 06:17
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `polemobi`
--

-- --------------------------------------------------------

--
-- Structure de la table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `usager_id` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `addresses`
--

INSERT INTO `addresses` (`id`, `usager_id`, `adresse`, `cp`, `ville`) VALUES
(1, 1, '150 rue de la cueille mirebalaise', 86000, 'Poitiers'),
(3, 1, '105 rue de la cueille mirebalaise', 86000, 'Poitiers');

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `form_entry`
--

CREATE TABLE `form_entry` (
  `id` int(11) NOT NULL,
  `id_form` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `object_type` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `form_entry_values`
--

CREATE TABLE `form_entry_values` (
  `id_field` int(11) NOT NULL,
  `id_entry` int(11) NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `form_fields`
--

CREATE TABLE `form_fields` (
  `id` int(11) NOT NULL,
  `id_form` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `configuration` text NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `usagers`
--

CREATE TABLE `usagers` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `usagers`
--

INSERT INTO `usagers` (`id`, `nom`, `prenom`) VALUES
(1, 'Rastiersdfsd', 'Benoit'),
(2, 'Labadie', 'Clément'),
(3, 'Rastier', 'Benoit'),
(4, 'Labadie', 'Clément'),
(5, 'Rastier', 'Benoit'),
(6, 'Labadie', 'Clément'),
(7, 'Rastier', 'Benoit'),
(8, 'Labadie', 'Clément'),
(9, 'Rastier', 'Benoit'),
(10, 'Labadie', 'Clément'),
(11, 'Rastier', 'Benoit'),
(12, 'Labadie', 'Clément'),
(13, 'Rastier', 'Benoit'),
(14, 'Labadie', 'Clément'),
(15, 'Rastier', 'Benoit'),
(16, 'Labadie', 'Clément'),
(17, 'Rastier', 'Benoit'),
(18, 'Labadie', 'Clément'),
(19, 'Rastier', 'Benoit'),
(20, 'Labadie', 'Clément'),
(21, 'Rastier', 'Benoit'),
(22, 'Labadie', 'Clément'),
(23, 'Rastier', 'Benoit'),
(24, 'Labadie', 'Clément'),
(25, 'Rastier', 'Benoit'),
(26, 'Labadie', 'Clément'),
(27, 'Rastier', 'Benoit'),
(28, 'Labadie', 'Clément'),
(29, 'Rastier', 'Benoit'),
(30, 'Labadie', 'Clément'),
(31, 'Rastier', 'Benoit'),
(32, 'Labadie', 'Clément');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form_entry`
--
ALTER TABLE `form_entry`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form_entry_values`
--
ALTER TABLE `form_entry_values`
  ADD PRIMARY KEY (`id_field`);

--
-- Index pour la table `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usagers`
--
ALTER TABLE `usagers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `form_entry`
--
ALTER TABLE `form_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `usagers`
--
ALTER TABLE `usagers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
