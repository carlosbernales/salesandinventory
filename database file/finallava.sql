-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2023 at 03:09 PM
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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`) VALUES
(9, 'Alcoholic Drinks', '2023-01-12 10:35:40'),
(8, 'Candy', '2023-01-12 10:35:19'),
(7, 'Softdrinks', '2023-01-12 10:35:09'),
(10, 'Cigarette', '2023-01-12 12:07:17');

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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product`, `price`, `quantity`, `cat_name`) VALUES
(39, 'Mentos', '1', '1914', 'Candy'),
(40, 'Gin 1L', '155', '250', 'Alcoholic Drinks');

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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `caty_name`, `s_product`, `s_price`, `s_quantity`, `s_total`, `s_created_at`) VALUES
(25, 'Alcoholic Drinks', 'Gin 1L', '155', '20', '3100', '2023-01-14'),
(24, 'Alcoholic Drinks', 'Gin 1L', '150', '100', '15000', '2023-01-14'),
(22, 'Alcoholic Drinks', 'Red Horse 1L', '120', '4', '480', '2023-01-14'),
(23, 'Alcoholic Drinks', 'Red Horse 1L', '120', '4', '480', '2023-01-14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
