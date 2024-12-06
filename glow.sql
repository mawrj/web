-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for glow
CREATE DATABASE IF NOT EXISTS `glow` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `glow`;

-- Dumping structure for table glow.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(225) NOT NULL,
  `admin_email` varchar(225) NOT NULL,
  `admin_pass` varchar(225) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(225) NOT NULL,
  `admin_job` varchar(225) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table glow.admins: ~1 rows (approximately)
INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
	(3, 'admin', 'admin@gmail.com', 'admin', 'profile-2398782_960_720.png', 'Indonesia', 'Bla bla bla', '08123456789', 'Admin');

-- Dumping structure for table glow.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table glow.category: ~3 rows (approximately)
INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
	(1, 'Cleansers', 'Products designed to cleanse and refresh the skin.'),
	(2, 'Serums', 'Lightweight and concentrated formulas for targeted skin concerns.'),
	(3, 'Eye Creams', 'Specially formulated creams to reduce puffiness and dark circles.');

-- Dumping structure for table glow.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_subject` text NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table glow.contact: ~1 rows (approximately)
INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
	(1, 'Rasyid', 'rikushin3@gmail.com', 'Testing', 'Testing Message');

-- Dumping structure for table glow.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_img` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table glow.customer: ~1 rows (approximately)
INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_contact`, `customer_city`, `customer_address`, `customer_img`) VALUES
	(5, 'customer', 'customer@gmail.com', 'customer', '0812345678', 'Bandung', 'Buah Batu', 'profile-2398782_960_720.png');

-- Dumping structure for table glow.customer_orders
CREATE TABLE IF NOT EXISTS `customer_orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Dumping data for table glow.customer_orders: ~1 rows (approximately)
INSERT INTO `customer_orders` (`order_id`, `customer_id`, `product_id`, `quantity`, `order_date`, `order_status`) VALUES
	(30, 5, 1, 1, '2019-07-11', 'Complete');

-- Dumping structure for table glow.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` text NOT NULL,
  `product_reviews` varchar(255) NOT NULL,
  `product_discounted_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table glow.product: ~3 rows (approximately)
INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_image`, `product_price`, `product_description`, `product_reviews`, `product_discounted_price`) VALUES
	(1, 1, 'Facial Cleanser', './assets/images/product-07.jpg', 39.00, 'A gentle facial cleanser for all skin types. Cleanses and refreshes your skin.', '5170 reviews', 29.00),
	(2, 2, 'Bio-shroom Rejuvenating Serum', './assets/images/product-08.jpg', 50.00, 'A rejuvenating serum infused with bio-shrooms to brighten and hydrate your skin.', '5170 reviews', 29.00),
	(3, 3, 'Coffee Bean Caffeine Eye Cream', './assets/images/product-09.jpg', 35.00, 'Reduces puffiness and dark circles around the eyes with caffeine extract.', '5170 reviews', 29.00);

-- Dumping structure for table glow.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `review_text` text NOT NULL,
  `review_rating` int NOT NULL,
  `review_date` date NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table glow.reviews: ~1 rows (approximately)
INSERT INTO `reviews` (`review_id`, `product_id`, `customer_id`, `review_text`, `review_rating`, `review_date`) VALUES
	(1, 1, 5, 'This product is great for my sensitive skin!', 5, '2023-05-01');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
