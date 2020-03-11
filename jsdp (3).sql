-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2020 pada 15.10
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(4, '2016071013', 'mhs ku', 'mahasiswa bisa lebih', 'Akuntansi', 'mhs@upj.ac.id', '$2y$12$czoGtR7qYymPT0/G.mOFcuK7cB.qln5HcKXCuONbZRN0.979/vj6q', 'Aktif', 'mahasiswa'),
(5, '2016071014', 'mhs ku 2', 'mahasiswa bisa lebih bisa', 'Informatika', 'mhs2@upj.ac.id', '$2y$12$czoGtR7qYymPT0/G.mOFcuK7cB.qln5HcKXCuONbZRN0.979/vj6q', 'Aktif', 'mahasiswa'),
(6, '9999999996', 'koordinator', 'admin1', 'Teknik Sipil', 'koordinator@upj.ac.id', '$2y$12$pmPZhILHN4s72Jw4J1qsueSlqnzinhOdnxCz1cX89mFORIdBiQvYy', 'Aktif', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poin`
--

CREATE TABLE `poin` (
  `no` int(10) NOT NULL,
  `id_mhs` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `tanggal_kegiatan` date NOT NULL DEFAULT current_timestamp(),
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
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `poin`
--

INSERT INTO `poin` (`no`, `id_mhs`, `tahun`, `tanggal_kegiatan`, `domain`, `kegiatan`, `sub_kegiatan`, `detail_kegiatan`, `peran`, `tempat`, `lingkup`, `file`, `poin`, `status`, `keterangan`, `id_verfikator`, `created_at`) VALUES
(1, '9999999998', '2019', '0000-00-00', '4', '12', '12', 'mahasiswa preunershipp', 'peserta', 'upj', '3', 'BC.pdf', 10, 'Menunggu', '', '9999999997', '2020-02-29'),
(2, '2016071013', '2019', '2020-02-05', '4', '15', '12', 'konser akbar oleh X', 'panitia', 'jakarta', '3', 'BC.pdf', 20, 'Tidak sah', 'kurang naik', '9999999997', '2020-02-29'),
(3, '2016071013', '2019', '2020-02-05', '4', '12', '30', 'konser akbar oleh X', 'panitia', 'jakarta', '3', NULL, 30, 'Sah', '', '9999999997', '2020-02-29'),
(4, '9999999998', '2015', '0000-00-00', '4', '17', '46', 'test', '', 'test', '160', '', 150, 'Menunggu', NULL, NULL, '2020-03-04'),
(5, '9999999998', '2021', '0000-00-00', '1', '12', '32', '', NULL, '', '3', '', 150, 'Sah', NULL, NULL, '2020-03-04'),
(6, '9999999998', '2020', '0000-00-00', '1', '12', '32', '', NULL, '', '2', '', 250, 'Menunggu', NULL, NULL, '2020-03-04'),
(7, '9999999998', '2020', '0000-00-00', '1', '12', '32', 'test', NULL, 'test', '3', '', 350, 'Menunggu', NULL, NULL, '2020-03-04'),
(8, '9999999998', '2020', '2020-03-12', 'Asisten Dosen', 'Asisten Dosen', 'Asisten Dosen (2SKS)', 'PBOoooooooooooooo', NULL, 'upj', 'Lokal', '', 50, 'Menunggu', NULL, NULL, '2020-03-05'),
(9, '9999999998', '2020', '0000-00-00', '3', '16', '42', '', NULL, '', '4', 'JSDP_Poin_(1).pdf', 60, 'Menunggu', NULL, NULL, '2020-03-05'),
(10, '9999999998', '2021', '2020-03-12', '4', '17', '44', '', NULL, '', '158', 'JSDP_Poin_(1)1.pdf', 10, 'Menunggu', NULL, NULL, '2020-03-05'),
(11, '9999999998', '2020', '0000-00-00', '1', '12', '32', '', NULL, 'dataon', '2', 'JSDP_Poin_(1).pdf', 250, 'Menunggu', NULL, NULL, '2020-03-05'),
(12, '9999999998', '2020', '0000-00-00', '10', '24', '71', 'matematika dasar', NULL, 'upj', '165', 'JSDP_Poin_(1)1.pdf', 100, 'Menunggu', NULL, NULL, '2020-03-10'),
(13, '9999999998', '2020', '0000-00-00', '9', '23', '', 'karya publikasi kontrol ruang hijau', NULL, 'hijau', '', 'JSDP_Transkip.pdf', 20, 'Menunggu', NULL, NULL, '2020-03-11');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `poin`
--
ALTER TABLE `poin`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
