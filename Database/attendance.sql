-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2025 at 08:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(2, 'Harsh Yeram', 'harsh123', 'Harsh', 'Manohar', 'Yeram');

-- --------------------------------------------------------

--
-- Table structure for table `passcode`
--

CREATE TABLE `passcode` (
  `passcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passcode`
--

INSERT INTO `passcode` (`passcode`) VALUES
('43945');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_no` varchar(250) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(10) NOT NULL,
  `section` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `firstname`, `middlename`, `lastname`, `course`, `section`) VALUES
(6, '2001170116', 'Shreya', 'Sandip', 'Dhamapurkar', 'FYCO', '1-2'),
(7, '2001170310', 'Vasant', 'Prabhugaonkar', 'Rajkuwar', 'FYCO', '1-2'),
(8, '2001170132', 'Vaishnavi', 'Shashikant', 'Madav', 'FYCO', '1-2'),
(9, '2001170175', 'Madhura', 'Kamleshwar', 'Hunari', 'FYCO', '1-2'),
(10, '2001170174', 'Daksh', 'Vitthal', 'Patade', 'FYCO', '1-2'),
(11, '2001170328', 'Yuga', 'Lawoo', 'Parkar', 'FYCO', '1-2'),
(12, '2001170133', 'Atharv', 'Rajendra', 'Khanolkar', 'FYCO', '1-2'),
(13, '2001170197', 'Riddhi', 'Rajendra', 'Mhapankar', 'FYCO', '1-2'),
(14, '2001170126', 'Prachi', 'Babaji', 'Sawant', 'FYCO', '1-2'),
(15, '2001170122', 'Samruddhi', 'Sukhanand', 'Kambli', 'FYCO', '1-2'),
(16, '2101170134', 'Vishnu', 'Govind', 'Sawant', 'SYCO', '2-4'),
(17, '2101170135', 'Tejashri', 'Vishwanath', 'Teli', 'SYCO', '2-4'),
(18, '2101170136', 'Sai', 'Sagar', 'Hadkar', 'SYCO', '2-4'),
(19, '2101170137', 'Chaitnya', 'Santosh', 'Burkul', 'SYCO', '2-4'),
(20, '2101170138', 'Suhani', 'Subhash', 'Margaj', 'SYCO', '2-4'),
(21, '2101170139', 'Kanhaita', 'Uttam', 'Naik', 'SYCO', '2-4'),
(22, '2101170140', 'Shreyash', 'Suryakant', 'Makhar', 'SYCO', '2-4'),
(23, '2101170141', 'Srishti', 'Shrinivas', 'Vetkar', 'SYCO', '2-4'),
(24, '2101170142', 'Arth', 'Ajit', 'Kambale', 'SYCO', '2-4'),
(25, '2101170143', 'Samarath', 'Ajit', 'Kambale', 'SYCO', '2-4'),
(26, '2001170279', 'Harsh', 'Manohar', 'Yeram', 'TYCO', '3-6'),
(27, '2001170282', 'Sahil', 'Vishnu', 'Shetye', 'TYCO', '3-6'),
(28, '2001170286', 'Pooja ', 'Ganesh', 'Narkar', 'TYCO', '3-6'),
(29, '2001170296', 'Sachin', 'Sanjay', 'Dhuri', 'TYCO', '3-6'),
(30, '2101170361', 'Amol', 'Pramod', 'Parab', 'TYCO', '3-6'),
(31, '2101170357', 'Sairaj', 'Laxman', 'Naik', 'TYCO', '3-6'),
(32, '2001170298', 'Swaraj', 'Keshav', 'Gawade', 'TYCO', '3-6'),
(33, '2001170260', 'Ankita', 'Ashok', 'Dalvi', 'TYCO', '3-6'),
(34, '2001170278', 'Vishal', 'Ajit', 'Ghadi', 'TYCO', '3-6'),
(35, '2001170276', 'Mufid', 'Rizwan', 'Shaikh', 'TYCO', '3-6');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_code` int(11) NOT NULL,
  `subject_name` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `teacher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_name`, `course`, `teacher`) VALUES
(1, 'PWP', 'TYCO', 'PGN'),
(1234, 'MAD', 'TYCO', 'SVS');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `password`, `fname`, `mname`, `lname`) VALUES
(1, 'SVS', 'v123', 'Sahil', 'Vishnu', 'Shetye'),
(2, 'SSH', 's123', 'Shuham', 'Shashank', 'Haldankar'),
(3, 'PGN', 'g123', 'Pooja', 'Ganesh', 'Narkar');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `student_no` varchar(250) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `stime` time NOT NULL,
  `sdate` date NOT NULL,
  `course` varchar(10) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `teacher` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
