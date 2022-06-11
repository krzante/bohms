-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 01:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
(2, 1, 'COVID-19', 'Bakuna yay', NULL, '', '', '2022-06-11 14:40:04'),
(3, 1, 'Genshin', 'Magroroll si Kapitan', NULL, '', '', '2022-06-11 14:40:04'),
(4, 2, '\"Roll Tayo\" - Mark', 'magroroll tayo sabi ni mark', NULL, '', '', '2022-06-11 14:40:04'),
(7, 2, 'Castoria', 'roll roll roll', NULL, '', '', '2022-06-11 14:40:04'),
(9, 2, 'TESTESTSETSESTSET', 'TESTESTSETSESTSET', NULL, '', '', '2022-06-11 14:40:04'),
(10, 2, 'asdasd', 'asdasd', NULL, '', '', '2022-06-11 14:40:47'),
(13, 2, 'Bakuna Drive', 'bakuna lpara sa rabies ', '2022-06-06 07:30:00', '14.710385363390431', '121.04692504591061', '2022-06-11 17:18:37'),
(14, 2, 'Bugbugin si Chard', 'Free for all suntok kay chard', '2022-06-14 20:53:00', '14.712087211567312', '121.04804084486081', '2022-06-11 18:52:09');

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
(2, 'Ramon', 'Baler', 'Female', '2000-01-29', 'B Negative', 'Unknown', 'Widowed', 'Single', '2000-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'asdasd', 'asdasd@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K'),
(2, 'das', 'ads@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K'),
(3, 'user0', 'user0@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K'),
(4, 'test1', 'test@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K'),
(5, 'asdasdasd', 'asdasdasd@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K'),
(9, 'Renren', 'renren@mail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K'),
(10, 'PasswordCheck0', 'pass0@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K'),
(11, 'PasswordCheck1', 'pass1@gmail.com', '$2y$10$TrxUiBfGZ9D458bMKYvniOGaJMzMm3Lx2T9zOmTrQXnQYf8Qm6AR6'),
(12, 'JOSE', 'uniportal02@gmail.com', '$2y$10$JlOdiJ/JMEFlAmckrc/KEetAGsndcx.NpaN2GqhgDCxNUeind.zci'),
(13, 'User1', 'asdd@gmail.com', '$2y$10$kOHo9XjbGQnUCidrZNi18e8PT0wq6w8.HAkUuLrndbhX/tOEb9PSa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baranggay_event`
--
ALTER TABLE `baranggay_event`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patient_records`
--
ALTER TABLE `patient_records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
