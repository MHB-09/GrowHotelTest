-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 avr. 2022 à 01:47
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myhotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `local`
--

CREATE TABLE `local` (
  `idLocal` int(11) NOT NULL,
  `typeLocal` varchar(100) NOT NULL,
  `prixLocal` varchar(9) NOT NULL,
  `codeLocal` varchar(20) NOT NULL,
  `etatLocal` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `local`
--

INSERT INTO `local` (`idLocal`, `typeLocal`, `prixLocal`, `codeLocal`, `etatLocal`) VALUES
(6, 'Chambre Solo', '12000', 'CHS001', 1),
(7, 'Chambre Couple', '20000', 'CHC001', 1),
(8, 'Chambre Familiale', '25000', 'CHF001', 1),
(9, 'Suite', '35000', 'SU001', 1),
(10, 'Studio', '40000', 'ST001', 1),
(11, 'Chambre Familiale', '25000', 'CHF002', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(11) NOT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `nomPersonne` varchar(50) DEFAULT NULL,
  `prenomPersonne` varchar(100) DEFAULT NULL,
  `telephonePersonne` varchar(30) DEFAULT NULL,
  `emailPersonne` varchar(255) DEFAULT NULL,
  `civilitePersonne` varchar(10) DEFAULT NULL,
  `adressePersonne` varchar(255) DEFAULT NULL,
  `etatPersonne` tinyint(4) NOT NULL DEFAULT 1,
  `idTypePersonneF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `matricule`, `nomPersonne`, `prenomPersonne`, `telephonePersonne`, `emailPersonne`, `civilitePersonne`, `adressePersonne`, `etatPersonne`, `idTypePersonneF`) VALUES
(1, 'admin', 'CISSE', 'Bachir', '777635212', 'bassiroublack@gmail.com', 'M', 'Mbao', 1, 1),
(2, 'Emp002', 'NDIAYE', 'Ngoné', '774091707', 'ngo@gmail.com', 'Mlle', 'Rufisque', 1, 2),
(6, 'Emp003', 'FALL', 'IBOU', '773466478', 'Fall@gmail.com', 'M', 'Thies', 1, 2),
(7, 'Emp004', 'DIOM', 'Pierre', '774639274', 'pierre@gmail.com', 'M', 'Parcelles assainies', 1, 2),
(10, 'Emp005', 'WADE', 'Rokhaya', '786305443', 'DabsonWade@gmail.com', 'Mlle', 'RUFISQUE', 1, 2),
(14, 'Emp001', 'CISSE', 'Abdou', '777635212', 'bassiroublack@gmail.com', 'M', 'DAKAR', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(11) NOT NULL,
  `NomPersRerserv` varchar(200) NOT NULL,
  `NumeroPersRers` text NOT NULL,
  `idLocal` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `etatReservation` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idReservation`, `NomPersRerserv`, `NumeroPersRers`, `idLocal`, `dateDebut`, `dateFin`, `etatReservation`) VALUES
(9, 'Mohamed Bachir CISSE', '777635212', 9, '2022-04-14', '2022-04-16', 1),
(24, 'Fallou Ndiaye', '773635298', 10, '2022-04-15', '2022-04-22', 1),
(25, 'Issa Ndao', '7638927382', 10, '2022-04-15', '2022-04-22', 1),
(29, 'Astou DIENG', '73484884', 7, '0000-00-00', '0000-00-00', 1),
(30, 'Steph Borris', '73484884', 6, '2017-06-18', '2017-06-19', 1);

-- --------------------------------------------------------

--
-- Structure de la table `typepersonne`
--

CREATE TABLE `typepersonne` (
  `idTypePersonne` int(11) NOT NULL,
  `libelleTypePersonne` varchar(255) NOT NULL,
  `etatTypePersonne` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typepersonne`
--

INSERT INTO `typepersonne` (`idTypePersonne`, `libelleTypePersonne`, `etatTypePersonne`) VALUES
(1, 'Admin', 1),
(2, 'Employé', 1),
(3, 'Client', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `etatUtilisateur` tinyint(4) NOT NULL DEFAULT 1,
  `idPersonneF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `login`, `mdp`, `etatUtilisateur`, `idPersonneF`) VALUES
(1, 'admin', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 1, 1),
(3, 'Emp001', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 1, 2),
(7, 'Emp002', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 0, 6),
(8, 'Emp003', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 0, 7),
(11, 'Emp004', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 1, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`idLocal`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPersonne`),
  ADD KEY `idPersonne` (`idPersonne`,`idTypePersonneF`),
  ADD KEY `idTypePersonneF` (`idTypePersonneF`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `idCompte` (`idLocal`),
  ADD KEY `idLocal` (`idLocal`);

--
-- Index pour la table `typepersonne`
--
ALTER TABLE `typepersonne`
  ADD PRIMARY KEY (`idTypePersonne`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD KEY `idPersonneF` (`idPersonneF`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `local`
--
ALTER TABLE `local`
  MODIFY `idLocal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `typepersonne`
--
ALTER TABLE `typepersonne`
  MODIFY `idTypePersonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`idTypePersonneF`) REFERENCES `typepersonne` (`idTypePersonne`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idLocal`) REFERENCES `local` (`idLocal`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`idPersonneF`) REFERENCES `personne` (`idPersonne`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
