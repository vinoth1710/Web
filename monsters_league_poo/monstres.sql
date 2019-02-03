-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 fév. 2019 à 22:29
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monstres`
--

-- --------------------------------------------------------

--
-- Structure de la table `mymonsters`
--

DROP TABLE IF EXISTS `mymonsters`;
CREATE TABLE IF NOT EXISTS `mymonsters` (
  `name` varchar(30) NOT NULL,
  `type` varchar(255) NOT NULL,
  `strength` int(255) NOT NULL,
  `life` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mymonsters`
--

INSERT INTO `mymonsters` (`name`, `type`, `strength`, `life`) VALUES
('Kirk', 'Sand', 200, 7000),
('Golum', 'Earth', 500, 9000),
('Mighty', 'Fire', 100, 18000),
('Tozer', 'Fire', 700, 6500),
('Anastasia', 'Earth', 800, 3000),
('Bling', 'Earth', 1400, 6000),
('Rocopotor', 'Sand', 490, 6200),
('Zigotik', 'Legend', 4600, 69000),
('Sarakas', 'Legend', 5400, 60000),
('Minitel', 'Water', 300, 4000),
('Louck', 'Water', 400, 23000),
('Sven', 'Fire', 2000, 15000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
