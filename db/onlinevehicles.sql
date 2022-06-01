-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 10:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinevehicles`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
create database onlinevehicles;
use onlinevehicles;

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`) VALUES
(2, 'Honda'),
(3, 'Hyundai'),
(4, 'Maruti Suzuki'),
(9, 'Audi'),
(10, 'Datsun');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `pid` varchar(255) NOT NULL,
  `isread` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `contactno`, `emailid`, `message`, `pid`, `isread`) VALUES
(8, 'Price bajaj', '9826274861', 'bajju@hotmail.com', 'i am  prince bajaj and i am not a terrorist', '3', 'Read'),
(9, 'gaurav kore', '8962150359', 'gober@gmail.com', 'info', '10', 'Read'),
(10, 'abhishek sharma', '8954621789', 'balwadi@gmail.com', 'information', '6', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `isread` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `emailid`, `message`, `isread`) VALUES
(12, 'prince bajaj', 'bajju@hotmail.com', 'prince bajaj and i am not a terrorist', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `pagename` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `pagename`, `description`) VALUES
(1, 'ABOUT US', '<ul class=\"tab_list\">\r\n	<li>Car Avenue India Ltd., (CAIL) is a leading manufacturer of premium cars in India. The company was established in 1995 with a commitment to provide Avenue latest passenger car models and technologies, to the Indian customers. The company is a subsidiary of Avenue Motor Co. Ltd., Japan</li>\r\n	<li>CAIL&#39;s first manufacturing unit was set up at Greater Noida, U.P in 1997. The green field project is spread across 150 acres and has an annual production capacity of 120,000 units. CAIL&#39;s second plant in Tapukara is the first car manufacturing plant in the state of Rajasthan. The state-of the art Power train and Press shop in Tapukara plant have been operational since September 2008.</li>\r\n	<li>This facility is spread over 450 acres and has an annual production capacity of 120,000 units. CAIL started the production of cars from its Tapukara Plant from February 2014. This plant is the culmination of the best manufacturing know-how and practices gathered from Avenue global operations.</li>\r\n	<li>Car Avenue India Ltd.,(CAIL) has a strong sales and distribution network spread across the country. The network includes 332 authorised dealership facilities in 220 cities.</li>\r\n	<li>The Avenue Group is globally recognized for its concern towards environment, safety and conservation of the society in which it operates. CAIL follows the same in India for achieving high standards in environmental safety in the various processes of car manufacturing.</li>\r\n	<li>The Avenue Group is globally recognized for its concern towards environment, safety and conservation of the society in which it operates. CAIL follows the same in India for achieving high standards in environmental safety in the various processes of car manufacturing.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(15) NOT NULL,
  `rprice` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `category`, `description`, `price`, `rprice`, `status`, `image`) VALUES
(2, 'Amaze', '2', '<p background-color:=\"\" class=\"quick_desc\" roboto=\"\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em; font-family: \"><span style=\"color: rgb(153, 153, 153); font-family: &quot;Roboto Condensed&quot;, sans-serif;\">Honda India has finally launched the Amaze at Rs â‚¹800000.&nbsp;</span></p>\r\n\r\n<p background-color:=\"\" class=\"quick_desc\" roboto=\"\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em; font-family: \">&nbsp;</p>\r\n\r\n<p background-color:=\"\" class=\"quick_desc\" roboto=\"\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em; font-family: \">Fuel Type - Petrol,Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 18.7kmpl/20.5kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1210 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 88.8bhp@7000rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 105Nm@5500rpm</p>\r\n', '800000', '750000', '1', '58b3fb461efff.jpg'),
(3, 'Accord', '2', '<div class=\"singel_right\" font-size:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-bottom: 2em; margin-top: 0em; color: rgb(51, 51, 51); font-family: \">\r\n<div class=\"cont1 span_2_of_al\" style=\"box-sizing: border-box; width: 379.578px; float: left;\">\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\"><span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Honda India has launched the Accord at Rs â‚¹1500000.&nbsp;</span><span background-color:=\"\" font-size:=\"\" roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">&nbsp;</span></p>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">&nbsp;</p>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Fuel Type - Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 16.1kmpl/18.2kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1102 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 90.8bhp@6400rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 119Nm@4900rpm</p>\r\n\r\n<div class=\"btn_form\" style=\"box-sizing: border-box;\">\r\n<form style=\"box-sizing: border-box;\">&nbsp;</form>\r\n</div>\r\n</div>\r\n\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n', '1500000', '1400000', '1', '58b3fbc42096f.jpg'),
(6, 'B-RV', '2', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Roboto Condensed&quot;, sans-serif;\">Honda India has finally launched the B-RV at Rs â‚¹1600000.&nbsp;</span></p>\r\n\r\n<p><span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Fuel Type - Petrol</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">City/Highway Mileage - 13.7kmpl/15.9kmpl0</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Engine Displacement - 1540 cc</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">BHP - 95.8bhp@8000rpm</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Torque - 156Nm@6000rpm</span></p>\r\n', '1600000', '1550000', '1', '58b3fcd57d19f.jpg'),
(7, 'I20', '3', '<p><span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Hyundai India has launched the I20 at Rs â‚¹800000.&nbsp;</span></p>\r\n\r\n<p><span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Fuel Type - Petrol,Diesel</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">City/Highway Mileage - 15.7kmpl/18.7kmpl0</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Engine Displacement - 1300 cc</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">BHP - 89.1bhp@7500rpm</span><br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<br roboto=\"\" style=\"box-sizing: border-box; color: rgb(153, 153, 153); font-family: \" />\r\n<span roboto=\"\" style=\"color: rgb(153, 153, 153); font-family: \">Torque - 140Nm@6500rpm</span></p>\r\n', '800000', '750000', '1', '58b3fde10fdf1.jpg'),
(8, 'Creta', '3', '<div class=\"cont1 span_2_of_al\" font-size:=\"\" roboto=\"\" style=\"box-sizing: border-box; width: 379.578px; float: left; font-family: \">\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Hyundai India has finally launched the Creta at Rs â‚¹1000000.&nbsp;</p>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\"><br style=\"box-sizing: border-box;\" />\r\nFuel Type - Petrol,Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 22.7kmpl/24.4kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1250 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 89.8bhp@7440rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 110Nm@6000rpm</p>\r\n\r\n<div class=\"btn_form\" style=\"box-sizing: border-box;\">\r\n<form style=\"box-sizing: border-box;\">&nbsp;</form>\r\n</div>\r\n</div>\r\n', '1000000', '900000', '1', '58b3ff500ef59.jpg'),
(9, 'Swift', '4', '<h3 style=\"box-sizing: border-box; font-family: &quot;Roboto Condensed&quot;, sans-serif; font-weight: bold; line-height: 1.1; margin-top: 0px; margin-bottom: 10px; font-size: 1.7em; text-transform: uppercase;\">MARUTI SUZUKI SWIFT</h3>\r\n\r\n<div class=\"price_single\" style=\"box-sizing: border-box; font-size: 1.3em; margin: 0.5em 0px 1.5em; font-family: &quot;Doppio One&quot;, sans-serif;\"><span class=\"actual\" style=\"box-sizing: border-box; color: rgb(238, 74, 2); font-size: 1em; margin-right: 5%;\">â‚¹1100000</span>&nbsp;<a href=\"http://localhost/onlinevehicals/swift.php#\" style=\"box-sizing: border-box; background: transparent; color: rgb(153, 153, 153); text-decoration: none; font-size: 13px;\">click for offer</a></div>\r\n\r\n<h2 class=\"quick\" style=\"box-sizing: border-box; font-family: &quot;Roboto Condensed&quot;, sans-serif; line-height: 1.1; color: rgb(85, 85, 85); margin-top: 0px; margin-bottom: 10px; font-size: 0.85em; text-transform: uppercase;\">QUICK OVERVIEW:</h2>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em; font-family: &quot;Roboto Condensed&quot;, sans-serif;\">Maruti Suzuki Swift has finally launched the Amaze at Rs â‚¹1100000.&nbsp;<br style=\"box-sizing: border-box;\" />\r\nFuel Type - Petrol,Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 20.7kmpl/22.8kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1280 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 80.8bhp@7100rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 101Nm@5000rpm</p>\r\n\r\n<ul class=\"ratings\" style=\"box-sizing: border-box; margin: 1em 0px 0px; padding-right: 0px; padding-left: 0px; font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 16px;\"><br />\r\n	&nbsp;\r\n</ul>\r\n', '1100000', '1000000', '1', '58b4048016a53.png'),
(10, 'Alto', '4', '<div class=\"cont1 span_2_of_al\" style=\"box-sizing: border-box; width: 379.578px; float: left; font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: bold; line-height: 1.1; margin-top: 0px; margin-bottom: 10px; font-size: 1.7em; text-transform: uppercase;\">MARUTI SUZUKI ALTO</h3>\r\n\r\n<div class=\"price_single\" style=\"box-sizing: border-box; font-size: 1.3em; margin: 0.5em 0px 1.5em; font-family: &quot;Doppio One&quot;, sans-serif;\"><span class=\"actual\" style=\"box-sizing: border-box; color: rgb(238, 74, 2); font-size: 1em; margin-right: 5%;\">â‚¹500000</span>&nbsp;<a href=\"http://localhost/onlinevehicals/alto.php#\" style=\"box-sizing: border-box; background: transparent; color: rgb(153, 153, 153); text-decoration: none; font-size: 13px;\">click for offer</a></div>\r\n\r\n<h2 class=\"quick\" style=\"box-sizing: border-box; font-family: inherit; line-height: 1.1; color: rgb(85, 85, 85); margin-top: 0px; margin-bottom: 10px; font-size: 0.85em; text-transform: uppercase;\">QUICK OVERVIEW:</h2>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Maruti Suzuki India has launched the Alto at Rs â‚¹500000.&nbsp;<br style=\"box-sizing: border-box;\" />\r\nFuel Type - Petrol,Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 10.7kmpl/13.2kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1180 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 79.8bhp@5100rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 100Nm@4900rpm</p>\r\n\r\n<div class=\"btn_form\" style=\"box-sizing: border-box;\">\r\n<form style=\"box-sizing: border-box;\">&nbsp;</form>\r\n</div>\r\n</div>\r\n', '500000', '450000', '1', '58b409b6b7a5c.jpg'),
(11, 'Elantra', '3', '<p><span style=\"color: rgb(153, 153, 153); font-size: 0.8125em;\">Hyundai India has launched the Elantra at Rs â‚¹1250000.&nbsp;</span></p>\r\n\r\n<div class=\"singel_right\" font-size:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-bottom: 2em; margin-top: 0em; font-family: \">\r\n<div class=\"cont1 span_2_of_al\" style=\"box-sizing: border-box; width: 379.578px; float: left;\">\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Fuel Type - Petrol<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 11.7kmpl/13.2kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1190 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 82.8bhp@6000rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 100Nm@5200rpm</p>\r\n</div>\r\n\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n', '1250000', '1200000', '1', '58b40a62232f8.png'),
(12, 'Go Cross', '10', '<div class=\"cont1 span_2_of_al\" font-size:=\"\" roboto=\"\" style=\"box-sizing: border-box; width: 379.578px; float: left; font-family: \">\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: bold; line-height: 1.1; margin-top: 0px; margin-bottom: 10px; font-size: 1.7em; text-transform: uppercase;\">DATSUN GO CROSS</h3>\r\n\r\n<div class=\"price_single\" doppio=\"\" style=\"box-sizing: border-box; font-size: 1.3em; margin: 0.5em 0px 1.5em; font-family: \"><span class=\"actual\" style=\"box-sizing: border-box; color: rgb(238, 74, 2); font-size: 1em; margin-right: 5%;\">â‚¹650000</span></div>\r\n\r\n<h2 class=\"quick\" style=\"box-sizing: border-box; font-family: inherit; line-height: 1.1; color: rgb(85, 85, 85); margin-top: 0px; margin-bottom: 10px; font-size: 0.85em; text-transform: uppercase;\">QUICK OVERVIEW:</h2>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Datsun India has launched the Accord at Rs â‚¹650000.&nbsp;<br style=\"box-sizing: border-box;\" />\r\nFuel Type - Diesel,Petrol<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 15.1kmpl/16.2kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1160 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 90.8bhp@6000rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 115Nm@5400rpm</p>\r\n\r\n<div>&nbsp;</div>\r\n</div>\r\n', '650000', '500000', '1', '58b4fffc066fc.jpg'),
(13, 'GO', '10', '<div class=\"cont1 span_2_of_al\" style=\"box-sizing: border-box; width: 379.578px; float: left; font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: bold; line-height: 1.1; margin-top: 0px; margin-bottom: 10px; font-size: 1.7em; text-transform: uppercase;\">DATSUN GO CROSS</h3>\r\n\r\n<div class=\"price_single\" style=\"box-sizing: border-box; font-size: 1.3em; margin: 0.5em 0px 1.5em; font-family: &quot;Doppio One&quot;, sans-serif;\"><span class=\"actual\" style=\"box-sizing: border-box; color: rgb(238, 74, 2); font-size: 1em; margin-right: 5%;\">â‚¹600000</span></div>\r\n\r\n<h2 class=\"quick\" style=\"box-sizing: border-box; font-family: inherit; line-height: 1.1; color: rgb(85, 85, 85); margin-top: 0px; margin-bottom: 10px; font-size: 0.85em; text-transform: uppercase;\">QUICK OVERVIEW:</h2>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Datsun India has launched the Go Cross at Rs â‚¹600000.&nbsp;<br style=\"box-sizing: border-box;\" />\r\nFuel Type - Diesel,Petrol<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 15.1kmpl/16.2kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1160 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 90.8bhp@6000rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 115Nm@5400rpm</p>\r\n\r\n<div>&nbsp;</div>\r\n</div>\r\n', '600000', '500000', '1', '58b5016e8c5af.jpg'),
(14, 'A4', '9', '<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Audi India has finally launched the Creta at Rs â‚¹2000000.&nbsp;</p>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\"><br style=\"box-sizing: border-box;\" />\r\nFuel Type - Petrol,Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 20.7kmpl/22.4kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1440 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 96.8bhp@8840rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 110Nm@7000rpm</p>\r\n', '2000000', '1900000', '1', '58b925f2dc4c4.jpg'),
(15, 'Q7', '9', '<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Audi India has finally launched the Creta at Rs â‚¹2500000.&nbsp;</p>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\"><br style=\"box-sizing: border-box;\" />\r\nFuel Type - Petrol,Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 18.7kmpl/20.4kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1350 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 97.8bhp@8140rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 150Nm@6800rpm</p>\r\n', '2500000', '2400000', '1', '58b927224330f.jpg'),
(17, 'TT', '9', '<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\">Audi India has finally launched the Creta at Rs â‚¹2800000.&nbsp;</p>\r\n\r\n<p class=\"quick_desc\" style=\"box-sizing: border-box; margin: 0px; color: rgb(153, 153, 153); font-size: 0.8125em; line-height: 1.8em;\"><br style=\"box-sizing: border-box;\" />\r\nFuel Type - Petrol,Diesel<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCity/Highway Mileage - 29.7kmpl/31.4kmpl0<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nEngine Displacement - 1750 cc<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nBHP - 99.8bhp@9440rpm<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nTorque - 150Nm@8000rpm</p>\r\n', '2800000', '2700000', '1', '58b92ae228a4e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emailid`, `password`, `status`) VALUES
(1, 'admin', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
