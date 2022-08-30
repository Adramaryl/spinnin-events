-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 30 août 2022 à 12:46
-- Version du serveur :  5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spinnin_events`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Video_link` varchar(100) NOT NULL,
  `Date` datetime NOT NULL,
  `Info` varchar(2000) NOT NULL,
  `Tickets_link` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`ID`, `Title`, `Image`, `Video_link`, `Date`, `Info`, `Tickets_link`) VALUES
(1, 'Event 1', 'images/event_1.png', 'https://www.youtube.com/watch?v=AXpDTv2ct5o', '2022-08-30 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at condimentum turpis. Donec aliquam consequat tellus a ultricies. Duis tincidunt suscipit justo, bibendum pretium mi vehicula et. In cursus consectetur risus, quis maximus justo mattis a. Maecenas feugiat, risus sed mattis accumsan, sem diam commodo massa, non semper nibh ex in arcu. Curabitur quis ipsum sit amet dolor pulvinar faucibus.', 'https://www.fr.fnac.be/'),
(2, 'Event 2', 'images/event_2.png', '', '2022-08-31 00:00:00', '', ''),
(3, 'Event 3', 'images/event_3.png', '', '2022-09-02 00:00:00', '', ''),
(4, 'Event 4', 'images/event_4.png', '', '2022-09-07 00:00:00', '', ''),
(5, 'Event 5', 'images/event_5.png', '', '2022-09-21 00:00:00', '', ''),
(6, 'Event 6', 'images/event_6.png', '', '2022-09-13 00:00:00', '', ''),
(7, 'Event 7', 'images/event_7.png', '', '2022-09-19 00:00:00', '', ''),
(8, 'Event 8', 'images/event_8.png', '', '2022-09-25 00:00:00', '', ''),
(9, 'Event 9', 'images/event_9.png', '', '2022-10-13 00:00:00', '', ''),
(10, 'Event 10', 'images/event_10.png', '', '2022-10-04 00:00:00', '', ''),
(11, 'Event 11', 'images/event_11.png', '', '2022-10-18 00:00:00', '', ''),
(12, 'Event 12', 'images/event_12.png', '', '2022-11-02 00:00:00', '', ''),
(13, 'Event 13', 'images/event_13.png', '', '2022-10-31 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` int(11) NOT NULL,
  `ID_Event` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Password`, `Status`) VALUES
(1, 'ChillRyl', 'tadaga@tsoin.com', '', 'admin'),
(2, 'MarcHassin', 'jambon@bon.com', '', 'member');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
