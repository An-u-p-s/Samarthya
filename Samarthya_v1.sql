-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 11:48 AM
-- Server version: 5.5.20
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olpportal_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `courselinks`
--

CREATE TABLE IF NOT EXISTS `courselinks` (
  `idCourseLinks` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `courseID` int(11) DEFAULT NULL,
  `courseEngVideoLink` varchar(250) DEFAULT NULL,
  `courseEngPDFLink` varchar(250) DEFAULT NULL,
  `courseHindiVideoLink` varchar(250) NOT NULL,
  `courseHindiPDFLink` varchar(250) NOT NULL,
  `courseTeluguVideoLink` varchar(250) NOT NULL,
  `courseTeluguPDFLink` varchar(250) NOT NULL,
  PRIMARY KEY (`idCourseLinks`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `courselinks`
--

INSERT INTO `courselinks` (`idCourseLinks`, `title`, `courseID`, `courseEngVideoLink`, `courseEngPDFLink`, `courseHindiVideoLink`, `courseHindiPDFLink`, `courseTeluguVideoLink`, `courseTeluguPDFLink`) VALUES
(1, 'Watershed Interventions', 1, 'https://www.youtube.com/embed/QOrVotzBNto', '', 'https://www.youtube.com/embed?v=QOrVotzBNto&feature=youtu.be', '', 'https://www.youtube.com/embed?v=QOrVotzBNto&feature=youtu.be', ''),
(2, 'Continuous Contour Trench', 1, 'https://www.youtube.com/embed/QUurcuSvHM', 'PDF-Text/Course-1/Continuous_Contour_Trench.pdf', 'https://www.youtube.com/embed?v=2QUurcuSvHM&feature=youtu.be', '', 'https://www.youtube.com/embed?v=2QUurcuSvHM&feature=youtu.be', ''),
(3, 'Staggered Contour Trench', 1, 'https://www.youtube.com/embed/-REeHT-Wawo', 'PDF-Text/Course-1/Staggered_Contour_Trench.pdf', 'https://www.youtube.com/embed?v=-REeHT-Wawo&feature=youtu.be', '', 'https://www.youtube.com/embed?v=-REeHT-Wawo&feature=youtu.be', ''),
(4, 'Diversion Drains', 1, 'https://www.youtube.com/embed/-k8sruQPFkA', '', 'https://www.youtube.com/embed?v=-k8sruQPFkA&feature=youtu.be', '', 'https://www.youtube.com/embed?v=-k8sruQPFkA&feature=youtu.be', ''),
(5, 'Loose Boulder Check', 1, 'https://www.youtube.com/embed/EBCZZia8GYg', 'PDF-Text/Course-1/Loose_Boulder_Check_Dam.pdf', 'https://www.youtube.com/embed?v=EBCZZia8GYg&feature=youtu.be', '', 'https://www.youtube.com/embed?v=EBCZZia8GYg&feature=youtu.be', ''),
(6, 'Gabion Structure', 1, 'https://www.youtube.com/embed/0f1wj5XGsjE', 'PDF-Text/Course-1/Gabion_Structures.pdf', 'https://www.youtube.com/embed?v=0f1wj5XGsjE&feature=youtu.be', '', 'https://www.youtube.com/embed?v=0f1wj5XGsjE&feature=youtu.be', ''),
(7, 'Drop Spillway', 1, 'https://www.youtube.com/embed/e9xw73pqC_E', 'PDF-Text/Course-1/Drop_Spillway.pdf', 'https://www.youtube.com/embed?v=e9xw73pqC_E&feature=youtu.be', '', 'https://www.youtube.com/embed?v=e9xw73pqC_E&feature=youtu.be', ''),
(8, 'Earthen Dam', 1, 'https://www.youtube.com/embed/fqceTkveWTo', 'PDF-Text/Course-1/Earthen_Dam.pdf', 'https://www.youtube.com/embed?v=fqceTkveWTo&feature=youtu.be', '', 'https://www.youtube.com/embed?v=fqceTkveWTo&feature=youtu.be', ''),
(9, 'Stone Bund', 1, 'https://www.youtube.com/embed/cXH35eS_JH4', 'PDF-Text/Course-1/Stone_Bund.pdf', 'https://www.youtube.com/embed?v=cXH35eS_JH4&feature=youtu.be', '', 'https://www.youtube.com/embed?v=cXH35eS_JH4&feature=youtu.be', ''),
(10, 'Contour Bunding', 1, 'https://www.youtube.com/embed/1LfjKZHwxFk', 'PDF-Text/Course-1/Contour_Bunding.pdf', 'https://www.youtube.com/embed?v=1LfjKZHwxFk&feature=youtu.be', '', 'https://www.youtube.com/embed?v=1LfjKZHwxFk&feature=youtu.be', ''),
(11, 'Land Levelling', 2, 'https://www.youtube.com/embed/pAhdHUFu2QE', 'PDF-Text/Course-1/Land_Leveling.pdf', 'https://www.youtube.com/embed?v=pAhdHUFu2QE&feature=youtu.be', '', 'https://www.youtube.com/embed?v=pAhdHUFu2QE&feature=youtu.be', ''),
(12, 'Dug Wells', 2, 'https://www.youtube.com/embed/cNLjX9JsWRc', 'PDF-Text/Course-2/Dug_Well.pdf', 'https://www.youtube.com/embed?v=cNLjX9JsWRc&feature=youtu.be', '', 'https://www.youtube.com/embed?v=cNLjX9JsWRc&feature=youtu.be', ''),
(13, 'Farm Pond', 1, 'https://www.youtube.com/embed/MY3uz3F6loA', 'PDF-Text/Course-2/Form_Pond.pdf', 'https://www.youtube.com/embed?v=MY3uz3F6loA&feature=youtu.be', '', 'https://www.youtube.com/embed?v=MY3uz3F6loA&feature=youtu.be', ''),
(14, 'NADEP Composting', 3, 'https://www.youtube.com/embed/WWwBeOsJZ4', 'PDF-Text/Course-3/NADAP_Compost_Pit.pdf', 'https://www.youtube.com/embed?v=-WWwBeOsJZ4&feature=youtu.be', '', 'https://www.youtube.com/embed?v=-WWwBeOsJZ4&feature=youtu.be', ''),
(15, 'Vermi Composting', 3, 'https://www.youtube.com/embed/EkAsRe1jPv4', 'PDF-Text/Course-3/Vermi_Compost.pdf', 'https://www.youtube.com/embed?v=EkAsRe1jPv4&feature=youtu.be', '', 'https://www.youtube.com/embed?v=EkAsRe1jPv4&feature=youtu.be', ''),
(16, 'Solid and Liquid Waste Management', 4, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `idCourses` int(11) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(45) DEFAULT NULL,
  `courseNumber` int(11) DEFAULT NULL,
  `courseImage` varchar(200) NOT NULL,
  PRIMARY KEY (`idCourses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`idCourses`, `courseName`, `courseNumber`, `courseImage`) VALUES
(1, 'Natural Resources Management', 714, 'images/courses/course-2.jpg'),
(2, 'Community/Individual Assets', 897, 'images/courses/course-2.jpg'),
(3, 'Common Infrastructure', 847, 'images/courses/course-2.jpg'),
(4, 'Rural Infrastructure', 499, 'images/courses/course-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courseuserview`
--

CREATE TABLE IF NOT EXISTS `courseuserview` (
  `idCourseUserView` int(11) NOT NULL AUTO_INCREMENT,
  `courseLinksID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `CourseID` int(11) DEFAULT NULL,
  `View` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idCourseUserView`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `courseuserview`
--

INSERT INTO `courseuserview` (`idCourseUserView`, `courseLinksID`, `userID`, `CourseID`, `View`) VALUES
(1, 1, 2, 1, b'1'),
(2, 2, 2, 1, b'1'),
(3, 3, 2, 1, b'1'),
(4, 4, 2, 1, b'1'),
(6, 4, 2, 1, b'1'),
(7, 4, 2, 1, b'1'),
(8, 4, 2, 1, b'1'),
(9, 5, 2, 1, b'1'),
(10, 5, 2, 1, b'1'),
(11, 4, 2, 1, b'1'),
(12, 6, 2, 1, b'1'),
(13, 7, 2, 1, b'1'),
(14, 7, 2, 1, b'1'),
(15, 7, 2, 1, b'1'),
(17, 13, 2, 1, b'1'),
(18, 13, 2, 1, b'1'),
(19, 8, 2, 1, b'1'),
(20, 9, 2, 1, b'1'),
(21, 10, 2, 1, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `testdetails`
--

CREATE TABLE IF NOT EXISTS `testdetails` (
  `idTestDetails` int(11) NOT NULL AUTO_INCREMENT,
  `testName` varchar(45) DEFAULT NULL,
  `testType` varchar(45) DEFAULT NULL,
  `testTime` varchar(10) NOT NULL,
  `totalquestions` int(11) NOT NULL,
  `totalmarks` int(11) NOT NULL,
  `passMarks` int(11) NOT NULL,
  PRIMARY KEY (`idTestDetails`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `testdetails`
--

INSERT INTO `testdetails` (`idTestDetails`, `testName`, `testType`, `testTime`, `totalquestions`, `totalmarks`, `passMarks`) VALUES
(1, 'Natural Resources Management', 'Pre Test', '00:10:59', 6, 20, 10),
(2, 'Community/Individual Assets', 'Pre Test', '00:10:00', 5, 20, 0),
(3, 'Common Infrastructure', 'Pre Test', '00:10:00', 5, 20, 0),
(4, 'Rural Infrastructure', 'Pre Test', '00:10:00', 5, 20, 0),
(6, 'Natural Resources Management', 'Assessment', '00:10:59', 8, 20, 10),
(7, 'Community/Individual Assets', 'Assessment', '00:10:59', 5, 20, 10),
(8, 'Common Infrastructure', 'Assessment', '00:10:59', 5, 20, 10),
(9, 'Rural Infrastructure', 'Assessment', '00:10:59', 5, 20, 10),
(10, 'All', 'Final Test', '00:10:59', 8, 20, 10),
(11, 'Natural Resources Management', 'Post Test', '00:10:59', 8, 20, 10),
(12, 'Community/Individual Assets', 'Post Test', '00:10:59', 8, 20, 10),
(13, 'Common Infrastructure', 'Post Test', '00:10:59', 8, 20, 10),
(14, 'Rural Infrastructure', 'Post Test', '00:10:59', 8, 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `testquestions`
--

CREATE TABLE IF NOT EXISTS `testquestions` (
  `idTestQuestions` int(11) NOT NULL AUTO_INCREMENT,
  `idTestDetails` int(11) NOT NULL,
  `courselinkId` int(11) NOT NULL,
  `question` varchar(1000) DEFAULT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `answer` varchar(300) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idTestQuestions`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=181 ;

--
-- Dumping data for table `testquestions`
--

INSERT INTO `testquestions` (`idTestQuestions`, `idTestDetails`, `courselinkId`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `active`) VALUES
(1, 1, 1, 'Diversion+drain%2C+Continuous+Contour+Trenches%2C+Staggered+Contour+Trenches+and+Loose+Boulder+Bunding+are+taken+up+as+watershed+interventions+in+which+areas+in+the+watershed%3F', 'Arable+lands+', 'Non-arable+lands+', 'Drainage+lines+', 'Common+outlet+area', 'Non-arable lands ', b'1'),
(2, 1, 1, 'Loose++Boulder++Checks%2C++Gabion++Structures%2C++Gully+Earthen++Plugs++and++Earthen++Dams++are++taken++up++as+watershed+interventions+in+which+areas+in+the+watershed%3F', 'Arable+lands+', 'Non-arable+lands+', 'Drainage+lines+', 'Common+outlet+area', 'Drainage lines ', b'1'),
(3, 1, 1, 'Contour+Bunding%2C+Graded+Bunding+and+Dug+Out+Ponds+are+taken+up+as+watershed+interventions+in+which+areas+in+the+watershed%3F', 'Arable+lands+', 'Non-arable+lands+', 'Drainage+lines+', 'Common+outlet+area', 'Arable lands ', b'1'),
(4, 1, 1, 'A+geo-hydrological+unit+of+an+area+draining+to+a+common+outlet+point+is+called%3F', 'Ridge+area+', 'Arable+area+', 'Drainage+line+', 'Watershed', 'Watershed', b'1'),
(5, 1, 1, 'The+top+of+a+watershed+from+where+the+slopes+start+is+called+%3F', 'Ridge+', 'Watershed+', 'Drainage+line+', 'Arable+area', 'Ridge ', b'1'),
(6, 1, 1, 'Gullies%2C+streams+and+rivers+are+called%3F', 'Ridge+', 'Watershed+', 'Drainage+line+', 'Arable+area', 'Drainage line ', b'1'),
(7, 1, 1, 'What+is+the+size+of+the+micro+watershed%3F', '150+%E2%80%93+1000+ha+', '500+%E2%80%93+1000+ha+', '300+%E2%80%93+1000+ha+', '550+%E2%80%93+1000+ha', '550 â€“ 1000 ha', b'1'),
(8, 1, 1, 'What+is+the+size+of+the+milli+-watershed%3F', '1000+-+10000+ha+', '1500+%E2%80%93+10000+ha+', '1000+%E2%80%93+15000+ha+', '1550+%E2%80%93+20000+ha', '1000 - 10000 ha ', b'1'),
(9, 1, 1, 'If+the+land+use+pattern+is+pasture%2C+slope+of+the+land+is+10+%E2%80%93+30+%25+and+soils+are+sandy+loam%2C+what+is+the+value+of+runoff+coefficient%3F', '0.15', '0.22', '0.32', '0.45', '0.22', b'1'),
(10, 1, 1, 'On+slopes+greater+than+25%25%2C+what+interventions+are+possible+in+watershed+areas%3F', 'Continuous+Contour+Trenches+', 'Staggered+Trenches+', 'Natural+vegetation+and+plant+variety+of+species+', 'Gully+plugs', 'Natural vegetation and plant variety of species ', b'1'),
(11, 1, 1, 'On+slopes+between+10+to+25%25%2C+what+types+of+mechanical+measures+are+taken+up%3F', 'Contour+trenches+', 'Farm+bunding+', 'Earthen+Dam+', 'Farm+pond', 'Contour trenches ', b'1'),
(12, 1, 1, 'On+the+slopes+less+than+10%25%2C+What+types+of+mechanical+measures+are+taken+up%3F', 'Contour+trenches+', 'Contour++bunding+', 'Earthen+Dam+', 'Farm+pond', 'Contour  bunding ', b'1'),
(13, 1, 1, 'On+small+seasonal+streams+where+bed+slopes+of+the+stream+are+less+than+20+%25+and+the+catchment+area+of+stream+is+less+the+50+ha%2C+What+types+of+mechanical+measures+are+taken+up%3F', 'Gabion+structures+', 'Earthen+dams+', 'Earthen+gully+plugs', '+Loose+Boulder+Checks', ' Loose Boulder Checks', b'1'),
(14, 1, 1, 'On+the+bigger+streams+with+the+catchment+areas+of+50+%E2%80%93+500+ha%2C+What+types+of+mechanical+measures+are+taken+up%3F', 'Gabion+structures+', 'Earthen+dams+', 'Earthen+gully+plugs', '+Loose+Boulder+Checks', 'Gabion structures ', b'1'),
(15, 1, 1, 'What+types+of+mechanical+measures+are+taken+up+on+a+relatively+flatter+portion+of+the+main+watershed+stream+where+the+bed+slope+is+less+than+5+%25%3F', 'Gabion+structures+', 'Earthen+dams+', 'Earthen+gully+plugs', '+Loose+Boulder+Checks', 'Earthen dams ', b'1'),
(16, 1, 2, 'Contour+trenches+are+constructed+in+the+following+lands%3F', 'Non-arable+lands+', 'Arable+lands+', 'Gullied+lands+', 'All+the+above', 'Non-arable lands ', b'1'),
(17, 1, 2, 'Continuous+Contour+Trenches+are+constructed+in+the+following+manner%3F', 'Along+the+slope+', 'Across+the+slope+', '45%CC%8A+to+the+land+slope+', '60%CC%8A+to+the+land+slope', 'Across the slope ', b'1'),
(18, 1, 2, 'Cross+section+of+Continuous+Contour+Trenches+varies+from%3F', '35+cm+%2A+35+cm+to+40+cm%2A+40+cm', '45+cm+%2A+45+cm+to+48+cm+%2A+48cm+', '30+cm+%2A+30+cm+to+45+cm+%2A+45+cm+', '50+cm+%2A+50+cm+to+60+cm+%2A+60+cm', '30 cm * 30 cm to 45 cm * 45 cm ', b'1'),
(19, 1, 2, 'Side+slopes+of+Continuous+Contour+Trenches+are%3F', '1%3A1+to+1.5%3A1+', '1.5%3B1+2%3A1+', '2%3A1+to+2.5%3A1+', '3%3A1+to+4%3A1', '1:1 to 1.5:1 ', b'1'),
(20, 1, 2, 'Continuous+Contour+Trenches+are+generally+used+in+the+following+rainfall+regions%3F', 'High+rainfall+', 'Medium+Rainfall+', 'Low+rainfall', '+All+the+above', 'Low rainfall', b'1'),
(21, 1, 2, 'Formula+used+for+determining+the+total+length+of+the+Continuous+Contour+Trenches+%28CCT%29%3F', 'Q%2F%28A1+%2A+f%29+', '2Q+%2A+A1%2Ff+', 'Q%2Ff+%2A+A1+', 'f%2AQ+%2F+A1', 'Q/(A1 * f) ', b'1'),
(22, 1, 2, 'Formula+used+for+determining+the+distance+between+successive+rows+of+Continuous+Contour+Trenches%3F', 'A%2AL++', 'A+%2BL++', '2A+%2A+L++', 'A%2FL', 'A/L', b'1'),
(23, 1, 2, 'Formula+used+for+determining+number+of+rows+of+Continuous+Contour+Trenches%3F', 'L+%2A+HI+', 'HI%2FL', 'L%2FHI+', '2L+%2A+H', 'L/HI ', b'1'),
(24, 1, 2, 'In+the+following+range+of+land+slopes+on+which+Continuous+Contour+trenches+have+to+be+formed%3F', '2+%E2%80%93+5+%25+', '6+to+10+%25+', '30+to+35+%25+', '10+to+25+%25', '10 to 25 %', b'1'),
(25, 1, 2, 'If+the+area+of+the+land+on+which+Continuous+Contour+Trenches+%28CCT%29+are+to+be+formed+is+3+ha+and+the+total+length+of+the+CCT+is+500+m%2C+what+is+the+distance+between+successive+rows+of+CCT%3F', '50+m', '+60m+', '55+m+', '70+m', ' 60m ', b'1'),
(26, 1, 2, 'If+the+Quantum+of+runoff+from+catchment+area+is+8000+cu.m+and+cross-sectional+area+is+0.245+sq.m.Find+out+the+total+length+of+CCT+if+the+trench+gets+2+fills+in+a+day%3F', '16300+m', '+16520+m', '++16342+m+', '+16327+m', ' 16327 m', b'1'),
(27, 1, 2, 'Find+out+the+number+of+rows+of+CCT+if+the+longest+length+of+the+ridge+area+and+the+distance+between+successive+rows+are+3500+m+and+15+m+respectively%3F', '230', '233', '254', '260', '233', b'1'),
(28, 1, 2, 'If+the+side+slopes+of+CCT+at+upstream+side+and+downstream+side+are+1%3A1+and+1.5%3A1+respectively+and+bottom+width+of+0.35m+find+out+total+length+of+CCT+for+runoff+of+5000+cu.m+and+trench+gets+2+fills+%3F', '9058+m+', '9142+m', '+9750+m', '+9632+m', '9058 m ', b'1'),
(29, 1, 2, 'Find+out+the+distance+between+successive+rows+of+CCT+for+an+area+of+10+ha+where+runoff+coefficient%2C+6+%E2%80%93hr+maximum+rainfall+of+5+years+return+period+are+0.50+and+50+mm+respectively.+Cross-sectional+area+is+0.25+sq.m+and+number+of+fills+to+trench+is+2%3F', '29+m+', '28+m+', '26+m+', '27+m', '28 m ', b'1'),
(30, 1, 2, 'Find+out+the+distance+between+successive+rows+of+CCT+if+side+slopes+of+CCT+at+upstream+side+and+downstream+side+are+1%3A1+and+1.5%3A1+respectively+and+bottom+width+is+0.35+m+and+a+depth+of+.CCT+is+0.40+m.+CCT+is+planned+for+an+area+of+10+ha+where+runoff+coefficient%2C+6+%E2%80%93hr+maximum+rainfall+of+5+years+return+period+and+number+of+fills+in+a+day+to+CCT+are+0.50%2C+50+mm+and+2+respectively%3F', '32+m', '+35+m+', '39+m', '+34+m', '39 m', b'1'),
(31, 1, 3, 'Staggered+Contour+trenches+are+constructed+in+the+following+lands%3F', 'Non-arable+lands+', 'Arable+lands+', 'Gullied+lands+', 'All+the+above', 'Non-arable lands ', b'1'),
(32, 1, 3, 'Staggered+Contour+Trenches+are+constructed+in+the+following+manner%3F', 'Along+the+slope+', 'Across+the+slope+', '45%CC%8A+to+the+land+slope+', '60%CC%8A+to+the+land+slope', 'Across the slope ', b'1'),
(33, 1, 3, 'Staggered+Contour+Trenches+are+generally+used+in+the+following+rainfall+regions%3F', '', 'Medium+Rainfall+', 'Low+rainfall', '+All+the+above', 'High rainfall ', b'1'),
(34, 1, 3, 'Formula+used+for+determining+the+total+length+of+the+Staggered+Contour+Trenches+%28SCT%29%3F', 'Number+of+SCT+%2A%28Length+of+SCT+%2B+Distance+between+two+SCT+s+in+a+row%29+', 'Number+of+SCT+%2F%28Length+of+SCT+%2B+Distance+between+two+SCT+s+in+a+row%29', 'Number+of+SCT%2FLength+of+SCT++', 'Length+of+SCT+%2B+Distance+between+two+SCT+s+in+a+row', 'Number of SCT *(Length of SCT + Distance between two SCT s in a row) ', b'1'),
(35, 1, 3, 'In+the+following+range+of+land+slopes+on+which+Staggered+Contour+trenches+%28SCT%29+have+to+be+formed%3F', '2+%E2%80%93+5+%25+', '6+to+10+%25+', '30+to+35+%25+', '10+to+25+%25', '10 to 25 %', b'1'),
(36, 1, 3, 'Formula+used+for+determining+the+distance+between+successive+rows+of+Staggered+Contour+Trenches%3F', 'Area+%2A+Total+length+of+SCTs+', 'Area+%2FTotal+length+of+SCTs+', 'Area+-Total+length+of+SCTs++', 'Area+%2B+Total+length+of+SCTs', 'Area /Total length of SCTs ', b'1'),
(37, 1, 3, 'Formula+used+for+determining+number+of+rows+of+Staggered+Contour+Trenches+%28SCTs%29%3F', 'Longest+length+of+the+ridge+area%2FDistance+between+two+rows+of+SCTs+', 'Longest+length+of+the+ridge+area+%2A+Distance+between+two+rows+of+SCTs', 'Longest+length+of+the+ridge+area+%2B+Distance+between+two+rows+of+SCTs+', 'Longest+length+of+the+ridge+area+-+Distance+between+two+rows+of+SCTs+', 'Longest length of the ridge area/Distance between two rows of SCTs ', b'1'),
(38, 1, 3, 'If+the+area+of+the+land+on+which+Staggered+Contour+Trenches+%28CCT%29+are+to+be+formed+is+5+ha+and+the+total+length+of+the+SCT+is+800+m%2C+what+is+the+distance+between+successive+rows+of+SCT%3F', '50+m', '60m', '++63+m', '+65+m', '  63 m', b'1'),
(39, 1, 3, 'If+the+Quantum+of+runoff+from+catchment+area+is+8000+cu.m+and+volume+of+trench+is+1.2+cu.m.+Find+out+number+of+trenches+if+the+trench+gets+2+fills+in+a+day%3F', '3000', '3500', '3700', '3333', '3333', b'1'),
(40, 1, 3, 'Find+out+the+total+length+of+SCT+if+the+length+of+SCT+and+the+distance+between+two+trenches+in+a+row+are+4+m+and+2.5+m+respectively+and+number+of+trenches+are+2450%3F', '15950+m', '+15960+m+', '15925+m', '+15985+m', '15925 m', b'1'),
(41, 1, 3, 'Find+out+the+distance+between+successive+rows+of+SCT+for+an+area+of+5+ha+where+runoff+coefficient%2C+6+%E2%80%93hr+maximum+rainfall+of+5+years+return+period+are+0.50+and+50+mm+respectively.+Cross-sectional+area+is+1.20+sq.m%2C+length+of+SCT+is+3+m%2C+distance+between+SCTs+in+a+row+is+3+m+and+number+of+fills+to+trench+is+2%3F', '18.20+m+', '17.15+m+', '17.50+m+', '16.25+m', '17.15 m ', b'1'),
(42, 1, 3, 'Cross-sectional+area+of+SCTs+is+designed+to+collect+the+runoff+expected+from+intense+storms+at+recurrence+intervals+of%3F', '5+%E2%80%93+10+years+', '2+%E2%80%93+5+years+', '10+%E2%80%93+15+years', '+8+%E2%80%93+10+years', '5 â€“ 10 years ', b'1'),
(43, 1, 3, 'Construction+of+SCTs+should+start+from%3F', 'Valley+to+ridge+', 'Ridge+to+valley+', 'From+mid-point+of+the+field', '+None+of+the+above', 'Ridge to valley ', b'1'),
(44, 1, 3, 'What+should+be+the+percentage+of+runoff+from+6-hr+storm+with+5+years+return+period+in+coarse+textured+soils%3F', '50+%E2%80%93+60+%25', '+40+%E2%80%93+50+%25', '+60-+70+%25+', '20+%E2%80%93+30+%25', ' 60- 70 % ', b'1'),
(45, 1, 3, 'What+should+be+the+percentage+of+runoff+from+6-hr+storm+with+5+years+return+period+in+fine+textured+soils%3F', '50%25', '40%25', '60%25', '30%25', '50%', b'1'),
(46, 1, 5, 'Loose+Boulder+Checks+%28LBC%29+should+be+placed+in+series+in+such+a+way+that+top+of+the+downstream+check+dam+should+be+at+level+in+the+following+way%3F', 'With+the+bottom+of+the+one+upstream+of+it+', 'With+the+top+of+the+one+upstream+of+it+', 'With+the+midpoint+of+the+one+upstream+of+it', 'With+the+one+third+portion+of+the+one+upstream+of+it+', 'With the bottom of the one upstream of it ', b'1'),
(47, 1, 5, 'What+is+the+formula+used+for+determining+number+of+LBCs+in+a+drainage+line%3F', 'Length+of+Stream+%2B+Effective+width+of+one+LBC', 'Length+of+Stream+-++Effective+width+of+one+LBC', 'Length+of+Stream+%2A+Effective+width+of+one+LBC', 'Length+of+Stream+%2F+Effective+width+of+one+LBC', 'Length of Stream / Effective width of one LBC', b'1'),
(48, 1, 5, 'Depending+on+the+volume+and+velocity+of+runoff%2C+the+downstream+slope+of+the+LBC+varies+from%3F', '1%3A1+to+3%3A1+', '2%3A1+to+3%3A1', '2%3A1+to+4%3A1+', '3%3A1+to+4%3A1', '2:1 to 4:1 ', b'1'),
(49, 1, 5, 'Upstream+slope+of+LBC+should+be%3F', '+1%3A2+', '+1%3A1+', '+2%3A1+', '+4%3A1+', ' 1:1 ', b'1'),
(50, 1, 5, 'Loose+Boulder+Checks+%28LBCs%29+should+not+be+constructed+where+bed+slopes+are+above%3F', '20%25', '25%25', '26%25', '30%25', '20%', b'1'),
(51, 1, 5, 'Size+of+the+boulder+should+not+be+used+at+any+point+which+comes+into+contact+with+flowing+water%3F', '%3C+0.25+m+', '+%3E+0.20+m+', '%3C+0.15+m+', '%3E+0.35+m+', '< 0.15 m ', b'1'),
(52, 1, 5, 'Top+width+of+the+Loose+Boulder+Check+%28LBC%29+usually+provided+is%3F', '0.20+m+', '0.40+m+', '0.50+m', '+0.35+m', '0.40 m ', b'1'),
(53, 1, 5, 'The+design+height+of+LBC+means%3F', 'The+top+of+the+LBC+in+the+middle+of+the+stream+is+1+m+above+ground+level', 'The+mid-point+of+the+LBC+in+the+middle+of+the+stream+is+1+m+above+ground+level', 'The+bottom+of+the+LBC+in+the+middle+of+the+stream+is+1+m+above+ground+level', 'The+top+of+the+LBC+in+the+middle+of+the+stream+is+1+m+above+apron', 'The top of the LBC in the middle of the stream is 1 m above ground level', b'1'),
(54, 1, 5, 'LBCs+should+be+constructed+on+seasonal+streams+where+bed+slopes+of+the+stream+and+catchment+area+of+stream+are%3F', 'Bed+slope+are+less+than+15%25+', 'Bed+slopes+are+more+than+30%25', 'Catchment+area+is+less+than+60+ha+and+bed+slopes+are+more+than+20+%25', 'Bed+slopes+are+less+than+15+%25+and+Catchment+area+is+less+than+60+ha', 'Bed slopes are less than 15 % and Catchment area is less than 60 ha', b'1'),
(55, 1, 5, 'If+the+length+of+the+stream+and+effective+width+of+one+LBC+are+950+m+and+12+m+respectively%2C+calculate+number+of+LBCs%3F', '70', '65', '75', '72', '75', b'1'),
(56, 1, 6, 'Gabion+structures+are+of+stone+and+wire+dams+constructed+across+drainage+lines+with+a+catchment+area+of%3F+', '50+-+500+ha+', '40+-+400+ha+', '45+%E2%80%93+450+ha', '+55+%E2%80%93+550+ha+', '50 - 500 ha ', b'1'),
(57, 1, 6, 'The+main+aim+of+constructing+gabion+structure+is%3F+', 'To+reduce+erosion+', 'To+stop+siltation+', 'To+reduce+velocity+of+water+flowing+through+the+drainage+line+', '+To+recharge+ground+water', 'To reduce velocity of water flowing through the drainage line ', b'1'),
(58, 1, 6, 'If+the+height+of+the+embankment+is+6.0+m+and+the+depth+of+peak+flow+is+4.0+m+%2C+then+the+height+of+gabion+should+not+exceed%3F', '3+m+', '5+m+', '4+m+', '2+m+', '2 m ', b'1'),
(59, 1, 6, 'Foundation+should+be+dug+across+the+bed+of+the+drainage+line+for+the+entire+length+and+width+of+the+head+wall+of+the+structure+and+the+depth+of+foundation+should+be+up+to%3F', '+0.40+m', '+0.6+m', '+0.55+m+', '0.7+m', ' 0.6 m', b'1'),
(60, 1, 6, 'What+gauge+of+good+quality+galvanized+wire+must+be+used+for+constriction+of+gabion+structure%3F+', '+10+%E2%80%93+11+', '+15+%E2%80%93+16+', '13+%E2%80%93+14', '+12+%E2%80%93+14', ' 12 â€“ 14', b'1'),
(61, 1, 6, 'For+a+height+of+head+wall+up+to+2+m%2C+the+width+of+head+wall+can+be+restricted+up+to%3F', '0.5+m', '+1.0+m+', '1.3+m+', '1.2+m', ' 1.0 m ', b'1'),
(62, 1, 6, 'Normally%2C+what+is+the+range+of+distance+of+apron+from+the+head+wall+downstream+of+the+structure%3F', '3+-+6+m', '+4+%E2%80%93+5+m+', '1+-+3+m+', '1+-+2+m', '3 - 6 m', b'1'),
(63, 1, 6, 'To+increase+impermeability+of+the+gabion+structure%2C+what+should+be+constructed+on+its+upstream%3F', 'Spillway', '+Silt+trap', '+Revers+filter+', 'Core+wall', ' Revers filter ', b'1'),
(64, 1, 6, 'If+the++length+of++gabion+structure+and+number+of+boxes+in+the+main+wall+cross+section+are+12+m+and+2+respectively%2C+what+are+the+total+number+of+boxes+for+main+wall+are%3F+', '32', '26', '48', '24', '24', b'1'),
(65, 1, 6, 'If+the+boxes+required+for+main+wall%2C+both+side+walls+and+extension+walls+are+24%2C+12%2C+and+8+respectively%2C+what+is+the+total+quantity+of+wire+mesh+required+when+the+quantity+of+wire+mesh+required+is+5+sq.m%3F', '240+sq.m+', '220+sq.m+', '260+sq.m+', '210+sq.m', '220 sq.m ', b'1'),
(66, 1, 9, 'What+formula+is+used+for+finding+out+Vertical+Interval+%28VI%29+of+Contour+Stone+Walls+in+the+areas+receiving+rainfall+up+to+1500+mm+per+annum+in+southern+region+of+India%3F', 'VI+%3D+S%2F10+%2B+2', '+VI+%3D+S%2F15+%2B+2+', 'VI+%3D+S%2F10+%2B+3+', 'VI+%3D+S%2F10+%2B+5', 'VI = S/10 + 2', b'1'),
(67, 1, 9, 'What+formula+is+used+for+finding+out+Vertical+Interval+%28VI%29+of+Contour+Stone+Walls+in+the+areas+receiving+rainfall+more+than+1500+mm+per+annum+in+southern+region+of+India%3F', 'VI+%3D+S%2F10+%2B1.0+', 'VI+%3D+S%2F10+%2B2.5+', 'VI+%3D+S%2F10+%2B1.56+', 'VI+%3D+S%2F10+%2B1.5', 'VI = S/10 +1.5', b'1'),
(68, 1, 9, 'What+formula+is+used+to+find+out+length+of+Contour+Stone+Wall+per+hectare%3F', '100+x+VI+%2FS+', '100+x+S%2FV.I.', '100%2FSxVI+', '100+%2F+S+%2B+VI+', '100 x S/V.I.', b'1'),
(69, 1, 9, 'When+the+slope+percentage+of+land+is+16%2C+what+is+the+length+of+Contour+Stone+wall+per+hectare+in+the+areas+receiving+rainfall+more+than+1500+mm+per+annum+in+southern+region+of+India%3F', '520+m+', '532+m+', '516+m+', '541+m', '516 m ', b'1'),
(70, 1, 9, 'When+the+slope+percentage+of+land+is+22%2C+what+is+the+length+of+Contour+Stone+wall+per+hectare+in+the+areas+receiving+rainfall+less+than+1500+mm+per+annum+in+southern+region+of+India%3F', '520+m', '+524+m', '+520+m', '+541+m', ' 524 m', b'1'),
(71, 1, 9, 'What+is+the+foundation+depth+generally+adopted+for+Contour+Stone+Wall%3F', '0.30+m++', '0.20+m', '+0.40+m', '+0.15+m+', '0.30 m  ', b'1'),
(72, 1, 9, 'The+most+commonly+adopted+cross+section+for+the+contour+stone+wall+of+top+width%2C+bottom+width+and+height+respectively%3F', '50+cm+x+60+cm+x+45+cm+', '45+cm+x+60+cm+x+25+cm+', '55+cm+x+70+cm+x+35+cm+', '60+cm+x+80+cm+x+50+cm+', '60 cm x 80 cm x 50 cm ', b'1'),
(73, 1, 9, 'When+the+land+slope+%2C+Vertical+Interval+are+28+%25+and+4.3+m+respectively+%2C+what+is+the+length+of+Contour+Stone+Wall+in+the+areas+receiving+rainfall+more+than+1500+mm+per+annum+in+southern+region+of+India%3F', '598+m++', '641+m', '+651+m+', '650+m', ' 651 m ', b'1'),
(74, 1, 9, 'When+the+land+slope+%2C+Vertical+Interval+are+28+%25+and+4.8+m+respectively+%2C+what+is+the+length+of+Contour+Stone+Wall+in+the+areas+receiving+rainfall+less+than+1500+mm+per+annum+in+southern+region+of+India%3F', '598+m+', '583+m', '+651+m+', '650+m', '583 m', b'1'),
(75, 1, 9, 'When+the+land+slope+is+29+%25+what+is+the+length+of+Contour+Stone+Wall+in+the+areas+receiving+rainfall+595+mm+per+annum+in+southern+region+of+India%3F', '592+m', '+583+m+', '651+m', '+650+m', '592 m', b'1'),
(76, 1, 4, 'Diversion+drains+are+provided%3F', 'Along+the+slope+', '+In+the+natural+depressions', 'At+the+end+of+arable+land', 'Across+the+slope+on+slight+gradient', 'd', b'1'),
(77, 1, 4, 'Capacity+of+Diversion+drain+is+designed+for%3F', '10-+year+recurrence+interval', '5-+year+recurrence+interval', '15-+year+recurrence+interval', '20-+year+recurrence+interval', 'a', b'1'),
(78, 1, 4, 'Side+slopes+of+Diversion+drain+are+provided%3F', '1+%3A+1', '3+%3A+1', '4+%3A+1', '2+%3A+1', 'c', b'1'),
(79, 1, 4, 'Grassed+Waterways+are+provided%3F', 'Across+the+slope', 'Along+the+prevailing+slope', 'In+the+arable+lands', 'In+the+non-arable+lands', 'b', b'1'),
(80, 1, 4, 'Diversion+Drains+are+provided%3F', 'Above+the+non-arable+land', 'Along+the+prevailing+slope', 'In+the+arable+lands', 'At+the+top+of+the+arable+land', 'd', b'1'),
(81, 1, 4, 'Permissible+velocity+in+firm+clay+loam+soils+is%3F', '1.0+m%2Fsec', '1.2+m%2Fsec', '1.3+m%2Fsec', '1.4+m%2Fsec', 'a', b'1'),
(82, 1, 4, 'Permissible+velocity+in+very+light+silty+sand+soils+is%3F', '0.2+m%2Fsec', '0.25+m%2Fsec', '0.3+m%2Fsec', '0.4+m%2Fsec', 'c', b'1'),
(83, 1, 4, 'Permissible+velocity+in+coarse+sand%2C+sandy+and+sandy+loam+soils+is%3F', '0.60+m%2Fsec', '0.75+m%2Fsec', '0.70+m%2Fsec', '0.65+m%2Fsec', 'b', b'1'),
(84, 1, 4, 'Permissible+velocity+in+Stiff+clay%2F+stiff+gravel%2F+coarse+gravel+soils+is%3F', '1.60+m%2Fsec', '1.75+m%2Fsec', '1.70+m%2Fsec', '1.5+m%2Fsec', 'd', b'1'),
(85, 1, 4, 'Permissible+velocity+in+Shale%2C+hard+pan%2C+soft+rock+soils+is%3F', '1.80+m%2Fsec', '1.75+m%2Fsec', '1.70+m%2Fsec', '1.50+m%2Fsec', 'a', b'1'),
(86, 1, 7, 'Drop+spillway+is+an+efficient+structure+for+controlling+low+heads+normally+up+to%3F', '2m+', '2.5+m+', '3+m+', '4+m', '3 m ', b'1'),
(87, 1, 7, 'Formula+used+for+calculating+the+discharge+through+a+broad+crested+rectangular+spillway+is%3F', 'Q+%3D+1.711+LH3%2F2++++', 'Q+%3D+1.723+LH3%2F2++++', 'Q+%3D+1.911+LH3%2F2+++', '+Q+%3D+1.611+LH3%2F2++++', 'Q = 1.711 LH3/2    ', b'1'),
(88, 1, 7, 'Formula+used+for+calculating+the+discharge+through+a+broad+crested+rectangular+spillway+if+free+board+is+considered%3F', 'Q++++++%3D++++1.711+Lh3%2F2%0A+++++++++++++++++%281.1+%2B+0.03+F%29++++++++++++++++++', 'Q++++++%3D+1.711+Lh+3%2F2%0A++++++++++%281.1+%2B+0.001+F%29++++++++++', 'Q+++%3D+1.711+Lh3%2F2%0A+++++++%281.1+%2B+0.02+F%29+++++++++++++++++', 'Q++%3D+1.711+Lh3%2F2%0A+++++++++++++++%281.1+%2B+0.01+F%29', 'Q  = 1.711 Lh3/2\n               (1.1 + 0.01 F)', b'1'),
(89, 1, 7, 'Cutoff+wall+is+constructed+below+the+following+to+prevent+seepage+below+the+structure%3F', 'Apron+', 'Head+wall', 'Toe+wall+', 'Wing+wall+', 'Head wall', b'1'),
(90, 1, 7, 'Apron+thickness+for+drop+spillway+structures%2C+the+thickness+of+the+apron+in+plain+concrete+may+be+kept%3F', '25+%E2%80%93+40+cm+', '35+%E2%80%93+45+cm+', '20+%E2%80%93+30+cm+', '15+%E2%80%93+20+cm', '20 â€“ 30 cm ', b'1'),
(91, 1, 7, 'Apron+thickness+for+masonry+and+gabion+structures%2C+the+thickness+of+the+apron+in+plain+concrete+may+be+kept%3F', '30+%E2%80%93+60+cm+', '35+%E2%80%93+45+cm+', '20+%E2%80%93+30+cm+', '15+%E2%80%93+20+cm', '30 â€“ 60 cm ', b'1'),
(92, 1, 7, 'Formula+used+for+determination+of+Maximum+Scour+Depth+%28MSD%29%3F', '1.25+NSD+', '1.39+NSD', '1.29+NSD+', '1.50+NSD+', '1.50 NSD ', b'1'),
(93, 1, 7, 'Formula+used+for+computation+of+Normal+Scour+Depth+%28NSD%29%3F', '0.483+%28Q%2Ff%291%2F3++++++', '0.482+%28f%2FQ%291%2F3++++++', '0.473+%28Q%2Ff%291%2F3++++++', '0.485+%28Q%2Ff%291%2F3++++++', '0.473 (Q/f)1/3      ', b'1'),
(94, 1, 7, 'Height+of+the+cut-off+and+toe+walls+may+be+taken+as%3F', '1.5+NSD+', '1.45+NSD+', '1.35+NSD+', '1.54+NSD', '1.5 NSD ', b'1'),
(95, 1, 7, 'In+the+equation+of+Normal+scour+depth+%28NSD%29+%3D+0.473+%28Q%2Ff%291%2F3%2C+what+is+value+of+silt+factor+%E2%80%9Cf%E2%80%9D%3F++', '1.2+to+1.5+', '1+to+1.2+', '1+to+1.3+', '1.1+to+1.25', '1 to 1.2 ', b'1'),
(96, 1, 8, 'The+major+objective+of+Percolation+dams+is%3F', 'Recharging+ground+water+', 'Controlling+soil+erosion+', 'Reducing+runoff+', 'To+change+land+slope', 'Recharging ground water ', b'1'),
(97, 1, 8, 'What+is+the+general+norm+of+bed+slope+of+drainage+line+at+the+point+of+location+of+earthen+dam%3F', 'Not+more+than+6+%25+', 'Not+more+than+8+%25+', 'Not+more+than+5+%25+', 'Not+more+than+2%25', 'Not more than 5 % ', b'1'),
(98, 1, 8, 'Which+is+the+structure+provided+in+earthen+dam+to+channelize+excess+runoff+safely+out+of+the+structure%3F', 'Sluice+', 'Apron+', 'Core+wall+', 'Waste+weir', 'Waste weir', b'1'),
(99, 1, 8, 'What+is+the+thumb+rule+to+capture+percentage+of+the+season%E2%80%99s+total+surface+water+run-off+to+make+an+earthen+dam+cost-effective%3F', '30+%E2%80%93+40+%25+', '40+%E2%80%93+70+%25+', '60+%E2%80%93+70+%25+', '40+%E2%80%93+50+%25', '40 â€“ 70 % ', b'1'),
(100, 1, 8, 'Maximum+level+up+to+which+water+will+rise+when+the+structure+is+full%3F', 'Free+board+', 'Full+Reservoir+Level+', 'Maximum+Flood+Level+', 'Tank+Bund+Level', 'Full Reservoir Level ', b'1'),
(101, 1, 8, 'Maximum+level+up+to+which+water+is+allowed+to+rise+in+a+structure+after+an+intense+spell+of+rain%3F', 'Free+board+', 'Full+Reservoir+Level+', 'Maximum+Flood+Level+', 'Tank+Bund+Level', 'Maximum Flood Level ', b'1'),
(102, 1, 8, 'The+difference+in+height+between+the+top+of+the+bund+and+the+maximum+level+up+to+which+flood+water+rises+in+a+dam%3F', 'Free+board+', 'Full+Reservoir+Level+', 'Maximum+Flood+Level+', 'Tank+Bund+Level', 'Free board ', b'1'),
(103, 1, 8, 'As+per+the+years+of+field+experience+what+is+the+adequate+value+of+free+board+for+earthen+structures+with+height+less+than+5+m%3F', '1.5+m+', '1.6+m+', '1.2+m+', '1.0+m', '1.0 m', b'1'),
(104, 1, 8, 'Top+Bund+Level+%28TBL%29+is%3F', 'Maximum+Flood+Level+%2B+Full+Reservoir+Level+', 'Maximum+Flood+Level+%2B+Free+board+', 'Full+Reservoir+Level+%2B+Free+board+', 'Full+Reservoir+Level+-+Free+board', 'Maximum Flood Level + Free board ', b'1'),
(105, 1, 8, 'Formula+used+for+determining+the+top+width+of+bund+is%3F', 'W+%3D+0.3+%2A+h+%2B+1+', 'W+%3D+0.5+%2A+h+%2B+1+', 'W+%3D+0.6+%2A+h+%2B+1+', 'W+%3D+0.4+%2A+h+%2B+1', 'W = 0.4 * h + 1', b'1'),
(106, 1, 10, 'Contour+bunds+are+constructed+on+the+lands+having+slopes+of%3F', 'up+to+15+%25+', 'up+to+12+%25+', 'up+to+10%25+', 'up+to+2+%25', 'up to 10% ', b'1'),
(107, 1, 10, 'Contour+bunds+are+generally+considered+for+areas+of+annual+rainfall+of%3F', 'Less+than+800+mm+', 'More+than+800+mm+', 'Less+than+500+mm+', 'More+than+1000+mm', 'Less than 800 mm ', b'1'),
(108, 1, 10, 'From+the+field+experience%2C+contour+bunding+is+found+to+ensure+increase+in+crop+yield+by+%3F', '5-+10+%25+', '+20+%E2%80%93+35+%25+', '30+%E2%80%93+35+%25+', '15+%E2%80%93+20+%25', '15 â€“ 20 %', b'1'),
(109, 1, 10, 'Spacing+of+Contour+Bunds+is+usually+expressed+by%3F', 'Horizontal+Interval+', 'Percentage+of+slope+', 'Vertical+Interval+', 'None+of+the+above', 'Vertical Interval ', b'1'),
(110, 1, 10, 'Ramser%E2%80%99s+Formula+for+computation+of+Vertical+Interval+for+Contour+Bunds%3F', 'VI+%3D+0.3%28S%2Fa+%2B+b%29+', 'VI+%3D+0.25+%28S%2Fa+%2B+b%29+', 'VI+%3D+0.3+%28a%2Bb%2FS%29+', '+VI+%3D+%280.30+S+%2B+a%2Fb%29', 'VI = 0.3(S/a + b) ', b'1'),
(111, 1, 10, 'What+is+the+value+of+%E2%80%9Ca%E2%80%9D+in+the+equation+VI+%3D+0.3%28S%2Fa+%2B+b%29+for+soils+with+good+infiltration+rates%3F', '2', '3', '1', '4', '3', b'1'),
(112, 1, 10, 'What+is+the+value+of+%E2%80%9Cb%E2%80%9D+in+the+equation+VI+%3D+0.3%28S%2Fa+%2B+b%29+for+soils+of+low+infiltration+rates%3F', '2', '3', '1', '4', '4', b'1'),
(113, 1, 10, 'What+is+the+formula+for+Horizontal+interval%3F', 'HI+%3D+%28100+%2A+VI%29+%2F+S+', 'HI+%3D+%28100+%2B+VI%29+%2F+S+', 'HI+%3D+VI+%2F+%28100+%2BS%29+', 'HI+%3D+%28100-S%29+%2FS', 'HI = (100 * VI) / S ', b'1'),
(114, 1, 10, 'What+is+the+formula+for+length+of+bund+for+hectare%3F', '100+%2B+S+%2F+VI+', '100+%2A+S+%2FVI+', 'VI+%2A+100+%2FS+', '100+%E2%80%93+S+%2FVI', '100 * S /VI ', b'1'),
(115, 1, 10, 'Calculate+bund+length+per+hectare+for+a+land+slope+of+5+%25+for+soils+with+good+infiltration+rate%3F+', '420+m+', '480+m+', '470+m', '455+m', '455 m', b'1'),
(116, 1, 10, 'Calculate+bund+length+per+hectare+for+a+land+slope+of+9+%25+for+soils+of+low+infiltration+rate%3F+', '620+m+', '692+m+', '672+m+', '642+m', '692 m ', b'1'),
(117, 1, 10, 'What+is+the+formula+used+for+computation+of+the+height+of+bund+to+impound+runoff+from+24+hours+rain+storm%3F', '%E2%88%9A+Re+%2B+VI+%2F50+', '%E2%88%9A+Re+-+VI+%2F50+', '%E2%88%9A+Re+%2A+VI+%2F50+', '%E2%88%9A+Re+%2B50%2FVI', 'âˆš Re * VI /50 ', b'1'),
(118, 1, 10, 'What+is+width+of+berm+provided+generally+in+Contour+Bunding%3F', '30+cm+', '35+cm+', '32+cm+', '36+cm', '30 cm ', b'1'),
(119, 1, 10, 'What+is+the+formula+for+determination+of+total+length+of+the+bund+for+the+area+to+be+bunded%3F', 'Length+of+the+bund+per+hectare+x+Total+area+to+be+bunded+%28in+hectares%29', 'Length+of+the+bund+per+hectare+%2F+Total+area+to+be+bunded+%28in+hectares%29+', 'Length+of+the+bund+per+hectare+-+Total+area+to+be+bunded+%28in+hectares%29', 'Length+of+the+bund+per+hectare+%2B+Total+area+to+be+bunded+%28in+hectares%29', 'Length of the bund per hectare x Total area to be bunded (in hectares)', b'1'),
(120, 1, 10, 'What+is+the+formula+for+determination+of+volume+of+earth+work+for+the+Contour+bund%3F', 'Total+length+of+the+bund+for+the+area+to+be+bunded+%2F+Cross+sectional+area+of+bund', 'Total+length+of+the+bund+for+the+area+to+be+bunded+x+Cross+sectional+area+of+bund', 'Total+length+of+the+bund+for+the+area+to+be+bunded+%2B+Cross+sectional+area+of+bund+', 'Total+length+of+the+bund+for+the+area+to+be+bunded+-+Cross+sectional+area+of+bund', 'Total length of the bund for the area to be bunded x Cross sectional area of bund', b'1'),
(121, 1, 13, 'Farm+ponds+are+constructed+in%3F', 'Across+Drainage+line+', 'On+the+hill+slopes+', 'On+the+farmer%E2%80%99s+land+', 'Along+the+slope+of+drainage+line', 'On the farmerâ€™s land ', b'1'),
(122, 1, 13, 'Farm+Ponds+are+useful+for%3F', '+Protective+irrigation+for+Kharif+crops+', 'Protective+irrigation+for+Rabi+Crops+', 'Fish+farming+', 'All+the+above+', 'All the above ', b'1'),
(123, 1, 13, 'In+the+context+of+mixed+medium+hard+soil+with+soft+moorum%2C+kankar%2C+pebbles%2C+lead+up+to+24.4+m+%26+lift+up+to+1.5m+%28up+to+0.6m+depth+from+GL%29+for+a+farm+pond+size+of+14+m+x+6.3+m+x+0.60+m+%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+1.473+cu.m+%3F', '43', '42', '41', '45', '43', b'1'),
(124, 1, 13, 'Mixed+medium+hard+soil+with+soft+moorum%2C+kankar%2C+pebbles%2C+lead+up+to+24.4m+%26+up+to+1.5m+%28Next+0.6m+depth%29+for+a+farm+pond+size+of+12.8+m+x+6.3+m+x+0.60+m%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+1.473+cu.m%3F', '32', '33', '31', '35', '33', b'1'),
(125, 1, 13, 'Mixed+medium+hard+soil+with+soft+moorum%2C+kankar%2C+pebbles%2C+lead+up+to+24.4m+%26+lift+beyond+1.5mt+up+to+2.4m+%28next+0.3m+%3D+1.5m+depth+from+GL%29+for+a+farm+pond+size+of+11.6+m+x+5.1+m+x+0.30+m%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+1.473+cu.m%3F', '15', '12', '13', '14', '12', b'1'),
(126, 1, 13, 'Hard+soil%2Fhard+morrum%2C+laterite+or+rocky+soil%3B+lead+up+to+24.4m%2Clift+beyond+1.5m+up+to+2.4m+%28next+.3m+%3D+1.8m+depth+from+GL%29++for+a+farm+pond+size+of+11.6+m+x+5.1+m+x+0.30+m%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+1.077+cu.m%3F', '15', '12', '13', '16', '16', b'1'),
(127, 1, 13, 'Hard+soil%2Fhard+morrum%2C+laterite+or+rocky+soil%3B+lead+up+to+24.4m+lift+beyond+1.5m+up+to+2.4m+%28next+.6m+%3D+2.4m+depth+from+GL%29++for+a+farm+pond+size+of+10.4+m+x+3.9+m+x+0.60+m%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+1.077+cu.m%3F', '25', '22', '23', '26', '23', b'1'),
(128, 1, 13, 'Hard+soil%2Fhard+morrum%2C+laterite+or+rocky+soil%3B+lead+up+to+24m+%26+beyond+2.4m+up+to+3m+%28next+0.6m%3D+3m+depth+from+GL%29++for+a+farm+pond+size+of+9.20+m+x+2.7+m+x+0.60+m%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+1.020+cu.m%3F', '15', '12', '18', '16', '15', b'1'),
(129, 1, 13, 'Hard+Soil%2FLateritic+Soil%2C+lead+Up+to+24.4m+%26+lift+beyond+3m+up+to+3.5m+%28+next+0.45m+%3D+3.45m+depth+from+GL%29++for+a+farm+pond+size+of+8+m+x+1.5+m+x+0.45+m%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+1.020+cu.m%3F', '6', '5', '8', '3', '5', b'1'),
(130, 1, 13, 'Hard+Soil%2FLateritic+Soil%2C+lead+Up+to+80ft+%26+lift+beyond+11.5ft+up+to+4.57m+%28+next+0.15m+%3D+3.6m+depth+from+GL%29+for+a+farm+pond+size+of+8+m+x+1.5+m+x+0.15+m%2C+what+are+the+number+of+man-days+that+can+be+provided+if+task+per+man-day+is+0.992+cu.m%3F', '4', '5', '3', '2', '2', b'1'),
(131, 2, 12, 'The+quantity+of+water+that+can+be+drawn+from+a+well+is+known+as%3F', 'Yield+', 'Discharge+', 'Flow+', 'None+of+the+above', 'Yield ', b'1'),
(132, 2, 12, 'Depth+of+Dug+wells+go+below+the+water+table+in+dry+weather%3F', '3+%E2%80%93+9+m+', '2+%E2%80%93+5+m+', '4+%E2%80%93+10+m+', '8+%E2%80%93+15+m', '4 â€“ 10 m ', b'1'),
(133, 2, 12, 'The+vertical+distance+to+which+the+water+column+is+lowered+is+referred+to+as%3F+++', 'Radius+of+influence+', 'Drawdown+', 'Static+water+level', 'Aquifer', 'Drawdown ', b'1'),
(134, 2, 12, 'The+distance+from+the+centre+of+the+well+within+which+the+original+water+table+is+lowered+is+known+as%3F', 'Radius+of+influence+', 'Drawdown+', 'Static+water+level', 'Aquifer', 'Radius of influence ', b'1'),
(135, 2, 12, 'Hydraulic+conductivity+of+saturated+soil+is+measured+in+terms+of%3F', '+Centimeter', 'Meter', 'Sqaure+centimeter%2F+hour+', 'Centimeter+%2F+hour', 'Centimeter / hour', b'1'),
(136, 2, 12, 'Before+pumping+starts%2C+the+water+level+in+a+well+is+equal+to+the+elevation+of+the+water+table+and+this+level+is+known+as%3F', 'Radius+of+influence+', 'Drawdown+', 'Static+water+level', 'Aquifer', 'Static water level', b'1'),
(137, 2, 12, 'The+diameter+of+Dug+wells+usually+varies+from%3F', '+1.0+%E2%80%93+2.5+m+', '1.5+%E2%80%93+4.5+m+', '2.0+%E2%80%93+2.5+m+', '3.0+%E2%80%93+5.0+m', '1.5 â€“ 4.5 m ', b'1'),
(138, 2, 12, 'What+should+be+the+minimum+height+of+curb+in+the+dug+well+above+ground%3F', '30+cm+', '45+cm+', '60+cm+', '55+cm', '30 cm ', b'1'),
(139, 2, 12, 'Radius+of+Influence+in+the+soil+formation+and+texture+of+Coarse+sand+and+gravel+without+silt+and+clay+is%3F', '90-+180+m+', '180+%E2%80%93+360+', '360+%E2%80%93+450+m+', '300+%E2%80%93+600+m', '300 â€“ 600 m', b'1'),
(140, 2, 12, 'Radius+of+Influence+in+the+soil+formation+and+texture+of+Fine+to+medium+sand+layers+fairly+clean+and+free+from+silt+and+clay+is%3F', '90-+180+m+', '180+%E2%80%93+360+', '360+%E2%80%93+450+m+', '300+%E2%80%93+600+m', '90- 180 m ', b'1'),
(141, 2, 11, 'When+the+field+is+larger+in+size+big+and+to+minimize+earth+work%2C+then+the+field+has+to+be+divided+into+borders+of+width+of+about+', '20-30+m', '+30+%E2%80%93+40+m+', '45+%E2%80%93+60+m+', '55+%E2%80%93+60+m', '20-30 m', b'1'),
(142, 2, 11, 'For+land+leveling%2C+what+sizes+of+grids+have+to+be+made+in+the+field+for+topographical+surveying+depending+upon+the+surface+relief+of+the+area+%26+precision+required+in+leveling%3F', '2x2+m+or+5x5+m+or+10x10+m', '3x3+m+or+4x4+m+or+10x10+m', '5x5+m+or+15x15+m+or+20x20+m', '4x4+m+or+10x10+m+or+15x15+m', '4x4 m or 10x10 m or 15x15 m', b'1'),
(143, 2, 11, 'What+is+the+usual+size+of+wooden+stakes+should+be+used+at+the+grid+points%3F', '1+cm+x+3+cm+x+70+cm+%E2%80%93+1+m+%0A', '1+cm+x+2+cm+x+60+cm+%E2%80%93+1+m+%0A', '1+cm+x+4+cm+x+50+cm+%E2%80%93+1+m+%0A', '1+cm+x+5+cm+x+50+cm+%E2%80%93+1+m', '1 cm x 4 cm x 50 cm â€“ 1 m \n', b'1'),
(144, 2, 11, 'For+land+slope+of+0+-1+%25%2C+what+should+be+the+contour+interval+for+land+leveling%3F', '2+%E2%80%93+14+cm', '+5+%E2%80%93+15+cm+', '15+%E2%80%93+30+cm', '+30+%E2%80%93+60+cm', ' 5 â€“ 15 cm ', b'1'),
(145, 2, 11, 'For+land+slope+of+1+-2+%25%2C+what+should+be+the+contour+interval+for+land+leveling%3F', '2+%E2%80%93+14+cm', '+5+%E2%80%93+15+cm+', '15+%E2%80%93+30+cm', '+30+%E2%80%93+60+cm', '15 â€“ 30 cm', b'1'),
(146, 2, 11, 'For+land+slope+of+2+-5+%25%2C+what+should+be+the+contour+interval+for+land+leveling%3F', '20+%E2%80%93+30+cm+', '15+%E2%80%93+25+cm+', '15+%E2%80%93+30+cm', '+30+%E2%80%93+60+cm', ' 30 â€“ 60 cm', b'1'),
(147, 2, 11, 'For+land+slope+of+5+-10+%25%2C+what+should+be+the+contour+interval+for+land+leveling%3F', '60+%E2%80%93+150+cm', '+75+%E2%80%93+150+cm+', '150+%E2%80%93+300+cm', '+130+%E2%80%93160+cm', '60 â€“ 150 cm', b'1'),
(148, 2, 11, 'In+the+profile+of+the+border+strip+the+average+cut+is+0.30+m+and+the+width+of+the+border+is+30m+and+length+is+55m+then+the+volume+of+Earth+work+will+be%3F', '492+cubic+meter++', '495+cubic+meter+', '496+cubic+meter', '+497+cubic+meter', '495 cubic meter ', b'1'),
(149, 2, 11, 'SoR+for+land+leveling+for+the+area+should+be+worked+out+by+the+competent+authority+for+land+leveling+with+cut-fill+%2F+profile+method+after+conducting+what+study%3F', 'Time-+motion+Study', 'Capacity-+volume+method', 'Time-+Discharge+method', 'Cut+%E2%80%93+Fill+method', 'Time- motion Study', b'1'),
(150, 2, 11, 'Land+leveling+design+is+usually+done+using+what+method%3F', 'Profile+method%0A', 'Plan+inspection+method', 'Plane+method', 'Contour+adjustment+method', 'Plane method', b'1'),
(151, 3, 14, 'The+process+of+utilizing+and+processing+solid+waste+through+which+its+organic+component+is+biologically+decomposed+to+a+humus-like+state+that+can+be+used+as+fertilizer%3F', 'Organic+Fertilizer+', 'Inorganic+fertilizer+', 'Vermi+compost+', 'Composting', 'd', b'1'),
(152, 3, 14, 'What+size+of+compost+trough+can+produce+1+tonne+of+composted+manure+in+one+cycle%3F', '3.6+m+x+1.5+m+x+1.0+m+%0A', '3.0+m+x+1.2+m+x+1.0+m+', '3.3+m+x+1.6+m+x+1.1+m+', '3.5+m+x+1.4+m+x+1.3+m', 'a', b'1'),
(153, 3, 14, 'One+tonne+of+NADEP+Composted+manure+is+sufficient+to+cover+how+many+acres+of+agricultural+land%3F', '0.523', '0.546', '0.635', '0.675', 'c', b'1'),
(154, 3, 14, 'What+is+the+percentage+of+Nitrogen+in+NADEP+Composted+manure%3F', '+0.2+%E2%80%93+1.4+%25+', '0.5+%E2%80%93+1.5+%25', '+0.4+%E2%80%93+1.6+%25', '+0.3+%E2%80%93+1.5+%25', 'b', b'1'),
(155, 3, 14, 'What+is+the+percentage+of+Phosphorous+in+NADEP+Composted+manure%3F', '+0.2+%E2%80%93+1.4+%25+', '0.5+%E2%80%93+1.5+%25', '+0.4+%E2%80%93+1.6+%25', '0.5+%E2%80%93+0.9+%25', 'd', b'1'),
(156, 3, 14, 'What+is+the+percentage+of+Potassium+in+NADEP+Composted+manure%3F', '1.2+%E2%80%93+1.4+%25+', '1.3+%E2%80%93+1.5+%25+', '1.4+%E2%80%93+1.6+%25+', '1.5+%E2%80%93+1.9+%25', 'a', b'1'),
(157, 3, 14, 'As+per+the+general+estimation+done+by+NADEP+Method%2C+one+head+of+cattle+produce+how+many+tones+of+manure+in+a+year%3F', '65', '70', '80', '60', 'c', b'1'),
(158, 3, 14, 'What+is+period+within+which+NADEP+Composted+manure+will+be+ready+for+application+the+field%3F', '2+%E2%80%93+7+months+', '2+%E2%80%93+3+months+', '4+%E2%80%93+8+months+%0A', '5+%E2%80%93+7+months', 'b', b'1'),
(159, 3, 14, 'What+is+the+quantity+of+dung+mixed+with+a+3+inch+plastering+of+soil+to+seal+the+top+of+the+pile%3F', '200+%E2%80%93+250+Kgs+', '300+%E2%80%93+350+Kgs+%0A', '350+-450+Kgs+%0A', '400+%E2%80%93+500+Kgs+', 'd', b'1'),
(160, 3, 14, 'Why+NADEP+Pit+is+usually+constructed+with+a+lattice+brick+wall%3F', 'For+Aeration', 'For+Non-aeration+%0A', 'For+Slurry+preparation+%0A', 'To+avoid+foul+odour', 'a', b'1'),
(161, 3, 15, 'What+is+the+usual+pit+size+adopted+for+vermi+composting%3F', '3.6+m+%2A+1.5+m+%2A+0.76+m+%0A', '3.1+m+%2A+1.3+m+%2A+0.56+m+%0A', '3.0+m+%2A+1.1+m+%2A+0.35+m+%0A', '3.3+m+%2A+1.4+m+%2A+0.47+m+', 'a', b'1'),
(162, 3, 15, 'One+vermi+compost+pit+of+size+3.6+m+%2A+1.5+m+%2A+0.76+m+produces+how+may+tones+of+compost%3F', '0.25+tonnes+', '0.35+tonnes+', '0.45+tonnes+%0A', '0.15+tonnes', 'd', b'1'),
(163, 3, 15, 'One+vermin-compost+pit+size+of+3.6+m+%2A+1.5+m+%2A+0.76+m+which+produces+0.15+tonnes+which+will+be+sufficient+to+enhance+the+productivity+of+how+many+acres+of+land%3F', '0.33', '0.37', '0.39', '0.32', 'b', b'1'),
(164, 3, 15, 'What+is+the+quantity+of+vermin+compost+should+be+applied+in+the+case+of+general+use+for+agriculture+per+hectare%3F', '1+%E2%80%93+2+tonnes+%0A', '2+%E2%80%93+3+tonnes', '3+%E2%80%93+4+tonnes+%0A', '5+%E2%80%93+7+tonnes', 'c', b'1'),
(165, 3, 15, 'What+is+the+quantity+of+vermin+compost+should+be+applied+in+the+case+of+fruit+trees+%28per+tree%29%3F', '2+%E2%80%93+3+kgs+', '3+%E2%80%93+5+kgs+%0A', '5+%E2%80%93+7+kgs+%0A', '5+%E2%80%93+10+kgs', 'd', b'1'),
(166, 3, 15, 'What+is+the+quantity+of+vermin+compost+should+be+applied+in+the+case+of+vegetables+per+hectare%3F', '3+%E2%80%93+4+tonnes+', '2+%E2%80%93+3+tonnes+%0A', '1+%E2%80%93+2+tonnes+%0A', '5+%E2%80%93+7+tonnes', 'a', b'1'),
(167, 3, 15, 'What+is+the+quantity+of+vermin+compost+should+be+applied+in+the+case+of+flowers+per+hectare%3F', '250+%E2%80%93+350+kgs+', '500+%E2%80%93+750+kgs+%0A', '650+%E2%80%93+750+kgs+%0A', '500+%E2%80%93+1000+kgs', 'b', b'1'),
(168, 3, 15, 'Which+method+of+application+is+adopted+for+agricultural+crops+when+the+seedlings+are+12%E2%80%9315+cm+in+height+and+water+the+plants+normally%3F', 'Dibbling', 'Spraying+', 'Broadcasting', 'Sowing+', 'c', b'1'),
(169, 3, 15, 'For+flowers%2C+vegetables%2C+and+fruit+trees+how+vermicompost+is+applied%3F', 'Upper+portion+of+the+plant+', 'Lower+portion+of+the+plant+', 'Middle+portion+of+the+plant+', 'Around+the+base+of+the+plant', 'd', b'1'),
(170, 3, 15, 'Vermi+compost+contains+what+percentage+of+potassium%3F', '0.70%25', '0.80%25', '0.50+%25+%0A', '0.40%25', 'a', b'1'),
(171, 4, 16, 'SLWM+Stands+for%3F', 'Solid+and+Liquid+Watershed+Management', 'Solid+Waste+Management', 'Solid+and+Water+Management', 'Solid+and+Liquid+Waste+Management', 'Solid and Liquid Waste Management', b'1'),
(172, 4, 16, 'SLWM+involves+following+steps%3F', 'Collection+%C2%AE+Transportation+%C2%AE+Segregation++%C2%AE+Composting++%C2%AE+Disposal', 'Segregation+%C2%AE+Collection+%C2%AE+Transportation%C2%AE+Composting+%C2%AE+Disposal', 'Transportation%C2%AE+Collection%C2%AE+Segregation%C2%AE+Composting+%C2%AE+Disposal', 'Disposal+%C2%AE+Collection+%C2%AE+Transportation+%C2%AE+Segregation%C2%AE+Composting+', 'Collection Â® Transportation Â® Segregation  Â® Composting  Â® Disposal', b'1'),
(173, 4, 16, 'The+minimum+size+of+sanitary+land+fill+is+to+handle+how+many+tonnes+of+waste+per+day%3F', '120', '150', '250', '300', '250', b'1'),
(174, 4, 16, 'At+what+depth+water+should+be+kept+in+Anaerobic-cum-Sedimentation+Pond%3F', '15+feet', '10+feet', '12+feet', '18+feet', '10 feet', b'1'),
(175, 4, 16, 'At+what+depth+water+should+be+kept+in+Facultative+Pond%3F', '1.5+m', '1.2+m', '1.3+m', '1.4+m', '1.5 m', b'1'),
(176, 4, 16, 'At+what+depth+water+should+be+kept+in+Maturation%2F+Polishing+Pond%3F', '1.3+m', '1.2+m', '1.5+m', '1.4+m', '1.5 m', b'1'),
(177, 4, 16, 'Slope+of+the+pond+embankment+should+be+kept%3F', '1%3A1', '1%3A2', '1%3A3', '1%3A1.5', '1:1.5', b'1'),
(178, 4, 16, 'The+outlet+of+Facultative+pond+should+be+fixed+at+what+level+from+the+bed+of+tank%3F', '1.5+m', '1.2+m', '1.3+m', '1.8+m', '1.5 m', b'1'),
(179, 4, 16, 'The+outlet+of+Maturation%2F+Polishing+Pond+should+be+fixed+at+what+level+from+the+bed+of+tank%3F', '1.6+m', '1.5+m', '1.3+m', '1.8+m', '1.5 m', b'1'),
(180, 4, 16, 'On+an+average+if+the+garbage+produced+is+50+ton+per+day+in+a+village%2C+how+many+acres+of+land+required+to+handle+it%3F', '1.0', '1.5', '2.5', '3.0', '3.0', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `testresults`
--

CREATE TABLE IF NOT EXISTS `testresults` (
  `idTestResults` int(11) NOT NULL AUTO_INCREMENT,
  `userCourseTestID` int(11) DEFAULT NULL,
  `questionID` int(11) DEFAULT NULL,
  `result` varchar(45) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`idTestResults`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `testresults`
--

INSERT INTO `testresults` (`idTestResults`, `userCourseTestID`, `questionID`, `result`, `userId`, `status`) VALUES
(1, 1, 27, '233', 1, 'P'),
(2, 1, 96, 'Recharging ground water ', 1, 'P'),
(3, 1, 30, '32 m', 1, 'F'),
(4, 1, 90, '35 â€“ 45 cm ', 1, 'F'),
(5, 1, 17, 'Along the slope ', 1, 'F'),
(6, 1, 52, '0.20 m ', 1, 'F'),
(7, 1, 33, 'Medium Rainfall ', 1, 'F'),
(8, 1, 95, '1.2 to 1.5 ', 1, 'F'),
(9, 1, 92, '1.25 NSD ', 1, 'F'),
(10, 1, 9, '0.15', 1, 'F'),
(11, 1, 26, '16300 m', 1, 'F'),
(12, 1, 24, '2 â€“ 5 % ', 1, 'F'),
(13, 1, 30, '32 m', 1, 'F'),
(14, 1, 111, '2', 1, 'F'),
(15, 1, 113, 'HI = (100 * VI) / S ', 1, 'P'),
(16, 1, 50, '25%', 1, 'F'),
(17, 1, 88, 'Q   = 1.711 Lh3/2\n       (1.1 + 0.02 F)      ', 1, 'F'),
(18, 1, 23, 'L * HI ', 1, 'F'),
(19, 1, 4, 'Ridge area ', 1, 'F'),
(20, 1, 41, '18.20 m ', 1, 'F'),
(21, 1, 106, 'up to 12 % ', 1, 'F'),
(22, 1, 126, '15', 1, 'F'),
(23, 1, 16, 'Arable lands ', 1, 'F'),
(24, 1, 99, '30 â€“ 40 % ', 1, 'F'),
(25, 2, 138, '30 cm ', 1, 'P'),
(26, 2, 143, '1 cm x 3 cm x 70 cm â€“ 1 m \n', 1, 'F'),
(27, 2, 146, '20 â€“ 30 cm ', 1, 'F'),
(28, 2, 141, '20-30 m', 1, 'P'),
(29, 2, 135, 'Meter', 1, 'F'),
(30, 2, 140, '90- 180 m ', 1, 'P'),
(31, 2, 133, 'Drawdown ', 1, 'P'),
(32, 2, 141, '20-30 m', 1, 'P'),
(33, 2, 131, 'Yield ', 1, 'P'),
(34, 2, 148, '495 cubic meter ', 1, 'P'),
(35, 3, 159, '300 â€“ 350 Kgs \n', 1, 'F'),
(36, 3, 161, '3.3 m * 1.4 m * 0.47 m ', 1, 'F'),
(37, 3, 157, '65', 1, 'F'),
(38, 3, 156, '1.4 â€“ 1.6 % ', 1, 'F'),
(39, 3, 169, 'Upper portion of the plant ', 1, 'F'),
(40, 3, 162, '0.25 tonnes ', 1, 'F'),
(41, 3, 163, '0.37', 1, 'F'),
(42, 3, 164, '2 â€“ 3 tonnes', 1, 'F'),
(43, 3, 160, 'For Non-aeration \n', 1, 'F'),
(44, 3, 151, 'Inorganic fertilizer ', 1, 'F'),
(45, 4, 178, '1.5 m', 1, 'P'),
(46, 4, 175, '1.2 m', 1, 'F'),
(47, 4, 180, '1.0', 1, 'F'),
(48, 4, 173, '150', 1, 'F'),
(49, 4, 177, '1:1', 1, 'F'),
(50, 4, 175, '1.5 m', 1, 'P'),
(51, 4, 174, '10 feet', 1, 'P'),
(52, 4, 179, '1.5 m', 1, 'P'),
(53, 4, 171, 'Solid and Liquid Waste Management', 1, 'P'),
(54, 4, 173, '150', 1, 'F'),
(55, 4, 125, '12', 1, 'P'),
(56, 4, 158, '2 â€“ 3 months ', 1, 'F'),
(57, 4, 2, 'Arable lands ', 1, 'F'),
(58, 4, 13, 'Gabion structures ', 1, 'F'),
(59, 4, 5, 'Watershed ', 1, 'F'),
(60, 4, 126, '12', 1, 'F'),
(61, 4, 108, '30 â€“ 35 % ', 1, 'F'),
(62, 4, 177, '1:2', 1, 'F'),
(63, 0, 104, 'Maximum Flood Level + Full Reservoir Level ', 1, 'F'),
(64, 0, 38, '60m', 1, 'F'),
(65, 0, 124, '33', 1, 'P'),
(66, 0, 73, ' 651 m ', 1, 'P'),
(67, 0, 62, ' 4 â€“ 5 m ', 1, 'F'),
(68, 0, 130, '4', 1, 'F'),
(69, 0, 122, 'Fish farming ', 1, 'F'),
(70, 0, 174, '12 feet', 1, 'F'),
(71, 0, 13, 'Earthen dams ', 1, 'F'),
(72, 0, 180, '1.5', 1, 'F'),
(73, 0, 162, '0.45 tonnes \n', 1, 'F'),
(74, 0, 93, '0.473 (Q/f)1/3      ', 1, 'P'),
(75, 0, 124, '32', 1, 'F'),
(76, 0, 91, '35 â€“ 45 cm ', 1, 'F'),
(77, 0, 34, 'Number of SCT/Length of SCT  ', 1, 'F'),
(78, 0, 117, 'âˆš Re * VI /50 ', 1, 'P'),
(79, 0, 38, '60m', 1, 'F'),
(80, 0, 141, ' 30 â€“ 40 m ', 1, 'F'),
(81, 0, 144, '15 â€“ 30 cm', 1, 'F'),
(82, 0, 55, '65', 1, 'F'),
(83, 0, 171, 'Solid Waste Management', 1, 'F'),
(84, 0, 115, '455 m', 1, 'P'),
(85, 0, 131, 'Flow ', 1, 'F'),
(86, 0, 67, 'VI = S/10 +1.0 ', 1, 'F'),
(87, 0, 164, '3 â€“ 4 tonnes \n', 1, 'F'),
(88, 0, 115, '470 m', 1, 'F'),
(89, 0, 128, '15', 1, 'P'),
(90, 0, 149, 'Time- Discharge method', 1, 'F'),
(91, 0, 66, 'VI = S/10 + 3 ', 1, 'F'),
(92, 0, 176, '1.2 m', 1, 'F'),
(93, 0, 49, ' 2:1 ', 1, 'F'),
(94, 0, 25, '50 m', 1, 'F'),
(95, 0, 141, ' 30 â€“ 40 m ', 1, 'F'),
(96, 0, 1, 'Non-arable lands ', 1, 'P'),
(97, 0, 148, '492 cubic meter  ', 1, 'F'),
(98, 0, 72, '45 cm x 60 cm x 25 cm ', 1, 'F'),
(99, 0, 113, 'HI = VI / (100 +S) ', 1, 'F'),
(100, 0, 5, 'Ridge ', 1, 'P'),
(101, 0, 16, 'Arable lands ', 1, 'F'),
(102, 0, 52, '0.40 m ', 1, 'P'),
(103, 0, 148, '496 cubic meter', 1, 'F'),
(104, 0, 8, '1500 â€“ 10000 ha ', 1, 'F'),
(105, 0, 116, '692 m ', 1, 'P'),
(106, 0, 158, '2 â€“ 7 months ', 1, 'F'),
(107, 0, 165, '3 â€“ 5 kgs \n', 1, 'F'),
(108, 0, 91, '35 â€“ 45 cm ', 1, 'F'),
(109, 2, 143, '1 cm x 3 cm x 70 cm â€“ 1 m \n', 1, 'F'),
(110, 2, 147, ' 75 â€“ 150 cm ', 1, 'F'),
(111, 2, 131, 'Discharge ', 1, 'F'),
(112, 2, 146, '20 â€“ 30 cm ', 1, 'F'),
(113, 2, 144, '2 â€“ 14 cm', 1, 'F'),
(114, 2, 137, ' 1.0 â€“ 2.5 m ', 1, 'F'),
(115, 2, 133, 'Drawdown ', 1, 'P'),
(116, 2, 147, ' 75 â€“ 150 cm ', 1, 'F'),
(117, 2, 136, 'Radius of influence ', 1, 'F'),
(118, 2, 144, ' 5 â€“ 15 cm ', 1, 'P'),
(119, 2, 135, 'Meter', 1, 'F'),
(120, 2, 147, '60 â€“ 150 cm', 1, 'P'),
(121, 2, 134, 'Drawdown ', 1, 'F'),
(122, 2, 131, 'Discharge ', 1, 'F'),
(123, 2, 139, '180 â€“ 360 ', 1, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `usercourses`
--

CREATE TABLE IF NOT EXISTS `usercourses` (
  `idUserCourses` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `courseID` int(11) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idUserCourses`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usercoursetest`
--

CREATE TABLE IF NOT EXISTS `usercoursetest` (
  `idUserCourseTest` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `courseID` int(11) DEFAULT NULL,
  `testType` varchar(11) DEFAULT NULL,
  `testTaken` bit(1) DEFAULT NULL,
  `ExamDate` date NOT NULL,
  `questionResults` varchar(45) NOT NULL,
  `marksResults` varchar(11) NOT NULL,
  `ExamStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`idUserCourseTest`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `usercoursetest`
--

INSERT INTO `usercoursetest` (`idUserCourseTest`, `userID`, `courseID`, `testType`, `testTaken`, `ExamDate`, `questionResults`, `marksResults`, `ExamStatus`) VALUES
(14, 2, 1, 'Pre Test', b'1', '2015-05-26', '2/5', '8/20', 'FAILED'),
(16, 1, 1, 'Pre Test', b'1', '2015-06-03', '0/6', '0/20', 'FAILED'),
(17, 1, 1, 'Assessment', b'1', '2015-06-03', '0/8', '0/20', 'FAILED'),
(18, 1, 2, 'Pre Test', b'1', '2015-06-03', '2/5', '8/20', 'PASSED'),
(19, 1, 2, 'Assessment', b'1', '2015-06-03', '5/5', '20/20', 'PASSED'),
(20, 1, 3, 'Pre Test', b'1', '2015-06-03', '0/5', '0/20', 'PASSED'),
(21, 1, 3, 'Assessment', b'1', '2015-06-03', '0/5', '0/20', 'PASSED'),
(22, 1, 4, 'Pre Test', b'1', '2015-06-03', '1/5', '4/20', 'PASSED'),
(23, 1, 4, 'Assessment', b'1', '2015-06-03', '4/5', '16/20', 'PASSED'),
(30, 1, 0, 'Final Test', b'1', '2015-06-03', '2/8', '5/20', 'FAILED'),
(31, 1, 2, 'Assessment', b'1', '2015-06-03', '0/5', '0/20', 'PASSED'),
(32, 1, 2, 'Assessment', b'1', '2015-06-03', '2/5', '8/20', 'PASSED'),
(33, 1, 2, 'Assessment', b'1', '2015-06-03', '1/5', '4/20', 'PASSED');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `idUserLogin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `idUserRegistration` int(11) DEFAULT NULL,
  `OTPCode` varchar(45) NOT NULL,
  `OTPCount` int(11) NOT NULL,
  PRIMARY KEY (`idUserLogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`idUserLogin`, `username`, `password`, `active`, `idUserRegistration`, `OTPCode`, `OTPCount`) VALUES
(1, 'Administrator', '5f4dcc3b5aa765d61d8327deb882cf99', b'0', 1, '562187', 0),
(2, 'Test', '5f4dcc3b5aa765d61d8327deb882cf99', b'0', 2, '973859', 0),
(3, NULL, NULL, NULL, 3, '772443', 0),
(5, NULL, NULL, NULL, 5, '341985', 0),
(6, NULL, NULL, NULL, 6, '662532', 0),
(7, 'QWERT', '90aeede6f574e23a826130b60386afb0', b'0', 7, '993647', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE IF NOT EXISTS `userregistration` (
  `idUserRegistration` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `staffID` varchar(45) NOT NULL,
  `emailID` varchar(45) DEFAULT NULL,
  `state` varchar(55) NOT NULL,
  `designation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUserRegistration`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`idUserRegistration`, `firstName`, `lastName`, `mobile`, `staffID`, `emailID`, `state`, `designation`) VALUES
(1, 'Super', 'Administrator', '9160869337', '1234', 'qwert@qwert.com', 'Andhra Pradesh', 'Web Manager'),
(2, 'Super', 'Tester', '9959747954', '12345', 'xd@asd.com', 'Andhra Pradesh', 'Quality Manager'),
(7, 'QWERT', 'QWERT', '9291532292', '12345', 'kpnaveenkumar007@gmail.com', 'Andhra Pradesh', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `uservisitedcourse`
--

CREATE TABLE IF NOT EXISTS `uservisitedcourse` (
  `viewId` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(45) NOT NULL,
  `date` varchar(10) NOT NULL,
  `startTime` varchar(10) NOT NULL,
  `status` varchar(45) NOT NULL,
  `userId` int(11) NOT NULL,
  `IPAddress` varchar(16) NOT NULL,
  PRIMARY KEY (`viewId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uservisitedcourse`
--

INSERT INTO `uservisitedcourse` (`viewId`, `course`, `date`, `startTime`, `status`, `userId`, `IPAddress`) VALUES
(1, 'Natural Resources Management', '07/06/2015', '12:44:55pm', 'Page Visited', 2, '175.101.18.19%0A'),
(2, 'Natural Resources Management', '09/06/2015', '12:31:34pm', 'Page Visited', 2, '---'),
(3, 'Natural Resources Management', '09/06/2015', '12:32:58pm', 'Downloaded Contour Bunding', 2, '---'),
(4, 'Natural Resources Management', '09/06/2015', '05:06:23pm', 'Page Visited', 2, '183.82.1.68%0A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
