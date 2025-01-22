-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 09:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanmessanger`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagebox`
--

CREATE TABLE `messagebox` (
  `msgid` int(11) NOT NULL,
  `senderid` int(4) NOT NULL,
  `receiverid` int(4) NOT NULL,
  `message` varchar(250) NOT NULL,
  `msgdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messagebox`
--

INSERT INTO `messagebox` (`msgid`, `senderid`, `receiverid`, `message`, `msgdate`) VALUES
(9, 1, 2, 'hello', '2023-10-18 05:29:13'),
(10, 1, 2, 'hoooooooooooooooooooooooooo', '2023-10-18 05:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `userid` int(20) NOT NULL,
  `picpath` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`userid`, `picpath`) VALUES
(1, '1_A.jpg'),
(1, '1_B.jpg'),
(1, '1_C.jpg'),
(1, '1_D.jpg'),
(1, '1_E.jpg'),
(2, '2_A.'),
(2, '2_B.jpg'),
(2, '2_C.jpg'),
(2, '2_D.jpg'),
(2, '2_E.');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id` int(5) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(222) NOT NULL,
  `propic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Firstname`, `Lastname`, `Dob`, `Email`, `Mobile`, `Username`, `Password`, `propic`) VALUES
(1, 'Sandip', 'Menariya', '2023-08-30', 'hello@gmail.com', '3243243', 'sandip', '202cb962ac59075b964b07152d234b70', '1_B.jpg'),
(2, 'vinod', 'vyas', '2023-08-29', 'vinod@gmail.com', '86787987', 'vinod', '202cb962ac59075b964b07152d234b70', '2_D.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagebox`
--
ALTER TABLE `messagebox`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagebox`
--
ALTER TABLE `messagebox`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
