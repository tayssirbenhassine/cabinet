-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 22 avr. 2024 à 17:00
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_cabinet`
--

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id_fiche` int(11) NOT NULL,
  `observation` text NOT NULL,
  `cin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`id_fiche`, `observation`, `cin`) VALUES
(12, 'mrith ', 14028106);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `email` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `telephone` int(8) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`email`, `nom`, `prenom`, `telephone`, `adresse`, `image`, `motdepasse`) VALUES
('docteur@gmail.com', 'mahdi', 'docteur', 58662870, 'Sousse', 'téléchargement.jpeg', 'docteur123456');

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE `ordonnance` (
  `id_ordonnance` int(11) NOT NULL,
  `ordonnance` text NOT NULL,
  `id_fiche` int(11) NOT NULL,
  `cin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ordonnance`
--

INSERT INTO `ordonnance` (`id_ordonnance`, `ordonnance`, `id_fiche`, `cin`) VALUES
(23, 'nice', 12, 14028106);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `cin` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `telephone` int(8) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `metier` varchar(11) NOT NULL,
  `datedenaissance` date NOT NULL,
  `genre` varchar(5) NOT NULL,
  `cnam` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_enregistrement` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`cin`, `nom`, `prenom`, `telephone`, `adresse`, `metier`, `datedenaissance`, `genre`, `cnam`, `email`, `date_enregistrement`) VALUES
(14028106, 'soussi', 'molka', 99877867, 'kairouan', 'docteur', '2024-04-11', 'femme', 123654, 'soussimolka15@gmail.com', '2024-04-14 18:18:34');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `daterdv` datetime NOT NULL,
  `horaire` time NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `telephone` int(8) NOT NULL,
  `cin` int(11) NOT NULL,
  `date_enregistrement` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`daterdv`, `horaire`, `nom`, `prenom`, `telephone`, `cin`, `date_enregistrement`) VALUES
('2024-04-12 00:00:00', '05:20:00', 'soussi', 'molka', 99877867, 0, '2024-04-14 18:22:17');

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `email` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` int(8) NOT NULL,
  `datedenaissance` date NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_enregistrement` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `secretaire`
--

INSERT INTO `secretaire` (`email`, `nom`, `prenom`, `adresse`, `telephone`, `datedenaissance`, `motdepasse`, `genre`, `image`, `date_enregistrement`) VALUES
('oula@gmail.com', 'Bergaoui', 'Oula', 'Monastir', 58662870, '2000-07-27', 'oula123456', 'femme', 'téléchargement (1).jpeg', '2024-04-14 18:27:02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id_fiche`),
  ADD KEY `cin` (`cin`),
  ADD KEY `id_fiche` (`id_fiche`),
  ADD KEY `cin_2` (`cin`),
  ADD KEY `cin_3` (`cin`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`id_ordonnance`),
  ADD UNIQUE KEY `cin` (`id_ordonnance`),
  ADD KEY `cin_2` (`id_fiche`),
  ADD KEY `id_fiche` (`id_fiche`),
  ADD KEY `cin_3` (`cin`),
  ADD KEY `cin_4` (`cin`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`cin`),
  ADD KEY `cin` (`cin`),
  ADD KEY `cin_2` (`cin`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD KEY `cin` (`cin`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id_fiche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `id_ordonnance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `fichier_ibfk_1` FOREIGN KEY (`cin`) REFERENCES `patient` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD CONSTRAINT `fk_patient` FOREIGN KEY (`cin`) REFERENCES `patient` (`cin`),
  ADD CONSTRAINT `ordonnance_ibfk_1` FOREIGN KEY (`id_fiche`) REFERENCES `fichier` (`id_fiche`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
