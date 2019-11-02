-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2019 pada 19.37
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `department`
--

CREATE TABLE `department` (
  `id_dept` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `department`
--

INSERT INTO `department` (`id_dept`, `name`) VALUES
('C1', 'Communication'),
('E1', 'Elka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_data`
--

CREATE TABLE `student_data` (
  `id_student` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `id_dept` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `student_data`
--

INSERT INTO `student_data` (`id_student`, `name`, `address`, `id_dept`, `image`) VALUES
('12345', 'dhiko', 'lampung', 'C1', 'img1.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_dept` (`id_dept`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `student_data`
--
ALTER TABLE `student_data`
  ADD CONSTRAINT `student_data_ibfk_1` FOREIGN KEY (`id_dept`) REFERENCES `department` (`id_dept`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
