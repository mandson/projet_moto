-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 23 avr. 2020 à 20:10
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `moto_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id_marque` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id_marque`, `marque`) VALUES
(1, 'Sirus'),
(2, 'Ratos'),
(3, 'megamonde'),
(4, 'soni'),
(5, 'forcx');

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

CREATE TABLE `moto` (
  `id_marque` int(11) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `cylindre` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `id_moto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`id_marque`, `modele`, `cylindre`, `categorie`, `num_serie`, `prix`, `id_moto`) VALUES
(4, 'soni_eric', 'r478', 'homme', '1254', '547896', 12),
(3, 'soni_eric', 'b878', 'femme', '7854', '547896', 13),
(1, 'azes', '878', 'femme', '85454', '5896', 15);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id_marque`);

--
-- Index pour la table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`num_serie`),
  ADD KEY `id_marque` (`id_marque`),
  ADD KEY `id` (`id_moto`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `id_marque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `moto`
--
ALTER TABLE `moto`
  MODIFY `id_moto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `moto`
--
ALTER TABLE `moto`
  ADD CONSTRAINT `liaison` FOREIGN KEY (`id_marque`) REFERENCES `marques` (`id_marque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
