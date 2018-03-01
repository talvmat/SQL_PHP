-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2018 at 12:44 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseName` varchar(20) DEFAULT NULL,
  `CourseYear` int(4) DEFAULT NULL,
  `courseID` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseName`, `CourseYear`, `courseID`) VALUES
('Programming 1', 2017, 1),
('WebScripting', 2018, 2),
('Data structures', 2018, 3),
('Economics', 2018, 4),
('Programming 2', 2018, 5),
('Arts', 2018, 6),
('Media', 2017, 7),
('Accounting', 2018, 8),
('Network tehory', 2016, 9),
('Public speaking', 2016, 10),
('Databases', 2018, 11),
('Artificial inte', 2019, 12),
('Cloud computing', 2017, 13),
('Computer security', 2018, 14),
('Business law', 2018, 15)
;

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `CourseID` int(11) DEFAULT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `coursePassed` tinyint(1) DEFAULT NULL,
  `courseGrade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`CourseID`, `StudentID`, `coursePassed`, `courseGrade`) VALUES
(1, 1, 0, null),
(2, 2, 1, 1),
(3, 3, 1, 4),
(4, 4, 1, 5),
(5, 5, 1, 3),
(6, 6, 0, null),
(1, 2, 1, 3),
(2, 3, 1, 5),
(3, 4, 1, 4),
(4, 5, 1, 5),
(5, 6, 0, null),
(6, 7, 1, 2),
(1, 8, 1, 4),
(1, 9, 1, 4),
(1, 10, 0, null)


;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `fName` varchar(10) DEFAULT NULL,
  `lName` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `StudentID` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`fName`, `lName`, `age`, `StudentID`) VALUES
('Matti', 'Talvela', 23, 1),
('John', 'Smith', 21, 2),
('Laura', 'Montier', 24, 3),
('Clyde', 'Steveson', 21, 4),
('Tony', 'Rock', 21, 5),
('Anna', 'Isber', 17, 6),
('Ronn', 'Plymout', 23, 7),
('Roy', 'Gartner', 16, 8),
('Elsa', 'Hoyer', 24, 9),
('Tom', 'Alender', 23, 10),
('Jessica', 'Mason', 18, 11),
('Chris', 'Harver', 28, 12),
('Walther', 'Anderson', 23, 13),
('Peter', 'Smith', 21, 14),
('Cole', 'Smith', 20, 15),
('Jose', 'Mourinho', 25, 16),
('Bertel', 'Jung', 21, 17),
('Donald', 'Triumph', 43, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`StudentID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `course` (`courseID`),
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `person` (`StudentID`);
