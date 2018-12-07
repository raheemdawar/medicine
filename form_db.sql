-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 09:22 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `admission_id` int(10) NOT NULL,
  `ref1` varchar(11) DEFAULT NULL,
  `ref2` varchar(11) DEFAULT NULL,
  `call_taken` varchar(255) DEFAULT NULL,
  `call_sign` varchar(255) DEFAULT NULL,
  `rept_hosp` varchar(255) DEFAULT NULL,
  `incident_num` varchar(20) DEFAULT NULL,
  `eta` varchar(10) DEFAULT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admission_id`, `ref1`, `ref2`, `call_taken`, `call_sign`, `rept_hosp`, `incident_num`, `eta`, `patient_id`) VALUES
(35, 'NIAS', 'ALT', '2', 'a', 'ASDD', '23', '23', 33),
(37, 'NIAS', 'ALT', '12', '12', 'wq', '12', '12', 35),
(38, '', '', '', '', '', '', '', 36),
(39, '', '', '', '', '', '', '', 37),
(40, 'NIAS', 'ALT', '12', '12', '12', '12', '12', 38),
(41, 'NIAS', 'ALT', '21', 'wq1', 'zxd', 'wq', 'wq', 39),
(42, 'NIAS', 'ALT', '21', 'wq1', 'zxd', 'wq', 'wq', 40),
(43, 'NIAS', 'CAUSEWAY', '11', '1', '111', '11', '1', 41),
(44, 'NIAS', 'CAUSEWAY', '11', '1', '111', '11', '1', 42),
(45, 'NIAS', 'CAUSEWAY', '11', '1', '111', '11', '1', 43),
(46, 'NIAS', 'ALT', '111', '111', '1111', '111', '111', 44),
(47, 'NIAS', 'ALT', '2', '2', '222', '22', '22', 45),
(48, '', '', '', '', '', '', '', 46),
(49, 'NIAS', 'ALT', '23', '23', '23', '23', '23', 47),
(50, 'NIAS', 'ALT', '212', '12', '221', '21', '21', 48),
(51, 'NIAS', 'ALT', 'ds', 's', 'dsa', 'ds', 'ds', 49),
(52, 'NIAS', 'ALT', '11', '11', '11', '11', '11', 50),
(53, '', '', '', '', '', '', '', 51),
(54, '', '', '', '', '', '', '', 52),
(55, '', '', '', '', '', '', '', 53),
(56, '', '', '', '', '', '', '', 54),
(57, 'NIAS', 'ALT', 'raheem', 'ljahdald', '424545', '657890', '212121', 55),
(58, 'NIAS', 'ALT', '', '', '', '', '', 56),
(59, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 57),
(60, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 58),
(61, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 59),
(62, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 60),
(63, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 61),
(64, 'NIAS', 'ALT', 'taheer', 'juon', 'Nishter', '01236', '854545', 62),
(65, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 63),
(66, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 64),
(67, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 67),
(68, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 68),
(69, 'NIAS', 'ALT', 'taheer', 'juon', 'Mateen', '01236', '854545', 69);

-- --------------------------------------------------------

--
-- Table structure for table `ecg`
--

CREATE TABLE `ecg` (
  `ecg_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `ecg_time` time NOT NULL,
  `rate` varchar(40) DEFAULT NULL,
  `rythum` varchar(40) DEFAULT NULL,
  `qrs` varchar(40) DEFAULT NULL,
  `st` varchar(40) DEFAULT NULL,
  `tw` varchar(40) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL,
  `ecg_img` blob,
  `ecg_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecg`
--

INSERT INTO `ecg` (`ecg_id`, `patient_id`, `ecg_time`, `rate`, `rythum`, `qrs`, `st`, `tw`, `other`, `ecg_img`, `ecg_detail`) VALUES
(40, 51, '00:00:00', '', '', '', '', '', '', '', ''),
(41, 52, '00:00:00', '', '', '', '', '', '', '', ''),
(42, 53, '00:00:00', '', '', '', '', '', '', '', ''),
(43, 54, '00:00:00', '', '', '', '', '', '', '', ''),
(45, 56, '00:00:00', 'Tachycardic ', 'Sinus', 'Broad', 'Raised', 'Normal', '', '', ''),
(56, 69, '00:12:00', 'Tachycardic ', 'Sinus', 'Broad', 'Raised', 'Normal', 'aditional afd', '', 'STEMI');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `patient_id` int(10) NOT NULL,
  `complain` varchar(255) DEFAULT NULL,
  `history` varchar(255) DEFAULT NULL,
  `drug` varchar(20) DEFAULT NULL,
  `doseasp` varchar(4) DEFAULT NULL,
  `dosetic` varchar(4) DEFAULT NULL,
  `dosemor` varchar(4) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `cathlab` varchar(10) DEFAULT NULL,
  `accept` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`patient_id`, `complain`, `history`, `drug`, `doseasp`, `dosetic`, `dosemor`, `comment`, `cathlab`, `accept`) VALUES
(13, 'Laudantium qui enim eum reiciendis', 'Dolore eum provident distinctio Voluptatem libero eaque dolores aliqua', 'ticagrelor', '308', '394', '276', 'Nemo incididunt sunt eu id ipsa aperiam vitae', 'cathlab1', 'yes'),
(14, 'pain', 'heart patient', 'asprin', '30', '100', '10', 'accpt', 'cathlab1', 'yes'),
(15, 'pain', 'heart patient', 'asprin', '30', '100', '10', 'accpt', 'cathlab1', 'yes'),
(16, 'headache', 'nill', 'asprin', '30', '100', '5', 'all fine ', 'cathlab1', 'yes'),
(30, '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', ''),
(33, 's', 'ds', 'morphine', '30', '100', '5', '23', '', 'yes'),
(34, '', '', '', '', '', '', '', '', ''),
(35, 'x', 'x', 'asprin', '221', '122', '211', 'as', '', 'yes'),
(36, '', '', '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', '', '', ''),
(38, '12', '21', 'asprin', '22', '22', '22', '2', '', 'yes'),
(39, 'sa', 'd', 'asprin', '21', '322', '32', 'ew', '', 'yes'),
(40, 'sa', 'd', 'asprin', '21', '322', '32', 'ew', '', 'yes'),
(41, '111', '11', 'asprin', '111', '1111', '111', '1', '', 'yes'),
(42, '111', '11', 'asprin', '111', '1111', '111', '1', '', 'yes'),
(43, '111', '11', 'asprin', '111', '1111', '111', '1', '', 'yes'),
(44, '11', '11', 'asprin', '111', '111', '111', '11', '', 'yes'),
(45, '', '22', '', '30', '100', '5', '', '', ''),
(47, '22', '22', '', '23', '23', '23', '32', '', ''),
(48, '12', '21', 'asprin', '21', '12', '512', '21', '', 'no'),
(49, 'sdsd', 'sdsd', 'asprin', '32', '32', '32', 'sd', '', 'yes'),
(50, '1', '1', 'asprin', '11', '11', '1', '1', '', 'yes'),
(52, '', '', '', '', '', '', '', '', ''),
(67, 'dada', 'adad', '', '30', '100', '5', 'dada', '', 'Yes'),
(68, 'dada', 'adad', '', '30', '100', '5', 'dada', '', 'Yes'),
(69, 'dada', 'adad', '', '30', '100', '5', 'dada', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `post_code` varchar(50) DEFAULT NULL,
  `hc_num` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `fname`, `lname`, `age`, `dob`, `gender`, `address`, `city`, `post_code`, `hc_num`) VALUES
(51, '', '', 0, '0000-00-00', '', '', '', '', ''),
(52, '', '', 0, '0000-00-00', '', '', '', '', ''),
(53, '', '', 0, '0000-00-00', '', '', '', '', ''),
(54, '', '', 0, '0000-00-00', '', '', '', '', ''),
(56, '', '', 0, '0000-00-00', '', '', '', '', ''),
(69, 'Raheem', 'Dawar', 1211, '2018-12-08', 'male', 'Comsats University Abbottabad', 'Abbottabad', '22010', '45445');

-- --------------------------------------------------------

--
-- Table structure for table `ref_info`
--

CREATE TABLE `ref_info` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `activator` varchar(25) DEFAULT NULL,
  `time` time NOT NULL,
  `patient_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_info`
--

INSERT INTO `ref_info` (`id`, `date`, `activator`, `time`, `patient_id`) VALUES
(1, '0000-00-00', 'marry', '11:55:00', 63),
(2, '2018-12-08', 'rachel', '12:07:00', 64),
(3, '2018-12-08', 'caterina', '01:01:00', 67),
(4, '2018-12-08', 'caterina', '01:01:00', 68),
(5, '2018-12-08', 'caterina', '01:01:00', 69);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('asd', 'asd'),
('admin', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`admission_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `ecg`
--
ALTER TABLE `ecg`
  ADD PRIMARY KEY (`ecg_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `ref_info`
--
ALTER TABLE `ref_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `admission_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `ecg`
--
ALTER TABLE `ecg`
  MODIFY `ecg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `ref_info`
--
ALTER TABLE `ref_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ecg`
--
ALTER TABLE `ecg`
  ADD CONSTRAINT `ecg_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
