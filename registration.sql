-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 18 juil. 2021 à 01:04
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
-- Base de données :  `registration`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_e` int(11) NOT NULL,
  `name_e` varchar(100) NOT NULL,
  `maxheure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_e`, `name_e`, `maxheure`) VALUES
(2, 'Elouali', 12),
(3, 'Malki', 12),
(4, 'Badsi', 12),
(5, 'Bendaoud', 12),
(6, 'Mahammed', 12),
(7, 'Gheid', 12),
(8, 'Belfedhal', 12),
(9, 'Amrane', 12),
(10, 'Saidi', 12),
(11, 'Khaldi', 12),
(12, 'Boudhir', 12),
(13, 'Klouche', 12),
(14, 'Kechar', 12),
(15, 'Bensnane', 12),
(16, 'Rahmoun', 12),
(17, 'Simohammed', 12),
(18, 'Amroun', 12),
(19, 'Kazi', 12),
(20, 'Keskes', 12),
(21, 'Allal', 12),
(22, 'Bensaber', 12),
(23, 'Benslimane', 12),
(25, 'Feroui', 12);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id_g` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `niveau` enum('1CP','2CP','1SC','2SC_siw','2SC_isi','3SC_siw','3SC_isi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id_g`, `num`, `niveau`) VALUES
(1, 1, '1CP'),
(2, 2, '1CP'),
(3, 3, '1CP'),
(4, 1, '2CP'),
(5, 2, '2CP'),
(6, 3, '2CP'),
(7, 1, '1SC'),
(8, 2, '1SC'),
(9, 3, '1SC'),
(10, 1, '2SC_siw'),
(11, 2, '2SC_siw'),
(12, 3, '2SC_siw'),
(13, 1, '2SC_isi'),
(14, 2, '2SC_isi'),
(15, 3, '2SC_isi'),
(16, 1, '3SC_siw'),
(17, 2, '3SC_siw'),
(18, 3, '3SC_siw'),
(19, 1, '3SC_isi'),
(20, 2, '3SC_isi'),
(21, 3, '3SC_isi'),
(23, 55, '1CP');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_m` int(11) NOT NULL,
  `name_m` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_m`, `name_m`) VALUES
(1, 'BDDAv'),
(2, 'Reseaux'),
(3, 'Reseaux Av'),
(4, 'SIAD'),
(5, 'IC'),
(6, 'IHM'),
(7, 'CAV'),
(8, 'MCA'),
(9, 'WEB1'),
(10, 'WEB2'),
(11, 'MOBILE'),
(12, 'SIA'),
(13, 'Algo'),
(14, 'Analyse'),
(15, 'Algebre'),
(16, 'IGL'),
(17, 'THL'),
(18, 'IOT'),
(19, 'Robotique'),
(20, 'SIG'),
(21, 'Cloud');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_s` int(11) NOT NULL,
  `name_s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_s`, `name_s`) VALUES
(1, 'TP1'),
(2, 'TP2'),
(3, 'TP3'),
(4, 'TP4'),
(5, 'TP5'),
(6, 'TP6'),
(7, 'TP7'),
(8, 'TP8'),
(9, 'TP9'),
(10, 'TP10'),
(11, 'TP11'),
(12, 'TP12'),
(13, 'TP13'),
(14, 'TP14'),
(15, 'Amphi A'),
(16, 'Amphi B'),
(17, 'Amphi C'),
(19, 'Amphi D'),
(20, 'Amphi E'),
(21, 'S1'),
(22, 'S2'),
(23, 'S3'),
(24, 'S4'),
(25, 'S5'),
(26, 'S6'),
(27, 'S7'),
(28, 'S8'),
(29, 'S9'),
(30, 'S10');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_s` int(11) NOT NULL,
  `id_g` int(11) NOT NULL,
  `id_e` int(11) NOT NULL,
  `id_m` int(11) NOT NULL,
  `debut` int(11) NOT NULL,
  `fin` int(11) NOT NULL,
  `niveau` enum('1CP','2CP','1SC','2SC_siw','2SC_isi','3SC_siw','3SC_isi') NOT NULL,
  `type` enum('Cour','TD','TP') NOT NULL,
  `jour` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_s`, `id_g`, `id_e`, `id_m`, `debut`, `fin`, `niveau`, `type`, `jour`) VALUES
(1, 3, 3, 15, 9, 10, '1CP', 'TP', '4'),
(1, 23, 9, 12, 8, 9, '1CP', 'Cour', '1'),
(2, 1, 7, 5, 8, 9, '1CP', 'Cour', '4'),
(5, 2, 3, 5, 8, 9, '1CP', 'TP', '5'),
(11, 1, 10, 2, 9, 10, '1CP', 'TD', '5'),
(11, 2, 13, 13, 10, 11, '1CP', 'Cour', '3'),
(11, 3, 12, 20, 8, 9, '1CP', 'TD', '2'),
(12, 1, 11, 9, 9, 10, '1CP', 'TD', '2'),
(12, 2, 15, 13, 10, 11, '1CP', 'Cour', '1'),
(16, 3, 18, 21, 10, 11, '1CP', 'Cour', '4');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `PASSWORD`) VALUES
(1, 'aaa', 'aaa'),
(2, 'aaaa', 'aaaa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_e`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id_g`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_m`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_s`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_s`,`id_g`,`id_e`,`id_m`),
  ADD KEY `id_s` (`id_s`),
  ADD KEY `id_g` (`id_g`),
  ADD KEY `id_e` (`id_e`),
  ADD KEY `id_m` (`id_m`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_g` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_id_e` FOREIGN KEY (`id_e`) REFERENCES `enseignant` (`id_e`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_id_g` FOREIGN KEY (`id_g`) REFERENCES `groupe` (`id_g`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_id_m` FOREIGN KEY (`id_m`) REFERENCES `module` (`id_m`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_id_s` FOREIGN KEY (`id_s`) REFERENCES `salle` (`id_s`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
