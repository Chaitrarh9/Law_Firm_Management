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

INSERT INTO `advocates_details` (`advocate_id`, `advocate_name`, `date_of_birth`, `qualification`, `address`, `city`, `contact_no`, `email_id`, `experience`, `bar_council_name`, `advocate_type`, `dictionary_id`) VALUES
(2, 'Mahindra S', '2018-01-15', 'BA MA', 'Sadhankeri\r\nDharwad', 'Dharwad', 1234578901, 'mahindra@gmail.com', '8', 'andhrapardesh', 'investigation', 0),
(3, 'prema', '2018-01-01', 'ma', 'malmaddi', 'dharwad', 967843567, 'premapoorna@gmail.co', '20', 'karnataka', 'civil', 0),
(4, 'mallikarjun', '2017-09-05', 'ba', 'nttf', 'dharwad', 2147483647, 'mallu@123', '5', 'maharashtra', 'criminal', 4567),
(5, 'parth', '2016-11-07', 'mphil', 'vidyanagar', 'hubli', 2147483647, 'parthp@', '7', 'Indian council', 'civil', 100),
(7, 'ipshita', '2016-08-02', 'MA', 'rajaji nagar', 'mysore', 2147483647, 'ipshita23457@gamil.c', '7', 'karnataka', 'investigator', 0),
(8, 'vinayak', '2018-03-04', 'bcom', 'Dharwad', 'dharwad', 9743275948, 'vin@gmail.com', 'two year', 'dharwad', 'junior', 0),
(9, 'pooja', '2018-02-20', 'LLB', 'Gandhi nagar', 'dharwad', 9480323710, 'poo@gmail.com', '6 yrs', 'karnataka', 'criminal', 0),
(10, 'Vani', '2016-06-02', 'BCOMLLB', '', 'sirsi', 9480915445, 'vani@gmail.com', '3 Yeras', 'karwar', 'Family', 0),
(11, 'Vani', '2016-06-02', 'BCOMLLB', '', 'sirsi', 9480915445, 'vani@gmail.com', '3 Yeras', 'karwar', 'Family', 0),
(12, 'Vani', '2016-06-02', 'BCOMLLB', '', 'sirsi', 9480915445, 'vani@gmail.com', '3 Yeras', 'karwar', 'Family', 0),
(13, 'Chaitra', '2010-02-06', 'llm', 'Karwar', 'Karwar', 9456231585, 'crh@gmail.com', '10 years', 'karwar', 'Criminal', 0);

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

INSERT INTO `articles` (`article_id`, `article_name`, `short_description`, `complete_description`) VALUES
(3, 'land remark', 'land measurement', 'land details'),
(4, 'Ragging', 'student ragging', 'near road of colleag');

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

INSERT INTO `case_reports` (`case_report_id`, `report_name`, `report`, `upload_date`, `client_case_id`) VALUES
(9, 'snatch', 'abcd xyz pqrs', '2017-11-28', 878);

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

INSERT INTO `client_case_details` (`client_case_id`, `client_id`, `advocate_id`, `case_name`, `case_description`, `court_id`, `first_client_party`, `second_client_party`, `date`, `status`) VALUES
(2, 2, 2, 'chain robbary', 'chain snatch', 2, 'pavitra', 'raju', '2010-10-12', 'investigation'),
(600, 7, 6, 'robbery', 'bank', 8, 'durga', 'shiva', '2018-01-07', 'active'),
(878, 8, 8, 'land ', 'land issue', 6, 'lk', 'yk', '2017-12-06', 'successful'),
(879, 6, 8, 'Crime', 'gghg', 7, 'vinu', 'raju', '2018-03-11', 'active'),
(880, 0, 8, 'hjjh', 'jhj', 5, 'hghg', 'hghg', '0778-07-08', 'a'),
(881, 8, 8, 'hh', 'jhjh', 5, 'hjj', 'jh', '5555-06-04', 'a'),
(882, 2, 4, 'murder', 'due to land  propert', 2, 'aman', 'karan', '2014-01-12', 'active'),
(883, 10, 9, 'abcd', 'abcd', 6, 'santosh', 'abcd', '2018-03-14', 'Active'),
(884, 13, 13, 'Commercial', 'Shop related', 7, 'megha', 'nagamma', '2022-07-08', 'Active');

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

INSERT INTO `client_details` (`client_id`, `client_name`, `client_address`, `city`, `contact_no`, `c_email_id`, `reg_date`, `advocate_id`) VALUES
(2, 'kalabhairav', 'ghandinagar', 'banglore', 2147483647, 'khalbhairavag@', '2015-04-03', '0'),
(3, 'durgama', 'sampigenagar', 'dwd', 45634520, 'durgas345@', '2018-01-01', '0'),
(4, 'ganesh', 'narayanpur', 'belgavi', 2147483647, 'ganeshs@456', '2018-02-20', '0'),
(5, 'ipshita', 'nttf', 'manglore', 987645363, 'ipshu@123', '2017-12-12', '0'),
(6, 'parth', 'marikamba road', 'sirsi', 986574987, 'parth@456', '2017-05-30', '0'),
(8, 'vinayak', 'Dharwad', 'Dharwad', 9743275948, 'vinayaks@gmail.com', '2018-03-11', '8'),
(10, 'Santosh', 'Dharwad', 'Dharwad', 9886631818, 'san@gmail.com', '2018-03-14', '9'),
(12, 'poornima', 'prakruti nilaya', 'Dharwad', 232323232378, 'poornima@gmail.com', '2018-04-02', '9'),
(13, 'Ananth', 'Banglore', 'Banglore', 6958475212, 'ana@gamil.com', '2022-07-28', '13');

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

INSERT INTO `client_document` (`clientdoc_id`, `client_id`, `doc_name`, `upload_doc`, `upload_date`) VALUES
(1, 8, 'Case Paper', 'IMG_4462.jpeg', '2018-03-12'),
(2, 0, 'aa', 'IMG_0005.jpg', '2018-03-12'),
(3, 0, 'aa', 'IMG_4462.jpeg', '2018-03-12'),
(4, 0, 'ss', 'IMG.jpg', '2018-03-12'),
(5, 8, 'rule', 'IMG_0003.jpg', '2018-03-12'),
(6, 10, 'Select Document Name', '', '0000-00-00'),
(7, 10, 'Select Document Name', '', '0000-00-00'),
(8, 13, 'Driving Licence', 'College_administration_system - Copy.pdf', '2022-07-27');

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

INSERT INTO `court_details` (`court_id`, `court_name`, `address`, `city`, `contact_no`) VALUES
(6, 'court complex', 'vinobha nagar', 'davangere', 2147483647),
(7, 'district court', 'Court Circle', 'Dharwad', 763452001),
(8, 'family court', 'maniyur', 'chitradurga', 2147483647);

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

INSERT INTO `dictionaries` (`dictionary_id`, `dictionary_word`, `description`) VALUES
(3, 'crime', 'murder of person'),
(4, 'robbary', 'snatch of gold...');

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

INSERT INTO `login` (`username`, `password`, `type`, `hint_question`, `hint_answer`, `status`) VALUES
('admin', '123', 'admin', 'who i am', 'admin', 'active'),
('court', '123123', 'court', 'who i am', 'court', 'active'),
('vin@gmail.com', '9743275948', 'advocate', 'Please Enter Your Co', '9743275948', 'active'),
('vinayaks@gmail.com', '9743275948', 'client', 'What is Your Contact', '9743275948', 'active'),
('poo@gmail.com', '123123', 'advocate', 'Please Enter Your Co', '9480323710', 'active'),
('san@gmail.com', '9886631818', 'client', 'What is Your Contact', '9886631818', 'active'),
('crh@gmail.com', '9456231585', 'advocate', 'Please Enter Your Co', '9456231585', 'active'),
('ana@gamil.com', '123123', 'client', 'who i am', 'ana@gamil.com', 'Active');

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

INSERT INTO `payment` (`payment_id`, `client_id`, `amount_paid`, `description`, `paymode`, `bank_name`, `cheque_no`, `payment_date`, `pan_card`) VALUES
(1, 13, 100, 'abcd', 'Cash', '', 0, '2022-07-13', 'ABD88G');

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
