-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2019 at 10:20 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcgqehmy_astrobhim`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(191) NOT NULL,
  `introduction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `indentity` longtext,
  `goal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `office_name` varchar(191) DEFAULT NULL,
  `office_address` varchar(191) DEFAULT NULL,
  `office_tel` varchar(191) DEFAULT NULL,
  `office_mob` varchar(191) DEFAULT NULL,
  `office_email` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `introduction`, `mission`, `indentity`, `goal`, `office_name`, `office_address`, `office_tel`, `office_mob`, `office_email`, `created_at`, `updated_at`) VALUES
(1, 'My Name is Bhimsen Pudasaini (Mr. Bhim), i am live in Kathmandu, Nepal. i am a noted and internationally renowned astrologist and Vastu specialist. In a relatively young age, I have finished academic diploma in Astrology and Vastu Sastra and has created a name for myself in this field. I am extremely popular not just in Nepal and India, dubai, Franch, Belgium  and many more countries, but also in the West where i travels frequently to attend spiritual seminars and conferences and also preaches to my disciples scattered across different parts of the world. I’am lives in Kathmandu but my services are not just limited in the capital as my influence can be felt in major cities like Chitwan, Hetauda, Pokhara, Rajbraj, Nepalgunj, Birjung, Birtamod Biratnagar and others in Nepal ,Delhi, Mumbay, Jaipur, Raipur, Goa, Haridwar, Rishikesh, Dehradun Cant ,Calcutta in India.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, assumenda, at atque ducimus eveniet excepturi illo inventore labore magnam maiores molestiae mollitia obcaecati quia repellat reprehenderit temporibus veniam. Suscipit, vel.<br />\r\n&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, assumenda, at atque ducimus eveniet excepturi illo inventore labore magnam maiores molestiae mollitia obcaecati quia repellat reprehenderit temporibus veniam. Suscipit, vel.</p>\r\n\r\n<p>&nbsp;</p>', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, assumenda, at atque ducimus eveniet excepturi illo inventore labore magnam maiores molestiae mollitia obcaecati quia repellat reprehenderit temporibus veniam. Suscipit, vel.asdfasdfdas</p>', 'Astrology & Yoga Counselling Service Center', 'Hurstville, Sydney', NULL, '0410 847 455', 'pudasainibhim@gmail.com', '2019-04-25 00:16:46', '2019-04-25 05:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'UnCategorized', '', '2019-01-17 06:23:27', '2019-01-17 00:32:00'),
(2, 'Travel & Tours', '<p>NA</p>', '2019-01-17 01:04:54', '2019-01-17 01:04:54'),
(3, 'Yoga', '<p>NA</p>', '2019-01-17 03:09:12', '2019-01-17 03:09:12'),
(4, 'Letter of Appreciations', '<p>NA</p>', '2019-01-17 03:09:42', '2019-01-17 03:09:42'),
(5, 'Certificates (Astrology)', '<p>NA</p>', '2019-01-18 07:01:39', '2019-01-18 01:16:39'),
(6, 'Awards & Medals', '<p>NA</p>', '2019-01-18 01:10:51', '2019-01-18 01:10:51'),
(7, 'Astro Office', '<p>NA</p>', '2019-01-18 01:13:00', '2019-01-18 01:13:00'),
(8, 'Certificates (Yoga)', '<p>NA</p>', '2019-01-18 01:16:25', '2019-01-18 01:16:25'),
(9, 'Recommended (Organizational)', '<p>NA</p>', '2019-01-18 01:17:37', '2019-01-18 01:17:37'),
(10, 'Recommended (Personal)', '<p>NA</p>', '2019-01-18 01:17:46', '2019-01-18 01:17:46'),
(11, 'Certificates (Spa)', '<p>NA</p>', '2019-01-18 01:18:27', '2019-01-18 01:18:27'),
(12, 'Certificates (Registration)', '<p>NA</p>', '2019-01-19 17:28:12', '2019-01-19 17:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_content` varchar(191) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `news_status` enum('Active','InActive','Rejected','') NOT NULL DEFAULT 'Active',
  `name` varchar(191) DEFAULT NULL,
  `news_view` enum('Yes','No','','') NOT NULL DEFAULT 'No',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_content`, `user_id`, `news_id`, `news_status`, `name`, `news_view`, `created_at`, `updated_at`) VALUES
(1, 'Nice Article', 0, 1, 'Active', 'Ramesh Dahal', 'No', '2019-01-20 14:54:30', '2019-01-20 14:54:30'),
(2, 'Nice blogs !', 0, 2, 'Active', 'Dinesh Thapa', 'No', '2019-01-22 10:28:41', '2019-01-22 10:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `contact`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ramsh Dahal', '9856065444', 'geniusservicenepal@gmail.com', 'Hello Bhim Sir', '2019-01-20 14:58:27', '2019-01-20 14:58:27'),
(2, 'Smritee dahal', '9849027047', 'Smritidahaal@gmail.com', 'Where is this located ?', '2019-01-23 23:41:26', '2019-01-23 23:41:26'),
(3, 'Emm', 'gregorCex@gmail.com', 'gregorCex@gmail.com', 'We offer you the opportunity to advertise your products and services. \r\n \r\nCiao! Behold is  nice offering for you. I can send your commercial offers or messages through feedback forms. The advantage of this method is that the messages sent through the feedback forms are included in the white list. This method increases the chance that your message will be read. The same way you received this message. \r\nSending via Feedback Forms to any domain zones of the world. (more than 1000 domain zones.). \r\nThe cost of sending 1 million messages for any domain zone of the world is $ 49 instead of $ 99. \r\nDomain zone .com - (12 million messages sent) - $399 instead of $699 \r\nAll domain zones in Europe- (8 million messages sent) - $ 299 instead of $599 \r\nAll sites in the world (25 million messages sent) - $499 instead of $999 \r\nDomain zone .de - (2 million messages sent) - $99 instead of $199 \r\nDomain zone .uk - (1.5 million messages sent) - $69 instead of $139 \r\nDomain zone .nl - (700 000 sent messages) - $39 instead of $79 \r\n \r\nDiscounts are valid until March 25. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype – FeedbackForm2019 \r\nEmail - FeedbackForm2019@gmail.com \r\n \r\nAll the best', '2019-03-15 12:16:43', '2019-03-15 12:16:43'),
(4, 'EugeneTrubs', 'castlejudson85@hotmail.com', 'castlejudson85@hotmail.com', 'Hi.., \r\n \r\n \r\nHave you ever wished to have a magic pill that can increase your productivity, creativity and focus all at once? \r\n \r\n \r\nThe answer is right here. \r\n \r\n \r\nModafinil is a Next Generation supplement used by scientists and military personnel, sportsmen and rescue squads, CEOs and IT developers to stay focused while performing hefty tasks, working extra hours without any scope for  mistakes. \r\n \r\n \r\nAre you intrigued? \r\n \r\n \r\nHere are few facts on how Modafinil is helping millions of people like you right now: \r\n \r\n \r\n- Modafinil is a Eugeroic, a wakefulness-promoting agent able to improve cognitive function, memory, creativity and motivation. \r\n \r\n- Modafinil is successfully used by people to perform repetitive tasks and stay focused, work in stressed conditions and extra hours, or those needing to boost their creativity. \r\n \r\nModafinil is safe and certain way to boost your productivity when you really need it, be it approaching deadlines or an important early morning presentation. \r\n \r\nTo know more about benefits of Modafinil and try it yourself today, visit us here:  http://www.modpill.com', '2019-04-19 00:20:53', '2019-04-19 00:20:53'),
(5, 'Anoj khadka', '0424746633', NULL, 'Astrology', '2019-04-25 08:26:58', '2019-04-25 08:26:58'),
(6, 'Robertamore', 'svetlanacol0sova@yandex.ua', 'svetlanacol0sova@yandex.ua', 'Let your bitcoins brings you +10% per 2 days. \r\nGet paid automatically and earn again! \r\n \r\nTry  http://dc-btc.site \r\none click registration and getting asset \r\n \r\nPowered by Mutual assistance Algorithm and Blockchain. \r\nWarranty!', '2019-05-22 18:23:13', '2019-05-22 18:23:13'),
(7, 'CarlosOxype', 'conciergexleads@gmail.com', 'conciergexleads@gmail.com', 'Hi, astrologybhim.com \r\n \r\nLet\'s see how we can achieve better advertising result for your business. \r\n \r\nI would like to start by sharing with you a case study of a local campaign we ran for a Burger King franchise. \r\nTheir budget was only $1200 and we got them $4,825 in value of sales! \r\n \r\nSee how we did it - Click here https://www.conciergedigitalleads.com/uploads/sYvnOSwp/SuccessStories-ReachFrequency-BurgerKing.pdf to download the Burger King case study \r\n \r\nOur company runs full-service Facebook Advertising campaigns with guaranteed results for as low as $95 for a one-off campaign. \r\n \r\n \r\nLet’s talk today.  Click here https://conciergeleads.youcanbook.me/ to Book a 15mins Free Consultation Now \r\n \r\nOur process is super short and easy \r\n \r\n1.	We set up a 15min call in which we learn about your business \r\n2.	On the same call, we can design a campaign and start running \r\n3.	We do all the work – a 100% \r\n4.	You can try us with a very low budget \r\n \r\nWe do everything from writing the copy, designing the ad, set up, and delivery on Facebook, ongoing optimization and reporting. \r\nWe deliver a FULL-service solution. \r\n \r\nBook a 15mins Free Consultation Now...Click here https://conciergeleads.youcanbook.me/ \r\n \r\nLooking forward to talking with you. \r\nThanks, \r\n \r\nEmily Van Garderen \r\nClient Management Executive \r\nConcierge Leads \r\nconciergeseoleads@gmail.com \r\nT. 844-899-9770 \r\n5887 N 42ND Street Milwaukee WI 53209', '2019-05-28 11:09:13', '2019-05-28 11:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT '1',
  `title` varchar(191) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `photo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `cat_id`, `title`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(5, 2, 'Travels in Paris', '<p>na</p>', 'cc08433a9044cffb5a5a7357548fb16b.jpg', '2019-01-20 04:56:55', '2019-01-20 11:56:55'),
(6, 2, 'Travels in Belgium', '<p>asdf</p>', 'b654906f044fcd359a44fa17848e249f.jpg', '2019-01-20 05:04:26', '2019-01-20 12:04:26'),
(7, 2, 'travelling to Dubai', '<p>Trivuwan International Airport During travelling to Dubai for Astro Program</p>', '75055d1e9a5046173483eaf73ed855ee.jpg', '2019-01-20 05:30:49', '2019-01-20 12:30:49'),
(8, 3, 'Yoga', '<p>NA</p>', '70c9acb8631991891dfb49a2189e5395.jpg', '2019-01-17 03:10:07', '2019-01-17 03:10:07'),
(9, 3, 'Yoga', '<p>na</p>', '263fb524ea952a70bba17df105500167.jpg', '2019-01-17 03:10:18', '2019-01-17 03:10:18'),
(10, 5, 'Organizational Membership Certificates', '<p>Organizational Membership Certificates</p>', '3b85821cc9ef32784f6659c00b94b760.jpg', '2019-01-18 01:09:04', '2019-01-18 01:09:04'),
(11, 5, 'Liftime Membership Certificates', '<p>Liftime Membership Certificates&nbsp;</p>', 'd373ccdefce69188db7a76a66c5dd421.jpg', '2019-01-18 01:10:03', '2019-01-18 01:10:03'),
(12, 6, 'Awards & Medals', '<p>NA</p>', '270e7826c335c7ea9cab32c9ff15d8c8.jpg', '2019-01-18 01:11:16', '2019-01-18 01:11:16'),
(13, 7, 'Offie Photo', '<p>Offie Photo</p>', '302b1a03cbe7645ca9aebfa54e75bed3.1547794721.jpg', '2019-01-18 06:58:41', '2019-01-18 01:13:41'),
(14, 12, 'Company Registration Certificates', '<p>Company Registration Certificates</p>', 'd5d0c40774158827f3d8332438ced436.jpg', '2019-01-19 17:29:56', '2019-01-19 17:29:56'),
(15, 12, 'PAN Registration Certificates', '<p>PAN Registration Certificates</p>', '3f70a70a882da82e841366c46e9c09e4.jpg', '2019-01-19 17:30:46', '2019-01-19 17:30:46'),
(16, 8, 'Certificates of Participation', '<p>Certificates of Participation<br />\r\n1st World Youth Cup Yog Contest 2011</p>', '1b2e155a714bd1d54a020660b6e8a7b8.jpg', '2019-01-19 17:33:15', '2019-01-19 17:33:15'),
(17, 8, 'Certificates of Recogniation (Reiki First)', '<p>Certificates of Recogniation (Reiki First)<br />\r\n&nbsp;</p>', '6dbd12b5ba8e37a2600e6f46694b07f9.jpg', '2019-01-21 08:39:17', '2019-01-21 15:39:17'),
(18, 8, 'Ayurvedic Massage Training Certificate', '<p>Ayurvedic Massage Training Certificate&nbsp; Orgnized by Holistic Yoga Ashram</p>', '72ee65cdf2296a686045633873e53892.jpg', '2019-01-19 17:39:53', '2019-01-19 17:39:53'),
(19, 5, 'Certificates of Mata Bindabasini Samman', '<p>Certificates of Mata Bindabasini Samman Orgnized by South Asian Sstro-Fedaration&nbsp;</p>', 'e243f7e6d14e796bf65e70230889a162.jpg', '2019-01-19 17:43:26', '2019-01-19 17:43:26'),
(20, 6, 'Awards & Medals', '<p>Awards &amp; Medals</p>', '54897b37dd0d30a89d2e300e404945eb.jpg', '2019-01-19 17:46:15', '2019-01-19 17:46:15'),
(21, 7, 'Office Photo', '<p>Office Photo</p>', '695926c5f2e10b9bd2d17ac9f217472d.jpg', '2019-01-19 17:47:25', '2019-01-19 17:47:25'),
(22, 7, 'Office Front photo', '<p>Office Front photo</p>', 'c38489250dd67bd6254cf1cbe8f36888.jpg', '2019-01-19 17:50:59', '2019-01-19 17:50:59'),
(23, 2, 'Travel Dubai', '<p>Travel Photos</p>', 'c2beaa1c1c12c6bb0c33bf1f2cdb7d46.jpg', '2019-01-20 05:30:15', '2019-01-20 12:30:15'),
(24, 3, 'Yoga (1)', NULL, '4b7c162742c8f1f57daa3536c46a0606.jpg', '2019-01-20 12:19:39', '2019-01-20 12:19:39'),
(25, 3, 'Yoga - Line Pose', NULL, '8281a48908980eed00f5824783fd3038.jpg', '2019-01-20 12:20:05', '2019-01-20 12:20:05'),
(26, 3, 'Yoga - Tree Pose', NULL, 'dd32925b86a74d21ce713040e7e0e48c.jpg', '2019-01-20 12:20:26', '2019-01-20 12:20:26'),
(27, 3, 'Yoga - Seating Balance', NULL, '093113323fd33d4ec397685e43f62f75.jpg', '2019-01-20 12:21:17', '2019-01-20 12:21:17'),
(28, 3, 'Yoga - Mountain Pose', NULL, '6ca24cd98124f32f2494563d0e863e8d.jpg', '2019-01-20 12:21:44', '2019-01-20 12:21:44'),
(29, 3, 'Yoga- Tada Ashan', NULL, '7907d5cd45f7321724b2889ae3c2e225.jpg', '2019-01-20 12:22:03', '2019-01-20 12:22:03'),
(30, 3, 'Yoga- Cat Pose', NULL, '1d1302efcc097064c3818d86991ddfe5.jpg', '2019-01-20 12:23:07', '2019-01-20 12:23:07'),
(31, 3, 'Yoga - Tree Pose', NULL, '137ca0297f18c089a382334d89051c49.jpg', '2019-01-20 12:23:41', '2019-01-20 12:23:41'),
(32, 3, 'Yoga- Tada Ashan', NULL, '28b659435970bf88e788fd12a6c68410.jpg', '2019-01-20 12:24:08', '2019-01-20 12:24:08'),
(33, 2, 'Belgium Brushel', NULL, 'd9488327a77f96ef1720376d91d58de7.jpg', '2019-01-20 12:28:51', '2019-01-20 12:28:51'),
(34, 2, 'Dubai Tour', NULL, '41334cc73cc53a26d3780b38f202738e.jpg', '2019-01-20 12:29:30', '2019-01-20 12:29:30'),
(35, 2, 'Program photo', NULL, 'c51bb3af6e13ef3c67943e1412ae4360.jpg', '2019-01-20 12:32:18', '2019-01-20 12:32:18'),
(36, 2, 'With Dr. Satya Biswas', NULL, '440a787803ecee23b194a679b77637a4.jpg', '2019-01-20 12:32:39', '2019-01-20 12:32:39'),
(37, 2, 'With Dr. Lokraj Poudel', NULL, 'f3de1a887dc66cea3d0eada5a9ee0faa.jpg', '2019-01-20 12:33:07', '2019-01-20 12:33:07'),
(38, 5, 'Certificates of Participation', NULL, '326e806a31e530185b436beb8455c39e.jpg', '2019-01-20 12:36:38', '2019-01-20 12:36:38'),
(39, 5, 'Certificates of Participation', NULL, 'c5d542cd7d6210494f5fb72d207c1665.jpg', '2019-01-20 12:37:21', '2019-01-20 12:37:21'),
(40, 5, 'Certificates of Participation', NULL, '17678bfdf2172fdd23d167a1904f907f.jpg', '2019-01-20 12:37:45', '2019-01-20 12:37:45'),
(41, 8, 'Certificates of Participation', NULL, '4e1a1c7fe16de40752a343aaec786cbd.jpg', '2019-01-20 06:18:03', '2019-01-20 13:18:03'),
(42, 10, 'Letter of Recommendation', NULL, '39dd9053fc3c75591df58a07b3b996f7.jpg', '2019-01-20 12:39:13', '2019-01-20 12:39:13'),
(43, 9, 'Letter of Recommendation', NULL, '281740bc7e78843d969408d7264ec0e7.jpg', '2019-01-20 05:44:27', '2019-01-20 12:44:27'),
(44, 9, 'Letter of Recommendation', NULL, 'b5f03a518243df2897a4df5ceb3ce69a.jpg', '2019-01-20 05:46:31', '2019-01-20 12:46:31'),
(45, 9, 'Letter of Recommendation', NULL, '5baa357d1dfc6d5db32fa521c50cdd41.jpg', '2019-01-20 05:45:21', '2019-01-20 12:45:21'),
(46, 9, 'Letter of Recommendation', NULL, 'f7e757279e7e007c0fab7103729d690e.jpg', '2019-01-20 05:45:36', '2019-01-20 12:45:36'),
(47, 10, 'Letter of Recommendation', NULL, '56037d9b930a609c144833635a4fd8c1.jpg', '2019-01-20 12:42:33', '2019-01-20 12:42:33'),
(49, 5, 'Certificates', NULL, 'd4e0969c88d925c87c4e6286e4f662d6.jpg', '2019-01-20 12:47:17', '2019-01-20 12:47:17'),
(50, 5, 'Certificates', NULL, 'd91d448180b4a187e7ef27246c0d462a.jpg', '2019-01-20 12:47:43', '2019-01-20 12:47:43'),
(51, 5, 'Certificates', NULL, '83c7d66c7e689731e5ab62e8d52b9db3.jpg', '2019-01-20 12:48:00', '2019-01-20 12:48:00'),
(52, 5, 'Machhindranath Award', '<p>Certificates of Machhindranath Award</p>', '4ce68eef34d317f1a273d5a8a7f520c6.jpg', '2019-01-20 05:52:56', '2019-01-20 12:52:56'),
(53, 5, 'Certificates', NULL, '412f88c4b8ecbef68b981caff5eca02b.jpg', '2019-01-20 12:49:06', '2019-01-20 12:49:06'),
(54, 5, 'Certificates', NULL, '163a4289d956b3e030ca6ed59919bf3c.jpg', '2019-01-20 12:49:41', '2019-01-20 12:49:41'),
(55, 5, 'Certificates of Participation', NULL, '0208b3a5feb3d3ab43e7cf848da79fcf.jpg', '2019-01-20 12:49:59', '2019-01-20 12:49:59'),
(56, 5, 'Certificates', NULL, '18fdf9ccea5d1001c62ea79521de55dd.jpg', '2019-01-20 12:50:35', '2019-01-20 12:50:35'),
(57, 9, 'Letter of Recommendation', NULL, '4c17ac09e17b56b3e2f6da95f3b0d32e.jpg', '2019-01-20 12:51:32', '2019-01-20 12:51:32'),
(58, 5, 'Certificates of Participation', NULL, '2cd5a438de7867f3d33dd3a89b90a67f.jpg', '2019-01-20 12:52:05', '2019-01-20 12:52:05'),
(59, 8, 'Certificates', NULL, '9a0fe7dbc16b31a546b9a732f1ab0a0b.jpg', '2019-01-20 12:53:45', '2019-01-20 12:53:45'),
(60, 5, 'Certificates', NULL, '18d2210bf8963d45259d472f78ea8ada.jpg', '2019-01-20 12:54:12', '2019-01-20 12:54:12'),
(61, 5, 'Shiva Award', NULL, '6a9f8ad158ba90da28a396a03da3fb86.jpg', '2019-01-20 12:54:44', '2019-01-20 12:54:44'),
(62, 5, 'Certificates', NULL, '3e0ede6cecd2f1fd2b61fd058ea0706e.jpg', '2019-01-20 12:55:17', '2019-01-20 12:55:17'),
(63, 5, 'Certificates', NULL, '5120803e30e93fedd488cfc6bd5e5e16.jpg', '2019-01-20 12:56:10', '2019-01-20 12:56:10'),
(64, 5, 'Certificates For Gold Medal', NULL, '55a197c6b10e901b5a1cc14039de4297.jpg', '2019-01-20 12:57:26', '2019-01-20 12:57:26'),
(65, 5, 'Certificates for Merit', NULL, 'af0de819b781d0872c786567ba8cf38c.jpg', '2019-01-20 12:58:09', '2019-01-20 12:58:09'),
(66, 5, 'Swami Vivekananda Award', NULL, '3f1fb6fb9af6fd07d33dadb269584998.jpg', '2019-01-20 12:59:22', '2019-01-20 12:59:22'),
(67, 5, 'Vindabasini Award', NULL, '628c35829ce74e96f13136d9b86b0d21.jpg', '2019-01-20 13:00:01', '2019-01-20 13:00:01'),
(68, 2, 'Kalkata, India', NULL, '3eb997338a7173740edccff350564e1a.jpg', '2019-01-20 13:16:29', '2019-01-20 13:16:29'),
(69, 2, 'Kalkata, India', NULL, '491743ebeebf809e5ea1781d4968ed28.jpg', '2019-01-20 13:19:24', '2019-01-20 13:19:24'),
(70, 2, 'Kalkata, India', NULL, '1a1d4b6d05ddb809033bab8b804ec06a.jpg', '2019-01-20 13:19:40', '2019-01-20 13:19:40'),
(71, 2, 'Kalkata, India', NULL, '6869973b7e39c05e57d110be552df5df.jpg', '2019-01-20 13:19:55', '2019-01-20 13:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `introductions`
--

CREATE TABLE `introductions` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `intro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `number` varchar(191) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `introductions`
--

INSERT INTO `introductions` (`id`, `name`, `title`, `intro`, `number`, `photo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bhimsen Pudasaini', 'Astrology & Yoga Teacher based in Sydney', '<p>I am Bhimsen Pudasaini, internationally renowned <strong>Astrologist</strong> and <strong>Vastu specialist </strong>based in Sydney. With a Diploma in Astrology and Vastu Sastra, I have created a name for myself in this spiritual field. My impression spreads from Nepal &amp; India through to Dubai, France, Belgium, and many other European countries. I frequently attend International Spiritual seminars and conferences and also preach my disciples scattered across different parts of the world.</p>\r\n\r\n<p><br />\r\nMy influence can be felt in major cities like Chitwan, Hetauda, Pokhara, Rajbraj, Nepalgunj, Birgunj, Birtamod, Biratnagar and other cities in Nepal as well as&nbsp;Delhi, Mumbai, Jaipur, Rajpur, Goa, Haridwar, Rishikesh, Dehradun, Calcutta and other parts in India.</p>\r\n\r\n<p>If you require consultation about <strong>Astrology, Yoga, Vastu</strong> or about<strong> Gemstone, Rudraksha, Vaydic karma</strong> or would like to discuss other special services I provide, below is my contact details:<br />\r\n&nbsp;</p>\r\n\r\n<p>Mobile No: 0410 847 455 (Sydney)</p>\r\n\r\n<p>E-mail: <a href=\"mailto:pudasainibhim@gmail.com\">pudasainibhim@gmail.com</a></p>', '0410 847 455', '68e84abe4bd0c90e6593c1b3f673dc48.1547702562.jpg', 1, '2019-04-25 00:32:36', '2019-04-25 05:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2018_07_07_143640_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nepal_districts`
--

CREATE TABLE `nepal_districts` (
  `id` int(191) NOT NULL,
  `district_name` varchar(191) NOT NULL,
  `zone_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nepal_districts`
--

INSERT INTO `nepal_districts` (`id`, `district_name`, `zone_id`) VALUES
(1, 'Achham', NULL),
(2, 'Arghakhanchi', NULL),
(3, 'Baglung', NULL),
(4, 'Baitadi', NULL),
(5, 'Bajhang', NULL),
(6, 'Bajura', NULL),
(7, 'Banke', NULL),
(8, 'Bara', NULL),
(9, 'Bardiya', NULL),
(10, 'Bhaktapur', NULL),
(11, 'Bhojpur', NULL),
(12, 'Chitwan', NULL),
(13, 'Dadeldhura', NULL),
(14, 'Dailekh', NULL),
(15, 'Dang Deukhuri', NULL),
(16, 'Darchula', NULL),
(17, 'Dhading', NULL),
(18, 'Dhankuta', NULL),
(19, 'Dhanusa', NULL),
(20, 'Dolakha', NULL),
(21, 'Dolpa', NULL),
(22, 'Doti', NULL),
(23, 'Gorkha', NULL),
(24, 'Gulmi', NULL),
(25, 'Humla', NULL),
(26, 'Ilam', NULL),
(27, 'Jajarkot', NULL),
(28, 'Jhapa', NULL),
(29, 'Jumla', NULL),
(30, 'Kailali', NULL),
(31, 'Kalikot', NULL),
(32, 'Kanchanpur', NULL),
(33, 'Kapilvastu', NULL),
(34, 'Kaski', NULL),
(35, 'Kathmandu', NULL),
(36, 'Kavrepalanchok', NULL),
(37, 'Khotang', NULL),
(38, 'Lalitpur', NULL),
(39, 'Lamjung', NULL),
(40, 'Mahottari', NULL),
(41, 'Makwanpur', NULL),
(42, 'Manang', NULL),
(43, 'Morang', NULL),
(44, 'Mugu', NULL),
(45, 'Mustang', NULL),
(46, 'Myagdi', NULL),
(47, 'Nawalparasi', NULL),
(48, 'Nuwakot', NULL),
(49, 'Okhaldhunga', NULL),
(50, 'Palpa', NULL),
(51, 'Panchthar', NULL),
(52, 'Parbat', NULL),
(53, 'Pyuthan', NULL),
(54, 'Parsa', NULL),
(55, 'Ramechhap', NULL),
(56, 'Rasuwa', NULL),
(57, 'Rautahat', NULL),
(58, 'Rolpa', NULL),
(59, 'Rukum', NULL),
(60, 'Rupandehi', NULL),
(61, 'Salyan', NULL),
(62, 'Sankhuwasabha', NULL),
(63, 'Saptari', NULL),
(64, 'Sarlahi', NULL),
(65, 'Sindhuli', NULL),
(66, 'Sindhupalchok', NULL),
(67, 'Siraha', NULL),
(68, 'Solukhumbu', NULL),
(69, 'Sunsari', NULL),
(70, 'Surkhet', NULL),
(71, 'Syangja', NULL),
(72, 'Tanahun', NULL),
(73, 'Taplejung', NULL),
(74, 'Terhathum', NULL),
(75, 'Udayapur', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_feeds`
--

CREATE TABLE `news_feeds` (
  `id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `news_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_photo` varchar(191) CHARACTER SET latin1 NOT NULL,
  `news_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `views` bigint(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_feeds`
--

INSERT INTO `news_feeds` (`id`, `user_id`, `news_title`, `news_photo`, `news_description`, `views`, `created_at`, `updated_at`) VALUES
(2, 1, 'Importance of Ganesh Chaturthi', '0.16762500 1548038763.jpg', '<p><strong>Ganesh Chaturthi</strong>, along with its religious aspect, is also a very economic event and is celebrated with a lot of grandiosity throughout&nbsp;India and Nepal. The festival commences with the cleaning and decoration of houses. Marvelous clay idols are constructed by artisan months before the festival begins.<br />\r\nRituals of the festival include chanting slokas, mantras,&nbsp;devotional songs, Arti and so on. Arti is the circulation of an earthen lamp by the priest and it is done with utmost devotion to pay reverence to the deity. Modak and Karanji are the popular festival food. Modak is a preparation made of steamed rice flour parcels containing a stuffing of jaggery, desiccated coconut, and dry fruits. The other delicacies of this festival are Paavasam, Pedha, Badam Barfi, Sabudana, laddoo, Puliyodarai (tamarind rice) and so on. The festivities which include dances, theatrical performances, songs, bursting of crackers and so on, all come to an end with the immersion of Lord Ganesha idol in the holy river, lakes etc..<br />\r\n<strong>Ganesh Chaturthi significance:&nbsp;</strong>lies in worshipping the God of power and wisdom to invoke his blessings in order to attain spiritual knowledge, wisdom, and success in all endeavors. Ganesh Chaturthi is observed nationwide for prosperity and good fortune.<br />\r\n<br />\r\nGanesh Chaturthi also was known as Vinayaka Chaturthi is one of the important Hindu festivals celebrated throughout&nbsp;Nepal&nbsp;and&nbsp;India&nbsp;with a great devotion. This day is celebrated as the birthday of Lord Ganesh, the elephant-headed son of Lord Shiva and Goddess Parvati. Lord Ganesh is the symbol of wisdom, prosperity and good fortune.<br />\r\nGanesh Chaturthi is celebrated on Shukla Chaturthi of the Hindu month of Bhadra (generally falls between August and September). This festival is celebrated by Hindus with a great enthusiasm. People bring idols of Lord Ganesh to their homes and do worship. The duration of this festival varies from 1 day to 11 days, depending on the place and tradition. On the last day of the festival, the idols are taken out in a colorful and musical procession and immersed traditionally in water.<br />\r\n<br />\r\nAs per Hindu mythology, Lord Ganesh is considered as &quot;Vigana Harta&quot; (one who removes obstacles) and &quot;Buddhi Pradaayaka&quot; (one who grants intelligence). This festival is very important for students, they worship Lord Ganesh to illumine their minds.</p>', 71, '2019-06-15 15:32:40', '2019-06-15 20:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `intro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `intro`, `created_at`, `updated_at`) VALUES
(1, 'About Astrology', '<p><strong>What is Astrology ?</strong><br />\r\nAstrology is the study of the movements and relative positions of celestial objects as a means of divining information about human affairs and terrestrial events. Astrology is known as light; Astrology has been dated to at least the 2nd millennium BCE, and has its roots in cylindrical systems used to predict seasonal shifts and to interpret celestial cycles as signs of divine communications. Many cultures have attached importance to astronomical events, and some&mdash;such as the Nepalese, Indians, Chinese, and many&mdash;developed elaborate systems for predicting terrestrial events from celestial observations. Western astrology, one of the oldest astrological systems still in use, can trace its roots to 17th&ndash;19th century BCE Mesopotamia, from which it spread to Ancient Greece, Rome, the Arab world and eventually Central and Western Europe.</p>\r\n\r\n<p>Although astrological predecessor is ignorant, it is very modern and completely true in itself. Therefore astrological evidence has proved that future science can&rsquo;t be done by the help of disaster math&rsquo;s.</p>', '2019-01-21 02:25:55', '2019-01-21 09:25:55'),
(2, 'About Yoga', '<p><strong>Some tips of YOGA</strong></p>\r\n\r\n<ul>\r\n	<li>Fire, Air, Sky, Earth and Water are the five element.</li>\r\n	<li>This is the universe</li>\r\n	<li>We too are the part of that so we too are the form of the 5 element</li>\r\n	<li>If you go natural you are healthy, if not you are in problem</li>\r\n	<li>Right use of nature is you are ok</li>\r\n	<li>You have to make balance the 5 element in your body</li>\r\n	<li>You go Natural way and it is say your life is simple, if you are simple you are healthy(simple life is natural life)</li>\r\n	<li>If you go negative way you are in problem</li>\r\n	<li>Land and water ratio of Earth and in our human body are equal, this is you can say miracle</li>\r\n	<li>The process which maintain balance us to the Universe is called Naturopathy or Yoga science</li>\r\n	<li>The science of Naturopathy is the science of Yoga</li>\r\n	<li>The specific use of 5 element and its major product knowledge, wisdom and plant can make us Mentally fit, Physically strong, Spiritually conscious</li>\r\n	<li>To make unite and fit of mind, physic and soul is its minimum goal</li>\r\n	<li>To elaborate brain cells and lungs space is its basic job</li>\r\n	<li>And then one is driven to the way of purity of life</li>\r\n	<li>Human lungs has been used 30% optimum</li>\r\n	<li>Generally its 10-15% used</li>\r\n	<li>If you make it reach up to 20% its miracle</li>\r\n	<li>Human brain has been used 13% optimum</li>\r\n	<li>Generally its 5%</li>\r\n	<li>If its reached up to 8-10, its miracle</li>\r\n	<li>This is all can do by Yoga</li>\r\n	<li>Asana elaborates your physic system</li>\r\n	<li>Pranayama&rsquo;s elaborates your mind system</li>\r\n	<li>Meditation elaborates your consciousness</li>\r\n</ul>\r\n\r\n<p>Asana, paranayama, meditation- in this game we use and maipulate the life energy- the oxygen+cosmic force- positive cosmic vibration the air.</p>\r\n\r\n<p>It&rsquo;s the cosmic vibration</p>\r\n\r\n<p>It&rsquo;s the cosmic touch</p>\r\n\r\n<p>It&rsquo;s the cosmic presence</p>\r\n\r\n<p>That is the supremo of all</p>\r\n\r\n<ul>\r\n	<li>Sun &ndash; moon nerve and spine nerve are opening one by one and making temp and pressure balancea and opening lungs packets opening the blockages of all releasing the toxins out cleaning the plexus centers to guide the human to spirituality.</li>\r\n	<li>We should reduce temptations to promote health within self</li>\r\n	<li>How you reduce it is by increasing Gyana, Bhakti and Karma (knowledge, optimism and hard working) (karma here means always positive karma)</li>\r\n	<li>By this way it&rsquo;s elaborating and elaborating, the brain and the lungs efficiencies.</li>\r\n	<li>Retaining breath and using maximum O2, it makes increasing the space of both.</li>\r\n	<li>More oxygen you retain is more energy you produced</li>\r\n	<li>That means, you have reducing more toxins, opening blockages and making all the fibers and cells fit and fine.</li>\r\n	<li>That means your parts become active and energetic, that is you are healthy</li>\r\n	<li>Nadisodhana cleaning the Nerve system</li>\r\n	<li>Bhramari, Udbig Ujaee create sound vibration that makes you relief in many way by making good flow of life energy.</li>\r\n	<li>Kapavanti makes you activate all of your inner tools and ultimately its working properly and that is means of fitness</li>\r\n</ul>\r\n\r\n<p>Posture makes body soft</p>\r\n\r\n<p>Pranayama makes the mind soft</p>\r\n\r\n<p>Meditation makes the soft spirit</p>\r\n\r\n<ul>\r\n	<li>So its said that Yoga sets you in an balance of mind, Physic and soul at a time.</li>\r\n	<li>Yoga and Naturopathy system is ABCD activities</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cleaning</p>\r\n\r\n<p>Activating</p>\r\n\r\n<p>Balancing</p>\r\n\r\n<p>Defending</p>\r\n\r\n<p>Mainly we do the 5 element therapy =&gt; Fire, Air, Sky, Earth and Water</p>\r\n\r\n<ul>\r\n	<li>To remain healthym you need to maintain your food, sleeping and positive activities(celibacy) well.</li>\r\n	<li>Celibacy here means not to miss use of sex.</li>\r\n	<li>Either you keep laughing</li>\r\n	<li>Either you sleep well</li>\r\n	<li>Either you deep on good karma</li>\r\n	<li>Maintain inner suddhi and outer suddhi (suddhi means clean)</li>\r\n	<li>Maintain inner discipline and socia social discipline</li>\r\n	<li>Non hoarding and non voilence qualities</li>\r\n	<li>To folw the theme of self preservation and to preserve the world (to love self and to love the surrounding)</li>\r\n	<li>To Preserve the word, one can start from plantation</li>\r\n	<li>And this is the way to purity, once you became pure, your are powerfull in all means (metally, physically, emotionaly, spiritually)</li>\r\n	<li>Thanking and evaluating the O2 (life energy), you can sit for inner oveservation that&rsquo;s meditation.</li>\r\n</ul>\r\n\r\n<p>Only the Meditation that leads you to the purity of life- to the way of samadhi- the Nirvana state of mind.</p>\r\n\r\n<p>When we are talking about this things, we can&rsquo;t forget these names while thye are the Scientists of Yoga Science</p>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:239.4pt\">\r\n			<ul>\r\n				<li>Shiva</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:239.4pt\">\r\n			<ul>\r\n				<li>Patanjali</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:239.4pt\">\r\n			<ul>\r\n				<li>Buddha</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:239.4pt\">\r\n			<ul>\r\n				<li>Khaptad Baba</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:239.4pt\">\r\n			<ul>\r\n				<li>Gorakhnath Baba</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:239.4pt\">\r\n			<ul>\r\n				<li>Yogi Narharinath</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>To know the right way of&nbsp; Yoga science, we need to study the Philosophy related to those personalitites.</p>\r\n\r\n<p>The himalayas and in the himalayas, north region the peace cab of the planet. The land of meditation which is the real peace, heritage of the earth by the visitation of that, one can get natural peace in mind where the said scientists played a lot has to be analysised.<br />\r\n<br />\r\n<strong>Kundalini Yoga:</strong></p>\r\n\r\n<p>This has to be activate the kundalini in the process of activating the plexus. So yoga done by focusing kundalini is kundalani yoga.</p>\r\n\r\n<p>Kundalini is thus one of the imaginary power centers, the base of which is muladhar plexus and its way of goal is to reach the Sahasrar plexus.</p>\r\n\r\n<p>Once the kundalani activate (once human become conscious) and started the pilgrimage of metaphysical happiness, extreme happy of the cosmic center, there we can the kundalini is now active. The super consciousness stage of life is that of Samadhi.</p>\r\n\r\n<p>The game of total use, preservation and activating the spirit is some how called kundalani activating and Samadhi etc.</p>\r\n\r\n<p>Symbolically kundalini here means&nbsp;<strong>Shakti</strong></p>\r\n\r\n<p>Sahasrar is&nbsp;<strong>Shiva</strong></p>\r\n\r\n<p>The union of these two is called Samadhi (They meet at Gyana chakra- pituitary gland). At these points some of the modern religious scientists have explained that one can achieve the Samadhi by sex.</p>\r\n\r\n<p>In fact it&rsquo;s the spiritual joyful moment achieved by knowledge, by wisdom, by karma, by conscious or perpetual practice of spiritual devotion is more reliable and durable than that of getting from the physical intercourse or from else what. One can get by any means but.</p>\r\n\r\n<p><strong>Now a little about Chakra- Plexus</strong></p>\r\n\r\n<p>&ldquo;As the god is the base of the creation of this cosmos as the base of yoga is kundalini&rdquo;</p>\r\n\r\n<p>The place of kundalani is Muladhara plexus.</p>\r\n\r\n<p><strong>सहश्रार</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sahasrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Penal</strong></p>\r\n\r\n<p><strong>आज्ञा</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>Aagya or Gayana&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pituitary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>\r\n\r\n<p><strong>विशुद्धि</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Bisuddhi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thyroid</strong></p>\r\n\r\n<p><strong>अनाहत</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Anahat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thymus&nbsp;</strong></p>\r\n\r\n<p><strong>मणिपुर</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Manipur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Andrenal</strong></p>\r\n\r\n<p>स्वाद्यिष्ठान&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Swadhisthan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pancreas</strong></p>\r\n\r\n<p><strong>मुलाद्यार</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Muladhar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Testes and ovary</strong></p>\r\n\r\n<p>Amongst this,&nbsp;<strong>1st 3 are&nbsp;</strong>always more active, this is due to the human desires come into existence. By means of practice, if one can control or make balance of these, human can deserve the quality of happiness and satisfaction.</p>\r\n\r\n<p><strong>Anahat</strong>&nbsp;is active only when these 3 are silent. Anahat itself is a too inactive chakra, it need more and more dedicated practice to make it active but once it is opened, its obvious that, human is in the right process of the goal.</p>\r\n\r\n<p><strong>The feature of Anahat is to maintain spiritual quality. Those who have active Anahat keep active all the time so that it may not allow the basic to be overcome.</strong></p>\r\n\r\n<p><strong>Bisuddhi Chakra-&nbsp;</strong>If this is active, human become detached</p>\r\n\r\n<p><strong>Aagya Chakra-&nbsp;</strong>If this is active, human is attached to the God.</p>\r\n\r\n<p><strong>Sahasrar Chakra-&nbsp;</strong>If this is active, human is one in God that&rsquo;s the Samadhi</p>\r\n\r\n<p>Yoga always cleaning&nbsp;<strong>Satakarma&nbsp;</strong>is one of the seen process and the Yama, Niyama are unseen.</p>\r\n\r\n<p><strong>Basic 8 sutra of Yoga</strong></p>\r\n\r\n<p><strong>Yama-</strong>Nonvoilance, Truthfulness, Nonstealing, Celibacy, Nonhording</p>\r\n\r\n<p><strong>Niyama-&nbsp;</strong>Cleanness, Satisfactory, Passionate- Tapa, Self-study, Spirituality</p>\r\n\r\n<p><strong>Asana-&nbsp;</strong>Its physical posture make soft the physic. It&rsquo;s of thousands. This is done in three form- standing, sitting, sleeping</p>\r\n\r\n<p>This is done in six category- Fore bending, back bending, side bending, side twisting, balancing, none-balancing.</p>\r\n\r\n<p><strong>Pranayama-</strong>&nbsp;the breathing process</p>\r\n\r\n<ul>\r\n	<li>Udbig- the Om-chanting om</li>\r\n	<li>Anuloma-Beloma-one by one in and out through the nose</li>\r\n	<li>Vastrika- equally long in and out through nose-full chest</li>\r\n	<li>Ujaee- inhaling through nose and producing sound at the throat (whistle like sound)</li>\r\n	<li>Bhramari- closing ear and producing inner Om</li>\r\n	<li>Kapalvanti- is an fire breath- only throwing out the air blowing in the stomatch and heating air at the third eye centre.</li>\r\n</ul>\r\n\r\n<p><strong>Pratyahara-</strong>&nbsp;Controlling the sense</p>\r\n\r\n<p><strong>Dharana-</strong>&nbsp;the concentration</p>\r\n\r\n<p><strong>Dhyan-</strong>&nbsp;the meditation- inner observation-restoring the energy</p>\r\n\r\n<p><strong>Samadhi-</strong>&nbsp;the super consciousness- the nirvana state of mind.</p>\r\n\r\n<p>The right track of all the items of yoga precedes you to the purity (that cleans mind, physic and soul)</p>\r\n\r\n<p>This process leads you to the clean conscious and that is the strong conscious, if you have strong conscious, you never become sick. You know disease never preval to in the body its your mind and conscious that reflect the problem. Body is only the ground where you can see the sickness.</p>\r\n\r\n<p><strong>About Food:</strong></p>\r\n\r\n<p>The source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Clean and Natural</p>\r\n\r\n<p>Media&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Clean and due storage</p>\r\n\r\n<p>Method&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recorganization, differential, time and amount, ratio of air and water to your food, its balance to the sleeping, wakening and labor value of fasting</p>\r\n\r\n<ul>\r\n	<li>The meaning of Fasting is to eat when you are hungry</li>\r\n	<li>The meaning of general food system is to eat prior to hungry and leave prior to feel full enough.</li>\r\n	<li>To find positive in negative is something to progress</li>\r\n	<li>To find negative in positive is something to be careful</li>\r\n	<li>You are strong by technical knowledge is you are scholar</li>\r\n	<li>You are strong by purity ot life is your are wise</li>\r\n	<li>If we able to put life of purity to our knowledge and in to your mission there is chance to be a wise then</li>\r\n</ul>\r\n\r\n<p>You play and play with these thing and you try to reach a goal of samadhi</p>\r\n\r\n<ul>\r\n	<li>Make balance of mind, physic and soul yourself and then your out put can be balance</li>\r\n	<li>If there is something inherent pure quality of vibration into Oxygen (that is called life energy somehow) that can be one&rsquo;s life. Only the presence of oxygen can means no life atleast. If this would be so, people in this world would never die. Because, we can produce o2 and supply them.</li>\r\n</ul>\r\n\r\n<p><strong>Yama-Niyam</strong></p>\r\n\r\n<p>1. Yama the social dicipline</p>\r\n\r\n<p>&nbsp; &nbsp; a)&nbsp;Non violence - अहिंसा</p>\r\n\r\n<p>&nbsp; &nbsp; b)&nbsp;Truthfulness - सत्य</p>\r\n\r\n<p>&nbsp; &nbsp; c)&nbsp;Non stealing &ndash; असत्य<br />\r\n&nbsp; &nbsp; d)&nbsp;Celibacy &ndash; ब्रमश्चर्य<br />\r\n&nbsp; &nbsp; e)&nbsp;Nonhording- अपरिग्रह</p>\r\n\r\n<p><strong>2. Niyama the self dicipiline</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;a)&nbsp;Purifiation - सौच - शरीर, मन, आत्मा धुनु ।</p>\r\n\r\n<p><strong>Body- </strong>in and out through yogic process</p>\r\n\r\n<p><strong>Mind-</strong> In the process of detachment it starts purifying.</p>\r\n\r\n<p><strong>Soul &ndash;</strong> This need not any cleaning, itself is a light, even has to checked time to time through the process of socialization( to be checked your devotion into the sparkle of the inlightment)</p>\r\n\r\n<p>शरीरं-&nbsp;&nbsp; भित्री, बाहीरी, यौगीक प</p>\r\n\r\n<p>मन-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; निमोही हुदै गएपछी मन सप</p>\r\n\r\n<p>आत्मा-&nbsp; यसलाई सफा गर्नु त जरुरी हैन किनकी यो आफैमा प्रकाश हो, तर बेला वेलामा त्यागको कसी लगाएर चाँच गरीराख्नु पर्दछ ।</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; b)&nbsp;Satisfaction- संतोस<br />\r\n&nbsp; &nbsp; &nbsp;&nbsp;c)&nbsp;Passionate-&nbsp; Devotion for inner peace (तप आन्तरिक शान्तिका लागि तन, मन, धन अर्पण)<br />\r\n&nbsp; &nbsp; &nbsp; d)&nbsp;Selfstudy- स्वध्यय<br />\r\n&nbsp; &nbsp; &nbsp; e)&nbsp;Spirituality- इशवर प्राणिधान</p>\r\n\r\n<p>3.आसन&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Posture &ndash; Soften the body<br />\r\n4.&nbsp;प्रणया&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Breathing- Soften the mind<br />\r\n5.&nbsp;प्रत्याहार&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Controlling the senses-empowering peace<br />\r\n6.&nbsp;धारण&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Concentration-empowering peace and memory<br />\r\n7.&nbsp;ध्यान&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Meditation-Soften the soul<br />\r\n8.&nbsp;समाधि&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Super Consciousness- the state of absolute truth</p>', '2019-01-22 13:51:32', '2019-01-22 20:51:32'),
(3, 'About SPA', '<h3><strong>&ldquo;The water is good air is better and light is the best of all&rdquo;</strong></h3>\r\n\r\n<p>Spa is a water therapy. The word meaning of Spa is spring water. The water falls, the rain, the cannels and rivers, ponds and lakes, Ice and glaciers.The fountain and the music of water. More over the washing, cleaning, playing hearing of water is spa. Spa is a hydro therapy as such.</p>\r\n\r\n<p>Bellow the blue sky, with refection of positive energy of sun and moon even fare remote in a lonely planet where there is a natural jungle, it&rsquo;s a dark green there, good water sources is there, music of kalkal- chhaga, chhara ra jharna, singing of birds and crickets, lovely touch of smooth air, automatic sensation of flower and herbs. And the bliss of beautiful basis. All that together we come on touch to the circumstances is we become happy. The happier we are the healthier we remain. And this is a spa health. This concept of spa health, we need to bring to reflect in our spa therapy.</p>\r\n\r\n<p>To swim, to shower, to play in green, to walk and run, to scrub sand and soil, to sweat out and to get relax. And again to get natural oil massage, wau!!!! You completely clean and open in side. Now you have got soft cells and tissues, sparkling nerves and cool mind. This is your natural health.</p>', '2019-01-20 10:45:54', '2019-01-20 05:00:54'),
(4, 'About Meditation', '<p><strong>Meditation</strong> is a practice where an individual uses a technique &ndash; such as mindfulness focusing their mind on a particular object, thought or activity &ndash; to train attention and awareness, and achieve a mentally clear and emotionally calm state.</p>\r\n\r\n<p>Meditation has been practiced since antiquity in numerous religious traditions and beliefs, often as part of the path toward liberation, awakening and Nirvana. Since the 19th century, it has spread from its origins to other cultures where it is commonly practiced in private and business life.</p>\r\n\r\n<p>Meditation may be used with the aim of reducing stress, anxiety, depression, and pain, and increasing peace, perception self-concept, and well-being Meditation is under research to define its possible health (psychological, neurological and cardiovascular) and other effects.</p>', '2019-01-21 08:59:13', '2019-01-21 15:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Palmistry and horoscope Reading', NULL, '2019-01-20 04:35:00', '2019-01-20 11:35:00'),
(2, 'Conjugal Life/Marriage Life/Spouse', NULL, '2019-01-19 19:13:21', '2019-01-19 19:13:21'),
(3, 'Financial Position', NULL, '2019-01-19 19:15:05', '2019-01-19 19:15:05'),
(4, 'Physical Health', NULL, '2019-01-19 19:15:18', '2019-01-19 19:15:18'),
(5, 'Braveness and Boldness', NULL, '2019-01-19 19:15:58', '2019-01-19 19:15:58'),
(6, 'Relationship Between family members', NULL, '2019-01-19 19:16:31', '2019-01-19 19:16:31'),
(7, 'Education/Academic Qualifications', NULL, '2019-01-19 19:16:57', '2019-01-19 19:16:57'),
(8, 'Diseases', NULL, '2019-01-19 19:17:11', '2019-01-19 19:17:11'),
(9, 'Enemy', NULL, '2019-01-19 19:17:23', '2019-01-19 19:17:23'),
(10, 'Longevity of life', NULL, '2019-01-19 19:18:09', '2019-01-19 19:18:09'),
(11, 'Profession', NULL, '2019-01-19 19:18:19', '2019-01-19 19:18:19'),
(12, 'Income', NULL, '2019-01-19 19:18:31', '2019-01-19 19:18:31'),
(13, 'Abroad/Foreign/Affairs', NULL, '2019-01-19 19:19:04', '2019-01-19 19:19:04'),
(14, 'Love Life', NULL, '2019-01-19 19:19:23', '2019-01-19 19:19:23'),
(15, 'Questions Related to Health', NULL, '2019-01-20 04:35:19', '2019-01-20 11:35:19'),
(16, 'In which sector investment should be done', NULL, '2019-01-19 19:20:53', '2019-01-19 19:20:53'),
(17, 'Which Gemstones should be used', NULL, '2019-01-19 12:41:00', '2019-01-19 19:41:00'),
(18, 'Which Rudrakashya should be used', NULL, '2019-01-19 19:41:36', '2019-01-19 19:41:36'),
(19, 'In which day donation should be done', NULL, '2019-01-19 19:42:04', '2019-01-19 19:42:04'),
(20, 'Which is your lucky colour', NULL, '2019-01-19 19:42:21', '2019-01-19 19:42:21'),
(21, 'Which is your lucky number', NULL, '2019-01-19 19:42:40', '2019-01-19 19:42:40'),
(22, 'Horoscope/Birth chart are also make in English and Nepali Language', NULL, '2019-01-19 19:43:28', '2019-01-19 19:43:28'),
(23, 'Vastu Service', NULL, '2019-01-20 11:53:45', '2019-01-20 11:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `user_status` enum('0','1','','') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `image`, `user_type`, `user_status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(0, 'Visitor', 'visitor', 'visitor@gmail.com', 'default.jpg', 'user', '0', '$2y$10$x8bkuaYRXDIFFmNAp80Cx.y0u6Khn7k5OlORYhNB1X5JeZUh7YCPC', 'fvLYM36K7C2IXEg2ocOZ0nTeSrt8tLCja0RFjWxFdqjuOW225nENZwHiv7YV', '2018-07-07 21:04:46', '2018-07-07 21:04:46'),
(1, 'Bhim Pudasaini', 'astrobhim', 'pudasainibhim@gmail.com', '68e84abe4bd0c90e6593c1b3f673dc48.1547702562.jpg', 'admin', '1', '$2y$10$14p9gKn4bQQtrOcv8kyh..Eh36HBcUg4/Kd4HEM7JVYxXEPqOGcOy', 've0yy0qXWxwi6UDSM3RqZTZa0j2WkjEUBY5sMFLVHSNUazqUH3pqxb7knAWF', '2018-07-11 22:21:59', '2019-01-16 23:46:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introductions`
--
ALTER TABLE `introductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nepal_districts`
--
ALTER TABLE `nepal_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_feeds`
--
ALTER TABLE `news_feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `introductions`
--
ALTER TABLE `introductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nepal_districts`
--
ALTER TABLE `nepal_districts`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `news_feeds`
--
ALTER TABLE `news_feeds`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
