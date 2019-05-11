-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2019 at 05:16 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg_designation`
--

DROP TABLE IF EXISTS `bg_designation`;
CREATE TABLE IF NOT EXISTS `bg_designation` (
  `DESIGNATION_ID` bigint(20) NOT NULL,
  `DESIGNATION_NAME` varchar(200) DEFAULT NULL,
  `DESIGNATION_TYPE` int(11) DEFAULT NULL,
  `SHORT_CODE` varchar(10) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`DESIGNATION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bg_designation`
--

INSERT INTO `bg_designation` (`DESIGNATION_ID`, `DESIGNATION_NAME`, `DESIGNATION_TYPE`, `SHORT_CODE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'Department Head', 2, 'H', 1, NULL, 55555, '2019-03-03', 1, '2019-03-04', NULL, NULL, NULL, NULL, NULL),
(20190002, 'Chairman', 2, 'C', 1, NULL, 1, '2019-03-03', 1, '2019-03-04', NULL, NULL, NULL, NULL, NULL),
(20190003, 'Designer', 1, NULL, 1, NULL, 1, '2019-03-03', 1, '2019-03-04', NULL, NULL, NULL, NULL, NULL),
(20190004, 'Developer 2', 1, 'D', 1, NULL, 1, '2019-03-04', 1, '2019-03-04', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `padu_about_us`
--

DROP TABLE IF EXISTS `padu_about_us`;
CREATE TABLE IF NOT EXISTS `padu_about_us` (
  `ABOUT_US_ID` bigint(20) NOT NULL,
  `ABOUT_US_CONTENT` text,
  `IMAGE_FILE_PATH` varchar(200) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ABOUT_US_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_about_us`
--

INSERT INTO `padu_about_us` (`ABOUT_US_ID`, `ABOUT_US_CONTENT`, `IMAGE_FILE_PATH`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum took a galley of type and scrambled it to make a type specimen book to continue Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum took a galley of type and scrambled it to</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\nEstablishment of PADU, Dhaka University : 1972<br />\r\n<br />\r\nDepartment Opening Class : Sep 1, 1972<br />\r\n<br />\r\nUniversity Location : Dhaka.<br />\r\n<br />\r\nCampus Area : 171 Acres<br />\r\n<br />\r\nResearch Centers: 02<br />\r\n<br />\r\nDegree Offered : Click Here for details<br />\r\n<br />\r\nHigher Degree Offered : M. Sc. Engg, M. Phil, Ph. D<br />\r\n<br />\r\nStudents : 4500+<br />\r\n<br />\r\nHalls : 05<br />\r\n<br />\r\nFaculty Members : 200+<br />\r\n<br />\r\nOfficers : 100+<br />\r\n<br />\r\nOffice Staffs : 250+</p>', 'about_1552556870.jpg', NULL, NULL, NULL, NULL, 2, '2019-03-16', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_alumni_event`
--

DROP TABLE IF EXISTS `padu_alumni_event`;
CREATE TABLE IF NOT EXISTS `padu_alumni_event` (
  `ALUMNI_EVENT_ID` bigint(20) NOT NULL,
  `EVENT_TITLE` varchar(300) DEFAULT NULL,
  `EVENT_DESC` varchar(4000) DEFAULT NULL,
  `EVENT_DATE` date DEFAULT NULL,
  `IMAGE_PATH` varchar(500) DEFAULT NULL,
  `PUBLISH_START_DATE` date DEFAULT NULL,
  `PUBLISH_END_DATE` date DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  `EVENT_TIME` time DEFAULT NULL,
  `EVENT_LOCATION` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ALUMNI_EVENT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_alumni_event`
--

INSERT INTO `padu_alumni_event` (`ALUMNI_EVENT_ID`, `EVENT_TITLE`, `EVENT_DESC`, `EVENT_DATE`, `IMAGE_PATH`, `PUBLISH_START_DATE`, `PUBLISH_END_DATE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `EVENT_TIME`, `EVENT_LOCATION`) VALUES
(20190001, 'Alumni Event', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '2019-03-15', 'feits_1552201317.PNG', '2019-03-10', '2019-04-30', 1, NULL, 1, '2019-03-10', 1, '2019-03-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190002, 'Event New', '<p>Fitness plus uttara branch, SB Plaza, House No 37,Sector 3, uttara model town, (Near London plaza) &amp; (above infinity mega mall )<br />\r\nuttara commercial aria, Uttara Dhaka.</p>\r\n\r\n<p>Administration going on with amazing discount Offer.</p>', '2019-03-14', '1_1552553434.jpg', '2019-03-14', '2019-03-31', 1, NULL, 2, '2019-03-14', 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL, '22:11:00', 'Mirpur, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `padu_alumni_notice`
--

DROP TABLE IF EXISTS `padu_alumni_notice`;
CREATE TABLE IF NOT EXISTS `padu_alumni_notice` (
  `ALUMNI_NOTICE_ID` bigint(20) NOT NULL,
  `NOTICE_TITLE` varchar(300) DEFAULT NULL,
  `NOTICE_DESC` varchar(4000) DEFAULT NULL,
  `PUBLISH_START_DATE` date DEFAULT NULL,
  `PUBLISH_END_DATE` date DEFAULT NULL,
  `NOTICE_FILE_PATH` varchar(200) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ALUMNI_NOTICE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_alumni_notice`
--

INSERT INTO `padu_alumni_notice` (`ALUMNI_NOTICE_ID`, `NOTICE_TITLE`, `NOTICE_DESC`, `PUBLISH_START_DATE`, `PUBLISH_END_DATE`, `NOTICE_FILE_PATH`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'Why do we use it???', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2019-03-09', '2019-04-06', NULL, 1, NULL, 2, '2019-03-09', 2, '2019-03-09', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_alumni_registration`
--

DROP TABLE IF EXISTS `padu_alumni_registration`;
CREATE TABLE IF NOT EXISTS `padu_alumni_registration` (
  `ALUMNI_REGISTRATION_ID` bigint(20) NOT NULL,
  `MEMBER_NAME` varchar(100) DEFAULT NULL,
  `BATCH_NO` varchar(20) DEFAULT NULL,
  `PROGRAM_ID` bigint(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `AGE` varchar(20) DEFAULT NULL,
  `PROFILE_IMAGE_PATH` varchar(500) NOT NULL,
  `LOGON_ID` varchar(20) DEFAULT NULL,
  `SECURITY_WORD` varchar(20) DEFAULT NULL,
  `JOB_CATEGORY` varchar(100) DEFAULT NULL,
  `DESIGNATION` varchar(100) DEFAULT NULL,
  `JOB_STATUS` int(11) DEFAULT NULL,
  `MAIL_ID` varchar(100) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  `CONTACT_PHONE` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ALUMNI_REGISTRATION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_alumni_registration`
--

INSERT INTO `padu_alumni_registration` (`ALUMNI_REGISTRATION_ID`, `MEMBER_NAME`, `BATCH_NO`, `PROGRAM_ID`, `DOB`, `AGE`, `PROFILE_IMAGE_PATH`, `LOGON_ID`, `SECURITY_WORD`, `JOB_CATEGORY`, `DESIGNATION`, `JOB_STATUS`, `MAIL_ID`, `REMARKS`, `ACTIVE_STATUS`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `CONTACT_PHONE`) VALUES
(20190001, 'Habibur Rahaman', '44th', NULL, '2018-10-01', NULL, '1476420_1392047767714473_982237758_n_1552228637.jpg', NULL, NULL, NULL, 'Web Developer', NULL, 'habibcse335@gmail.com', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(20190002, 'Ridoy', '44th', NULL, '2019-03-01', NULL, '1_1552555961.jpg', NULL, NULL, '20190001', 'Developer', NULL, 'manager@example.com', NULL, 1, NULL, NULL, NULL, NULL, NULL, '+8801740473189'),
(20190003, 'Habibur Rahaman', '43th', NULL, '2019-03-01', NULL, 'IMG-20170305-WA0036.jpg (1)_1552900251.jpg', NULL, NULL, '20190001', 'Developer', NULL, 'manager@example.com', NULL, 1, NULL, NULL, NULL, NULL, NULL, '12457893321');

-- --------------------------------------------------------

--
-- Table structure for table `padu_campus_tour`
--

DROP TABLE IF EXISTS `padu_campus_tour`;
CREATE TABLE IF NOT EXISTS `padu_campus_tour` (
  `CAMPUS_TOUR_ID` bigint(20) NOT NULL,
  `CAMPUS_TOUR_CONTENT` text,
  `VIDEO_FILE_PATH` varchar(2000) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  `TOUR_TITLE` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CAMPUS_TOUR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_campus_tour`
--

INSERT INTO `padu_campus_tour` (`CAMPUS_TOUR_ID`, `CAMPUS_TOUR_CONTENT`, `VIDEO_FILE_PATH`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `TOUR_TITLE`) VALUES
(20190001, '<p>#OnThisDay in 1996, Aravinda de Silva&#39;s 145 helped Sri Lanka Cricket smash the record for the highest ODI innings total, putting on 398/5 against Kenya in Kandy at the ICC Cricket World Cup.</p>\r\n\r\n<p>It took another 10 years for the 400 mark to be crossed - can you remember which match that was in?</p>', 'fYMCIvwRhTU', 1, NULL, 1, '2019-03-06', 2, '2019-03-09', NULL, NULL, NULL, NULL, NULL, 'Title'),
(20190002, '<p>#OnThisDay in 1996, Aravinda de Silva&#39;s 145 helped Sri Lanka Cricket smash the record for the highest ODI innings total, putting on 398/5 against Kenya in Kandy at the ICC Cricket World Cup.</p>\r\n\r\n<p>It took another 10 years for the 400 mark to be crossed - can you remember which match that</p>', 'PkZNo7MFNFg', 1, NULL, 2, '2019-03-14', 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL, 'Campus Tour Edited');

-- --------------------------------------------------------

--
-- Table structure for table `padu_contact_address`
--

DROP TABLE IF EXISTS `padu_contact_address`;
CREATE TABLE IF NOT EXISTS `padu_contact_address` (
  `CONTACT_ADDRESS_ID` bigint(20) NOT NULL,
  `CONTACT_ADDRESS` varchar(500) DEFAULT NULL,
  `CONTACT_PHONE` varchar(500) DEFAULT NULL,
  `CONTACT_EMAIL` varchar(500) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CONTACT_ADDRESS_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_contact_address`
--

INSERT INTO `padu_contact_address` (`CONTACT_ADDRESS_ID`, `CONTACT_ADDRESS`, `CONTACT_PHONE`, `CONTACT_EMAIL`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(1, 'Public Admin Buliding Location Name, Dhaka.', '+88-8615147 / 4010, 4011', 'public.admin@du.ac.bd, register.admin@du.ac.bd', NULL, NULL, NULL, NULL, 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_contact_email`
--

DROP TABLE IF EXISTS `padu_contact_email`;
CREATE TABLE IF NOT EXISTS `padu_contact_email` (
  `CONTACT_EMAIL_ID` bigint(20) NOT NULL,
  `FROM_EMAIL_ID` varchar(500) DEFAULT NULL,
  `SUBJECT` varchar(200) DEFAULT NULL,
  `EMAIL_CONTENT` text,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CONTACT_EMAIL_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `padu_event`
--

DROP TABLE IF EXISTS `padu_event`;
CREATE TABLE IF NOT EXISTS `padu_event` (
  `EVENT_ID` bigint(20) NOT NULL,
  `EVENT_TITLE` varchar(300) DEFAULT NULL,
  `EVENT_DESC` varchar(4000) DEFAULT NULL,
  `EVENT_DATE` date DEFAULT NULL,
  `IMAGE_PATH` varchar(500) DEFAULT NULL,
  `PUBLISH_START_DATE` date DEFAULT NULL,
  `PUBLISH_END_DATE` date DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  `EVENT_TIME` time DEFAULT NULL,
  `EVENT_LOCATION` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`EVENT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_event`
--

INSERT INTO `padu_event` (`EVENT_ID`, `EVENT_TITLE`, `EVENT_DESC`, `EVENT_DATE`, `IMAGE_PATH`, `PUBLISH_START_DATE`, `PUBLISH_END_DATE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `EVENT_TIME`, `EVENT_LOCATION`) VALUES
(20190001, 'Event Edited', '<p>Fitness plus uttara branch, SB Plaza, House No 37,Sector 3, uttara model town, (Near London plaza) &amp; (above infinity mega mall )<br />\r\nuttara commercial aria, Uttara Dhaka.</p>\r\n\r\n<p>Administration going on with amazing discount Offer.</p>', '2019-03-09', '735153_1551854953.jpg', '2019-03-06', '2019-03-31', 1, NULL, 1, '2019-03-06', 2, '2019-03-16', NULL, NULL, NULL, NULL, NULL, '02:08:00', 'Shahbag, Dhaka'),
(20190002, 'Test Event', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '2019-03-12', '1_1552109535.jpg', '2019-03-09', '2019-03-31', 1, NULL, 2, '2019-03-09', 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL, '14:00:00', NULL),
(20190003, 'Event New', '<p>Fitness plus uttara branch, SB Plaza, House No 37,Sector 3, uttara model town, (Near London plaza) &amp; (above infinity mega mall )<br />\r\nuttara commercial aria, Uttara Dhaka.</p>\r\n\r\n<p>Administration going on with amazing discount Offer.</p>', '2019-03-29', '1_1552551974.jpg', '2019-03-14', '2019-03-31', 1, NULL, 2, '2019-03-14', 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL, '02:10:00', 'DU campus'),
(20190004, 'Event New', '<p>Fitness plus uttara branch, SB Plaza, House No 37,Sector 3, uttara model town, (Near London plaza) &amp; (above infinity mega mall )<br />\r\nuttara commercial aria, Uttara Dhaka.</p>\r\n\r\n<p>Administration going on with amazing discount Offer.</p>', '2019-03-14', '1_1552553312.jpg', '2019-03-14', '2019-03-31', 1, NULL, 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02:22:00', 'Mirpur, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `padu_image_gallery`
--

DROP TABLE IF EXISTS `padu_image_gallery`;
CREATE TABLE IF NOT EXISTS `padu_image_gallery` (
  `IMAGE_ID` int(11) NOT NULL,
  `IMAGE_TITLE` varchar(500) DEFAULT NULL,
  `IMAGE_DESC` varchar(2000) DEFAULT NULL,
  `IMAGE_FILE_PATH` varchar(300) DEFAULT NULL,
  `SL_NO` int(11) DEFAULT NULL,
  `HOME_PAGE_SHOW_FLAG` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`IMAGE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_image_gallery`
--

INSERT INTO `padu_image_gallery` (`IMAGE_ID`, `IMAGE_TITLE`, `IMAGE_DESC`, `IMAGE_FILE_PATH`, `SL_NO`, `HOME_PAGE_SHOW_FLAG`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'Image 1 Edited', NULL, '735153_1551857489.jpg', NULL, NULL, NULL, 1, 1, '2019-03-06', 1, '2019-03-06', NULL, NULL, NULL, NULL, NULL),
(20190002, 'Image 2', '<p><em>Gallery</em> is an excellent, feature-rich app for organizing your photos. Password-protect your photos, organize them, display them slide-show style, share photos&nbsp;...</p>', 'download_3d_wallpaper_1551858334.jpg', NULL, NULL, NULL, 1, 1, '2019-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190003, 'Gallery', '<p>Oct 17, 2017 - Sometimes abbreviated as <em>Serial No</em>., SN or S/N, a <em>serial number</em> is a unique <em>number</em> used for identification and inventory purposes. A <em>serial number</em> allows a company to identify a product and get additional information about it, for replacement, or as a means of finding compatible parts.</p>', 'feits_1551858840.PNG', 1, 1, NULL, 1, 1, '2019-03-06', 1, '2019-03-06', NULL, NULL, NULL, NULL, NULL),
(20190004, 'Image Title', NULL, 'photo1_1552106082.png', 2, 1, NULL, 1, 2, '2019-03-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_job_category`
--

DROP TABLE IF EXISTS `padu_job_category`;
CREATE TABLE IF NOT EXISTS `padu_job_category` (
  `JOB_CATEGORY_ID` bigint(20) NOT NULL,
  `CATEGORY_NAME` varchar(200) DEFAULT NULL,
  `SHORT_CODE` varchar(10) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`JOB_CATEGORY_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_job_category`
--

INSERT INTO `padu_job_category` (`JOB_CATEGORY_ID`, `CATEGORY_NAME`, `SHORT_CODE`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'IT Depertment', 'IT', NULL, 1, 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_journal_publication`
--

DROP TABLE IF EXISTS `padu_journal_publication`;
CREATE TABLE IF NOT EXISTS `padu_journal_publication` (
  `JOURNAL_PUBLICATION_ID` bigint(20) NOT NULL,
  `PUBLICATION_TITLE` varchar(500) DEFAULT NULL,
  `AUTHORS` varchar(2000) DEFAULT NULL,
  `JOURNAL_NAME` varchar(500) DEFAULT NULL,
  `PUBLICATION_DATE` date DEFAULT NULL,
  `VOLUME` varchar(200) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  `FILE_PATH` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`JOURNAL_PUBLICATION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_journal_publication`
--

INSERT INTO `padu_journal_publication` (`JOURNAL_PUBLICATION_ID`, `PUBLICATION_TITLE`, `AUTHORS`, `JOURNAL_NAME`, `PUBLICATION_DATE`, `VOLUME`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `FILE_PATH`) VALUES
(20190001, 'Inference for the Scale Parameter', 'Prokas Chopra', 'Dhaka University Journal of PADU', '2019-03-14', 'Vol. 40, No. 2, pp.125-142', NULL, 1, 2, '2019-03-14', 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL, 'counter_1552554198.jpg'),
(20190002, 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'Habibur Rahaman', 'Dhaka University Journal of PADU', '2019-03-16', 'Vol. 45, No. 7, pp.12-14', NULL, 1, 2, '2019-03-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1200px-রাজু_স্মারক_ভাস্কর্য_1552718303.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `padu_message`
--

DROP TABLE IF EXISTS `padu_message`;
CREATE TABLE IF NOT EXISTS `padu_message` (
  `MESSAGE_ID` bigint(20) NOT NULL,
  `MESSAGE_CONTENT` text,
  `USER_ID` bigint(20) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`MESSAGE_ID`),
  KEY `FK_PM_BU` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_message`
--

INSERT INTO `padu_message` (`MESSAGE_ID`, `MESSAGE_CONTENT`, `USER_ID`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum took a galley of type and scrambled it to make a type specimen book to continue Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum took a galley of type and scrambled it to make a type specimen book to continue</p>', 5, 1, NULL, 1, '2019-03-03', 1, '2019-03-04', NULL, NULL, NULL, NULL, NULL),
(20190002, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum took a galley of type and scrambled it to make a type specimen book to continue Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum took a galley of type and scrambled it to make a type specimen book to continue</p>', 4, 1, NULL, 2, '2019-03-09', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_notice`
--

DROP TABLE IF EXISTS `padu_notice`;
CREATE TABLE IF NOT EXISTS `padu_notice` (
  `NOTICE_ID` bigint(20) NOT NULL,
  `NOTICE_TITLE` varchar(300) DEFAULT NULL,
  `NOTICE_DESC` varchar(4000) DEFAULT NULL,
  `PUBLISH_START_DATE` date DEFAULT NULL,
  `PUBLISH_END_DATE` date DEFAULT NULL,
  `NOTICE_FILE_PATH` varchar(200) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`NOTICE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_notice`
--

INSERT INTO `padu_notice` (`NOTICE_ID`, `NOTICE_TITLE`, `NOTICE_DESC`, `PUBLISH_START_DATE`, `PUBLISH_END_DATE`, `NOTICE_FILE_PATH`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'New Notice', '<p>Proudly taking part in one of the biggest global motor shows on the auto industry calendar the <a href=\"https://www.facebook.com/hashtag/gims2019?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAV5mXgMNNo-eC_UqWUgSUcRaSroTPnL2POEVgN5Tg9jXXaoLVbxIoFKOURSt3PHNKN4-lWYLV2Fs-thT2Nvwzs177Af0vXFBsVRdppZde2qoz-z6zK5VpPdL-wDxg_KenKaC_WpXuXsGkBM41V9ltCxjNGAJYyM51y9qZBypr8r3shE4DCJUz6us4sL-TkFiDvy2ppiTp4ti6Argf1RKvZrg&amp;__tn__=%2ANK-R\">#GIMS2019</a>. With our leading-edge technologies, we contribute towards reducing emissions and engine efficiency</p>', '2019-03-06', '2019-03-31', NULL, 1, NULL, 1, '2019-03-06', 1, '2019-03-06', NULL, NULL, NULL, NULL, NULL),
(20190002, 'Sample Edited', '<p>Proudly taking part in one of the biggest global motor shows on the auto industry calendar the <a href=\"https://www.facebook.com/hashtag/gims2019?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAV5mXgMNNo-eC_UqWUgSUcRaSroTPnL2POEVgN5Tg9jXXaoLVbxIoFKOURSt3PHNKN4-lWYLV2Fs-thT2Nvwzs177Af0vXFBsVRdppZde2qoz-z6zK5VpPdL-wDxg_KenKaC_WpXuXsGkBM41V9ltCxjNGAJYyM51y9qZBypr8r3shE4DCJUz6us4sL-TkFiDvy2ppiTp4ti6Argf1RKvZrg&amp;__tn__=%2ANK-R\">#GIMS2019</a>. With our leading-edge technologies, we contribute towards reducing emissions and engine efficiency</p>', '2019-03-07', '2019-04-02', 'gijgo-material_1552555054.svg', 1, NULL, 1, '2019-03-06', 2, '2019-03-14', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_program`
--

DROP TABLE IF EXISTS `padu_program`;
CREATE TABLE IF NOT EXISTS `padu_program` (
  `PROGRAM_ID` bigint(20) NOT NULL,
  `PROGRAM_NAME` varchar(100) DEFAULT NULL,
  `PROGRAM_CATEGORY_ID` bigint(20) DEFAULT NULL,
  `SHORT_CODE` varchar(10) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`PROGRAM_ID`),
  KEY `FK_PP_PPC` (`PROGRAM_CATEGORY_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_program`
--

INSERT INTO `padu_program` (`PROGRAM_ID`, `PROGRAM_NAME`, `PROGRAM_CATEGORY_ID`, `SHORT_CODE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'Graduation Regular', 20190002, 'R', 1, NULL, 1, '2019-03-05', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190002, 'Under Graduation Regular', 20190001, 'R', 1, NULL, 1, '2019-03-05', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190003, 'Post-Graduation Regular', 20190003, 'R', 1, NULL, 1, '2019-03-11', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190004, 'Post-Graduation Evening', 20190003, 'E', 1, NULL, 2, '2019-03-18', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190005, 'M.Phill Regular', 20190004, 'R', 1, NULL, 2, '2019-03-18', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190006, 'PHD Regular', 20190005, 'R', 1, NULL, 2, '2019-03-18', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_program_admission`
--

DROP TABLE IF EXISTS `padu_program_admission`;
CREATE TABLE IF NOT EXISTS `padu_program_admission` (
  `PROGRAM_ADMISSION_ID` bigint(20) NOT NULL,
  `ADMISSION_TITLE` varchar(100) DEFAULT NULL,
  `ADMISSION_DETAILS` text,
  `PROGRAM_ID` bigint(20) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`PROGRAM_ADMISSION_ID`),
  KEY `FK_PPA_PP` (`PROGRAM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_program_admission`
--

INSERT INTO `padu_program_admission` (`PROGRAM_ADMISSION_ID`, `ADMISSION_TITLE`, `ADMISSION_DETAILS`, `PROGRAM_ID`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, '1st Year Admission For Under Graduation', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20190002, 1, NULL, 1, '2019-03-07', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190002, 'Admission For PHD', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20190006, 1, NULL, 2, '2019-03-18', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190003, 'Admission For M.Phill', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20190005, 1, NULL, 2, '2019-03-18', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190004, '1st Year Admission For Post-Graduation', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20190003, 1, NULL, 2, '2019-03-18', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190005, '1st Year Admission For Graduation', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20190001, 1, NULL, 2, '2019-03-18', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_program_admission_faq`
--

DROP TABLE IF EXISTS `padu_program_admission_faq`;
CREATE TABLE IF NOT EXISTS `padu_program_admission_faq` (
  `PROGRAM_ADMISSION_FAQ_ID` bigint(20) NOT NULL,
  `FAQ_SL_NO` int(11) DEFAULT NULL,
  `FAQ_Q` varchar(1000) DEFAULT NULL,
  `FAQ_A` text,
  `PROGRAM_ADMISSION_ID` bigint(20) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`PROGRAM_ADMISSION_FAQ_ID`),
  KEY `FK_PPAF_PPA` (`PROGRAM_ADMISSION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_program_admission_faq`
--

INSERT INTO `padu_program_admission_faq` (`PROGRAM_ADMISSION_FAQ_ID`, `FAQ_SL_NO`, `FAQ_Q`, `FAQ_A`, `PROGRAM_ADMISSION_ID`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 1, 'Laravel Rule Validation for Numbers ?', 'digits_between :min,max\r\n\r\n    The field under validation must have a length between the given min and max.\r\n\r\n    numeric\r\n\r\n    The field under validation must have a numeric value.\r\n\r\n    max:value\r\n\r\n    The field under validation must be less than or equal to a maximum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.\r\n\r\n    min:value\r\n\r\n    The field under validation must have a minimum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.', 20190001, 1, NULL, 1, '2019-03-07', 1, '2019-03-07', NULL, NULL, NULL, NULL, NULL),
(20190002, 1, 'Laravel Rule Validation for Numbers ?', '<p>digits_between :min,max The field under validation must have a length between the given min and max. numeric The field under validation must have a numeric value. max:value The field under validation must be less than or equal to a maximum value. Strings, numerics, and files are evaluated in the same fashion as the size rule. min:value The field under validation must have a minimum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.</p>', 20190001, 1, NULL, 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190003, 1, 'Laravel Rule Validation for Numbers ?', '<p>digits_between :min,max The field under validation must have a length between the given min and max. numeric The field under validation must have a numeric value. max:value The field under validation must be less than or equal to a maximum value. Strings, numerics, and files are evaluated in the same fashion as the size rule. min:value The field under validation must have a minimum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.</p>', 20190005, 1, NULL, 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_program_category`
--

DROP TABLE IF EXISTS `padu_program_category`;
CREATE TABLE IF NOT EXISTS `padu_program_category` (
  `PROGRAM_CATEGORY_ID` bigint(20) NOT NULL,
  `CATEGORY_NAME` varchar(100) DEFAULT NULL,
  `SHORT_CODE` varchar(10) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`PROGRAM_CATEGORY_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_program_category`
--

INSERT INTO `padu_program_category` (`PROGRAM_CATEGORY_ID`, `CATEGORY_NAME`, `SHORT_CODE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'Under Graduation', 'U', 1, NULL, 1, '2019-03-05', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190002, 'Graduation', 'G', 1, NULL, 1, '2019-03-05', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190003, 'Post-Graduation', 'P', 1, NULL, 1, '2019-03-11', 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL),
(20190004, 'M.Phill', 'M', 1, NULL, 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190005, 'PHD', 'PH', 1, NULL, 2, '2019-03-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padu_slide_image`
--

DROP TABLE IF EXISTS `padu_slide_image`;
CREATE TABLE IF NOT EXISTS `padu_slide_image` (
  `SLIDE_IMAGE_ID` bigint(20) NOT NULL,
  `IMAGE_TITLE` varchar(500) DEFAULT NULL,
  `IMAGE_DESC` varchar(2000) DEFAULT NULL,
  `IMAGE_PATH` varchar(500) DEFAULT NULL,
  `IMAGE_PAGE` varchar(50) DEFAULT NULL,
  `PAGE_SHORT_CODE` varchar(10) DEFAULT NULL,
  `PAGE_LOC` varchar(100) DEFAULT NULL,
  `PAGE_LOC_SHORT_CODE` varchar(10) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`SLIDE_IMAGE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padu_slide_image`
--

INSERT INTO `padu_slide_image` (`SLIDE_IMAGE_ID`, `IMAGE_TITLE`, `IMAGE_DESC`, `IMAGE_PATH`, `IMAGE_PAGE`, `PAGE_SHORT_CODE`, `PAGE_LOC`, `PAGE_LOC_SHORT_CODE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'Department of Public Administration', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1</p>', 'slider1_1552106713.jpg', NULL, NULL, NULL, NULL, 1, NULL, 2, '2019-03-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190002, 'Department of Public Administration', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1</p>', '258_1551281874_1552106806.jpg', NULL, NULL, NULL, NULL, 1, NULL, 2, '2019-03-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190003, 'Department of Public Administration', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1</p>', '03_gfint_1_1551277706_1552106821.jpg', NULL, NULL, NULL, NULL, 1, NULL, 2, '2019-03-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `USER_TITLE` varchar(20) DEFAULT NULL,
  `DESIGNATION_ACADEMIC` int(11) DEFAULT NULL,
  `DESIGNATION_ADMIN` int(11) DEFAULT NULL,
  `QUALIFICATION` varchar(500) DEFAULT NULL,
  `PROFILE` text,
  `PROFILE_IMAGE_PATH` varchar(500) DEFAULT NULL,
  `LOGIN_USER` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `GENDER` int(11) DEFAULT NULL,
  `BLOOD_GROUP` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `FATHER_NAME` varchar(200) DEFAULT NULL,
  `MOTHER_NAME` varchar(200) DEFAULT NULL,
  `PROFESSION` varchar(100) DEFAULT NULL,
  `PRESENT_ADDRESS` varchar(500) DEFAULT NULL,
  `PERMANENT_ADDRESS` varchar(500) DEFAULT NULL,
  `NATIONAL_ID` varchar(50) DEFAULT NULL,
  `USER_TYPE_ID` int(11) DEFAULT NULL,
  `SPOUSE_NAME` varchar(500) DEFAULT NULL,
  `USER_IMAGE_PATH` text,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  `CONTACT_PHONE` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_BU_DADM_BD` (`DESIGNATION_ACADEMIC`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `USER_TITLE`, `DESIGNATION_ACADEMIC`, `DESIGNATION_ADMIN`, `QUALIFICATION`, `PROFILE`, `PROFILE_IMAGE_PATH`, `LOGIN_USER`, `password`, `DOB`, `GENDER`, `BLOOD_GROUP`, `email`, `FATHER_NAME`, `MOTHER_NAME`, `PROFESSION`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`, `NATIONAL_ID`, `USER_TYPE_ID`, `SPOUSE_NAME`, `USER_IMAGE_PATH`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `CONTACT_PHONE`) VALUES
(1, 'Photos Editing Expert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$LfTeEdUc5o9V0SS7TMG4VeJWtA5g9Jx609OC0TqhTvfcAe3FUa2Pe', NULL, NULL, NULL, '123@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'HR Rahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$28YgvcDKmwEuqfCKoMNpheINdK6HRP19.z7IgDgjcxgn2pYBIBrQ2', NULL, NULL, NULL, 'test@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'HR Rahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$XoYpMheVQY2TeTvuh0gFw.hnIg2G.VmQ/JwrTrUpH2mG6atL.Trre', NULL, NULL, NULL, 'admin@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Ridoy Khan', NULL, NULL, 20190002, 'BSC Enginner', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '1476420_1392047767714473_982237758_n_1551623423.jpg', NULL, NULL, '2018-09-01', 1, NULL, 'sample@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, '2019-03-03', 2, '2019-03-16', NULL, NULL, NULL, NULL, NULL, '12457893321'),
(5, 'Habib', NULL, NULL, 20190001, 'BSC Enginner', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '17309872_1826341920951720_3025312546603752469_n_1551705102.jpg', NULL, NULL, '2018-11-01', 1, NULL, '789@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, '2019-03-04', 2, '2019-03-16', NULL, NULL, NULL, NULL, NULL, '01740473189'),
(6, 'Rahim Uddin', NULL, 20190003, NULL, 'HSC', NULL, 'IMG-20170305-WA0036.jpg (1)_1552713125.jpg', NULL, NULL, '2019-03-01', 1, NULL, 'rahimuddin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 1, NULL, 2, '2019-03-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '+88-8615147 / 4010, 4011');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
