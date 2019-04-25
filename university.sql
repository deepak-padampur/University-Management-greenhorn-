-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 06:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `ID` int(5) NOT NULL,
  `BOOK_NAME` varchar(50) NOT NULL,
  `BOOK_IMAGE` varchar(40) NOT NULL,
  `AUTHOR NAME` varchar(100) NOT NULL,
  `PUBLICATION NAME` varchar(100) NOT NULL,
  `PURCHASE DATE` date NOT NULL,
  `PRICE` varchar(100) NOT NULL,
  `BOOKS QUANTITY` varchar(100) NOT NULL,
  `AVAILABLE_QUANTITY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`ID`, `BOOK_NAME`, `BOOK_IMAGE`, `AUTHOR NAME`, `PUBLICATION NAME`, `PURCHASE DATE`, `PRICE`, `BOOKS QUANTITY`, `AVAILABLE_QUANTITY`) VALUES
(1, 'Database System Concepts', 'books_image/67d7c9f9a213744cf79bd24069db', 'Henry F. Korth', 'MC Graw Hill Education', '2019-02-18', '1700', '45', '28');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`) VALUES
('DHONI', '771981');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `ID` int(5) NOT NULL,
  `ROLLNUMBER` varchar(50) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `SEMESTER` varchar(100) NOT NULL,
  `CONTACT` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `BOOK_NAME` varchar(100) NOT NULL,
  `ISSUE DATE` date NOT NULL,
  `RETURN_DATE` date NOT NULL,
  `USERNAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`ID`, `ROLLNUMBER`, `NAME`, `SEMESTER`, `CONTACT`, `EMAIL`, `BOOK_NAME`, `ISSUE DATE`, `RETURN_DATE`, `USERNAME`) VALUES
(1, ' 2018ugcs028', 'DEEPAK SUNA', '4', '9777958630', 'deepaknit028@gmail.com', 'Database System Concepts', '2019-02-18', '0000-00-00', ' deepak'),
(2, ' 2018ugcs048', 'DIKSHANT GAUTAM', '4', '9938032678', '2017ugcs028@nitjsr.ac.in', 'Database System Concepts', '2019-03-21', '0000-00-00', ' 1209');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(5) NOT NULL,
  `SUSERNAME` varchar(50) NOT NULL,
  `DUSERNAME` varchar(100) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `MSG` varchar(500) NOT NULL,
  `READ1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `SUSERNAME`, `DUSERNAME`, `TITLE`, `MSG`, `READ1`) VALUES
(1, 'DHONI', ' demo', 'IDENTITY CARD', '          YOUR IDENTITY CARD HAS BEEN ISSUED.COLLECT IT FROM THE ACADEMIC SECTION AS SOON AS POSSIBLE\r\n', 'no'),
(2, 'DHONI', ' deepak', 'book', '          ghjkvjkk', 'no'),
(3, 'DHONI', ' root', 'gddhhdh', '          hshd', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(7, 'deepaksuna4290@gmail.com', '6300fbf0ce4fc500', 'e6127640ea483778ca9a138db843321f', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `ID` int(5) NOT NULL,
  `FIRSTNAME` varchar(100) NOT NULL,
  `LASTNAME` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CONTACT` varchar(20) NOT NULL,
  `SEMESTER` varchar(10) NOT NULL,
  `ROLLNUMBER` varchar(20) NOT NULL,
  `CATEGORY` varchar(10) NOT NULL,
  `STATUS` varchar(5) NOT NULL,
  `token` varchar(500) NOT NULL,
  `tokenExpire` datetime NOT NULL,
  `SEM1` varchar(10) NOT NULL,
  `SEM2` varchar(10) NOT NULL,
  `SEM3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`ID`, `FIRSTNAME`, `LASTNAME`, `USERNAME`, `PASSWORD`, `EMAIL`, `CONTACT`, `SEMESTER`, `ROLLNUMBER`, `CATEGORY`, `STATUS`, `token`, `tokenExpire`, `SEM1`, `SEM2`, `SEM3`) VALUES
(21, 'DEEPAK', 'SUNA', 'deepak', 'f1a4eb78562f364a243636346929c5b8', 'deepaknit028@gmail.com', '9777958630', '4', '2018ugcs028', 'SC', 'yes', '', '2019-04-15 21:49:22', '', '', ''),
(22, 'DIKSHANT', 'GAUTAM', '1209', '7e7e69ea3384874304911625ac34321c', '2017ugcs028@nitjsr.ac.in', '9938032678', '4', '2018ugcs048', 'SC', 'yes', '406mocgk37', '2019-02-19 23:25:07', '', '', ''),
(23, 'demo', 'demo', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@gmail.com', '7064739093', '4', '2018ugcs059', 'SC', 'yes', '', '0000-00-00 00:00:00', '', '', ''),
(24, 'ewrteyu', 'ghj', 'root', '63a9f0ea7bb98050796b649e85481845', 'ccsuna2015@rediffmail.com', '34566372728', '4', '235346', 'OBC', 'yes', '', '0000-00-00 00:00:00', '', '', ''),
(25, 'lakhan', 'mardi', 'lakhan', '86f1825222badb4694a815a0b496bf55', 'lakhanmardi885@gmail.com', '42364327356437658346', '3', '43255345', 'OBC', 'yes', 'tD30nkgcF2', '2019-03-30 22:15:48', '', '', ''),
(26, 'r', 'r', 'r', '4b43b0aee35624cd95b910189b3dc231', 'r123@gmail.com', '9777958636', '4', '6', 'OBC', 'no', '', '0000-00-00 00:00:00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `BOOK NAME` (`BOOK_NAME`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `USERNAME` (`USERNAME`,`PASSWORD`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD UNIQUE KEY `PASSWORD` (`PASSWORD`),
  ADD UNIQUE KEY `ROLLNUMBER` (`ROLLNUMBER`),
  ADD UNIQUE KEY `FIRSTNAME` (`FIRSTNAME`,`LASTNAME`,`EMAIL`,`CONTACT`),
  ADD UNIQUE KEY `LASTNAME` (`LASTNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_books`
--
ALTER TABLE `add_books`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
