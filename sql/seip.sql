-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 10:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passward` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `passward`) VALUES
(1, 'admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `messege` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `firstname`, `lastname`, `mail`, `mobile`, `subject`, `messege`) VALUES
(1, 'mahbub', 'rahman', 'meh@gmail.com', 1829493782, 'SEO', 'i want get adminssinon'),
(2, 'Mahbub', 'Rahman', 'mahbub500@gmail.com', 1829493782, 'Eos eum nostrum pos', 'fggdg'),
(3, 'Mahbub', 'Rahman', 'mahbub500@gmail.com', 1829493782, 'Eos eum nostrum pos', 'fdfd'),
(4, 'Mahbub', 'Rahman', 'mahbub500@gmail.com', 1829493782, 'Eos eum nostrum pos', 'fdfd'),
(5, 'Mahbub', 'Rahman', 'mahbub500@gmail.com', 1829493782, 'Eos eum nostrum pos', 'fdfd'),
(6, 'Mahbub', 'Rahman', 'mahbub500@gmail.com', 1829493782, 'Eos eum nostrum pos', 'fdfd'),
(7, 'Mahbub', 'Rahman', 'mahbub500@gmail.com', 1829493782, 'Eos eum nostrum pos', 'fdfd'),
(8, 'maruf', 'Rahman', 'admin@gmail.com', 1829493782, 'Eos eum', 'ghhfghfgh'),
(9, 'maruf', 'Rahman', 'admin@gmail.com', 1829493782, 'Eos eum', 'ghhfghfgh');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `titles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `titles`) VALUES
(1, 'Web App Develop-PHP'),
(2, 'Mobile App Develop'),
(3, 'Digital Marketing Course'),
(4, 'Graphics & Web UI design'),
(5, 'Web Design'),
(6, 'Practical SEO'),
(7, 'Affiliate Marketing'),
(8, 'Web App Develop-Dot Net'),
(10, 'SEO');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
  `employee_salary` double NOT NULL COMMENT 'employee salary',
  `employee_age` int(11) NOT NULL COMMENT 'employee age'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `employee_salary`, `employee_age`) VALUES
(1, 'Tiger Nixon', 320800, 61),
(2, 'Garrett Winters', 170750, 63),
(3, 'Ashton Cox', 86000, 66),
(4, 'Cedric Kelly', 433060, 22),
(5, 'Airi Satou', 162700, 33),
(6, 'Brielle Williamson', 372000, 61),
(7, 'Herrod Chandler', 137500, 59),
(8, 'Rhona Davidson', 327900, 55),
(9, 'Colleen Hurst', 205500, 39),
(10, 'Sonya Frost', 103600, 23),
(11, 'Jena Gaines', 90560, 30),
(12, 'Quinn Flynn', 342000, 22),
(13, 'Charde Marshall', 470600, 36),
(14, 'Haley Kennedy', 313500, 43),
(15, 'Tatyana Fitzpatrick', 385750, 19),
(16, 'Michael Silva', 198500, 66);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `subjects` varchar(1000) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `answers` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `subjects`, `questions`, `answers`) VALUES
(114, 'Questions about PHP', 'What is PHP? ', 'answer is PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.'),
(115, 'Questions about PHP', 'What does PHP stand for?', 'PHP stands for PHP: Hypertext Preprocessor. This confuses many people because the first word of the acronym is the acronym. This type of acronym is called a recursive acronym.'),
(117, 'Questions about HTML', 'Why is XHTML needed? Isn\'t HTML good enough?', 'HTML is probably the most successful document markup language in the world. But when XML was introduced, a two-day workshop was organised to discuss whether a new version of HTML in XML was needed. '),
(118, 'Questions about HTML', 'What are the advantages of using XHTML rather than HTML?', 'If your document is just pure XHTML 1.0 (not including other markup languages) then you will not yet notice much difference. However as more and more XML tools become available, such as XSLT for tranforming documents, you will start noticing the advantages of using XHTML.'),
(119, 'Questions about JavaScript', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) NOT NULL,
  `titles` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `icons` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `titles`, `descriptions`, `icons`) VALUES
(1, 'Generate New Idea', 'Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give.Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give.Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give.', 'fa fa-bolt'),
(2, 'Boost Your Ideas', 'Boost Your Ideas If you want to give your creativity a in many new ideas, do something you\'ve never done before. This is your chance. This is anything you\'ve always thought you\'d. If you want to give your creativity a big boost, bringing Boost Your Ideas If you want to give your creativity a big boost, bringing in many new ideas, do in many new ideas, do something you\'ve never done before. This is your chance. This is anything you\'ve always thought you\'d. If you want to give your creativity a big boost, bringing Boost Your Ideas If you want to give your creativity a big boost, bringing in many new ideas, do big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anything you\'ve always thought you\'d. If you want to give your creativity a big boost, bringing Boost Your Ideas If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anything you\'ve always thought you\'d. If you want to give your creativity a big boost, bringing. Boost Your Ideas If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anything you\'ve always thought you\'d. If you want to give your creativity a big boost, bringing', 'fa fa-drupal'),
(3, 'Award Winning Activites', 'You will get awards for you deeds. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth.You will get awards for you deeds. Learn about the awards presented to our learning. You will get awards for you deeds. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth.You will get awards for you deeds. Learn about the awards presented to our learning. You will get awards for you deeds. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth.You will get awards for you deeds. Learn about the awards presented to our learning. You will get awards for you deeds. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth.You will get awards for you deeds. Learn about the awards presented to our learning You will get awards for you deeds. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth.You will get awards for you deeds. Learn about the awards presented to our learning You will get awards for you deeds. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth.You will get awards for you deeds. Learn about the awards presented to our learning   ', 'fa fa-trophy'),
(4, 'Job Placement', 'After completing the course we will provide support for your job. This will give a better future to you. We provide real time learning method that helps individualu to make their own path After completing the course we will provide support for your job. TAfter completing the course we will provide support for your job. This will give a better future to you. We provide real time learning method that helps individualu to make their own path After completing the course we will provide support for your job.After completing the course we will provide support for your job. This will give a better future to you. We provide real time learning method that helps individualu to make their own path After completing the course we will provide support for your job.After completing the course we will provide support for your job. This will give a better future to you. We provide real time learning method that helps individualu to make their own path After completing the course we will provide support for your job.After completing the course we will provide support for your job. This will give a better future to you. We provide real time learning method that helps individualu to make their own path After completing the course we will provide support for your job.After completing the course we will provide support for your job. This will give a better future to you. We provide real time learning method that helps individualu to make their own path After completing the course we will provide support for your job.', 'fa fa-briefcase'),
(5, 'Boost Your Carrer', 'Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing Need a better carrer. If you want to give your creativity a big boost, bringing in many new ideas, do something you\'ve never done before. This is your chance. This is anythingNeed a better carrer. If you want to give your creativity a big boost, bringing ', 'fa fa-line-chart'),
(7, 'Stipend for you', 'You will get stipend from us if you can <b>pass</b> all exam . Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth.You will get stipend from us. Learn about the awards presented. You will get stipend from us. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth. You will get stipend from us. Learn about the awards presented to our learning will get stipend from us. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth. High will get stipend from us. Learn about the awards presented to our learning will get stipend from us. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth. High will get stipend from us. Learn about the awards presented to our learning will get stipend from us. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth. High will get stipend from us. Learn about the awards presented to our learning will get stipend from us. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth. High qualityYou will get stipend from us. Learn about the awards presented to our learning activYou will get stipend from us. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth. High qualityYou will get stipend from us. Learn about the awards presented to our learning activYou will get stipend from us. Learn about the awards presented to our learning activities and workshops in recognition of their high quality and huge breadth. High qualityYou will get stipend from us. Learn about the awards presented to our learning activ', 'fa fa-money');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `subjects` text NOT NULL,
  `descriptions` text NOT NULL,
  `sender_seip_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `subjects`, `descriptions`, `sender_seip_id`) VALUES
(2, 'Need some additional facilities.', 'Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.Need some additional facilities.', 111113),
(7, 'We need some practice hour', 'We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.                ', 111112),
(8, 'Need some additional facilities.', 'We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.We need some practice hour.        ', 111112);

-- --------------------------------------------------------

--
-- Table structure for table `maping_tables`
--

CREATE TABLE `maping_tables` (
  `id` int(10) NOT NULL,
  `students_id` int(10) NOT NULL,
  `courses_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maping_tables`
--

INSERT INTO `maping_tables` (`id`, `students_id`, `courses_id`) VALUES
(3, 1, 4),
(13, 6, 4),
(26, 4, 1),
(36, 28, 1),
(40, 7, 4),
(41, 31, 1),
(44, 2, 6),
(46, 32, 5),
(47, 5, 10),
(48, 29, 10),
(49, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `date_publish` date NOT NULL,
  `subjects` text NOT NULL,
  `descriptions` text NOT NULL,
  `sender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date_publish`, `subjects`, `descriptions`, `sender`) VALUES
(1, '2017-06-07', ' DRAMATICS COMPETITION - AUDITION', 'An Interschool Dramatics Competition will be held on 30-08-2014 at Nalanda Hall. An audition will be held to select students for the school team. Interested candidates may give their names to the undersigned. The details of the audition are given below:\r\nDate: 07-08-2014\r\nTime: 10.30 am', 'Bitm'),
(2, '2017-06-06', '  DRAMATICS COMPETITION - AUDITION', 'An Interschool Dramatics Competition will be held on 30-08-2014 at Nalanda Hall. An audition will be held to select students for the school team. Interested candidates may give their names to the undersigned. The details of the audition are given below:\r\nDate: 07-08-2014\r\nTime: 10.30 am', 'Bitm Authorization'),
(4, '2021-09-03', 'fgdfg', '                rrr', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `seip_course`
--

CREATE TABLE `seip_course` (
  `id` int(10) NOT NULL,
  `titles` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `icons` varchar(255) NOT NULL,
  `times` date NOT NULL,
  `trainers` varchar(255) NOT NULL,
  `prerequisite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seip_course`
--

INSERT INTO `seip_course` (`id`, `titles`, `descriptions`, `icons`, `times`, `trainers`, `prerequisite`) VALUES
(1, 'Web App Dev-PHP', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework  ', 'fa fa-joomla', '2017-06-30', 'MD. ABU TALEB.', 'Must have the basic knowledge on HTML & CSS.'),
(2, 'Web Design', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-css3', '2017-06-30', 'MD. ABU MAHMUD.', 'Must have the basic knowledge on HTML & CSS.'),
(3, 'Graphics & Web UI design', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-laptop', '2017-06-30', 'MD. ABU MUSA.', 'Must have the basic knowledge on HTML & CSS. And basic php.'),
(4, 'Practical SEO', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-search', '2017-06-30', 'MD. ABU MAHMUD.', 'Must have the basic knowledge on HTML & CSS.'),
(5, 'Affiliate Marketing', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-code', '2017-06-30', 'MD. ABU MUSA.', ' Must have the basic knowledge on HTML & CSS. And basic php.'),
(6, 'Mobile App Develop', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-android', '2017-06-30', 'MD. ABU MUSA.', 'Must have the basic knowledge on HTML & CSS. And basic php.');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `seip_id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `certified` varchar(255) NOT NULL,
  `is_varefied` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `Birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `seip_id`, `name`, `father_name`, `mother_name`, `gender`, `nid`, `email`, `course`, `batch_name`, `certified`, `is_varefied`, `image`, `amount`, `education`, `Birth`) VALUES
(2, 111112, 'Faisal jamil', 'Abbas ahmed', 'Noor Begum', 'Male', '323456', 'abc@gmail.com', 'Digital Marketing Course', '', 'no', 0, '', 0, '', '2021-09-28'),
(3, 111113, 'Faisal minhaz', 'Abbas uddin', 'Noor jahan', 'Male', '223456', 'aabc@gmail.com', 'Practical SEO', 'G-52', 'yes', 0, '', 0, '', '2021-09-28'),
(4, 111114, 'Jahan minhaz', 'jahan uddin', 'fatema jahan', 'Male', '423456', 'dac@gmail.com', 'Web App Develop- PHP n', 'seo-51', 'no', 0, '', 0, '', '2021-09-28'),
(5, 111115, 'Abu minhaz', 'Ahmed ali', 'fatema noor', 'Male', '523456', 'eac@gmail.com', 'Web App Develop- PHP', 'Web-51', 'no', 0, '', 0, '', '2021-09-28'),
(6, 111116, 'Salauddin', 'Md Abu', 'Salea Katun', 'Male', '6123456', 'salauddin@gmail.com', 'Web App Develop- PHP', 'G-52', 'no', 0, '', 0, '', '2021-09-28'),
(7, 111117, 'Nasrin Simu', 'Mohammad Ali', 'Julekha Bugum', 'Female', '7123456789', 'simu@gma.com', 'Digital Marketing Course', 'G-52', 'no', 0, '', 0, '', '2021-09-28'),
(29, 1124, 'Faisal ahmed (Update)', 'Abbas ali', 'Fathema', 'Male', '8765432109', 'ahmed@gmail.com', 'Web App Develop- PHP', '', 'yes', 0, '', 0, '', '2021-09-28'),
(34, 0, 'Mahbubur Rahman', 'Sheikh Mohi Uddin', 'Halima Khatun', 'Male', '6004174006', 'admin@gmail.com', '', '', '', 0, '0001.jpg', 500, 'HSC', '2021-09-28'),
(35, 0, 'Mahbubur Rahman', 'Sheikh Mohi Uddin', 'Halima Khatun', 'Male', '5091684984', 'admin@gmail.com', '', '', '', 0, '0001.jpg', 500, 'HSC', '2021-09-28'),
(37, 0, 'Mahbubur Rahman', 'Sheikh Mohi Uddin', 'Halima Khatun', 'Male', '60041', 'admin@gmail.com', '', '', '', 0, '0001.jpg', 500, 'HSC', '2021-09-28'),
(40, 0, 'Maruf Rahman', 'Sheikh Mohi Uddin', 'Halima Khatun', 'Male', '6004174', 'admin@gmail.com', 'Mobile App Develop', '', '', 0, '0001.jpg', 500, 'HSC', '2021-09-28'),
(41, 0, 'sanjida (upd)', 'Sheikh Mohi Uddin', 'Halima Khatun', 'Female', '32686094', 'admin@gmail.com', 'Practical SEO', '', '', 0, 'MEHIDE-001.jpg', 1000, 'HSC', '2021-09-28'),
(42, 0, 'Maruf Rahman', 'Sheikh Mohi Uddin', 'Halima Khatun', 'Female', '43514643467', 'admin@gmail.com', 'Web Design', '', '', 0, 'M.jpg', 1000, 'HSC', '2021-09-08'),
(45, 0, 'Mahbubur Rahman', 'Sheikh Mohi Uddin', 'Halima Khatun', 'Female', '32686', 'admin@gmail.com', 'Web Design', '', '', 0, 'singcopy.jpg', 10, 'HSC', '2021-09-28'),
(46, 0, 'sanjida (update) new', 'korim', 'rohim', 'Female', '60041740', 'admin@gmail.com', 'Mobile App Develop', '', '', 0, '001.jpg', 100, 'HSC', '2021-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `emails` varchar(255) NOT NULL,
  `phones` varchar(255) NOT NULL,
  `educations` text NOT NULL,
  `experiences` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `image`, `names`, `emails`, `phones`, `educations`, `experiences`) VALUES
(41, 'IMG_20200415_015731.jpg', 'Mian Zadid Rusdid', 'rusdid@gmail.com', '0123456789', ' Biochemistry from Dhaka University.', ''),
(42, 'mimsir.jpg', 'Neamat Khan Mim', 'mim@mail.com', '0123456789', 'Graduation in CSE from BRAC University.', 'Assitant Trainer, Responsive Web Design, Cake PHP Framework. is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(43, 'fahimsir.jpg', 'MD. Fahim Ahmed', 'fahimahmed@mail.com', '0123456789', 'Graduation in CSE from AIUB University.', 'Assistant Trainer, Responsive Web Design Bootstrap.is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(50, 'Minhaz.png', 'hello', 'ho@gmai.com', '46555555', 'took a galley of type and scrambled', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(58, 'IMG_20200415_015731.jpg', 'Mahbubur Rahman ', 'mahbub@gmail.com', '6526', 'HSc', 'ffghfdh'),
(59, 'mahbub.jpg', 'Mahbubur Rahman ', 'mahbub@gmail.com', '018294937825', 'Web Developlent from IDB.', 'Head Of Department. Lead Trainer, PHP With Laravel Framework.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `seip_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passward` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `seip_id`, `name`, `email`, `passward`) VALUES
(1, 11111, 'Faisal jamil', 'abc@gmail.com', '123456'),
(2, 111113, 'Faisal minhaz', 'aabc@gmail.com', '0123456789'),
(3, 111114, 'Jahan minhaz', 'dac@gmail.com', '0123456'),
(4, 111115, 'Abu minhaz ', 'eac@gmail.com', '0123456');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `link`) VALUES
(1, 'Learn HTML', 'https://www.youtube.com/embed/9gTw2EDkaDQ'),
(2, 'Learn Php', 'http://www.youtube.com/embed?v=yMclPkD4sQg&list=PLS1QulWo1RIZc4GM_E04HCPEd_xpcaQgg'),
(3, 'Learn Leravel', 'https://www.youtube.com/embed/a8ZpAf_tNh0?list=PL3ZhWMazGi9IYymniZgqwnYuPFDvaEHJb');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(11) NOT NULL,
  `titles` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `icons` varchar(255) NOT NULL,
  `times` date NOT NULL,
  `trainers` varchar(255) NOT NULL,
  `prerequisite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `titles`, `descriptions`, `icons`, `times`, `trainers`, `prerequisite`) VALUES
(1, 'Web Design Course', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework   ', 'fa fa-html5', '2021-09-03', 'MD. ABU TALEB.', 'Must have the basic knowledge on HTML & CSS.'),
(2, 'CSS3 Workshop', 'Expected Benefits to the Sector:                            After completion of this course the participant will be able to do                            Design and build websites using HTML 5 and CSS 3.                            Work with Forms, Canvas, Audio, Flash, Video and downloadable content.                            Web graphics, logo, banner, graphics optimization and Hosting.                            Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-css3', '2021-09-03', 'MD. ABU MAHMUD.', 'Must have the basic knowledge on HTML & CSS.'),
(3, 'Php Workshop', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-joomla', '2021-09-03', 'MD. ABU MUSA.', 'Must have the basic knowledge on HTML & CSS. And basic php.'),
(4, 'SEO Workshop', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework', 'fa fa-search', '2021-09-03', 'MD. ABU MAHMUD.', 'Must have the basic knowledge on HTML & CSS.'),
(5, 'Laravel Workshop', 'Expected Benefits to the Sector: After completion of this course the participant will be able to do Design and build websites using HTML 5 and CSS 3. Work with Forms, Canvas, Audio, Flash, Video and downloadable content. Web graphics, logo, banner, graphics optimization and Hosting. Java Script, JQuery, Project Management, Bootstrap Framework.', 'fa fa-code', '2021-09-03', 'MD. ABU MUSA.', 'Must have the basic knowledge on HTML & CSS. And basic php.'),
(13, 'Android Workshop', 'As the class of 2017 makes the official transition to adulthood and the working world, they\'ll be showered with congratulations—and gifts. Why not make your present something that will help them take those big steps in stride?\r\nSure, you could buy gifts purely for the sake of fun. But if you want to give your grad a career boost (or help them find a job period), it\'s best to aim for handy things they\'ll actually use. We asked human resources experts to suggest practical, truly thoughtful gifts that will help the new college grads in your life launch their careers.\r\nWith so much emphasis on technology, grads might not think about the analog items they\'ll need, experts point out.', 'fa fa-android', '2021-09-02', 'MD. ABU MUSA.', 'Must have the basic knowledge on HTML & CSS. And basic php.'),
(14, 'Boost Your Ideas According Plan', '                Boost Your Ideas According Plan.Boost Your Ideas According PlanBoost Your Ideas According Plan.Boost Your Ideas According PlanBoost Your Ideas According Plan.Boost Your Ideas According PlanBoost Your Ideas According PlanBoost Your Ideas According Plan.Boost Your Ideas According PlanBoost Your Ideas According PlanBoost Your Ideas According Plan.Boost Your Ideas According PlanBoost Your Ideas According PlanBoost Your Ideas According Plan.Boost Your Ideas According PlanBoost Your Ideas According Plan', 'fa fa-joomla', '2021-09-03', 'Boost Your Ideas According Plan', 'Boost Your Ideas According Plan');

-- --------------------------------------------------------

--
-- Table structure for table `workshops_registration`
--

CREATE TABLE `workshops_registration` (
  `id` int(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fatherName` varchar(100) NOT NULL,
  `motherName` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `nid` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Is_verify` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshops_registration`
--

INSERT INTO `workshops_registration` (`id`, `course`, `email`, `name`, `fatherName`, `motherName`, `mobile`, `nid`, `gender`, `Is_verify`) VALUES
(2, 'Web Design Course', 'admin@gmail.com', 'Mahbubur Rahman', 'Sheikh Mohi Uddin', 'Halima Khatun', '01515297025', 2147483647, 'Male', 1),
(3, 'Web Design Course', 'admin@gmail.com', 'Faded SkyBlu ', 'korim', 'rohim', '01515297025', 2147483647, 'Male', 1),
(6, 'Android Workshop', 'mahubmr500@gmail.com', 'Mahbubur Rahman', 'Rasel', 'rohim', '01515297025', 60041740, 'Male', 1),
(9, 'SEO Workshop', 'maruf@gmail.com', 'Maruf Rahman', 'Saleh Ahmed', 'Nur Hasna', '01829493782', 2147483647, 'Male', 0),
(10, 'CSS3 Workshop', 'mahubmr500@gmail.com', 'Maruf Rahman', 'Saleh Ahmed', 'Halima Khatun', '01515297025', 60041740, 'Male', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maping_tables`
--
ALTER TABLE `maping_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seip_course`
--
ALTER TABLE `seip_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nid` (`nid`,`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshops_registration`
--
ALTER TABLE `workshops_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `maping_tables`
--
ALTER TABLE `maping_tables`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seip_course`
--
ALTER TABLE `seip_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `workshops_registration`
--
ALTER TABLE `workshops_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
