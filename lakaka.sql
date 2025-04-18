-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 18 avr. 2025 à 13:30
-- Version du serveur : 8.0.35
-- Version de PHP : 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lakaka`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `theme` int DEFAULT NULL,
  `sponsorise` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `prix`, `image`, `theme`, `sponsorise`) VALUES
(1, 'Oupi Goupi', 'Oupi goupi né à goupi land le savais-tu ? ', 7890, 'image/oupi_goupi-1.jpeg', 4, 1),
(2, 'Larry', 'Larry le malicieux (très malicieux)', 666666, 'image/larry-2.png', 1, 0),
(3, 'Homme Génial', 'Il est super génial ', 9999999, 'image/homme_g__nial-3.png', 2, 0),
(4, 'L&#039;électricien ', 'C&#039;est l&#039;éléctriciieeeeen', 727, 'image/l__039___lectricien_-4.png', 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `usr`
--

CREATE TABLE `usr` (
  `id` int NOT NULL,
  `pseudo` varchar(25) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `credits` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
