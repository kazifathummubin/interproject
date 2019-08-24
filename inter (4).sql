-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 06:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inter`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aboutcontentimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutcontent` text COLLATE utf8mb4_unicode_ci,
  `ourteam_title` text COLLATE utf8mb4_unicode_ci,
  `ourteam_photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourteam1` text COLLATE utf8mb4_unicode_ci,
  `ourteam_photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourteam2` text COLLATE utf8mb4_unicode_ci,
  `ourteam_photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourteam3` text COLLATE utf8mb4_unicode_ci,
  `ourclint_title` text COLLATE utf8mb4_unicode_ci,
  `ourclint_photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourclint_photo11` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `aboutcontentimage`, `aboutcontent`, `ourteam_title`, `ourteam_photo1`, `ourteam1`, `ourteam_photo2`, `ourteam2`, `ourteam_photo3`, `ourteam3`, `ourclint_title`, `ourclint_photo1`, `ourclint_photo2`, `ourclint_photo3`, `ourclint_photo4`, `ourclint_photo5`, `ourclint_photo6`, `ourclint_photo7`, `ourclint_photo8`, `ourclint_photo9`, `ourclint_photo10`, `ourclint_photo11`, `created_at`, `updated_at`) VALUES
(8, '2019-08-12-15-25-33439.jpg', '<ol>\r\n	<li style=\"text-align:start\"><em><strong><span style=\"font-size:13px\"><span style=\"font-family:poppins-regular,serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:18px\"><span style=\"font-family:Arial\"><span style=\"color:#2ecc71\">Welcome to Sunnyquick, a specialist manufacturer of&nbsp;</span><u><a href=\"http://127.0.0.1:8000/curtain-walls_c1.html\" style=\"box-sizing:border-box; color:#231815; text-decoration:none; transition:color 0.3s linear 0s, background-color 0.3s linear 0s, border-color 0.3s linear 0s, opacity 0.3s linear 0s, background-image 0.3s linear 0s\" target=\"_blank\"><span style=\"color:#2ecc71\">glass curtain wall</span></a></u><span style=\"color:#2ecc71\">,&nbsp;</span><u><a href=\"http://127.0.0.1:8000/aluminium-windows_c2.html\" style=\"box-sizing:border-box; color:#231815; text-decoration:none; transition:color 0.3s linear 0s, background-color 0.3s linear 0s, border-color 0.3s linear 0s, opacity 0.3s linear 0s, background-image 0.3s linear 0s\" target=\"_blank\"><span style=\"color:#2ecc71\">aluminium windows</span></a><span style=\"color:#2ecc71\">&nbsp;and&nbsp;</span><a href=\"http://127.0.0.1:8000/aluminium-doors_c3.html\" style=\"box-sizing:border-box; color:#231815; text-decoration:none; transition:color 0.3s linear 0s, background-color 0.3s linear 0s, border-color 0.3s linear 0s, opacity 0.3s linear 0s, background-image 0.3s linear 0s\" target=\"_blank\"><span style=\"color:#2ecc71\">aluminium doors</span></a></u><span style=\"color:#2ecc71\">. If you&rsquo;re looking for a new supplier, you&rsquo;ve come to the right place.</span></span></span></span></span></span></strong></em></li>\r\n	<li style=\"text-align:start\">&nbsp;</li>\r\n	<li style=\"text-align:start\"><span style=\"color:#2ecc71\"><em><strong><span style=\"font-size:13px\"><span style=\"font-family:poppins-regular,serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:18px\"><span style=\"font-family:Arial\">Sunnyquick Aluminium Manufacturing Co.,Ltd&nbsp;located near the airport of Guangzhou China. Since 1998 We focus on bespoke aluminum and glass facade system which are tailor made by different client to meet various type of building type as: Hotel, Commercial Building, Residence, Apartment. All our produce are strict meet the performance as water proof, wind pleasure, noisy proof and sun protect. We also have our own developed systems that allows more flexibility in delivery time and could meet the economic project requirement also.</span></span></span></span></span></strong></em></span></li>\r\n</ol>', 'Professional Architectural and Design Team', '2019-08-12-15-25-33642.jpg', '<p>ean-mic Perrine is highly regarded as a senior practitioner of the architectural profession in Western Australia. As a registered architect with the Architects Board of Western Australia, he has completed an enviable track record of projects in a range of fields including single and multi-residential, retail, commercial, worship and liturgical spaces.<br />\r\nDuring his career, the buildings for which he has been responsible have won a number of Awards including the Master Builders Association Building of the Year and RAIA commercial Awards.<br />\r\nWarren Kerr B.Arch, MHP LFRAIA FACHSM FAIM<br />\r\n[Comment by Former W.A. Chapter President<br />\r\n<span style=\"color:#4e5f70\"><em><strong>Former National President Australian Institute of Architects]<br />\r\n<br />\r\nI have known Mr Jean-mic Perrine professionally, for over 4 years, in my role as a Perth City Councillor.<br />\r\nI believe Mr Jean-mic Perrine&rsquo;s work is very visionary and yet extremely&nbsp; functional. Jean-mic is able to view a project in its entirety by realizing the (often equal) importance of the surrounding precinct(s), and the significance of the adjoining streetscape in relation to overall scale and context.<br />\r\nJean-mic is a person of high integrity and a man who values good family and social principles. He is a good listener and observant of the ideals of others. I also know Jean-mic is very passionate about our lovely city of Perth.<br />\r\nAs a very well-respected Architect and Property-Developer in the Western&nbsp; Australian community I would have no hesitation in recommending him to a group or consortium as a true-professional who&lsquo;can deliver&rsquo;, and one who will also deliver with all the appropriate attention to detail required on a major public project with many, varied stakeholders.<br />\r\n[Comment by LISA SCAFFIDI]</strong></em></span></p>', '2019-08-12-15-25-33107.jpg', '<p>ean-mic Perrine is highly regarded as a senior practitioner of the architectural profession in Western Australia. As a registered architect with the Architects Board of Western Australia, he has completed an enviable track record of projects in a range of fields including single and multi-residential, retail, commercial, worship and liturgical spaces.<br />\r\nDuring his career, the buildings for which he has been responsible have won a number of Awards including the Master Builders Association Building of the Year and RAIA commercial Awards.<br />\r\nWarren Kerr B.Arch, MHP LFRAIA FACHSM FAIM<br />\r\n[Comment by Former W.A. Chapter President<br />\r\n<span style=\"color:#2c3e50\"><em><strong>Former National President Australian Institute of Architects]<br />\r\n<br />\r\nI have known Mr Jean-mic Perrine professionally, for over 4 years, in my role as a Perth City Councillor.<br />\r\nI believe Mr Jean-mic Perrine&rsquo;s work is very visionary and yet extremely&nbsp; functional. Jean-mic is able to view a project in its entirety by realizing the (often equal) importance of the surrounding precinct(s), and the significance of the adjoining streetscape in relation to overall scale and context.<br />\r\nJean-mic is a person of high integrity and a man who values good family and social principles. He is a good listener and observant of the ideals of others. I also know Jean-mic is very passionate about our lovely city of Perth.<br />\r\nAs a very well-respected Architect and Property-Developer in the Western&nbsp; Australian community I would have no hesitation in recommending him to a group or consortium as a true-professional who&lsquo;can deliver&rsquo;, and one who will also deliver with all the appropriate attention to detail required on a major public project with many, varied stakeholders.<br />\r\n[Comment by LISA SCAFFIDI]</strong></em></span></p>', '2019-08-12-15-25-33665.jpg', '<p>ean-mic Perrine is highly regarded as a senior practitioner of the architectural profession in Western Australia. As a registered architect with the Architects Board of Western Australia, he has completed an enviable track record of projects in a range of fields including single and multi-residential, retail, commercial, worship and liturgical spaces.<br />\r\nDuring his career, the buildings for which he has been responsible have won a number of Awards including the Master Builders Association Building of the Year and RAIA commercial Awards.<br />\r\nWarren Kerr B.Arch, MHP LFRAIA FACHSM FAIM<br />\r\n[Comment by Former W.A. Chapter President<br />\r\n<em><strong><span style=\"background-color:#4e5f70\">Former National President Australian Institute of Architects]</span><br />\r\n<br />\r\n<span style=\"color:#2c3e50\">I have known Mr Jean-mic Perrine professionally, for over 4 years, in my role as a Perth City Councillor.<br />\r\nI believe Mr Jean-mic Perrine&rsquo;s work is very visionary and yet extremely&nbsp; functional. Jean-mic is able to view a project in its entirety by realizing the (often equal) importance of the surrounding precinct(s), and the significance of the adjoining streetscape in relation to overall scale and context.<br />\r\nJean-mic is a person of high integrity and a man who values good family and social principles. He is a good listener and observant of the ideals of others. I also know Jean-mic is very passionate about our lovely city of Perth.<br />\r\nAs a very well-respected Architect and Property-Developer in the Western&nbsp; Australian community I would have no hesitation in recommending him to a group or consortium as a true-professional who&lsquo;can deliver&rsquo;, and one who will also deliver with all the appropriate attention to detail required on a major public project with many, varied stakeholders.<br />\r\n[Comment by LISA SCAFFIDI]</span></strong></em></p>', 'Trusted by global clients', '2019-08-12-15-25-33277.jpg', '2019-08-14-09-04-53544.jpg', '2019-08-12-15-25-33656.jpg', '2019-08-12-15-25-33300.jpg', '2019-08-12-15-25-33800.jpg', '2019-08-12-15-25-3317.jpg', '2019-08-12-15-25-33167.jpg', '2019-08-12-15-25-33959.jpg', '2019-08-12-15-25-33390.jpg', '2019-08-12-15-25-33751.jpg', '2019-08-12-15-25-33104.jpg', '2019-08-12 09:25:33', '2019-08-19 11:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `remarks`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Curtain Walls', NULL, 1, '2019-08-08 08:13:20', '2019-08-17 09:39:02'),
(3, 'Aluminium Windows', NULL, 1, '2019-08-08 08:13:28', '2019-08-17 09:39:24'),
(4, 'Aluminium Doors', NULL, 1, '2019-08-08 08:14:51', '2019-08-17 09:39:34'),
(5, 'Balustrades', NULL, 1, '2019-08-17 09:40:14', '2019-08-17 09:40:14'),
(6, 'Glass Rooms', NULL, 1, '2019-08-17 09:40:20', '2019-08-17 09:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `getintouch` text COLLATE utf8mb4_unicode_ci,
  `factory` text COLLATE utf8mb4_unicode_ci,
  `hours` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `getintouch`, `factory`, `hours`, `created_at`, `updated_at`) VALUES
(9, 'HAVE A QUESTION? GET IN TOUCH!', '<p>Contact us today to get a quote or simply ask a question about our services.&nbsp;<br />\r\nOnce you fill out and submit the form we will be in contact with you within 24-hours.<br />\r\nFeel free to contact us by phone as well. Someone is always there to answer your call during normal business hours.</p>', '<p>Guangzhou Sunnyquick Aluminium Manufacturing Co.,Ltd<br />\r\nLianan industrial park Huadu District,Guangzhou,China<br />\r\n☎&nbsp;0086 134 3025 9282&nbsp;<br />\r\n✉&nbsp;<a href=\"mailto:susan@sunnyquick.com\">info@sunnyquick.com</a><a href=\"mailto:susan@sunnyquick.com\">&nbsp;</a><br />\r\n&nbsp;</p>', '<p>Monday - Friday &nbsp;8:30 AM to 6:00 PM<br />\r\nSaturday &nbsp;8:30 AM to 1:00 PM</p>', '2019-08-18 11:43:37', '2019-08-18 11:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footerbackground` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerimage8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footertext` text COLLATE utf8mb4_unicode_ci,
  `footericon1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footericon2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footericon3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footericon4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footericon5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `text3` text COLLATE utf8mb4_unicode_ci,
  `text4` text COLLATE utf8mb4_unicode_ci,
  `copyright` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footerbackground`, `footerimage1`, `footerimage2`, `footerimage3`, `footerimage4`, `footerimage5`, `footerimage6`, `footerimage7`, `footerimage8`, `footertext`, `footericon1`, `footericon2`, `footericon3`, `footericon4`, `footericon5`, `text1`, `text2`, `text3`, `text4`, `copyright`, `created_at`, `updated_at`) VALUES
(29, '2019-08-18-18-00-40415.jpg', '2019-08-18-18-00-40459.jpg', '2019-08-18-18-00-40383.jpg', '2019-08-18-18-00-40416.jpg', '2019-08-18-18-00-40648.jpg', '2019-08-18-18-00-40981.jpg', '2019-08-18-18-00-40734.jpg', '2019-08-18-18-00-40663.jpg', '2019-08-18-18-00-40581.jpg', '<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">THANK YOU FOR YOUR ONGOING SUPPORT !</span></p>', '2019-08-18-18-00-41274.png', '2019-08-18-18-00-41105.png', '2019-08-18-18-00-4118.png', '2019-08-18-18-00-41415.png', '2019-08-18-18-00-41433.png', '<p><em>GET IN TOUCH</em></p>\r\n\r\n<p>Sunnyquick</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Tel :</p>\r\n	0086 134 3025 9282</li>\r\n	<li>\r\n	<p>Email :</p>\r\n	<a href=\"mailto:info@sunnyquick.com\" rel=\"nofollow\">info@sunnyquick.com</a></li>\r\n	<li>\r\n	<p>Whatsapp :</p>\r\n	0086 134 3025 9282</li>\r\n</ul>', '<p><em>NEED HELP</em></p>\r\n\r\n<ul>\r\n	<li><a href=\"http://127.0.0.1:8000/index.html\">Home</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/about-us_d1.html\">About Us</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/products.html\">Products</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/contact-us_d2.html\">Contact Us</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/blog.html\">Blog</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/sitemap.html\">Sitemap</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/sitemap.xml\">XML</a></li>\r\n</ul>', '<p><em>HOT TAGS</em></p>\r\n\r\n<ul>\r\n	<li><a href=\"http://127.0.0.1:8000/residential-spandrel-curtain-wall_sp.html\">Residential Spandrel Curtain Wall</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/unitized-glass-curtain-wall_sp.html\">Unitized Glass Curtain Wall</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/double-glazed-unitized-curtain-wall_sp.html\">Double Glazed Unitized Curtain Wall</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/shadow-box-glass-curtain-wall_sp.html\">Shadow Box Glass Curtain Wall</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/double-glass-awning-windows_sp.html\">Double Glass Awning Windows</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/glass-double-hung-windows_sp.html\">Glass Double Hung Windows</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/double-glazed-bi-fold-doors_sp.html\">Double Glazed Bi Fold Doors</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/frame-glass-bifold-doors_sp.html\">Frame Glass Bifold Doors</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/aluminium-glass-balustrades_sp.html\">Aluminium Glass Balustrades</a></li>\r\n	<li><a href=\"http://127.0.0.1:8000/structural-glass-garden-room_sp.html\">Structural Glass Garden Room</a></li>\r\n</ul>', '<p><em>SUBSCRIBE</em></p>\r\n\r\n<p>Please read on, stay posted, subscribe, and we welcome you to tell us what you think.</p>', '<p>Copyright &copy; Guangzhou Sunnyquick Aluminium Manufacturing Co.,Ltd. All Rights Reserved.<a href=\"https://www.cnzz.com/stat/website.php?web_id=1273315272\" target=\"_blank\" title=\"站长统计\"><img src=\"http://icon.cnzz.com/img/pic.gif\" /></a></p>', '2019-08-18 12:00:41', '2019-08-18 12:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `title`, `photo`, `details`, `created_at`, `updated_at`) VALUES
(17, 'About Us', '2019-08-18-18-43-25265.jpg', '<p><a href=\"about-us_d1.html\">Welcome to Guangzhou Sunnyquick Aluminium Manufacturing Co.,Ltd.</a></p>\r\n\r\n<p>Welcome to Sunnyquick, a specialist manufacturer of glass curtain wall, aluminium windows and aluminium doors. If you&rsquo;re looking for a new supplier, you&rsquo;ve come to the right place. Sunnyquick Aluminium Manufacturing Co.,Ltd located near the airport of Guangzhou China. Since 1998 We focus on bespoke aluminum and glass facade system which are tailor made by different client to meet various type of building type as: Hotel, Commercial Building, Residence, Apartment. All our produce are strict meet the performance as water proof, wind pleasure, noisy proof and sun protect. We also have our own developed systems that allows more flexibility in delivery time and could meet the economic project requirement also. Project Gallery &nbsp;&nbsp;&nbsp;&nbsp; Hilton hotel ◇&nbsp;Australia&nbsp;</p>', '2019-08-18 12:43:25', '2019-08-18 12:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `icon1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `icon2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `icon3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci,
  `icon4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text4` text COLLATE utf8mb4_unicode_ci,
  `icon5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text5` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `title`, `icon1`, `text1`, `icon2`, `text2`, `icon3`, `text3`, `icon4`, `text4`, `icon5`, `text5`, `created_at`, `updated_at`) VALUES
(4, 'product category', '2019-08-06-10-20-065.png', 'Curtain Walls Popular in high buildings Curtain wall systems', '2019-08-06-10-20-06532.png', 'Aluminium Windows Smart Windows Sunnyquick uses top-quality', '2019-08-06-10-20-06984.png', 'Aluminium Doors Open The Door ,', '2019-08-06-10-20-06162.png', 'Balustrades We Have Many New Model', '2019-08-06-10-20-06872.png', 'Balustrades We Have Many New Model  Glass Rooms Glass Rooms Winter Garden , A beautiful Name', '2019-08-06 04:20:06', '2019-08-18 12:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `home_products`
--

CREATE TABLE `home_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_products`
--

INSERT INTO `home_products` (`id`, `title`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `created_at`, `updated_at`) VALUES
(11, 'our project', '2019-08-06-10-47-39687.jpg', '2019-08-06-10-47-39409.jpg', '2019-08-06-10-47-3981.jpg', '2019-08-06-10-47-39181.jpg', '2019-08-06-10-47-39408.jpg', '2019-08-06-10-47-40579.jpg', '2019-08-06 04:47:40', '2019-08-18 12:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `icon2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `icon3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci,
  `icon4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text4` text COLLATE utf8mb4_unicode_ci,
  `icon5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text5` text COLLATE utf8mb4_unicode_ci,
  `icon6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text6` text COLLATE utf8mb4_unicode_ci,
  `icon7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text7` text COLLATE utf8mb4_unicode_ci,
  `icon8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text8` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `title`, `background`, `icon1`, `text1`, `icon2`, `text2`, `icon3`, `text3`, `icon4`, `text4`, `icon5`, `text5`, `icon6`, `text6`, `icon7`, `text7`, `icon8`, `text8`, `created_at`, `updated_at`) VALUES
(6, 'our service', '2019-08-19-17-53-2924.jpg', '2019-08-18-18-36-35241.png', 'designs', '2019-08-18-18-36-35416.png', 'Measerment', '2019-08-18-18-36-35937.png', 'Solution', '2019-08-18-18-36-35563.png', 'instalation', '2019-08-18-18-36-35630.png', 'logistic', '2019-08-18-18-36-35154.png', 'certification', '2019-08-18-18-36-35580.png', 'service', '2019-08-18-18-36-3530.png', 'customer care', '2019-08-18 12:36:35', '2019-08-19 11:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `inters`
--

CREATE TABLE `inters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(18, '2019-08-18-18-23-46960.png', '2019-08-18-18-23-46483.png', '2019-08-18 12:23:46', '2019-08-18 12:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `order`, `route`, `created_at`, `updated_at`) VALUES
(1, 'Home', '1', 'font.index', '2019-07-30 09:18:42', '2019-08-02 21:49:11'),
(2, 'ABOUTE', '2', 'font.about', '2019-08-02 21:50:51', '2019-08-02 21:50:51'),
(3, 'product', '3', 'font.product', '2019-08-02 21:51:19', '2019-08-02 21:51:19'),
(4, 'service', '4', 'font.service', '2019-08-02 21:51:39', '2019-08-02 21:51:39'),
(5, 'Project', '5', 'font.project', '2019-08-06 05:05:23', '2019-08-06 05:05:23'),
(6, 'Technology', '6', 'font.technology', '2019-08-06 05:05:55', '2019-08-06 05:05:55'),
(7, 'News', '7', 'font.news', '2019-08-06 05:06:24', '2019-08-06 05:06:24'),
(8, 'Contact', '8', 'font.contact', '2019-08-06 05:06:47', '2019-08-06 05:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_27_083712_create_abouts_table', 1),
(4, '2019_07_27_083807_create_products_table', 1),
(5, '2019_07_27_083841_create_technologies_table', 1),
(6, '2019_07_27_083909_create_news_table', 1),
(7, '2019_07_27_083945_create_contacts_table', 1),
(8, '2019_07_27_084013_create_services_table', 1),
(9, '2019_07_27_084157_create_projects_table', 1),
(10, '2019_07_27_084234_create_inters_table', 1),
(11, '2019_07_27_114757_create_navbers_table', 1),
(12, '2019_07_27_114927_create_footers_table', 1),
(13, '2019_07_27_182138_create_toppers_table', 1),
(14, '2019_07_30_110948_create_menus_table', 1),
(15, '2019_07_31_195100_create_logos_table', 2),
(16, '2019_08_01_150514_create_home_categories_table', 3),
(17, '2019_08_01_150632_create_home_abouts_table', 3),
(18, '2019_08_01_150715_create_home_services_table', 3),
(19, '2019_08_01_150802_create_home_products_table', 3),
(20, '2019_08_05_081743_create_abouts_table', 4),
(21, '2019_08_06_160259_create_technologies_table', 5),
(22, '2019_08_07_160921_create_contacts_table', 6),
(23, '2019_08_09_141131_create_services_table', 7),
(24, '2019_08_09_160219_create_sub_category_table', 8),
(25, '2019_08_09_161338_add_remark_to_sub_category_table', 9),
(26, '2019_08_09_210651_create_projects_table', 10),
(27, '2019_08_09_215303_create_projects_table', 11),
(28, '2019_08_10_114905_create_news_table', 12),
(29, '2019_08_10_122723_add_news_description_to_news_table', 13),
(30, '2019_08_10_131428_create_news_table', 14),
(31, '2019_08_10_134444_create_news_table', 15),
(32, '2019_08_20_081303_create_sliders_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `navbers`
--

CREATE TABLE `navbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `news_description` text COLLATE utf8mb4_unicode_ci,
  `news_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news_description`, `news_photo`, `created_at`, `updated_at`) VALUES
(7, 'Welcome to Sunnyquick\'s Stand in 16th Edition PROJECT QATAR 2019', '<p>Welcome to Sunnyquick&#39;s Stand D106, Hall 4. Project Qatar 16th Edition 2019. Fair Address: Doha Exhibition and Convention Center. Fair Date: 29 April to 1 May 2019.</p>', '2019-08-17-15-29-04817.jpg', '2019-08-17 09:29:04', '2019-08-17 09:29:04'),
(8, 'Sunnyquick Unitized Curtain Wall Passed Australian Standard Test', '<p>Sunnyquick Aluminum Glass Unitized Curtain Wall Passed Australian Standard Test. Partial test content sharing： Structural test at serviceability state(AS/NZS 4284:2008). Air infiltration&nbsp;</p>', '2019-08-17-15-32-29137.jpg', '2019-08-17 09:32:29', '2019-08-17 09:32:29'),
(9, 'High Performance Glass Windows That Insulate Like Walls', '<p>Heat Mirror&reg; Insulating Glass Product Introduction: Heat Mirror&reg; Insulating Glass is currently the most energy-saving glass product in the world. It is developed by Southwall Technologies Inc.&nbsp;</p>', '2019-08-17-15-32-59415.jpg', '2019-08-17 09:33:00', '2019-08-17 09:33:00'),
(10, 'Glass Curtain Walls Grow Fast In Southeast Asia', '<p>Sunnyquick&#39;s&nbsp;engineers provide technical support at the project site Infrastructure booms are one source of booming economies. The development of real estate requires a large amount of&nbsp;</p>', '2019-08-17-15-33-43933.jpg', '2019-08-17 09:33:43', '2019-08-17 09:33:43'),
(11, 'Focused on the manufacture of glass curtain walls', '<p>2017-03-18</p>\r\n\r\n<p>The CCTV Economic Development Channel conducted an exclusive interview with private enterprises in Guangdong and conducted investigations and interviews on the status quo and&nbsp;</p>', '2019-08-17-15-35-08761.jpg', '2019-08-17 09:34:18', '2019-08-17 09:35:08'),
(12, 'Great Achievement of Sunnyquick at the 19TH BUILD EXPO Fair in Africa', '<p>The 19TH Build EXPO comes to an end successfully today in Nairobi.It exhibited over 150,00 kinds of quality products in the fair and overseas commodities with distinctive features from various sectors like Consumer Goods,Home Decorations,Building materials.&nbsp; Sunnyquick welcomed 500&nbsp;</p>', '2019-08-17-15-34-5246.jpg', '2019-08-17 09:34:52', '2019-08-17 09:34:52'),
(13, 'Big Project In Qianhai', '<p>The Kerry Qianhai Project office building is located in the core area of the Shenzhen-Shenzhen-Hong Kong cooperation zone in Qianhai, Shenzhen. It is invested and built by Zhaoan Group. At&nbsp;</p>', '2019-08-17-15-35-45868.jpg', '2019-08-17 09:35:45', '2019-08-17 09:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mubin3116@gmail.com', '$2y$10$NP7KlxlnO9rQ4239li8WrOBzgjGEzHoSwvIVx0IzJnFHCWRgGxZqu', '2019-08-20 09:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `feature_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `body`, `keyword`, `price`, `discount`, `stock`, `feature_photo`, `photo1`, `photo2`, `photo3`, `photo4`, `sku`, `category_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(29, 'Curtain Wall Vertical-Exposed And Horizontal-Hidden Framing', '<pre>\r\nIt is a frame-supported curtain wall and vertical aluminium frame are visible on the exterior panel.</pre>', NULL, '10000', '50% OFF', 41, '2019-08-17-15-43-30-69.jpg', '2019-08-17-15-43-30-12.jpg', '2019-08-17-15-43-30-84.jpg', '2019-08-17-15-43-30-66.jpg', '2019-08-17-15-43-30-50.jpg', 'P-17-AUG19-5358', 2, 1, '2019-08-17 09:43:30', '2019-08-17 09:43:30', NULL),
(30, 'Visible Frame Curtain Wall With Insulating Glass', '<pre>\r\nIt is a frame-supported curtain wall and the aluminium frames are visible on the exterior of the panel</pre>', NULL, '2000', '50% OFF', 45, '2019-08-18-05-32-52-53.jpg', '2019-08-18-05-32-53-23.jpg', NULL, NULL, NULL, 'P-18-AUG19-7431', 2, 1, '2019-08-17 23:32:53', '2019-08-17 23:32:53', NULL),
(31, 'Hook-Type\"Hidden-Framing Glass Curtain Wall', '<pre>\r\nIt is a frame-supported curtain wall and the aluminium frame is completely invisible on the exterior panel</pre>', NULL, '2000', '50% OFF', 544, '2019-08-18-05-34-59-63.jpg', '2019-08-18-05-34-59-92.jpg', '2019-08-18-05-34-59-81.jpg', '2019-08-18-05-34-59-27.jpg', NULL, 'P-18-AUG19-3772', 3, 1, '2019-08-17 23:34:59', '2019-08-17 23:34:59', NULL),
(32, 'High-End Oversized Glass Lift and Slide Doors for Seaside Villa', '<pre>\r\nSunnyquick lift &amp; slide doors have a very strong system, could meeting the very heavy glass over 400kg and anti-typhoon.</pre>', NULL, '10000', '50% OFF', 4, '2019-08-18-05-36-58-22.jpg', '2019-08-18-05-36-58-64.jpg', '2019-08-18-05-36-58-51.jpg', '2019-08-18-05-36-58-61.jpg', '2019-08-18-05-36-58-98.jpg', 'P-18-AUG19-1336', 3, 1, '2019-08-17 23:36:58', '2019-08-17 23:36:58', NULL),
(33, 'Quality Aluminium Patio Glass French Doors', '<pre>\r\nHigh quality waterproof and soundproofing of french door system</pre>', NULL, '10000', '50% OFF', 452, '2019-08-18-05-38-30-2.jpg', '2019-08-18-05-38-30-66.jpg', '2019-08-18-05-38-30-8.jpg', '2019-08-18-05-38-30-76.jpg', '2019-08-18-05-38-30-28.jpg', 'P-18-AUG19-1865', 4, 1, '2019-08-17 23:38:30', '2019-08-17 23:38:30', NULL),
(34, 'Aluminium Thermal Break Patio Glass Bifold Doors', '<pre>\r\nAluminium bifold doors are the preferred option to transform a living space.</pre>', NULL, '10000', '50% OFF', 44, '2019-08-18-05-39-35-34.jpg', '2019-08-18-05-39-35-32.jpg', '2019-08-18-05-39-35-24.jpg', '2019-08-18-05-39-35-49.jpg', '2019-08-18-05-39-35-32.jpg', 'P-18-AUG19-6826', 4, 1, '2019-08-17 23:39:35', '2019-08-17 23:39:35', NULL),
(35, 'Aluminium Thermal Break Patio Glass Bifold Doors', '<pre>\r\nAluminium bifold doors are the preferred option to transform a living space.</pre>', NULL, '10000', '50% OFF', 44, '2019-08-18-05-39-35-44.jpg', '2019-08-18-05-39-36-52.jpg', '2019-08-18-05-39-36-91.jpg', '2019-08-18-05-39-36-8.jpg', '2019-08-18-05-39-36-61.jpg', 'P-18-AUG19-8222', 4, 1, '2019-08-17 23:39:36', '2019-08-17 23:55:19', NULL),
(36, 'New Type Aluminium Louvre Windows', '<pre>\r\nSometimes referred to as jalousie, the louvre windows allows for more controlled ventilation of buildings, especially those located in temperate climates.</pre>', NULL, '$1.99', '50% OFF', 5, '2019-08-18-05-41-05-64.jpg', '2019-08-18-05-41-05-58.jpg', '2019-08-18-05-41-05-31.jpg', NULL, NULL, 'P-18-AUG19-8957', 4, 1, '2019-08-17 23:41:05', '2019-08-17 23:41:05', NULL),
(37, 'Residential Aluminium Double Glass Sliding Window', '<pre>\r\nSliding windows are easy to open, slide to the left or right, let the sunshine and fresh air come in natural</pre>', NULL, '10000', '50% OFF', 858, '2019-08-18-05-42-23-49.jpg', '2019-08-18-05-42-23-22.jpg', '2019-08-18-05-42-23-29.jpg', '2019-08-18-05-42-23-20.jpg', NULL, 'P-18-AUG19-6685', 4, 1, '2019-08-17 23:42:23', '2019-08-17 23:42:23', NULL),
(38, 'Aluminium Soundproof Glass Double Hung Windows', '<pre>\r\nDouble hung windows make cleaning easy, and double tilting sashes can get more air into room.</pre>', 'Non in sed et tenetu', '10000', '50% OFF', 5, '2019-08-18-05-43-52-55.jpg', '2019-08-18-05-43-52-80.jpg', '2019-08-18-05-43-52-35.jpg', '2019-08-18-05-43-52-99.jpg', '2019-08-18-05-43-52-16.jpg', 'P-18-AUG19-49', 5, 1, '2019-08-17 23:43:52', '2019-08-17 23:43:52', NULL),
(39, 'Soundproof Aluminium Tempered Glass Casement Windows', '<pre>\r\nCasement windows are ideal for installation in quiet rooms</pre>', 'Customized logo (Min. Order: 2000 Pairs) Customized packaging (Min. Order: 3000 Pairs) More', '10000', '50% OFF', 45, '2019-08-18-05-45-16-47.jpg', '2019-08-18-05-45-16-45.jpg', '2019-08-18-05-45-16-11.jpg', '2019-08-18-05-45-16-74.jpg', '2019-08-18-05-45-16-28.jpg', 'P-18-AUG19-1349', 5, 1, '2019-08-17 23:45:16', '2019-08-17 23:55:11', NULL),
(40, 'Waterproofing Semi Structural Curtain Wall', '<pre>\r\nThe Semi-structural curtain wall consists of a supporting structural system and panels.</pre>', 'Non in sed et tenetu', '$1.99', '50% OFF', 25, '2019-08-18-05-46-59-99.jpg', '2019-08-18-05-46-59-0.jpg', '2019-08-18-05-46-59-50.jpg', '2019-08-18-05-46-59-40.jpg', '2019-08-18-05-46-59-34.jpg', 'P-18-AUG19-6196', 6, 1, '2019-08-17 23:46:59', '2019-08-17 23:46:59', NULL),
(41, 'Point Supported Spider Glass Curtain Walls', '<pre>\r\n&gt;The Point Supported Curtain Wall commonly used in the lobby space of commercial buildings.</pre>', 'Customized logo (Min. Order: 2000 Pairs) Customized packaging (Min. Order: 3000 Pairs) More', '10000', '50% OFF', 1235, '2019-08-18-05-48-11-29.jpg', '2019-08-18-05-48-11-4.jpg', '2019-08-18-05-48-11-51.jpg', '2019-08-18-05-48-11-22.jpg', '2019-08-18-05-48-11-16.jpg', 'P-18-AUG19-1845', 6, 1, '2019-08-17 23:48:11', '2019-08-18 13:19:34', '2019-08-18 13:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `project_description` longtext COLLATE utf8mb4_unicode_ci,
  `project_photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_photo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `project_description`, `project_photo1`, `project_photo2`, `project_photo3`, `project_photo4`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Hilton Hotel - Unitized Glass Curtain Wall In Australia', '<pre>\r\n&gt;One of the projects in Australia for the client, Hilton Perth Waterfront Type: Five star hotels Time: 2018-2019 Product: Unitized Curtain Wall, Aluminum Panel, And Irregular Shaped Decorative Curtain Wall Service: Design, On door size measurement, Production, Installation guidance,&amp;nbsp; test in Singapore Budget: 6.3 millions dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;...</pre>', '2019-08-18-07-20-1371.jpg', '2019-08-18-07-20-13372.jpg', '2019-08-18-07-20-13399.jpg', '2019-08-18-07-20-13105.jpg', 2, '2019-08-18 01:20:13', '2019-08-18 01:20:13'),
(3, 'Bi Fold Doors Brings You More Space', '<pre>\r\nOne of the projects in USA for the client, RAZ Development Washington D.C Type: Five star luxury Villa Time: 2016-2017 Product: Aluminum Clad Wood Folding Doors, Wooden Door, Balustrade, Aluminum Garage Doors With Glass Service: Design, Production, Installation guidance, shipment Budget: 400 thousand dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; At Sunnyquick, we foc..</pre>', '2019-08-18-07-21-15248.jpg', '2019-08-18-07-21-15324.jpg', '2019-08-18-07-21-15501.jpg', '2019-08-18-07-21-15436.jpg', 2, '2019-08-18 01:21:15', '2019-08-18 01:21:15'),
(4, 'Reflective Double Safety Glass Curtain Wall', '<pre>\r\nOne of the projects in Rwanda for the client, RSSB Type: Office| Bank of Kigali Time: 2014 Product: Invisible Glass Curtain Wall, Hidden Frame, Aluminum Composed Panel, Stainless Steel Canopy Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 2.2. Millions dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; At Sunnyquick, we </pre>', '2019-08-18-07-32-3147.jpg', '2019-08-18-07-32-31161.jpg', '2019-08-18-07-32-31628.jpg', '2019-08-18-07-32-31960.jpg', 3, '2019-08-18 01:32:31', '2019-08-18 01:32:31'),
(5, 'Aluminium Windows And Doors', '<pre>\r\nOne of the projects in Thailand for the client holiday hotel Type: Four-Star Hotel Time: 2016 Product: Aluminum Windows, Aluminum Doors, Balustrade, and Staircase Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 1.4. Millions dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </pre>', '2019-08-18-07-33-36271.jpg', '2019-08-18-07-33-36870.jpg', '2019-08-18-07-33-36954.jpg', '2019-08-18-07-33-36116.jpg', 3, '2019-08-18 01:33:36', '2019-08-18 01:33:36'),
(6, 'Curtain Wall Design For Greentown Hotel', '<pre>\r\nOne of the projects in Uganda for the Greentown Apartment Type: Apartment/ Condominiums Time: 2013 Product: Invisible Glass Curtain Wall, Aluminum Windows, Aluminum Doors, Security Nets, and Mosquito Net, Balustrade Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 400 thousand dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;.</pre>', '2019-08-18-07-34-41703.jpg', '2019-08-18-07-34-41744.jpg', '2019-08-18-07-34-41531.jpg', '2019-08-18-07-34-41340.jpg', 4, '2019-08-18 01:34:41', '2019-08-18 01:34:41'),
(7, 'Invisible Glass Curtain Wall For Apartment', '<pre>\r\nOne of the projects in Mozambique for the M &amp;amp; M Apartment Type: Villa Time: 2014 Product: Invisible Glass Curtain Wall, Aluminum Windows, Aluminum Doors, Security nets, Mosquito, Stainless Steel Balustrade Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 500 thousand dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; At</pre>', '2019-08-18-07-35-47276.jpg', '2019-08-18-07-35-47809.jpg', '2019-08-18-07-35-47813.jpg', '2019-08-18-07-35-47305.jpg', 4, '2019-08-18 01:35:47', '2019-08-18 01:35:47'),
(8, 'Decorative Curtain Wall Design', '<pre>\r\nOne of the projects in Singapore for the client Design Institute Type: Five star design Institute Time： 2016 Product： Unitized Curtain Wall, Aluminum Panel, Irregular Shaped Decorative Curtain Wall Service: Design, 3D renders, On door size measurement, Production, Installation guidance. Budget: 1.4 Millions dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; At Sunnyquick,..</pre>', '2019-08-18-07-36-520.jpg', '2019-08-18-07-36-52898.jpg', '2019-08-18-07-36-52691.jpg', '2019-08-18-07-36-52564.jpg', 5, '2019-08-18 01:36:53', '2019-08-18 01:36:53'),
(9, 'Post Office Building - Glass Curtain Wall Installation', '<pre>\r\nOne of the projects in Senegal for the client Post Office Type: Public Post Office Time： 2016 Product：Curtain Wall window, Balustrade Service: Design, 3D renders, On door size measurement, Production, Installation guidance. Budget: 200 thousand dollar Our Services - One Stop Solutions Design &amp;amp; Engineering &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; At Sunnyquick, we focus on building facade projects, curtain wall systems,&amp;nbs..</pre>', '2019-08-18-07-38-31972.jpg', '2019-08-18-07-38-31250.jpg', '2019-08-18-07-38-31715.jpg', '2019-08-18-07-38-31423.jpg', 6, '2019-08-18 01:38:31', '2019-08-18 01:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `service1` text COLLATE utf8mb4_unicode_ci,
  `service2` text COLLATE utf8mb4_unicode_ci,
  `service3` text COLLATE utf8mb4_unicode_ci,
  `service_content1` longtext COLLATE utf8mb4_unicode_ci,
  `service_content2` longtext COLLATE utf8mb4_unicode_ci,
  `service_content3` longtext COLLATE utf8mb4_unicode_ci,
  `service_photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photo9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `service1`, `service2`, `service3`, `service_content1`, `service_content2`, `service_content3`, `service_photo1`, `service_photo2`, `service_photo3`, `service_photo4`, `service_photo5`, `service_photo6`, `service_photo7`, `service_photo8`, `service_photo9`, `created_at`, `updated_at`) VALUES
(3, 'One-stop Solutions', 'Design & Engineering', 'Contracting & Technical Support', 'Manufacturing', '<p>At Sunnyquick, we focus on building facade projects, curtain wall systems,&nbsp;unitized curtain walls,&nbsp;aluminium windows &amp; doors etc.&nbsp;We understand the importance of early technical input in design development. With our industry knowledge and experience we specialize in providing comprehensive design-assist and design-build services from the onset. This allows us to consistently deliver feasible design solutions that meet our client&rsquo;s expectations. Our Engineering division has experienced design professionals that consists of technical lead designers, structural engineers, facade and design engineers. Whether its development of conceptual design, detailed engineering or fabrication drawings, we specialize in providing turn-key cost effective and innovative design solutions that cater to each individual project.</p>', '<p>Installation services provided by Sunnyquick ensure that the design intent is translated to reality on time and within budget. Project teams are staffed with experienced project manager, project engineers, site managers and foreman / site operations leader. Sunnyquick fosters a collaborative environment to work with project stakeholders to ensure timely and successful project execution.</p>\r\n\r\n<p>Health and safety is of paramount importance and project specific method statements and risk assessments are provided to ensure best practice is implemented throughout the company to comply with all current statutory requirements.</p>', '<p>Sunnyquick&rsquo;s manufacturing facility is built around total quality management, lean manufacturing and kaizen principles ensuring control of quality, accuracy and efficiency. Our processes have been certified by ISO 9001 standards. Our facilities include adjacent design and production areas, contributing to the dynamics of innovation and collaboration. Furthermore, by fostering partnerships with material vendors and product suppliers around the globe, Sunnyquick has been able to maintain complete control over its supply chain, further enhancing our capability to deliver cost effective solutions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>All quality control tests of Sunnyquick are carried out by independent third parties as per the latest international norms, in line with the project specifications. Sunnyquick&rsquo;s manufacturing process goes through rigorous quality control exercises both by human and computerized testing.This along with the time-tested skill and craftsmanship of the Sunnyquick team of operatives has a well defined edge on shaping components with unerring precision and finish.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We specialize in manufacturing of building facade systems, glass curtain wall systems, unitized curtain walls, frame structured curtain walls, aluminium windows and doors, aluminium louvers, railing etc...</p>', '2019-08-18-07-49-32890.jpg', '2019-08-18-07-49-32969.jpg', '2019-08-18-07-49-32732.jpg', '2019-08-18-07-49-33355.jpg', '2019-08-18-07-49-33946.jpg', '2019-08-18-07-49-33403.jpg', '2019-08-18-07-49-33230.jpg', '2019-08-18-07-49-33505.jpg', '2019-08-18-07-49-3319.jpg', '2019-08-18 01:49:33', '2019-08-18 01:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_contant` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `slider_contant`, `created_at`, `updated_at`) VALUES
(1, '2019-08-20-09-20-56303.jpg', '<p><span style=\"font-size:28px\"><span style=\"font-family:Courier New,Courier,monospace\">Welcome</span></span></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:20:56', '2019-08-20 03:20:56'),
(2, '2019-08-20-09-21-19677.jpg', '<p>Welcome<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:21:19', '2019-08-20 03:21:19'),
(3, '2019-08-20-09-21-33763.jpg', '<p>Welcome<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:21:33', '2019-08-20 03:21:33'),
(4, '2019-08-20-09-21-51145.jpg', '<p>Welcome<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:21:51', '2019-08-20 03:21:51'),
(6, '2019-08-20-09-22-40675.jpg', '<p>Welcome<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:22:40', '2019-08-20 03:22:40'),
(7, '2019-08-20-09-22-56590.jpg', '<p>Welcome<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:22:56', '2019-08-20 03:22:56'),
(8, '2019-08-20-09-23-20683.jpg', '<p>Welcome<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:23:20', '2019-08-20 03:23:20'),
(9, '2019-08-20-09-23-37609.jpg', '<p>Welcome<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mea Vocibus Eloquentiam<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erant aperiri sapientem senserit quo et. Sea aliquid interpretaris te, in his erant aperiri sapientem</p>', '2019-08-20 03:23:37', '2019-08-20 03:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `name`, `order`, `route`, `menu_id`, `created_at`, `updated_at`) VALUES
(6, 'gfgdfg', '1', 'font.index', 1, '2019-08-03 08:42:58', '2019-08-03 08:42:58'),
(7, 'fsdfdsd', '2', 'font.index', 1, '2019-08-03 08:43:15', '2019-08-03 08:43:15'),
(8, 'fszddsf', '3', 'font.index', 1, '2019-08-03 08:43:32', '2019-08-03 08:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `techphoto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `techtitle` text COLLATE utf8mb4_unicode_ci,
  `technology` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `techphoto`, `techtitle`, `technology`, `created_at`, `updated_at`) VALUES
(2, '2019-08-18-14-07-22651.jpg', 'Technology', '<p><span style=\"color:#9b59b6\">Sunnyquick curtain wall is China&#39;s outstanding overall solution provider for curtain wall systems. Over the years, Sunnyquick has been dedicated to the R&amp;D, design, manufacturing, process improvement and innovation of high-performance curtain wall, window and door products. The company has reached the international level in such major technical fields as R&amp;D, design, manufacturing and construction.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#9b59b6\"><strong>Technical Management</strong></span></p>\r\n\r\n<p><span style=\"color:#9b59b6\">The company has a design center, a standard R&amp;D department, and a engineering department. The design center is responsible for R&amp;D, design, and technical management. It is directly led by the company&rsquo;s chief engineer. The standard R&amp;D department is mainly responsible for &ldquo;three new&rdquo; (new materials, new processes, new technology) development innovation and technical standardization management.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#9b59b6\"><strong>Technical Team</strong></span></p>\r\n\r\n<p><span style=\"color:#9b59b6\">Following the concept of technological development, Sunnyquick not only formed a strong design and development team, but also established long-term well-known design agencies and consulting companies in strategic partnerships. While actively introducing high-end talents, a complete project R&amp;D management system has been established.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#9b59b6\"><strong>Technical Support</strong></span></p>\r\n\r\n<p><span style=\"color:#9b59b6\">Prior to the development and design of new products, Sunnyquick carefully analyzed customer needs, built public basic modules, and carried out work according to objective needs, ensuring the practicality of scientific and technological innovation, establishing a knowledge management system, providing customers with sound services, at the same time, it also creates an environment for the long-term development of the company.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#9b59b6\"><strong>Technology Innovation</strong></span></p>\r\n\r\n<p><span style=\"color:#9b59b6\">In the process of technological innovation, Sunnyquick adheres to the innovative concept of &ldquo;researching and applying&rdquo;, and has now established a core product system:<strong>&nbsp;glass curtain walls, aluminum curtain walls, windows and doors of buildings, architectural shading, curtain wall steel structures, glass roofing systems</strong>, a total of hundreds of series products have been formed. These products have been widely used in the design and construction of various engineering projects.</span></p>', '2019-08-18 08:07:22', '2019-08-18 08:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `toppers`
--

CREATE TABLE `toppers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itext1` text COLLATE utf8mb4_unicode_ci,
  `icon2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itext2` text COLLATE utf8mb4_unicode_ci,
  `flag1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftext1` text COLLATE utf8mb4_unicode_ci,
  `flag2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftext2` text COLLATE utf8mb4_unicode_ci,
  `flag3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftext3` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toppers`
--

INSERT INTO `toppers` (`id`, `icon1`, `itext1`, `icon2`, `itext2`, `flag1`, `ftext1`, `flag2`, `ftext2`, `flag3`, `ftext3`, `created_at`, `updated_at`) VALUES
(18, '2019-08-18-18-19-21643.png', '0086 134 3025 9282', '2019-08-18-18-19-21903.png', 'info@sunnyquick.com', '2019-08-18-18-19-34334.png', 'ENGLISH', '2019-08-18-18-19-21113.png', 'spain', '2019-08-18-18-19-21574.png', 'oman', '2019-08-18 12:19:21', '2019-08-18 12:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'kazi fathum mubin mubin', 'mubin3116@gmail.com', NULL, '$2y$10$uIuErimEc5ipOzKiFmIso.zoDCIXEWUNRn6Uf1UJxSecov2fyd4ge', NULL, '2019-08-20 08:29:45', '2019-08-20 08:29:45'),
(4, 'kaz', 'mubin@gmail.com', NULL, '$2y$10$CHEPrk5YyEv/5N6vkry3F.hpqyvvNFpLBCskXkdBjNMvsvi3NO9WC', 'u12jPrzC6F92B9sitl2wkEwb7rPVN1p2l3Dr417Eux8cpXzwkxQH677YZ8tr', '2019-08-20 08:38:48', '2019-08-20 08:38:48'),
(5, 'showrov', 'showrov1nb@gmail.com', NULL, '$2y$10$Bfk5T4SnULjmGsUt0uMUf.PdCPsX9zu11vmzNM3AIWCtCl7qv7bEu', NULL, '2019-08-20 09:35:07', '2019-08-20 09:35:07'),
(6, 'kazi fathum', 'masum@gmail.com', NULL, '$2y$10$9AR3XyUP9KsrcC7kg5UEh.sgBmH2niUYoj27xxmaUwhgCedHGFZI2', NULL, '2019-08-20 09:51:33', '2019-08-20 09:51:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_abouts`
--
ALTER TABLE `home_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_products`
--
ALTER TABLE `home_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inters`
--
ALTER TABLE `inters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbers`
--
ALTER TABLE `navbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_id_foreign` (`category_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppers`
--
ALTER TABLE `toppers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `home_abouts`
--
ALTER TABLE `home_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_products`
--
ALTER TABLE `home_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inters`
--
ALTER TABLE `inters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `navbers`
--
ALTER TABLE `navbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toppers`
--
ALTER TABLE `toppers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
