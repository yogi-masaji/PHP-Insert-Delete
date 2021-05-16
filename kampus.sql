-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2021 at 06:21 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(20) UNSIGNED NOT NULL,
  `npm` char(15) NOT NULL,
  `nama` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `email`) VALUES
(16, '4519210030', 'ANGGUN TIYAS MIKA', 'Anggun@gmail.com'),
(17, '4519210031', 'ALFIAH HASNA', 'ALFIAHHASNA@gmail.com'),
(18, '4519210033', 'YOGI MASAJI ', 'YOGI_MASAJI@gmail.com'),
(19, '4519210034', 'FAJAR MUKHOLLIS ', 'Fajar@gmail.com'),
(20, '4519210036', ' WAHYU IBNU TAQI ', 'ibnu@gmail.com'),
(21, '4519210037', 'MUHAMMAD ALWI NUR SAPUTRA', 'alwi22@gmail.com'),
(22, '4519210038', 'DWI NUR FATEKHA', 'Dwi222@gmail.com'),
(23, '4519210039', ' INDRA AGUS KUNCORO', 'Indra32@gmail.com'),
(26, '4519210041', 'AULIA RAHMI', 'aul123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
