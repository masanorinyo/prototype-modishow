-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 05:41 PM
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
-- Table structure for table `pattern_of_product`
--

CREATE TABLE IF NOT EXISTS `pattern_of_product` (
  `product_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  KEY `pattern_id` (`pattern_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pattern_of_product`
--

INSERT INTO `pattern_of_product` (`product_id`, `pattern_id`) VALUES
(1, 1),
(2, 1),
(3, 9),
(4, 1),
(5, 1),
(6, 1),
(7, 7),
(8, 1),
(9, 9),
(10, 1),
(11, 3),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 13),
(20, 13),
(21, 13),
(22, 13),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 9),
(29, 9),
(30, 1),
(31, 1),
(32, 1),
(33, 9),
(34, 1),
(35, 1),
(35, 4),
(36, 9),
(37, 4),
(37, 1),
(38, 1),
(38, 9),
(39, 1),
(40, 1),
(40, 9),
(41, 1),
(42, 1),
(43, 1),
(43, 4),
(44, 7),
(45, 1),
(46, 7),
(47, 1),
(47, 4),
(48, 1),
(49, 1),
(49, 2),
(50, 1),
(51, 4),
(52, 1),
(53, 1),
(54, 1),
(54, 7),
(55, 1),
(56, 1),
(57, 7),
(58, 1),
(59, 11),
(60, 11),
(61, 11),
(62, 11);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pattern_of_product`
--
ALTER TABLE `pattern_of_product`
  ADD CONSTRAINT `pattern_of_product_ibfk_1` FOREIGN KEY (`pattern_id`) REFERENCES `pattern` (`pattern_id`),
  ADD CONSTRAINT `pattern_of_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
