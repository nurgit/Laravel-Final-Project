-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 04:43 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdprison.org`
--
CREATE DATABASE IF NOT EXISTS `bdprison.org` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdprison.org`;

-- --------------------------------------------------------

--
-- Table structure for table `allprisoner`
--

CREATE TABLE `allprisoner` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `phoneNo` int(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `crime` varchar(50) NOT NULL,
  `day` int(50) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allprisoner`
--

INSERT INTO `allprisoner` (`id`, `name`, `gender`, `image`, `phoneNo`, `address`, `occupation`, `crime`, `day`, `startDate`, `endDate`, `notes`) VALUES
(652, 'Nur Mohammaed', 'fassda', '../storage/prisoner_image/', 2147483647, 'flat No#5A, House#245(244,245), Road#04 , Block#G, Bashundhara R/A, Dhaka-1229', 'adds', 'wasdf', 0, '0000-00-00', '0000-00-00', ''),
(1001, 'Roky', 'Male', 'img', 130315, 'dhaka', 'business', 'Thug', 16, '2020-05-13', '2020-05-29', 'nothing'),
(4653, 'Nur Mohammaed', 'fgh', '../storage/prisoner_image/', 2147483647, 'flat No#5A, House#245(244,245), Road#04 , Block#G, Bashundhara R/A, Dhaka-1229', 'tkj', 'jhhk', 5, '0000-00-00', '0000-00-00', ''),
(4656, 'ghjg,k', 'mail', '../storage/prisoner_image/', 2147483647, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'busnes', 'hbk,', 5, '0000-00-00', '0000-00-00', ''),
(4657, 'ghjg,k', 'mail', '../storage/prisoner_image/', 2147483647, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'busnes', 'hbk,', 5, '0000-00-00', '0000-00-00', ''),
(5001, 'abcd ', 'mail', '../storage/prisoner_image/', 17000, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'busnes', 'cghn', 365, '0000-00-00', '0000-00-00', ''),
(10065, 'xyz', 'mail', '../storage/prisoner_image/', 17000000, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'busnes', 'cghn', 365, '0000-00-00', '0000-00-00', ''),
(563543, 'piash', 'male', '../storage/prisoner_image/', 2147483647, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'fsefg', 'rape', 265, '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `allstaff`
--

CREATE TABLE `allstaff` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `job_ title` varchar(50) NOT NULL,
  `job_grade` varchar(10) NOT NULL,
  `job_joining_date` date NOT NULL,
  `w_joining_time` time DEFAULT NULL,
  `w_end_time` time DEFAULT NULL,
  `working_site` text,
  `holiday` varchar(50) DEFAULT NULL,
  `notice` text,
  `image` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allstaff`
--

INSERT INTO `allstaff` (`id`, `name`, `gender`, `phoneNo`, `job_ title`, `job_grade`, `job_joining_date`, `w_joining_time`, `w_end_time`, `working_site`, `holiday`, `notice`, `image`, `password`) VALUES
(1, 'jack', 'Male', 1303156230, 'staff manager ', 'b', '2020-04-01', '20:00:00', '08:00:00', 'rode', 'friday', NULL, '../storage/staff/nur.jpg', '123'),
(1601, 'abcd', 'Male', 170000000, 'Jailor', 'a', '0000-00-00', '20:00:00', '08:00:00', 'rode', 'friday', NULL, NULL, '1234'),
(16002, 'abcn', 'Male', 1300000, 'Staff Manager', 'b', '0000-00-00', '20:00:00', '08:00:00', 'rode', 'friday', NULL, NULL, '1234'),
(16003, 'abcv', 'Male', 1700000000, 'Visitor Staff', '', '0000-00-00', '20:00:00', '08:00:00', 'rode', 'friday', NULL, NULL, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

CREATE TABLE `cell` (
  `cellId` int(50) NOT NULL,
  `guiltCell` varchar(200) NOT NULL,
  `allPrisoner` int(10) NOT NULL,
  `prisonerLimit` int(10) NOT NULL,
  `allPrisonerId` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell`
--

INSERT INTO `cell` (`cellId`, `guiltCell`, `allPrisoner`, `prisonerLimit`, `allPrisonerId`) VALUES
(1001, 'Murderer', 3, 3, '203,204,105'),
(1002, 'Thieve', 3, 5, '203,204,105'),
(1003, 'Rapist', 3, 10, '203,204,105'),
(1004, 'Thug', 3, 20, '203,204,105'),
(1005, 'Human Trafficker', 3, 15, '203,204,105');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `VisitorId` int(10) NOT NULL,
  `VisitorName` varchar(50) NOT NULL,
  `VisitorAddres` varchar(150) DEFAULT NULL,
  `VisitorPhoneNo` int(12) NOT NULL,
  `VisitorGender` varchar(10) NOT NULL,
  `Relation` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `PrisonerName` varchar(50) NOT NULL,
  `PrisonerId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`VisitorId`, `VisitorName`, `VisitorAddres`, `VisitorPhoneNo`, `VisitorGender`, `Relation`, `Date`, `Time`, `PrisonerName`, `PrisonerId`) VALUES
(1, 'Alax', 'Dhaka', 1257688934, 'mail', 'Brother', '2020-03-26', '10:10:00.000000', 'Prince', 101),
(2, 'A', 'Khulna', 1581123, 'male', 'uncle', '2020-03-03', '07:13:10.000000', 'Daku Mastan', 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allprisoner`
--
ALTER TABLE `allprisoner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allstaff`
--
ALTER TABLE `allstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cell`
--
ALTER TABLE `cell`
  ADD PRIMARY KEY (`cellId`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`VisitorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allprisoner`
--
ALTER TABLE `allprisoner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563544;

--
-- AUTO_INCREMENT for table `allstaff`
--
ALTER TABLE `allstaff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16004;

--
-- AUTO_INCREMENT for table `cell`
--
ALTER TABLE `cell`
  MODIFY `cellId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VisitorId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `dummy_project`
--
CREATE DATABASE IF NOT EXISTS `dummy_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dummy_project`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Food'),
(2, 'Grossery'),
(3, 'milk'),
(4, 'Garment'),
(5, 'Frozen Foods');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `unit_qty` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `unit_price`, `unit_qty`, `description`, `image`) VALUES
(1, 'nur', 2, 100, 10, '    deshi    ', '../storage/product_image/onion.jpg'),
(3, 'onion', 2, 10, 1, ' desc ', '../storage/product_image/garlic.jpg'),
(4, 'ginger', 2, 15, 10, 'desc', '../storage/product_image/ginger.jpg'),
(6, 'Cloves', 2, 100, 10, 'deshi', '../storage/product_image/cloves.jpeg'),
(7, 'Nuggets', 5, 180, 10, 'imported', '../storage/product_image/nuggets.jpg'),
(8, 'Chicken Nuggets', 5, 190, 10, '     imported chicken    ', '../storage/product_image/1383770571120.jpeg'),
(11, 'Brocoli', 1, 10, 10, 'Imported', '../storage/product_image/Broccoli.jpg'),
(12, 'abc', 1, 10, 2, 'czxczxc', '../storage/product_image/belmanfod algorithom Q.CN.PNG'),
(13, 'Alu', 1, 10, 2, 'sdvsdva', '../storage/product_image/96581201_567017044221050_6915192694281076736_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'Tanvir', 'taanveer', 'h', '123456', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `VisitorId` int(10) NOT NULL,
  `VisitorName` varchar(50) NOT NULL,
  `VisitorAddres` varchar(150) DEFAULT NULL,
  `VisitorPhoneNo` int(12) NOT NULL,
  `VisitorGender` varchar(10) NOT NULL,
  `Relation` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `PrisonerName` varchar(50) NOT NULL,
  `PrisonerId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`VisitorId`, `VisitorName`, `VisitorAddres`, `VisitorPhoneNo`, `VisitorGender`, `Relation`, `Date`, `Time`, `PrisonerName`, `PrisonerId`) VALUES
(1, 'Alax', 'Dhaka', 1257688934, 'mail', 'Brother', '2020-03-26', '10:10:00.000000', 'Prince', 101),
(2, 'A', 'Khulna', 1581123, 'male', 'uncle', '2020-03-03', '07:13:10.000000', 'Daku Mastan', 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`VisitorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VisitorId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `elearning`
--
CREATE DATABASE IF NOT EXISTS `elearning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elearning`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `author` varchar(10) NOT NULL,
  `article_name` varchar(20) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `author`, `article_name`, `article`) VALUES
(2, 'student', 'Coronavirus cure: Wh', 'What work is being done to find treatments?\r\nMore than 150 different drugs are being researched in different countries. Most are existing drugs that are being trialled against the virus.\r\n\r\nThe UK is running the the world\'s largest clinical trial, called Recovery, with more than 12,000 patients taking part - it is one of the few trials to have given a definitive view on which drugs do and do not work\r\nThe World Health Organization (WHO) is running the the Solidarity trial to assess promising treatments in countries around the world\r\nMultiple pharmaceutical companies are running trials of their own drugs\r\nThere are three broad approaches being investigated:\r\n\r\nAntiviral drugs that directly affect the coronavirus\'s ability to thrive inside the body\r\nDrugs that calm the immune system (severe Covid-19 is caused by patients\' immune systems overreacting and damaging the body)\r\nAntibodies that can target the virus, taken from either survivors\' blood or made in a lab\r\nIt is possible that different drugs will work better at different stages - such as anti-virals at the beginning and immune drugs in late-stage diseases. Combinations of therapies will also be investigated.\r\n\r\nThe only life-saving drug\r\nOf all the drugs being trialled, only one has been been proven to save lives - dexamethasone - and it is a significant breakthrough in the fight against coronavirus.\r\n\r\nThe UK\'s Recovery trial showed the drug cut the risk of death by a third for patients on ventilators and by a fifth for those on oxygen.\r\n\r\nDexamethasone is a steroid that calms down inflammation (part of the immune response) in the body.\r\n\r\nCrucially it is also cheap which means it could be used all around the world.\r\n\r\nHowever, the drug does not work on people with milder symptoms.'),
(3, 'student', 'Express.js', 'Express.js, or simply Express, is a web application framework for Node.js, released as free and open-source software under the MIT License. It is designed for building web applications and APIs.[3] It has been called the de facto standard server framework for Node.js.[4]\r\n\r\nThe original author, TJ Holowaychuk, described it as a Sinatra-inspired server,[5] meaning that it is relatively minimal with many features available as plugins. Express is the back-end component of the MEAN stack, together with the MongoDB database software and AngularJS front-end framework.[6]'),
(10, 'student', 'What is podcast host', 'Before starting this guide, if you are asking yourself: “What is a podcast?”, the answer is straightforward.\r\n\r\nIn layman’s terms, a podcast is a collection of audio files on a specific topic that can be listened to and downloaded to a computer or mobile device. Podcast hosting is a unique service that provides a platform to store and deliver media files associated with a podcast. Since podcasts require a lot of space and bandwidth, personal website servers do not have this amount of storage for such large files.\r\n\r\nHowever, hosting servers for podcasts offer you the capacity to store audio files so that your audience can download them. These podcast hosting sites provide advanced analytics reports on your podcast’s audience, marketing tools to increase your audience base, 24/7 customer support, and much more.\r\n\r\nThe most important reason for selecting a hosting service for your podcast is so that you can stop worrying about how you can share or store it. These services are designed in such a way to eliminate the technological aspects of creating a podcast through the provision of built-in features. In addition to this, these hosting services also simplify the process of embedding or sharing podcast files on social media or other websites.'),
(11, 'student', 'assdsd', 'new blog'),
(12, 'student 1', 'test', 'blog test\r\n'),
(13, 'tutor', 'tutor......', 'this is a new article from tutor'),
(14, 'tutor', 'abc', 'Enter text here...abc blog'),
(15, 'tutor', 'abc', 'bkwejfcnqe/roil;foljer[;gofjqlmwil;rnc[nwo;mtgiw[p4ogj[viowcneb;f[owp4irgnvkwre'),
(16, 'tutor', 'vhvjhbmnkjm', 'hchvbnm,'),
(17, 'tutor', 'AJAX Introduction', 'AJAX is a developer\'s dream, because you can:\r\n\r\nUpdate a web page without reloading the page\r\nRequest data from a server - after the page has loaded\r\nReceive data from a server - after the page has loaded\r\nSend data to a server - in the background');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `uId` int(20) NOT NULL,
  `usernasme` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `uId`, `usernasme`, `email`, `message`) VALUES
(2, 0, '', 'shuvroroy51@gmail.co', 'I want to learn painting.Is there any skilled tutor ?'),
(3, 0, '', 'shuvroroy51@gmail.com', 'I want to learn painting.Is there any skilled tutor ?'),
(4, 0, '', 'shuvroroy51@gmail.com', 'no problem'),
(17, 0, '', 't@gmail.comnk', 'tutor contact message'),
(18, 0, '', 'shuvroroy51@gmail.co', 'sdadaws'),
(19, 0, '', 'nur80659@gmail.com', '???'),
(20, 17, 'tutor', 't01@gmail.comnk12', 'rrdfhgfg'),
(21, 17, 'tutor', 't01@gmail.comnk12', 'bvcvhbjnklm'),
(22, 17, 'tutor', 't01@gmail.comnk12', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin'),
(3, 'test', 'test1123456', 'test@fdbf', 'test'),
(15, 'student', 'student', 'shuvroroy51@gmail.coo', 'student'),
(16, 'updated', 'q', 'q', 'q'),
(17, 'tutor', 'tutor101', 't01@gmail.comnk12', 'tutor');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `ammount` int(20) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `type`, `ammount`, `course`) VALUES
(1, 'trail', 0, 'any'),
(2, 'general', 1000, 'any'),
(3, 'premium', 3000, 'any');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `tutor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `student_name`, `tutor_id`, `tutor_name`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(2, 15, 'student', 25, 'Mohibul Alam', 4500, '2020-09-24', '2020-09-24 15:10:17', '2020-09-24 15:10:17'),
(3, 15, 'student', 17, 'Naimur Rahman', 10000, '2020-09-24', '2020-09-24 15:11:31', '2020-09-24 15:11:31'),
(4, 17, 'student', 17, 'Prottoy Mahbub', 7000, '2020-09-25', '2020-09-25 12:51:07', '2020-09-25 12:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `package_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `login_id`, `name`, `class`, `package_id`) VALUES
(1, 15, 'neel', 'english', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `activestatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `subject`, `activestatus`) VALUES
(17, 'morshed', 'math', 'pending'),
(17, 'tutor', 'art', 'pending'),
(17, 'tutor', 'math', 'pending'),
(17, 'tutor', 'math', 'pending'),
(17, 'tutor', 'math', 'pending'),
(17, 'tutor', 'math', 'pending'),
(17, 'tutor', 'math', 'pending'),
(17, 'tutor', 'math', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `content` varchar(100) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `publisher`, `content`, `url`) VALUES
(1, 'Morshed', 'Node.js intro', 'https://www.youtube.com/embed/TlB_eWDSMt4'),
(3, 'Rakib', 'Quantum physics', 'https://www.youtube.com/watch?v=2fxnvJBSLF4'),
(4, ' Simplilearn', 'Machine learning basics\r\n', 'https://www.youtube.com/watch?v=ukzFI9rgwfU'),
(5, 'tutor', 'abc', 'abc'),
(6, 'tutor', 'asd', 'asd'),
(7, 'tutor', 'Ajax', 'https://www.youtube.com/watch?v=ld5HwiENA8k'),
(8, 'tutor', 'Ajax', 'https://www.youtube.com/watch?v=ld5HwiENA8k'),
(9, 'tutor', 'AJAX', 'https://youtu.be/ld5HwiENA8k'),
(10, 'tutor', 'AJAX', 'https://www.youtube.com/embed/ld5HwiENA8k');

-- --------------------------------------------------------

--
-- Table structure for table `tutorreview`
--

CREATE TABLE `tutorreview` (
  `id` int(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `tutor_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorreview`
--

INSERT INTO `tutorreview` (`id`, `comment`, `rating`, `tutor_id`) VALUES
(17, 'halar put halai onk valo', 5, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tutorstudentlist`
--

CREATE TABLE `tutorstudentlist` (
  `id` int(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `student_ibfk_1` (`package_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD KEY `tutor_ibfk_1` (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorreview`
--
ALTER TABLE `tutorreview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indexes for table `tutorstudentlist`
--
ALTER TABLE `tutorstudentlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `tutorstudentlist_ibfk_1` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tutorreview`
--
ALTER TABLE `tutorreview`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tutorstudentlist`
--
ALTER TABLE `tutorstudentlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutorreview`
--
ALTER TABLE `tutorreview`
  ADD CONSTRAINT `tutorreview_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tutorstudentlist`
--
ALTER TABLE `tutorstudentlist`
  ADD CONSTRAINT `tutorstudentlist_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `tutor` (`id`) ON DELETE CASCADE;
--
-- Database: `frontacc`
--
CREATE DATABASE IF NOT EXISTS `frontacc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `frontacc`;
--
-- Database: `jobportal`
--
CREATE DATABASE IF NOT EXISTS `jobportal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jobportal`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `contactNo` varchar(12) DEFAULT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `companyName`, `contactNo`, `userName`, `password`, `type`) VALUES
('abc', 'abc', '123', 'abc', 'abc', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userName`);
--
-- Database: `laravel-e-commerce-project`
--
CREATE DATABASE IF NOT EXISTS `laravel-e-commerce-project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel-e-commerce-project`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_30_111303_create_tbl_admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'nur@e.com', '202cb962ac59075b964b07152d234b70', 'nur', '123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `midterm_lab_exam`
--
CREATE DATABASE IF NOT EXISTS `midterm_lab_exam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `midterm_lab_exam`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `empNo` int(10) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`empNo`, `contactNo`, `username`, `password`) VALUES
(1, 123456, 'admin', 'admin'),
(101, 0, 'tutor', 'tutor');
--
-- Database: `node-mvc-project-mid`
--
CREATE DATABASE IF NOT EXISTS `node-mvc-project-mid` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `node-mvc-project-mid`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'visitors', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":\"visitors\",\"table_structure[]\":\"visitors\",\"table_data[]\":\"visitors\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

--
-- Dumping data for table `pma__favorite`
--

INSERT INTO `pma__favorite` (`username`, `tables`) VALUES
('root', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"laravel-e-commerce-project\",\"table\":\"tbl_admin\"},{\"db\":\"elearning\",\"table\":\"blog\"},{\"db\":\"elearning\",\"table\":\"student\"},{\"db\":\"elearning\",\"table\":\"payments\"},{\"db\":\"elearning\",\"table\":\"packages\"},{\"db\":\"elearning\",\"table\":\"contact\"},{\"db\":\"elearning\",\"table\":\"login\"},{\"db\":\"elearning\",\"table\":\"migrations\"},{\"db\":\"elearning\",\"table\":\"tutorials\"},{\"db\":\"elearning\",\"table\":\"tutorreview\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'bdprison.org', 'allprisoner', '{\"sorted_col\":\"`allprisoner`.`name`  DESC\"}', '2020-05-17 14:46:04'),
('root', 'elearning', 'blog', '{\"sorted_col\":\"`blog`.`article` ASC\"}', '2020-09-18 18:26:31'),
('root', 'elearning', 'login', '{\"sorted_col\":\"`login`.`password`  DESC\"}', '2020-09-07 02:17:33'),
('root', 'elearning', 'payments', '{\"sorted_col\":\"`payments`.`student_id` ASC\"}', '2020-09-25 22:23:26'),
('root', 'elearning', 'student', '{\"CREATE_TIME\":\"2020-08-21 03:40:18\",\"col_visib\":[1,1,1,1]}', '2020-10-08 08:24:16'),
('root', 'elearning', 'tutor', '{\"sorted_col\":\"`tutor`.`activestatus`  ASC\"}', '2020-09-16 20:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

--
-- Dumping data for table `pma__tracking`
--

INSERT INTO `pma__tracking` (`db_name`, `table_name`, `version`, `date_created`, `date_updated`, `schema_snapshot`, `schema_sql`, `data_sql`, `tracking`, `tracking_active`) VALUES
('bdprison.org', 'visitors', 1, '2020-04-11 11:57:15', '2020-04-11 11:57:15', 'a:2:{s:7:\"COLUMNS\";a:10:{i:0;a:8:{s:5:\"Field\";s:9:\"VisitorId\";s:4:\"Type\";s:7:\"int(10)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:3:\"PRI\";s:7:\"Default\";N;s:5:\"Extra\";s:14:\"auto_increment\";s:7:\"Comment\";s:0:\"\";}i:1;a:8:{s:5:\"Field\";s:11:\"VisitorName\";s:4:\"Type\";s:11:\"varchar(50)\";s:9:\"Collation\";s:17:\"latin1_swedish_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:2;a:8:{s:5:\"Field\";s:13:\"VisitorAddres\";s:4:\"Type\";s:12:\"varchar(150)\";s:9:\"Collation\";s:17:\"latin1_swedish_ci\";s:4:\"Null\";s:3:\"YES\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:3;a:8:{s:5:\"Field\";s:14:\"VisitorPhoneNo\";s:4:\"Type\";s:7:\"int(12)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:4;a:8:{s:5:\"Field\";s:13:\"VisitorGender\";s:4:\"Type\";s:11:\"varchar(10)\";s:9:\"Collation\";s:17:\"latin1_swedish_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:5;a:8:{s:5:\"Field\";s:8:\"Relation\";s:4:\"Type\";s:11:\"varchar(50)\";s:9:\"Collation\";s:17:\"latin1_swedish_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:6;a:8:{s:5:\"Field\";s:4:\"Date\";s:4:\"Type\";s:4:\"date\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:7;a:8:{s:5:\"Field\";s:4:\"Time\";s:4:\"Type\";s:7:\"time(6)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:8;a:8:{s:5:\"Field\";s:12:\"PrisonerName\";s:4:\"Type\";s:11:\"varchar(50)\";s:9:\"Collation\";s:17:\"latin1_swedish_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:9;a:8:{s:5:\"Field\";s:10:\"PrisonerId\";s:4:\"Type\";s:7:\"int(20)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}}s:7:\"INDEXES\";a:1:{i:0;a:13:{s:5:\"Table\";s:8:\"visitors\";s:10:\"Non_unique\";s:1:\"0\";s:8:\"Key_name\";s:7:\"PRIMARY\";s:12:\"Seq_in_index\";s:1:\"1\";s:11:\"Column_name\";s:9:\"VisitorId\";s:9:\"Collation\";s:1:\"A\";s:11:\"Cardinality\";s:1:\"2\";s:8:\"Sub_part\";N;s:6:\"Packed\";N;s:4:\"Null\";s:0:\"\";s:10:\"Index_type\";s:5:\"BTREE\";s:7:\"Comment\";s:0:\"\";s:13:\"Index_comment\";s:0:\"\";}}}', '# log 2020-04-11 11:57:15 root\nDROP TABLE IF EXISTS `visitors`;\n# log 2020-04-11 11:57:15 root\n\nCREATE TABLE `visitors` (\n  `VisitorId` int(10) NOT NULL,\n  `VisitorName` varchar(50) NOT NULL,\n  `VisitorAddres` varchar(150) DEFAULT NULL,\n  `VisitorPhoneNo` int(12) NOT NULL,\n  `VisitorGender` varchar(10) NOT NULL,\n  `Relation` varchar(50) NOT NULL,\n  `Date` date NOT NULL,\n  `Time` time(6) NOT NULL,\n  `PrisonerName` varchar(50) NOT NULL,\n  `PrisonerId` int(20) NOT NULL\n) ENGINE=InnoDB DEFAULT CHARSET=latin1;\n', '\n', 'UPDATE,INSERT,DELETE,TRUNCATE,CREATE TABLE,ALTER TABLE,RENAME TABLE,DROP TABLE,CREATE INDEX,DROP INDEX', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-03-21 08:28:03', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
