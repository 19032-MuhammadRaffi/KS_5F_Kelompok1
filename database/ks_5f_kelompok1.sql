-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2021 pada 10.50
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ks_5f_kelompok1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_keluar` varchar(10) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_laptop` varchar(10) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `keterangan` enum('Keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` varchar(10) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_laptop` varchar(10) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `keterangan` enum('Masuk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `id_user`, `id_laptop`, `tgl_transaksi`, `nama_user`, `jumlah`, `keterangan`) VALUES
('MSK0000001', 'staff1', 'LTP0000001', '2021-12-15 16:49:54', 'Staff 1', 10, 'Masuk'),
('MSK0000002', 'staff1', 'LTP0000002', '2021-12-15 16:50:04', 'Staff 1', 15, 'Masuk'),
('MSK0000003', 'staff1', 'LTP0000003', '2021-12-15 16:50:16', 'Staff 1', 7, 'Masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_laptop`
--

CREATE TABLE `data_laptop` (
  `id_laptop` varchar(10) NOT NULL,
  `series` varchar(30) NOT NULL,
  `nama_laptop` varchar(50) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `vga_discrete` varchar(30) NOT NULL,
  `ram` int(2) NOT NULL,
  `type_storage` enum('SSD','HDD') NOT NULL,
  `size_storage` int(4) NOT NULL,
  `camera` enum('Yes','No') NOT NULL,
  `dvd` enum('Yes','No') NOT NULL,
  `gambar_laptop` varchar(50) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_laptop`
--

INSERT INTO `data_laptop` (`id_laptop`, `series`, `nama_laptop`, `merk`, `processor`, `vga_discrete`, `ram`, `type_storage`, `size_storage`, `camera`, `dvd`, `gambar_laptop`, `harga`, `stok`) VALUES
('LTP0000001', 'Gaming', 'TUF A15 FX506IV', 'Asus', 'AMD Ryzen 7 4700H', 'NVIDIA GeForce RTX 2060', 16, 'SSD', 500, 'Yes', 'No', '61b9b686326c8.jpg', 21000000, 10),
('LTP0000002', 'Gaming', 'TUF A15 FX506IH', 'ASUS', 'AMD Ryzen 5 4500H', 'NVIDIA GTX 1650', 8, 'SSD', 500, 'Yes', 'No', '61b8d8c7775b2.jpg', 12500000, 15),
('LTP0000003', 'Gaming', 'Legion 7i', 'Lenovo', 'Intel Core i7-10750H', 'NVIDIA GeForce RTX 2060', 16, 'SSD', 1000, 'Yes', 'No', '61b96e054c90d.jpg', 20000000, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `hak_akses` enum('Admin','Staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama`, `no_hp`, `hak_akses`) VALUES
('admin1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Admin Super', '081212341234', 'Admin'),
('staff1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Staff 1', '081212341234', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_laptop` (`id_laptop`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_laptop` (`id_laptop`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `data_laptop`
--
ALTER TABLE `data_laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_keluar_ibfk_2` FOREIGN KEY (`id_laptop`) REFERENCES `data_laptop` (`id_laptop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuk_ibfk_2` FOREIGN KEY (`id_laptop`) REFERENCES `data_laptop` (`id_laptop`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
