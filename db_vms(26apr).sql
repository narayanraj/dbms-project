-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 08:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(5) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `head_count` int(5) NOT NULL,
  `domain` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `phone`, `head_count`, `domain`, `start_date`, `status`) VALUES
(201, 'Generic Virtual Marketing systems', '0224512365', 5, 'marketing', '2019-03-21', 'active'),
(202, 'Persistent systems pvt ltd', '0224512365', 10, 'software', '2018-06-15', 'active'),
(203, 'Gomantak printing press', '0224512365', 10, 'media', '2018-09-10', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(5) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `post` varchar(15) NOT NULL,
  `age` int(5) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cid` int(5) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `fname`, `lname`, `Gender`, `post`, `age`, `Phone`, `email`, `cid`, `status`) VALUES
(1001, 'Sumeetesh', 'karande', 'Male', 'ignitor', 25, '9999991111', 'sumeet.kakode@gvms.com', 201, 'Active'),
(1003, 'Pankajji', 'kurade', 'Male', 'technician', 28, '9226100028', 'pankaj@gec.com', 201, 'Active'),
(1004, 'Ashwini', 'Rawat', 'Female', 'Receptionist', 22, '7785120011', 'ashwini@ymail.com', 201, 'Active'),
(1005, 'Tanuja', 'Sharma', 'Female', 'technician', 33, '9420124411', 'tanuja@y.com', 202, 'Active'),
(1006, 'Prasad', 'Raikar', 'Male', 'consultant', 42, '8877102310', 'prasad@gmail.com', 202, 'Active'),
(1007, 'Pravin', 'Shirodkar', 'Male', 'Engineer', 34, '9977125245', 'pravin@ym.com', 203, 'Active'),
(1008, 'Suraj', 'Gaonkar', 'Male', 'clerk', 28, '7711025261', 'suraj.gk@rediff.com', 201, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `OTP` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `sid` int(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `Age` int(5) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `salary` int(6) NOT NULL,
  `status` varchar(8) NOT NULL,
  `user` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`sid`, `username`, `password`, `fname`, `lname`, `gender`, `Age`, `phone`, `salary`, `status`, `user`) VALUES
(9001, 'rama', 'aaa', 'rama', 'naik', 'male', 35, '9422900101', 12000, 'active', 'admin'),
(9002, 'laxman', 'aaa', 'laxman', 'teli', 'male', 33, '9750900202', 11000, 'active', 'guard'),
(9003, 'Nanda', 'aaa', 'Nanda', 'Dessai', 'Male', 38, '9923001122', 17200, 'Active', 'admin'),
(9005, 'Shanka', 'aaa', 'Shankar', 'Teli', 'Male', 35, '7711204102', 17300, 'Active', 'guard');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `vid` int(5) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Person_Meet` int(5) NOT NULL,
  `date` date NOT NULL,
  `entry` time NOT NULL,
  `exits` time DEFAULT NULL,
  `purpose` varchar(12) NOT NULL,
  `sid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`vid`, `fname`, `lname`, `Gender`, `phone`, `Person_Meet`, `date`, `entry`, `exits`, `purpose`, `sid`) VALUES
(7001, 'Shyam', 'Raj', 'male', '8812003256', 1004, '0000-00-00', '00:00:00', '00:00:00', 'Interview', 9002),
(7002, 'uuuu', 'uuuu', 'female', '1111', 1004, '2020-04-25', '15:55:00', '17:20:03', 'meetg', 9002),
(7003, 'gggg', 'gggg', 'female', '1111', 1004, '2020-04-25', '15:50:00', '17:11:02', 'meetg', 9002),
(7004, 'xxxx', 'xxxx', 'female', '1111', 1004, '2020-04-25', '15:50:00', '17:01:58', 'meetg', 9002),
(7007, 'rajat', 'sharma', 'male', '7845120312', 1003, '2020-04-25', '16:05:12', '00:00:00', 'meeting', 9002),
(7008, 'rajat', 'sharma', 'male', '7845120342', 1003, '2020-04-26', '11:05:12', '00:00:00', 'meeting', 9002),
(7009, 'Rahul', 'Gandhi', 'Male', '9856231200', 1003, '2020-04-25', '16:04:12', '16:59:06', 'interview', 9001),
(7010, 'Parag', 'Sabnis', 'Male', '5623124588', 1001, '2020-04-25', '16:04:52', '00:00:00', 'interview', 9005),
(7011, 'Manohar', 'Parrikar', 'Male', '8325623014', 1008, '2020-04-25', '16:57:48', '00:00:00', 'other', 9005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `id` (`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`),
  ADD KEY `fk_cid` (`cid`);

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `sid` (`sid`),
  ADD KEY `username_2` (`username`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `vid` (`vid`),
  ADD KEY `fk_person_meet` (`Person_Meet`),
  ADD KEY `fk_sid` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
--
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9006;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `vid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7012;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_cid` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`);

--
-- Constraints for table `forgot`
--
ALTER TABLE `forgot`
  ADD CONSTRAINT `forgot_ibfk_1` FOREIGN KEY (`id`) REFERENCES `visitor` (`vid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `fk_person_meet` FOREIGN KEY (`Person_Meet`) REFERENCES `employee` (`empid`),
  ADD CONSTRAINT `fk_sid` FOREIGN KEY (`sid`) REFERENCES `security` (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
