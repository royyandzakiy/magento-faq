-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 10:58 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magento-faq`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `sender` varchar(256) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `show_faq` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `sender`, `question`, `answer`, `show_faq`) VALUES
(25, 'Royyan', 'Bagaimana cara Login?', 'Login dapat dilakukan dengan pertama mendaftarkan diri melalui pilihan Sign Up di bagian atas', 1),
(26, 'Royyan', 'Bagaimana cara Daftar?', 'Login dapat dilakukan dengan pertama mendaftarkan diri melalui pilihan Sign Up di bagian atas', 1),
(27, 'Royyan', 'Bagaimana cara Membeli Barang?', 'Login dapat dilakukan dengan pertama mendaftarkan diri melalui pilihan Sign Up di bagian atas', 1),
(28, 'Royyan', 'Bagaimana cara menjadi lebih baik?', 'oadskjfkoasdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
