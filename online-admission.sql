-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2021 at 01:02 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `front_admin`;
CREATE TABLE IF NOT EXISTS `front_admin` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `front_admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `status` varchar(44) NOT NULL,
  `date_admission` varchar(22) NOT NULL,
  `applicationID` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`ID` , `fullname` , `gender`, `phone` , `email` , `state` , `course` ,`status` , `date_admission` , `applicationID`) VALUES
('1' , 'Vaishnavi Kumari', 'Female', 9454100776, 'vaishnavisahu23feb@gmail.com', 'Uttar Pradesh', 'Engineering', '0', '2022-05-09', 'ADM/2022/21071');

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('6274c9864e15c' , '6274c98692344'),
('6274c986e287e' , '6274c986f0342'),
('6274c9873a528' , '6274c9875d7b0'),
('6274c987b0014' , '6274c987bc74f'),
('6274c987f2e73' , '6274c9880c30f'),
('6274c9886d5d5' , '6274c9887f301'),
('6274c988caa1b' , '6274c988d465d'),
('6274c9891fbcc' , '6274c9893c4db'),
('6274c9897a902' , '6274c98985cb4'),
('6274c989bb821' , '6274c989cc1c5'),
('6274cc0ec9e63' , '6274cc0f12109'),
('6274cc0f6496c' , '6274cc0f72fe8'),
('6274cc0fc584b' , '6274cc0fd36f6'),
('6274cc1053832' , '6274cc10dbfea'),
('6274cc113966d' , '6274cc114c721'),
('6274cc11812ee' , '6274cc118a760'),
('6274cc11e5495' , '6274cc1201bf9'),
('6274cc125157c' , '6274cc125e487'),
('6274cc129bcf5' , '6274cc12a8818'),
('6274cc130fec5' , '6274cc1319ef0'),
('6274f2b753009' , '6274f2b766889'),
('6274f2b7a73b2' , '6274f2b7b237a'),
('6274f2b7e57ca' , '6274f2b80c33a'),
('6274f2b87df8d' , '6274f2b8873ff'),
('6274f2b8d1f61' , '6274f2b8eec58'),
('6274f2b967c49' , '6274f2b97205b'),
('6274f2b9a3577' , '6274f2b9ad5a1'),
('6274f2ba49c03' , '6274f2ba56726'),
('6274f2ba8802a' , '6274f2ba91c6c'),
('6274f2baca6b9' , '6274f2bad3f14'),
('62792f318a9a3' , '62792f31aa573'),
('62792f31db2b3' , '62792f31e9d14'),
('62792f3227b9c' , '62792f324023c'),
('62792f3277124' , '62792f3283474'),
('62792f32d781d' , '62792f32e627d'),
('62792f33444b1' , '62792f337f9f7'),
('62792f33e148e' , '62792f33edbc9'),
('62792f342b675' , '62792f3435a87'),
('62792f34707fd' , '62792f347d708'),
('62792f34b1b04' , '62792f34baf76');


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('6274ccf90f5c9', 'Vaishnavi', 'vaishnavisahu23feb@gmail.com', 'Good questions', 'The questions are really good', '2022-05-06','09:23:37am');


-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--
-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('6274c9864e15c' , 'Diamond' , '6274c98691b73'),
('6274c9864e15c' , 'Graphite' , '6274c98691f5b'),
('6274c9864e15c' , 'Glass' , '6274c98692344'),
('6274c9864e15c' , 'Common Salt' , '6274c9869272c'),
('6274c986e287e' , 'Sulphur' , '6274c986eff59'),
('6274c986e287e' , 'Styrene' , '6274c986f0342'),
('6274c986e287e' , 'Sodium' , '6274c986f072a'),
('6274c986e287e' , 'Salicylate' , '6274c986f0b12'),
('6274c9873a528' , '+1' , '6274c9875d7b0'),
('6274c9873a528' , '0' , '6274c9875db98'),
('6274c9873a528' , '-1' , '6274c9875df80'),
('6274c9873a528' , 'All of these' , '6274c9875e369'),
('6274c987b0014' , 'Dolomite' , '6274c987bc367'),
('6274c987b0014' , 'Bauxite' , '6274c987bc74f'),
('6274c987b0014' , 'Hematite' , '6274c987bcb37'),
('6274c987b0014' , 'None of these' , '6274c987bcf1f'),
('6274c987f2e73' , 'Size of orbitals' , '6274c9880bb3e'),
('6274c987f2e73' , 'Shape of orbitals' , '6274c9880bf26'),
('6274c987f2e73' , 'Orientation of orbitals' , '6274c9880c30f'),
('6274c987f2e73' , 'Nuclear stability' , '6274c9880c6f7'),
('6274c9886d5d5' , 'Absolute energy' , '6274c9887eb31'),
('6274c9886d5d5' , 'Absolute enthalpy' , '6274c9887ef19'),
('6274c9886d5d5' , 'Absolute entropy' , '6274c9887f301'),
('6274c9886d5d5' , 'Absolute free energy' , '6274c9887f6ea'),
('6274c988caa1b' , '64.0' , '6274c988d465d'),
('6274c988caa1b' , '32.0' , '6274c988d4a45'),
('6274c988caa1b' , '40' , '6274c988d4e2e'),
('6274c988caa1b' , '80' , '6274c988d5216'),
('6274c9891fbcc' , 'C≡C' , '6274c9893c4db'),
('6274c9891fbcc' , 'C=C' , '6274c9893c8c3'),
('6274c9891fbcc' , 'C-C' , '6274c9893ccab'),
('6274c9891fbcc' , 'All of these' , '6274c9893d093'),
('6274c9897a902' , 'Copper(|) metaborate is colorless' , '6274c98985cb4'),
('6274c9897a902' , 'Copper(||) metaborate is colorless' , '6274c9898609c'),
('6274c9897a902' , 'Copper(||) metaborate is lightgreen' , '6274c98986484'),
('6274c9897a902' , 'Copper(|) metaborate is darkgreen' , '6274c9898686c'),
('6274c989bb821' , '2' , '6274c989cbddd'),
('6274c989bb821' , '0.5' , '6274c989cc1c5'),
('6274c989bb821' , '5' , '6274c989cc5ad'),
('6274c989bb821' , '1' , '6274c989cc995'),
('6274cc0ec9e63' , 'Shell Script' , '6274cc0f11551'),
('6274cc0ec9e63' , 'Variables' , '6274cc0f11939'),
('6274cc0ec9e63' , 'Loop' , '6274cc0f11d21'),
('6274cc0ec9e63' , 'Process' , '6274cc0f12109'),
('6274cc0f6496c' , 'Heart' , '6274cc0f72c00'),
('6274cc0f6496c' , 'Brain' , '6274cc0f72fe8'),
('6274cc0f6496c' , 'Eyes' , '6274cc0f733d0'),
('6274cc0f6496c' , 'None of these' , '6274cc0f737b8'),
('6274cc0fc584b' , 'Output Device' , '6274cc0fd2f26'),
('6274cc0fc584b' , 'Storage Device' , '6274cc0fd330e'),
('6274cc0fc584b' , 'Input Device' , '6274cc0fd36f6'),
('6274cc0fc584b' , 'None of the above' , '6274cc0fd3ade'),
('6274cc1053832' , 'RAM' , '6274cc10dbfea'),
('6274cc1053832' , 'ROM' , '6274cc10dc3d2'),
('6274cc1053832' , 'Hard Disk' , '6274cc10dc7ba'),
('6274cc1053832' , 'All of the above' , '6274cc10dcba2'),
('6274cc113966d' , 'Transistors' , '6274cc114c339'),
('6274cc113966d' , 'Integrated Circuits' , '6274cc114c721'),
('6274cc113966d' , 'Resistors' , '6274cc114cb09'),
('6274cc113966d' , 'None of the above' , '6274cc114cef1'),
('6274cc11812ee' , 'Comments' , '6274cc118a760'),
('6274cc11812ee' , 'Identifiers' , '6274cc118ab48'),
('6274cc11812ee' , 'Literals' , '6274cc118af30'),
('6274cc11812ee' , 'Operators' , '6274cc118b318'),
('6274cc11e5495' , 'Special Literals' , '6274cc1201811'),
('6274cc11e5495' , 'Boolean Literals' , '6274cc1201bf9'),
('6274cc11e5495' , 'Numeric Literals' , '6274cc1201fe1'),
('6274cc11e5495' , 'String Literals' , '6274cc12023c9'),
('6274cc125157c' , 'Shell script' , '6274cc125d8ce'),
('6274cc125157c' , 'Command' , '6274cc125dcb6'),
('6274cc125157c' , 'PID' , '6274cc125e09f'),
('6274cc125157c' , 'Process' , '6274cc125e487'),
('6274cc129bcf5' , 'Class' , '6274cc12a8818'),
('6274cc129bcf5' , 'Object' , '6274cc12a8c00'),
('6274cc129bcf5' , 'Method' , '6274cc12a8fe8'),
('6274cc129bcf5' , 'All of the above' , '6274cc12a93d0'),
('6274cc130fec5' , 'Worth' , '6274cc1319720'),
('6274cc130fec5' , 'Cost' , '6274cc1319b08'),
('6274cc130fec5' , 'Value' , '6274cc1319ef0'),
('6274cc130fec5' , 'Property' , '6274cc131a2d8'),
('6274f2b753009' , '3775' , '6274f2b766889'),
('6274f2b753009' , '3557' , '6274f2b767c11'),
('6274f2b753009' , '3757' , '6274f2b768f99'),
('6274f2b753009' , '3575' , '6274f2b76a321'),
('6274f2b7a73b2' , '121' , '6274f2b7b0ff2'),
('6274f2b7a73b2' , '11' , '6274f2b7b237a'),
('6274f2b7a73b2' , '12' , '6274f2b7b3702'),
('6274f2b7a73b2' , '21' , '6274f2b7b4a8a'),
('6274f2b7e57ca' , 'n' , '6274f2b80afb2'),
('6274f2b7e57ca' , 'n!' , '6274f2b80c33a'),
('6274f2b7e57ca' , '2n' , '6274f2b80d6c2'),
('6274f2b7e57ca' , '2n!' , '6274f2b80ea4a'),
('6274f2b87df8d' , '1' , '6274f2b8873ff'),
('6274f2b87df8d' , '0' , '6274f2b887bcf'),
('6274f2b87df8d' , '1-A' , '6274f2b887fb7'),
('6274f2b87df8d' , '1+A' , '6274f2b88839f'),
('6274f2b8d1f61' , '9' , '6274f2b8eec58'),
('6274f2b8d1f61' , '10' , '6274f2b8ef040'),
('6274f2b8d1f61' , '13' , '6274f2b8ef428'),
('6274f2b8d1f61' , '12' , '6274f2b8ef810'),
('6274f2b967c49' , 'Reflexive and symmetric' , '6274f2b9714a3'),
('6274f2b967c49' , 'Transitive and symmetric' , '6274f2b97188b'),
('6274f2b967c49' , 'Equivalence' , '6274f2b971c73'),
('6274f2b967c49' , 'Reflexive, transitive but not symmetric' , '6274f2b97205b'),
('6274f2b9a3577' , '2a' , '6274f2b9acdd1'),
('6274f2b9a3577' , '3a' , '6274f2b9ad1b9'),
('6274f2b9a3577' , '4a' , '6274f2b9ad5a1'),
('6274f2b9a3577' , '5a' , '6274f2b9ad989'),
('6274f2ba49c03' , '5' , '6274f2ba55f56'),
('6274f2ba49c03' ,'1' , '6274f2ba5633e'),
('6274f2ba49c03' , '7' , '6274f2ba56726'),
('6274f2ba49c03' , '12' , '6274f2ba56b0e'),
('6274f2ba8802a' , '2' , '6274f2ba91884'),
('6274f2ba8802a' , '8/3' , '6274f2ba91c6c'),
('6274f2ba8802a' , '2/3' , '6274f2ba92054'),
('6274f2ba8802a' , 'None of these' , '6274f2ba9243c'),
('6274f2baca6b9' , '0.32' , '6274f2bad3f14'),
('6274f2baca6b9' , '0.25' , '6274f2bad42fc'),
('6274f2baca6b9' , '0.1' , '6274f2bad46e4'),
('6274f2baca6b9' , '0.5' , '6274f2bad4acc'),
('62792f318a9a3' , 'Zero charges' , '62792f31a91eb'),
('62792f318a9a3' , 'Point charges' , '62792f31aa573'),
('62792f318a9a3' , 'Single charge' , '62792f31ab8fb'),
('62792f318a9a3' , 'No charges' , '62792f31acc83'),
('62792f31db2b3' , 'Infrared waves' , '62792f31e7604'),
('62792f31db2b3' , 'Microwaves' , '62792f31e898c'),
('62792f31db2b3' , 'Gamma rays' , '62792f31e9d14'),
('62792f31db2b3' , 'Radio waves' , '62792f31eb09c'),
('62792f3227b9c' , 'Dyne' , '62792f323c7a4'),
('62792f3227b9c' , 'Volt' , '62792f323db2c'),
('62792f3227b9c' , 'Ohm' , '62792f323eeb4'),
('62792f3227b9c' , 'Tesla' , '62792f324023c'),
('62792f3277124' , 'Dynamo' , '62792f3283474'),
('62792f3277124' , 'Transformer' , '62792f32847fc'),
('62792f3277124' , 'Electric Motor' , '62792f3285b84'),
('62792f3277124' , 'Choke Coil' , '62792f3286f0c'),
('62792f32d781d' , '12 Ω' , '62792f32e3b6d'),
('62792f32d781d' , '120 Ω' , '62792f32e4ef5'),
('62792f32d781d' , '12 kΩ' , '62792f32e627d'),
('62792f32d781d' , '2 Ω' , '62792f32e7605'),
('62792f33444b1' , 'Ernst Rutherford' , '62792f337f227'),
('62792f33444b1' , 'Albert Einstein' , '62792f337f60f'),
('62792f33444b1' , 'J.J Thompson' , '62792f337f9f7'),
('62792f33444b1' , 'Neils Bohr' , '62792f337fddf'),
('62792f33e148e' , 'By decreasing the width of the slit' , '62792f33ed7e1'),
('62792f33e148e' , 'By reducing the separation of slits' , '62792f33edbc9'),
('62792f33e148e' , 'By reducing the wavelength of the slits' , '62792f33edfb1'),
('62792f33e148e' , 'By decreasing the distance between slits and the screen' , '62792f33ee399'),
('62792f342b675' , '1' , '62792f3434ecf'),
('62792f342b675' , '2' , '62792f34352b7'),
('62792f342b675' , '3' , '62792f343569f'),
('62792f342b675' , '4' , '62792f3435a87'),
('62792f34707fd' , '100 W' , '62792f347cb50'),
('62792f34707fd' , '200 W' , '62792f347cf38'),
('62792f34707fd' , '20 W' , '62792f347d320'),
('62792f34707fd' , '500 W' , '62792f347d708'),
('62792f34b1b04' , 'Geostationary satellite' , '62792f34baf76'),
('62792f34b1b04' , 'Geo satellite', '62792f34bb35e'),
('62792f34b1b04' , 'Gravitational satellite' , '62792f34bb746'),
('62792f34b1b04' , 'Stationary satellite' , '62792f34bbb2e');
-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('6274c640738d1' , '6274c9864e15c' , 'Which one of the following is non-crystalline or amorphous?' , 4 , 1),
('6274c640738d1' , '6274c986e287e' , 'The S in buna-S refers to:' , 4 , 2),
('6274c640738d1' , '6274c9873a528' , 'Oxidation number of gold metal is:' , 4 , 3),
('6274c640738d1' , '6274c987b0014' , 'Ore of aluminium is:' , 4 , 4),
('6274c640738d1' , '6274c987f2e73' , 'The magnetic quantum number specifies:' , 4 , 5),
('6274c640738d1' , '6274c9886d5d5' , 'Third law of thermodynamics provides a method to evaluate which property?' , 4 , 6),
('6274c640738d1' , '6274c988caa1b' , 'The rate of diffusion methane is twice that of X. The molecular mass of X is:' , 4 , 7),
('6274c640738d1' , '6274c9891fbcc' , 'Hydrocarbon containing following bond is most reactive?' , 4 , 8),
('6274c640738d1' , '6274c9897a902' , 'Which of the following statement is correct?' , 4 , 9),
('6274c640738d1' , '6274c989bb821' , 'The number of moles present in 6 gms of carbon is:' , 4 , 10),
('6274c9c2dde66' , '6274cc0ec9e63' , 'In Linux, all programs are executed as:' , 4 , 1),
('6274c9c2dde66' , '6274cc0f6496c' , 'CPU is called ________ of computer.' , 4 , 2),
('6274c9c2dde66' , '6274cc0fc584b' , 'Device which feed data into the computer are called_____.' , 4 , 3),
('6274c9c2dde66' , '6274cc1053832' , 'Data entered through input device is temporarily stored in____.' , 4 , 4),
('6274c9c2dde66' , '6274cc113966d' , 'The size of computer drastically reduced because of _____.' , 4 , 5),
('6274c9c2dde66' , '6274cc11812ee' , 'Which of the following is not a token?' , 4 , 6),
('6274c9c2dde66' , '6274cc11e5495' , 'Which of the following literal has either true or false value?' , 4 , 7),
('6274c9c2dde66' , '6274cc125157c' , '______ is a program loaded into memory and running.' , 4 , 8),
('6274c9c2dde66' , '6274cc129bcf5' , 'Which of the following is used to define common features of similar objects?' , 4 , 9),
('6274c9c2dde66' , '6274cc130fec5' , 'To uniquely distinguish one person from the other, the _____ of its characteristics is used.' , 4 , 10),
('6274e83b3a932' , '6274f2b753009' , 'The sum of arithmetic progression 2, 5, 8, …, up to 50 terms is:' , 4 , 1),
('6274e83b3a932' , '6274f2b7a73b2' , 'If the variance of the data is 121, the standard deviation of the data is:' , 4 , 2),
('6274e83b3a932' , '6274f2b7e57ca' , 'The value of P(n, n-1) is:' , 4 , 3),
('6274e83b3a932' , '6274f2b87df8d' , 'If A is a square matrix such that A2 = A, then (I – A)3 + A is equal to:' , 4 , 4),
('6274e83b3a932' , '6274f2b8d1f61' , 'Find the mean of 6, 7, 10, 12, 13, 4, 8, 12.' , 4 , 5),
('6274e83b3a932' , '6274f2b967c49' , 'Let R be a relation on the set N of natural numbers defined by nRm if n divides m. Then R is:' , 4 , 6),
('6274e83b3a932' , '6274f2b9a3577' , 'If y = ax2+b, then dy/dx at x = 2 is equal to:' , 4 , 7),
('6274e83b3a932' , '6274f2ba49c03' , 'The magnitude of the vector 6i + 2j + 3k is equal to:' , 4 , 8),
('6274e83b3a932' , '6274f2ba8802a' , 'What is the value of 0∫2 x2 dx?' , 4 , 9),
('6274e83b3a932' , '6274f2baca6b9' , 'If P (A) = 0.8, P (B) = 0.5 and P (B|A) = 0.4, what is the value of P (A ∩ B)?' , 4 , 10),
('627927ff24877' , '62792f318a9a3' , 'If the sizes of charged bodies are very small compared to the distances between them, we treat them as _____.' , 4 , 1),
('627927ff24877' , '62792f31db2b3' , 'Which of the following waves have a maximum  frequency?' , 4 , 2),
('627927ff24877' , '62792f3227b9c' , 'The SI unit of the magnetic field is ________.' , 4 , 3),
('627927ff24877' , '62792f3277124' , 'An alternating current can be produced by a:' , 4 , 4),
('627927ff24877' , '62792f32d781d' , 'What is the resistance of a human body?' , 4 , 5),
('627927ff24877' , '62792f33444b1' , 'The first model of the atom was proposed by:' , 4 , 6),
('627927ff24877' , '62792f33e148e' , 'How can the fringe width increase in Young’s double-slit experiment?' , 4 , 7),
('627927ff24877' , '62792f342b675' , 'The number of electrons in the valence shell of a semiconductor is:' , 4 , 8),
('627927ff24877' , '62792f34707fd' , 'What is the power utilized when work of 1000 J is done in 2 seconds?' , 4 , 9),
('627927ff24877' , '62792f34b1b04' , 'The satellite having the same time period of revolution as that of the earth is called _______.' , 4 , 10);
-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('6274c640738d1', 'Chemistry', 2 , 0 , 10 , '10' , 'chemistry' , 'chemistry', '2022-05-06 12:24:56'),
('6274c9c2dde66', 'Computer' , 2 , 0 , 10 , '10' , 'computer' , 'computer' , '2022-05-06 12:39:54'),
('6274e83b3a932', 'Mathematics' , 2 , 0 , 10 , '10' , 'math' , 'math' , '2022-05-06 12:49:42'),
('627927ff24877', 'Physics' , 2 , 0 , 10 , '10' , 'physics' , 'physics' , '2022-05-06 12:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `school` varchar(100) NOT NULL,
  `percentage` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY(`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`,`name`,`fname`, `gender`, `school`,`percentage`, `email`, `mob`, `password`) VALUES
('1','Vaishnavi Kumari', 'Mahesh Kumar Sahu', 'F', 'Bishop George School', '78%', 'vaishnavisahu23feb@gmail.com', 9454100776, '6141c805fa55a910521deca13030590d');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);





ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;