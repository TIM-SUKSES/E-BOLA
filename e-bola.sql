-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 02:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-bola`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nama_tiket` varchar(128) NOT NULL,
  `harga` int(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `file` text NOT NULL,
  `tiket` text NOT NULL,
  `log` enum('Menunggu','Pembayaran Diterima','Pembayaran Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama_user`, `nama_tiket`, `harga`, `metode_pembayaran`, `tanggal_input`, `file`, `tiket`, `log`) VALUES
(20, 'Alvin Austin', 'Argentina vs Indonesia (STANDARD)', 350000, 'DANA', '2023-06-20 07:16:18', 'bukti4.jpeg', 'https://bit.ly/43NI5Bs', 'Pembayaran Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `nama_tiket` varchar(50) NOT NULL,
  `foto` text NOT NULL DEFAULT 'default.png',
  `harga` int(25) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_tiket`, `foto`, `harga`, `jumlah`) VALUES
(5, 'Argentina vs Indonesia (Exclusive)', 'argentina.jpeg', 500000, 100),
(6, 'Argentina vs Indonesia (LITE)', 'argentina1.jpeg', 150000, 2),
(7, 'Argentina vs Indonesia (STANDARD)', 'argentina2.jpeg', 350000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$aOoxTo7iks19TpnZdVEX1O8xbAIVCTJTBtFJM2/NamM6jG3sGg5Wm', 'admin', 0),
(2, 'user', 'user@gmail.com', '$2y$10$9galI95IWOIAjplfPlrbaujbD3DVh26cAcLCZ/B72ipAhZG3lZOqe', 'user', 0),
(11, 'Alvin Austin', 'alvin.austin4@gmail.com', '$2y$10$KsluG5p3o684sGJzQJZ6Bu6IYqvEdyca4nan6Czrw9l7jTwSwyPP6', 'user', 0),
(12, 'Rojali', 'rojali@gmail.com', '$2y$10$.J1pa7ZPeMTC9hF.jM5uNenzrNqgS2.PyAwUc44NoiY/maYrY1HpS', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
