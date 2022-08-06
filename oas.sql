-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 07:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `title` varchar(105) NOT NULL,
  `iPrice` int(20) NOT NULL,
  `district` varchar(52) NOT NULL,
  `location` varchar(52) NOT NULL,
  `number` bigint(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `pictures` varchar(2000) NOT NULL,
  `delivery` varchar(52) NOT NULL,
  `pDate` text NOT NULL DEFAULT current_timestamp(),
  `eDate` datetime NOT NULL,
  `tags` varchar(100) NOT NULL,
  `wid` int(10) NOT NULL,
  `status` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`aid`, `uid`, `cid`, `title`, `iPrice`, `district`, `location`, `number`, `description`, `pictures`, `delivery`, `pDate`, `eDate`, `tags`, `wid`, `status`, `views`) VALUES
(13, 1, 2, 'Secondhand royal enfield 350 classic bike on sale at', 250000, 'Kaski', 'Pokhara', 9860050124, 'Ga 8 pa 5570 all tax are cleared upto 2076 if anybody interested in this item pls contact me\nContact no :\nContact me only intersted persons\nPls contact garda mobile numberma matrai massage call garnu', '1199.jpg: 1198.jpg', 'Free: Same District', '2022-06-09 14:05:03', '2022-08-20 18:59:48', 'bike,good milage', 0, 0, 5),
(16, 18, 6, 'Evofox Fireblade Gaming Wired Keyboard With Led Back', 2200, 'Lalitpur', 'asd', 9860050522, 'Brand - ‎Amkette\r\nManufacturer- ‎Allied Electronics And Magnetics Private Limited, Allied Electronics & Magnetics Pvt Ltd C-64/4, Okhla Industrial Area Phase 2, Delhi - 110020\r\nModel- ‎422\r\nModel Name', '3416.jpg: 3415.jpg', 'Not Available', '2022-06-09 14:22:52', '2022-08-30 18:59:56', 'computer,keyboard,led', 0, 0, 7),
(17, 18, 3, 'Fitlux 5200 elliptical ', 100000, 'Lalitpur', 'kusunti', 9860050010, 'Fitlux 5200 elliptical, used for a year. No scratches, like new\r\n\r\nPick up: Kusunti, close to Covenant Academy\r\n\r\nPrice : Rs. 100,000( negotiable', '3440.jpg: 3439.jpg: 3438.jpg', 'Not Available', '2022-06-09 14:27:10', '2022-08-30 12:00:00', 'fit,exercise,run', 0, 0, 9),
(18, 18, 9, 'Keema machine ', 30000, 'Gorkha', 'gaau', 9823052456, 'big grinder machine. new condition. automatic high power machine', '3550.jpg: 3551.jpg: 3549.jpg', 'Free: Same District', '2022-06-09 14:28:41', '2022-08-30 19:00:07', 'keema,fast', 0, 0, 7),
(36, 1, 6, 'Printer on sale', 8000, 'Nuwakot', 'test', 9823626473, 'Good condition printer on sale with minimal use. only used for a year.', '3545.jpg: 3544.jpg: 3543.jpg', 'Not Available', '2022-06-15 08:59:53', '2022-08-29 11:02:00', 'printer,canon,best', 0, 0, 10),
(37, 1, 2, 'Car', 10000, 'Syangja', 'thau', 9823626445, 'car on sale. 15kml milage. 26 lot. call for more details', '3437.jpg: 3436.jpg', 'Free: All Over Nepal', '2022-06-15 09:01:31', '2022-08-30 12:03:00', 'car,good milage', 0, 0, 3),
(38, 22, 6, 'FreshComputer', 8000, 'Nuwakot', 'sdfd', 98450458084, 'asd sdf sdfg sdjhgtgsd  sfsdaf asdasd \r\nasdsdfg fgh fg hfgh ', '3419.jpg', 'Free: Same District', '2022-08-02 13:18:52', '2022-08-27 17:22:00', 'computer,free,delevery', 0, 0, 3),
(40, 22, 6, 'Xiomi mi 2 band with heart rate monitor sale at kathmandu ', 1000, 'Gorkha', 'Hawa', 9823626473, 'Contact 9803875915 ,9869636101\nDelvery all over nepal\n\nt is a smart braclet for sport lovers\nDo you know how many steps you take, how many calories you consume, and how far you run?\nNow such prob', '226.jpg', 'Free: All Over Nepal', '2022-08-02 13:23:08', '2022-09-29 16:25:00', 'Watch,smart watch,free', 0, 0, 1),
(41, 21, 2, 'Secondhand dio scooter-scooty on sale at kathmandu ', 80000, 'Kathmandu', 'boudha', 9841785264, 'Secondhand dio scooter-scooty on sale at kathmandu\r\nUrgent sell please contact on my number', '1313.jpg: 1312.jpg: 1310.jpg', 'Not Available', '2022-08-02 13:27:36', '2022-08-30 12:02:00', 'scooty,bike,good milage', 0, 0, 0),
(42, 21, 14, 'Land on sale at lekhnath pokhara nepal   ', 500000, 'Kaski', 'lekhnath', 9823002300, 'Land on sale at lekhnath pokhara nepal\r\nनमस्कार नमस्कार पोखरा लेखनाथ रिठ्ठेपानी, ताल्चोक <-> रिठ्ठेपानी को बाटोमा आकर्सक घढेरी बिक्रिमा । २० हात मोडामा र 65 हात भन्दा बढी पिछाढ भएको आकर्सक, मज्जाको घर बनाएर बस्न मिल्ने, बाटो पानी बिजुली सबैको सुबिधा रहेको, थ्री सिस्टर किराना एन्ड कोल्ड स्टोर बाट १०० मिटर भित्र, इछुक ब्यकती ले ९८४६०३१३८६ मा संपर्क गर्न सक्नु हुन्छ। email बाट जवाफ दीइने छैन ।\r\n\r\nPrice : ५,५०,०००(हात) sligntly negotiable\r\n\r\nलेखनाथ ताल्चोक <-> रिठ्ठेपानी को बाटोमा आकर्सक राम्रो जग्ग', '3276.jpg: 3274.jpg', 'Not Available', '2022-08-02 13:37:22', '2022-08-23 16:39:00', 'land,good location', 0, 0, 1),
(43, 24, 2, 'Yamaha FZ25 Mate Black Dual ABS/FI', 320000, 'Kathmandu', 'gaushala', 9841234567, 'Very fresh conditions and no any single scratches…', '3721.jpg', 'Not Available', '2022-08-04 08:30:47', '2022-09-04 12:00:00', 'bike,good condition', 0, 0, 0),
(44, 24, 2, 'Secondhand hyundai magna car on sale at kathmandu  ', 2000000, 'Nuwakot', 'Hawa', 9823626502, 'Secondhand hyundai magna car on sale at kathmandu\r\nCar on sell .. Hyundai magna car 1.2\r\n2008 model...full option . Alloyee wheel\r\nRear wipper n heater.\r\nAll tyre new\r\nEngine supop\r\ncontact ....', '1333.jpg: 1330.jpg', 'Not Available', '2022-08-04 08:35:26', '2022-09-10 12:00:00', 'car,good condition', 0, 0, 0),
(45, 24, 3, 'Squat rack', 100000, 'Kathmandu', 'Jorpati', 9823002300, 'Heavy Quality Product\r\nMaximum load bearing 700 Kg\r\nPrevents the barbell from slipping down accidentally\r\nNot Easy To scratch', '6f869af6d3fac91382030afb0417f620.jpg', 'Free: Same District', '2022-08-04 08:45:39', '2022-08-19 11:11:00', 'Fitness,equipment', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `bid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bAmount` int(20) NOT NULL,
  `bTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`bid`, `aid`, `uid`, `bAmount`, `bTime`) VALUES
(11, 13, 1, 250201, '2022-06-10 18:11:46'),
(12, 13, 18, 250252, '2022-06-11 13:12:40'),
(18, 18, 19, 30150, '2022-08-02 12:00:10'),
(19, 13, 21, 250302, '2022-08-03 21:21:51'),
(20, 16, 1, 250352, '2022-08-03 21:33:22'),
(21, 18, 1, 30200, '2022-08-03 21:55:19'),
(22, 17, 21, 100100, '2022-08-03 22:04:14'),
(29, 13, 24, 250352, '2022-08-04 09:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cName` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cName`) VALUES
(1, 'Apparels & Accessories'),
(2, 'Automobiles'),
(3, 'Beauty & Health'),
(4, 'Books & Learning'),
(5, 'Business & Industrial'),
(6, 'Computers & Peripherals'),
(7, 'Electronics, TVs, & More'),
(8, 'Events & Happenings'),
(9, 'Fresh Veggies & Meat'),
(10, 'Furnishings & Appliances'),
(11, 'Mobile Phones & Accessories'),
(12, 'Music Instruments'),
(13, 'Pets & Pet Care'),
(14, 'Real Estate'),
(15, 'Sports & Fitness'),
(16, 'Toys & Video Games'),
(17, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(52) NOT NULL,
  `email` varchar(52) NOT NULL,
  `district` varchar(52) NOT NULL,
  `location` varchar(52) NOT NULL,
  `number` bigint(10) NOT NULL,
  `userType` varchar(52) NOT NULL,
  `document` varchar(2000) NOT NULL,
  `password` varchar(52) NOT NULL,
  `isHidden` int(11) NOT NULL,
  `pending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `district`, `location`, `number`, `userType`, `document`, `password`, `isHidden`, `pending`) VALUES
(1, 'Test1', 'test123@gmail.com', 'Rolpa', 'Boudha', 9800, 'User', '', 'password', 0, 0),
(18, 'John Doe', 'asdl@gmail.com', 'Dadeldhura', 'Nepal', 0, 'User', 'WIN_20220522_10_59_00_Pro.jpg', 'asd', 0, 0),
(19, 'admin', 'admin@gmail.com', 'Kathmandu', 'Boudha', 9860232456, 'Admin', '271735358_4826181197425119_1643323090819626610_n.jpg: 271747607_4826181080758464_6139992846661042761_n.jpg: 271707450_1194854377712695_4812588935611660856_n.jpg', 'admin', 0, 0),
(21, 'Test2', 'test2@gmail.com', 'Dadeldhura', 'Nepal', 9823654585, 'User', '283664017_799485347881244_282295101402187416_n.jpg: 279200796_5161038830630176_7196621672165697921_n.jpg', 'asdf', 0, 0),
(22, 'test2', 'test2@gmail.com', 'Syangja', 'Thamel', 9860050124, 'User', '265455796_426235885762856_2865905064779182531_n.jpg', 'asd', 0, 0),
(24, 'Sagar1', 'sagar@gmail.com', 'Kathmandu', 'Jorpati', 9841234567, 'User', '270137920_132557352558666_4443756241222005325_n.jpg', 'sagar123', 0, 0),
(25, 'suresh', 'suresh@gmail.com', 'Nuwakot', 'chaliseee', 9825364254, 'User', '20191106_180240.jpg', 'suresh', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `pid` (`aid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `auction_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`),
  ADD CONSTRAINT `auction_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `auction` (`aid`),
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
