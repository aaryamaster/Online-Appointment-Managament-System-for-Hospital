-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 10:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bg_id` int(11) NOT NULL,
  `bg_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(1, 'O+'),
(2, 'O-'),
(3, 'AB+'),
(4, 'AB-'),
(5, 'A+'),
(6, 'A-'),
(7, 'B+'),
(8, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(22) NOT NULL,
  `dname` varchar(22) NOT NULL,
  `userid` int(22) NOT NULL,
  `dcontact` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `fee` varchar(22) NOT NULL,
  `pname` varchar(22) NOT NULL,
  `pcontact` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(22) NOT NULL,
  `dates` date NOT NULL,
  `tyme` varchar(22) NOT NULL,
  `payment` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `dname`, `userid`, `dcontact`, `expertise`, `fee`, `pname`, `pcontact`, `email`, `address`, `dates`, `tyme`, `payment`) VALUES
(29, 'Dr. Rupali Patil', 1003, '9521670654', 'Medicine', '600', 'Aarya Master', '9893994221', 'aarya.master@gmail.com', 'Dahisar', '2020-11-05', '11.00am', 'Online'),
(30, 'Dr. Abul Kalam', 1009, '7701976564', 'Plastic Surgeon', '1500', 'Tanvi Mehta', '9876543210', 'tanvi.mehta@gmail.com', 'Borivali', '2020-11-18', '03.00pm', 'Online'),
(35, 'Dr. Ramesh Modi', 1005, '9874546856', 'Cardiologist', '900', 'Jyoti Pandey', '8795463201', 'jyoti.pandey@gmail.com', 'Naigaon', '2020-11-20', '11.00am', 'Cash'),
(36, 'Dr. Mita Sharma', 1006, '9673476199', 'Gynecologist', '800', 'Pooja Modi', '8795463201', 'pooja.modi@gmail.com', 'Bhayander', '2020-11-19', '03.00pm', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(22) NOT NULL,
  `cat` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`) VALUES
(1, 'Medicine'),
(2, 'Heart'),
(3, 'Bone'),
(4, 'Kidney'),
(5, 'Cardiologist'),
(6, 'Plastic Surgeon'),
(7, 'General Physician'),
(8, 'Neurologist'),
(9, 'Liver'),
(10, 'Obstetrics'),
(11, 'Onconogist'),
(12, 'Neuro-Surgeon'),
(13, 'Gynecologist');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `comment` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `email`, `comment`) VALUES
(3, 'Tanvi', 'Mehta', 'tanvi.mehta@gma', 'Good Hospital Service'),
(4, 'Pooja', 'Modi', 'pooja.modi@gmai', 'Best Managament'),
(5, 'Aarya', 'Master', 'aarya.master@gm', 'Nice'),
(6, 'Aarya', 'Master', 'aarya.master@gm', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(22) NOT NULL,
  `doctor_id` varchar(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `email` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `id` int(11) NOT NULL,
  `fee` varchar(111) NOT NULL,
  `userid` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doctor_id`, `name`, `address`, `contact`, `email`, `expertise`, `id`, `fee`, `userid`, `password`) VALUES
(1, '2', 'Dr. Suresh Verma', 'Kaman', '9173476199', 'suresh@gmail.com', 'Heart', 2, '500', '1001', '123'),
(2, '1', 'Dr. Ketan Mehta', 'Vasai', '8176476191', 'mehta.ketan@gmail.com', 'Cardiologist', 1, '500', '1002', '123'),
(3, '1', 'Dr. Rupali Patil', 'Vasai', '9521670654', 'rupalipatil@gmail.com', 'Medicine', 1, '600', '1003', '123'),
(4, '4', 'Dr. Bhavesh Sharma', 'Virar', '8994938998', 'bhavesh@gmail.com', 'Liver', 4, '700', '1004', '123'),
(5, '5', 'Dr. Ramesh Modi', 'Vasai', '9874546856', 'modi@gmail.com', 'Cardiologist', 5, '900', '1005', '123'),
(6, '1', 'Dr. Mita Sharma', 'Virar', '9673476199', 'sharma@gmail.com', 'Gynecologist', 1, '800', '1006', '123'),
(7, '8', 'Dr. Anil Shah', 'Kaman', '9874546563', 'shah@gmail.com', 'Obstetrics', 8, '600', '1007', '123'),
(8, '3', 'Dr. Ram Patil', 'Vasai', '7552176893', 'rampalit@gmail.com', 'Neuro-Surgeon', 3, '1000', '1008', '123'),
(9, '6', 'Dr. Abul Kalam', 'Vasai', '7701976564', 'abulkalam@gmail.com', 'Plastic Surgeon', 6, '1500', '1009', '123'),
(11, '11', 'Dr. Isha Pandey', 'Kaman', '7676476199', 'pandey.isha@gmail.com', 'Medicine', 0, '800', '1012', '123'),
(12, '11', 'Dr. Aditi Kalan ', 'Kaman', '9976476191', 'aditikalan@gmail.com', 'Onconogist', 0, '1000', '1011', '123'),
(14, '', 'Dr. Dipti Jha', 'Vasai', '7552147036', 'jhadipti@gmail.com', 'Bone', 0, '800', '1016', '123'),
(16, '', 'Dr. Gita Kapoor', 'Virar', '7752147036', 'kapoor@gmail.com', 'General Physician', 0, '500', '1013', '123'),
(17, '', 'Dr. Veer Iyer', 'Kaman', '9876476191', 'iyer@gmail.com', 'Neurologist', 0, '900', '1015', '123'),
(22, '', 'Dr. Sita Gupta', 'Borivali', '9652314837', 'gupta@gmail.com', 'General Physician', 0, '1000', '1017', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `email` varchar(22) NOT NULL,
  `feedback` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `email`, `feedback`) VALUES
(3, 'tanvi.mehta@gmail.com', 'good'),
(4, 'pooja.modi@gmail.com', 'Best'),
(7, 'jyoti.pandey@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `age` varchar(22) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `bgroup` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `name`, `age`, `contact`, `address`, `bgroup`, `email`, `password`) VALUES
(8, 'Aarya Master', '20', '9893994221', 'Dahisar', 'AB+', 'aarya.master@gmail.com', 'abcd'),
(9, 'Tanvi Mehta', '21', '9876543210', 'Borivali', 'B-', 'tanvi.mehta@gmail.com', 'jyoti'),
(10, 'Pooja Modi', '22', '8795463201', 'Bhayander', 'AB+', 'pooja.modi@gmail.com', 'xyz'),
(14, 'Jyoti Pandey', '20', '8176476190', 'Naigaon', 'O+', 'jyoti.pandey@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `type`) VALUES
('admin', 'admin', 'admin'),
('adnim', '13020944', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `type`) VALUES
('adnim', '13020944', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `bg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
