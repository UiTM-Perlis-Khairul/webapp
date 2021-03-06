-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 04:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+08:00";

CREATE USER 'webapp_db'@'%' IDENTIFIED BY 'password';
GRANT USAGE ON *.* TO 'webapp_db'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS `webapp_db`;
GRANT ALL PRIVILEGES ON `webapp\_db`.* TO 'webapp_db'@'%';
USE `webapp_db`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_user`
--

CREATE TABLE `app_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_user`
--

INSERT INTO `app_user` (`username`, `password`, `role`, `status`) VALUES
('amin', '*8DC54F2E15823C98AEA063E339A5D4C53D1A471A', 'normal', 'inactive'),
('jamal', '*8DC54F2E15823C98AEA063E339A5D4C53D1A471A', 'admin', 'active'),
('razif', '*8DC54F2E15823C98AEA063E339A5D4C53D1A471A', 'normal', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `username` varchar(10) NOT NULL,
  `PHP_SELF` varchar(50) NOT NULL,
  `SERVER_NAME` varchar(50) NOT NULL,
  `HTTP_HOST` varchar(50) NOT NULL,
  `REQUEST_TIME` varchar(50) NOT NULL,
  `HTTP_USER_AGENT` varchar(50) NOT NULL,
  `SCRIPT_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
