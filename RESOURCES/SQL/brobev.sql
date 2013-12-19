-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2013 at 04:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brobev`
--

-- --------------------------------------------------------

--
-- Table structure for table `schwinncomplogs`
--

CREATE TABLE IF NOT EXISTS `schwinncomplogs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Cellphone_Number` text NOT NULL,
  `Date_of_birth` text NOT NULL,
  `What_is_your_favourite_flavour` text NOT NULL,
  `Where_did_you_buy_your_Rooibos_Frutea` text NOT NULL,
  `Name_one_unique_feature_of_Rooibos_Frutea` text NOT NULL,
  `Date` text NOT NULL,
  `Unix` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schwinncomplogs`
--

INSERT INTO `schwinncomplogs` (`ID`, `Name`, `Email`, `Cellphone_Number`, `Date_of_birth`, `What_is_your_favourite_flavour`, `Where_did_you_buy_your_Rooibos_Frutea`, `Name_one_unique_feature_of_Rooibos_Frutea`, `Date`, `Unix`) VALUES
(1, 'Kyle', 'kyle@fishgate.co.za', '0723806063', '16/03/1989', 'Peach', 'Engen', 'Sugar free', '18-12-2013', '1387378816');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
