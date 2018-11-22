-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 01:48 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `user_pass`) VALUES
('samridhi', 'samridhi'),
('raman', 'raman');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`name`, `email`, `phone`, `purpose`, `id`) VALUES
('samridhi soni', 'samridhisoni700@gmail.com', 2147483647, 'buy', 2),
('', '', 0, '', 0),
('chitra', '', 0, '', 0),
('Ayushi Raj', 'samridhisoni700@gmail.com', 2147483647, 'buy', 2),
('samridhi', 'samridhisoni700@gmail.com', 2147483647, 'buy', 2),
('hjwjf', 'samridhisoni700@gmail.com', 0, '', 0),
('samridhi soni', 'samridhisoni700@gmail.com', 0, '', 0),
('samridhi soni', 'samridhisoni700@gmail.com', 0, '', 0),
('samridhi soni', 'samridhisoni700@gmail.com', 0, '', 0),
('samridhi soni', 'samridhisoni700@gmail.com', 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `passr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`username`, `email`, `pass`, `passr`) VALUES
('samridhi', 'samridhisoni700@gmail.com', 'sam', 'sam');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id` int(100) NOT NULL,
  `propertytype` varchar(100) NOT NULL,
  `cityid` varchar(100) NOT NULL,
  `bedrooms` varchar(100) NOT NULL,
  `bathcount` varchar(100) NOT NULL,
  `minlistprice` varchar(100) NOT NULL,
  `maxlistprice` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `image` varchar(700) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `propertytype`, `cityid`, `bedrooms`, `bathcount`, `minlistprice`, `maxlistprice`, `purpose`, `image`) VALUES
(0, 'MH', 'Aventura', '3', '1', '500000', '3000000', '', '26.jpg'),
(1, 'SFR', 'Bal Harbour', '2', '1', '400000', '900000', 'sell', '26.jpg'),
(2, 'RI', 'Gulf Stream', '2', '1', '200000', '700000', 'sell', '3.jpg'),
(3, 'RI', 'Hutchinson Island', '2', '1', '1000000', '3000000', 'sell', '30.jpg');
