-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 09:28 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(25) NOT NULL,
  `email` varchar(999) NOT NULL,
  `pass` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_date` date NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `topics` varchar(255) NOT NULL,
  `file` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `s_name`, `s_date`, `class`, `subject`, `s_email`, `st_email`, `topics`, `file`) VALUES
(3, 'Tamanna Tithy', '2019-07-25', '9', 'math', 'tithy@gmail.com', 'jhon@gmail.com', 'new one ', '59990632_373915986558824_6569667699213860864_n.jpg'),
(4, 'Tamanna', '2019-07-26', '9', 'science', 'tithy@gmail.com', 'jhon@gmail.com', 'new one ', '50431367_781645128882451_1508560653734903808_n.jpg'),
(5, 'Tamanna Tithy', '2019-07-25', '9', 'Bangladesh & Global Studies ', 'tithy@gmail.com', 'acd@gmail.com', 'new one ', 'Assfile/1551791989-1539522035-Job Application Form.doc'),
(6, 'ami', '2019-07-25', '9', 'Bangladesh & Global Studies ', 'ami09876@gmail.com', 'acd@gmail.com', '2nd one ', 'Assfile/65318151_1260345197472207_2435359766659203072_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `file` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `class`, `subject`, `author`, `t_email`, `file`) VALUES
(1, '9', 'Mathematics ', 'jhon smith', 'jhon@gmail.com', 'amenacvSchool.pdf'),
(2, '4', 'math', 'jhon', 'acd@gmail.com', 'amenaCV (1).pdf'),
(3, '2', 'English ', 'jhon', 'jhon@gmail.com', 'amena_cv.pdf'),
(5, '1', 'English ', 'jhon', 'jhon@gmail.com', 'bank probashi.pdf'),
(6, '4', 'Math', 'asd asd ', 'acd@gmail.com', 'amena_cv.pdf'),
(9, 'ssc', 'math', 'asd asd', 'acd@gmail.com', 'book/amena_cv.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(200) NOT NULL,
  `from_user_id` int(200) NOT NULL,
  `chat_message` varchar(300) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 4, 'hi', '2019-09-04 13:09:00', 0),
(2, 1, 4, 'hi', '2019-09-04 13:09:00', 0),
(3, 4, 1, 'hello', '2019-09-06 14:40:29', 0),
(4, 5, 1, 'hello there \nHow are you?', '2019-09-04 10:46:05', 0),
(5, 1, 5, 'I am fine. what about you?', '2019-09-04 10:46:04', 0),
(6, 5, 1, 'Cool ', '2019-09-04 10:46:05', 0),
(7, 5, 1, 'ok', '2019-09-04 10:46:20', 0),
(8, 1, 5, 'thank you', '2019-09-04 13:08:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum_users`
--

CREATE TABLE `forum_users` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `replies` int(255) NOT NULL,
  `score` int(255) NOT NULL,
  `topics` int(255) NOT NULL,
  `image` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_users`
--

INSERT INTO `forum_users` (`id`, `user`, `pass`, `email`, `replies`, `score`, `topics`, `image`) VALUES
(1, 'asdasdasd', 'asdasdasd', 'asd@gmail.com', 0, 0, 0, '14.png'),
(2, 'tithy0987', '12345678', 'tithy@gmail.com', 0, 0, 0, '13.png'),
(3, 'qweqweqwe', 'qweqweqwe', 'qwe@gmail.com', 0, 0, 0, '10.png'),
(4, 'tamanna', '12345678', 'tamanna@gmail.com', 0, 0, 0, '65318151_1260345197472207_2435359766659203072_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_email` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `replies_id` int(11) NOT NULL,
  `replies_name` varchar(255) NOT NULL,
  `replies_content` varchar(999) NOT NULL,
  `replies_creator` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`replies_id`, `replies_name`, `replies_content`, `replies_creator`, `date`) VALUES
(1, '', '1st reply from tamanna ', 'tamanna', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `class`, `subject`) VALUES
(1, 'ssc', 'math'),
(3, '5', 'Bangladesh & Global Studies '),
(4, '1', 'English '),
(5, '1', 'Bangla'),
(6, 'ssc', 'science'),
(7, '1', 'Mathematics '),
(8, '2', 'Bangla'),
(9, '2', 'Math'),
(10, '2', 'English '),
(11, '4', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `topic_content` varchar(2000) NOT NULL,
  `topic_creator` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`, `topic_content`, `topic_creator`, `date`) VALUES
(1, 'hello this is the first post ', 'hello this is the first post  hello this is the first post hello this is the first post ', 'tamanna', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `t_class_material`
--

CREATE TABLE `t_class_material` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `class` varchar(999) NOT NULL,
  `subject` varchar(999) NOT NULL,
  `title` varchar(999) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `author` varchar(999) NOT NULL,
  `video` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `file` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_class_material`
--

INSERT INTO `t_class_material` (`id`, `date`, `class`, `subject`, `title`, `des`, `author`, `video`, `a_email`, `file`) VALUES
(2, '2019-06-14', '1', 'Bangla', 'bfgnfhgn', 'vn ghdmhjf,', 'asd', 'https://www.youtube.com/embed/RFpe8ayvVSM', 'acd@gmail.com', 'uploads/New Microsoft Office Word Document.docx'),
(6, '2019-07-10', 'ssc', 'math', 'LINEAR ALGEBRA ', 'uri was a devil ASDF ASDF ', 'bb', 'https://www.youtube.com/watch?v=9fkld7LHUcQ', 'jhon@gmail.com', 'uploads/privacy.pdf'),
(7, '2019-07-12', '1', 'Mathematics', 'linear', ' Checking the network cables, modem, and router Reconnecting to Wi-Fi Running Windows Network Diagnostics DNS_PROBE_FINISHED_NO_INTERNET', 'jhon', 'https://www.youtube.com/embed/YAXN5c4uvcI', 'jhon@gmail.com', 'uploads/04 Data Warehouse.ppt'),
(8, '2019-07-24', '9', 'Religion', 'Mohanobi ', 'Live with our eid collection ðŸ˜ Share this live as much as possible and win a free designer kurti from our store. ðŸŒ¸ You have to share this live on different grou', 'asd', 'https://www.youtube.com/watch?v=9fkld7LHUcQ', 'JHON@GMAIL.COM', 'uploads/assistant.txt'),
(9, '2019-07-24', '8', 'Bangladesh & Global Studies ', 'Mogol amol ', ' Checking the network cables, modem, and router Reconnecting to Wi-Fi Running Windows Network Diagnostics DNS_PROBE_FINISHED_NO_INTERNET', 'jhon', 'https://www.youtube.com/', 'JHON@GMAIL.COM', 'uploads/Capture.PNG'),
(10, '2019-08-06', '9', 'science', 'bfgnfhgn', ' Checking the network cables, modem, and router Reconnecting to Wi-Fi Running Windows Network Diagnostics DNS_PROBE_FINISHED_NO_INTERNET', 'jhone', 'https://www.youtube.com/watch?v=RFpe8ayvVSM&feature=youtu.be', 'JHON@GMAIL.COM', 'uploads/s4.jpg'),
(11, '2019-09-06', '9', 'math', 'trigonomoti', ' Checking the network cables, modem, and router Reconnecting to Wi-Fi Running Windows Network Diagnostics DNS_PROBE_FINISHED_NO_INTERNET', 'jhon', 'https://www.youtube.com/watch?v=RFpe8ayvVSM', 'jhon@gmail.com', 'uploads/data mining .txt'),
(12, '2019-09-21', 'ssc', 'science', 'first title ', 'uri was a devil ', 'jhon', 'https://www.youtube.com/embed/Yy1F7ie8eBU', 'jhon@gmail.com', 'uploads/AdmitCard_GDLUFC.pdf'),
(13, '2019-09-21', '1', 'Bangla', 'bfgnfhgn', 'vn ghdmhjf,', 'jhon', 'https://www.youtube.com/embed/RFpe8ayvVSM', 'jhon@gmail.com', 'uploads/12IT _LRMJT3.pdf'),
(14, '2019-09-22', '1', 'Mathematics ', 'Second Lesson ', 'vn ghdmhjf,', 'jhon', 'https://www.youtube.com/embed/Yy1F7ie8eBU', 'jhon@gmail.com', 'uploads/apu_bbbank.pdf'),
(15, '2019-09-23', 'ssc', 'math', 'first title 1', 'uri was a devil ', 'asd asd', 'https://www.youtube.com/embed/fUA0NvGR-TE', 'acd@gmail.com', 'uploads/bank probashi.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `t_reg`
--

CREATE TABLE `t_reg` (
  `id` int(11) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `user` varchar(999) NOT NULL,
  `pass` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(999) NOT NULL,
  `fb` varchar(999) NOT NULL,
  `link` varchar(999) NOT NULL,
  `last_activity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_reg`
--

INSERT INTO `t_reg` (`id`, `first_name`, `user`, `pass`, `last_name`, `email`, `date`, `gender`, `fb`, `link`, `last_activity`) VALUES
(1, 'jhon', 'jhonesmith', 'jhonesmith', 'smith', 'jhon@gmail.com', '1990-05-08', 'male', 'https://www.facebook.com/', 'https://www.linkedin.com', '2019-08-16 00:26:25'),
(2, 'smith', 'smith123456', 'smith123456', 'asd', 'acds@gmail.com', '2019-05-10', 'male', 'https://www.facebook.com/', 'https://www.linkedin.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `user` varchar(999) NOT NULL,
  `pass` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `date` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `fb` varchar(999) NOT NULL,
  `link` varchar(999) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `user`, `pass`, `last_name`, `email`, `date`, `gender`, `fb`, `link`, `last_activity`) VALUES
(1, 'asd', 'amnfdjbv', 'amnfdjbv', 'asd', 'acd@gmail.com', '2019-05-15', 'gender', 'https://www.facebook.com/', 'https://www.facebook.com/', '2019-09-04 13:09:46'),
(3, 'doctor ', 'tithy0987', 'tithy0987', 'asd', 'ami09876@gmail.com', '2019-05-09', 'female', 'https://www.facebook.com/', 'https://www.linkedin.com', '2019-08-20 06:37:43'),
(4, 'Tithy', 'tithy123456', 'tithy123456', 'Tamanna', 'tithy@gmail.com', '2019-02-17', 'female', 'https://www.facebook.com/', 'https://www.linkedin.com', '2019-09-06 14:55:14'),
(5, 'Tamanna', 'Tamanna12', '1234567890', 'Tithy ', 'tamanna21@gmail.com', '1990-08-13', 'female', 'https://www.facebook.com/', 'https://www.linkedin.com', '2019-09-04 13:09:39'),
(6, 'jhon', 'jhonesmith', 'jhonesmith', 'smith', 'jhon@gmail.com', '1990-05-08', 'male', 'https://www.facebook.com/', 'https://www.linkedin.com', '2019-09-06 14:39:44'),
(7, 'smith', 'smith123456', 'smith123456', 'asd', 'acds@gmail.com', '2019-05-10', 'male', 'https://www.facebook.com/', 'https://www.linkedin.com', '2019-09-06 12:04:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `forum_users`
--
ALTER TABLE `forum_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`replies_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `t_class_material`
--
ALTER TABLE `t_class_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_reg`
--
ALTER TABLE `t_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `forum_users`
--
ALTER TABLE `forum_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `replies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_class_material`
--
ALTER TABLE `t_class_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_reg`
--
ALTER TABLE `t_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
