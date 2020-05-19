-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 mai 2020 à 00:50
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE `diplome` (
  `ID_Diplome` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Diplome` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `diplome`
--

INSERT INTO `diplome` (`ID_Diplome`, `Date`, `Diplome`) VALUES
('1', '2016', 'Obtention du Brevet des Collèges'),
('2', '2019', 'Obtention du Baccaloréat Série Technologique STI2D');

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
  `ID_Education` int(100) NOT NULL,
  `Ecole` varchar(1024) NOT NULL,
  `Cursus` varchar(1024) NOT NULL,
  `duree` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `education`
--

INSERT INTO `education` (`ID_Education`, `Ecole`, `Cursus`, `duree`) VALUES
(1, 'lycée Jean-Baptiste de la Salle, Notre dame de la Compassion', '2nd général suivie d\'un bac STI2D', 'Septembre 2016 - Juin 2019'),
(2, 'Université Paris Ynov Campus', 'Bachelor en Informatique', 'Septembre 2019-Maintenant'),
(3, 'College Saint-Vincent de Paul', 'College', '4 ans ');

-- --------------------------------------------------------

--
-- Structure de la table `expérience`
--

CREATE TABLE `expérience` (
  `ID_Experience` int(100) NOT NULL,
  `Emploi` varchar(1024) NOT NULL,
  `detail` varchar(1024) NOT NULL,
  `duree` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `expérience`
--

INSERT INTO `expérience` (`ID_Experience`, `Emploi`, `detail`, `duree`) VALUES
(1, 'etudiant', 'Paris ynov campus', 'Septembre 2019 - Maintenant'),
(2, 'Ouvrier niveau A1 ', 'Carrefour Basilique de saint-denis', 'Avril 2020 - Mai 2020'),
(3, 'Babysitting', 'Enfants', 'Janvier 2020'),
(4, 'Etudiant', 'lycéen', '6 ans');

-- --------------------------------------------------------

--
-- Structure de la table `interet`
--

CREATE TABLE `interet` (
  `ID_Interet` int(100) NOT NULL,
  `loisirs` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `interet`
--

INSERT INTO `interet` (`ID_Interet`, `loisirs`) VALUES
(1, 'Je passe la plupart de mon temps à l\'extérieur. En hiver, je suis un skieur passionné.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `diplome`
--
ALTER TABLE `diplome`
  ADD PRIMARY KEY (`ID_Diplome`);

--
-- Index pour la table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID_Education`);

--
-- Index pour la table `expérience`
--
ALTER TABLE `expérience`
  ADD PRIMARY KEY (`ID_Experience`);

--
-- Index pour la table `interet`
--
ALTER TABLE `interet`
  ADD PRIMARY KEY (`ID_Interet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education`
  MODIFY `ID_Education` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `expérience`
--
ALTER TABLE `expérience`
  MODIFY `ID_Experience` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `interet`
--
ALTER TABLE `interet`
  MODIFY `ID_Interet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
