-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 06 Décembre 2017 à 11:56
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Book`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `book`
--

INSERT INTO `book` (`id_book`, `id_user`, `title`, `author`, `resume`, `date`, `category`, `available`) VALUES
(7, 2, 'lol', 'lol', 'okzdo', '2018-01-25', 'poem', 0),
(8, 1, 'test', 'test', 'test', '2017-12-21', 'adventure', 0),
(12, 1, 'salut', 'toi ', 'dzjiz', '2017-12-21', 'adventure', 0),
(16, 2, 'test', 'test', 'thzdi', '2017-12-27', 'poem', 0),
(17, NULL, 'ijdfif', 'idjzi', 'zdij', '2017-12-27', 'novel', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
