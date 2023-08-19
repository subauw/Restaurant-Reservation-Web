-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230313.0e600bb1f7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 03:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(5, 'Shenhe', 'shenhecyro@gmail.com', 'Advice', 'Add rental yacht'),
(6, 'Yelan', 'yelanhydro@gmail.com', 'Review', 'Nice place, so comfort and nice services'),
(8, 'Lisa', 'lisaelectro@gmail.com', 'Request', 'Add some dj'),
(9, 'Qiqi', 'qiqianemo@gmail.com', 'Review', 'A luxury place with premium services, Noza restaurant is the best restaurant I ever came'),
(10, '森川由紀', 'morikawayuki@gmail.com', '欲しいもの', 'カスタームパーチの部屋はちょっと少しで買いすぎ、エアコンはけっこ寒いけど食べ物はいいと思う'),
(11, 'Kazusa', 'kazusa@gmail.com', 'review', '5 stars');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `people` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `date`, `time`, `people`, `message`) VALUES
(6, 'Hu Tao', 'hutaopyro@gmail.com', '08213654978', '2022-06-20', '12:00:00', '50', 'I want premium lounge and luxury room for party'),
(7, 'Aether', 'aetheranemo@gmail.com', '03198754216', '2022-06-22', '15:00:00', '20', 'I want private parties with premium food'),
(8, 'Beidou', 'beidouelectro@gmail.com', '(+81) 5687 6584 5213', '2022-07-05', '17:00:00', '200', 'I want Custom Parties packet and I want some corona beer, asahi beer, jack daniels, and some cocktails shot. yeah'),
(9, '刹那小木曾', 'setsunaogiso@gmail.com', '(+81) 5687 12654 321', '2022-07-25', '14:00:00', '35', '何でもいい、ただ寒いところが嫌なの。大嫌い寒いところは、加田らが弱いだから。'),
(11, '贾浩宇', 'hayoujia@gmail.com', '(+71) 65487213', '2022-06-30', '20:00:00', '300', '我希望我的生日派对非常喜庆，我想要镀金和钻石的缎带，我想要昂贵的桌椅，我想要装饰有钻石的豪华高档餐具。'),
(12, '정현', 'jeonghyoen@gmail.com', '(+91) 6432879', '2022-07-01', '16:00:00', '40', '최고의 음식을 제공해야 하는 프라이빗 파티를 위해 레스토랑 전체를 주문하고 싶습니다.'),
(13, 'Shidou', 'shidou@gmail.com', '98764531', '2022-06-13', '14:00:00', '50', 'im order birthday parties');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
