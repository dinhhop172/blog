-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2021 at 09:23 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keira_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_ibfk_1` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `content`, `post_id`, `date`) VALUES
(1, 'Keira Dom', 'dinhhop1702@gmail.com', 'good job bro', 8, '2021-08-12 05:25:39'),
(2, 'ad da', 'dinhhop1702@gmail.com', 'dadasd', 9, '2021-08-12 19:48:34'),
(3, 'domdom', 'keira@gmail.com', 'test comment', 9, '2021-08-12 20:21:41'),
(4, 'Rusi', 'rusi@gmail.com', 'ok thanks', 10, '2021-08-12 21:02:51'),
(5, 'leight', 'lei@gmail.com', 'thanks', 8, '2021-08-12 22:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` tinyint(4) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `rate`, `date`) VALUES
(8, 'Contemporary Pendant Lighting', '&lt;div&gt;Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://300b5338.vws.vegacdn.vn/image/img.news/0/0/0/4086.jpg&quot; width=&quot;400&quot; height=&quot;200&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://300b5338.vws.vegacdn.vn/image/img.news/0/0/0/4114.jpg&quot; width=&quot;400&quot; height=&quot;200&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Máº¥t máº¡ng - Ä‘Ã¢y lÃ  hai tiáº¿ng Ä‘Ã¡ng sá»£ nháº¥t mÃ  má»™t ngÆ°á»i bÃ¬nh thÆ°á»ng trong thá»i Ä‘áº¡i ngÃ y nay cÃ³ thá»ƒ nghe tháº¥y. KhÃ´ng pháº£i vÃ¬ há» Ä‘Æ°á»£c thÃ´ng bÃ¡o vá» cÃ¡i cháº¿t cá»§a chÃ­nh mÃ¬nh, trá»« khi bá»‹ ngáº¯t káº¿t ná»‘i cÅ©ng lÃ  má»™t dáº¡ng cháº¿t táº¡m thá»i.TÃ´i khÃ´ng hiá»ƒu cÃ¡c báº¡n tháº¿ nÃ o, chá»© giá» tÃ´i phÃ¡t sá»£ nhá»¯ng cuá»‘n sÃ¡ch dáº¡y thuáº­t Ä‘áº¯c nhÃ¢n tÃ¢m, vÃ¬ nÃ³ quÃ¡ Ä‘Ãºng, quÃ¡ chuáº©n, nhÆ°ng cÅ©ng â€¦ quÃ¡ khÃ´ng thá»ƒ thá»±c hiá»‡n Ä‘Æ°á»£c.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://300b5338.vws.vegacdn.vn/image/img.news/0/0/0/4124.jpg&quot; width=&quot;400&quot; height=&quot;200&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.&lt;/div&gt;', 'img_2021-08-12-10-44-10.jpg', NULL, '2021-08-12 03:44:10'),
(9, 'Minimal Rotating Disc Wall Clock', '&lt;div&gt;Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://300b5338.vws.vegacdn.vn/image/img.news/0/0/0/4086.jpg&quot; width=&quot;400&quot; height=&quot;200&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://300b5338.vws.vegacdn.vn/image/img.news/0/0/0/4114.jpg&quot; width=&quot;400&quot; height=&quot;200&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Máº¥t máº¡ng - Ä‘Ã¢y lÃ  hai tiáº¿ng Ä‘Ã¡ng sá»£ nháº¥t mÃ  má»™t ngÆ°á»i bÃ¬nh thÆ°á»ng trong thá»i Ä‘áº¡i ngÃ y nay cÃ³ thá»ƒ nghe tháº¥y. KhÃ´ng pháº£i vÃ¬ há» Ä‘Æ°á»£c thÃ´ng bÃ¡o vá» cÃ¡i cháº¿t cá»§a chÃ­nh mÃ¬nh, trá»« khi bá»‹ ngáº¯t káº¿t ná»‘i cÅ©ng lÃ  má»™t dáº¡ng cháº¿t táº¡m thá»i.TÃ´i khÃ´ng hiá»ƒu cÃ¡c báº¡n tháº¿ nÃ o, chá»© giá» tÃ´i phÃ¡t sá»£ nhá»¯ng cuá»‘n sÃ¡ch dáº¡y thuáº­t Ä‘áº¯c nhÃ¢n tÃ¢m, vÃ¬ nÃ³ quÃ¡ Ä‘Ãºng, quÃ¡ chuáº©n, nhÆ°ng cÅ©ng â€¦ quÃ¡ khÃ´ng thá»ƒ thá»±c hiá»‡n Ä‘Æ°á»£c.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://300b5338.vws.vegacdn.vn/image/img.news/0/0/0/4124.jpg&quot; width=&quot;400&quot; height=&quot;200&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Amy Krouse Rosenthal - nhÃ  viáº¿t ká»‹ch báº£n, nhÃ  lÃ m phim cho tráº» em qua Ä‘á»i á»Ÿ tuá»•i 51 vÃ¬ bá»‡nh ung thÆ° vÃ o 13.3.2017. BÃ i viáº¿t cÃ´ Ä‘á»ƒ láº¡i tÃ¬m báº¡n Ä‘á»i má»›i cho chá»“ng Ä‘Ã£ gÃ¢y cháº¥n Ä‘á»™ng máº¡ng xÃ£ há»™i khi nÃ³ Ä‘Æ°á»£c cÃ´ng bá»‘ 10 ngÃ y trÆ°á»›c khi Amy máº¥t trÃªn tá» New York Times.&lt;/div&gt;', 'img_2021-08-12-10-49-56.jpg', NULL, '2021-08-12 03:49:56'),
(10, 'Máº¹o Ä‘á»ƒ thá»Ÿ tá»‘t hÆ¡n', '&lt;p&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;Bá»‹t mÅ©i bÃªn trÃ¡i, thá»Ÿ ra rá»“i hÃ­t vÃ o báº±ng mÅ©i bÃªn pháº£i. Sau Ä‘Ã³, bá»‹t mÅ©i bÃªn pháº£i, thá»Ÿ ra rá»“i hÃ­t vÃ o báº±ng mÅ©i bÃªn trÃ¡i. Rá»“i cá»© tháº¿ tiáº¿p tá»¥c thá»Ÿ ra báº±ng mÅ©i bÃªn pháº£i. Giá»¯a má»—i chu ká»³, bÃ³p nháº¹ hai bÃªn. LÃ m Ä‘iá»u nÃ y trong 5 phÃºt. BÃ i táº­p nÃ y cÃ¹ng vá»›i hÃ­t thá»Ÿ sÃ¢u cÃ³ thá»ƒ cÃ³ tÃ¡c dá»¥ng tá»‘t cho huyáº¿t Ã¡p vÃ  nhá»‹p tim.&lt;/span&gt;&lt;/p&gt;&lt;div&gt;&lt;span style=&quot;color: rgb(17, 17, 17); font-family: Tno, &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 18px; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255); font-size: 18px; font-family: Tno, &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(17, 17, 17);&quot;&gt;&lt;img src=&quot;https://image.thanhnien.vn/2048/uploaded/congthang/2021_08_10/hittho_jnzz_utvx_rhva.jpg&quot; width=&quot;400&quot; height=&quot;300&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255); font-size: 18px; font-family: Tno, &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(17, 17, 17);&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;Thá»Ÿ lÃ  hÃ nh Ä‘á»™ng tá»± nhiÃªn, nhÆ°ng cÃ³ nhá»¯ng lÃ½ do khiáº¿n thá»Ÿ khÃ´ng hiá»‡u quáº£ vÃ  cÃ³ thá»ƒ áº£nh hÆ°á»Ÿng Ä‘áº¿n &lt;/span&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255); color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap;&quot;&gt;sá»©c khá»e &lt;/span&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255); color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap;&quot;&gt;. VÃ  cÃ³ nhá»¯ng cÃ¡ch giÃºp báº¡n cÃ³ thá»ƒ hÃ­t thá»Ÿ tá»‘t hÆ¡n. Thá»Ÿ á»Ÿ má»™t nhá»‹p Ä‘á»™ cÃ¢n báº±ng giÃºp duy trÃ¬ má»©c Ä‘á»™ lÃ nh máº¡nh cá»§a Ã´ xy vÃ  CO&lt;/span&gt;&lt;/div&gt;&lt;h1 style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;Thá»Ÿ báº±ng mÅ©i&lt;/span&gt;&lt;/h1&gt;&lt;div style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;Thá»Ÿ báº±ng mÅ©i cho phÃ©p cÃ¡c khoang mÅ©i giáº£m tiáº¿p xÃºc vá»›i cÃ¡c cháº¥t láº¡, lÃ m áº©m vÃ  áº¥m khÃ´ng khÃ­ hÃ­t vÃ o, tÄƒng lÆ°u lÆ°á»£ng khÃ­ Ä‘áº¿n Ä‘á»™ng máº¡ch, tÄ©nh máº¡ch vÃ  dÃ¢y tháº§n kinh, tÄƒng sá»± háº¥p thá»¥ vÃ  lÆ°u thÃ´ng Ã´ xy, giÃºp thá»Ÿ cháº­m láº¡i, cáº£i thiá»‡n thá»ƒ tÃ­ch phá»•i, giÃºp cÆ¡ hoÃ nh hoáº¡t Ä‘á»™ng tá»‘t, giáº£m nguy cÆ¡ dá»‹ á»©ng vÃ  viÃªm xoang, giáº£m nguy cÆ¡ bá»‹ ho, há»— trá»£ há»‡ thá»‘ng miá»…n dá»‹ch, giáº£m nguy cÆ¡ ngá»§ ngÃ¡y vÃ  ngÆ°ng thá»Ÿ khi ngá»§, theo&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;https://image.thanhnien.vn/2048/uploaded/congthang/2021_08_10/sk100801anh2_qqjl.jpg&quot; width=&quot;400&quot; height=&quot;300&quot;&gt; &lt;/span&gt;&lt;/div&gt;&lt;h2 style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;Ngá»§ Ä‘Ãºng tÆ° tháº¿ Ä‘á»ƒ thá»Ÿ tá»‘t hÆ¡n&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;TÆ° tháº¿ ngá»§ cÃ³ thá»ƒ giÃºp giáº£m bá»›t tÃ¬nh tráº¡ng khÃ³ thá»Ÿ. Náº±m nghiÃªng vá»›i má»™t chiáº¿c gá»‘i kÃª Ä‘áº§u vÃ  má»™t chiáº¿c gá»‘i khÃ¡c kÃª giá»¯a hai chÃ¢n. Náº¿u náº±m ngá»­a, hÃ£y Ä‘áº·t má»™t chiáº¿c gá»‘i dÆ°á»›i Ä‘áº§u vÃ  gá»‘i kia dÆ°á»›i Ä‘áº§u gá»‘i.&lt;/span&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;Uá»‘ng Ä‘á»§ nÆ°á»›c&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(32, 33, 36); font-family: consolas, &amp;quot;lucida console&amp;quot;, &amp;quot;courier new&amp;quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);&quot;&gt;Uá»‘ng Ä‘á»§ nÆ°á»›c Ä‘á»ƒ thá»Ÿ tá»‘t hÆ¡n. Uá»‘ng nhiá»u nÆ°á»›c hoáº·c cÃ¡c cháº¥t lá»ng khÃ¡c trong ngÃ y sáº½ giá»¯ cho mÃ ng nháº§y lÃ³t bÃªn trong phá»•i khá»e máº¡nh. Náº¿u lá»›p lÃ³t áº©m vÃ  má»ng, báº¡n sáº½ dá»… thá»Ÿ hÆ¡n.&lt;/span&gt;&lt;/p&gt;', 'img_2021-08-13-04-01-32.jpg', NULL, '2021-08-12 21:01:32');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
