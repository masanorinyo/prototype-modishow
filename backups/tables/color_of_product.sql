-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 04:20 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ModiShow`
--

-- --------------------------------------------------------

--
-- Table structure for table `color_of_product`
--

CREATE TABLE IF NOT EXISTS `color_of_product` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`color_id`),
  KEY `color_id` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_of_product`
--

INSERT INTO `color_of_product` (`product_id`, `color_id`) VALUES
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(17, 1),
(23, 1),
(24, 1),
(25, 1),
(28, 1),
(33, 1),
(35, 1),
(36, 1),
(37, 1),
(39, 1),
(40, 1),
(44, 1),
(49, 1),
(51, 1),
(52, 1),
(55, 1),
(59, 1),
(62, 1),
(1, 2),
(4, 2),
(8, 2),
(9, 2),
(11, 2),
(28, 2),
(33, 2),
(34, 2),
(36, 2),
(47, 2),
(53, 2),
(54, 2),
(56, 2),
(58, 2),
(60, 2),
(9, 3),
(11, 3),
(17, 3),
(26, 3),
(28, 3),
(29, 3),
(32, 3),
(43, 4),
(15, 5),
(18, 5),
(50, 5),
(3, 6),
(48, 6),
(3, 7),
(5, 7),
(6, 7),
(7, 7),
(27, 7),
(29, 7),
(30, 7),
(35, 7),
(45, 7),
(49, 7),
(57, 7),
(59, 7),
(61, 7),
(62, 7),
(2, 8),
(10, 8),
(14, 8),
(29, 8),
(41, 8),
(43, 8),
(40, 9),
(60, 9),
(38, 10),
(51, 10),
(16, 11),
(29, 11),
(31, 11),
(33, 11),
(36, 11),
(42, 11),
(43, 11),
(59, 11),
(60, 11),
(62, 11),
(46, 14),
(61, 14),
(19, 15),
(20, 15),
(21, 15),
(22, 15);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `color_of_product`
--
ALTER TABLE `color_of_product`
  ADD CONSTRAINT `color_of_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `color_of_product_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
