-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2014 at 12:56 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrix_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `STAFF` varchar(50) NOT NULL,
  PRIMARY KEY (`ADMIN_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `USERNAME`, `PASSWORD`, `STAFF`) VALUES
(1, 'tshegofatso@yahoo.com', 'tshego123@', 'admin'),
(2, 'thabo@gmail.com', 'genetics', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `details_text` text NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `details_text`, `category`) VALUES
(1, 'Huawei', 2999, 'Model :N12352\r\nFeatures : Blutooths/WLAN/4G/16px Camera\r\n1 waranty', 'other'),
(3, 'Samsung S3 mini', 2499, 'Model :N12356\r\nFeatures : Blutooths/WLAN/4G/5px Camera\r\n1 waranty', 'samsung'),
(4, 'Samsung S3', 4999, 'Model :N12310\r\nFeatures : Blutooths/WLAN/4G/8px Camera\r\n1 waranty', 'samsung'),
(5, 'Nokia 920', 4999, 'Model :N12352\r\nFeatures : Blutooths/WLAN/4G/8px Camera\r\n1 waranty', 'nokia'),
(6, 'Nokia 520', 1999, 'Model :N12352\r\nFeatures : Blutooths/WLAN/4G/5px Camera\r\n1 waranty', 'nokia'),
(7, 'blackberry', 2999, 'bluetooth\r\ncamera\r\n3G\r\nHD', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USER_NUM` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `SURNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ID_NUM` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`USER_NUM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_NUM`, `NAME`, `SURNAME`, `ADDRESS`, `EMAIL`, `ID_NUM`, `PASSWORD`) VALUES
(1, 'sibusiso', 'maluleke', '2027 Block GG PTA', 'sbu@gmail.com', '880325544082', 'sbu12'),
(8, 'sbu', 'dsdsdsd', '2027 gg', 'sbu@gmail.com', '9102235444082', '123'),
(9, 'sibusiso', 'dsdsdsd', '2027 gg', 'sbu@gmail.com', '9102235444082', 'vvvv'),
(10, 'monki', 'lol', ':drop', 'lol@hotmail.com', '9102235444082', '123'),
(11, 'sdk', 'sdbsd', '1231534sdbsdjksd', 'ererer@gmail.com', '8602054567852', '258');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
