-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 11:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2020_streaming_kiran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Kiran', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Nishant', 'nishant@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(200) NOT NULL,
  `n_description` text NOT NULL,
  `n_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `n_title`, `n_description`, `n_time`) VALUES
(2, 'This is simple notice', 'Wleocme to India. This is simple notice. available in system.Wleocme to India. This is simple notice. available in system.Wleocme to India. This is simple notice. available in system.Wleocme to India. This is simple notice. available in system.', '1572476303');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(200) NOT NULL,
  `p_description` text NOT NULL,
  `p_path` varchar(200) NOT NULL,
  `p_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`p_id`, `p_title`, `p_description`, `p_path`, `p_time`) VALUES
(2, 'The Role of Multicast in Adhoc Network', 'As of late, versatile processing has turned into an intriguing issue in research. In spite of the fact that PCs\r\nand specialized gadgets are becoming littler and all the more dominant, versatility still difficulties utilizations of\r\nportable figuring particularly in the territory of impromptu systems administration. ', '1572430755 IJREAMV05I0149001.pdf', '1572430755'),
(3, 'Information system', 'Information system', '1572430755_IJREAMV05I0149001.pdf', '1572474360');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_phone` varchar(10) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_reg_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_email`, `s_phone`, `s_password`, `s_reg_time`) VALUES
(1, 'nsm', 'bb', '9#', '9e3669d19b675bd57058fd4664205d2a', 1571818780),
(2, 'Nikhil Pawar', 'nikhil@gmail.com', '9696969696', '350d89c1cd6592bbbd1ed2e8a4f3ddba', 1572440571),
(3, 'Pratik Chaudhary', 'pratik@gmail.com', '8965231470', '0cb2b62754dfd12b6ed0161d4b447df7', 1572443161);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `sa_id` int(11) NOT NULL,
  `sa_email` varchar(50) NOT NULL,
  `sa_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`sa_id`, `sa_email`, `sa_password`) VALUES
(1, 'superadmin@gmail.com', '17c4520f6cfd1ab53d8745e84681eb49');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int(11) NOT NULL,
  `v_title` varchar(200) NOT NULL,
  `v_description` text NOT NULL,
  `v_path` varchar(200) NOT NULL,
  `v_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `v_title`, `v_description`, `v_path`, `v_time`) VALUES
(6, 'Demo Video 1 of Facebook Page', 'Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.\r\n\r\nDemo Video 1 of Facebook Page\r\nDemo Video 1 of Facebook Page\r\nDemo Video 1 of Facebook Page\r\nDemo Video 1 of Facebook Page\r\n\r\nDemo Video 1 of Facebook Page. Demo Video 1 of Facebook Page. Demo Video 1 of Facebook Page. Demo Video 1 of Facebook Page. Demo Video 1 of Facebook PageDemo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.Demo Video 1 of Facebook Page.\r\n\r\nDemo Video 1 of Facebook Page\r\nDemo Video 1 of Facebook Page\r\nDemo Video 1 of Facebook Page\r\nDemo Video 1 of Facebook Page\r\n\r\nDemo Video 1 of Facebook Page. Demo Video 1 of Facebook Page. Demo Video 1 of Facebook Page. Demo Video 1 of Facebook Page. Demo Video 1 of Facebook Page', '1572468872_Yogesh_Desai.mp4', '1572463825'),
(7, 'Demo Video 1 of Facebook Page', 'asdasdasd', '1572468872_Yogesh_Desai.mp4', '1572467657'),
(8, 'This is sample video of type three', 'By default, the FileDownloadService runs on the separate process, if you want to run it on the main process, just configure on the filedownloader.properties, and you can use FileDownloadUtils.isDownloaderProcess(Context) to check whether the FileDownloadService can run on the current process.', '1572468872_Yogesh_Desai.mp4', '1572468872'),
(9, 'Testing Video', 'Welcome to Test Video', '1579601815_VETERANS NEW ADD.mp4', '1579601815');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_email` (`a_email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `u_phone` (`s_phone`),
  ADD UNIQUE KEY `u_email` (`s_email`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
