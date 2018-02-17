-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2017 at 09:43 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fir`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE IF NOT EXISTS `aadhar` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Aadhar_Id` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Election_Number` varchar(30) NOT NULL,
  `Ration_Number` varchar(30) NOT NULL,
  `Address_Proof` varchar(30) NOT NULL,
  `Birth_Certi` varchar(30) NOT NULL,
  `Election_Docs` varchar(30) NOT NULL,
  `Ration_Docs` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`id`, `Aadhar_Id`, `Name`, `Address`, `City`, `DOB`, `Election_Number`, `Ration_Number`, `Address_Proof`, `Birth_Certi`, `Election_Docs`, `Ration_Docs`) VALUES
(38, '123456789789', 'a', 'dsd', 'sds', '2007-01-02', '121212121212', '121212121212', 'Food1.png', 'Food2.png', 'Food3.png', 'Food4.png'),
(37, '123456789789', 'Food4.png', 'dsd', 'sds', '2007-01-02', '121212121212', '121212121212', 'Food1.png', 'Food2.png', 'Food3.png', 'Food4.png'),
(36, '123412341234', 'download.jpgkk', 'a', 'a', '2000-02-02', '123412341234', '123412341234', 'android.png', 'angular-bg.png', 'angular-bg.png.JPG', 'download.jpg'),
(35, '123456789789', 'm5.PNG', 'sdsd', 'sdsdsdds', '2007-02-02', '123456789789', '123456789789', 'm1.PNG', 'm2.PNG', 'm3.PNG', 'm5.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `faces`
--

CREATE TABLE IF NOT EXISTS `faces` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `crime_time` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `crime_type` varchar(30) NOT NULL,
  `add1` varchar(30) NOT NULL,
  `add2` varchar(30) NOT NULL,
  `add3` varchar(30) NOT NULL,
  `add4` varchar(30) NOT NULL,
  `suspect1` varchar(30) NOT NULL,
  `suspect2` varchar(30) NOT NULL,
  `suspect3` varchar(30) NOT NULL,
  `suspect4` varchar(30) NOT NULL,
  `statment1` text NOT NULL,
  `statment2` text NOT NULL,
  `statment3` text NOT NULL,
  `statment4` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `faces`
--

INSERT INTO `faces` (`id`, `username`, `crime_time`, `place`, `crime_type`, `add1`, `add2`, `add3`, `add4`, `suspect1`, `suspect2`, `suspect3`, `suspect4`, `statment1`, `statment2`, `statment3`, `statment4`) VALUES
(46, 'a', '00:01', 's', 's', 'Food1.png', 'Food2.png', 'test.png', 'Food4.png', 'd', 'd', 'd', 'd', 'dd', 'ddd', 'ddd', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `logindaily`
--

CREATE TABLE IF NOT EXISTS `logindaily` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pswrd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobnum` varchar(15) NOT NULL,
  `account` varchar(20) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `add1` varchar(50) NOT NULL,
  `add2` varchar(30) NOT NULL,
  `add3` varchar(20) NOT NULL,
  `gcm` varchar(500) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `otp_status` varchar(20) NOT NULL,
  `token` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `logindaily`
--

INSERT INTO `logindaily` (`id`, `uname`, `pswrd`, `email`, `mobnum`, `account`, `otp`, `add1`, `add2`, `add3`, `gcm`, `hash`, `active`, `otp_status`, `token`) VALUES
(69, 'vatsal patel', 'zzzzzz', 'vatsal91@gmail.com', '8547854785', 'Customer', '908964', 'Manjalour', 'Css', 'Surat', 'dd_cfpEy6j8:APA91bF2iqV3VKMY4bu592Rws8LxOiS5mCmt5Lr_gXcXox5ftQzn81cVyGLAqGQM0dtS4bJArbfsFRyiLeMmkIHSrcnhitPMGbT2lESRmsMDmgeDWl9ZzcEM8gUEuyoPepA1Mlkf8628', '', 0, '', ''),
(70, 'aksharsoft', 'aksharsoft@123', 'daksheshpatel931@gmail.com', '8980910402', 'Admin', '709737', '', '', '', 'fE_wREMUG8k:APA91bGsaQlZDocjxtxBYAwx-cNiO91Y4yWNKVEzYn0r8VJavnbD73tC0-D2bY06QtsAoiFpauqaq_eigrbRjW09EgCVA7GwHmU2PeBUdhcFCB4UduoFG2o3Ynfra76mii2tT9GEMGOu', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE IF NOT EXISTS `regist` (
  `u_id` int(200) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `aadharno` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_summary` text NOT NULL,
  `document` varchar(30) NOT NULL,
  `incident_start_time` varchar(20) NOT NULL,
  `incident_end_time` varchar(20) NOT NULL,
  `suspectinfo` varchar(50) NOT NULL,
  `typeofcrime` varchar(50) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`u_id`, `user_name`, `address`, `aadharno`, `pass`, `incident_date`, `incident_summary`, `document`, `incident_start_time`, `incident_end_time`, `suspectinfo`, `typeofcrime`) VALUES
(12, 'admin', 'dssdsds', '854545454545', 'admin@123', '2014-02-02', 'ddfdf', 'mobile (5).jpg', '2:00', '01:57', 'ddfdf', 'dfdd'),
(19, 'qqq', 'sjdksjdksd', '111111111111', 'school', '2016-01-01', 'sdsd', 'mobile (5).jpg', '01:01', '14:00', 'sd', 'dsd'),
(27, 'a', 'a', '123412341234', 'a', '2000-02-02', 'aaa', 'HappyHoli.png', '12:00', '13:00', 'aaa', 'aaa');
