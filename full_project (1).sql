-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 08:52 AM
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
-- Database: `full_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`) VALUES
(2, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `logo_change`
--

CREATE TABLE `logo_change` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_name` varchar(250) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `nid_birth_certificate` varchar(100) NOT NULL,
  `course_type` varchar(300) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `guardian_number` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `division` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `thana` varchar(200) NOT NULL,
  `post_office` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `session` varchar(50) NOT NULL,
  `exam_year` varchar(50) NOT NULL,
  `course` varchar(300) NOT NULL,
  `registration_type` varchar(300) NOT NULL,
  `total_fee` varchar(300) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `admission_time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_roll` varchar(30) NOT NULL,
  `ssc_year` varchar(50) NOT NULL,
  `ssc_gpa` varchar(30) NOT NULL,
  `jsc_board` varchar(50) NOT NULL,
  `jsc_roll` varchar(30) NOT NULL,
  `jsc_year` varchar(50) NOT NULL,
  `jsc_gpa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`id`, `student_name`, `father_name`, `mother_name`, `dob`, `religion`, `gender`, `job_title`, `blood_group`, `nid_birth_certificate`, `course_type`, `phone_number`, `guardian_number`, `email`, `division`, `district`, `thana`, `post_office`, `village`, `session`, `exam_year`, `course`, `registration_type`, `total_fee`, `photo`, `admission_time`, `status`, `ssc_board`, `ssc_roll`, `ssc_year`, `ssc_gpa`, `jsc_board`, `jsc_roll`, `jsc_year`, `jsc_gpa`) VALUES
(1, 'sarnaly', 'md.sahabuddin ', 'nasrin', '2002-01-02', 'Islam', 'Female', 'Government Empolyee', 'AB+', '014785236987456', 'Offline', '01959949024', '01989861244', 'sarnaly@gmail.com', 'Dhaka', 'Madaripur', 'Madaripur Sadar', 'madariput', 'bagarpar', 'September-December', '', 'Full Stack Web Development', 'Register', '25520', 'avator.png', '01-12-2024,12:18:44 pm', 'Active', '', '', '', '', '', '', '', ''),
(3, 'sadiya', 'md.sahabuddin ', 'nasrin', '2003-01-01', 'Islam', 'Female', 'student', 'A+', '014785236987456', 'Offline', '01959949024', '01989861244', 'sadiya@gmail.com', 'Dhaka', 'Madaripur', 'Madaripur Sadar', 'madariput', 'bagarpar', 'June-December', '', 'Computer Office Application', 'Register', '50000', 'images.jpg', '01-12-2024,08:26:22 pm', 'Active', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `register time` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `username`, `email`, `mobile`, `password`, `register time`, `status`, `photo`) VALUES
(1, 'sadiya', 'sadiya@gmail.com', '01959949024', '25f9e794323b453885f5181f1b624d0b', ' time', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_change`
--
ALTER TABLE `logo_change`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo_change`
--
ALTER TABLE `logo_change`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
