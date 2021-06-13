-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 07:29 PM
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
-- Database: `register1`
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
('Rahul Rajkumar Jain', 20, '676 north ksba', 'Pune', 9112456509, 'rahuljain0718@gmail.com', 'AB+', 'Male', 5, 54),
('Rahul Rajkumar Jain', 20, '676', 'Pune', 9921255011, 'kondatul@gmail.com', 'AB+', 'Male', 5, 55),
('pratik jain', 20, '676', 'Pune', 9201983784, 'abc@gmail.com', 'B-', 'Male', 6, 55);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `Name` text DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`Name`, `Email`, `Comment`) VALUES
('Rahul Rajkumar Jain', 'rahuljain0718@gmail.com', 'rtgtrthhtgyhy'),
('Rahul Rajkumar Jain', 'rahuljain0718@gmail.com', 'SDF');

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
('dcdscv', 20, 'wcefwec', 'wdvcwd', 'wdv', 'Male', 0, 'SOLAPUR', 'B+', 20);

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Rahul Rajkumar Jain', 'rahuljain0718@gmail.com', 'rahuljain0718', '48d3e4bd4bd6c5306aebdf2d650f1a25'),
(13, 'Vidya Rajkumar Jain', 'abc@gmail.com', 'priyankajain2961', '48d3e4bd4bd6c5306aebdf2d650f1a25'),
(14, 'atul kondekar', 'kondatul@gmail.com', 'atulkond@123', '48d3e4bd4bd6c5306aebdf2d650f1a25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
