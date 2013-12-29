-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 05:16 PM
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
-- Table structure for table `material_of_product`
--

CREATE TABLE IF NOT EXISTS `material_of_product` (
  `product_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  PRIMARY KEY (`material_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_of_product`
--

INSERT INTO `material_of_product` (`product_id`, `material_id`) VALUES
(1, 10),
(2, 6),
(3, 2),
(4, 6),
(5, 6),
(6, 2),
(7, 2),
(8, 4),
(9, 2),
(10, 4),
(11, 2),
(12, 2),
(13, 6),
(14, 6),
(15, 6),
(16, 4),
(17, 5),
(18, 5),
(19, 11),
(20, 11),
(21, 11),
(22, 11),
(23, 6),
(24, 2),
(25, 1),
(26, 1),
(27, 8),
(28, 2),
(29, 2),
(30, 4),
(31, 4),
(32, 5),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 5),
(38, 6),
(39, 6),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 4),
(46, 6),
(47, 5),
(48, 2),
(49, 2),
(50, 2),
(51, 5),
(52, 6),
(53, 2),
(54, 6),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `material_of_product`
--
ALTER TABLE `material_of_product`
  ADD CONSTRAINT `material_of_product_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`),
  ADD CONSTRAINT `material_of_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
