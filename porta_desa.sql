-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2018 pada 16.22
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porta_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(3) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `uname` varchar(40) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `uname`, `pass`) VALUES
(1, 'Ammar', 'zeref', '202cb962ac59075b964b07152d234b70'),
(2, 'juon', 'juon', 'c4685b3361a64ded9db11f1b05819441'),
(3, 'zekken', 'zekken', 'c8837b23ff8aaa8a2dde915473ce0991');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_animasi`
--

CREATE TABLE `tb_animasi` (
  `id` int(3) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_animasi`
--

INSERT INTO `tb_animasi` (`id`, `nama`) VALUES
(1, 'grow'),
(2, 'shrink'),
(3, 'pulse'),
(4, 'pulse-grow'),
(5, 'pulse-shrink'),
(6, 'push'),
(7, 'pop'),
(8, 'bounce-in'),
(10, 'bounce-out'),
(11, 'rotate'),
(12, 'grow-rotate'),
(13, 'float'),
(14, 'sink'),
(15, 'bob'),
(16, 'hang'),
(17, 'skew'),
(18, 'skew-forward'),
(19, 'skew-backward'),
(20, 'wobble-horizontal'),
(21, 'wobble-vertical'),
(22, 'buzz'),
(23, 'wobble-bottom'),
(24, 'wobble-top'),
(25, 'buzz-out');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_button_color`
--

CREATE TABLE `tb_button_color` (
  `id` int(3) NOT NULL,
  `nama` varchar(15) DEFAULT NULL,
  `nilai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_button_color`
--

INSERT INTO `tb_button_color` (`id`, `nama`, `nilai`) VALUES
(1, 'Biru', 'primary'),
(2, 'Silver', 'secondary'),
(3, 'Hijau', 'success'),
(4, 'Merah', 'danger'),
(5, 'Kuning', 'warning'),
(6, 'Teal', 'info'),
(7, 'Hitam', 'dark');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_costum`
--

CREATE TABLE `tb_costum` (
  `id` int(3) NOT NULL,
  `id_animasi` int(3) DEFAULT NULL,
  `id_button_color` int(3) DEFAULT NULL,
  `nm_custom` varchar(20) NOT NULL,
  `warna_link` varchar(20) DEFAULT NULL,
  `back_gambar` varchar(255) DEFAULT NULL,
  `back_color` varchar(20) DEFAULT NULL,
  `card_warna_header` varchar(20) DEFAULT NULL,
  `card_warna_footer` varchar(20) DEFAULT NULL,
  `card_warna_body` varchar(20) DEFAULT NULL,
  `text_color` varchar(20) NOT NULL,
  `card_text_color` varchar(20) NOT NULL,
  `b_footer` varchar(20) NOT NULL,
  `t_footer` varchar(20) NOT NULL,
  `s_back` enum('warna','gambar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_costum`
--

INSERT INTO `tb_costum` (`id`, `id_animasi`, `id_button_color`, `nm_custom`, `warna_link`, `back_gambar`, `back_color`, `card_warna_header`, `card_warna_footer`, `card_warna_body`, `text_color`, `card_text_color`, `b_footer`, `t_footer`, `s_back`) VALUES
(2, 3, 4, 'Qwerty', 'FFD426', 'background_desa_2.jpg', 'C0392B', '76FF26', 'FF4621', 'FFFF45', 'FFFFFF', '000000', 'FFFFFF', 'FF0000', 'warna'),
(3, 11, 3, 'Versi 2', '1717FF', 'header.jpg', 'F7DC28', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF', '000000', 'FFFFFF', '000000', 'gambar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_header`
--

CREATE TABLE `tb_header` (
  `id` int(3) NOT NULL,
  `id_custom` int(3) DEFAULT NULL,
  `nm_desa` varchar(40) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `judul` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_header`
--

INSERT INTO `tb_header` (`id`, `id_custom`, `nm_desa`, `favicon`, `judul`) VALUES
(1, 3, 'BLC Telkom Klaten1', 'favicon.png', '<h1 style=\"text-align: center;\"><strong>BROADBAND LEARNING CENTER<br />BLC TELKOM KLATEN</strong></h1>\r\n<h4 style=\"text-align: center;\">Kompleks Gedung Sunan Pandanaran RSPD Klaten&nbsp;<br />Jl. Pemuda No.140 Klaten, Klaten Tengah, KLATEN <a href=\"http://www.onodasakamichi.blospot.com\" target=\"_blank\">57411&nbsp;</a>Tlp/WA.08222 0160 555&nbsp;</h4>\r\n<p style=\"text-align: center;\"><img src=\"https://i.mt.lv/mimg/mt/f238f4b2e66db48235af14a29a72421094b143e5.jpg\" alt=\"\" width=\"227\" height=\"116\" /></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konten`
--

CREATE TABLE `tb_konten` (
  `id` int(3) NOT NULL,
  `id_header` int(3) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_konten`
--

INSERT INTO `tb_konten` (`id`, `id_header`, `nama`, `gambar`, `status`, `url`) VALUES
(1, 1, 'Pemerintahan', 'ak.jpg', '1', 'www.onodasakamichi.blogspot.com1'),
(2, 1, 'UMKM', 'ap.jpg', '1', 'www.onodasakamichi.blogspot.com'),
(3, 1, 'Pendidikan', 'library.png', '1', 'www.onodasakamichi.blogspot.com'),
(4, 1, 'Agama', 'law.png', '1', 'www.imadupoi.ml'),
(5, 1, 'Peta', 'web.png', '0', 'www.onodasakamichi.blogspot.com'),
(6, 1, 'Oblak', 'video-chat.png', '0', 'www.riooblax.blogspot.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sub_konten`
--

CREATE TABLE `tb_sub_konten` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `id_konten` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sub_konten`
--

INSERT INTO `tb_sub_konten` (`id`, `nama`, `url`, `status`, `id_konten`) VALUES
(1, 'Mie PakDikin', 'www.dikin.com', '1', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_animasi`
--
ALTER TABLE `tb_animasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_button_color`
--
ALTER TABLE `tb_button_color`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_costum`
--
ALTER TABLE `tb_costum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_animasi` (`id_animasi`),
  ADD KEY `id_button_color` (`id_button_color`);

--
-- Indeks untuk tabel `tb_header`
--
ALTER TABLE `tb_header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_custom` (`id_custom`);

--
-- Indeks untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_header` (`id_header`),
  ADD KEY `index1` (`id`);

--
-- Indeks untuk tabel `tb_sub_konten`
--
ALTER TABLE `tb_sub_konten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_konten` (`id_konten`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_animasi`
--
ALTER TABLE `tb_animasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_button_color`
--
ALTER TABLE `tb_button_color`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_costum`
--
ALTER TABLE `tb_costum`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_header`
--
ALTER TABLE `tb_header`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_sub_konten`
--
ALTER TABLE `tb_sub_konten`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_costum`
--
ALTER TABLE `tb_costum`
  ADD CONSTRAINT `tb_costum_ibfk_1` FOREIGN KEY (`id_button_color`) REFERENCES `tb_button_color` (`id`),
  ADD CONSTRAINT `tb_costum_ibfk_2` FOREIGN KEY (`id_animasi`) REFERENCES `tb_animasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_header`
--
ALTER TABLE `tb_header`
  ADD CONSTRAINT `tb_header_ibfk_1` FOREIGN KEY (`id_custom`) REFERENCES `tb_costum` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  ADD CONSTRAINT `tb_konten_ibfk_1` FOREIGN KEY (`id_header`) REFERENCES `tb_header` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_sub_konten`
--
ALTER TABLE `tb_sub_konten`
  ADD CONSTRAINT `tb_sub_konten_ibfk_1` FOREIGN KEY (`id_konten`) REFERENCES `tb_konten` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
