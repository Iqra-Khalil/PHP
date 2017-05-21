-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 01:47 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(20) NOT NULL,
  `img` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `dname`, `img`) VALUES
(1, 'drier', 'dresses\\num.jpg'),
(2, 'clothing', ''),
(3, '', ''),
(4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `fname`, `email`, `pass`, `comment`) VALUES
(1, 'kdhskfds', 'khkdgfjg', 'xyz@gmail.com', '123', ''),
(2, 'aiman', 'khalid', 'aiman@gmail.comm', 'aiman', ''),
(3, 'hira', 'khalid', '', '', ''),
(6, 'maida', 'ahtisham', '', '', ''),
(8, 'aisha', 'papa', '', '', ''),
(9, 'skjdshds', 'skndskd', '', '', ''),
(10, 'skjdshds', 'skndskd', '', '', ''),
(12, 'aiman', '', '', '', ''),
(13, 'asdfd', '', '', '', ''),
(14, '', '', '', '', ''),
(15, 'rabbia', '', '', '', ''),
(16, 'afia', 'iftikhar', '', '', ''),
(17, 'rhym', 'smith', '', '', ''),
(22, 'john', 'smith', '', '', ''),
(23, 'sadia', 'arshad', '', '', ''),
(24, 'baimisal', 'khan', '', '', ''),
(26, 'maria', 'aftab', '', '', ''),
(27, '', '', '', '', ''),
(28, 'sjdskd', 'skbbdkfb', '', '', ''),
(29, 'sjdskd', 'skbbdkfb', '', '', ''),
(30, 'sjdskd', 'skbbdkfb', '', '', ''),
(31, 'mmm', 'fm', 'mm@gmail.com', 'dfg', ''),
(32, '', '', 'hjk@gmail.com', 'wewew', ''),
(33, '', '', 'hjk@gmail.com', 'wewew', ''),
(34, '', '', '', '', ''),
(35, '', '', 'xyz@gmail.com', '123', ''),
(36, '', '', '', '', ''),
(37, '', '', '', '', ''),
(38, '', '', '', '', ''),
(39, 'sara', 'nazir', 'sara@gmail.com', '123', ''),
(40, 'sara', 'nazir', 'sara@gmail.com', '123', ''),
(41, 'hinna', 'jabbar', 'hina.edu@gmail.com', '432', ''),
(42, 'hafsa', 'yahya', 'hafsa@gmail.com', '987', ''),
(43, '', '', '', '', ''),
(44, '', '', '', '', ''),
(45, '', '', '', '', ''),
(46, '', '', '', '', ''),
(47, '', '', '', '', ''),
(48, '', '', '', '', ''),
(49, '', '', '', '', ''),
(50, '', '', '', '', ''),
(51, '', '', '', '', ''),
(52, '', '', '', '', ''),
(53, '', '', '', '', ''),
(54, '', '', '', '', ''),
(55, '', '', '', '', ''),
(56, '', '', '', '', ''),
(57, '', '', '', '', ''),
(58, '', '', '', '', ''),
(59, '', '', '', '', ''),
(60, '', '', '', '', ''),
(61, '', '', '', '', ''),
(62, 'hajra', 'shahid', 'hajra@gmail.com', 'hajra', ''),
(63, 'dkflg', 'jjfdkhf', 'ikk_9@yahoo.com', 'ksdhkdfhdk', ''),
(64, 'nnn', 'oooo', 'hkj@gmail.com', 'hkkhkhkk', ''),
(65, 'iqra', 'khalil', '', '', ''),
(66, 'd,fdjdlg', 'slddlfk', '', '', ''),
(67, 'nnnn', 'mmmm', '', '', ''),
(68, 'nnnn', 'mmmm', '', '', ''),
(69, 'hira', 'haider', '', '', ''),
(70, 'huma', 'shami', '', '', ''),
(71, 'rabiya', 'M.rafique', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
