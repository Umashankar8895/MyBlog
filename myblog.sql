-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 04:04 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created_at`, `image_path`) VALUES
(20, 'About PHP', 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft&#039;s ASP.', 1, '2018-07-31 16:25:03', 'http://[::1]/myblog/uploads/a.jpg'),
(21, 'Java Script', 'JavaScript is the programming language of HTML and the Web. JavaScript is easy to learn. This tutorial will teach you JavaScript from basic to advanced.', 1, '2018-07-31 16:26:04', 'http://[::1]/myblog/uploads/a.jpg'),
(22, 'About CSS', 'CSS is a language that describes the style of an HTML document. CSS describes how HTML elements should be displayed. This tutorial will teach you CSS from basic to advanced.', 1, '2018-07-31 16:27:00', 'http://[::1]/myblog/uploads/a.jpg'),
(23, 'HTML', 'With HTML you can create your own Website. This tutorial teaches you everything about HTML. HTML is easy to learn - You will enjoy it.....', 1, '2018-07-31 16:27:33', 'http://[::1]/myblog/uploads/a.jpg'),
(25, 'Bootstrap', 'Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites. Bootstrap is completely free to download and use!', 1, '2018-07-31 16:28:55', 'http://[::1]/myblog/uploads/a.jpg'),
(26, 'JQuery', 'jQuery is a JavaScript Library. jQuery greatly simplifies JavaScript programming. jQuery is easy to learn.', 1, '2018-07-31 16:29:51', 'http://[::1]/myblog/uploads/a.jpg'),
(27, 'AngularJS', 'AngularJS extends HTML with new attributes. AngularJS is perfect for Single Page Applications (SPAs). AngularJS is easy to learn.', 1, '2018-07-31 16:30:51', 'http://[::1]/myblog/uploads/a.jpg'),
(28, 'PHP 5.6.37 Released', 'The PHP development team announces the immediate availability of PHP 5.6.37. This is a security release. Several security bugs have been fixed in this release. All PHP 5.6 users are encouraged to upgrade to this version.', 1, '2018-07-31 16:51:57', 'http://[::1]/myblog/uploads/a.jpg'),
(29, 'About Java', 'Java is a programming language and a platform. Java is a high level, robust, secured and object-oriented programming language. Platform: Any hardware or software environment in which a program runs, is known as a platform. Since Java has its own runtime environment (JRE) and API, it is called platform.', 3, '2018-08-02 08:31:58', 'http://[::1]/myblog/uploads/a.jpg'),
(30, 'About C++', 'C++ tutorial provides basic and advanced concepts of C++. Our C++ tutorial is designed for beginners and professionals. C++ is an object-oriented programming language. It is an extension to C programming. Our C++ tutorial includes all topics of C++ such as first example, control statements, objects and classes, inheritance, constructor, destructor, this, static, polymorphism, abstraction, abstract class, interface, namespace, encapsulation, arrays, strings, exception handling, File IO, etc.', 3, '2018-08-02 09:07:44', 'http://[::1]/myblog/uploads/flower.jpg'),
(31, 'About CodeIgnitor', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.', 3, '2018-08-02 12:52:34', 'http://[::1]/myblog/uploads/a.jpg'),
(32, 'About Computer', 'A computer is a programmable machine that is both electronic and digital. The actual machinery is hardware; the instructions and data is software.', 3, '2018-08-02 13:03:08', 'http://[::1]/myblog/uploads/flower.jpg'),
(33, 'About PHP', 'joipnljo;ln/', 3, '2018-08-02 13:52:04', 'http://[::1]/myblog/uploads/a.jpg'),
(35, 'About Computer2', 'A computer is a device that can be instructed to carry out sequences of arithmetic or logical operations automatically via computer programming. Modern computers have the ability to follow generalized sets of operations, called programs. These programs enable computers to perform an extremely wide range of tasks.\r\n\r\nComputers are used as control systems for a wide variety of industrial and consumer devices. This includes simple special purpose devices like microwave ovens and remote controls, factory devices such as industrial robots and computer-aided design, and also general purpose devices like personal computers and mobile devices such as smartphones.\r\n\r\nEarly computers were only conceived as calculating devices. Since ancient times, simple manual devices like the abacus aided people in doing calculations. Early in the Industrial Revolution, some mechanical devices were built to automate long tedious tasks, such as guiding patterns for looms. More sophisticated electrical machines did specialized analog calculations in the early 20th century. The first digital electronic calculating machines were developed during World War II. The speed, power, and versatility of computers have been increasing dramatically ever since then.', 3, '2018-08-02 16:23:21', 'http://[::1]/myblog/uploads/a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `fname`, `lname`) VALUES
(1, 'uma', '123', 'umashankar', 'maurya'),
(3, 'jay', '123', 'wrtwet', 'wrtyr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
