-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 04:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_example`
--

CREATE TABLE `ajax_example` (
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `wpm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax_example`
--

INSERT INTO `ajax_example` (`name`, `age`, `sex`, `wpm`) VALUES
('Frank', 45, 'm', 87),
('Jerry', 120, 'm', 20),
('Jill', 22, 'f', 72),
('Julie', 35, 'f', 90),
('Regis', 75, 'm', 44),
('Tracy', 27, 'f', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `userto` varchar(255) NOT NULL,
  `userfrom` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sentdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status1` int(11) NOT NULL,
  `status2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `userto`, `userfrom`, `message`, `status`, `sentdate`, `status1`, `status2`) VALUES
(0, '8', '7', 'tets', '', '0000-00-00 00:00:00', 0, 2147483647),
(0, '8', '7', 'hiiiii', '', '2016-11-14 17:37:26', 0, 0),
(0, '8', '7', 'dfsdfsdfsdf', '', '2016-11-14 17:37:29', 0, 0),
(0, '8', '7', 'fdgfdgdfgfdg', '', '2016-11-14 17:37:31', 0, 0),
(0, '8', '7', 'gfhhfghfg', '', '2016-11-14 17:37:38', 0, 0),
(0, '8', '7', 'hfghfghfgh', '', '2016-11-14 17:37:40', 0, 0),
(0, '8', '7', 'hgjghjghj', '', '2016-11-14 17:37:43', 0, 0),
(0, '8', '7', 'fsdfsdfsdf', '', '2016-11-14 17:37:46', 0, 0),
(0, '8', '7', 'sdfdsfsdf', '', '2016-11-14 17:39:33', 0, 0),
(0, '8', '7', 'gfhghjghj', '', '2016-11-14 17:39:37', 0, 0),
(0, '7', '8', 'gfgfgfg\n', '', '2016-11-14 17:42:16', 0, 0),
(0, '7', '8', 'gfdfgdfg', '', '2016-11-14 17:42:46', 0, 0),
(0, '7', '8', 'ghjghjhgj', '', '2016-11-14 17:42:48', 0, 0),
(0, '13', '7', 'test', '', '2016-11-15 16:32:01', 0, 0),
(0, '8', '7', 'dgdfgdfgdfg', '', '2016-11-15 17:15:07', 0, 0),
(0, '8', '7', 'testing chat', '', '2016-11-15 17:27:25', 0, 0),
(0, '8', '7', 'this is my chat', '', '2016-11-15 17:28:49', 0, 0),
(0, '8', '7', 'hey', '', '2016-11-16 02:55:48', 0, 0),
(0, '13', '7', 'oiiii', '', '2016-11-16 02:56:08', 0, 0),
(0, '7', '13', 'bol', '', '2016-11-16 02:59:05', 0, 0),
(0, '13', '7', 'ki korchis????', '', '2016-11-16 14:49:25', 0, 0),
(0, '7', '13', 'hey man..so whats upp??', '', '2016-11-16 14:55:14', 0, 0),
(0, '13', '7', 'everything bro', '', '2016-11-16 14:55:56', 0, 0),
(0, '7', '13', 'so up for something cool?', '', '2016-11-16 14:56:56', 0, 0),
(0, '13', '7', 'yep...sure..', '', '2016-11-16 14:57:09', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(20) NOT NULL,
  `friend_id1` int(20) NOT NULL,
  `friend_id2` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `friend_id1`, `friend_id2`) VALUES
(1, 8, 7),
(2, 7, 8),
(3, 13, 7),
(4, 7, 13);

-- --------------------------------------------------------

--
-- Table structure for table `likepost`
--

CREATE TABLE `likepost` (
  `id` int(20) NOT NULL,
  `post_id` int(20) NOT NULL,
  `mem_id` int(20) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likepost`
--

INSERT INTO `likepost` (`id`, `post_id`, `mem_id`, `created_on`) VALUES
(23, 8, 7, '2016-11-16 20:17:34'),
(25, 9, 7, '2016-11-16 20:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl1_register`
--

CREATE TABLE `tbl1_register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl1_register`
--

INSERT INTO `tbl1_register` (`id`, `name`, `contact`, `email`, `password`, `city`, `gender`) VALUES
(1, 'test', 'test', 'abc@mail.com', '123456', 'kolkata', 'M'),
(2, 'Subhajit Debnath', '8584987334', 'subhajitdebnath.999@gmail.com', '1111111111', 'mumbai', ''),
(3, 'Srijita Mukherjee', '9748122122', 'srijitamukherjee@gmail.com', '1111111111', 'kolkata', ''),
(6, 'fsdsffd', '8584987334', 'aaa@mail.com', 'dddddd', 'mumbai', ''),
(7, 'Sumati Sen', '9903456577', 'sanketd@gmail.com', '111111', 'kolkata', 'M'),
(8, 'Sharlock Homes', '1245678944', 'sharlock@gmail.com', 'sharlock', 'kolkata', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl2_blog`
--

CREATE TABLE `tbl2_blog` (
  `post_id` int(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `mem_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl2_blog`
--

INSERT INTO `tbl2_blog` (`post_id`, `value`, `mem_id`) VALUES
(1, 'test', 2),
(2, 'test1sd,fhnjsdjkf jkbdhjhsad bdjhasgd sdb asdbvjhd sadhasd  asdhbgajshd sadghajd bsd bjhqwd gwq qiw giwq dwqi iw iw q wedgwq dwdewed wedwe dwe dw dwe d wedgbwe dwehd we dwedb wed we dwe dwe dwe bd', 2),
(3, 'fdgfgvdfgd gtdfg g rg rgr erg erg rg', 3),
(4, '•	To evolve into hardworking and contributing towards the success of the organization.\r\n•	To work in a competitive environment on challenging assignments that shall yield to job satisfaction and personal growth.\r\n•	To obtain a responsible and challenging ', 2),
(5, 'There is no Internet connection\r\n\r\nTry:\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nRunning Windows Network Diagnostics\r\nERR_INTERNET_DISCONNECTED', 3),
(6, 'Today i am feeling very happy...Because the puja is near...I have bought many pretty dresses.....', 3),
(7, 'djhriew weiurwher wuqweh weuiqwd', 2),
(8, 'today is wednesday,,,,nd tomorrow what?????', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl3_comment`
--

CREATE TABLE `tbl3_comment` (
  `com_id` int(255) NOT NULL,
  `value` text NOT NULL,
  `post_id` int(255) NOT NULL,
  `mem_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl3_comment`
--

INSERT INTO `tbl3_comment` (`com_id`, `value`, `post_id`, `mem_id`) VALUES
(1, 'it indeed is....', 3, 8),
(2, 'what about you', 3, 8),
(3, 'you could have taken me there with you', 5, 8),
(4, 'no i wont....', 5, 13),
(5, 'why????', 5, 8),
(6, 'hey...welcome...how are you', 7, 7),
(7, 'good .....', 7, 16),
(8, 'hey there everyone....', 8, 7),
(9, 'hey...welcome', 6, 7),
(10, 'me too', 5, 7),
(11, 'thanks man', 6, 13),
(12, 'heyyyyy.......', 6, 13),
(13, 'heyyyy........', 8, 13),
(14, 'good bye all friends', 9, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl4_mail`
--

CREATE TABLE `tbl4_mail` (
  `id` int(255) NOT NULL,
  `user_to` varchar(255) NOT NULL,
  `user_from` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl4_mail`
--

INSERT INTO `tbl4_mail` (`id`, `user_to`, `user_from`, `subject`, `message`) VALUES
(2, 'srijitamukherjee@gmail.com', 'subhajitdebnath.999@gmail.com', 'dfgdfg', 'fgddfgdfg'),
(3, 'srijitamukherjee@gmail.com', 'subhajitdebnath.999@gmail.com', 'dfgdfg', 'fgddfgdfg'),
(4, 'abc@mail.com', 'subhajitdebnath.999@gmail.com', 'test', 'teqwgdhsadbcjhsad adwbasd adbasd kasd askbd'),
(5, 'srijitamukherjee@gmail.com', 'subhajitdebnath.999@gmail.com', 'tetsststs', 'vxcvxcvxc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl5_image`
--

CREATE TABLE `tbl5_image` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl5_image`
--

INSERT INTO `tbl5_image` (`id`, `name`, `comment`, `img`) VALUES
(1, 'test', 'adsf fssfs sdfsd sdf sd sd dsf s sd sdf sdf s sf sd sd s sd sd s s fsfdsfsf sf sd', 'Upload/apollo_arrow_geneva_auto_expo_2016-3840x2160.jpg'),
(5, 'fvdfg', 'dfgdfgdfgf fdg fdg df fdg fgd dfg gd dg dfg dfg d d dg dfg ', 'Upload/12666292_493821584154426_2107859696_n.jpg'),
(6, 'Subhajit Debnath', '•	To evolve into hardworking and contributing towards the success of the organization.\r\n•	To work in a competitive environment on challenging assignments that shall yield to job satisfaction and personal growth.\r\n•	To obtain a responsible and challenging ', 'Upload/I 9001.jpg'),
(7, 'Subhajit fsdffdsfs', '•	To evolve into hardworking and contributing towards the success of the organization.\r\n•	To work in a competitive environment on challenging assignments that shall yield to job satisfaction and personal growth.\r\n•	To obtain a responsible and challenging ', 'Upload/apollo_arrow_geneva_auto_expo_2016-3840x2160.jpg'),
(8, 'Subhajit fsdffdsfs', '•	Pursuing B.Tech (2012-2016) specializing (ECE) from Calcutta Institute of Engineering and Management,4th year.\r\n•	WBCHSE class 12 (61.8%), Behala Aryya Vidyamandir, 2012.\r\n•	WBBSE class 10 (71.62%), VivekanandaPalli Kishor Bharati High School, 2010.\r\n•	', 'Upload/apollo_arrow_geneva_auto_expo_2016-3840x2160.jpg'),
(9, 'Subhajit fsdffdsfs', '•	Pursuing B.Tech (•	Pursuing B.Tech (2012-2016) specializing (ECE) from Calcutta Institute of Engineering and Management,4th year.\r\n•	WBCHSE class 12 (61.8%), Behala Aryya Vidyamandir, 2012.\r\n•	WBBSE class 10 (71.62%), VivekanandaPalli Kishor Bharati Hig', 'Upload/flying_pegasus_dragon_horse-3840x2160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl6_friendlist`
--

CREATE TABLE `tbl6_friendlist` (
  `id` int(50) NOT NULL,
  `rqst_from_id` int(50) NOT NULL,
  `rqst_to_id` int(50) NOT NULL,
  `status1` varchar(1) NOT NULL,
  `status2` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl6_friendlist`
--

INSERT INTO `tbl6_friendlist` (`id`, `rqst_from_id`, `rqst_to_id`, `status1`, `status2`) VALUES
(1, 7, 8, '1', '1'),
(2, 7, 13, '1', '1'),
(3, 7, 16, '1', '0'),
(4, 13, 8, '1', '0'),
(5, 7, 14, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl7_posts`
--

CREATE TABLE `tbl7_posts` (
  `id` int(255) NOT NULL,
  `value` text NOT NULL,
  `mem_id` int(255) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl7_posts`
--

INSERT INTO `tbl7_posts` (`id`, `value`, `mem_id`, `created_on`) VALUES
(3, 'Today is a good day', 8, '2016-10-15 15:52:51'),
(5, 'having fun in vegas!!!!', 8, '2016-10-15 16:51:14'),
(6, 'Its good to be back in kolkata', 13, '2016-10-15 17:05:32'),
(7, 'This is my first socialife post..... hello everyone', 16, '2016-11-09 21:40:51'),
(8, 'my first post in socialife.....', 7, '2016-11-14 21:39:26'),
(9, 'This is the last post', 7, '2016-11-16 20:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `name`, `contact`, `email`, `password`, `gender`, `image`) VALUES
(7, 'Subhajit Debnath', '8584987334', 'subhajitdebnath.999@gmail.com ', '111111', 'M', 'image/12666292_493821584154426_2107859696_n.jpg'),
(8, 'Srijita Mukherjee', '8888885555', 'srijitamukherjee@gmail.com', '123456', 'F', 'image/flying_pegasus_dragon_horse-3840x2160.jpg'),
(13, 'Amit Bid', '8013159845', 'amitbid1994@gmail.com', '123456', 'M', 'image/honda-cbr-150-5.jpg'),
(14, 'sweety', '9674581236', 'swetabhowmick@gmail.com', '987456', 'F', 'image/Honda-CBR150R-Test-Ride-Review.jpg'),
(16, 'Soumak Das', '8013159845', 'iammak@gmail.com', '112233445566', 'M', 'image/1919089_1252949148052461_1735596592842557078_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_example`
--
ALTER TABLE `ajax_example`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likepost`
--
ALTER TABLE `likepost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl1_register`
--
ALTER TABLE `tbl1_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl2_blog`
--
ALTER TABLE `tbl2_blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl3_comment`
--
ALTER TABLE `tbl3_comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `tbl4_mail`
--
ALTER TABLE `tbl4_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl5_image`
--
ALTER TABLE `tbl5_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl6_friendlist`
--
ALTER TABLE `tbl6_friendlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl7_posts`
--
ALTER TABLE `tbl7_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `likepost`
--
ALTER TABLE `likepost`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl1_register`
--
ALTER TABLE `tbl1_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl2_blog`
--
ALTER TABLE `tbl2_blog`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl3_comment`
--
ALTER TABLE `tbl3_comment`
  MODIFY `com_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl4_mail`
--
ALTER TABLE `tbl4_mail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl5_image`
--
ALTER TABLE `tbl5_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl6_friendlist`
--
ALTER TABLE `tbl6_friendlist`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl7_posts`
--
ALTER TABLE `tbl7_posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
