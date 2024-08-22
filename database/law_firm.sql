-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 03:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law_firm`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocates_details`
--

CREATE TABLE `advocates_details` (
  `advocate_id` int(20) NOT NULL,
  `advocate_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact_no` bigint(12) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `bar_council_name` varchar(30) NOT NULL,
  `advocate_type` varchar(20) NOT NULL,
  `dictionary_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocates_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(20) NOT NULL,
  `article_name` varchar(20) NOT NULL,
  `short_description` varchar(20) NOT NULL,
  `complete_description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--


-- --------------------------------------------------------

--
-- Table structure for table `case_reports`
--

CREATE TABLE `case_reports` (
  `case_report_id` int(20) NOT NULL,
  `report_name` varchar(20) NOT NULL,
  `report` varchar(20) NOT NULL,
  `upload_date` date NOT NULL,
  `client_case_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_reports`
--



-- --------------------------------------------------------

--
-- Table structure for table `case_schedules`
--

CREATE TABLE `case_schedules` (
  `client _case_id` int(20) NOT NULL,
  `case_detail_id` int(20) NOT NULL,
  `case_date` date NOT NULL,
  `case_time` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_case_details`
--

CREATE TABLE `client_case_details` (
  `client_case_id` int(20) NOT NULL,
  `client_id` int(20) NOT NULL,
  `advocate_id` int(20) NOT NULL,
  `case_name` varchar(20) NOT NULL,
  `case_description` varchar(20) NOT NULL,
  `court_id` int(20) NOT NULL,
  `first_client_party` varchar(20) NOT NULL,
  `second_client_party` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_case_details`
--



-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `client_id` int(20) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `client_address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact_no` bigint(12) NOT NULL,
  `c_email_id` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `advocate_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `client_document`
--

CREATE TABLE `client_document` (
  `clientdoc_id` int(20) NOT NULL,
  `client_id` int(20) NOT NULL,
  `doc_name` varchar(20) NOT NULL,
  `upload_doc` varchar(500) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_document`
--


-- --------------------------------------------------------

--
-- Table structure for table `court_details`
--

CREATE TABLE `court_details` (
  `court_id` int(20) NOT NULL,
  `court_name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court_details`
--



-- --------------------------------------------------------

--
-- Table structure for table `dictionaries`
--

CREATE TABLE `dictionaries` (
  `dictionary_id` int(20) NOT NULL,
  `dictionary_word` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dictionaries`
--



-- --------------------------------------------------------

--
-- Table structure for table `judgement_report`
--

CREATE TABLE `judgement_report` (
  `judgement_report_id` int(20) NOT NULL,
  `case_detail_id` int(20) NOT NULL,
  `case_report_id` int(20) NOT NULL,
  `judgement_description` varchar(20) NOT NULL,
  `attach_report` varchar(20) NOT NULL,
  `case_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `article_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `hint_question` varchar(20) NOT NULL,
  `hint_answer` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--



-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(20) NOT NULL,
  `client_id` int(20) NOT NULL,
  `amount_paid` mediumint(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `paymode` varchar(20) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `cheque_no` int(20) NOT NULL,
  `payment_date` date NOT NULL,
  `pan_card` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocates_details`
--
ALTER TABLE `advocates_details`
  ADD PRIMARY KEY (`advocate_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `case_reports`
--
ALTER TABLE `case_reports`
  ADD PRIMARY KEY (`case_report_id`);

--
-- Indexes for table `case_schedules`
--
ALTER TABLE `case_schedules`
  ADD PRIMARY KEY (`case_detail_id`);

--
-- Indexes for table `client_case_details`
--
ALTER TABLE `client_case_details`
  ADD PRIMARY KEY (`client_case_id`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_document`
--
ALTER TABLE `client_document`
  ADD PRIMARY KEY (`clientdoc_id`);

--
-- Indexes for table `court_details`
--
ALTER TABLE `court_details`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `dictionaries`
--
ALTER TABLE `dictionaries`
  ADD PRIMARY KEY (`dictionary_id`);

--
-- Indexes for table `judgement_report`
--
ALTER TABLE `judgement_report`
  ADD PRIMARY KEY (`judgement_report_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocates_details`
--
ALTER TABLE `advocates_details`
  MODIFY `advocate_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `case_reports`
--
ALTER TABLE `case_reports`
  MODIFY `case_report_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `case_schedules`
--
ALTER TABLE `case_schedules`
  MODIFY `case_detail_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_case_details`
--
ALTER TABLE `client_case_details`
  MODIFY `client_case_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=885;

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `client_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client_document`
--
ALTER TABLE `client_document`
  MODIFY `clientdoc_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `court_details`
--
ALTER TABLE `court_details`
  MODIFY `court_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dictionaries`
--
ALTER TABLE `dictionaries`
  MODIFY `dictionary_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `judgement_report`
--
ALTER TABLE `judgement_report`
  MODIFY `judgement_report_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
