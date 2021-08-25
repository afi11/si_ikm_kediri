-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 02:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_ikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `badanusaha`
--

CREATE TABLE `badanusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_badan_usaha` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badanusaha`
--

INSERT INTO `badanusaha` (`id`, `nama_badan_usaha`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'UD', '0', '2021-02-10 06:14:08', '2021-02-10 06:14:08'),
(2, 'CV', '0', '2021-02-10 06:14:08', '2021-02-10 06:14:08'),
(3, 'PT', '0', '2021-02-10 06:14:08', '2021-02-10 06:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `bahanbakar`
--

CREATE TABLE `bahanbakar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_bhn_bkr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_bhn_bkr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan_bhn_bkr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_industri` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahanbakar`
--

INSERT INTO `bahanbakar` (`id`, `jenis_bhn_bkr`, `volume_bhn_bkr`, `satuan_bhn_bkr`, `id_industri`, `created_at`, `updated_at`) VALUES
(1, '-', '1,828,883', 'kodi', 'IND1', '2021-02-10 06:18:39', '2021-02-10 06:18:39'),
(2, '-', '99,292', 'kodi', 'IND2', '2021-02-10 06:21:51', '2021-02-10 06:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_bb_bp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_bb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_industri` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `satuan_bhn_bk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahanbaku`
--

INSERT INTO `bahanbaku` (`id`, `jenis`, `volume`, `nilai_bb_bp`, `asal_bb`, `id_industri`, `created_at`, `updated_at`, `satuan_bhn_bk`) VALUES
(1, '-', '12,993,993', '91,992', 'Kediri', 'IND1', '2021-02-10 06:18:26', '2021-02-10 06:18:26', 'dos'),
(2, '-', '13,333', '193,993', '-', 'IND2', '2021-02-10 06:21:40', '2021-02-10 06:21:40', 'kg');

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
-- Table structure for table `industri`
--

CREATE TABLE `industri` (
  `id_industri` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_usaha` enum('bsr','kcl') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ijin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_ijin` date DEFAULT NULL,
  `status_pm` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `klasifikasi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kec_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jalan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_fax` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_investasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`id_industri`, `tipe_usaha`, `pemilik`, `nama_perusahaan`, `no_ijin`, `tgl_ijin`, `status_pm`, `klasifikasi`, `kec_id`, `kel_id`, `jalan`, `telp_fax`, `bu_id`, `created_at`, `updated_at`, `is_deleted`, `nilai_investasi`) VALUES
('IND1', 'kcl', 'Adi', 'Tahu Jaya', '-', '2021-02-10', '-', '-', 1, 12, '-', '0812345667', 1, '2021-02-10 06:17:10', '2021-02-10 06:17:43', '0', '128,383,883'),
('IND2', 'kcl', 'Agus', 'Tempe Tenun', '-', '2021-02-10', '-', '-', 2, 15, '-', '-', 2, '2021-02-10 06:20:18', '2021-02-10 06:20:51', '0', '129,939');

-- --------------------------------------------------------

--
-- Table structure for table `jenisproduksi`
--

CREATE TABLE `jenisproduksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kbli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cabang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas_produksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_produksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_industri` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenisproduksi`
--

INSERT INTO `jenisproduksi` (`id`, `kbli`, `kode_cabang`, `nama_produk`, `kapasitas_produksi`, `satuan`, `nilai_produksi`, `id_industri`, `created_at`, `updated_at`) VALUES
(1, '-', '-', 'Tahu', '193,939', 'galon', '199,939,393', 'IND1', '2021-02-10 06:18:08', '2021-02-10 06:18:08'),
(2, '-', '-', 'Tempe', '199,393', 'kwintal', '1,992,929', 'IND2', '2021-02-10 06:21:18', '2021-02-10 06:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kec` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kec`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Mojoroto', '0', '2021-02-10 06:14:29', '2021-02-10 06:14:29'),
(2, 'Kota', '0', '2021-02-10 06:14:29', '2021-02-10 06:14:29'),
(3, 'Pesantren', '0', '2021-02-10 06:14:29', '2021-02-10 06:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahans`
--

CREATE TABLE `kelurahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kec_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahans`
--

INSERT INTO `kelurahans` (`id`, `nama_kel`, `kec_id`, `created_at`, `updated_at`) VALUES
(1, 'Lirboyo', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(2, 'Campurejo', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(3, 'Bandar Lor', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(4, 'Dermo', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(5, 'Mrican', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(6, 'Mojoroto', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(7, 'Ngampel', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(8, 'Gayam', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(9, 'Sukorame', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(10, 'Pojok', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(11, 'Tamanan', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(12, 'Bandar Kidul', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(13, 'Banjarmelati', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(14, 'Bujel', 1, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(15, 'Semampir', 2, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(16, 'Dandangan', 2, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(17, 'Ngadirejo', 2, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(18, 'Pakelan', 2, '2021-02-10 06:14:54', '2021-02-10 06:14:54'),
(19, 'Pocanan', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(20, 'Banjaran', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(21, 'Jagalan', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(22, 'Kemasan', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(23, 'Kaliombo', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(24, 'Kampung Dalem', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(25, 'Ngronggo', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(26, 'Manisrenggo', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(27, 'Balowerti', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(28, 'Rejomulyo', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(29, 'Ringin Anom', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(30, 'Setono Gedong', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(31, 'Setono Pande', 2, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(32, 'Jamsaren', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(33, 'Bangsal', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(34, 'Burengan', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(35, 'Pesantren', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(36, 'Pakunden', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(37, 'Singonegaran', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(38, 'Tinalan', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(39, 'Banaran', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(40, 'Tosaren', 3, '2021-02-10 06:14:55', '2021-02-10 06:14:55'),
(41, 'Betet', 3, '2021-02-10 06:14:56', '2021-02-10 06:14:56'),
(42, 'Blabak', 3, '2021-02-10 06:14:56', '2021-02-10 06:14:56'),
(43, 'Bawang', 3, '2021-02-10 06:14:56', '2021-02-10 06:14:56'),
(44, 'Ngletih', 3, '2021-02-10 06:14:56', '2021-02-10 06:14:56'),
(45, 'Tempurejo', 3, '2021-02-10 06:14:56', '2021-02-10 06:14:56'),
(46, 'Ketami', 3, '2021-02-10 06:14:56', '2021-02-10 06:14:56');

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
(4, '2020_10_07_073949_create_badanusahas_table', 1),
(5, '2020_10_07_074024_create_kecamatans_table', 1),
(6, '2020_10_07_074115_create_tenagakerjas_table', 1),
(7, '2020_10_07_074141_create_jenisproduksis_table', 1),
(8, '2020_10_07_074413_create_bahanbakus_table', 1),
(9, '2020_10_07_074447_create_pemasarans_table', 1),
(10, '2020_12_02_123044_create_bahanbakar_table', 1),
(11, '2020_12_30_010924_create_kelurahans_table', 1),
(12, '2020_12_30_074030_create_industris_table', 1),
(13, '2020_12_30_122752_add_nilai_investasi_table', 1),
(14, '2020_12_30_123342_add_satuan_to_bahanbaku_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemasaran`
--

CREATE TABLE `pemasaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokal` bigint(20) NOT NULL,
  `regional` bigint(20) NOT NULL,
  `nasional` bigint(20) NOT NULL,
  `ekspor` bigint(20) NOT NULL,
  `id_industri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemasaran`
--

INSERT INTO `pemasaran` (`id`, `lokal`, `regional`, `nasional`, `ekspor`, `id_industri`, `created_at`, `updated_at`) VALUES
(1, 100, 10, 100, 10, 'IND1', '2021-02-10 06:19:01', '2021-02-10 06:19:01'),
(2, 10, 10, 0, 0, 'IND2', '2021-02-10 06:22:17', '2021-02-10 06:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `tenagakerja`
--

CREATE TABLE `tenagakerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `n_pr` int(11) NOT NULL,
  `n_lk` int(11) NOT NULL,
  `n_asing` int(11) DEFAULT NULL,
  `id_industri` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenagakerja`
--

INSERT INTO `tenagakerja` (`id`, `n_pr`, `n_lk`, `n_asing`, `id_industri`, `created_at`, `updated_at`) VALUES
(1, 10, 20, 0, 'IND1', '2021-02-10 06:18:50', '2021-02-10 06:18:50'),
(2, 10, 20, 5, 'IND2', '2021-02-10 06:22:02', '2021-02-10 06:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_akun` enum('adm','spv') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `tipe_akun`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$GfSfIFaXWBFqKzZ1j8tt6OmC.fq1Hjf0VtXb6xXJa/QpozStCp.LW', 'adm', '1BbkPWYwiBLYeJrDXKjH0UPnCcCcl195dJcLwqiUmNNuWIfnwAKfS0ricPO4', '2021-02-10 06:15:21', '2021-02-10 06:15:21'),
(2, 'supervisor', 'supervisor@gmail.com', '$2y$10$pQLOdAW8QITsUDTLvG2wN.t1YLtEbAAZYaI9hWF9wqLxKC5Dt5.HC', 'spv', 'x98z3PjPxZ9QKkSEdrsNoa1UDV7VU7UdT23tu0f42lEc7yAfuTeRR0T0gbpk', '2021-02-10 06:16:38', '2021-02-10 06:16:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badanusaha`
--
ALTER TABLE `badanusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahanbakar`
--
ALTER TABLE `bahanbakar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`id_industri`),
  ADD KEY `industri_kec_id_foreign` (`kec_id`),
  ADD KEY `industri_kel_id_foreign` (`kel_id`),
  ADD KEY `industri_bu_id_foreign` (`bu_id`);

--
-- Indexes for table `jenisproduksi`
--
ALTER TABLE `jenisproduksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahans_kec_id_foreign` (`kec_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasaran`
--
ALTER TABLE `pemasaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenagakerja`
--
ALTER TABLE `tenagakerja`
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
-- AUTO_INCREMENT for table `badanusaha`
--
ALTER TABLE `badanusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bahanbakar`
--
ALTER TABLE `bahanbakar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisproduksi`
--
ALTER TABLE `jenisproduksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelurahans`
--
ALTER TABLE `kelurahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemasaran`
--
ALTER TABLE `pemasaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tenagakerja`
--
ALTER TABLE `tenagakerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `industri`
--
ALTER TABLE `industri`
  ADD CONSTRAINT `industri_bu_id_foreign` FOREIGN KEY (`bu_id`) REFERENCES `badanusaha` (`id`),
  ADD CONSTRAINT `industri_kec_id_foreign` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`id`),
  ADD CONSTRAINT `industri_kel_id_foreign` FOREIGN KEY (`kel_id`) REFERENCES `kelurahans` (`id`);

--
-- Constraints for table `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD CONSTRAINT `kelurahans_kec_id_foreign` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
