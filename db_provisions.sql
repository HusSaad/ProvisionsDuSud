-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 14 déc. 2020 à 13:30
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_provisions`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `total_quantity` int(50) NOT NULL,
  `total_code` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_orders`
--

INSERT INTO `tb_orders` (`id`, `first_name`, `last_name`, `email`, `address`, `total_price`, `total_quantity`, `total_code`) VALUES
(1, 'Ali', 'SAAD', 'ali.saad@ensta-bretagne.org', '2 RUE DES TRITONS', '280', 0, ''),
(2, 'Ali', 'SAAD', 'ali.saad@ensta-bretagne.org', '2 RUE DES TRITONS', '62', 3, 'sh20|le12|sp30|'),
(3, 'Ali', 'SAAD', 'ali.saad@ensta-bretagne.org', '2 RUE DES TRITONS', '62', 3, 'sh20/le12/sp30/'),
(4, 'Ali', 'SAAD', 'ali.saad@ensta-bretagne.o', '2 RUE DES TRITONS', '62', 3, 'sh20/le12/sp30/'),
(5, 'jhgk', 'SAAD', 'ali.saad@ensta-bretagne.org', '2 RUE DES TRITONS', '27', 2, 'ma15/le12/'),
(6, 'Ali', 'SAAD', 'ali.saad@ensta-bretagne.org', '2 RUE DES TRITONS', '27', 2, 'ma15/le12/'),
(7, 'Ali', 'SAAD', 'ali.saad@ensta-bretagne.org', '2 RUE DES TRITONS', '27', 2, 'ma15/le12/');

-- --------------------------------------------------------

--
-- Structure de la table `tb_products`
--

CREATE TABLE `tb_products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` text NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_products`
--

INSERT INTO `tb_products` (`id`, `title`, `description`, `price`, `image`, `code`) VALUES
(1, 'Shanklish', '', '20', 'Images/shanklish.jpg', 'sh20'),
(2, 'Makdoos', '', '15', 'Images/makdoos.jpg', 'ma15'),
(3, 'Lentils', '', '12', 'Images/lentils.jpg', 'le12'),
(4, 'Chickpeas', '', '9', 'Images/chickpeas.jpg', 'ch9'),
(5, 'Spices', '', '30', 'Images/spices.jpg', 'sp30'),
(10, 'Olive Oil', '', '30', 'Images/oliveoil.jpg', 'ol30'),
(7, 'Pickles', '', '11', 'Images/pickles.jpg', 'pi11'),
(8, 'Cumin', '', '25', 'Images/cumin.jpg', 'cu25'),
(9, 'Red Lentils', '', '7', 'Images/redlentils.jpg', 're7'),
(11, 'Confiture', '', '9', 'Images/confiture.jpg', 'co9'),
(12, 'Olives', '', '14', 'Images/olives.jpg', 'ol14'),
(13, 'Special Spices', '', '40', 'Images/specialspices.jpg', 'sp40');

-- --------------------------------------------------------

--
-- Structure de la table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_users`
--

INSERT INTO `tb_users` (`id`, `first_name`, `last_name`, `email`, `password`, `join_date`) VALUES
(14, '', 'SAAD', 'Husseis@gmail.com', '$2y$10$z2zBHT0oXThdbOwDGv5iTeFAN7E9oeUqa6yuvPuqGVuFzqym1wPJS', '2020-12-05 18:50:27'),
(15, 'Hussein', 'SAAD', 'Husseinsaadgs@gmail.com', '$2y$10$W1B./xl6QD/QXCcOV67VxuaIYCDcAzZH09vVOr97pLlOxdckIqUvK', '2020-12-05 18:54:21'),
(16, 'ali', 'saad', 'alisaad@gmail.com', '$2y$10$kbxn5uLAv1jA9nj1HQdZYuOxpi2tDD8xukMYUlRsW9T99gnN7HUYe', '2020-12-06 17:21:14'),
(17, 'Ali', 'SAAD', 'ali.saad@ensta-bretagne.org', '$2y$10$fQRbZfqlaBfVx08iaL1LUeU12LIrEvDnrlg3jJ96Fcj.C4zi9bGd2', '2020-12-14 01:37:05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
