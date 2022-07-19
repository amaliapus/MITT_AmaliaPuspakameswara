-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 09:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitt`
--

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skillID` int(11) NOT NULL,
  `skillName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skillID`, `skillName`) VALUES
(1, 'Programming'),
(3, 'Frontend'),
(5, 'Backend'),
(6, 'Python'),
(7, 'JAVA'),
(8, 'CSS'),
(9, 'SQL'),
(10, 'MySQL'),
(11, 'PostgreSQL'),
(12, 'UML'),
(13, 'Figma'),
(14, 'UI - UX'),
(15, 'C#'),
(16, 'React JS'),
(17, 'C'),
(18, 'Django'),
(19, 'CodeIgniter');

-- --------------------------------------------------------

--
-- Table structure for table `skilllevel`
--

CREATE TABLE `skilllevel` (
  `skillLevelID` int(11) NOT NULL,
  `skillLevelName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skilllevel`
--

INSERT INTO `skilllevel` (`skillLevelID`, `skillLevelName`) VALUES
(1, 'Beginner'),
(2, 'Intermediate'),
(3, 'Expert'),
(5, 'Professional');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('camelliasgone', 'camelliasgone');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `bod` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userskills`
--

CREATE TABLE `userskills` (
  `userSkillID` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `skillID` int(11) NOT NULL,
  `skillLevelID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userskills`
--

INSERT INTO `userskills` (`userSkillID`, `username`, `skillID`, `skillLevelID`) VALUES
('USKID0011', 'camelliasgone', 2, 2),
('USKID0012', 'camelliasgone', 1, 2),
('USKID0019', 'camelliasgone', 7, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skillID`);

--
-- Indexes for table `skilllevel`
--
ALTER TABLE `skilllevel`
  ADD PRIMARY KEY (`skillLevelID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userskills`
--
ALTER TABLE `userskills`
  ADD PRIMARY KEY (`userSkillID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skillID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skilllevel`
--
ALTER TABLE `skilllevel`
  MODIFY `skillLevelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
