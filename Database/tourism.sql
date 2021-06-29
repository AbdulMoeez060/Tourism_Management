-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 05:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Abdul Moeez', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `HasAirpot` varchar(4) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ID`, `Name`, `Province`, `HasAirpot`, `Description`) VALUES
(1, 'Lahore', 'Punjab', 'Yes', 'Lahore (لاهور) is Pakistan\'s second largest city, and the capital of the north-eastern Punjab province. It is widely considered the country\'s cultural capital. The heart of Lahore is the Walled or Inner City, a very densely populated area.'),
(2, 'Multan', 'Punjab', 'Yes', 'Multan (مُلتان) is a city and capital of Multan Division located in Punjab, Pakistan. Situated on the bank of the Chenab River, Multan is Pakistan\'s 7th largest city and is the major cultural and economic centre of Southern Punjab. Multan\'s history stretches deep into antiquity.'),
(3, 'Islamabad', 'Punjab', 'Yes', 'It is the ninth-largest city in Pakistan, and CAPITAL OF PAKISTAN while the larger Islamabad–Rawalpindi metropolitan area is the country\'s third-largest with a population of about 4.1 million people.'),
(4, 'Karachi', 'Sindh', 'yes', 'Karachi is the capital of the Pakistani province of Sindh. Situated on the Arabian Sea.');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contacts`
--

CREATE TABLE `emergency_contacts` (
  `Number` bigint(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_contacts`
--

INSERT INTO `emergency_contacts` (`Number`, `Name`, `Description`) VALUES
(15, 'Police', 'Guard against theft,illegal activities,personal safety, well being of the cities,etc'),
(16, 'Fire Brigade', 'Fire Brigade helpline in case of fire emergencies.'),
(115, 'Eidhi Ambulance', 'Rescue service started by the great man Abdul Sattar Edhi. It provides all services as any other Rescue Service'),
(1101, 'Rangers Helpline', 'Helpline associated with Pak-Army. Mainly used to report any terrorist activities and other international illegal occurances.'),
(1122, 'Rescue Service', 'Ambulance service to the nearest hospital in case of injuries or health issues. A most reliable service');

-- --------------------------------------------------------

--
-- Table structure for table `food_vendors`
--

CREATE TABLE `food_vendors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `ContactNO` varchar(15) DEFAULT NULL,
  `Location` varchar(100) NOT NULL,
  `Rating` float DEFAULT NULL COMMENT 'Out of 5',
  `Website` varchar(50) DEFAULT NULL,
  `Pricing` varchar(20) DEFAULT NULL,
  `Spot_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_vendors`
--

INSERT INTO `food_vendors` (`ID`, `Name`, `ContactNO`, `Location`, `Rating`, `Website`, `Pricing`, `Spot_Id`) VALUES
(1, 'OLD ANARKALI FOOD STREET', NULL, 'NEAR ANARKALI BAZAR LAHORE', 4.3, 'foodpanda.com', '$', 19),
(2, 'Multan cuisine', '616512615', 'Bosan Rd nasheeman colony', 4.3, 'foodpanda.com', '$$', 14),
(3, 'Sweet tooth', NULL, 'Fort road Near shahi muhala walled city of Lahore', 4, 'foodpanda.com', '$', 11),
(4, 'Tasty plus restaurant', NULL, 'Near khanewal Rd naqshabad colony multan', 3.9, 'foodpanda.com', '$$', 28),
(5, 'Shahi baithak', '03217866266', 'Akbari Mando walled city of Lahore', 4.3, 'foodpanda.com', '$$', 15),
(6, 'Kabuli cuisine', '03131479777', 'Near dera Adda altamash road jalibad colony multan', 3.7, 'foodpanda.com', '$', 24),
(7, 'ANDAZZ RESTRAUNT', '030002623229', ' Shahi muhala walled city of Lahore', 4.1, 'Andaazrestraunt.com', '$$', 19),
(8, 'Shangrila Cousine', '0616771802', 'Near gulshan market Rd, s block s new multan colony', 4.2, 'facebook.com/shangrilacuisineo', '$', 18),
(9, 'Amratsari Harisa', NULL, 'Gawalmandii Lahore', 4.2, 'amratsariharisa.com', '$', 21),
(10, 'Masoom\'s cafe', '03000274744', 'Metro station usmanabad gulghast colony multan Punjab', 4.3, 'facebook.com/masons', '$$', 16),
(11, 'Haveli restraunt', '03008414899', 'Shahi muhala walled city of Lahore', 4.3, 'haveli.com.pk', '$', 13),
(12, 'Bell and tell', '0614785030', '68 mall plaza mall Rd multan cannot residential area multan', 3.9, 'foodpanda.com', '$$', 14),
(13, 'Coc\'s den', '03009472407', ': Roshani gate shahi muhala walled city of Lahore', 4, 'foodmenu.pk', '$', 21),
(14, 'Sawadi restraunt', NULL, 'Masoom shah Rd Bismillah chock ashraf colony Jan Muhammad co', 4, 'foodpanda.com', '$$', 12),
(15, 'Bashir darul mahi', '03214586246', 'Near qadafi stadium', 4, ':bashir.darul.mahi.com', '$$', 27),
(16, 'Cafe Moltan', NULL, 'Bhawal pur by pass chock ram Kali multan Punjab', 3.9, 'foodpanda.com', '$$', 28),
(17, 'Cafe Rustic', '0512650007', 'Faisal Mosque Islamabad', 4.2, 'https://web.facebook.com/caferusticislamabad/?_rdc', '$', 1),
(18, 'Ilyas Dumba Karahi and Tikka R', '03222220120', 'Mazaar e Quaid', 4.3, 'foodpanda.com', '$', 2),
(19, 'Lala Jee Fry Chanay', '03335323537', 'Pakistan Monument', 4.9, 'foodpanda.com', '$$', 3),
(20, 'Dera Restaurant', '04235202786', 'national museum of pakistan', 4.1, 'foodpanda.com', '$$', 6),
(21, 'PTDC Restaurant Daman-e-Koh', '051) 2601613', 'Daman-e-koh', 4.2, 'foodpanda.com', '$', 5),
(22, 'MaiKada Cafe and Restaurant', '0307 6265038', 'Fatima jinnah park islamabad', 5, 'foodpanda.com', '$$', 9);

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Gender` char(1) NOT NULL,
  `Rating` int(11) DEFAULT NULL COMMENT 'Out of 5',
  `Email` varchar(30) DEFAULT NULL,
  `ContactNo` bigint(11) DEFAULT NULL,
  `Company_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`ID`, `Fname`, `Lname`, `Status`, `DOB`, `Gender`, `Rating`, `Email`, `ContactNo`, `Company_Id`) VALUES
(1, 'Iftikkhar', 'Abbas', 'Available', '1970-04-03', 'M', 5, NULL, NULL, 11),
(2, 'Ali ', 'Murtaza', 'Available', '1992-06-17', 'M', 4, '', 0, 2),
(3, 'Ayesha', 'Ilyas', 'Availabe', '1995-04-03', 'F', 4, 'papakipari@gmail.com', NULL, 11),
(4, 'Muhammad', 'Ali', 'Avilable', '1980-07-12', 'M', 5, 'MAli@yahoo.com', 30285755, 18),
(5, 'Humaira', 'Ali', 'Available', '1977-09-08', 'F', 3, NULL, NULL, 16),
(6, 'Sarfaraz', 'Ahmed', 'Available', '1988-01-06', 'M', 4, 'balag@hotmail,com', 301556530, 17),
(7, 'Maham', 'Armaghan', 'Available', '1999-06-17', 'F', 5, 'MAIB@outlook.com', 31362225, 15),
(8, 'Anthony', 'Gonzalvis', 'Available', '1979-11-11', 'M', 4, 'anthonyakela@hotmail.com', 3025565306, 14),
(9, 'Mariam', 'Badar', 'Available', '1972-09-17', 'F', 3, 'MbadarM@cyber.net.pk', 0, 13),
(10, 'Abdul', 'Rafay', 'Availabe', '1985-03-02', 'M', 5, 'RafABD@gmail.com', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Stars` float NOT NULL COMMENT 'Out Of 5',
  `Location` varchar(100) NOT NULL,
  `AverageRates` int(11) NOT NULL COMMENT 'In Pkr',
  `Website` varchar(50) DEFAULT NULL,
  `ContactNo` varchar(13) DEFAULT NULL,
  `City_Id` int(11) NOT NULL,
  `Spots_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`ID`, `Name`, `Stars`, `Location`, `AverageRates`, `Website`, `ContactNo`, `City_Id`, `Spots_Id`) VALUES
(1, 'Hotel Premier Inn', 4, '8-Davis Road, Near Shimla Hill, Lahore, 54000 Lahore, Pakist', 5500, 'https://www.booking.com/', '0', 1, 11),
(2, 'Grand luxury Hotel', 5, '10/A Gulgasht Avenue Multan, 60000 Multan, Pakistan', 12000, 'https://www.booking.com/', '0', 2, 14),
(3, 'Homewood Suite - Two Bedroom Apartment', 5, 'Near Asim Mobiles And Repairing Center Javaid Cottage, St Ba', 85000, 'https://www.booking.com/', '0', 1, 27),
(4, 'Raywal Executive Suites', 4, 'A-9/5 Gulgasht\r\ncolony opposite pizza hut\r\nmultan, 66000 Multan,', 8500, 'https://www.booking.com/', NULL, 2, 24),
(5, 'Hotel tourist inn', 4, 'nabaha road, opposite custom house 2 nabaha Rd ANARKALI BAZAR LAHORE', 3306, 'https://www.booking.com/', NULL, 1, 15),
(6, 'The grand hotel', 4, 'Opposite Shareef plaza kachehri road multan\r\n', 2500, 'https://www.booking.com/', '03037225786', 2, 24),
(7, 'Hotel marcopolo Lahore', 4, '13 Abbott road near lakshami chock ghari shahi Lahore Punjab', 5000, 'hotelmarcoplol.ascendant.trave', '04236366225', 1, 25),
(8, 'Hotel DE Shalimar Multan', 4, '43-A Tariq road muhalla darkhana wala nawa shehar Multan', 5220, 'https://www.booking.com/', '03366275555', 2, 20),
(9, 'Gulberg continental hotel', 4, '29s off m.m Alam road block A1 Gulberg III Lahore', 4500, 'gulbergcontinentalhotel.com', '03217777547', 1, 21),
(10, 'MGM lodge', 5, 'Located in services club multan Near Sher shah road multan cantt residential area multan', 5000, 'https://www.booking.com/', '0614503748', 2, 16),
(11, 'Royal motel guest house', 4.2, 'House 270B Street 21 Sector E-7, E-7 Sector, 44000 Islamabad, Pakistan  ', 3950, 'https://www.booking.com/', '03369191809', 3, 1),
(12, 'Hotel Crown Inn Karachi', 3.8, '171 Frere Road, Clarke St، Shahrah-e-Iraq, next to Passport Office Opposite: FIA Headquarter High Co', 8000, 'https://www.booking.com/', '(021) 3562200', 4, 2),
(13, 'Blue moon Residency', 4.8, '2 Street 26, F-6 Sector, 44000 Islamabad, Pakistan', 6645, 'https://www.booking.com/', '03011444493', 3, 1),
(14, 'Royal Inn Hotel', 3, '12-D, block, 6, P.E.C.H.S. Block 6 PECHS, Karachi, Karachi City, Sindh 75400', 4500, 'https://www.booking.com/', '03343101990', 4, 2),
(15, 'South Pacific Bed & Breakfast', 4.9, '18 Gibson Close, 4879 Clifton Beach, ', 11887, 'www.hotels.com', NULL, 4, 4),
(16, 'Royal Manor Islamabad', 4.3, 'Address	5-C Street 53, Marvir Road, F-7/4 ', 3071, 'https://www.booking.com/', '0518434818', 3, 5),
(17, 'Agincourt Beachfront Apartments', 4.15, '69-73 Arlington Esplanade, 4879 Clifton Beach, karachi', 3520, 'https://www.booking.com/', NULL, 4, 4),
(18, 'New Islamabad Hotel Sitara Market', 3.9, 'Sachal Sarmast Road, G-7 Markaz G 7 Markaz G-7, Islamabad, Islamabad Capital Territory 44000', 4060, 'https://www.booking.com/', '0316 5307174', 3, 3),
(19, 'Ballagio Islamabad', 4.9, 'Street 22, G-8/4 G 8/4 G-8, Islamabad, Islamabad Capital Territory 46000', 4095, 'https://www.booking.com/', '03075022411', 3, 3),
(20, 'Hotel Salaar', 5, '1-K Plaza, F-10 Markaz Islamabad, 44100', 2633, 'https://www.booking.com/', '03218473750', 3, 3),
(21, 'Delano Residence', 4.1, 'House # 200، 2 Street 18, F-10/2 F 10/3 F-10, Islamabad, Islamabad Capital Territory', 3500, 'https://www.booking.com/', '03406018615', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Cost` int(11) DEFAULT NULL,
  `StartingDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Guide_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`ID`, `Name`, `Type`, `Cost`, `StartingDate`, `EndDate`, `Description`, `Guide_ID`) VALUES
(1, 'Diamond', 'Premium', 40000, '2021-07-09', '2021-07-30', 'The first day, we shall be traveling to Lahore, it would take near 4 hours partially on the motorway and then Lahore-Multan highway. We shall reach our destination by evening and check-in at Hotel PC Hotel\r\n\r\nThe first day sets the tone but 2nd day of the tour starts with the astounding beauty of Inner City. First glimpse of the inner walls. A short stay at shahi Qila along 03 Lahori gates meeting Point. \r\n\r\nHaving Breakfast in Hotel will energize you. Some market visit along Mall Road & Lahore Fort is on task list along with entry Tickets. A bonus feature would be visiting Jallo park as well.\r\n\r\nDay 04\r\nWe shall be Visiting Upper Hunza after Breakfast. Check out From Karimabad Hotel and reach the LUxury resort on Bank of Attabad Lake. We shall first check-in at Luxus Hunza Hotel, then we shall be having some activity like exploring Gulmit village, passu cons and much more.\r\nLuxus Hunza Hotel\r\n', 3),
(2, 'Gold-Star', '4 Star Package', 30000, '2021-06-30', '2021-07-08', 'Pick From Islamabad and move towards Lahore City and reach Lahore in 5-6 Hours, Check in to Hotel\r\n\r\nBreakfast and move towards Shadra, Reach there in 20 mins, then move back to Lahore Fort Visit and Upper City Areas and back to Hotel evening\r\n\r\nWe shall move towards Emporium Mall Visit  Shaukat Kahnum Road and then head towards Islamabad for End of Tour', 2),
(3, 'Deluxe', 'Deluxe 5 Star-packag', 39000, '2021-08-06', '2021-08-12', 'You\'ll be picked up from Multan Airport and be taken towards the Grand Marqis Dibao hotel.\r\n\r\nFrom there in the next 6 days you\'ll be given a bus service which will take you to all the historical mazars and market Multan has to Offer.\r\n\r\nThe Package includes stay in the most vibrant places and many of the delicacies the city has to offer.', 1),
(4, 'King Way', '5 Star Package', 60000, '2021-07-22', '2021-07-31', NULL, 6),
(5, 'Econ Plus', '3-Star Economy packa', 12000, '2021-06-29', '2021-07-03', NULL, 4),
(6, 'Histo World', '4-Star Economy Plus ', 20000, '2021-06-10', '2021-06-27', 'This package is great for all the history Lovers. In this you\'ll be given the grand tour of all the historical places present in the city karachi and you\'ll have the special honour of entering all the special mazars, in which non-Muslims are not allowed to step foot in.', 5),
(7, 'Wiz World', '2-star Package', 8000, '2021-07-08', '2021-07-13', NULL, 7),
(8, 'Krot', 'Premium', 39000, '2021-07-01', '2021-07-07', 'A package fit for a king. In it you\'ll be put only in 5 star hotels and be given the choice to travel either in premium buses or premium sedans.\r\nYou will be given the tour of the major cities accompanied along with a guide who take you to all the major tourist spots and delicacies the city has to offer.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `Package_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`ID`, `Name`, `Email`, `Password`, `ContactNo`, `Country`, `Package_ID`) VALUES
(1, 'Abdul Moeez', 'abdulmoeez@gmail.com', 'awien', '03087030889', 'Pakistan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tourist_company`
--

CREATE TABLE `tourist_company` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Rating` int(11) DEFAULT NULL COMMENT 'Out OF 5',
  `Email` varchar(30) NOT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `ContactNo` bigint(12) NOT NULL,
  `City_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourist_company`
--

INSERT INTO `tourist_company` (`ID`, `Name`, `Address`, `Rating`, `Email`, `Website`, `ContactNo`, `City_Id`) VALUES
(1, 'BestWay Travels', 'Office 2, Khawaja Arcade, Mini Commercial (Near DHA Bridge),', 4, 'Bsetwayspk@gmail.com', 'https://www.bestways.pk/', 515565312, 3),
(2, 'Zeb Travels', 'Uni Plaza, Ground Floor, I.I. Chundrigar Road, Near karachi ', 5, 'zeb@cyber.net.pk', 'http://www.zebtravels.com.pk/', 2132411264, 4),
(3, 'Askari Travels & Tours', 'Ground Floor, State Life Building No، 9 Jinnah Ave, F 6/1 Bl', 5, 'generalmanager@askaritravels.c', 'http://www.askaritravels.com/', 300517152, 3),
(4, 'Hike Whiz Travel & Tour', 'Anum Arcade, Shop No 1, Ground Floor, South Park Avenue, Pha', 4, '', 'hikewhiz.com', 2135380864, 4),
(5, 'SkyTravel & Tours', 'Al-Haseeb Complex, Opp Shaafi Hospital, Main Pwd Road, Islam', 3, 'Skytravels@gmail.com', 'https://www.sky-tours.com/?utm_campaign=brand-rotw', 334223424, 3),
(6, 'Aroma Travel', '16, Sidco Avenue Centre, Strachan Road, Karachi, Pakistan.', 4, 'customerservice@aromatravel.co', 'http://aromatravel.com/contact-us/', 99205704, 4),
(7, 'AL Taqwa Travel and Tours', 'Office # 111, First Floor AL Qadir Heights Garden town Lahor', 5, '', 'www.flyjannah.com', 3094441501, 1),
(8, 'Al Amal Travel & Tours Se', 'off # 303, Gulgasht Mall, MCB Road, Goal Bagh Gulgasht Colon', 5, '', 'https://www.facebook.com/alamalt ravelntours/', 3156697009, 2),
(9, 'Apni Travel & Tours Servi', '41 commercial Basement Cavalry Ground Lahore', 5, 'apnitravel@gmail.com', 'www.apnitravel.com', 3219000991, 1),
(10, 'Bukhari Travel & Tourism ', 'Shop No.3-4, Faisal Arcade, LMQ Road, Multan.', 0, 'BKT@outlook.com', NULL, 614500847, 2),
(11, 'Babaaz Travels & Tours In', '49LG Gohar center,Main Wahdat road Lahore', 4, '', 'www.babaaztravels.com', 3214419469, 1),
(12, 'Gaza Travels Multan', 'Office No.24 Allama Iqbal Market New Multan.', 5, 'GazaTravels@gmail.com', 'www.gazatravels.com', 3136222431, 2),
(13, 'Balaggan Travels Services', 'G5,6, Davis heights, 38 davis road Lahore', 5, 'balag@hotmail,com', 'https://www.facebook.com/balaggan .travels/', 3228482711, 1),
(14, 'Brolla Travel & Tour', 'Office# 5, Abdullah Center L.M.Q Road, Multan.', 4, '', 'www.brollaholidays.com', 614581652, 2),
(15, 'DestinAsia Pvt. Ltd. Serv', 'Office # 404, 4th Floor, Gulberg Arcade, Main Market, Gulber', 4, '', 'https://www.facebook.com/destinasi aofficial/', 3072125956, 1),
(16, 'Al-Mehdi Travel & Tours', '26,27 Hajwery Arcade Kachery Road Multan. Multan, Punjab.', 0, '', 'www.almehditravel.com', 3006320229, 2),
(17, 'Escapede Services', '69B Main Boulevard Gulberg, Block H Gulberg 2 Lahore, Pakist', 4, 'esc121@gmail.com', 'www.escapedetravel.com', 3354849557, 1),
(18, 'JS Travel & Tours (Pvt.) ', 'Hajvery Arcade Kutchery Road Multan-', 4, '', 'www.jstravelandtour.com', 614501121, 2),
(19, 'Alyph Travel & Tours Serv', '104-R block,Lalik chowk, DHA lahore', 4, '', 'http://www.alyphtravels.com', 3334780750, 1),
(20, 'SHAIGHAN TRAVEL & TOURS (', '38 B Model town northern bypass road multan. Multan.', 3, '', 'www.shaighangrop.com', 92614424344, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spots`
--

CREATE TABLE `tourist_spots` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `FoundingDate` varchar(20) DEFAULT NULL,
  `Timings` varchar(60) NOT NULL,
  `EntryPrice` int(11) NOT NULL,
  `Description` text DEFAULT NULL,
  `RushHours` varchar(30) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL COMMENT 'Out of 5',
  `Type` varchar(20) DEFAULT NULL,
  `City_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourist_spots`
--

INSERT INTO `tourist_spots` (`ID`, `Name`, `Location`, `FoundingDate`, `Timings`, `EntryPrice`, `Description`, `RushHours`, `Rating`, `Type`, `City_Id`) VALUES
(1, 'Faisal Masjid Islamabad', 'Shah Faisal Ave, E-8, Islamaba', '1986-01-02', '3:00am to 10:00pm', 0, 'The Faisal Mosque is the largest mosque in Pakistan, located in the national capital city of Islamabad. Completed in 1986, it was designed by Turkish architect Vedat Dalokay, shaped like a desert Bedouin\'s tent, is an iconic symbol of Islamabad throughout the world.', '11am-2pm', 5, 'Religious Monument', 3),
(2, 'Mazar-e-Quaid, Jinnah\'s Mausol', 'MA Jinnah Rd, Block L Khayaban', '1970-06-02', '10am - 5:30pm', 0, 'Mazar-e-Quaid (Urdu: مزار قائد‎) or the National Mausoleum refers to the tomb of the founder of Pakistan, Muhammad Ali Jinnah. It is an iconic symbol of Karachi throughout the world. The mausoleum was completed in the 1960s. It is situated at the heart of the city.', '3pm-5pm', 5, 'Historical Monument', 4),
(3, 'Pakistan Monument', 'Shakarparian Hills، Islamabad,', '2007-03-23', '10:00am to 7:00pm', 20, 'The Pakistan Monument (Urdu: یادبود پاکستان‎) is a national monument and heritage museum located on the western Shakarparian Hills in Islamabad, Pakistan. The monument was constructed to symbolize the unity of the Pakistani people.', '10am-12pm', 4, 'Historical Museum', 3),
(4, 'Clifton Beach, Karachi', 'Sea side karachi', '1947-08-14', '24hrs', 0, 'Clifton beach stretches across the shores of Karachi city, and is a good place for family excursions and amusements as it offers many different types of games,restaurtants,rides,etc.', '10am-2pm', 4, 'Excursion Location', 4),
(5, 'Damne-e-koh', 'Daman -e- Koh Rd, E-7, Islamab', '2010-07-28', '9 am to 11 pm', 0, 'Daman-e-Koh (Urdu: دامن کوہ‎) is a viewing point and hill top garden north of Islamabad and located in the middle of the Margalla Hills.It is a great place to get the whole view of the city.', '9-11pm', 4, 'Historical Monument', 3),
(6, 'National Museum Of Pakistan', 'Shahrah-e-Kemal Ataturk, Sadda', '1950-04-17', '9am-5pm', 20, 'This museum is dedicated to the art, Islamic heritage and historical valuables of the country. It records and presents the cultural history of Pakistan. There is plenty to see in the 11 galleries of this site, which also includes a special Quran gallery with around 300 rare and precious copies of the holy scripture.', '9-12am', 5, 'Religious Monument', 4),
(7, 'Lok Virsa Heritage Museum', '4. Lok Virsa Heritage Museum G', '1974-05-12', '10am to 8pm', 50, 'Heritage Museum also known as Lok Virsa Museum is a museum administered and managed by Lok Virsa - National Institute of Folk & Traditional Heritage.', 'Opening hours on weekends', 4, 'Heritage Museum', 3),
(8, 'Mohatta Palace', '7 Hatim Alvi Rd, Block 5 Old C', '1927-05-19', '11am to 6pm', 30, 'When the Foreign Office shifted to Islamabad, the palace was given to Mohtarma Fatima Jinnah. After her death, her sister Shireen Bai lived here till she breathed her last in 1980. Subsequently, it was purchased by the federal government who handed it over to the Sindh government.', 'Opening hours on weekends', 3, 'Historical Monument', 4),
(9, 'fatima jinnah park', 'F-9, Islamabad, Islamabad Capi', '1992-07-16', '9:30am to 1pm and 4:30pm to 8 pm', 0, 'Fatima Jinnah Park (Urdu: فاطمہ جناح پارک‎), also known as Capital Park or F-9 Park, is a public recreational park that spans the whole of Sector F-9 of Islamabad ', 'weekends', 4, 'Excursion Place', 3),
(10, 'Frere Hall', 'Fatima Jinnah Rd, Saddar Civil', '1863-08-14', '9am to 5pm', 0, 't was built in honor of Sir Henry Bartle Edward Frere, a British national who is known for promoting economic development in Sindh and also remembered for making the Sindhi Language compulsory in the province instead of Persian.', 'weekends', 5, 'Historical Monument', 4),
(11, 'Badshahi Mosque', 'Walled city of Lahore.', '1673-01-01', '8am-8pm', 0, 'Mughal era mosque in Lahore\r\nSituated In west of Lahore.\r\nLahore’s\r\nMost iconic landmarks', '12am-6pm', 5, 'Religious Monument', 1),
(12, 'Fort Kohna Qasim GARDEN', 'Husaain agha road Qila kohna q', '800-1000bc', '24hrs', 0, 'Mostly destroyed fortress now\r\nMost iconic landmarks.', '12pm-2pm', 4, 'Excursion Location', 2),
(13, 'Lahore museum', 'Shahrah-e-Quaid-e-Azam, Anarka', '1865-04-18', '9am-4pm', 50, 'Pakistan\'s most visited and famous\r\nmuseums and remains one of the\r\nmajor museums in South Asia.', '12am onwards', 4, 'Historical Monument', 1),
(14, 'TOMB OF HAZRAT SHAH-RUKH-NE-AL', 'Qilla Kohna, Qila Kohna Qasim ', '', '10 am to onwards', 0, 'The Tomb of Shah Rukn-e-Alam\r\nlocated in Multan, Pakistan, is the\r\nmausoleum of the Sufi saint Sheikh\r\nRukn-ud-Din Abul Fateh. The\r\nshrine is considered to be the\r\nearliest example of Tughluq\r\narchitecture, and is one of the most\r\nimpressive shrines in the Indian\r\nsubcontinent.', 'evening', 5, 'Religious Monument', 2),
(15, 'Lahore Fort', 'Fort Rd, Walled City of Lahore', '1981', '8:30am – 5pm', 0, 'The fortress is located at the\r\nnorthern end of walled city Lahore,\r\nand spreads over an area greater\r\nthan 20 hectares. It contains 21\r\nnotable monuments, some of which\r\ndate to the era of Emperor Akbar', '12am onwards', 5, 'Historical Museum', 1),
(16, 'Shrine of Shah Yusuf gardezi', 'Located in NW part of walled c', '1088 AD.', '24hrs', 0, 'Shah Yousuf Gardez was an\r\nIslamic Sufi saint who came to\r\nMultan.', '12am onwards', 4, 'Religious Monument', 2),
(17, 'Wazir Khan Mosque Mosque', 'Shahi Guzargah، Dabbi Bazar, C', '1642', '4am-8pm', 0, 'Mughal architecture,\r\nIndo-Islamic architecture', 'Prayer Times', 5, 'Religious Monument', 1),
(18, 'Tomb of Hazrat Shah Rukn-e-Ala', 'Qilla Kohna, Qila Kohna Qasim ', '1324 C.E.', '24hrs', 0, 'The Tomb of Shah Rukn-e-Alam\r\nlocated in Multan, Pakistan, is the\r\nmausoleum of the Sufi saint Sheikh\r\nRukn-ud-Din Abul Fateh. The\r\nshrine is considered to be the earliest example of Tughluq\r\narchitecture, and is one of the most\r\nimpressive shrines in the Indian\r\nsubcontinent.', '10 am onwards', 4, 'Religious Monument', 2),
(19, 'Data Darbar', 'Data Darbar Rd, Data Gunj Buks', '11th century CE.', '24hrs', 0, 'Data Darbar, located in the city of\r\nLahore, Punjab, Pakistan is the\r\nlargest Sufi shrine in South Asia. It\r\nwas built to house the remains of Ali\r\nHujwiri, commonly known as Data\r\nGanj Baksh, a Sufi saint from\r\nGhazni in present-day Afghanistan,\r\nwho is believed to have lived on the\r\nsite in the 11th century CE.', '12am onwards', 5, 'Religious Monument', 1),
(20, 'Services Club', '58 Sher Shah Rd, Multan Cantt ', '', '8am-11pm', 250, 'Elite selection club', '10am-12pm', 4, 'Excursion Place', 2),
(21, 'Minar-e-Pakistan', 'Androon Lahore', 'October 21, 1968', '8am-8pm', 0, 'Minar-e-Pakistan is a national\r\nmonument located in Lahore,\r\nPakistan. The tower was built\r\nbetween 1960 and 1968 on the site\r\nwhere the All-India Muslim League\r\npassed the Lahore Resolution on 23\r\nMarch 1940', '12 am onwards', 5, 'Heritage Monument', 1),
(22, 'Bibi Pak Daman Shrine', 'Muhammad Nagar Garhi Shahu, La', 'AD 680', '24hrs', 0, 'Bibi Pak Daman is the mausoleum\r\nof Ruqayyah bint Ali located in\r\nLahore, Punjab, Pakistan. Legend\r\nhas it that it holds the graves of six\r\nladies from Muhammad\'s\r\nhousehold.', '12am-3pm', 4, 'Religious Monument', 2),
(23, 'Shalimar Bagh', 'Shalamar Chowk، G. T. Road, Sh', NULL, '8am-6pm', 0, 'The Shalimar Gardens, also known\r\nin English as the Shalimar Gardens,\r\nare a Mughal garden complex\r\nlocated in Lahore, capital of the\r\nPakistani province of Punjab.', 'Noon', 4, 'Excursion Location', 1),
(24, 'Chowk Ghanta Ghar', 'Chowk Ghanta Ghar Medicine mar', NULL, '24hrs', 0, 'Ghanta Ghar Chowk is a place in\r\nMultan, the fifth-largest city in\r\nPakistan, which literally means\r\n\"Clock Tower Town Square\" in\r\nUrdu. It is the largest intersection\r\nin Multan, near the clock tower of\r\nthe city called Ghanta Ghar.', '12am onwards', 4, 'Excursion Place', 2),
(25, 'Lahore Zoo', 'Shahrah-e-Quaid-e-Azam, The، S', '', '10am-6pm', 100, 'Lahore Zoo in Lahore, Punjab,\r\nPakistan, established in 1872, one of\r\nthe largest zoos in Pakistan. It is\r\ncurrently managed by the Forest,\r\nWildlife and Fisheries department\r\nof the Government of Pakistan.\r\nToday the zoo houses a collection of\r\nabout 1378 animals of 135 species.', '12am onwards', 5, 'Excursion Place', 1),
(26, 'Eidgah', 'Khanewal Rd, Osmanabad Colony,', '1735', '12am-12pm', 0, 'The Shahi EidGah Mosque is an\r\nearly 18th-century mosque,\r\nMughal architecture, Indo-Islamic\r\narchitecture', 'On Eid', 4, 'Religious Monument', 2),
(27, 'Wagha Border', 'Wagah, Hardo Rattan, Punjab 14', '1947/08/14', '10am-6pm', 0, 'Wahga or Wagha is a village and\r\nunion council located in the Wahgah\r\nZone of Lahore, Punjab, Pakistan.\r\nThe town is famous for the Wagah\r\nborder ceremony and also serves as\r\na goods transit terminal and a\r\nrailway station between Pakistan\r\nand India.', 'Packed Every Day During Openin', 5, 'Heritage Monument', 1),
(28, 'Monument of Van Alexander Agne', 'Qilla Kohna, Qila Kohna Qasim ', NULL, '24hrs', 0, 'A monument was erected for Vans\r\nAgnew after the Siege of Multan.', NULL, 3, 'Historical Monument', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `food_vendors`
--
ALTER TABLE `food_vendors`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SpotRelation` (`Spot_Id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Company` (`Company_Id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Fks` (`City_Id`),
  ADD KEY `Spots` (`Spots_Id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GuideRel` (`Guide_ID`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Package` (`Package_ID`);

--
-- Indexes for table `tourist_company`
--
ALTER TABLE `tourist_company`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Fk` (`City_Id`);

--
-- Indexes for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `City` (`City_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food_vendors`
--
ALTER TABLE `food_vendors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourist_company`
--
ALTER TABLE `tourist_company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_vendors`
--
ALTER TABLE `food_vendors`
  ADD CONSTRAINT `SpotRelation` FOREIGN KEY (`Spot_Id`) REFERENCES `tourist_spots` (`ID`);

--
-- Constraints for table `guides`
--
ALTER TABLE `guides`
  ADD CONSTRAINT `Company` FOREIGN KEY (`Company_Id`) REFERENCES `tourist_company` (`ID`);

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `Fks` FOREIGN KEY (`City_Id`) REFERENCES `city` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `Spots` FOREIGN KEY (`Spots_Id`) REFERENCES `tourist_spots` (`ID`);

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `GuideRel` FOREIGN KEY (`Guide_ID`) REFERENCES `guides` (`ID`);

--
-- Constraints for table `tourist`
--
ALTER TABLE `tourist`
  ADD CONSTRAINT `Package` FOREIGN KEY (`Package_ID`) REFERENCES `packages` (`ID`);

--
-- Constraints for table `tourist_company`
--
ALTER TABLE `tourist_company`
  ADD CONSTRAINT `Fk` FOREIGN KEY (`City_Id`) REFERENCES `city` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  ADD CONSTRAINT `City` FOREIGN KEY (`City_Id`) REFERENCES `city` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
