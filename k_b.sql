-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2023 at 07:25 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k_b`
--
CREATE DATABASE IF NOT EXISTS `k_b` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `k_b`;

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

DROP TABLE IF EXISTS `main_menu`;
CREATE TABLE `main_menu` (
  `id` int NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `title`, `description`, `url`) VALUES
(1, 'Home', '', 'index'),
(2, 'Project', '', 'index'),
(3, 'Help', 'help', 'help');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE `module` (
  `ID` int NOT NULL,
  `UID` int DEFAULT NULL,
  `Module_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Description` text COLLATE utf8mb4_general_ci NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_id` int NOT NULL,
  `Dummy2` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`ID`, `UID`, `Module_name`, `Description`, `Date`, `project_id`, `Dummy2`) VALUES
(1, NULL, 'New Order', 'tt', '2023-09-01 17:55:02', 1, NULL),
(2, NULL, 'All Orders', 'test', '2023-09-01 17:55:27', 1, NULL),
(3, NULL, 'Reports', 'tt', '2023-09-05 10:22:41', 1, NULL),
(4, NULL, 'Reports', 'test', '2023-09-05 16:30:23', 3, NULL),
(5, NULL, 'Food Items', 'test', '2023-09-06 10:29:18', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `ID` int NOT NULL,
  `UID` int DEFAULT NULL,
  `Project_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Description` text COLLATE utf8mb4_general_ci NOT NULL,
  `Date` datetime DEFAULT CURRENT_TIMESTAMP,
  `main_menu_id` int DEFAULT NULL,
  `url` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Dummy4` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `UID`, `Project_name`, `Description`, `Date`, `main_menu_id`, `url`, `Dummy4`) VALUES
(1, NULL, 'Pharmacy', 'test', '2023-09-01 17:54:16', 2, 'pharmacy', NULL),
(2, NULL, 'Fast Food', 'test', '2023-09-06 10:28:16', 2, 'fast_food', NULL),
(3, NULL, 'Play land', 'play land', '2023-09-06 12:42:53', 2, 'play_land', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `ID` int NOT NULL,
  `UID` int DEFAULT NULL,
  `Subject_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Description` text COLLATE utf8mb4_general_ci NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Module_id` int DEFAULT '0',
  `Tagged_id` int NOT NULL,
  `project_id` int DEFAULT '0',
  `main_menu_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ID`, `UID`, `Subject_name`, `Description`, `Date`, `Module_id`, `Tagged_id`, `project_id`, `main_menu_id`) VALUES
(10, NULL, 'help', 'help', '2023-09-05 16:54:36', 4, 1, 0, 2),
(11, NULL, 'help', 'help', '2023-09-05 16:55:17', 0, 1, 0, 3),
(12, NULL, 'Create oder process', 'how to create new order', '2023-09-05 16:56:30', 1, 1, 1, 0),
(13, NULL, 'This article is from editor', '', '2023-09-05 17:04:14', 1, 2, 1, 0),
(14, NULL, '', '', '2023-09-05 17:07:36', 0, 2, 0, 0),
(15, NULL, '', '', '2023-09-05 17:09:12', 0, 2, 0, 0),
(16, NULL, '', '', '2023-09-05 17:09:22', 0, 2, 0, 0),
(17, NULL, '', '', '2023-09-05 17:09:34', 0, 2, 0, 0),
(18, NULL, '', '', '2023-09-05 17:10:25', 0, 2, 0, 0),
(19, NULL, 'asdf', '', '2023-09-05 17:10:31', 0, 2, 0, 0),
(20, NULL, '', '', '2023-09-05 17:12:46', 0, 2, 0, 0),
(21, NULL, 'All order from editor', '<p><strong>This article is from editor</strong></p><p>how am i look like</p>', '2023-09-05 17:13:50', 2, 2, 1, 0),
(22, NULL, 'All order from editor', '', '2023-09-05 17:16:22', 2, 2, 1, 0),
(23, NULL, 'All order from editor', '', '2023-09-05 17:16:33', 2, 2, 1, 0),
(24, NULL, 'Order detail from editor', '<p><strong>Now this Order will Render in post</strong></p><p>&nbsp;</p><p>check out this</p>', '2023-09-05 17:17:24', 2, 1, 1, 0),
(25, NULL, '', '<p>afsdfsdf</p>', '2023-09-05 17:18:24', 0, 1, 1, 0),
(26, NULL, 'This is to check Table of content', '', '2023-09-08 11:48:36', 2, 1, 1, 0),
(27, NULL, 'Process Tab', '', '2023-09-08 11:59:08', 1, 1, 1, 0),
(28, NULL, 'Process Tab', '', '2023-09-08 12:00:05', 2, 1, 1, 0),
(29, NULL, 'sdfs', 'sdfsdf', '2023-09-08 12:03:05', 2, 1, 1, 0),
(30, NULL, 'Process Tab', '<div class=\"shortcode_title\">\r\n<h4>Process Tab</h4>\r\n\r\n<p>Try the Docy API in seconds. Create your first customer, charge, and more by following the step below.</p>\r\n</div>\r\n', '2023-09-08 12:03:31', 2, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE `sub_menu` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dummy1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `title`, `description`, `dummy1`) VALUES
(1, 'ss', 'sdsscscsc', ''),
(2, 'sss', 'ssss', ''),
(3, 'jj', 'jj', ''),
(4, 'll', '', ''),
(5, 's', 'sss', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `ID` int NOT NULL,
  `UID` int NOT NULL,
  `Tag_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`ID`, `UID`, `Tag_name`, `Description`) VALUES
(1, 10001, 'Order', 'Oder Detail'),
(2, 10002, 'Reports', 'Reports Detail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `main_menu_id` (`main_menu_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UID` (`UID`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `Tagged_id` (`Tagged_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`main_menu_id`) REFERENCES `main_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `tag_id_ref` FOREIGN KEY (`Tagged_id`) REFERENCES `tags` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
