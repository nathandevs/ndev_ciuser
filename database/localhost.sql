-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2014 at 02:04 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ceburest`
--
CREATE DATABASE `ceburest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ceburest`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=253 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`, `status`) VALUES
(249, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Online'),
(252, 'user', '0cc175b9c0f1b6a831c399e269772661', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogs`
--

CREATE TABLE IF NOT EXISTS `adminlogs` (
  `tid` int(50) NOT NULL AUTO_INCREMENT,
  `aid` int(50) NOT NULL,
  `timelogin` varchar(100) NOT NULL,
  `timelogout` varchar(100) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `adminlogs`
--

INSERT INTO `adminlogs` (`tid`, `aid`, `timelogin`, `timelogout`) VALUES
(16, 249, 'July 28, 2014, 12:17 PM', 'July 28, 2014, 12:27 PM'),
(17, 249, 'July 28, 2014, 12:19 PM', 'July 28, 2014, 12:24 PM'),
(18, 249, 'July 28, 2014, 12:24 PM', 'July 28, 2014, 12:24 PM'),
(21, 249, 'July 28, 2014, 12:31 PM', 'July 28, 2014, 12:31 PM'),
(22, 249, 'July 28, 2014, 12:31 PM', 'July 28, 2014, 12:32 PM'),
(23, 249, 'July 28, 2014, 12:32 PM', 'July 28, 2014, 12:34 PM'),
(24, 262, 'July 28, 2014, 12:34 PM', 'July 28, 2014, 5:56 PM'),
(25, 249, 'July 28, 2014, 5:57 PM', 'July 29, 2014, 2:07 PM'),
(26, 249, 'July 29, 2014, 2:07 PM', 'July 30, 2014, 10:19 AM'),
(27, 249, 'July 30, 2014, 10:19 AM', 'July 30, 2014, 10:29 AM'),
(28, 249, 'July 30, 2014, 10:29 AM', ''),
(29, 249, 'July 30, 2014, 11:24 AM', ''),
(30, 249, 'July 30, 2014, 11:32 AM', ''),
(31, 249, 'July 31, 2014, 11:26 AM', ''),
(32, 249, 'July 31, 2014, 11:45 AM', ''),
(33, 249, 'July 31, 2014, 12:39 PM', ''),
(34, 249, 'August 4, 2014, 2:15 PM', ''),
(35, 249, 'August 5, 2014, 1:23 PM', ''),
(36, 249, 'August 5, 2014, 2:39 PM', 'August 5, 2014, 3:16 PM'),
(37, 249, 'August 5, 2014, 3:16 PM', ''),
(38, 249, 'August 6, 2014, 12:59 PM', ''),
(39, 249, 'August 7, 2014, 10:45 AM', ''),
(40, 249, 'August 7, 2014, 10:53 AM', ''),
(41, 249, 'August 7, 2014, 12:21 PM', ''),
(42, 249, 'August 7, 2014, 12:22 PM', ''),
(43, 249, 'August 7, 2014, 12:23 PM', ''),
(44, 249, 'August 7, 2014, 12:27 PM', ''),
(45, 249, 'August 7, 2014, 12:28 PM', ''),
(46, 249, 'August 7, 2014, 12:30 PM', ''),
(47, 249, 'August 7, 2014, 12:31 PM', ''),
(48, 249, 'August 7, 2014, 12:41 PM', ''),
(49, 249, 'August 7, 2014, 12:42 PM', ''),
(50, 249, 'August 7, 2014, 12:54 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `adid` int(50) NOT NULL AUTO_INCREMENT,
  `display` varchar(20) NOT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`adid`, `display`) VALUES
(10, 'tetse');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE IF NOT EXISTS `coupon` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `rid` int(50) NOT NULL,
  `discountprice` varchar(500) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `policy` varchar(1000) NOT NULL,
  `expdate` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`cid`, `rid`, `discountprice`, `detail`, `policy`, `expdate`) VALUES
(1, 6, '123', ' asfasdfasdfsdf', 'ss', '07/18/2014');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `fetid` int(50) NOT NULL AUTO_INCREMENT,
  `eatallyoucan` varchar(100) NOT NULL,
  `alldrinkmenu` varchar(100) NOT NULL,
  `prohibitsmoking` varchar(100) NOT NULL,
  `privateroom` varchar(100) NOT NULL,
  `wifi` varchar(20) NOT NULL,
  PRIMARY KEY (`fetid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`fetid`, `eatallyoucan`, `alldrinkmenu`, `prohibitsmoking`, `privateroom`, `wifi`) VALUES
(7, 'Yes', 'No', 'Yes', 'No', 'Yes'),
(8, 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `fid` int(50) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `meal` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `f_name`, `price`, `meal`) VALUES
(79, 'food menu', 123, 'Drink'),
(81, 'test foood', 200, 'Food'),
(86, 'cge', 123, 'Drink'),
(101, 'asdfasfasdfadsfadsf', 123123, 'Drink'),
(110, 'q', 12, 'Drink'),
(111, 'restfood', 12312, 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `imageads`
--

CREATE TABLE IF NOT EXISTS `imageads` (
  `imgaid` int(50) NOT NULL AUTO_INCREMENT,
  `adid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`imgaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `imageads`
--

INSERT INTO `imageads` (`imgaid`, `adid`, `name`) VALUES
(10, 10, '1-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `imagefood`
--

CREATE TABLE IF NOT EXISTS `imagefood` (
  `imgfid` int(50) NOT NULL AUTO_INCREMENT,
  `fid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `feature` varchar(10) NOT NULL,
  PRIMARY KEY (`imgfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `imagefood`
--

INSERT INTO `imagefood` (`imgfid`, `fid`, `name`, `feature`) VALUES
(7, 79, 'hungrymenu.jpg', 'Yes'),
(8, 80, 'err.png', 'No'),
(9, 81, 'err.png', 'No'),
(10, 82, 'check.png', 'No'),
(11, 83, 'check.png', 'No'),
(12, 84, 'check.png', 'No'),
(13, 85, 'check.png', 'No'),
(14, 86, 'btnblue_bg.png', 'No'),
(15, 87, 'btnblue_bg.png', 'No'),
(16, 95, 'body_line.png', 'No'),
(17, 111, 'err.png', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `imagerest`
--

CREATE TABLE IF NOT EXISTS `imagerest` (
  `imgrid` int(50) NOT NULL AUTO_INCREMENT,
  `rid` int(50) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `feature` varchar(50) NOT NULL,
  PRIMARY KEY (`imgrid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `itemlogs`
--

CREATE TABLE IF NOT EXISTS `itemlogs` (
  `lid` int(50) NOT NULL AUTO_INCREMENT,
  `rid` int(50) NOT NULL,
  `fid` int(50) NOT NULL,
  `rcid` int(50) NOT NULL,
  `fetid` int(50) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `itemlogs`
--

INSERT INTO `itemlogs` (`lid`, `rid`, `fid`, `rcid`, `fetid`) VALUES
(79, 5, 79, 18, 7),
(81, 5, 81, 18, 7),
(83, 5, 83, 18, 7),
(86, 5, 86, 18, 7),
(88, 5, 88, 18, 7),
(95, 5, 95, 18, 7),
(96, 5, 96, 18, 7),
(97, 5, 97, 18, 7),
(98, 5, 98, 18, 7),
(101, 5, 101, 18, 7),
(102, 5, 102, 18, 7),
(105, 5, 105, 18, 7),
(106, 5, 106, 18, 7),
(109, 5, 109, 18, 7),
(110, 5, 110, 18, 7),
(111, 6, 111, 18, 8);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `lid` int(50) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `location`) VALUES
(10, 'Banilad'),
(11, 'Mabolo'),
(12, 'Mandaue'),
(13, 'Fuente'),
(14, 'It_park'),
(17, 'Busay'),
(18, 'Ayala');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `rid` int(50) NOT NULL AUTO_INCREMENT,
  `lid` int(50) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `open` varchar(50) NOT NULL,
  `close` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `servicecharge` varchar(100) NOT NULL,
  `cardaccept` varchar(300) NOT NULL,
  `map` varchar(5000) NOT NULL,
  `site` varchar(500) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rid`, `lid`, `r_name`, `description`, `budget`, `open`, `close`, `address`, `contact`, `servicecharge`, `cardaccept`, `map`, `site`) VALUES
(5, 10, 'Hungry na me', ' asdfdsf', '123123', '17:00PM', '4:00AM', 'adfadf', 2147483647, 'No', 'No', ' asdfsdf', 'asdfadf'),
(6, 10, 'rest1', ' asdfadf', '12312', '16:00PM', '16:00PM', 'fasfafadfafadsadfasdf', 123131231, 'No', 'No', ' adfadf', 'htttt');

-- --------------------------------------------------------

--
-- Table structure for table `restcategory`
--

CREATE TABLE IF NOT EXISTS `restcategory` (
  `rcid` int(50) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`rcid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `restcategory`
--

INSERT INTO `restcategory` (`rcid`, `country`) VALUES
(18, 'Pinoy');

-- --------------------------------------------------------

--
-- Table structure for table `restgallery`
--

CREATE TABLE IF NOT EXISTS `restgallery` (
  `gid` int(50) NOT NULL AUTO_INCREMENT,
  `rid` int(50) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reststatus`
--

CREATE TABLE IF NOT EXISTS `reststatus` (
  `rsid` int(50) NOT NULL AUTO_INCREMENT,
  `rid` int(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `dateregister` varchar(50) NOT NULL,
  `dateexpired` varchar(50) NOT NULL,
  PRIMARY KEY (`rsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `reststatus`
--

INSERT INTO `reststatus` (`rsid`, `rid`, `status`, `dateregister`, `dateexpired`) VALUES
(34, 5, 'Registered', '07/08/2014', '09/09/2014'),
(35, 6, 'Registered', '07/09/2014', '09/17/2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
