-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 22, 2016 at 12:47 PM
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
(1, 'HC', 'AAA Clean', 25, 2, 'Would you like to get premier service without paying premium prices? Contact us today and discover unbeatable services that will keep your place spic and span. We have many years of experience and an uncommon commitment to customer satisfaction, a combination that makes us the number-one.', 'img/seller/AAAClean.jpg'),
(2, 'IN', 'Kabab Indian', 22, 3, 'If your kitchen expertise starts and ends with turning on the microwave, Kabab Indian might be just what you need. Book a personal chef to cook a meal for you. Use it to make hosting dinner parties way easier, or to simply watch a chef at work. ', 'img/seller/jjindian.jpg'),
(3, 'SW', 'Aqua Swim', 10, 4, 'Bring the swim school to your pool! Swim instructors travel to your home or community pool. Learn to swim guaranteed with a sensational swim instructor. We have professional swimming tutors who offer in-person tutoring. All tutors are tested and reviewed to ensure top quality. ', 'img/seller/aquaswim.jpg'),
(4, 'MM', 'Com Moving', 25, 5, 'It''s no secret, moving an entire household is stressful, and we''re here to help you with managing your relocation stress. We relocate apartments, condominiums, homes and everything in between, from teeny tiny to very large. Whether you need help rearranging furniture from one room to another or you''re relocating down the road or across town, our local moving services provide you with affordable and convenient options for a stress-free experience.', 'img/seller/commoving.jpg'),
(5, 'MM', 'FFR Moving', 35, 3, 'We offer for you the local movings and storage services. Now you can store with us. Long and Short term storage units available right now! We offer for your convenience: free wardrobe boxes for your move, floor protection in your new home before unloading at no cost for you, thick mover quilts on all furniture, professional packing experts, disassemble and reassemble of furniture.', 'img/seller/ffrmoving.jpg'),
(6, 'CD', 'PX Driving', 8, 4, 'We''ll drive, so you can focus on what drives you. Make the most of every moment on your journey. We''ll take you to and from the airport.\nWe''ll collect you from your door and, when you land, we''ll be there to take you to your final destination. That could be straight to your hotel, your next meeting, or your favorite restaurant, or to the course for a round of golf. Enjoy our exclusive chauffeur-drive service. ', 'img/seller/pxdriving.jpg'),
(7, 'GP', 'Sunrise Grocery', 20, 1, 'We go shop, so you don''t have to! We offer personalized grocery shopping & delivery from your favorite local store.', 'img/seller/wwgrocery.jpg'),
(8, 'SW', 'Timpany Swim', 15, 2, 'Jump into a pool and enjoy an exhilarating yet low-impact water workout. Our resort-style aquatic center caters to every type of swimmer. It features lap pools, an exercise pool and a children''s wading pool. Private and group swimming lessons are available, as are aqua fitness classes, lap swimming and recreational swim sessions.', 'img/seller/waterswim.jpg'),
(9, 'RP', 'BBAA Repair', 99, 3, 'Book your appointment now, for a time that works best for you. We will diagnose and explain the issue, and repair the appliance. Appliance repairs are covered by a 90-day satisfaction guarantee.  When you choose BBAA Repair, you can expect that your technician will always diagnose your problem and provide you with an estimate up front. You can decide at that point whether to go forward with the repair or not.', 'img/seller/BBAArepair.jpg'),
(11, 'CD', 'Mathews Driving', 10, 3, 'As authorized drivers, Mathews Driving chauffeurs provide a range of services and added convenience. Enjoy the ride as your personal chauffeur takes you wherever you need to go, for a few hours or a few days. We can pickup and return your rental car. Dedicated chauffeurs for executives, drivers for corporate meetings and events, corporate shuttles and more. We meet you at your hotel or business meeting. We have local knowledge and are familiar with the best routes.', 'img/seller/boxdriving.jpg'),
(12, 'FR', 'Brie French', 30, 5, 'We deliver from any restaurant and store in minutes! Order on-demand or schedule a time that works for you. Get prepared food, groceries & other retail items delivered to your door in under an hour. ', 'img/seller/briefrench.jpg'),
(13, 'DR', 'Chau Driver', 25, 3, 'Car/driving lessons. If you don''t have time to teach your 15 or 16-year-old how to drive, we can and we will also teach them how to be a defensive driver. We will use our or your vehicle whichever you prefer. ', 'img/seller/Chaudriver.jpg'),
(14, 'FR', 'Coff French', 25, 4, 'Are you in the mood for pizza? Tacos? Chinese food? Spaghetti? How about your favorite soup from that special restaurant?\nJust want a great sandwich? Get alcohol delivered to your house, office, hotel, anywhere! Whether it''s a six pack or enough for a whole party, just let us know.', 'img/seller/cofffrench.jpg'),
(15, 'FR', 'Juan French', 34, 3, 'We focus on local and organic proteins and vegetables as well as clean carbohydrates and fats. We are designed to be a customized system, so every client can add or lose weight, lean out, or cut weight in a healthy and convenient manner. We special in customized plans for athletes and professionals who are conscious about their health, yet desire the gourmet taste that their life deserves. ', 'img/seller/juanfrench.jpg'),
(16, 'RP', 'Victory Repair', 60, 4, 'We are a local, family-run business. Our company provides a wide range of repair, maintenance, and improvement services; for both residential and commercial locations. We do jobs both big and small: from a one hour quick fix, up to full remodels.', 'img/seller/loverepair.jpg'),
(17, 'DR', 'OSC Driver', 30, 3, 'I''ve worked with people close to my age and younger. I understand the importance of effective communication to drive lessons home. Through past experiences from tutoring people my age and below in various subjects, I''ve learned that everyone''s mind process of learning is different and am very patient with all ages.', 'img/seller/maindriver.jpg'),
(18, 'MM', 'Trusted Moving', 35, 2, 'Our company is the hands of a third generation tradition of high standards and expertise that ensure confidence. For us, only the best will do. You will find only clean cut, and professional people who are dedicated, hard working, and considerate. We care about you.\nOur services include, packing/unpacking, loading and unloading of rental trucks, full range of packing materials and supplies, free labels, specialized equipment for safely and efficiently moving, books and computer hardware.', 'img/seller/rushmoving.jpg'),
(19, 'SP', 'Aamy Spanish', 35, 4, 'Private in-home Spanish tutoring.\nReceive personally tailored Spanish lessons from exceptional tutors in a one-on-one setting. We focus on connecting you with in-home Spanish tutoring that offers flexible scheduling and your choice of locations.', 'img/seller/aamyspanish.jpg'),
(20, 'PB', 'Bob Plumbing', 45, 3, 'Bob plumbing, we''ll be there as you need with clean professional technician. We specialize in sewer and drain cleaning services, hydro scrubbing, sewer line repairs and replacement, trenchless sewer line replacement, ceiling leak repair-leaking locating available, any leak repair under the house, slab leak repair, toilet, shower & faucet leaks, whole house copper repiping, video inspection and line locating, and water heater repair & replacement, etc.', 'img/seller/BobPlumbing.jpg'),
(21, 'CO', 'Modesto Computer', 25, 4, 'Computer tutoring is one-on-one personalized computer assistance and instruction that takes place in your home or office at your convenience. You will learn on your computer, using your software, and working on the content of your projects at your speed. Modesto Computer has been providing personalized computer training since 1998. Our service is personal, hands-on, and completely invested in giving every student and client the most personalized use of their computer technology.', 'img/seller/flycomputer.jpg'),
(22, 'MM', 'Handy Moving', 40, 3, 'We offer all included rates and fully equipped trucks, small and medium moving boxes, tape, shrink wrap, garment boxes, furniture assembling/disassembling, tools, moving tools, truck, and of course crew of professional movers with smiles. All you have to do is make a reservation, get your rocking chair and enjoy a show.', 'img/seller/handymoving.jpg'),
(23, 'SP', 'Casa Spanish', 40, 5, 'If you are looking for a Spanish tutor you have come to the right place. Casa Spanish will provide you with a fluent speaking and experienced Spanish tutor to help you improve on reading, writing and speaking in Spanish!\nOur personalized programs can be customized to meet your needs & requirements and the 1- on-1 sessions are designed to give you the best opportunity to succeed. ', 'img/seller/iconspanish.jpg'),
(24, 'CD', 'Excel Driving', 11, 3, 'Friendly service from professionally-trained chauffeurs with 5-point certification. Relax in comfort with a professional driver. Your chauffeur will pickup and return your vehicle and guide you between airports, hotels, meetings, sightseeing and other destinations.  ', 'img/seller/keepdriving.jpg'),
(25, 'CD', 'Limo Driving', 18, 2, 'If you''ve driven somewhere and need to be picked up, just use our pickup service to get both you and your car home safely. With our personal driver services, you can find a professional driver to meet any need, from designated drivers for a night out to personal chauffeurs for events or errands. Whether you need transportation on a business trip or just a ride to a doctor''s appointment and back, our personal drivers provide a chauffeur experience in the comfort of your own car.', 'img/seller/limodriving.jpg'),
(26, 'WD', 'Doggie Walking', 12, 4, 'I''m a dog walker and pet sitter. I treat all of my clients as if they are my own dear pets. I provide dog walking, cat visits, small animal care and pet transport. I have years of experience caring for animals. I believe animals have feelings and need to be respected like little people. ', 'img/seller/pawswalkingdog.jpg'),
(27, 'IN', 'Roshi Indian', 26, 4, 'What is your time worth? Would not you rather be doing something with your family or working out instead of going to the grocery store and planning meals? We have hundreds of entree selections available. From comfort food to gourmet feasts, you name it. Special diets? No problem. On your cooking day, the home chef starts her/his day with visits to the grocery store, fish market and produce stand arriving at your home with all the necessary equipment to cook and package your dinners. Your kitchen is left clean and your home smelling delicious.', 'img/seller/roshiindian.jpg'),
(28, 'PB', 'SCU Plumbing', 55, 5, 'You can count on us. Every customer''s individual needs are important to us. We focus on providing quality service and products combined with honesty and integrity with a fair price. Customer satisfactions is our #1 priority. We are a new type of company focused on creating a pleasurable experience for all your plumbing repair needs. ', 'img/seller/SCUPlumbing.jpg'),
(29, 'CD', 'Ucer Driving', 9, 3, 'Making sure your event goes off without a hitch also means making sure your guests get home safely. Whether you''re hosting a business retreat, wedding, Super Bowl party, or anything in between, we have two services that allow everyone to fully enjoy the event without worrying about drinking and driving.', 'img/seller/Ucerdriving.jpg'),
(30, 'PB', 'Bill Plumbing', 60, 2, 'Services include faucets, toilets, sinks, clogged drains, water heters, drain cleaning, kitchen / bath tubs / showers, gas leak repairs, slab leak location / slab repairs, sump pumps, pressure regulators, trenchless water line specialist, sewer line locating, and much more!', 'img/seller/BillPlumbing.jpg'),
(31, 'JA', 'Oshi Japanese', 30, 4, 'We make going vegan seem seriously easy. Their meals have no heavily processed ingredients, and zero animal products like meat, eggs or dairy. Each box also offers a tasty homemade snack you can keep in your fridge and nosh on all week long.  ', 'img/seller/fishjapanese.jpg'),
(32, 'HC', 'Jack Cleaning', 35, 5, 'From vacuuming to windows, our expert cleaners really do it all. Avoid dishwater hands and let our professional crew do all of your dirty work.\nWe provide sustainable commercial cleaning services and have developed our own cleaning system to ensure our cleaning standards are second to none! ', 'img/seller/JackHouseCleaning.jpg'),
(33, 'GP', 'Abadir Grocery', 18, 1, 'Too busy to do your own grocery shopping? Don''t enjoy grocery shopping? Somehow homebound so could not go to the grocery store? Here you can hire a personal grocery shopper. We deliver for business, and for home.', 'img/seller/largegrocery.jpg'),
(34, 'WD', 'Puppy Walking', 20, 6, 'I really enjoy caring for both dogs and cats. Please give me a chance to show you just how much I care about animals. I''ve done pet sitting in the past for both cats and dogs. I''ve owned cats for many years now. I''ve had to medicate them, force feed them, give sub-q fluids, antibiotic injections and insulin injections. I also give monthly flea treatments, groom and clip all of my cats nails. I love all animals but I know most about dogs.  I enjoy taking them for walks and to dog parks when I can. \n', 'img/seller/puppywalking.jpg'),
(35, 'MM', 'Ninja Moving', 45, 10, 'We''re a full-service local moving company, which means that we can pack your precious belongings, pick up your boxes, plan your move, problem solve, and even bring you coffee on moving day. Our team can pack (and unpack) all of your belongings, just the kitchen, a single item, all of your clothing - for FREE! We are always on time and our moving rates are up front and transparent. Our movers are trained professionals who are detail oriented (clean trucks and spotless uniforms). We also have a one-hour minimum, which means you pay for the time we''re moving you, and that''s it.', 'img/seller/settlemoving.jpg'),
(36, 'GP', 'PCC Grocery', 15, 3, 'Our purpose is to eliminate all the countless hours you spend shopping for your groceries and household supplies, standing in line, and fighting traffic. Now you can spend your time doing the things you really enjoy while a personal shopper shops for you. You can avoid impulse shopping and unwanted trips to fast food restaurants and convenience stores. There are absolutely no mark-ups on your grocery items. You simply pay the same amount that the grocery store of your choice charges for the groceries you order, including sale and "club card" prices. We go to the grocery store or stores that you chose.\n', 'img/seller/slidegrocery.jpg'),
(37, 'WD', 'Smile Walking', 15, 4, 'Looking for a qualified pet sitter? Most of my life, pets have been a part of my family. I could not imagine a world without them. It is this philosophy that brought me to pet sitting. Over the past 4 years, I have been delivering quality pet sitting for my clients. I am experienced with caring for dogs and cats. It''s all about the pet. Whether it is feeding, administering medicines, walking, playing, holding, my time is spent caring for them. ', 'img/seller/smilewalking.jpg'),
(38, 'GD', 'Tony Gardening', 15, 5, 'Our services include but not limited to sod lawns, sprinklers, removal, topping, hauling, tree service, shrubs, shaping, gutter, clean-up. We are specialized at arborist, tree service, pruning, tree trimming, tree health, landscape care, tree safety, tree planting. ', 'img/seller/garden/TimGD.jpeg'),
(39, 'HC', 'Vincent Clean', 30, 3, 'We were established since August 2012. All our cleaning staff are inducted and trained by our specialist staff trainers. We take immense pride in delivering a high-quality and reliable cleaning service to our domestic customers.\n', 'img/seller/Vincentclean.jpg'),
(40, 'RP', 'Winter Repair', 70, 5, 'At Winter Repair, we''ve built our livelihoods on remodeling people''s homes. From the simple to the lavish, we''ve experienced it all and we can help you every step of the way. No job is too small or too big for our knowledgeable crews. We''ve happily done it all for 37 years now!', 'img/seller/winterrepair.jpg'),
(41, 'CO', 'Child Computer', 30, 10, 'Our learning platform provides kids and teens a comprehensive learning experience that is amazingly fun, highly interactive and extremely effective. Students watch videos, respond to questions, earn badges, complete quizzes, and attempt challenging assignments as they step toward mastering critical technology skills and professional-level software. Kids learn to code, animate their own movies, design and print in 3D, develop their own mobile apps, create video games, and more.', 'img/seller/childcomputer.jpg'),
(42, 'HC', 'Fenny Cleaning', 27, 5, 'We provide the trusted personnel, chemicals and equipment to clean an array of homes including flats; small, medium and large-sized houses; bungalows and rental properties. We are acutely aware that we are working in your own home, that is why we ensure we clean your premises in just the way you like it to be cleaned.  ', 'img/seller/FennyCleaning.jpg'),
(43, 'HC', 'Merry Cleaning', 32, 8, 'At Merry Cleaning, we work hard to earn your business. We offer a variety of cleaning services, including the cleaning of carpet, furniture, tile & grout, hardwood floor, air duct, etc.', 'img/seller/MerryHouseCleaning.jpg'),
(44, 'GP', 'Peapod Grocery', 20, 3, 'As your personal shopper, we will only purchase what is on your grocery list- brand, size and quantity unless you have previously given us permission to substistute for out of stock items that are similar. You can rest assured that we choose the freshest and best produce and meat that the store offers unless you say otherwise. A personal shopper makes grocery shopping a snap. We can do as much or as little as you would like. We can deliver the groceries to your door or we can put them away during the day while you are out. You can choose the option that works best for you and your home. You can''t get more convenient than that.', 'img/seller/peapodgrocery.jpg'),
(45, 'CH', 'Sunset Chinese', 25, 5, 'Simplicity is key at Sunset Chinese, which offers up meals that require no fancy equipment or techniques, and no obscure ingredients. Dishes like Pan-Seared Chicken, Oven-Roasted Salmon and Homestyle Meatloaf are the stars of the show. ', 'img/seller/sunsetchinese.jpg'),
(46, 'JA', 'Sushi Japanese', 28, 5, 'Whether you are a vegetarian or meat eater, a newbie cook or a semi-pro, Sushi Japanese has plenty of options for every type of food lover out there.  ', 'img/seller/sushijapanese.jpg'),
(47, 'GD', 'Tom Gardening', 28, 10, 'We offer one-time yard cleanups, fine pruning and light landscaping, more than a regular gardener could offer.\nEstablished in 2011, we are a family owned small business big enough to serve you.', 'img/seller/garden/TonyGD.jpg'),
(48, 'GD', 'Alice Gardening', 40, 1, 'Alice Gardening is a family owned and operated business and provides professional gardening services to homeowners and commercial businesses. We have provided professional gardening services for more than 53 years. We deliver high-quality personal work with a smile.', 'img/seller/garden/AliceGD.jpeg'),
(49, 'CH', 'Beijing Chinese', 30, 9, 'With recipes for breakfast, lunch, dinner and snacks, our service truly eliminates the need for frequent grocery trips. The highly customizable plan creates your meals based around a variety of preferences, from your goals (like weight loss or saving time in the kitchen) to your cooking skill level and allergies. ', 'img/seller/beijingchinese.jpg'),
(50, 'PB', 'Camino Plumbing', 70, 10, 'We offer professional service for a fair price, and plumbing and drainage professionals you can count on. Every customer''s individual needs are important to us. We focus on providing quality service and products combined with honesty and integrity with a fair price. We are a new type of company focused on creating a pleasurable experience for all your plumbing repair needs. We will change your perception of the typical plumbing service company by treating you and your home with the respect you deserve and the professionalism you expect. Our job is not complete until you are 100% satisfied.\n ', 'img/seller/CaminoPlumbing.jpg'),
(51, 'PB', 'Rayne Plumbing', 55, 4, 'Small family owned business that has been operated since 2008. Our specialties are, sewer & drain cleaning, sewer & drain video camera inspection / pipeline Locating, sewer & drain repairs / cleanout Installs, water softeners / reverse osmosis, all leaks, repairs, and plumbing fixture installation.', 'img/seller/CampusPlumbing.jpg'),
(52, 'GD', 'Melody Gardening', 45, 5, 'At Melody Gardening, we offer you over 10 years of experience in commercial and residential lawn care at reasonable prices.\nWe strive to bring to life our customer''s views of how their lawns and gardens should look, using the latest environmental friendly means.', 'img/seller/garden/MelodyGD.jpg'),
(53, 'GP', 'Omarion Grocery', 19, 1, 'Imagine coming home from a long day and your kitchen is stocked full of food and all in it''s own place and you don''t have to do a thing but make the list! Whether it is flowers and candy for that special anniversary or picking up that diamond ring that was just sized for that perect night! We do it all. ', 'img/seller/OmarionGrocery.jpg'),
(54, 'FR', 'Zadie French', 30, 2, 'Grocery shopping can be a drag but what if someone else did all the dirty work for you? A slew of new meal delivery services do everything from dropping off ingredients at your front door to offering a chef to whip up an at-home feast in your own kitchen. ', 'img/seller/deliciousfrench.jpg'),
(55, 'RP', 'Carlos Repair', 85, 4, 'With over 37 years of construction experience, we have extensive knowledge of home repair and remodeling. We work with each customer to build a custom area built to their specifications. This way of working has built our business since 2002 and we look forward to making your dream room or home a reality. ', 'img/seller/everythingrepair.jpg'),
(56, 'RP', 'Reddit Repair', 90, 3, 'Reddit Repair includes electrical, plumbing, crown moulding and all trim, kitchen and bath remodels. We install appliances, ceiling fans, exhaust fans for the kitchen and bathrooms, and attic and whole house fans. We also install both interior and exterior doors as well as windows. ', 'img/seller/foundationrepair.jpg'),
(57, 'WD', 'Pawzercise Walkingdog', 18, 10, 'I am here to help walking your dog! I love to be around animals, so let me do these things for you while you work.\n', 'img/seller/lovelywalking.jpg'),
(58, 'WD', 'Angie Walkingdog', 15, 6, 'I have been a pet lover ever since I can remember. I love animals because they do not require much of you, yet they give back so much more. Most animals, if you''ve had them long enough, are very perceptive to your moods and can help calm a person down or cheer someone up in a matter of seconds. I would do anything for my animals and others as well. They are just a delight to be around.', 'img/seller/HealthyWalkingdog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trackorder`
--

CREATE TABLE `trackorder` (
  `orderid` varchar(32) NOT NULL,
  `orderinfo` varchar(1024) NOT NULL,
  `total` varchar(10) DEFAULT NULL,
  `name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackorder`
--

INSERT INTO `trackorder` (`orderid`, `orderinfo`, `total`, `name`, `address`, `zipcode`, `tel`, `payment`, `username`) VALUES
('2016011203860', 'Jack Cleaning*35*70*2016-Jan-31,7:00-9:00,2hrs|;', '70', 'test', 'Santa Clara University', '95050', '1234567890', '1111222233334444', ''),
('2016011208078', 'Jack Cleaning*35*70*2016-Jan-25,7:00-8:00,1hrs|2016-Jan-26,7:00-8:00,1hrs|;Beijing Chinese*30*60*2016-Jan-31,7:00-9:00,2hrs|;', '130', 'test', 'Santa Clara University', '95050', '1234567890', '1111222233334444', 'lyan'),
('2016011243256', 'Fish Japanese*30*60*2016-Feb-5,13:00-15:00,2hrs|;', '60', 'test', 'Santa Clara University', '95050', '1234567890', '1111222233334444', ''),
('2016011273525', 'Icon Spanish*40*80*2016-Feb-26,7:00-9:00,2hrs|;', '80', 'test', 'Santa Clara University', '95050', '1234567890', '1111222233334444', 'lyan'),
('2016011277846', 'Jack Cleaning*35*70*2016-Jan-26,7:00-9:00,2hrs|;', '70', 'test', 'Santa Clara University', '95050', '1234567890', '1111222233334444', '');

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
('lyan', '123456', 'lyan@scu.edu'),
('szhang', '123456', 'szhang1@scu.edu');

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
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
