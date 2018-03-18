-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2018 at 11:17 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scse`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `username` char(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `phy` char(10) DEFAULT NULL,
  `mat` char(10) DEFAULT NULL,
  `chy` char(10) DEFAULT NULL,
  `bio` char(10) DEFAULT NULL,
  KEY `user_fk` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`username`, `date`, `phy`, `mat`, `chy`, `bio`) VALUES
('katkaif', '2017-09-27', 'present', NULL, 'present', 'present'),
('katkaif', '2017-09-28', 'absent', NULL, 'present', 'present'),
('katkaif', '2017-09-28', 'absent', NULL, 'present', 'absent'),
('katkaif', '2017-09-28', 'absent', NULL, 'present', 'absent'),
('katkaif', '2017-10-10', 'present', NULL, 'present', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `biology`
--

CREATE TABLE IF NOT EXISTS `biology` (
  `username` char(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `marks` int(3) DEFAULT NULL,
  KEY `user_fk` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biology`
--

INSERT INTO `biology` (`username`, `date`, `marks`) VALUES
('katkaif', '2017-10-08', 91),
('katkaif', '2017-10-01', 88);

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE IF NOT EXISTS `chemistry` (
  `username` char(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `marks` int(3) DEFAULT NULL,
  KEY `user_fk` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry`
--

INSERT INTO `chemistry` (`username`, `date`, `marks`) VALUES
('katkaif', '2017-10-01', 92),
('katkaif', '2017-10-08', 88);

-- --------------------------------------------------------

--
-- Table structure for table `maths`
--

CREATE TABLE IF NOT EXISTS `maths` (
  `username` char(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `marks` int(3) DEFAULT NULL,
  KEY `user_fk` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maths`
--


-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE IF NOT EXISTS `physics` (
  `username` char(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `marks` int(3) DEFAULT NULL,
  KEY `user_fk` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physics`
--

INSERT INTO `physics` (`username`, `date`, `marks`) VALUES
('katkaif', '2017-10-01', 79),
('katkaif', '2017-10-08', 82);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `username` char(15) NOT NULL,
  `fname` char(20) DEFAULT NULL,
  `lname` char(20) DEFAULT NULL,
  `password` char(30) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `course` char(50) DEFAULT NULL,
  `time` char(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `fname`, `lname`, `password`, `email`, `phone`, `course`, `time`) VALUES
('makvm', 'Mayank', 'Verma', '6d87a19f011653459575ceb722db3b', 'makvrm@gmail.com', 2147483647, 'PCMB', '3PM-9PM'),
('jon@snow', 'john', 'snow', 'aa8d5679965b8bbc816cb26bd567ad', 'jon@snow.com', 2147483647, 'PCMB', '3PM-9PM'),
('katkaif', 'Katrina', 'kaif', '81dc9bdb52d04dc20036dbd8313ed0', '123@gmail.com', 2147483647, 'PCB', '3PM-9PM'),
('tom', 'Tom', 'Cruise', '81dc9bdb52d04dc20036dbd8313ed0', 'mak@vit.in', 2147483647, 'PCMB', '3PM-9PM'),
('bob', 'bob', 'builder', '81dc9bdb52d04dc20036dbd8313ed0', 'sdfg@g.com', 2147483647, 'PCMB', '3PM-9PM'),
('rajver', 'Rajesh', 'Verma', 'd8578edf8458ce06fbc5bb76a58c5c', 'rajesh@gmail.com', 2147483647, 'PCMB', '3PM-9PM'),
('sneha', 'Sneha', 'ag', '827ccb0eea8a706c4c34a16891f84e', 'sneha@gmail.com', 2147483647, 'PCM', '3PM-9PM');
