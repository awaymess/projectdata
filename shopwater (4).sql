-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 09:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopwater`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CusTel` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `CusName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cususer` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CusTel`, `CusName`, `cususer`) VALUES
('0876411998', 'test', 'test'),
('0876419987', 'best', 'thanapoom'),
('1', '1', '1'),
('admin', '111', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emtel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Emuser` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Empass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Emname` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emtel`, `Emuser`, `Empass`, `Emname`) VALUES
('1234567890', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idorder` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `nameorder` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `typeorder` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `priceorder` int(11) NOT NULL,
  `quaor` int(2) DEFAULT NULL,
  `totalor` int(10) DEFAULT NULL,
  `addonorder` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `addonwiporder` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `sizeorder` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cususer` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idorder`, `orders_id`, `nameorder`, `typeorder`, `priceorder`, `quaor`, `totalor`, `addonorder`, `addonwiporder`, `sizeorder`, `cususer`, `Status`) VALUES
(1, 1, 'โกโก้', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', 'admin', '1'),
(2, 1, 'ชาเขียว', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', 'admin', '1'),
(3, 1, 'ชาไทย', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', 'admin', '1'),
(4, 2, 'โกโก้', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', 'admin', '1'),
(5, 3, 'โกโก้', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', '1', '1'),
(6, 3, 'ชาเขียว', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', '1', '1'),
(7, 3, 'โกโก้', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', '1', '0'),
(9, 4, 'โกโก้', 'ร้อน', 26, 3, 78, 'ไข่มุข', '3', 'แก้ว', 'test', '1'),
(10, 4, 'ชาเขียว', 'เลือก', 26, 1, 26, 'ไม่มี', 'ไม่มี', 'แก้ว', 'test', '3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pid` int(11) NOT NULL,
  `PStatus` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Pname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Pprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pid`, `PStatus`, `Pname`, `Pprice`) VALUES
(1, 'มี', 'โกโก้', 26),
(2, 'มี', 'ชาเขียว', 26),
(4, 'มี', 'ชาไทย', 26),
(5, 'มี', 'กาแฟโบราณ', 26),
(6, 'มี', 'โอเลี้ยง', 26),
(7, 'มี', 'เนสกาแฟ', 26),
(8, 'มี', 'ช็อคโกแลต', 26),
(9, 'มี', 'โอวัลติน', 26),
(10, 'มี', 'คาปูชิโน่', 26),
(11, 'มี', 'ชามะนาว', 26),
(12, 'มี', 'ชาดำ', 26),
(13, 'มี', 'ชาเนสที', 26),
(14, 'มี', 'ไมโล', 26),
(15, 'มี', 'แคนตาลูป', 26),
(16, 'มี', 'เผือก', 26),
(17, 'มี', 'จ้ำบ๊ะ', 36),
(18, 'มี', 'กาแฟดึงดูด', 31),
(19, 'มี', 'ปังปิ้งเนยนม', 25),
(20, 'มี', 'ปังคลุกฝุ่น', 30),
(21, 'มี', 'น้ำผึ่ง', 26),
(22, 'มี', 'ลาเต้', 26),
(23, 'มี', 'มะพร้าว', 26);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `Rid` int(11) NOT NULL,
  `cususer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Rdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`Rid`, `cususer`, `Rdate`) VALUES
(1, 'admin', '2020-03-08 13:40:26'),
(2, 'admin', '2020-03-08 14:51:02'),
(3, '1', '2020-03-08 15:24:04'),
(4, 'test', '2020-03-08 17:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockid` int(11) NOT NULL,
  `Sname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `SAmount` int(10) NOT NULL,
  `SPrice` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Sdate` date NOT NULL,
  `Supdate` date NOT NULL,
  `employeename` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockid`, `Sname`, `SAmount`, `SPrice`, `Sdate`, `Supdate`, `employeename`) VALUES
(1, 'นมข้นหวาน', 20, '22', '2020-03-06', '2020-03-08', 'admin'),
(4, 'น้ำตาลทรายแดง', 10, '29', '2020-03-07', '2020-03-08', 'admin'),
(5, 'ผงกาแฟ (nescafe)', 12, '250', '2020-03-08', '2020-03-08', 'admin'),
(6, 'มิตรผล น้ำตาลทรายขาวบริสุทธิ์ 1กก.', 15, '22', '2020-03-08', '2020-03-08', 'admin'),
(7, 'นมคาร์เนชั่น', 20, '23', '2020-03-08', '2020-03-08', 'admin'),
(8, 'ผงแคนตาลูป', 3, '80', '2020-03-08', '2020-03-08', 'admin'),
(9, 'ผงชาเย็น ตรามือ', 3, '60', '2020-03-08', '2020-03-08', 'admin'),
(10, 'ผงเผือก', 3, '80', '2020-03-08', '2020-03-08', 'admin'),
(11, 'ผงชาเขียว ตรามือ', 5, '38', '2020-03-08', '2020-03-08', 'admin'),
(12, 'ขนมปัง', 11, '29', '2020-03-08', '2020-03-08', 'admin'),
(13, 'น้ําผึ้ง', 3, '80', '2020-03-08', '2020-03-08', 'admin'),
(14, 'นะนาว', 2, '50', '2020-03-08', '2020-03-08', 'admin'),
(15, 'เกลือ', 5, '17', '2020-03-08', '2020-03-08', 'admin'),
(16, 'ผงชาแดงตรามือ', 3, '60', '2020-03-08', '2020-03-08', 'admin'),
(17, 'ผงโกโก้', 10, '80', '2020-03-08', '2020-03-08', 'admin'),
(18, 'ผงชาเนสที', 5, '182', '2020-03-08', '2020-03-08', 'admin'),
(19, 'คอฟฟี่เมตครีมเทียม', 8, '63', '2020-03-08', '2020-03-08', 'admin'),
(20, 'เมจิ นม พาสเจอร์ไรส์ 2000มล.', 4, '91.75', '2020-03-08', '2020-03-08', 'admin'),
(21, 'ผงโอวัลติน', 4, '80', '2020-03-08', '2020-03-08', 'admin'),
(22, 'ไมโลผงขนาด 1,000กรัม', 4, '159', '2020-03-08', '2020-03-08', 'admin'),
(23, 'โอริโอ้ แพ็ค', 4, '46', '2020-03-08', '2020-03-08', 'admin'),
(24, 'เม็ดไข่มุก1,000 กรัม', 15, '35', '2020-03-08', '2020-03-08', 'admin'),
(25, 'ฟรุตสลัด', 2, '45', '2020-03-08', '2020-03-08', 'admin'),
(26, 'เนย', 1, '90', '2020-03-08', '2020-03-08', 'admin'),
(27, 'วิปปิ้งครีม', 2, '45', '2020-03-08', '2020-03-08', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CusTel`),
  ADD UNIQUE KEY `cususer` (`cususer`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emtel`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idorder`),
  ADD UNIQUE KEY `idorder` (`idorder`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `order_cus_ibfk_1` (`cususer`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_receipt_ibfk_2` FOREIGN KEY (`orders_id`) REFERENCES `receipt` (`Rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
