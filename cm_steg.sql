-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 mai 2024 à 22:58
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cm_steg`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Oumayma Abouda', 'aboudaoumayma50@gmail.com', '$2y$10$ETYsvJ4Z8eV4PEBTRGYSQOFJ31WLJP8AIKfoYA4yvgDPupTcE3ix.');

-- --------------------------------------------------------

--
-- Structure de la table `listerendc`
--

CREATE TABLE `listerendc` (
  `id` int(11) NOT NULL,
  `medecin` varchar(200) NOT NULL,
  `patient` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `listerendc`
--

INSERT INTO `listerendc` (`id`, `medecin`, `patient`, `age`, `phone`, `email`, `date`, `time`) VALUES
(1, 'HajerBenamor', 'Farhat', 21, 25994944, 'farhat@gmail.com', '2024-05-07', '09:00'),
(2, 'Jalel EddinChamli', 'zayneb', 5, 27969030, 'mohsen@gmail.com', '2024-05-17', '08:00'),
(3, 'Jalel EddinChamli', 'touhemi', 5, 27969030, 'touhemi@gmail.com', '2024-05-23', '15:00');

-- --------------------------------------------------------

--
-- Structure de la table `listerendnc`
--

CREATE TABLE `listerendnc` (
  `id` int(11) NOT NULL,
  `medecin` varchar(200) NOT NULL,
  `patient` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `listerendnc`
--

INSERT INTO `listerendnc` (`id`, `medecin`, `patient`, `age`, `phone`, `email`, `date`, `time`) VALUES
(14, 'AfifKefi', 'oumayma', 21, 25994944, 'abouda@gmail.com', '2024-05-15', '14:00'),
(15, 'Mahdi Slim', 'touhemi', 60, 25648963, 'touhemi@gmail.com', '2024-05-25', '14:00');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `prenom`, `email`, `specialite`, `description`, `image`) VALUES
(1, 'Hajer', 'Benamor', 'hajer@gmail.com', 'Ophtalmogie', '\r\nMardi : 09:00 ~ Jeudi: 14:00', 'images_med/10.jpg'),
(2, 'Jalel Eddin', 'Chamli', 'jalelchamli@gmail.com', 'Pédiatrie', '\r\nLundi : 08:00 ~Mardi : 08:00 ', 'images_med/8.png'),
(3, 'Mahdi ', 'Slim', 'slim@gmail.com', 'Cardiologie', 'Lundi : 08:30 ', 'images_med/2.png'),
(4, 'Afif', 'Kefi', 'afifkefi@gmail.com', 'Dentisterie', 'Mercredi:14:00~Jeudi: 09:00 ', 'images_med/5.png');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `name`, `description`, `image`) VALUES
(1, 'Ophtalmogie', 'L\'ophtalmologie est la branche de la médecine chargée du traitement des maladies de l\'œil .', 'images_sp/img4.jpg'),
(2, 'Dentisterie', 'La dentisterie est la branche de la médecine dentaire qui se concentre sur   le traitement des maladies  des dents.', 'images_sp/img3.jpg'),
(3, 'Pédiatrie', 'La pédiatrie est une spécialité médicale qui se consacre à l’enfant, depuis la vie intra-utérine jusqu’à la fin de l’adolescence. ', 'images_sp/img2.jpg'),
(4, 'Cardiologie', 'La cardiologie est une branche de la médecine qui traite des troubles du cœur.', 'images_sp/img5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`) VALUES
(1, 'Oumayma Abouda', '$2y$10$gOtVkgaDBJLYC7jjBZIztecLk/wywKQmlzIg9gt3pylegEY4QqipW', 'abouda@gmail.com', '2024-05-01'),
(2, 'touhemi ', '$2y$10$8JLti3aKE.6NmJVxUi5U0.mO.iufLb.WGG8LOmnjLMqSkvxvR4oKO', 'touhemi@gmail.com', '2024-05-03'),
(3, 'saiida', '$2y$10$D/nBF5.IoJoAG1x33LSUEO4Yw0Z1eIs1de7r2vS9OHMlIQ8lJkL76', 'saiida@gmail.com', '2024-05-08'),
(4, 'farhat', '$2y$10$C9cZPLKPL9PVY/4EMvzUb.rc/7/QlJJ8ZItuSg2Y6R2YfJQgPoNeO', 'farhan@gmail.com', '2024-05-09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `listerendc`
--
ALTER TABLE `listerendc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `listerendnc`
--
ALTER TABLE `listerendnc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `listerendc`
--
ALTER TABLE `listerendc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `listerendnc`
--
ALTER TABLE `listerendnc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
