-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 06:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soyas`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeelogin`
--

CREATE TABLE `employeelogin` (
  `id` int(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passcode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeelogin`
--

INSERT INTO `employeelogin` (`id`, `role`, `name`, `username`, `passcode`) VALUES
(2, 'procurer', 'shree', 'dpak', 'dpak'),
(1, 'md', 'managing director', 'managing_director', 'abt123'),
(3, 'procurer', 'shree', 'shree', 'shree');

-- --------------------------------------------------------

--
-- Table structure for table `ftd_cost_solid`
--

CREATE TABLE `ftd_cost_solid` (
  `Tran_Date` date DEFAULT NULL,
  `Fran_Name` varchar(25) DEFAULT NULL,
  `Bmc_Code` varchar(8) DEFAULT NULL,
  `Bmc_Name` varchar(45) DEFAULT NULL,
  `Qty` decimal(5,1) DEFAULT NULL,
  `Fat` decimal(7,3) DEFAULT NULL,
  `Snf` decimal(7,3) DEFAULT NULL,
  `Amount` decimal(9,2) DEFAULT NULL,
  `Recovery_Amt` decimal(9,2) DEFAULT NULL,
  `Add_Date` date DEFAULT NULL,
  `Add_user` varchar(25) DEFAULT NULL,
  `Mody_Date` date DEFAULT NULL,
  `Mody_User` varchar(25) DEFAULT NULL,
  `D_Flag` varchar(1) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ftd_cost_solid`
--

INSERT INTO `ftd_cost_solid` (`Tran_Date`, `Fran_Name`, `Bmc_Code`, `Bmc_Name`, `Qty`, `Fat`, `Snf`, `Amount`, `Recovery_Amt`, `Add_Date`, `Add_user`, `Mody_Date`, `Mody_User`, `D_Flag`) VALUES
('2019-02-06', 'DHARAPURAM', '', '', '3.0', '2.000', '3.000', '324.00', '330.00', '2019-02-06', 'dpak', '0000-00-00', '-', ''),
('2019-02-06', 'A.SUNGAM', '', '', '3.0', '2.000', '3.000', '324.00', '330.00', '2019-02-06', 'dpak', '0000-00-00', '-', ''),
('2019-02-06', 'GANDHINAGAR', 'B0000020', 'K KEERANUR', '3.0', '2.000', '3.000', '324.00', '330.00', '2019-02-06', 'dpak', '0000-00-00', '-', ''),
('2019-02-08', 'A.SUNGAM', 'B0000001', 'A SUNGAM', '3.0', '2.000', '3.000', '324.00', '330.00', '2019-02-08', 'dpak', '0000-00-00', '-', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `ftd_local_sales`
--

CREATE TABLE `ftd_local_sales` (
  `Tran_Date` date DEFAULT NULL,
  `Fran_Name` varchar(25) DEFAULT NULL,
  `Bmc_Code` varchar(8) DEFAULT NULL,
  `Bmc_Name` varchar(45) DEFAULT NULL,
  `Qty` decimal(5,1) DEFAULT NULL,
  `Fat` decimal(7,3) DEFAULT NULL,
  `Snf` decimal(7,3) DEFAULT NULL,
  `Amount` decimal(9,2) DEFAULT NULL,
  `Add_Date` date DEFAULT NULL,
  `Add_user` varchar(25) DEFAULT NULL,
  `Mody_Date` date DEFAULT NULL,
  `Mody_User` varchar(25) DEFAULT NULL,
  `D_Flag` varchar(1) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ftd_local_sales`
--

INSERT INTO `ftd_local_sales` (`Tran_Date`, `Fran_Name`, `Bmc_Code`, `Bmc_Name`, `Qty`, `Fat`, `Snf`, `Amount`, `Add_Date`, `Add_user`, `Mody_Date`, `Mody_User`, `D_Flag`) VALUES
('2019-02-06', 'DHARAPURAM', 'B0000020', 'K KEERANUR', '3.0', '2.000', '3.000', '324.00', '2019-02-06', 'dpak', '0000-00-00', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ftd_smpl_milk`
--

CREATE TABLE `ftd_smpl_milk` (
  `Tran_Date` date DEFAULT NULL,
  `Fran_Name` varchar(25) DEFAULT NULL,
  `Bmc_Code` varchar(8) DEFAULT NULL,
  `Bmc_Name` varchar(45) DEFAULT NULL,
  `Qty` decimal(5,1) DEFAULT NULL,
  `Fat` decimal(7,3) DEFAULT NULL,
  `Snf` decimal(7,3) DEFAULT NULL,
  `Amount` decimal(9,2) DEFAULT NULL,
  `Add_Date` date DEFAULT NULL,
  `Add_user` varchar(25) DEFAULT NULL,
  `Mody_Date` date DEFAULT NULL,
  `Mody_User` varchar(25) DEFAULT NULL,
  `D_Flag` varchar(1) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ftd_smpl_milk`
--

INSERT INTO `ftd_smpl_milk` (`Tran_Date`, `Fran_Name`, `Bmc_Code`, `Bmc_Name`, `Qty`, `Fat`, `Snf`, `Amount`, `Add_Date`, `Add_user`, `Mody_Date`, `Mody_User`, `D_Flag`) VALUES
('2019-02-06', 'DHARAPURAM', 'B0000019', 'DEVATHUR', '3.0', '2.000', '3.000', '324.00', '2019-02-06', 'dpak', '0000-00-00', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `ftd_solid_recvd_plant`
--

CREATE TABLE `ftd_solid_recvd_plant` (
  `Tran_Date` date DEFAULT NULL,
  `Fran_Name` varchar(25) DEFAULT NULL,
  `Tanker_No` varchar(15) DEFAULT NULL,
  `Bmc_Code` varchar(8) DEFAULT NULL,
  `Bmc_Name` varchar(45) DEFAULT NULL,
  `Qty` decimal(5,1) DEFAULT NULL,
  `Fat` decimal(7,3) DEFAULT NULL,
  `Snf` decimal(7,3) DEFAULT NULL,
  `Add_Date` date DEFAULT NULL,
  `Add_user` varchar(25) DEFAULT NULL,
  `Mody_Date` date DEFAULT NULL,
  `Mody_User` varchar(25) DEFAULT NULL,
  `D_Flag` varchar(1) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ftd_solid_recvd_plant`
--

INSERT INTO `ftd_solid_recvd_plant` (`Tran_Date`, `Fran_Name`, `Tanker_No`, `Bmc_Code`, `Bmc_Name`, `Qty`, `Fat`, `Snf`, `Add_Date`, `Add_user`, `Mody_Date`, `Mody_User`, `D_Flag`) VALUES
('2019-02-06', 'GANDHINAGAR', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-06', 'DHARAPURAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-06', 'DHARAPURAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-06', 'DHARAPURAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-06', 'GANDHINAGAR', 'B45', 'B0000020', 'K KEERANUR', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-06', 'A.SUNGAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-06', 'A.SUNGAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-06', 'A.SUNGAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-06', 'dpak', '0000-00-00', '-', '-'),
('2019-02-07', 'GANDHINAGAR', 'B45', 'B0000003', 'EARIPALAYAM', '4.0', '2.000', '3.000', '2019-02-07', '', '0000-00-00', '-', 'D'),
('2019-02-07', 'GANDHINAGAR', 'B45', 'B0000003', 'EARIPALAYAM', '4.0', '2.000', '3.000', '2019-02-07', '', '0000-00-00', '-', 'D'),
('2019-02-07', 'GANDHINAGAR', 'B45', 'B0000003', 'EARIPALAYAM', '4.0', '2.000', '3.000', '2019-02-07', '', '0000-00-00', '-', 'D'),
('2019-02-07', 'GANDHINAGAR', 'B45', 'B0000002', 'MINNAGAR', '3.0', '2.000', '3.000', '2019-02-07', 'dpak', '0000-00-00', '-', 'D'),
('2019-02-07', 'A.SUNGAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '4.0', '2.000', '3.000', '2019-02-07', 'dpak', '0000-00-00', '-', 'D'),
('2019-02-08', 'A.SUNGAM', 'B45', 'B0000001', 'A SUNGAM', '3.0', '2.000', '3.000', '2019-02-08', 'dpak', '0000-00-00', '-', '-'),
('2019-02-08', 'A.SUNGAM', 'B45', 'B0000018', 'THUMPECHCHAPALAYAM (TC PALAYAM)', '3.0', '2.000', '3.000', '2019-02-08', 'dpak', '0000-00-00', '-', 'D'),
('2019-02-08', 'DHARAPURAM', 'B45', 'B0000014', 'DHARAPURAM', '3.0', '2.000', '3.000', '2019-02-08', 'dpak', '0000-00-00', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeelogin`
--
ALTER TABLE `employeelogin`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
