-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 01:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` int(10) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ortu` varchar(40) NOT NULL,
  `asek` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `jurusan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `Nama`, `alamat`, `nama_ortu`, `asek`, `no_hp`, `jenis_kelamin`, `agama`, `sumber`, `jurusan`) VALUES
(17, 1273819, 'test', 'yudaisyds', 'asiyd', 'nkdas', 2198391, 'pria', '', 'test', 'RPL'),
(18, 1273819, 'test', 'yudaisyds', 'asiyd', 'nkdas', 2198391, 'pria', '', 'test', 'RPL'),
(19, 12387, 'jhasjd', 'jhjksaakd', 'djkasjd', 'khkjsda', 1234, 'pria', '', 'test', 'RPL'),
(20, 12387, 'jhasjd', 'jhjksaakd', 'djkasjd', 'khkjsda', 1234, 'pria', '', 'test', 'RPL'),
(21, 12387, 'jhasjd', 'jhjksaakd', 'djkasjd', 'khkjsda', 1234, 'pria', '', 'test', 'RPL'),
(22, 129844, 'hsakdj', 'jashd', 'jhkdsa', 'kjhdsa', 18273, 'pria', 'islam', 'hallo', 'RPL'),
(23, 129844, 'hsakdj', 'jashd', 'jhkdsa', 'kjhdsa', 18273, 'pria', 'islam', 'hallo', 'RPL'),
(24, 91829, 'jepi sutarlan saputra', 'banda asri', 'dobleh', 'yadika', 918231, 'pria', 'islam', 'sahabat', 'RPL'),
(25, 91829, 'jepi sutarlan saputra', 'banda asri', 'dobleh', 'yadika', 918231, 'pria', 'islam', 'sahabat', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `role_id`, `name`, `aktif`) VALUES
(1, 'jeps', '$2y$10$E7.flYDfY3mBiPJBaKMhfOIx.FbjDRFdE599w44Flh./0r3FhqEei', 2, 'jeps', 0),
(2, 'jeps', '$2y$10$hPye4fGAX7RTet1zFA0e4usCJRGChoZntPnA5J06qFUBoeQ7bd7ty', 2, 'jeps', 0),
(3, 'blackelimit@gmail.com', '$2y$10$SAXYz3WWvkVKc5i4O/5jbOfuGHsr7g8VRp8vPFLEVHQpdVGrt3YY6', 2, 'jeps', 0),
(4, 'blackelimit1@gmail.com', '$2y$10$mPbRfCQpsmpmHt.SnxU8Aeua0gVM1A6c69M0qhKVqtYGHabcOHsoi', 2, 'jeps', 0),
(5, 'blackelimit11@gmail.com', '$2y$10$JoWUjnVnRHc6fJ2wLE5HquOFFjSey30LBMOryhMShFW0O/emre99u', 2, 'jeps', 0),
(6, 'test@gmail.com', '$2y$10$06MgG7TXmUqgSnDxVD3BdugdhaP8ECfKH.XfbPMfCrXB0o59jkNEG', 2, 'test', 0),
(7, 'blackelimit10@gmail.com', '$2y$10$jLxwrgGcGUzr0LbnjqbDLeAteH19c399K1dxJMO7gxmfvmeUTwMqe', 1, 'Jepi Sutarlan Saputra', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
