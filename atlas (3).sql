-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2020 at 04:22 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlas`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `about_txt` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_txt`, `created_at`, `updated_at`) VALUES
(1, '<p><strong><span class=\"about-title2\" style=\"color: #cf202c;\">مركز أطلس للدراسات والأبحاث،</span></strong>&nbsp;مؤسسة بحثية مستقلة، تأسس في غزة منتصف العام 2012م بمبادرة من بعض الأسرى المحررين ذوي الخبرة في الشأن الإسرائيلي بهدف خدمة القضية الفلسطينية، ونشر الوعي العلمي بالمشروع الصهيوني والكيان الإسرائيلي، وبدراسة هذا الكيان بالقدر الذي يفيد جمهور الباحثين والرأي العام وصناع القرار.&nbsp;<br /><br /><strong><span class=\"about-title\" style=\"color: #3dc4f1;\">رسالتنــا:</span></strong><br />فهم الاحتلال الإسرائيلي، وفهم دوافعه وسياساته ومخططاته وأساليب عمله من أجل تكوين ثقافة توعوية، تساهم في وضع حد للاحتلال وأثاره.&nbsp;<br /><br /><strong><span class=\"about-title\" style=\"color: #3dc4f1;\">رؤيتــنـــــا:</span></strong><br />يطمح المركز أن يكون منارة متميزة في تعميق وعي الامة بالمشروع الصهيوني وسياساته، وكذلك حركة المجتمع الاسرائيلي وثقافته ونظامه السياسي، بما يسهل على الأمة مواجهة مخططاته وصولاً الى انهاء الاحتلال.&nbsp;<br /><br /><strong><span class=\"about-title\" style=\"color: #3dc4f1;\">أهدافنا:</span></strong><br />- متابعة التطورات السياسية الاسرائيلية الداخلية والخارجية.<br />- الاحاطة بأبعاد السياسة الإسرائيلية على مختلف المستويات السياسية، الاقتصادية، الثقافية، الامنية والعسكرية.<br />- متابعة العلاقات الإسرائيلية بدول العالم، وأثارها على القضية الفلسطينية والأمن القومي العربي.<br />- رصد خارطة النظام السياسي والتركيب الاجتماعي للكيان الصهيوني، وكشف خفاياه الداخلية.<br />- تقديم التوصيات لذوي الشأن وصناع القرار.<br />- التواصل مع مراكز الأبحاث والدراسات الأخرى التي تزاول نشاطا مماثلا او مكتملا لطبيعة عمل المركز.<br /><br /><strong><span style=\"color: #cf202c;\"><span class=\"about-title2\">مركز أطلس للدراسات والأبحاث:</span>&nbsp;</span></strong><br />- مركز متخصص يعني بترجمة الدراسات والوثائق الإسرائيلية التي تخص الصراع العربي الإسلامي الإسرائيلي.<br />- كذلك يقوم المركز بإعداد الدراسات والأبحاث في الشؤون الإسرائيلية ويقدم رؤيا للمسائل الاستراتيجية.<br />- يركز المركز على مؤسسات دولة الاحتلال، وعلى دوائر صنع القرار في المؤسسة الحاكمة.<br />- يراقب المركز حركة المجتمع الإسرائيلي ويقدم للعالم العربي والإسلامي الصورة الحقيقية لواقع الدولة العبرية.</p>', '2018-10-09 10:00:33', '2018-10-23 07:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `ad_banner`
--

DROP TABLE IF EXISTS `ad_banner`;
CREATE TABLE IF NOT EXISTS `ad_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `activat_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activat_id` (`activat_id`,`place_id`),
  KEY `place_ad_fk` (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='جدول الإعلانات';

--
-- Dumping data for table `ad_banner`
--

INSERT INTO `ad_banner` (`id`, `name`, `img`, `link`, `activat_id`, `place_id`, `created_at`, `updated_at`) VALUES
(9, 'وطنية', './admin-assets/uploads/banner/2018/10/01/9e6561075f264ce6e9fd1de571444267.jpg', 'وطنية', 1, 2, '2018-10-01 10:35:52', '2018-10-01 10:42:21'),
(10, 'بالتل', './admin-assets/uploads/banner/2018/10/01/eaa82ef000baa3954bb24892acd36188.png', 'بالتل', 1, 1, '2018-10-01 10:39:24', '2018-10-01 10:39:24'),
(11, 'اعلان', './admin-assets/uploads/banner/2018/10/01/3147fa538979dbbcde65090563e28895.png', 'اعلان', 1, 3, '2018-10-01 10:45:21', '2018-10-01 10:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='جدول الكُتاب';

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `img`, `is_delete`, `deleted_by`, `created_at`, `updated_at`) VALUES
(3, 'احمد محمد', './admin-assets/uploads/authors/2018/10/24/f25bb41722d5abf1a686dd71ab22a3c8.jpg', 0, NULL, '2018-10-24 11:52:52', '2019-01-21 12:42:35'),
(4, 'احمد محمد ، محمود علي', './admin-assets/uploads/authors/2018/10/31/a898b5b55a2e5a8f4942c8a852d09f18.jpg', 1, 2, '2018-10-31 08:15:02', '2019-01-21 12:41:53'),
(5, 'موشيه (بوغي) يعلون', './admin-assets/uploads/authors/2019/03/11/b878b09e4eeac027b1142049cbd86ec6.jpg', 0, NULL, '2019-01-21 11:53:02', '2019-03-11 11:36:06'),
(6, 'عبد الرحمن شهاب', './admin-assets/uploads/authors/2019/03/04/f13705d2d910709ee277b26ecbff26f9.jpg', 0, NULL, '2019-03-04 12:44:04', '2019-03-11 10:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `author_books`
--

DROP TABLE IF EXISTS `author_books`;
CREATE TABLE IF NOT EXISTS `author_books` (
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  KEY `author_id` (`author_id`,`book_id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author_books`
--

INSERT INTO `author_books` (`author_id`, `book_id`) VALUES
(3, 22),
(3, 23),
(5, 23),
(5, 24),
(6, 20),
(6, 21),
(6, 23),
(6, 24);

-- --------------------------------------------------------

--
-- Table structure for table `author_news`
--

DROP TABLE IF EXISTS `author_news`;
CREATE TABLE IF NOT EXISTS `author_news` (
  `news_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  KEY `news_id` (`news_id`,`author_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author_news`
--

INSERT INTO `author_news` (`news_id`, `author_id`) VALUES
(139, 5),
(140, 3),
(140, 6),
(141, 5),
(141, 6),
(142, 3),
(142, 3),
(142, 3),
(142, 3),
(142, 6),
(142, 6),
(142, 6),
(142, 6),
(162, 5),
(163, 5),
(163, 6);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `date_book` date NOT NULL,
  `page_number` varchar(20) NOT NULL,
  `desc_book` text NOT NULL,
  `img_book` varchar(100) NOT NULL,
  `center` varchar(200) NOT NULL,
  `activat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `date_book`, `page_number`, `desc_book`, `img_book`, `center`, `activat_id`, `created_at`, `updated_at`, `updated_by`) VALUES
(20, 'gcfhgfh', '2019-02-14', '400', '<p>hjghjghj</p>', './admin-assets/uploads/imgBooks/2019/02/20/991981d865794822f1747c109042728e.jpg', 'مركز الأمن القومي', 1, '2019-02-20 11:27:18', '2019-03-09 10:11:11', 0),
(21, 'yuui', '2019-02-09', '200', '<p>hbmjh</p>', './admin-assets/uploads/imgBooks/2019/02/20/715268590d0edf901cfc454935f1d16e.jpg', 'jhmkjhk', 1, '2019-02-20 11:27:41', '2019-03-09 10:09:56', 0),
(22, 'hhhhhhh', '2019-02-08', '400', '<p>gfjhfgjfgj</p>', './admin-assets/uploads/imgBooks/2019/02/25/70effc3021c5e70b06c1484c82e21ad8.jpg', 'gngn55555', 1, '2019-02-25 13:30:07', '2019-03-09 10:09:49', 0),
(23, 'gcfhgfh', '2019-03-08', '400', '<p>ghghgh</p>', './admin-assets/uploads/imgBooks/2019/03/06/fb138270d69edc6acdb48f89d103b1a2.png', 'jhmkjhk', 1, '2019-03-06 10:59:54', '2019-03-06 11:44:34', 0),
(24, 'كتاب', '2019-03-23', '200', '<p>يقليقلي</p>', './admin-assets/uploads/imgBooks/2019/03/06/69907e177b95c4298742028e6bc9dae1.png', 'gngn', 1, '2019-03-06 11:01:48', '2019-03-09 10:09:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `breaknews`
--

DROP TABLE IF EXISTS `breaknews`;
CREATE TABLE IF NOT EXISTS `breaknews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=203 DEFAULT CHARSET=utf8 COMMENT='جدول الأخبار العاجلة';

--
-- Dumping data for table `breaknews`
--

INSERT INTO `breaknews` (`id`, `text`, `user_id`, `created_at`, `updated_at`) VALUES
(202, 'test test test test ', 6, '2018-11-28 23:59:24', '2018-11-29 00:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `caricature`
--

DROP TABLE IF EXISTS `caricature`;
CREATE TABLE IF NOT EXISTS `caricature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `view_count` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `activat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activat_id_fk5` (`activat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='جدول الأقسام ';

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `color`, `activat_id`, `created_at`, `updated_at`) VALUES
(1, 'تقارير', '#ff4343', 1, '2017-08-28 09:34:52', '2018-10-01 09:47:10'),
(2, 'تحليلات', '#00bdf5\n', 1, '2017-08-29 13:31:51', '2018-10-01 09:52:03'),
(3, 'دراسات', '#7e8a8b\n', 1, '2017-08-29 15:17:08', '2018-10-01 09:52:07'),
(5, 'المقالات', '#0cc142\n', 1, '2017-08-29 15:17:27', '2018-10-01 09:52:12'),
(6, 'آراء', '#ff66ff    \n', 1, '2017-08-29 15:17:33', '2018-10-01 09:52:15'),
(7, 'المقتطف الإسرائيلي', '#00a230', 1, '2017-08-29 15:17:50', '2018-10-01 09:52:20'),
(8, 'اقتباسات', '#8cbb9a', 1, '2017-08-29 15:17:56', '2018-10-01 09:52:25'),
(9, 'أخبار مصورة', '#a710a7', 1, '2017-09-09 09:14:28', '2018-10-01 09:52:29'),
(10, 'مقالات', '#d2c908', 1, '2017-09-09 09:15:36', '2018-10-01 09:52:32'),
(11, 'news', '#ffa451', 1, '2017-10-07 09:00:12', '2018-10-01 09:52:35'),
(12, 'חדשות', '#ffffff', 1, '2018-10-01 10:51:07', '2018-10-01 10:51:07'),
(13, 'النظام السياسي الإسرائيلي', '#000000', 1, '2018-10-01 09:50:19', '2018-10-01 09:53:45'),
(20, 'دراسات - للمشتركين', '#000000', 1, '2018-10-01 09:50:41', '2018-10-01 09:53:30'),
(22, 'تقدير موقف - للمشتركين', '#000000', 1, '2018-10-01 09:51:11', '2018-10-01 09:53:35'),
(23, 'مقالات - للمشتركين', '#000000', 1, '2018-10-01 09:51:33', '2018-10-01 09:53:38'),
(24, 'كتب مترجمة', '#000000', 1, '2018-10-01 09:51:46', '2018-10-01 09:53:42'),
(26, 'ندوات', '#ffffff', 1, '2018-10-03 10:14:28', '2018-10-03 10:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `category_sites`
--

DROP TABLE IF EXISTS `category_sites`;
CREATE TABLE IF NOT EXISTS `category_sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_sites`
--

INSERT INTO `category_sites` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'مواقع إخبارية', '2018-10-15 11:02:00', '0000-00-00 00:00:00'),
(2, 'مواقع صحف', '2018-10-15 11:02:11', '0000-00-00 00:00:00'),
(3, 'مواقع إذاعات', '2018-10-15 11:02:44', '0000-00-00 00:00:00'),
(4, 'مواقع تلفزيون', '2018-10-15 11:02:51', '0000-00-00 00:00:00'),
(6, 'مواقع رسمية', '2018-10-15 11:03:06', '2018-10-15 11:03:38'),
(7, 'مراكز أبحاث', '2018-10-15 11:03:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_name` varchar(100) NOT NULL,
  `visitor_email` varchar(100) NOT NULL,
  `activat_id` int(11) NOT NULL DEFAULT '2',
  `com_text` text NOT NULL,
  `news_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activat_id_fk2` (`activat_id`),
  KEY `news_id_fk` (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول التعليقات';

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dollar` varchar(11) NOT NULL,
  `euro` varchar(11) NOT NULL,
  `dinar` varchar(11) NOT NULL,
  `pound` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

DROP TABLE IF EXISTS `file_upload`;
CREATE TABLE IF NOT EXISTS `file_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) NOT NULL,
  `file_link` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `file_name`, `file_link`, `created_at`, `updated_at`) VALUES
(4, 'pdf1', 'admin-assets/uploads/files/333a42fdb3ead9b18c03abbfce5ab3a9file1.pdf', '2018-12-16 15:44:44', '2018-12-16 15:46:13'),
(5, 'صورة', 'admin-assets/uploads/files/5c5655f360555f406a0830d513ce0df1file1.jpg', '2018-12-16 15:45:35', '0000-00-00 00:00:00'),
(6, 'sdds', 'admin-assets/uploads/files/475a6f5a125f60ef6c673f8573514d42file1.jpg', '2018-12-17 11:46:34', '0000-00-00 00:00:00'),
(7, 'ghfh', 'admin-assets/uploads/files/338c889324e34b5824eb040d0ecff36ffile1.doc', '2018-12-17 11:46:56', '0000-00-00 00:00:00'),
(8, 'xfdd222', 'admin-assets/uploads/files/b506281b673cec527f76028e479244adfile1.pdf', '2018-12-17 11:50:21', '2018-12-18 09:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `follow_sites`
--

DROP TABLE IF EXISTS `follow_sites`;
CREATE TABLE IF NOT EXISTS `follow_sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `show_home_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `show_home_id` (`category_id`),
  KEY `show_home_id_2` (`show_home_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow_sites`
--

INSERT INTO `follow_sites` (`id`, `title`, `link`, `img`, `category_id`, `show_home_id`, `created_at`, `updated_at`) VALUES
(11, '0404', 'https://www.0404.co.il/', './admin-assets/uploads/imgFollowSites/2018/10/23/b746d406280e1f63562ea5318dc0cbcb.png', 1, 1, '2018-10-23 11:38:42', '0000-00-00 00:00:00'),
(12, 'سروجيم', 'https://www.srugim.co.il/', './admin-assets/uploads/imgFollowSites/2018/10/23/3cbd8b31aabbdf9339c93deb3505ef45.png', 1, 1, '2018-10-23 11:39:55', '0000-00-00 00:00:00'),
(13, 'معاريف الأسبوع', 'https://www.maariv.co.il/', './admin-assets/uploads/imgFollowSites/2018/10/23/de0901e36a3a80b001487a25fa5e3a51.png', 2, 1, '2018-10-23 11:44:19', '0000-00-00 00:00:00'),
(14, 'مكور ريشون', 'https://www.makorrishon.co.il/', './admin-assets/uploads/imgFollowSites/2018/10/23/781594652d9c29ec1cac275c9f7fce35.png', 2, 2, '2018-10-23 11:45:26', '2018-10-23 13:10:14'),
(15, 'ريشت بيت', 'https://www.kan.org.il/live/radio.aspx?stationid=3', './admin-assets/uploads/imgFollowSites/2018/10/23/024c08c87ec0a1840864e803c4165fae.png', 3, 1, '2018-10-23 11:51:07', '0000-00-00 00:00:00'),
(16, 'القناة الثانية', 'https://www.mako.co.il/', './admin-assets/uploads/imgFollowSites/2018/10/23/f70637bd9885646a7cc444f203792ae5.png', 4, 1, '2018-10-23 11:51:45', '0000-00-00 00:00:00'),
(17, 'القناة العاشرة', 'https://www.10.tv/', './admin-assets/uploads/imgFollowSites/2018/10/23/4d27b0427fdfecbeae8275165acfecfb.png', 4, 1, '2018-10-23 11:52:13', '0000-00-00 00:00:00'),
(18, 'القناة السابعة', 'https://www.inn.co.il/', './admin-assets/uploads/imgFollowSites/2018/10/23/5b90fa1445359ce48b16a5524ea854f5.png', 4, 1, '2018-10-23 11:52:30', '0000-00-00 00:00:00'),
(19, 'الشرطة الاسرائيلية', 'https://www.gov.il/he/Departments/israel_police', './admin-assets/uploads/imgFollowSites/2018/10/23/6442898b09138b8bcd4be4e352fb2f92.png', 6, 2, '2018-10-23 11:53:15', '0000-00-00 00:00:00'),
(20, 'الكنيست', 'https://main.knesset.gov.il/pages/default.aspx', './admin-assets/uploads/imgFollowSites/2018/10/23/28900c568a543185826f84fa7fd4fd31.png', 6, 1, '2018-10-23 11:55:07', '0000-00-00 00:00:00'),
(21, 'مركز رئوت', 'https://reutgroup.org/en/', './admin-assets/uploads/imgFollowSites/2018/10/23/ccf52b5567f326fd0785948fba7a2fea.png', 7, 1, '2018-10-23 11:55:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `media_dept_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `media_dept_id` (`media_dept_id`),
  KEY `media_dept_id_2` (`media_dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='جدول الصور';

-- --------------------------------------------------------

--
-- Table structure for table `images_post`
--

DROP TABLE IF EXISTS `images_post`;
CREATE TABLE IF NOT EXISTS `images_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='أرشيف صور الأخبار';

-- --------------------------------------------------------

--
-- Table structure for table `imgs_newspaper`
--

DROP TABLE IF EXISTS `imgs_newspaper`;
CREATE TABLE IF NOT EXISTS `imgs_newspaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `page_no` int(11) NOT NULL,
  `news_paper_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_no` (`page_no`,`news_paper_id`),
  KEY `news_paper_id` (`news_paper_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول صور العدد';

-- --------------------------------------------------------

--
-- Table structure for table `img_news`
--

DROP TABLE IF EXISTS `img_news`;
CREATE TABLE IF NOT EXISTS `img_news` (
  `news_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  KEY `news_id` (`news_id`,`img_id`),
  KEY `img_id_fk` (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ربط الصور بالاخبار';

-- --------------------------------------------------------

--
-- Table structure for table `infographic`
--

DROP TABLE IF EXISTS `infographic`;
CREATE TABLE IF NOT EXISTS `infographic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COMMENT='جدول الإنفوجرافيك';

-- --------------------------------------------------------

--
-- Table structure for table `martyrs`
--

DROP TABLE IF EXISTS `martyrs`;
CREATE TABLE IF NOT EXISTS `martyrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `person_name` varchar(200) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `occasion` varchar(200) NOT NULL COMMENT 'كيفية الاستشهاد/الاعتقال',
  `date_2` date NOT NULL,
  `text` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='جدول الاجتماعيات';

-- --------------------------------------------------------

--
-- Table structure for table `media_dept`
--

DROP TABLE IF EXISTS `media_dept`;
CREATE TABLE IF NOT EXISTS `media_dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `activat_id` int(11) NOT NULL,
  `main_media_id` int(11) NOT NULL,
  `view_count` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activat_id` (`activat_id`),
  KEY `main_media_id` (`main_media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='جدول أقسام الوسائط';

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `post_brief` text NOT NULL,
  `post_text` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activat_id` int(11) NOT NULL DEFAULT '1',
  `news_ticker_id` int(11) NOT NULL,
  `show_home_id` int(11) NOT NULL,
  `pin_home` int(11) NOT NULL,
  `view_count` int(20) NOT NULL DEFAULT '0',
  `more_news` int(11) NOT NULL,
  `disable_copy` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `news_source_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publish_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id_fk` (`category_id`),
  KEY `user_id_fk` (`user_id`),
  KEY `activat_id_fk4` (`activat_id`),
  KEY `news_ticker_id_fk` (`news_ticker_id`),
  KEY `show_home_fk` (`show_home_id`),
  KEY `author_id` (`author_id`),
  KEY `update_user_fk` (`updated_by`),
  KEY `book_id` (`book_id`),
  KEY `news_source_id` (`news_source_id`)
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8 COMMENT='جدول الأخبار ';

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `caption`, `category_id`, `post_brief`, `post_text`, `img`, `user_id`, `activat_id`, `news_ticker_id`, `show_home_id`, `pin_home`, `view_count`, `more_news`, `disable_copy`, `author_id`, `news_source_id`, `book_id`, `updated_by`, `created_at`, `updated_at`, `publish_date`) VALUES
(135, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>أطلس للدراسات</p>\r\n<p>قرار الكابينت، يوم الأحد، بشأن خصم نصف مليار شيكل من عائدات أموال الضرائب للسلطة الفلسطينية كعقاب على دعمها للأسرى؛ هو بالأساس نتيجة ضغطٍ سياسي. قانون تجميد الأموال اتخذ بالكنيست في شهر تموز الماضي، لكن لم يسارع أحد في المستوى السياسي إلى تطبيقه.</p>\r\n<p>مقتل المستوطنة الإسرائيلية أوري انسبخار في القدس، بداية الشهر على يد فلسطيني من الخليل، أدى إلى تجديد النقاش في المساعدة الاقتصادية التي تمنحها السلطة للأسرى الفلسطينيين، والاكتظاظ في المربع السياسي لليمين على خلفية الحملة الانتخابية هي التي فعلت ما تبقى. عندما يطوّق نفتالي بينت وأفيغدور ليبرمان بنيامين نتنياهو من اليمين بمسألة العلاقات مع الفلسطينيين، ورئيس الحكومة نفسه ينشغل بتصنيفه كـيمين قوي أمام اليسار الضعيف لبيني غانتس؛ لم يبق لنتنياهو خيار سوى العودة والدفع قدمًا بتطبيق القانون.</p>\r\n<p>بين شهريْ تموز وشباط لم يتقدم شيء في مسألة خصم الأموال، كذلك في جلسة الكابينت تردد رئيس \"الشاباك\" نداف أرغمان بطرح المعطيات الكاملة بشأن دعم السلطة للأسرى، وتعرض لهجوم مباشر من بينت (الذي تسرب بطريقة ما بسرعة البرق إلى قناة \"حداشوت 12\"). ولكن حتى الآن، فإن خصم الأموال يتعلق فقط بالمساعدة للأسرى منفذي العمليات وليس بالمساعدة السنوية التي تعطى بحجم أقل بكثير، التي تمنحها السلطة لعائلات الفلسطينيين الذين قتلوا في المواجهات مع إسرائيل، البند (2) يشمل أيضًا مساعدة لأقارب الاستشهاديين منفذي العمليات. بعد قرار الكابينت والإعلان الاحتفالي الذي أعقبه، ما زال من غير الواضح تمامًا متى سيتم خصم الأموال فعليًا من الضرائب التي تحولها إسرائيل للسلطة.</p>\r\n<p>هناك درجة من \"العدالة\" في إدعاء إسرائيل (المعزز أيضًا من قبل الإدارة الأمريكية) بأن المساعدات الاقتصادية المتواصلة للسلطة الفلسطينية للأسرى ولعائلات استشهاديين تشجّع بصورة غير مباشرة الكفاح المسلح الفلسطيني، وتناقض التصريحات العلنية لقيادة السلطة بشأن ضرورة السلام. ولكن في إسرائيل أيضًا يدركون جيدًا روح النضال الفلسطينية، وأن كل تراجع لرئيس السلطة محمود عباس عن الدفع للأسرى سيكون ثمنه أزمة داخلية واسعة النطاق؛ هذا هو السبب في أن رؤساء جهاز الأمن تحفظوا من هذه الخطوة وأرادوا تأخيرها بقدر الإمكان.</p>\r\n<p>في الخلفية، لا يمكن تجاهل تناقض معين في ادعاءات نتنياهو والوزراء: من جهة، يتفاخرون بمنع مساعدة \"الإرهاب\" عندما يجمّدون نقل الأموال للسلطة، التي ما زالت تحبط العمل المسلح في الضفة الغربية بالتنسيق مع إسرائيل. ومن جهة أخرى، يصادقون على تحويل الأموال من قطر ومصادر أخرى لحكم حماس في غزة، والتي بصورة واضحة تواصل المواجهة مع إسرائيل وتستخدم \"العنف\" ضدها.</p>\r\n<p>عدة خطوات سابقة اتخذتها الإدارة الأمريكية لتقليص المساعدات المالية المحولة للفلسطينيين، ومع ذلك فإن قرار إسرائيل الأخير يثير الضغط أكثر في قيادة السلطة الفلسطينية. السلطة تهدد بأنها ستوقف تمامًا عملية تحويل الأموال بينها وبين إسرائيل، عباس سبق واقتبس في السابق وهو يقول بأن الأغورة الأخيرة من أموال السلطة ستحول للأسرى بدلًا من تحويلها لأي هدف آخر. التنسيق الأمني لن يتوقف لأن استمراره هو أيضًا مصلحة فلسطينية، ولكن ربما تتخذ السلطة خطوات أخرى مثل وقف اللقاءات في قنوات غير أمنية.</p>\r\n<p>الخطر الأساسي هو في المنحدر الزلق، الأفضلية الأولى من ناحية عباس هي تحويل المساعدات لأسرى فتح من الضفة المسجونين في إسرائيل؛ ربما من أجل أن يستطيع ذلك سيقرر - كما سبق وأعطيت إشارات على ذلك - أن يقلص المزيد من الأموال التي يحولها للقطاع. بهذا فإن إسرائيل يمكن أن تساعد بصورة غير مباشرة على زيادة خطورة الوضع في غزة وتسريع تصعيد آخر هناك، خلافًا لهدفها.</p>\r\n<p>حماس غير مستعدة للاكتفاء بما حققته في الأشهر الأخيرة: زيادة توفير الكهرباء وإرساليات الأموال من قطر، إلى جانب قرار مصر تمديد فتح معبر رفح. يبدو أن قيادة حماس تعتقد بأن نتنياهو الآن أكثر قابلية للابتزاز على خلفية رغبته في الامتناع عن مواجهة عنيفة في القطاع قبل الانتخابات؛ هذا مزيج قابل للانفجار، والعقاب الذي تتبعه إسرائيل ضد السلطة - وبصورة غير مباشرة ضد حماس - يُمكنه أن يساعد على إشعاله. دبلوماسيون أجانب على صلة بالفلسطينيين يأملون بأن يجد رئيس الحكومة طريقة لتأجيل تنفيذ الاقتطاع، حتى بعد القرار الرسمي للكابينت.</p>\r\n<p>في هذه الأثناء، الوضع على طول الجدار الحدودي في القطاع لا يبشر بالخير، مظاهرات الجمعة الماضية صحيحٌ أنها مرت بدون قتلى؛ ولكن حماس تواصل اللعب بالنار، المظاهرات الليلية في القطاع عادت والآن تجري بشكل يومي تقريبًا، الأحداث خلالها \"أكثر عنفًا\" من أحداث يوم الجمعة، وتحت جنح الظلام يتم إلقاء العبوات الناسفة والزجاجات الحارقة الكثيرة نحو الجنود.</p>\r\n<p>أصوات الانفجارات على طول الجدار تسمع جيدًا في بلدات غلاف غزة، وتعيد مرة أخرى المناخ المضغوط المعروف من فترة البالونات والطائرات الحارقة خلال أشهر الصيف. غزة - كما حذرت شعبة الاستخبارات في هيئة الأركان العامة فقط الأسبوع الماضي - من شأنها أن تتدهور مرة أخرى بسرعة إلى تصعيد أكبر.</p>', './admin-assets/uploads/imgnews/2019/02/23/36c2142b3e9db4ed92fa8d1b923980cf.jpg', 6, 1, 2, 2, 0, 20, 0, 0, NULL, 18, NULL, 6, '2019-02-23 09:10:03', '2019-03-04 12:19:12', NULL),
(136, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>أطلس للدراسات</p>\r\n<p>قرار الكابينت، يوم الأحد، بشأن خصم نصف مليار شيكل من عائدات أموال الضرائب للسلطة الفلسطينية كعقاب على دعمها للأسرى؛ هو بالأساس نتيجة ضغطٍ سياسي. قانون تجميد الأموال اتخذ بالكنيست في شهر تموز الماضي، لكن لم يسارع أحد في المستوى السياسي إلى تطبيقه.</p>\r\n<p>مقتل المستوطنة الإسرائيلية أوري انسبخار في القدس، بداية الشهر على يد فلسطيني من الخليل، أدى إلى تجديد النقاش في المساعدة الاقتصادية التي تمنحها السلطة للأسرى الفلسطينيين، والاكتظاظ في المربع السياسي لليمين على خلفية الحملة الانتخابية هي التي فعلت ما تبقى. عندما يطوّق نفتالي بينت وأفيغدور ليبرمان بنيامين نتنياهو من اليمين بمسألة العلاقات مع الفلسطينيين، ورئيس الحكومة نفسه ينشغل بتصنيفه كـيمين قوي أمام اليسار الضعيف لبيني غانتس؛ لم يبق لنتنياهو خيار سوى العودة والدفع قدمًا بتطبيق القانون.</p>\r\n<p>بين شهريْ تموز وشباط لم يتقدم شيء في مسألة خصم الأموال، كذلك في جلسة الكابينت تردد رئيس \"الشاباك\" نداف أرغمان بطرح المعطيات الكاملة بشأن دعم السلطة للأسرى، وتعرض لهجوم مباشر من بينت (الذي تسرب بطريقة ما بسرعة البرق إلى قناة \"حداشوت 12\"). ولكن حتى الآن، فإن خصم الأموال يتعلق فقط بالمساعدة للأسرى منفذي العمليات وليس بالمساعدة السنوية التي تعطى بحجم أقل بكثير، التي تمنحها السلطة لعائلات الفلسطينيين الذين قتلوا في المواجهات مع إسرائيل، البند (2) يشمل أيضًا مساعدة لأقارب الاستشهاديين منفذي العمليات. بعد قرار الكابينت والإعلان الاحتفالي الذي أعقبه، ما زال من غير الواضح تمامًا متى سيتم خصم الأموال فعليًا من الضرائب التي تحولها إسرائيل للسلطة.</p>\r\n<p>هناك درجة من \"العدالة\" في إدعاء إسرائيل (المعزز أيضًا من قبل الإدارة الأمريكية) بأن المساعدات الاقتصادية المتواصلة للسلطة الفلسطينية للأسرى ولعائلات استشهاديين تشجّع بصورة غير مباشرة الكفاح المسلح الفلسطيني، وتناقض التصريحات العلنية لقيادة السلطة بشأن ضرورة السلام. ولكن في إسرائيل أيضًا يدركون جيدًا روح النضال الفلسطينية، وأن كل تراجع لرئيس السلطة محمود عباس عن الدفع للأسرى سيكون ثمنه أزمة داخلية واسعة النطاق؛ هذا هو السبب في أن رؤساء جهاز الأمن تحفظوا من هذه الخطوة وأرادوا تأخيرها بقدر الإمكان.</p>\r\n<p>في الخلفية، لا يمكن تجاهل تناقض معين في ادعاءات نتنياهو والوزراء: من جهة، يتفاخرون بمنع مساعدة \"الإرهاب\" عندما يجمّدون نقل الأموال للسلطة، التي ما زالت تحبط العمل المسلح في الضفة الغربية بالتنسيق مع إسرائيل. ومن جهة أخرى، يصادقون على تحويل الأموال من قطر ومصادر أخرى لحكم حماس في غزة، والتي بصورة واضحة تواصل المواجهة مع إسرائيل وتستخدم \"العنف\" ضدها.</p>\r\n<p>عدة خطوات سابقة اتخذتها الإدارة الأمريكية لتقليص المساعدات المالية المحولة للفلسطينيين، ومع ذلك فإن قرار إسرائيل الأخير يثير الضغط أكثر في قيادة السلطة الفلسطينية. السلطة تهدد بأنها ستوقف تمامًا عملية تحويل الأموال بينها وبين إسرائيل، عباس سبق واقتبس في السابق وهو يقول بأن الأغورة الأخيرة من أموال السلطة ستحول للأسرى بدلًا من تحويلها لأي هدف آخر. التنسيق الأمني لن يتوقف لأن استمراره هو أيضًا مصلحة فلسطينية، ولكن ربما تتخذ السلطة خطوات أخرى مثل وقف اللقاءات في قنوات غير أمنية.</p>\r\n<p>الخطر الأساسي هو في المنحدر الزلق، الأفضلية الأولى من ناحية عباس هي تحويل المساعدات لأسرى فتح من الضفة المسجونين في إسرائيل؛ ربما من أجل أن يستطيع ذلك سيقرر - كما سبق وأعطيت إشارات على ذلك - أن يقلص المزيد من الأموال التي يحولها للقطاع. بهذا فإن إسرائيل يمكن أن تساعد بصورة غير مباشرة على زيادة خطورة الوضع في غزة وتسريع تصعيد آخر هناك، خلافًا لهدفها.</p>\r\n<p>حماس غير مستعدة للاكتفاء بما حققته في الأشهر الأخيرة: زيادة توفير الكهرباء وإرساليات الأموال من قطر، إلى جانب قرار مصر تمديد فتح معبر رفح. يبدو أن قيادة حماس تعتقد بأن نتنياهو الآن أكثر قابلية للابتزاز على خلفية رغبته في الامتناع عن مواجهة عنيفة في القطاع قبل الانتخابات؛ هذا مزيج قابل للانفجار، والعقاب الذي تتبعه إسرائيل ضد السلطة - وبصورة غير مباشرة ضد حماس - يُمكنه أن يساعد على إشعاله. دبلوماسيون أجانب على صلة بالفلسطينيين يأملون بأن يجد رئيس الحكومة طريقة لتأجيل تنفيذ الاقتطاع، حتى بعد القرار الرسمي للكابينت.</p>\r\n<p>في هذه الأثناء، الوضع على طول الجدار الحدودي في القطاع لا يبشر بالخير، مظاهرات الجمعة الماضية صحيحٌ أنها مرت بدون قتلى؛ ولكن حماس تواصل اللعب بالنار، المظاهرات الليلية في القطاع عادت والآن تجري بشكل يومي تقريبًا، الأحداث خلالها \"أكثر عنفًا\" من أحداث يوم الجمعة، وتحت جنح الظلام يتم إلقاء العبوات الناسفة والزجاجات الحارقة الكثيرة نحو الجنود.</p>\r\n<p>أصوات الانفجارات على طول الجدار تسمع جيدًا في بلدات غلاف غزة، وتعيد مرة أخرى المناخ المضغوط المعروف من فترة البالونات والطائرات الحارقة خلال أشهر الصيف. غزة - كما حذرت شعبة الاستخبارات في هيئة الأركان العامة فقط الأسبوع الماضي - من شأنها أن تتدهور مرة أخرى بسرعة إلى تصعيد أكبر.</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 12, 0, 0, NULL, NULL, NULL, 6, '2019-02-23 09:21:41', '2019-03-06 09:57:36', NULL),
(137, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس2', 'لتحقيق وقف اطلاق النار', 1, '', '<p>أطلس للدراسات</p>\r\n<p>قرار الكابينت، يوم الأحد، بشأن خصم نصف مليار شيكل من عائدات أموال الضرائب للسلطة الفلسطينية كعقاب على دعمها للأسرى؛ هو بالأساس نتيجة ضغطٍ سياسي. قانون تجميد الأموال اتخذ بالكنيست في شهر تموز الماضي، لكن لم يسارع أحد في المستوى السياسي إلى تطبيقه.</p>\r\n<p>مقتل المستوطنة الإسرائيلية أوري انسبخار في القدس، بداية الشهر على يد فلسطيني من الخليل، أدى إلى تجديد النقاش في المساعدة الاقتصادية التي تمنحها السلطة للأسرى الفلسطينيين، والاكتظاظ في المربع السياسي لليمين على خلفية الحملة الانتخابية هي التي فعلت ما تبقى. عندما يطوّق نفتالي بينت وأفيغدور ليبرمان بنيامين نتنياهو من اليمين بمسألة العلاقات مع الفلسطينيين، ورئيس الحكومة نفسه ينشغل بتصنيفه كـيمين قوي أمام اليسار الضعيف لبيني غانتس؛ لم يبق لنتنياهو خيار سوى العودة والدفع قدمًا بتطبيق القانون.</p>\r\n<p>بين شهريْ تموز وشباط لم يتقدم شيء في مسألة خصم الأموال، كذلك في جلسة الكابينت تردد رئيس \"الشاباك\" نداف أرغمان بطرح المعطيات الكاملة بشأن دعم السلطة للأسرى، وتعرض لهجوم مباشر من بينت (الذي تسرب بطريقة ما بسرعة البرق إلى قناة \"حداشوت 12\"). ولكن حتى الآن، فإن خصم الأموال يتعلق فقط بالمساعدة للأسرى منفذي العمليات وليس بالمساعدة السنوية التي تعطى بحجم أقل بكثير، التي تمنحها السلطة لعائلات الفلسطينيين الذين قتلوا في المواجهات مع إسرائيل، البند (2) يشمل أيضًا مساعدة لأقارب الاستشهاديين منفذي العمليات. بعد قرار الكابينت والإعلان الاحتفالي الذي أعقبه، ما زال من غير الواضح تمامًا متى سيتم خصم الأموال فعليًا من الضرائب التي تحولها إسرائيل للسلطة.</p>\r\n<p>هناك درجة من \"العدالة\" في إدعاء إسرائيل (المعزز أيضًا من قبل الإدارة الأمريكية) بأن المساعدات الاقتصادية المتواصلة للسلطة الفلسطينية للأسرى ولعائلات استشهاديين تشجّع بصورة غير مباشرة الكفاح المسلح الفلسطيني، وتناقض التصريحات العلنية لقيادة السلطة بشأن ضرورة السلام. ولكن في إسرائيل أيضًا يدركون جيدًا روح النضال الفلسطينية، وأن كل تراجع لرئيس السلطة محمود عباس عن الدفع للأسرى سيكون ثمنه أزمة داخلية واسعة النطاق؛ هذا هو السبب في أن رؤساء جهاز الأمن تحفظوا من هذه الخطوة وأرادوا تأخيرها بقدر الإمكان.</p>\r\n<p>في الخلفية، لا يمكن تجاهل تناقض معين في ادعاءات نتنياهو والوزراء: من جهة، يتفاخرون بمنع مساعدة \"الإرهاب\" عندما يجمّدون نقل الأموال للسلطة، التي ما زالت تحبط العمل المسلح في الضفة الغربية بالتنسيق مع إسرائيل. ومن جهة أخرى، يصادقون على تحويل الأموال من قطر ومصادر أخرى لحكم حماس في غزة، والتي بصورة واضحة تواصل المواجهة مع إسرائيل وتستخدم \"العنف\" ضدها.</p>\r\n<p>عدة خطوات سابقة اتخذتها الإدارة الأمريكية لتقليص المساعدات المالية المحولة للفلسطينيين، ومع ذلك فإن قرار إسرائيل الأخير يثير الضغط أكثر في قيادة السلطة الفلسطينية. السلطة تهدد بأنها ستوقف تمامًا عملية تحويل الأموال بينها وبين إسرائيل، عباس سبق واقتبس في السابق وهو يقول بأن الأغورة الأخيرة من أموال السلطة ستحول للأسرى بدلًا من تحويلها لأي هدف آخر. التنسيق الأمني لن يتوقف لأن استمراره هو أيضًا مصلحة فلسطينية، ولكن ربما تتخذ السلطة خطوات أخرى مثل وقف اللقاءات في قنوات غير أمنية.</p>\r\n<p>الخطر الأساسي هو في المنحدر الزلق، الأفضلية الأولى من ناحية عباس هي تحويل المساعدات لأسرى فتح من الضفة المسجونين في إسرائيل؛ ربما من أجل أن يستطيع ذلك سيقرر - كما سبق وأعطيت إشارات على ذلك - أن يقلص المزيد من الأموال التي يحولها للقطاع. بهذا فإن إسرائيل يمكن أن تساعد بصورة غير مباشرة على زيادة خطورة الوضع في غزة وتسريع تصعيد آخر هناك، خلافًا لهدفها.</p>\r\n<p>حماس غير مستعدة للاكتفاء بما حققته في الأشهر الأخيرة: زيادة توفير الكهرباء وإرساليات الأموال من قطر، إلى جانب قرار مصر تمديد فتح معبر رفح. يبدو أن قيادة حماس تعتقد بأن نتنياهو الآن أكثر قابلية للابتزاز على خلفية رغبته في الامتناع عن مواجهة عنيفة في القطاع قبل الانتخابات؛ هذا مزيج قابل للانفجار، والعقاب الذي تتبعه إسرائيل ضد السلطة - وبصورة غير مباشرة ضد حماس - يُمكنه أن يساعد على إشعاله. دبلوماسيون أجانب على صلة بالفلسطينيين يأملون بأن يجد رئيس الحكومة طريقة لتأجيل تنفيذ الاقتطاع، حتى بعد القرار الرسمي للكابينت.</p>\r\n<p>في هذه الأثناء، الوضع على طول الجدار الحدودي في القطاع لا يبشر بالخير، مظاهرات الجمعة الماضية صحيحٌ أنها مرت بدون قتلى؛ ولكن حماس تواصل اللعب بالنار، المظاهرات الليلية في القطاع عادت والآن تجري بشكل يومي تقريبًا، الأحداث خلالها \"أكثر عنفًا\" من أحداث يوم الجمعة، وتحت جنح الظلام يتم إلقاء العبوات الناسفة والزجاجات الحارقة الكثيرة نحو الجنود.</p>\r\n<p>أصوات الانفجارات على طول الجدار تسمع جيدًا في بلدات غلاف غزة، وتعيد مرة أخرى المناخ المضغوط المعروف من فترة البالونات والطائرات الحارقة خلال أشهر الصيف. غزة - كما حذرت شعبة الاستخبارات في هيئة الأركان العامة فقط الأسبوع الماضي - من شأنها أن تتدهور مرة أخرى بسرعة إلى تصعيد أكبر.</p>', './admin-assets/uploads/imgnews/2019/02/23/68f4cd57cbff03d168cd3a96b928d26c.jpg', 6, 1, 2, 2, 0, 10, 0, 0, NULL, NULL, 21, 6, '2019-02-23 09:22:30', '2019-02-25 13:27:44', NULL),
(138, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', '0000-00-00 00:00:00'),
(139, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماسfgjhg', '', 3, '', '<p>hgjghjhj</p>', './admin-assets/uploads/imgnews/2019/03/04/b854fab0cd4e0da705eb03d860f62d21.png', 6, 1, 2, 2, 0, 10, 0, 0, NULL, NULL, 21, 6, '2019-02-25 13:31:10', '2019-09-17 11:30:44', NULL),
(140, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>نكمنكمكنمك</p>', './admin-assets/uploads/imgnews/2019/02/23/68f4cd57cbff03d168cd3a96b928d26c.jpg', 6, 1, 2, 2, 0, 9, 0, 0, NULL, 20, 21, 6, '2019-03-04 10:57:14', '2019-03-12 08:21:32', NULL),
(141, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>45646</p>', './admin-assets/uploads/imgnews/2019/02/23/68f4cd57cbff03d168cd3a96b928d26c.jpg', 6, 1, 2, 2, 0, 60, 0, 0, NULL, 21, 21, 6, '2019-03-04 12:18:25', '2019-03-12 08:20:40', NULL),
(142, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس2', '', 1, '', '<p>klklk</p>', './admin-assets/uploads/imgnews/2019/03/04/a308532b27097827ccb9b55b72229205.png', 6, 1, 2, 2, 0, 14, 0, 0, NULL, 19, 21, 6, '2019-03-04 12:44:41', '2019-03-11 11:39:25', NULL),
(161, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 26, '', '<p>mklmkl</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 5, 0, 0, NULL, NULL, NULL, NULL, '2019-03-05 13:29:29', '2019-10-28 08:13:21', '2019-03-08 11:02:00'),
(162, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>bbnjbhj</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 1, 0, 27, 0, 0, NULL, NULL, NULL, 6, '2019-03-05 13:29:40', '2019-10-28 08:13:32', NULL),
(163, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس2', '', 1, '', '<p>tyuyuu</p>', './admin-assets/uploads/imgnews/2019/02/23/68f4cd57cbff03d168cd3a96b928d26c.jpg', 6, 1, 2, 2, 0, 8, 0, 0, NULL, 17, 20, 6, '2019-03-12 11:31:23', '2019-03-12 13:16:12', NULL),
(164, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>gjgj</p>', './admin-assets/uploads/imgnews/2019/02/23/68f4cd57cbff03d168cd3a96b928d26c.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, 6, '2019-03-12 12:56:11', '2019-03-12 13:02:47', NULL),
(165, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>اتات</p>', './admin-assets/uploads/imgnews/2019/03/13/7dde2a87feb5f63bc258981b09208208.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:12:51', '2019-03-13 11:12:51', '0000-00-00 00:00:00'),
(166, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>اتات</p>', './admin-assets/uploads/imgnews/2019/03/13/4f0fd20be51d9c2920a264c4e7cc46af.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:13:00', '2019-03-13 11:13:00', '0000-00-00 00:00:00'),
(167, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>التات</p>', './admin-assets/uploads/imgnews/2019/03/13/de27a3eac69a89017c8c151e3980fc86.jpg', 6, 1, 2, 2, 0, 1, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:13:13', '2019-10-28 08:16:21', '0000-00-00 00:00:00'),
(168, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>لاال</p>', './admin-assets/uploads/imgnews/2019/03/13/0bf18fad0a2ee77e82c5d94d75af36e5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:13:46', '2019-03-13 11:13:46', '0000-00-00 00:00:00'),
(169, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>لالا</p>', './admin-assets/uploads/imgnews/2019/03/13/de3d4ef29144ad11e1e85a0670fe42ef.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:13:54', '2019-03-13 11:13:54', '0000-00-00 00:00:00'),
(170, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', '0000-00-00 00:00:00'),
(171, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 1, '', '<p>لالا</p>', './admin-assets/uploads/imgnews/2019/02/23/36c2142b3e9db4ed92fa8d1b923980cf.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, 6, '2019-03-13 11:14:48', '2019-03-13 11:15:06', NULL),
(172, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(173, 'gjhgjgh', '', 3, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 29, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2020-07-15 10:12:51', NULL),
(174, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(175, 'gjhgjgh', '', 3, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2020-07-15 10:12:44', NULL),
(176, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(177, 'gjhgjgh', '', 3, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2020-07-15 10:12:57', NULL),
(178, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(179, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(180, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(181, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(182, 'gjhgjgh', '', 2, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2020-07-15 10:13:17', NULL),
(183, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(184, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(185, 'gjhgjgh', '', 2, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2020-07-15 10:13:20', NULL),
(186, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(187, 'gjhgjgh', '', 2, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2020-07-15 10:13:25', NULL),
(188, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(189, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(190, 'gjhgjgh', '', 2, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2020-07-15 10:13:34', NULL),
(191, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(192, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(193, 'gjhgjgh', '', 1, '', '<p>hgjh</p>', './admin-assets/uploads/imgnews/2019/02/23/e512b36d2b4c841cd5735c5ebdce5675.jpg', 6, 1, 2, 2, 0, 28, 0, 0, NULL, 17, 22, NULL, '2019-02-25 13:30:52', '2019-03-12 08:21:26', NULL),
(194, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(195, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(196, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(197, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(198, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(199, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(200, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(201, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(202, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(203, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(204, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(205, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL),
(206, 'تقدم المساعي لتحقيق وقف اطلاق النار في قطاع غزة مع حماس', '', 11, '', '<p>بلابلالا</p>', './admin-assets/uploads/imgnews/2019/03/13/c249962580d1c44bc515cf2721ca1de5.jpg', 6, 1, 2, 2, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2019-03-13 11:14:40', '2019-03-13 11:14:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_paper`
--

DROP TABLE IF EXISTS `news_paper`;
CREATE TABLE IF NOT EXISTS `news_paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_num` int(11) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_num` (`news_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول أعداد الصحيفة';

-- --------------------------------------------------------

--
-- Table structure for table `news_ticker`
--

DROP TABLE IF EXISTS `news_ticker`;
CREATE TABLE IF NOT EXISTS `news_ticker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ticker` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_ticker`
--

INSERT INTO `news_ticker` (`id`, `title_ticker`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'fhfghhg', 6, '2019-03-05 13:36:01', '0000-00-00 00:00:00'),
(2, 'ghfghfghfghfghgfh', 6, '2019-03-05 13:36:04', '0000-00-00 00:00:00'),
(3, 'ghfghghfghf', 6, '2019-03-05 13:36:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `place_ad`
--

DROP TABLE IF EXISTS `place_ad`;
CREATE TABLE IF NOT EXISTS `place_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `div_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='جدول مكان الإعلان';

--
-- Dumping data for table `place_ad`
--

INSERT INTO `place_ad` (`id`, `name`, `div_id`, `created_at`, `updated_at`) VALUES
(1, 'بنر أسفل الهيدر - يمين', '1', '2018-05-27 09:44:59', '2018-10-21 10:07:43'),
(2, 'بنر أسفل الهيدر - يسار', '2', '2018-05-27 09:45:35', '2018-10-21 10:08:10'),
(3, 'بنر بجانب قسام الأخبار', '3', '2018-05-27 09:45:52', '2018-10-21 10:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `post_img`
--

DROP TABLE IF EXISTS `post_img`;
CREATE TABLE IF NOT EXISTS `post_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `news_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COMMENT='جدول صور الموضوع';

--
-- Dumping data for table `post_img`
--

INSERT INTO `post_img` (`id`, `name`, `post_id`, `created_at`, `updated_at`) VALUES
(42, './admin-assets/uploads/imgnews/2019/03/05/e9d7b30afe64869356509d78802ffcc30.png', 161, '2019-03-05 13:29:29', '2019-03-05 13:29:29'),
(43, './admin-assets/uploads/imgnews/2019/03/05/e9d7b30afe64869356509d78802ffcc31.png', 161, '2019-03-05 13:29:29', '2019-03-05 13:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `post_video`
--

DROP TABLE IF EXISTS `post_video`;
CREATE TABLE IF NOT EXISTS `post_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `fb_link` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `news_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_video`
--

INSERT INTO `post_video` (`id`, `post_id`, `link`, `fb_link`, `created_at`, `updated_at`) VALUES
(2, 161, 'https://www.youtube.com/watch?v=EfKs5RewtOI&list=RDEfKs5RewtOI&index=1', '', '2019-03-05 13:29:29', '2019-03-05 13:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

DROP TABLE IF EXISTS `quotations`;
CREATE TABLE IF NOT EXISTS `quotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txt` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `activat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `txt`, `author_id`, `activat_id`, `created_at`, `updated_at`, `updated_by`) VALUES
(6, '<p>لالالل لابلا</p>', -1, 1, '2018-10-24 11:54:46', '0000-00-00 00:00:00', 0),
(7, '<p>ghjghjhj</p>', -1, 1, '2018-10-24 11:55:45', '0000-00-00 00:00:00', 0),
(8, '<p>retretert</p>', -1, 1, '2018-12-03 08:46:28', '0000-00-00 00:00:00', 0),
(9, '<p>fdgdfh</p>', 3, 1, '2018-12-03 08:59:20', '0000-00-00 00:00:00', 0),
(10, '<p>dfggdgfvfdgdg</p>', 3, 1, '2018-12-03 09:48:38', '0000-00-00 00:00:00', 0),
(11, '<p>لالالب</p>', 3, 1, '2018-12-03 09:59:52', '0000-00-00 00:00:00', 0),
(12, '', -1, 1, '2018-12-03 10:20:37', '0000-00-00 00:00:00', 0),
(13, '', -1, 1, '2018-12-03 10:30:45', '0000-00-00 00:00:00', 0),
(14, '', -1, 1, '2018-12-03 10:30:54', '0000-00-00 00:00:00', 0),
(15, '', -1, 1, '2018-12-03 10:31:44', '0000-00-00 00:00:00', 0),
(16, '', -1, 1, '2018-12-03 10:32:29', '0000-00-00 00:00:00', 0),
(17, '', -1, 1, '2018-12-03 10:43:09', '0000-00-00 00:00:00', 0),
(18, '', 3, 1, '2018-12-03 10:44:58', '0000-00-00 00:00:00', 0),
(19, '', -1, 1, '2018-12-03 10:48:58', '0000-00-00 00:00:00', 0),
(20, '', -1, 1, '2018-12-03 10:49:01', '0000-00-00 00:00:00', 0),
(21, '', -1, 1, '2018-12-03 10:55:26', '0000-00-00 00:00:00', 0),
(22, '', -1, 1, '2018-12-03 10:56:01', '0000-00-00 00:00:00', 0),
(23, '', -1, 1, '2018-12-03 10:58:36', '0000-00-00 00:00:00', 0),
(24, '', -1, 1, '2018-12-03 10:58:37', '0000-00-00 00:00:00', 0),
(25, '', -1, 1, '2018-12-03 11:12:28', '0000-00-00 00:00:00', 0),
(26, '', -1, 1, '2018-12-03 11:12:52', '0000-00-00 00:00:00', 0),
(27, '', -1, 1, '2018-12-03 11:13:04', '0000-00-00 00:00:00', 0),
(28, '<p>fhtytry</p>', 3, 1, '2018-12-03 11:13:59', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='جدول الصلاحيات';

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'مدير', '2018-03-24 10:30:45', '2018-03-24 10:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `st_name`, `value`, `updated_at`, `updated_by`) VALUES
(1, 'home_news_style', '2', '2018-08-27 10:42:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE IF NOT EXISTS `social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `person_name` varchar(200) NOT NULL,
  `occasion` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='جدول الاجتماعيات';

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='جدول الوسوم';

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'غزة', '2018-11-06 08:41:49', '2018-11-06 08:41:49'),
(2, 'حماس', '2018-11-06 08:41:49', '2018-11-06 08:41:49'),
(3, 'الجهاد_الإسلامي', '2018-11-06 08:41:49', '2018-11-06 08:41:49'),
(4, 'مقاومة', '2018-11-06 08:41:49', '2018-11-06 08:41:49'),
(5, 'حرب', '2018-11-06 08:41:49', '2018-11-06 08:41:49'),
(6, 'kkkk', '2018-11-26 09:14:14', '2018-11-26 09:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `tag_news`
--

DROP TABLE IF EXISTS `tag_news`;
CREATE TABLE IF NOT EXISTS `tag_news` (
  `news_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `news_id` (`news_id`,`tag_id`),
  KEY `tag_id_fk` (`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag_news`
--

INSERT INTO `tag_news` (`news_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(139, 5, '2019-03-06 11:44:04', '2019-03-06 11:44:04'),
(139, 2, '2019-03-06 11:44:04', '2019-03-06 11:44:04'),
(140, 2, '2019-03-11 11:34:04', '2019-03-11 11:34:04'),
(140, 1, '2019-03-11 11:34:04', '2019-03-11 11:34:04'),
(162, 2, '2019-03-12 11:30:33', '2019-03-12 11:30:33'),
(163, 4, '2019-03-12 12:55:17', '2019-03-12 12:55:17'),
(163, 3, '2019-03-12 12:55:17', '2019-03-12 12:55:17'),
(163, 1, '2019-03-12 12:55:17', '2019-03-12 12:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img_user` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `activat_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `role_category` int(11) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activat_id` (`activat_id`,`role_id`,`role_category`),
  KEY `role_id_fk` (`role_id`),
  KEY `role_category_fk` (`role_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='جدول المستخدمين';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `img_user`, `password`, `activat_id`, `role_id`, `role_category`, `is_deleted`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'mamdouh.abed_90@mail.co', './admin-assets/uploads/users/2018/10/21/bab00f3afc4f53df010b1c33834e8773.jpg', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 1, 0, '2018-10-21 09:31:55', '2018-10-23 10:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_permtion`
--

DROP TABLE IF EXISTS `user_permtion`;
CREATE TABLE IF NOT EXISTS `user_permtion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insert` int(11) NOT NULL,
  `update` int(11) NOT NULL,
  `delete` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`,`user_id`),
  KEY `user_id_fk3` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول صلاحيات المستحدم';

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `link_youtube` varchar(100) DEFAULT NULL,
  `imghome` varchar(100) NOT NULL,
  `main_media_id` int(11) NOT NULL,
  `view_count` int(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `main_media_id` (`main_media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=utf8 COMMENT='جدول الفيديوهات';

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `link_youtube`, `imghome`, `main_media_id`, `view_count`, `created_at`, `updated_at`) VALUES
(147, 'jkolj', 'https://www.youtube.com/watch?v=DruYNHN4FYY', './admin-assets/uploads/videos/2018/11/21/462a544521e01a2961f09e87e095f136.PNG', 1, 0, '2018-11-21 10:08:00', '2018-11-21 10:08:00'),
(145, 'dfsdgsdgsdgdsdgsdgsdg', 'https://www.youtube.com/watch?v=UkhZchDEEGA&list=RDUkhZchDEEGA&start_radio=1', './admin-assets/uploads/videos/2018/11/21/5ea728e5ea336987741dd5e9da3cee98.PNG', 1, 0, '2018-11-21 10:07:47', '2018-11-21 10:07:47'),
(146, 'iiiiiiiiiiiiiii', 'https://www.youtube.com/watch?v=sSEcjZYKq50', './admin-assets/uploads/videos/2018/11/21/57562e8c0169ffffb6d1182101fb2d68.PNG', 1, 0, '2018-11-21 10:07:56', '2018-11-21 10:07:57'),
(140, 'bhbhbvn', 'https://www.youtube.com/watch?v=DruYNHN4FYY', './admin-assets/uploads/videos/2018/11/21/a009d72f38143d329b78be8a5a0b09c3.PNG', 1, 1, '2018-11-21 10:07:16', '2018-12-18 12:24:54'),
(141, 'dfsdgsdgsdgdsdgsdgsdg', 'https://www.youtube.com/watch?v=sSEcjZYKq50', './admin-assets/uploads/videos/2018/11/21/b3123f5b96079c326e3aad6a78f6d14f.PNG', 1, 1, '2018-11-21 10:07:21', '2018-11-21 10:09:14'),
(142, 'wwwwwwwwwww', 'https://www.youtube.com/watch?v=UkhZchDEEGA&list=RDUkhZchDEEGA&start_radio=1', './admin-assets/uploads/videos/2018/11/21/1cbf8be246a1a8c70e6f01cc150ec94d.PNG', 1, 1, '2018-11-21 10:07:30', '2018-11-28 14:14:03'),
(143, 'uiyuiiyuiui', 'https://www.youtube.com/watch?v=da7tfaUw7Vs&index=2&list=RDUkhZchDEEGA', './admin-assets/uploads/videos/2018/11/21/06f9db3fb2c9da4acbb0591d4ea2d696.PNG', 1, 0, '2018-11-21 10:07:34', '2018-11-21 10:07:35'),
(144, 'bhbhbvn', 'https://www.youtube.com/watch?v=UkhZchDEEGA&list=RDUkhZchDEEGA&start_radio=1', './admin-assets/uploads/videos/2018/11/21/c6534cff8d197c884d4752cfaa9fbac8.PNG', 1, 0, '2018-11-21 10:07:42', '2018-11-21 10:07:42'),
(148, 'guiiu', 'https://www.youtube.com/watch?v=da7tfaUw7Vs&index=2&list=RDUkhZchDEEGA', './admin-assets/uploads/videos/2018/11/21/f4b3d4ec63a11b95233aadf43f5ad8cf.PNG', 1, 0, '2018-11-21 10:08:09', '2018-11-21 10:08:09'),
(149, 'fghgfh', 'https://www.youtube.com/watch?v=DruYNHN4FYY', './admin-assets/uploads/videos/2018/11/21/fbd3028050ae4143ba1d25c8ba77134d.PNG', 1, 0, '2018-11-21 10:08:14', '2018-11-21 10:08:15'),
(150, 'fghfghffgh', 'https://www.youtube.com/watch?v=UkhZchDEEGA&list=RDUkhZchDEEGA&start_radio=1', './admin-assets/uploads/videos/2018/11/21/0f4b94fec346ee1971496934d2fea799.PNG', 1, 1, '2018-11-21 10:08:19', '2018-11-21 10:09:38'),
(151, 'iiiiiiiiiiiiiii', 'https://www.youtube.com/watch?v=DruYNHN4FYY', './admin-assets/uploads/videos/2018/11/21/134ff1a333a0f46b8017b6aaa1685a93.PNG', 1, 0, '2018-11-21 10:08:27', '2018-11-21 10:08:28'),
(152, 'yuyiui', 'https://www.youtube.com/watch?v=sSEcjZYKq50', './admin-assets/uploads/videos/2018/11/21/78efa4fabdac8a1fda9a9d529e49de48.PNG', 1, 0, '2018-11-21 10:08:32', '2018-11-21 10:08:32'),
(153, 'ioioii', 'https://www.youtube.com/watch?v=UkhZchDEEGA&list=RDUkhZchDEEGA&start_radio=1', './admin-assets/uploads/videos/2018/11/21/5f115df4c6649ef781f39544bcad965e.PNG', 1, 0, '2018-11-21 10:08:36', '2018-11-21 10:08:36'),
(154, 'iuouioou', 'https://www.youtube.com/watch?v=da7tfaUw7Vs&index=2&list=RDUkhZchDEEGA', './admin-assets/uploads/videos/2018/11/21/fd467dbd1c369c9668b4825569f30b87.PNG', 1, 0, '2018-11-21 10:08:40', '2018-11-21 10:08:41'),
(155, 'uioouou', 'https://www.youtube.com/watch?v=sSEcjZYKq50', './admin-assets/uploads/videos/2018/11/21/ccd0b890b5271504940358a9be6a35e8.PNG', 1, 0, '2018-11-21 10:08:48', '2018-11-21 10:08:48'),
(156, 'hjkhk', 'https://www.youtube.com/watch?v=DruYNHN4FYY', './admin-assets/uploads/videos/2018/11/21/75acd529a78bc4409da9ef414b7e5e17.PNG', 1, 2, '2018-11-21 10:08:54', '2018-12-18 11:21:34'),
(157, 'bhbhbvn', 'https://www.youtube.com/watch?v=sSEcjZYKq50', './admin-assets/uploads/videos/2018/11/28/65c2d5082c198a1229d40f623fb9b7ec.PNG', 1, 0, '2018-11-28 13:14:41', '2018-11-28 13:14:43'),
(158, 'iiiiiiiiiiiiiii', 'https://www.youtube.com/watch?v=UkhZchDEEGA&list=RDUkhZchDEEGA&start_radio=1', './admin-assets/uploads/videos/2018/11/28/7540df6db6db18edc1092337fdec89e4.PNG', 1, 9, '2018-11-28 13:14:52', '2019-10-28 08:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `website_details`
--

DROP TABLE IF EXISTS `website_details`;
CREATE TABLE IF NOT EXISTS `website_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about_us` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول معلومات الموقع';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad_banner`
--
ALTER TABLE `ad_banner`
  ADD CONSTRAINT `place_fk` FOREIGN KEY (`place_id`) REFERENCES `place_ad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `author_books`
--
ALTER TABLE `author_books`
  ADD CONSTRAINT `author_books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `author_books_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `author_news`
--
ALTER TABLE `author_news`
  ADD CONSTRAINT `author_news_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `author_news_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

--
-- Constraints for table `follow_sites`
--
ALTER TABLE `follow_sites`
  ADD CONSTRAINT `follow_sites_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_sites` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `media_fk` FOREIGN KEY (`media_dept_id`) REFERENCES `media_dept` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `img_news`
--
ALTER TABLE `img_news`
  ADD CONSTRAINT `img_id_fk` FOREIGN KEY (`img_id`) REFERENCES `images_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_id_fk` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `auther_fk` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`news_source_id`) REFERENCES `follow_sites` (`id`),
  ADD CONSTRAINT `update_user_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news_ticker`
--
ALTER TABLE `news_ticker`
  ADD CONSTRAINT `news_ticker_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_img`
--
ALTER TABLE `post_img`
  ADD CONSTRAINT `news_id_fk_img` FOREIGN KEY (`post_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_video`
--
ALTER TABLE `post_video`
  ADD CONSTRAINT `news_id_fk_video` FOREIGN KEY (`post_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag_news`
--
ALTER TABLE `tag_news`
  ADD CONSTRAINT `news_id_fk_tag` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag_id_fk` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_id_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
