-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2014 at 07:05 AM
-- Server version: 5.6.15
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
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) DEFAULT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  `edited_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`brand_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`, `url`, `added_date`, `added_time`, `edited_time`) VALUES
(1, 'ModiShow ', 'ModiShow.com', '2013-12-27', '12:24:43', '2013-12-27 17:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `main_category` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sub_category` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  KEY `sub_category` (`sub_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `main_category`, `sub_category`) VALUES
(1, 'style', 'active'),
(2, 'style', 'Basic '),
(3, 'style', 'business_casual'),
(4, 'style', 'bohemian'),
(5, 'style', 'casual'),
(6, 'style', 'classic'),
(7, 'style', 'celebrity'),
(8, 'style', 'comfortable'),
(9, 'style', 'cute'),
(10, 'style', 'elegant'),
(11, 'style', 'formal'),
(12, 'style', 'goth'),
(13, 'style', 'preppy'),
(14, 'style', 'punk'),
(15, 'style', 'sexy'),
(16, 'style', 'runway'),
(17, 'style', 'swimwear'),
(18, 'style', 'vintage'),
(19, 'occasion', 'casual_date'),
(20, 'occasion', 'classy_date'),
(21, 'occasion', 'everyday'),
(22, 'occasion', 'formal_events'),
(23, 'occasion', 'night_out'),
(24, 'occasion', 'outdoor_activities'),
(25, 'occasion', 'work'),
(26, 'season', 'spring'),
(27, 'season', 'winter'),
(28, 'season', 'fall'),
(29, 'season', 'summer'),
(30, 'season', 'midSpring'),
(31, 'season', 'midFall'),
(32, 'weather', 'warm'),
(33, 'weather', 'cold'),
(34, 'weather', 'freezing'),
(35, 'weather', 'raining'),
(36, 'weather', 'hot'),
(37, 'weather', 'snowing'),
(38, 'weather', 'tropical '),
(39, 'featured', '');

-- --------------------------------------------------------

--
-- Table structure for table `clothing_type`
--

CREATE TABLE IF NOT EXISTS `clothing_type` (
  `clothingType_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `main_category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `sub_sub_category` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`clothingType_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `clothing_type`
--

INSERT INTO `clothing_type` (`clothingType_id`, `main_category`, `sub_category`, `sub_sub_category`) VALUES
(1, 'clothing', 'dress', 'day'),
(2, 'clothing', 'dress', 'cocktail'),
(3, 'clothing', 'dress', 'gown'),
(4, 'clothing', 'skirt', 'mini'),
(5, 'clothing', 'skirt', 'knee length'),
(6, 'clothing', 'skirt', 'long'),
(7, 'clothing', 'top', 'blouse'),
(8, 'clothing', 'top', 'cardigan'),
(9, 'clothing', 'top', 'sweater'),
(10, 'clothing', 'top', 'sweatshirt_hoody'),
(11, 'clothing', 'top', 'tank'),
(12, 'clothing', 'top', 'tshirt'),
(13, 'clothing', 'top', 'tunic'),
(14, 'clothing', 'outerwear', 'coat'),
(15, 'clothing', 'outerwear', 'jacket'),
(16, 'clothing', 'outerwear', 'vest'),
(17, 'clothing', 'jeans', 'bootcut'),
(18, 'clothing', 'jeans', 'boyfriend'),
(19, 'clothing', 'jeans', 'flared'),
(20, 'clothing', 'jeans', 'skinny'),
(21, 'clothing', 'jeans', 'straight_leg'),
(22, 'clothing', 'pants', 'capri_cropped'),
(23, 'clothing', 'pants', 'legging'),
(24, 'clothing', 'shorts', NULL),
(25, 'clothing', 'jumpsuit_romper', 'jumpsuit'),
(26, 'clothing', 'jumpsuit_romper', 'romper'),
(27, 'clothing', 'intimates', 'bra'),
(28, 'clothing', 'intimates', 'camisole'),
(29, 'clothing', 'intimates', 'chemise'),
(30, 'clothing', 'intimates', 'hosiery'),
(31, 'clothing', 'intimates', 'sleepwear'),
(32, 'clothing', 'intimates', 'sleepwear'),
(33, 'clothing', 'intimates', 'panty_thong'),
(34, 'clothing', 'intimates', 'robe'),
(35, 'clothing', 'intimates', 'shapewear'),
(36, 'clothing', 'swimwear', 'bikini'),
(37, 'clothing', 'swimwear', 'one_piece'),
(38, 'clothing', 'swimwear', 'cover_up'),
(39, 'clothing', 'activewear', 'jacket'),
(40, 'clothing', 'activewear', 'pant'),
(41, 'clothing', 'activewear', 'shorts'),
(42, 'clothing', 'activewear', 'skirt'),
(43, 'clothing', 'activewear', 'sports_bra'),
(44, 'clothing ', 'activewear', 'tank_top'),
(45, 'clothing', 'activewear', 'top'),
(46, 'accessories', 'bag', 'backpack'),
(47, 'accessories', 'bag', 'handbag'),
(48, 'accessories', 'bag', 'messenger_bag'),
(49, 'accessories', 'bag', 'wallet'),
(50, 'shoes', 'athletic', NULL),
(51, 'shoes', 'boots', NULL),
(52, 'shoes', 'clogs', NULL),
(53, 'shoes', 'flats', NULL),
(54, 'shoes', 'loafers_moccasins', NULL),
(55, 'shoes', 'oxfords', NULL),
(56, 'shoes', 'pumps', NULL),
(57, 'shoes', 'sandals', NULL),
(58, 'shoes', 'sneakers', NULL),
(59, 'accessories', 'jewelry', 'bracelets_bangle'),
(60, 'accessories', 'jewelry', 'brooche'),
(61, 'accessories', 'jewelry', 'charm_pendant'),
(62, 'accessories', 'jewelry', 'earring'),
(63, 'accessories', 'jewelry', 'necklace'),
(64, 'accessories', 'jewelry', 'ring'),
(65, 'accessories', 'jewelry', 'watch'),
(66, 'accessories', 'belt', NULL),
(67, 'accessories', 'eyewear', 'eyeglasses'),
(68, 'accessories', 'eyewear', 'sunglasses'),
(69, 'accessories', 'gloves', NULL),
(70, 'accessories', 'hair_accessories', NULL),
(71, 'accessories', 'hats', NULL),
(72, 'accessories', 'scarves', NULL),
(73, 'accessories', 'tech', NULL),
(74, 'accessories', 'umbrellas', NULL),
(75, 'Accessories', 'others', 'funny');

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--

CREATE TABLE IF NOT EXISTS `collage` (
  `collage_id` int(11) NOT NULL AUTO_INCREMENT,
  `default_filename` text NOT NULL,
  `m_size_filename` text NOT NULL,
  PRIMARY KEY (`collage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `collage`
--

INSERT INTO `collage` (`collage_id`, `default_filename`, `m_size_filename`) VALUES
(1, 'cap19p20p26p49.jpg', 'cap19p20p26p49_sml.jpg'),
(2, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(3, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(4, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(5, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(6, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(7, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(8, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(9, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(10, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(11, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(12, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(13, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(14, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(15, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(16, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(17, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(18, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(19, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(20, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(21, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(22, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(23, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(24, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(25, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(26, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(27, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(28, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(29, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(30, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(31, 'cap38p39p40p53.jpg', 'cap38p39p40p53_sml.jpg'),
(32, 'cap1p11p27.jpg', 'cap1p11p27_sml.jpg'),
(33, 'cap1p23p24p26.jpg', 'cap1p23p24p26_sml.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `collage_misc_rel`
--

CREATE TABLE IF NOT EXISTS `collage_misc_rel` (
  `misc_id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `z_index` tinyint(4) unsigned NOT NULL,
  `x_position` tinyint(4) NOT NULL,
  `y_position` tinyint(4) NOT NULL,
  `width` tinyint(4) unsigned NOT NULL,
  `height` tinyint(4) unsigned NOT NULL,
  `angle` decimal(5,1) NOT NULL,
  PRIMARY KEY (`misc_id`,`collage_id`),
  KEY `collage_id` (`collage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `name`) VALUES
(1, 'white'),
(2, 'black'),
(3, 'grey'),
(4, 'blown'),
(5, 'beige'),
(6, 'green'),
(7, 'blue'),
(8, 'purple'),
(9, 'yellow'),
(10, 'pink'),
(11, 'red'),
(12, 'orange'),
(13, 'silver'),
(14, 'gold'),
(15, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `color_in_style`
--

CREATE TABLE IF NOT EXISTS `color_in_style` (
  `color_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  KEY `color_id` (`color_id`),
  KEY `style_id` (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  `contents` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  `edited_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `style_id` (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `favorited_product`
--

CREATE TABLE IF NOT EXISTS `favorited_product` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  PRIMARY KEY (`product_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorited_style`
--

CREATE TABLE IF NOT EXISTS `favorited_style` (
  `user_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  PRIMARY KEY (`user_id`,`style_id`),
  KEY `style_id` (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE IF NOT EXISTS `follower` (
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `follower_id` (`follower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items_uploaded_by_user`
--

CREATE TABLE IF NOT EXISTS `items_uploaded_by_user` (
  `user_id` int(11) NOT NULL,
  `uploadedItems_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`uploadedItems_id`),
  KEY `uploadedItems_id` (`uploadedItems_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`material_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `name`) VALUES
(1, 'chino'),
(3, 'corduroy'),
(2, 'cotton'),
(8, 'jersey'),
(10, 'leather'),
(5, 'linen'),
(6, 'nylon'),
(11, 'others'),
(9, 'stretch'),
(7, 'sweat'),
(4, 'wool');

-- --------------------------------------------------------

--
-- Table structure for table `material_in_style`
--

CREATE TABLE IF NOT EXISTS `material_in_style` (
  `material_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  KEY `material_id` (`material_id`),
  KEY `style_id` (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `misc`
--

CREATE TABLE IF NOT EXISTS `misc` (
  `misc_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_category` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sub_category` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `default_filename` varchar(100) NOT NULL,
  `m_size_filename` varchar(100) DEFAULT NULL,
  `edited_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`misc_id`),
  KEY `main_category` (`main_category`),
  KEY `name` (`name`),
  KEY `sub_category` (`sub_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `misc`
--

INSERT INTO `misc` (`misc_id`, `main_category`, `sub_category`, `name`, `default_filename`, `m_size_filename`, `edited_time`) VALUES
(1, 'background', NULL, 'default_background', 'background_1.png', NULL, '2013-12-27 20:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `modelFace_id` int(11) NOT NULL,
  `modelLegs_id` int(11) NOT NULL,
  `modelTorso_id` int(11) NOT NULL,
  `modelArms_id` int(11) NOT NULL,
  `modelHair_id` int(11) NOT NULL,
  PRIMARY KEY (`model_id`),
  KEY `modelFace_id` (`modelFace_id`),
  KEY `modelTorso_id` (`modelTorso_id`),
  KEY `modelLegs_id` (`modelLegs_id`),
  KEY `modelArms_id` (`modelArms_id`),
  KEY `modelHair_id` (`modelHair_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `modelFace_id`, `modelLegs_id`, `modelTorso_id`, `modelArms_id`, `modelHair_id`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_arms`
--

CREATE TABLE IF NOT EXISTS `model_arms` (
  `modelArms_id` int(11) NOT NULL AUTO_INCREMENT,
  `sex` char(1) NOT NULL,
  `width` tinyint(3) DEFAULT NULL,
  `pose` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `skin_color` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_filename` varchar(255) NOT NULL,
  PRIMARY KEY (`modelArms_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `model_arms`
--

INSERT INTO `model_arms` (`modelArms_id`, `sex`, `width`, `pose`, `skin_color`, `default_filename`) VALUES
(1, 'f', NULL, NULL, NULL, 'arms_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `model_face`
--

CREATE TABLE IF NOT EXISTS `model_face` (
  `modelFace_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skin_color` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_filename` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `expression` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(1) NOT NULL,
  PRIMARY KEY (`modelFace_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `model_face`
--

INSERT INTO `model_face` (`modelFace_id`, `name`, `skin_color`, `default_filename`, `thumbnail`, `expression`, `sex`) VALUES
(1, 'natasha', NULL, 'face_natasha.png', 'natasha_thumbnail.png', 'normal', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `model_hair`
--

CREATE TABLE IF NOT EXISTS `model_hair` (
  `modelHair_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `default_filename` varchar(100) NOT NULL,
  `sex` char(1) NOT NULL,
  PRIMARY KEY (`modelHair_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `model_hair`
--

INSERT INTO `model_hair` (`modelHair_id`, `name`, `color`, `default_filename`, `sex`) VALUES
(1, 'long', 'dark red', 'hair_1.png', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `model_legs`
--

CREATE TABLE IF NOT EXISTS `model_legs` (
  `modelLegs_id` int(11) NOT NULL AUTO_INCREMENT,
  `inseam` tinyint(3) DEFAULT NULL,
  `waist` tinyint(3) DEFAULT NULL,
  `skin_color` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_filename` varchar(100) NOT NULL,
  `pose` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hip` tinyint(3) DEFAULT NULL,
  `sex` char(1) NOT NULL,
  PRIMARY KEY (`modelLegs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `model_legs`
--

INSERT INTO `model_legs` (`modelLegs_id`, `inseam`, `waist`, `skin_color`, `default_filename`, `pose`, `hip`, `sex`) VALUES
(1, NULL, NULL, NULL, 'legs_1.png', NULL, NULL, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `model_shadow`
--

CREATE TABLE IF NOT EXISTS `model_shadow` (
  `modelShadow_id` int(11) NOT NULL AUTO_INCREMENT,
  `pose` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`modelShadow_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `model_shadow`
--

INSERT INTO `model_shadow` (`modelShadow_id`, `pose`, `default_filename`, `sex`) VALUES
(1, NULL, 'shadow_1.png', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `model_torso`
--

CREATE TABLE IF NOT EXISTS `model_torso` (
  `modelTorso_id` int(11) NOT NULL AUTO_INCREMENT,
  `length` tinyint(3) DEFAULT NULL,
  `waist` tinyint(3) DEFAULT NULL,
  `skin_color` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pose` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_filename` varchar(100) NOT NULL,
  `chest_bust` tinyint(3) DEFAULT NULL,
  `sex` char(1) NOT NULL,
  PRIMARY KEY (`modelTorso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `model_torso`
--

INSERT INTO `model_torso` (`modelTorso_id`, `length`, `waist`, `skin_color`, `pose`, `default_filename`, `chest_bust`, `sex`) VALUES
(1, NULL, NULL, NULL, NULL, 'torso_1.png', NULL, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL DEFAULT '0',
  `style_id` int(11) NOT NULL DEFAULT '0',
  `follower_id` int(11) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL,
  `added_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`comment_id`,`style_id`,`follower_id`),
  KEY `comment_id` (`comment_id`),
  KEY `style_id` (`style_id`),
  KEY `follower_id` (`follower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outfitOnModel_misc_rel`
--

CREATE TABLE IF NOT EXISTS `outfitOnModel_misc_rel` (
  `outfitOnModel_id` int(11) NOT NULL,
  `misc_id` int(11) NOT NULL,
  `z_index` tinyint(4) unsigned NOT NULL,
  `x_position` tinyint(4) NOT NULL,
  `y_position` tinyint(4) NOT NULL,
  `width` tinyint(4) unsigned NOT NULL,
  `height` tinyint(4) unsigned NOT NULL,
  `angle` decimal(5,1) NOT NULL,
  PRIMARY KEY (`outfitOnModel_id`,`misc_id`),
  KEY `misc_id` (`misc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outfit_on_model`
--

CREATE TABLE IF NOT EXISTS `outfit_on_model` (
  `outfitOnModel_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `default_filename` text NOT NULL,
  `m_size_filename` text NOT NULL,
  PRIMARY KEY (`outfitOnModel_id`),
  KEY `model_id` (`model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `outfit_on_model`
--

INSERT INTO `outfit_on_model` (`outfitOnModel_id`, `model_id`, `default_filename`, `m_size_filename`) VALUES
(1, 1, 'mp10p56p61p48.jpg', 'mp10p56p61p48_sml.jpg'),
(2, 1, 'mp10p56p61p48.jpg', 'mp10p56p61p48_sml.jpg'),
(3, 1, 'mp24p10p56p42.jpg', 'mp24p10p56p42_sml.jpg'),
(4, 1, 'mp56p24p10p60.jpg', 'mp56p24p10p60_sml.jpg'),
(5, 1, 'mp39p38p40.jpg', 'mp39p38p40_sml.jpg'),
(6, 1, 'mp40p39p38.jpg', 'mp40p39p38_sml.jpg'),
(8, 1, 'mp40p39p38p30.jpg', 'mp40p39p38p30_sml.jpg'),
(9, 1, 'mp32p40p39p38.jpg', 'mp32p40p39p38_sml.jpg'),
(10, 1, 'mp40p39p38p31.jpg', 'mp40p39p38p31_sml.jpg'),
(11, 1, 'mp40p31p24.jpg', 'mp40p31p24_sml.jpg'),
(12, 1, 'mp39p38p40p45p50p47.jpg', 'mp39p38p40p45p50p47_sml.jpg'),
(13, 1, 'mp40p7p1.jpg', 'mp40p7p1_sml.jpg'),
(14, 1, 'mp20p19p8.jpg', 'mp20p19p8_sml.jpg'),
(15, 1, 'mp39p40p58p62.jpg', 'mp39p40p58p62_sml.jpg'),
(16, 1, 'mp45p10p56p48.jpg', 'mp45p10p56p48_sml.jpg'),
(17, 1, 'mp40p39p19p20p21.jpg', 'mp40p39p19p20p21_sml.jpg'),
(18, 1, 'mp39p30p13.jpg', 'mp39p30p13_sml.jpg'),
(19, 1, 'mp39p24p13.jpg', 'mp39p24p13_sml.jpg'),
(20, 1, 'mp39p31p11.jpg', 'mp39p31p11_sml.jpg'),
(21, 1, 'mp27p30p38.jpg', 'mp27p30p38_sml.jpg'),
(22, 1, 'mp30p19p21.jpg', 'mp30p19p21_sml.jpg'),
(23, 1, 'mp27p31p13.jpg', 'mp27p31p13_sml.jpg'),
(24, 1, 'mp31p40p39p38.jpg', 'mp31p40p39p38_sml.jpg'),
(25, 1, 'mp40p39p38p26.jpg', 'mp40p39p38p26_sml.jpg'),
(26, 1, 'mp40p39p38p13.jpg', 'mp40p39p38p13_sml.jpg'),
(27, 1, 'mp40p39p30p13.jpg', 'mp40p39p30p13_sml.jpg'),
(28, 1, 'mp49p24p41.jpg', 'mp49p24p41_sml.jpg'),
(29, 1, 'mp26p39p38p40p35.jpg', 'mp26p39p38p40p35_sml.jpg'),
(30, 1, 'mp26p49p20p19.jpg', 'mp26p49p20p19_sml.jpg'),
(31, 1, 'mp40p39p38p53.jpg', 'mp40p39p38p53_sml.jpg'),
(32, 1, 'mp11p1p27.jpg', 'mp11p1p27_sml.jpg'),
(33, 1, 'mp24p23p1p26.jpg', 'mp24p23p1p26_sml.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pattern`
--

CREATE TABLE IF NOT EXISTS `pattern` (
  `pattern_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pattern_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pattern`
--

INSERT INTO `pattern` (`pattern_id`, `name`) VALUES
(8, 'animal'),
(4, 'border'),
(6, 'camouflage'),
(3, 'check'),
(5, 'dot'),
(7, 'embroidery_lace'),
(9, 'floral'),
(12, 'one_point'),
(13, 'others'),
(10, 'patterned_all_over_print'),
(1, 'plain'),
(11, 'print_others'),
(2, 'stripe');

-- --------------------------------------------------------

--
-- Table structure for table `pattern_in_style`
--

CREATE TABLE IF NOT EXISTS `pattern_in_style` (
  `pattern_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  KEY `pattern_id` (`pattern_id`),
  KEY `style_id` (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `clothingType_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` text,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sex` char(1) NOT NULL,
  `price` decimal(5,4) unsigned DEFAULT NULL,
  `default_filename` varchar(100) NOT NULL,
  `small_filename` varchar(100) NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  `edited_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`),
  KEY `brand_id` (`brand_id`),
  KEY `name` (`name`),
  KEY `clothingType_id` (`clothingType_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `brand_id`, `clothingType_id`, `name`, `url`, `description`, `sex`, `price`, `default_filename`, `small_filename`, `added_date`, `added_time`, `edited_time`) VALUES
(1, 1, 47, 'Black Leather Handbag', NULL, NULL, 'f', NULL, 'bag_1main.png', 'bag_1main_s.png', '2013-12-27', '17:11:53', '2013-12-28 20:09:19'),
(2, 1, 3, 'Purple Gown', NULL, NULL, 'f', NULL, 'dress_1main.png', 'dress_1main_s.png', '2013-12-27', '17:13:26', '2013-12-28 20:11:55'),
(3, 1, 3, 'Casual Hawaiian Style Gown', NULL, NULL, 'f', NULL, 'dress_2main.png', 'dress_2main_s.png', '2013-12-27', '17:17:19', '2013-12-28 20:11:51'),
(4, 1, 2, 'Classic Black Dress', NULL, NULL, 'f', NULL, 'dress_3main.png', 'dress_3main_s.png', '2013-12-27', '17:17:56', '2013-12-28 20:11:46'),
(5, 1, 2, 'Shining Blue Dress', NULL, NULL, 'f', NULL, 'dress_4main.png', 'dress_4main_s.png', '2013-12-27', '17:18:42', '2013-12-28 20:11:41'),
(6, 1, 2, 'Sexy Open Space Dress', NULL, NULL, 'f', NULL, 'dress_5main.png', 'dress_5main_s.png', '2013-12-27', '17:19:51', '2013-12-28 20:13:35'),
(7, 1, 1, 'Formal Day Dress', NULL, NULL, 'f', NULL, 'dress_6main.png', 'dress_6main_s.png', '2013-12-27', '17:20:17', '2013-12-28 20:13:40'),
(8, 1, 71, 'Black Knit Hat', NULL, NULL, 'f', NULL, 'hat_1main.png', 'hat_1main_s.png', '2013-12-27', '17:21:10', '2013-12-28 20:13:30'),
(9, 1, 71, 'Exotic Hat', NULL, NULL, 'f', NULL, 'hat_2main.png', 'hat_2main_s.png', '2013-12-27', '17:21:35', '2013-12-28 20:24:30'),
(10, 1, 8, 'Purple Cardigan', NULL, NULL, 'f', NULL, 'jacket_1main.png', 'jacket_1main_s.png', '2013-12-27', '17:36:02', '2013-12-28 20:39:34'),
(11, 1, 15, 'Simple Jacket', NULL, NULL, 'f', NULL, 'jacket_2main.png', 'jacket_2main_s.png', '2013-12-27', '17:37:51', '2013-12-28 20:23:39'),
(12, 1, 14, 'Simple White Coat', NULL, NULL, 'f', NULL, 'jacket_3main.png', 'jacket_3main_s.png', '2013-12-27', '17:38:37', '2013-12-28 20:39:56'),
(13, 1, 15, 'White Jacket', NULL, NULL, 'f', NULL, 'jacket_4main.png', 'jacket_4main_s.png', '2013-12-27', '17:39:36', '2013-12-28 20:23:27'),
(14, 1, 15, 'Nice Looking Blazer', NULL, NULL, 'f', NULL, 'jacket_5main.png', 'jacket_5main_s.png', '2013-12-27', '17:40:09', '2013-12-28 20:23:19'),
(15, 1, 15, 'Brown Colored Blazer', NULL, NULL, 'f', NULL, 'jacket_6main.png', 'jacket_6main_s.png', '2013-12-27', '17:40:46', '2013-12-28 20:23:14'),
(16, 1, 15, 'Spicy Colored Blazer', NULL, NULL, 'f', NULL, 'jacket_7main.png', 'jacket_7main_s.png', '2013-12-27', '17:41:22', '2013-12-28 20:23:06'),
(17, 1, 15, 'Loosely Jacket', NULL, NULL, 'f', NULL, 'jacket_8main.png', 'jacket_8main_s.png', '2013-12-27', '17:42:16', '2013-12-28 20:39:28'),
(18, 1, 15, 'Simple Jacket', NULL, NULL, 'f', NULL, 'jacket_9main.png', 'jacket_9main_s.png', '2013-12-27', '17:42:52', '2013-12-28 20:22:49'),
(19, 1, 59, 'Silver Bracelet', NULL, NULL, 'f', NULL, 'jewelry_1main.png', 'jewelry_1main_s.png', '2013-12-27', '17:43:40', '2013-12-28 20:22:39'),
(20, 1, 59, 'Colorful Bracelet', NULL, NULL, 'f', NULL, 'jewelry_2main.png', 'jewelry_2main_s.png', '2013-12-27', '17:44:20', '2013-12-28 20:25:27'),
(21, 1, 63, 'Simple Necklace', NULL, NULL, 'f', NULL, 'jewelry_3main.png', 'jewelry_3main_s.png', '2013-12-27', '17:45:17', '2013-12-28 20:25:35'),
(22, 1, 75, 'Funny Eyewear', NULL, NULL, 'b', NULL, 'others_1main.png', 'others_1main_s.png', '2013-12-27', '17:46:48', '2013-12-28 20:25:46'),
(23, 1, 7, 'White Blouse', NULL, NULL, 'f', NULL, 'shirt_1main.png', 'shirt_1main_s.png', '2013-12-27', '17:47:19', '2013-12-28 20:27:27'),
(24, 1, 7, 'Wrinkled White Blouse', NULL, NULL, 'f', NULL, 'shirt_2main.png', 'shirt_2main_s.png', '2013-12-27', '17:47:51', '2013-12-28 20:27:35'),
(25, 1, 24, 'White Shorts', NULL, NULL, 'f', NULL, 'shortPants_1main.png', 'shortPants_1main_s.png', '2013-12-27', '17:48:41', '2013-12-28 20:28:38'),
(26, 1, 24, 'Grey Shorts', NULL, NULL, 'f', NULL, 'shortPants_2main.png', 'shortPants_2main_s.png', '2013-12-27', '17:49:54', '2013-12-28 20:28:49'),
(27, 1, 24, 'Jeans Styled Shorts', NULL, NULL, 'f', NULL, 'shortPants_3main.png', 'shortPants_3main_s.png', '2013-12-27', '17:50:28', '2013-12-28 20:28:56'),
(28, 1, 72, 'Exotic Skirf', NULL, NULL, 'f', NULL, 'skirf_1main.png', 'skirf_1main_s.png', '2013-12-27', '17:51:30', '2013-12-28 20:30:46'),
(29, 1, 5, 'Dark Casual Skirt', NULL, NULL, 'f', NULL, 'skirt_1main.png', 'skirt_1main_s.png', '2013-12-28', '00:39:03', '2013-12-28 20:31:06'),
(30, 1, 5, 'Formal Blue Skirt', NULL, NULL, 'f', NULL, 'skirt_2main.png', 'skirt_2main_s.png', '2013-12-28', '00:41:02', '2013-12-28 20:31:15'),
(31, 1, 5, 'Red Skirt', NULL, NULL, 'f', NULL, 'skirt_3main.png', 'skirt_3main_s.png', '2013-12-28', '00:44:12', '2013-12-28 20:31:24'),
(32, 1, 5, 'Formal Skirt', NULL, NULL, 'f', NULL, 'skirt_4main.png', 'skirt_4main_s.png', '2013-12-28', '00:44:37', '2013-12-28 20:31:31'),
(33, 1, 26, 'Casual Romper', NULL, NULL, 'f', NULL, 'top_1main.png', 'top_1main_s.png', '2013-12-28', '00:46:28', '2013-12-28 20:33:04'),
(34, 1, 13, 'Blue Tunic', NULL, NULL, 'f', NULL, 'top_2main.png', 'top_2main_s.png', '2013-12-28', '00:53:52', '2013-12-28 20:33:19'),
(35, 1, 1, 'Causal Dress', NULL, NULL, 'f', NULL, 'top_3main.png', 'top_3main_s.png', '2013-12-28', '00:55:31', '2013-12-28 20:33:43'),
(36, 1, 13, 'Casual Tunic', NULL, NULL, 'f', NULL, 'top_4main.png', 'top_4main_s.png', '2013-12-28', '00:59:39', '2013-12-28 20:33:52'),
(37, 1, 13, 'White Tunic', NULL, NULL, 'f', NULL, 'top_5main.png', 'top_5main_s.png', '2013-12-28', '01:01:02', '2013-12-28 20:34:00'),
(38, 1, 28, 'Pink Camisole', NULL, NULL, 'f', NULL, 'top_6main.png', 'top_6main_s.png', '2013-12-28', '01:02:30', '2013-12-28 20:34:13'),
(39, 1, 28, 'White Camisole', NULL, NULL, 'f', NULL, 'top_7main.png', 'top_7main_s.png', '2013-12-28', '01:03:00', '2013-12-28 20:34:29'),
(40, 1, 28, 'White Casual Camisole', NULL, NULL, 'f', NULL, 'top_8main.png', 'top_8main_s.png', '2013-12-28', '01:03:45', '2013-12-28 20:34:36'),
(41, 1, 9, 'Loosely Made Sweater', NULL, NULL, 'f', NULL, 'top_9main.png', 'top_9main_s.png', '2013-12-28', '01:04:36', '2013-12-28 20:34:42'),
(42, 1, 9, 'Red Sweater', NULL, NULL, 'f', NULL, 'top_10main.png', 'top_10main_s.png', '2013-12-28', '01:05:04', '2013-12-28 20:34:51'),
(43, 1, 13, 'Exotic Tunic', NULL, NULL, 'f', NULL, 'top_11main.png', 'top_11main_s.png', '2013-12-28', '01:05:46', '2013-12-28 20:34:58'),
(44, 1, 13, 'White Tunic', NULL, NULL, 'f', NULL, 'top_12main.png', 'top_12main_s.png', '2013-12-28', '01:10:48', '2013-12-28 20:35:05'),
(45, 1, 8, 'Blue Cardigan', NULL, NULL, 'f', NULL, 'top_13main.png', 'top_13main_s.png', '2013-12-28', '01:11:13', '2013-12-28 20:35:11'),
(46, 1, 13, 'Exotic Gold Tunic', NULL, NULL, 'f', NULL, 'top_14main.png', 'top_14main_s.png', '2013-12-28', '01:11:45', '2013-12-28 20:35:19'),
(47, 1, 11, 'Black Tank Top', NULL, NULL, 'f', NULL, 'top_15main.png', 'top_15main_s.png', '2013-12-28', '01:12:28', '2013-12-28 20:35:39'),
(48, 1, 9, 'Sexy Sweater', NULL, NULL, 'f', NULL, 'top_16main.png', 'top_16main_s.png', '2013-12-28', '01:13:13', '2013-12-28 20:35:49'),
(49, 1, 26, 'Blue Loosely Made Romper', NULL, NULL, 'f', NULL, 'top_17main.png', 'top_17main_s.png', '2013-12-28', '01:14:29', '2013-12-28 20:39:11'),
(50, 1, 8, 'Yellow Cardigan', NULL, NULL, 'f', NULL, 'top_18main.png', 'top_18main_s.png', '2013-12-28', '01:15:08', '2013-12-28 20:36:04'),
(51, 1, 13, 'Stripe Tunic', NULL, NULL, 'f', NULL, 'top_19main.png', 'top_19main_s.png', '2013-12-28', '01:15:31', '2013-12-28 20:36:33'),
(52, 1, 11, 'White Tank Top', NULL, NULL, 'f', NULL, 'top_20main.png', 'top_20main_s.png', '2013-12-28', '01:16:04', '2013-12-28 20:36:41'),
(53, 1, 26, 'Bluish Romper', NULL, NULL, 'f', NULL, 'top_21main.png', 'top_21main_s.png', '2013-12-28', '01:16:48', '2013-12-28 20:37:26'),
(54, 1, 13, 'Casual Tunic', NULL, NULL, 'f', NULL, 'top_22main.png', 'top_22main_s.png', '2013-12-28', '01:17:09', '2013-12-28 20:37:32'),
(55, 1, 8, 'White Cardigan', NULL, NULL, 'f', NULL, 'top_23main.png', 'top_23main_s.png', '2013-12-28', '01:17:31', '2013-12-28 20:37:40'),
(56, 1, 9, 'Long Sweater', NULL, NULL, 'f', NULL, 'top_24main.png', 'top_24main_s.png', '2013-12-28', '01:18:07', '2013-12-28 20:37:48'),
(57, 1, 12, 'Casual T-shirt', NULL, NULL, 'f', NULL, 'top_25main.png', 'top_25main_s.png', '2013-12-28', '01:18:37', '2013-12-28 20:37:59'),
(58, 1, 9, 'Bluish Sweater', NULL, NULL, 'f', NULL, 'top_26main.png', 'top_26main_s.png', '2013-12-28', '01:19:04', '2013-12-28 20:38:10'),
(59, 1, 12, 'Love Japan T-shirt', NULL, NULL, 'f', NULL, 'tshirt_1main.png', 'tshirt_1main_s.png', '2013-12-28', '01:19:31', '2013-12-28 20:38:43'),
(60, 1, 12, 'Red T-shirt', NULL, NULL, 'f', NULL, 'tshirt_2main.png', 'tshirt_2main_s.png', '2013-12-28', '01:19:57', '2013-12-28 20:38:50'),
(61, 1, 12, 'Japan T-shirt', NULL, NULL, 'f', NULL, 'tshirt_3main.png', 'tshirt_3main_s.png', '2013-12-28', '01:20:24', '2013-12-28 20:38:56'),
(62, 1, 12, 'Tomodachi T-shirt', NULL, NULL, 'f', NULL, 'tshirt_4main.png', 'tshirt_4main_s.png', '2013-12-28', '01:20:51', '2013-12-28 20:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_collage_rel`
--

CREATE TABLE IF NOT EXISTS `product_collage_rel` (
  `collage_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `z_index` tinyint(4) unsigned NOT NULL,
  `x_position` tinyint(4) NOT NULL,
  `y_position` tinyint(4) NOT NULL,
  `width` tinyint(4) unsigned NOT NULL,
  `height` tinyint(4) unsigned NOT NULL,
  `angle` decimal(5,1) NOT NULL,
  PRIMARY KEY (`collage_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `productImage_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_type` char(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` char(20) DEFAULT NULL,
  `action` char(5) DEFAULT NULL,
  `image_direction` char(10) NOT NULL,
  `default_filename` varchar(255) NOT NULL,
  `s_size_filename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`productImage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`productImage_id`, `image_type`, `position`, `action`, `image_direction`, `default_filename`, `s_size_filename`) VALUES
(1, 'default', 'right_shoulder', NULL, 'front', 'bag_1a.png', NULL),
(2, NULL, 'left_shoulder', NULL, 'front', 'bag_1b.png', NULL),
(3, NULL, 'right_hand', NULL, 'front', 'bag_1c.png', NULL),
(4, 'bottom', NULL, NULL, 'front', 'dress_1b.png', NULL),
(5, 'middle', NULL, NULL, 'front', 'dress_1m.png', NULL),
(6, 'top', NULL, NULL, 'front', 'dress_1t.png', NULL),
(7, 'bottom', NULL, NULL, 'front', 'dress_2b.png', NULL),
(8, 'middle', NULL, NULL, 'front', 'dress_2m.png', NULL),
(9, 'top', NULL, NULL, 'front', 'dress_2t.png', NULL),
(10, 'bottom', NULL, NULL, 'front', 'dress_3b.png', NULL),
(11, 'middle', NULL, NULL, 'front', 'dress_3m.png', NULL),
(12, 'top', NULL, NULL, 'front', 'dress_3t.png', NULL),
(13, 'bottom', NULL, NULL, 'front', 'dress_4b.png', NULL),
(14, 'middle', NULL, NULL, 'front', 'dress_4m.png', NULL),
(15, 'top', NULL, NULL, 'front', 'dress_4t.png', NULL),
(16, 'bottom', NULL, NULL, 'front', 'dress_5b.png', NULL),
(17, 'middle', NULL, NULL, 'front', 'dress_5m.png', NULL),
(18, 'top', NULL, NULL, 'front', 'dress_5t.png', NULL),
(19, 'bottom', NULL, NULL, 'front', 'dress_6b.png', NULL),
(20, 'middle', NULL, NULL, 'front', 'dress_6m.png', NULL),
(21, 'top', NULL, NULL, 'front', 'dress_6t.png', NULL),
(22, 'default', '', NULL, 'front', 'hat_1.png', NULL),
(23, 'default', NULL, NULL, 'front', 'hat_2.png', NULL),
(24, 'bottom', NULL, 'open', 'front', 'jacket_1cb.png', NULL),
(25, 'top', NULL, 'open', 'front', 'jacket_1ct.png', NULL),
(26, 'bottom', NULL, 'close', 'front', 'jacket_2cb.png', NULL),
(27, 'top', NULL, 'close', 'front', 'jacket_2ct.png', NULL),
(28, 'bottom', NULL, 'open', 'front', 'jacket_2ob.png', NULL),
(29, 'top', NULL, 'open', 'front', 'jacket_2ot.png', NULL),
(30, 'bottom', NULL, 'close', 'front', 'jacket_3cb.png', NULL),
(31, 'top', NULL, 'close', 'front', 'jacket_3ct.png', NULL),
(32, 'bottom', NULL, 'open', 'front', 'jacket_3ob.png', NULL),
(33, 'top', NULL, 'open', 'front', 'jacket_3ot.png', NULL),
(34, 'bottom', NULL, 'close', 'front', 'jacket_4cb.png', NULL),
(35, 'top', NULL, 'close', 'front', 'jacket_4ct.png', NULL),
(36, 'bottom', NULL, 'open', 'front', 'jacket_4ob.png', NULL),
(37, 'top', NULL, 'open', 'front', 'jacket_4ot.png', NULL),
(38, 'bottom', NULL, 'open', 'front', 'jacket_5ob.png', NULL),
(39, 'top', NULL, 'open', 'front', 'jacket_5ot.png', NULL),
(40, 'bottom', NULL, 'close', 'front', 'jacket_6cb.png', NULL),
(41, 'top', NULL, 'close', 'front', 'jacket_6ct.png', NULL),
(42, 'bottom', NULL, 'close', 'front', 'jacket_7cb.png', NULL),
(43, 'top', NULL, 'close', 'front', 'jacket_7ct.png', NULL),
(44, 'bottom', NULL, 'open', 'front', 'jacket_7ob.png', NULL),
(45, 'top', NULL, 'open', 'front', 'jacket_7ot.png', NULL),
(46, 'bottom', NULL, 'open', 'front', 'jacket_8ob.png', NULL),
(47, 'top', NULL, 'open', 'front', 'jacket_8ot.png', NULL),
(48, 'bottom', NULL, 'open', 'front', 'jacket_9ob.png', NULL),
(49, 'top', NULL, 'open', 'front', 'jacket_9ot.png', NULL),
(50, 'default', 'right_hand', NULL, 'front', 'jewelry_1a.png', NULL),
(51, NULL, 'left_hand', NULL, 'front', 'jewelry_1b.png', NULL),
(52, 'default', 'right_hand', NULL, 'front', 'jewelry_2a.png', NULL),
(53, 'default', NULL, NULL, 'front', 'jewelry_3a.png', NULL),
(54, 'default', NULL, NULL, 'front', 'others_1.png', NULL),
(55, 'bottom', NULL, 'close', 'front', 'shirt_1cb.png', NULL),
(56, 'top', NULL, 'close', 'front', 'shirt_1ct.png', NULL),
(58, 'bottom', NULL, 'open', 'front', 'shirt_1ob.png', NULL),
(59, 'top', NULL, 'open', 'front', 'shirt_1ot.png', NULL),
(60, 'bottom', NULL, 'close', 'front', 'shirt_2cb.png', NULL),
(61, 'top', NULL, 'close', 'front', 'shirt_2ct.png', NULL),
(62, 'bottom', NULL, 'open', 'front', 'shirt_2ob.png', NULL),
(63, 'top', NULL, 'open', 'front', 'shirt_2ot.png', NULL),
(64, 'bottom', NULL, NULL, 'front', 'shortPants_1b.png', NULL),
(65, 'top', NULL, NULL, 'front', 'shortPants_1t.png', NULL),
(66, 'bottom', NULL, NULL, 'front', 'shortPants_2b.png', NULL),
(67, 'top', NULL, NULL, 'front', 'shortPants_2t.png', NULL),
(68, 'bottom', NULL, NULL, 'front', 'shortPants_3b.png', NULL),
(69, 'top', NULL, NULL, 'front', 'shortPants_3t.png', NULL),
(70, 'default', NULL, NULL, 'front', 'skirf_1.png', NULL),
(71, 'bottom', NULL, NULL, 'front', 'skirt_1b.png', NULL),
(72, 'top', NULL, NULL, 'front', 'skirt_1t.png', NULL),
(73, 'bottom', NULL, NULL, 'front', 'skirt_2b.png', NULL),
(74, 'top', NULL, NULL, 'front', 'skirt_2t.png', NULL),
(75, 'bottom', NULL, NULL, 'front', 'skirt_3b.png', NULL),
(76, 'top', NULL, NULL, 'front', 'skirt_3t.png', NULL),
(77, 'bottom', NULL, NULL, 'front', 'skirt_4b.png', NULL),
(78, 'top', NULL, NULL, 'front', 'skirt_4t.png', NULL),
(79, 'bottom', NULL, NULL, 'front', 'top_1b.png', NULL),
(80, 'middle', NULL, NULL, 'front', 'top_1m.png', NULL),
(81, 'top', NULL, NULL, 'front', 'top_1t.png', NULL),
(82, 'bottom', NULL, NULL, 'front', 'top_2b.png', NULL),
(83, 'middle', NULL, NULL, 'front', 'top_2m.png', NULL),
(84, 'top', NULL, NULL, 'front', 'top_2t.png', NULL),
(85, 'bottom', NULL, NULL, 'front', 'top_3b.png', NULL),
(86, 'middle', NULL, NULL, 'front', 'top_3m.png', NULL),
(87, 'top', NULL, NULL, 'front', 'top_3t.png', NULL),
(88, 'bottom', NULL, 'open', 'front', 'top_4ob.png', NULL),
(89, 'top', NULL, 'open', 'front', 'top_4ot.png', NULL),
(90, 'bottom', NULL, NULL, 'front', 'top_5b.png', NULL),
(91, 'top', NULL, NULL, 'front', 'top_5t.png', NULL),
(92, 'bottom', NULL, NULL, 'front', 'top_6b.png', NULL),
(93, 'top', NULL, NULL, 'front', 'top_6t.png', NULL),
(94, 'bottom', NULL, NULL, 'front', 'top_7b.png', NULL),
(95, 'middle', NULL, NULL, 'front', 'top_7m.png', NULL),
(96, 'top', NULL, NULL, 'front', 'top_7t.png', NULL),
(97, 'bottom', NULL, NULL, 'front', 'top_8b.png', NULL),
(98, 'middle', NULL, NULL, 'front', 'top_8m.png', NULL),
(99, 'top', NULL, NULL, 'front', 'top_8t.png', NULL),
(100, 'bottom', NULL, NULL, 'front', 'top_9b.png', NULL),
(101, 'top', NULL, NULL, 'front', 'top_9t.png', NULL),
(102, 'bottom', NULL, NULL, 'front', 'top_10b.png', NULL),
(103, 'top', NULL, NULL, 'front', 'top_10t.png', NULL),
(104, 'bottom', NULL, NULL, 'front', 'top_11b.png', NULL),
(105, 'top', NULL, NULL, 'front', 'top_11t.png', NULL),
(106, 'bottom', NULL, NULL, 'front', 'top_12b.png', NULL),
(107, 'top', NULL, NULL, 'front', 'top_12t.png', NULL),
(108, 'bottom', NULL, 'close', 'front', 'top_13cb.png', NULL),
(109, 'top', NULL, 'close', 'front', 'top_13ct.png', NULL),
(110, 'bottom', NULL, 'open', 'front', 'top_13ob.png', NULL),
(111, 'top', NULL, 'open', 'front', 'top_13ot.png', NULL),
(112, 'bottom', NULL, 'close', 'front', 'top_14cb.png', NULL),
(113, 'top', NULL, 'close', 'front', 'top_14ct.png', NULL),
(114, 'bottom', NULL, 'open', 'front', 'top_14ob.png', NULL),
(115, 'top', NULL, 'open', 'front', 'top_14ot.png', NULL),
(116, 'bottom', NULL, NULL, 'front', 'top_15b.png', NULL),
(117, 'top', NULL, NULL, 'front', 'top_15t.png', NULL),
(118, 'bottom', NULL, NULL, 'front', 'top_16b.png', NULL),
(119, 'top', NULL, NULL, 'front', 'top_16t.png', NULL),
(120, 'bottom', NULL, NULL, 'front', 'top_17b.png', NULL),
(121, 'top', NULL, NULL, 'front', 'top_17t.png', NULL),
(122, 'bottom', NULL, 'close', 'front', 'top_18cb.png', NULL),
(123, 'top', NULL, 'close', 'front', 'top_18ct.png', NULL),
(124, 'bottom', NULL, 'open', 'front', 'top_18ob.png', NULL),
(125, 'top', NULL, 'open', 'front', 'top_18ot.png', NULL),
(126, 'bottom', NULL, NULL, 'front', 'top_19b.png', NULL),
(127, 'top', NULL, NULL, 'front', 'top_19t.png', NULL),
(128, 'bottom', NULL, NULL, 'front', 'top_20b.png', NULL),
(129, 'top', NULL, NULL, 'front', 'top_20t.png', NULL),
(130, 'bottom', NULL, NULL, 'front', 'top_21b.png', NULL),
(131, 'top', NULL, NULL, 'front', 'top_21t.png', NULL),
(132, 'bottom', NULL, NULL, 'front', 'top_22b.png', NULL),
(133, 'top', NULL, NULL, 'front', 'top_22t.png', NULL),
(134, 'bottom', NULL, NULL, 'front', 'top_23b.png', NULL),
(135, 'top', NULL, NULL, 'front', 'top_23t.png', NULL),
(136, 'bottom', NULL, NULL, 'front', 'top_24b.png', NULL),
(137, 'top', NULL, NULL, 'front', 'top_24t.png', NULL),
(138, 'bottom', NULL, NULL, 'front', 'top_25b.png', NULL),
(139, 'top', NULL, NULL, 'front', 'top_25t.png', NULL),
(140, 'bottom', NULL, NULL, 'front', 'top_26b.png', NULL),
(141, 'top', NULL, NULL, 'front', 'top_26t.png', NULL),
(142, 'bottom', NULL, NULL, 'front', 'tshirt_1b.png', NULL),
(143, 'top', NULL, NULL, 'front', 'tshirt_1t.png', NULL),
(144, 'bottom', NULL, NULL, 'front', 'tshirt_2b.png', NULL),
(145, 'top', NULL, NULL, 'front', 'tshirt_2t.png', NULL),
(146, 'bottom', NULL, NULL, 'front', 'tshirt_3b.png', NULL),
(147, 'top', NULL, NULL, 'front', 'tshirt_3t.png', NULL),
(148, 'bottom', NULL, NULL, 'front', 'tshirt_4b.png', NULL),
(149, 'top', NULL, NULL, 'front', 'tshirt_4t.png', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `product_on_model`
--

CREATE TABLE IF NOT EXISTS `product_on_model` (
  `product_id` int(11) NOT NULL,
  `outfitOnModel_id` int(11) NOT NULL,
  `z_index` smallint(4) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`outfitOnModel_id`),
  KEY `outfitOnModel_id` (`outfitOnModel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_on_model`
--

INSERT INTO `product_on_model` (`product_id`, `outfitOnModel_id`, `z_index`) VALUES
(27, 13, 1000),
(27, 30, 999),
(27, 39, 998),
(27, 40, 997),
(28, 24, 999),
(28, 41, 1000),
(28, 49, 998),
(29, 26, 996),
(29, 35, 1000),
(29, 38, 998),
(29, 39, 997),
(29, 40, 999),
(30, 19, 1000),
(30, 20, 999),
(30, 26, 997),
(30, 49, 998),
(31, 38, 999),
(31, 39, 998),
(31, 40, 997),
(31, 53, 1000),
(32, 1, 999),
(32, 11, 998),
(32, 27, 1000),
(33, 1, 999),
(33, 23, 998),
(33, 24, 997),
(33, 26, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE IF NOT EXISTS `product_size` (
  `productSize_id` int(11) NOT NULL AUTO_INCREMENT,
  `bust` tinyint(3) DEFAULT NULL,
  `waist` tinyint(3) DEFAULT NULL,
  `hip` tinyint(3) DEFAULT NULL,
  `backWaist_length` tinyint(3) DEFAULT NULL,
  `chest` tinyint(3) DEFAULT NULL,
  `shirt_sleeve` tinyint(3) DEFAULT NULL,
  `inseam` tinyint(3) DEFAULT NULL,
  `height` tinyint(3) DEFAULT NULL,
  `neckband` tinyint(3) DEFAULT NULL,
  `dress_length` tinyint(3) DEFAULT NULL,
  `dimension_size` tinyint(3) DEFAULT NULL,
  `shoes_size` tinyint(3) DEFAULT NULL,
  `size_letters` char(3) DEFAULT NULL,
  PRIMARY KEY (`productSize_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_size_range`
--

CREATE TABLE IF NOT EXISTS `product_size_range` (
  `productSize_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`productSize_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchased_product`
--

CREATE TABLE IF NOT EXISTS `purchased_product` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  PRIMARY KEY (`user_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`user_id`,`comment_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE IF NOT EXISTS `style` (
  `style_id` int(11) NOT NULL AUTO_INCREMENT,
  `outfitOnModel_id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `num_of_views` smallint(5) unsigned NOT NULL DEFAULT '0',
  `visibility` tinyint(1) NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  `edited_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`style_id`),
  KEY `collage_id` (`collage_id`),
  KEY `outfitOnModel_id` (`outfitOnModel_id`),
  KEY `title` (`title`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_items`
--

CREATE TABLE IF NOT EXISTS `uploaded_items` (
  `uploadedItems_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `main_category` varchar(50) NOT NULL,
  `sub_category` varchar(50) DEFAULT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`uploadedItems_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL DEFAULT '1',
  `gender` char(1) NOT NULL DEFAULT 'u',
  `facebook_loggin` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `introduction` text,
  `language` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(200) NOT NULL DEFAULT 'default_thumb.png',
  `default_img` varchar(150) NOT NULL DEFAULT 'default_img.png',
  `homepage` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `pinterest` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` tinyint(3) unsigned DEFAULT NULL,
  `skin_color` char(3) DEFAULT NULL,
  `bodyshape` char(2) DEFAULT NULL,
  `size` char(2) DEFAULT NULL,
  `height` tinyint(3) unsigned DEFAULT NULL,
  `inseam` tinyint(3) unsigned DEFAULT NULL,
  `chest_bust` tinyint(3) unsigned DEFAULT NULL,
  `waist` tinyint(3) unsigned DEFAULT NULL,
  `hip` tinyint(3) unsigned DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `joined_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logged_in_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logged_out_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `model_id` (`model_id`),
  KEY `email_2` (`email`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `model_id`, `gender`, `facebook_loggin`, `username`, `email`, `password`, `introduction`, `language`, `thumbnail`, `default_img`, `homepage`, `twitter`, `pinterest`, `facebook`, `country`, `city`, `age`, `skin_color`, `bodyshape`, `size`, `height`, `inseam`, `chest_bust`, `waist`, `hip`, `user_type`, `joined_time`, `logged_in_time`, `logged_out_time`) VALUES
(24, 1, 'u', 0, 'test', 'test@gmail.com', '$2y$10$MDJhNTQ3OGU4NmU2OThlYes8KQiefd90XE/hdHIqMybdgWEqfkiDW', NULL, NULL, 'default_thumb.png', 'default_img.png', NULL, NULL, NULL, NULL, 'Afganistan', NULL, 0, '0', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, '2014-01-02 01:25:51', '2014-01-08 20:21:08', '2014-01-08 20:21:08'),
(34, 1, 'u', 0, 'testb', 'testb@gmail.com', '$2y$10$OTQ5MzNkODY5NDE5N2Y0N.97MSYzon.Aie7vI69hlzpkHKlf9lKNG', NULL, NULL, 'default_thumb.png', 'default_img.png', NULL, NULL, NULL, NULL, 'Afganistan', NULL, 0, '0', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, '2014-01-02 01:35:01', '2014-01-08 20:21:08', '2014-01-08 20:21:08'),
(36, 1, 'u', 0, 'masanorinyo', 'masanorinyo@gmail.com', '$2y$10$YzNiYjFiZjQ1NWRiYmI2YOsVHvxQb8MY45oDgaJM7G6Fdd9Ot/vdG', NULL, NULL, 'default_thumb.png', 'default_img.png', NULL, NULL, NULL, NULL, 'Albania', NULL, 0, '0', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, '2014-01-02 01:46:49', '2014-01-08 20:21:08', '2014-01-08 20:21:08'),
(39, 1, 'u', 0, 'test1', 'test@gd.com', '$2y$10$MDVkNzRmYzliN2ExMzcxMO2Zv4TNr44RY/Uxfs6vGXM2b7NTHNBHK', NULL, NULL, 'default_thumb.png', 'default_img.png', NULL, NULL, NULL, NULL, 'Albania', NULL, 0, '0', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, '2014-01-02 01:48:35', '2014-01-08 20:21:08', '2014-01-08 20:21:08'),
(40, 1, 'u', 0, 'masanorinyo1', 'masanorinyo@g.com', '$2y$10$YzRjYmU0OGY0Zjc5M2IxZ.ukZhW4Z3v2xv8mvwoEt0r5.zIt9Pii6', NULL, NULL, 'default_thumb.png', 'default_img.png', NULL, NULL, NULL, NULL, 'Afganistan', NULL, 30, 'paf', 'in', '0', 150, NULL, NULL, NULL, NULL, NULL, '2014-01-02 03:07:32', '2014-01-08 20:21:08', '2014-01-08 20:21:08'),
(41, 1, 'm', 0, 'Masanori', 'masanorinyo@gmail.comm', '$2y$10$NmM4NzQyNjkxNjY5YWIyOOh4LLonXLAkTncAXQjIj/vYA05iYtUIW', 'Welcome to ModiShow. I hope you enjoy using the site. Please let me know if you have any questions or feedback for the site.\r\n\r\nMy E-mail address: masanorinyo@gmail.com\r\n\r\nThank you!\r\n', 'jp', 'masanori2_thumb.gif', 'masanori2_default.jpg', NULL, NULL, NULL, NULL, 'JP', 'Osaka', 30, 'mas', 'in', 'm', 190, NULL, NULL, NULL, NULL, NULL, '2014-01-08 18:24:59', '2014-01-08 21:22:04', '2014-01-08 21:22:04'),
(42, 1, 'm', 0, 'masanorinyo2', 'masanorinyo@gmail.co', '$2y$10$MjdiNjUyZTE3MWIzYWFkYOfggJ./5v55N/XXAnZ2oc/MN3r6ZlHVm', NULL, NULL, 'masanorinyo2_thumb.gif', 'masanorinyo2_default.jpg', NULL, NULL, NULL, NULL, 'JM', NULL, 17, NULL, '0', '0', 0, NULL, NULL, NULL, NULL, NULL, '2014-01-09 03:01:25', '2014-01-09 03:01:25', '2014-01-09 03:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_preference_category`
--

CREATE TABLE IF NOT EXISTS `user_preference_category` (
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `points` tinyint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_preference_color`
--

CREATE TABLE IF NOT EXISTS `user_preference_color` (
  `color_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` tinyint(5) NOT NULL,
  PRIMARY KEY (`color_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_preference_material`
--

CREATE TABLE IF NOT EXISTS `user_preference_material` (
  `material_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` tinyint(5) NOT NULL,
  PRIMARY KEY (`material_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_preference_pattern`
--

CREATE TABLE IF NOT EXISTS `user_preference_pattern` (
  `pattern_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` tinyint(5) NOT NULL,
  PRIMARY KEY (`pattern_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewed_product`
--

CREATE TABLE IF NOT EXISTS `viewed_product` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewed_style`
--

CREATE TABLE IF NOT EXISTS `viewed_style` (
  `user_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `added_time` time NOT NULL,
  PRIMARY KEY (`user_id`,`style_id`),
  KEY `style_id` (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collage_misc_rel`
--
ALTER TABLE `collage_misc_rel`
  ADD CONSTRAINT `collage_misc_rel_ibfk_1` FOREIGN KEY (`misc_id`) REFERENCES `misc` (`misc_id`),
  ADD CONSTRAINT `collage_misc_rel_ibfk_2` FOREIGN KEY (`collage_id`) REFERENCES `collage` (`collage_id`);

--
-- Constraints for table `color_in_style`
--
ALTER TABLE `color_in_style`
  ADD CONSTRAINT `color_in_style_ibfk_1` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`),
  ADD CONSTRAINT `color_in_style_ibfk_2` FOREIGN KEY (`style_id`) REFERENCES `style` (`style_id`);

--
-- Constraints for table `color_of_product`
--
ALTER TABLE `color_of_product`
  ADD CONSTRAINT `color_of_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `color_of_product_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`style_id`) REFERENCES `style` (`style_id`);

--
-- Constraints for table `favorited_product`
--
ALTER TABLE `favorited_product`
  ADD CONSTRAINT `favorited_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `favorited_product_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `favorited_style`
--
ALTER TABLE `favorited_style`
  ADD CONSTRAINT `favorited_style_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `favorited_style_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `favorited_style_ibfk_2` FOREIGN KEY (`style_id`) REFERENCES `style` (`style_id`);

--
-- Constraints for table `follower`
--
ALTER TABLE `follower`
  ADD CONSTRAINT `follower_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `follower_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `follower_ibfk_3` FOREIGN KEY (`follower_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `items_uploaded_by_user`
--
ALTER TABLE `items_uploaded_by_user`
  ADD CONSTRAINT `items_uploaded_by_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `items_uploaded_by_user_ibfk_2` FOREIGN KEY (`uploadedItems_id`) REFERENCES `uploaded_items` (`uploadedItems_id`);

--
-- Constraints for table `material_in_style`
--
ALTER TABLE `material_in_style`
  ADD CONSTRAINT `material_in_style_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`),
  ADD CONSTRAINT `material_in_style_ibfk_2` FOREIGN KEY (`style_id`) REFERENCES `style` (`style_id`);

--
-- Constraints for table `material_of_product`
--
ALTER TABLE `material_of_product`
  ADD CONSTRAINT `material_of_product_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`),
  ADD CONSTRAINT `material_of_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`modelFace_id`) REFERENCES `model_face` (`modelFace_id`),
  ADD CONSTRAINT `model_ibfk_2` FOREIGN KEY (`modelTorso_id`) REFERENCES `model_torso` (`modelTorso_id`),
  ADD CONSTRAINT `model_ibfk_3` FOREIGN KEY (`modelLegs_id`) REFERENCES `model_legs` (`modelLegs_id`),
  ADD CONSTRAINT `model_ibfk_4` FOREIGN KEY (`modelArms_id`) REFERENCES `model_arms` (`modelArms_id`),
  ADD CONSTRAINT `model_ibfk_5` FOREIGN KEY (`modelHair_id`) REFERENCES `model_hair` (`modelHair_id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`),
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`style_id`) REFERENCES `style` (`style_id`),
  ADD CONSTRAINT `notification_ibfk_4` FOREIGN KEY (`follower_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `notification_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `outfitOnModel_misc_rel`
--
ALTER TABLE `outfitOnModel_misc_rel`
  ADD CONSTRAINT `outfitonmodel_misc_rel_ibfk_1` FOREIGN KEY (`outfitOnModel_id`) REFERENCES `outfit_on_model` (`outfitOnModel_id`),
  ADD CONSTRAINT `outfitonmodel_misc_rel_ibfk_2` FOREIGN KEY (`misc_id`) REFERENCES `misc` (`misc_id`),
  ADD CONSTRAINT `outfitonmodel_misc_rel_ibfk_3` FOREIGN KEY (`outfitOnModel_id`) REFERENCES `outfit_on_model` (`outfitOnModel_id`),
  ADD CONSTRAINT `outfitonmodel_misc_rel_ibfk_4` FOREIGN KEY (`misc_id`) REFERENCES `misc` (`misc_id`);

--
-- Constraints for table `outfit_on_model`
--
ALTER TABLE `outfit_on_model`
  ADD CONSTRAINT `outfit_on_model_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`),
  ADD CONSTRAINT `outfit_on_model_ibfk_2` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`);

--
-- Constraints for table `pattern_in_style`
--
ALTER TABLE `pattern_in_style`
  ADD CONSTRAINT `pattern_in_style_ibfk_1` FOREIGN KEY (`pattern_id`) REFERENCES `pattern` (`pattern_id`),
  ADD CONSTRAINT `pattern_in_style_ibfk_2` FOREIGN KEY (`style_id`) REFERENCES `style` (`style_id`);

--
-- Constraints for table `pattern_of_product`
--
ALTER TABLE `pattern_of_product`
  ADD CONSTRAINT `pattern_of_product_ibfk_1` FOREIGN KEY (`pattern_id`) REFERENCES `pattern` (`pattern_id`),
  ADD CONSTRAINT `pattern_of_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
