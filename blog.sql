-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2015 at 01:39 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Level 1'),
(2, 'Level 2'),
(3, 'Level 3');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(35, 'cube.jpg'),
(36, 'cube.jpg'),
(37, 'cube.jpg'),
(38, 'cube.jpg'),
(39, 'cube.jpg'),
(40, 'cube.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(6) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `act` varchar(100) NOT NULL,
  `characters` varchar(100) NOT NULL,
  `contents` varchar(2000) NOT NULL,
  `videoname` varchar(50) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `act`, `characters`, `contents`, `videoname`, `date_posted`) VALUES
(17, 1, 'Romeo and juliet', 'Bob', 'Bob', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.', 'sample.mp4', '2015-09-25 09:29:36'),
(18, 3, 'Romeo and juliet', 'Romeo', 'Sean as Romeo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.', 'sample.mp4', '2015-09-25 09:30:04'),
(19, 2, 'Romeo and juliet', 'Romeo', 'Bob', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.', 'sample.mp4', '2015-09-25 09:30:17'),
(20, 1, 'Bob', 'Bob', 'Sean as Romeo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.', 'sample.mp4', '2015-09-25 09:30:36'),
(21, 2, 'Romeo and juliet', 'Bob', 'Bob', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.', 'sample.mp4', '2015-09-25 09:31:09'),
(22, 1, 'Romeo and juliet', 'Romeo', 'Sean as Romeo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac luctus purus. Proin tristique porta finibus. Cras sodales risus et turpis lobortis, eu euismod felis tincidunt. Aenean ultricies sed purus non accumsan. Etiam hendrerit, elit eu vestibulum feugiat, nisi nunc hendrerit purus, eget rutrum ipsum ante sed metus. Nam laoreet, nunc faucibus condimentum tempor, diam nunc fermentum justo, sit amet posuere orci justo vitae erat. Nunc non lectus sit amet sem tristique cursus. Donec condimentum aliquet leo in pellentesque. Ut consequat lectus vel felis aliquet egestas.', 'sample.mp4', '2015-09-25 09:31:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
