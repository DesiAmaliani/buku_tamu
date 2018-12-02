-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2018 pada 15.41
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `password`) VALUES
('admin', 'admin'),
('desi', '12345'),
('namauser', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_bktamu` int(11) NOT NULL,
  `status_bktamu` varchar(30) NOT NULL,
  `nm_bktamu` varchar(30) NOT NULL,
  `email_bktamu` varchar(30) NOT NULL,
  `alamat_bktamu` varchar(150) NOT NULL,
  `tgl_bktamu` varchar(30) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_bktamu`, `status_bktamu`, `nm_bktamu`, `email_bktamu`, `alamat_bktamu`, `tgl_bktamu`, `komentar`) VALUES
(1, 'hai', 'mila', 'mila@gmail.com', 'indramayu', '', '<p><strong>hahha</strong></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nm_galeri` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `tgl_galeri` varchar(25) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nm_galeri`, `ket`, `tgl_galeri`, `gambar`) VALUES
(3, 'apa', 'adads', '27 11 2018', '23b8642806b450f58810d7e56104e225.jpg'),
(4, 'jhsayd', 'jhsd', '28 11 2018', 'fanart-got7-pin-by-osan-v-on-got7-fanart-pinterest-of-fanart-got7-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_bktamu`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_bktamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
