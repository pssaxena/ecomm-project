-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 12:27 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voonik`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE IF NOT EXISTS `contact_tbl` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`name`, `email`, `city`, `phone`, `message`) VALUES
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priya', 'abc@gmail.com', 'jaipur', '0', 'I want to buy some products from your website plz guide me.'),
('priyanka', 'saxena554@gmail.com', 'jaipur', '2147483647', 'kindly contact me asap'),
('mnbv', 'tsaxena554@gmail.com', 'ajmer', '2147483647', 'call me back'),
('priyanka', 'saxena@gmail.com', 'kota', '2147483647', 'plz contact asap'),
('', 'ntsaxena@gmail.com', 'jaipur', '9854612485', 'call me'),
('', 'ntsaxena@gmail.com', 'jaipur', '9854612485', 'call me'),
('', 'ntsaxena@gmail.com', 'jaipur', '9854612485', 'call me'),
('hhhh', 'ds2@gmail.com', 'jaipur', '9514369874', 'call urgently');

-- --------------------------------------------------------

--
-- Table structure for table `cus_tbl`
--

CREATE TABLE IF NOT EXISTS `cus_tbl` (
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_tbl`
--

INSERT INTO `cus_tbl` (`name`, `surname`, `phone`, `email`, `password`) VALUES
('', '', '0', '', ''),
('cfdgdg', '', '0', 'gfdgfdg', ''),
('dsdsfsfsfsfsf', '', '0', 'fsfsfsfsfsfsf', ''),
('gdfgdg', '', '0', 'ggdg', ''),
('gdgdfgd', '', '0', 'dgdgdf', ''),
('gfgfgdfg', '', '0', 'fdgfgfdg1234', ''),
('ggdg', '', '0', 'dgdg', ''),
('ggvhh', '', '0', 'ghghhgjh', 'gfhjgjhgjgjk12'),
('hghjhjjj', '', '0', 'jghghgjhgkj', 'hgfhgfjh1234hghjgj'),
('kh', 'ls', '8954695741', 'ktsaxena554@gmail.com', '12345678'),
('neha', '', '0', 'sharma', ''),
('preetika', 'shrivastava', '9854612485', 'ntsaxena554@gmail.com', '12345265'),
('priya', '', '0', 'sharma', ''),
('priyanka', '', '0', 'saxena', ''),
('ps', '', '0', 'as', '');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE IF NOT EXISTS `log_in` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`username`, `password`) VALUES
('priyanka', 'saxena');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
`product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`product_id`, `product_name`, `price`, `quantity`, `size`, `name`, `address`, `contact_no`, `image`) VALUES
(1, 't-shirt', '1120', 1, '', 'priya', 'hn1234', '9854621454', ''),
(2, 't-shirt', '1120', 1, 'medium', 'ps', 'hn12047', '9451265452', ''),
(3, 't-shirt', '1150', 1, 'small', 'ps', 'hn12', '1234567890', ''),
(4, 't-shirt', '1150', 1, 'small', 'ps', 'hn12', '1234567890', ''),
(5, 't-shirt', '1150', 1, 'small', 'ps', 'hn12', '1234567890', ''),
(6, 't-shirt', '1520', 2, 'small', 'pr', 'h1245', '9854621478', ''),
(7, 't-shirt', '1520', 2, 'small', 'pr', 'h1245', '9854621478', ''),
(8, 't-shirt', '1520', 2, 'small', 'pr', 'h1245', '9854621478', ''),
(9, 't-shirt', '1520', 2, 'small', 'pr', 'h1245', '9854621478', ''),
(10, 't-shirt', '1520', 2, 'small', 'pr', 'h1245', '9854621478', ''),
(11, 't-shirt', '1520', 2, 'small', 'pr', 'h1245', '9854621478', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign_tbl`
--

CREATE TABLE IF NOT EXISTS `sign_tbl` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_tbl`
--

INSERT INTO `sign_tbl` (`Email`, `Password`) VALUES
('abc@gmail.com', 'priya'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('ps@gmail.com', '5469'),
('', ''),
('', ''),
('', ''),
('', ''),
('nksaxena@gmail.com', '1234'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `voonik_tbl`
--

CREATE TABLE IF NOT EXISTS `voonik_tbl` (
`product_id` int(11) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voonik_tbl`
--

INSERT INTO `voonik_tbl` (`product_id`, `cat`, `product_name`, `price`, `description`, `image`) VALUES
(14, 'men', 't-shirt', '1150', 'white', '25.jpg'),
(15, 'men', 't-shirt', '1120', 'black', '26.jpg'),
(16, 'men', 't-shirt', '1250', 'red', '28.jpg'),
(17, 'women', 'kurti', '1100', 'green', '20.jpeg'),
(18, 'women', 'kurti', '1250', 'blue', '21.jpg'),
(19, 'women', 't-shirt', '1420', 'multicolor', '19.jpg'),
(20, 'men', 't-shirt', '1520', 'multicolor', '67.jpg'),
(21, 'kids', 'dress', '800', 'white', '147.jpeg'),
(22, 'kids', 'dress', '800', 'blue', '92.jfif'),
(23, 'kids', 'hoody', '900', 'red', '75.jpg'),
(25, 'kids', 'khadi dress', '800', 'multicolor', '17th.jpg'),
(26, 'cart', 't-shirt', '1120', 'red', '28.jpg'),
(27, 'men', 't-shirt', '1200', 'black', '73.jpg'),
(28, 'men', 't-shirt', '1200', 'red', '74.jpg'),
(29, 'women', 'dress', '1500', 'blue', '55.jpg'),
(30, 'women', 'kurti', '1520', 'blue', '66.jpg'),
(32, 'kids', 'dress', '1250', 'black', '145.jpeg'),
(33, 'kids', 'kurta', '900', 'blue', '149.jpeg'),
(34, 'men', 't-shirt', '1520', 'blue', '109.jpg'),
(35, 'men', 'shirt', '1600', 'blue', '111.jpg'),
(36, 'women', 'kurti', '1520', 'blue', '70.jpg'),
(37, 'women', 'kurti', '1425', 'blue', '87.jpg'),
(38, 'kids', 'lehenga', '800', 'red', '146.jpeg'),
(39, 'kids', 'dress', '900', 'blue', '148.jpeg'),
(40, 'women', 'western dress', '1250', 'grey', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus_tbl`
--
ALTER TABLE `cus_tbl`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `voonik_tbl`
--
ALTER TABLE `voonik_tbl`
 ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `voonik_tbl`
--
ALTER TABLE `voonik_tbl`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
