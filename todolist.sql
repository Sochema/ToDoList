-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 03 Octobre 2017 à 11:51
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ToDoList`
--

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_project` date NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`ID`, `title`, `status`, `description`, `date_project`, `deadline`) VALUES
(9, 'Projex', 'ongoing', 'Il est super cool parce que je le vaux bien', '2017-09-28', '2018-01-01'),
(11, 'ProjectZ', 'finished', 'Cool mais fini, dommage', '2017-09-28', '2018-01-01'),
(12, 'Projet de la mort qui tue ', 'ongoing', 'Projet qui envoie du lourd! C\'est la miff qui organise ça AYYYYYYYY! Si tu veux faire partie du projet, n\'hésite pas à ajouter des étapes ou des taches. Allez ciao Zio ', '2017-10-02', '2018-08-24');

-- --------------------------------------------------------

--
-- Structure de la table `steps`
--

CREATE TABLE `steps` (
  `ID` int(11) NOT NULL,
  `step` varchar(255) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `steps`
--

INSERT INTO `steps` (`ID`, `step`, `id_project`) VALUES
(1, 'Etape 1 - Faire du yoyo', 11),
(2, 'Etape 1 - Concevoir l\'architecture', 9),
(6, 'Etape 2 - Faire des maquettes ', 9),
(7, 'Etape 3 - Faire des choses', 9),
(8, '', 11),
(9, 'Etape 2 - Faire des maquettes', 11),
(10, '', 9),
(11, 'Etape 4 - Construction', 9),
(12, 'Etape 5 - Pourquoi ça fonctionne pas!!! ', 9),
(13, 'Etape 6 - Formuler ', 9),
(14, 'Etape 1 - Concevoir le plan de base ', 12),
(15, 'Etape 7 - Wesh', 9);

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `ID` int(11) NOT NULL,
  `tasks` varchar(255) NOT NULL,
  `id_step` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `steps`
--
ALTER TABLE `steps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;