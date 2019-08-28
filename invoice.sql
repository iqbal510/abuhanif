-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2019 at 01:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_name`
--

CREATE TABLE `customer_name` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_name`
--

INSERT INTO `customer_name` (`id`, `cname`, `address`, `email`) VALUES
(2, 'iqbal hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(3, 'iqbal', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(4, 'hanif', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(5, 'abu', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(6, 'abu hanif', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(7, 'emon hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(8, 'sajib', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(9, 'ALLAL LAMRINI', '8 Reu Dablin 34200 Sete France', 'lamirini_axxa@hotmail.com'),
(10, 'iqbal hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(11, 'iqbal hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(12, 'iqbal hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(13, 'iqbal hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(14, '', '', ''),
(15, 'iqbal hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com'),
(16, 'iqbal hossain', 'dhaka, dhaka', 'iqbal510hossain@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quntity` varchar(255) NOT NULL,
  `unite_price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_item`
--

INSERT INTO `invoice_item` (`id`, `customer`, `currency`, `date`, `item_code`, `description`, `quntity`, `unite_price`, `discount`, `total`) VALUES
(2, 'abu hanif', 'Dollar', '2019-08-04', 'pop', 'samsung mobile smooth', '1', '25000', '', '25000'),
(3, 'iqbal hossain', 'Dollar', '2019-08-04', 'pop', 'samsung mobile smooth', '1', '25000', '', '25000'),
(4, 'iqbal hossain', 'Dollar', '2019-08-02', 'POP', 'samsung mobile smooth', '1', '25000', '', '12500'),
(5, 'iqbal hossain', 'Euro', '2019-08-10', 'POP', 'samsung mobile smooth', '1', '25000', '', '25000'),
(6, 'abu hanif', 'Dollar', '2019-08-03', 'POP', 'samsung mobile smooth', '1', '25000', '', '25000'),
(7, 'iqbal hossain', 'Dollar', '2019-08-03', 'POP', 'samsung mobile smooth', '1', '25000', '', '25000'),
(8, 'iqbal hossain', 'Euro', '2019-08-02', 'POP', 'samsung mobile smooth', '1', '25000', '', '25000'),
(9, 'iqbal hossain', 'Euro', '2019-08-01', 'POP', 'samsung mobile smooth', '1', '25000', '', '25000'),
(10, 'iqbal hossain', 'Euro', '2019-08-01', 'POP', 'samsung mobile smooth', '1', '25000', '', '25000'),
(11, 'Euro', '', '2019-08-09', 'POP', 'its very simple', '2', '12500', '', '12500'),
(12, 'Euro', '', '2019-08-09', 'POP', 'its very simple', '2', '12500', '', '12500'),
(13, 'iqbal hossain', 'Euro', '2019-08-03', 'POP', 'samsung mobile smooth', '1', '12500', '', '12500'),
(14, 'iqbal', 'Euro', '2019-07-31', 'POP', 'Iphone is very good mobile', '1', '250000', '', '0250000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `category`, `description`) VALUES
(1, 'Mobile', 'samsung', 'samsung mobile smooth'),
(2, 'Iphone', 'Mobile', 'Iphone is very good mobile'),
(3, 'Mi', 'Mobile', 'Mi is very  bad service'),
(4, 'Terrian Pop Sete', 'samsung', 'Terrian Pop Sete'),
(7, 'Terrian Pop Sete', 'samsung', 'its very simple'),
(8, 'Terrian Pop Sete', 'samsung', 'gkj'),
(9, 'Terrian Pop Sete', 'samsung', 'yyyy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `address`, `password`) VALUES
(1, 'iqbal', 'iqbal510hossain@gmail.com', 'dhaka, dhaka', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'hanif', 'mdabuhanif077@gmail.com', 'dhaka', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_name`
--
ALTER TABLE `customer_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_item`
--
ALTER TABLE `invoice_item`
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
-- AUTO_INCREMENT for table `customer_name`
--
ALTER TABLE `customer_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invoice_item`
--
ALTER TABLE `invoice_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
