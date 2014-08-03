-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2014 at 10:58 AM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nowcontact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `phone`, `email`, `facebook`, `twitter`, `website`, `about`, `user_id`) VALUES
(3, 'Ridwan Bejo', '085759991234', 'ridwanbejos@gmail.com', 'http://facebook.com/ridwanbejo', '@ridwanbejo', 'http://ridwanbejo.com', 'aku adalah ridwanbejo', 1),
(4, 'Ridwan Fajar', '085671231412', 'ridwanfajar@yahoo.com', 'http://facebook.com/ridwanfajar', '@ridwanfajar', 'http://ridwanfajar.com', 'saya adalah ridwan fajar', 1),
(5, 'Suparman', '086712341234', 'supar.man@gmail.com', 'http://facebook.com/suparman', '@suparman', 'http://suparman.com', 'aku adalah suparman', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
