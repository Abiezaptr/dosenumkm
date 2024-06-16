-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 05:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen_umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `nama`, `password`, `role`) VALUES
(13, 'joniyespapa041@gmail.com', 'Abiie. Syahdilla', '$2y$10$.iMhophAlQo5dQA55pzE7ejSJATDKoNs6fsIAQcCK6dQSsu5D.5TC', 2),
(14, 'admin@gmail.com', 'Admin Operational', '9e56c9dd07ad431ba42bba6555c31667', 1),
(15, 'syahdillaabiezy@gmail.com', 'Abiezyptr', '$2y$10$pqc8h0/WW9oIL6mdL0rLFOLdP9wNgrbN3CVUUtIcQZjAdP6tj1hDa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'consulty'),
(2, 'agency');

-- --------------------------------------------------------

--
-- Table structure for table `detail_services`
--

CREATE TABLE `detail_services` (
  `id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `image` varchar(225) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `specialist_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_services`
--

INSERT INTO `detail_services` (`id`, `services_id`, `title`, `price`, `status`, `image`, `type_id`, `specialist_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Membuat Website Toko Online Dengan Fitur Digital Marketing', '400000', 1, '1.jpg', NULL, NULL, '2024-06-09 15:03:52', '2024-06-09 15:06:49', '2024-06-09 15:06:49'),
(2, 11, 'Kelas belajar online keuangan perusahaan', '450000', 1, 'assets/uploads/d8ef7fe3673bb5d8a4060e38c7eca42e.png', 1, 1, '2024-06-16 05:36:14', '2024-06-16 05:36:14', '2024-06-16 05:36:14'),
(3, 19, 'Pembuatan jasa design grafis ', '650000', 1, 'assets/uploads/deba6d29077f18f381c791e997d9647d.png', 1, 1, '2024-06-16 05:50:30', '2024-06-16 05:50:30', '2024-06-16 05:50:30'),
(5, 21, 'Jasa Membuat dan Meyusun Rencana Perjalanan Wisata', '150000', 1, 'assets/uploads/cf2c366f4ce9b9174887a71cd183b839.png', 4, 1, '2024-06-16 06:55:45', '2024-06-16 06:55:45', '2024-06-16 06:55:45'),
(8, 24, 'Jasa Blogger Sponsored Post & Content Placement', '125000', 1, 'assets/uploads/846976faf389583cc5288f135a08c81b.png', 1, 3, '2024-06-16 07:11:32', '2024-06-16 07:11:32', '2024-06-16 07:11:32'),
(9, 26, 'Menjaga hubungan antar partner kerja', '95000', 1, 'assets/uploads/a39e6f493aa25d61a04de78fd243a606.png', 6, 3, '2024-06-16 10:36:49', '2024-06-16 10:36:49', '2024-06-16 10:36:49'),
(10, 27, 'Pembelajaran broadcasting', '100000', 1, 'assets/uploads/0ca15e4224c4852e7c768e4bad8b8c6f.png', 1, 2, '2024-06-16 14:03:16', '2024-06-16 14:03:16', '2024-06-16 14:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_type`
--

CREATE TABLE `jasa_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa_type`
--

INSERT INTO `jasa_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan Full Website', '2024-06-09 15:10:39', '2024-06-09 15:10:39'),
(2, 'Perbaikan bug', '2024-06-09 15:11:04', '2024-06-09 15:11:04'),
(3, 'Optimisasi website', '2024-06-09 15:11:04', '2024-06-09 15:11:04'),
(4, 'Landing page', '2024-06-09 15:11:31', '2024-06-09 15:11:31'),
(5, 'Sistem keamanan', '2024-06-09 15:11:31', '2024-06-09 15:11:31'),
(6, 'Email template', '2024-06-09 15:11:41', '2024-06-09 15:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `rating` decimal(2,1) DEFAULT NULL,
  `reviews` longtext DEFAULT NULL,
  `images` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `title`, `description`, `status`, `rating`, `reviews`, `images`, `created_at`, `updated_at`) VALUES
(1, 1, 'Marketing', 'Marketing\r\nKami menawarkan layanan pemasaran yang komprehensif untuk membantu Anda meningkatkan visibilitas', 1, '3.0', NULL, 'assets/uploads/0e60430ffb136aa626919393ca3cddd7.png', '2024-06-20 17:32:07', '2024-06-08 17:31:50'),
(2, 1, 'Financial', 'Financial\r\nTim keuangan kami menyediakan analisis mendalam dan perencanaan strategis untuk membantu Anda mengelola keuangan bisnis', 1, '5.0', NULL, 'assets/uploads/0e60430ffb136aa626919393ca3cddd7.png', '2024-06-12 17:32:12', '2024-06-08 17:31:50'),
(3, 2, 'Business Development', 'Business Development\r\npengembangan bisnis kami berfokus pada penciptaan peluang baru dan pertumbuhan jangka panjang', 1, '2.0', NULL, 'assets/uploads/0e60430ffb136aa626919393ca3cddd7.png', '2024-06-11 17:32:16', '2024-06-08 17:31:50'),
(6, 1, 'Education', 'Edukasi pembelajaran siswa/siswi sekolah dasar', 1, '4.0', 'Pembelajaran yang sangat relevan', 'assets/uploads/0e60430ffb136aa626919393ca3cddd7.png', '2024-06-16 03:52:41', '2024-06-16 03:52:41'),
(11, 1, 'Coursing', 'Fundamental coursing class finance', 1, '4.0', 'Suasana belajar yang ramah dan relevan', 'assets/uploads/5b34c51fc159f955914c0988eb4258a2.png', '2024-06-16 05:36:14', '2024-06-16 05:36:14'),
(19, 2, 'Design Grafis', 'Pembuatan jasa design interior dan eksterior', 1, '4.0', 'Harga yang terjangkau dan kualitas bagus', 'assets/uploads/f80ab3f605705cd7183462e672ffa28b.png', '2024-06-16 05:50:30', '2024-06-16 05:50:30'),
(21, 2, 'Lifestyle', 'Gaya hidup untuk kebutuhan dunia mu menjadi lebih baik dan teratur', 1, '3.0', '', 'assets/uploads/7666cda1e44497a17c0fc2a22086af2b.png', '2024-06-16 06:55:45', '2024-06-16 06:55:45'),
(24, 2, 'Pemasaran dan Periklanan', 'Menyediakan jasa pemasaran dan periklanan untuk bisnis anda', 1, '2.0', '', 'assets/uploads/756f53829c6be83b7dd85a7cd206dc38.png', '2024-06-16 07:11:32', '2024-06-16 07:11:32'),
(26, 1, 'Customer Relationhsip', 'Menjaga hubungan antar pekerjaan', 1, '3.0', 'Sangat menarik untuk menjaga hubungan dengan partner kerja', 'assets/uploads/583a0163f1aaacf0ecea407fe24c5a16.png', '2024-06-16 10:36:49', '2024-06-16 10:36:49'),
(27, 1, 'Movie', 'asasa', 1, '4.0', 'asasa', 'assets/uploads/872964ba446404fad27b7c7e69060f78.png', '2024-06-16 14:03:16', '2024-06-16 14:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `specialist_type`
--

CREATE TABLE `specialist_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist_type`
--

INSERT INTO `specialist_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Berita', '2024-06-09 15:11:57', '2024-06-09 15:11:57'),
(2, 'Portofolio', '2024-06-09 15:12:22', '2024-06-09 15:12:22'),
(3, 'Perusahaan', '2024-06-09 15:12:22', '2024-06-09 15:12:22'),
(4, 'Perumahan', '2024-06-09 15:12:39', '2024-06-09 15:12:39'),
(5, 'Marketplace', '2024-06-09 15:12:39', '2024-06-09 15:12:39'),
(6, 'Pendidikan', '2024-06-09 15:12:45', '2024-06-09 15:12:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_services`
--
ALTER TABLE `detail_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_type`
--
ALTER TABLE `jasa_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `specialist_type`
--
ALTER TABLE `specialist_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_services`
--
ALTER TABLE `detail_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jasa_type`
--
ALTER TABLE `jasa_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `specialist_type`
--
ALTER TABLE `specialist_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
