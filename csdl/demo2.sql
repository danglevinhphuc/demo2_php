-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 12:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `tenmenu_tv` text COLLATE utf8_vietnamese_ci NOT NULL,
  `tenmenu_ta` text COLLATE utf8_vietnamese_ci NOT NULL,
  `tenmenu_tt` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `tenmenu_tv`, `tenmenu_ta`, `tenmenu_tt`) VALUES
(9, 'Contact', 'Contact', 'Contact'),
(10, 'News', 'News', 'News');

-- --------------------------------------------------------

--
-- Table structure for table `tab_menu`
--

CREATE TABLE `tab_menu` (
  `id_tab` int(11) NOT NULL,
  `content_tv` text COLLATE utf8_vietnamese_ci,
  `content_ta` text COLLATE utf8_vietnamese_ci,
  `content_tt` text COLLATE utf8_vietnamese_ci,
  `id_menu` int(11) DEFAULT NULL,
  `text_tv` text COLLATE utf8_vietnamese_ci,
  `text_ta` text COLLATE utf8_vietnamese_ci,
  `text_tt` text COLLATE utf8_vietnamese_ci,
  `H1_tt` text COLLATE utf8_vietnamese_ci,
  `H1_ta` text COLLATE utf8_vietnamese_ci,
  `H1_tv` text COLLATE utf8_vietnamese_ci,
  `H2_tt` text COLLATE utf8_vietnamese_ci,
  `H2_ta` text COLLATE utf8_vietnamese_ci,
  `H2_tv` text COLLATE utf8_vietnamese_ci,
  `title_ta` text COLLATE utf8_vietnamese_ci,
  `title_tt` text COLLATE utf8_vietnamese_ci,
  `title_tv` text COLLATE utf8_vietnamese_ci,
  `alt_ta` text COLLATE utf8_vietnamese_ci,
  `alt_tt` text COLLATE utf8_vietnamese_ci,
  `alt_tv` text COLLATE utf8_vietnamese_ci,
  `tukhoa_ta` text COLLATE utf8_vietnamese_ci,
  `tukhoa_tt` text COLLATE utf8_vietnamese_ci,
  `tukhoa_tv` text COLLATE utf8_vietnamese_ci,
  `des_ta` text COLLATE utf8_vietnamese_ci,
  `des_tt` text COLLATE utf8_vietnamese_ci,
  `des_tv` text COLLATE utf8_vietnamese_ci,
  `today` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tab_menu`
--

INSERT INTO `tab_menu` (`id_tab`, `content_tv`, `content_ta`, `content_tt`, `id_menu`, `text_tv`, `text_ta`, `text_tt`, `H1_tt`, `H1_ta`, `H1_tv`, `H2_tt`, `H2_ta`, `H2_tv`, `title_ta`, `title_tt`, `title_tv`, `alt_ta`, `alt_tt`, `alt_tv`, `tukhoa_ta`, `tukhoa_tt`, `tukhoa_tv`, `des_ta`, `des_tt`, `des_tv`, `today`) VALUES
(1, 'contact', 'contact', 'contact', 9, '<p>day la contact 1</p>\r\n', '<p>day la contact 1</p>\r\n', '<p>day la contact 1</p>\r\n', 'h1 contact cn', 'h1 contact en', 'h1 contact vn', 'h1 contact cn', 'h1 contact en', 'h1 contact vn', 'h1 contact en', 'h1 contact cn', 'h1 contact vn', 'h1 contact en', 'h1 contact cn', 'h1 contact vn', 'h1 contact en', 'h1 contact cn', 'h1 contact vn', 'h1 contact en', 'h1 contact cn', 'h1 contact vn', '2017-07-19 11:0'),
(3, 'contact2', 'contact2', 'contact2', 9, '<p>day la contact2</p>\r\n', '<p>day la contact2</p>\r\n', '<p>day la contact2</p>\r\n', 'h1', 'h1', 'h1', 'h2', 'h2', 'h1', 'h1', 'h2', 'title', 'title', 'title', 'asdas', 'asda', 'asdas', ', asdasd', ', asdas', 'asdasd', 'asdas', '2017-07-19 11:0'),
(4, 'new1', 'new1', '标签名称', 10, '<p><img alt="" src="/demo2/js/ckeditor/kcfinder/upload/images/2012-09-26.01.53.09-1.jpg" style="height:20px; width:32px" />day la new1</p>\r\n', '<p>day la new1</p>\r\n', '<p>day la new1</p>\r\n', 'new h1 cn', 'new h1 en', 'new h1 vn', 'new h1 cn', 'new h1 en', 'new h1 vn', 'new h1 en', 'new h1 cn', 'new h1 vn', 'new h1 en', 'new h1 cn', 'new h1 vn', 'new h1 en', 'new h1 cn', 'new h1 vn', 'new h1 en', 'new h1 cn', 'new h1 vn', '2017-07-19 12:2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tab_menu`
--
ALTER TABLE `tab_menu`
  ADD PRIMARY KEY (`id_tab`),
  ADD KEY `id_menu` (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tab_menu`
--
ALTER TABLE `tab_menu`
  MODIFY `id_tab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tab_menu`
--
ALTER TABLE `tab_menu`
  ADD CONSTRAINT `tab_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
