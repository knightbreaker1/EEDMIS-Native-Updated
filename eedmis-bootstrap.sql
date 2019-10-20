-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 08:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eedmis-bootstrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `cemetery_table_category`
--

CREATE TABLE `cemetery_table_category` (
  `c_category_id` int(11) NOT NULL,
  `catergories` varchar(100) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cemetery_table_category`
--

INSERT INTO `cemetery_table_category` (`c_category_id`, `catergories`, `users_id`) VALUES
(1, 'A', 0),
(2, 'B', 0),
(3, 'C', 0),
(4, 'D', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cemetery_table_people`
--

CREATE TABLE `cemetery_table_people` (
  `people_id` int(11) NOT NULL,
  `grave_no` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `borndate` varchar(50) NOT NULL,
  `dieddate` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `gravepic` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `attachment_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cemetery_table_people`
--

INSERT INTO `cemetery_table_people` (`people_id`, `grave_no`, `first_name`, `middle_name`, `last_name`, `civil_status`, `address`, `sex`, `borndate`, `dieddate`, `categories`, `location`, `photo`, `gravepic`, `type`, `attachment_file`) VALUES
(1, 1, 'Jack', '', 'Daniel', 'Single', 'Maigo', 'Male', '12/12/1950', '1/1/2018', 'A', 'PALAO PUBLIC CEMETERY', '', '', '', ''),
(2, 0, 'Jose', '', 'Cuervo', 'Single', 'Buruun', 'Male', '2/30/1911', '2/3/2019', 'B', 'DALIPUGA PUBLIC CEMETERY', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ibjt_drivers`
--

CREATE TABLE `ibjt_drivers` (
  `driver_id` int(11) NOT NULL,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `address` varchar(36) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibjt_drivers`
--

INSERT INTO `ibjt_drivers` (`driver_id`, `first_name`, `last_name`, `address`, `birthdate`) VALUES
(1, 'raul', 'pedro', 'Iligan', '1998-11-05'),
(2, 'sad', 'asd', 'asd', '2019-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `ibjt_schedule`
--

CREATE TABLE `ibjt_schedule` (
  `schedule_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibjt_schedule`
--

INSERT INTO `ibjt_schedule` (`schedule_id`, `driver_id`, `schedule_time`, `schedule_date`) VALUES
(2, 1, '02:12:00', '2019-10-17'),
(3, 1, '01:01:00', '1111-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `market_tbl_category`
--

CREATE TABLE `market_tbl_category` (
  `market_tbl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `market_tbl_renters`
--

CREATE TABLE `market_tbl_renters` (
  `market_id` int(11) NOT NULL,
  `stall_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `c_status` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `b_date` date NOT NULL,
  `stall_section` varchar(50) NOT NULL,
  `person_image` varchar(200) NOT NULL,
  `stall_image` varchar(200) NOT NULL,
  `attachment_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_tbl_renters`
--

INSERT INTO `market_tbl_renters` (`market_id`, `stall_id`, `f_name`, `m_name`, `l_name`, `gender`, `c_status`, `address`, `b_date`, `stall_section`, `person_image`, `stall_image`, `attachment_file`) VALUES
(0, 2, 'Volks', '', 'Wagen', 'Male', 'Single', 'CDO', '1995-10-10', '1', '', '', ''),
(1, 1, 'Wendalle', 'V', 'Dy', 'Male', 'Single', 'Rogongon', '1997-08-20', '1', '', '', ''),
(3, 3, 'Honda', 'V', 'Civic', 'Male', 'Single', 'Rogongon', '1997-08-20', '4', '', '', ''),
(4, 4, 'Mitsubishi', 'V', 'Lancer', 'Male', 'Single', 'Japan', '1997-08-20', '2', '', '', ''),
(5, 4, 'Kia', 'V', 'Sorento', 'Female', 'Married', 'Korea', '1997-08-20', '2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slaughterhouse_pricing`
--

CREATE TABLE `slaughterhouse_pricing` (
  `pricing_id` int(11) NOT NULL,
  `species_type` varchar(36) NOT NULL,
  `spiecies_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_role` varchar(16) NOT NULL,
  `user_image` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `user_role`, `user_image`) VALUES
(1, 'ibjt', 'ibjt', 'ibjt', 'admin', 'ibjt', NULL),
(2, 'admin', 'admin', 'James', 'Acain', 'admin', NULL),
(3, 'slaughterhouse', 'slaughterhouse', 'slaughterhouse', 'slaughterhouse', 'slaughterhouse', NULL),
(5, 'cemetery', 'cemetery', 'cemetery', 'cemetery', 'cemetery', NULL),
(6, 'market', 'market', 'Market Admin', 'Admin', 'market', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cemetery_table_category`
--
ALTER TABLE `cemetery_table_category`
  ADD PRIMARY KEY (`c_category_id`);

--
-- Indexes for table `cemetery_table_people`
--
ALTER TABLE `cemetery_table_people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `ibjt_drivers`
--
ALTER TABLE `ibjt_drivers`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `ibjt_schedule`
--
ALTER TABLE `ibjt_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `market_tbl_category`
--
ALTER TABLE `market_tbl_category`
  ADD PRIMARY KEY (`market_tbl_id`);

--
-- Indexes for table `market_tbl_renters`
--
ALTER TABLE `market_tbl_renters`
  ADD PRIMARY KEY (`market_id`);

--
-- Indexes for table `slaughterhouse_pricing`
--
ALTER TABLE `slaughterhouse_pricing`
  ADD PRIMARY KEY (`pricing_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cemetery_table_category`
--
ALTER TABLE `cemetery_table_category`
  MODIFY `c_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cemetery_table_people`
--
ALTER TABLE `cemetery_table_people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ibjt_drivers`
--
ALTER TABLE `ibjt_drivers`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ibjt_schedule`
--
ALTER TABLE `ibjt_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `market_tbl_category`
--
ALTER TABLE `market_tbl_category`
  MODIFY `market_tbl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market_tbl_renters`
--
ALTER TABLE `market_tbl_renters`
  MODIFY `market_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slaughterhouse_pricing`
--
ALTER TABLE `slaughterhouse_pricing`
  MODIFY `pricing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
