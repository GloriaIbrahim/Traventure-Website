-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2018 at 09:13 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

DROP TABLE IF EXISTS `attraction`;
CREATE TABLE IF NOT EXISTS `attraction` (
  `Name` varchar(60) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`Name`, `City`, `Price`, `Image`) VALUES
('Arc De Triomf', 'Barcelona', 10, 'arc_de_triomf.jpg'),
('Arc de Triomphe', 'Paris', 15, 'Arc de Triomphe.jpg'),
('Barcelona Cathedral', 'Barcelona', 20, 'barcelona_cathedral.jpg'),
('Basilica di Santa Maria Maggiore', 'Rome', 20, 'Basilica di Santa Maria Maggiore.jpg'),
('Basilica of San Clemente', 'Rome', 10, 'Basilica of San Clemente.jpg'),
('Bateaux Mouches', 'Paris', 40, 'Bateaux Mouches.jpg'),
('Baths of Caracalla', 'Rome', 20, 'Baths of Caracalla.jpg'),
('Camp Nou', 'Barcelona', 40, 'camp_nou.jpg'),
('Capitoline Museums', 'Rome', 20, 'Capitoline Museums.jpg'),
('Casa Batllo', 'Barcelona', 30, 'casa_batllo.jpg'),
('Casa Mila', 'Barcelona', 20, 'casa_mila.jpg'),
('Chateau De Versailles', 'Paris', 30, 'chateau de versailles.jpg'),
('Colosseum', 'Rome', 25, 'Colosseum.jpg'),
('Disneyland', 'Paris', 120, 'disneyland.jpg'),
('Eiffel Tour', 'Paris', 25, 'eiffel tour.jpg'),
('Folies Bergere', 'Paris', 20, 'Folies Bergere.jpg'),
('Font Magica', 'Barcelona', 25, 'font_magica.jpg'),
('Fundacio Joan Miro', 'Barcelona', 35, 'fundacio_joan_miro.jpg'),
('Galleria Borghese', 'Rome', 50, 'Galleria Borghese.jpg'),
('Gothic Quarter', 'Barcelona', 15, 'gothic_quarter.jpg'),
('Jardin du Luxembourg', 'Paris', 30, 'Jardin du Luxembourg.jpg'),
('La Boqueria Market', 'Barcelona', 5, 'la_boqueria_market.jpg'),
('Les Invalides', 'Paris', 25, 'les invalides.jpg'),
('Monastery Of Pedralbes', 'Barcelona', 25, 'monastery_of_pedralbes.jpg'),
('Montjuic', 'Barcelona', 50, 'montjuic.jpg'),
('Musee Picasso', 'Paris', 35, 'Musee Picasso.jpg'),
('Museu Nacional Dart De Catalunya', 'Barcelona', 45, 'museu_nacional_dart_de_catalunya.jpg'),
('National Museum of Castel Sant Angelo', 'Rome', 30, 'National Museum of Castel Sant Angelo.jpg'),
('Notre Dame', 'Paris', 20, 'notre dame.jpg'),
('Ostia Antica', 'Rome', 20, 'Ostia Antica.jpg'),
('Palatine Hill', 'Rome', 10, 'Palatine Hill.jpg'),
('Piazza del Popolo', 'Rome', 15, 'Piazza del Popolo.jpg'),
('Piazza Venezia', 'Rome', 15, 'Piazza Venezia.jpg'),
('Roman Forum', 'Rome', 50, 'Roman Forum.jpg'),
('Sacre Coeur', 'Paris', 25, 'sacre coeur.jpg'),
('Tuileries Gardens', 'Paris', 20, 'tuileries gardens.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `FullName` varchar(150) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `CardNumber` int(20) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `CardNumber` (`CardNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`FullName`, `Email`, `Username`, `Password`, `CardNumber`) VALUES
('Gloria Ezzat', 'lola_ezzat@live.com', 'glo', 'Glo00000', 1234567891),
('Lorina Medhat', 'lorina_medhat@hotmail.com', 'Loly', 'Lory0000', 423454332);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
