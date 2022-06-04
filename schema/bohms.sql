-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 09:46 AM
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
