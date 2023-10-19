-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 09:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `cid` int(11) NOT NULL,
  `csid` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`cid`, `csid`, `date_added`) VALUES
(31, 57, '2023-10-11 07:31:05'),
(33, 56, '2023-10-17 06:23:38'),
(34, 59, '2023-10-17 06:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `dental`
--

CREATE TABLE `dental` (
  `d_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dental`
--

INSERT INTO `dental` (`d_id`, `s_id`, `date_added`) VALUES
(21, 56, '2023-10-07 13:22:16'),
(22, 57, '2023-10-07 13:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`mid`, `sid`, `date_added`) VALUES
(14, 57, '2023-10-07 13:22:04'),
(19, 56, '2023-10-12 02:34:32'),
(20, 59, '2023-10-17 06:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `ID_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `extension_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = yes, 0 = no',
  `course` varchar(255) NOT NULL,
  `year` text NOT NULL,
  `section` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `email_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `ID_number`, `first_name`, `middle_name`, `last_name`, `extension_name`, `email`, `current_address`, `permanent_address`, `sex`, `course`, `year`, `section`, `brgy`, `municipality`, `province`, `contact`, `civil_status`, `nationality`, `age`, `dob`, `name`, `relationship`, `mobile`, `telephone`, `home_address`, `email_add`) VALUES
(56, '20-0580-168', 'Christian', '', 'Ytang', '', 'dalag2k09@gmail.com', 'Villaba, Leyte', 'Villaba, Leyte', 1, 'BSIT', 'IV', 'B', 'Pob Del Norte', 'Villaba', 'Leyte', '09466712297', 'Single', 'Filipino', '21', '2002-01-21', 'Aldrin Dalag', 'Father', '09109688737', '', 'Villaba, leyte', ''),
(57, '20-1234-987', 'Nikka Jane', '', 'Gemina', '', 'nikkagemina@gmail.com', 'Palompon, Leyte', 'Palompon,Leyte', 0, 'BSIT', 'IV', 'B', 'Mazaeight', 'Palompon', 'Leyte', '09123746892', 'Single', 'Filipino', '21', '2002-02-12', 'Jhun Ed Nunez', 'Father', '0912375893', '0912375493', 'Palompon,Leyte', ''),
(58, '12-2345-123', 'Kobie Bryan', '', 'Fernandez', '', 'kobie@gmail.com', 'Palompon, Leyte', 'Palompon, Leyte', 1, 'BSIT', 'IV', 'B', 'Mazawalo', 'Palompon', 'Leyte', '09123432912', 'Married', 'Filipino', '23', '0000-00-00', '', '', '', '', '', ''),
(59, '1231231312', 'Whynnie', '', 'Formentera', '', 'whyn@gmail.com', 'Palompon, Leyte', 'Palompon, Leyte', 0, 'BSIT', 'IV', 'B', 'Mazawalo', 'Palompon', 'Leyte', '123123123123', 'Single', 'FIlipino', '21', '2023-10-17', 'NIkka GEmina', 'Mother', '123131231', '1231231', 'Palompon, Leyte', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = yes, 0 = no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `role`) VALUES
(6, 'christianytang', 'chanchan123', 'christian@gmail.com', 1),
(28, 'staff', '123', 'staff@clinic.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `d_sex` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = yes, 0 = no',
  `d_home_address` varchar(255) NOT NULL,
  `d_age` varchar(255) NOT NULL,
  `d_dob` date NOT NULL DEFAULT current_timestamp(),
  `d_name` varchar(255) NOT NULL,
  `d_relationship` varchar(255) NOT NULL,
  `d_mobile` varchar(255) NOT NULL,
  `d_telephone` varchar(255) NOT NULL,
  `d_h_address` varchar(255) NOT NULL,
  `d_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `f_name`, `m_name`, `l_name`, `e_name`, `d_sex`, `d_home_address`, `d_age`, `d_dob`, `d_name`, `d_relationship`, `d_mobile`, `d_telephone`, `d_h_address`, `d_email`) VALUES
(1, 'A', 'B', 'D', 'E', 1, 'C', '12', '1222-12-12', 'F', 'G', '123', '123', 'H', 'I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dental`
--
ALTER TABLE `dental`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `dental`
--
ALTER TABLE `dental`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
