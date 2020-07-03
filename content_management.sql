-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 08:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_07_02_140520_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=published||0=unpublished',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL COMMENT '1=image||2=video',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `section`, `status`, `url`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Wordpress theme Development', 'Etiam eget fermentum lacus. In augue turpis, euismod id leo in, venenatis tincidunt metus. Vivamus a rutrum turpis. Suspendisse aliquam lacus nisl, a condimentum velit feugiat eu. Vestibulum vel mattis dui, eu tincidunt sapien. Aliquam at dolor bibendum, hendrerit erat at, eleifend nulla. Donec rutrum vitae est varius consectetur. Praesent enim ligula, dictum eget tortor tincidunt, congue tincidunt dui. Vivamus nec tempus arcu, pulvinar pharetra sem.', 'image/15937534482.png', 1, 1, '5efebf6849a28', 1, '2020-07-02 23:17:28', '2020-07-02 23:17:28'),
(2, 'Etiam eget fermentum lacus. In augue turpis, euismod id leo in,', 'Etiam eget fermentum lacus. In augue turpis, euismod id leo in, venenatis tincidunt metus. Vivamus a rutrum turpis. Suspendisse aliquam lacus nisl, a condimentum velit feugiat eu. Vestibulum vel mattis dui, eu tincidunt sapien. Aliquam at dolor bibendum, hendrerit erat at, eleifend nulla. Donec rutrum vitae est varius consectetur. Praesent enim ligula, dictum eget tortor tincidunt, congue tincidunt dui. Vivamus nec tempus arcu, pulvinar pharetra sem.', 'image/15937535183.jpg', 1, 1, '5efebfae8671f', 1, '2020-07-02 23:18:38', '2020-07-02 23:18:38'),
(3, 'Aliquam bibendum ligula sed turpis imperdiet, eget luctus erat sollicitudin.', 'Aliquam bibendum ligula sed turpis imperdiet, eget luctus erat sollicitudin. Duis condimentum ac dui sed placerat. Duis sed aliquam ex, in mattis elit. Vestibulum gravida elit placerat tellus consectetur porttitor. Nam cursus id orci eu imperdiet. Sed et pulvinar ipsum. Sed est dolor, aliquet sed mollis aliquet, dignissim ut sapien. Praesent bibendum libero nec ligula auctor dictum. Quisque eget leo dictum, faucibus nibh at, tristique eros. In non sem eu nisl convallis malesuada sit amet sit amet sem. Morbi et fermentum leo.', 'image/15937535581.jpg', 1, 1, '5efebfd64548f', 1, '2020-07-02 23:19:18', '2020-07-02 23:19:18'),
(4, 'Fusce convallis bibendum lacus, et mattis elit pretium at.', 'Fusce convallis bibendum lacus, et mattis elit pretium at. Duis sodales ut orci eu fermentum. Nunc vel luctus mi, quis commodo erat. Vivamus ultricies nisl non mauris porta, aliquam malesuada metus iaculis. Duis consectetur, ligula id viverra consectetur, sem quam luctus enim, et sollicitudin nisi magna nec sapien. Pellentesque molestie justo convallis purus vestibulum scelerisque. Cras et vulputate justo.', 'image/15937536105.jpg', 1, 1, 'https://www.youtube.com/watch?v=-0zKgJ2TT9U', 2, '2020-07-02 23:20:10', '2020-07-02 23:20:10'),
(5, 'Proin vulputate tristique turpis, sed porttitor dui gravida non.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit diam quis ullamcorper efficitur. Nunc in diam mi. Etiam condimentum bibendum leo ut consectetur. Sed sit amet neque vestibulum, ullamcorper lacus a, rutrum turpis. Proin tortor eros, tristique a imperdiet ac, tristique sed orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse maximus nunc tortor, eget semper urna ultricies at. Praesent et ipsum ullamcorper, euismod sem quis, bibendum lectus. Quisque est felis, tincidunt vel feugiat pulvinar, aliquet quis turpis. Ut quis lacus quam. Mauris quis turpis eget felis egestas porta eget ac est.', 'image/15937537664.jpg', 1, 1, 'https://youtu.be/Pks1F8McQMU', 2, '2020-07-02 23:21:27', '2020-07-02 23:21:27'),
(6, 'Vestibulum vitae tellus nunc.', 'Proin vulputate tristique turpis, sed porttitor dui gravida non. Phasellus ligula sapien, pulvinar et viverra ut, ultricies at urna. Suspendisse interdum arcu vitae tempor euismod. Vivamus id velit mattis, gravida purus vel, suscipit lacus. Cras eu auctor lectus. Morbi quis nulla in sapien consectetur bibendum. Nulla nec malesuada orci. Donec tincidunt nunc eu metus consectetur euismod. Vestibulum vitae tellus nunc.', 'image/15937537664.jpg', 2, 1, '5efec0a6ae6e0', 1, '2020-07-02 23:22:46', '2020-07-02 23:22:46'),
(7, 'Vivamus id velit mattis, gravida purus vel, suscipit lacus.', 'Proin vulputate tristique turpis, sed porttitor dui gravida non. Phasellus ligula sapien, pulvinar et viverra ut, ultricies at urna. Suspendisse interdum arcu vitae tempor euismod. Vivamus id velit mattis, gravida purus vel, suscipit lacus. Cras eu auctor lectus. Morbi quis nulla in sapien consectetur bibendum. Nulla nec malesuada orci. Donec tincidunt nunc eu metus consectetur euismod. Vestibulum vitae tellus nunc.', 'image/15937538252.png', 2, 1, 'https://www.youtube.com/watch?v=6nYIgiUJ124', 2, '2020-07-02 23:23:45', '2020-07-02 23:23:45'),
(8, 'Praesent enim ligula, dictum eget tortor tincidunt, congue tincidunt dui', 'Proin vulputate tristique turpis, sed porttitor dui gravida non. Phasellus ligula sapien, pulvinar et viverra ut, ultricies at urna. Suspendisse interdum arcu vitae tempor euismod. Vivamus id velit mattis, gravida purus vel, suscipit lacus. Cras eu auctor lectus. Morbi quis nulla in sapien consectetur bibendum. Nulla nec malesuada orci. Donec tincidunt nunc eu metus consectetur euismod. Vestibulum vitae tellus nunc.', 'image/15937539422.png', 2, 1, 'https://www.youtube.com/watch?v=SU8wkAZH2pw', 2, '2020-07-02 23:25:42', '2020-07-02 23:25:42'),
(9, 'Vivamus nec tempus arcu, pulvinar pharetra sem.', 'Etiam eget fermentum lacus. In augue turpis, euismod id leo in, venenatis tincidunt metus. Vivamus a rutrum turpis. Suspendisse aliquam lacus nisl, a condimentum velit feugiat eu. Vestibulum vel mattis dui, eu tincidunt sapien. Aliquam at dolor bibendum, hendrerit erat at, eleifend nulla. Donec rutrum vitae est varius consectetur. Praesent enim ligula, dictum eget tortor tincidunt, congue tincidunt dui. Vivamus nec tempus arcu, pulvinar pharetra sem.', 'image/15937539961.jpg', 2, 1, '5efec18c19355', 1, '2020-07-02 23:26:36', '2020-07-02 23:26:36'),
(10, 'n. Aliquam at dolor bibendum, hendrerit erat at, eleifend nulla', 'Etiam eget fermentum lacus. In augue turpis, euismod id leo in, venenatis tincidunt metus. Vivamus a rutrum turpis. Suspendisse aliquam lacus nisl, a condimentum velit feugiat eu. Vestibulum vel mattis dui, eu tincidunt sapien. Aliquam at dolor bibendum, hendrerit erat at, eleifend nulla. Donec rutrum vitae est varius consectetur. Praesent enim ligula, dictum eget tortor tincidunt, congue tincidunt dui. Vivamus nec tempus arcu, pulvinar pharetra sem.', 'image/15937540365.jpg', 2, 1, '5efec1b4338cf', 1, '2020-07-02 23:27:16', '2020-07-02 23:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahfujur Rahman', 'admin@admin.com', NULL, '$2y$10$iZdeQZmR28d2mHMHWHXo8uNY8eyr6wIfGLrX22hW4WS6ms.z7/iSS', NULL, '2020-07-02 23:15:14', '2020-07-02 23:15:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
