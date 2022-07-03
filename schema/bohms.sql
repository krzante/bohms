-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 11:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bohms`
--

-- --------------------------------------------------------

--
-- Table structure for table `baranggay_event`
--

CREATE TABLE `baranggay_event` (
  `id` int(255) NOT NULL,
  `creator_id` int(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_date` datetime DEFAULT NULL,
  `event_lat` varchar(255) NOT NULL,
  `event_lng` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baranggay_event`
--

INSERT INTO `baranggay_event` (`id`, `creator_id`, `event_name`, `event_description`, `event_date`, `event_lat`, `event_lng`, `date_created`) VALUES
(1, 2, 'TESAT', 'TEST', '2022-07-03 15:42:00', '14.707126909730071', '121.04491774773909', '2022-07-03 15:42:44'),
(2, 2, 'TEST2', 'TEST2', '2022-07-06 16:16:00', '14.70704389116697', '121.051363431278', '2022-07-03 16:16:15'),
(3, 2, 'aDSASDASDASDSDASDASDASDASDASDASDASDASDSAD', 'aaDSASDASDASDSDASDASDASDASDASDASDASDASDSAD', '2022-07-22 16:16:00', '14.710945729499603', '121.06286474353386', '2022-07-03 16:16:32'),
(4, 2, 'TEST4', 'ASDASD', '2022-07-22 16:21:00', '14.699862665990903', '121.06168993598534', '2022-07-03 16:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `hotspots`
--

CREATE TABLE `hotspots` (
  `id` int(255) NOT NULL,
  `creator_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `infected` int(255) NOT NULL,
  `radius` int(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `key`
--

CREATE TABLE `key` (
  `SecretKey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `key`
--

INSERT INTO `key` (`SecretKey`) VALUES
('7943e9c5e2e820b0f03f1f27a1f1745bf5452686');

-- --------------------------------------------------------

--
-- Table structure for table `patient_records`
--

CREATE TABLE `patient_records` (
  `id` int(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `birthdate` date NOT NULL,
  `bloodtype` enum('O Negative','O Positive','A Negative','A Positive','B Negative','B Positive','AB Negative','AB Positive') NOT NULL,
  `current_health_status` varchar(255) NOT NULL,
  `medical_history` varchar(255) NOT NULL,
  `health_case` varchar(255) NOT NULL,
  `date_of_case` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_records`
--

INSERT INTO `patient_records` (`id`, `patient_name`, `birthplace`, `sex`, `birthdate`, `bloodtype`, `current_health_status`, `medical_history`, `health_case`, `date_of_case`) VALUES
(4, 'asdsad', '123', 'Male', '2022-06-24', 'AB Negative', 'asdasd', 'asd', 'asdasd', '1234-03-12'),
(5, 'Ramon2', 'Baler', 'Female', '2000-01-29', 'B Negative', 'Unknown', 'Widowed', 'Single', '2000-01-29'),
(6, 'Ramon23', 'Baler', 'Female', '2000-01-29', 'B Negative', 'Unknown', 'Widowed', 'Single', '2000-01-29'),
(8, 'Ramon123123', 'Baler', 'Female', '2000-01-29', 'B Negative', 'Unknown', 'Widowed', 'Single', '2000-01-29'),
(9, 'Ramon123123', 'Baler', 'Female', '2000-01-29', 'B Negative', 'Unknown', 'Widowed', 'Single', '2000-01-29'),
(10, 'Ramon213123', 'Baler', 'Female', '2000-01-29', 'B Negative', 'Unknown', 'Widowed', 'Single', '2000-01-29'),
(11, 'Ramon2sadasd', 'Baler', 'Female', '2000-01-29', 'B Negative', 'Unknown', 'Widowed', 'Single', '2000-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Birthdate` date DEFAULT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `Birthdate`, `Position`) VALUES
(1, 'asdasd', 'asdasd@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', NULL, ''),
(2, 'das', 'ads@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', '2022-07-21', 'Baranggay Chairman'),
(3, 'user0', 'user0@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', NULL, ''),
(4, 'test1', 'test@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', NULL, ''),
(5, 'asdasdasd', 'asdasdasd@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', NULL, ''),
(9, 'Renren', 'renren@mail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', NULL, ''),
(10, 'PasswordCheck0', 'pass0@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', NULL, ''),
(11, 'PasswordCheck1', 'pass1@gmail.com', '$2y$10$TrxUiBfGZ9D458bMKYvniOGaJMzMm3Lx2T9zOmTrQXnQYf8Qm6AR6', NULL, ''),
(12, 'JOSE', 'uniportal02@gmail.com', '$2y$10$JlOdiJ/JMEFlAmckrc/KEetAGsndcx.NpaN2GqhgDCxNUeind.zci', NULL, ''),
(13, 'User1', 'asdd@gmail.com', '$2y$10$kOHo9XjbGQnUCidrZNi18e8PT0wq6w8.HAkUuLrndbhX/tOEb9PSa', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baranggay_event`
--
ALTER TABLE `baranggay_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotspots`
--
ALTER TABLE `hotspots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_records`
--
ALTER TABLE `patient_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baranggay_event`
--
ALTER TABLE `baranggay_event`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotspots`
--
ALTER TABLE `hotspots`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_records`
--
ALTER TABLE `patient_records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
