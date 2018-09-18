-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Okt 2017 pada 07.37
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_megah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kastamer`
--

CREATE TABLE `kastamer` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kastamer`
--

INSERT INTO `kastamer` (`id`, `nama`, `alamat`, `phone`, `fax`) VALUES
('KS_01', 'RS Royal Taruma', 'Jl. Daan Mogot No.34 Grogol', '021 56958338', '-'),
('KS_02', 'RS. Siloam Graha Medika', '  Jl. Raya Perjuangan Kav. 8 Kebon Jeruk Jakarta Barat 11530  ', '021 5300888', '021 5321775'),
('KS_03', 'RS. Pelni Petamburan', 'Jl. K. S. Tubun No. 92 - 94', '021 5306901', '021 5483145'),
('KS_04', 'RSIA. Hermina Daan Mogot', 'Jl. Kintamani Raya No. 2 Perumahan Daan Mogot Baru Jakarta Barat', '021 5408989', '021 5449869');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipper`
--

CREATE TABLE `shipper` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pic` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shipper`
--

INSERT INTO `shipper` (`id`, `nama`, `alamat`, `pic`, `phone`) VALUES
('SH_01', 'Transindo Xpress', 'Jl.Basuki Rahmat No.9 Pondok Bambu Jakarta 13430  ', 'Deni Setiadi', '021 8661 3800'),
('SH_02', 'PT GOLDEN TRANS INDONESIA', 'Mega Mall Ciputat B21 Jakarta Selatan  ', 'Adi Amanto', '021 74715514'),
('SH_03', 'PT Puri Luhut Jasa', 'Jl. Raya Bogor Km.28 No.09 Jakarta  ', 'Aninditho Wahyu Seto', '021 87902466');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pic` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `alamat`, `pic`, `phone`) VALUES
('SP_01', 'PT. Cendana Megah Indonesia', 'Jl. Tanjidor No.8 Turangga, Lengkong, Kota Bandung, Jawa Barat 40264, Bandung, Jawa Barat, Indonesia', 'Bpk. Djajang Nurjaman', '022 52351265'),
('SP_02', 'PD. Hanselindo', 'Jl. Jagir Wonokromo 98 . Kompleks Ruko Mangga Dua B-2/11, Surabaya, Jawa Timur, Indonesia', 'Bpk. Iwan Spesialwan', '031 28328782'),
('SP_03', 'PT. HILDAN FATHONI INDONESIA', 'Jln.Moch.Rasyid No. 9 B, RT.12 RW.03, Kelurahan Mulyorejo, Malang, Jawa Timur, Indonesia', 'Bpk. Aji Santoso', '0341 23671267'),
('SP_04', 'CV. Purisentra Pelangi', 'Mall Mega Kemayoran (MGK) Lantai UG Blok A2 No.1 Jln. Angkasa Kav. B6 Kotabaru Bandar Kemayoran Jakarta Pusat ', 'Bpk. Teco Cugura', '021 8873251');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `grup` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `fullname`, `grup`) VALUES
('1', 'admin', 'admin', 'admin test', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kastamer`
--
ALTER TABLE `kastamer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
