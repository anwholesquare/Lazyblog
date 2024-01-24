-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2024 at 05:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazyblog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `author_page`
--

CREATE TABLE `author_page` (
  `user_id` int(11) NOT NULL,
  `page_content` mediumblob DEFAULT NULL,
  `views_count` int(11) NOT NULL DEFAULT 0,
  `symlink` varchar(20) DEFAULT NULL,
  `seo_id` int(11) DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_datetime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_page`
--

INSERT INTO `author_page` (`user_id`, `page_content`, `views_count`, `symlink`, `seo_id`, `created_datetime`, `updated_datetime`) VALUES
(10720, NULL, 0, 'habib', NULL, '2023-12-06 21:52:38', NULL),
(10723, NULL, 0, 'shamim', NULL, '2023-12-07 02:17:41', NULL),
(10721, NULL, 0, 'anan', NULL, '2023-12-07 02:51:58', NULL),
(10724, NULL, 0, 'mehedi_raz', NULL, '2023-12-07 02:52:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `author_social_media_links`
--

CREATE TABLE `author_social_media_links` (
  `link_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `social_media_name` varchar(15) NOT NULL,
  `social_media_link` varchar(100) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_social_media_links`
--

INSERT INTO `author_social_media_links` (`link_id`, `user_id`, `social_media_name`, `social_media_link`, `created_datetime`) VALUES
(1, 10720, 'Facebook', 'https://www.facebook.com/iHabibullahBahar/', '2023-12-06 21:53:59'),
(2, 10720, 'LinkedIn', 'https://www.linkedin.com/in/ihabibullah/', '2023-12-07 02:22:48'),
(3, 10721, 'Facebook', 'https://www.facebook.com/khandoker.anan', '2023-12-07 02:23:15'),
(4, 10723, 'Facebook', 'https://www.facebook.com/shamim.alam.78', '2023-12-07 02:23:55'),
(5, 10724, 'Facebook', 'https://www.facebook.com/mehedihasan.shuvo.16503', '2023-12-07 02:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_icon` mediumblob DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_icon`, `created_datetime`) VALUES
(1, 'Programming', NULL, '2023-12-06 21:55:16'),
(2, 'Apps Review', NULL, '2023-12-06 21:57:19'),
(3, 'Electronics', NULL, '2023-12-06 21:57:30'),
(4, 'Science and Technology', NULL, '2023-12-06 21:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `post_id` int(11) NOT NULL,
  `visibility` varchar(10) NOT NULL DEFAULT 'public',
  `commenter_id` int(11) NOT NULL,
  `comment_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leader_board`
--

CREATE TABLE `leader_board` (
  `user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leader_board`
--

INSERT INTO `leader_board` (`user_id`, `points`, `rank`) VALUES
(10720, 0, 1),
(10721, 0, 2),
(10723, 0, 3),
(10724, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `cover_image` blob DEFAULT NULL,
  `content` varchar(2000) NOT NULL,
  `symlink` varchar(200) DEFAULT NULL,
  `seo_id` int(11) DEFAULT NULL,
  `publication_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_update_datetime` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `views_count` int(11) DEFAULT NULL,
  `number_of_shares` int(11) DEFAULT NULL,
  `total_seconds_views` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_audience`
--

CREATE TABLE `post_audience` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `ip_address` varchar(30) NOT NULL,
  `country` varchar(20) DEFAULT NULL,
  `first_visited_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_visited_datetime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) NOT NULL,
  `seo_keywords` varchar(500) DEFAULT NULL,
  `seo_title` varchar(300) DEFAULT NULL,
  `seo_image` blob DEFAULT NULL,
  `seo_short_description` varchar(300) DEFAULT NULL,
  `robot_type` varchar(100) DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_datetime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`, `created_by`, `created_datetime`) VALUES
(1, 'tech', 10720, '2023-12-06 21:52:05'),
(2, 'science', 10721, '2023-12-06 22:01:57'),
(3, 'programming', 10721, '2023-12-06 22:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `token` varchar(65) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `bio` varchar(200) DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `registration_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `token`, `full_name`, `bio`, `image`, `status`, `registration_datetime`, `last_login`) VALUES
(10720, 'habib', 'habibhbh204@gmail.com', 'eOgXlD9Z9GGtFxJRWwhyofQEbezTX3M64M1r4fEPsT3tcSp7UxHCXHOgKHwz8Zu3', 'Habibullah Bahar', 'Your Tech Friend', NULL, 'active', '2023-12-06 21:10:49', '2023-12-06 21:10:49'),
(10721, 'anan', 'khandokeranan@gmail.com', 'duoSWSPHtP8daLDrFt1XGvMKA8XdrYop0yogpzxJDdJKac1oBJ0qTSTPUyKZjg56', NULL, NULL, NULL, 'active', '2023-12-06 21:11:46', '2023-12-06 21:11:46'),
(10723, 'shamim', 'shamim@travsy.com', NULL, 'Shamim Alam', NULL, NULL, 'active', '2023-12-06 21:13:23', '2023-12-06 21:13:23'),
(10724, 'mehedi_razz', 'mehedi.raz@gmail.com', NULL, 'Mehedi Hasan', NULL, NULL, 'active', '2023-12-06 22:03:32', '2023-12-06 22:03:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author_page`
--
ALTER TABLE `author_page`
  ADD UNIQUE KEY `author_symlink` (`symlink`),
  ADD KEY `has_author_page` (`user_id`),
  ADD KEY `seo_id` (`seo_id`);

--
-- Indexes for table `author_social_media_links`
--
ALTER TABLE `author_social_media_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `has_social_media_link` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `commenter` (`commenter_id`),
  ADD KEY `comments_ibfk_1` (`post_id`);

--
-- Indexes for table `leader_board`
--
ALTER TABLE `leader_board`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `poster` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `post_audience`
--
ALTER TABLE `post_audience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_audience_ibfk_1` (`post_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `created_tag` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author_social_media_links`
--
ALTER TABLE `author_social_media_links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_audience`
--
ALTER TABLE `post_audience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10725;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author_page`
--
ALTER TABLE `author_page`
  ADD CONSTRAINT `has_author_page` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seo_id` FOREIGN KEY (`seo_id`) REFERENCES `seo` (`seo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `author_social_media_links`
--
ALTER TABLE `author_social_media_links`
  ADD CONSTRAINT `has_social_media_link` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `commenter` FOREIGN KEY (`commenter_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leader_board`
--
ALTER TABLE `leader_board`
  ADD CONSTRAINT `ranked` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poster` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_audience`
--
ALTER TABLE `post_audience`
  ADD CONSTRAINT `post_audience_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `created_tag` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
