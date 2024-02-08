-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 07:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaintech_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `gender`, `password`, `cpassword`, `address`) VALUES
(1, 'df', 'ddf', 'fvd', 'Female', 'vdc', 'cvc', 'vx'),
(2, 'hello', '', 'denilj05@gmail.com', 'Male', '22222222', '22222222', 'mmmmm'),
(4, 'hello', 'patil', 'deniljp055@gmail.com', 'Male', 'mmmm', 'mmmm', 'kjvhghj'),
(5, 'hello', 'denil', 'j@gmail.com', 'Female', 'mmmm', 'mmmm', 'zkjbdjhghgfhcgjvlkgjxvb ljkg'),
(6, 'hello', 'patil', 'deniljp055@gmail.com', 'Male', 'mmmm', 'mmmm', 'kjvhghj'),
(7, 'DENIL', 'patil', 'deniljp055@gmail.com', 'Male', 'llll', 'llll', 'hyhhy'),
(8, 'denil', 'patil', '1212121kp01@gmail.com', 'Other', 'mmmm', 'mmmmm', 'msjm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
