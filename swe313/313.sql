-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2017 at 02:55 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swe424`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `pname` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `price` float NOT NULL,
  `img` varchar(100) NOT NULL,
  `cat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `created_at`, `updated_at`, `pname`, `des`, `price`, `img`, `cat`) VALUES
(3, '2016-05-03 21:16:07', '2016-05-03 21:16:07', 'package3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi, quisquam voluptatibus quis sit quas quod alias maiores aut adipisci. Eveniet, velit natus quaerat necessitatibus ea consequatur rem nisi voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur, maiores, corporis, optio accusantium perspiciatis veritatis temporibus nostrum saepe omnis aperiam illum odit quos cum eveniet possimus illo ad in.</p>\n								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi, quisquam voluptatibus quis sit quas quod alias maiores aut adipisci. Eveniet, velit natus quaerat necessitatibus ea consequatur rem nisi voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur, maiores, corporis, optio accusantium perspiciatis veritatis temporibus nostrum saepe omnis aperiam illum odit quos cum eveniet possimus illo ad in.</p>\n								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi, quisquam voluptatibus quis sit quas quod alias maiores aut adipisci. Eveniet, velit natus quaerat necessitatibus ea consequatur rem nisi voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur, maiores, corporis, optio accusantium perspiciatis veritatis temporibus nostrum saepe omnis aperiam illum odit quos cum eveniet possimus illo ad in.\n', 430, '', '0'),
(4, '2016-05-03 21:17:37', '2016-05-03 21:17:37', 'package4', '    \nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi, quisquam voluptatibus quis sit quas quod alias maiores aut adipisci. Eveniet, velit natus quaerat necessitatibus ea consequatur rem nisi voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur, maiores, corporis, optio accusantium perspiciatis veritatis temporibus nostrum saepe omnis aperiam illum odit quos cum eveniet possimus illo ad in.</p>\n								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi, quisquam voluptatibus quis sit quas quod alias maiores aut adipisci. Eveniet, velit natus quaerat necessitatibus ea consequatur rem nisi voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur, maiores, corporis, optio accusantium perspiciatis veritatis temporibus nostrum saepe omnis aperiam illum odit quos cum eveniet possimus illo ad in.</p>\n								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi, quisquam voluptatibus quis sit quas quod alias maiores aut adipisci. Eveniet, velit natus quaerat necessitatibus ea consequatur rem nisi voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur, maiores, corporis, optio accusantium perspiciatis veritatis temporibus nostrum saepe omnis aperiam illum odit quos cum eveniet possimus illo ad in.', 80, '', 'cat'),
(5, '2016-05-03 21:43:04', '2016-05-03 21:43:04', 'package5', '    \r\nSo I did figure this out… This is actually related directly to the rules module. I went into my sql database. The table "cache_rules" did not appear. Anywhere. But I discovered if I tried to create it, an error "table already exists" error would be returned. So I ran an sql query to delete the table, though it was not visible anywhere in the database. Received a message of success and proceeded to create the table again. All is fine now.', 100, '1462297384-avatar-1.jpg', 'category'),
(6, '2017-03-26 02:07:40', '2017-03-26 02:07:40', '', '    \r\nthis is hosting', 800, '1490515660-mojaimoja.jpg', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `token` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'm.shojol80@gmail.com', 'a149a47cfb801f90189fc9bedcd9ab09adfe47d04c2bb35e49fce664053f90dc', '2015-09-20 14:20:10'),
(4, 'm.shojol81@gmail.com', 'b8e4aed37548b67a2e103aaed4ad0dd6b8394609f852c3eabe52fff992773923', '2016-09-23 13:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `user_company_branche` varchar(300) NOT NULL,
  `user_company_cvr` varchar(300) NOT NULL,
  `user_company_address` varchar(400) NOT NULL,
  `pid` varchar(300) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `type` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `fname`, `user_company_branche`, `user_company_cvr`, `user_company_address`, `pid`, `gender`, `mobile`, `type`) VALUES
(1, 'r4', 'm.shojol80@gmail.com', '$2y$10$CZUYDRoe.pkzhvy3wS8L..sdVuc3LblWAQYBJrX6mkcYz25QiEQMm', '2015-12-28 16:16:52', '2015-12-28 10:16:52', 'HXoHr6ooYu443OMp7R9CoinzocNwamzHT07Hs4EvwNox3Olr4jgVUMYX9LlT', 'default.png', '', '', '', '', '', '', '0'),
(2, 'shojol80', 'm.shojol81@gmail.com', '$2y$10$CUTfsY4W6M9Ds8neZwx5Xu36FAN5M5QuUH5okjQ.6PM5NSy3kzHQW', '2016-09-24 10:22:56', '2016-09-24 04:22:56', 'ALGKscHW1GePnhTxtgFsChCdNV9Sc4sjYAiS3SLd723RZL9EXGUYuqJaXTMt', 'MONirizaa bgjhnjn', '', '', '', '23456788', 'male', '4567890-', '1'),
(3, 'test', 'Draner@hhh.com', '$2y$10$mLIDsX/ZZmi6r3fP1eOB.eqC9nuX7mnNliLNv79tl40o.1TeVswbG', '2016-09-23 20:48:52', '2015-12-23 17:16:49', '', 'moniruzzaman shojol', '', '', '', '', '', '', '0'),
(4, 'WSDFGBHN', 'asif@gmail.com', '$2y$10$EQLPHUBR4uX.ssubqzBpKe1LqoLRk1xGMt3r5/jvtxsyRCKhyL63.', '2015-12-23 19:33:51', '2015-12-23 19:33:51', '', 'default.png', '', '', '', '', '', '', '0'),
(5, 'Trestegspaketet', 'admin@site.com', '$2y$10$fOrVIYesMxBiDhqdRsJ6NOwtfU1rBfHM1lFtc8TC8Qat6fnFCsLBW', '2016-06-24 22:09:31', '2016-06-24 16:09:31', 'ZhxazzNFNXghLu7vtAwTV7UFkJjx0HgyLMAhDJMHSixkj9KFTgBlOPm2OcMm', 'default.png', '', '', '', '', '', '', '0'),
(6, 'uname', 'mdshojol@ymail.com', '$2y$10$wORidTaXBX2gQJNNyLzHNOpUoBWexkZa9mJ9/QQCN/GG/8Uh7kNEy', '2016-09-23 19:31:10', '2016-09-23 13:31:10', 'EUxgoQdIPtuUXNmiMW18XKJihkMLCWT0mgHbrbZqQsVcDt3tFiReiUapHAof', 'fname', '', '', '', '4567890', '', '4567890', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
