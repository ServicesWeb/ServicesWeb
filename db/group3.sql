-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 24, 2015 at 12:51 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `group3`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `category`, `name`, `price`, `in_stock`, `description`, `img`) VALUES
(1, 'HC', 'AAA Clean', 100, 98, 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/AAAClean.jpg'),
(2, 'IN', 'JJ Indian', 100, 100, 'Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! ', 'img/seller/jjindian.jpg'),
(3, 'SW', 'aqua swim', 100, 100, 'aqua swimaqua swimaqua swimaqua swimaqua swimaqua swim', 'img/seller/aquaswim.jpg'),
(4, 'MM', 'Com Moving', 100, 100, 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/commoving.jpg'),
(5, 'MM', 'FFR moving', 100, 100, 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/ffrmoving.jpg'),
(6, 'CD', 'PX driving', 100, 94, 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/pxdriving.jpg'),
(7, 'GP', 'WW Grocery', 100, 100, 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/wwgrocery.jpg'),
(8, 'SW', 'Water Swim', 100, 99, 'Water SwimWater SwimWater SwimWater SwimWater SwimWater Swim', 'img/seller/waterswim.jpg'),
(9, 'RP', 'BBAA Repair', 100, 100, 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/BBAArepair.jpg'),
(10, 'FR', 'Bimb French', 100, 100, 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/BimbFrench.jpg'),
(11, 'CD', 'Box Driving', 100, 63, 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/boxdriving.jpg'),
(12, 'FR', 'Brie French', 100, 99, 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/briefrench.jpg'),
(13, 'DR', 'Chau Driver', 100, 100, 'Chau DriverChau DriverChau DriverChau Driver', 'img/seller/Chaudriver.jpg'),
(14, 'FR', 'Coff french', 100, 100, 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/cofffrench.jpg'),
(15, 'FR', 'Juan French', 100, 100, 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/juanfrench.jpg'),
(16, 'RP', 'Love Repair', 100, 100, 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/loverepair.jpg'),
(17, 'DR', 'Main Driver', 100, 98, 'Main DriverMain DriverMain DriverMain DriverMain DriverMain DriverMain Driver', 'img/seller/maindriver.jpg'),
(18, 'MM', 'rush moving', 100, 100, 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/rushmoving.jpg'),
(19, 'SP', 'Aamy Spanish', 100, 100, 'How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? ', 'img/seller/aamyspanish.jpg'),
(20, 'PB', 'Bob Plumbing', 100, 100, 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/BobPlumbing.jpg'),
(21, 'CO', 'Fly computer', 100, 100, 'Fly computerFly computerFly computerFly computerFly computerFly computerFly computer', 'img/seller/flycomputer.jpg'),
(22, 'MM', 'Handy Moving', 100, 100, 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/handymoving.jpg'),
(23, 'SP', 'Icon Spanish', 100, 100, 'How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? ', 'img/seller/iconspanish.jpg'),
(24, 'CD', 'Keep Driving', 100, 94, 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/keepdriving.jpg'),
(25, 'CD', 'Limo Driving', 100, 100, 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/limodriving.jpg'),
(26, 'WD', 'Paws Walking', 100, 56, 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/pawswalkingdog.jpg'),
(27, 'IN', 'Roshi Indian', 100, 100, 'Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! ', 'img/seller/roshiindian.jpg'),
(28, 'PB', 'SCU Plumbing', 100, 99, 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/SCUPlumbing.jpg'),
(29, 'CD', 'Ucer Driving', 100, 100, 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/Ucerdriving.jpg'),
(30, 'PB', 'Bill Plumbing', 100, 100, 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/BillPlumbing.jpg'),
(31, 'JA', 'Fish Japanese', 100, 100, 'I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! ', 'img/seller/fishjapanese.jpg'),
(32, 'HC', 'Jack Cleaning', 100, 97, 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/JackHouseCleaning.jpg'),
(33, 'GP', 'Large Grocery', 100, 89, 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/largegrocery.jpg'),
(34, 'WD', 'Puppy Walking', 100, 88, 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/puppywalking.jpg'),
(35, 'MM', 'Settle Moving', 100, 100, 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/settlemoving.jpg'),
(36, 'GP', 'Slide Grocery', 100, 100, 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/slidegrocery.jpg'),
(37, 'WD', 'Smile Walking', 100, 94, 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/smilewalking.jpg'),
(38, 'GD', 'Tom Gardening', 100, 100, 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/TimGD.jpeg'),
(39, 'HC', 'Vincent Clean', 100, 100, 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/Vincentclean.jpg'),
(40, 'RP', 'Winter Repair', 100, 100, 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/winterrepair.jpg'),
(41, 'CO', 'Child Computer', 100, 100, 'Child ComputerChild ComputerChild ComputerChild ComputerChild ComputerChild ComputerChild Computer', 'img/seller/childcomputer.jpg'),
(42, 'HC', 'Fenny Cleaning', 100, 100, 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/FennyCleaning.jpg'),
(43, 'HC', 'Merry Cleaning', 100, 100, 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/MerryHouseCleaning.jpg'),
(44, 'GP', 'Peapod Grocery', 100, 100, 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/peapodgrocery.jpg'),
(45, 'CH', 'Sunset Chinese', 100, 100, 'Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! ', 'img/seller/sunsetchinese.jpg'),
(46, 'JA', 'Sushi Japanese', 100, 99, 'I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! ', 'img/seller/sushijapanese.jpg'),
(47, 'GD', 'Tony Gardening', 100, 100, 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/TonyGD.jpg'),
(48, 'GD', 'Alice Gardening', 100, 100, 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/AliceGD.jpeg'),
(49, 'CH', 'Beijing Chinese', 100, 98, 'Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! ', 'img/seller/beijingchinese.jpg'),
(50, 'PB', 'Camino Plumbing', 100, 100, 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/CaminoPlumbing.jpg'),
(51, 'PB', 'Campus Plumbing', 100, 100, 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/CampusPlumbing.jpg'),
(52, 'GD', 'Melody Garening', 100, 100, 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/MelodyGD.jpg'),
(53, 'GP', 'Omarion Grocery', 100, 100, 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/OmarionGrocery.jpg'),
(54, 'FR', 'Delicious French', 100, 100, 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/deliciousfrench.jpg'),
(55, 'RP', 'Everything Repair', 100, 100, 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/everythingrepair.jpg'),
(56, 'RP', 'Foundation Repair', 100, 100, 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/foundationrepair.jpg'),
(57, 'WD', 'Lovely Walkingdog', 100, 100, 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/lovelywalking.jpg'),
(58, 'WD', 'Healthy Walkingdog', 100, 100, 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/HealthyWalkingdog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trackorder`
--

CREATE TABLE `trackorder` (
  `orderid` varchar(32) NOT NULL,
  `orderinfo` varchar(1024) NOT NULL,
  `name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('cchen', '123456', 'cchen@scu.edu'),
('dwu2', '123456', 'dwu2@scu.edu'),
('lyan', '123456', 'lyan@scu.edu'),
('vtai', '123456', 'vtai@scu.edu'),
('ylei', '123456', 'ylei@scu.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `trackorder`
--
ALTER TABLE `trackorder`
  ADD UNIQUE KEY `orderid` (`orderid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
