-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2012 at 04:14 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jmutextbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `textbooks`
--

CREATE TABLE IF NOT EXISTS `textbooks` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `BookCondition` enum('Like New','Good','Acceptable','Poor') NOT NULL DEFAULT 'Acceptable',
  `Price` varchar(8) NOT NULL,
  `userID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `textbooks`
--

INSERT INTO `textbooks` (`ID`, `Title`, `ISBN`, `BookCondition`, `Price`, `userID`) VALUES
(1, 'Operations and Supply Chain Management', '1234567890123', 'Good', '80.00', 2),
(2, 'Philosophy of the United States', '3210987654321', 'Good', '20.00', 1),
(4, 'Intro to Environmental Science and Engineering', '0000000000000', 'Good', '70.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `firstname`, `lastname`) VALUES
(1, 'whetzejs@dukes.jmu.edu', '0d107d09f5bbe40cade3de5c71e9e9b7', 'Jason', 'Whetzel'),
(2, 'reynolwh@dukes.jmu.edu', '0d107d09f5bbe40cade3de5c71e9e9b7', 'Wade', 'Reynolds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
