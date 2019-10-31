-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 11:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `username` varchar(20) NOT NULL,
  `aadharnumber` bigint(12) NOT NULL,
  `city` varchar(20) NOT NULL,
  `village` varchar(20) NOT NULL,
  `vechile_color` varchar(10) NOT NULL,
  `vechile_number` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`username`, `aadharnumber`, `city`, `village`, `vechile_color`, `vechile_number`, `email`, `password`) VALUES
('ammu', 234156789012, 'kamanpur', 'CNC', 'red', 'TS1A1234', '', ''),
('ammu', 123456789012, 'pedhapalli', 'CNC', 'black', 'AP15A4141', 'laxmiprasannapothuganti20@gmai', ''),
('bindu', 234516789012, 'Karimnagar', 'Ramnagar', 'black', 'TS12B1234', 'brahmanapallyhimabindu@gmail.c', ''),
('bindu', 234516789012, 'Karimnagar', 'Ramnagar', 'black', 'TS12B1234', 'brahmanapallyhimabindu@gmail.c', ''),
('ammu', 123456789090, 'sircilla', 'sircilla', 'black', 'ap15er233', 'pothugantilaxmiprasanna@gmail.', ''),
('ammu', 123456789090, 'assda', 'sircilla', 'black', 'ap15er233', 'bindu@gmail.com', ''),
('himabindu', 321456789090, 'pedhapalli', 'pannur', 'black', 'TS23A123', 'bindu@gmail.com', ''),
('ammu', 123456789090, 'pedhapelli', 'sircilla', 'black', 'ap15er233', 'pothugantilaxmiprasanna@gmail.', ''),
('prasanna', 321456789090, 'pedhapelli', 'cnc', 'black', 'ap15er233', 'bindu@gmail.com', ''),
('himabindu', 321456789090, 'pedhpalli', 'pannur', 'black', 'ap15er233', 'bindu@gmail.com', ''),
('himabindu', 321456789090, 'assda', 'sircilla', 'black', 'TS23A123', 'bindu@gmail.com', ''),
('ammu1', 321456789090, 'assda', 'pannur', 'blue', 'ap15er233', 'bindu@gmail.com', ''),
('himabindu', 223456789090, 'assda', 'sircilla', 'blue', 'ap15er233', 'bindu@gmail.com', ''),
('himabindu', 321456789090, 'assda', 'sircilla', 'blue', 'ap15er233', 'bindu@gmail.com', ''),
('prasanna', 321456789090, 'rajanna sircilla', 'sircilla', 'blue', 'TS23A123', 'pothugantilaxmiprasanna@gmail.', ''),
('prasanna', 321456789090, 'sircilla', 'sircilla', 'blue', 'TS23A123', 'laxmi@gmail.com', ''),
('himabindu', 321456789090, 'pedhapalli', 'pannur', 'black', 'ap15er233', 'dappu@gmail.com', ''),
('prasanna', 321456789090, 'assda', 'sircilla', 'blue', 'ap15er233', 'bindu@gmail.com', 'prasanna');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `username` varchar(50) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `hygiene_level` varchar(30) NOT NULL,
  `cooked_time` time(6) NOT NULL,
  `expiry_time_expected` time(6) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`username`, `food_name`, `quantity`, `hygiene_level`, `cooked_time`, `expiry_time_expected`, `address`) VALUES
('ammu', 'paneer', '5000', '80%', '09:00:00.000000', '12:00:00.000000', 'cnc'),
('ammu1', 'paneer', '2kg', '80%', '12:00:00.000000', '12:00:00.000000', 'cnc'),
('bindu', 'paneer', '2kg', '75', '12:00:00.000000', '01:00:00.000000', 'cnc'),
('dappu', 'paneer', '5000gm', '85', '09:00:00.000000', '01:00:00.000000', 'cnc'),
('himabindu', 'paneer', '2kg', '80', '09:00:00.000000', '12:00:00.000000', 'cnc'),
('laxmi', 'paneer', '5000gm', '95%', '09:00:00.000000', '12:00:00.000000', 'cnc'),
('nskr1', 'paneer', '5000gm', '85', '09:00:00.000000', '12:00:00.000000', 'cnc'),
('nskrdappu', 'paneer', '2kg', '80', '09:00:00.000000', '12:00:00.000000', 'cnc'),
('prasanna', 'panner', '800gm', '80%', '09:00:00.000000', '12:00:00.000000', 'cnc'),
('qq', 'paneer', '5000', '80', '09:00:00.000000', '12:00:00.000000', 'cnc'),
('terjk', 'l;l;klkoko', '5000', '80', '09:00:00.000000', '12:00:00.000000', 'cnc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `adhaarno` varchar(12) NOT NULL,
  `bday` date NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `mobileno`, `adhaarno`, `bday`, `gender`, `password`) VALUES
('himabindu', 'bindu@gmail.com', '7777777777', '124587792334', '1970-01-01', 'female', 'e637c618876f'),
('ammu', 'ammu@gmail.com', '7702314430', '123456789012', '1970-01-01', 'female', '202cb962ac59'),
('wrq', 'hhj@hj.vv', '1234455667', '124587792334', '1970-01-01', 'male', '7815696ecbf1'),
('werf', 'dsdd@gh.cv', '1234455667', '124587792334', '1970-01-01', 'male', '7815696ecbf1'),
('asd', 'a@gmail.com', '1234567890', '12345678901', '1970-01-01', 'female', '81dc9bdb52d0'),
('asd', 'abhipothuganti2024@gmail.com', '1234567890', '12345678', '1970-01-01', 'female', '827ccb0eea8a'),
('werf', 'abhipothuganti2024@gmail.com', '6789012345', '12345678901', '1970-01-01', 'female', '81dc9bdb52d0'),
('zxc', 'z@gmail.com', '6789012345', '12345678901', '1970-01-01', '', '827ccb0eea8a'),
('werf', 'abhipothuganti2024@gmail.com', '6789012345', '123456789012', '1970-01-01', 'male', '81dc9bdb52d0'),
('werf', 'abhipothuganti2024@gmail.com', '6789012345', '123456789012', '1970-01-01', 'male', '81dc9bdb52d0'),
('werf', 'a@gmail.com', '6789012345', '123456789013', '1970-01-01', 'male', '81dc9bdb52d0'),
('aaaa', 'z@gmail.com', '6789012345', '123456789012', '1970-01-01', 'male', 'f5b3b9b303f5'),
('aaaa', 'z@gmail.com', '6789012345', '123456789012', '1970-01-01', 'male', '81dc9bdb52d0'),
('asd', 'uyhbj@gmail.com', '6789012345', '123456789012', '1970-01-01', 'female', '827ccb0eea8a'),
('asd', 'uyhbj@gmail.com', '6789012345', '123456789012', '1970-01-01', '', '912ec803b2ce'),
('werf', 'z@gmail.com', '6789012345', '123456789012', '1970-01-01', 'female', '827ccb0eea8a'),
('ammu', 'dsdd@gmail.com', '7777777777', '123456789012', '1970-01-01', 'female', 'd37d0f15724d'),
('himabindu', 'hhj@hj.vv', '6234455667', '124587792334', '0000-00-00', 'female', 'e637c618876f'),
('ammu', 'ammu@gmail.com', '7702314430', '124587792334', '0000-00-00', 'female', 'a9ed7eddf973'),
('qq', 'hhj@hj.vv', '6234455667', '124587792334', '0000-00-00', 'female', '7815696ecbf1'),
('qq', 'hhj@gmail.com', '6234455667', '123456789012', '0000-00-00', 'female', 'e2fc714c4727'),
('dappu', 'dappu@gmail.com', '6234455667', '123456789012', '0000-00-00', 'male', '64adae38d407'),
('srrs', 'dappu@gmail.com', '6234455667', '124587792331', '0000-00-00', 'female', '64adae38d407'),
('laxmi', 'laxmi@gmail.com', '7702314430', '123456789012', '0000-00-00', 'female', 'a9ed7eddf973'),
('himabindu', 'laxmi@gmail.com', '7702314430', '123456789012', '0000-00-00', 'female', 'e637c618876f'),
('bindu', 'bindu@gmail.com', '7777777777', '234567890112', '0000-00-00', 'female', 'e637c618876f'),
('ammu', 'pothugantilaxmiprasanna@gmail.com', '8328179402', '245877923343', '0000-00-00', 'female', 'a9ed7eddf973'),
('ammu2', 'pothugantilaxmiprasanna@gmail.com', '8328179402', '223456789012', '0000-00-00', 'female', 'a9ed7eddf973'),
('himabindu', 'pothugantilaxmiprasanna@gmail.com', '8328179402', '223456789012', '0000-00-00', 'female', 'e637c618876f'),
('nskr1', 'dappu@gmail.com', '6234455667', '234567890123', '0000-00-00', 'male', 'nskr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
