-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
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


-- Dumping database structure for jobseek
CREATE DATABASE IF NOT EXISTS `jobseek` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `jobseek`;

-- Dumping structure for table jobseek.listings
CREATE TABLE IF NOT EXISTS `listings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `company` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `salary` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(45) NOT NULL DEFAULT '',
  `requirements` longtext NOT NULL,
  `benefits` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_listings_users` (`user_id`),
  CONSTRAINT `fk_listings_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table jobseek.listings: ~4 rows (approximately)
INSERT INTO `listings` (`id`, `user_id`, `title`, `company`, `description`, `email`, `salary`, `phone`, `requirements`, `benefits`, `created_at`, `tags`, `address`, `city`, `state`) VALUES
	(1, 1, 'IT Support Specialist', 'NextGen Tech Solutions', 'We are looking for an IT Support Specialist to provide technical assistance and maintain computer systems and networks.', 'supportjobs@nextgentech.com', '57000', '312-555-7821', 'Associate or Bachelor degree in Information Technology or related field, strong troubleshooting skills, experience with Windows and networkin', 'Health insurance, paid training, flexible schedule', '2026-05-16 18:53:53', 'IT support, troubleshooting, hardware, softwar', '245 Maple Avenue', 'Chicago', 'IL'),
	(2, 2, 'Network Administratorf', 'SecureNet Systems', 'Seeking a Network Administrator to manage and maintain company network infrastructure and ensure system security.', 'antonio.jerome.3979@gmail.com', '78000', '214-555-1942', 'Bachelor degree in Computer Networking or related field, knowledge of LAN/WAN systems, firewall management experience', '401(k), paid vacation, healthcare coverage', '2026-05-16 18:58:09', 'networking, routers, cybersecurity, servers', '890 Cedar Road', 'Dallas', 'TX'),
	(3, 3, 'Database Administrator', 'DataCore Technologies', 'Looking for a Database Administrator to maintain database performance, security, and backups.', 'hiring@datacoretech.com', '56000', '512-555-4401', 'Experience managing databases, strong analytical skills, Bachelor degree in IT or Computer ScienceExperience managing databases, strong analytical skills, Bachelor degree in IT or Computer Science', 'Dental insurance, paid leave, career development programs', '2026-05-16 19:01:13', 'database, SQL, data management, IT expert', '510 Lake Street', 'Austin', 'TX'),
	(4, 4, 'Systems Administrator', 'BrightWave IT Services', 'We are searching for a Systems Administrator to manage servers, operating systems, and company IT resources.', 'adminjobs@brightwaveit.com', '82000', '303-555-9011', 'Knowledge of Windows and Linux servers, troubleshooting experience, strong communication skills', 'Paid holidays, life insurance, performance bonuses', '2026-05-16 19:04:56', 'systems administration, servers, Linux, Windows', '65 Pine Street', 'Denver', 'CO');

-- Dumping structure for table jobseek.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table jobseek.users: ~7 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `city`, `state`, `created_at`) VALUES
	(1, 'Jerome Antoino', 'Jerome@gmail.com', 'Jerome123', 'Cabanatuan City', 'NE', '2026-05-16 18:42:37'),
	(2, 'Justine Santos', 'Justine@gmail.com', 'Justine123', 'Cabanatuan City', 'NE', '2026-05-16 18:43:47'),
	(3, 'Godwin Oanes', 'Godwin@gmail.com', 'Godwin123', 'Cabanatuan City', 'NE', '2026-05-16 18:44:53'),
	(4, 'Hanna Felicitas', 'Hanna@gmail.com', 'Hanna123', 'Cabanatuan City', 'NE', '2026-05-16 19:03:22'),
	(5, 'Jerome Antonio', 'antonio.jerome.3979@gmail.com', '$2y$10$jvUlv3uxpYdxIkX2xK.4OuFv6dvrpl3.fOAlH6HPcV3ay3gl2bQdm', 'adsadas', 'adsas', '2026-05-17 12:00:20'),
	(6, 'Jerome Antonio', 'antonio3979@gmail.com', '$2y$10$mLODbVtLY.y3EMvpC.Ukf.Zq7t/t4vQGlK0e2X1S2D8sR0RVbaZ6C', 'Cabanatuan City', 'NE', '2026-05-17 12:51:59'),
	(7, 'Jerome Antonio', 'test@gmail.com', '$2y$10$wewjzxEgF1gov274.OfLf.XCYBXnr1ea.y7TLg98TuJdsBFkHa3c.', 'Cabanatuan City', 'NE', '2026-05-17 14:48:31');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
