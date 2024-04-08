-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2024 at 01:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-presensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `id_absensi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status_absensi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `nim` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `id_absensi`, `tanggal`, `waktu`, `status_absensi`, `catatan`, `nim`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'A001', '2023-01-01', '08:00:00', NULL, NULL, '220302049', 'Achmad Choerul Ramdhani', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(2, 'A002', '2023-01-02', '09:30:00', NULL, NULL, '220102050', 'Alvia Esha Rizky', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(3, 'A003', '2023-01-03', '10:45:00', NULL, NULL, '220202051', 'Amalia Dyah Puspita', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(4, 'A004', '2023-01-04', '11:15:00', NULL, NULL, '220202052', 'Apridho Mulyo Nurrezky', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(5, 'A005', '2023-01-05', '13:30:00', NULL, NULL, '220302053', 'Aurelli Elysia Prasetyo', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(6, 'A006', '2023-01-06', '14:45:00', NULL, NULL, '220302054', 'Diana Putri Cahyani', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(7, 'A007', '2023-01-07', '15:30:00', NULL, NULL, '220302055', 'Emaloroes Jernih Arifin', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(8, 'A008', '2023-01-08', '16:00:00', NULL, NULL, '220102056', 'Enndas Brena Sinulingga', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(9, 'A009', '2023-01-09', '17:15:00', NULL, NULL, '220102057', 'Fadilah Romdona', '2023-12-06 02:27:56', '2023-12-06 02:27:56'),
(10, 'A010', '2023-01-10', '18:30:00', NULL, NULL, '220202058', 'Fiqhi Naura', '2023-12-06 02:27:56', '2023-12-06 02:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `kode_kelas`, `nama_kelas`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 'CS2A', 'TI 2A', 1, '2023-12-04 19:18:59', '2023-12-04 19:18:59'),
(2, 'IT2B', 'TI 2B', 2, '2023-12-04 19:18:59', '2023-12-04 19:18:59'),
(3, 'SE2C', 'TI 2C', 3, '2023-12-04 19:18:59', '2023-12-04 19:18:59'),
(4, 'SE3D', 'TI 2D', 4, '2023-12-04 19:18:59', '2023-12-04 19:18:59'),
(5, 'CS20', 'TI 1C', 12, '2023-12-19 09:44:48', '2023-12-19 09:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_matkul` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_matkul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `kode_matkul`, `nama_matkul`, `semester`, `sks`, `created_at`, `updated_at`) VALUES
(1, '230142', 'Matematika Diskrit', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(2, '231212', 'Desain Interaksi Pengguna', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(3, '230152', 'Sistem Informasi Manajemen', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(4, '230172', 'Pemrograman Berorientasi Objek', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(5, '230192', 'Kesehatan Keselamatan Kerja (K3)', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(6, '231182', 'Praktikum Basis Data', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(7, '231162', 'Praktikum Jaringan Komputer', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(8, '231202', 'Praktikum Pemrograman Web 2', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(9, '231222', 'Praktikum Sistem Operasi', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(10, '231232', 'Praktikum Rekayasa Perangkat Lunak', 'Semester 3', '2', '2023-12-04 21:38:20', '2023-12-04 21:38:20'),
(11, '231000', 'Aljabar Linear dan Matriks', 'II (Dua)', '2', '2023-12-18 08:29:35', '2023-12-18 08:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` bigint UNSIGNED NOT NULL,
  `nidn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkul_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `nidn`, `nama`, `alamat`, `email`, `no_hp`, `matkul_id`, `created_at`, `updated_at`) VALUES
(1, '0022088306', 'Rostika Listyaningrum, S.Si., M.Si.', 'Jl. Contoh No. 123', 'li_sa007@pnc.ac.id', '08123456789', 1, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(2, '0621118402', 'Lutfi Syafirullah, S.T., M.Kom.', 'Jl. Contoh No. 456', 'syafirullah.lutfi@gmail.com', '08765432109', 2, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(3, '0618038501', 'Riyadi Purwanto, S.T., M.Eng.', 'Jl. Maju No. 789', 'riyadi@example.com', '08111222333', 3, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(4, '0609058102', 'Nur Wahyu Rahadi, S.Kom., M.Eng.', 'Jl. Sejahtera No. 1011', 'nwahyu.r09@gmail.com', '08155667788', 4, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(5, '0017118706', 'Annas Setiawan Prabowo, S.Kom., M.Eng.', 'Jl. Bahagia No. 1213', 'annassetiawanp@pnc.ac.id', '08199001122', 6, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(6, '0601128402', 'Cahya Vikasari, S.T., M.Eng.', 'Jl. Harmoni No. 1415', 'charlie.brown@example.com', '08133445566', 5, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(7, '0607058401', 'Andesita Prihantara, S.T., M.Eng.', 'Jl. Damai No. 1617', 'grace.davis@example.com', '08177889900', 7, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(8, '0008089002', 'Prih Diantono Abdau, S.Kom., M.Kom.', 'Jl. Berkat No. 1819', 'daniel.lee@example.com', '08111222333', 8, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(9, '0615068102', 'Antonius Agung Hartono, S.T., M.Eng.', 'Jl. Makmur No. 2021', 'sophie.adams@example.com', '08155667788', 9, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(10, '9900112233', 'David Miller', 'Jl. Rukun No. 2223', 'david.miller@example.com', '08199001122', 10, '2023-12-04 18:28:20', '2023-12-04 18:28:20'),
(12, '0022088000', 'Achmad Choerul, S.T., M.Kom.', 'Jalan Tongkol, RT.25/RW.3, Karanggondang, Sikampuh, Kroya, Cilacap, Jawa Tengah', 'achmadchoerul12345@gmail.com', '081294029308', 11, '2023-12-18 17:43:55', '2023-12-18 17:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_03_154040_create_students_table', 2),
(6, '2023_12_03_155654_create_classes_table', 3),
(7, '2023_12_03_160149_create_lecturers_table', 3),
(8, '2023_12_03_161000_create_courses_table', 3),
(9, '2023_12_03_161612_create_attendances_table', 3),
(20, '2023_12_04_070754_add_class_id_column_to_students_table', 4),
(21, '2023_12_04_073033_add_dosen_id_column_to_classes_table', 4),
(22, '2023_12_04_073700_add_matkul_id_column_to_lecturers_table', 4),
(23, '2023_12_04_074350_add_student_id_column_to_attendances_table', 4),
(24, '2023_12_04_075410_add_class_id_column_to_attendances_table', 5),
(26, '2023_12_04_075746_add_dosen_id_column_to_attendances_table', 6),
(30, '2023_12_04_115542_add_matkul_id_column_to_attendances_table', 7),
(31, '2023_12_04_134003_create_roles_table', 8),
(32, '2023_12_04_140123_add_role_id_column_to_users_table', 9),
(35, '2024_01_02_035243_create_sks_table', 10),
(36, '2024_01_02_035601_create_semesters_table', 10);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-12-04 06:58:53', '2023-12-04 06:58:53'),
(2, 'Lecturer', '2023-12-04 06:58:53', '2023-12-04 06:58:53'),
(3, 'Student', '2023-12-04 06:58:53', '2023-12-04 06:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint UNSIGNED NOT NULL,
  `semester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'I (Satu)', '2024-01-02 04:05:41', '2024-01-02 04:05:41'),
(2, 'II (Dua)', '2024-01-02 04:05:41', '2024-01-02 04:05:41'),
(3, 'III (Tiga)', '2024-01-02 04:07:14', '2024-01-02 04:07:14'),
(4, 'IV (Empat)', '2024-01-02 04:07:37', '2024-01-02 04:07:37'),
(5, 'V (Lima)', '2024-01-02 04:07:54', '2024-01-02 04:07:54'),
(6, 'VI (Enam)', '2024-01-02 04:07:54', '2024-01-02 04:07:54'),
(7, 'VII (Tujuh)', '2024-01-02 04:08:48', '2024-01-02 04:08:48'),
(8, 'VIII (Delapan)', '2024-01-02 04:08:48', '2024-01-02 04:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `sks`
--

CREATE TABLE `sks` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_sks` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_sks` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sks`
--

INSERT INTO `sks` (`id`, `kode_sks`, `jumlah_sks`, `created_at`, `updated_at`) VALUES
(1, 'SKS101', 1, '2024-01-02 04:04:43', '2024-01-02 04:04:43'),
(2, 'SKS202', 2, '2024-01-02 04:04:55', '2024-01-02 04:04:55'),
(3, 'SKS303', 3, '2024-01-02 04:05:05', '2024-01-02 04:05:05'),
(6, 'SKS404', 4, NULL, NULL),
(7, 'SKS505', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nim`, `nama`, `alamat`, `email`, `no_hp`, `class_id`, `created_at`, `updated_at`) VALUES
(1, '220302049', 'Achmad Choerul Ramdhani', 'Jl. Contoh No. 123', 'john.doe@example.com', '08123456789', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43'),
(2, '220102050', 'Alvia Esha Rizky', 'Jl. Contoh No. 456', 'jane.doe@example.com', '08765432109', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43'),
(3, '220202051', 'Amalia Dyah Puspita', 'Jl. Sejahtera No. 789', 'michael.j@example.com', '08111223344', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43'),
(4, '220202052', 'Apridho Mulyo Nurrezky', 'Jl. Damai No. 1011', 'emily.davis@example.com', '08133445566', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43'),
(5, '220302053', 'Aurelli Elysia Prasetyo', 'Jl. Bahagia No. 1213', 'robert.smith@example.com', '08155667788', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43'),
(6, '220302054', 'Diana Putri Cahyani', 'Jl. Harmoni No. 1415', 'sophia.taylor@example.com', '08177889900', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43'),
(7, '220302055', 'Emaloroes Jernih Arifin', 'Jl. Berkat No. 1617', 'daniel.lee@example.com', '08199001122', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43'),
(9, '220102057', 'Fadilah Romdona', 'Jl. Rukun No. 2021', 'william.miller@example.com', '08133445566', 3, '2023-12-04 19:19:43', '2023-12-04 19:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$g11.CXys3XOZ3b.lJbfdzuU3nCSzQ7D7cpptWbCnvFyPgpnikNHSy', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_absensi` (`id_absensi`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `classes_kode_kelas_unique` (`kode_kelas`),
  ADD KEY `classes_dosen_id_foreign` (`dosen_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_kode_matkul_unique` (`kode_matkul`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lecturers_nidn_unique` (`nidn`),
  ADD UNIQUE KEY `lecturers_email_unique` (`email`),
  ADD KEY `lecturers_matkul_id_foreign` (`matkul_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semesters_semester_unique` (`semester`);

--
-- Indexes for table `sks`
--
ALTER TABLE `sks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sks_kode_sks_unique` (`kode_sks`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_class_id_foreign` (`class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sks`
--
ALTER TABLE `sks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `lecturers` (`id`) ON DELETE RESTRICT;

--
-- Constraints for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_matkul_id_foreign` FOREIGN KEY (`matkul_id`) REFERENCES `courses` (`id`) ON DELETE RESTRICT;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE RESTRICT;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
