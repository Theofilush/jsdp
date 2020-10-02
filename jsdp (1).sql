-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2020 pada 16.04
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsdp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `author`
--

CREATE TABLE `author` (
  `id_author` int(2) NOT NULL,
  `author` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `author`
--

INSERT INTO `author` (`id_author`, `author`) VALUES
(1, 'administrator'),
(3, 'dosen'),
(2, 'koordinator'),
(4, 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domain`
--

CREATE TABLE `domain` (
  `id_domain` int(3) NOT NULL,
  `nama_domain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `domain`
--

INSERT INTO `domain` (`id_domain`, `nama_domain`) VALUES
(1, 'Kegiatan Wajib JSDP'),
(2, 'Organisasi Kemahasiswaan Internal UPJ'),
(3, 'Organisasi Di luar UPJ'),
(4, 'Kepanitiaan / Event (setingkat Prodi)'),
(5, 'Kepanitiaan / Event (setingkat UPJ)'),
(6, 'Seminar/Workshop/Pelatihan/Kuliah Umum prodi lain'),
(7, 'Lomba / Kompetensi'),
(8, 'Penelitian / Pengabdian Pada Masyarakat'),
(9, 'Karya / Publikasi'),
(10, 'Asisten Dosen'),
(11, 'Kewirausahaan (berjalan per semester dgn bukti)'),
(12, 'Marketing UPJ (Internal UPJ)'),
(13, 'Duta di luar UPJ'),
(14, 'Fasilitator JSDP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(3) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `id_domain` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `id_domain`) VALUES
(1, 'PRIMA', 1),
(2, 'Learning Strategies 1 (Basic)', 1),
(3, 'Learning Strategies 2', 1),
(4, 'Learning Strategies 3', 1),
(5, 'Organizational Skill 1', 1),
(6, 'Organizational Skill 2', 1),
(7, 'Employable Skill', 1),
(8, 'Entrepreneurial Skill', 1),
(9, 'Enviromental Project (SED) (Option1)', 1),
(10, 'Social Responsibility Project (Option2)', 1),
(11, 'Kegiatan Internal JSDP dan Program Studi (Peserta)', 1),
(12, 'Jaya Student Development Program 2 (Apprentice UPJ)', 1),
(13, 'Badan Eksekutif Mahasiswa (BEM)', 2),
(14, 'Himpunan Mahasiswa (HIMA)', 2),
(15, 'Unit Kegiatan Mahasiswa (UKM)', 2),
(16, 'Organisasi di Luar UPJ', 3),
(17, 'Kepanitiaan / Event (Setingkat Prodi)', 4),
(18, 'Kepanitiaan / Event (Setingkat UPJ)', 5),
(19, 'Lainnya Seminar/Workshop/Pelatihan/Kuliah Umum Prodi Lain', 6),
(20, 'Peserta Seminar/Workshop/Pelatihan', 6),
(21, 'Lomba/Kompetisi', 7),
(22, 'Penelitian / Pengabdian Pada Masyarakat', 8),
(23, 'Karya/Publikasi', 9),
(24, 'Asisten Dosen', 10),
(25, 'Kewirausahaan (Berjalan per semester dengan bukti)', 11),
(26, 'Marketing UPJ (Internal UPJ)', 12),
(27, 'Duta di luar UPJ', 13),
(28, 'Fasilitator JSDP', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lingkup`
--

CREATE TABLE `lingkup` (
  `id_lingkup` int(3) NOT NULL,
  `nama_lingkup` varchar(50) NOT NULL,
  `id_subkegiatan` int(3) NOT NULL,
  `skor_poin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lingkup`
--

INSERT INTO `lingkup` (`id_lingkup`, `nama_lingkup`, `id_subkegiatan`, `skor_poin`) VALUES
(1, 'Lokal', 32, 150),
(2, 'Nasional', 32, 250),
(3, 'Internasional', 32, 350),
(4, 'Lokal', 42, 60),
(5, 'Nasional', 42, 80),
(6, 'Internasional', 42, 100),
(7, 'Lokal', 43, 40),
(8, 'Nasional', 43, 60),
(9, 'Internasional', 43, 80),
(10, 'Lokal', 53, 30),
(11, 'Nasional', 53, 50),
(12, 'Internasional', 53, 100),
(13, 'Lokal', 52, 20),
(14, 'Nasional', 52, 40),
(15, 'Internasional', 52, 80),
(16, 'Lokal', 51, 10),
(17, 'Nasional', 51, 20),
(18, 'Internasional', 51, 50),
(19, 'Lokal', 50, 10),
(20, 'Nasional', 50, 30),
(21, 'Internasional', 50, 50),
(22, 'Lokal', 54, 8),
(23, 'Nasional', 54, 13),
(24, 'Internasional', 54, 20),
(25, 'Lokal', 55, 2),
(26, 'Nasional', 55, 4),
(27, 'Internasional', 55, 5),
(28, 'Lokal', 56, 6),
(29, 'Nasional', 56, 10),
(30, 'Internasional', 56, 15),
(31, 'Lokal', 57, 4),
(32, 'Nasional', 57, 7),
(33, 'Internasional', 57, 10),
(34, 'Lokal', 58, 10),
(35, 'Nasional', 58, 20),
(36, 'Internasional', 58, 50),
(37, 'Lokal', 59, 5),
(38, 'Nasional', 59, 10),
(39, 'Internasional', 59, 20),
(40, 'Lokal', 60, 30),
(41, 'Nasional', 60, 50),
(42, 'Internasional', 60, 100),
(43, 'Lokal', 61, 20),
(44, 'Nasional', 61, 40),
(45, 'Internasional', 61, 80),
(46, 'Lokal', 62, 10),
(47, 'Nasional', 62, 20),
(48, 'Internasional', 62, 30),
(49, 'Lokal', 63, 20),
(50, 'Nasional', 63, 30),
(51, 'Internasional', 63, 80),
(52, 'Lokal', 64, 20),
(53, 'Nasional', 64, 30),
(54, 'Internasional', 64, 80),
(55, 'Lokal', 65, 30),
(56, 'Nasional', 65, 50),
(57, 'Internasional', 65, 100),
(58, 'Lokal', 54, 8),
(59, 'Nasional', 54, 13),
(60, 'Internasional', 54, 20),
(61, 'Lokal', 55, 2),
(62, 'Nasional', 55, 4),
(63, 'Internasional', 55, 5),
(64, 'Lokal', 56, 6),
(65, 'Nasional', 56, 10),
(66, 'Internasional', 56, 15),
(67, 'Lokal', 57, 4),
(68, 'Nasional', 57, 7),
(69, 'Internasional', 57, 10),
(70, 'Lokal', 58, 10),
(71, 'Nasional', 58, 20),
(72, 'Internasional', 58, 50),
(73, 'Lokal', 62, 10),
(74, 'Nasional', 62, 20),
(75, 'Internasional', 62, 30),
(76, 'Lokal', 63, 20),
(77, 'Nasional', 63, 30),
(78, 'Internasional', 63, 80),
(79, 'Lokal', 64, 20),
(80, 'Nasional', 64, 30),
(81, 'Internasional', 64, 80),
(82, 'Lokal', 65, 30),
(83, 'Nasional', 65, 50),
(84, 'Internasional', 65, 100),
(85, 'Lokal', 66, 30),
(86, 'Nasional', 66, 40),
(87, 'Internasional', 66, 50),
(88, 'Lokal', 67, 60),
(89, 'Nasional', 67, 80),
(90, 'Internasional', 67, 100),
(91, 'Lokal', 68, 60),
(92, 'Nasional', 68, 80),
(93, 'Internasional', 68, 100),
(94, 'Lokal', 69, 10),
(95, 'Nasional', 69, 20),
(96, 'Internasional', 69, 50),
(97, 'Lokal', 76, 40),
(98, 'Nasional', 76, 60),
(99, 'Internasional', 76, 100),
(100, 'Lokal', 77, 5),
(101, 'Nasional', 77, 30),
(102, 'Internasional', 77, 60),
(103, 'Lokal', 78, 10),
(104, 'Nasional', 78, 30),
(105, 'Internasional', 78, 60),
(106, 'Lokal', 83, 50),
(107, 'Nasional', 83, 250),
(108, 'Internasional', 83, 150),
(109, 'Lokal', 84, 30),
(110, 'Nasional', 84, 50),
(111, 'Internasional', 84, 80),
(112, 'Lokal', 85, 100),
(113, 'Nasional', 85, 150),
(114, 'Internasional', 85, 250),
(115, 'Lokal', 86, 150),
(116, 'Nasional', 86, 250),
(117, 'Internasional', 86, 350),
(118, 'Lokal', 1, 30),
(119, 'Lokal', 2, 20),
(120, 'Lokal', 3, 40),
(121, 'Lokal', 4, 10),
(122, 'Lokal', 5, 10),
(123, 'Lokal', 6, 10),
(124, 'Lokal', 7, 10),
(125, 'Lokal', 8, 10),
(126, 'Lokal', 9, 10),
(127, 'Lokal', 10, 10),
(128, 'Lokal', 11, 10),
(129, 'Lokal', 12, 10),
(130, 'Lokal', 13, 10),
(131, 'Lokal', 14, 10),
(132, 'Lokal', 15, 10),
(133, 'Lokal', 16, 10),
(134, 'Lokal', 17, 10),
(135, 'Lokal', 18, 10),
(136, 'Lokal', 19, 10),
(137, 'Lokal', 20, 10),
(138, 'Lokal', 21, 10),
(139, 'Lokal', 22, 10),
(140, 'Lokal', 23, 10),
(141, 'Lokal', 24, 10),
(142, 'Lokal', 25, 10),
(143, 'Lokal', 26, 50),
(144, 'Lokal', 27, 40),
(145, 'Lokal', 28, 50),
(146, 'Lokal', 29, 40),
(147, 'Lokal', 30, 10),
(148, 'Lokal', 31, 10),
(149, 'Lokal', 33, 100),
(150, 'Lokal', 34, 80),
(151, 'Lokal', 35, 60),
(152, 'Lokal', 36, 40),
(153, 'Lokal', 37, 60),
(154, 'Lokal', 38, 20),
(155, 'Lokal', 39, 80),
(156, 'Lokal', 40, 60),
(157, 'Lokal', 41, 10),
(158, 'Lokal', 44, 10),
(159, 'Lokal', 45, 5),
(160, 'Lokal', 46, 10),
(161, 'Lokal', 47, 40),
(162, 'Lokal', 48, 30),
(163, 'Lokal', 49, 20),
(164, 'Lokal', 70, 34),
(165, 'Lokal', 71, 100),
(166, 'Lokal', 72, 84),
(167, 'Lokal', 73, 50),
(168, 'Lokal', 74, 10),
(169, 'Lokal', 75, 67),
(170, 'Lokal', 79, 150),
(171, 'Lokal', 80, 100),
(172, 'Lokal', 81, 150),
(173, 'Lokal', 82, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `ID_user` varchar(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `ID_user`, `username`, `nama_lengkap`, `prodi`, `email`, `password`, `status`, `author`) VALUES
(1, '9999999998', 'admin', 'admin', 'Teknik Sipil', 'admin@upj.ac.id', '$2y$12$qzCd/DZweNWvYwzu26uVl.t06q0UrSTQ/MhQgaJrszJ24vDzpEmnO', 'Aktif', 'administrator'),
(2, '9999999997', 'admin1', 'admin1', 'Teknik Sipil', 'admin1@upj.ac.id', '$2y$12$hnVN4pXpsR58wdWsbRx94.2pv/R8aseFIdBTgHGeCFNeMGPRmtn0G', 'Aktif', 'administrator'),
(3, '9999999999', 'dosen', 'dosen', 'Akuntansi', 'dosen@upj.ac.id', '$2y$12$.J2zWQHTzhrAJ1093nTfYOBjR.bZHM3nzOgp8TYKasWJ1a3738mm6', 'Aktif', 'dosen'),
(4, '2016071013', 'mhs a', 'mahasiswa bisa lebih a', 'Informatika', 'mhs@upj.ac.id', '$2y$12$czoGtR7qYymPT0/G.mOFcuK7cB.qln5HcKXCuONbZRN0.979/vj6q', 'Aktif', 'mahasiswa'),
(5, '2016071014', 'mhs ku 2', 'mahasiswa bisa lebih bisa', 'Informatika', 'mhs2@upj.ac.id', '$2y$12$czoGtR7qYymPT0/G.mOFcuK7cB.qln5HcKXCuONbZRN0.979/vj6q', 'Aktif', 'mahasiswa'),
(6, '9999999996', 'koordinator', 'koordinator a', 'Teknik Sipil', 'koordinator@upj.ac.id', '$2y$12$pmPZhILHN4s72Jw4J1qsueSlqnzinhOdnxCz1cX89mFORIdBiQvYy', 'Aktif', 'koordinator'),
(7, '2016071016', 'mhs4', 'mhs keempat', 'Arsitektur', 'mhs4@upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(8, '2016031003', 'Aditya Ardhi Nugraha', 'Aditya Ardhi Nugraha', 'Psikologi', 'aditya.ardhinugraha@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(9, '2016031004', 'Aldi Setyawan', 'Aldi Setyawan', 'Psikologi', 'aldi.setyawan@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(10, '2016031005', 'Amas Shalsabilla', 'Amas Shalsabilla', 'Psikologi', 'amas.shalsabilla@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(11, '2016031006', 'Anugrah Permata Sari', 'Anugrah Permata Sari', 'Psikologi', 'anugrah.permatasari@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(12, '2016031007', 'Arif Rakhman', 'Arif Rakhman', 'Psikologi', 'arif.rakhman@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(13, '2016031008', 'Azzhara Owena Livia', 'Azzhara Owena Livia', 'Psikologi', 'azzhara.owenalivia@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(14, '2016031009', 'Bimo Ajie', 'Bimo Ajie', 'Psikologi', 'bimo.ajie@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(15, '2016031010', 'Bunga Karuni ', 'Bunga Karuni ', 'Psikologi', 'bunga.karuni@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(16, '2016031011', 'Christoffel Elthan Umboh ', 'Christoffel Elthan Umboh ', 'Psikologi', 'christoffel.elthanumboh@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(17, '2016031012', 'Clara Triana Saragih', 'Clara Triana Saragih', 'Psikologi', 'clara.trianasaragih@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(18, '2016031013', 'Dinda Arumbay', 'Dinda Arumbay', 'Psikologi', 'dinda.arumbay@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(19, '2016031014', 'Gardani Praditya Widyatmoko', 'Gardani Praditya Widyatmoko', 'Psikologi', 'gardani.pradityawidyatmoko@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(20, '2016031015', 'Hanna Indah Solifatun', 'Hanna Indah Solifatun', 'Psikologi', 'hanna.indahsolifatun@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(21, '2016031016', 'Herlita', 'Herlita', 'Psikologi', 'herlita@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(22, '2016031017', 'Ines Patricia', 'Ines Patricia', 'Psikologi', 'ines.patricia@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(23, '2016031018', 'Irene Miramis Asmara ', 'Irene Miramis Asmara ', 'Psikologi', 'irene.miramisasmara@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(24, '2016031019', 'Jihan Marwan Salsabil Permana', 'Jihan Marwan Salsabil Permana', 'Psikologi', 'jihan.marwansalsabilpermana@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(25, '2016031020', 'Karina Rahayu', 'Karina Rahayu', 'Psikologi', 'karina.rahayu@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(26, '2016031021', 'Layla Nurul Afidati', 'Layla Nurul Afidati', 'Psikologi', 'layla.nurulafidati@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(27, '2016031022', 'Leonny Paulina Mide ', 'Leonny Paulina Mide ', 'Psikologi', 'leonny.paulinamide@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(28, '2016031023', 'Lia Loretta', 'Lia Loretta', 'Psikologi', 'lia.loretta@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(29, '2016031024', 'Muhammad Reza Mahardhika', 'Muhammad Reza Mahardhika', 'Psikologi', 'muhammad.rezamahardhika@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(30, '2016031025', 'Mulyati Juliatin', 'Mulyati Juliatin', 'Psikologi', 'mulyati.juliatin@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(31, '2016031026', 'Niken Laraswati', 'Niken Laraswati', 'Psikologi', 'niken.laraswati@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(32, '2016031027', 'Nindya Yasmin Nadira', 'Nindya Yasmin Nadira', 'Psikologi', 'nindya.yasminnadira@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(33, '2016031028', 'Nita Monica Pangaribuan ', 'Nita Monica Pangaribuan ', 'Psikologi', 'nita.monicapangaribuan@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(34, '2016031029', 'Pipit Meinda Pratiwi ', 'Pipit Meinda Pratiwi ', 'Psikologi', 'pipit.meindapratiwi@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(35, '2016031030', 'Rahma Dina Zuldha', 'Rahma Dina Zuldha', 'Psikologi', 'rahma.dinazuldha@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(36, '2016031031', 'Reyhand Ichrahmsyah Pane', 'Reyhand Ichrahmsyah Pane', 'Psikologi', 'reyhand.ichrahmsyahpane@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(37, '2016031032', 'Reza Rahma Yuliany', 'Reza Rahma Yuliany', 'Psikologi', 'reza.rahmayuliany@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(38, '2016031033', 'Samantha June ', 'Samantha June ', 'Psikologi', 'samantha.june@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(39, '2016031034', 'Shella Rizqi El Layli ', 'Shella Rizqi El Layli ', 'Psikologi', 'shella.rizqiellayli@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(40, '2016031035', 'Sheillaroska Aprilianda', 'Sheillaroska Aprilianda', 'Psikologi', 'sheillaroska.aprilianda@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(41, '2016031036', 'Tazkia Kamilah Ramadhanty ', 'Tazkia Kamilah Ramadhanty ', 'Psikologi', 'tazkia.kamilahramadhanty@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(42, '2016031037', 'Vidinia Ramadhani', 'Vidinia Ramadhani', 'Psikologi', 'vidinia.ramadhani@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(43, '2016031038', 'Yohana Intan Kusuma Dewi', 'Yohana Intan Kusuma Dewi', 'Psikologi', 'yohana.intankusumadewi@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(44, '2016031039', 'Yohannah Priscillia Yunofa Huwa ', 'Yohannah Priscillia Yunofa Huwa ', 'Psikologi', 'yohannah.priscilliayunofahuwa@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(45, '2016031040', 'Nurlihidayat Taufiik', 'Nurlihidayat Taufiik', 'Psikologi', 'nurlihidayat.taufiik@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(46, '2016031041', 'Kuntum Azalea Deineira ', 'Kuntum Azalea Deineira ', 'Psikologi', 'kuntum.azaleadeineira@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(47, '2016031042', 'Dheanada Sistra', 'Dheanada Sistra', 'Psikologi', 'dheanada.sistra@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(48, '2020011001', 'Raihan Rizqy Wardana ', 'Raihan Rizqy Wardana ', 'Akuntansi', 'Raihan.rizqy wardana@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(49, '2020011002', 'Muhammad Daffa Al-Ghazy ', 'Muhammad Daffa Al-Ghazy ', 'Akuntansi', 'Muhammad.daffaalghazy@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(50, '2020011003', 'Gabriela Nikita ', 'Gabriela Nikita ', 'Akuntansi', 'Gabriela.nikita@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(51, '2020011004', 'Kamillah Farhatinnisa', 'Kamillah Farhatinnisa', 'Akuntansi', 'Kamillah.farhatinnisa@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(52, '2020011005', 'Jihan Rafifah Wijaya', 'Jihan Rafifah Wijaya', 'Akuntansi', 'Jihan.rafifahwijaya@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(53, '2020011006', 'Lydia Christine', 'Lydia Christine', 'Akuntansi', 'Lydia.christine@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(54, '2020011007', 'Natasya Alveenia ', 'Natasya Alveenia ', 'Akuntansi', 'Natasya.alveenia@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(55, '2020011008', 'Andika Indra Falim ', 'Andika Indra Falim ', 'Akuntansi', 'Andika.indrafalim@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(56, '2020011009', 'Aura Qurratul Aini', 'Aura Qurratul Aini', 'Akuntansi', 'Aura.qurratulaini@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(57, '2020011010', 'Giacinta Galuh Dwi', 'Giacinta Galuh Dwi', 'Akuntansi', 'Giacinta.galuhdwi@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(58, '2020011011', 'Elna Grace', 'Elna Grace', 'Akuntansi', 'Elna.grace@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(59, '2020011012', 'Reza Benny Zafira ', 'Reza Benny Zafira ', 'Akuntansi', 'Reza.bennyzafira@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(60, '2020011013', 'Albert Luhut Hanamongan', 'Albert Luhut Hanamongan', 'Akuntansi', 'Albert.luhuthanamongan@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(61, '2020011014', 'Yesa Amanda Putri', ' Yesa Amanda Putri', 'Akuntansi', 'Yesa.amandaputri@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(62, '2020011015', 'Ester Tri Utami ', ' Ester Tri Utami ', 'Akuntansi', 'Ester.triutami@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(63, '2020011016', 'Patricia Keizi Prabandari', ' Patricia Keizi Prabandari', 'Akuntansi', 'Patricia.keiziprabandari@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(64, '2020011017', 'Fatiya Salsabila', ' Fatiya Salsabila', 'Akuntansi', 'Fatiya.salsabila@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(65, '2020011018', 'Aida Safana', ' Aida Safana', 'Akuntansi', 'Aida.safana@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(66, '2020011019', 'Ishak Satriawan', ' Ishak Satriawan', 'Akuntansi', 'Ishak.satriawan@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(67, '2020011020', 'Nurul Husna', 'Nurul Husna', 'Akuntansi', 'Nurul.husna@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(68, '2020011021', 'Humaira Yuvianti', 'Humaira Yuvianti', 'Akuntansi', 'Humaira.yuvianti@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(69, '2020011022', 'Andika', 'Andika', 'Akuntansi', 'andika@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(70, '2020011023', 'Aditya Rizki', 'Aditya Rizki', 'Akuntansi', 'aditya.rizki@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(71, '2020011024', 'Ade Nurul Hasanah', 'Ade Nurul Hasanah', 'Akuntansi', 'ade.nurulhasanah@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(72, '2020011025', 'Matius Giawa ', 'Matius Giawa ', 'Akuntansi', 'matius.giawa@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa'),
(73, '2020011026', 'Amelia Purwati', 'Amelia Purwati', 'Akuntansi', 'ameliapurwati@student.upj.ac.id', '$2y$05$ftI6QKaMM18BTh8JCjPwK.vFBdXzv4zkNvnnmZzfxO8K6NcdjHDW.', 'Aktif', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poin`
--

CREATE TABLE `poin` (
  `no` int(10) NOT NULL,
  `id_mhs` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `domain` varchar(50) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `sub_kegiatan` varchar(50) NOT NULL,
  `detail_kegiatan` varchar(50) DEFAULT NULL,
  `peran` varchar(50) DEFAULT NULL,
  `tempat` varchar(50) NOT NULL,
  `lingkup` varchar(50) NOT NULL,
  `file` varchar(500) DEFAULT NULL,
  `poin` int(5) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `id_verfikator` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_periksa` timestamp NULL DEFAULT NULL,
  `diperiksa_oleh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `poin`
--

INSERT INTO `poin` (`no`, `id_mhs`, `tahun`, `tanggal_kegiatan`, `domain`, `kegiatan`, `sub_kegiatan`, `detail_kegiatan`, `peran`, `tempat`, `lingkup`, `file`, `poin`, `status`, `keterangan`, `id_verfikator`, `created_at`, `tanggal_periksa`, `diperiksa_oleh`) VALUES
(2, '9999999998', '2019', '2020-04-04', '4', '15', '12', 'konser akbar oleh XA', 'panitia', 'jakarta', '3', 'BC.pdf', 220, 'Menunggu', 'kurang naik', '9999999997', '2020-02-28 17:00:00', NULL, NULL),
(3, '2016071013', '2019', '2020-02-05', '4', '12', '30', 'konser akbar oleh X', 'panitia', 'jakarta', '3', NULL, 30, 'Sah', '', '9999999997', '2020-02-28 17:00:00', NULL, NULL),
(4, '9999999998', '2015', '2020-04-03', '4', '17', '46', 'test', '', 'test', '160', '', 150, 'Sah', NULL, NULL, '2020-03-03 17:00:00', '2020-04-04 04:28:16', 'koordinator'),
(5, '9999999998', '2021', '2019-11-12', '1', '12', '32', '', NULL, '', '3', '', 150, 'Sah', NULL, NULL, '2020-03-03 17:00:00', '2020-03-01 17:00:00', 'koordinator'),
(6, '9999999998', '2020', '0000-00-00', '1', '12', '32', '', NULL, '', '2', '', 250, 'Menunggu', NULL, NULL, '2020-03-03 17:00:00', NULL, NULL),
(7, '9999999998', '2020', '0000-00-00', '1', '12', '32', 'test', NULL, 'test', '3', '', 350, 'Menunggu', NULL, NULL, '2020-03-03 17:00:00', NULL, NULL),
(8, '9999999998', '2020', '2020-03-20', '1', '12', '32', 'PBOoooooooooooooo', NULL, 'upj', '2', '', 50, 'Menunggu', NULL, NULL, '2020-03-04 17:00:00', NULL, NULL),
(9, '9999999998', '2020', '0000-00-00', '3', '16', '42', '', NULL, '', '4', 'JSDP_Poin_(1).pdf', 60, 'Menunggu', NULL, NULL, '2020-03-04 17:00:00', NULL, NULL),
(10, '9999999998', '2021', '2020-03-12', '4', '17', '44', '', NULL, '', '158', 'JSDP_Poin_(1)1.pdf', 10, 'Menunggu', NULL, NULL, '2020-03-04 17:00:00', NULL, NULL),
(11, '9999999998', '2020', '0000-00-00', '1', '12', '32', '', NULL, 'dataon', '2', 'JSDP_Poin_(1).pdf', 250, 'Menunggu', NULL, NULL, '2020-03-04 17:00:00', NULL, NULL),
(12, '9999999998', '2020', '0000-00-00', '10', '24', '71', 'matematika dasar', NULL, 'upj', '165', 'JSDP_Poin_(1)1.pdf', 100, 'Menunggu', NULL, NULL, '2020-03-09 17:00:00', NULL, NULL),
(13, '9999999998', '2020', '0000-00-00', '9', '23', '', 'karya publikasi kontrol ruang hijau', NULL, 'hijau', '', 'JSDP_Transkip.pdf', 20, 'Menunggu', NULL, NULL, '2020-03-10 17:00:00', NULL, NULL),
(14, '2016071014', '2015', '2020-04-03', '4', '17', '46', 'test3', '', 'test', '160', '', 20, 'Menunggu', NULL, NULL, '2020-03-03 17:00:00', NULL, NULL),
(15, '2016071014', '2021', '0000-00-00', '1', '12', '32', '', NULL, '', '3', '', 30, 'Sah', NULL, NULL, '2020-03-03 17:00:00', NULL, NULL),
(16, '2016071014', '2020', '0000-00-00', '1', '12', '32', 'aaaaaaaaaaaa', NULL, '', '2', '', 250, 'Tidak sah', NULL, NULL, '2020-03-03 17:00:00', NULL, NULL),
(17, '2016071014', '2020', '0000-00-00', '1', '12', '32', '', NULL, '', '3', 'JSDP_Poin.pdf', 350, 'Sah', NULL, NULL, '2020-03-11 17:00:00', NULL, NULL),
(18, '2016071014', '2020', '0000-00-00', '1', '12', '32', '', NULL, '', '3', 'JSDP_Poin1.pdf', 350, 'Sah', NULL, NULL, '2020-03-11 17:00:00', '2020-01-14 02:12:14', 'admin'),
(19, '2016071014', '2020', '0000-00-00', '1', '12', '32', '', NULL, '', '3', 'JSDP_Poin_(1).pdf', 350, 'Sah', NULL, NULL, '2020-03-11 17:00:00', NULL, NULL),
(20, '2016071014', '2020', '0000-00-00', '1', '12', '32', '', NULL, '', '2', 'JSDP_Poin_(1)1.pdf', 250, 'Menunggu', NULL, NULL, '2020-03-20 17:00:00', NULL, NULL),
(21, '2016071014', '2020', '2020-03-03', '13', '27', '85', '', NULL, '', '113', 'JSDP_Poin_(1)14.pdf', 150, 'Menunggu', NULL, NULL, '2020-03-20 17:00:00', NULL, NULL),
(22, '2016071014', '2014', '2020-01-23', '3', '16', '42', 'aaaaaaa', NULL, 'aaaaa', '5', 'JSDP_Poin_(1)15.pdf', 80, 'Menunggu', NULL, NULL, '2020-03-20 17:00:00', NULL, NULL),
(23, '9999999998', '20162', '2020-09-26', '1', '9', '26', 'abcdefghij', NULL, 'zyxwvuts', '143', 'Award_of_Webinar_Oracle_-_IOT_Internet_of_Things.pdf', 50, 'Sah', '', NULL, '2020-09-26 13:44:08', '2020-09-26 13:44:50', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id_program` int(2) NOT NULL,
  `kode_prodi` varchar(4) DEFAULT NULL,
  `program_studi` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id_program`, `kode_prodi`, `program_studi`) VALUES
(1, 'AKT', 'Akuntansi'),
(2, 'MNJ', 'Manajemen'),
(3, 'PSI', 'Psikologi'),
(4, 'KOM', 'Ilmu Komunikasi'),
(5, 'DPI', 'Desain Produk'),
(6, 'DKV', 'Desain Komunikasi Visual'),
(7, 'INF', 'Informatika'),
(8, 'SIF', 'Sistem Informasi'),
(9, 'TSP', 'Teknik Sipil'),
(10, 'ARS', 'Arsitektur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkegiatan`
--

CREATE TABLE `subkegiatan` (
  `id_subkegiatan` int(3) NOT NULL,
  `nama_subkegiatan` varchar(100) NOT NULL,
  `id_kegiatan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkegiatan`
--

INSERT INTO `subkegiatan` (`id_subkegiatan`, `nama_subkegiatan`, `id_kegiatan`) VALUES
(1, 'Panitia / Fasilitator', 1),
(2, 'Anggota Panitia', 1),
(3, 'Koordinator / Ketua', 1),
(4, 'Peserta', 1),
(5, 'Goal Setting', 2),
(6, 'Note Taking', 2),
(7, 'Speed Reading & Summarizing', 2),
(8, 'Mind Map', 2),
(9, 'Group Discussion Technique', 2),
(10, 'Time Management', 2),
(11, 'Avoiding Plagiarism I : Referencing & Quoting', 2),
(12, 'Avoiding Plagiarism II : Paraphrsing & Summarizing', 3),
(13, 'How To Read Academic Journals', 3),
(14, 'Academic Resources', 3),
(15, 'How To WriteUPJ Internship Report', 4),
(16, 'How To Write Research Report', 4),
(17, 'Outlining an Academic Paper', 4),
(18, 'Student Organisation (HIMA / UKM)', 5),
(19, 'Impressive Presentation Skill', 5),
(20, 'Conflict Handling Strategy', 6),
(21, 'Negotiation Skills', 6),
(22, 'Leadership & Teamwork', 6),
(23, 'TOR and Report Writing', 7),
(24, 'Preparing CV and Job Interview', 7),
(25, 'Creative Thinking', 8),
(26, 'Ketua', 9),
(27, 'Anggota', 9),
(28, 'Ketua', 10),
(29, 'Anggota', 10),
(30, 'Program Design & Proposal', 11),
(31, 'Direksi', 11),
(32, 'Magang', 12),
(33, 'Ketua Umum', 13),
(34, 'Pengurus/Ketua Divisi', 13),
(35, 'Anggota Divisi', 13),
(36, 'Pengurus/Ketua Divisi', 14),
(37, 'Ketua', 14),
(38, 'Anggota Divisi', 14),
(39, 'Ketua', 15),
(40, 'Pengurus/Ketua Divisi', 15),
(41, 'Anggota', 15),
(42, 'Ketua', 16),
(43, 'Pengurus', 16),
(44, 'Koordinator', 17),
(45, 'Anggota', 17),
(46, 'Ketua', 17),
(47, 'Ketua', 18),
(48, 'Koordinator', 18),
(49, 'Anggota', 18),
(50, 'Short Course', 19),
(51, 'Master of Ceremony (MC)', 19),
(52, 'Moderator', 19),
(53, 'Pembicara (pemakalah/narasumber)', 19),
(54, '>15 Jam', 20),
(55, '1-4 Jam', 20),
(56, '11-15 Jam', 20),
(57, '5-10 Jam', 20),
(58, 'Finalis', 21),
(59, 'Peserta* (skb)', 21),
(60, 'Berprestasi', 21),
(61, 'Prestasi Favorit', 21),
(62, '*Tema Nilai Jaya / Moto UPJ / SED (Poin Tambahan)', 22),
(63, 'Asisten Peneliti', 22),
(64, 'Anggota', 22),
(65, 'Ketua', 22),
(66, 'Karya Populer', 23),
(67, 'Karya Seni', 23),
(68, 'Karya Ilmiah', 23),
(69, 'Karya Ilmiah tidak terdaftar pada ISSN, ISBN atau yang lainnya', 23),
(70, 'Asisten Dosen (2SKS)', 24),
(71, 'Asisten Dosen (6SKS)', 24),
(72, 'Asisten Dosen (5SKS)', 24),
(73, 'Asisten Dosen (3SKS)', 24),
(74, 'Pendamping Dosen', 24),
(75, 'Asisten Dosen (4SKS)', 24),
(76, 'Pribadi / Kelompok', 25),
(77, 'Agen', 25),
(78, 'Project / Kegiatan', 25),
(79, 'Staf Pembantu 150 Jam', 26),
(80, 'Wajah / Model UPJ', 26),
(81, 'Staff Pembantu', 26),
(82, 'Duta UPJ', 26),
(83, 'Finalis', 27),
(84, 'Peserta* (skb)', 27),
(85, 'Favorit (atau kriteria khusus)', 27),
(86, 'Berprestasi', 27),
(87, 'Pengajar', 28),
(88, 'Co-Fasilitator', 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(3) NOT NULL,
  `tahun` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, '20151'),
(2, '20152'),
(3, '20161'),
(4, '20162');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`),
  ADD UNIQUE KEY `author` (`author`);

--
-- Indeks untuk tabel `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `lingkup`
--
ALTER TABLE `lingkup`
  ADD PRIMARY KEY (`id_lingkup`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `poin`
--
ALTER TABLE `poin`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_program`),
  ADD UNIQUE KEY `program_studi` (`program_studi`);

--
-- Indeks untuk tabel `subkegiatan`
--
ALTER TABLE `subkegiatan`
  ADD PRIMARY KEY (`id_subkegiatan`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `domain`
--
ALTER TABLE `domain`
  MODIFY `id_domain` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `lingkup`
--
ALTER TABLE `lingkup`
  MODIFY `id_lingkup` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `poin`
--
ALTER TABLE `poin`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `subkegiatan`
--
ALTER TABLE `subkegiatan`
  MODIFY `id_subkegiatan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
