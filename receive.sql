-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 06:52 PM
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
-- Database: `receive`
--

-- --------------------------------------------------------

--
-- Table structure for table `receive_table`
--

CREATE TABLE `receive_table` (
  `patient_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `reference_name` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `collected_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `blood_grp` varchar(100) NOT NULL,
  `ml_required` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receive_table`
--

INSERT INTO `receive_table` (`patient_name`, `age`, `reference_name`, `hospital_name`, `collected_name`, `gender`, `phone`, `city`, `blood_grp`, `ml_required`) VALUES
('+919112456509', 21, 'w2', 'wqe', 'wq', 'wq', 0, 'SOLAPUR', 'O+', 2),
('efjnje', 12, '1', '2', '2', '2', 0, '23', 'AB-', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
