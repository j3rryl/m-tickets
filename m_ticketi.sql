-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 04:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`) VALUES
(1, 'Hip-Hop'),
(2, 'Jazz'),
(3, 'Classical'),
(4, 'Family'),
(5, 'Comedy'),
(6, 'Arts and Theater'),
(7, 'Sports'),
(8, 'Festival');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_images`
--

CREATE TABLE `tbl_category_images` (
  `image_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category_images`
--

INSERT INTO `tbl_category_images` (`image_id`, `category_id`, `image_url`) VALUES
(1, 1, 'hiphop.webp'),
(2, 2, 'jazz.jpg'),
(3, 3, 'classical.jpg'),
(4, 4, 'family.jpg'),
(5, 5, 'comedy.jpg'),
(6, 6, 'arts.jpg'),
(7, 7, 'sports.jpg'),
(8, 8, 'festival.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventlocations`
--

CREATE TABLE `tbl_eventlocations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(25) NOT NULL,
  `location_status` enum('Booked','Available') NOT NULL DEFAULT 'Available',
  `location_capacity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `event_id` int(10) NOT NULL,
  `event_category` int(10) NOT NULL DEFAULT 1,
  `event_name` varchar(40) NOT NULL,
  `event_location` varchar(25) NOT NULL DEFAULT 'Nairobi',
  `event_price` float NOT NULL,
  `event_description` text NOT NULL,
  `added_by` int(10) NOT NULL DEFAULT 1,
  `event_likes` int(10) NOT NULL DEFAULT 0,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `event_category`, `event_name`, `event_location`, `event_price`, `event_description`, `added_by`, `event_likes`, `start_date`, `end_date`) VALUES
(1, 1, 'side bar brunch', 'Nairobi', 1000, 'Come chill with the coolest gang, enjoy amazing food with the illlest dj\'s on decks.\r\n\r\nMusic by Sultan, Gmoney, CNG Suraj, Big Nyagz and IV.\r\n\r\nTicket redeemable for a cocktail or a burger.', 12, 10, '2022-05-14 01:26:24', '2022-05-15 01:44:53'),
(2, 2, 'Hunters Amapiano Tour', 'Nairobi', 1000, 'THE AMAPIANO TOUR 1ST ANNIVERSARY', 1, 20, '2022-06-04 01:26:24', '2022-05-15 01:44:53'),
(3, 3, 'riara school alumni party', 'Nairobi', 0, ' A chance any alumni of Riara gets to experience prom like never before. A great night under the stars full of fun and joy.\r\n\r\n', 1, 100, '2022-05-27 01:26:24', '2022-05-15 01:44:53'),
(4, 4, 'ngugi wa thiong\'o wa miri', 'Nairobi', 1300, 'From Kenya’s most celebrated writer Ngugi Wa Thiong’o and Ngugi Wa Mirii, Ngaahika Ndeenda/I’ll\nMarry When I Want is coming to the Kenya National Theatre stage for the first time ever over, 40\nyears after it was written. Banned when it was first presented, this iconic play was a milestone in\nAfrican literature and theatre will be presented in ENGLISH and KIKUYU at different performances.\n\nBrought to you by the award-winning director and producers of Sarafina, Grease, and Jesus Christ\nSuperstar and starring some of Kenya’s best-known actors, including Martin Githinji, Angel Wairimu, Nice Githinji\nand Annestella.\n\nNgaahika Ndeenda/ I’ll Marry When I Want is presented in partnership with Royal Media Services and in association\nwith East African Education Publishers.\n\nONE SHOW - 15TH \n5P.M SHOW PUBLIC PERFORMANCE - ENGLISH', 1, 120, '2022-05-15 01:26:24', '2022-05-15 01:44:53'),
(5, 5, 'nairobi mega fest', 'Nairobi', 500, 'Nairobi Mega Fest', 12, 50, '2022-05-14 01:26:24', '2022-05-15 01:44:53'),
(6, 6, 'the marie pierre sunday afternoon bbq', 'Nairobi', 2500, 'The Marie Pierre Sunday afternoon BBQ goes down on Sun 15th May 2022 at Tayiana Gardens, Garden Estate from 1 PM to 6:30 PM.\nChoose from either the eat all you can package where you get to enjoy a wide variety of grilled vegetables, chicken, lamb, fish and cheese.\nAlternatively, opt for the self BBQ option where you bring or rent a grill and purchase fresh produce from the partners at the event.\n\nVegans, vegetarians will be well catered for.\n\nCash bar for drinks (both nonalcoholic and alcoholic) will be available on site.\n\nKids section and swimming on grounds so bring your costumes.\n\nEnjoy great discounts on produce that you wish to carry home ', 1, 80, '2022-05-15 13:00:00', '2022-05-15 01:44:53'),
(7, 7, 'a night of comedy', 'Nairobi', 2000, 'A NIGHT OF COMEDY WITH CLEAR SKY ENTERTAINMENT.', 1, 30, '2022-05-20 01:26:24', '2022-05-15 01:44:53'),
(8, 8, 'epic women', 'Nairobi', 1500, 'Come meet and network with other Christian women as you enjoy an afternoon of fun and fellowship as award-winning PR professional and journalist, Cynthia Nyamai, shares on \"Unleashing your potential: how to boldly step into the role God has chosen for you.\"  \r\n\r\nEPIC Women is a movement of unapologetically Christ-like women navigating life, relationships and culture. Founded by award-winning gospel musician and TV Host Joyce Omondi Waihiga, EPIC Women holds quarterly physical assemblies and monthly virtual Bible studies that are open to all women seeking to grow in Biblical womanhood. Contact us at epic@epicwomenafrica.com and follow us on social media @epicwomenafrica', 1, 90, '2022-05-21 01:26:24', '2022-05-15 01:44:53'),
(9, 1, 'amapiano festival', 'Nairobi', 500, ' celebrating fashion,music and diversity in our cultures.\r\n\r\n', 1, 0, '2022-05-21 01:26:24', '2022-05-15 01:44:53'),
(10, 2, 'amapiano evening', 'Nairobi', 200, 'Dope Beats. Dope People. Dope Food.', 1, 0, '2022-05-21 01:26:24', '2022-05-15 01:44:53'),
(11, 3, 'alumni golf challenge', 'Nairobi', 2000, 'Alumni Challenge is an initiative to ignite the Alumni movement & participation in tangible development of their former High School through different sports and social avenues. Thus, Alumni Golf Challenge is one of the platforms that participants play golf for their alma mater with the end result being to support & fundraise education bursaries for the needy student. The winner of the Golf Challenge walks away with Bursary Fund and other great gifts for their former school.\r\n\r\n', 1, 40, '2022-05-27 01:26:24', '2022-05-15 01:44:53'),
(12, 4, 'reggae for charity', 'Nairobi', 1500, 'This is a social event cum  fundraiser that will be used to support school going girls with menstrual products.\r\n\r\n', 1, 0, '2022-05-28 01:26:24', '2022-05-15 01:44:53'),
(13, 5, 'MirrorXperience', 'Nairobi', 600, 'The #MirrorXperience is a Spoken Word poetry show by Stom Wabuko. This came by after the launch of his book and EP dubbed \'MIRROR.\' The #MirrorXperience is an opportunity for people to go through his journey using words and melodies, ask questions about his pieces and engage with him\r\n\r\n', 1, 2, '2022-05-28 15:00:00', '2022-05-15 01:44:53'),
(14, 6, 'hell\'s advocate', 'Nairobi', 500, 'SYNOPSIS\nDay in day out people lose their lives through road accidents contributed by reckless drivers and\nhungry, corrupt police officers. The play HELL\'S ADVOCATE brings to light such characters; Mr Tembi,\nhusband to officer Zuri is a driver of public vehicles where many innocent lives have been lost\nthrough his ignorance, greed and desire to satisfy corrupt police officers.\nMadam Zuri stands up against him and the corrupt officers to fight this vice, almost at the end she\nloses her marriage and nearly gets jailed for fighting and advocating for sanity on our roads. There\'s\nlight at the end of the tunnel after road accidents become increasingly high and Mr Tembi loses his\nrelatives through the same road accidents which leads him and the corrupt officers to confess and\nplead for conviction but officer Zuri opts to forgive them.', 1, 0, '2022-06-03 17:00:00', '2022-05-15 01:44:53'),
(15, 7, 'THE HANYE Episode 2', 'Nairobi', 800, 'HipHop, RnB, Dancehall, All things the 90s-2000s', 1, 0, '2022-06-04 18:00:00', '2022-05-15 01:44:53'),
(16, 8, 'bark and park', 'Nairobi', 1000, 'Bark and Park', 1, 0, '2022-06-05 09:00:00', '2022-05-15 01:44:53'),
(17, 1, 'all black festival sn2', 'Nairobi', 500, ' Bringing people out for fun and good times and at the end of the event,we give back to the community through charity...our main iam is good vibes and charity.\r\n\r\n', 1, 0, '2022-06-11 11:00:00', '2022-05-15 01:44:53'),
(18, 2, 'the wedding festival', 'Nairobi', 700, 'It’s an outdoor Festival Creating an event like no other focused on commerce, vendors selling actual things to the visitors, lots of\r\nentertainment including the concerts, fashion shows, live bands hence creating great experiences.\r\n\r\nThe wedding Festival is an excellent opportunity for vendors to create and design stylish showcase, network and sale to the guests, which\r\nincludes to be weds, who are clients with money in the bank and a timeline to spend it by.\r\n\r\nThe event will also highly benefit from a new profile of clients who will be coming to The Rose’ Wine Festival featuring crafts and things at\r\nGin O’clock ,the visitors include the middle and high end income earners and high network individuals thus creating more Exposure to\r\nexhibitors.', 1, 0, '2022-06-25 09:00:00', '2022-05-15 01:44:53'),
(19, 3, 'everything nice wrc exper', 'Nairobi', 1500, 'Everything Nice WRC Experience\r\n\r\n', 1, 0, '2022-06-25 12:00:00', '2022-05-15 01:44:53'),
(20, 4, '1000 voices for peace ken', 'Nairobi', 1000, '1000 VOICES for peace kenya ', 1, 0, '2022-07-10 14:00:00', '2022-05-15 01:50:29'),
(21, 5, 'the rose wine festival', 'Nairobi', 3000, 'THE ROSE WINE FESTIVAL \r\n\r\nA premium picnic-style festival, dedicated to the celebration of all things Pink Gin & lifestyle, It will be held on the 2nd & 3rd of April at the  Marula Manor, Karen it is a great opportunity to meet new people, enjoy amazing food and enjoy amazing music, the Trendiest selection  of wines, delicious food, great music, and top DJs. \r\n\r\nWHAT TO WEAR \r\n\r\nThe mandatory attire for the PINK GIN festival is pink and white. Including spring dresses, pink and white pastel-colored suits, bold  headpieces, vintage dresses, and accessories. ', 1, 0, '2022-05-25 19:00:00', '2022-05-15 01:50:29'),
(22, 6, 'i love the 90\'s', 'Nairobi', 800, 'It\'s That Time Again! The carnivore & Eseriez Events Invite you to your favorite throwback event, \'I LoveThe90\'s\' Come sing your hearts out On May the 14th at the carnivore as you dance to the tunes of DJ E, The legendary DJ Ben, DJ VANI, GICHBOY & Nairobi\'s freshest MC GUSTAVO.\r\n\r\nEntry is only 800 BOB Advance & 1000 BOB At The Gate. \r\n\r\n\'ILoveThe90\'s\' Powered By Eseriez Events, Jack Daniels Whiskey, Bend the trend Kenya, Nation FM & The Carnivore', 1, 0, '2022-05-14 20:00:00', '2022-05-15 02:05:07'),
(30, 3, 'Sample', 'Worked', 32323, 'sasasxz', 1, 0, '2022-06-17 10:10:37', '2022-06-18 09:10:40'),
(36, 3, 'sdsfds', 'edsxcx', 3223, 'xzcxzczx', 1, 0, '2022-06-01 11:05:00', '2022-06-23 11:05:00'),
(37, 8, 'jeresd', 'sadasdsd', 23234, 'asdasa', 1, 0, '2022-06-08 11:06:00', '2022-06-23 11:06:00'),
(38, 5, 'another', 'sdsfds23', 233232, 'asdsads', 1, 0, '2022-06-16 11:09:00', '2022-06-24 11:09:00'),
(39, 3, 'asassa', 'sadsa', 1212, 'sadasd', 1, 0, '2022-06-11 11:11:00', '2022-06-15 11:11:00'),
(40, 8, 'sdsda', 'ngt', 323, 'asdasdasda', 1, 0, '2022-06-10 11:22:00', '2022-06-24 11:22:00'),
(41, 2, 'kwani', 'sadfas', 432, 'sadasd', 1, 0, '2022-06-16 11:26:00', '2022-06-17 11:26:00'),
(42, 1, 'sadsda', 'sadas', 33332, 'sadsa', 1, 0, '2022-06-24 11:28:00', '2022-07-01 11:28:00'),
(43, 4, 'saassasasaasasssaassa', 'wasdsad', 200, 'ahsdash', 1, 0, '2022-06-24 11:31:00', '2022-07-02 11:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_images`
--

CREATE TABLE `tbl_event_images` (
  `event_image_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `event_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event_images`
--

INSERT INTO `tbl_event_images` (`event_image_id`, `event_id`, `event_image_url`) VALUES
(1, 17, 'allblack.jpeg'),
(2, 16, 'bark.jpeg'),
(3, 6, 'bbq.jpeg'),
(4, 7, 'comedynight.jpeg'),
(5, 8, 'epic.jpeg'),
(6, 11, 'golf.jpeg'),
(7, 15, 'hanye.jpeg'),
(8, 14, 'hell.jpeg'),
(9, 2, 'hunter.jpeg'),
(10, 13, 'mirror.png'),
(11, 4, 'ngugi.jpeg'),
(12, 3, 'riara.png'),
(13, 1, 'sidebar.jpeg'),
(14, 20, 'voices.jpeg'),
(15, 18, 'wedding.jpeg'),
(16, 21, 'wine.jpeg'),
(17, 19, 'wrc.jpeg'),
(18, 5, 'aqua.jpeg'),
(19, 22, 'carnivore.jpeg'),
(20, 10, 'amapianoevening.jpeg'),
(21, 9, 'amapianofest.jpeg'),
(22, 12, 'reggae.jpeg'),
(32, 36, 'H20901 (2).pdf'),
(33, 37, 'H20901 (1).pdf'),
(34, 38, 'H20901 (1).pdf'),
(35, 39, 'H20901 (1).pdf'),
(36, 40, 'H20901 (1).pdf'),
(37, 41, 'H20901 (1).pdf'),
(38, 42, 'H20901 (1).pdf'),
(39, 43, 'H20901 (2).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organizers`
--

CREATE TABLE `tbl_organizers` (
  `organizer_id` int(10) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL DEFAULT 'sample',
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `identification` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL DEFAULT '1234'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_organizers`
--

INSERT INTO `tbl_organizers` (`organizer_id`, `first_name`, `last_name`, `username`, `email`, `phone_number`, `identification`, `password`) VALUES
(1, 'Kushina', 'Mbalu', 'kush', 'kushina@gmail.com', '0323432', 'AHDJKDNBAI2', '1234'),
(12, 'Dan', 'Wete', 'dan', 'dan@gmail.com', '0721545376', 'AQTRE372837', '1234'),
(15, 'Tress', 'Meruiru', 'Tress', 'tress@gmail.com', '', '', 'tress');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) NOT NULL,
  `payment_name` varchar(25) NOT NULL,
  `payment_description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_name`, `payment_description`) VALUES
(1, 'Mpesa', 'The better option'),
(3, 'Paypal', 'Pay via Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticketdetails`
--

CREATE TABLE `tbl_ticketdetails` (
  `ticket_details` int(10) NOT NULL,
  `ticket_order` int(10) NOT NULL,
  `ticket_totalprice` int(10) NOT NULL,
  `ticket_quantity` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticketorders`
--

CREATE TABLE `tbl_ticketorders` (
  `order_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `order_amount` int(10) NOT NULL,
  `order_status` enum('Paid','Pending') NOT NULL DEFAULT 'Pending',
  `payment_type` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticketpurchases`
--

CREATE TABLE `tbl_ticketpurchases` (
  `ticket_id` int(10) NOT NULL,
  `client_id` int(10) DEFAULT NULL,
  `event_id` int(10) NOT NULL,
  `payment_type` int(2) NOT NULL,
  `ticket_price` int(10) NOT NULL,
  `ticket_quantity` int(10) NOT NULL,
  `total_quantity` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ticket_url` varchar(12) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `date_purchased` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ticketpurchases`
--

INSERT INTO `tbl_ticketpurchases` (`ticket_id`, `client_id`, `event_id`, `payment_type`, `ticket_price`, `ticket_quantity`, `total_quantity`, `email`, `ticket_url`, `phone`, `date_purchased`) VALUES
(1, 1, 1, 1, 1000, 5, 5000, 'jetrixxjeremy@gmail.com', 'rPJYZcULeh', '+254726910693', '2022-06-13'),
(3, NULL, 22, 1, 800, 3, 2400, 'jeremymunroe0@gmail.com', 'wazFh17eis', '+254726910693', '2022-06-17'),
(4, NULL, 22, 1, 800, 4, 3200, 'jetrixxjeremy@gmail.com', 'UaQI2CYGut', '32432423', '2022-06-17'),
(5, NULL, 22, 1, 800, 6, 4800, 'jetrixxjeremy@gmail.com', 'HwLlftBX3M', '32432423', '2022-06-17'),
(6, NULL, 22, 1, 800, 6, 4800, 'jetrixxjeremy@gmail.com', 'OiKY6sfd4M', '32432423', '2022-06-17'),
(7, NULL, 22, 3, 800, 7, 5600, 'jetrixxjeremy@gmail.com', 'TShbEOz0Ux', '+254726910693', '2022-06-17'),
(2002022000, NULL, 5, 3, 500, 3, 1500, 'jetrixxjeremy@gmail.com', 'TxNJjK36Sv', '32432423', '2022-06-17'),
(2002022001, NULL, 8, 1, 1500, 4, 6000, 'jetrixxjeremy@gmail.com', 'BIsZmfcECw', '+254726910693', '2022-06-23'),
(2002022003, NULL, 1, 1, 1000, 3, 3000, 'jetrixxjeremy@gmail.com', 'MaDGEFBK3A', '32432423', '2022-06-24'),
(2002022004, NULL, 18, 1, 700, 5, 3500, 'omondikens1@gmail.com', 'cPonk2wptN', '0717432422', '2022-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `role`) VALUES
(1, 'Jeremy', 'Munroe', 'jerrey', 'jerrey@gmail.com', '12345678a', 0),
(2, 'Sample', 'Lastss', 'sdds', 'jeremy@gmail.com', 'sdsddsds', 0),
(3, 'Sample', 'Lastss', 'dsds', 'sdsd@ff.com', 'sddsds2f', 0),
(4, 'Sample', 'Lastss', 'matrix', 'j@gmail.com', 'assaad33', 0),
(5, 'Sample', 'Lastss', 'j', 'jr@gmail.com', '123456', 0),
(6, 'Sample', 'Lastss', 'jerrey@gmail.com', 'jerrdsdey@gmail.com', '12345678a', 0),
(7, 'Jeremy', 'Munroe', 'Jeremy', 'eorg@gmail.com', '1234', 0),
(8, 'Sample', 'Lastss', 'tashie', 'tashie@gmail.com', 'qwerty12', 0),
(9, 'sas', 'asa', 'sas', 'a@mail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_category_images`
--
ALTER TABLE `tbl_category_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_eventlocations`
--
ALTER TABLE `tbl_eventlocations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_category` (`event_category`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_event_images`
--
ALTER TABLE `tbl_event_images`
  ADD PRIMARY KEY (`event_image_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tbl_organizers`
--
ALTER TABLE `tbl_organizers`
  ADD PRIMARY KEY (`organizer_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_ticketdetails`
--
ALTER TABLE `tbl_ticketdetails`
  ADD PRIMARY KEY (`ticket_details`);

--
-- Indexes for table `tbl_ticketorders`
--
ALTER TABLE `tbl_ticketorders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_ticketpurchases`
--
ALTER TABLE `tbl_ticketpurchases`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `payment_type` (`payment_type`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_category_images`
--
ALTER TABLE `tbl_category_images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_eventlocations`
--
ALTER TABLE `tbl_eventlocations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_event_images`
--
ALTER TABLE `tbl_event_images`
  MODIFY `event_image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_organizers`
--
ALTER TABLE `tbl_organizers`
  MODIFY `organizer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ticketpurchases`
--
ALTER TABLE `tbl_ticketpurchases`
  MODIFY `ticket_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002022005;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_category_images`
--
ALTER TABLE `tbl_category_images`
  ADD CONSTRAINT `tbl_category_images_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`category_id`);

--
-- Constraints for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD CONSTRAINT `tbl_events_ibfk_1` FOREIGN KEY (`event_category`) REFERENCES `tbl_categories` (`category_id`),
  ADD CONSTRAINT `tbl_events_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `tbl_organizers` (`organizer_id`);

--
-- Constraints for table `tbl_event_images`
--
ALTER TABLE `tbl_event_images`
  ADD CONSTRAINT `tbl_event_images_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tbl_events` (`event_id`);

--
-- Constraints for table `tbl_ticketpurchases`
--
ALTER TABLE `tbl_ticketpurchases`
  ADD CONSTRAINT `tbl_ticketpurchases_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_ticketpurchases_ibfk_2` FOREIGN KEY (`payment_type`) REFERENCES `tbl_payment` (`payment_id`),
  ADD CONSTRAINT `tbl_ticketpurchases_ibfk_3` FOREIGN KEY (`event_id`) REFERENCES `tbl_events` (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
