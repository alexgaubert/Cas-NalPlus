-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Mars 2016 à 17:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `casnalplus`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE IF NOT EXISTS `acteur` (
  `CODE` char(32) NOT NULL,
  `COTE` decimal(10,2) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `CODE` char(32) NOT NULL,
  `ID` char(32) NOT NULL,
  `NOTE` decimal(10,2) DEFAULT NULL,
  `COMMENTAIRE` char(32) DEFAULT NULL,
  PRIMARY KEY (`CODE`,`ID`),
  KEY `I_FK_AVIS_PROGRAMME` (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE IF NOT EXISTS `avoir` (
  `CODE` char(32) NOT NULL,
  `CODE_1` char(32) NOT NULL,
  PRIMARY KEY (`CODE`,`CODE_1`),
  KEY `I_FK_AVOIR_INTERVENANT` (`CODE`),
  KEY `I_FK_AVOIR_PROGRAMME` (`CODE_1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chaine`
--

CREATE TABLE IF NOT EXISTS `chaine` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `date_heure`
--

CREATE TABLE IF NOT EXISTS `date_heure` (
  `ID` char(32) NOT NULL,
  `ID_REL_1` char(32) NOT NULL,
  `DATEH` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `I_FK_DATE_HEURE_PERIODE` (`ID_REL_1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `diffusion`
--

CREATE TABLE IF NOT EXISTS `diffusion` (
  `CODE` char(32) NOT NULL,
  `ID` char(32) NOT NULL,
  `ID_1` char(32) NOT NULL,
  PRIMARY KEY (`CODE`,`ID`,`ID_1`),
  KEY `I_FK_DIFFUSION_PROGRAMME` (`CODE`),
  KEY `I_FK_DIFFUSION_DATE_HEURE` (`ID`),
  KEY `I_FK_DIFFUSION_CHAINE` (`ID_1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE IF NOT EXISTS `intervenant` (
  `CODE` char(32) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `invite`
--

CREATE TABLE IF NOT EXISTS `invite` (
  `CODE` char(32) NOT NULL,
  `TARIF` decimal(10,2) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nationalite`
--

CREATE TABLE IF NOT EXISTS `nationalite` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `presentateur`
--

CREATE TABLE IF NOT EXISTS `presentateur` (
  `CODE` char(32) NOT NULL,
  `PROFESSION` char(32) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `CODE` char(32) NOT NULL,
  `ID` char(32) DEFAULT NULL,
  `ID_CORRESPOND` char(32) NOT NULL,
  `ID_ORIGINAIRE` char(32) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `DUREE` time DEFAULT NULL,
  `DESCRIPTION` char(32) DEFAULT NULL,
  `ANNEE` int(11) DEFAULT NULL,
  `INEDIT` tinyint(4) DEFAULT NULL,
  `HD` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`CODE`),
  KEY `I_FK_PROGRAMME_SIGNALETIQUE` (`ID`),
  KEY `I_FK_PROGRAMME_TYPE_PROGRAMME` (`ID_CORRESPOND`),
  KEY `I_FK_PROGRAMME_NATIONALITE` (`ID_ORIGINAIRE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE IF NOT EXISTS `realisateur` (
  `CODE` char(32) NOT NULL,
  `NBFILM` int(11) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `signaletique`
--

CREATE TABLE IF NOT EXISTS `signaletique` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_programme`
--

CREATE TABLE IF NOT EXISTS `type_programme` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD CONSTRAINT `acteur_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `intervenant` (`CODE`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `programme` (`CODE`);

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`CODE_1`) REFERENCES `programme` (`CODE`),
  ADD CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `intervenant` (`CODE`);

--
-- Contraintes pour la table `date_heure`
--
ALTER TABLE `date_heure`
  ADD CONSTRAINT `date_heure_ibfk_1` FOREIGN KEY (`ID_REL_1`) REFERENCES `periode` (`ID`);

--
-- Contraintes pour la table `diffusion`
--
ALTER TABLE `diffusion`
  ADD CONSTRAINT `diffusion_ibfk_3` FOREIGN KEY (`ID_1`) REFERENCES `chaine` (`ID`),
  ADD CONSTRAINT `diffusion_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `programme` (`CODE`),
  ADD CONSTRAINT `diffusion_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `date_heure` (`ID`);

--
-- Contraintes pour la table `invite`
--
ALTER TABLE `invite`
  ADD CONSTRAINT `invite_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `intervenant` (`CODE`);

--
-- Contraintes pour la table `presentateur`
--
ALTER TABLE `presentateur`
  ADD CONSTRAINT `presentateur_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `intervenant` (`CODE`);

--
-- Contraintes pour la table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `programme_ibfk_3` FOREIGN KEY (`ID_ORIGINAIRE`) REFERENCES `nationalite` (`ID`),
  ADD CONSTRAINT `programme_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `signaletique` (`ID`),
  ADD CONSTRAINT `programme_ibfk_2` FOREIGN KEY (`ID_CORRESPOND`) REFERENCES `type_programme` (`ID`);

--
-- Contraintes pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD CONSTRAINT `realisateur_ibfk_1` FOREIGN KEY (`CODE`) REFERENCES `intervenant` (`CODE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
