-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2022 at 02:10 PM
-- Server version: 5.7.36
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jenkeo1_finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `completeorders`
--

CREATE TABLE `completeorders` (
  `OrderID` int(255) NOT NULL,
  `OrderNumber` int(255) NOT NULL,
  `OrderUsername` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `completeorders`
--

INSERT INTO `completeorders` (`OrderID`, `OrderNumber`, `OrderUsername`) VALUES
(1, 1, 'person');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeUsername` varchar(255) NOT NULL,
  `EmployeeEmail` varchar(255) NOT NULL,
  `EmployeePw` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeUsername`, `EmployeeEmail`, `EmployeePw`) VALUES
('admin', 'tlmteddybear@gmail.com', 'admintest123!'),
('test123', 'teafadsfa@gmail.com', 'ughughugh'),
('admintest', 'admin@gmail.com', '2550'),
('Test!!!!!!!!!!!', 'Test!!!!@gmail.com', 'testtestest'),
('admin2', 'admin@gmail.com', '2550');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `productid` int(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`productid`, `quantity`) VALUES
(1123, '10'),
(7, '5'),
(8, '5'),
(9, '5'),
(10, '5'),
(11, '12'),
(12, '12'),
(13, '12'),
(14, '12'),
(15, '12'),
(16, '12'),
(17, '12'),
(18, '12'),
(19, '12'),
(20, '12'),
(21, '12'),
(22, '12'),
(23, '12'),
(24, '12'),
(25, '12'),
(26, '12'),
(27, '12'),
(28, '12'),
(29, '12'),
(30, '12'),
(31, '12'),
(32, '12'),
(33, '12'),
(34, '12'),
(35, '12'),
(36, '12'),
(37, '12'),
(38, '12'),
(39, '12'),
(40, '12'),
(41, '12'),
(42, '12'),
(55, '8');

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE `productinfo` (
  `productname` varchar(255) NOT NULL,
  `productid` int(255) NOT NULL,
  `price` float(10,0) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` int(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`productname`, `productid`, `price`, `category`, `quantity`, `Description`) VALUES
('Test111', 1123, 10, 'Pets', 8, 'Test product '),
('Baby Yoda Plushie', 7, 13, 'Plushies', 3, 'The cuteness is strong with this one. Enjoy your own replica of Baby Yoda with this soft plushie.'),
('Jabba The Hut Plushie', 8, 20, 'Plushies', 3, 'Do not be a weak minded fool and grab your own Jabba The Hut Plushie.'),
('Chewbacca Plushie', 9, 25, 'Plushies', 3, 'WRRARGGGHH!'),
('R2-D2 Plushie', 10, 13, 'Plushies', 3, 'Start beepbopping with this gem of a robot!'),
('Millennium Falcon Bed Set', 11, 50, 'Home', 10, ''),
('Galaxy of Adventures Bathroom Rug Set', 12, 25, 'Home', 10, ''),
('Baby Yoda Rug', 13, 150, 'Home', 10, ''),
('Jedi Lightsaber Lightswitch', 14, 20, 'Home', 10, ''),
('May the Force Be With You Couch Pillows', 15, 20, 'Home', 10, ''),
('Storm Trooper Couch Covers', 16, 30, 'Home', 10, ''),
('Millennium Falcon Bed Set', 17, 50, 'Home', 10, 'Soar through the galaxies with this complete bed set which includes two pillowcases, one blanket, and one sheet.'),
('Galaxy of Adventures Bathroom Rug Set', 18, 25, 'Home', 10, 'Travel through the world of Star Wars in style. Item includes two bathroom rugs and a toilet case.'),
('Baby Yoda Rug', 19, 150, 'Home', 10, 'The cuteness is strong with this 8X7 organic rug.'),
('Jedi Lightsaber Lightswitch', 20, 20, 'Home', 10, 'Become a jedi in every room. Includes a screwless lightswitch plate to decorate your home.'),
('May the Force Be With You Couch Pillows', 21, 20, 'Home', 10, 'Set of two pillows are included.'),
('Storm Trooper Couch Covers', 22, 30, 'Home', 10, 'Enforce the rules with lightweight waterproof couch cover. Fits small twoseats.'),
('Mandalorian T-shirt', 23, 20, 'Apparel', 10, 'Mandalorian T-Shirt.'),
('R2-D2 Onesie', 24, 50, 'Apparel', 10, 'Start beep-bopping in this organic cotton onesie. One size fits all.'),
('Dantoonie Socks', 25, 13, 'Apparel', 10, 'Be out of this galaxy with the unisex Dantoonie socks. Includes sizes that cover 7-10. '),
('Endor Sweater', 26, 50, 'Apparel', 10, 'The Return of the Jedi showcases with this Endor planet graphic sweater.'),
('Star Wars Pajamas', 27, 28, 'Apparel', 10, 'Lounge in Star Wars gear in peace. PJ set includes top and bottoms.'),
('Han Solo Pants', 28, 26, 'Apparel', 10, 'Nothing is better than having Han Solo on your pants. Created with Spandex and Cotton.'),
('Lightsaber Hair Pins', 29, 13, 'Accessories', 10, 'These lighstaber hair pins range in the colors green, blue, red, yellow, and purple.'),
('Stormtrooper Gloves', 30, 17, 'Accessories', 10, 'Become a real stormtropper with a pair of gloves. Insulated with wool for cold winters.'),
('C-3PO Sun Glasses', 31, 20, 'Accessories', 10, 'Block out the haters and the dark side with these shinny gold Sun Glasses.'),
('Darth Maul Earrings', 32, 13, 'Accessories', 10, 'Avenge yourself with these showstopping earrings. Made in glass.'),
('Jabba The Hut Backpack', 33, 50, 'Accessories', 10, 'You weak minded fool! Store your most precious bounties in this medium sized backpack. Made out of canvas.'),
('BB-8 Snapback', 34, 40, 'Accessories', 10, 'Five panel snapback designed to look like BB-8 in all their glory. One size fits all.'),
('Chewbacca Chew Toy', 35, 10, 'Pets', 10, 'This furry and squishy chew toy of Chewbaccka will have your furrt pet squealing.'),
('Darth Vader Costume', 36, 70, 'Pets', 10, ''),
('Mandaloran Booties', 37, 20, 'Pets', 10, 'The cuteness is strong with this 8X7 organic rug.'),
('Jedi Dog and Cat Bedding', 38, 30, 'Pets', 10, 'Now your furry friends can be enjoy the jedi lifestyle too with this plush bedding.'),
('Star Wars Water and Food Bowl', 39, 15, 'Pets', 10, 'Set of water and food bowls.'),
('Tattooine Collar', 40, 30, 'Pets', 10, 'This collar includes a small crystal ornamet of the planet of Tattoine for your furry animal. Adjustable straps to fit perfectly around neck.'),
('Admiral Ackbar Plushie', 41, 20, 'Plushies', 10, 'Steer the ship with this cutie! Made out of cotton and nylon.'),
('Mace Windu Plushie', 42, 20, 'Plushies', 10, 'Enjoy this loveable Jedi Master in a fun-size version!'),
('te', 55, 12, 'Home', 6, 'regergerge'),
('Yoda leggings', 71, 15, 'apparel', 8, 'made with organic cotton');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserUsername` varchar(255) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UserPw` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserUsername`, `UserEmail`, `UserPw`) VALUES
('person', 'jenkeo1@montclri.edu', 'personpassword123!'),
('clienttest', 'dsafasdfs@gmail.com', 'ughughugh'),
('ddf', 'fdfd', 'dffd'),
('test!!!1234', 'test1233434@gmail.com', 'test!!!23242'),
('customer1', 'customer@gmail.com', '2550');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completeorders`
--
ALTER TABLE `completeorders`
  ADD PRIMARY KEY (`OrderID`),
  ADD UNIQUE KEY `OrderNumber` (`OrderNumber`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `productinfo`
--
ALTER TABLE `productinfo`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserUsername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completeorders`
--
ALTER TABLE `completeorders`
  MODIFY `OrderNumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productinfo`
--
ALTER TABLE `productinfo`
  MODIFY `productid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
