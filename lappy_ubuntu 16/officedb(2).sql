-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2016 at 03:07 PM
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
(1, 'Part time -  less than 40 hrs/week', '2016-12-13 15:32:47', '2016-12-13 15:32:47'),
(2, 'Full time -  more than 40 hrs/week', '2016-12-13 15:33:22', '2016-12-13 15:33:22');

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
(1, '10, 000 -14, 999', '2016-12-14 01:08:04', '2016-12-14 01:08:04'),
(2, '15, 000 - 19, 999', '2016-12-14 01:08:46', '2016-12-14 01:08:46'),
(3, '20, 000 - 29, 999', '2016-12-14 01:09:17', '2016-12-14 01:09:17'),
(4, '30, 000 - 50, 000', '2016-12-14 01:09:54', '2016-12-14 01:09:54'),
(5, 'above 50, 000', '2016-12-14 01:10:11', '2016-12-14 01:10:11');

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
(1, 'male', '2016-12-14 21:21:27', '2016-12-14 21:21:27'),
(2, 'female', '2016-12-14 21:21:35', '2016-12-14 21:21:35'),
(3, 'not specified', '2016-12-14 21:21:49', '2016-12-14 21:21:49');

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
(1, 'less than 2 mpbs', '2016-12-14 01:40:33', '2016-12-14 01:40:33'),
(2, '2-4 mbps', '2016-12-14 01:42:26', '2016-12-14 01:42:26'),
(3, '5-10 mbps', '2016-12-14 01:42:42', '2016-12-14 01:42:42'),
(4, 'above 10', '2016-12-14 01:43:07', '2016-12-14 01:43:07');

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
(63, '2016_12_15_023240_add_name_to_workplaces_table', 2);

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
-- Table structure for table `seekerexperiences`
--

CREATE TABLE `seekerexperiences` (
  `experienceid` int(10) UNSIGNED NOT NULL COMMENT 'Seeker Experience Primary Key',
  `seekerid` int(10) UNSIGNED NOT NULL COMMENT 'Seeker ID foreign key',
  `companyname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the company where the seeker has worked',
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Seeker Position on the company',
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'How long the seeker worked on that company',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Seeker responsibilities/experience on the company',
  `contactinfo` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'employers contact information stored in csv by Employee First Name, Employers Email Address and Employers Contact Number.',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seekers`
--

CREATE TABLE `seekers` (
  `seekerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker First Name',
  `mname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Middle Name. This field is optional.',
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Last Name',
  `dob` date DEFAULT NULL COMMENT 'Seeker Date of Birth',
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Gender',
  `profilepic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Profile Picture. Picture filename should be generated randomly.',
  `profilevid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Profile Video. Video will be uploaded on seeker youtube account unlisted (if they want the video to be not searchable on search engines.)',
  `weburl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker website URL.',
  `streetaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Street Address',
  `cityaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker City Address',
  `zipcode` int(11) DEFAULT NULL COMMENT 'Seeker Zip Code',
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker State',
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Phone Number and set it to unique.',
  `eduction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Highest Education attained by the seeker.',
  `availability` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker availability, whether Full Time/40 hrs or Part Time/20 hrs.',
  `desiredsalary` decimal(8,2) DEFAULT NULL COMMENT 'Desired Salary by the seeker.',
  `engspeaking` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Proficiency in speaking English language.',
  `engwriting` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Proficiency in writing English language.',
  `stationtype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Type of work station the seeker is using. Eg: Loptop, Desktop,iPad and etc..',
  `ispspeed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Seeker Internet Speed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seekers`
--

INSERT INTO `seekers` (`seekerid`, `name`, `email`, `api_token`, `password`, `remember_token`, `created_at`, `updated_at`, `fname`, `mname`, `lname`, `dob`, `gender`, `profilepic`, `profilevid`, `weburl`, `streetaddress`, `cityaddress`, `zipcode`, `state`, `phone`, `eduction`, `availability`, `desiredsalary`, `engspeaking`, `engwriting`, `stationtype`, `ispspeed`) VALUES
(1, 'Kenneth Vallejos', 'kennvall@gmail.com', 'cU9CBK9GRQuQiVxtZd2k2ezmL1mnBCaQnCLXmVSNqRjG3NH9nsc8eFHCzJsH', '$2y$10$bxMr25.0CzgJB2HL8/SetuFFLSUszEbUuO/Xk5Lpnat3caffF.FU2', 'jmvqZqr4s2aMN9WsAVqCI6kaAQl9QUX8pDUhkk5oPJIT8R79R7BgV3Y08BYS', '2016-10-20 15:01:38', '2016-10-20 17:01:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Marc Piedad', 'marcp@pennnsar.com', 'bHt0lGFEKCqqEahuLBpBNp7DPZt4hwNYo0lVw62hJWlUoJ6ZKZUCpAu4l6Tb', '$2y$10$SrQqSGF73r0VQ9BWAa39nOf1CKKySAlctBuBm4YpTBm7WO.l/YeCu', 'mGUzdqTjZG9gqakGp8qgf1Roh2mumSvi3VVHy9gBIkEWJnOl4sxnSGqc4a8C', '2016-10-20 15:47:41', '2016-10-20 15:47:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 'Office Admin (Virtual Assistants)', 0, NULL, '2016-11-21 17:33:31', '2016-11-21 17:33:31'),
(2, 'English', 0, NULL, '2016-11-21 17:34:28', '2016-11-21 17:34:28'),
(3, 'Writing', 0, NULL, '2016-11-21 17:38:49', '2016-11-21 17:38:49'),
(4, 'Marketing and Sales', 0, NULL, '2016-11-21 17:39:19', '2016-11-21 17:39:19'),
(5, 'Advertising', 0, NULL, '2016-11-21 17:40:14', '2016-11-21 17:40:14'),
(6, 'Admin Assistant', 1, NULL, '2016-11-21 17:40:33', '2016-11-21 17:42:23'),
(7, 'Data Entry', 1, NULL, '2016-11-21 17:42:51', '2016-11-21 17:42:51'),
(8, 'Email Management', 1, NULL, '2016-11-21 17:43:28', '2016-11-21 17:43:28'),
(9, 'Event Planner', 1, NULL, '2016-11-21 17:44:11', '2016-11-21 17:44:11'),
(10, 'Project Coordinator', 1, NULL, '2016-11-21 17:44:57', '2016-11-21 17:45:25'),
(11, 'Quality Assurance', 1, NULL, '2016-11-21 17:45:48', '2016-11-21 17:45:48'),
(12, 'Research', 1, NULL, '2016-11-21 17:46:09', '2016-11-21 17:46:09'),
(13, 'Transcription', 1, NULL, '2016-11-21 17:46:36', '2016-11-21 17:46:36'),
(14, 'Travel Planning', 1, NULL, '2016-11-21 17:46:58', '2016-11-21 17:46:58'),
(15, 'Speaking', 2, NULL, '2016-11-21 17:47:17', '2016-11-21 17:47:17'),
(16, 'Translation', 2, NULL, '2016-11-21 17:47:46', '2016-11-21 17:47:46'),
(17, 'Tutoring Teaching', 2, NULL, '2016-11-21 17:48:05', '2016-11-21 17:48:05'),
(18, 'Writing', 2, NULL, '2016-11-21 17:48:22', '2016-11-21 17:49:12'),
(19, 'Blogging', 3, NULL, '2016-11-21 17:50:02', '2016-11-21 17:50:02'),
(20, 'Copywriting', 3, NULL, '2016-11-21 17:50:25', '2016-11-21 17:50:25'),
(21, 'Creative Writing', 3, NULL, '2016-11-21 17:50:44', '2016-11-21 17:50:44'),
(22, 'Editing Proofreading', 3, NULL, '2016-11-21 17:51:04', '2016-11-21 17:51:04'),
(23, 'Ghost Writing', 3, NULL, '2016-11-21 17:51:30', '2016-11-21 17:51:30'),
(24, 'Technical Writing', 3, NULL, '2016-11-21 17:51:45', '2016-11-21 17:51:45'),
(25, 'Web Content Writing', 3, NULL, '2016-11-21 17:52:02', '2016-11-21 17:52:02');

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
(1, 'Basic', '2016-12-14 19:44:18', '2016-12-14 19:44:18'),
(2, 'Conversational', '2016-12-14 19:44:29', '2016-12-14 19:44:29'),
(3, 'Fluent', '2016-12-14 19:44:42', '2016-12-14 19:44:42'),
(4, 'Native or Bilingual', '2016-12-14 19:44:58', '2016-12-14 19:44:58');

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
(1, 'Less than 6 months', '2016-12-14 19:30:03', '2016-12-14 19:30:03'),
(2, 'Less than 1 year', '2016-12-14 19:30:25', '2016-12-14 19:30:25'),
(3, 'More than 1 year', '2016-12-14 19:30:42', '2016-12-14 19:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `userskills`
--

CREATE TABLE `userskills` (
  `seekerid` int(10) UNSIGNED NOT NULL COMMENT 'Seeker Table foreign key',
  `skillid` int(10) UNSIGNED NOT NULL COMMENT 'Skills Table foreign key',
  `ratings` int(11) NOT NULL COMMENT 'User Skill rating from 1 to 5',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Column for soft delete.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'home', '2016-12-14 18:39:34', '2016-12-14 18:39:34'),
(2, 'office', '2016-12-14 18:39:53', '2016-12-14 18:39:53'),
(3, 'other', '2016-12-14 18:40:07', '2016-12-14 18:40:07');

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
(1, 'desktop', '2016-12-14 18:56:30', '2016-12-14 18:56:30'),
(2, 'laptop', '2016-12-14 18:56:43', '2016-12-14 18:56:43'),
(3, 'other', '2016-12-14 18:56:58', '2016-12-14 18:56:58');

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
(1, 'Elementary Level', '2016-12-14 19:58:49', '2016-12-14 19:58:49'),
(2, 'High School Level', '2016-12-14 19:59:08', '2016-12-14 19:59:08'),
(3, 'College Level', '2016-12-14 19:59:23', '2016-12-14 19:59:23'),
(4, 'Professional Level', '2016-12-14 19:59:39', '2016-12-14 19:59:39');

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
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `jobs_empid_foreign` (`empid`),
  ADD KEY `jobs_seekerid_foreign` (`seekerid`);

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
  ADD PRIMARY KEY (`portfolioid`),
  ADD KEY `portfolios_seekerid_foreign` (`seekerid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `reviews_empid_foreign` (`empid`),
  ADD KEY `reviews_seekerid_foreign` (`seekerid`),
  ADD KEY `reviews_jobid_foreign` (`jobid`);

--
-- Indexes for table `seekerexperiences`
--
ALTER TABLE `seekerexperiences`
  ADD PRIMARY KEY (`experienceid`),
  ADD KEY `seekerexperiences_seekerid_foreign` (`seekerid`);

--
-- Indexes for table `seekers`
--
ALTER TABLE `seekers`
  ADD PRIMARY KEY (`seekerid`),
  ADD UNIQUE KEY `seekers_email_unique` (`email`),
  ADD UNIQUE KEY `seekers_phone_unique` (`phone`);

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
  ADD PRIMARY KEY (`subid`),
  ADD KEY `subscriptions_empid_foreign` (`empid`),
  ADD KEY `subscriptions_subscriptionplansid_foreign` (`subscriptionplansid`);

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
-- Indexes for table `userskills`
--
ALTER TABLE `userskills`
  ADD KEY `userskills_seekerid_foreign` (`seekerid`),
  ADD KEY `userskills_skillid_foreign` (`skillid`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
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
-- AUTO_INCREMENT for table `seekerexperiences`
--
ALTER TABLE `seekerexperiences`
  MODIFY `experienceid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Seeker Experience Primary Key';
--
-- AUTO_INCREMENT for table `seekers`
--
ALTER TABLE `seekers`
  MODIFY `seekerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `writings`
--
ALTER TABLE `writings`
  MODIFY `write_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_empid_foreign` FOREIGN KEY (`empid`) REFERENCES `employers` (`empid`),
  ADD CONSTRAINT `jobs_seekerid_foreign` FOREIGN KEY (`seekerid`) REFERENCES `seekers` (`seekerid`);

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_seekerid_foreign` FOREIGN KEY (`seekerid`) REFERENCES `seekers` (`seekerid`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_empid_foreign` FOREIGN KEY (`empid`) REFERENCES `employers` (`empid`),
  ADD CONSTRAINT `reviews_jobid_foreign` FOREIGN KEY (`jobid`) REFERENCES `jobs` (`jobid`),
  ADD CONSTRAINT `reviews_seekerid_foreign` FOREIGN KEY (`seekerid`) REFERENCES `seekers` (`seekerid`);

--
-- Constraints for table `seekerexperiences`
--
ALTER TABLE `seekerexperiences`
  ADD CONSTRAINT `seekerexperiences_seekerid_foreign` FOREIGN KEY (`seekerid`) REFERENCES `seekers` (`seekerid`);

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_empid_foreign` FOREIGN KEY (`empid`) REFERENCES `employers` (`empid`),
  ADD CONSTRAINT `subscriptions_subscriptionplansid_foreign` FOREIGN KEY (`subscriptionplansid`) REFERENCES `subscriptionplans` (`subscriptionplansid`);

--
-- Constraints for table `userskills`
--
ALTER TABLE `userskills`
  ADD CONSTRAINT `userskills_seekerid_foreign` FOREIGN KEY (`seekerid`) REFERENCES `seekers` (`seekerid`),
  ADD CONSTRAINT `userskills_skillid_foreign` FOREIGN KEY (`skillid`) REFERENCES `skills` (`skillid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
