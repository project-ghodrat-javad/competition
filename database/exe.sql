-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2016 at 07:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exe`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_masale` int(11) DEFAULT NULL,
  `id_reply` int(11) DEFAULT NULL,
  `masale_id_masale` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `fk_comment_masale1_idx` (`masale_id_masale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(105) COLLATE utf8_persian_ci DEFAULT NULL,
  `file` text COLLATE utf8_persian_ci,
  `id_masale` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_data_masale_idx` (`id_masale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `file`, `id_masale`) VALUES
(9, 'نمذن', '1469084084f1.zip', 6),
(11, 'ذ طقثقاظعت', '1469084084f3.zip', 6),
(12, 'نذرهعز', '1469084084f4.zip', 6),
(13, 'و نتن ت', '1469084084f5.zip', 6),
(14, 'test1', '1469089789fedit.zip', 5),
(15, 'test2', '1469089815fedit.rar', 5),
(16, '', '1471189890f1.jpg', 7),
(17, 'خودم و خودت', '1471704547fedit.jpg', 5),
(18, '', '1471979286f1.js', 12),
(19, '', '1472486792f1.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `datascript`
--

CREATE TABLE IF NOT EXISTS `datascript` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `id_script` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `datascript`
--

INSERT INTO `datascript` (`id`, `name`, `id_script`) VALUES
(7, '1472039155.png', 7),
(2, '1471721587.JPG', 8),
(4, '1472026394.png', 8),
(5, '1472038240.PNG', 7),
(6, '1472038326.png', 7),
(8, '1472130677.png', 1),
(10, '1472401854.jpg', 15),
(11, '1472486883.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE IF NOT EXISTS `langs` (
  `id_langs` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(105) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id_langs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id_langs`, `name`) VALUES
(3, 'سی شارپ'),
(5, 'لاراول'),
(6, 'سی');

-- --------------------------------------------------------

--
-- Table structure for table `masale`
--

CREATE TABLE IF NOT EXISTS `masale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `question` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `img_logo` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `date_st` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `date_finish` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `details` text COLLATE utf8_persian_ci,
  `state` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `img` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `rules` text COLLATE utf8_persian_ci,
  `url` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `knowlage` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `masale`
--

INSERT INTO `masale` (`id`, `title`, `question`, `img_logo`, `date_st`, `date_finish`, `details`, `state`, `id_users`, `img`, `rules`, `url`, `knowlage`) VALUES
(2, 'سطح سه', 'ایا؟', '1468939868.jpg', '1468935983', '50', '<p>یمبسخس</p>\r\n\r\n<p>سبنسخهبذسب</p>\r\n\r\n<p>ئخهایسل</p>\r\n\r\n<p>ظسخبلشسب</p>\r\n\r\n<p>سبلش</p>\r\n\r\n<p>ظسبهاسب</p>\r\n\r\n<p>یمذهعسظاهخسیلیل</p>\r\n\r\n<p>یلذیسلیسدلسیلیل</p>\r\n\r\n<p>یل</p>\r\n', 0, 3, '1468939716.jpg', '1-هاشم\r\n2-قدرت\r\n3-خودم\r\n4-ugd', 'سطح-سه', 'yes'),
(3, 'فیلم آموزش اندروید', 'ایا؟2111', '1469081110.jpg', '1469081110', '62', '<p>smlkdv;v</p>\r\n\r\n<p>d;vlmndpvd</p>\r\n\r\n<p>pvonsov</p>\r\n', 1, 3, '1469081110.png', 'kdndnpdb\r\ndvmbnpdb\r\ndvdhdb\r\n', 'فیلم-آموزش-اندروید2', 'no'),
(4, ' اندروید', 'یملیلخیحخلیل', '1469083333.jpg', '1469083333', '9', '<p>نردی</p>\r\n\r\n<p>سباسیخیس</p>\r\n\r\n<p>یستحاسیل</p>\r\n\r\n<p>یست0ی</p>\r\n\r\n<p>سیتسی-تسیتا-ب</p>\r\n\r\n<p>ا-سجدیحرسی</p>\r\n\r\n<p>ساح</p>\r\n', 1, 1, '1469083333.png', 'سبدحی\r\n2یکحبدسحی\r\n58\r\n65\r\nیجخدیل', '-اندروید', 'no'),
(5, 'سی شارپ', 'یحجاا', '1469090071.jpg', '1469083655', '20', '<p>یحخلتحخیل</p>\r\n\r\n<p>بهخذشهی</p>\r\n\r\n<p>hashem</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>بشخباسل</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>حها</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>خاس</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 3, '1469083655.jpg', '<p>1-یظختیطل</p>\r\n\r\n<p>2-طزخذدل</p>\r\n\r\n<p>3-ظسذی</p>\r\n\r\n<p>4-یتذیه</p>\r\n', 'سی-شارپ', 'no'),
(6, 'دانشجو', 'ظیحردیذخدذ', '1469084083.png', '1469084083', '22', '<p>یسمردسی</p>\r\n\r\n<p>یهرذسیر</p>\r\n\r\n<p>سیهذشرش</p>\r\n\r\n<p>اسخیذسی</p>\r\n\r\n<p>یخلاثل</p>\r\n\r\n<p>سیرخسلیس</p>\r\n\r\n<p>لخهبسیخلسیل</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1, '1469084083.jpg', 'یخحرتیح\r\nسیلحیسل\r\nیتذسیل\r\nرمنشاب\r\nسثسملذث\r\n', 'دانشجو', 'no'),
(7, 'فیلم آموزش اندروید', 'ایا؟2016', '1471189889.jpg', '1471189889', '30', '<p>sdkgsdvd</p>\r\n\r\n<p>dvjdspbds</p>\r\n\r\n<p>bd;vndpb</p>\r\n\r\n<p>dbd;lbdb</p>\r\n\r\n<p>dpcsudent</p>\r\n', 1, 1, '1471189890.png', '1-dbfb\r\n2-dfbodb\r\n', 'فیلم-آموزش-اندروید', 'yes'),
(8, 'قدرت', 'ایا قدرت حیون است؟؟؟؟؟؟', '1471194291.png', '1471194291', '6', '<p>طنذبذ</p>\r\n\r\n<p>سیمنرسیذ</p>\r\n\r\n<p>سینرذسیذ</p>\r\n\r\n<p>یسنمرذیسر</p>\r\n\r\n<p>یمرایسر</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1, '1471194291.jpg', '<p>1-انسان نباشی</p>\r\n\r\n<p>2-انسانی نباشی</p>\r\n\r\n<p>3-یاسینیب</p>\r\n\r\n<p>4-یخرابیخاهذ</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'قدرت2', 'yes'),
(9, 'ارتقا به سطح نقره ای', 'asklfdfiohsdio', '1471342240.jpg', '1471342240', '2', '<p>klnacsav</p>\r\n\r\n<p>dsvk[jvswa</p>\r\n\r\n<p>defj[pdondfv</p>\r\n\r\n<p>fbfpbnfb</p>\r\n', 1, 1, '1471342240.png', '<p>1-dvdd</p>\r\n\r\n<p>2-dfdgfgf</p>\r\n\r\n<p>3-fgfgfgd</p>\r\n\r\n<p>4-fggwqfw</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'ارتقا-به-سطح-نقره-ای', 'no'),
(11, 'ihaa ddv', 'ایا؟2016', '1471343105.png', '1471343105', '120', '<p>ldfv</p>\r\n\r\n<p>dsvfkdnbfb</p>\r\n\r\n<p>fmbp;ofdnbofdb</p>\r\n\r\n<p>fdbfdopb</p>\r\n', 1, 1, '1471343105.jpg', '<p>fbmlfdb</p>\r\n\r\n<p>fdnbfpdonbf</p>\r\n\r\n<p>bf;dnbpfdb</p>\r\n\r\n<p>fdmbfodb</p>\r\n', 'ihaa-ddv', 'yes'),
(12, 'جواد ', 'ایا ملوقان شهر است؟', '1471979286.png', '1471979286', '20', '<p>خر</p>\r\n\r\n<p>سگ</p>\r\n', 1, 3, NULL, '<p>1.الذت</p>\r\n\r\n<p>2.ذفقذ</p>\r\n', 'جواد-', 'yes'),
(13, 'قدرت', 'سالار دلها', '1471979564.png', '1471979564', '6', '<p>تنلن</p>\r\n', 1, 3, NULL, '<p>تنلذن</p>\r\n', 'قدرت', 'no'),
(15, 'آزمایشی نمودار امروز', 'سهبیسخهب', '1472115599.jpg', '1472115599', '1', '<p>بهیبیلپسب-سایل</p>\r\n\r\n<p>سحخلدخسهل</p>\r\n\r\n<p>سیخلاخسل</p>\r\n', 1, 3, NULL, '<p>یحیخل</p>\r\n\r\n<p>یحخلدسیل</p>\r\n\r\n<p>یحخجلتیسل</p>\r\n\r\n<p>یسحبتسیل</p>\r\n', 'آزمایشی-نمودار-امروز', 'yes'),
(16, 'طراحی سایت', 'بله؟', '1472486791.jpg', '1472486791', '2', 'آیا', 1, 3, '1472486791.jpg', '1- قانوم نو', 'طراحی-سایت', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_masale` int(11) NOT NULL,
  `date` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `id_user`, `id_masale`, `date`) VALUES
(1, 1, 15, '1471342240'),
(3, 3, 11, '1472393183'),
(4, 3, 7, '1472402161');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_06_070024_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matn` text COLLATE utf8_persian_ci,
  `id_users` int(11) DEFAULT NULL,
  `id_replay` int(11) DEFAULT NULL,
  `id_topics` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `emtyaz` int(11) NOT NULL,
  `file` varchar(355) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post_topics1_idx` (`id_topics`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `matn`, `id_users`, `id_replay`, `id_topics`, `state`, `date`, `emtyaz`, `file`) VALUES
(1, 'اوکی همو ', 2, 0, 1, 1, '1468935983', 12, ''),
(2, 'kzxvhoxv\r\nzlcvdv', 2, 0, 1, 0, '1468935983', 2, ''),
(3, '<p>jhukcj</p>\r\n\r\n<p>khiydci</p>\r\n\r\n<p>kjgiu</p>\r\n\r\n<p>mhcuy</p>\r\n\r\n<p>khfuy</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 0, 1, 1, '1471273403', 1, ''),
(4, '<p>جواد</p>\r\n\r\n<p>لا لباش</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 0, 1, 0, '1471273625', 0, '1471273625.png'),
(6, 'خا', 3, 0, 2, 0, '1468935983', 54, ''),
(7, '<p>اقا لطفا با من دعوا نکنین</p>\r\n', 3, 6, 2, 1, '1471973388', 0, '1471973388.png'),
(8, '<p>مو خو دوس ندارم</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 0, 2, 1, '1472111691', 4, '1472111691.jpg'),
(9, 'خداوندا کمکم کن !!!!', 1, 0, 2, 1, '1472393228', 0, ''),
(10, 'الهی آمین', 3, 9, 2, 1, '1472393305', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE IF NOT EXISTS `prize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `id_masale` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_prize_masale1_idx` (`id_masale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`id`, `first`, `two`, `three`, `id_masale`) VALUES
(1, 100000, 12000, 1200, 2),
(3, 200, 100, 300, 3),
(4, 0, 500, 1000, 4),
(5, 100, 50, 30, 5),
(6, 0, 100, 300, 6),
(10, 0, 0, 0, 9),
(11, 0, 0, 0, 7),
(12, 0, 0, 0, 8),
(14, 0, 0, 0, 11),
(15, 0, 0, 0, 12),
(16, 2000000, 20000, 2000, 13),
(18, 0, 0, 0, 15),
(19, 0, 0, 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `script`
--

CREATE TABLE IF NOT EXISTS `script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `code` text COLLATE utf8_persian_ci,
  `date` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `masale_id_masale` int(11) NOT NULL,
  `langs_id_langs` int(11) NOT NULL,
  `countlike` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `url` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_script_masale1_idx` (`masale_id_masale`),
  KEY `fk_script_langs1_idx` (`langs_id_langs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `script`
--

INSERT INTO `script` (`id`, `title`, `code`, `date`, `id_users`, `masale_id_masale`, `langs_id_langs`, `countlike`, `state`, `url`) VALUES
(2, 'آزمایشی دوم', 'یئربیق\r\nقلحئثقجلئقحلقل\r\nقلحئقثخلقذ\r\nقذئحبذقذ\r\nمذقحذ', '1468935983', 2, 11, 5, 7, 1, 'آزمایشی-دوم'),
(7, 'فایل های آزمایشی من22', '<p>,a de</p>\r\n\r\n<p>ev-me]v</p>\r\n\r\n<blockquote>\r\n<ol>\r\n	<li><strong>hashem ghanbarifard</strong></li>\r\n</ol>\r\n</blockquote>\r\n\r\n<p>w[emv]-ewf</p>\r\n\r\n<p>[edmewnf</p>\r\n\r\n<p>[dmoenwf</p>\r\n\r\n<p>lkednf</p>\r\n', '1471718637', 3, 5, 3, 0, 1, 'فایل-های-آزمایشی-من22'),
(8, 'آزمایشی دوم برای اسکریپت2', '<p>آزمایشی دوم برای اسکریپت</p>\r\n\r\n<p>آزمایشی دوم برای اسکریپت</p>\r\n\r\n<p>آزمایشی دوم برای اسکریپت</p>\r\n\r\n<p>آزمایشی دوم برای اسکریپت2</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1471721587', 1, 5, 5, 0, 1, 'آزمایشی-دوم-برای-اسکریپت2'),
(9, 'آزمایشی دوم برای اسکریپت22', '<p>lsdgposdg</p>\r\n\r\n<p><strong>hashem</strong></p>\r\n\r\n<p>sdgposjg</p>\r\n\r\n<p>sdghehg</p>\r\n\r\n<p>spgeherg</p>\r\n\r\n<p>esjgperg</p>\r\n\r\n<p>sogert</p>\r\n\r\n<p>wepiotert<strong>sdihsoit</strong><em>sejst<s>kshfis</s></em></p>\r\n', '1472026394', 3, 5, 5, 0, 0, 'آزمایشی-دوم-برای-اسکریپت22'),
(11, 'اسکریپت  222', '<p>سیخسل</p>\r\n\r\n<p>سظلال9</p>\r\n\r\n<p>-لت9قثل</p>\r\n\r\n<p>ثخاث0فا</p>\r\n\r\n<p>لنثقا0فقا</p>\r\n', '1472128704', 1, 15, 3, 0, 1, 'اسکریپت-222'),
(12, 'اسکریپت آزمایشی', 'یا علی \r\nمددی فرما', '1472393737', 1, 7, 3, 3, 1, 'اسکریپت-آزمایشی'),
(13, 'اسکریپت آزمایشی8', 'یییی', '1472393808', 1, 8, 5, 0, 0, 'اسکریپت-آزمایشی8'),
(14, 'اسکریپت آزمایشی9', 'لذدبل', '1472393841', 1, 9, 5, 0, 0, 'اسکریپت-آزمایشی9'),
(15, 'dddddddddddddds', 'ssssssssssssss', '1472401854', 3, 7, 5, 0, 1, 'dddddddddddddds'),
(16, 'اینم اسکریپت', 'ها ها', '1472486883', 3, 16, 6, 2, 1, 'اینم-اسکریپت');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('c1629da46f19dec137ff9c5f6a085f0c800ef481', 3, '::1', 'Mozilla/5.0 (Windows NT 6.3; rv:48.0) Gecko/20100101 Firefox/48.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoielVka0l1RXl6b1pUeGp2WWJXQjNIaXJncExSODloRkx4Q1NxOERUMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ3MjQ4ODE3NztzOjE6ImMiO2k6MTQ3MjQ4NTMzMDtzOjE6ImwiO3M6MToiMCI7fX0=', 1472488177);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `sazman` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `url_web` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `job` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `userscol` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `name_team` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `members` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `type_member` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `id_masale` int(11) DEFAULT NULL,
  `masale_id_masale` int(11) NOT NULL,
  PRIMARY KEY (`id_team`),
  KEY `fk_team_masale1_idx` (`masale_id_masale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `id_time` int(11) NOT NULL AUTO_INCREMENT,
  `first_time` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `two_time` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `three_time` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `id_masale` int(11) DEFAULT NULL,
  `masale_id_masale` int(11) NOT NULL,
  PRIMARY KEY (`id_time`),
  KEY `fk_time_masale1_idx` (`masale_id_masale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `matn` text COLLATE utf8_persian_ci,
  `file` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `count_view` int(11) DEFAULT NULL,
  `time_creat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `emtyaz` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `matn`, `file`, `id_users`, `count_view`, `time_creat`, `emtyaz`, `state`, `url`) VALUES
(1, 'هک کردن', 'سینایرهیر\r\nسیرمیادریس\r\nریسکراخسیر\r\nیرکیسارس\r\nریسکرسی\r\nرسمیر', NULL, 1, 12, '1468935983', 20, '1', 'hashem-ghanbari-mo'),
(2, 'برنامه نویسی اندروید2', '<p><br />\r\nتمامی مشکلاتی که در برنامه نویسی اندروید امکان دارد پیش بیاید؟؟؟؟2</p>\r\n', NULL, 3, 0, '1471618397', 0, '1', 'برنامه-نویسی-اندروید2');

-- --------------------------------------------------------

--
-- Table structure for table `user-team`
--

CREATE TABLE IF NOT EXISTS `user-team` (
  `id_user-team` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL,
  `id_team` int(11) DEFAULT NULL,
  `team_id_team` int(11) NOT NULL,
  PRIMARY KEY (`id_user-team`),
  KEY `fk_user-team_team1_idx` (`team_id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` int(11) NOT NULL,
  `roule` int(11) NOT NULL,
  `img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `state`, `roule`, `img`, `info`) VALUES
(1, 'gh', 'gh@yahoo.com', '$2y$10$lLxTcAMc/zSRf1A8tkPrbO4YEzTjILHQ2onIT9WSyL4FYKqnp8Kqy', 'YBeOeDZdA5r78KnokcQsST1bWZdbJJvsYxwgQB1b0rw58FldY9aIegDgrK4p', '2016-06-06 02:31:41', '2016-08-29 11:33:46', 0, 0, '', ''),
(2, 'h', 'h@yahoo.com', '$2y$10$YfFwexqV90I9wOF21R2zwuyBOGXbjpoIWRY61GFcOJbjqVOqOVDAG', 'e0K9G2nyItGeR6mSUsOIYcI6hOsJjMxQzAr3hYGhAE4JdtuuK5WJyNwIcNOD', '2016-06-07 15:44:59', '2016-08-28 13:20:30', 0, 0, '', ''),
(3, 'جواد سنجری', 'admin@yahoo.com', '$2y$10$zVOnHAlBju4Tr6O2JXNIBOUHUQQgrPltJ.48SwRvMQTeMERrabOI6', 'HgLTz2yEzOseygqwLaEc1cRAZsVu0NKfnRuRTzrUDxJBAoPIznR0sV7Jn2hS', '2016-08-19 10:15:42', '2016-08-29 11:45:12', 0, 1, '1472487312.jpg', 'ژون2'),
(5, 'hhhh', 'admin4@yahoo.com', '$2y$10$ut/3A3/gJ4ASUlyh46.Or.pyjfInTrP24wBJYG1EC8WU9AdZDZsOa', NULL, '2016-08-23 00:32:53', '2016-08-23 00:32:53', 0, 0, '1471931365.png', ''),
(7, 'ghodrat', 'mamad@yahoo.com', '123456789', NULL, NULL, '2016-08-29 11:14:32', 0, 0, '', 'jjhgsds'),
(8, 'حسین', 'hossein@yahoo.com', '$2y$10$tf3e0C.m0kFprLPHd0nTEukdsoviFkEiy4UgEeksiCLahCT8.Fx7a', 'ozmJFYzhkh9qwUc08wwoDgsw88T7tIFwz4o4afRHsTLW0ws7LiTIW99oGN94', '2016-08-29 08:10:54', '2016-08-29 08:11:16', 0, 0, '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_masale1` FOREIGN KEY (`masale_id_masale`) REFERENCES `masale` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `fk_data_masale` FOREIGN KEY (`id_masale`) REFERENCES `masale` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_topics1` FOREIGN KEY (`id_topics`) REFERENCES `topics` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prize`
--
ALTER TABLE `prize`
  ADD CONSTRAINT `fk_prize_masale1` FOREIGN KEY (`id_masale`) REFERENCES `masale` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `script`
--
ALTER TABLE `script`
  ADD CONSTRAINT `fk_script_langs1` FOREIGN KEY (`langs_id_langs`) REFERENCES `langs` (`id_langs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_script_masale1` FOREIGN KEY (`masale_id_masale`) REFERENCES `masale` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `fk_team_masale1` FOREIGN KEY (`masale_id_masale`) REFERENCES `masale` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `time`
--
ALTER TABLE `time`
  ADD CONSTRAINT `fk_time_masale1` FOREIGN KEY (`masale_id_masale`) REFERENCES `masale` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user-team`
--
ALTER TABLE `user-team`
  ADD CONSTRAINT `fk_user-team_team1` FOREIGN KEY (`team_id_team`) REFERENCES `team` (`id_team`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
