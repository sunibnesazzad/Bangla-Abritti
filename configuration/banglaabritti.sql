-- phpMyAdmin SQL Dump
-- version 4.8.1-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2018 at 09:01 AM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banglaabritti`
--
/*
DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`banglaabritti`@`%` FUNCTION `FNC_GETPK` (`V_TABLE` CHAR(33)) RETURNS BIGINT(11) begin
 update TBL_SEQUENCE set ID=last_insert_id(ID+1) where TABLE_NAME = V_TABLE LIMIT 1;
 SELECT DATE_FORMAT(NOW(),"%Y%m") INTO @DATE;
 SELECT LPAD(ID,SL_LENGTH,0) INTO @V_ID FROM TBL_SEQUENCE WHERE TABLE_NAME = V_TABLE LIMIT 1;
 SELECT CONCAT (@DATE,@V_ID) INTO @PKID;
 return @PKID;
end$$

DELIMITER ;

*/

-- --------------------------------------------------------

--
-- Table structure for table `ba_author`
--

CREATE TABLE `ba_author` (
  `AUTHOR_ID` bigint(20) NOT NULL DEFAULT '0',
  `AUTHOR_NAME` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AUTHOR_TYPE_ID` int(11) DEFAULT NULL,
  `COUNTRY_BIRTH` int(11) DEFAULT NULL,
  `COUNTRY_LIVING` int(11) DEFAULT NULL,
  `AUTHOR_DOB` date DEFAULT NULL,
  `AUTHOR_DEATH_DATE` date DEFAULT NULL,
  `AUTHOR_BIBLIOGRAPHY` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AUTHOR_IMAGE` blob,
  `LIVE_FLAG` int(11) DEFAULT NULL,
  `PRESENT_ADDRESS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERMANENT_ADDRESS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRESENT_CITY` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRESENT_DISTRICT` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERMANENT_CITY` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERMANENT_DISTRICT` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AUTHOR_EMAIL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_CODE` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_author`
--

INSERT INTO `ba_author` (`AUTHOR_ID`, `AUTHOR_NAME`, `AUTHOR_TYPE_ID`, `COUNTRY_BIRTH`, `COUNTRY_LIVING`, `AUTHOR_DOB`, `AUTHOR_DEATH_DATE`, `AUTHOR_BIBLIOGRAPHY`, `AUTHOR_IMAGE`, `LIVE_FLAG`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`, `PRESENT_CITY`, `PRESENT_DISTRICT`, `PERMANENT_CITY`, `PERMANENT_DISTRICT`, `AUTHOR_EMAIL`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `SHORT_CODE`) VALUES
(20180900039, 'কাজী নজরুল ইসলাম', 201809001, 201809017, 201809017, '1899-05-25', '1976-08-29', 'বিংশ শতাব্দীর বাংলা মননে কাজী নজরুল ইসলামের মর্যাদা ও গুরুত্ব অপরিসীম। একাধারে কবি, সাহিত্যিক, সংগীতজ্ঞ, সাংবাদিক, সম্পাদক, রাজনীতিবিদ এবং সৈনিক হিসেবে অন্যায় ও অবিচারের বিরুদ্ধে নজরুল সর্বদাই ছিলেন সোচ্চার। তাঁর কবিতা ও গানে এই মনোভাবই প্রতিফলিত হয়েছে। অগ্নিবীণা হাতে তাঁর প্রবেশ, ধূমকেতুর মতো তাঁর প্রকাশ। যেমন লেখাতে বিদ্রোহী, তেমনই জীবনে – কাজেই \"বিদ্রোহী কবি\", তাঁর জন্ম ও মৃত্যুবার্ষিকী বিশেষ মর্যাদার সঙ্গে উভয় বাংলাতে প্রতি বৎসর উদযাপিত হয়ে থাকে।', 0x433a5c77616d7036345c746d705c706870464535462e746d70, NULL, '৩৭৩/ডি/১ ফ্রী স্কুল স্ট্রিট', 'চুরুলিয়া , বেঙ্গল প্রেসিডেন্সী', 'ঢাকা', 'ঢাকা', 'ঢাকা', 'পশ্চিমবঙ্গ', 'kazi@gmail.com', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THS'),
(20180900040, 'রবীন্দ্রনাথ ঠাকুর', 201809001, 201809017, 201809017, '1861-05-07', '1981-08-07', 'রবীন্দ্রনাথ ঠাকুর কলকাতার এক ধনাঢ্য ও সংস্কৃতিবান ব্রাহ্ম পিরালী ব্রাহ্মণ পরিবারে জন্মগ্রহণ করেন।[১৫][১৬][১৭][১৮] বাল্যকালে প্রথাগত বিদ্যালয়-শিক্ষা তিনি গ্রহণ করেননি; গৃহশিক্ষক রেখে বাড়িতেই তাঁর শিক্ষার ব্যবস্থা করা হয়েছিল।[১৯] আট বছর বয়সে তিনি কবিতা লেখা শুরু করেন।ক[›][২০] ১৮৭৪ সালে তত্ত্ববোধিনী পত্রিকা-এ তাঁর \"অভিলাষ\" কবিতাটি প্রকাশিত হয়। এটিই ছিল তাঁর প্রথম প্রকাশিত রচনা।[২১] ১৮৭৮ সালে মাত্র সতেরো বছর বয়সে রবীন্দ্রনাথ প্রথমবার ইংল্যান্ডে যান।[২২] ১৮৮৩ সালে মৃণালিনী দেবীর সঙ্গে তাঁর বিবাহ হয়।[২২] ১৮৯০ সাল থেকে রবীন্দ্রনাথ পূর্ববঙ্গের শিলাইদহের জমিদারি এস্টেটে বসবাস শুরু করেন।[২২] ১৯০১ সালে তিনি পশ্চিমবঙ্গের শান্তিনিকেতনে ব্রহ্মচর্যাশ্রম প্রতিষ্ঠা করেন এবং সেখানেই পাকাপাকিভাবে বসবাস শুরু করেন।[২৩] ১৯০২ সালে তাঁর পত্নীবিয়োগ হয়।[২৩] ১৯০৫ সালে তিনি বঙ্গভঙ্গ-বিরোধী আন্দোলনে জড়িয়ে পড়েন।[২৩] ১৯১৫ সালে ব্রিটিশ সরকার তাঁকে নাইট উপাধিতে ভূষিত করেন।[২৩] কিন্তু ১৯১৯ সালে জালিয়ানওয়ালাবাগ হত্যাকাণ্ডের প্রতিবাদে তিনি সেই উপাধি ত্যাগ করেন।[২৪] ১৯২১ সালে গ্রামোন্নয়নের জন্য তিনি শ্রীনিকেতন নামে একটি সংস্থা প্রতিষ্ঠা করেন।[২৫] ১৯২৩ সালে আনুষ্ঠানিকভাবে বিশ্বভারতী প্রতিষ্ঠিত হয়।[২৬] দীর্ঘজীবনে তিনি বহুবার বিদেশ ভ্রমণ করেন এবং সমগ্র বিশ্বে বিশ্বভ্রাতৃত্বের বাণী প্রচার করেন।[২৫] ১৯৪১ সালে দীর্ঘ রোগভোগের পর কলকাতার পৈত্রিক বাসভবনেই তাঁর মৃত্যু হয়।', 0x433a5c77616d7036345c746d705c706870443838352e746d70, NULL, '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', 'ঢাকা', 'ঢাকা', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', 'ঢাকা', 'rabi@gmail.com', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KAZI'),
(20180900041, 'মাইকেল মধুসূদন দত্ত', 201809001, 201809017, 201809017, '2018-09-21', '2018-09-27', 'ব্রিটিশ ভারতের যশোর জেলার এক সম্ভ্রান্ত কায়স্থ বংশে জন্ম হলেও মধুসূদন যৌবনে খ্রিষ্টধর্ম গ্রহণ করে মাইকেল মধুসূদন নাম গ্রহণ করেন এবং পাশ্চাত্য সাহিত্যের দুর্নিবার আকর্ষণবশত ইংরেজি ভাষায় সাহিত্য রচনায় মনোনিবেশ করেন। জীবনের দ্বিতীয় পর্বে মধুসূদন আকৃষ্ট হন নিজের মাতৃভাষার প্রতি। এই সময়েই তিনি বাংলায় নাটক, প্রহসন ও কাব্যরচনা করতে শুরু করেন।\r\n\r\nমাইকেল মধুসূদন বাংলা ভাষায় সনেট ও অমিত্রাক্ষর ছন্দের প্রবর্তক। তাঁর সর্বশ্রেষ্ঠ কীর্তি অমিত্রাক্ষর ছন্দে রামায়ণের উপাখ্যান অবলম্বনে রচিত মেঘনাদবধ কাব্য নামক মহাকাব্য। তাঁর অন্যান্য উল্লেখযোগ্য গ্রন্থাবলি হলো দ্য ক্যাপটিভ লেডি, শর্মিষ্ঠা, কৃষ্ণকুমারী (নাটক), পদ্মাবতী (নাটক), বুড়ো শালিকের ঘাড়ে রোঁ, একেই কি বলে সভ্যতা, তিলোত্তমাসম্ভব কাব্য, বীরাঙ্গনা কাব্য, ব্রজাঙ্গনা কাব্য, চতুর্দশপদী কবিতাবলী, হেকটর বধ [৩] ইত্যাদি। মাইকেলের ব্যক্তিগত জীবন ছিল নাটকীয় এবং বেদনাঘন। মাত্র ৪৯ বছর বয়সে কলকাতায় মৃত্যু হয় এই মহাকবির।', NULL, NULL, 'পদ্মার পাড়', 'পাদ্মার পাড়', 'ঢাকা', 'ঢাকা', 'ঢাকা', 'ঢাকা', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AK'),
(20180900042, 'সুকান্ত', 201809001, 201809017, 201809017, '2018-09-22', '2018-10-26', 'শূকাণ্টফসদফ লজক্সদফ ক্কলাজসদ ফক্কলসদজফ ক্সজফ ক্সজফ কজ ফক্সদজফ ক্সদজ ক্লজস ক্লদফজ ক্লসজফ ক্লসজদ ফ্লক্লজ ক্লসদজফ ল স্কজফ স্কজ  ক্লসদজফ ক্ল ক্লসজফ  স্লদকফ জ ক্সদজফ  সদক্লজফ সদক ফক্ল সদক্লফজ ক্লসজ ফক্লসদজ ফ সদক্লফজ ফস্ক ফ স্ক্লজফ', NULL, NULL, 'সাদ আসদফসদ আসদফ সদফ আসদফসদ আসদফাসদফ আসদফাসদফ আসদফাসদফ আসদফাসদফ', 'আক্সদফজ স্কাজদফ কজ ক্সজদফ ক্লসজদ ফক্লজ সদক্লজ ফ স্ক্লদজফ সজ ন্দফক জ', 'ঢাকা', 'ঢাকা', 'পাবনা', 'পাবনা', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ABC'),
(20180900043, 'তসলিমা নাসরিন', 201809001, 201809017, 201809017, '2018-09-14', NULL, '্তেস্ত', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RRR'),
(20180900044, 'Mohammad Tanvir Haque', 201809001, 201809017, 201809003, '2018-09-19', '2018-09-27', 'ths ths testing testing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'THS'),
(20180900045, 'Mohammad Tanvir Haque', 201809001, 201809002, 201809004, '2018-09-19', '2018-09-19', 'sadsad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KMR'),
(20180900046, 'sdasdsa', 201809001, 201809003, 201809005, '2018-09-11', '2018-09-28', 'sadsadsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BMW'),
(20180900047, 'sadsada', 201809001, 201809003, 201809003, '2018-09-19', '2018-09-25', 'sadsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KKR'),
(20180900048, 'কবির নামঃ', 201809001, 201809003, 201809007, '2018-09-05', '2018-09-27', 'new new new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KKR'),
(20180900049, 'Janina KI hobe But english hobe i guess', 201809001, 201809005, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yaaay'),
(20180900050, 'বিজিটেক', 201809001, 201809017, 201809017, '2018-09-26', '2018-10-18', 'তেস্ত', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BZ'),
(20180900051, 'বিজিটেক১', 201809001, 201809017, 201809017, NULL, NULL, 'টেস্ট', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ab'),
(20180900052, 'বিজিতেক২', 201809001, 201809017, 201809017, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tt'),
(20181000053, 'KOSM THS', 201809001, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TTHHSS');

-- --------------------------------------------------------

--
-- Table structure for table `ba_author_type`
--

CREATE TABLE `ba_author_type` (
  `AUTHOR_TYPE_ID` int(11) NOT NULL DEFAULT '0',
  `TYPE_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_CODE` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_author_type`
--

INSERT INTO `ba_author_type` (`AUTHOR_TYPE_ID`, `TYPE_NAME`, `SHORT_CODE`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(0, 'লেখক', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809001, 'কবি ', 'কবি ', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba_book`
--

CREATE TABLE `ba_book` (
  `BOOK_ID` bigint(20) NOT NULL DEFAULT '0',
  `BOOK_NAME` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BOOK_CATEGORY_ID` int(11) DEFAULT NULL,
  `AUTHOR_ID` bigint(11) DEFAULT NULL,
  `BOOK_DESC` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FIRST_PUBLICATION_DATE` date DEFAULT NULL,
  `FIRST_PUBLICATION_DESC` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PUBLISHER_ID` bigint(11) DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_book`
--

INSERT INTO `ba_book` (`BOOK_ID`, `BOOK_NAME`, `BOOK_CATEGORY_ID`, `AUTHOR_ID`, `BOOK_DESC`, `FIRST_PUBLICATION_DATE`, `FIRST_PUBLICATION_DESC`, `PUBLISHER_ID`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20180900011, 'চখের বালি', NULL, 20180900040, 'চোখের বালি ( ইংরেজি: Chokher Bali; literally translated to \"sand in the eye\", figuratively to \"constant irritant\") রবীন্দ্রনাথ ঠাকুরের চোখের বালি উপন্যাস অবলম্বনে চিত্রায়িত। ২০০৩ সালে এটি পরিচালনা করেছেন ঋতুপর্ণ ঘোষ এবং অভিনয় করেছেন ঐশ্বরিয়া রাই বচ্চন প্রসেনজিৎ চট্টোপাধ্যায় রাইমা সেন। ঐশ্বরিয়া এখানে \'বিনোদিনী\' ও রাইমা সেন \'আশালতা\' চরিত্রে অভিনয় করেন। পরে এটি হিন্দিতে মুক্তি পায় এবং এই ভাষাতেই আন্তর্জাতিক মুক্তি দেয়া হয়।\r\n\r\nমুক্তির পরে, চোখের বালি ইতিবাচক সমালোচনা এবং ভালো ব্যবসা করে।[১][২][৩]\r\n\r\nচোখের বালি সেরা বাংলা চলচ্চিত্র হিসেবে জাতীয় চলচ্চিত্র অ্যাওয়ার্ড লাভ করে। চলচ্চিত্রটি ৩৪তম \'ইন্টারন্যাশনাল ফিল্ম ফেস্টিভাল অফ ইন্ডিয়া\'-তে প্রদর্শিত হয়।', '2018-09-12', 'চখের বালি আই প্রকাশনার প্রথম প্রকাশনা । চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।', 20180900007, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900012, 'গীতাঞ্জলী', 201809001, 20180900040, 'গীতাঞ্জলি হল রবীন্দ্রনাথ ঠাকুরের লেখা একটি কাব্যগ্রন্থ। এই বইয়ে মোট ১৫৭টি গীতিকবিতা সংকলিত হয়েছে। কবিতাগুলি ব্রাহ্ম-ভাবাপন্ন ভক্তিমূলক রচনা। এর বেশিরভাগ কবিতাতেই রবীন্দ্রনাথ নিজে সুরারোপ করেছিলেন। ১৯০৮-০৯ সালে বিভিন্ন পত্রপত্রিকায় এই কবিতাগুলি প্রকাশিত হয়। এরপর ১৯১০ সালে গীতাঞ্জলি কাব্যগ্রন্থটি প্রকাশিত হয়।\r\n\r\n১৯১২ সালে রবীন্দ্রনাথের সং অফারিংস (ইংরেজি: Song Offerings) কাব্যগ্রন্থটি প্রকাশিত হয়। এতে গীতাঞ্জলি ও সমসাময়িক আরও কয়েকটি কাব্যগ্রন্থের কবিতা রবীন্দ্রনাথ নিজে অনুবাদ করে প্রকাশ করেন। ১৯১৩ সালে ইংরেজি কাব্যগ্রন্থটির জন্য রবীন্দ্রনাথ সাহিত্যে নোবেল পুরস্কার পেয়েছিলেন।\r\n\r\n২০১০ সালে গীতাঞ্জলি প্রকাশের শতবর্ষ-পুর্তি উপলক্ষে কলকাতা মেট্রোর নাকতলা স্টেশনটির নামকরণ করা হয় \"গীতাঞ্জলি মেট্রো স্টেশন\"।[১][২]', '2018-09-04', 'চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।চখের বালি আই প্রকাশনার প্রথম প্রকাশনা ।', 20180900006, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900013, 'ssxczxcxz', NULL, 20180900046, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900014, 'নির্বাচন করুন', NULL, 20180900045, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900015, 'MTHS', 201809001, NULL, NULL, NULL, NULL, 20180900007, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900016, 'living', NULL, 20180900045, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900017, 'new book', 201809002, 20180900039, 'safasd', '2017-11-30', NULL, 20180900009, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900018, 'Living With Tearsaaaaaaaaaa', 201809001, 20180900045, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900019, 'dsadsa', 201809002, 20180900045, NULL, NULL, NULL, 20180900010, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20181000020, 'asdasdasdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20181000021, 'NEW BOOK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba_book_category`
--

CREATE TABLE `ba_book_category` (
  `BOOK_CATEGORY_ID` bigint(20) NOT NULL DEFAULT '0',
  `CATEGORY_NAME` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_CODE` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LEVEL_NO` int(11) DEFAULT NULL,
  `PARENT_BOOK_CATEGGORY_ID` int(11) DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_book_category`
--

INSERT INTO `ba_book_category` (`BOOK_CATEGORY_ID`, `CATEGORY_NAME`, `SHORT_CODE`, `LEVEL_NO`, `PARENT_BOOK_CATEGGORY_ID`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(201809001, 'কাব্য', 'kabbo', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809002, 'মহাকাব্য', 'MKB', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809003, 'হাইকু', 'HKU', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba_poem`
--

CREATE TABLE `ba_poem` (
  `POEM_ID` bigint(20) NOT NULL DEFAULT '0',
  `POEM_NAME` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `POEM_TYPE_ID` int(11) DEFAULT NULL,
  `POEM_TEXT` longtext COLLATE utf8_unicode_ci,
  `AUTHOR_ID` bigint(20) DEFAULT NULL,
  `BOOK_ID` bigint(20) DEFAULT NULL,
  `FIRST_PUBLICATION_DATE` date DEFAULT NULL,
  `FIRST_PUBLICATION_DESC` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PUBLISHER_ID` bigint(20) DEFAULT NULL,
  `POEM_DESC` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_poem`
--

INSERT INTO `ba_poem` (`POEM_ID`, `POEM_NAME`, `POEM_TYPE_ID`, `POEM_TEXT`, `AUTHOR_ID`, `BOOK_ID`, `FIRST_PUBLICATION_DATE`, `FIRST_PUBLICATION_DESC`, `PUBLISHER_ID`, `POEM_DESC`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20180900010, 'notuner gaaan', NULL, '<p><span style=\"color: #222222; font-family: sans-serif;\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspচল চল চল! chol chol</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">ঊর্দ্ধ গগনে বাজে মাদল</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">নিম্নে উতলা ধরণি তল,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">অরুণ প্রাতের তরুণ দল</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">চল রে চল রে চল</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">চল চল চল।।</span><br style=\"color: #222222; font-family: sans-serif;\" /><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">ঊষার দুয়ারে হানি\' আঘাত</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">আমরা আনিব রাঙা প্রভাত,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">আমরা টুটাব তিমির রাত,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">বাধার বিন্ধ্যাচল।</span><br style=\"color: #222222; font-family: sans-serif;\" /><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">নব নবীনের গাহিয়া গান</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">সজীব করিব মহাশ্মশান,</span><span class=\"reference\" style=\"font-size: 11.2px; color: #222222; font-family: sans-serif;\"><sup id=\"ref_ক\" class=\"plainlinksneverexpand\" style=\"line-height: 1; font-size: 8.96px;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://bn.wikipedia.org/wiki/%E0%A6%A8%E0%A6%A4%E0%A7%81%E0%A6%A8%E0%A7%87%E0%A6%B0_%E0%A6%97%E0%A6%BE%E0%A6%A8#cnote_%E0%A6%95\">ক[&rsaquo;]</a></sup></span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">আমরা দানিব নতুন প্রাণ</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">বাহুতে নবীন বল!</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">চল রে নও-জোয়ান,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">শোন রে পাতিয়া কান</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">মৃত্যু-তরণ-দুয়ারে দুয়ারে</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">জীবনের আহবান।</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">ভাঙ রে ভাঙ আগল,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">চল রে চল রে চল</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">চল চল চল।।</span><br style=\"color: #222222; font-family: sans-serif;\" /><br style=\"color: #222222; font-family: sans-serif;\" /><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">কোরাসঃ</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">ঊর্ধ্ব আদেশ হানিছে বাজ,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">শহীদী-ঈদের সেনারা সাজ,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">দিকে দিকে চলে কুচ-কাওয়াজ&mdash;</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">খোল রে নিদ-মহল!</span><br style=\"color: #222222; font-family: sans-serif;\" /><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">কবে সে খেয়ালী বাদশাহী,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">সেই সে অতীতে আজো চাহি\'</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">যাস মুসাফির গান গাহি\'</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">ফেলিস অশ্রুজল।</span><br style=\"color: #222222; font-family: sans-serif;\" /><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">যাক রে তখত-তাউস</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">জাগ রে জাগ বেহুঁশ।</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">ডুবিল রে দেখ কত পারস্য</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">কত রোম গ্রিক রুশ,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">জাগিল তা\'রা সকল,</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">জেগে ওঠ হীনবল!</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">আমরা গড়িব নতুন করিয়া</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">ধুলায় তাজমহল!</span><br style=\"color: #222222; font-family: sans-serif;\" /><span style=\"color: #222222; font-family: sans-serif;\">চল্&zwnj; চল্&zwnj; চল্।।</span></p>', 20180900039, 20180900011, '2018-09-19', 'নতুনের গান বাংলাদেশের জাতীয় কবি কাজী নজরুল ইসলাম কর্তৃক ১৯২৯ খ্রিস্টাব্দে রচিত এবং সুরারোপিত সন্ধ্যা কাব্যগ্রন্থের অন্তর্গত একটি গান। দাদরা তালের এই সঙ্গীতটি ১৯৭২ সালের ১৩ই জানুয়ারি অনুষ্ঠিত বাংলাদেশের তৎকালীন মন্ত্রীসভার প্রথম বৈঠকে বাংলাদেশের রণ-সঙ্গীত হিসেবে নির্বাচন করা হয়।[১] বাংলাদেশের যে কোনো সামরিক অনুষ্ঠানে এই গানটির ২১ লাইন যন্ত্রসঙ্গীতে বাজানো হয়।[২][৩] গানটি ২০০৬ সালে বিবিসি বাংলার করা জরিপে সর্বকালের শ্রেষ্ঠ বিশটি বাংলা গানের ১৮তম স্থান অধিকার করে।[৪]', 20180900007, 'নতুনের গান বাংলাদেশের জাতীয় কবি কাজী নজরুল ইসলাম কর্তৃক ১৯২৯ খ্রিস্টাব্দে রচিত এবং সুরারোপিত সন্ধ্যা কাব্যগ্রন্থের অন্তর্গত একটি গান। দাদরা তালের এই সঙ্গীতটি ১৯৭২ সালের ১৩ই জানুয়ারি অনুষ্ঠিত বাংলাদেশের তৎকালীন মন্ত্রীসভার প্রথম বৈঠকে বাংলাদেশের রণ-সঙ্গীত হিসেবে নির্বাচন করা হয়।[১] বাংলাদেশের যে কোনো সামরিক অনুষ্ঠানে এই গানটির ২১ লাইন যন্ত্রসঙ্গীতে বাজানো হয়।[২][৩] গানটি ২০০৬ সালে বিবিসি বাংলার করা জরিপে সর্বকালের শ্রেষ্ঠ বিশটি বাংলা গানের ১৮তম স্থান অধিকার করে।[৪]', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900011, 'বৃক্ষ', NULL, '<p>্রিক্ষতেস্ত</p>\r\n<p>সাদফাসদফ</p>\r\n<p>&nbsp; আস্ফ</p>\r\n<p>আসদফ</p>\r\n<p>&nbsp; সদফ</p>\r\n<p>সদ</p>\r\n<p>ফ</p>\r\n<p>সদ</p>\r\n<p>ফ</p>\r\n<p>সদফ</p>\r\n<p>সদ</p>\r\n<p>ফ</p>\r\n<p>সদফ</p>\r\n<p>সদ</p>\r\n<p>ফ</p>\r\n<p>সদফ</p>\r\n<p>সদ</p>\r\n<p>ফ</p>\r\n<p>সদফ</p>\r\n<p>সদফ</p>\r\n<p>সদফ</p>\r\n<p>সদফ</p>\r\n<p>সদফসদ</p>\r\n<p>ফ</p>', 20180900040, 20180900012, '2018-09-03', NULL, 20180900007, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900012, 'মানুষ এই শব্দটি আমাকে আলোড়িত করে', NULL, '<p>দ</p>', 20180900043, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900013, 'sddsadsasadsad', NULL, '<p>sadsadas</p>', 20180900043, 20180900011, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900014, 'sadasd', NULL, '<p>sadsdasd</p>', 20180900044, 20180900018, NULL, NULL, 20180900012, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900015, 'aaaaaaaaaaaaaaa', NULL, '<p>sd</p>', 20180900050, NULL, NULL, NULL, 20180900012, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900016, 'Twins Bay and Crishtmas', NULL, '<p style=\"text-align: justify; padding-left: 30px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>&nbsp; &nbsp; &nbsp;ঊষার</strong> দুয়ারে হানি\' আঘাত</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; আমরা আনিব রাঙা প্রভাত,</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; আমরা টুটাব তিমির রাত,</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<em>বাধার বিন্ধ্যাচল।</em></span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <em><strong>&nbsp; নব নবীনের গাহিয়া গান</strong></em></span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><em><strong><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;সজীব করিব মহাশ্মশান,</span><span class=\"reference\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><span id=\"ref_ক\" class=\"plainlinksneverexpand\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; position: relative; font-size: 8.96px; line-height: 1; vertical-align: baseline; top: -0.5em;\"><a style=\"box-sizing: border-box; margin: 0px; padding: 0px; background: none; color: #0b0080; text-decoration-line: none; -webkit-font-smoothing: antialiased; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif;\" href=\"https://bn.wikipedia.org/wiki/%E0%A6%A8%E0%A6%A4%E0%A7%81%E0%A6%A8%E0%A7%87%E0%A6%B0_%E0%A6%97%E0%A6%BE%E0%A6%A8#cnote_%E0%A6%95\">ক[&rsaquo;]</a></span></span></strong></em><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;আমরা দানিব নতুন প্রাণ</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; বাহুতে নবীন বল!</span></p>\r\n<p style=\"text-align: justify; padding-left: 30px;\">&nbsp;</p>\r\n<p style=\"text-align: justify; padding-left: 30px;\"><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<em> &nbsp; &nbsp;চল রে নও-জোয়ান,</em></span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><em><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; শোন রে পাতিয়া কান</span></em><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">মৃত্যু-তরণ-দুয়ারে দুয়ারে</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">জীবনের আহবান।</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ভাঙ রে ভাঙ আগল,</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; চল রে চল রে চল</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">চল চল চল।।</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">কোরাসঃ</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">ঊর্ধ্ব আদেশ হানিছে বাজ,</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">শহীদী-ঈদের সেনারা সাজ,</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">দিকে দিকে চলে কুচ-কাওয়াজ&mdash;</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">খোল রে নিদ-মহল!</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">কবে সে খেয়ালী বাদশাহী,</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">সেই সে অতীতে আজো চাহি\'</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">যাস মুসাফির গান গাহি\'</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\" /><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 16px; color: #222222; font-family: sans-serif;\">ফেলিস অশ্রুজল।</span></p>', 20180900045, 20180900012, NULL, NULL, 20180900012, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900017, 'বাণী (লিপিকা)', NULL, '<p>তেস্ত</p>', 20180900040, 20180900015, NULL, NULL, 20180900012, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900018, 'যে জন দিবসে', NULL, '<p>তেস্ত</p>', 20180900049, 20180900015, NULL, NULL, 20180900009, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20181000019, 'NP', NULL, '<p>HAKAI</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba_poem_type`
--

CREATE TABLE `ba_poem_type` (
  `POEM_TYPE_ID` int(11) NOT NULL DEFAULT '0',
  `POEM_TYPE_NAME` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `POEM_TYPE_DESC` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_CODE` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ba_publisher`
--

CREATE TABLE `ba_publisher` (
  `PUBLISHER_ID` bigint(20) NOT NULL DEFAULT '0',
  `PUBLISHER_NAME` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PUBLISHER_ADDRESS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PUBLISHER_COUNTRY` int(11) DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_publisher`
--

INSERT INTO `ba_publisher` (`PUBLISHER_ID`, `PUBLISHER_NAME`, `PUBLISHER_ADDRESS`, `PUBLISHER_COUNTRY`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20180900006, 'মিলেনিয়াম', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট, ঢাকা, বাংলাদেশ', 201809008, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900007, 'আস্থা প্রকাশনা', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট, ঢাকা , বাংলাদেশ', 201809003, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900008, 'চের‍ি ফাইর পাবলিকেসন', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট, ঢাকা, বাংলাদেশ', 201809006, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900009, 'FDDF', 'SADSADASDSA', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900010, 'Hey there', NULL, 201809006, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900011, 'চের‍ি ফাইর পাবলিকেসন', '111', 201809006, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20180900012, 'sdasdas', NULL, 201809006, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20181000013, 'Hey yaa', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba_recitation`
--

CREATE TABLE `ba_recitation` (
  `RECITATION_ID` bigint(20) NOT NULL DEFAULT '0',
  `RECITER_ID` bigint(20) DEFAULT NULL,
  `POEM_ID` bigint(20) DEFAULT NULL,
  `AUDIO_FLAG` int(11) DEFAULT NULL,
  `AUDIO_FILE_PATH` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VIDEO_FLAG` int(11) DEFAULT NULL,
  `VIDEO_LINK` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_recitation`
--

INSERT INTO `ba_recitation` (`RECITATION_ID`, `RECITER_ID`, `POEM_ID`, `AUDIO_FLAG`, `AUDIO_FILE_PATH`, `VIDEO_FLAG`, `VIDEO_LINK`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20180900033, 20180900013, 20180900012, 1, '/storage/bangla_abritti/audio/20180900013_SSL/20180900043_RRR/RRR_01 - Track  1-1_1537786342.wav', 1, '<iframe width=\"706\" height=\"397\" src=\"https://www.youtube.com/embed/klzrVgZprjk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20181000034, 20180900014, 20180900011, 0, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba_reciter`
--

CREATE TABLE `ba_reciter` (
  `RECITER_ID` bigint(20) NOT NULL DEFAULT '0',
  `RECITER_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RECITER_DOB` date DEFAULT NULL,
  `COUNTRY_BIRTH` int(11) DEFAULT NULL,
  `COUNTRY_LIVING` int(11) DEFAULT NULL,
  `PRESENT_ADDRESS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERMANENT_ADDRESS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRESENT_CITY` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRESENT_DISTRICT` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERMANENT_CITY` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERMANENT_DISTRICT` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RECITER_NID` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RECITER_EMAIL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RECITER_IMAGE` blob,
  `LIVE_FLAG` int(11) DEFAULT NULL,
  `RECITER_BIBLIOGRAPHY` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REMARKS` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_CODE` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ba_reciter`
--

INSERT INTO `ba_reciter` (`RECITER_ID`, `RECITER_NAME`, `RECITER_DOB`, `COUNTRY_BIRTH`, `COUNTRY_LIVING`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`, `PRESENT_CITY`, `PRESENT_DISTRICT`, `PERMANENT_CITY`, `PERMANENT_DISTRICT`, `RECITER_NID`, `RECITER_EMAIL`, `RECITER_IMAGE`, `LIVE_FLAG`, `RECITER_BIBLIOGRAPHY`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`, `SHORT_CODE`) VALUES
(20180900011, 'মুহাম্মাদ তানভীর হক', '1993-10-07', 201809017, 201809017, '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', 'ঢাকা', 'ঢাকা', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', 'ঢাকা', '১২৩৪৫৫৬৫৪৪', 'mdtanvirhaque@gmail.com', NULL, 1, 'মুহাম্মাদ তানভীর হক, ওয়েব ডেভেলপার , বিজিটেক সফটওয়্যার কম্পানিতে।', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SMTP'),
(20180900012, 'রেযয়ান চওধুরি রাফেল', '2018-09-11', 201809001, 201809002, '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', 'ঢাকা', 'ঢাকা', '৩৯৬/এ ফ্রী স্কুল স্ট্রীট', 'ঢাকা', '১১১১২২২৩৩৩', NULL, NULL, NULL, '১৮২৪ সালের ২৫ জানুয়ারি বাংলা প্রেসিডেন্সির যশোর জেলার (অধুনা বাংলাদেশ রাষ্ট্রের যশোর জেলার কেশবপুর উপজেলার) সাগরদাঁড়ি গ্রামের এক সম্ভ্রান্ত হিন্দু কায়স্থ পরিবারে মধুসূদন দত্তের জন্ম হয়। তিনি ছিলেন রাজনারায়ণ দত্ত ও তাঁর প্রথমা পত্নী জাহ্নবী দেবীর একমাত্র সন্তান। রাজনারায়ণ দত্ত ছিলেন কলকাতার সদর দেওয়ানি আদালতের এক খ্যাতনামা উকিল। মধুসূদনের যখন তেরো বছর বয়স, সেই সময় থেকেই তাঁকে কলকাতায় বসবাস করতে হত। খিদিরপুর সার্কুলার গার্ডেন রিচ রোডে (বর্তমানে কার্ল মার্কস সরণী) অঞ্চলে তিনি এক বিরাট অট্টালিকা নির্মাণ করেছিলেন।', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TLS'),
(20180900013, 'ইকবাল আহমেদ', '2018-09-21', 201809017, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '্মেদস', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SSL'),
(20180900014, 'asd', '2018-09-04', 201809001, 201809001, NULL, NULL, NULL, NULL, NULL, NULL, 'fdgdf', NULL, NULL, NULL, 'dasdasd', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fghj'),
(20180900015, 'sadsa', '2018-09-06', 201809003, 201809003, NULL, NULL, NULL, NULL, NULL, NULL, 'sadas', NULL, NULL, NULL, 'asdsa', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MLT'),
(20180900016, 'new name', '2018-09-20', 201809003, 201809003, NULL, NULL, NULL, NULL, NULL, NULL, 'asdd', NULL, NULL, NULL, 'EFDFDSF', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ahoy'),
(20180900017, 'sadsad', '2018-09-11', 201809004, 201809008, NULL, NULL, NULL, NULL, NULL, NULL, '232323323', NULL, NULL, NULL, '23fdasfd', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKL'),
(20180900018, 'sadasd', NULL, 201809007, 201809007, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdf'),
(20181000019, 'nai nai kisu nai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'okk');

-- --------------------------------------------------------

--
-- Table structure for table `bg_country`
--

CREATE TABLE `bg_country` (
  `COUNTRY_ID` int(11) NOT NULL DEFAULT '0',
  `COUNTRY_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_CODE_ISO` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHORT_CODE_UN` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NUM_UN` int(11) DEFAULT NULL,
  `DIAL_CODE` int(11) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `COUNTRY_REMARKS` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bg_country`
--

INSERT INTO `bg_country` (`COUNTRY_ID`, `COUNTRY_NAME`, `SHORT_CODE_ISO`, `SHORT_CODE_UN`, `NUM_UN`, `DIAL_CODE`, `ACTIVE_STATUS`, `COUNTRY_REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(201809001, 'আফগানিস্তান', 'AF', '', NULL, 93, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809002, 'আলবেনিয়া\r\n', 'AL', NULL, NULL, 355, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809003, 'এলজিরিয়া', 'DZ', NULL, NULL, 213, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809004, 'আমেরিকান সামোয়া', 'AS', NULL, NULL, 1684, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809005, 'আন্ডোরা', 'AD', NULL, NULL, 376, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809006, 'আঙ্গেলা', 'AO', NULL, NULL, 244, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809007, 'আংগুইলা', 'AI', NULL, NULL, 1264, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809008, 'এন্টিগুয়া ও বারবুডা', 'AG', NULL, NULL, 1268, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809009, 'আর্জেন্টিনা', 'AR', NULL, NULL, 54, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809010, 'আর্মেনিয়া', 'AM', NULL, NULL, 374, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809011, 'আরুবা', 'AW', NULL, NULL, 297, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809012, 'অস্ট্রেলিয়া', 'AU', NULL, NULL, 61, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809013, 'অস্ট্রিয়া', 'AT', NULL, NULL, 43, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809014, 'আজারবাইজান', 'AZ', NULL, NULL, 994, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809015, 'বাহামা', 'BS', NULL, NULL, 1242, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809016, 'বাহরাইন', 'BH', NULL, NULL, 973, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809017, 'বাংলাদেশ', 'BD', NULL, NULL, 880, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809018, 'বার্বাডোস', 'BB', NULL, NULL, 1264, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809019, 'বেলারুশ', 'BY', NULL, NULL, 375, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809020, 'বেলজিয়াম', 'BE', NULL, NULL, 32, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809021, 'বেলিজ', 'BZ', NULL, NULL, 501, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809022, 'বেনিন', 'BJ', NULL, NULL, 229, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809023, 'বার্মুডা', 'BM', NULL, NULL, 1441, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809024, 'ভুটান', 'BT', NULL, NULL, 975, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809025, 'বলিভিয়া', 'BO', NULL, NULL, 591, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809026, 'বসনিয়া ও হার্জেগোভিনা', 'BA', NULL, NULL, 387, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809027, 'বতসোয়ানা', 'BW', NULL, NULL, 267, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809028, 'ব্রাজিল', 'BR', NULL, NULL, 55, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809029, 'ব্রুনাই', 'BN', NULL, NULL, 673, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809030, 'বুলগেরিয়া', 'BG', NULL, NULL, 359, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809031, 'বুর্কিনা ফার্সো', 'BF', NULL, NULL, 226, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809032, 'বুরুন্ডি', 'BI', NULL, NULL, 257, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809033, 'কম্বোডিয়া', 'KH', NULL, NULL, 855, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809034, 'ক্যামেরুন', 'CM', NULL, NULL, 237, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809035, 'কানাডা', 'CA', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809036, 'কেপ ভের্দে', 'CV', NULL, NULL, 238, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809037, 'মধ্য আফ্রিকা ', 'CF', NULL, NULL, 236, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809038, 'চাদ', 'TD', NULL, NULL, 235, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809039, 'চিলি', 'CL', NULL, NULL, 56, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809040, 'চীন', 'CN', NULL, NULL, 86, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809041, 'কলম্বিয়া', 'CO', NULL, NULL, 57, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809042, 'কমোরস', 'KM', NULL, NULL, 269, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809043, 'কঙ্গো', 'CD', NULL, NULL, 242, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809044, 'কোস্টারিকা', 'CR', NULL, NULL, 506, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809045, 'ক্রোয়েশিয়া', 'HR', NULL, NULL, 385, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809046, 'কিউবা', 'CU', NULL, NULL, 53, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809047, 'সাইপ্রাস', 'CY', NULL, NULL, 357, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809048, 'চেক প্রজাতনএ', 'CZ', NULL, NULL, 420, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809049, 'ডেনমার্ক', 'DK', NULL, NULL, 45, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809050, 'জিবুতি', 'DJ', NULL, NULL, 253, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809051, 'ডোমিনিকা', 'DM', NULL, NULL, 1767, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809052, 'ডোমিনিকান প্রজাতনএ', 'DO', NULL, NULL, 1809, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809053, 'ইকোয়াডর', 'EC', NULL, NULL, 593, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809054, 'মিশর', 'EG', NULL, NULL, 20, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809055, 'এল সালভাদোর', 'SV', NULL, NULL, 503, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809056, 'ইকোয়েটোরিয়াল গিনি', 'GQ', NULL, NULL, 240, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809057, 'ইরিত্রিয়া', 'ER', NULL, NULL, 291, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809058, 'এস্তোনিয়া', 'EE', NULL, NULL, 372, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809059, 'ইফিওপিয়া', 'ET', NULL, NULL, 251, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809060, 'ফ্যারো দ্বীপপুঞ্জ', 'FO', NULL, NULL, 298, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809061, 'ফিজি', 'FJ', NULL, NULL, 679, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809062, 'ফিনল্যান্ড', 'FI', NULL, NULL, 358, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809063, 'ফ্রান্স', 'FR', NULL, NULL, 33, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809064, 'ফরাসী গায়না', 'GF', NULL, NULL, 594, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809065, 'ফরাসী পলিনেশিয়া', 'PF', NULL, NULL, 689, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809066, 'গ্যাবন', 'GA', NULL, NULL, 241, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809067, 'গাম্বিয়া', 'GM', NULL, NULL, 220, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809068, 'জর্জিয়া', 'GE', NULL, NULL, 995, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809069, 'জার্মানি', 'DE', NULL, NULL, 49, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809070, 'গানা', 'GH', NULL, NULL, 233, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809071, 'গ্রীস', 'GR', NULL, NULL, 30, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809072, 'গ্রিনল্যান্ড', 'GL', NULL, NULL, 299, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809073, 'গ্রেনেডা', 'GD', NULL, NULL, 1473, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809074, 'গুয়াডেলোপ', 'GP', NULL, NULL, 590, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809075, 'গুয়াম', 'GU', NULL, NULL, 1671, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809076, 'গোয়াটিমালা', 'GT', NULL, NULL, 502, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809077, 'গিনি', 'GN', NULL, NULL, 224, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809078, 'গিনি-বিসাউ', 'GW', NULL, NULL, 245, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809079, 'গিয়ানা', 'GY', NULL, NULL, 592, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809080, 'হাইতি', 'HT', NULL, NULL, 509, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809081, 'হন্ডুরাস', 'HN', NULL, NULL, 504, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809082, 'হাঙ্গেরী', 'HU', NULL, NULL, 36, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809083, 'আইসল্যান্ড', 'IS', NULL, NULL, 354, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809084, 'ভারত', 'IN', NULL, NULL, 91, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809085, 'ইন্দোনেশিয়া', 'ID', NULL, NULL, 62, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809086, 'ইরান', 'IR', NULL, NULL, 98, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809087, 'ইরাক', 'IQ', NULL, NULL, 964, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809088, 'আয়ারল্যান্ড', 'IE', NULL, NULL, 353, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809089, 'ইসরায়েল', 'IL', NULL, NULL, 972, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809090, 'ইতালী', 'IT', NULL, NULL, 39, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809091, 'জামাইকা', 'JM', NULL, NULL, 1876, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809092, 'জাপান', 'JP', NULL, NULL, 81, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809093, 'জর্দান', 'JO', NULL, NULL, 962, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809094, 'কাজাখাস্তান', 'KZ', NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809095, 'কেনিয়া', 'KE', NULL, NULL, 254, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809096, 'কিরিবাতি', 'KI', NULL, NULL, 686, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809097, 'কুয়েত', 'KW', NULL, NULL, 965, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809098, 'কিরগিজস্তান', 'KG', NULL, NULL, 996, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809099, 'লাওস', 'LA', NULL, NULL, 856, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809100, 'লাতভিয়া', 'LV', NULL, NULL, 371, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809101, 'লেবানন', 'LB', NULL, NULL, 961, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809102, 'লেসোথো', 'LS', NULL, NULL, 266, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809103, 'লাইবিরিয়া', 'LR', NULL, NULL, 231, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809104, 'লিবিয়া', 'LY', NULL, NULL, 218, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809105, 'লিচেনস্টেইন', 'LI', NULL, NULL, 423, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809106, 'লিথুয়েনিয়া', 'LT', NULL, NULL, 370, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809107, '\r\nলাক্সেমবার্গ', 'LU', NULL, NULL, 352, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809108, 'ম্যাসাডোনিয়া', 'MK', NULL, NULL, 389, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809109, 'মাদাগাস্কার', 'MG', NULL, NULL, 261, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809110, 'মালাউয়ি', 'MW', NULL, NULL, 265, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809111, 'মালয়েশিয়া', 'MY', NULL, NULL, 60, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809112, 'মালদ্বীপ', 'MV', NULL, NULL, 960, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809113, 'মালি', 'ML', NULL, NULL, 223, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809114, 'মল্টা', 'MT', NULL, NULL, 356, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809115, 'মার্শাল দ্বীপপুঞ্জ\r\n', 'MH', NULL, NULL, 692, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809116, '\r\nমার্টিনিক', 'MQ', NULL, NULL, 596, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809117, 'মাউরিতানিয়া', 'MR', NULL, NULL, 222, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809118, 'মাউরিশাস', 'MU', NULL, NULL, 230, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809119, '\r\nমক্সিকো', 'MX', NULL, NULL, 52, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809120, 'মলদোভিয়া', 'MD', NULL, NULL, 373, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809121, 'মোনাকো', 'MC', NULL, NULL, 377, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809122, 'মঙ্গোলিয়া', 'MN', NULL, NULL, 976, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809123, 'মন্টিনিগ্রো', 'ME', NULL, NULL, 382, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809124, 'মন্তেসেরাত', 'MS', NULL, NULL, 1664, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809125, 'মরোক্কো', 'MA', NULL, NULL, 222, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809126, 'মোজাম্বিক', 'MZ', NULL, NULL, 258, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809127, 'মায়ানমার', 'MM', NULL, NULL, 95, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809128, 'নামিবিয়া', 'NA', NULL, NULL, 264, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809129, 'নাউরু', 'NR', NULL, NULL, 674, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809130, 'নেপাল', 'NP', NULL, NULL, 977, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809131, 'নেদারল্যান্ড আন্টেলিস', 'AN', NULL, NULL, 599, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809132, 'নিউ ক্যালেডোনিয়া', 'NC', NULL, NULL, 687, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809133, 'নিউজিল্যান্ড', 'NZ', NULL, NULL, 64, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809134, 'নিকারাগোয়া', 'NI', NULL, NULL, 505, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809135, 'নাইজার', 'NE', NULL, NULL, 277, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809136, 'নাইজেরিয়া', 'NG', NULL, NULL, 234, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809137, 'নিউয়ি', 'NU', NULL, NULL, 683, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809138, 'গণতান্ত্রিক প্রজাতান্ত্রিক কোরিয়া', 'KP', NULL, NULL, 850, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809139, 'নরওয়ে', 'NO', NULL, NULL, 47, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809140, 'ওমান', 'OM', NULL, NULL, 968, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809141, 'পাকিস্তান', 'PK', NULL, NULL, 92, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809142, 'পালাউ', 'PW', NULL, NULL, 680, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809143, 'পানামা', 'PA', NULL, NULL, 507, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809144, 'পাপুয়া নিউ গিনি', 'PG', NULL, NULL, 675, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809145, 'পারাগুয়ে', 'PY', NULL, NULL, 595, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809146, 'পেরু', 'PE', NULL, NULL, 51, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809147, 'ফিলিপাইন', 'PH', NULL, NULL, 63, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809148, 'পিটকেয়ার্ন', 'PN', NULL, NULL, 64, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809149, 'পোল্যান্ড', 'PL', NULL, NULL, 48, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809150, 'পর্তুগাল', 'PT', NULL, NULL, 351, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809152, 'পুয়ের্তো রিকো', 'PR', NULL, NULL, 1787, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809153, 'কাতার', 'QA', NULL, NULL, 974, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809154, 'রিইউনিয়ন', 'RE', NULL, NULL, 262, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809155, 'রুমানিয়া', 'RO', NULL, NULL, 40, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809156, 'রাশিয়া', 'RU', NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809157, 'রোয়ান্দা', 'RW', NULL, NULL, 250, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809158, 'সেন্ট বারথেলিমি', 'BL', NULL, NULL, 590, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809159, 'সেন্ট হেলেনা', 'SH', NULL, NULL, 290, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809160, 'সেন্ট কিটস ও নেভিস', 'KN', NULL, NULL, 1869, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809161, 'সেন্ট লুসিয়া', 'LC', NULL, NULL, 1758, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809162, 'সেন্ট মার্টিন', 'MF', NULL, NULL, 590, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809163, 'সেন্ট পিয়ের ও মিকেলন', 'PM', NULL, NULL, 508, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809164, 'সেন্ট ভিনসেন্ট ও গ্রেনাডাইন্স', 'VC', NULL, NULL, 1784, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809165, 'সামোয়া', 'WS', NULL, NULL, 685, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809166, 'সান মরিনো', 'SM', NULL, NULL, 378, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809167, 'সাও থোম ও প্রিন্সিপ', 'ST', NULL, NULL, 239, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809168, 'সৌদি আরব', 'SA', NULL, NULL, 966, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809169, 'সেনেগাল', 'SN', NULL, NULL, 221, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809170, 'সার্বিয়া', 'RS', NULL, NULL, 381, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809171, 'সেশেলেস', 'SC', NULL, NULL, 248, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809172, 'সিয়েরা লিওনে', 'SL', NULL, NULL, 232, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809173, 'সিঙ্গাপুর', 'SG', NULL, NULL, 65, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809174, 'শ্লোভাকিয়া', 'SK', NULL, NULL, 421, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809175, 'স্লোভেনিয়া', 'SI', NULL, NULL, 386, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809176, 'সোলোমান দ্বীপপুঞ্জ', 'SB', NULL, NULL, 677, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809177, 'সোমালিয়া', 'SO', NULL, NULL, 252, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809178, 'দক্ষিণ আফ্রিকা', 'ZA', NULL, NULL, 27, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809179, 'দক্ষিণ কোরিয়া', 'KR', NULL, NULL, 82, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809180, 'দক্ষিণ সুদান', 'SS', NULL, NULL, 211, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809181, 'স্পেন', 'ES', NULL, NULL, 34, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809182, 'শ্রীলঙ্কা', 'LK', NULL, NULL, 94, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809183, 'সুদান', 'SD', NULL, NULL, 249, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809184, 'সুরিনাম', 'SR', NULL, NULL, 597, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809185, 'স্বালবার্ড ও জান মেয়েন', 'SJ', NULL, NULL, 47, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809186, 'সোয়াজিল্যান্ড', 'SZ', NULL, NULL, 268, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809187, 'সুইডেন', 'SE', NULL, NULL, 46, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809188, '\r\nসুইজারল্যান্ড', 'CH', NULL, NULL, 41, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809189, 'সিরিয়া', 'SY', NULL, NULL, 963, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809190, 'তাইওয়ান', 'TW', NULL, NULL, 886, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809191, 'তাজিকস্থান', 'TJ', NULL, NULL, 999, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809192, 'তাঞ্জানিয়া', 'TZ', NULL, NULL, 255, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809193, 'থাইল্যান্ড', 'TH', NULL, NULL, 66, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809194, 'টোগো', 'TG', NULL, NULL, 228, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809195, 'টকেলাউ', 'TK', NULL, NULL, 690, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809196, 'তোনগা', 'TO', NULL, NULL, 676, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809197, 'ত্রিনিদাদ ও টবেগো', 'TT', NULL, NULL, 1868, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809198, 'টিউনিস', 'TN', NULL, NULL, 216, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809199, 'তুরস্ক', 'TR', NULL, NULL, 90, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809200, 'তুর্কমেনিয়া', 'TM', NULL, NULL, 993, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809201, 'টার্ক ও কায়কস দ্বীপপুঞ্জ', 'TC', NULL, NULL, 1659, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809202, 'টুভালু', 'TV', NULL, NULL, 688, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809203, 'উগান্ডা', 'UG', NULL, NULL, 256, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809204, 'ইউক্রেন', 'UA', NULL, NULL, 380, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809205, 'সংযুক্ত আরব আমিরাত', 'AE', NULL, NULL, 971, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809206, 'যুক্তরাজ্য', 'GB', NULL, NULL, 44, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809207, 'মার্কিন যুক্তরাষ্ট্র', 'US', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809208, 'উরুগোয়ে', 'UY', NULL, NULL, 598, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809209, 'উজবেকিস্তান', 'UZ', NULL, NULL, 998, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809210, 'ভানুয়াটু', 'VU', NULL, NULL, 678, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809211, 'ভেনেজুয়েলা', 'BE', NULL, NULL, 58, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809212, 'ভিয়েতনাম', 'VN', NULL, NULL, 84, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809213, 'ওয়ালিশ ও ফুটুনা', 'WF', NULL, NULL, 681, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809214, 'পশ্চিম সাহারা', 'EH', NULL, NULL, 212, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809215, 'ইয়েমেন', 'YE', NULL, NULL, 967, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809216, 'জাম্বিয়া', 'ZM', NULL, NULL, 260, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201809217, 'জিম্ববোয়ে', 'ZW', NULL, NULL, 263, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bg_phone`
--

CREATE TABLE `bg_phone` (
  `AREA_CODE` varchar(20) DEFAULT NULL,
  `PHONE_NUMBER` varchar(500) DEFAULT NULL,
  `USER_ID` bigint(20) DEFAULT NULL,
  `PHONE_TYPE_ID` int(11) DEFAULT NULL,
  `SMS_FLAG` int(11) DEFAULT NULL,
  `PHONE_ID` int(11) DEFAULT NULL,
  `EMERGENCY_FLAG` int(11) DEFAULT NULL,
  `COUNTRY_ID` int(11) DEFAULT NULL,
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
  `OWNER_ID` int(11) DEFAULT NULL,
  `OWNER_TYPE_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bg_phone_type`
--

CREATE TABLE `bg_phone_type` (
  `PHONE_TYPE_ID` int(11) NOT NULL DEFAULT '0',
  `PHONE_TYPE_NAME` varchar(100) DEFAULT NULL,
  `PHONE_SHORT_CODE` varchar(2) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sequence`
--

CREATE TABLE `tbl_sequence` (
  `TABLE_NAME` varchar(33) DEFAULT NULL,
  `ID` int(11) DEFAULT '0',
  `SL_LENGTH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sequence`
--

INSERT INTO `tbl_sequence` (`TABLE_NAME`, `ID`, `SL_LENGTH`) VALUES
('BA_AUTHOR', 53, 5),
('BA_POEM_TYPE', 1, 3),
('BA_BOOK', 21, 5),
('BA_AUTHOR_TYPE', 1, 3),
('BG_COUNTRY', 2, 3),
('BA_RECITER', 19, 5),
('BA_PUBLISHER', 13, 5),
('BA_POEM', 19, 5),
('BA_RECITATION', 34, 5),
('BA_BOOK_CATEGORY', 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ba_author`
--
ALTER TABLE `ba_author`
  ADD PRIMARY KEY (`AUTHOR_ID`);

--
-- Indexes for table `ba_author_type`
--
ALTER TABLE `ba_author_type`
  ADD PRIMARY KEY (`AUTHOR_TYPE_ID`);

--
-- Indexes for table `ba_book`
--
ALTER TABLE `ba_book`
  ADD PRIMARY KEY (`BOOK_ID`);

--
-- Indexes for table `ba_book_category`
--
ALTER TABLE `ba_book_category`
  ADD PRIMARY KEY (`BOOK_CATEGORY_ID`);

--
-- Indexes for table `ba_poem`
--
ALTER TABLE `ba_poem`
  ADD PRIMARY KEY (`POEM_ID`);

--
-- Indexes for table `ba_poem_type`
--
ALTER TABLE `ba_poem_type`
  ADD PRIMARY KEY (`POEM_TYPE_ID`);

--
-- Indexes for table `ba_publisher`
--
ALTER TABLE `ba_publisher`
  ADD PRIMARY KEY (`PUBLISHER_ID`);

--
-- Indexes for table `ba_recitation`
--
ALTER TABLE `ba_recitation`
  ADD PRIMARY KEY (`RECITATION_ID`);

--
-- Indexes for table `ba_reciter`
--
ALTER TABLE `ba_reciter`
  ADD PRIMARY KEY (`RECITER_ID`);

--
-- Indexes for table `bg_country`
--
ALTER TABLE `bg_country`
  ADD PRIMARY KEY (`COUNTRY_ID`);

--
-- Indexes for table `bg_phone_type`
--
ALTER TABLE `bg_phone_type`
  ADD PRIMARY KEY (`PHONE_TYPE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
