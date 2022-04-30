-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `projet`
--

-- --------------------------------------------------------

--
-- 資料表結構 `artucle`
--

CREATE TABLE `artucle` (
  `id` int(10) UNSIGNED NOT NULL,
  `artucle_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artucle_firstdate` datetime NOT NULL,
  `artucle_lastdate` datetime NOT NULL,
  `artucle_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artucle_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artucle_content_view` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artucle_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `artucle`
--

INSERT INTO `artucle` (`id`, `artucle_type`, `artucle_firstdate`, `artucle_lastdate`, `artucle_title`, `artucle_content`, `artucle_content_view`, `artucle_img`, `display`) VALUES
(65, '公會資訊', '2020-01-14 23:41:39', '0000-00-00 00:00:00', '公會資訊test', '<p>test</p>', 'test', '1579016499_攻略.png', 1),
(66, '公會資訊', '2020-01-14 23:43:15', '0000-00-00 00:00:00', '公會資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016595_.......png', 1),
(67, '公會資訊', '2020-01-14 23:43:22', '0000-00-00 00:00:00', '公會資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016602_討論.png', 1),
(68, '公會資訊', '2020-01-14 23:43:29', '0000-00-00 00:00:00', '公會資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016609_問題.png', 1),
(69, '公會資訊', '2020-01-14 23:43:35', '0000-00-00 00:00:00', '公會資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016615_情報.png', 1),
(70, '遊戲資訊', '2020-01-14 23:47:55', '0000-00-00 00:00:00', '遊戲資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016875_其他.png', 1),
(71, '遊戲資訊', '2020-01-14 23:48:07', '0000-00-00 00:00:00', '遊戲資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016887_疑問.png', 1),
(72, '遊戲資訊', '2020-01-14 23:48:18', '0000-00-00 00:00:00', '遊戲資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016898_問題.png', 1),
(73, '遊戲資訊', '2020-01-14 23:48:26', '0000-00-00 00:00:00', '遊戲資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016906_情報.png', 1),
(74, '遊戲資訊', '2020-01-14 23:49:30', '0000-00-00 00:00:00', '遊戲資訊test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016970_心得.png', 1),
(75, '遊戲攻略', '2020-01-14 23:49:45', '0000-00-00 00:00:00', '遊戲攻略test', '<p>編輯文章內容</p>', '編輯文章內容', '1579016985_討論.png', 1),
(76, '遊戲攻略', '2020-01-14 23:50:00', '0000-00-00 00:00:00', '遊戲攻略test', '<p>編輯文章內容</p>', '編輯文章內容', '1579017000_問題.png', 1),
(77, '遊戲攻略', '2020-01-14 23:50:06', '0000-00-00 00:00:00', '遊戲攻略test', '<p>編輯文章內容</p>', '編輯文章內容', '1579017006_情報.png', 1),
(78, '遊戲攻略', '2020-01-14 23:50:13', '0000-00-00 00:00:00', '遊戲攻略test', '<p>編輯文章內容</p>', '編輯文章內容', '1579017013_.......png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `banner`
--

INSERT INTO `banner` (`id`, `banner_img`, `display`) VALUES
(18, '1579011694_mainb_191219_ppdd.jpg', 1),
(19, '1579011888_subb_180607_reminiscence.jpg', 1),
(20, '1579011895_subb_190624_15th.jpg', 1),
(21, '1579011900_subb_191205_19winter.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pwd`) VALUES
(1, 'admin', 1234);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `artucle`
--
ALTER TABLE `artucle`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `artucle`
--
ALTER TABLE `artucle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
