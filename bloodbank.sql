-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 10:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbankinformation`
--

CREATE TABLE `bloodbankinformation` (
  `did` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `dgname` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bloodgrp` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `pan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbankinformation`
--

INSERT INTO `bloodbankinformation` (`did`, `dname`, `dgname`, `gender`, `bloodgrp`, `dob`, `mobile`, `email`, `address`, `aadhar`, `pan`) VALUES
(16, 'Sk Niyaz Noor', 'Sk Noor Alli', 'Male', 'B+', '2000-09-23', 6372271191, 'skniyaznoor23@gmail.com', 'Jajpur, Odisha', 809780010962, 'CMXPN3288A'),
(17, 'Vampire', 'Val Dracula', 'Male', 'O-', '1900-09-23', 9853547523, 'vampire23@gmail.com', 'Castlevania', 809780020962, 'CMXPN3288V'),
(18, 'Tony Stark', 'Howard Stark', 'Male', 'A+', '1986-06-24', 6985471236, 'tonystark22@gmail.com', 'New York, USA', 569821437856, 'CMXPN5689T'),
(19, 'Dark Knight', 'Knight Warrior ', 'Male', 'B-', '2000-12-29', 7856941320, 'darkknight@gmail.com', 'Dark Tower', 123456789123, 'CMXOU2301D'),
(20, 'Jyoti Prakash Behera', 'Sagar Prakash Behera', 'Male', 'B+', '2000-07-22', 7895632410, 'jyotiprakashbehera23@gmail.com', ' Bhubaneswar, Patia', 785641239521, 'CMXJN23546'),
(22, 'Killer', 'Dead Killer', 'Female', 'O-', '2001-01-29', 9632587413, 'killer@gmail.com', 'Killervila', 123456789650, 'CMXJN2354K'),
(23, 'ASUS', 'TUF Gaming F15', 'Male', 'A-', '1999-02-05', 7852146390, 'asus@gmail.com', 'MotherBoard', 145563241105, 'CSXAW15463'),
(24, 'Honeycomb Design', 'Self Cleaning', 'Female', 'AB-', '2010-07-07', 7788996655, 'dtsx@gmail.com', 'Intel Core i5', 110022334466, 'CRFG23654O'),
(26, 'Ram Chandra', 'Dushrath', 'Male', 'AB-', '1000-01-11', 9988556633, 'ramchandra@gmail.com', 'Ajodhya', 112233005500, 'RAM123456'),
(27, 'Laxman', 'Dushrath', 'Male', 'AB+', '1002-01-01', 9966332255, 'laxman@gmail.com', 'Ajodhya', 110022003003, 'LAXMAN320'),
(28, 'Arjun', 'Pandu', 'Male', 'O+', '1000-12-23', 7755336622, 'arjun@gmail.com', 'Bharat', 110022003300, 'ARJUN2564'),
(29, 'Loki', 'Odin', 'Male', 'B+', '1800-09-23', 7778883331, 'loki123@gmail.com', 'Asguard ', 112233665544, 'LOKI65482'),
(30, 'Priti Parna Mahalik', 'Val Dracula', 'Female', 'B+', '2000-11-15', 9875642130, 'guddu@love.com', 'Heart', 987654321456, 'CMXPN3288P');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`username`, `email`, `password`) VALUES
('dash', 'dash@yopmail.com', 'dash@123'),
('knight', 'knight@gmail.com', '12345678'),
('lipun', 'lipun@gmail.com', '123456'),
('rashmi', 'rashmi@gmail.com', '123456'),
('skniyaznoor', 'skniyaznoor23@gmail.com', 'Niyaz@2309'),
('somanath', 'somanathsahoo@gmail.com', '123456'),
('spiderman', 'spiderman@gmail.com', '123456789'),
('vampire', 'vampireknight@gmail.com', 'Vampire@9522');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbankinformation`
--
ALTER TABLE `bloodbankinformation`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `aadhar_2` (`aadhar`),
  ADD UNIQUE KEY `aadhar_3` (`aadhar`),
  ADD KEY `mobile_2` (`mobile`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbankinformation`
--
ALTER TABLE `bloodbankinformation`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
