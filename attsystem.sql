
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `class`
--

-- --------------------------------------------------------
--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `stat_id` varchar(10) NOT NULL,
  `s_course` varchar(20) NOT NULL,
  `t_subject` varchar(20) NOT NULL,
  `st_status` varchar(20) NOT NULL,
  `stat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_userid` varchar(10) NOT NULL,
  `s_name` 	text NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `s_course` varchar(30) NOT NULL,
  `roll` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `batch_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_userid`, `s_name`, `s_email`, `year`, `s_course`, `roll`,`sem`,`batch_id`) VALUES
('priya20','Priya Sarkar','priya@gmail.com',2020,'MCA',208201,3,'MCA20'),
('sounak20','Sounak Saha','sounak@gmail.com',2020,'MCA',208205,3,'MCA20'),
('supriya19','Supriya Roy','supriya@gmail.com',2019,'BTech',195201,5,'BTech19'),
('raja19','Raja Das','raja@gmail.com',2019,'BTech',195202,5,'BTech19'),
('arpita20','Arpita Ghosh','arpita@gmail.com',2020,'MCA',208206,3,'MCA20'),
('tina20','Tina Majumder','tina@gmail.com',2020,'MCA',208202,3,'MCA20'),
('rahul22','Rahul Dey','rahul@gmail.com',2020,'MTech',207204,3,'MTech20'),
('divankit20','Divankit Sha','divankit@gmail.com',2020,'MCA',208203,3,'MCA20'),
('abhishek22','Abhishek Sarkar','abhishek@gmail.com',2020,'MTech',207202,3,'MTech20'),
('sumon19','Sumon Singh','sumon@gmail.com',2019,'BTech',195202,5,'BTech19'),
('shreya20','Shreya Dutta','shreya@gmail.com',2020,'MCA',208208,3,'MCA20'),
('souptik20','Souptik Dutta','souptik@gmail.com',2020,'MCA',208209,3,'MCA20');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `t_userid` varchar(10) NOT NULL,
  `t_name` text NOT NULL,
  `t_email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `t_course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_userid`, `t_name`, `t_email`,`phone`,`t_course`) VALUES
('souvik10','Souvik Basu','souvik@gmail.com','7865432890','MCA'),
('anirban11','Anirban Kundu','anirban@gmail.com','9165432970','MCA'),
('sandipan13','Sandipan Ganguly','sandipan@gmail.com','9865432881','MCA'),
('bijoy20','Bijoy Basak','bijoy@gmail.com','6965432901','B.Tech'),
('gautam30','Gautam Kundu','gautam@gmail.com','9185432210','M.Tech');

-- --------------------------------------------------------
--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`s_userid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`t_userid`);

