-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2025 at 01:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL,
  `id_rute` int(11) DEFAULT NULL,
  `nomor` varchar(20) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id_bus`, `id_rute`, `nomor`, `kelas`, `kapasitas`) VALUES
(1, 1, 'Haryanto 01', 'Premium', 23),
(2, 2, 'Haryanto 02', 'Eksekutif', 75),
(3, 3, 'Gunung Harta 01', 'Eksekutif', 23),
(4, 4, 'Gunung Harta 02', 'Ekonomi', 23),
(5, 5, 'Mahendra 01', 'Premium', 75),
(6, 6, 'Mahendra 02', 'Eksekutif', 75);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `id_bus` int(11) DEFAULT NULL,
  `nomor` varchar(10) DEFAULT NULL,
  `status` enum('tersedia','dipesan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `id_bus`, `nomor`, `status`) VALUES
(1, 1, '1', 'tersedia'),
(2, 1, '2', 'tersedia'),
(3, 1, '3', 'tersedia'),
(4, 1, '4', 'tersedia'),
(5, 1, '5', 'tersedia'),
(6, 1, '6', 'tersedia'),
(7, 1, '7', 'tersedia'),
(8, 1, '8', 'tersedia'),
(9, 1, '9', 'dipesan'),
(10, 1, '10', 'dipesan'),
(11, 1, '11', 'tersedia'),
(12, 1, '12', 'tersedia'),
(13, 1, '13', 'tersedia'),
(14, 1, '14', 'tersedia'),
(15, 1, '15', 'tersedia'),
(16, 1, '16', 'tersedia'),
(17, 1, '17', 'tersedia'),
(18, 1, '18', 'tersedia'),
(19, 1, '19', 'tersedia'),
(20, 1, '20', 'tersedia'),
(21, 1, '21', 'tersedia'),
(22, 1, '22', 'dipesan'),
(23, 1, '23', 'tersedia'),
(26, 1, '24', NULL),
(27, 1, '25', NULL),
(28, 2, '1', 'tersedia'),
(29, 2, '2', 'tersedia'),
(30, 2, '3', 'tersedia'),
(31, 2, '4', 'tersedia'),
(32, 2, '5', 'tersedia'),
(33, 2, '6', 'tersedia'),
(34, 2, '7', 'tersedia'),
(35, 2, '8', 'tersedia'),
(36, 2, '9', 'tersedia'),
(37, 2, '10', 'tersedia'),
(38, 2, '11', 'tersedia'),
(39, 2, '12', 'tersedia'),
(40, 2, '13', 'tersedia'),
(41, 2, '14', 'tersedia'),
(42, 2, '15', 'tersedia'),
(43, 2, '16', 'tersedia'),
(44, 2, '17', 'tersedia'),
(45, 2, '18', 'tersedia'),
(46, 2, '19', 'tersedia'),
(47, 2, '20', 'tersedia'),
(48, 2, '21', 'tersedia'),
(49, 2, '22', 'tersedia'),
(50, 2, '23', 'tersedia'),
(52, 2, '24', 'tersedia'),
(53, 3, '1', 'tersedia'),
(54, 3, '2', 'tersedia'),
(55, 3, '3', 'tersedia'),
(56, 3, '4', 'tersedia'),
(57, 3, '5', 'tersedia'),
(58, 3, '6', 'tersedia'),
(59, 3, '7', 'tersedia'),
(60, 3, '8', 'tersedia'),
(61, 3, '9', 'tersedia'),
(62, 3, '10', 'tersedia'),
(63, 3, '11', 'tersedia'),
(64, 3, '12', 'tersedia'),
(65, 3, '13', 'tersedia'),
(66, 3, '14', 'tersedia'),
(67, 3, '15', 'tersedia'),
(68, 3, '16', 'tersedia'),
(69, 3, '17', 'tersedia'),
(70, 3, '18', 'tersedia'),
(71, 3, '19', 'tersedia'),
(72, 3, '20', 'tersedia'),
(73, 3, '21', 'tersedia'),
(74, 3, '22', 'tersedia'),
(75, 3, '23', 'tersedia'),
(76, 3, '24', 'tersedia'),
(77, 4, '1', 'tersedia'),
(78, 4, '2', 'tersedia'),
(79, 4, '3', 'tersedia'),
(80, 4, '4', 'tersedia'),
(81, 4, '5', 'tersedia'),
(82, 4, '6', 'tersedia'),
(83, 4, '7', 'tersedia'),
(84, 4, '8', 'tersedia'),
(85, 4, '9', 'tersedia'),
(86, 4, '10', 'tersedia'),
(87, 5, '1', 'tersedia'),
(88, 5, '2', 'tersedia'),
(89, 5, '3', 'tersedia'),
(90, 5, '4', 'tersedia'),
(91, 5, '5', 'tersedia'),
(92, 5, '6', 'tersedia'),
(93, 5, '7', 'tersedia'),
(94, 5, '8', 'tersedia'),
(95, 5, '9', 'tersedia'),
(96, 5, '10', 'tersedia'),
(97, 6, '1', 'tersedia'),
(98, 6, '2', 'tersedia'),
(99, 6, '3', 'tersedia'),
(100, 6, '4', 'tersedia'),
(101, 6, '5', 'tersedia'),
(102, 6, '6', 'tersedia'),
(103, 6, '7', 'tersedia'),
(104, 6, '8', 'tersedia'),
(105, 6, '9', 'tersedia'),
(106, 6, '10', 'tersedia');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2025_06_03_044723_create_tickets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_rute` int(11) DEFAULT NULL,
  `id_bus` int(11) DEFAULT NULL,
  `id_kursi` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_user`, `id_rute`, `id_bus`, `id_kursi`, `tanggal`) VALUES
(1, 18, 1, 1, 1, '2025-06-19'),
(2, 18, 2, 2, 1, '2025-06-19'),
(3, 18, 3, 3, 1, '2025-06-27'),
(4, 18, 4, 4, 1, '2025-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembatalan`
--

CREATE TABLE `pembatalan` (
  `id_batal` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('diproses','disetujui','ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembatalan`
--

INSERT INTO `pembatalan` (`id_batal`, `id_order`, `tanggal`, `status`) VALUES
(1, 3, '2025-06-27', 'disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `jumlah` decimal(10,2) DEFAULT NULL,
  `status` enum('lunas','belum lunas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `id_order`, `id_admin`, `jumlah`, `status`) VALUES
(1, 1, 1, '50000.00', 'lunas'),
(2, 2, 1, '50000.00', 'belum lunas');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan`
--

CREATE TABLE `perubahan` (
  `id_ubah` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('diproses','disetujui','ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perubahan`
--

INSERT INTO `perubahan` (`id_ubah`, `id_order`, `tanggal`, `status`) VALUES
(1, 4, '2025-06-18', 'diproses');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(11) NOT NULL,
  `asal` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `asal`, `tanggal`, `tujuan`, `harga`) VALUES
(1, 'Surabaya', '2025-06-19', 'Yogyakarta', '100000.00'),
(2, 'Surabaya', '2025-06-18', 'Bandung', '100000.00'),
(3, 'Semarang', '2025-06-27', 'Yogyakarta', '100000.00'),
(4, 'Surabaya', '2025-06-18', 'Bandung', '100000.00'),
(5, 'Yogyakarta', '2025-07-02', 'Bandung', '100000.00'),
(6, 'Yogyakarta', '2025-06-09', 'Bandung', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kursi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_order`, `id_user`, `id_kursi`) VALUES
(1, 1, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `diskon` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `gender`, `no_telp`, `password`, `diskon`) VALUES
(1, 'Mimi Wulandari', 'P', '089734637', 'mimi', NULL),
(2, 'Dodi', NULL, '089523271516', '$2y$10$HyG3Fgv38bepubQujGgSeOF3uWnY9jENEFlGsWheaR07jQG/d0g8K', '0.00'),
(3, 'Dodi', NULL, '089523271516', '$2y$10$8R239VKO3wEYcg8fHequVecsUQ4pUmwUabTZGVvqkjxkLgaQrWxCe', '0.00'),
(4, 'Doni', NULL, '1234567', '$2y$10$Gq0761OB6FBhaIwgeXZG2.GvvoxyMLRIGzYkRzKGkbRhCZiOKs2sm', '0.00'),
(5, 'Doni', NULL, '1234567', '$2y$10$Uy.3.R4E10LLCS6JN71Sb.0BevdeG6G9nxF4iyoRcndIehf62chQm', '0.00'),
(6, 'Donini', NULL, '123456789', '$2y$10$tUUpsu.7/ThgPDmwzmTBceZxMki8Ff.BMDSYwKMH/1bAMw3zvIjAu', '0.00'),
(7, 'Donini', NULL, '123456789', '$2y$10$IyGjeGOwvl4LCZ2NCRiWrO3p7445z4rfGprjJFNvKQEgCehyFMfnG', '0.00'),
(8, 'Mayna', NULL, '123456789', '$2y$10$JuDshdMc49rBEL4Win5HhuJHOtZm6vORH5SPDSg6wMhiqGy51aQwq', '0.00'),
(9, 'Mayna', NULL, '123456789', '$2y$10$tPGQx6NE4jrBpg97bKQfOe1UFYK8e4eLwC/ZUaK2FzisXZsn7AnzS', '0.00'),
(10, 'Maynana', NULL, '123456789', '$2y$10$LylbZpqcl80bZqWFGMASyO6qk.Hxq9YvWWmdpeQJFEVkkF7tUu5b6', '0.00'),
(11, 'Maynana', NULL, '123456789', '$2y$10$aytNKF44uHpUE3XXV26.yuo.DLGRwcD1obvIqC8wJhmN6XaLVcUK6', '0.00'),
(12, 'Maynana', NULL, '123456789', '$2y$10$qd/kQ4Pm7jeZLSCp8pNA2.HzqkFyWDCC5HdUx4CxfixgYvhaw.WtO', '0.00'),
(13, 'Q', NULL, 'Q', '$2y$10$HrnoE10OQdoedS8d3V6tQ.G3wcmrNEnjB.pVDZcwFy0BMJ7i2snPe', '0.00'),
(14, 'Mimi Peri', NULL, '1234567', '$2y$10$JEB88rcZDO9.T4bHWTg3XOS20R7aiiDHX7yHF8NTxBpm5TrqvSAJm', '0.00'),
(15, 'Adbullah', NULL, '089523271516', '$2y$10$Wi3nEpdUPziFU97473dD/ueZjL88NG9xvEtU.YV29eKGbPiI.zEJS', '0.00'),
(16, 'Mimi mimi', NULL, '12345678', '$2y$10$3Gaa8INn1Ie4p7sseiiyWesLfme.rt9/lYu7.1FMpXTOAqqxZFZsC', '0.00'),
(17, 'Mimi mimi', NULL, '12345678', '$2y$10$NtxbFndw4k/5lr8.CJ48deKFaFIvMaES09EAuT3E1sUXZ3avlA7y2', '0.00'),
(18, 'Mimi', NULL, '12345678', '$2y$10$VZmtfKf2z7/8Y7C2k0frMe1ph2/7yYnbpzoYJLHK66gEYzGLB0coq', '0.00'),
(19, 'Hans', NULL, '089523271515', '$2y$10$.9RGhWTONcYwqb6D8bf1dOwqZvuYjYY4JD88N7d4pESpo.t6v8U4a', '0.00'),
(20, 'Ameena', NULL, '089523271515', '$2y$10$BYNvlmLoQoGVLXs42lPvdudQKoHJJfpDk6JbyKZq/saSFEwtUi38e', '0.00'),
(21, 'Karenn', NULL, '089523271515', '$2y$10$eYsP8dzOQs.yIhBcV7f9c.mnfQUtj61oqTxXFw65p02mZObrc0XjW', '0.00'),
(22, 'Ameena', NULL, '089523271515', '$2y$10$8LgAG/0SMozJ.VYUQVN43OhmpK3MlBK3085hNRksQqM6SgxfY2FPC', '0.00'),
(23, 'Ameena', NULL, '089523271515', '$2y$10$Q.nGCx3Kl..jbDmDi1ChvejvxHE7gOz1pMXLP9RybqSs03C04OK6q', '0.00'),
(24, 'Anton', NULL, '12345678', '$2y$10$.RPCmFmV7eIopf3J9syN7Ortlkr6B3pjY1mpQ.b6TDroU3DBPOgOK', '0.00'),
(25, 'Karenn', NULL, '089523271515', '$2y$10$4XRpFrL6jb03AOSwXOLOsOQnOn2mcZxXZnGJC6mq6bSGWkISKfG4i', '0.00'),
(26, 'Ameena', NULL, '089523271515', '$2y$10$NYtoI08XKCDibUM7GHsfm.oiHHaULIZd.zu5z74lejXvVmJHxguxa', '0.00'),
(27, 'Karenn', NULL, '089523271515', '$2y$10$h07gyBh/XZUMtzLtDxfT3..vTncFmaxn6CTPVfDe8s6.zlNYsefOq', '0.00'),
(28, 'Ameena', NULL, '089523271515', '$2y$10$HXWh41X3mkrsk6qVPE4k9OPqqLaWmQ/lsEXaET04Rz.U6FhZ0s4GO', '0.00'),
(29, 'Ameena', NULL, '12345678', '$2y$10$me9EQREUoH9oxI2/bP0Xc.7p9syxUebZJFj8dqnQI4Ix4l.Zz.86K', '0.00'),
(30, 'Karenn', NULL, '089523271515', '$2y$10$3GnG9yMUnnCUuYHKnnRBju4iHe1nA27MqnQ045HbwSxm6otBt/jNm', '0.00'),
(31, 'Rama', NULL, '1234567', '$2y$10$0sGloO9hUxPay19GoEtfjOIqWr9bDuUUGSKEqqficQ/bKopWiWc9m', '0.00'),
(32, 'Rama', NULL, '1234567', '$2y$10$By.l49Bd7AV8SjJOdxCgtufJeX/F.HgjOjUZ4B1PN8m8LdsCUwgQa', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`),
  ADD KEY `id_bus` (`id_bus`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_bus` (`id_bus`),
  ADD KEY `id_kursi` (`id_kursi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD PRIMARY KEY (`id_batal`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `perubahan`
--
ALTER TABLE `perubahan`
  ADD PRIMARY KEY (`id_ubah`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kursi` (`id_kursi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembatalan`
--
ALTER TABLE `pembatalan`
  MODIFY `id_batal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perubahan`
--
ALTER TABLE `perubahan`
  MODIFY `id_ubah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`);

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `kursi_ibfk_1` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`),
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`);

--
-- Constraints for table `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD CONSTRAINT `pembatalan_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `perubahan`
--
ALTER TABLE `perubahan`
  ADD CONSTRAINT `perubahan_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
