-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2017 at 07:12 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 7.0.17-2+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pname` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `price` float NOT NULL,
  `img` varchar(100) NOT NULL,
  `cat` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `created_at`, `updated_at`, `pname`, `des`, `price`, `img`, `cat`) VALUES
(7, '2017-03-26 15:08:03', '2017-03-26 09:08:03', '', '    this is good package after alll\r\n', 800, '1490540883-avatar-1.jpg', 'High Voltage');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `token` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'm.shojol80@gmail.com', 'a149a47cfb801f90189fc9bedcd9ab09adfe47d04c2bb35e49fce664053f90dc', '2015-09-20 14:20:10'),
(5, 'm.shojol81@gmail.com', '7934cc7087bb513685895d25bb6c2a64b86c575f931dd4f49efb732b8333d4d1', '2017-03-31 00:52:58'),
(6, 'dheutinmarka@gmail.com', '27edea3f643feb6670670ae187013e9fbae91b0a63d196eb29d3dca2a64e18cc', '2017-03-31 00:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `pid` varchar(300) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `type` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `fname`, `pid`, `gender`, `mobile`, `type`) VALUES
(7, 'asfasf', 'oggy@oggy.com', '$2y$10$haTz2r.SRRS12a1dLbTRlOUaQhBGbTaDjCBzsKCnX70Gz1GSBvXUW', '2017-04-09 08:56:35', '2017-04-09 02:56:35', 'gwVarvZOEsMZMLd1fAUBvgwwJx56IGf2VrzCkaXk78bEdYqic7FMHJPpfQ6k', 'dsasdf', 'rr', 'male', 'eeeeeeeeeeeee', '1'),
(8, 'fasdfasf', 'afad@afa.com', '$2y$10$Nue1H.5m0gJkJ3HSeNzihuglCFuhefNTQRQgLAQx/xprAzHxloQt.', '2017-03-30 17:17:32', '2017-03-30 11:17:32', 'n6ZaGSLxImtS5D5ycWY6a3FXNmfb774OVxL3dohqyaAhiVTNB2uADrJhUjPi', 'asfasdfa', '12', 'male', '9985858585', '0'),
(9, 'fasfasf', 'afafasf@gafa.com', '$2y$10$FwI9bipYV8l4CFM9d843AevvGH4rDbf4GW/qDJgS84qK0wMATUgO.', '2017-03-30 21:47:04', '2017-03-30 21:47:04', '', 'awfeafas', '5555', 'femal', '39939r93rqwer', '0'),
(10, 'faf', 'dheutinmarka@gmail.com', '$2y$10$V1CsGg2JR2zYJvazyIGZ6O.IVVw0sjs5jPolmoEnDSoH19ZsycvNm', '2017-03-31 06:54:08', '2017-03-31 00:54:08', 'YKdVqQqZzxt16CLzZwsFM4YFGHWvgYRR51nWMd5NAdD9VYbe5gP2IdtCpJSf', 'asfdasfas', '12222', 'male', '884848484848', '0'),
(11, 'dfasdfasf', 'r@r.com', '$2y$10$FtGXHDukq5CxLJ5gMjtpI.8PHUopYD8Nw/09v27cxrHcCSSbTcTQS', '2017-04-02 09:00:06', '2017-04-02 03:00:06', '2BF5w6TxDvyEuJnW2vl2A0JBdWzaUPwD6gybLcNmu3n70huC4Dj1XRBSW8Qf', 'dfasdfas', '111', 'male', '9347477474', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE IF NOT EXISTS `user_activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `malicious_payload` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `browser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user_activities`
--

INSERT INTO `user_activities` (`id`, `created_at`, `updated_at`, `malicious_payload`, `browser`, `ip`) VALUES
(10, '2017-04-01 12:14:26', '2017-04-01 12:14:26', '&gt;&gt;&gt;&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(14, '2017-04-01 12:59:56', '2017-04-01 12:59:56', '&lt;taerer&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(30, '2017-04-01 23:11:04', '2017-04-01 23:11:04', '&lt;istest&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(31, '2017-04-01 23:11:30', '2017-04-01 23:11:30', '&quot;/&gt;&lt;svg/onload=prompt(1)&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(32, '2017-04-01 23:38:10', '2017-04-01 23:38:10', '&quot;/&gt;&lt;svg/onload=prompt(1)&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(33, '2017-04-01 23:38:39', '2017-04-01 23:38:39', '&quot;/&gt;&lt;svg/onload=prompt(erwerwererer)&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(34, '2017-04-02 01:52:11', '2017-04-02 01:52:11', '&lt;script&gt;alert(''xss'')&lt;/script&gt;', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.98 Safari/537.36 OPR/44.0.2510.857', '::1'),
(35, '2017-04-02 01:52:22', '2017-04-02 01:52:22', '&lt;script&gt;alert(''xss'')&lt;/script&gt;', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.98 Safari/537.36 OPR/44.0.2510.857', '::1'),
(36, '2017-04-02 03:21:59', '2017-04-02 03:21:59', '&lt;taerer&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(37, '2017-04-09 02:45:59', '2017-04-09 02:45:59', '&lt;taerer&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(38, '2017-04-09 02:47:32', '2017-04-09 02:47:32', '&lt;script&gt;alert(''oashi'')&lt;/script&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(39, '2017-04-09 02:50:00', '2017-04-09 02:50:00', '&lt;&gt;', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '192.168.1.138'),
(40, '2017-04-09 03:55:50', '2017-04-09 03:55:50', '&lt;script&gt;alert(''jumboo'')&lt;/script&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(41, '2017-04-13 01:01:53', '2017-04-13 01:01:53', '&lt;script&gt;alert(''akand'')&lt;/script&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1'),
(42, '2017-04-13 02:51:33', '2017-04-13 02:51:33', '&lt;script&gt;alert(''cr'')&lt;/script&gt;', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
