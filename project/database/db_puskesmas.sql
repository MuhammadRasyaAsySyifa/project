-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 05:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `penulis` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(120) NOT NULL,
  `spesialis` varchar(90) NOT NULL,
  `kontak` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `spesialis`, `kontak`, `gambar`) VALUES
(1, 'DR.Lorem', 'Ahli Gigi', '08xxxxxxxx', 'default-dc.png'),
(2, 'DR.Ipsum', 'Ahli Psikolog', '08xxxxxxx', 'default-dc.png');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `kode_obat` varchar(35) NOT NULL,
  `gambar_obat` text NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `deskripsi_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `kode_obat`, `gambar_obat`, `tanggal_masuk`, `nama_obat`, `harga_obat`, `deskripsi_obat`) VALUES
(1, 'MO001', 'default.avif', '2023-05-20', 'Obat 1', 35000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.'),
(2, 'MO002', 'default.avif', '2023-05-20', 'Obat 2', 40000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.'),
(3, 'MO003', 'default.avif', '2023-05-20', 'Obat 3', 20000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.'),
(4, 'MO004', 'default.avif', '2023-05-20', 'Obat 4', 25500, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.'),
(5, 'MO005', 'default.avif', '2023-05-20', 'Obat 5', 32000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.'),
(6, 'MO006', 'default.avif', '2023-05-20', 'Obat 6', 75000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.'),
(7, 'MO007', 'default.avif', '2023-05-20', 'Obat 7', 28000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.'),
(8, 'MO008', 'default.avif', '2023-05-20', 'Obat 8', 12000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur sunt hic voluptatem suscipit voluptas accusantium impedit quae, velit magnam, dignissimos reprehenderit veniam labore alias. Neque dolorum officiis dolores eveniet, asperiores accusamus maiores dolor. Assumenda quibusdam in temporibus repellat beatae.');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_obat`
--

CREATE TABLE `pembelian_obat` (
  `id_pembelian` int(11) NOT NULL,
  `tanggal_order` text NOT NULL,
  `nama_pembeli` varchar(75) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian_obat`
--

INSERT INTO `pembelian_obat` (`id_pembelian`, `tanggal_order`, `nama_pembeli`, `nama_obat`, `total_harga`, `jumlah_obat`) VALUES
(1, '0000-00-00', 'Nama_Testing', 'Obat 1', 105000, 3),
(2, '0000-00-00', 'Nama_Testing', 'Obat 1', 105000, 3),
(3, '0000-00-00', 'Nama_Testing', 'Obat 1', 35000, 1),
(4, '0000-00-00', 'Nama_Testing', 'Obat 1', 35000, 1),
(5, 'Sunday, 21-May-2023', 'Nama_Testing', 'Obat 1', 350000, 10),
(6, 'Sunday, 21-May-2023', 'Nama_Testing', 'Obat 1', 35000, 1),
(7, 'Sunday, 21-May-2023', 'Nama_Testing', 'Obat 1', 35000, 1),
(8, 'Sunday, 21-May-2023', 'Nama_Testing', 'Obat 1', 70000, 2),
(9, 'Wednesday, 24-May-2023', 'Nama_Testing', 'Obat 2', 40000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `poli`) VALUES
(1, 'poli umum'),
(2, 'poli gigi'),
(3, 'poli kia'),
(4, 'poli kb'),
(5, 'poli gizi'),
(6, 'poli penyakit menular\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` int(11) NOT NULL,
  `nama_puskesmas` varchar(300) NOT NULL,
  `alamat_puskesmas` text NOT NULL,
  `link_map` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id`, `nama_puskesmas`, `alamat_puskesmas`, `link_map`, `gambar`) VALUES
(1, 'Contoh_Puskesmas(1)', 'Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532', 'https://goo.gl/maps/QJqwC7aL36xyhrcY8', 'default-hs.png'),
(2, 'Contoh_Puskesmas(2)', 'Jl.Melati, Komp.Persada Kuning, No.27, RT.33, RW.09, Kode Pos: 15202', 'https://goo.gl/maps/QJqwC7aL36xyhrcY8', 'default-hs.png\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `respond`
--

CREATE TABLE `respond` (
  `id` int(11) NOT NULL,
  `puskesmas` text NOT NULL,
  `nama` varchar(200) NOT NULL,
  `keluhan` text NOT NULL,
  `status` enum('menunggu respon','respon telah diterima','selesai') NOT NULL DEFAULT 'menunggu respon'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `puskesmas` text NOT NULL,
  `pasien` varchar(120) NOT NULL,
  `keluhan` text NOT NULL,
  `tanggal` text NOT NULL,
  `poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `puskesmas`, `pasien`, `keluhan`, `tanggal`, `poli`) VALUES
(3, '1. Contoh_Puskesmas(1) | Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532 |', 'testing', 'Lorem Ipsum Dolor Sit Amet.', 'Sunday, 21-May-2023', 'poli umum'),
(4, '1. Contoh_Puskesmas(1) | Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532 |', 'testing', 'Lorem Ipsum Dolor Sit Amet.', 'Sunday, 21-May-2023', 'poli umum'),
(5, '1. Contoh_Puskesmas(1) | Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532 |', 'testing', 'Lorem Ipsum Dolor Sit Amet.', 'Sunday, 21-May-2023', 'poli umum'),
(6, '1. Contoh_Puskesmas(1) | Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532 |', 'testing', 'Lorem Ipsum Dolor Sit Amet.', 'Sunday, 21-May-2023', 'poli umum'),
(13, '1. Contoh_Puskesmas(1) | Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532 |', 'testing', ' cek\r\n', 'Wednesday, 24-May-2023', 'poli umum'),
(14, '1. Contoh_Puskesmas(1) | Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532 |', 's', 'ss', 'Wednesday, 24-May-2023', 'poli umum'),
(15, '1. Contoh_Puskesmas(1) | Jl.Mawar, Komp.Persada Hijau, No.123, RT.01, RW.02, Kode Pos: 15532 |', 's', 'ss', 'Wednesday, 24-May-2023', 'poli umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respond`
--
ALTER TABLE `respond`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `respond`
--
ALTER TABLE `respond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
