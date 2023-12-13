-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ott`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_Id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_Id`, `fname`, `sname`, `email`, `message`) VALUES
(2, 'jgvch', 'shdkkk', '123@gmail.com', '12334'),
(4, 'jcgjg', 'rhyr', 'majorjay78@gmail.com', 'jgcvhvch');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackt`
--

CREATE TABLE `feedbackt` (
  `FID` int(11) NOT NULL,
  `Feedname` varchar(100) DEFAULT NULL,
  `Feedemail` varchar(200) DEFAULT NULL,
  `Feedsubject` varchar(200) DEFAULT NULL,
  `Feedback` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbackt`
--

INSERT INTO `feedbackt` (`FID`, `Feedname`, `Feedemail`, `Feedsubject`, `Feedback`) VALUES
(5, 'John Doe', 'john.doe@ott.com', 'Effective Teaching Techniques', 'I found the training on effective teaching techniques extremely helpful. The content was well-structured and easy to understand. The practical examples provided great insights and will definitely enhance my teaching skills.'),
(6, 'Jane Smith', 'jane.smith@ott.com', 'Classroom Management Strategies', 'The training on classroom management strategies exceeded my expectations. The instructor was knowledgeable and engaging, and the interactive activities kept me engaged throughout. I gained valuable techniques that I can apply in my classroom.'),
(7, 'David Johnson', 'david.johnson@ott.com', 'Innovative Instructional Methods', 'The training on innovative instructional methods was a game-changer for me. It introduced me to new approaches that I had not considered before. The resources provided were comprehensive, and I am excited to incorporate these methods into my teaching.'),
(8, 'Sarah Williams', 'sarah.williams@ott.com', 'Assessment and Feedback Practices', 'I highly recommend the training on assessment and feedback practices. It was well-paced and covered a wide range of assessment strategies. The practical tips for providing constructive feedback were particularly valuable.'),
(9, 'Michael Brown', 'michael.brown@ott.com', 'Technology Integration in the Classroom', 'The training on technology integration in the classroom was excellent. It showcased various tools and platforms that can enhance student engagement and learning outcomes. The step-by-step tutorials were easy to follow, even for someone with limited tech skills.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `userID` int(11) NOT NULL,
  `cardholder_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `card_number` int(20) NOT NULL,
  `exp_date` text DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`userID`, `cardholder_name`, `email`, `card_number`, `exp_date`, `cvv`, `notes`) VALUES
(10, 'kaniya', 'kanishkagunarathne@gmail.com', 2147483647, '22/2222', 222, 'Updated bro'),
(11, 'Manujaya Jr', 'manujayaJr@gmail.com', 2147483647, '31/2025', 332, 'Fine and Thanks'),
(12, 'Roanldo', 'ronaldo@gmail.com', 2147483647, '08/2023', 887, 'Cool and Satisfied.'),
(13, 'Thimesha', 'thimeshaansar@gmail.com', 2147483647, '05/2025', 667, 'Good'),
(15, 'Amasha', 'Amasha@gmail.com', 2147483647, '08/2024', 888, 'Fine'),
(16, 'jayani', 'jayani@gmail.com', 2147483647, '05/2023', 888, 'gg'),
(17, 'Kamal', 'kamal@gmail.com', 2147483647, '06/2023', 999, 'jjj'),
(19, 'Bruno', 'Bruno@gmail.com', 2147483647, '08/2022', 666, 'llll'),
(25, 'THIS', 'tishara@gmail.com', 2147483647, '999999999999999', 99999999, 'updated tish'),
(26, 'danuka nalindu', 'danuka123@gmail.com', 666666, '11/2024', 666, 'Updated the name,card number and cvv'),
(30, 'gig', 'gg@gmail.com', 2147483647, '33/3333', 333, 'up');

-- --------------------------------------------------------

--
-- Table structure for table `subjecttable`
--

CREATE TABLE `subjecttable` (
  `subjectId` int(50) NOT NULL,
  `teacherName` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `courseName` varchar(500) NOT NULL,
  `structure` varchar(50) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `student_level` enum('Beginner','Intermediate','Advanced','Mixed') NOT NULL,
  `subjectName` enum('Maths','Science','English','History','IT') NOT NULL,
  `investment` varchar(50) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `dasunimagepath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjecttable`
--

INSERT INTO `subjecttable` (`subjectId`, `teacherName`, `bio`, `courseName`, `structure`, `duration`, `student_level`, `subjectName`, `investment`, `logo`, `dasunimagepath`) VALUES
(10, 'Chandler Bing', 'As a passionate mathematics instructor, I am committed to helping students explore the fascinating world of numbers and problem-solving. Through our comprehensive math course, you will delve into various mathematical concepts, from foundational arithmetic to advanced calculus. Develop critical thinking and analytical skills necessary to excel in exams or pursue a successful career in STEM fields. Join our course and unlock your mathematical potential.', 'Mathematics', '12 Lessons', '8 Months', 'Advanced', 'Maths', 'Rs.12000', 'image/logo4.png', 'image/mathsTeacher.jpg'),
(13, 'Ross Geller', 'Welcome to our captivating science course, where we embark on a journey to unravel the mysteries of the natural world. As an enthusiastic science educator, I aim to foster a deep understanding of scientific principles through engaging lessons and hands-on experiments. Explore the realms of biology, chemistry, and physics, and cultivate a scientific mindset to approach challenges with curiosity and evidence-based thinking. Join us and discover the wonders of science.', 'Science', '10 Lessons', '10 Months', 'Advanced', 'Science', 'Rs.10000', 'image/logo7.png', 'image/scienceTeacher.jpg'),
(14, 'Luke Hobbs', 'I am an experienced English teacher dedicated to guiding students in achieving their language goals. With a love for English and a commitment to an engaging learning environment, I tailor my approach to meet individual needs. Through interactive lessons and clear explanations, I equip students with confident communication skills. Let\'s unlock your potential together!', 'English', '7 Lessons', '8 Months', 'Advanced', 'English', 'Rs.8000', 'image/logo6.png', 'image/englishTeacher.jgp');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `UserId` int(10) NOT NULL,
  `UFName` varchar(50) NOT NULL,
  `ULName` varchar(50) NOT NULL,
  `UEmail` varchar(50) NOT NULL,
  `Upw` varchar(50) NOT NULL,
  `Udob` date NOT NULL,
  `Unic` varchar(20) NOT NULL,
  `Ugender` varchar(11) NOT NULL,
  `UQualification` varchar(100) NOT NULL,
  `Umobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`UserId`, `UFName`, `ULName`, `UEmail`, `Upw`, `Udob`, `Unic`, `Ugender`, `UQualification`, `Umobile`) VALUES
(57, 'manuja', 'perera', 'd@gmail.com ', '123', '2023-06-30', '2 ', 'male ', 'good', 999999999),
(58, 'dasun', 'himsara', 'dd@gmai.com ', '123', '2023-06-08', '2 ', 'male ', 'aaa', 713380000),
(59, 'a', 'ffdf', 'a@gmail.com ', '123', '2023-06-14', '887887887 ', 'male ', 'ddd', 1234567890),
(60, 'coursecreator', 'coursecreator', 'coursecreator@gmail.com ', '123', '2023-06-21', '200228801120 ', 'male ', 'Dasun', 713380934),
(61, 'itmanager', 'itmanager', 'itmanager@gmail.com ', '1234', '2023-06-01', '222222222222 ', 'male ', 'itmanager', 2147483647),
(62, 'hrmanager', 'hrmanager', 'hrmanager@gmail.com ', '12345', '2023-06-20', '200212121212 ', 'male ', 'hrmanager', 111231231),
(63, 'admin', 'manujaya', 'maujaya@gmail.com ', '123', '2023-06-08', '2582582582 ', 'male ', 'admin', 773892872);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_Id`);

--
-- Indexes for table `feedbackt`
--
ALTER TABLE `feedbackt`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `subjecttable`
--
ALTER TABLE `subjecttable`
  ADD PRIMARY KEY (`subjectId`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedbackt`
--
ALTER TABLE `feedbackt`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subjecttable`
--
ALTER TABLE `subjecttable`
  MODIFY `subjectId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
