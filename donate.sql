-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 06:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate_table`
--

CREATE TABLE `donate_table` (
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `height` int(100) NOT NULL,
  `weight` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate_table`
--

INSERT INTO `donate_table` (`name`, `age`, `address`, `city`, `phone`, `email`, `bloodgroup`, `gender`, `height`, `weight`) VALUES
('21', 20, '213', 'Pune', 9921255011, '123', 'Chooose your blood', 'Chooose your gender', 2, 2),
('Rahul Rajkumar Jain', 20, '1', 'Pune', 9112456509, '2', 'B-', 'Male', 4, 3),
('+919112456509', 60, '676', 'Pune', 9865325678, 'rahuljain0718@gmail.com', 'A-', 'Male', 8, 7),
('+919112456509', 21, '676', 'Pune', 9992838744, '12', 'Chooose your blood', 'Chooose your gender', 2, 32),
('20', 23, '2323', 'Pune', 3254675683, '', 'B+', 'Male', 3, 43),
('Rahul Rajkumar Jain', 20, '676 north kasba', 'Pune', 9921255012, 'rahuljain0718@gmail.com', 'A+', 'Male', 4, 45),
('Rahul Rajkumar Jain', 20, '676 north kasba', 'Pune', 9112456504, 'rahuljain0718@gmail.com', 'A-', 'Male', 5, 56);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
