-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 02:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `ism` varchar(255) DEFAULT NULL,
  `fam` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `manzil` varchar(255) DEFAULT NULL,
  `pasport` varchar(255) DEFAULT NULL,
  `sex` enum('ayol','erkak') DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ism`, `fam`, `father_name`, `date`, `manzil`, `pasport`, `sex`, `tel`, `login`, `password`, `img`) VALUES
(1, 'boburjon', '1', '1', '2024-01-01', '1', '1', 'erkak', '1', '1', '1', 'boburjon.jpg'),
(2, '2', '2', '', '0000-00-00', '', '', '', '', '2', '2', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_boshsahifa_footer`
--

CREATE TABLE `admin_boshsahifa_footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `lakatsiya` varchar(255) NOT NULL,
  `telefon1` varchar(255) NOT NULL,
  `telefon2` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='admin_boshsahifa_footer';

--
-- Dumping data for table `admin_boshsahifa_footer`
--

INSERT INTO `admin_boshsahifa_footer` (`id`, `telegram`, `facebook`, `youtube`, `instagram`, `twitter`, `lakatsiya`, `telefon1`, `telefon2`, `email1`, `email2`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_boshsahifa_foydali_linklar`
--

CREATE TABLE `admin_boshsahifa_foydali_linklar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomi_uz` varchar(255) NOT NULL,
  `nomi_en` varchar(255) NOT NULL,
  `nomi_ru` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='admin_boshsahifa_foydali_linklar';

--
-- Dumping data for table `admin_boshsahifa_foydali_linklar`
--

INSERT INTO `admin_boshsahifa_foydali_linklar` (`id`, `nomi_uz`, `nomi_en`, `nomi_ru`, `link`, `img`) VALUES
(1, '1', '1', '1', '1', 'link1705930734.jpg'),
(2, '2', '2', '2', '2', 'link1705930744.jpg'),
(3, '3', '3', '3', '3', 'link1705930756.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_boshsahifa_maktab_faxrli_o`
--

CREATE TABLE `admin_boshsahifa_maktab_faxrli_o` (
  `id` int(10) UNSIGNED NOT NULL,
  `fish` varchar(255) NOT NULL,
  `sinif` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='admin_boshsahifa_maktab_faxrli_o';

--
-- Dumping data for table `admin_boshsahifa_maktab_faxrli_o`
--

INSERT INTO `admin_boshsahifa_maktab_faxrli_o` (`id`, `fish`, `sinif`, `img`) VALUES
(1, '1', '1', 'oquvchi1705930698.jpg'),
(2, '2', '2', 'oquvchi1705930705.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_boshsahifa_maktab_haqida`
--

CREATE TABLE `admin_boshsahifa_maktab_haqida` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_uz` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='admin_boshsahifa_maktab_haqida';

--
-- Dumping data for table `admin_boshsahifa_maktab_haqida`
--

INSERT INTO `admin_boshsahifa_maktab_haqida` (`id`, `text_uz`, `text_ru`, `text_en`) VALUES
(1, 'u', 'r', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `admin_boshsahifa_maktab_video`
--

CREATE TABLE `admin_boshsahifa_maktab_video` (
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci COMMENT='admin_boshsahifa_maktab_video';

--
-- Dumping data for table `admin_boshsahifa_maktab_video`
--

INSERT INTO `admin_boshsahifa_maktab_video` (`id`, `video`) VALUES
(1, '170593071617057750611705763642Jaloliddin Ahmadaliyev - Bahor chog\'i (Mood video).mp4');

-- --------------------------------------------------------

--
-- Table structure for table `admin_boshsahifa_salyder_img`
--

CREATE TABLE `admin_boshsahifa_salyder_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='admin_boshsahifa_salyder_img';

--
-- Dumping data for table `admin_boshsahifa_salyder_img`
--

INSERT INTO `admin_boshsahifa_salyder_img` (`id`, `img`) VALUES
(1, 'body1705930690.jpg'),
(2, 'body1705930781.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_boshsahifa_salyder_text`
--

CREATE TABLE `admin_boshsahifa_salyder_text` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `text_uz` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='admin_boshsahifa_salyder_text';

--
-- Dumping data for table `admin_boshsahifa_salyder_text`
--

INSERT INTO `admin_boshsahifa_salyder_text` (`id`, `title_uz`, `text_uz`, `title_ru`, `text_ru`, `title_en`, `text_en`) VALUES
(1, 'u', 'u', 'r', 'r', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `fish` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `manzil` varchar(255) NOT NULL,
  `sarlavha` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='chat';

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `fish`, `email`, `tel`, `manzil`, `sarlavha`, `title`, `date`, `status`) VALUES
(1, 'Boburjon Abdunazarov Bahromjon o\'g\'li', 'abdunazarov247@gmail.com', '906665979', 'Rishton', 'vfd', 'cdsf', '2024-01-22', 'noactive');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) UNSIGNED NOT NULL,
  `tuitor_id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `class_subjects_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `quarter_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quarter`
--

CREATE TABLE `quarter` (
  `id` int(10) UNSIGNED NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `class_id` int(10) UNSIGNED DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `pas_sery` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `home_town` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `last_name`, `father_name`, `picture`, `class_id`, `sex`, `pas_sery`, `date`, `home_town`, `tel`) VALUES
(2, 'Bobur', 'Abdunazarov', 'Bahromjon o\'g\'li', 'Boburjon1705931715banner_8.jpg', NULL, 'erkak', 'AC1405536', '2024-01-09', 'Rishton', '905825979');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `title`) VALUES
(1, 'matematik');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `pas_sery` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `home_town` varchar(255) NOT NULL,
  `work_time` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `last_name`, `father_name`, `login`, `password`, `picture`, `sex`, `pas_sery`, `date`, `home_town`, `work_time`, `tel`) VALUES
(1, 'Bobur', 'Abdunazarov', 'Bahromjon o\'g\'li', 'boburjon', '1', 'Boburjon1705931558defalut.jpg', 'erkak', 'AC1405536', '2024-01-10', 'Rishton', '2024-01-22', '905825979');

-- --------------------------------------------------------

--
-- Table structure for table `xabar`
--

CREATE TABLE `xabar` (
  `id` int(10) UNSIGNED NOT NULL,
  `raqam` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci COMMENT='xabar';

--
-- Dumping data for table `xabar`
--

INSERT INTO `xabar` (`id`, `raqam`, `text`) VALUES
(1, '1', 'yaxshida'),
(2, '1', 'yaxshida'),
(3, '1', 'yaxshida');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_boshsahifa_footer`
--
ALTER TABLE `admin_boshsahifa_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_boshsahifa_foydali_linklar`
--
ALTER TABLE `admin_boshsahifa_foydali_linklar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_boshsahifa_maktab_faxrli_o`
--
ALTER TABLE `admin_boshsahifa_maktab_faxrli_o`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_boshsahifa_maktab_haqida`
--
ALTER TABLE `admin_boshsahifa_maktab_haqida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_boshsahifa_maktab_video`
--
ALTER TABLE `admin_boshsahifa_maktab_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_boshsahifa_salyder_img`
--
ALTER TABLE `admin_boshsahifa_salyder_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_boshsahifa_salyder_text`
--
ALTER TABLE `admin_boshsahifa_salyder_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_tuitor_id_index` (`tuitor_id`),
  ADD KEY `class_year_id_index` (`year_id`),
  ADD KEY `class_class_subjects_id_index` (`class_subjects_id`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_subjects_teacher_id_index` (`teacher_id`),
  ADD KEY `class_subjects_subject_id_index` (`subject_id`),
  ADD KEY `class_subjects_year_id_index` (`year_id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_student_id_index` (`student_id`),
  ADD KEY `points_subject_id_index` (`subject_id`),
  ADD KEY `points_year_id_index` (`year_id`),
  ADD KEY `points_quarter_id_index` (`quarter_id`);

--
-- Indexes for table `quarter`
--
ALTER TABLE `quarter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quarter_year_id_index` (`year_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_class_id_index` (`class_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xabar`
--
ALTER TABLE `xabar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_boshsahifa_footer`
--
ALTER TABLE `admin_boshsahifa_footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_boshsahifa_foydali_linklar`
--
ALTER TABLE `admin_boshsahifa_foydali_linklar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_boshsahifa_maktab_faxrli_o`
--
ALTER TABLE `admin_boshsahifa_maktab_faxrli_o`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_boshsahifa_maktab_haqida`
--
ALTER TABLE `admin_boshsahifa_maktab_haqida`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_boshsahifa_maktab_video`
--
ALTER TABLE `admin_boshsahifa_maktab_video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_boshsahifa_salyder_img`
--
ALTER TABLE `admin_boshsahifa_salyder_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_boshsahifa_salyder_text`
--
ALTER TABLE `admin_boshsahifa_salyder_text`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quarter`
--
ALTER TABLE `quarter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xabar`
--
ALTER TABLE `xabar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_class_subjects_id_foreign` FOREIGN KEY (`class_subjects_id`) REFERENCES `class_subjects` (`id`),
  ADD CONSTRAINT `class_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `year` (`id`);

--
-- Constraints for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD CONSTRAINT `class_subjects_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `class_subjects_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `class_subjects_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `year` (`id`);

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_quarter_id_foreign` FOREIGN KEY (`quarter_id`) REFERENCES `quarter` (`id`),
  ADD CONSTRAINT `points_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `points_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `points_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `year` (`id`);

--
-- Constraints for table `quarter`
--
ALTER TABLE `quarter`
  ADD CONSTRAINT `quarter_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `year` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
