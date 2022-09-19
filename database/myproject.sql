-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 05:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `certif`
--

CREATE TABLE `certif` (
  `certifid` int(50) NOT NULL,
  `stitle` varchar(30) NOT NULL,
  `sdescript` varchar(30) NOT NULL,
  `spic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certif`
--

INSERT INTO `certif` (`certifid`, `stitle`, `sdescript`, `spic`) VALUES
(4, 'Responsive Web Design', 'Free Code Camp', 'upload/1663600610.png'),
(9, 'IT Project Management', 'Coursera', 'upload/1663600653.png');

-- --------------------------------------------------------

--
-- Table structure for table `schoolinfo`
--

CREATE TABLE `schoolinfo` (
  `schoolid` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `degree1` varchar(30) NOT NULL,
  `year1` varchar(30) NOT NULL,
  `description1` varchar(3000) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `degree2` varchar(50) NOT NULL,
  `year2` varchar(30) NOT NULL,
  `description2` varchar(3000) NOT NULL,
  `address3` varchar(50) NOT NULL,
  `degree3` varchar(50) NOT NULL,
  `year3` varchar(30) NOT NULL,
  `description3` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolinfo`
--

INSERT INTO `schoolinfo` (`schoolid`, `address1`, `degree1`, `year1`, `description1`, `address2`, `degree2`, `year2`, `description2`, `address3`, `degree3`, `year3`, `description3`) VALUES
(1, 'Mystical Rose College of Science and Technology', 'None', 'June 2004', 'I enjoyed every single moment when I was this young because I do not think much about school works just playing with friends.', 'Mangatarem National High School', 'General Academic Strand', 'June 2012', 'I almost have a failing grade at this time because I don not study well and I focus more on playing online games.', 'Pangasinan State University - Lingayen Campus', 'Bachelor of Science in Information Technology', 'August 2018', 'Very sad because there is a pandemic at this time and we cannot learn easily in online class so we have to learn by self studying.');

-- --------------------------------------------------------

--
-- Table structure for table `skilltable`
--

CREATE TABLE `skilltable` (
  `skillid` int(200) NOT NULL,
  `skillname` varchar(30) NOT NULL,
  `percent` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skilltable`
--

INSERT INTO `skilltable` (`skillid`, `skillname`, `percent`) VALUES
(7, 'Java', 60),
(9, 'How To Make Lumpia', 99),
(10, 'CSS', 31),
(13, 'Php', 30),
(14, 'Jquery', 10),
(15, 'Node ', 30),
(16, 'JavaScript', 20),
(17, 'React', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `infoid` int(11) NOT NULL,
  `about` text NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `postalcode` int(30) NOT NULL,
  `snumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`infoid`, `about`, `saddress`, `city`, `country`, `postalcode`, `snumber`) VALUES
(1, 'HEllow, Its me Auriel if you do not know I am also a musician,\r\nI love playing guitar and piano and also listening to music', 'Pogonlomboy Mangatarem, Pangasinan', 'Mangatarem', 'Philippines', 2413, '09994171454');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `sid1` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `spassword` varchar(30) NOT NULL,
  `semailadd` varchar(30) NOT NULL,
  `sfirstname` varchar(30) NOT NULL,
  `slastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`sid1`, `sname`, `spassword`, `semailadd`, `sfirstname`, `slastname`) VALUES
(1, 'aurieljames11', 'admin123', 'aurieljames11@gmail.com', 'Auriel James', 'Fernandez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certif`
--
ALTER TABLE `certif`
  ADD PRIMARY KEY (`certifid`);

--
-- Indexes for table `schoolinfo`
--
ALTER TABLE `schoolinfo`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `skilltable`
--
ALTER TABLE `skilltable`
  ADD PRIMARY KEY (`skillid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`infoid`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`sid1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certif`
--
ALTER TABLE `certif`
  MODIFY `certifid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schoolinfo`
--
ALTER TABLE `schoolinfo`
  MODIFY `schoolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skilltable`
--
ALTER TABLE `skilltable`
  MODIFY `skillid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `infoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `sid1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
