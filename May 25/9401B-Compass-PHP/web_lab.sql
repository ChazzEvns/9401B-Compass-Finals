-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2019 at 03:20 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(1) NOT NULL AUTO_INCREMENT,
  `room_number` varchar(4) NOT NULL,
  `time_res` varchar(11) NOT NULL,
  `date_res` varchar(10) NOT NULL,
  `purpose` text NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `room_number`, `time_res`, `date_res`, `purpose`, `status`) VALUES
(17, 'D301', '12:00-01:00', '05/10/2019', '', NULL),
(15, 'D301', '12:00-01:00', '05/10/2019', '', NULL),
(16, 'D301', '12:00-01:00', '05/10/2019', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_number` varchar(6) NOT NULL,
  `status` int(15) NOT NULL,
  `time_res` int(11) NOT NULL,
  PRIMARY KEY (`room_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_number` int(10) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_number`, `user_type`, `first_name`, `last_name`, `password`, `email`) VALUES
(2145527, 'Student', 'chad', 'laban', 'test', '2145527@slu.edu.ph'),
(2111111, 'Student', 'Test', 'Testing', 'testing123', 'testing@gmail.com'),
(0, 'admin', 'admin', 'test', 'admin', 'admin@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
