-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2024 at 04:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int NOT NULL,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', 'phpgurukulofficial@gmail.com', 1, '2024-01-09 18:30:00', '2024-01-31 05:42:52'),
(3, 'subadmin', 'f925916e2754e5e03f75dd58a5733251', 'sudamin@gmail.in', 0, '2024-01-09 18:30:00', '2024-01-31 05:43:01'),
(4, 'suadmin2', 'f925916e2754e5e03f75dd58a5733251', 'sbadmin@test.com', 0, '2024-01-09 18:30:00', '2024-01-31 05:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 'Sports', 'Related to sports news', '2024-01-11 18:30:00', '2024-01-31 05:43:16', 1),
(5, 'Entertainment', 'Entertainment related  News', '2024-01-11 18:30:00', '2024-01-31 05:43:25', 1),
(6, 'Politics', 'Politics', '2024-01-11 18:30:00', '2024-01-31 05:43:25', 1),
(7, 'Business', 'Business', '2024-01-11 18:30:00', '2024-01-31 05:43:25', 1),
(8, 'COVID-19', 'COVID-19', '2024-01-11 18:30:00', '2024-01-31 05:43:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int NOT NULL,
  `postId` int DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`, `status`) VALUES
(1, 12, 'Anuj', 'anuj@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', '2024-01-17 18:30:00', 1),
(2, 12, 'Test user', 'test@gmail.com', 'This is sample text for testing.', '2024-01-18 18:30:00', 1),
(3, 7, 'ABC', 'abc@test.com', 'This is sample text for testing.', '2024-01-22 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext,
  `Description` longtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<p class=\"MsoNormal\"><span style=\"font-size: 10pt; line-height: 107%; font-family: Georgia, serif; color: rgb(123, 136, 152); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Welcome to News Portal, your\r\none-stop destination for staying informed and up-to-date with the latest news\r\nand developments from around the world.<br>\r\n</span>At&nbsp;News Portal, we understand the importance of reliable and timely\r\ninformation in today\'s fast-paced world. Our team of dedicated journalists and\r\neditors work tirelessly to bring you the most relevant and engaging stories\r\nfrom a variety of sources, ensuring that you are always well-informed on the\r\nissues that matter most to you.<br>\r\nWhether\r\nyou\'re interested in politics, sports, entertainment, technology, or business,\r\nyou\'ll find it all here on&nbsp;News Portal. Our user-friendly interface makes it easy to\r\nnavigate through the latest headlines, explore in-depth articles, and discover\r\nnew perspectives on the events shaping our world.<br>\r\nBut&nbsp;News Portal&nbsp;is more than just a news website – it\'s a\r\ncommunity of curious minds and engaged citizens who come together to discuss,\r\ndebate, and share ideas. We believe in the power of journalism to inspire\r\nchange and foster understanding, and we\'re committed to providing a platform\r\nwhere voices from all walks of life can be heard.<br>\r\nJoin us on\r\nour mission to inform, inspire, and empower. Together, we can make a difference.<span style=\"font-size:10.0pt;line-height:107%\"><o:p></o:p></span></p>', '2024-01-14 18:30:00', '2024-06-20 04:10:15'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>New Delhi India</p><p><b>Phone Number : </b>+91 -01234567890</p><p><b>Email -id : </b>phpgurukulofficial@gmail.com</p>', '2024-01-15 18:30:00', '2024-01-31 05:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int NOT NULL,
  `PostTitle` longtext,
  `CategoryId` int DEFAULT NULL,
  `SubCategoryId` int DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int DEFAULT NULL,
  `PostUrl` mediumtext,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `viewCounter`, `postedBy`, `lastUpdatedBy`) VALUES
(7, 'Jasprit Bumrah ruled out of England T20I series due to injury', 3, 4, '<p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\"><span style=\"margin: 0px; padding: 0px; font-weight: 700;\">The Indian Cricket Team has received a huge blow right ahead of the commencement of the much-awaited series against England. Star speedster Jasprit Bumrah has been ruled out of the forthcoming 3-match T20I series as he suffered an injury in his left thumb.</span></p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The 24-year-old pacer picked up a niggle during India’s first T20I match against Ireland played on June 27 at the Malahide cricket ground in Dublin. As per the reports, he is likely to be available for the ODI series against England scheduled to start from July 12.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">In the first, Bumrah exhibited a phenomenal performance with the ball. In his quota of four overs, he conceded 19 runs and picked 2 wickets at an economy rate of 4.75.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">Post his injury, he arrived at team’s optional training session on Thursday but didn’t train. Later, he was rested in the second face-off along with MS Dhoni, Shikhar Dhawan and Bhuvneshwar Kumar.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">As of now, no replacement has been announced. However, Umesh Yadav may be be given chance in the team in Bumrah’s absence.</p><p style=\"padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The first T20I match between India and England will be played at Old Trafford, Manchester on July 3.</p>', '2024-01-15 18:30:00', '2024-06-20 13:23:28', 1, 'Jasprit-Bumrah-ruled-out-of-England-T20I-series-due-to-injury', '6d08a26c92cf30db69197a1fb7230626.jpg', 32, 'admin', NULL),
(10, 'Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal', 7, 9, '<h1 style=\"box-sizing: inherit; margin-top: 0px; padding: 0px; font-family: Roboto, sans-serif; font-size: 38px; line-height: normal; letter-spacing: -0.5px; color: rgb(51, 51, 51);\"><span itemprop=\"headline\" style=\"box-sizing: inherit;\">Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal</span>Tata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel Deal</h1>', '2024-01-16 18:30:00', '2024-06-20 09:37:20', 1, 'Tata-Steel,-Thyssenkrupp-Finalise-Landmark-Steel-Deal', '505e59c459d38ce4e740e3c9f5c6caf7.jpg', 2, 'admin', NULL),
(11, 'UNs Jean Pierre Lacroix thanks India for contribution to peacekeeping', 6, 8, '<p>UNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeeping<br></p>', '2024-01-16 18:30:00', '2024-06-20 14:31:16', 1, 'UNs-Jean-Pierre-Lacroix-thanks-India-for-contribution-to-peacekeeping', '27095ab35ac9b89abb8f32ad3adef56a.jpg', 36, 'admin', NULL),
(12, 'Shah holds meeting with NE states leaders in Manipur', 6, 7, '<p><span style=\"color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">New Delhi: BJP president Amit Shah today held meetings with his party leaders who are in-charge of 11 Lok Sabha seats spread across seven northeast states as part of a drive to ensure that it wins the maximum number of these constituencies in the general election next year.</span><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><webviewcontentdata style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">Shah held separate meetings with Lok Sabha toli (group) of Arunachal Pradesh, Tripura, Meghalaya, Mizoram, Nagaland, Sikkim and Manipur in Manipur, the partys media head Anil Baluni said.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Baluni said that Shah was in West Bengal for two days before he arrived in Manipur. The BJP chief would reach Odisha tomorrow.</webviewcontentdata><br></p>', '2024-01-17 18:30:00', '2024-06-20 12:10:44', 1, 'Shah-holds-meeting-with-NE-states-leaders-in-Manipur', '7fdc1a630c238af0815181f9faa190f5.jpg', 25, 'admin', NULL),
(13, 'T20 World Cup 2021: Semi-final 1, England vs New Zealand â€“ Who Said What', 3, 4, '<p style=\"margin-bottom: 3rem; font-size: 20px; color: rgb(41, 41, 41); line-height: 1.6; font-family: &quot;Proxima Nova&quot;;\">New Zealand held their nerves admirably to make it a hat-trick of ICC event final entrances, trumping&nbsp;<a href=\"https://www.crictracker.com/cricket-teams/england/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(4, 93, 233);\"><strong>England</strong></a>&nbsp;in a see-sawing semi-final clash in Abu Dhabi. You would feel they are too nice to believe in revenging anything, even if it is as bitter as the fateful 2019 ODI World Cup loss, so letâ€™s put it this way: the scores are settled. And in doing so, New Zealand have made it to the finals of a tournament no one counted them as the favourites of.&nbsp;</p><p style=\"margin-bottom: 3rem; font-size: 20px; color: rgb(41, 41, 41); line-height: 1.6; font-family: &quot;Proxima Nova&quot;;\">After being inserted, a Jason Roy-less England managed 166/4 largely on the back of Dawid Malan (41 off 30), who got back his mojo at the right time, and Moeen Ali (51 off 37), who proved it for the umpteenth time what a marvellous short-format asset he is.</p>', '2024-01-18 18:30:00', '2024-06-20 14:34:05', 1, 'T20-World-Cup-2021:-Semi-final-1,-England-vs-New-Zealand-â€“-Who-Said-What', '8bc5c30be91dca9d07c1db858c60e39f.jpg', 53, 'admin', 'subadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int NOT NULL,
  `CategoryId` int DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 5, 'Bollywood ', 'Bollywood masala', '2024-01-14 18:30:00', '2024-01-31 05:48:30', 1),
(4, 3, 'Cricket', 'Cricket\r\n\r\n', '2024-01-14 18:30:00', '2024-01-31 05:48:39', 1),
(5, 3, 'Football', 'Football', '2024-01-14 18:30:00', '2024-01-31 05:48:39', 1),
(6, 5, 'Television', 'TeleVision', '2024-01-14 18:30:00', '2024-01-31 05:48:39', 1),
(7, 6, 'National', 'National', '2024-01-14 18:30:00', '2024-01-31 05:48:39', 1),
(8, 6, 'International', 'International', '2024-01-14 18:30:00', '2024-01-31 05:48:39', 1),
(9, 7, 'India', 'India', '2024-01-14 18:30:00', '2024-06-09 14:21:37', 0),
(10, 8, 'Vaccination', 'Vaccination', '2024-01-14 18:30:00', '2024-06-09 14:21:34', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AdminUserName` (`AdminUserName`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postcatid` (`CategoryId`),
  ADD KEY `postsucatid` (`SubCategoryId`),
  ADD KEY `subadmin` (`postedBy`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`),
  ADD KEY `catid` (`CategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD CONSTRAINT `pid` FOREIGN KEY (`postId`) REFERENCES `tblposts` (`id`);

--
-- Constraints for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD CONSTRAINT `postcatid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`),
  ADD CONSTRAINT `postsucatid` FOREIGN KEY (`SubCategoryId`) REFERENCES `tblsubcategory` (`SubCategoryId`),
  ADD CONSTRAINT `subadmin` FOREIGN KEY (`postedBy`) REFERENCES `tbladmin` (`AdminUserName`);

--
-- Constraints for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `catid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
