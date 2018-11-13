-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2018 at 03:30 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmodel`
--

CREATE TABLE `cmodel` (
  `id` int(100) NOT NULL,
  `manufacturer_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` text NOT NULL,
  `year` int(10) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `pic1` varchar(10000) NOT NULL,
  `pic2` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmodel`
--

INSERT INTO `cmodel` (`id`, `manufacturer_id`, `name`, `color`, `year`, `regno`, `note`, `pic1`, `pic2`) VALUES
(1, 1, '3 Series', 'black', 2015, '12345', 'welcome for test drive', 'https://auto.ndtvimg.com/car-images/big/bmw/3-series/bmw-3-series.jpg?v=6', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThLNCMPyCG9DGZtjDC61feN6tI1rXcA4mk-lMzC2oFyUiZaITHHg'),
(2, 23, 'qweasd', 'black', 2000, '56481', 'hi test', 'qwe.jpg', 'adsad.jpg'),
(3, 2, 'FuzioTracking', 'blue', 2003, '124568', 'hi app', 'asd.jpg', 'asd.jpg'),
(4, 1, 'Z 300', 'black', 2014, '532146', '', '', ''),
(5, 1, 'FuzioTracking 123', 'black', 2015, '546321', '', '', ''),
(6, 23, 'sad', 'black', 2015, '3256', '', '', ''),
(7, 1, 'sadqwe', 'black', 2016, '58965', '', '', ''),
(8, 2, 'nmb', 'blue', 2009, '633215', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`) VALUES
(1, 'BMW'),
(2, 'mercedes'),
(23, 'maruti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmodel`
--
ALTER TABLE `cmodel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `manu_name` (`manufacturer_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmodel`
--
ALTER TABLE `cmodel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cmodel`
--
ALTER TABLE `cmodel`
  ADD CONSTRAINT `manu_name` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
