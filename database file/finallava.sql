-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2023 at 01:50 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finallava`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$04$3Lf4CSRl2buB6rdY1.32LuwRpRVD68mU4gA8s1Up9bSJVAm68E/oC');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`) VALUES
(9, 'Alcoholic Drinks', '2023-01-12 10:35:40'),
(8, 'Candy', '2023-01-12 10:35:19'),
(7, 'Softdrinks', '2023-01-12 10:35:09'),
(10, 'Cigarette', '2023-01-12 12:07:17'),
(40, 'Soap', '2023-01-15 09:57:39'),
(39, 'Silver Swan', '2023-01-15 00:28:46'),
(46, 'Milk', '2023-01-25 16:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product`, `price`, `quantity`, `cat_name`) VALUES
(44, 'Sprite', '18', '15', 'Softdrinks'),
(43, 'Coke', '15', '20', 'Softdrinks'),
(65, 'Safeguard', '12', '4', 'Soap'),
(61, 'Gin 1L', '155', '15', 'Alcoholic Drinks'),
(62, 'Gin 750ml', '120', '13', 'Alcoholic Drinks'),
(63, 'Red Horse 1L', '120', '200', 'Alcoholic Drinks'),
(48, 'Toyo', '14', '240', 'Silver Swan'),
(49, 'Suka', '15', '245', 'Silver Swan'),
(67, 'Bearbrand', '10', '45', 'Milk');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caty_name` varchar(100) NOT NULL,
  `s_product` varchar(100) NOT NULL,
  `s_price` varchar(255) NOT NULL,
  `s_quantity` varchar(255) NOT NULL,
  `s_total` varchar(255) NOT NULL,
  `s_created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `caty_name`, `s_product`, `s_price`, `s_quantity`, `s_total`, `s_created_at`) VALUES
(25, 'Alcoholic Drinks', 'Gin 1L', '155', '20', '3100', '2023-01-14'),
(24, 'Alcoholic Drinks', 'Gin 1L', '150', '100', '15000', '2023-01-14'),
(22, 'Alcoholic Drinks', 'Red Horse 1L', '120', '4', '480', '2023-01-14'),
(23, 'Alcoholic Drinks', 'Red Horse 1L', '120', '4', '480', '2023-01-14'),
(26, 'Candy', 'Mentos', '1', '200', '200', '2023-01-12'),
(27, 'Candy', 'Mentos', '1', '14', '14', '2023-01-13'),
(28, 'Alcoholic Drinks', 'Gin 1L', '155', '5', '775', '2023-01-15'),
(29, 'Alcoholic Drinks', 'Red Horse 500ml', '60', '60', '3600', '2023-01-15'),
(30, 'Softdrinks', 'Sprite', '18', '6', '108', '2023-01-15'),
(31, 'Alcoholic Drinks', 'Gin 1L', '155', '5', '775', '2023-01-15'),
(32, 'Silver Swan', 'Suka', '15', '70', '1050', '2023-01-15'),
(33, 'Softdrinks', 'Sprite', '18', '4', '72', '2023-01-15'),
(34, 'Softdrinks', 'Coke', '15', '5', '75', '2023-01-13'),
(36, 'Silver Swan', 'Toyo', '15', '50', '750', '2023-01-15'),
(37, 'Silver Swan', 'Toyo', '15', '50', '750', '2023-01-15'),
(38, 'Silver Swan', 'Toyo', '15', '2', '30', '2023-01-15'),
(39, 'Softdrinks', 'Sprite', '18', '95', '1710', '2023-01-11'),
(40, 'Softdrinks', 'Sprite', '18', '50', '900', '2023-01-11'),
(41, 'Alcoholic Drinks', 'Red Horse 1L', '120', '300', '36000', '2023-01-15'),
(42, 'Alcoholic Drinks', 'Red Horse 500ml', '65', '16', '1040', '2023-01-16'),
(43, 'Alcoholic Drinks', 'Red Horse 500ml', '65', '35', '2275', '2023-01-17'),
(44, 'Alcoholic Drinks', 'Red Horse 500ml', '65', '25', '1625', '2023-01-17'),
(45, 'Alcoholic Drinks', 'Red Horse 500ml', '65', '5', '325', '2023-01-18'),
(46, 'Alcoholic Drinks', 'Red Horse 1L', '120', '10', '1200', '2023-01-18'),
(47, 'Alcoholic Drinks', 'Red Horse 500ml', '60', '20', '1200', '2023-01-19'),
(48, 'Alcoholic Drinks', 'Red Horse 500ml', '60', '5', '300', '2023-01-20'),
(49, 'Alcoholic Drinks', 'Red Horse 1L', '120', '20', '2400', '2023-01-20'),
(50, 'Alcoholic Drinks', 'Red Horse 1L', '120', '50', '6000', '2023-01-21'),
(51, 'Silver Swan', 'Toyo', '14', '5', '70', '2023-01-25'),
(52, 'Milk', 'Bearbrand', '10', '10', '100', '2023-01-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
