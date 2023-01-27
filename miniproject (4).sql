-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 10:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(10) NOT NULL,
  `a_username` varchar(45) NOT NULL,
  `a_pass` varchar(45) NOT NULL,
  `a_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_username`, `a_pass`, `a_level`) VALUES
(1, 'admin', '1234', 'A'),
(2, 'member', '1234', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `c_no` int(11) NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `S_LastName` varchar(100) NOT NULL,
  `S_Address` varchar(100) NOT NULL,
  `S_Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`c_no`, `S_Name`, `S_LastName`, `S_Address`, `S_Phone`) VALUES
(4, 'Awis', 'Masae', 'Rersoh', '0998955824'),
(6, 'Fairus', 'Derama', 'Resoh', '0741238520'),
(17, 'Nusro', 'Baheh', 'Lakowmeelai', '0124859632'),
(19, 'YahYa', 'Daoh', 'Yala', 'sa'),
(20, 'assaas', 'Masae', 'asas', '0998955825'),
(21, 'assaas', 'Masae', 'asas', 'Hackkkkkk'),
(22, 'YahYa', 'Daoh', 'asas', 'sa'),
(23, 'assaas', 'Masae', 'asas', 'sa'),
(24, 'Nusro', 'Masae', 'asas', 'sa'),
(25, 'assaas', 'Daoh', 'Yala', 'Hackkkkkk'),
(26, 'Nusro', 'Daoh', 'Yala', '0741238520'),
(27, 'YahYa', 'Daoh', 'Yala', '0741238520');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `e_no` int(11) NOT NULL,
  `E_Name` varchar(100) NOT NULL,
  `E_LastName` varchar(100) NOT NULL,
  `E_Address` varchar(100) NOT NULL,
  `E_Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`e_no`, `E_Name`, `E_LastName`, `E_Address`, `E_Phone`) VALUES
(2, 'Yahta', 'Yosoh', 'Budee', '0753698524'),
(5, 'asdasd', 'Loso', 'Yala', '0989898456'),
(6, 'Palmy', 'Loso', 'Yala', '0989898456'),
(7, 'Palmy', 'lolo', 'Yala', '0989898456'),
(8, 'Palmy', 'asassa', 'Yala', 'sasa'),
(9, 'asas', 'asassa', 'asasas', '0989898456'),
(10, 'Palmy', 'asassa', 'Yala', 'sasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_no` int(11) NOT NULL,
  `P_Name` varchar(100) NOT NULL,
  `P_Price` int(11) NOT NULL,
  `P_Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_no`, `P_Name`, `P_Price`, `P_Quantity`) VALUES
(4, 'Nike', 8000, 545454),
(5, 'Nike', 8000, 545454),
(6, 'Nike', 8000, 99),
(7, 'asasas', 8000, 99),
(8, 'Nike', 8000, 99),
(9, 'Nike', 8000, 99),
(10, 'Nike', 8000, 99),
(11, 'Nike', 8000, 99),
(12, 'Nike', 8000, 99),
(13, 'asasas', 8000, 99),
(14, 'asasas', 8000, 99),
(15, 'Nike', 8000, 2147483647),
(16, 'asasas', 8000, 99);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `L_no` int(11) NOT NULL,
  `L_Name` varchar(100) NOT NULL,
  `L_Type` varchar(100) NOT NULL,
  `L_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`L_no`, `L_Name`, `L_Type`, `L_Date`) VALUES
(5, 'sadasdasd', 'asdasdas', '0000-00-00'),
(6, 'asdasdas', 'dasdasd', '0000-00-00'),
(11, 'asdasdas', 'asdasd', '0000-00-00'),
(12, 'asdasdas', 'assaas', '0000-00-00'),
(13, 'asdasdas', 'asdasd', '0000-00-00'),
(14, 'asdasdas', 'asdasd', '0000-00-00'),
(15, 'asdasdas', 'asdasd', '0000-00-00'),
(16, 'asdasdas', 'assaas', '0000-00-00'),
(17, 'saasas', 'assaas', '0000-00-00'),
(18, 'asdasdas', 'sdasdasd', '0000-00-00'),
(19, 'asdasdas', 'assaas', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`e_no`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_no`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`L_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `c_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `e_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `L_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
