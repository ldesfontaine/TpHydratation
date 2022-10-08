-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mar 30 Juin 2015 à 21:38
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.9


--
-- Base de données: `animaux`
--
CREATE DATABASE animaux;
USE animaux;
-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `espece` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `animal`
--

INSERT INTO `animal` (`id`, `nom`, `espece`) VALUES
(1, 'Nemo', 'Poisson'),
(2, 'Felix', 'Chat'),
(3, 'Babar', 'Elephant'),
(4, 'Perruche', 'Pistache');
