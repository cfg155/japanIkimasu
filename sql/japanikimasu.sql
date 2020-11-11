-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 03:33 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `japanikimasu`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idforum` int(11) NOT NULL,
  `memberName` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcomment`, `idforum`, `memberName`, `comment`, `date`) VALUES
(12, 8, 'Louis', 'katanya sih bisa', '2020-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `detailpackage`
--

CREATE TABLE `detailpackage` (
  `idpackage` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailpackage`
--

INSERT INTO `detailpackage` (`idpackage`, `name`, `desc`, `price`, `img`) VALUES
(1, 'Kyoto', 'Kyoto, once the capital of Japan, is a city on the island of Honshu. It\'s famous for its numerous classical Buddhist temples, as well as gardens, imperial palaces, Shinto shrines and traditional wooden houses. It’s also known for formal traditions such as kaiseki dining, consisting of multiple courses of precise dishes, and geisha, female entertainers often found in the Gion district.\r\n', '6400000', 'assets/kyoto.jpg'),
(2, 'Osaka', 'Osaka is a large port city and commercial center on the Japanese island of Honshu. It\'s known for its modern architecture, nightlife and hearty street food. The 16th-century shogunate Osaka Castle, which has undergone several restorations, is its main historical landmark. It\'s surrounded by a moat and park with plum, peach and cherry-blossom trees. Sumiyoshi-taisha is among Japan’s oldest Shinto shrines.\r\n', '5800000', 'assets/osaka.jpg'),
(3, 'Tokyo', 'Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. The Imperial Palace sits amid large public gardens. The city\'s many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum).\r\n', '6000000', 'assets/tokyo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `idfeedback` int(11) NOT NULL,
  `memberName` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`idfeedback`, `memberName`, `desc`, `date`) VALUES
(8, 'agus', 'mantap!!\r\n', '2020-07-08'),
(9, 'Louis', 'bkin live chat dungs\r\n', '2020-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `idforum` int(11) NOT NULL,
  `forumtitle` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`idforum`, `forumtitle`, `date`, `desc`) VALUES
(8, 'pembayaran', '2020-07-08', 'min bisa lewat bank BCA gak ?'),
(9, 'paket tournya ', '2020-07-08', 'paket tournya apa ja ya detailnya dong??');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `gender`, `dob`, `email`, `fullname`) VALUES
('agus', 'agus', 'Male', '1999-01-12', 'agus@agus.com', 'agus'),
('Louis', 'louis', 'Male', '1992-11-08', 'louis@louis.com', 'louis Leonardo');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `idrating` int(11) NOT NULL,
  `idpackage` int(11) NOT NULL,
  `memberName` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`idrating`, `idpackage`, `memberName`, `rate`, `comment`, `date`) VALUES
(12, 1, 'Louis', 5, 'keren abisss', '2020-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `detailpackage`
--
ALTER TABLE `detailpackage`
  ADD PRIMARY KEY (`idpackage`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`idfeedback`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`idforum`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`idrating`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detailpackage`
--
ALTER TABLE `detailpackage`
  MODIFY `idpackage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `idfeedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `idforum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `idrating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
