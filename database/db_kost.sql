-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2023 pada 08.43
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_parkir`
--

CREATE TABLE `fasilitas_parkir` (
  `id_fparkir` int(10) NOT NULL,
  `parkir_mobil` int(2) DEFAULT NULL,
  `parkir_motor` int(2) DEFAULT NULL,
  `parkir_sepeda` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_umum`
--

CREATE TABLE `fasilitas_umum` (
  `id_fasum` int(10) NOT NULL,
  `ruang_tamu` int(2) DEFAULT NULL,
  `ruang_cuci` int(2) DEFAULT NULL,
  `ruang_jemur` int(2) DEFAULT NULL,
  `ruang_keluarga` int(2) DEFAULT NULL,
  `dapur` int(2) DEFAULT NULL,
  `kulkas` int(2) DEFAULT NULL,
  `ruang_makan` int(2) DEFAULT NULL,
  `ruang_santai` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(10) NOT NULL,
  `ukuran` varchar(10) DEFAULT NULL,
  `kasur` char(2) DEFAULT NULL,
  `meja` char(2) DEFAULT NULL,
  `bantal` char(2) DEFAULT NULL,
  `lemari_baju` char(2) DEFAULT NULL,
  `kursi` char(2) DEFAULT NULL,
  `ventilasi` char(2) DEFAULT NULL,
  `jendela` char(2) DEFAULT NULL,
  `ac` char(2) DEFAULT NULL,
  `listrik` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar_mandi`
--

CREATE TABLE `kamar_mandi` (
  `id_kamar_mandi` int(10) NOT NULL,
  `ember` char(2) DEFAULT NULL,
  `toilet` char(2) DEFAULT NULL,
  `tipe` varchar(10) DEFAULT NULL,
  `bak_mandi` char(2) DEFAULT NULL,
  `shower` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kost`
--

CREATE TABLE `kost` (
  `id_kost` int(10) NOT NULL,
  `id_kamar` int(10) DEFAULT NULL,
  `id_kamar_mandi` int(10) DEFAULT NULL,
  `id_peraturan` int(10) DEFAULT NULL,
  `id_fasum` int(10) DEFAULT NULL,
  `id_fparkir` int(10) DEFAULT NULL,
  `nama_kost` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `kelurahan` varchar(10) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_kost` varchar(10) NOT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `foto_kost` varchar(100) DEFAULT NULL,
  `foto_kamar` varchar(100) DEFAULT NULL,
  `jarak_ubsi` int(100) DEFAULT NULL,
  `deskripsi_tambahan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peraturan`
--

CREATE TABLE `peraturan` (
  `id_peraturan` int(10) NOT NULL,
  `tamu` int(2) DEFAULT NULL,
  `penghuni` int(2) DEFAULT NULL,
  `pasutri` int(2) DEFAULT NULL,
  `bawa_anak` int(2) DEFAULT NULL,
  `akses` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(1) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$fRAyue3bATswEupUIU77iebAgKdIbQYRPtA/RBoooEg4NuvBCyI5e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas_parkir`
--
ALTER TABLE `fasilitas_parkir`
  ADD PRIMARY KEY (`id_fparkir`);

--
-- Indeks untuk tabel `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  ADD PRIMARY KEY (`id_fasum`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `kamar_mandi`
--
ALTER TABLE `kamar_mandi`
  ADD PRIMARY KEY (`id_kamar_mandi`);

--
-- Indeks untuk tabel `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id_kost`),
  ADD KEY `id_kamar` (`id_kamar`,`id_kamar_mandi`,`id_peraturan`,`id_fasum`,`id_fparkir`),
  ADD KEY `id_peraturan` (`id_peraturan`),
  ADD KEY `id_kamar_mandi` (`id_kamar_mandi`),
  ADD KEY `id_fasum` (`id_fasum`),
  ADD KEY `id_fparkir` (`id_fparkir`);

--
-- Indeks untuk tabel `peraturan`
--
ALTER TABLE `peraturan`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas_parkir`
--
ALTER TABLE `fasilitas_parkir`
  MODIFY `id_fparkir` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  MODIFY `id_fasum` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kamar_mandi`
--
ALTER TABLE `kamar_mandi`
  MODIFY `id_kamar_mandi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kost`
--
ALTER TABLE `kost`
  MODIFY `id_kost` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peraturan`
--
ALTER TABLE `peraturan`
  MODIFY `id_peraturan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `kost_ibfk_1` FOREIGN KEY (`id_peraturan`) REFERENCES `peraturan` (`id_peraturan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_ibfk_3` FOREIGN KEY (`id_kamar_mandi`) REFERENCES `kamar_mandi` (`id_kamar_mandi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_ibfk_4` FOREIGN KEY (`id_fasum`) REFERENCES `fasilitas_umum` (`id_fasum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_ibfk_5` FOREIGN KEY (`id_fparkir`) REFERENCES `fasilitas_parkir` (`id_fparkir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
