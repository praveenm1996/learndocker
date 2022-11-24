-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `company1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `company1`;

CREATE TABLE `users1` (
  `name` varchar(40) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users1` (`name`, `emailid`) VALUES
('userer1',	  'userer1@Google.com'),
('userer1 ',	'userer1@Google.com'),
('userer1 ',	'userer1@Google.com'),
('userer1 ',	'userer1@Google.com'),
('userer1 ',	'userer1@Google.com'),
('userer1 ',	'userer1@Google.com'),
('userer1 ',	'userer1@Google.com'),
('userer1 ',	'userer1@Google.com')
ON DUPLICATE KEY UPDATE `name` = VALUES(`name`), `emailid` = VALUES(`emailid`);

-- 2022-11-24 10:02:29
