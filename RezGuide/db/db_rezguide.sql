-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2014 at 03:41 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'db_rezguide'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_admins'
--

CREATE TABLE tbl_admins (
  admins_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  admins_username varchar(60) NOT NULL,
  admins_password varchar(75) NOT NULL,
  admins_firstname varchar(50) NOT NULL,
  admins_lastname varchar(50) NOT NULL,
  admins_email varchar(50) NOT NULL,
  admins_level int(2) NOT NULL,
  admins_empnumber varchar(15) NOT NULL,
  admins_position varchar(50) NOT NULL,
  PRIMARY KEY (admins_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_admins'
--

INSERT INTO tbl_admins (admins_id, admins_username, admins_password, admins_firstname, admins_lastname, admins_email, admins_level, admins_empnumber, admins_position) VALUES
(1, 'roberts_t_43', 'buttons747', 'Trent', 'Roberts', 'roberts_t1@fanshaweonline.ca', 1, '1002', 'Residence Manager'),
(2, 'fairchild_k_13', 'spuffy789', 'Kaitlyn', 'Fairchild', 'katie_fairchild43@gmail.com', 2, '2041', 'Residence Advisor'),
(3, 'banks_k_2', 'hanshotfirst', 'Kevin', 'Banks', 'banks_k1@fanshaweonline.ca', 1, '1005', 'Residence IT Manager');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_balance'
--

CREATE TABLE tbl_balance (
  balance_id int(7) unsigned NOT NULL AUTO_INCREMENT,
  student_id int(7) NOT NULL,
  balance_itemname varchar(75) NOT NULL,
  balance_credit varchar(50) NOT NULL,
  balance_debit varchar(50) NOT NULL,
  balance_amount varchar(50) NOT NULL,
  PRIMARY KEY (balance_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_balance'
--

INSERT INTO tbl_balance (balance_id, student_id, balance_itemname, balance_credit, balance_debit, balance_amount) VALUES
(1, 2, 'Subway', '', '8.95', '1673.42'),
(2, 2, 'DEPOSIT', '150.00', '', '1823.42'),
(3, 2, 'Falcon House Cafeteria', '', '7.21', '1816.21'),
(4, 3, 'DEPOSIT', '200.00', '', '2200.00'),
(5, 3, 'Falcon House Cafeteria', '', '8.23', '2191.77'),
(6, 3, 'The Out Back Shack', '', '16.17', '2175.60'),
(7, 4, 'Merlin House Cafeteria', '', '11.73', '1750.31'),
(8, 4, 'The Out Back Shack', '', '21.37', '1728.94'),
(9, 4, 'DEPOSIT', '150.00', '', '1878.94');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_buildings'
--

CREATE TABLE tbl_buildings (
  buildings_id smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  buildings_name varchar(15) NOT NULL,
  PRIMARY KEY (buildings_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_buildings'
--

INSERT INTO tbl_buildings (buildings_id, buildings_name) VALUES
(1, 'T'),
(2, 'B'),
(3, 'A'),
(4, 'D'),
(5, 'C'),
(6, 'E'),
(7, 'F'),
(8, 'L'),
(9, 'SUB'),
(10, 'J'),
(11, 'SC'),
(12, 'G'),
(13, 'R'),
(14, 'H'),
(15, 'M'),
(16, 'N'),
(17, 'K');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_city'
--

CREATE TABLE tbl_city (
  city_id int(6) unsigned NOT NULL AUTO_INCREMENT,
  city_title varchar(75) NOT NULL,
  city_description text NOT NULL,
  city_location varchar(75) NOT NULL,
  city_hours varchar(35) NOT NULL,
  city_price varchar(10) NOT NULL,
  city_link varchar(85) NOT NULL,
  city_img varchar(85) NOT NULL,
  cityCat_id int(3) NOT NULL,
  PRIMARY KEY (city_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_citycat'
--

CREATE TABLE tbl_citycat (
  cityCat_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  cityCat_category varchar(50) NOT NULL,
  PRIMARY KEY (cityCat_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_classcat'
--

CREATE TABLE tbl_classcat (
  classCat_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  classCat_category varchar(75) NOT NULL,
  PRIMARY KEY (classCat_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_classcat'
--

INSERT INTO tbl_classcat (classCat_id, classCat_category) VALUES
(1, 'Books'),
(2, 'Clothing'),
(3, 'Furniture'),
(4, 'Electronics'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_classifieds'
--

CREATE TABLE tbl_classifieds (
  classifieds_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  students_id int(7) NOT NULL,
  classifieds_user varchar(75) NOT NULL,
  classifieds_title varchar(100) NOT NULL,
  classifieds_description text NOT NULL,
  classifieds_email varchar(100) NOT NULL,
  classifieds_phone varchar(30) NOT NULL,
  classifieds_buy int(2) NOT NULL,
  classifieds_sell int(2) NOT NULL,
  classifieds_new int(2) NOT NULL,
  classifieds_used int(2) NOT NULL,
  classCat_id int(5) NOT NULL,
  classifieds_price varchar(10) NOT NULL,
  PRIMARY KEY (classifieds_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_classifieds'
--

INSERT INTO tbl_classifieds (classifieds_id, students_id, classifieds_user, classifieds_title, classifieds_description, classifieds_email, classifieds_phone, classifieds_buy, classifieds_sell, classifieds_new, classifieds_used, classCat_id, classifieds_price) VALUES
(1, 2, 'cap1943', 'GOOD CONDITION MENS MOUNTAIN BIKE', 'I bought this bike a few years ago used for $150. Selling it because it really is too big for me and I want to get a road bike instead. It has a quick release seat and front wheel...front suspension...etc', 'rogers_s@fanshaweonline.ca', '226-927-5571', 0, 1, 0, 1, 5, '$150'),
(2, 3, 'shadowcat735', 'Wanted: Mac Mini model late 2009 or newer', 'I''m looking for a Mac Mini model late 2009 or newer.\r\n\r\nIT MUST HAVE THE HDMI PORT ON THE BACK, the dongle wont do it for what I need.\r\n\r\nI''m willing to pay up to 400 dollars depending on specs and condition, please keep in mind Apple sell them refurbished with 1 year warranty for 509.00.\r\n\r\nI''ll test the computer before I buy, I have the cash ready, if you have one and don''t need anymore please shoot me a message with the specs and your price.\r\n\r\nThanks,', 'shadow_cat43@hotmail.com', '226-756-1235', 1, 0, 0, 1, 4, 'Up to $400'),
(3, 4, 'webhead44', '3 SEATER COUCH for sale', 'GENTLY USED 3 SEATER COUCH WITH MAGI SEAL STAIN PROTECTION WITH MATCHING CUSHION PILLOWS', 'morales_m@fanshaweonline.ca', '226-324-7621', 0, 1, 0, 1, 3, '$250.00');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_classrooms'
--

CREATE TABLE tbl_classrooms (
  classrooms_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  classrooms_number varchar(7) NOT NULL,
  zones_id smallint(3) NOT NULL,
  PRIMARY KEY (classrooms_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_classrooms'
--

INSERT INTO tbl_classrooms (classrooms_id, classrooms_number, zones_id) VALUES
(1, 'T1006', 1),
(2, 'T1004', 1),
(3, 'T1002', 1),
(4, 'T1005', 1),
(5, 'T1003', 1),
(6, 'T1009', 2),
(7, 'T1015', 2),
(8, 'T1011', 2),
(9, 'T1017', 2),
(10, 'T1019', 2),
(11, 'T1027', 2),
(12, 'T1028', 2),
(13, 'T1023', 2),
(14, 'T1029', 2),
(15, 'B1022', 3),
(16, 'B1025', 3),
(17, 'B1026', 3),
(18, 'B1019', 3),
(19, 'B1018', 3),
(20, 'B1013', 3),
(21, 'B1014', 3),
(22, 'B1015', 3),
(23, 'B1016', 3),
(24, 'B1024', 3),
(25, 'B1028', 3),
(26, 'B1029', 3),
(27, 'B1030', 3),
(28, 'B1027', 3),
(29, 'B1020', 3),
(30, 'B1034', 3),
(31, 'B1035', 3),
(32, 'B1036', 3),
(33, 'B1037', 3),
(34, 'B1038', 3),
(35, 'B1039', 3),
(36, 'B1033', 3),
(37, 'B1032', 3),
(38, 'B1023', 3),
(39, 'B1017', 3),
(40, 'B1012', 4),
(41, 'B1009', 4),
(42, 'B1006', 4),
(43, 'B1011', 4),
(44, 'B1005', 4),
(45, 'B1004', 4),
(46, 'B1010', 4),
(47, 'B1007', 4),
(48, 'B1001', 4),
(49, 'B1008', 4),
(50, 'B1003', 4),
(51, 'B1002', 4),
(52, 'B1042', 5),
(53, 'B1041', 5),
(54, 'B1046', 5),
(55, 'B1049', 5),
(56, 'B1082', 5),
(57, 'B1081', 5),
(58, 'B1075', 6),
(59, 'B1071', 6),
(60, 'B1062', 6),
(61, 'B1060', 6),
(62, 'B1063', 6),
(63, 'B1065', 6),
(64, 'B1070', 6),
(65, 'B1050', 6),
(66, 'B1051', 6),
(67, 'B1055', 6),
(68, 'B1057', 6),
(69, 'B1058', 6),
(70, 'B1066', 6),
(71, 'B1072', 6),
(72, 'B1059', 6),
(73, 'B1052', 6),
(74, 'B1054', 6),
(75, 'B1056', 6),
(76, 'B1068', 6),
(77, 'B1077', 6),
(78, 'B1067', 6),
(79, 'A1033', 7),
(80, 'A1041', 7),
(81, 'A1037', 7),
(82, 'A1039', 7),
(83, 'A1036', 7),
(84, 'A1023', 7),
(85, 'A1025', 7),
(86, 'A1032', 7),
(87, 'A1012', 7),
(88, 'A1031', 7),
(89, 'A1029', 7),
(90, 'A1026', 7),
(91, 'A1035', 7),
(92, 'A1009', 7),
(93, 'A1021', 7),
(94, 'A1017', 7),
(95, 'A1015', 7),
(96, 'A1008', 7),
(97, 'A1011', 7),
(98, 'A1019', 7),
(99, 'A1013', 7),
(100, 'A1027', 7),
(101, 'A1006', 8),
(102, 'A1002', 8),
(103, 'A1003', 8),
(104, 'A1004', 8),
(105, 'A1001', 8),
(106, 'A1005', 8),
(107, 'A1042', 8),
(108, 'A1047', 8),
(109, 'A1007', 8),
(110, 'A1058', 8),
(111, 'A1057', 8),
(112, 'A1039', 8),
(113, 'A1056', 8),
(114, 'A1055', 8),
(115, 'A1059', 8),
(116, 'D1072', 9),
(117, 'D1051', 9),
(118, 'D1048', 9),
(119, 'D1055', 9),
(120, 'D1050', 9),
(121, 'D1070', 9),
(122, 'D1049', 9),
(123, 'D1063', 10),
(124, 'D1060', 10),
(125, 'D1057', 10),
(126, 'D1045', 10),
(127, 'D1064', 10),
(128, 'D1065', 10),
(129, 'D1058', 10),
(130, 'D1052', 10),
(131, 'D1046', 10),
(132, 'D1062', 10),
(133, 'D1061', 10),
(134, 'D1059', 10),
(135, 'D1053', 10),
(136, 'D1047', 10),
(137, 'D1042', 11),
(138, 'D1036', 11),
(139, 'D1029', 11),
(140, 'D1030', 11),
(141, 'D1034', 11),
(142, 'D1041', 11),
(143, 'D1043', 11),
(144, 'D1039', 11),
(145, 'D1031', 11),
(146, 'D1019', 11),
(147, 'D1032', 11),
(148, 'D1038', 11),
(149, 'D1044', 11),
(150, 'D1037', 11),
(151, 'D1035', 11),
(152, 'D1018', 11),
(153, 'D1033', 11),
(154, 'D1014', 12),
(155, 'D1008', 12),
(156, 'D1011', 12),
(157, 'D1001', 12),
(158, 'D1016', 12),
(159, 'D1013', 12),
(160, 'D1007', 12),
(161, 'D1010', 12),
(162, 'D1015', 12),
(163, 'D1012', 12),
(164, 'D1009', 12),
(165, 'D1004', 12),
(166, 'C1006', 13),
(167, 'C1000', 13),
(168, 'C1009', 13),
(169, 'C1015', 13),
(170, 'C1019', 13),
(171, 'C1004', 13),
(172, 'C1010', 13),
(173, 'C1002', 13),
(174, 'C1003', 13),
(175, 'C1011', 13),
(176, 'C1017', 13),
(177, 'C1023', 13),
(178, 'C1027', 13),
(179, 'C1008', 13),
(180, 'C1005', 13),
(181, 'C1007', 13),
(182, 'C1013', 13),
(183, 'C1012', 13),
(184, 'C1025', 13),
(185, 'C1036', 14),
(186, 'C1030', 14),
(187, 'C1029', 14),
(188, 'C1034', 14),
(189, 'C1028', 14),
(190, 'C1037', 15),
(191, 'C1032', 15),
(192, 'C1033', 15),
(193, 'E1003', 16),
(194, 'E1058', 16),
(195, 'E1001', 16),
(196, 'E1004', 16),
(197, 'E1010', 16),
(198, 'E1002', 16),
(199, 'E1056', 16),
(200, 'E1012', 16),
(201, 'F1000', 17),
(202, 'F1002', 17),
(203, 'F1010', 17),
(204, 'F1012', 18),
(205, 'F1006', 18),
(206, 'F1007', 18),
(207, 'F1004', 18),
(208, 'L1003', 19),
(209, 'SUB1011', 20),
(210, 'SUB1009', 20),
(211, 'SUB1012', 20),
(212, 'SUB1030', 20),
(213, 'SUB1015', 20),
(214, 'SUB1008', 20),
(215, 'SUB1007', 20),
(216, 'SUB1032', 20),
(217, 'SUB1016', 20),
(218, 'SUB1005', 20),
(219, 'SUB1019', 20),
(220, 'SUB1017', 20),
(221, 'SUB1025', 20),
(222, 'SUB1018', 20),
(223, 'SUB1023', 20),
(224, 'SUB1029', 20),
(225, 'SUB1026', 20),
(226, 'SUB1027', 20),
(227, 'SUB1035', 20),
(228, 'SUB1014', 20),
(229, 'SUB1034', 20),
(230, 'J1020', 21),
(231, 'J1023', 21),
(232, 'J1008', 21),
(233, 'J1014', 21),
(234, 'J1033', 21),
(235, 'J1018', 21),
(236, 'J1021', 21),
(237, 'J1024', 21),
(238, 'J1012', 21),
(239, 'J1030', 21),
(240, 'J1032', 21),
(241, 'J1019', 21),
(242, 'J1022', 21),
(243, 'J1025', 21),
(244, 'J1013', 21),
(245, 'J1034', 21),
(246, 'J1038', 21),
(247, 'SC1001', 22),
(248, 'SC1002', 22),
(249, 'SC1012', 22),
(250, 'SC1011', 22),
(251, 'SC1014', 22),
(252, 'SC1010', 22),
(253, 'SC1006', 22),
(254, 'SC1013', 22),
(255, 'SC1017', 22),
(256, 'SC1015', 22),
(257, 'SC1019', 22),
(258, 'G1001', 23),
(259, 'G1008', 23),
(260, 'G1004', 23),
(261, 'G1013', 23),
(262, 'G1015', 23),
(263, 'G1010', 23),
(264, 'G1012', 23),
(265, 'G1003', 23),
(266, 'G1014', 23),
(267, 'R1041', 24),
(268, 'R1048', 24),
(269, 'R1055', 24),
(270, 'R1042', 24),
(271, 'R1039', 24),
(272, 'R1043', 24),
(273, 'R1045', 24),
(274, 'R1052', 24),
(275, 'R1038', 24),
(276, 'R1047', 24),
(277, 'R1053', 24),
(278, 'R1040', 24),
(279, 'R1019', 24),
(280, 'R1021', 24),
(281, 'R1020', 24),
(282, 'H1007', 25),
(283, 'H1017', 25),
(284, 'H1006', 25),
(285, 'H1003', 25),
(286, 'H1013', 25),
(287, 'H1016', 25),
(288, 'H1004', 25),
(289, 'H1005', 25),
(290, 'H1015', 25),
(291, 'H1014', 25),
(292, 'H1032', 25),
(293, 'H1027', 25),
(294, 'H1023', 25),
(295, 'H1031', 25),
(296, 'H1033', 25),
(297, 'H1030', 25),
(298, 'H1028', 25),
(299, 'H1022', 25),
(300, 'H1034', 25),
(301, 'H1029', 25),
(302, 'H1024', 25),
(303, 'H1025', 25),
(304, 'M1010', 26),
(305, 'M1003', 26),
(306, 'M1006', 26),
(307, 'M1004', 26),
(308, 'M1002', 26),
(309, 'M1018', 26),
(310, 'M1019', 26),
(311, 'M1033', 26),
(312, 'M1049', 26),
(313, 'M1045', 26),
(314, 'M1041', 26),
(315, 'M1037', 26),
(316, 'M1035', 26),
(317, 'M1030', 26),
(318, 'M1040', 26),
(319, 'N1000', 27),
(320, 'N1002', 27),
(321, 'N1008', 27),
(322, 'N1001', 27),
(323, 'N1005', 27),
(324, 'K1021', 28),
(325, 'K1024', 28),
(326, 'K1003', 28),
(327, 'K1011', 28),
(328, 'K1014', 28),
(329, 'K1009', 28),
(330, 'K1013', 28),
(331, 'K1008', 28),
(332, 'K1019', 28),
(333, 'K1025', 28),
(334, 'K1027', 28);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_climages'
--

CREATE TABLE tbl_climages (
  climages_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  climages_title varchar(75) NOT NULL,
  climages_file varchar(150) NOT NULL,
  PRIMARY KEY (climages_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_climages'
--

INSERT INTO tbl_climages (climages_id, climages_title, climages_file) VALUES
(1, 'GOOD CONDITION MENS MOUNTAIN BIKE', 'bike1.jpg'),
(2, '3 SEATER COUCH for sale', 'couch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_climg'
--

CREATE TABLE tbl_climg (
  climg_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  classifieds_id int(5) NOT NULL,
  climages_id int(5) NOT NULL,
  PRIMARY KEY (climg_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_climg'
--

INSERT INTO tbl_climg (climg_id, classifieds_id, climages_id) VALUES
(1, 1, 1),
(2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_contestcat'
--

CREATE TABLE tbl_contestcat (
  contestCat_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  contestCat_category varchar(75) NOT NULL,
  PRIMARY KEY (contestCat_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_contestcat'
--

INSERT INTO tbl_contestcat (contestCat_id, contestCat_category) VALUES
(1, 'FSU'),
(2, 'City'),
(3, 'Building');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_contests'
--

CREATE TABLE tbl_contests (
  contests_id int(4) unsigned NOT NULL AUTO_INCREMENT,
  contests_title varchar(100) NOT NULL,
  contests_description text NOT NULL,
  contests_startdate varchar(75) NOT NULL,
  contests_enddate varchar(75) NOT NULL,
  contests_location varchar(100) NOT NULL,
  contests_link varchar(150) NOT NULL,
  contestCat_id int(3) NOT NULL,
  PRIMARY KEY (contests_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_contests'
--

INSERT INTO tbl_contests (contests_id, contests_title, contests_description, contests_startdate, contests_enddate, contests_location, contests_link, contestCat_id) VALUES
(1, 'Fanshawe’s Got Talent', 'Can you sing, play a musical instrument, juggle, dance or unicycle? Do you own, or have access to a ventriloquist dummy? If you answered yes to any of those questions, or possess another talent that you wish to show off, then we want you to enter the Fanshawe Student Union’s third annual Fanshawe’s Got Talent competition.', 'September 29th', 'October 17th', 'Out Back Shack', 'http://www.fsu.ca/contest_fgt.php', 1),
(2, 'Win London Knights tickets', 'The Fanshawe Student Union is giving away two pairs of tickets to the London Knights’ game on October 17th against the Owen Sound Attack. The game takes place at Budweiser Gardens, and starts at 7 pm.\r\n\r\nTo enter the draw, you must be a current, full-time Fanshawe College student (in the Fall of 2014).\r\n\r\nFill out your contact information below to receive one entry into the draw. To receive a second entry into the draw, check the box at the bottom to subscribe to the FSU’s email newsletter. Each student can receieve a maximum two entries into the draw.\r\n\r\nWe will randomly draw two names on Wednesday, October 15th at 12 pm. The winning students will be contacted via email by the FSU to arrange the pickup of their 2 free tickets.', 'October 1st', 'October 15th', 'FSU Building', 'http://www.fsu.ca/contest_knights_101714.php', 1),
(3, 'Falcon Flash Fiction Competition', 'Stories must be unpublished, original and fictional, and they must be between one sentence and 750 words long.\r\n\r\nWriters are only allowed one submission a month and must be Fanshawe College students with a valid student card.\r\n\r\nSubmissions for this month’s contest must be sent to editor, Stephanie Lai s_lai6@fanshawec.ca by October 3.\r\n\r\nThe documents should be Word files, and they should include the title of the piece and name of the author.\r\n\r\nThe winning story will be published a week from the deadline, and its author will get a $10 gift card for The Out Back Shack or Oasis.\r\n\r\nGood luck!', 'October 1st', 'October 23rd', 'London Campus', 'http://www.fsu.ca/interrobang_falcon_fiction.php', 2),
(4, 'Costume Contest', 'Join in the fun with a Halloween Costume Contest. Come in costume or come to vote. Winners will be decided by a poll from your fellow residence students. Win Fanshawe swag.', 'October 31 at 4pm', 'October 31 at 6pm', 'Merlin House', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_days'
--

CREATE TABLE tbl_days (
  days_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  days_name varchar(50) NOT NULL,
  PRIMARY KEY (days_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_days'
--

INSERT INTO tbl_days (days_id, days_name) VALUES
(1, 'Sunday'),
(2, 'Monday'),
(3, 'Tuesday'),
(4, 'Wednesday'),
(5, 'Thursday'),
(6, 'Friday'),
(7, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_directory'
--

CREATE TABLE tbl_directory (
  directory_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  directory_firstname varchar(75) NOT NULL,
  directory_lastname varchar(75) NOT NULL,
  directory_position varchar(85) NOT NULL,
  directory_email varchar(100) NOT NULL,
  directory_officenumber varchar(50) NOT NULL,
  directory_phone varchar(50) NOT NULL,
  PRIMARY KEY (directory_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_directory'
--

INSERT INTO tbl_directory (directory_id, directory_firstname, directory_lastname, directory_position, directory_email, directory_officenumber, directory_phone) VALUES
(1, 'Victor', 'Cullham', 'Dean, Faculty of Technology', 'vcullham@fanshawec.ca', 'T3012', '519-321-4456'),
(2, 'Gareth', 'Keenan', 'Assistant Dean, Faculty of Technology', 'gkeenan@fanshawec.ca', 'T3012b', '519-321-4563'),
(3, 'Dawn', 'Tinsley', 'Administrative Assistant', 'dtinsley@fanshawec.ca', 'T1001', '519-321-4568');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_events'
--

CREATE TABLE tbl_events (
  events_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  events_title varchar(75) NOT NULL,
  events_location varchar(75) NOT NULL,
  events_startdate varchar(30) NOT NULL,
  events_enddate varchar(30) NOT NULL,
  events_description text NOT NULL,
  events_moreinfo text NOT NULL,
  events_link varchar(100) NOT NULL,
  eventsCat_id int(5) NOT NULL,
  events_whocome varchar(50) NOT NULL,
  PRIMARY KEY (events_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_events'
--

INSERT INTO tbl_events (events_id, events_title, events_location, events_startdate, events_enddate, events_description, events_moreinfo, events_link, eventsCat_id, events_whocome) VALUES
(1, 'Talking Sex with Dr. Robin Milhausen', 'Forwell Hall, London Campus', 'October 15th at 12:00 PM', 'October 15th at 1:00 PM', 'Dr. Robin Milhausen is a "sexpert", professor and talk show host. She has served as the Sex Education Correspondent on the Slice Network''s "Three Takes" program, and also the relationship expert on the Slice Network''s "Re-Vamped". No cover charge. ', 'Free admission', '', 1, 'Open to all Fanshawe students'),
(2, 'Ward 3 Candidates Meet and Greet', 'Oasis, London Campus', 'October 15th at 5:00 PM', 'October 15th at 7:00 PM', 'Meet the candidates who will be running for the Ward Three council position in the upcoming municipal election. Free pizza, dessert and drinks for all participants.', 'Free admission', '', 1, 'Open to all Fanshawe students'),
(3, 'First Run Film: Dracula Untold', 'Rainbow Cinemas (CITI Plaza)', 'October 25th at 7:00 PM', 'October 25th at 11:00 PM', 'Every Wednesday during the school year, you can go to Rainbow Cinemas at downtown London''s CITI Plaza and watch a brand new film for the low price of $4 for students, and $6 for guests. Maximum two tickets can be purchased by one person.\r\n\r\nThe October 15th film is Dracula Untold, the origin story of the man who became Dracula.\r\n\r\nTickets on sale Tuesday, October 14th through Wednesday, October 15th, 9 AM to 7 PM each day, only at the Biz Booth.\r\n\r\nTwo showtimes to choose from: 7:10 or 9:25 pm.', '$4 for students/$6 for guests\r\n\r\nDirections to theatre:\r\nRainbow Cinemas is located on the 2nd floor of the Citi Plaza, at 355 Wellington Street. It is accessible by taking the #4 Oxford Street East bus (get off at Richmond and Dundas, head East, and enter through the Central Library entrance on Dundas), or the #20 Cherryhill bus (get off at Wellington and Dundas, then head South, and enter through the Wellington and King entrance near Goodlife).', '', 2, 'Ticket purchaser must be a Fanshawe Student'),
(4, 'VegFest London Pre-Festival Party', 'Organic Works Bakery, 222 Wellington Street', 'October 24, 2014 - 6:00 PM', 'October 24, 2014 - 9:00 PM', '<p>It''s thyme to turnip the beet!  VegFest London is happening for the first time ever, so it''s time to celery-brate. Join us at Organic Works Bakery. Get your vegan snack on and enjoy live acoustic music and talks from special guests, including Abby Hopson of My Body Zen. We''ll also have some fun games, because it isn''t a party without party games right? With purchase of ticket you will receive: Spread of vegan h''orderves 1 ticket for vegan wine or beer (if 19 years of age of older) or non-alcoholic drink 10% of all in store purchases, Door prize tickets, Swag (a value of over $45) PLUS you''ll be supporting two amazing local animal rescue organizations. $15 from each ticket sold supports Animal Outreach and Cedar Row Farm Sanctuary.</p>', '$35 for admission per person. <a href="http://www.vegfestlondon.com/pre-festival-party/2014/10/24/pre-festival-party">Click here</a> for more info.', 'http://www.vegfestlondon.com/pre-festival-party/2014/10/24/pre-festival-party', 2, 'All ages'),
(5, 'Dinner & Silent Auction', 'St. Michael''s Parish Hall, 511 Cheapside Street', 'October 24 - 6:00 PM', 'October 24 - 11:30PM', '<p>Support the Society of Saint Vincent de Paul - Bid on GREAT auction items - Invite your family, friends & colleagues!</p>', 'LIVE ENTERTAINMENT\r\nCASH BAR 6:00PM\r\nCocktails 7:00PM\r\n\r\nTO PURCHASE TICKETS Email Linda at <a href="mailto:president.lpc@ssvplondonpc.com">president.lpc@ssvplondonpc.com</a> or call Paul at <a href="tel+5194747135">519.474.7135</a>\r\nTickets: $50 each\r\nENTERTAINMENT BY MIKE FAGAN\r\nBenefiting our Outreach Programs & Store Charitable Operations', 'http://www.londontourism.ca/Events/Fundraisers-and-Benefits/Dinner-and-Silent-Auction', 2, 'All ages'),
(6, 'Get to Know your Neighbours', 'Falcon House', 'September 9, 2014 at 5:00pm', 'September 9, 2014 at 6:00pm', 'Come meet the other students in your building! With free pizza and drinks!', 'Free', '', 3, 'Open to all Residence Students');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_eventscat'
--

CREATE TABLE tbl_eventscat (
  eventsCat_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  eventsCat_type varchar(50) NOT NULL,
  PRIMARY KEY (eventsCat_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_eventscat'
--

INSERT INTO tbl_eventscat (eventsCat_id, eventsCat_type) VALUES
(1, 'FSU'),
(2, 'City'),
(3, 'Building');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_floors'
--

CREATE TABLE tbl_floors (
  floors_id smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  floors_number smallint(1) NOT NULL,
  PRIMARY KEY (floors_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_floors'
--

INSERT INTO tbl_floors (floors_id, floors_number) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_fsuinfo'
--

CREATE TABLE tbl_fsuinfo (
  fsuinfo_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  fsuinfo_title varchar(100) NOT NULL,
  fsuinfo_description text NOT NULL,
  fsuinfo_date varchar(75) NOT NULL,
  fsuinfo_location varchar(75) NOT NULL,
  fsuinfo_link varchar(100) NOT NULL,
  PRIMARY KEY (fsuinfo_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_fsuinfo'
--

INSERT INTO tbl_fsuinfo (fsuinfo_id, fsuinfo_title, fsuinfo_description, fsuinfo_date, fsuinfo_location, fsuinfo_link) VALUES
(1, 'How to apply for financial aid and bursaries', '<strong>OSAP</strong>\n<p>If you are applying for OSAP, you must be registered and your minimum fee payment made prior to the release of your OSAP funding. If you are attending the London campus, you can pick up your student loan by booking an appointment with the Financial Aid Office in Room E2020.</p>\n\n<strong>Student Awards</strong>\n<p>The Awards and Scholarships office in K1003 at the London Campus administers the College’s donor funded awards, scholarships and bursaries as well as the College’s participation in three national in progress scholarship programs (web applications). You can now apply for the great bursaries Fanshawe has to offer online! Visit <a href="fanshawec.ca/money" target="_blank">fanshawec.ca/money</a> to see what’s available. For more info on awards, bursaries and scholarships, email <a href="mailto:scholarships@fanshawec.ca">scholarships@fanshawec.ca</a> or call <a href="tel+5194524466">519-452-4466</a>.</p>\n\n<p>To pick up or discuss your OSAP or bursary funds, you must present your Social Insurance Number card and one piece of government-issued photo ID (driver’s license, passport, BYID, etc.)</p>', 'Year Round', 'Financial Aid Office (E2020), Awards and Scholarships Office (K1003)', 'http://www.fsu.ca/faqs.php#2'),
(2, '"Where can I pick up my campus card?"', '<p>Student cards can be obtained from the Office of the Registrar, Room E1012.</p>\n\n<p>In order to receive a student card, make sure you have paid your minimum required fees and have submitted any required documents to complete your registration. You’ll also need to bring identification - either government issued photo ID (e.g driver’s license, health card with photo) or two pieces of government issued ID (social insurance card, birth certificate).</p>\n\n<p>Returning students continue to use the campus card issued last year. Replacement cards can be obtained for $25.00 from the Office of the Registrar, Room E1012.</p>', 'September', 'Office of the Registrar (E1012)', 'http://www.fsu.ca/faqs.php#3'),
(3, '"Where can I pump some iron?"', '<strong>Fitness Centre:</strong> Fully equipped and professionally operated. Memberships are available to students, staff, faculty and community members at reasonable rates.', 'Year Round', 'J building between the Student Centre and The Student Union Building.', 'http://www.fsu.ca/faqs.php#13'),
(4, 'How to get involved with the Student Union', '<p>Full-time students can run for Student Advisory Council (SAC) or volunteer for events, athletics or clubs.</p>\r\n\r\n<p>Visit SC2001 to apply in person, or call <a href="tel+5194533720">519.453.3720</a> for more details.</p>', 'Year Round', 'SC2001', 'http://www.fsu.ca/faqs.php#17');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_gbhk'
--

CREATE TABLE tbl_gbhk (
  gbhk_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  gbhk_day varchar(50) NOT NULL,
  gbhk_garbage int(2) NOT NULL DEFAULT '0',
  gbhk_housekeeping int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (gbhk_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_gbhk'
--

INSERT INTO tbl_gbhk (gbhk_id, gbhk_day, gbhk_garbage, gbhk_housekeeping) VALUES
(1, 'Monday', 1, 0),
(2, 'Thursday', 0, 1),
(3, 'Friday', 0, 1),
(4, 'Tuesday', 1, 0),
(5, 'Wednesday', 1, 0),
(6, 'Wednesday', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_hours'
--

CREATE TABLE tbl_hours (
  hours_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  hours_hours varchar(25) NOT NULL,
  PRIMARY KEY (hours_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_hours'
--

INSERT INTO tbl_hours (hours_id, hours_hours) VALUES
(1, '00:00'),
(2, '01:00'),
(3, '02:00'),
(4, '03:00'),
(5, '04:00'),
(6, '05:00'),
(7, '06:00'),
(8, '07:00'),
(9, '08:00'),
(10, '09:00'),
(11, '10:00'),
(12, '11:00'),
(13, '12:00'),
(14, '13:00'),
(15, '14:00'),
(16, '15:00'),
(17, '16:00'),
(18, '17:00'),
(19, '18:00'),
(20, '19:00'),
(21, '20:00'),
(22, '21:00'),
(23, '22:00'),
(24, '23:00');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_ltc'
--

CREATE TABLE tbl_ltc (
  ltc_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  ltc_routename varchar(75) NOT NULL,
  ltc_routenumber varchar(5) NOT NULL,
  PRIMARY KEY (ltc_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_ltcdh'
--

CREATE TABLE tbl_ltcdh (
  ltcdh_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  ltc_id int(3) NOT NULL,
  days_id int(2) NOT NULL,
  hours_id int(2) NOT NULL,
  PRIMARY KEY (ltcdh_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_news'
--

CREATE TABLE tbl_news (
  news_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  news_title varchar(100) NOT NULL,
  news_location varchar(75) NOT NULL,
  news_datetime date NOT NULL,
  news_description text NOT NULL,
  newsCat_id int(2) NOT NULL,
  PRIMARY KEY (news_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_news'
--

INSERT INTO tbl_news (news_id, news_title, news_location, news_datetime, news_description, newsCat_id) VALUES
(1, 'Internet Service Outtage on October 28th - 9:00AM to 11:00AM', 'Falcon House, London Campus', '2014-10-13', 'Please be advised that on October 28th there will be an interruption of Internet service for all Falcon House residence units between the hours of 9:00 AM and 11:00 AM to allow for maintenance. Students are encouraged to avail themselves of homework and computer labs on campus if they require Internet during those hours for school work.', 1),
(2, 'Campus Bus Tour', 'London Campus', '2014-08-20', 'Tours are held once a month & are a bus / walking tour hosted by Fanshawe\nCollege Foundation as a way to share details on all the new projects\ncurrently underway, and highlight the programs and future plans for the\nCollege. A boxed lunch prepared by the culinary students is provided.\nCommunity members are invited to join us on the following dates. Please\ncontact Elinor Schwob, Development Associate at 519.452.4430 x4896 or via\nemail at eschwob@fanshawec.ca for details.', 3);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_newscat'
--

CREATE TABLE tbl_newscat (
  newsCat_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  newsCat_category varchar(75) NOT NULL,
  PRIMARY KEY (newsCat_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_newscat'
--

INSERT INTO tbl_newscat (newsCat_id, newsCat_category) VALUES
(1, 'General Notices'),
(2, 'Monthly Report'),
(3, 'Coming Events');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_notices'
--

CREATE TABLE tbl_notices (
  notices_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  students_id int(7) NOT NULL,
  noticesCat_id int(2) NOT NULL,
  notices_date date NOT NULL,
  notices_title varchar(50) NOT NULL,
  notices_description text NOT NULL,
  PRIMARY KEY (notices_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_notices'
--

INSERT INTO tbl_notices (notices_id, students_id, noticesCat_id, notices_date, notices_title, notices_description) VALUES
(1, 2, 2, '2014-10-24', 'Maintenance on your unit', 'This notice is to make you aware that residence maintenance workers will need to enter your unit on Friday October 24th to perform a safety check on your heater unit and test your smoke alarm.'),
(2, 3, 3, '2014-10-20', 'Disorderly conduct', 'The named student is hereby given an official written warning for disorderly conduct on the night of October 13th.'),
(3, 4, 1, '2014-10-30', 'Mediation Notification', 'This notification is issued to the concerned parties to request their attendance at a hearing of the Residence Advisory council to mediate the issues raised in complaint #4535.');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_noticescat'
--

CREATE TABLE tbl_noticescat (
  noticesCat_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  noticesCat_type varchar(15) NOT NULL,
  PRIMARY KEY (noticesCat_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_noticescat'
--

INSERT INTO tbl_noticescat (noticesCat_id, noticesCat_type) VALUES
(1, 'Complaints'),
(2, 'Maintenance'),
(3, 'Warnings');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_paths'
--

CREATE TABLE tbl_paths (
  paths_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  paths_startZone varchar(7) NOT NULL,
  paths_endZone varchar(7) NOT NULL,
  paths_stepSet varchar(50) NOT NULL,
  PRIMARY KEY (paths_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_paths'
--

INSERT INTO tbl_paths (paths_id, paths_startZone, paths_endZone, paths_stepSet) VALUES
(1, 'T1F', 'B1F', '1,3,2,2'),
(2, 'R1F', 'L1F', '3,2,3,2,2'),
(3, 'R1F', 'E1F', '3,2,3,2,3,1,3,2,3'),
(4, 'R1F', 'SC1F', '3,2,3,1,3,1,3,1,3,2'),
(5, 'R1F', 'D4F', '3,2,3,2,3,1,3,1,1,3,2,3'),
(6, 'R1F', 'B3F', '3,2,3,2,3,1,3,1,1,3,2,3,1,3,1,3'),
(7, 'R1F', 'SUB1F', '3,2,3,3,1,3'),
(8, 'R1F', 'M1F', '3,2,3,2,3,2,3,1,3,3'),
(9, 'R1F', 'A1F', '3,2,3,2,3,1,3,1,2,3,1,3,3,1,3,3,1'),
(10, 'R2F', 'L1F', '3,2,1,3,1,3,2,3,2,3,2'),
(11, 'R2F', 'E1F', '3,2,1,3,1,3,2,3,2,3,3,1,3,2,3'),
(12, 'R2F', 'SC1F', '3,2,1,2'),
(13, 'R2F', 'D4F', '3,2,1,3,1,3,2,3,2,3,3,1,3,2,3,1,1,3,2,3'),
(14, 'R2F', 'B3F', '3,2,1,3,1,3,2,3,2,3,3,1,3,2,3,1,1,3,2,3,1,3,3,2,3'),
(15, 'R2F', 'SUB1F', '3,2,1,3,1,3,2,3,2,3'),
(16, 'R2F', 'M1F', '3,2,1,3,1,3,2,3,2,3,2,3,1,33'),
(17, 'R2F', 'A1F', '3,2,1,3,1,3,2,3,2,3,3,1,3,3,2,3,2,3,3,1,3,3'),
(18, 'R3F', 'L1F', '1,2,3,2,3,3,2,2'),
(19, 'R3F', 'E1F', '1,2,3,2,3,3,2,3,1,3,2,3'),
(20, 'R3F', 'SC1F', '1,2,3,2,3,3,1,3,1,3,1,3,2'),
(21, 'R3F', 'D4F', '1,2,3,2,3,3,2,3,1,3,1,1,3,2,3'),
(22, 'R3F', 'B3F', '1,2,3,2,3,3,2,3,1,3,1,1,3,2,3,1,3,1,3'),
(23, 'R3F', 'SUB1F', '1,2,3,2,3,3,3,1,3'),
(24, 'R3F', 'M1F', '1,2,3,2,3,3,2,3,2,3,1,3,3'),
(25, 'R3F', 'A1F', '1,2,3,2,3,3,2,3,1,3,1,2,3,1,3,3,1,3,3,1'),
(26, 'A1F', 'B1F', '2,3,3,1,3,2,3,2,3,1,3,3,3'),
(27, 'A1F', 'B2F', '2,3,3,1,3,2,3,2,3,1,3'),
(28, 'A1F', 'B3F', '2,3,3,1,3,2,3,2,3,1,3,2,3'),
(29, 'A1F', 'B4F', '2,3,3,1,3,2,3,2,3,1,3,2,3,2'),
(30, 'A2F', 'B1F', '2,3,1,3,2,3,2,3,1,3,3,3'),
(31, 'A2F', 'B2F', '2,3,1,3,2,3,2,3,1,3'),
(32, 'A2F', 'B3F', '2,3,1,3,2,3,2,3,1,3,2,3'),
(33, 'A2F', 'B4F', '2,3,1,3,2,3,2,3,1,3,2,3,2');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_points'
--

CREATE TABLE tbl_points (
  points_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  points_name varchar(75) NOT NULL,
  points_description text NOT NULL,
  points_number varchar(20) NOT NULL,
  PRIMARY KEY (points_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_points'
--

INSERT INTO tbl_points (points_id, points_name, points_description, points_number) VALUES
(1, 'Noise infraction', 'Named resident has been the cause of at least 3 noise complaints by individual students, and an immediate alteration of behaviour is required or further action will be taken.', '2'),
(2, 'Unregistered guest infraction', 'Residence authorities have been notified that the named student has persisted in having an unregistered houseguest for a minimum of one full night, which is a violation of the Overnight Guest Policy.', '5'),
(3, 'Cleanliness and hygiene infraction', 'Residence room or common area is left in such a state as to affect the health, wellbeing, or enjoyment of another resident. Immediate action is required or further action will be taken, which may culminate in removal of resident status.', '3');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_pointsstudent'
--

CREATE TABLE tbl_pointsstudent (
  pointsStudent_id int(6) unsigned NOT NULL AUTO_INCREMENT,
  students_id int(6) NOT NULL,
  points_id int(5) NOT NULL,
  PRIMARY KEY (pointsStudent_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_pointsstudent'
--

INSERT INTO tbl_pointsstudent (pointsStudent_id, students_id, points_id) VALUES
(1, 2, 2),
(2, 3, 1),
(3, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_rbuildgbhk'
--

CREATE TABLE tbl_rbuildgbhk (
  rbuildgbhk_id int(6) unsigned NOT NULL AUTO_INCREMENT,
  rbuilding_id int(5) NOT NULL,
  gbhk_id int(2) NOT NULL,
  PRIMARY KEY (rbuildgbhk_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_rbuildgbhk'
--

INSERT INTO tbl_rbuildgbhk (rbuildgbhk_id, rbuilding_id, gbhk_id) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_rbuilding'
--

CREATE TABLE tbl_rbuilding (
  rbuilding_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  rbuilding_name varchar(75) NOT NULL,
  rbuilding_address varchar(55) NOT NULL,
  rbuilding_phone varchar(30) NOT NULL,
  rbuilding_manager varchar(50) NOT NULL,
  rbuilding_mgemail varchar(75) NOT NULL,
  PRIMARY KEY (rbuilding_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_rbuilding'
--

INSERT INTO tbl_rbuilding (rbuilding_id, rbuilding_name, rbuilding_address, rbuilding_phone, rbuilding_manager, rbuilding_mgemail) VALUES
(1, 'Falcon House', '1001 Fanshawe College Blvd. (R Building), London ON', '519-453-5786', 'Keith Jacobs', 'jacobs_keith@fanshaweonline.ca'),
(2, 'Peregrine House', '1001 Fanshawe College Blvd. (S Building), London ON', '519-453-5721', 'Daryl Fields', 'fields_daryl@fanshaweonline.ca'),
(3, 'Merlin House', '1001 Fanshawe College Blvd. (Q Building), London ON', '519-453-4562', 'Sarah Polley', 'polley_sarah@fanshaweonline.ca');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_requests'
--

CREATE TABLE tbl_requests (
  requests_id int(7) unsigned NOT NULL AUTO_INCREMENT,
  students_id int(7) NOT NULL,
  requestsCat_id int(2) NOT NULL,
  requests_date date NOT NULL,
  requests_message text NOT NULL,
  requests_name varchar(75) NOT NULL,
  PRIMARY KEY (requests_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_requests'
--

INSERT INTO tbl_requests (requests_id, students_id, requestsCat_id, requests_date, requests_message, requests_name) VALUES
(1, 2, 2, '2014-10-09', 'The residents in unit 205 have been a continuing nuisance for the past several weeks. They persist in violating noise complaints and conducting themselves in a disorderly fashion, sometimes partying as late as 4:00am. Not all of us are here to goof off and get drunk, some of us take classes seriously and have them very early!! They do not respond to friendly or even stern personal requests to keep their noise to a reasonable level, so I''m issuing this formal request for mediation.', 'Noise and behavior complaint'),
(2, 3, 3, '2014-10-19', 'I''d like to request a withdrawal from Falcon House. I understand that I will be on the hook for some amount of the fees already paid, but my living situation has changed and I need to leave the residence asap.', 'Request for Housing Withdrawal'),
(3, 1, 1, '2014-10-17', 'I''d like to request a vegan alternative to the meals served in the caf. I have dietary restrictions and would prefer to be able to get breakfast in the building in the mornings.', 'Request for vegan friendly option in cafeteria');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_requestscat'
--

CREATE TABLE tbl_requestscat (
  requestsCat_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  requestsCat_type varchar(15) NOT NULL,
  PRIMARY KEY (requestsCat_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_requestscat'
--

INSERT INTO tbl_requestscat (requestsCat_id, requestsCat_type) VALUES
(1, 'General'),
(2, 'Mediation'),
(3, 'Withdraw');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_rules'
--

CREATE TABLE tbl_rules (
  rules_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  rules_title varchar(75) NOT NULL,
  rules_description text NOT NULL,
  rules_date varchar(50) NOT NULL,
  PRIMARY KEY (rules_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_rules'
--

INSERT INTO tbl_rules (rules_id, rules_title, rules_description, rules_date) VALUES
(1, 'Overnight Guest Policy', 'Residents are limited to hosting guests for no more than three consecutive nights. Overnight guests may stay at\r\nyour discretion; however, your roommate’s consent is required prior to inviting anyone over for an overnight stay.', 'September 3rd, 2007'),
(2, 'Narcotics and Controlled Substances Policy', 'Any illegal substances, unprescribed narcotics, controlled substances, or drug\r\nparaphernalia (including hookahs, bongs, pipes, e-cigarettes and vaporizers etc.) are strictly prohibited on residence property.', 'August 13th, 2005'),
(3, 'Key and Lock Policies', 'Locks and keys are the property of Residences. You are only permitted possession of residence keys that have\r\nbeen issued t\r\no you, by Residences Facilities, for the period of time that you live in residence. You may not copy\r\nor lend your residence keys.', 'October 4th, 2011');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_steps'
--

CREATE TABLE tbl_steps (
  steps_id smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  steps_stepText varchar(20) NOT NULL,
  PRIMARY KEY (steps_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_steps'
--

INSERT INTO tbl_steps (steps_id, steps_stepText) VALUES
(1, 'Turn Right'),
(2, 'Turn Left'),
(3, 'Go Straight');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_students'
--

CREATE TABLE tbl_students (
  students_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  students_firstname varchar(20) NOT NULL,
  students_lastname varchar(20) NOT NULL,
  students_program varchar(150) NOT NULL,
  students_stNumber int(7) NOT NULL,
  rbuilding_id int(3) NOT NULL,
  students_roomNumber varchar(6) NOT NULL,
  students_email varchar(50) NOT NULL,
  students_phone varchar(20) NOT NULL,
  students_cellphone varchar(20) NOT NULL,
  students_address varchar(75) NOT NULL,
  students_image varchar(50) NOT NULL DEFAULT 'default.jpg',
  students_facebook varchar(50) NOT NULL,
  students_twitter varchar(50) NOT NULL,
  students_linkedin varchar(50) NOT NULL,
  students_username varchar(50) NOT NULL,
  students_password varchar(64) NOT NULL,
  PRIMARY KEY (students_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_students'
--

INSERT INTO tbl_students (students_id, students_firstname, students_lastname, students_program, students_stNumber, rbuilding_id, students_roomNumber, students_email, students_phone, students_cellphone, students_address, students_image, students_facebook, students_twitter, students_linkedin, students_username, students_password) VALUES
(1, 'John', 'Smith', 'IDP1', 555551, 2, '302', 'j_smith55@fanshaweonline.ca', '519-555-5555', '226-555-5555', '', 'default.jpg', '', '', '', 'j_smith04', ''),
(2, 'Steve', 'Rogers', 'POLI1', 19454, 1, '143', 'rogers_s@fanshaweonline.ca', '519-276-1226', '226-927-5571', '43 Devonshire Rd, Toronto ON', 'steverogers1.jpg', 'facebook.com/steve.rogers.43', 'twitter.com/captain_am', 'ca.linkedin.com/in/steverrogers', 's_rogers', ''),
(3, 'Kitty', 'Pryde', 'PSYCH', 45674, 1, '204', 'shadow_cat43@hotmail.com', '519-476-1235', '226-756-1235', '43 Worscester Rd, London ON', 'kitty.jpg', 'facebook.com/kitty.pryde', 'twitter.com/shadowcat752', 'ca.linkedin.com/in/kittypryde', 'k_pryde', ''),
(4, 'Miles', 'Morales', 'WEBDEV', 71235, 3, '342', 'morales_m@fanshaweonline.ca', '519-243-7786', '226-324-7621', '354 Findlay Ave, Waterloo ON', 'miles-selfy.jpg', 'facebook.com/miles.morales.456', 'twitter.com/newspidey', 'ca.linkedin.com/in/milesmorales', 'm_morales', '');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_zones'
--

CREATE TABLE tbl_zones (
  zones_id smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  zones_name varchar(5) NOT NULL,
  PRIMARY KEY (zones_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_zones'
--

INSERT INTO tbl_zones (zones_id, zones_name) VALUES
(1, 'T1F'),
(2, 'T2F'),
(3, 'B1F'),
(4, 'B2F'),
(5, 'B3F'),
(6, 'B4F'),
(7, 'A1F'),
(8, 'A2F'),
(9, 'D1F'),
(10, 'D2F'),
(11, 'D3F'),
(12, 'D4F'),
(13, 'C1F'),
(14, 'C2F'),
(15, 'C3F'),
(16, 'E1F'),
(17, 'F1F'),
(18, 'F2F'),
(19, 'L1F'),
(20, 'SUB1F'),
(21, 'J1F'),
(22, 'SC1F'),
(23, 'G1F'),
(24, 'R1F'),
(25, 'H1F'),
(26, 'M1F'),
(27, 'N1F'),
(28, 'K1F');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_zonesbuildings'
--

CREATE TABLE tbl_zonesbuildings (
  zonesBuildings_id smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  zones_id smallint(2) NOT NULL,
  buildings_id smallint(2) NOT NULL,
  PRIMARY KEY (zonesBuildings_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_zonesbuildings'
--

INSERT INTO tbl_zonesbuildings (zonesBuildings_id, zones_id, buildings_id) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 3),
(8, 8, 3),
(9, 9, 4),
(10, 10, 4),
(11, 11, 4),
(12, 12, 4),
(13, 13, 5),
(14, 14, 5),
(15, 15, 5),
(16, 16, 6),
(17, 17, 7),
(18, 18, 7),
(19, 19, 8),
(20, 20, 9),
(21, 21, 10),
(22, 22, 11),
(23, 23, 12),
(24, 24, 13),
(25, 25, 14),
(26, 26, 15),
(27, 27, 16),
(28, 28, 17);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_zonesclassrooms'
--

CREATE TABLE tbl_zonesclassrooms (
  zonesClassrooms_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  zones_id smallint(2) NOT NULL,
  classrooms_id smallint(4) NOT NULL,
  PRIMARY KEY (zonesClassrooms_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_zonesclassrooms'
--

INSERT INTO tbl_zonesclassrooms (zonesClassrooms_id, zones_id, classrooms_id) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 2, 14),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17),
(18, 3, 18),
(19, 3, 19),
(20, 3, 20),
(21, 3, 21),
(22, 3, 22),
(23, 3, 23),
(24, 3, 24),
(25, 3, 25),
(26, 3, 26),
(27, 3, 27),
(28, 3, 28),
(29, 3, 29),
(30, 3, 30),
(31, 3, 31),
(32, 3, 32),
(33, 3, 33),
(34, 3, 34),
(35, 3, 35),
(36, 3, 36),
(37, 3, 37),
(38, 3, 38),
(39, 3, 39),
(40, 4, 40),
(41, 4, 41),
(42, 4, 42),
(43, 4, 43),
(44, 4, 44),
(45, 4, 45),
(46, 4, 46),
(47, 4, 47),
(48, 4, 48),
(49, 4, 49),
(50, 4, 50),
(51, 4, 51),
(52, 5, 52),
(53, 5, 53),
(54, 5, 54),
(55, 5, 55),
(56, 5, 56),
(57, 5, 57),
(58, 6, 58),
(59, 6, 59),
(60, 6, 60),
(61, 6, 61),
(62, 6, 62),
(63, 6, 63),
(64, 6, 64),
(65, 6, 65),
(66, 6, 66),
(67, 6, 67),
(68, 6, 68),
(69, 6, 69),
(70, 6, 70),
(71, 6, 71),
(72, 6, 72),
(73, 6, 73),
(74, 6, 74),
(75, 6, 75),
(76, 6, 76),
(77, 6, 77),
(78, 6, 78),
(79, 7, 79),
(80, 7, 80),
(81, 7, 81),
(82, 7, 82),
(83, 7, 83),
(84, 7, 84),
(85, 7, 85),
(86, 7, 86),
(87, 7, 87),
(88, 7, 88),
(89, 7, 89),
(90, 7, 90),
(91, 7, 91),
(92, 7, 92),
(93, 7, 93),
(94, 7, 94),
(95, 7, 95),
(96, 7, 96),
(97, 7, 97),
(98, 7, 98),
(99, 7, 99),
(100, 7, 100),
(101, 8, 101),
(102, 8, 102),
(103, 8, 103),
(104, 8, 104),
(105, 8, 105),
(106, 8, 106),
(107, 8, 107),
(108, 8, 108),
(109, 8, 109),
(110, 8, 110),
(111, 8, 111),
(112, 8, 112),
(113, 8, 113),
(114, 8, 114),
(115, 8, 115),
(116, 9, 116),
(117, 9, 117),
(118, 9, 118),
(119, 9, 119),
(120, 9, 120),
(121, 9, 121),
(122, 9, 122),
(123, 10, 123),
(124, 10, 124),
(125, 10, 125),
(126, 10, 126),
(127, 10, 127),
(128, 10, 128),
(129, 10, 129),
(130, 10, 130),
(131, 10, 131),
(132, 10, 132),
(133, 10, 133),
(134, 10, 134),
(135, 10, 135),
(136, 10, 136),
(137, 11, 137),
(138, 11, 138),
(139, 11, 139),
(140, 11, 140),
(141, 11, 141),
(142, 11, 142),
(143, 11, 143),
(144, 11, 144),
(145, 11, 145),
(146, 11, 146),
(147, 11, 147),
(148, 11, 148),
(149, 11, 149),
(150, 11, 150),
(151, 11, 151),
(152, 11, 152),
(153, 11, 153),
(154, 12, 154),
(155, 12, 155),
(156, 12, 156),
(157, 12, 157),
(158, 12, 158),
(159, 12, 159),
(160, 12, 160),
(161, 12, 161),
(162, 12, 162),
(163, 12, 163),
(164, 12, 164),
(165, 12, 165),
(166, 13, 166),
(167, 13, 167),
(168, 13, 168),
(169, 13, 169),
(170, 13, 170),
(171, 13, 171),
(172, 13, 172),
(173, 13, 173),
(174, 13, 174),
(175, 13, 175),
(176, 13, 176),
(177, 13, 177),
(178, 13, 178),
(179, 13, 179),
(180, 13, 180),
(181, 13, 181),
(182, 13, 182),
(183, 13, 183),
(184, 13, 184),
(185, 14, 185),
(186, 14, 186),
(187, 14, 187),
(188, 14, 188),
(189, 14, 189),
(190, 15, 190),
(191, 15, 191),
(192, 15, 192),
(193, 16, 193),
(194, 16, 194),
(195, 16, 195),
(196, 16, 196),
(197, 16, 197),
(198, 16, 198),
(199, 16, 199),
(200, 16, 200),
(201, 17, 201),
(202, 17, 202),
(203, 17, 203),
(204, 18, 204),
(205, 18, 205),
(206, 18, 206),
(207, 18, 207),
(208, 19, 208),
(209, 20, 209),
(210, 20, 210),
(211, 20, 211),
(212, 20, 212),
(213, 20, 213),
(214, 20, 214),
(215, 20, 215),
(216, 20, 216),
(217, 20, 217),
(218, 20, 218),
(219, 20, 219),
(220, 20, 220),
(221, 20, 221),
(222, 20, 222),
(223, 20, 223),
(224, 20, 224),
(225, 20, 225),
(226, 20, 226),
(227, 20, 227),
(228, 20, 228),
(229, 20, 229),
(230, 21, 230),
(231, 21, 231),
(232, 21, 232),
(233, 21, 233),
(234, 21, 234),
(235, 21, 235),
(236, 21, 236),
(237, 21, 237),
(238, 21, 238),
(239, 21, 239),
(240, 21, 240),
(241, 21, 241),
(242, 21, 242),
(243, 21, 243),
(244, 21, 244),
(245, 21, 245),
(246, 21, 246),
(247, 22, 247),
(248, 22, 248),
(249, 22, 249),
(250, 22, 250),
(251, 22, 251),
(252, 22, 252),
(253, 22, 253),
(254, 22, 254),
(255, 22, 255),
(256, 22, 256),
(257, 22, 257),
(258, 23, 258),
(259, 23, 259),
(260, 23, 260),
(261, 23, 261),
(262, 23, 262),
(263, 23, 263),
(264, 23, 264),
(265, 23, 265),
(266, 23, 266),
(267, 24, 267),
(268, 24, 268),
(269, 24, 269),
(270, 24, 270),
(271, 24, 271),
(272, 24, 272),
(273, 24, 273),
(274, 24, 274),
(275, 24, 275),
(276, 24, 276),
(277, 24, 277),
(278, 24, 278),
(279, 24, 279),
(280, 24, 280),
(281, 24, 281),
(282, 25, 282),
(283, 25, 283),
(284, 25, 284),
(285, 25, 285),
(286, 25, 286),
(287, 25, 287),
(288, 25, 288),
(289, 25, 289),
(290, 25, 290),
(291, 25, 291),
(292, 25, 292),
(293, 25, 293),
(294, 25, 294),
(295, 25, 295),
(296, 25, 296),
(297, 25, 297),
(298, 25, 298),
(299, 25, 299),
(300, 25, 300),
(301, 25, 301),
(302, 25, 302),
(303, 25, 303),
(304, 26, 304),
(305, 26, 305),
(306, 26, 306),
(307, 26, 307),
(308, 26, 308),
(309, 26, 309),
(310, 26, 310),
(311, 26, 311),
(312, 26, 312),
(313, 26, 313),
(314, 26, 314),
(315, 26, 315),
(316, 26, 316),
(317, 26, 317),
(318, 26, 318),
(319, 27, 319),
(320, 27, 320),
(321, 27, 321),
(322, 27, 322),
(323, 27, 323),
(324, 28, 324),
(325, 28, 325),
(326, 28, 326),
(327, 28, 327),
(328, 28, 328),
(329, 28, 329),
(330, 28, 330),
(331, 28, 331),
(332, 28, 332),
(333, 28, 333),
(334, 28, 334);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_zonesfloors'
--

CREATE TABLE tbl_zonesfloors (
  zonesFloors_id smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  zones_id smallint(2) NOT NULL,
  floors_id smallint(2) NOT NULL,
  PRIMARY KEY (zonesFloors_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_zonesfloors'
--

INSERT INTO tbl_zonesfloors (zonesFloors_id, zones_id, floors_id) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
