-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2020 at 09:38 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE IF NOT EXISTS `issue_books` (
  `issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sem` varchar(6) NOT NULL,
  `enr` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `issue_date` varchar(13) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `date` int(13) NOT NULL,
  `return_date` varchar(30) NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE IF NOT EXISTS `tbl_book` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(30) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `pdate` varchar(15) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `aqty` varchar(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `libname` varchar(40) NOT NULL,
  `date` varchar(13) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`bookid`, `bname`, `aname`, `pdate`, `price`, `qty`, `aqty`, `photo`, `libname`, `date`) VALUES
(1, 'electrical', 'raman', '2020-07-11', '400', '50', '49', '1527518397837.jpg', 'lib@gmail.com', '2020-07-11 16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lib`
--

CREATE TABLE IF NOT EXISTS `tbl_lib` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_lib`
--

INSERT INTO `tbl_lib` (`lid`, `email`, `password`) VALUES
(1, 'lib@gmail.com', 'lib'),
(2, 'lib2@gmaiul.com', 'lib2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `stdid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `enr` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`stdid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
