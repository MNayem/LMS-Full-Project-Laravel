-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 07:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `message`, `created_at`, `updated_at`) VALUES
(1, 'my name is x', NULL, NULL),
(2, 'Neha ', '2021-04-30 10:13:15', '2021-04-30 10:13:15'),
(3, 'Aniya', '2021-04-30 10:28:02', '2021-04-30 10:28:02'),
(4, 'prapty', '2021-04-30 10:28:38', '2021-04-30 10:28:38'),
(5, 'tanjina', '2021-04-30 10:30:23', '2021-04-30 10:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `sending_email` varchar(50) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `message` varchar(1500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `student_email`, `teacher_email`, `sending_email`, `course_id`, `category`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', NULL, 2, 'courses', 'i am x', NULL, NULL),
(2, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', NULL, 'Course', NULL, '2021-05-16 15:10:06', '2021-05-16 15:10:06'),
(3, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', NULL, 'Course', NULL, '2021-05-16 15:11:48', '2021-05-16 15:11:48'),
(4, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', NULL, 'Course', 'mkj', '2021-05-16 15:13:14', '2021-05-16 15:13:14'),
(5, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', NULL, 'Course', 'my name is v', '2021-05-16 15:14:09', '2021-05-16 15:14:09'),
(6, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'i am shamim', '2021-05-16 15:16:17', '2021-05-16 15:16:17'),
(7, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'ki obostha?', '2021-05-16 15:28:42', '2021-05-16 15:28:42'),
(8, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'aj akash nil', '2021-05-16 15:31:10', '2021-05-16 15:31:10'),
(9, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'aj akash red', '2021-05-16 15:32:47', '2021-05-16 15:32:47'),
(10, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'hi', '2021-05-16 15:34:48', '2021-05-16 15:34:48'),
(11, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'any pb?m', '2021-05-16 15:38:30', '2021-05-16 15:38:30'),
(12, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'ami valo achi', '2021-05-16 15:39:18', '2021-05-16 15:39:18'),
(13, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'apnii kmn achen?', '2021-05-16 15:39:30', '2021-05-16 15:39:30'),
(14, 'shamimreza.tentech@gmail.com', 'abc@sss', 'shamimreza.tentech@gmail.com', 2, 'Course', 'ki je bujhi', '2021-05-16 15:41:36', '2021-05-16 15:41:36'),
(15, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'Course', 'hhhh', '2021-05-18 09:32:47', '2021-05-18 09:32:47'),
(16, 'shamimreza.tentech@gmail.com', 'abc@sss', 'shamimreza.tentech@gmail.com', 2, 'Course', 'abcdef', '2021-05-18 10:52:46', '2021-05-18 10:52:46'),
(17, 'shamimreza.abc@gmail.com', 'shamimreza.tentech@gmail.com', 'shamimreza.abc@gmail.com', 2, 'Course', 'hi', '2021-06-14 04:13:49', '2021-06-14 04:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `content_name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `chapter` varchar(100) DEFAULT NULL,
  `video` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `course_id`, `content_name`, `description`, `chapter`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'name is important', NULL, 'lesson1', 'fsfsf', 'pendings', NULL, NULL),
(2, 3, 'abc', NULL, 'chapter 1', 'abc.mp4', 'pending', '2021-05-07 09:48:47', '2021-05-07 09:48:47'),
(3, 3, 'abc', NULL, 'chapter 1', 'abc.mp4', 'pending', '2021-05-17 09:10:21', '2021-05-17 09:10:21'),
(4, 7, 'The environment', NULL, 'chapter 1', 'abc.mp4', 'pending', '2021-05-17 09:17:32', '2021-05-17 09:17:32'),
(5, 15, 'introduction', NULL, 'chapter 1', 'abc.mp4', 'pending', '2021-05-27 11:06:06', '2021-05-27 11:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `benefit` varchar(500) DEFAULT NULL,
  `difficulty` varchar(50) DEFAULT NULL,
  `price` int(9) NOT NULL,
  `category` varchar(30) NOT NULL,
  `ccategory` varchar(50) DEFAULT NULL,
  `medium` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `email`, `title`, `description`, `benefit`, `difficulty`, `price`, `category`, `ccategory`, `medium`, `image`, `created_at`, `updated_at`) VALUES
(1, 'shamimreza.036@gmail.com', 'Web development', 'x', 'y', 'hard', 10000, 'web', NULL, NULL, 'abc.jpg', NULL, NULL),
(2, 'shamimreza.tentech@gmail.com', 'Contact form 1', 'hi you are right', 'good', 'low', 2000, 'Course', NULL, NULL, NULL, '2021-04-30 23:18:10', '2021-04-30 23:18:10'),
(3, 'shamimreza.tentech@gmail.com', 'Contact form 1', 'hi you are right', 'a', 'a', 123, 'Award', NULL, NULL, NULL, '2021-05-01 07:33:39', '2021-05-01 07:33:39'),
(4, 'shamimreza.tentech@gmail.com', 'Design', 'wert', 'a', 'a', 431, 'Award', NULL, NULL, NULL, '2021-05-01 07:40:01', '2021-05-01 07:40:01'),
(5, 'shamimreza.tentech@gmail.com', 'Technology', 'my door is', 'a', 'a', 1000, 'Coach', NULL, NULL, NULL, '2021-05-01 08:03:36', '2021-05-01 08:03:36'),
(6, 'shamimreza.tentech@gmail.com', 'Technology', 'my door is good', 'good', 'low', 6700, 'Course', NULL, NULL, NULL, '2021-05-01 10:22:48', '2021-05-01 10:22:48'),
(7, 'shamimreza.tentech@gmail.com', 'abc', 'def', 'useful', 'hard', 5000, 'Course', NULL, NULL, NULL, '2021-05-01 10:28:36', '2021-05-01 10:28:36'),
(8, 'shamimreza.tentech@gmail.com', 'Technology', 'wert', 'good', 'hard', 1000, 'Course', 'web', NULL, NULL, '2021-05-07 09:10:51', '2021-05-07 09:10:51'),
(9, 'shamimreza.tentech@gmail.com', 'Technology', 'wert', 'good', 'hard', 4500, 'Course', 'courses', NULL, NULL, '2021-05-17 09:16:26', '2021-05-17 09:16:26'),
(10, 'shamimreza.tentech@gmail.com', 'Design', 'my door is good', 'useful', 'hard', 123, 'Course', 'courses', NULL, NULL, '2021-05-18 09:00:25', '2021-05-18 09:00:25'),
(11, 'shamimreza.tentech@gmail.com', 'web', 'my door is good', 'fff', 'hard', 3000, 'Course', 'web development', NULL, NULL, '2021-05-18 10:45:43', '2021-05-18 10:45:43'),
(12, 'shamimreza.tentech@gmail.com', 'Design', 'it is a simple course', 'well benefitted', 'hard', 5000, 'Course', 'web development', NULL, NULL, '2021-05-27 11:05:10', '2021-05-27 11:05:10'),
(13, 'shamimreza.tentech@gmail.com', 'Coaching about career development in it', 'hi you are right', 'well benefitted', 'hard', 7000, 'Course', 'it', NULL, NULL, '2021-05-27 11:10:23', '2021-05-27 11:10:23'),
(14, 'shamimreza.11205036000@gmail.com', 'qwer', 'hi you are right', 'fff', 'hard', 2000, 'Course', 'courses', NULL, NULL, '2021-09-18 23:43:06', '2021-09-18 23:43:06'),
(15, 'shamimreza.11205036000@gmail.com', 'hhh', 'hhh', 'hhh', 'hhh', 56, 'Course', 'hhh', NULL, NULL, '2021-09-18 23:47:53', '2021-09-18 23:47:53'),
(16, 'shamimreza.11205036000@gmail.com', 'Contact form 1', 'hgg', 'ggg', 'gggg', 5600, 'Course', 'courses', NULL, NULL, '2021-09-18 23:51:01', '2021-09-18 23:51:01'),
(17, 'shamimreza.11205036000@gmail.com', 'yyy', 'yyy', 'yyyy', 'yyy', 333, 'Course', 'yyy', NULL, 'images/self-paced.png', '2021-09-19 00:06:41', '2021-09-19 00:06:41'),
(18, 'shamimreza.11205036000@gmail.com', 'Contact form 1', 'eee', 'eee', 'eee', 44, 'Course', 'courses', NULL, 'images/real-world-projects.png', '2021-09-19 00:31:05', '2021-09-19 00:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE `courseorder` (
  `id` int(11) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `trainer_email` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`id`, `student_email`, `trainer_email`, `course_id`, `payment_status`, `amount`, `category`, `created_at`, `updated_at`) VALUES
(1, 'shamimreza.tentech@gmail.com', 'abc@sss', 2, 'paid', 2000, 'Course', '2021-05-07 08:55:05', '2021-05-07 08:55:05'),
(2, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'paid', 2000, 'Course', '2021-05-07 08:57:23', '2021-05-07 08:57:23'),
(3, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'paid', 2000, 'Course', '2021-05-16 15:45:31', '2021-05-16 15:45:31'),
(4, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'paid', 2000, 'Course', '2021-05-17 09:14:38', '2021-05-17 09:14:38'),
(5, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 6, 'paid', 6700, 'Course', '2021-05-17 09:15:10', '2021-05-17 09:15:10'),
(6, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'paid', 2000, 'Course', '2021-05-18 10:56:10', '2021-05-18 10:56:10'),
(7, 'shamimreza.tentech@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'paid', 2000, 'Course', '2021-05-27 07:50:21', '2021-05-27 07:50:21'),
(8, 'shamimreza.abc@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'paid', 2000, 'Course', '2021-06-14 04:12:50', '2021-06-14 04:12:50'),
(9, 'shamimreza.5036@gmail.com', 'shamimreza.tentech@gmail.com', 2, 'paid', 2000, 'Course', '2021-08-08 01:17:15', '2021-08-08 01:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) NOT NULL,
  `examtopics_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examtopics`
--

CREATE TABLE `examtopics` (
  `id` int(10) NOT NULL,
  `topics_name` varchar(100) NOT NULL,
  `total_question` int(4) NOT NULL,
  `total_marks` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examtopics`
--

INSERT INTO `examtopics` (`id`, `topics_name`, `total_question`, `total_marks`, `created_at`, `updated_at`) VALUES
(1, 'Topics 1', 3, 3, NULL, NULL),
(2, 'topics 2', 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `file_path` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `name`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'ddd', '2021-05-15 02:46:07', '2021-05-15 02:46:07'),
(2, 'C:\\xampp\\tmp\\php807F.tmp', '/storage/public/C:\\xampp\\tmp\\php807F.tmp', '2021-05-15 04:03:54', '2021-05-15 04:03:54'),
(3, '76647895_716783715470883_5929422589461004288_o.jpg', 'uploads/76647895_716783715470883_5929422589461004288_o.jpg', '2021-05-15 04:43:01', '2021-05-15 04:43:01'),
(4, 'vcc.JPG', 'uploads/vcc.JPG', '2021-05-15 04:48:22', '2021-05-15 04:48:22'),
(5, 'lanbena.jpg', 'uploads/lanbena.jpg', '2021-05-15 10:23:14', '2021-05-15 10:23:14'),
(6, 'prisoner.jpg', 'uploads/prisoner.jpg', '2021-05-15 10:25:30', '2021-05-15 10:25:30'),
(7, 'vcc.JPG', 'uploads/vcc.JPG', '2021-05-15 10:48:00', '2021-05-15 10:48:00'),
(8, 't.jpg', 'public/53723689_2560781113996791_4444973345254932480_o.jpg', '2021-05-15 10:49:50', '2021-05-15 10:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shamimreza.11205036@gmail.com', '$2y$10$.6GmcFO4ZYxn6uNKVZkV5eSGsdtUjRM8II2H9ykTOmo2Iw2HClaQ.', '2021-08-07 07:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `hints` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `exam_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `note`, `hints`, `created_at`, `updated_at`) VALUES
(1, 1, 'question 1', 'opt1', 'opt2', 'opt3', 'opt4', 'option 3', 'no note', 'no hints', NULL, NULL),
(2, 1, 'question 2', 'opt11', 'opt22', 'opt33', 'opt44', 'option 1', 'no', 'no', NULL, NULL),
(3, 1, 'question 3 for topics 1', 'op1', 'op2', 'op3', 'op4', 'option 2', 'no note', 'no hints', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `topics_id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `number` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `singlemarks`
--

CREATE TABLE `singlemarks` (
  `id` int(11) NOT NULL,
  `question_id` int(10) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `exams_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `marks` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'shamimreza.tentech@gmail.com', 'tentech er mail', NULL, NULL),
(2, 'shamimreza.036@gmail.com', '036 email', NULL, NULL),
(3, 'shamimreza.tentech@gmail.com', 'tentech er mail', NULL, NULL),
(4, 'shamimreza.036@gmail.com', '036 email', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `bank` varchar(10) DEFAULT NULL,
  `account_no` varchar(50) DEFAULT NULL,
  `cash` varchar(10) DEFAULT NULL,
  `training` varchar(10) DEFAULT 'no',
  `training_online` varchar(5) DEFAULT 'no',
  `training_online_group` varchar(5) DEFAULT 'no',
  `training_online_onetoone` varchar(5) DEFAULT 'no',
  `training_offline` varchar(5) DEFAULT 'no',
  `training_offline_group` varchar(5) DEFAULT 'no',
  `training_offline_onetoone` varchar(5) DEFAULT 'no',
  `course` varchar(5) DEFAULT NULL,
  `course_online` varchar(5) DEFAULT NULL,
  `course_online_group` varchar(5) DEFAULT NULL,
  `course_online_live` varchar(5) DEFAULT NULL,
  `course_offline` varchar(5) DEFAULT NULL,
  `consulting` varchar(5) DEFAULT NULL,
  `consulting_online` varchar(5) DEFAULT NULL,
  `consulting_offline` varchar(5) DEFAULT NULL,
  `certification` varchar(5) DEFAULT NULL,
  `award` varchar(5) DEFAULT NULL,
  `mentor` varchar(5) DEFAULT NULL,
  `mentor_online` varchar(5) DEFAULT NULL,
  `mentor_offline` varchar(5) DEFAULT NULL,
  `coaching` varchar(5) DEFAULT NULL,
  `coaching_online` varchar(5) DEFAULT NULL,
  `coaching_offline` varchar(5) DEFAULT NULL,
  `coaching_online_group` varchar(5) DEFAULT NULL,
  `coaching_online_onetoone` varchar(5) DEFAULT NULL,
  `coaching_offline_group` varchar(5) DEFAULT NULL,
  `coaching_offline_onetoone` varchar(5) DEFAULT NULL,
  `exam` varchar(5) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `email`, `bank`, `account_no`, `cash`, `training`, `training_online`, `training_online_group`, `training_online_onetoone`, `training_offline`, `training_offline_group`, `training_offline_onetoone`, `course`, `course_online`, `course_online_group`, `course_online_live`, `course_offline`, `consulting`, `consulting_online`, `consulting_offline`, `certification`, `award`, `mentor`, `mentor_online`, `mentor_offline`, `coaching`, `coaching_online`, `coaching_offline`, `coaching_online_group`, `coaching_online_onetoone`, `coaching_offline_group`, `coaching_offline_onetoone`, `exam`, `image`, `created_at`, `updated_at`) VALUES
(1, 'shamim reza', 'shamimreza.tentech@gmail.com', NULL, NULL, NULL, 'yes', 'no', NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 04:05:41', '2021-04-30 04:05:41'),
(2, 'shamim reza', 'shamimreza.tentech2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 04:41:45', '2021-04-30 04:41:45'),
(3, 'shamim reza', 'shamimreza.tentech3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 04:42:54', '2021-04-30 04:42:54'),
(4, 'abcdf', 'shamimreza.tentech3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 04:43:05', '2021-04-30 04:43:05'),
(5, 'shamim reza', 'shamimreza.tentech@gmail.com', NULL, NULL, NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-27 11:00:09', '2021-05-27 11:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shamim reza', 'shamimreza.11205036@gmail.com', NULL, 1, '$2y$10$L8.Vyd8EepIvoac2BuMn/.BjTh7NEEhBQ2xC0q/oZaocEhPpaQD8O', NULL, '2021-03-21 04:15:10', '2021-03-21 04:15:10'),
(2, 'abc', 'abc@gmail.com', NULL, NULL, '$2y$10$kCBvXNBcmCieg.LWdM8AJeZ./YfDC.ptGHg6AT490cfVC3onp19cq', NULL, '2021-03-22 22:15:27', '2021-03-22 22:15:27'),
(3, 'xyz', 'shamimreza.036@gmail.com', NULL, 1, '$2y$10$jUUK0nUh5N/JbUqrp9NCQulPAb0T5qosB6/4C45YwRbu9Kz9XPcA2', NULL, '2021-03-23 10:44:29', '2021-03-23 10:44:29'),
(4, 'shamim reza', 'shamimreza.tentech@gmail.com', NULL, NULL, '$2y$10$JY6r6wwE.0h04rSAglbvkeMDgx7FfHp9FovneLEdnB/bNcxLfnf.K', NULL, '2021-04-05 00:12:35', '2021-04-05 00:12:35'),
(5, 'shamim reza', 'shamimreza.abc@gmail.com', NULL, NULL, '$2y$10$7sMFcBKXEHoHBPv6Ogv/wuj8ItAeGdo7uBYs0ZIkzSSlWohE8WRB2', NULL, '2021-06-14 02:29:31', '2021-06-14 02:29:31'),
(6, 'shamim reza', 'shamimreza.5036@gmail.com', NULL, NULL, '$2y$10$jLt.cRvZRcOFE9zx4CMo2epEUVGdmoeT9al4e0/mY58eNgeSKnnyC', NULL, '2021-08-07 07:16:12', '2021-08-07 07:16:12'),
(7, 'shamim reza', 'shamimreza.1234@gmail.com', NULL, NULL, '$2y$10$GA22cvpYxUc7ocq2Be9SReo8oQz0qMaqy5Eoq07WDCgYH0kagREMa', NULL, '2021-08-27 06:32:48', '2021-08-27 06:32:48'),
(8, 'shamim reza', 'shamimreza.11@gmail.com', NULL, NULL, '$2y$10$TgKt.mU9QP.Far6wkRYisucP0KnuFB7VTmWQrNpVOt1JlxPYSdO3a', NULL, '2021-09-02 09:16:00', '2021-09-02 09:16:00'),
(9, 'Md. Shamim Reza', 'shamimreza.333@gmail.com', NULL, NULL, '$2y$10$rYZGBycGTi2YDZQ.o59rnus5mRWgqbyjeaSLltJwDV66l00TwUgjG', NULL, '2021-09-04 00:26:35', '2021-09-04 00:26:35'),
(10, 'shamim reza', 'shamimreza.222@gmail.com', NULL, NULL, '$2y$10$BUxdRaCoEQhfkwaN.bZPPeMvU.Kx.4Ug3COOZSfpQZLdYEnHLIjjq', NULL, '2021-09-04 04:28:18', '2021-09-04 04:28:18'),
(11, 'shamim reza', 'shamimreza.333333@gmail.com', NULL, NULL, '$2y$10$0B0hUUJBK2E2wWxRdT3eieF2HK4yJJSPiQFyhqIHqhzEzIkFglkRy', NULL, '2021-09-04 04:29:38', '2021-09-04 04:29:38'),
(12, 'shamim reza', 'shamimreza.11205036000@gmail.com', NULL, NULL, '$2y$10$ig8LvJ/U8EQlDnHAZE6BgecRFQFUDgKbOtSbPucXqjNpZa/4koIQa', NULL, '2021-09-18 23:41:48', '2021-09-18 23:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `zoom`
--

CREATE TABLE `zoom` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examtopics`
--
ALTER TABLE `examtopics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singlemarks`
--
ALTER TABLE `singlemarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zoom`
--
ALTER TABLE `zoom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `courseorder`
--
ALTER TABLE `courseorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examtopics`
--
ALTER TABLE `examtopics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singlemarks`
--
ALTER TABLE `singlemarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zoom`
--
ALTER TABLE `zoom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
