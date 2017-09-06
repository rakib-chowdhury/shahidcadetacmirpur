-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 02:02 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shahid_cadet_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `who_we_are` text NOT NULL,
  `why_us` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `who_we_are`, `why_us`, `image`) VALUES
(1, 'This is who we are', 'This is why us', 'about_image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission_info`
--

CREATE TABLE `admission_info` (
  `id` int(11) NOT NULL,
  `admission_start` varchar(255) NOT NULL,
  `class_start` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_info`
--

INSERT INTO `admission_info` (`id`, `admission_start`, `class_start`, `image`) VALUES
(1, '1st October every year. (all class)', 'In accordance with the discussion of Rajuk & other schools admission time. Cadet – Bengali & English, 1st to 10th class starts from January 11th & 12th class time must learn from office.', 'person_image_banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `batch_info`
--

CREATE TABLE `batch_info` (
  `id` int(11) NOT NULL,
  `batch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_info`
--

INSERT INTO `batch_info` (`id`, `batch_name`) VALUES
(1, '6th 7th Bangla Version'),
(2, '6th 7th English Version'),
(3, 'Play-Four'),
(4, 'Five');

-- --------------------------------------------------------

--
-- Table structure for table `bio_info`
--

CREATE TABLE `bio_info` (
  `id` int(11) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_info`
--

INSERT INTO `bio_info` (`id`, `bio`) VALUES
(2, '<p style="padding: 0px; border: 0px; outline: none; background: none; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: Lato, sans-serif; vertical-align: baseline; color: rgb(89, 89, 89);"><span style="font-weight: bold;">Shahid Cadet Academy</span> helps students to take preparation for admission exam especially in cadet colleges, reputed schools & colleges and also for future higher education.</p><p style="padding: 0px; border: 0px; outline: none; background: none; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: Lato, sans-serif; vertical-align: baseline; color: rgb(89, 89, 89);">Over the period of 30 years, Shahid Cadet Academy ( in pioneer it was Shahid Cadet coaching center) provides proper education with the strategic learning method and that’s why in every year the maximum number of students get admission in all Cadet Colleges from this academy. And rest of all students get admission in all the reputed Schools like RAJUK Uttara model School & College, Ideal Model School, Residential model College, BAF Shaheen School, Viqarunnisa Noon school, Willes Little Flower School, etc. in Dhaka and country-wide reputed schools and Besides our own School success is Excellent in recent few years in every class. Our students are achieving Excellent results in P.S.C, J.S.C and S.S.C.</p><p style="padding: 0px; border: 0px; outline: none; background: none; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: Lato, sans-serif; vertical-align: baseline; color: rgb(89, 89, 89);">All of our students make their academic result as outstanding and most of them start their professional career as level best sectors like Army and all Forces, Engineer, Doctor, IT, Law, Business, Social and Public Organizations and other areas in worldwide range with absolute responsibility.</p><p style="padding: 0px; border: 0px; outline: none; background: none; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: Lato, sans-serif; vertical-align: baseline; color: rgb(89, 89, 89);">We have both Bangla and English version of education systems. We have excellent residential facilities and security. Boys and Girls residential hostels & campus are in separated building .</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: none; background: none; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: Lato, sans-serif; vertical-align: baseline; color: rgb(89, 89, 89);">Over the period of 30 years, Shahid Cadet Academy is playing the best role of for admission in cadet colleges.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE `category_info` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`id`, `category_name`) VALUES
(1, 'SCAM Teachers'),
(2, 'SCAM Students'),
(3, 'SCAM Officials');

-- --------------------------------------------------------

--
-- Table structure for table `class_info`
--

CREATE TABLE `class_info` (
  `id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_info`
--

INSERT INTO `class_info` (`id`, `class_name`) VALUES
(1, 'class IX'),
(3, 'class X');

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `routine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_routine_info`
--

CREATE TABLE `class_routine_info` (
  `id` int(11) NOT NULL,
  `year_id` year(4) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `class_routine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_routine_info`
--

INSERT INTO `class_routine_info` (`id`, `year_id`, `medium`, `batch_id`, `class_routine`) VALUES
(1, 2010, 'bangla', 1, 'class_routine_2010_1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `color_info`
--

CREATE TABLE `color_info` (
  `id` int(11) NOT NULL,
  `css_change` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_info`
--

INSERT INTO `color_info` (`id`, `css_change`) VALUES
(1, 'tmain.css');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `name`, `address`, `phone`, `website`) VALUES
(1, 'Shahid Cadet Academy', '<span style="color: rgb(102, 102, 102); font-family: Lato, HelveticaNeue, " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 15px;"="">House#38, (Boy’s), House#33 (Girls),</span><br style="color: rgb(102, 102, 102); font-family: Lato, HelveticaNeue, " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 15px;"=""><span style="color: rgb(102, 102, 102); font-family: Lato, HelveticaNeue, " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 15px;"="">Road#01, Sector#09, Uttara,</span><br style="color: rgb(102, 102, 102); font-family: Lato, HelveticaNeue, " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 15px;"=""><span style="color: rgb(102, 102, 102); font-family: Lato, HelveticaNeue, " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 15px;"="">Dhaka-1230. Bangladesh.</span>', '04444444444', 'something@something.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `bkash` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `address`, `phone`, `cell`, `bkash`, `website`) VALUES
(2, 'House # 06, Road # 05, Block # Dha, Mirpur-12, Dhaka-1216(Near Kalshi Road)', '+02-9026522, +02-1324355', '+88 01732-480220,+88 01681-535263', '+88 01732-480220', 'shahidcadetacademymirpur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `day_info`
--

CREATE TABLE `day_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_info`
--

INSERT INTO `day_info` (`id`, `name`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `category`) VALUES
(1, 'gallery_image_595cbf9830a51_Academic.jpg', 'SCAM Teachers'),
(2, 'gallery_image_595cbfb20e1b5_Academic.png', 'SCAM Teachers'),
(3, 'gallery_image_595cbfc09177d_Games.png', 'SCAM Students'),
(4, 'gallery_image_595cc01a0467a_Games.png', 'SCAM Students'),
(5, 'gallery_image_595cc030b590a_Official.png', 'SCAM Officials'),
(6, 'gallery_image_595cc03a117be_Official.png', 'SCAM Officials');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`, `user_type`) VALUES
(1, 'admin@gmail.com', '123456', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `meal_info`
--

CREATE TABLE `meal_info` (
  `id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `breakfast_timing` int(11) NOT NULL,
  `b_details` varchar(255) NOT NULL,
  `tiffin_first_timing` int(11) NOT NULL,
  `t1_details` varchar(255) NOT NULL,
  `lunch_timing` int(11) NOT NULL,
  `l_details` varchar(255) NOT NULL,
  `tiffin_second_timing` int(11) NOT NULL,
  `t2_details` varchar(255) NOT NULL,
  `dinner_timing` int(11) NOT NULL,
  `d_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_info`
--

INSERT INTO `meal_info` (`id`, `day_id`, `breakfast_timing`, `b_details`, `tiffin_first_timing`, `t1_details`, `lunch_timing`, `l_details`, `tiffin_second_timing`, `t2_details`, `dinner_timing`, `d_details`) VALUES
(1, 5, 1, 'again', 2, 'again', 3, 'again', 4, 'again', 5, 'again'),
(2, 2, 1, 'Ruti + Dal', 2, 'Samucha', 3, 'Rice + Fish + Dal', 4, 'Biscuit', 5, 'Rice + Chicken + Dal'),
(3, 6, 1, 'testing', 2, 'testing', 3, 'testing', 4, 'testing', 5, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `meal_info_old`
--

CREATE TABLE `meal_info_old` (
  `id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `meal_timing_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_info_old`
--

INSERT INTO `meal_info_old` (`id`, `day_id`, `meal_timing_id`, `details`) VALUES
(1, 1, 1, 'bread+egg+tea'),
(2, 1, 2, 'biscuit+tea'),
(3, 1, 3, 'Vuna Khichuri '),
(4, 1, 4, 'Vat+Dal+Fish'),
(5, 2, 1, 'bread+egg+tea'),
(6, 2, 2, 'biscuit+tea'),
(7, 2, 3, 'Vuna Khichuri'),
(8, 2, 4, 'Vat+Dal+Fish'),
(9, 1, 5, 'bread');

-- --------------------------------------------------------

--
-- Table structure for table `meal_timing`
--

CREATE TABLE `meal_timing` (
  `id` int(11) NOT NULL,
  `meal_name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_timing`
--

INSERT INTO `meal_timing` (`id`, `meal_name`, `time`) VALUES
(1, 'Breakfast', '8.30 AM'),
(2, 'Tiffin', '10.30 AM'),
(3, 'Lunch', '2.30 PM'),
(4, 'Tiffin', '5.30 PM'),
(5, 'Dinner', '11.30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `medium_info`
--

CREATE TABLE `medium_info` (
  `id` int(11) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `category_one` varchar(255) NOT NULL,
  `nr_admission_charge` double NOT NULL,
  `nr_monthly_salary` double NOT NULL,
  `nr_advance_payment` double NOT NULL,
  `category_two` varchar(255) NOT NULL,
  `r_admission_charge` double NOT NULL,
  `r_monthly_salary` double NOT NULL,
  `r_advance_payment` double NOT NULL,
  `category_three` varchar(255) NOT NULL,
  `d_admission_charge` double NOT NULL,
  `d_monthly_salary` double NOT NULL,
  `d_advance_payment` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medium_info`
--

INSERT INTO `medium_info` (`id`, `medium`, `batch_id`, `category_one`, `nr_admission_charge`, `nr_monthly_salary`, `nr_advance_payment`, `category_two`, `r_admission_charge`, `r_monthly_salary`, `r_advance_payment`, `category_three`, `d_admission_charge`, `d_monthly_salary`, `d_advance_payment`) VALUES
(2, 'bangla', 4, 'Non-Residential', 10000, 5000, 15000, 'Non-Residential', 10000, 10000, 20000, 'Non-Residential', 10000, 6000, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `medium_info_old`
--

CREATE TABLE `medium_info_old` (
  `id` int(11) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `student_cat` varchar(255) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `admission_charge` double NOT NULL,
  `monthly_salary` double NOT NULL,
  `advance_payment` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medium_info_old`
--

INSERT INTO `medium_info_old` (`id`, `medium`, `student_cat`, `batch_id`, `admission_charge`, `monthly_salary`, `advance_payment`) VALUES
(1, 'bangla', 'Non-Residential', 1, 10000, 5000, 15000),
(2, 'bangla', 'Residential', 1, 10000, 6000, 16000),
(3, 'bangla', 'Day Care', 1, 10000, 10000, 20000),
(4, 'english', 'Non-Residential', 3, 9000, 4000, 13000),
(5, 'english', 'Residential', 3, 9000, 9000, 18000),
(6, 'english', 'Day Care', 3, 9000, 5000, 14000),
(7, 'bangla', 'Non-Residential', 3, 9000, 3000, 12000),
(8, 'bangla', 'Residential', 3, 11000, 3000, 14000),
(9, 'bangla', 'Day Care', 3, 12000, 3000, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `month_info`
--

CREATE TABLE `month_info` (
  `id` int(11) NOT NULL,
  `month_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month_info`
--

INSERT INTO `month_info` (`id`, `month_name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `designation`, `image`, `message`, `address`, `phone`) VALUES
(5, 'AB Siddiue', 'Chairman', 'person_image_5.jpg', '<span style="font-family: "Open Sans", Arial, sans-serif;">Bangladesh, our dearest homeland, it`s a little nation in territory however our weight with its populace. In the event that this extensive populace can be changed into human asset, it`s conceivable to make our property as a brilliant nation. Be that as it may, how is if conceivable? It`s answer is just a single – to make training for all. Without appropriate instruction no individual even a state can thrive. I myself battled hard in my childhood and youth that has presented to me the achievement. Barak Obama, an individual from a standard group of Kaniya. Who is currently the leader of America. Abraham Linkon, Jorge Washington all were the individual from ordinary family. There are respectable people are on the planet who battled first to make themselves training lastly ended up noticeably extraordinary one with their awesome administrations. In our nation , there are numerous families having splendid/commendable youngsters yet can`t raised them with appropriate carte in view of absence of education and money related issue.</span><div style="font-family: "Open Sans", Arial, sans-serif;"><br></div><div style="font-family: "Open Sans", Arial, sans-serif;"> Accordingly immense offer reasonable kids are stopped from the beginning. I felt the pain of these families profoundly that bound me to build up to "Shahid cadet Academy" keeping in mind the end goal to (with a view to) hand the youthful era over the correct way. I am confident that it is conceivable to maritime the value of the understudies with my awesome endeavor, incredible administration of persevering instructors, the extraordinary tilts of understudies and the over all help of the gatekeepers. As result, The nation will accomplish great subjects and edify individuals. I additionally trust, these illuminate individuals. I additionally trust, these enlighted individuals will be the light conveyor to others nations of the world moreover. May all-powerful Allah favor us.</div>', 'asdasd asdasd asd', '01675125498'),
(6, 'Managing Director', 'Managing Director', 'person_image_7Ixm1hSmq93BXRtdiVH_czdLenyQGEdwIiYYMNuULmc.jpg', 'adasdasdasd', 'asdafgdsgdf dfg dfgdf', '01456325897');

-- --------------------------------------------------------

--
-- Table structure for table `prospectus`
--

CREATE TABLE `prospectus` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prospectus`
--

INSERT INTO `prospectus` (`id`, `image`) VALUES
(1, 'prospectus_596b2b9ec13ba.jpg'),
(4, 'prospectus_596b2e13dc010.jpg'),
(5, 'prospectus_59708c5957e96.jpg'),
(6, 'prospectus_59708c5dcb341.jpg'),
(7, 'prospectus_59708c6483ec7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `schooling_system`
--

CREATE TABLE `schooling_system` (
  `id` int(11) NOT NULL,
  `rules_facilities` varchar(255) NOT NULL,
  `residential_facilities` text NOT NULL,
  `parent_responsibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schooling_system`
--

INSERT INTO `schooling_system` (`id`, `rules_facilities`, `residential_facilities`, `parent_responsibility`) VALUES
(3, 'rules_facilities_image.png', 'This is residential facilities description', 'parent_responsibility_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `image`, `description`) VALUES
(1, 'slider_image_BD06201708 (1).jpg', 'We create innovation idea in each student. There is no end to improvement.'),
(2, 'slider_image_slider_image_slider1 (1).jpg', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `success_gallery`
--

CREATE TABLE `success_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_gallery`
--

INSERT INTO `success_gallery` (`id`, `image`) VALUES
(4, 'success_gallery_596b0bbc97cef.jpg'),
(5, 'success_gallery_596b0bcb05639.jpg'),
(6, 'success_gallery_596b0c72b315d.jpg'),
(7, 'success_gallery_596b0c8e81c20.jpg'),
(8, 'success_gallery_596b0c9cb8dc6.jpg'),
(12, 'success_gallery_596b0fb99d6ab.jpg'),
(13, 'success_gallery_596b0fc49b9cb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `success_info`
--

CREATE TABLE `success_info` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `total_examinee` int(11) NOT NULL,
  `allowed_written` int(11) NOT NULL,
  `allowed_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_info`
--

INSERT INTO `success_info` (`id`, `year`, `total_examinee`, `allowed_written`, `allowed_final`) VALUES
(1, 2010, 840, 300, 220),
(2, 2009, 650, 402, 162),
(3, 2008, 550, 376, 146);

-- --------------------------------------------------------

--
-- Table structure for table `term_result`
--

CREATE TABLE `term_result` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `term` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term_result_info`
--

CREATE TABLE `term_result_info` (
  `id` int(11) NOT NULL,
  `year_id` year(4) NOT NULL,
  `term` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `term_result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term_result_info`
--

INSERT INTO `term_result_info` (`id`, `year_id`, `term`, `medium`, `batch_id`, `term_result`) VALUES
(1, 2009, 'first', 'bangla', 2, 'term_result_2009_first_bangla_2.pdf'),
(3, 2015, 'first', 'bangla', 2, 'term_result_2015_first_bangla_2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_result_info`
--

CREATE TABLE `weekly_result_info` (
  `id` int(11) NOT NULL,
  `year_id` year(4) NOT NULL,
  `month_id` int(11) NOT NULL,
  `week` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `weekly_result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly_result_info`
--

INSERT INTO `weekly_result_info` (`id`, `year_id`, `month_id`, `week`, `medium`, `batch_id`, `weekly_result`) VALUES
(1, 2009, 1, '1st', 'bangla', 2, 'weekly_result_2009_1st.pdf'),
(2, 2013, 1, '2nd', 'english', 3, 'weekly_result_2013_2nd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_syllabus_info`
--

CREATE TABLE `weekly_syllabus_info` (
  `id` int(11) NOT NULL,
  `year_id` year(4) NOT NULL,
  `month_id` int(11) NOT NULL,
  `week` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `weekly_syllabus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly_syllabus_info`
--

INSERT INTO `weekly_syllabus_info` (`id`, `year_id`, `month_id`, `week`, `medium`, `batch_id`, `weekly_syllabus`) VALUES
(1, 2009, 2, '2nd', 'bangla', 2, 'weekly_syllabus_2009_2nd.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_info`
--
ALTER TABLE `admission_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_info`
--
ALTER TABLE `batch_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bio_info`
--
ALTER TABLE `bio_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_info`
--
ALTER TABLE `category_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_info`
--
ALTER TABLE `class_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine_info`
--
ALTER TABLE `class_routine_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_info`
--
ALTER TABLE `color_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_info`
--
ALTER TABLE `day_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_info`
--
ALTER TABLE `meal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_info_old`
--
ALTER TABLE `meal_info_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_timing`
--
ALTER TABLE `meal_timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medium_info`
--
ALTER TABLE `medium_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medium_info_old`
--
ALTER TABLE `medium_info_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month_info`
--
ALTER TABLE `month_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospectus`
--
ALTER TABLE `prospectus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schooling_system`
--
ALTER TABLE `schooling_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_gallery`
--
ALTER TABLE `success_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_info`
--
ALTER TABLE `success_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_result`
--
ALTER TABLE `term_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_result_info`
--
ALTER TABLE `term_result_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly_result_info`
--
ALTER TABLE `weekly_result_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly_syllabus_info`
--
ALTER TABLE `weekly_syllabus_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admission_info`
--
ALTER TABLE `admission_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `batch_info`
--
ALTER TABLE `batch_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bio_info`
--
ALTER TABLE `bio_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_info`
--
ALTER TABLE `category_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `class_info`
--
ALTER TABLE `class_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `class_routine`
--
ALTER TABLE `class_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_routine_info`
--
ALTER TABLE `class_routine_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `color_info`
--
ALTER TABLE `color_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `day_info`
--
ALTER TABLE `day_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `meal_info`
--
ALTER TABLE `meal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `meal_info_old`
--
ALTER TABLE `meal_info_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `meal_timing`
--
ALTER TABLE `meal_timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `medium_info`
--
ALTER TABLE `medium_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medium_info_old`
--
ALTER TABLE `medium_info_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `month_info`
--
ALTER TABLE `month_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prospectus`
--
ALTER TABLE `prospectus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `schooling_system`
--
ALTER TABLE `schooling_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `success_gallery`
--
ALTER TABLE `success_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `success_info`
--
ALTER TABLE `success_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `term_result`
--
ALTER TABLE `term_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `term_result_info`
--
ALTER TABLE `term_result_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `weekly_result_info`
--
ALTER TABLE `weekly_result_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `weekly_syllabus_info`
--
ALTER TABLE `weekly_syllabus_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
