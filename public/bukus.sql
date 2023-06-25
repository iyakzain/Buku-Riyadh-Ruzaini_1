-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2023 pada 05.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukus`
--

CREATE TABLE `bukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_buku` char(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun` char(100) NOT NULL,
  `isbn` char(100) NOT NULL,
  `jumlah_hal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bukus`
--


INSERT INTO `buku` (`id`, `kode_buku`, `judul`, `pengarang`, `tahun`, `isbn`, `jumlah_hal`) VALUES
(5, '0758908164', 'Masonry: Beyond the Light', 'William Schnoebelen', '2008', '9780758908162', 286),
(6, '0809501635', 'Experiments with Alternate Currents of High Potential and High Frequency', 'Nikola Tesla', '2006', '9780809501632', 120),
(7, '0803217366', 'Hard Air: Adventures from the Edge of Flying', 'W. Scott Olsen', '2011', '9780803217362', 246),
(8, '3319301446', 'Big Data Applications and Use Cases (International Series on Computer, Entertainment and Media Technology)', 'Patrick C. K. Hung', '2016', '978-3319301440', 220),
(9, '2730-9738', 'Microhistories of Technology', 'Mikael Hård', '2023', '978-3-031-22813-1', 290),
(10, '2191-5776', 'Objective Information Theory', 'Jianfeng Xu, Shuliang Wang, Zhenyu Liu, Yashi Wang, Yingfei Wang, Yingxu Dang', '2023', '978-981-19-9929-1', 97),
(11, '9781484288528', 'Architecture of Advanced Numerical Analysis Systems', 'Liang Wang, Jianxin Zhao', '2022', '978-1-4842-8853-5', 472),
(12, '1865-0929', 'Artificial Intelligence and Cognitive Science', 'Luca Longo, Ruairi O’Reilly', '2023', '978-3-031-26438-2', 540),
(13, '2191-5768', 'Developing Sustainable and Energy-Efficient Software Systems', 'Artem Kruglov , Giancarlo Succi', '2023', '978-3-031-11658-2', 77),
(14, '1865-1348', 'Agile Processes in Software Engineering and Extreme Programming', 'Christoph J. Stettina, Juan Garbajosa, Philippe Kruchten', '2023', '978-3-031-33976-9', 193),
(15, '0302-9743', 'Fundamental Approaches to Software Engineering', 'Leen Lambers, Sebastián Uchitel', '2023', '978-3-031-30826-0', 332),
(16, '1865-0929', 'Cyber Security', 'Wei Lu, Yuqing Zhang, Weiping Wen, Hanbing Yan, Chao Li', '2022', '978-981-16-9229-1', 235),
(17, '2191-5318', 'Deployment and Operation of Complex Software in Heterogeneous Execution Environments', 'Elisabetta Di Nitto, Jesús Gorroñogoitia Cruz, Indika Kumara, Dragan Radolović, Kamil Tokmakov, Zoe Vasileiou', '2022', '978-3-031-04961-3', 148);


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
