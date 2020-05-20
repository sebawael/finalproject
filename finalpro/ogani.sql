-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 03:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `fullname`) VALUES
(1, 'seba@gmail.com', 'seba123', 'seba bani younes'),
(3, 'seba@gmail.com', 'seba123', 'seba bani younes'),
(4, 'ahmad@gmail.com', 'ahmad123', 'ahmad'),
(5, 'adam@gmail.com', '12134', 'adam');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`) VALUES
(1, 'Fresh Fruits', 'fruit.jpg'),
(2, 'Fresh Vegetables', 'vegetables.jpg'),
(3, 'Fresh Herbs', 'fresh-mint.jpeg'),
(4, 'Fresh Meat', '0095067_australian-lamb-bless-cubes-500g_415.jpeg'),
(5, 'Fresh Chicken', 'chkn.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(3) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_password` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `mobile`, `address`) VALUES
(1, 'maram wael', 'maram@gmail.com', '1234', '0786666666', 'irbid'),
(2, 'saja wael', 'saja@gmail.com', '1234', '078002221', 'irbid/dierabisaid');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(4) NOT NULL,
  `ordernum` varchar(15) NOT NULL,
  `pro_id` int(3) NOT NULL,
  `proprice` double NOT NULL,
  `proqty` int(4) NOT NULL,
  `customer_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `ordernum`, `pro_id`, `proprice`, `proqty`, `customer_id`) VALUES
(4, 'OG202005151', 3, 1.6, 2, 0),
(5, 'OG202005151', 13, 2, 4, 0),
(6, 'OG202005151', 33, 1.4, 2, 0),
(7, 'OG202005151', 3, 1.6, 2, 0),
(8, 'OG202005151', 13, 2, 4, 0),
(9, 'OG202005151', 33, 1.4, 2, 0),
(10, 'OG202005151', 3, 1.6, 2, 1),
(11, 'OG202005151', 13, 2, 4, 1),
(12, 'OG202005151', 33, 1.4, 2, 1),
(13, 'OG202005151', 3, 1.6, 2, 1),
(14, 'OG202005151', 13, 2, 4, 1),
(15, 'OG202005151', 33, 1.4, 2, 1),
(16, 'OG202005151', 3, 1.6, 2, 1),
(17, 'OG202005151', 13, 2, 4, 1),
(18, 'OG202005151', 33, 1.4, 2, 1),
(19, 'OG202005151', 3, 1.6, 2, 1),
(20, 'OG202005151', 13, 2, 4, 1),
(21, 'OG202005151', 33, 1.4, 2, 1),
(22, 'OG202005151', 3, 1.6, 2, 1),
(23, 'OG202005151', 13, 2, 4, 1),
(24, 'OG202005151', 33, 1.4, 2, 1),
(25, 'OG202005151', 3, 1.6, 2, 1),
(26, 'OG202005151', 13, 2, 4, 1),
(27, 'OG202005151', 33, 1.4, 2, 1),
(28, 'OG202005151', 3, 1.6, 2, 1),
(29, 'OG202005151', 13, 2, 4, 1),
(30, 'OG202005151', 33, 1.4, 2, 1),
(31, 'OG202005151', 3, 1.6, 2, 1),
(32, 'OG202005151', 13, 2, 4, 1),
(33, 'OG202005151', 33, 1.4, 2, 1),
(34, 'OG202005151', 3, 1.6, 2, 1),
(35, 'OG202005151', 13, 2, 4, 1),
(36, 'OG202005151', 33, 1.4, 2, 1),
(37, 'OG202005151', 3, 1.6, 2, 1),
(38, 'OG202005151', 13, 2, 4, 1),
(39, 'OG202005151', 33, 1.4, 2, 1),
(40, 'OG202005151', 4, 4, 2, 1),
(41, 'OG202005151', 6, 0.7, 1, 1),
(42, 'OG202005151', 1, 1, 1, 1),
(43, 'OG202005151', 3, 3.2, 4, 1),
(44, 'OG202005151', 6, 2.8, 4, 1),
(45, 'OG202005151', 4, 4, 2, 1),
(46, 'OG20200515124', 4, 12, 6, 1),
(47, 'OG20200515124', 15, 0.7, 1, 1),
(48, 'OG20200515124', 15, 0.7, 1, 1),
(49, 'OG20200515135', 15, 1.4, 2, 1),
(50, 'OG20200515135', 12, 1.6, 4, 1),
(51, 'OG20200516129', 15, 1.4, 2, 1),
(52, 'OG20200516129', 12, 0.8, 2, 1),
(53, 'OG20200516177', 15, 2.1, 3, 1),
(54, 'OG20200517230', 7, 10.5, 3, 2),
(55, 'OG20200517230', 12, 0.4, 1, 2),
(56, 'OG20200517154', 4, 2, 1, 1),
(57, 'OG20200517154', 3, 1.6, 2, 1),
(58, 'OG20200517182', 15, 0.7, 1, 1),
(59, 'OG20200517182', 14, 1, 1, 1),
(60, 'OG20200517136', 2, 0.9, 1, 1),
(61, 'OG20200517136', 3, 0.8, 1, 1),
(62, 'OG20200517153', 15, 0.7, 1, 1),
(63, 'OG20200517153', 19, 1.7, 1, 1),
(64, 'OG2020051713', 15, 0.7, 1, 1),
(65, 'OG2020051713', 19, 1.7, 1, 1),
(66, 'OG20200517147', 4, 2, 1, 1),
(67, 'OG20200517147', 14, 1, 1, 1),
(68, 'OG20200517153', 19, 1.7, 1, 1),
(69, 'OG20200517153', 18, 3.5, 1, 1),
(70, 'OG2020051711', 8, 2.5, 1, 1),
(71, 'OG20200517133', 33, 0.7, 1, 1),
(72, 'OG20200519153', 6, 1.4, 2, 1),
(73, 'OG20200519153', 12, 1.6, 4, 1),
(74, 'OG20200519186', 6, 2.8, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(3) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_price` double NOT NULL,
  `pro_image` text NOT NULL,
  `pro_desc` varchar(50) NOT NULL,
  `PROQTY` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_image`, `pro_desc`, `PROQTY`, `cat_id`) VALUES
(1, 'apple', 1, 'apple.jpeg', '1KG', 40, 1),
(2, 'Banana', 0.9, 'banana.jpg', '1KG', 35, 1),
(3, 'Orange', 0.8, 'orange.jpeg', '1KG', 40, 1),
(4, 'kiwi', 2, 'kiwi-fruit.jpeg', '1KG', 20, 1),
(5, 'Grapes', 2, 'grapes.jpeg', '1KG', 20, 1),
(6, 'Grapefruits', 0.7, 'grapefruits.jpeg', '1KG', 15, 1),
(7, 'Avocado', 3.5, 'avocado.jpeg', '1KG', 15, 1),
(8, 'Peaches', 2.5, 'peaches.jpeg', '1KG', 25, 1),
(9, 'Strawberry', 0.5, 'strawberry-packet.jpeg', '1KG', 30, 1),
(10, 'Water melon', 0.6, 'water-melon.jpeg', '1KG', 50, 1),
(11, 'Anar Red', 2, 'anar-red.jpeg', '1KG', 20, 1),
(12, 'Tomato', 0.4, 'tomato.jpeg', '1KG', 50, 2),
(13, 'Cucumber', 0.5, 'cucumber.jpeg', '1KG', 30, 2),
(14, 'Marrow', 1, 'marrow.jpeg', '1KG', 25, 2),
(15, 'Potato', 0.7, 'potato.jpeg', '1KG', 40, 2),
(16, 'Potato-sweet', 0.7, 'potato-sweet.jpeg', '1KG', 15, 2),
(17, 'Okra', 2, 'okra.jpeg', '1KG', 30, 2),
(18, 'Mushroom_white', 3.5, 'mushroom-white.jpeg', '1KG', 15, 2),
(19, 'Lemon', 1.7, 'lemon.jpeg', '1KG', 25, 2),
(20, 'Garlic', 1, 'garlic.jpeg', '1KG', 10, 2),
(21, 'Cauliflower', 0.7, 'cauliflower.jpeg', '1KG', 30, 2),
(22, 'Onion', 0.5, 'onion.jpeg', '1KG', 50, 2),
(23, 'Beans-green', 2.5, 'beans-green.jpeg', '1KG', 20, 2),
(24, 'Carrots', 0.7, 'carrots.jpeg', '1KG', 25, 2),
(25, 'Capsicum-red', 1, 'capsicum-red.jpeg', '1KG', 20, 2),
(26, 'Eggplant', 0.7, 'eggplant.jpeg', 'JD/KG', 0, 2),
(28, 'Capsicum-green', 1, 'capsicum-green.jpeg', 'JD/KG', 0, 1),
(29, 'Raddish', 0.5, 'raddish-red.jpeg', 'JD/Pa', 0, 2),
(30, 'Fresh-mint', 0.5, 'fresh-mint.jpeg', 'JD', 0, 3),
(31, 'Fresh-coriander', 0.5, 'fresh-coriander.jpeg', 'JD/KG', 0, 3),
(32, 'Fresh-packchoi', 0.5, 'fresh-packchoi.jpeg', 'JD/KG', 0, 3),
(33, 'Fresh-zatar', 0.7, 'fresh-zatar.jpeg', 'JD/KG', 0, 3),
(34, 'Australian-lamb-shoulder', 10, 'australian-lamb-shoulder-.jpeg', '1KG', 0, 4),
(35, 'Australian-lamb-bless', 9, 'australian-lamb-bless-cubes.jpeg', '1KG', 0, 4),
(36, 'Australian-lamb-shank', 9, 'australian-lamb-shank-.jpeg', '1KG', 0, 4),
(37, 'Australian-beef', 7, 'australian-beef.jpeg', '1KG', 0, 4),
(38, 'New_zealand_beef', 7, 'new-zealand-beef.jpeg', '1KG', 0, 4),
(39, 'Chicken_thighs', 2.7, 'chicken-thighs.jpeg', '1KG', 0, 5),
(40, 'Chicken_wholelegs', 1.7, 'chkn-wholelegs.jpeg', '1KG', 0, 5),
(41, 'Chicken_boneless_skinless_breast', 2.5, 'chicken-boneless-skinless-breast.jpeg', '1KG', 0, 5),
(42, 'Chicken_liver', 1, 'chicken-liver.jpeg', '1KG', 0, 5),
(43, 'Fresh-chichen', 1.5, 'fresh-chicken.jpeg', '1KG', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tableorder`
--

CREATE TABLE `tableorder` (
  `summaryid` int(4) NOT NULL,
  `ordernum` varchar(15) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `orderdate` varchar(12) NOT NULL,
  `orderqty` int(5) NOT NULL,
  `totalprice` double NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `ordernotes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tableorder`
--

INSERT INTO `tableorder` (`summaryid`, `ordernum`, `customer_id`, `orderdate`, `orderqty`, `totalprice`, `phone`, `address`, `ordernotes`) VALUES
(1, 'OG202005151', 1, '20200515', 3, 5, 'use the same number ', 'use the same address in profil', 'no notes'),
(2, 'OG202005151', 1, '20200515', 3, 5, 'use the same number ', 'use the same address in profil', 'no notes'),
(3, 'OG202005151', 1, '20200515', 3, 5, 'use the same number ', 'use the same address in profil', 'no notes'),
(4, 'OG202005151', 1, '20200515', 3, 5, 'use the same number ', 'use the same address in profil', 'no notes'),
(5, 'OG202005151', 1, '20200515', 3, 5.7, 'use the same number ', 'use the same address in profil', 'no notes'),
(6, 'OG202005151', 1, '20200515', 1, 3.2, 'use the same number ', 'use the same address in profil', 'no notes'),
(7, 'OG202005151', 1, '20200515', 1, 2.8, 'use the same number ', 'use the same address in profil', 'no notes'),
(8, 'OG202005151', 1, '20200515', 1, 4, 'use the same number ', 'use the same address in profil', 'no notes'),
(9, 'OG202005151', 1, '20200515', 0, 0, 'use the same number ', 'use the same address in profil', 'no notes'),
(10, 'OG20200515124', 1, '20200515', 3, 13.4, 'use the same number ', 'use the same address in profil', 'no notes'),
(11, 'OG20200515135', 1, '20200515', 2, 3, 'use the same number ', 'irbid/universitystreet/block5/', 'no notes'),
(12, 'OG20200516129', 1, '20200516', 2, 2.2, 'use the same number ', 'use the same address in profil', 'no notes'),
(13, 'OG20200516177', 1, '20200516', 1, 2.1, 'use the same number ', 'use the same address in profil', 'no notes'),
(14, 'OG20200516150', 1, '20200516', 0, 0, 'use the same number ', 'use the same address in profil', 'no notes'),
(15, 'OG20200517230', 2, '20200517', 2, 10.9, 'use the same number ', 'use the same address in profil', 'no notes'),
(16, 'OG20200517154', 1, '20200517', 2, 3.6, 'use the same number ', 'use the same address in profil', 'no notes'),
(17, 'OG20200517182', 1, '20200517', 2, 1.7, 'use the same number ', 'use the same address in profil', 'no notes'),
(18, 'OG20200517136', 1, '20200517', 2, 1.7, 'use the same number ', 'use the same address in profil', 'no notes'),
(19, 'OG20200517153', 1, '20200517', 2, 2.4, 'use the same number ', 'use the same address in profil', 'no notes'),
(20, 'OG2020051713', 1, '20200517', 2, 2.4, 'use the same number ', 'use the same address in profil', 'no notes'),
(21, 'OG20200517147', 1, '20200517', 2, 3, 'use the same number ', 'use the same address in profil', 'no notes'),
(22, 'OG20200517113', 1, '20200517', 0, 0, 'use the same number ', 'use the same address in profil', 'no notes'),
(23, 'OG2020051715', 1, '20200517', 0, 0, 'use the same number ', 'use the same address in profil', 'no notes'),
(24, 'OG20200517119', 1, '20200517', 0, 0, 'use the same number ', 'use the same address in profil', 'no notes'),
(27, 'OG2020051711', 1, '20200517', 1, 2.5, 'use the same number ', 'use the same address in profil', 'no notes'),
(28, 'OG20200517133', 1, '20200517', 1, 0.7, 'use the same number ', 'use the same address in profil', 'no notes'),
(29, 'OG20200519153', 1, '20200519', 2, 3, 'use the same number ', 'use the same address in profil', 'no notes'),
(30, 'OG20200519186', 1, '20200519', 1, 2.8, 'use the same number ', 'use the same address in profil', 'no notes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tableorder`
--
ALTER TABLE `tableorder`
  ADD PRIMARY KEY (`summaryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tableorder`
--
ALTER TABLE `tableorder`
  MODIFY `summaryid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
