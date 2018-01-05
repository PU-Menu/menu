-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-01-05 18:05:10
-- 伺服器版本: 10.1.26-MariaDB
-- PHP 版本： 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `menu`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `activity`
--

INSERT INTO `activity` (`activity_id`, `title`, `activity_content`, `created_at`) VALUES
(1, '［血觀音］和導演聊電影：楊雅喆中部首場見面會！', 'https://www.facebook.com/events/825387804306997/', '2018-01-05 16:53:01'),
(2, '文學 x 裏千家茶道（體驗班）', 'https://www.facebook.com/events/1321763511269122/', '2018-01-05 16:55:35'),
(3, '【作家午茶】許悔之：書寫的療癒，從詩談起', 'https://www.facebook.com/events/1462309837168073/', '2018-01-05 16:56:07');

-- --------------------------------------------------------

--
-- 資料表結構 `author`
--

CREATE TABLE `author` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `author`
--

INSERT INTO `author` (`id`, `name`, `img`, `content`) VALUES
(1, '諸葛亮', '1515169535gtwbI.jpg', '<p>181年&mdash;234年 諸葛亮，字孔明，琅琊陽都（今山東省沂南縣）人，三國時期蜀漢重要大臣，中國歷史上著名的政治家、軍事家、散文家、發明家，也是中國傳統文化中忠臣與智者的代表人物。諸葛亮在世時被封為武鄉侯，死後謚為忠武侯，所以常被稱為武侯、諸葛武侯，此外因其早年外號，也稱「臥龍」或「伏龍」。</p>'),
(2, '打狗啤酒', '1515170143WQ7ft.png', '<p><span style=\"font-size: x-large;\">81年&mdash;234年 諸葛亮，字孔明，琅琊陽都（今山東省沂南縣）人，三國時期蜀漢重要大臣，中國歷史上著名的政治家、軍事家、散文家、發明家，也是中國傳統文化中忠臣與智者的代表人物。諸葛亮在世時被封為武鄉侯，死後謚為忠武侯，所以常被稱為武侯、諸葛武侯，此外因其早年外號，也稱「臥龍」或「伏龍」</span></p>');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `account` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`account`, `password`, `permission`) VALUES
('admin', '0a14de5a76e5e14758b04c209f266726', 2),
('jay25330728', 'f3abb86bd34cf4d52698f14c0da1dc60', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `menu_table`
--

CREATE TABLE `menu_table` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_author` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `menu_table`
--

INSERT INTO `menu_table` (`menu_id`, `menu_name`, `menu_author`, `img`, `menu_content`, `created_at`) VALUES
(1, '水果優格沙拉套餐', '沙拉師傅', '1514823018OfNGo.jpg', '<h3 style=\"line-height: 50px; text-align: center;\">炎炎夏日首選！清爽沙拉與新鮮水果，淋上酸甜優格醬，永不敗的完美搭配。<br /> *套餐含一杯飲品。</h3>', '2018-01-01 16:10:18'),
(2, '手作披薩餃套餐', '義大利人', '1514823074u967f.jpg', '<h3 style=\"line-height: 50px; text-align: center;\">職人每日手作，烤至金黃的披薩餃包裹滿滿餡料，飽足又不油膩，美味滿分。<br /> *套餐含一杯飲品。</h3>', '2018-01-01 16:11:14'),
(3, '蒸蚌', '梗圖', '1514886284UTTJg.jpg', '<h1 style=\"text-align: center;\"><strong>就是一盤蒸蚌</strong></h1>', '2018-01-02 09:44:45');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_02_091413_menu_table', 1),
(4, '2017_12_10_045925_activity', 1),
(5, '2018_01_01_151622_author', 1),
(6, '2018_01_04_091629_member', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- 資料表索引 `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`account`);

--
-- 資料表索引 `menu_table`
--
ALTER TABLE `menu_table`
  ADD PRIMARY KEY (`menu_id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `menu_table`
--
ALTER TABLE `menu_table`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
