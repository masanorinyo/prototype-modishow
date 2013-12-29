-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 03:58 PM
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
-- Table structure for table `product_image_rel`
--

CREATE TABLE IF NOT EXISTS `product_image_rel` (
  `product_id` int(11) NOT NULL,
  `productImage_id` int(11) NOT NULL,
  KEY `product_id` (`product_id`),
  KEY `productImage_id` (`productImage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image_rel`
--

INSERT INTO `product_image_rel` (`product_id`, `productImage_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(5, 15),
(6, 16),
(6, 17),
(6, 18),
(7, 19),
(7, 20),
(7, 21),
(8, 22),
(9, 23),
(10, 24),
(10, 25),
(11, 26),
(11, 27),
(11, 28),
(11, 29),
(12, 30),
(12, 31),
(12, 32),
(12, 33),
(13, 34),
(13, 35),
(13, 36),
(13, 37),
(14, 38),
(14, 39),
(15, 40),
(15, 41),
(16, 42),
(16, 43),
(16, 44),
(16, 45),
(17, 46),
(17, 47),
(18, 48),
(18, 49),
(19, 50),
(19, 51),
(20, 52),
(21, 53),
(22, 54),
(23, 55),
(23, 56),
(23, 58),
(23, 59),
(24, 60),
(24, 61),
(24, 62),
(24, 63),
(25, 64),
(25, 65),
(26, 66),
(26, 67),
(27, 68),
(27, 69),
(28, 70),
(29, 71),
(29, 72),
(30, 73),
(30, 74),
(31, 75),
(31, 76),
(32, 77),
(32, 78),
(33, 79),
(33, 80),
(33, 81),
(34, 82),
(34, 83),
(34, 84),
(35, 85),
(35, 86),
(35, 87),
(36, 88),
(36, 89),
(37, 90),
(37, 91),
(38, 92),
(38, 93),
(39, 94),
(39, 95),
(39, 96),
(40, 97),
(40, 98),
(40, 99),
(41, 100),
(41, 101),
(42, 102),
(42, 103),
(43, 104),
(43, 105),
(44, 106),
(44, 107),
(45, 108),
(45, 109),
(45, 110),
(45, 111),
(46, 112),
(46, 113),
(46, 114),
(46, 115),
(47, 116),
(47, 117),
(48, 118),
(48, 119),
(49, 120),
(49, 121),
(50, 122),
(50, 123),
(50, 124),
(50, 125),
(51, 126),
(51, 127),
(52, 128),
(52, 129),
(53, 130),
(53, 131),
(54, 132),
(54, 133),
(55, 134),
(55, 135),
(56, 136),
(56, 137),
(57, 138),
(57, 139),
(58, 140),
(58, 141),
(59, 142),
(59, 143),
(60, 144),
(60, 145),
(61, 146),
(61, 147),
(62, 148),
(62, 149);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_image_rel`
--
ALTER TABLE `product_image_rel`
  ADD CONSTRAINT `product_image_rel_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `product_image_rel_ibfk_2` FOREIGN KEY (`productImage_id`) REFERENCES `product_image` (`productImage_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
