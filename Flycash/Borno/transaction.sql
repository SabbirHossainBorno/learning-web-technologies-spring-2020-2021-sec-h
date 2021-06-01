-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 01:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flycash`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `serial_no` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `current_balance` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`serial_no`, `user_name`, `account_number`, `amount`, `transaction_type`, `current_balance`, `date`) VALUES
(1, 'borno', '01521242186', '500', 'Add Money (Bkash)', '500', '20-04-2021'),
(2, 'borno', '01716653557', '500', 'Add Money (Nagad)', '1000', '20-04-2021'),
(3, 'borno', '01716653557', '500', 'Add Money (Roket)', '1500', '20-04-2021'),
(4, 'borno', '01521240158', '500', 'Add Money (Bank)', '2000', '20-04-2021'),
(5, 'borno', '01521242186', '300', 'Cash In', '1700', '20-04-2021'),
(6, 'borno', '01521240158', '500', 'Cash Out', '1200', '20-04-2021'),
(7, 'borno', '01521240158', '500', 'Cash Out', '700', '20-04-2021'),
(8, 'borno', '01716653557', '500', 'From Admin', '1200', '20-04-2021'),
(9, 'borno', '01716653557', '284', 'Payment', '916', '20-04-2021'),
(10, 'borno', '01716653557', '50000', 'Add Money (Bkash)', '50916', '21-04-2021'),
(11, 'borno', '01716653557', '1550', 'Cash In', '49366', '22-04-2021'),
(12, 'borno', '49784894897', '500', 'Payment', '48866', '22-04-2021'),
(13, 'orchi', '01716653557', '500', 'Add Money (Bkash)', '500', '24-04-2021'),
(14, 'orchi', '01716653557', '500', 'Add Money (Bkash)', '1000', '25-04-2021'),
(15, 'orchi', '01716653557', '10', 'Cash In', '990', '25-04-2021'),
(16, 'orchi', '01521240158', '500', 'Cash Out', '490', '25-04-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
