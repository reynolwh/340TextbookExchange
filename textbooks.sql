-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2012 at 08:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `textbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `textbooks`
--

CREATE TABLE IF NOT EXISTS `textbooks` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `Condition` enum('Like New','Good','Acceptable','Poor') NOT NULL DEFAULT 'Acceptable',
  `Price` varchar(8) NOT NULL,
  `User ID` int(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `User ID` (`User ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `textbooks`
--


-- --------------------------------------------------------

--
-- Table structure for table `user id`
--

CREATE TABLE IF NOT EXISTS `user id` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  UNIQUE KEY `ID` (`ID`,`Email`,`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user id`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `textbooks`
--
ALTER TABLE `textbooks`
  ADD CONSTRAINT `textbooks_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `user id` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
