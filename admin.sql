-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 11:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `user_name` char(50) DEFAULT NULL,
  `email` char(40) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`user_name`, `email`, `password`, `id`) VALUES
('meher18', 'mehersairamtangudu@gmail.com', 'a', 1),
('cs180045', 'mehersairamt@gmail.com', 'a', 2),
('meher', 'mehersairamt@gmail.com', 'msr', 8),
('meher123', 'mehersairamt@gmail.com', 'q', 9),
('surjya', 'abcd@gmail.com', 'surjya', 10),
('', 'mehersairamt@gmail.com', 'hello', 11),
('', 'mehersairamt@gmail.com', 'a', 12),
('', 'mehersairamt@gmail.com', 'a', 13),
('meher sai ram', 'mehersairam@gmail.com', 'meher', 14),
('msr', 'mehersairamtangudu@gmail.com', 'a', 15),
('', '', '', 16),
('', '', '', 17),
('', '', '', 18);

-- --------------------------------------------------------

--
-- Table structure for table `hr_details`
--

CREATE TABLE `hr_details` (
  `id` int(1) NOT NULL,
  `hr_name` char(30) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `dob` char(10) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `password` char(1) DEFAULT NULL,
  `adminname` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_details`
--

INSERT INTO `hr_details` (`id`, `hr_name`, `email`, `dob`, `phone`, `password`, `adminname`) VALUES
(1, 'hello', 'mehersairamt@gmail.com', '2222-01-31', '9293229767', 'a', NULL),
(2, 'hello', 'mehersairamt@gmail.com', '2222-01-31', '9293229767', 'a', NULL),
(3, 'hello', 'mehersairamt@gmail.com', '2222-01-31', '9293229767', 'a', NULL),
(14, 'a', 'mehersairam@gmail.com', '2020-04-09', '0848078607', 'a', 'meher18'),
(15, 'meher', 'mehersairamtangudu@gmail.com', '2020-04-19', '0848078607', 'a', 'meher18');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `jobname` char(40) DEFAULT NULL,
  `company` char(40) DEFAULT NULL,
  `address` char(60) DEFAULT NULL,
  `jobdetails` char(100) DEFAULT NULL,
  `skills` char(80) DEFAULT NULL,
  `experience` char(20) DEFAULT NULL,
  `salary` char(10) DEFAULT NULL,
  `adminname` char(20) DEFAULT NULL,
  `hrname` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `jobname`, `company`, `address`, `jobdetails`, `skills`, `experience`, `salary`, `adminname`, `hrname`) VALUES
(37, 'softwaredeveloper', 'facebook', '', 'asdfafasdf', '', '20 years', '$100000', NULL, NULL),
(38, 'softwaredeveloper', 'facebook', '', 'asdfafasdf', '', '20 years', '$100000', NULL, NULL),
(39, 'softwaredeveloper', 'facebook', '', 'asdfafasdf', '', '20 years', '$100000', NULL, NULL),
(40, 'softwaredeveloper', 'facebook', '', 'asdfafasdf', '', '20 years', '$100000', NULL, NULL),
(58, 'softwaredeveloper', 'facebook', 'afsdfadfs', '', 'a,fafafa,asdf', '20 years', '$100000', NULL, NULL),
(59, 'sdafs', 'asdfasdf', 'adsfasfd', 'asdfasdfasdfasf', 'asdf,aasdfa,asdfasdf,fadsf', 'adsfasdf', 'asdfasdf', NULL, NULL),
(60, 'softwaredeveloper', 'facebook', 'california', 'RWEGQWR', 'aaaa,a,asdf,ASDFA', '20 years', '$100000', NULL, NULL),
(61, 'scsdcsc', 'facebook', 'asdfafdsafadf', 'fdasdfasfdasdfasdf', 'asddfasdfasdfadsf,,sdfasfd,ddsfa,dsfasfd,asdfasdf,adsfa', '51515', '$100000', NULL, NULL),
(62, 'softwaredeveloper', 'facebook', 'india', 'fantastic job', 'java ,.net', '20 years', '$89000', '', NULL),
(63, 'softwaredeveloper', 'facebook', 'india', 'fantastic job', 'faf,java,c,c#', '20 years', '$89000', '', NULL),
(64, 'softwaredeveloper', 'facebook', 'india', 'fantastic job', 'faf,java,c,c#', '20 years', '$89000', '', NULL),
(94, 'bank mager', 'punjab national bank', 'opposite of UCO bank', 'an workaholic man', 'phd in mathematics,,Phd accountancy', '20 years', '45000 per', 'meher sai ram', NULL),
(95, 'data operator', 'jk papers', 'rayagada, jk', 'jhfhd vjksdf  vshj', 'faf', 'adsfasdf', '30000', 'meher sai ram', NULL),
(96, 'product manager', 'om communications', 'gandhi nagar', 'time of work from 9pm to 5pm. provided with all the requirements', 'gry', '5 years', '$100000', 'meher sai ram', NULL),
(97, 'lectureship', 'raman autonomous college', 'balasore', 'must complete an excellent degree in any subject.\r\nmost required- history, physics, hindi', 'Phd in any subject', 'min. 5yrs', '50000', 'meher sai ram', NULL),
(98, 'lyricist', 'om musics', 'hyderabad', 'an experienced and a talent lyricist of any language but these languages are demanded- hindi, telugu', 'degree from any stream', '2 to 3 yrs', '20000', 'meher sai ram', NULL),
(99, 'accountant', 'common service co.', 'mumbai', 'a man with clear cut idea of accounting with minimum patience.', 'charted accountant', '2 to 3yrs', '60000', 'meher sai ram', NULL),
(100, 'softwaredeveloper', 'facebook', 'california', ';opwpof;owejpocdsopjc', 'java,c++', '20 years', '$89000', 'msr', NULL),
(101, 'software tester', 'amazon', 'bengaluru,hyderbad', 'lkasvjasjvknavklnaslkdvnklasndjaposdjf', 'english,great communication skills', '5 years', '$89000', 'msr', NULL),
(102, 'senior jouranl', 'dharitri', 'california', ';opwpof;owejpocdsopjc', '', '20 years', '$89000', 'msr', NULL),
(103, 'senior journal', 'dharitri', 'main road, cuttack', 'timing of the work from 10pm to 6am', 'phd in journalism', '3yrs', '40000', 'msr', NULL),
(104, 'insurance manager', 'lic', 'kasturi nagar, bhubneswar', 'timing of the work from 11am to 5pm', 'charted acountant', 'mim. 1 yr', '50000', 'msr', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `marks` char(10) DEFAULT NULL,
  `student_id` char(10) DEFAULT NULL,
  `jobid` char(10) DEFAULT NULL,
  `selected` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `marks`, `student_id`, `jobid`, `selected`) VALUES
(1, '0/40', '1', '37', 'unselected'),
(2, '0/40', '1', '37', 'unselected'),
(3, '0/40', '1', '37', 'unselected'),
(4, '20/40', '64', '37', 'selected'),
(5, '5/5', '65', '63', NULL),
(6, '0/5', '65', '63', NULL),
(7, '0/5', '65', '63', NULL),
(8, '0/5', '65', '63', NULL),
(9, '0/5', '65', '63', NULL),
(10, '0/5', '65', '63', NULL),
(11, '0/5', '65', '63', NULL),
(12, '0/5', '65', '63', NULL),
(13, '0/5', '65', '63', NULL),
(14, '0/5', '65', '63', NULL),
(15, '0/5', '65', '63', NULL),
(16, '0/5', '65', '63', NULL),
(17, '0/5', '65', '63', NULL),
(18, '0/5', '65', '63', NULL),
(19, '0/5', '65', '63', NULL),
(20, '0/5', '65', '63', NULL),
(21, '0/5', '65', '63', NULL),
(22, '0/5', '65', '63', NULL),
(23, '0/5', '65', '63', NULL),
(24, '0/5', '65', '63', NULL),
(25, '0/5', '65', '63', NULL),
(26, '5/5', '66', '62', NULL),
(27, '5/5', '67', '39', NULL),
(28, '5/5', '67', '39', NULL),
(29, '5/5', '67', '39', NULL),
(30, '10/15', '69', '38', NULL),
(31, '10/15', '69', '38', NULL),
(32, '35/40', '70', '37', NULL),
(33, '5/40', '68', '37', 'selected'),
(34, '0/0', '2', '1', 'unselected'),
(35, '0/0', '63', '1', 'selected'),
(36, '0/0', '7', '56', 'selected'),
(37, '0/0', '10', '59', NULL),
(38, '15/15', '3', '38', 'selected'),
(39, '0/40', '71', '37', NULL),
(40, '0/0', '4', '59', NULL),
(41, '0/0', '5', '59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `studentname` char(30) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `dob` char(10) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `phone` char(12) DEFAULT NULL,
  `address` char(40) DEFAULT NULL,
  `college` char(50) DEFAULT NULL,
  `qualifications` char(100) DEFAULT NULL,
  `skills` char(80) DEFAULT NULL,
  `hobby` char(80) DEFAULT NULL,
  `jobposition` char(80) DEFAULT NULL,
  `jobid` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `studentname`, `gender`, `dob`, `email`, `phone`, `address`, `college`, `qualifications`, `skills`, `hobby`, `jobposition`, `jobid`) VALUES
(1, 'qreaer', '', '2020-03-03', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'a', '', 'f', 'a', '59'),
(2, 'asdf', 'male', '2020-02-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'a', '', 'f', 'a', '59'),
(3, 'qreaer', 'male', '2020-03-10', 'mehersairamt@gmail.com', 'dfafd', 'sdfa', 'dasf', 'asdfadsf', '', 'asdf,', 'asdfsadf', '38'),
(4, 'qreaer', 'male', '2019-12-01', 'mehersairamt@gmail.com', 'dfafd', 'afdsf', 'fadsf', 'mhjhfyuuyy', '', 'fafafa', 'adsf', '59'),
(5, 'qreaer', 'male', '2019-12-01', 'mehersairamt@gmail.com', 'dfafd', 'afdsf', 'fadsf', 'mhjhfyuuyy', '', 'fafafa', 'adsf', '59'),
(6, 'qreaer', 'male', '2019-12-01', 'mehersairamt@gmail.com', 'dfafd', 'afdsf', 'fadsf', 'mhjhfyuuyy', '', 'fafafa', 'adsf', '38'),
(7, 'qreaer', 'male', '2019-12-01', 'mehersairamt@gmail.com', 'dfafd', 'afdsf', 'fadsf', 'mhjhfyuuyy', '', 'fafafa', 'adsf', '59'),
(8, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(9, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '38'),
(10, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(11, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(12, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '38'),
(13, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(14, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(26, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(27, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '38'),
(28, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(29, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(30, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '38'),
(31, 'asdfasdfasdfsadf', 'male', '2020-03-04', 'mehersairamtangudu@gamil.com', '9293229767', 'afdsf', 'fadsf', 'asdf', '', 'zcxv', 'vzxc', '59'),
(32, 'meher sai ram', 'male', '2000-06-18', 'tmehersairam@gmail.com', '8480786079', 'sadfsfasf', 'adsfasdfaf', 'fadssasdfafafafafafafafafafa', '', 'basketball,youtube', 'developer', '59'),
(62, 'qreaer', 'male', '2020-03-06', 'mehersairamt@gmail.com', '9293229767', 'a', 'a', 'a', '', 'a', 'a', '59'),
(63, 'adsfa', 'male', '2020-03-04', 'mehersairamt@gmail.com', 'dfafd', 'afsd', 'f', 'a', '', 'a', 'a', '38'),
(64, 'meher sai ram', 'male', '2000-06-18', 'mehersairamtangudu@gmail.com', '6370461456', 'home', 'cv ramam', 'completed the education in 2022', '', 'youtube,coding,sleeping,eating', 'sde1 software developer', '59'),
(65, 'qreaer', 'male', '2020-03-10', 'mehersairamt@gmail.com', '9293229767', 'sdf', 'asdf', 'asdf', '', 'adfs', 'fassd', '59'),
(66, 'qreaer', 'male', '2020-02-28', 'mehersairamtangudu@gamil.com', 'asdfa', 'adsf', 'asdf', 'adf', '', 'asdf', 'fasdf', '38'),
(67, 'meher sai ram asdfasfasdf', 'male', '2020-03-12', 'mehersairamt@gmail.com', '9293229767', 'asfd', 'asfd', 'asdf', '', 'asfd', 'afsdfsafdsf', '59'),
(68, 'meher sai ram 18', 'male', '2000-06-18', 'mehersairamtangudu@gmail.com', '9293229767', 'asdfsfdaf', 'asdfsdf', 'great work done first', '', 'coding', 'sde1 software developer', '59'),
(69, 'fasdf', 'male', '2020-04-09', 'mehersairamtangudu@gmail.com', 'f', 'fs', 'sfd', 'ds', '', 'asfd', 'dsf', '38'),
(70, 'asdfadsf', 'male', '2020-04-10', 'mehersairamt@gmail.com', 'asdfa', 'asdf', 'adsfsadf', 'sdf', '', 'df', 'sfaf', '59'),
(71, 'a', 'male', '2020-04-03', 'mehersairamtangudu@gmail.com', 'asdf', 'Gandhi Nagar\r\nGandhi Nagar', 'fadsf', 'asdf', '', 'asdfdf', 'sde1 software developer', '37');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `first_name` char(20) DEFAULT NULL,
  `last_name` char(20) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `dob` char(10) DEFAULT NULL,
  `college_name` char(50) DEFAULT NULL,
  `pass` char(20) DEFAULT NULL,
  `email` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `first_name`, `last_name`, `gender`, `dob`, `college_name`, `pass`, `email`) VALUES
(1, 'a', 'a', 'male', '2021-01-01', 'aaa', 'a', 'mehersairamt@gmail.c'),
(2, 'meher', 'sai ram', 'male', '2000-06-18', 'cv raman college of engineering', 'msr', 'mehersairamt@gmail.c'),
(3, 'meher', 'sai ram t', 'male', '2020-03-06', 'cv raman college of engineering', 'm', 'mehersairamt@gmail.c'),
(4, 'meher sai ram', 'ram', 'male', '2020-03-27', 'cv raman college of engineering', 'msr', 'mehersairam@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `questionid` int(11) NOT NULL,
  `testjobid` char(10) DEFAULT NULL,
  `question` char(80) DEFAULT NULL,
  `answer` char(40) DEFAULT NULL,
  `hr_name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`questionid`, `testjobid`, `question`, `answer`, `hr_name`) VALUES
(30, '65', 'a', 'kj.bkj.b,c,System.out.println,print,4', 'hello'),
(31, '65', 'a', 'kj.bkj.b,c,System.out.println,print,4', 'hello'),
(33, '63', 'what is the command used for displaying the output in php ?', 'echo,printf,System.out.println,print,1', 'hello'),
(34, '62', 'what is the command used for displaying the output in php ?', 'echo,c,,print,1', 'hello'),
(78, '', 'what is the command used for displaying the output in php ?', 'kj.bkj.b,c,System.out.println,print,4', 'hello'),
(79, '', 'what is the command used for displaying the output in php ?', 'kj.bkj.b,c,System.out.println,print,4', 'hello'),
(80, '38', 'what is the command used for displaying the output in php ?', 'kj.bkj.b,c,System.out.println,print,4,4', 'hello'),
(81, '38', 'what is the command used for displaying the output in php ?', 'kj.bkj.b,c,System.out.println,print,4,4,', 'hello'),
(82, '', 'a', 'kj.bkj.b,c,System.out.println,print,1', 'hello'),
(84, '', 'a', 'kj.bkj.b,c,System.out.println,print,1', 'hello'),
(85, '', 'a', 'kj.bkj.b,c,System.out.println,print,1', 'hello'),
(86, '', 'a', 'kj.bkj.b,c,System.out.println,print,1', 'hello'),
(87, '39', 'a', 'kj.bkj.b,c,System.out.println,print,1,1', 'hello'),
(88, '38', 'a', 'kj.bkj.b,c,System.out.println,print,4', 'hello'),
(128, '37', 'what is the command used for displaying the output in php ?', 'kj.bkj.b,c,System.out.println,kjbljh,3', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_details`
--
ALTER TABLE `hr_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`questionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hr_details`
--
ALTER TABLE `hr_details`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
