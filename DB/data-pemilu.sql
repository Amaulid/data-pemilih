-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2023 pada 13.47
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data-pemilu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `nama`, `kecamatan_id`) VALUES
(1, 'BUNISARI', 1),
(2, 'CAMPAKA', 1),
(3, 'CIGUGUR', 1),
(4, 'CIMINDI', 1),
(5, 'HARUMANDALA', 1),
(6, 'KERTAJAYA', 1),
(7, 'PAGERBUMI', 1),
(8, 'BATUKARAS', 2),
(9, 'CIAKAR', 2),
(10, 'CIBANTEN', 2),
(11, 'CIJULANG', 2),
(12, 'KERTAYASA', 2),
(13, 'KONDANGJAJAR', 2),
(14, 'MARGACINTA', 2),
(15, 'BATUMALANG', 3),
(16, 'CIMERAK', 3),
(17, 'CIPARANTI', 3),
(18, 'KERTAHARJA', 3),
(19, 'KERTAMUKTI', 3),
(20, 'LEGOKJAWA', 3),
(21, 'LIMUSGEDE', 3),
(22, 'MASAWAH', 3),
(23, 'MEKARSARI', 3),
(24, 'SINDANGSARI', 3),
(25, 'SUKAJAYA', 3),
(26, 'BAGOLO', 4),
(27, 'BANJARHARJA', 4),
(28, 'CIBULUH', 4),
(29, 'CIPARAKAN', 4),
(30, 'EMPLAK', 4),
(31, 'KALIPUCANG', 4),
(32, 'PAMOTAN', 4),
(33, 'PUTRAPINGGAN', 4),
(34, 'TUNGGILIS', 4),
(35, 'BANGUNJAYA', 5),
(36, 'BANGUNKARYA', 5),
(37, 'BOJONG', 5),
(38, 'BOJONGKONDANG', 5),
(39, 'BUNGUR RAYA', 5),
(40, 'CIMANGGU', 5),
(41, 'CISARUA', 5),
(42, 'JADIKARYA', 5),
(43, 'JADIMULYA', 5),
(44, 'JAYASARI', 5),
(45, 'KARANGKAMIRI', 5),
(46, 'LANGKAPLANCAR', 5),
(47, 'MEKARWANGI', 5),
(48, 'PANGKALAN', 5),
(49, 'SUKAMULYA', 5),
(50, 'JANGRAGA', 6),
(51, 'KERTAJAYA', 6),
(52, 'MANGUNJAYA', 6),
(53, 'SINDANGJAYA', 6),
(54, 'SUKAMAJU', 6),
(55, 'BOJONGSARI', 7),
(56, 'CIBOGO', 7),
(57, 'CIGANJENG', 7),
(58, 'KARANGMULYA', 7),
(59, 'KARANGPAWITAN', 7),
(60, 'KARANGSARI', 7),
(61, 'KEDUNGWULUH', 7),
(62, 'MARUYUNGSARI', 7),
(63, 'PADAHERANG', 7),
(64, 'PALEDAH', 7),
(65, 'PANYUTRAN', 7),
(66, 'PASIRGEULIS', 7),
(67, 'SINDANGWANGI', 7),
(68, 'SUKANAGARA', 7),
(69, 'BABAKAN', 8),
(70, 'PAGERGUNUNG', 8),
(71, 'PANANJUNG', 8),
(72, 'PANGANDARAN', 8),
(73, 'PURBAHAYU', 8),
(74, 'SIDOMULYO', 8),
(75, 'SUKAHURIP', 8),
(76, 'WONOHARJO', 8),
(77, 'BOJONG', 9),
(78, 'CIBENDA', 9),
(79, 'CILIANG', 9),
(80, 'CINTAKARYA', 9),
(81, 'CINTARATU', 9),
(82, 'KARANGBENDA', 9),
(83, 'KARANGJALADRI', 9),
(84, 'PARAKANMANGGU', 9),
(85, 'PARIGI', 9),
(86, 'SELASARI', 9),
(87, 'CIKALONG', 10),
(88, 'CIKEMBULAN', 10),
(89, 'KALIJATI', 10),
(90, 'KERSARATU', 10),
(91, 'PAJATEN', 10),
(92, 'SIDAMULIH', 10),
(93, 'SUKARESIK', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'CIGUGUR'),
(2, 'CIJULANG'),
(3, 'CIMERAK'),
(4, 'KALIPUCANG'),
(5, 'LANGKAPLANCAR'),
(6, 'MANGUNJAYA'),
(7, 'PADAHERANG'),
(8, 'PANGANDARAN'),
(9, 'PARIGI'),
(10, 'SIDAMULIH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `tps` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id`, `nama`, `nik`, `kecamatan_id`, `desa_id`, `tps`) VALUES
(9, 'Aldi Miswa', '321123234532323', 10, 89, '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `kecamatan_id` (`kecamatan_id`),
  ADD KEY `desa_id` (`desa_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD CONSTRAINT `pemilih_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`),
  ADD CONSTRAINT `pemilih_ibfk_2` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
