-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 03:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sapana`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
  `id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'iunique id of the building',
  `name` varchar(25) NOT NULL COMMENT 'name of the building',
  `no_of_flats` int(25) NOT NULL COMMENT 'no. of flats in the building',
  `date_created` timestamp NULL DEFAULT NULL COMMENT 'date when the entry was created',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'date when the entry was modified',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `no_of_flats`, `date_created`, `date_modified`) VALUES
(1, 'C4', 16, '2016-05-21 01:59:00', '2016-05-21 01:59:00'),
(2, 'C3', 16, '2016-08-27 00:43:00', '2016-08-27 00:43:00'),
(3, 'C2', 16, '2016-09-24 09:47:00', '2016-09-24 09:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL COMMENT 'name of the donor',
  `amount` decimal(12,2) NOT NULL COMMENT 'amount donated',
  `payment_method` varchar(25) NOT NULL COMMENT 'method of payment 0=cash;1=cheque',
  `date` date NOT NULL COMMENT 'date of donation',
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `expense_bills`
--

CREATE TABLE IF NOT EXISTS `expense_bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_category_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `payment_method` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE IF NOT EXISTS `expense_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `family_members`
--

CREATE TABLE IF NOT EXISTS `family_members` (
  `id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'unique Id of the family members',
  `user_id` int(11) NOT NULL COMMENT 'id from the user table',
  `name` varchar(30) NOT NULL COMMENT 'name of the family member',
  `relation_with_owner` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL COMMENT 'birth date of family member',
  `occupation` varchar(30) NOT NULL COMMENT 'occupation of the family member',
  `gender` varchar(6) NOT NULL COMMENT 'gender of the family member',
  `date_created` timestamp NULL DEFAULT NULL COMMENT 'date when the entry was created',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'date when the entry was modified',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `family_members`
--

INSERT INTO `family_members` (`id`, `user_id`, `name`, `relation_with_owner`, `date_of_birth`, `occupation`, `gender`, `date_created`, `date_modified`) VALUES
(6, 2, 'Fatima ', '', '2016-08-27', 'Housewife', 'male', '2016-08-27 00:53:00', '2016-08-27 00:53:00'),
(7, 2, 'xenio', '', '2016-08-27', 'Student', 'MAle', '2016-08-27 00:54:00', '2016-08-27 00:54:00'),
(8, 3, 'Test', 'Brother', '2016-09-24', 'Student', 'MAle', '2016-09-24 09:59:00', '2016-09-24 09:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE IF NOT EXISTS `flats` (
  `id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'unique Id of the flat/shop',
  `building_id` int(25) NOT NULL COMMENT 'id from the buildings table',
  `name` varchar(25) NOT NULL COMMENT 'name of the flat/shop',
  `floor` varchar(10) NOT NULL COMMENT 'which floor is the flat is located',
  `date_created` timestamp NULL DEFAULT NULL COMMENT 'date when the entry is created',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'date when the entry was modified',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='this table also include details of the shops' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `building_id`, `name`, `floor`, `date_created`, `date_modified`) VALUES
(1, 1, 'g1', 'ground', '2016-05-21 11:22:00', '2016-05-23 08:19:15'),
(2, 2, 'G1', 'Ground', '2016-08-27 00:45:00', '2016-08-27 00:45:00'),
(3, 3, 'G1', 'Ground', '2016-09-24 09:48:00', '2016-09-24 09:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE IF NOT EXISTS `months` (
  `id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'unique Id of the months table ',
  `user_id` int(25) NOT NULL COMMENT 'id from the user table',
  `user_bill_id` int(11) NOT NULL,
  `year` int(25) NOT NULL COMMENT 'year in which payments are done',
  `april` int(1) NOT NULL,
  `may` int(1) NOT NULL,
  `june` int(1) NOT NULL,
  `july` int(1) NOT NULL,
  `august` int(25) NOT NULL,
  `september` int(25) NOT NULL,
  `october` int(25) NOT NULL,
  `november` int(25) NOT NULL,
  `december` int(25) NOT NULL,
  `january` int(25) NOT NULL,
  `february` int(25) NOT NULL,
  `march` int(25) NOT NULL,
  `date_created` timestamp NULL DEFAULT NULL COMMENT 'date when entry was created',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'date when entry was modified',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `user_id`, `user_bill_id`, `year`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`, `january`, `february`, `march`, `date_created`, `date_modified`) VALUES
(1, 3, 1, 2016, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2016-09-28 14:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `building_id` int(10) NOT NULL,
  `flat_id` int(25) NOT NULL COMMENT 'id from the flat table',
  `owner_name` char(50) NOT NULL DEFAULT '',
  `owner_email` char(40) NOT NULL DEFAULT '',
  `date_of_birth` date NOT NULL COMMENT 'Birth date of the Owner ',
  `phno` int(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `join_date` date NOT NULL COMMENT 'date when the flat was bought',
  `leaving_date` date NOT NULL COMMENT 'date when the owner leaves/sells the flat',
  `date_created` timestamp NULL DEFAULT NULL COMMENT 'date when the entry was created',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'date when the entry was modified',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `phno` (`phno`),
  KEY `user_login_key` (`username`),
  KEY `user_nicename` (`owner_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `building_id`, `flat_id`, `owner_name`, `owner_email`, `date_of_birth`, `phno`, `gender`, `occupation`, `username`, `password`, `user_status`, `join_date`, `leaving_date`, `date_created`, `date_modified`) VALUES
(2, 1, 1, 'Simon', 'sim@gmai.com', '2016-05-23', 2147483647, 'male', 'worker', 'sim', 'sim123', 1, '2016-05-23', '2016-05-23', '2016-05-23 04:49:00', '2016-05-23 04:49:00'),
(3, 2, 2, 'Krishna Naik', 'kri@gmail.com', '1996-03-27', 1234567890, 'Male', 'Worker', 'kri', 'kri123', 1, '2016-08-27', '2016-08-27', '2016-08-27 00:45:00', '2016-08-27 00:45:00'),
(4, 1, 1, 'Xavier', 'kri@gmail.com', '2016-09-24', 2123123123, 'Male', 'Worker', '1@gmail.co', '123456', 1, '2016-09-24', '2016-09-24', '2016-09-24 09:48:00', '2016-09-24 09:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_bills`
--

CREATE TABLE IF NOT EXISTS `user_bills` (
  `id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'unique Id of the user bills',
  `user_id` int(25) NOT NULL COMMENT 'id from the user table',
  `name` char(30) NOT NULL COMMENT 'name of the user who pays the bills',
  `ammount` int(100) NOT NULL COMMENT 'ammount paid by the user',
  `payment_method` varchar(20) NOT NULL COMMENT 'method by which user pays the bill...0=cash, 1=cheque.',
  `date` date NOT NULL COMMENT 'date when the user pays the bill',
  `payment_for` text NOT NULL COMMENT 'why the payment is made by the user....0=maintainance,1=other',
  `description` varchar(100) NOT NULL COMMENT 'why the payment is made ',
  `date_created` timestamp NULL DEFAULT NULL COMMENT 'date when the entry was created',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'date when the entry was modified',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_bills`
--

INSERT INTO `user_bills` (`id`, `user_id`, `name`, `ammount`, `payment_method`, `date`, `payment_for`, `description`, `date_created`, `date_modified`) VALUES
(1, 3, '', 12345, 'cash', '2016-09-28', 'wefg', 'dafdsvv', '2016-09-28 10:58:00', '2016-09-28 10:58:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
