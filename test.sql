-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-11-15 04:57:01
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

DELIMITER $$
--
-- 程序
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets` ()  begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 資料表結構 `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `msg` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislike` int(11) NOT NULL DEFAULT 0,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `guestbook`
--

INSERT INTO `guestbook` (`id`, `title`, `msg`, `name`, `status`, `likes`, `dislike`, `type`) VALUES
(13, 'svd', 'rtfgvghcx', 'shail', 0, 1, 8, '閒聊'),
(9, 'nine', 'msg nine', 'autho', 0, 0, 0, '閒聊'),
(14, '香蕉', '買香蕉', '香蕉大王', 0, 1, 2, '閒聊'),
(16, 'qwe', 'wwwww', '香蕉大王', 0, 0, 0, '八卦'),
(17, 'qqqq', '買香蕉', 'dddd', 0, 0, 0, '心情'),
(18, 'qqqq', '買香蕉', 'dddd', 0, 0, 0, '心情'),
(20, 'rwer', '3eweda', '香蕉大王', 0, 0, 0, '八卦'),
(22, 'qwe', '買香蕉', '香蕉大王', 0, 0, 0, '八卦'),
(23, '24342', '234', '香蕉大王', 0, 0, 0, '八卦'),
(24, 'fdfw', '買香蕉', '香蕉大王', 0, 0, 0, '心情'),
(25, 'dfffewf', 'wf', '香蕉大王', 0, 0, 0, '心情');

-- --------------------------------------------------------

--
-- 資料表結構 `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `msg` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `response`
--

INSERT INTO `response` (`id`, `mid`, `msg`) VALUES
(1, 14, 'rtfgvghcx'),
(2, 14, '買香蕉'),
(3, 14, '買芋頭'),
(4, 14, 'rtfgvghcx'),
(5, 9, 'rtfgvghcx'),
(6, 9, '買香蕉'),
(7, 9, '買芋頭'),
(8, 13, '買香蕉'),
(9, 13, '買芋頭'),
(16, 20, '買芋頭'),
(18, 20, '測試新增留言'),
(20, 20, '買芋頭'),
(21, 20, '買芋頭'),
(22, 20, '買香蕉'),
(23, 20, '買香蕉'),
(24, 20, '買芋頭'),
(25, 18, '買香蕉'),
(26, 18, '買芋頭'),
(27, 25, '買香蕉'),
(28, 25, 'rtfgvghcx'),
(29, 25, 'rtfgvghcx'),
(30, 25, '買香蕉'),
(31, 14, 'wwwww'),
(32, 14, 'wwwww'),
(33, 14, '買芋頭'),
(34, 25, '買芋頭'),
(35, 25, 'rtfgvghcx'),
(36, 25, 'wwwww'),
(37, 25, 'wwwww'),
(38, 25, '買芋頭'),
(39, 25, '3eweda'),
(40, 25, '測試新增留言'),
(41, 25, '測試新增留言'),
(42, 13, 'rtfgvghcx');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `loginID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`uid`, `loginID`, `password`, `role`, `level`) VALUES
(1, 'test', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'user', 5),
(2, 'myGod', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'admin', 5);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
