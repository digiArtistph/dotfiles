-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2016 at 05:09 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `availabilities`
--

CREATE TABLE `availabilities` (
  `avail_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `availabilities`
--

INSERT INTO `availabilities` (`avail_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Part time -  less than 40 hrs/week', '2016-12-13 07:32:47', '2016-12-13 07:32:47'),
(2, 'Full time -  more than 40 hrs/week', '2016-12-13 07:33:22', '2016-12-13 07:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `desired_salaries`
--

CREATE TABLE `desired_salaries` (
  `salary_id` int(10) UNSIGNED NOT NULL,
  `range` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `desired_salaries`
--

INSERT INTO `desired_salaries` (`salary_id`, `range`, `created_at`, `updated_at`) VALUES
(1, '10, 000 -14, 999', '2016-12-13 17:08:04', '2016-12-13 17:08:04'),
(2, '15, 000 - 19, 999', '2016-12-13 17:08:46', '2016-12-13 17:08:46'),
(3, '20, 000 - 29, 999', '2016-12-13 17:09:17', '2016-12-13 17:09:17'),
(4, '30, 000 - 50, 000', '2016-12-13 17:09:54', '2016-12-13 17:09:54'),
(5, 'above 50, 000', '2016-12-13 17:10:11', '2016-12-13 17:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `empid` int(10) UNSIGNED NOT NULL COMMENT 'Employer Table Primary Key',
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer First Name',
  `mname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Middle Name. This field is optional.',
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Last Name',
  `dob` date NOT NULL COMMENT 'Employer Date of Birth',
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Gender',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Email Address',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Password, it will be use logging on the system. The value on this field should encrypted.',
  `profilepic` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Profile Picture. Picture filename should be generated randomly.',
  `weburl` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer website URL.',
  `streetaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Street Address',
  `cityaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer City Address',
  `zipcode` int(11) NOT NULL COMMENT 'Employer Zip Code',
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer State',
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employer Phone Number and set it to unique.',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `gender_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`gender_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'male', '2016-12-14 13:21:27', '2016-12-14 13:21:27'),
(2, 'female', '2016-12-14 13:21:35', '2016-12-14 13:21:35'),
(3, 'not specified', '2016-12-14 13:21:49', '2016-12-14 13:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `internet_speeds`
--

CREATE TABLE `internet_speeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `rate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internet_speeds`
--

INSERT INTO `internet_speeds` (`id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'less than 2 mpbs', '2016-12-13 17:40:33', '2016-12-13 17:40:33'),
(2, '2-4 mbps', '2016-12-13 17:42:26', '2016-12-13 17:42:26'),
(3, '5-10 mbps', '2016-12-13 17:42:42', '2016-12-13 17:42:42'),
(4, 'above 10', '2016-12-13 17:43:07', '2016-12-13 17:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(10) UNSIGNED NOT NULL COMMENT 'Job Primary Key',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Job Title',
  `description` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Job description',
  `empid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for Employer table',
  `seekerid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for Seeker table',
  `skill` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Skill required for this job. Values will be stored as csv since this will contain multiple skills',
  `salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Salary for this job in Php',
  `jobtype` enum('Full Time','Part Time') COLLATE utf8_unicode_ci NOT NULL COMMENT 'Job Type will be either Full Time or Part Time',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Job Status like Active Job, Taken Job, etc..',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageid` int(10) UNSIGNED NOT NULL COMMENT 'Primary key for message table',
  `fromuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This is a field from either employer or seeker table. Employer will have a "e" prefix followed by the employer id. Seeker will have a "s" prefix followed by the seeker id.',
  `touid` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This is a field from either employer or seeker table. Seeker will have a "s" prefix followed by the seeker id. Seeker will have a "s" prefix followed by the seeker id.',
  `messagebody` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'The message body',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Status will be the following: Unread, Read, Sent, Starred, Deleted',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_12_025801_create_employer_table', 1),
(4, '2016_10_14_024850_create_skill_table', 1),
(5, '2016_10_14_030138_create_seekerexperience_table', 1),
(6, '2016_10_14_043505_create_portfolio_table', 1),
(7, '2016_10_14_044432_create_job_table', 1),
(8, '2016_10_14_045917_create_review_table', 1),
(9, '2016_10_14_060823_create_message_table', 1),
(10, '2016_10_14_061510_create_subscription_table', 1),
(11, '2016_10_14_061834_create_subscription_plan_table', 1),
(12, '2016_10_21_033418_create_posts_tables', 1),
(13, '2016_11_09_011430_create_tab_notifications_table', 1),
(14, '2016_11_22_090748_adds_parent_to_skills_table', 1),
(15, '2016_12_08_085344_create_availabilities_table', 1),
(16, '2016_12_08_090833_create_desired_salaries_table', 1),
(17, '2016_12_08_091010_create_internet_speeds_table', 1),
(18, '2016_12_08_091240_create_workplaces_table', 1),
(19, '2016_12_08_091427_create_workstations_table', 1),
(20, '2016_12_08_091626_create_time_periods_table', 1),
(21, '2016_12_08_092024_create_genders_table', 1),
(22, '2016_12_08_092024_create_writings_table', 1),
(23, '2016_12_08_092744_create_speakings_table', 1),
(24, '2016_12_08_095056_add_column_rate_to_internet_speeds', 1),
(25, '2016_12_15_023240_add_name_to_workplaces_table', 1),
(32, '2014_10_12_000000_create_seekers_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2016_10_12_025801_create_employer_table', 1),
(35, '2016_10_14_024434_create_userskill_table', 1),
(36, '2016_10_14_024850_create_skill_table', 1),
(37, '2016_10_14_030138_create_seekerexperience_table', 1),
(38, '2016_10_14_043505_create_portfolio_table', 1),
(39, '2016_10_14_044432_create_job_table', 1),
(40, '2016_10_14_045917_create_review_table', 1),
(41, '2016_10_14_060823_create_message_table', 1),
(42, '2016_10_14_061510_create_subscription_table', 1),
(43, '2016_10_14_061834_create_subscription_plan_table', 1),
(44, '2016_10_14_073458_add_relationship_to_userskills_table', 1),
(45, '2016_10_14_073602_add_relationship_to_seekerexperiences_table', 1),
(46, '2016_10_14_073630_add_relationship_to_portfolios_table', 1),
(47, '2016_10_14_073657_add_relationship_to_jobs_table', 1),
(48, '2016_10_14_073731_add_relationship_to_reviews_table', 1),
(49, '2016_10_14_074154_add_relationship_to_subscriptions_table', 1),
(50, '2016_10_21_033418_create_posts_tables', 1),
(51, '2016_11_09_011430_create_tab_notifications_table', 1),
(52, '2016_11_22_090748_adds_parent_to_skills_table', 1),
(53, '2016_12_08_085344_create_availabilities_table', 1),
(54, '2016_12_08_090833_create_desired_salaries_table', 1),
(55, '2016_12_08_091010_create_internet_speeds_table', 1),
(56, '2016_12_08_091240_create_workplaces_table', 1),
(57, '2016_12_08_091427_create_workstations_table', 1),
(58, '2016_12_08_091626_create_time_periods_table', 1),
(59, '2016_12_08_092024_create_genders_table', 1),
(60, '2016_12_08_092024_create_writings_table', 1),
(61, '2016_12_08_092744_create_speakings_table', 1),
(62, '2016_12_08_095056_add_column_rate_to_internet_speeds', 1),
(63, '2016_12_15_023240_add_name_to_workplaces_table', 2),
(64, '2016_12_20_030435_add_user_type_users_table', 3),
(65, '2016_12_20_032818_modify_availability_from_string_to_int_on_users', 4),
(66, '2016_12_20_043159_modify_desired_salaries_from_string_to_int_on_users_table', 5),
(67, '2016_12_20_043624_modify_internet_speed_from_string_to_int_on_users_table', 5),
(68, '2016_12_20_044301_modify_workstation_from_string_to_int_on_users_table', 6),
(69, '2016_12_20_044706_modify_speaking_from_string_to_int_on_users_table', 7),
(70, '2016_12_20_045009_modify_writing_from_string_to_int_on_users_table', 8),
(71, '2016_12_20_045349_modify_gender_from_string_to_int_on_users_table', 9),
(72, '2016_12_20_045622_add_workplace_to_users_table', 10),
(73, '2016_12_20_051132_create_work_experiences_table', 11),
(74, '2016_12_20_055335_drop_seekerexperiences_table', 12),
(76, '2016_12_20_055958_create_users_skills_table', 13),
(77, '2016_12_20_085623_add_about_me_on_users_table', 14),
(78, '2016_12_20_090348_add_job_title_on_users_table', 15),
(81, '2016_12_21_030258_add_rating_to_users_skill_table', 16),
(82, '2016_12_21_031336_add_name_description_to_users_skill_table', 16),
(84, '2016_12_21_053509_modify_work_experiences_table', 17),
(86, '2016_12_21_090706_create_usertypes_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `portfolioid` int(10) UNSIGNED NOT NULL COMMENT 'Portfolio Primary Key',
  `seekerid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for the Seeker table',
  `workcat` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Portfolio category like graphics, web design, social media marketing, etc..',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Portfolio url',
  `jobtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Job Title like Logo Designer, Web Developer, etc..',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Job description',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int(10) UNSIGNED NOT NULL,
  `empid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for Employers table',
  `seekerid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for Seekers table',
  `jobid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for Job table',
  `empreview` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Employers review on the job',
  `seekerreview` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Seeker review on the job',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skillid` int(10) UNSIGNED NOT NULL COMMENT 'Skills Primary Key',
  `skillname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Skill Name',
  `parent` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skillid`, `skillname`, `parent`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Office Admin (Virtual Assistants)', 0, NULL, '2016-11-21 09:33:31', '2016-11-21 09:33:31'),
(2, 'English', 0, NULL, '2016-11-21 09:34:28', '2016-11-21 09:34:28'),
(3, 'Writing', 0, NULL, '2016-11-21 09:38:49', '2016-11-21 09:38:49'),
(4, 'Marketing and Sales', 0, NULL, '2016-11-21 09:39:19', '2016-11-21 09:39:19'),
(5, 'Advertising', 0, NULL, '2016-11-21 09:40:14', '2016-11-21 09:40:14'),
(6, 'Admin Assistant', 1, NULL, '2016-11-21 09:40:33', '2016-11-21 09:42:23'),
(7, 'Data Entry', 1, NULL, '2016-11-21 09:42:51', '2016-11-21 09:42:51'),
(8, 'Email Management', 1, NULL, '2016-11-21 09:43:28', '2016-11-21 09:43:28'),
(9, 'Event Planner', 1, NULL, '2016-11-21 09:44:11', '2016-11-21 09:44:11'),
(10, 'Project Coordinator', 1, NULL, '2016-11-21 09:44:57', '2016-11-21 09:45:25'),
(11, 'Quality Assurance', 1, NULL, '2016-11-21 09:45:48', '2016-11-21 09:45:48'),
(12, 'Research', 1, NULL, '2016-11-21 09:46:09', '2016-11-21 09:46:09'),
(13, 'Transcription', 1, NULL, '2016-11-21 09:46:36', '2016-11-21 09:46:36'),
(14, 'Travel Planning', 1, NULL, '2016-11-21 09:46:58', '2016-11-21 09:46:58'),
(15, 'Speaking', 2, NULL, '2016-11-21 09:47:17', '2016-11-21 09:47:17'),
(16, 'Translation', 2, NULL, '2016-11-21 09:47:46', '2016-11-21 09:47:46'),
(17, 'Tutoring Teaching', 2, NULL, '2016-11-21 09:48:05', '2016-11-21 09:48:05'),
(18, 'Writing', 2, NULL, '2016-11-21 09:48:22', '2016-11-21 09:49:12'),
(19, 'Blogging', 3, NULL, '2016-11-21 09:50:02', '2016-11-21 09:50:02'),
(20, 'Copywriting', 3, NULL, '2016-11-21 09:50:25', '2016-11-21 09:50:25'),
(21, 'Creative Writing', 3, NULL, '2016-11-21 09:50:44', '2016-11-21 09:50:44'),
(22, 'Editing Proofreading', 3, NULL, '2016-11-21 09:51:04', '2016-11-21 09:51:04'),
(23, 'Ghost Writing', 3, NULL, '2016-11-21 09:51:30', '2016-11-21 09:51:30'),
(24, 'Technical Writing', 3, NULL, '2016-11-21 09:51:45', '2016-11-21 09:51:45'),
(25, 'Web Content Writing', 3, NULL, '2016-11-21 09:52:02', '2016-11-21 09:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `speakings`
--

CREATE TABLE `speakings` (
  `speak_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `speakings`
--

INSERT INTO `speakings` (`speak_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Basic', '2016-12-14 11:44:18', '2016-12-14 11:44:18'),
(2, 'Conversational', '2016-12-14 11:44:29', '2016-12-14 11:44:29'),
(3, 'Fluent', '2016-12-14 11:44:42', '2016-12-14 11:44:42'),
(4, 'Native or Bilingual', '2016-12-14 11:44:58', '2016-12-14 11:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionplans`
--

CREATE TABLE `subscriptionplans` (
  `subscriptionplansid` int(10) UNSIGNED NOT NULL COMMENT 'Primary key for the subscription plans',
  `planname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the plan',
  `amount` decimal(8,2) NOT NULL COMMENT 'The cost of the plan',
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The lenght of the plan(time)',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subid` int(10) UNSIGNED NOT NULL COMMENT 'Primary key for the subscriptions table',
  `empid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for the employers table',
  `subscriptionplansid` int(10) UNSIGNED NOT NULL COMMENT 'Foreign key for the Subscription Plan table',
  `subscribed` datetime NOT NULL COMMENT 'Date of subscription',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tab_notifications`
--

CREATE TABLE `tab_notifications` (
  `uid` int(11) NOT NULL,
  `notifications` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_periods`
--

CREATE TABLE `time_periods` (
  `id` int(10) UNSIGNED NOT NULL,
  `period` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time_periods`
--

INSERT INTO `time_periods` (`id`, `period`, `created_at`, `updated_at`) VALUES
(1, 'Less than 6 months', '2016-12-14 11:30:03', '2016-12-14 11:30:03'),
(2, 'Less than 1 year', '2016-12-14 11:30:25', '2016-12-14 11:30:25'),
(3, 'More than 1 year', '2016-12-14 11:30:42', '2016-12-14 11:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` smallint(6) NOT NULL DEFAULT '0' COMMENT '0: seeker, 1: employer, 2: system',
  `api_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker First Name',
  `mname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Middle Name. This field is optional.',
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Last Name',
  `dob` date DEFAULT NULL COMMENT 'Seeker Date of Birth',
  `gender` int(3) DEFAULT NULL,
  `profilepic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Profile Picture. Picture filename should be generated randomly.',
  `profilevid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Profile Video. Video will be uploaded on seeker youtube account unlisted (if they want the video to be not searchable on search engines.)',
  `weburl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker website URL.',
  `streetaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Street Address',
  `cityaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker City Address',
  `zipcode` int(11) DEFAULT NULL COMMENT 'Seeker Zip Code',
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker State',
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Phone Number and set it to unique.',
  `eduction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Highest Education attained by the seeker.',
  `availability` int(3) DEFAULT NULL,
  `desiredsalary` int(3) DEFAULT NULL,
  `engspeaking` int(3) DEFAULT NULL,
  `engwriting` int(3) DEFAULT NULL,
  `stationtype` int(3) DEFAULT NULL,
  `workplace` mediumint(9) DEFAULT NULL,
  `about_me` longtext COLLATE utf8_unicode_ci,
  `job_title` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ispspeed` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `api_token`, `password`, `remember_token`, `created_at`, `updated_at`, `fname`, `mname`, `lname`, `dob`, `gender`, `profilepic`, `profilevid`, `weburl`, `streetaddress`, `cityaddress`, `zipcode`, `state`, `phone`, `eduction`, `availability`, `desiredsalary`, `engspeaking`, `engwriting`, `stationtype`, `workplace`, `about_me`, `job_title`, `ispspeed`) VALUES
(1, 'Kenneth', 'kennvall@gmail.com', 1, '55DTbhAhbPl6q4yX9Rsp9sOn8t1QjK4EfMAIzVzEAsq4FUIQgiGAPA5jyOQM', '$2y$10$OiI1HVa5poMRnYB6QXu8e.qEUKYaI3WA64LHOhoiCX1E.WWAet5OG', 'yQ0yr9hL1teGOSj6gjPBkcTIfLxtOTZalerBTsuVf5ZC5xkChn2kpoDlnlMr', '2016-12-19 18:44:31', '2016-12-19 18:47:23', NULL, NULL, NULL, NULL, 1, 'dogs_calixton.jpg', '', '', NULL, NULL, NULL, NULL, '33', NULL, 1, 1, 2, 1, 1, 1, 'it\'s me', 'Graphic Artist', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_skills`
--

CREATE TABLE `users_skills` (
  `id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` mediumint(9) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_skills`
--

INSERT INTO `users_skills` (`id`, `skill_id`, `name`, `description`, `created_at`, `updated_at`, `rating`) VALUES
(1, 6, 'Admin Assistant', 'admin', NULL, NULL, 2),
(1, 13, 'Transcription', 'transcription.', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '1: seeker, 2: employer, 3: system',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'seeker', '2016-12-21 01:12:45', '2016-12-21 01:12:45'),
(2, 'employer', '2016-12-21 01:12:56', '2016-12-21 01:12:56'),
(3, 'system', '2016-12-21 01:13:04', '2016-12-21 01:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `workplaces`
--

CREATE TABLE `workplaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workplaces`
--

INSERT INTO `workplaces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'home', '2016-12-14 10:39:34', '2016-12-14 10:39:34'),
(2, 'office', '2016-12-14 10:39:53', '2016-12-14 10:39:53'),
(3, 'other', '2016-12-14 10:40:07', '2016-12-14 10:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `workstations`
--

CREATE TABLE `workstations` (
  `station_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workstations`
--

INSERT INTO `workstations` (`station_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'desktop', '2016-12-14 10:56:30', '2016-12-14 10:56:30'),
(2, 'laptop', '2016-12-14 10:56:43', '2016-12-14 10:56:43'),
(3, 'other', '2016-12-14 10:56:58', '2016-12-14 10:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `wxp_id` int(10) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL DEFAULT '0' COMMENT 'foriegn key from users',
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_title` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_period` smallint(6) DEFAULT NULL,
  `employer_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employer_firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employer_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`wxp_id`, `u_id`, `company_name`, `job_title`, `time_period`, `employer_contact`, `employer_firstname`, `employer_email`, `description`, `created_at`, `updated_at`) VALUES
(4, 1, 'S Activations', 'Graphic Artist', NULL, '123', 'Giovanni', 'g@gmail.com', 'doing visual communications stuff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `writings`
--

CREATE TABLE `writings` (
  `write_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `writings`
--

INSERT INTO `writings` (`write_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Elementary Level', '2016-12-14 11:58:49', '2016-12-14 11:58:49'),
(2, 'High School Level', '2016-12-14 11:59:08', '2016-12-14 11:59:08'),
(3, 'College Level', '2016-12-14 11:59:23', '2016-12-14 11:59:23'),
(4, 'Professional Level', '2016-12-14 11:59:39', '2016-12-14 11:59:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`avail_id`);

--
-- Indexes for table `desired_salaries`
--
ALTER TABLE `desired_salaries`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`empid`),
  ADD UNIQUE KEY `employers_email_unique` (`email`),
  ADD UNIQUE KEY `employers_phone_unique` (`phone`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `internet_speeds`
--
ALTER TABLE `internet_speeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`portfolioid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skillid`);

--
-- Indexes for table `speakings`
--
ALTER TABLE `speakings`
  ADD PRIMARY KEY (`speak_id`);

--
-- Indexes for table `subscriptionplans`
--
ALTER TABLE `subscriptionplans`
  ADD PRIMARY KEY (`subscriptionplansid`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `tab_notifications`
--
ALTER TABLE `tab_notifications`
  ADD UNIQUE KEY `tab_notifications_uid_serial_unique` (`uid`,`serial`);

--
-- Indexes for table `time_periods`
--
ALTER TABLE `time_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `users_skills`
--
ALTER TABLE `users_skills`
  ADD UNIQUE KEY `users_skills_id_skill_id_unique` (`id`,`skill_id`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workplaces`
--
ALTER TABLE `workplaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workstations`
--
ALTER TABLE `workstations`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`wxp_id`);

--
-- Indexes for table `writings`
--
ALTER TABLE `writings`
  ADD PRIMARY KEY (`write_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `avail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `desired_salaries`
--
ALTER TABLE `desired_salaries`
  MODIFY `salary_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `empid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Employer Table Primary Key';
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `gender_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `internet_speeds`
--
ALTER TABLE `internet_speeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Job Primary Key';
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key for message table';
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `portfolioid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Portfolio Primary Key';
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Skills Primary Key', AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `speakings`
--
ALTER TABLE `speakings`
  MODIFY `speak_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subscriptionplans`
--
ALTER TABLE `subscriptionplans`
  MODIFY `subscriptionplansid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key for the subscription plans';
--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key for the subscriptions table';
--
-- AUTO_INCREMENT for table `time_periods`
--
ALTER TABLE `time_periods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `workplaces`
--
ALTER TABLE `workplaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `workstations`
--
ALTER TABLE `workstations`
  MODIFY `station_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `wxp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `writings`
--
ALTER TABLE `writings`
  MODIFY `write_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
