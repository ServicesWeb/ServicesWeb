-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 30, 2015 at 08:58 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group3`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(16) NOT NULL,
  `name` varchar(250) NOT NULL,
  `hour` varchar(250) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `name`, `hour`, `price`) VALUES
(101, 'AAA Clean', '08:00-10:00', 240),
(102, 'AAA Clean', '11:00-13:00', 250),
(103, 'AAA Clean', '15:00-18:00', 300);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`category`, `name`, `description`, `img`) VALUES
('HC', 'AAA Clean', 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/AAAClean.jpg'),
('SP', 'Aamy Spanish', 'How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? ', 'img/seller/aamyspanish.jpg'),
('GD', 'Alice Gardening', 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/AliceGD.jpeg'),
('SW', 'aqua swim', 'aqua swimaqua swimaqua swimaqua swimaqua swimaqua swim', 'img/seller/aquaswim.jpg'),
('RP', 'BBAA Repair', 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/BBAArepair.jpg'),
('CH', 'Beijing Chinese', 'Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! ', 'img/seller/beijingchinese.jpg'),
('PB', 'Bill Plumbing', 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/BillPlumbing.jpg'),
('FR', 'Bimb French', 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/BimbFrench.jpg'),
('PB', 'Bob Plumbing', 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/BobPlumbing.jpg'),
('CD', 'Box Driving', 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/boxdriving.jpg'),
('FR', 'Brie French', 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/briefrench.jpg'),
('PB', 'Camino Plumbing', 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/CaminoPlumbing.jpg'),
('PB', 'Campus Plumbing', 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/CampusPlumbing.jpg'),
('DR', 'Chau Driver', 'Chau DriverChau DriverChau DriverChau Driver', 'img/seller/Chaudriver.jpg'),
('CO', 'Child Computer', 'Child ComputerChild ComputerChild ComputerChild ComputerChild ComputerChild ComputerChild Computer', 'img/seller/childcomputer.jpg'),
('FR', 'Coff french', 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/cofffrench.jpg'),
('MM', 'Com Moving', 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/commoving.jpg'),
('FR', 'Delicious French', 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/deliciousfrench.jpg'),
('RP', 'Everything Repair', 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/everythingrepair.jpg'),
('HC', 'Fenny Cleaning', 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/FennyCleaning.jpg'),
('MM', 'FFR moving', 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/ffrmoving.jpg'),
('JA', 'Fish Japanese', 'I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! ', 'img/seller/fishjapanese.jpg'),
('CO', 'Fly computer', 'Fly computerFly computerFly computerFly computerFly computerFly computerFly computer', 'img/seller/flycomputer.jpg'),
('RP', 'Foundation Repair', 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/foundationrepair.jpg'),
('MM', 'Handy Moving', 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/handymoving.jpg'),
('WD', 'Healthy Walkingdog', 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/HealthyWalkingdog.jpg'),
('SP', 'Icon Spanish', 'How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? How to communicate with people who speak spanish? ', 'img/seller/iconspanish.jpg'),
('HC', 'Jack Cleaning', 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/JackHouseCleaning.jpg'),
('IN', 'JJ Indian', 'Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! ', 'img/seller/jjindian.jpg'),
('FR', 'Juan French', 'Les rêves des amoureux sont comme le bon vin\r\nIls donnent de la joie ou bien du chagrin\r\nAffaibli par la faim je suis malheureux\r\nVolant en chemin tout ce que je peux\r\nCar rien n''est gratuit dans la vie\r\n\r\nRead more: Camille - Le Festin Lyrics | MetroLyrics ', 'img/seller/juanfrench.jpg'),
('CD', 'Keep Driving', 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/keepdriving.jpg'),
('GP', 'Large Grocery', 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/largegrocery.jpg'),
('CD', 'Limo Driving', 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/limodriving.jpg'),
('RP', 'Love Repair', 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/loverepair.jpg'),
('WD', 'Lovely Walkingdog', 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/lovelywalking.jpg'),
('DR', 'Main Driver', 'Main DriverMain DriverMain DriverMain DriverMain DriverMain DriverMain Driver', 'img/seller/maindriver.jpg'),
('GD', 'Melody Garening', 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/MelodyGD.jpg'),
('HC', 'Merry Cleaning', 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/MerryHouseCleaning.jpg'),
('GP', 'Omarion Grocery', 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/OmarionGrocery.jpg'),
('WD', 'Paws Walking', 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/pawswalkingdog.jpg'),
('GP', 'Peapod Grocery', 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/peapodgrocery.jpg'),
('WD', 'Puppy Walking', 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/puppywalking.jpg'),
('CD', 'PX driving', 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/pxdriving.jpg'),
('IN', 'Roshi Indian', 'Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! Delicious! Yummy! ', 'img/seller/roshiindian.jpg'),
('MM', 'rush moving', 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/rushmoving.jpg'),
('PB', 'SCU Plumbing', 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/SCUPlumbing.jpg'),
('MM', 'Settle Moving', 'I wanna settle down\r\nI wanna settle down\r\nWon''t you settle down with me?\r\nSettle down\r\nWe can settle at a table\r\nA table for two\r\nWon''t you wine and dine with me?\r\nSettle down', 'img/seller/settlemoving.jpg'),
('GP', 'Slide Grocery', 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/slidegrocery.jpg'),
('WD', 'Smile Walking', 'Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! Welcome! Our work is efficient, and professional, clean, cheap, and happy! ', 'img/seller/smilewalking.jpg'),
('CH', 'Sunset Chinese', 'Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! Wohoho! I love duckling, I love eat! ', 'img/seller/sunsetchinese.jpg'),
('JA', 'Sushi Japanese', 'I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! I love Sushi! I love sashimi! ', 'img/seller/sushijapanese.jpg'),
('GD', 'Tom Gardening', 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/TimGD.jpeg'),
('GD', 'Tony Gardening', 'I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! I love Gardening! I love flowers! I love helping people! ', 'img/seller/garden/TonyGD.jpg'),
('CD', 'Ucer Driving', 'Who''s gonna tell you when\r\nIt''s too late\r\nWho''s gonna tell you things\r\nAren''t so great\r\n\r\nYou can''t go on\r\nThinking nothing''s wrong\r\nWho''s gonna drive you home tonight\r\n\r\nWho''s gonna pick you up\r\nWhen you fall\r\nWho''s gonna hang it up\r\nWhen you call\r\nWho''s gonna pay attention\r\nTo your dreams\r\nWho''s gonna plug their ears\r\nWhen you scream\r\n\r\n\r\n\r\nRead more: The Cars - Drive Lyrics | MetroLyrics ', 'img/seller/Ucerdriving.jpg'),
('HC', 'Vincent Clean', 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/Vincentclean.jpg'),
('SW', 'Water Swim', 'Water SwimWater SwimWater SwimWater SwimWater SwimWater Swim', 'img/seller/waterswim.jpg'),
('RP', 'Winter Repair', 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/winterrepair.jpg'),
('GP', 'WW Grocery', 'If your chick come close to me\r\nShe ain''t going home when she post to be\r\nI''m getting money like I''m post to be\r\nI''m getting money like I''m post to be\r\nOoh, all my niggas close to me\r\nAnd all them other niggas where they post to be\r\nOoh, the hoes go for me\r\nHave your chick send a pic like pose for me\r\nOoh, that''s how it post to be\r\nYeah, that''s how it post to be\r\nOoh, yeah, that''s how it post to be\r\nEverything good like it post to be\r\n', 'img/seller/wwgrocery.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD UNIQUE KEY `name` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
