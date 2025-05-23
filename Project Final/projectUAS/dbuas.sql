-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 05.27
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1`
--

CREATE TABLE `tabel1` (
  `info1` varchar(500) NOT NULL,
  `info2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel1`
--

INSERT INTO `tabel1` (`info1`, `info2`) VALUES
('Kami berkomitmen untuk memberikan perawatan kesehatan terbaik dengan fokus pada kepedulian dan kualitas yang tak tertandingi.\r\nTim kami terdiri dari tenaga medis yang terlatih dengan baik dan peralatan medis canggih untuk memastikan Anda mendapatkan perawatan yang tepat dan efektif. \r\nKami percaya bahwa setiap pasien adalah individu yang unik, oleh karena itu kami memberikan pendekatan personal dan mengutamakan kebutuhan serta keinginan Anda.\r\n', 'Kami menawarkan berbagai layanan medis mulai dari pemeriksaan umum hingga perawatan khusus dengan dukungan penuh dari tenaga ahli. Fasilitas kami didesain dengan baik untuk memberikan kenyamanan dan keamanan kepada Anda dan keluarga.\r\nKami juga memiliki berbagai fasilitas penunjang seperti laboratorium, radiologi, dan apotek internal, yang memastikan kenyamanan Anda dalam mendapatkan diagnosis dan pengobatan yang tepat.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel2`
--

CREATE TABLE `tabel2` (
  `ID` int(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `namaRS` varchar(50) NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel2`
--

INSERT INTO `tabel2` (`ID`, `kode`, `namaRS`, `tipe`, `alamat`) VALUES
(1, '1371466', 'RSU Hermina ', 'C', 'Padang'),
(4, '1304015', 'RSU Alya', 'D', 'Sijunjung'),
(5, '1305017', 'RSU Harapan Bunda', 'D', 'Batusangkar'),
(6, '1377005', 'RSU Tamar Medical Centre', 'D', 'Pariaman'),
(7, '1371462', 'RSU Naili DBS', 'C', 'Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3`
--

CREATE TABLE `tabel3` (
  `infoo1` varchar(500) NOT NULL,
  `infoo2` varchar(500) NOT NULL,
  `infoo3` varchar(500) NOT NULL,
  `infoo4` varchar(500) NOT NULL,
  `infoo5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel3`
--

INSERT INTO `tabel3` (`infoo1`, `infoo2`, `infoo3`, `infoo4`, `infoo5`) VALUES
('1. Beranda : Berisi informasi mengenai seperti apakah Rumah Sakit Swasta di Sumatera Barat yang dilihat dari segi pelayanan, fasilitas, serta komitmen dari penyedia layanan Rumah Sakit.', '2. Input Data : Berisi tabel untuk memasukkan informasi mengenai data-data Rumah Sakit Umum Swasta yang ada di Sumatera Barat.', '3. Tampilkan Data : Untuk melihat data yang sudah diinputkan pada bagian \"Input Data\" tadi.', '4. Perbaharui Data : Untuk memperbaharui data jika tidak sesuai dengan yang diinginkan dan mengisi datanya sesuai keinginan user.', '5. Hapus Data : Untuk menghapus data yang tidak diinginkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel4`
--

CREATE TABLE `tabel4` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel4`
--

INSERT INTO `tabel4` (`nim`, `nama`, `prodi`) VALUES
('22343056', 'Manja Fani Oktavia', 'Informatika FT UNP');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel2`
--
ALTER TABLE `tabel2`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tabel4`
--
ALTER TABLE `tabel4`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel2`
--
ALTER TABLE `tabel2`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
