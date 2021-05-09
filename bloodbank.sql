-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 03:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table bloodbank.about: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `bloodbank`.`about`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`, `phoneno`, `emailid`) VALUES
('admin', 'admin1', '9923456781', 'adminngo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact2`
--

CREATE TABLE `contact2` (
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact2`
--

INSERT INTO `contact2` (`phoneno`, `email`) VALUES
('9879123457', 'bloodbankngo1@gmail.com'),
('9879123457', 'bloodbankngo1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `delete1`
--

CREATE TABLE `delete1` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delete1`
--

INSERT INTO `delete1` (`fname`, `lname`, `email`, `bloodgroup`, `age`, `gender`, `phoneno`, `address`, `city`, `state`, `pincode`) VALUES
('tharani priya', 'b', 'tharani1@gmail.com', 'A+', 23, 'female', '9923210125', '12 dhoni street', 'wayanad', 'Kerala', 600018);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`fname`, `lname`, `email`, `bloodgroup`, `age`, `gender`, `phoneno`, `address`, `city`, `state`, `pincode`) VALUES
('tharani', 'priya', 'tharani@gmail.com', 'O+', 20, 'female', '9923210123', '12 main street\r\nguduvancheri', 'chennai', 'Tamilnadu', 603202),
('divya', 'chelshia', 'divyachelshia@gmail.com', 'B+', 20, 'female', '9923210127', '11 gandhi road', 'avadi', 'Tamilnadu', 600111),
('tharani priya', 'b', 'tharanib@gmail.com', 'A1+', 30, 'female', '9923210120', '12 main cross street', 'wayanad', 'Kerala', 600010),
('hari', 'haran', 'hariharan@gmail.com', 'A+', 23, 'male', '9923210145', '89,rajiv road', 'mumbai', 'Maharastra', 600090),
('xxx', 'yyy', 'xxx@gmail.com', 'AB-', 70, 'male', '999999923', '23,klm road', 'dispur', 'Assam', 600091);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `hosname` varchar(100) NOT NULL,
  `hosid` int(100) NOT NULL,
  `patname` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `date1` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`hosname`, `hosid`, `patname`, `bloodgroup`, `age`, `date1`, `gender`, `phoneno`, `address`, `city`, `state`, `pincode`) VALUES
('deepam', 123, 'xxxx', 'O+', 28, '2020-04-30', 'female', '2147483647', '12,mlm road', 'chennai', 'Tamilnadu', 603202),
('tharani', 123, 'c', 'AB+', 23, '2020-04-30', 'male', '9923210127', 'ewr', 'chennai', 'Tamilnadu', 603202),
('malar', 24, 'vv', 'B+', 45, '2020-04-11', 'male', '999999999', '121333,main road', 'chennai', 'Tamilnadu', 600111),
('malar', 123, 'c', 'B+', 26, '2020-04-20', 'male', '999999999', '121,main road', 'avadi', 'Tamilnadu', 600111),
('th', 123, 'c', 'B+', 56, '2020-04-29', 'female', '999999999', 'qew3', 'chennai', 'Tamilnadu', 600111),
('hos1', 12, 'vv1', 'B+', 78, '2020-04-18', 'male', '2147483647', 'sadF', 'chennai', 'Tamilnadu', 600111),
('hos2', 123, 'xxxx', 'O+', 45, '2020-04-17', 'male', '999999988', 'dsfdf', 'wayanad', 'Kerala', 603210),
('hos34', 1256, 'dd', 'O+', 67, '2020-04-22', 'female', '9923210125', 'qfds', 'chennai', 'Tamilnadu', 603202),
('hos34', 1256, 'dd', 'O+', 67, '2020-04-22', 'female', '9923210125', 'qfds', 'chennai', 'Tamilnadu', 603202),
('hos34', 1256, 'dd', 'O+', 67, '2020-04-22', 'female', '9923210125', 'qfds', 'chennai', 'Tamilnadu', 603202),
('deepam', 123, 'vv1', 'O+', 78, '2020-04-16', 'female', '9923210120', 'safc', 'chennai', 'Tamilnadu', 603202);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
