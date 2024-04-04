-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2024 at 10:58 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eb_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `category_id` int NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_copies` int NOT NULL,
  `book_pub` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` int NOT NULL,
  `date_receive` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category_id`, `author`, `book_copies`, `book_pub`, `publisher_name`, `isbn`, `copyright_year`, `date_receive`, `date_added`, `status`) VALUES
(15, 'Natural Resources', 8, 'Robin Kerrod', 15, 'Marshall Cavendish Corporation', 'Marshall', '1-85435-628-3', 1997, '', '2013-12-11 06:34:27', 'New'),
(16, 'Encyclopedia Americana', 5, 'Grolier', 20, 'Connecticut', 'Grolier Incorporation', '0-7172-0119-8', 1988, '', '2013-12-11 06:36:23', 'Archive'),
(17, 'Algebra 1', 3, 'Carolyn Bradshaw, Michael Seals', 35, 'Pearson Education, Inc', 'Prentice Hall, New Jersey', '0-13-125087-6', 2004, '', '2013-12-11 06:39:17', 'Old'),
(18, 'The Philippine Daily Inquirer', 7, '..', 3, 'Pasay City', '..', '..', 2013, '', '2013-12-11 06:41:53', 'New'),
(19, 'Science in our World', 4, 'Brian Knapp', 25, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 1996, '', '2013-12-11 06:44:44', 'Lost'),
(20, 'Literature', 9, 'Greg Glowka', 20, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 2001, '', '2013-12-11 06:47:44', 'Old'),
(21, 'Lexicon Universal Encyclopedia', 5, 'Lexicon', 10, 'Lexicon Publication', 'Pulication Inc., Lexicon', '0-7172-2043-5', 1993, '', '2013-12-11 06:49:53', 'Old'),
(22, 'Science and Invention Encyclopedia', 5, 'Clarke Donald, Dartford Mark', 16, 'H.S. Stuttman inc. Publishing', 'Publisher , Westport Connecticut', '0-87475-450-x', 1992, '', '2013-12-11 06:52:58', 'New'),
(23, 'Integrated Science Textbook ', 4, 'Merde C. Tan', 15, 'Vibal Publishing House Inc.', '12536. Araneta Avenue Corner Ma. Clara St., Quezon City', '971-570-124-8', 2009, '', '2013-12-11 06:55:27', 'New'),
(24, 'Algebra 2', 3, 'Glencoe McGraw Hill', 15, 'The McGrawHill Companies Inc.', 'McGrawhill', '978-0-07-873830-2', 2008, '', '2013-12-11 06:57:35', 'New'),
(25, 'Wiki at Panitikan ', 7, 'Lorenza P. Avera', 28, 'JGM & S Corporation', 'JGM & S Corporation', '971-07-1574-7', 2000, '', '2013-12-11 06:59:24', 'Damage'),
(26, 'English Expressways TextBook for 4th year', 9, 'Virginia Bermudez Ed. O. et al', 23, 'SD Publications, Inc.', 'Gregorio Araneta Avenue, Quezon City', '978-971-0315-33-8', 2007, '', '2013-12-11 07:01:25', 'New'),
(27, 'Asya Pag-usbong Ng Kabihasnan ', 8, 'Ricardo T. Jose, Ph . D.', 21, 'Vibal Publishing House Inc.', 'Araneta Avenue . Cor. Maria Clara St., Quezon City', '971-07-2324-3', 2008, '', '2013-12-11 07:02:56', 'New'),
(28, 'Literature (the readers choice)', 9, 'Glencoe McGraw Hill', 20, '..', 'the McGrawHill Companies Inc', '0-02-817934-x', 2001, '', '2013-12-11 07:05:25', 'Damage'),
(29, 'Beloved a Novel', 9, 'Toni Morrison', 13, '..', 'Alfred A. Knoff, Inc', '0-394-53597-9', 1987, '', '2013-12-11 07:07:02', 'Old'),
(30, 'Silver Burdett Engish', 2, 'Judy Brim', 12, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, '', '2013-12-11 09:22:50', 'Old'),
(31, 'The Corporate Warriors (Six Classic Cases in American Business)', 8, 'Douglas K. Ramsey', 8, 'Houghton Miffin Company', '..', '0-395-35487-0', 1987, '', '2013-12-11 09:25:32', 'Old'),
(32, 'Introduction to Information System', 9, 'Cristine Redoblo', 10, 'CHMSC', 'Brian INC', '123-132', 2013, '', '2014-01-17 19:00:10', 'New'),
(33, 'Harry', 2, 'JK Rowling', 1, 'IDunno', 'Idunno', '0123704904', 1989, '', '2018-12-26 13:33:45', 'Archive'),
(34, 'Harry Potter', 2, 'JK Rowling', 20, 'IDunno', 'Idunno', '0123704904', 1989, '', '2018-12-26 18:33:57', 'New'),
(35, 'Tiga Abdul', 5, 'P.Ramlee', 1, 'Ceria SDN BHD', 'Safdar Amir', '1-300-882525', 1999, NULL, '2024-03-27 12:44:05', 'New'),
(36, 'Leftenan Adnan', 1, 'Hafizam', 1, 'Megah Holdings', 'Safdar Amir', '9-876-45632', 2020, NULL, '2024-03-27 12:50:03', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int NOT NULL,
  `member_id` bigint NOT NULL,
  `date_borrow` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `due_date` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrow`, `due_date`) VALUES
(501, 8, '2024-04-03 15:27:27', '24/04/2024'),
(500, 4, '2024-04-02 02:44:14', '03/04/2027');

-- --------------------------------------------------------

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE `borrowdetails` (
  `borrow_details_id` int NOT NULL,
  `book_id` int NOT NULL,
  `borrow_id` int NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowdetails`
--

INSERT INTO `borrowdetails` (`borrow_details_id`, `book_id`, `borrow_id`, `borrow_status`, `date_return`) VALUES
(179, 34, 501, 'pending', NULL),
(178, 35, 500, 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'Periodical'),
(2, 'English'),
(3, 'Math'),
(4, 'Science'),
(5, 'Encyclopedia'),
(6, 'Filipiniana'),
(7, 'Newspaper'),
(8, 'General'),
(9, 'References');

-- --------------------------------------------------------

--
-- Table structure for table `lost_book`
--

CREATE TABLE `lost_book` (
  `Book_ID` int NOT NULL,
  `ISBN` int NOT NULL,
  `Member_No` varchar(50) NOT NULL,
  `Date Lost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `username_mem` varchar(100) NOT NULL,
  `pass_mem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `type`, `year_level`, `status`, `email`, `username_mem`, `pass_mem`) VALUES
(1, 'Hafizam', 'Hensem', 'Male', 'Shamelin Star', '0123456789', 'Student', 'First Year', 'active', 'betulkerhensem@hotmail.com', 'Pije', 'Hensem'),
(2, 'Muhammad Azmi', 'Zaim', 'Male', 'Shamelin Star', '0123456789', 'Student', 'Second Year', 'active', '', 'azmi', 'password'),
(4, 'Shie', 'Poka', 'Male', 'Shamelin Star', '0144444444', 'Student', 'Fourth Year', 'active', '', 'Shie', 'Shie'),
(5, 'safdar', 'safdar', 'Male', 'Dengkil', '0123456789', 'Student', 'Faculty', 'active', 'Shie@gmail.com', 'safdar', 'safdar'),
(8, 'HEHEHE', 'HAHAHAHA', 'Female', 'Syurga', '0166666666', 'Teacher', 'Faculty', 'active', 'Labilabibu@alibaa.com', 'oji', '123'),
(9, 'Mars', 'Venom', 'Male', 'Pluto', '0179300927', 'Student', 'First Year', 'active', 'shikshakshok@yahoo.com', 'mars', 'mars');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int NOT NULL,
  `borrowertype` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `borrowertype`) VALUES
(2, 'Teacher'),
(20, 'Employee'),
(21, 'Non-Teaching'),
(22, 'Student'),
(32, 'Contruction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `mfa_enabled` tinyint(1) DEFAULT '0',
  `totp_secret` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `user_type`, `mfa_enabled`, `totp_secret`, `email`) VALUES
(2, 'admin', '$2y$10$xqBwfPCiNP0QaP5rHt3jMeikbghqJ6dVU8q1Hu.zkZ9uGXXzo9.ga', 'First Test', 'Last Test', 'admin', 1, NULL, 'safdar22051999@gmail.com'),
(3, 'ahmad', '$2y$10$1Bf5YpJxE2689z2tjtACHerfZAPGHU99UDh0g7bOxU5LFFv1p2g/q', 'ahmad', 'Hishamshah', 'librarian', 0, NULL, 'ahmad@yahoo.com'),
(17, 'azmi', 'password', 'Muhammad Azmi', 'Zaim', 'member', 0, NULL, ''),
(18, 'Pije', '$2y$10$IttiMWZb5hPdGMy0GEpbh.w9MSfufr5d4UP4LFLthYPLI622IJFGm', 'Hafizam', 'Hensem', 'member', 0, NULL, ''),
(21, 'safdar', '$2y$10$MSMM2vNbRwTWC/3TkRGn3Omt1khoFblWucwr9g.NWmvq6duEu7HKG', 'safdar', 'amir', 'librarian', 0, NULL, ''),
(23, 'Shie', '$2y$10$8XWeCEtlQtI24olLqTLgp.neo7gr9dvjJ.cBekeSw75ddQuR95nD2', 'Shie', 'Poka', 'member', 0, NULL, ''),
(31, 'Lynn', 'Lynn', 'Lynn', 'Lynn', 'admin', 0, NULL, ''),
(32, 'safdar', '$2y$10$98HL253TST/46s5IJp9beeHJEVi.CyGHX/qdlZ.qw3sVz9qrlMeLq', 'safdar', 'amir', 'member', 0, NULL, ''),
(33, '123', '$2y$10$lijhVR4ZWtTZYWVa4woaRekyRBuD63pstSja/Ef7qaK3GwDDsxzP2', '123', '123', 'member', 0, NULL, '123@gmail.com'),
(34, 'aaaa', '$2y$10$AXIZ2.49DcwaSrQ7Q.kxheCRn/I5i0Qu7hOegqJBZ7qoi4cAeVds2', 'aaaa', 'aaaa', 'member', 0, NULL, 'aaaa@gmail.com'),
(35, 'aaaa', '$2y$10$Z79EFX2GFoV3oHgHntfuIeA5IjGp2qtdjP9lZXl1jaC72rixYqUxK', 'aaaa', 'aaaa', 'member', 0, NULL, 'aaaa@gmail.com'),
(36, 'Ali', '$2y$10$X5mEO2xPdBZh1y9P4apOlOr9vR.92zSPu81V9G17lq8SpHT95bWgK', 'Ali', 'Labi', 'member', 0, NULL, 'Labilabibu@alibaa.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `borrowerid` (`member_id`),
  ADD KEY `borrowid` (`borrow_id`);

--
-- Indexes for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  ADD PRIMARY KEY (`borrow_details_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `classid` (`category_id`);

--
-- Indexes for table `lost_book`
--
ALTER TABLE `lost_book`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowertype` (`borrowertype`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  MODIFY `borrow_details_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;

--
-- AUTO_INCREMENT for table `lost_book`
--
ALTER TABLE `lost_book`
  MODIFY `Book_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
