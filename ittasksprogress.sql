-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2016 at 11:41 AM
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
  `Position` varchar(255) NOT NULL,
  `PicPath` varchar(255) NOT NULL,
  `start` tinyint(1) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incharge`
--

INSERT INTO `incharge` (`Emp_No`, `Emp_name`, `Emp_depart`, `Position`, `PicPath`, `start`) VALUES
(106, 'محمد الحازمي', 'IT', 'مدير إدارة تقنية المعلومات', 'Images/Hazimi.jpg', 1),
(185, 'مصطفى كروخي', 'IT', 'أخصائي قواعد بيانات ونظم تشغيل', 'Images/Mustfa.jpg', 0),
(202, 'عبدالكريم ابراهيم طيب', 'IT', 'أخصائي تطبيقات', 'Images/kareem.jpg', 0),
(203, 'محمود مليباري', 'IT', 'أخصائي دعم فني', 'Images/Muhmmoud.jpg', 0),
(611, 'عبيدة زعرور', 'IT', 'أخصائي شبكات', 'Images/Obida.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Task ID No',
  `Tname` varchar(255) DEFAULT NULL COMMENT 'Task Name',
  `Task_des` text NOT NULL,
  `ben_dept` varchar(255) NOT NULL,
  `Progress` int(4) NOT NULL COMMENT 'Task Progress',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`ID`, `Tname`, `Task_des`, `ben_dept`, `Progress`) VALUES
(1, 'برنامج النكاسة', '', 'شركة وادي ابراهيم', 72),
(2, 'برنامج جبل الشراشف', '', 'شركة جرهم', 55),
(3, 'برنامج إدارة المستودع', '', 'شركة البلد الامين', 0),
(4, 'برنامج الحضور والإنصراف', '', 'شركة البلد الأمين', 0),
(5, 'برنامج إدارة العقود', '', 'شركة البلد الأمين', 0),
(6, 'برنامج الصادر والوارد', '', 'شركة جرهم', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
  `SN` int(10) NOT NULL AUTO_INCREMENT COMMENT 'SN',
  `ID` int(11) NOT NULL COMMENT 'Main Task ID',
  `STname` varchar(255) NOT NULL COMMENT 'Sub Task Name',
  `STask_des` text NOT NULL,
  `Incharge` varchar(100) DEFAULT NULL COMMENT 'Employee in charge',
  `Progress` int(3) DEFAULT '0' COMMENT 'Sub Task progress',
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SN`, `ID`, `STname`, `STask_des`, `Incharge`, `Progress`) VALUES
(1, 1, 'تجهيز البرنامج', 'يب', '202', 100),
(2, 1, 'تنزيل البرنامج', 'نو', '185', 30),
(4, 1, 'تهيئة الشبكة', '', '611', 100),
(5, 1, 'إضافة الخصائص المناسبة', '', '202', 80),
(6, 1, 'اضافة التثمين', '', '185', 50),
(7, 2, 'تنزيل النسخة الاخيرة', '', '203', 50),
(8, 2, 'اختبار النسخة الاخيرة', '', '202', 60);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `Sn` int(11) NOT NULL AUTO_INCREMENT,
  `Issue_type` varchar(30) NOT NULL,
  `Depart` varchar(50) NOT NULL,
  `PCname` varchar(35) NOT NULL,
  `timedate` varchar(50) NOT NULL,
  `incharge` varchar(50) NOT NULL,
  `Comment` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `Date` timestamp NOT NULL,
  `ID` int(11) NOT NULL,
  `Version` double NOT NULL,
  `Comment` varchar(255) NOT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`SN`, `Date`, `ID`, `Version`, `Comment`) VALUES
(6, '2016-08-16 21:00:00', 1, 1.1, 'تعديل شاشة الحصر'),
(7, '2016-08-16 21:00:00', 1, 1.1, 'تعديل بيانات الملاك'),
(8, '2016-08-16 21:00:00', 1, 1.1, 'إضافة بيانات التثمين'),
(9, '2016-08-16 21:00:00', 2, 3.3, 'إضافة خاصية الإشعارات'),
(10, '2016-08-16 21:00:00', 3, 2, 'تعديل تصميم الباركود');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
