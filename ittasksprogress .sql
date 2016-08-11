-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2016 at 02:36 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ittasksprogress`
--

-- --------------------------------------------------------

--
-- Table structure for table `incharge`
--

CREATE TABLE IF NOT EXISTS `incharge` (
  `Emp_No` int(6) NOT NULL DEFAULT '0',
  `Emp_name` varchar(100) NOT NULL,
  `Emp_depart` varchar(100) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incharge`
--

INSERT INTO `incharge` (`Emp_No`, `Emp_name`, `Emp_depart`) VALUES
(185, 'مصطفى', 'IT'),
(202, 'عبدالكريم', 'IT'),
(203, 'محمود', 'IT'),
(611, 'عبيدة', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Task ID No',
  `Tname` varchar(255) DEFAULT NULL COMMENT 'Task Name',
  `Progress` int(4) NOT NULL COMMENT 'Task Progress',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`ID`, `Tname`, `Progress`) VALUES
(1, 'برنامج النكاسة', 72),
(2, 'برنامج جبل الشراشف', 55);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
  `SN` int(10) NOT NULL AUTO_INCREMENT COMMENT 'SN',
  `ID` int(11) NOT NULL COMMENT 'Main Task ID',
  `STname` varchar(255) NOT NULL COMMENT 'Sub Task Name',
  `Incharge` varchar(100) DEFAULT NULL COMMENT 'Employee in charge',
  `Progress` int(3) DEFAULT '0' COMMENT 'Sub Task progress',
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SN`, `ID`, `STname`, `Incharge`, `Progress`) VALUES
(1, 1, 'تجهيز البرنامج', 'عبدالكريم', 100),
(2, 1, 'تنزيل البرنامج', 'مصطفى', 30),
(4, 1, 'تهيئة الشبكة', 'عبيدة', 100),
(5, 1, 'إضافة الخصائص المناسبة', 'عبدالكريم', 80),
(6, 1, 'اضافة التثمين', 'مصطفى', 50),
(7, 2, 'تنزيل النسخة الاخيرة', 'مصطفى', 50),
(8, 2, 'اختبار النسخة الاخيرة', 'عبدالكريم', 60);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
