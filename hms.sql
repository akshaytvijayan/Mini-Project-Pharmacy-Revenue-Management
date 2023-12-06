-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 09:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(11) NOT NULL,
  `doctor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `doctor`) VALUES
(2, 'Dr. Ajith K Gopal'),
(5, 'Dr. Ajith K Gopal'),
(4, 'Dr. Sivakumar S'),
(3, 'Dr. Ashly Shino');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `pid` int(11) NOT NULL,
  `dos` date NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`pid`, `dos`, `discount`) VALUES
(16, '2023-12-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(10) NOT NULL,
  `batchno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `sPrice` varchar(20) NOT NULL,
  `tax` float DEFAULT NULL,
  `bPrice` varchar(20) NOT NULL,
  `profit` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `expiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `batchno`, `name`, `type`, `supplier`, `sPrice`, `tax`, `bPrice`, `profit`, `stock`, `expiryDate`) VALUES
(1, 30702, 'ABZ', 'Syrup', 'Kemsa', '10', 6, '5', '5', '51', '2021-01-02'),
(2, 30702, 'Panadol', 'Syrup', '', '7', 6, '5', '2', '20', '2023-05-31'),
(3, 40503, 'Sample drug', 'Syrup', 'Kemsa', '15', 6, '10', '5', '515', '2024-01-01'),
(4, 30702, 'Brufen', 'Tablet', '', '7', 4, '5', '2', '17', '2023-05-30'),
(6, 30702, 'Piliton', 'tablet', 'Kemsa', '7', 4, '5', '2', '505', '2024-01-09'),
(12, 30713, 'Benadryl Cough Syrup', 'Syrup', 'Varun', '10', 5, '7', '3', '40', '2024-09-30'),
(13, 30714, 'Corex Cough Syrup', 'Syrup', 'Akshay', '12', 6, '8', '4', '50', '2023-12-20'),
(14, 30715, 'Ascoril Cough Syrup', 'Syrup', 'Krish', '15', 7, '10', '5', '60', '2023-12-15'),
(15, 30716, 'Honitus Cough Syrup', 'Syrup', 'Sreekumar', '8', 4, '5', '3', '19', '2023-10-10'),
(16, 30717, 'Torex Cough Syrup', 'Syrup', 'Varun', '14', 7, '9', '5', '45', '2023-12-28'),
(17, 30718, 'Acetaminophen', 'Tablet', 'Varun', '5', 2, '3', '2', '90', '2024-04-30'),
(25, 30726, 'ACETAMINOPHEN Injectable', 'Injection', 'Varun', '8', 4, '5', '3', '50', '2024-05-30'),
(26, 30727, 'ADRENALINE Injectable', 'Injection', 'Akshay', '15', 7, '10', '5', '19', '2024-06-15'),
(27, 30728, 'CO-AMOXICLAV Injectable', 'Injection', 'Krish', '25', 12, '18', '7', '40', '2024-07-22'),
(28, 30729, 'AMPHOTERICIN B conventional Injectable', 'Injection', 'Sreekumar', '30', 15, '20', '10', '15', '2024-08-10'),
(29, 30730, 'AMPHOTERICIN B liposomal Injectable', 'Injection', 'Varun', '35', 18, '25', '10', '10', '2024-09-05'),
(30, 30731, 'AMPICILLIN Injectable', 'Injection', 'Akshay', '12', 6, '8', '4', '60', '2024-10-20'),
(31, 30732, 'ARTESUNATE Injectable', 'Injection', 'Krish', '18', 9, '12', '6', '35', '2024-11-15'),
(32, 30733, 'ATROPINE Injectable', 'Injection', 'Sreekumar', '10', 5, '7', '3', '9', '2024-12-30'),
(39, 30727, 'Acetaminophen-500mg', 'Tablet', 'Varun', '5', 2, '3', '2', '60', '2024-04-30'),
(40, 30727, 'Adderall-10mg', 'Tablet', 'Akshay', '20', 10, '15', '5', '40', '2024-06-15'),
(41, 30727, 'Amitriptyline-25mg', 'Tablet', 'Krish', '8', 4, '5', '3', '40', '2024-03-22'),
(42, 30727, 'Amlodipine-5mg', 'Tablet', 'Sreekumar', '10', 5, '7', '3', '70', '2024-08-10'),
(43, 30730, 'Amoxicillin-250mg', 'Tablet', 'Varun', '15', 8, '10', '5', '-20', '2024-09-05'),
(44, 30730, 'Ativan-1mg', 'Tablet', 'Krish', '18', 9, '12', '6', '20', '2024-05-20'),
(45, 30730, 'Atorvastatin-20mg', 'Tablet', 'Akshay', '12', 6, '8', '4', '50', '2024-07-10'),
(46, 30730, 'Azithromycin-250mg', 'Tablet', 'Sreekumar', '10', 12, '18', '', '0', '2024-10-15'),
(59, 12345, 'Amoxille', 'Syrup', '', '120', 6, '80', '', '160', '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(10) NOT NULL,
  `testName` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(2) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `allergic` varchar(200) NOT NULL,
  `conditions` varchar(100) NOT NULL,
  `ocondition` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `dos` varchar(200) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `rdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `phone`, `location`, `email`, `allergic`, `conditions`, `ocondition`, `status`, `dos`, `balance`, `rdate`) VALUES
(2, 'Arun', 19, '9254700361', 'Mahi', 'arun@onqoc.com', '', 'Hypertension', 'NONE', 0, '', '', '2023-06-02'),
(3, 'James M', 29, '9070007697', 'Nilambor', 'james@gmail.com', '', 'none', 'none', 0, '', '', '2023-06-01'),
(4, 'David', 19, '9254700361', 'Madhura', 'david@gmail.com', 'NONE', 'NONE', 'NONE', 0, '', '', '2023-06-02'),
(5, 'Raj', 35, '8700361894', 'Kakkodi', 'raj@gmail.com', '', 'none', 'none', 0, '', '', '2023-06-04'),
(6, 'Sample Name', 31, '9700361894', 'Govinda pu', 'sample.muriithi@onqoc.com', '', 'none', 'none', 0, '', '', '2023-06-04'),
(7, 'Arun Nair', 25, '9876543210', 'Trivandrum', 'arun@example.com', '', 'Asthma', 'NONE', 0, '', '', '2023-06-05'),
(8, 'Nithya Menon', 42, '7890123456', 'Kochi', 'nithya@example.com', 'Pollen', 'Diabetes', 'NONE', 0, '', '', '2023-06-06'),
(9, 'Aditi Iyer', 50, '8765432109', 'Alappuzha', 'aditi@example.com', 'Penicillin', 'High Blood Pressure', 'NONE', 0, '', '', '2023-06-07'),
(10, 'Rohit Pillai', 33, '9012345678', 'Kozhikode', 'rohit@example.com', 'Dust', 'Arthritis', 'NONE', 0, '', '', '2023-06-08'),
(11, 'Aarav Nambiar', 28, '8901234567', 'Thrissur', 'aarav@example.com', 'Peanuts', 'Anxiety', 'NONE', 0, '', '', '2023-06-09'),
(12, 'Meera Krishnan', 38, '9876543210', 'Palakkad', 'meera@example.com', 'Shellfish', 'Heart Disease', 'NONE', 0, '', '', '2023-06-10'),
(13, 'Ananya Nair', 22, '7890123456', 'Kollam', 'ananya@example.com', 'Eggs', 'Migraine', 'NONE', 0, '', '', '2023-06-11'),
(14, 'Devika Menon', 45, '8765432109', 'Kannur', 'devika@example.com', 'Milk', 'Osteoporosis', 'NONE', 0, '', '', '2023-06-12'),
(15, 'Vishal Nambiar', 30, '9012345678', 'Pathanamth', 'vishal@example.com', 'Cat Hair', 'Back Pain', 'NONE', 0, '', '', '2023-06-13'),
(16, 'Priya Nair', 26, '8901234567', 'Wayanad', 'priya@example.com', 'Sulfa', 'Depression', 'NONE', 0, '', '', '2023-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `balance` varchar(100) NOT NULL DEFAULT 'Pending',
  `payment` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `pmethod` varchar(100) NOT NULL,
  `pdate` date NOT NULL DEFAULT current_timestamp(),
  `dos` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `pid`, `balance`, `payment`, `comment`, `pmethod`, `pdate`, `dos`) VALUES
(67, 5, '2475', '2000', 'Balance amount ₹2475', 'CASH', '2023-11-26', '2023-11-26'),
(68, 5, '1475', '1000', 'Balance amount ₹1475', 'CASH', '2023-11-26', '2023-11-26'),
(69, 2, '591.28', '500', 'Paided by cash', 'CASH', '2023-11-26', '2023-11-26'),
(70, 2, '391.28', '200', 'Balance amount ₹391.28', 'CASH', '2023-11-26', '2023-11-26'),
(75, 2, '408.8', '500', 'Paid by cash', 'CASH', '2023-11-29', '2023-11-29'),
(76, 2, '291.28', '300', 'Paid by cash', 'CASH', '2023-11-29', '2023-11-26'),
(77, 3, '2.3', '150', 'Balance ₹2.3', 'CARD', '2023-11-29', '2023-11-29'),
(78, 4, '1', '158', 'paid', 'CASH', '2023-11-30', '2023-11-30'),
(79, 4, '-0.39999999999998', '530', 'paid', 'CASH', '2023-11-30', '2023-11-30'),
(80, 5, '-0.44', '15', 'paid', 'CASH', '2023-11-30', '2023-11-30'),
(81, 4, '-687.7', '687.3', 'paid', 'CASH', '2023-11-30', '2023-11-30'),
(82, 3, '0', '277', 'paid', 'CASH', '2023-11-30', '2023-11-30'),
(83, 6, '0', '118', 'paid', 'CASH', '2023-11-30', '2023-11-30'),
(84, 3, '-15.9', '250', 'paid', 'CASH', '2023-12-01', '2023-11-29'),
(85, 15, '-231.2', '1000', 'paid', 'CASH', '2023-12-01', '2023-12-01'),
(86, 12, '-0.23000000000002', '792', 'paid', 'CASH', '2023-12-01', '2023-12-01'),
(87, 11, '-0.90000000000009', '1325', 'paid', 'CASH', '2023-12-01', '2023-12-01'),
(88, 16, '684.1', '500', 'Cash', 'CASH', '2023-12-04', '2023-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sprice` varchar(100) NOT NULL,
  `drug` varchar(255) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `dos` date NOT NULL DEFAULT current_timestamp(),
  `balance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `sprice`, `drug`, `qty`, `total`, `pid`, `dos`, `balance`) VALUES
(51, 'Raj', '15', 'Sample drug', '10', '659', 5, '2023-11-26', '-2341'),
(52, 'Raj', '120', 'Amoxille', '30', '3816', 5, '2023-11-26', '3816'),
(53, 'Arun', '120', 'Amoxille', '5', '636', 2, '2023-11-26', '-364'),
(54, 'Arun', '7', 'Piliton', '15', '109.2', 2, '2023-11-26', '109.2'),
(55, 'Arun', '15', 'Sample drug', '10', '159', 2, '2023-11-26', '159'),
(56, 'Arun', '10', 'XYZ', '5', '59', 2, '2023-11-26', '59'),
(57, 'Arun', '10', 'ABZ', '6', '63.6', 2, '2023-11-26', '63.6'),
(58, 'Arun', '7', 'Brufen', '8', '58.24', 2, '2023-11-26', '58.24'),
(59, 'Arun', '2', 'aa', '3', '206.24', 2, '2023-11-26', '206.24'),
(60, 'Arun', '7', 'Brufen', '10', '72.8', 2, '2023-11-29', '-427.2'),
(61, 'Arun', '120', 'Amoxille', '5', '636', 2, '2023-11-29', '636'),
(62, 'James M', '7', 'Piliton', '10', '72.8', 3, '2023-11-29', '-327.2'),
(63, 'James M', '15', 'Sample drug', '5', '79.5', 3, '2023-11-29', '79.5'),
(64, 'David', '7', 'Panadol', '10', '74.2', 4, '2023-11-29', '74.2'),
(65, 'David', '7', 'Piliton', '10', '72.8', 4, '2023-11-29', '72.8'),
(67, 'David', '7', 'Panadol', '10', '74.2', 4, '2023-11-29', '74.2'),
(68, 'David', '7', 'Piliton', '10', '72.8', 4, '2023-11-29', '72.8'),
(70, 'David', '7', 'Panadol', '10', '74.2', 4, '2023-11-29', '74.2'),
(71, 'David', '7', 'Piliton', '10', '72.8', 4, '2023-11-29', '72.8'),
(72, 'David', '', '', '', '0', 4, '2023-11-29', '0'),
(73, 'David', '', '', '', '0', 4, '2023-11-29', '0'),
(74, 'James M', '7', 'Piliton', '10', '72.8', 3, '2023-11-29', '72.8'),
(75, 'James M', '15', 'Sample drug', '10', '159', 3, '2023-11-29', '159'),
(76, 'James M', '', '', '', '0', 3, '2023-11-29', '0'),
(77, 'David', '15', 'Sample drug', '10', '159', 4, '2023-11-30', '-1216.3'),
(78, 'David', '10', 'ABZ', '10', '106', 4, '2023-11-30', '106'),
(79, 'David', '15', 'Sample drug', '10', '159', 4, '2023-11-30', '159'),
(80, 'David', '7', 'Brufen', '10', '72.8', 4, '2023-11-30', '72.8'),
(81, 'David', '7', 'Piliton', '10', '72.8', 4, '2023-11-30', '72.8'),
(82, 'David', '10', 'XYZ', '10', '118', 4, '2023-11-30', '118'),
(83, 'Raj', '7', 'Brufen', '2', '14.56', 5, '2023-11-30', '-0.4399999999999995'),
(84, 'Raj', '10', 'XYZ', '10', '118', 5, '2023-11-30', '118'),
(85, 'Raj', '10', 'ABZ', '10', '106', 5, '2023-11-30', '106'),
(86, 'James M', '15', 'Sample drug', '10', '159', 3, '2023-11-30', '-118'),
(87, 'James M', '10', 'XYZ', '10', '118', 3, '2023-11-30', '118'),
(88, 'Sample Name', '10', 'XYZ', '10', '118', 6, '2023-11-30', '0'),
(89, 'Vishal Nambiar', '8', 'Amitriptyline-25mg', '10', '83.2', 15, '2023-12-01', '-916.8'),
(90, 'Vishal Nambiar', '18', 'Ativan-1mg', '10', '196.2', 15, '2023-12-01', '196.2'),
(91, 'Vishal Nambiar', '10', 'ATROPINE Injectable', '10', '105', 15, '2023-12-01', '105'),
(92, 'Vishal Nambiar', '', '', '', '0', 15, '2023-12-01', '0'),
(93, 'Vishal Nambiar', '8', 'Amitriptyline-25mg', '10', '83.2', 15, '2023-12-01', '83.2'),
(94, 'Vishal Nambiar', '18', 'Ativan-1mg', '10', '196.2', 15, '2023-12-01', '196.2'),
(95, 'Vishal Nambiar', '10', 'ATROPINE Injectable', '10', '105', 15, '2023-12-01', '105'),
(96, 'Vishal Nambiar', '', '', '', '0', 15, '2023-12-01', '0'),
(97, 'Priya Nair', '25', 'Azithromycin-250mg', '10', '280', 16, '2023-12-01', '-220'),
(98, 'Priya Nair', '12', 'Atorvastatin-20mg', '10', '127.2', 16, '2023-12-01', '127.2'),
(99, 'Priya Nair', '18', 'Ativan-1mg', '10', '196.2', 16, '2023-12-01', '196.2'),
(100, 'Priya Nair', '15', 'Amoxicillin-250mg', '10', '162', 16, '2023-12-01', '162'),
(101, 'Priya Nair', '10', 'Amlodipine-5mg', '10', '105', 16, '2023-12-01', '105'),
(102, 'Priya Nair', '8', 'Amitriptyline-25mg', '10', '83.2', 16, '2023-12-01', '83.2'),
(103, 'Priya Nair', '20', 'Adderall-10mg', '10', '220', 16, '2023-12-01', '220'),
(104, 'Priya Nair', '10', 'ATROPINE Injectable', '01', '10.5', 16, '2023-12-01', '10.5'),
(105, 'Meera Krishnan', '15', 'Amoxicillin-250mg', '10', '162', 12, '2023-12-01', '-630'),
(106, 'Meera Krishnan', '18', 'Ativan-1mg', '10', '196.2', 12, '2023-12-01', '196.2'),
(107, 'Meera Krishnan', '', '', '', '0', 12, '2023-12-01', '0'),
(108, 'Meera Krishnan', '15', 'Amoxicillin-250mg', '10', '162', 12, '2023-12-01', '162'),
(109, 'Meera Krishnan', '18', 'Ativan-1mg', '10', '196.2', 12, '2023-12-01', '196.2'),
(110, 'Meera Krishnan', '', '', '', '0', 12, '2023-12-01', '0'),
(111, 'Meera Krishnan', '8', 'Honitus Cough Syrup', '1', '8.32', 12, '2023-12-01', '8.32'),
(112, 'Meera Krishnan', '5', 'Acetaminophen', '10', '51', 12, '2023-12-01', '51'),
(113, 'Meera Krishnan', '15', 'ADRENALINE Injectable', '1', '16.05', 12, '2023-12-01', '16.05'),
(114, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(115, 'Ananya Nair', '12', 'Atorvastatin-20mg', '10', '127.2', 13, '2023-12-01', '127.2'),
(116, 'Ananya Nair', '10', 'Azithromycin-250mg', '10', '112', 13, '2023-12-01', '112'),
(117, 'Ananya Nair', '10', 'Amlodipine-5mg', '10', '105', 13, '2023-12-01', '105'),
(118, 'Ananya Nair', '5', 'Acetaminophen-500mg', '10', '51', 13, '2023-12-01', '51'),
(119, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(120, 'Ananya Nair', '10', 'ATROPINE Injectable', '10', '105', 13, '2023-12-01', '105'),
(121, 'Ananya Nair', '', '', '', '0', 13, '2023-12-01', '0'),
(122, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(123, 'Ananya Nair', '12', 'Atorvastatin-20mg', '10', '127.2', 13, '2023-12-01', '127.2'),
(124, 'Ananya Nair', '10', 'Azithromycin-250mg', '10', '112', 13, '2023-12-01', '112'),
(125, 'Ananya Nair', '10', 'Amlodipine-5mg', '10', '105', 13, '2023-12-01', '105'),
(126, 'Ananya Nair', '5', 'Acetaminophen-500mg', '10', '51', 13, '2023-12-01', '51'),
(127, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(128, 'Ananya Nair', '10', 'ATROPINE Injectable', '10', '105', 13, '2023-12-01', '105'),
(129, 'Ananya Nair', '', '', '', '0', 13, '2023-12-01', '0'),
(130, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(131, 'Ananya Nair', '12', 'Atorvastatin-20mg', '10', '127.2', 13, '2023-12-01', '127.2'),
(132, 'Ananya Nair', '10', 'Azithromycin-250mg', '10', '112', 13, '2023-12-01', '112'),
(133, 'Ananya Nair', '10', 'Amlodipine-5mg', '10', '105', 13, '2023-12-01', '105'),
(134, 'Ananya Nair', '5', 'Acetaminophen-500mg', '10', '51', 13, '2023-12-01', '51'),
(135, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(136, 'Ananya Nair', '10', 'ATROPINE Injectable', '10', '105', 13, '2023-12-01', '105'),
(137, 'Ananya Nair', '', '', '', '0', 13, '2023-12-01', '0'),
(138, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(139, 'Ananya Nair', '12', 'Atorvastatin-20mg', '10', '127.2', 13, '2023-12-01', '127.2'),
(140, 'Ananya Nair', '10', 'Azithromycin-250mg', '10', '112', 13, '2023-12-01', '112'),
(141, 'Ananya Nair', '10', 'Amlodipine-5mg', '10', '105', 13, '2023-12-01', '105'),
(142, 'Ananya Nair', '5', 'Acetaminophen-500mg', '10', '51', 13, '2023-12-01', '51'),
(143, 'Ananya Nair', '15', 'Amoxicillin-250mg', '10', '162', 13, '2023-12-01', '162'),
(144, 'Ananya Nair', '10', 'ATROPINE Injectable', '10', '105', 13, '2023-12-01', '105'),
(145, 'Aarav Nambiar', '10', 'Azithromycin-250mg', '10', '112', 11, '2023-12-01', '-1213'),
(146, 'Aarav Nambiar', '12', 'Atorvastatin-20mg', '10', '127.2', 11, '2023-12-01', '127.2'),
(147, 'Aarav Nambiar', '8', 'Amitriptyline-25mg', '10', '83.2', 11, '2023-12-01', '83.2'),
(148, 'Aarav Nambiar', '30', 'AMPHOTERICIN B conventional Injectable', '10', '345', 11, '2023-12-01', '345'),
(149, 'Aarav Nambiar', '35', 'AMPHOTERICIN B liposomal Injectable', '10', '413', 11, '2023-12-01', '413'),
(150, 'Aarav Nambiar', '15', 'ADRENALINE Injectable', '10', '160.5', 11, '2023-12-01', '160.5'),
(151, 'Aarav Nambiar', '8', 'Honitus Cough Syrup', '10', '83.2', 11, '2023-12-01', '83.2');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `location`, `status`, `email`, `phone`) VALUES
(2, 'Varun', 'kollam', 1, 'akshaytvijayanakshay@gmail.com', '04952577479'),
(3, 'SreeKumar', 'Thirrur', 0, 'sreekumar@gmail.com', '9078563421'),
(6, 'Akshay', 'Kozhikode', 0, 'akshay@gmail.com', '9072402692'),
(26, 'Krish', 'Ramalur', 0, 'HUJIJ@XR', '9072402692');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `password`, `user_type`) VALUES
(1, 'Akshay T Vijayan', 2147483647, 'Admin@123', '$2y$10$HxkUGKrhGi4KhRL34Xb6XOUHFMvAPpZCTHhMJkytdqA2B0nDyiVqu', 'admin'),
(35, 'Akshay T Vijayan', 2147483647, 'User@123', '$2y$10$3dWVQ5AHeLRbuhRZto91..Y1T2Bw.f4XbkczfxccXIDqpHULkiYge', 'user'),
(36, 'Muhammed Ajmal', 2147483647, 'majmals1998@gmail.com', '$2y$10$P7wJ86C9w4XRTWVCunlGTePkwDc.RkrYXm7AeNtiwIeZZHjTQoA9a', 'user'),
(37, 'Rahana', 2147483647, 'rahana@gmail.com', '$2y$10$TY816qPujwZgoxhUzSUfv.rOAD47J27qvYQ8Yx0sffkFlAmix4EKK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD KEY `id` (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
