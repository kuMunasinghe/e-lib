-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 10:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `new_register` (IN `email` VARCHAR(255), IN `user` VARCHAR(255), IN `password` VARCHAR(255), IN `firstnm` VARCHAR(255), IN `lastnm` VARCHAR(255), IN `regno` VARCHAR(255))  BEGIN
INSERT INTO login_data (email,user_stat,password,first_name,last_name,reg_no) VALUES (email,user,password,firstnm,lastnm,reg_no);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `email` varchar(255) NOT NULL,
  `user_stat` varchar(20) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `first_name` text NOT NULL DEFAULT 'first',
  `last_name` text NOT NULL DEFAULT 'last',
  `reg_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`email`, `user_stat`, `password`, `first_name`, `last_name`, `reg_no`) VALUES
('36-is-0015@kdu.ac.lk', 'user', '11274', 'Some', 'One', 'D/BIT/19/0015'),
('36-it-0043@kdu.ac.lk', 'admin', '1234', 'Kasun', 'Munasinghe', 'D/BIT/19/0043'),
('kasun.munasinghe@outlook.com', 'user', '123123', 'Kasun', 'Munasinghe', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `reg_no` (`reg_no`) USING HASH;
ALTER TABLE `login_data` ADD FULLTEXT KEY `first_name` (`first_name`);
ALTER TABLE `login_data` ADD FULLTEXT KEY `last_name` (`last_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
