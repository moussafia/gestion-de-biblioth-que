-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 21 nov. 2022 à 15:30
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_bibliotique`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `sexe` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom_complet`, `date_naissance`, `email`, `sexe`, `password`) VALUES
(25, 'gisymus', '1968-04-28', 'qozukuj@mailinator.com', 1, 'Pa$$w0rd!'),
(26, 'gelypu', '1998-08-26', 'ziwoqil@mailinator.com', 2, 'Pa$$w0rd!'),
(27, 'tusudy', '1985-07-13', 'cevukexex@mailinator.com', 2, 'Pa$$w0rd!'),
(28, 'dfbx', '2013-12-31', 'dakatyx@mailinator.com', 1, 'FHSQFDH'),
(29, 'jolypo', '1978-11-17', 'sebizigus@mailinator.com', 1, 'Pa$$w0rd!'),
(30, 'symuziton', '1958-10-17', 'kyjab@mailinator.com', 1, 'Pa$$w0rd!'),
(31, 'kuqema', '1972-11-05', 'rigecumu@mailinator.com', 1, 'Pa$$w0rd!'),
(32, 'ciguher', '1997-07-19', 'bejeriso@mailinator.com', 1, 'Pa$$w0rd!'),
(33, 'qenoku', '2011-09-22', 'ryrigepu@mailinator.com', 2, 'Pa$$w0rd!'),
(34, 'mohammed moussafia', '1999-11-11', 'moussafia@gmail.com', 1, '123');

-- --------------------------------------------------------

--
-- Structure de la table `genre_livre`
--

CREATE TABLE `genre_livre` (
  `id` int(11) NOT NULL,
  `nom_genre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `genre_livre`
--

INSERT INTO `genre_livre` (`id`, `nom_genre`) VALUES
(1, 'littéraires'),
(2, 'scientifiqu'),
(3, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `idLivre` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `n_auteur` varchar(255) NOT NULL,
  `genre` int(11) NOT NULL,
  `description` text NOT NULL,
  `code` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `photo_book` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`idLivre`, `title`, `n_auteur`, `genre`, `description`, `code`, `price`, `photo_book`) VALUES
(27, 'Quis explicabo Et m', 'Sunt totam eum maxim', 3, 'Tenetur deleniti cum', 34, 35, 'IMG-637b823604f259.35645862.jpg'),
(28, 'Aliquip facilis omni', 'Amet officia labori', 3, 'Laboris eaque dolore', 34, 85, 'IMG-637b82c2d6c2f7.36964975.png'),
(29, 'Minima quo odio offi', 'Dicta consequatur b', 2, 'Unde commodi nostrud', 34, 98, 'avatarPNG.jpg'),
(30, 'Quidem sed necessita', 'Quo nostrum sit in c', 1, 'Sit ut quos et ut l', 34, 89, 'avatarPNG.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

CREATE TABLE `sexe` (
  `id` int(11) NOT NULL,
  `n_sexe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`id`, `n_sexe`) VALUES
(2, 'femme'),
(1, 'homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `sexe` (`sexe`);

--
-- Index pour la table `genre_livre`
--
ALTER TABLE `genre_livre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`idLivre`),
  ADD KEY `code` (`code`),
  ADD KEY `genre` (`genre`);

--
-- Index pour la table `sexe`
--
ALTER TABLE `sexe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `n_sexe` (`n_sexe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `genre_livre`
--
ALTER TABLE `genre_livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `idLivre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `sexe`
--
ALTER TABLE `sexe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`sexe`) REFERENCES `sexe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`code`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `livre_ibfk_2` FOREIGN KEY (`genre`) REFERENCES `genre_livre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
