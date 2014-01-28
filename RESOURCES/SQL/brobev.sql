-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2014 at 12:39 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brobev`
--
CREATE DATABASE IF NOT EXISTS `brobev` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `brobev`;

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
  `I_wish_to_receive_info_via_email` text NOT NULL,
  `Date` text NOT NULL,
  `Unix` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `schwinncomplogs`
--

INSERT INTO `schwinncomplogs` (`ID`, `Name`, `Email`, `Cellphone_Number`, `Date_of_birth`, `What_is_your_favourite_flavour`, `Where_did_you_buy_your_Rooibos_Frutea`, `Name_one_unique_feature_of_Rooibos_Frutea`, `I_wish_to_receive_info_via_email`, `Date`, `Unix`) VALUES
(1, 'Kyle', 'kyle@fishgate.co.za', '0723806063', '16/03/1989', 'Peach', 'Engen', 'Sugar free', '', '18-12-2013', '1387378816'),
(2, 'test1', 'test1@test1.com', '123', '28/01/2014', 'test1', 'test1', 'test1', '', '28-01-2014', '1390908614'),
(3, 'test2', 'test2@test2.com', '123', '28/01/2014', 'test2', 'test2', 'test2', '1', '28-01-2014', '1390908948'),
(4, 'test3', 'test3@test3.com', '123', '28/01/2014', 'test3', 'test3', 'test3', '0', '28-01-2014', '1390908974');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
