-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Mars 2016 à 11:13
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

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`CODE`, `COTE`, `NOM`, `PRENOM`) VALUES
('10', '4.00', NULL, NULL),
('11', '5.00', NULL, NULL),
('2', '1.00', NULL, NULL),
('3', '2.00', NULL, NULL),
('4', '3.00', NULL, NULL),
('5', '4.00', NULL, NULL),
('6', '5.00', NULL, NULL),
('7', '1.00', NULL, NULL),
('8', '2.00', NULL, NULL),
('9', '3.00', NULL, NULL);

--
-- Déclencheurs `acteur`
--
DROP TRIGGER IF EXISTS `before_insert_acteur`;
DELIMITER //
CREATE TRIGGER `before_insert_acteur` BEFORE INSERT ON `acteur`
 FOR EACH ROW BEGIN
IF NOT EXISTS(SELECT*FROM intervenant WHERE CODE = new.CODE)
THEN
INSERT INTO intervenant VALUES(new.CODE, new.NOM, new.PRENOM);
END IF; 
END
//
DELIMITER ;

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

--
-- Contenu de la table `avoir`
--

INSERT INTO `avoir` (`CODE`, `CODE_1`) VALUES
('10', '1'),
('17', '1'),
('19', '1'),
('4', '1'),
('9', '1');

-- --------------------------------------------------------

--
-- Structure de la table `chaine`
--

CREATE TABLE IF NOT EXISTS `chaine` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chaine`
--

INSERT INTO `chaine` (`ID`, `LIBELLE`) VALUES
('1', 'Nal+ Premier'),
('10', 'Nal+'),
('11', 'Nal+ Decale'),
('12', 'Nal+ Family'),
('13', 'Nal+ Cinema'),
('2', 'Nal+ Frisson'),
('3', 'Nal+ Emotion'),
('4', 'Nal+ Famiz'),
('5', 'Nal+ Star'),
('6', 'Nal+ Club'),
('7', 'Nal+ Classic'),
('8', 'Nal+  Sport'),
('9', 'Nal+ Series');

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

--
-- Contenu de la table `date_heure`
--

INSERT INTO `date_heure` (`ID`, `ID_REL_1`, `DATEH`) VALUES
('1', '1', '2016-03-22 00:00:00'),
('10', '2', '2016-03-22 09:00:00'),
('11', '2', '2016-03-22 10:00:00'),
('12', '2', '2016-03-22 11:00:00'),
('13', '3', '2016-03-22 12:00:00'),
('14', '3', '2016-03-22 13:00:00'),
('15', '3', '2016-03-22 14:00:00'),
('16', '3', '2016-03-22 15:00:00'),
('17', '3', '2016-03-22 16:00:00'),
('18', '3', '2016-03-22 17:00:00'),
('19', '3', '2016-03-22 18:00:00'),
('2', '1', '2016-03-22 01:00:00'),
('20', '4', '2016-03-22 19:00:00'),
('21', '4', '2016-03-22 20:00:00'),
('22', '4', '2016-03-22 21:00:00'),
('23', '5', '2016-03-22 22:00:00'),
('24', '5', '2016-03-22 23:00:00'),
('3', '1', '2016-03-22 02:00:00'),
('4', '1', '2016-03-22 03:00:00'),
('5', '1', '2016-03-22 04:00:00'),
('6', '1', '2016-03-22 05:00:00'),
('7', '2', '2016-03-22 06:00:00'),
('8', '2', '2016-03-22 07:00:00'),
('9', '2', '2016-03-22 08:00:00');

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

--
-- Contenu de la table `diffusion`
--

INSERT INTO `diffusion` (`CODE`, `ID`, `ID_1`) VALUES
('1', '1', '13');

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

--
-- Contenu de la table `intervenant`
--

INSERT INTO `intervenant` (`CODE`, `NOM`, `PRENOM`) VALUES
('1', 'PIERRE', 'INGENIEUR'),
('10', 'De Niro', 'Robert'),
('11', 'di Caprio', 'Leonardo'),
('12', 'Kubrick', 'Stanley'),
('13', 'Renoir', 'Jean'),
('14', 'Ford Coppola', 'Francis'),
('15', 'Kurosawa', 'Akira'),
('16', 'Scorsese', 'Martin'),
('17', 'Spielberg', 'Steven'),
('18', 'Tarantino', 'Quentin'),
('19', 'Chaplin', 'Charlie'),
('2', 'Berry', 'Halle'),
('20', 'Amar', 'Paul'),
('21', 'Essebag', 'Jacques'),
('22', 'Aliagas', 'Nikos'),
('23', 'Arnaud', 'Julien'),
('24', 'Bern', 'Stéphane'),
('25', 'Ardisson', 'Thierry'),
('26', 'Achour', 'Mouloud'),
('27', 'Sérillon', 'Claude'),
('28', 'Poivre d''arvor', 'Patrick'),
('29', 'Calvi', 'Yves'),
('3', 'Myers', 'Mike'),
('30', 'Godard', 'Jean-Luc'),
('31', 'Allen', 'Woody'),
('4', 'Carrey', 'Jim'),
('5', 'Travolta', 'John'),
('6', 'Gibson', 'Mel'),
('7', 'Jolie', 'Angelina'),
('8', 'Caine', 'Michael'),
('9', 'Cage', 'Nicolas');

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

--
-- Déclencheurs `invite`
--
DROP TRIGGER IF EXISTS `before_insert_invite`;
DELIMITER //
CREATE TRIGGER `before_insert_invite` BEFORE INSERT ON `invite`
 FOR EACH ROW BEGIN
IF NOT EXISTS(SELECT*FROM intervenant WHERE CODE = new.CODE)
THEN
INSERT INTO intervenant VALUES(new.CODE, new.NOM, new.PRENOM);
END IF; 
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `nationalite`
--

CREATE TABLE IF NOT EXISTS `nationalite` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nationalite`
--

INSERT INTO `nationalite` (`ID`, `LIBELLE`) VALUES
('1', 'Allemand'),
('10', 'Portugais'),
('2', 'Francais'),
('3', 'Espagnol'),
('4', 'Americain'),
('5', 'Italien'),
('6', 'Indien'),
('7', 'Bresilien'),
('8', 'Grec'),
('9', 'Mexicain');

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `periode`
--

INSERT INTO `periode` (`ID`, `LIBELLE`) VALUES
('1', 'Nuit'),
('2', 'Matin'),
('3', 'Apresmidi'),
('4', 'DebutSoiree'),
('5', 'Soiree');

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

--
-- Contenu de la table `presentateur`
--

INSERT INTO `presentateur` (`CODE`, `PROFESSION`, `NOM`, `PRENOM`) VALUES
('20', 'Avocat', NULL, NULL),
('21', 'Ergothérapeute', NULL, NULL),
('22', 'Mandataire judiciaire', NULL, NULL),
('23', 'Sage-femme', NULL, NULL),
('24', 'Ostéopathe', NULL, NULL),
('25', 'Orthoptiste', NULL, NULL),
('26', 'Médecin', NULL, NULL),
('27', 'Notaire', NULL, NULL),
('28', 'Chirurgien-dentiste', NULL, NULL),
('29', 'Conseil en investissements finan', NULL, NULL);

--
-- Déclencheurs `presentateur`
--
DROP TRIGGER IF EXISTS `before_insert_presentateur`;
DELIMITER //
CREATE TRIGGER `before_insert_presentateur` BEFORE INSERT ON `presentateur`
 FOR EACH ROW BEGIN
	IF NOT EXISTS(SELECT*FROM intervenant WHERE CODE = new.CODE)
    THEN
    	INSERT INTO intervenant VALUES(new.CODE, new.NOM, new.PRENOM);
    END IF;
END
//
DELIMITER ;

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

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`CODE`, `ID`, `ID_CORRESPOND`, `ID_ORIGINAIRE`, `NOM`, `DUREE`, `DESCRIPTION`, `ANNEE`, `INEDIT`, `HD`) VALUES
('1', '2', '1', '4', 'Fast And Furious', '02:00:00', 'Action', 2015, 0, 1);

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

--
-- Contenu de la table `realisateur`
--

INSERT INTO `realisateur` (`CODE`, `NBFILM`, `NOM`, `PRENOM`) VALUES
('12', 64, NULL, NULL),
('13', 32, NULL, NULL),
('14', 7, NULL, NULL),
('15', 27, NULL, NULL),
('16', 145, NULL, NULL),
('17', 23, NULL, NULL),
('18', 19, NULL, NULL),
('19', 72, NULL, NULL),
('30', 45, NULL, NULL),
('31', 26, NULL, NULL);

--
-- Déclencheurs `realisateur`
--
DROP TRIGGER IF EXISTS `before_insert_realisateur`;
DELIMITER //
CREATE TRIGGER `before_insert_realisateur` BEFORE INSERT ON `realisateur`
 FOR EACH ROW BEGIN
IF NOT EXISTS(SELECT*FROM intervenant WHERE CODE = new.CODE)
THEN
INSERT INTO intervenant VALUES(new.CODE, new.NOM, new.PRENOM);
END IF; 
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `signaletique`
--

CREATE TABLE IF NOT EXISTS `signaletique` (
  `ID` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `signaletique`
--

INSERT INTO `signaletique` (`ID`, `LIBELLE`) VALUES
('1', '-10 ans'),
('2', '-12 ans'),
('3', '-16 ans'),
('4', '-18 ans');

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
-- Contenu de la table `type_programme`
--

INSERT INTO `type_programme` (`ID`, `LIBELLE`) VALUES
('1', 'Film'),
('2', 'Série TV'),
('3', 'Documentaire'),
('4', 'Dessin-Animée'),
('5', 'Cinéma'),
('6', 'Autre'),
('7', 'Culture Infos'),
('8', 'Sport');

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
