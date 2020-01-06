-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2019 at 05:27 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpotren`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `tbl_kehadiran` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calon_santri`
--

CREATE TABLE `tbl_calon_santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(191) NOT NULL,
  `asal_sekolah` varchar(191) NOT NULL,
  `id_wali` int(11) NOT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_calon_santri`
--

INSERT INTO `tbl_calon_santri` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `asal_sekolah`, `id_wali`, `foto`, `nilai`, `keterangan`, `updated_at`, `created_at`) VALUES
(1965002, 'ndogs', 'ndogs', '2019-12-02', 'ndogs', 'ndogs', 'ndogs', 'ndogs', 1, 'ndogs', 66, 'Tidak Lulus', '2019-12-28 21:11:38', NULL),
(1965003, 'test', 'test', '2019-12-02', 'test', 'test', 'test', 'test', 1, 'test', 70, 'Lulus', '2019-12-28 21:18:59', NULL),
(1965004, 'test2', 'test2', '2019-12-01', 'test2', 'test2', 'test2', 'test2', 1, 'test2', 80, 'Lulus', '2019-12-28 21:19:07', NULL),
(1965005, 'test3', 'test3', '2019-12-01', 'test3', 'test3', 'test3', 'test3', 1, 'test3', 60, 'Tidak Lulus', '2019-12-28 21:19:37', NULL),
(1965006, 'test4', 'test4', '2019-12-01', 'test4', 'test4', 'test4', 'test4', 1, 'test4', 90, 'Lulus', '2019-12-28 21:19:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_kelas`
--

CREATE TABLE `tbl_data_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(191) NOT NULL,
  `jumlah_santri` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_pelajaran`
--

CREATE TABLE `tbl_jadwal_pelajaran` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keuangan`
--

CREATE TABLE `tbl_keuangan` (
  `id` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `periode` varchar(191) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mata_pelajaran`
--

CREATE TABLE `tbl_mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(191) NOT NULL,
  `golongan_mapel` varchar(191) NOT NULL,
  `kitab` varchar(191) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(191) NOT NULL,
  `staff_bagian` varchar(191) NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `foto` varchar(121) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id`, `nama`, `alamat`, `telepon`, `staff_bagian`, `jenis_kelamin`, `foto`, `updated_at`, `created_at`) VALUES
(1, '1', '1', '1', '1', 'Laki-Laki', NULL, '2019-12-14 23:37:53', '2019-12-14 23:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajar`
--

CREATE TABLE `tbl_pengajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(191) NOT NULL,
  `bidang_ajar` varchar(191) NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nilai_tugas` int(11) NOT NULL,
  `nilai_uts` int(11) NOT NULL,
  `nilai_uas` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_raport`
--

CREATE TABLE `tbl_raport` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_santri`
--

CREATE TABLE `tbl_santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(191) NOT NULL,
  `asal_sekolah` varchar(191) NOT NULL,
  `id_wali` int(11) NOT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wali`
--

CREATE TABLE `tbl_wali` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(191) NOT NULL,
  `pekerjaan` varchar(191) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wali`
--

INSERT INTO `tbl_wali` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `pekerjaan`, `updated_at`, `created_at`) VALUES
(1, 'ndogs', 'ndogs', '2019-12-01', 'ndogs', '', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`,`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tbl_calon_santri`
--
ALTER TABLE `tbl_calon_santri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_wali` (`id_wali`);

--
-- Indexes for table `tbl_data_kelas`
--
ALTER TABLE `tbl_data_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jadwal_pelajaran`
--
ALTER TABLE `tbl_jadwal_pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`,`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indexes for table `tbl_mata_pelajaran`
--
ALTER TABLE `tbl_mata_pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengajar`
--
ALTER TABLE `tbl_pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`,`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`,`id_nilai`,`id_mapel`),
  ADD KEY `id_nilai` (`id_nilai`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_wali` (`id_wali`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wali`
--
ALTER TABLE `tbl_wali`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_calon_santri`
--
ALTER TABLE `tbl_calon_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1965007;

--
-- AUTO_INCREMENT for table `tbl_data_kelas`
--
ALTER TABLE `tbl_data_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jadwal_pelajaran`
--
ALTER TABLE `tbl_jadwal_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mata_pelajaran`
--
ALTER TABLE `tbl_mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengajar`
--
ALTER TABLE `tbl_pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wali`
--
ALTER TABLE `tbl_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD CONSTRAINT `tbl_absensi_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `tbl_santri` (`id`),
  ADD CONSTRAINT `tbl_absensi_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_mata_pelajaran` (`id`);

--
-- Constraints for table `tbl_calon_santri`
--
ALTER TABLE `tbl_calon_santri`
  ADD CONSTRAINT `tbl_calon_santri_ibfk_1` FOREIGN KEY (`id_wali`) REFERENCES `tbl_wali` (`id`);

--
-- Constraints for table `tbl_jadwal_pelajaran`
--
ALTER TABLE `tbl_jadwal_pelajaran`
  ADD CONSTRAINT `tbl_jadwal_pelajaran_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_mata_pelajaran` (`id`),
  ADD CONSTRAINT `tbl_jadwal_pelajaran_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_data_kelas` (`id`);

--
-- Constraints for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  ADD CONSTRAINT `tbl_keuangan_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `tbl_santri` (`id`);

--
-- Constraints for table `tbl_mata_pelajaran`
--
ALTER TABLE `tbl_mata_pelajaran`
  ADD CONSTRAINT `tbl_mata_pelajaran_ibfk_1` FOREIGN KEY (`id_pengajar`) REFERENCES `tbl_pengajar` (`id`);

--
-- Constraints for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD CONSTRAINT `tbl_penilaian_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `tbl_santri` (`id`),
  ADD CONSTRAINT `tbl_penilaian_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_mata_pelajaran` (`id`);

--
-- Constraints for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  ADD CONSTRAINT `tbl_raport_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `tbl_santri` (`id`),
  ADD CONSTRAINT `tbl_raport_ibfk_2` FOREIGN KEY (`id_nilai`) REFERENCES `tbl_penilaian` (`id`),
  ADD CONSTRAINT `tbl_raport_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_mata_pelajaran` (`id`);

--
-- Constraints for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  ADD CONSTRAINT `tbl_santri_ibfk_1` FOREIGN KEY (`id_wali`) REFERENCES `tbl_wali` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
