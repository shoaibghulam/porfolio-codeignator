-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 10:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(150) NOT NULL,
  `profile` varchar(500) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `instgram` varchar(200) NOT NULL,
  `linkedlist` varchar(200) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `dob` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `location` varchar(300) NOT NULL,
  `map` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `profession`, `profile`, `fb`, `twitter`, `instgram`, `linkedlist`, `description`, `dob`, `email`, `contact`, `location`, `map`) VALUES
(1, 'Shoaib Ghulam', 'A Freelance UI Designer & Web Developer & SEO Export', 'ShoaibGHulam.png', '#FB', '#Tw', '#ink', '#lnk', '                                                                                        <p> I have built a large website portfolio with customers ranging from locally in Balochistan Pakistan. and all over the world. I take pride in my work and many of my clients bring me repeat business and referrals.</p>\r\n\r\n<p>I have been successful as a freelancer, not just because of my web programming skills, but because I am a skilled and dependable web programmer that can be trusted to follow through with my work.</p>\r\n\r\n<p>I enjoy working directly with my clients, rather than having project managers involved. Even though I seldom meet my clients in person (due to geography), I am able to effectively communicate via email and on the phone to complete website development projects to their specifications.</p>\r\n\r\n<p>If you view my web programmer portfolio you can see many examples of the PHP and HTML websites I have developed. As a website developer, I build complete websites, develop MySQL databases, take on small projects in existing websites, can fix code bugs, clean website virus infections and then secure your code so it doesn’t happen again.\r\n</p>\r\n<p>\r\nMy website portfolio only shows a small sample of the websites I have developed over the years. If you are not sure I have the skills to build your website , please contact me to discuss your project.       </p>                                                        ', '12 DEC 1996', 'shoaibghulam@gmail.com', '+92-323-263-8038', 'Turbat Balochistan ', '                                                                  <frame src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.7974076399955!2d63.061625351159364!3d26.007453083444936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ec75889f41eb593%3A0xb8040a1bf416b595!2sGidroshia%20Institute%20Of%20Information%20Technology!5e0!3m2!1sen!2s!4v1568494543924!5m2!1sen!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>                                                                                                                                                                       ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(110) NOT NULL,
  `cmsg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `cvid` int(10) NOT NULL,
  `cvfile` varchar(1000) NOT NULL,
  `hirelink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cvid`, `cvfile`, `hirelink`) VALUES
(1, 'Web_Development_CV_Shoaib_Ghulam.pdf', '#gsking');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serid` int(10) NOT NULL,
  `sertitle` varchar(100) NOT NULL,
  `serdesc` varchar(250) NOT NULL,
  `sericon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serid`, `sertitle`, `serdesc`, `sericon`) VALUES
(1, 'Web Development', 'Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.', 'lni-shortcode'),
(3, 'SEO', 'Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.', 'lni-code-alt'),
(4, 'Web Research', 'Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.', 'lni-code-alt'),
(5, 'Graphics Designer', 'Professional Graphics Designer ', 'lni-gallery'),
(6, 'Web Design', 'Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.', 'lni-code-alt'),
(7, 'IOT', 'Internet of the Things Security and Service', 'lni-cloudnetwork');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `sid` int(10) NOT NULL,
  `stitle` varchar(100) NOT NULL,
  `slogo` varchar(500) NOT NULL,
  `sfavicon` varchar(500) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`sid`, `stitle`, `slogo`, `sfavicon`, `description`) VALUES
(1, 'Shoaib Ghulam Portfolio & Professional Web Developer', 'logo.png', 'favicon.png', ' Hi I am Shoaib Ghulam professional Web Developer and SEO Export        ');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `sid` int(11) NOT NULL,
  `stitle` varchar(100) NOT NULL,
  `sposition` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`sid`, `stitle`, `sposition`) VALUES
(1, 'HTML5', 85),
(2, 'CSS', 50),
(3, 'PHP', 100),
(5, 'Javascript', 88),
(6, 'Bootstrap', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(3500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`) VALUES
(1, 'shoaibghulam', 'shoaibghulam@gmail.com', '5d7bac9ffbb565d3db9070356f99417cfa6b0ac4018b8b53c90d07f8e30cc6fdca21f80404182d3dddbdb083541ec9811016cc9a65b36dd198b8a63559f23efeAyb4EdmQeAwAYn1hmmo471ebZUxGwL+Wp0xZxsyi8By16LOlonGu5aUdkRmSJowtWOcPFANZC38bsMESf/KIJ/h2HLDuxUwgWLD5Dz3m7CP68d+/uAjszFbQ1M9EbDjEoTzjAw2pIos2HPImxuZyg96PANOvMomD8PlKdcV8NpMEl2fxRF4wVvtfpHSedZtHhslrwqaMcF//LuVOymKaa+lOk5BV2sDl2mzs644kGsIexuqMQsJ9KhTiYyTiUHXj');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `wid` int(10) NOT NULL,
  `wtitle` varchar(100) NOT NULL,
  `wlink` varchar(1000) NOT NULL,
  `wthumb` varchar(1000) NOT NULL,
  `serid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`wid`, `wtitle`, `wlink`, `wthumb`, `serid`) VALUES
(3, 'Baloch Shop', '#BalochShop', 'balochshop.jpg\r\n', 1),
(4, 'Baloch Shop', '#BalochShop', 'gsshop.jpg', 5),
(5, 'Baloch Shop', '#BalochShop', 'balochshop.jpg\r\n', 1),
(6, 'Baloch Shop', '#BalochShop', 'gsshop.jpg', 1),
(7, 'Baloch Shop', '#BalochShop', 'balochshop.jpg\r\n', 6),
(8, 'Baloch Shop', '#BalochShop', 'gsshop.jpg', 3),
(9, 'Baloch Shop', '#BalochShop', 'balochshop.jpg\r\n', 7),
(10, 'GS King Baloch', 'https://shoaibghulam.paks.pkk', 'work.JPG', 5),
(12, 'Baloch Shop', '#BalochShop', 'balochshop.jpg\r\n', 1),
(13, 'Baloch Shop', '#BalochShop', 'balochshop.jpg\r\n', 7),
(14, 'GS King Baloch', 'https://shoaibghulam.paks.pkk', 'work.JPG', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cvid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serid`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`wid`),
  ADD KEY `serid` (`serid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cvid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `wid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`serid`) REFERENCES `services` (`serid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
