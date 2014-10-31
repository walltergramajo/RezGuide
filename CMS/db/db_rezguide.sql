-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2014 at 07:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'db_rezguide'
--
CREATE DATABASE IF NOT EXISTS db_rezguide DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE db_rezguide;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_admins'
--

CREATE TABLE IF NOT EXISTS tbl_admins (
  admins_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  admins_username varchar(60) NOT NULL,
  admins_password varchar(75) NOT NULL,
  admins_firstname int(50) NOT NULL,
  admins_lastname int(50) NOT NULL,
  admins_email int(50) NOT NULL,
  admins_level int(2) NOT NULL,
  PRIMARY KEY (admins_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_admins'
--

INSERT INTO tbl_admins (admins_id, admins_username, admins_password, admins_firstname, admins_lastname, admins_email, admins_level) VALUES
(1, 'walter', 'password', 0, 0, 0, 0),
(2, 'Natalia', 'password', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_buildings'
--

CREATE TABLE IF NOT EXISTS tbl_buildings (
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
-- Table structure for table 'tbl_categories'
--

CREATE TABLE IF NOT EXISTS tbl_categories (
  categories_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  categories_name varchar(25) NOT NULL,
  PRIMARY KEY (categories_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_categories'
--

INSERT INTO tbl_categories (categories_id, categories_name) VALUES
(1, 'Contests'),
(2, 'Programs'),
(3, 'General'),
(4, 'FSU'),
(5, 'Maintenance'),
(6, 'Complaints'),
(7, 'Warnings'),
(8, 'Mediation'),
(9, 'Garbage'),
(10, 'Housekeeping'),
(11, 'Rules');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_chat'
--

CREATE TABLE IF NOT EXISTS tbl_chat (
  chat_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  chat_name varchar(75) NOT NULL,
  chat_building varchar(50) NOT NULL,
  chat_appt varchar(15) NOT NULL,
  chat_text text NOT NULL,
  PRIMARY KEY (chat_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_classifieds'
--

CREATE TABLE IF NOT EXISTS tbl_classifieds (
  classifieds_id int(4) unsigned NOT NULL AUTO_INCREMENT,
  classifieds_user varchar(30) NOT NULL,
  classifieds_title varchar(50) NOT NULL,
  classifieds_description text NOT NULL,
  classifieds_email varchar(50) NOT NULL,
  classifieds_phone varchar(20) NOT NULL,
  classifieds_address varchar(50) NOT NULL,
  classifieds_img1 varchar(75) NOT NULL,
  classifieds_img2 varchar(75) NOT NULL,
  classifieds_img3 varchar(75) NOT NULL,
  classifieds_price varchar(10) NOT NULL,
  PRIMARY KEY (classifieds_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_classifiedscategories'
--

CREATE TABLE IF NOT EXISTS tbl_classifiedscategories (
  classifiedscategories_id int(4) unsigned NOT NULL AUTO_INCREMENT,
  classifieds_id int(4) NOT NULL,
  categories_id int(2) NOT NULL,
  PRIMARY KEY (classifiedscategories_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_classrooms'
--

CREATE TABLE IF NOT EXISTS tbl_classrooms (
  classrooms_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  classrooms_number varchar(7) NOT NULL,
  PRIMARY KEY (classrooms_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_classrooms'
--

INSERT INTO tbl_classrooms (classrooms_id, classrooms_number) VALUES
(1, 'T1006'),
(2, 'T1004'),
(3, 'T1002'),
(4, 'T1005'),
(5, 'T1003'),
(6, 'T1009'),
(7, 'T1015'),
(8, 'T1011'),
(9, 'T1017'),
(10, 'T1019'),
(11, 'T1027'),
(12, 'T1028'),
(13, 'T1023'),
(14, 'T1029'),
(15, 'B1022'),
(16, 'B1025'),
(17, 'B1026'),
(18, 'B1019'),
(19, 'B1018'),
(20, 'B1013'),
(21, 'B1014'),
(22, 'B1015'),
(23, 'B1016'),
(24, 'B1024'),
(25, 'B1028'),
(26, 'B1029'),
(27, 'B1030'),
(28, 'B1027'),
(29, 'B1020'),
(30, 'B1034'),
(31, 'B1035'),
(32, 'B1036'),
(33, 'B1037'),
(34, 'B1038'),
(35, 'B1039'),
(36, 'B1033'),
(37, 'B1032'),
(38, 'B1023'),
(39, 'B1017'),
(40, 'B1012'),
(41, 'B1009'),
(42, 'B1006'),
(43, 'B1011'),
(44, 'B1005'),
(45, 'B1004'),
(46, 'B1010'),
(47, 'B1007'),
(48, 'B1001'),
(49, 'B1008'),
(50, 'B1003'),
(51, 'B1002'),
(52, 'B1042'),
(53, 'B1041'),
(54, 'B1046'),
(55, 'B1049'),
(56, 'B1082'),
(57, 'B1081'),
(58, 'B1075'),
(59, 'B1071'),
(60, 'B1062'),
(61, 'B1060'),
(62, 'B1063'),
(63, 'B1065'),
(64, 'B1070'),
(65, 'B1050'),
(66, 'B1051'),
(67, 'B1055'),
(68, 'B1057'),
(69, 'B1058'),
(70, 'B1066'),
(71, 'B1072'),
(72, 'B1059'),
(73, 'B1052'),
(74, 'B1054'),
(75, 'B1056'),
(76, 'B1068'),
(77, 'B1077'),
(78, 'B1067'),
(79, 'A1033'),
(80, 'A1041'),
(81, 'A1037'),
(82, 'A1039'),
(83, 'A1036'),
(84, 'A1023'),
(85, 'A1025'),
(86, 'A1032'),
(87, 'A1012'),
(88, 'A1031'),
(89, 'A1029'),
(90, 'A1026'),
(91, 'A1035'),
(92, 'A1009'),
(93, 'A1021'),
(94, 'A1017'),
(95, 'A1015'),
(96, 'A1008'),
(97, 'A1011'),
(98, 'A1019'),
(99, 'A1013'),
(100, 'A1027'),
(101, 'A1006'),
(102, 'A1002'),
(103, 'A1003'),
(104, 'A1004'),
(105, 'A1001'),
(106, 'A1005'),
(107, 'A1042'),
(108, 'A1047'),
(109, 'A1007'),
(110, 'A1058'),
(111, 'A1057'),
(112, 'A1039'),
(113, 'A1056'),
(114, 'A1055'),
(115, 'A1059'),
(116, 'D1072'),
(117, 'D1051'),
(118, 'D1048'),
(119, 'D1055'),
(120, 'D1050'),
(121, 'D1070'),
(122, 'D1049'),
(123, 'D1063'),
(124, 'D1060'),
(125, 'D1057'),
(126, 'D1045'),
(127, 'D1064'),
(128, 'D1065'),
(129, 'D1058'),
(130, 'D1052'),
(131, 'D1046'),
(132, 'D1062'),
(133, 'D1061'),
(134, 'D1059'),
(135, 'D1053'),
(136, 'D1047'),
(137, 'D1042'),
(138, 'D1036'),
(139, 'D1029'),
(140, 'D1030'),
(141, 'D1034'),
(142, 'D1041'),
(143, 'D1043'),
(144, 'D1039'),
(145, 'D1031'),
(146, 'D1019'),
(147, 'D1032'),
(148, 'D1038'),
(149, 'D1044'),
(150, 'D1037'),
(151, 'D1035'),
(152, 'D1018'),
(153, 'D1033'),
(154, 'D1014'),
(155, 'D1008'),
(156, 'D1011'),
(157, 'D1001'),
(158, 'D1016'),
(159, 'D1013'),
(160, 'D1007'),
(161, 'D1010'),
(162, 'D1015'),
(163, 'D1012'),
(164, 'D1009'),
(165, 'D1004'),
(166, 'C1006'),
(167, 'C1000'),
(168, 'C1009'),
(169, 'C1015'),
(170, 'C1019'),
(171, 'C1004'),
(172, 'C1010'),
(173, 'C1002'),
(174, 'C1003'),
(175, 'C1011'),
(176, 'C1017'),
(177, 'C1023'),
(178, 'C1027'),
(179, 'C1008'),
(180, 'C1005'),
(181, 'C1007'),
(182, 'C1013'),
(183, 'C1012'),
(184, 'C1025'),
(185, 'C1036'),
(186, 'C1030'),
(187, 'C1029'),
(188, 'C1034'),
(189, 'C1028'),
(190, 'C1037'),
(191, 'C1032'),
(192, 'C1033'),
(193, 'E1003'),
(194, 'E1058'),
(195, 'E1001'),
(196, 'E1004'),
(197, 'E1010'),
(198, 'E1002'),
(199, 'E1056'),
(200, 'E1012'),
(201, 'F1000'),
(202, 'F1002'),
(203, 'F1010'),
(204, 'F1012'),
(205, 'F1006'),
(206, 'F1007'),
(207, 'F1004'),
(208, 'L1003'),
(209, 'SUB1011'),
(210, 'SUB1009'),
(211, 'SUB1012'),
(212, 'SUB1030'),
(213, 'SUB1015'),
(214, 'SUB1008'),
(215, 'SUB1007'),
(216, 'SUB1032'),
(217, 'SUB1016'),
(218, 'SUB1005'),
(219, 'SUB1019'),
(220, 'SUB1017'),
(221, 'SUB1025'),
(222, 'SUB1018'),
(223, 'SUB1023'),
(224, 'SUB1029'),
(225, 'SUB1026'),
(226, 'SUB1027'),
(227, 'SUB1035'),
(228, 'SUB1014'),
(229, 'SUB1034'),
(230, 'J1020'),
(231, 'J1023'),
(232, 'J1008'),
(233, 'J1014'),
(234, 'J1033'),
(235, 'J1018'),
(236, 'J1021'),
(237, 'J1024'),
(238, 'J1012'),
(239, 'J1030'),
(240, 'J1032'),
(241, 'J1019'),
(242, 'J1022'),
(243, 'J1025'),
(244, 'J1013'),
(245, 'J1034'),
(246, 'J1038'),
(247, 'SC1001'),
(248, 'SC1002'),
(249, 'SC1012'),
(250, 'SC1011'),
(251, 'SC1014'),
(252, 'SC1010'),
(253, 'SC1006'),
(254, 'SC1013'),
(255, 'SC1017'),
(256, 'SC1015'),
(257, 'SC1019'),
(258, 'G1001'),
(259, 'G1008'),
(260, 'G1004'),
(261, 'G1013'),
(262, 'G1015'),
(263, 'G1010'),
(264, 'G1012'),
(265, 'G1003'),
(266, 'G1014'),
(267, 'R1041'),
(268, 'R1048'),
(269, 'R1055'),
(270, 'R1042'),
(271, 'R1039'),
(272, 'R1043'),
(273, 'R1045'),
(274, 'R1052'),
(275, 'R1038'),
(276, 'R1047'),
(277, 'R1053'),
(278, 'R1040'),
(279, 'R1019'),
(280, 'R1021'),
(281, 'R1020'),
(282, 'H1007'),
(283, 'H1017'),
(284, 'H1006'),
(285, 'H1003'),
(286, 'H1013'),
(287, 'H1016'),
(288, 'H1004'),
(289, 'H1005'),
(290, 'H1015'),
(291, 'H1014'),
(292, 'H1032'),
(293, 'H1027'),
(294, 'H1023'),
(295, 'H1031'),
(296, 'H1033'),
(297, 'H1030'),
(298, 'H1028'),
(299, 'H1022'),
(300, 'H1034'),
(301, 'H1029'),
(302, 'H1024'),
(303, 'H1025'),
(304, 'M1010'),
(305, 'M1003'),
(306, 'M1006'),
(307, 'M1004'),
(308, 'M1002'),
(309, 'M1018'),
(310, 'M1019'),
(311, 'M1033'),
(312, 'M1049'),
(313, 'M1045'),
(314, 'M1041'),
(315, 'M1037'),
(316, 'M1035'),
(317, 'M1030'),
(318, 'M1040'),
(319, 'N1000'),
(320, 'N1002'),
(321, 'N1008'),
(322, 'N1001'),
(323, 'N1005'),
(324, 'K1021'),
(325, 'K1024'),
(326, 'K1003'),
(327, 'K1011'),
(328, 'K1014'),
(329, 'K1009'),
(330, 'K1013'),
(331, 'K1008'),
(332, 'K1019'),
(333, 'K1025'),
(334, 'K1027');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_events'
--

CREATE TABLE IF NOT EXISTS tbl_events (
  events_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  events_name varchar(75) NOT NULL,
  events_location varchar(75) NOT NULL,
  events_date varchar(20) NOT NULL,
  events_description text NOT NULL,
  PRIMARY KEY (events_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_eventscategories'
--

CREATE TABLE IF NOT EXISTS tbl_eventscategories (
  eventscategories_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  events_id int(3) NOT NULL,
  categories_id int(3) NOT NULL,
  PRIMARY KEY (eventscategories_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_floors'
--

CREATE TABLE IF NOT EXISTS tbl_floors (
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
-- Table structure for table 'tbl_news'
--

CREATE TABLE IF NOT EXISTS tbl_news (
  news_id smallint(9) unsigned NOT NULL AUTO_INCREMENT,
  news_file varchar(200) NOT NULL,
  news_location varchar(100) NOT NULL,
  news_date varchar(50) NOT NULL,
  news_time time NOT NULL,
  news_name varchar(200) NOT NULL,
  news_desc varchar(1000) NOT NULL,
  news_category varchar(25) NOT NULL,
  PRIMARY KEY (news_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_notices'
--

CREATE TABLE IF NOT EXISTS tbl_notices (
  complaints_id smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  complaints_studentNum varchar(12) NOT NULL,
  complaints_type varchar(20) NOT NULL,
  complaints_date varchar(14) NOT NULL,
  complaints_building varchar(20) NOT NULL,
  complaints_roomNum varchar(20) NOT NULL,
  complaints_content varchar(1000) NOT NULL,
  complaints_category varchar(30) NOT NULL,
  PRIMARY KEY (complaints_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_noticescategories'
--

CREATE TABLE IF NOT EXISTS tbl_noticescategories (
  noticescategories_id int(4) unsigned NOT NULL AUTO_INCREMENT,
  notices_id int(3) NOT NULL,
  categories_id int(2) NOT NULL,
  PRIMARY KEY (noticescategories_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_noticesna'
--

CREATE TABLE IF NOT EXISTS tbl_noticesna (
  notices_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  notices_title varchar(50) NOT NULL,
  notices_description text NOT NULL,
  PRIMARY KEY (notices_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_paths'
--

CREATE TABLE IF NOT EXISTS tbl_paths (
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
(1, 'T1F', 'B1F', '1,2,3,2');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_requests'
--

CREATE TABLE IF NOT EXISTS tbl_requests (
  requests_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  requests_firstname varchar(30) NOT NULL,
  requests_lastname varchar(30) NOT NULL,
  requests_building varchar(25) NOT NULL,
  requests_message text NOT NULL,
  requests_rommmate varchar(75) NOT NULL,
  PRIMARY KEY (requests_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_requestscategories'
--

CREATE TABLE IF NOT EXISTS tbl_requestscategories (
  requestscategories_id int(4) unsigned NOT NULL AUTO_INCREMENT,
  requests_id int(3) NOT NULL,
  categories_id int(2) NOT NULL,
  PRIMARY KEY (requestscategories_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_rezbuildings'
--

CREATE TABLE IF NOT EXISTS tbl_rezbuildings (
  rezbuildings_id int(3) unsigned NOT NULL AUTO_INCREMENT,
  rezbuildings_title varchar(30) NOT NULL,
  rezbuildings_description text NOT NULL,
  PRIMARY KEY (rezbuildings_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_rezbuildingscategories'
--

CREATE TABLE IF NOT EXISTS tbl_rezbuildingscategories (
  rezbuildingscategories_id int(4) unsigned NOT NULL AUTO_INCREMENT,
  rezbuildings_id int(3) NOT NULL,
  categories_id int(2) NOT NULL,
  PRIMARY KEY (rezbuildingscategories_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_steps'
--

CREATE TABLE IF NOT EXISTS tbl_steps (
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

CREATE TABLE IF NOT EXISTS tbl_students (
  students_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  students_firstname varchar(20) NOT NULL,
  students_lastname varchar(20) NOT NULL,
  students_program varchar(80) NOT NULL,
  students_number int(7) NOT NULL,
  students_email varchar(50) NOT NULL,
  students_phone varchar(20) NOT NULL,
  students_address varchar(75) NOT NULL,
  students_image varchar(50) NOT NULL DEFAULT 'default.jpg',
  students_points smallint(1) NOT NULL,
  students_notifications int(2) NOT NULL,
  students_balance varchar(10) NOT NULL,
  students_fb varchar(50) NOT NULL,
  students_tw varchar(50) NOT NULL,
  students_ln varchar(50) NOT NULL,
  PRIMARY KEY (students_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_students'
--

INSERT INTO tbl_students (students_id, students_firstname, students_lastname, students_program, students_number, students_email, students_phone, students_address, students_image, students_points, students_notifications, students_balance, students_fb, students_tw, students_ln) VALUES
(1, 'Joe', 'Smith', '', 1342564, 'j_smith@fanshaweonline.ca', '555-123-4567', '', 'default.jpg', 0, 0, '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_typesc'
--

CREATE TABLE IF NOT EXISTS tbl_typesc (
  typesC_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  typesC_type varchar(25) NOT NULL,
  PRIMARY KEY (typesC_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_zones'
--

CREATE TABLE IF NOT EXISTS tbl_zones (
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

CREATE TABLE IF NOT EXISTS tbl_zonesbuildings (
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

CREATE TABLE IF NOT EXISTS tbl_zonesclassrooms (
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

CREATE TABLE IF NOT EXISTS tbl_zonesfloors (
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
