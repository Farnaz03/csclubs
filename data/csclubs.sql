-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2017 at 01:49 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csclubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `aremembers`
--

DROP TABLE IF EXISTS `aremembers`;
CREATE TABLE IF NOT EXISTS `aremembers` (
  `MID` int(2) NOT NULL AUTO_INCREMENT,
  `CID` int(2) NOT NULL,
  `SID` int(2) NOT NULL,
  `Role` enum('Member','President','Vice-President','Secretary','Treasurer','Event Coordinator') NOT NULL,
  PRIMARY KEY (`MID`),
  KEY `CID` (`CID`),
  KEY `SID` (`SID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aremembers`
--

INSERT INTO `aremembers` (`MID`, `CID`, `SID`, `Role`) VALUES
(1, 1, 1, 'President'),
(2, 1, 2, 'Vice-President'),
(3, 1, 3, 'Treasurer'),
(4, 1, 4, 'Secretary'),
(5, 1, 5, 'Event Coordinator'),
(6, 2, 6, 'President'),
(7, 2, 1, 'Vice-President'),
(8, 2, 2, 'Secretary'),
(9, 2, 7, 'Member'),
(10, 1, 7, 'Member'),
(11, 1, 8, 'Member'),
(12, 1, 9, 'Member'),
(13, 1, 10, 'Member'),
(14, 1, 11, 'Member'),
(15, 1, 12, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
CREATE TABLE IF NOT EXISTS `clubs` (
  `CID` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`CID`, `Name`) VALUES
(1, 'Robotics '),
(2, 'Technology Education Revolution'),
(3, 'Free and Open Source Software'),
(4, 'Girls in Computing'),
(5, 'Social Media');

-- --------------------------------------------------------

--
-- Table structure for table `coordinate`
--

DROP TABLE IF EXISTS `coordinate`;
CREATE TABLE IF NOT EXISTS `coordinate` (
  `COID` int(2) NOT NULL AUTO_INCREMENT,
  `CID` int(2) NOT NULL,
  `LID` int(2) NOT NULL,
  `Role` enum('Campus Advisor','N/A') NOT NULL,
  PRIMARY KEY (`COID`),
  KEY `CID` (`CID`),
  KEY `LID` (`LID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinate`
--

INSERT INTO `coordinate` (`COID`, `CID`, `LID`, `Role`) VALUES
(1, 2, 2, 'Campus Advisor'),
(2, 1, 1, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `have`
--

DROP TABLE IF EXISTS `have`;
CREATE TABLE IF NOT EXISTS `have` (
  `HID` int(2) NOT NULL AUTO_INCREMENT,
  `SID` int(2) NOT NULL,
  `IID` int(2) NOT NULL,
  PRIMARY KEY (`HID`),
  KEY `IID` (`IID`),
  KEY `SID` (`SID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `have`
--

INSERT INTO `have` (`HID`, `SID`, `IID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 7, 3),
(4, 8, 4),
(5, 9, 4),
(6, 10, 4),
(7, 11, 4),
(8, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

DROP TABLE IF EXISTS `interests`;
CREATE TABLE IF NOT EXISTS `interests` (
  `IID` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  PRIMARY KEY (`IID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`IID`, `Name`) VALUES
(1, 'Robotics'),
(2, 'Astronomy'),
(3, 'Reading'),
(4, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `LID` int(2) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNumber` varchar(12) DEFAULT NULL,
  `AccessLevel` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`LID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`LID`, `FirstName`, `LastName`, `Gender`, `Email`, `ContactNumber`, `AccessLevel`, `Username`, `Password`) VALUES
(1, 'Aurel', 'Liddell', 'Female', 'aurel.liddell@uog.edu.gy', '616-4145', 1, 'Penny', 'd0af038853bde3b5b99b09dddf424a30'),
(2, 'Penelope', 'DeFreitas', 'Female', 'penelope.defreitas@uog.edu.gy', '644-1627', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `SID` int(2) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `USI` int(7) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNumber` varchar(12) DEFAULT NULL,
  `YearOfStudy` enum('First','Second','Third','Fourth') DEFAULT NULL,
  `FieldOfStudy` varchar(50) DEFAULT NULL,
  `AccessLevel` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserType` varchar(10) NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `UserType` (`UserType`),
  KEY `AccessLevel` (`AccessLevel`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SID`, `FirstName`, `LastName`, `Gender`, `DOB`, `USI`, `Email`, `ContactNumber`, `YearOfStudy`, `FieldOfStudy`, `AccessLevel`, `Username`, `Password`, `UserType`) VALUES
(1, 'Farnaz', 'Baksh', 'Female', '1995-10-03', 1023240, 'farnaz.baksh@gmail.com', '638-7689', 'Second', 'Computer Science', 1, 'Farnaz03', '9cd6d2525b03831fa1b27ff46081ba01', 'Admin'),
(2, 'Stephanie ', 'Simon', 'Female', NULL, 1023184, 'jacintasimon97@yahoo.com', '656-0239', 'Second', 'Computer Science', 1, 'SSSimson', '6f544956d3b1097253df984154d70b38', 'Admin'),
(3, 'Sean', 'Singh', 'Male', NULL, NULL, 'seansingh7@gmail.com', '648-7886', NULL, NULL, 2, '', '', 'Member'),
(4, 'Johnathan', 'Jacobus', 'Male', NULL, NULL, 'jono.jacobus@gmail.com', '696-8460', NULL, NULL, 1, '', '', 'Admin'),
(5, 'Alana', 'Hasan', 'Female', NULL, NULL, 'alanahasan98@gmail.com', '639-3872', 'Second', 'Computer Science', 2, '', '', 'Member'),
(6, 'Arudranath', 'Parasnath', 'Male', NULL, NULL, 'arudra223@gmail.com', '628-0827', NULL, NULL, 1, '', '', 'Admin'),
(7, 'Arrianna', 'Mahase', 'Female', NULL, NULL, 'arrianna.mahase@gmail.com ', '679-6679', 'Second', 'Computer Science', 2, '', '', 'Member'),
(8, 'Tyreke', 'Wilson', 'Male', '2000-02-23', 1024455, 'tyrekewilson176@gmail.com', '641-6876', 'Second', 'Computer Science', 2, '', '', 'Member'),
(9, 'Brandon', 'Samaroo', 'Male', '1999-05-05', 1025131, 'brandonsamaroo772@yahoo.com', '658-6773', 'Second', 'Computer Science', 2, '', '', 'Member'),
(10, 'Teekae', 'Jordan', 'Male', NULL, 1024436, 'QuattroTaiga@gmail.com', '617-7287', 'Second', 'Computer Science', 2, '', '', 'Member'),
(11, 'Shemar ', 'Austin', 'Male', '2000-05-13', 1024733, 'shemarbrandon144@gmail.com', '618-5401', 'Second', 'Computer Science', 2, 'She-mar', 'd8790b7e707cdd66dca71f3a9604fa44', 'Member'),
(12, 'Ridwan', 'Azeez', 'Male', '2000-01-26', 1024452, 'ridwan_azeez00@yahoo.ca', '610-3755', 'Second', 'Computer Science', 2, 'Ridwna', '8b1a9953c4611296a827abf8c47804d7', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

DROP TABLE IF EXISTS `user_access`;
CREATE TABLE IF NOT EXISTS `user_access` (
  `UAID` int(11) NOT NULL AUTO_INCREMENT,
  `UserType` varchar(10) NOT NULL,
  `AccessLevel` int(10) NOT NULL,
  PRIMARY KEY (`UAID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`UAID`, `UserType`, `AccessLevel`) VALUES
(1, 'Admin', 1),
(2, 'Member', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
