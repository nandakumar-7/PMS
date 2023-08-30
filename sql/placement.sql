-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2019 at 06:38 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `uname`, `pwd`, `fname`, `lname`, `email`, `phone`) VALUES
(1, 'admin1', '123', 'Girish', 'GV', 'girishgv21@gmail.com', '9742492316'),
(2, 'vp', '12345', 'Varun', 'VP', 'vp@gmail.com', '890863432'),
(5, 'admin2', '12345', 'Sharath', 'GV', 'gvs@gmail.com', '9876765678');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

DROP TABLE IF EXISTS `applied`;
CREATE TABLE IF NOT EXISTS `applied` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Unknown',
  `chances` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `name`, `company`, `status`, `chances`) VALUES
(1, 'Mohith', 'Infosys', 'Attended', NULL),
(2, 'Mohith', 'TCS', 'Unknown', NULL),
(3, 'Girish', 'Mobinius', 'Unknown', NULL),
(4, 'Girish', 'Infosys', 'Selected', NULL),
(5, 'Naveen', 'Invensis Technologies Private Limited', 'Unknown', NULL),
(6, 'Vinay ', 'Transact Bpo Services', 'Unknown', NULL),
(7, 'Vinay ', 'Qbix Intergrated Services', 'Unknown', NULL),
(9, 'Bharath', 'Invensis Technologies Private Limited', 'Unknown', NULL),
(12, 'Girish', 'Mobinius', 'Unknown', NULL),
(13, 'Girish', 'Cognizant Technology Solutions', 'Unknown', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(130) NOT NULL,
  `type` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active',
  `minperc` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `type`, `address`, `number`, `website`, `status`, `minperc`) VALUES
(1, 'Infosys', 'IT', ' 27th Main, Old Madiwala, Jay Bheema Nagar, 1st Stage, BTM Layout 1, Bengaluru, Karnataka 560068', '9897876564', 'https://www.infosys.com/', 'Active', '70'),
(2, 'TCS', 'IT', 'Mumbai, Maharashtra', '8967879890', 'https://www.tcs.com/', 'Inactive', '70'),
(3, 'Connexions BPO Services Pvt Ltd', 'BPO', 'No.130, Chithaara House, 4th Floor, 5th Main Rd, 3rd Phase, J. P. Nagar, Bengaluru, Karnataka 560078', '8965456789', 'https://connexionsbpo.com', 'Active', '70'),
(4, 'Invensis Technologies Private Limited', 'BPO', '34/1, Upkar Chambers, Rashtriya Vidyalaya Road, 2nd Block, Basavanagudi, Bengaluru, Karnataka 560004', '8026572306', 'https://www.invensis.net', 'Active', '50'),
(5, 'Mobinius', 'IT', 'No. 311/ 19, 2nd Floor, 1st Main Rd, 8th Block, Jayanagar, Bengaluru, Karnataka 560082', '8050892700', 'https://www.mobinius.com', 'Active', '70'),
(6, 'Wipro', 'IT', ' Block C, Sarjapur Main Rd, Doddakannelli, Bengaluru, Karnataka 560035', '9078767654', 'https://www.wipro.com/', 'Active', '80%'),
(7, 'Techiesys Web design', 'IT', ' #65/2, Shree Ganesh towers 3rd floor Shop no 1,2, Near Unilet opp sumangali Silks, B Narayanaswamappa Rd, Yeswanthpur, Bengaluru, Karnataka 560022', '99003 44725', 'https://www.techiesys.in/', 'Active', '60%'),
(8, 'Cognizant Technology Solutions', 'IT', 'BLOCK D1, Manayata Tech Park, Thanisandra, Bengaluru, Karnataka 560045', '-', 'https://www.cognizant.com', 'Active', '70'),
(9, 'Transact Bpo Services', 'BPO', 'No 44/1, Tumkur Road, Yeshwanthpur, Bangalore - 560022, Opposite to Vaishnavi Sapphire Mall', '9152875945', 'https://www.transactglobal.com/', 'Active', ''),
(10, 'Qbix Intergrated Services', 'BPO', 'Anantheshwara Complex .3rd Floor, Jayamahal, Bangalore - 560046, Above Honda Activa Service Station,Next to SBI Bank', '9152333908', 'https://qbix.com', 'Active', '50'),
(11, 'ASD India Services', 'BPO', 'Unit No 2201A, 22nd Floor, WTC Bangalore, Brigade Gateway, Rajajinagar Extension,Malleswaram, Bengaluru, Karnataka 560055', '99722 21716', 'http://www.asdindiaservices.com', 'Active', '50'),
(12, 'Swan InfoSystems', 'BPO', 'No: 35 2nd & 3rd Floor Annapoorneshwari Towers,, Uttarahalli Main Road, Gowdana Palya, RR Layout, Padmanabhanagar, Bengaluru, Karnataka 560061', '98862 08887', 'https://swaninfosystems.in', 'Active', '60'),
(13, 'ABC', 'IT', '#5et5hv', '8965456789', 'https://ab.com', 'Active', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

DROP TABLE IF EXISTS `feed`;
CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `user`, `message`, `date`, `time`) VALUES
(2, 'admin1', 'Hello everybody this is the demo text on your feed youll receive further updates in the same way!!', '2019-05-05', '19:14:39'),
(4, 'vp', 'Infosys company has been added interested students can apply !!\r\n-Admin', '2019-05-05', '20:04:42'),
(7, 'admin1', 'More IT and BPO companies added! -Admin', '2019-05-07', '12:31:27'),
(5, 'admin1', 'Do not post unnecessary comments!!', '2019-05-05', '22:48:06'),
(6, 'admin1', '4 more companies added checkout!!!\r\n-Admin', '2019-05-05', '22:50:41'),
(8, 'admin1', 'Infosys interview is being held tomorrow at 10:00 AM in college campus', '2019-05-08', '11:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

DROP TABLE IF EXISTS `studentlogin`;
CREATE TABLE IF NOT EXISTS `studentlogin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL,
  `course` varchar(100) DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL,
  `yop` varchar(10) DEFAULT 'curdate()',
  `sslc` varchar(100) DEFAULT NULL,
  `puc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `uname`, `pwd`, `fname`, `lname`, `email`, `phone`, `secque`, `secans`, `course`, `percentage`, `yop`, `sslc`, `puc`) VALUES
(1, 'naveen', '12345', 'Naveen', 'RS', 'naveenrs@gmail.com', '9868909876', 'Which is Favourite Food?', 'Gobi Manchurian', 'BCOM', '70', '2019', NULL, NULL),
(2, 'girishgv21', '12345', 'Girish', 'G V', 'girishgv21@gmail.com', '9742492316', 'Which is your Favourite Mobile Company?', 'Motorola', 'BCA', '78', '2019', '92', '72'),
(7, 'mohith', '12345', 'Mohith', 'SB', 'mohith@gmail.com', '9876789865', 'Which is your First Phone?', 'Samsung', 'BCA', '82', '2019', NULL, NULL),
(9, 'vinay', '12345', 'Vinay ', 'Kumar', 'vinay@gmail.com', '9089876789', 'Which is your First Phone?', 'Nokia', 'BBA', '76', '2019', '81', '73'),
(10, 'bharath', '12345', 'Bharath', 'N', 'bharath@gmail.com', '9632629993', 'Which is your Favourite Mobile Company?', 'OnePlus', 'BCOM', '82', '2019', '59', '82');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
