-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 06:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosant_farma`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuk`
--

CREATE TABLE `bentuk` (
  `id_bentuk` int(11) NOT NULL,
  `bentuk_obat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bentuk`
--

INSERT INTO `bentuk` (`id_bentuk`, `bentuk_obat`) VALUES
(1, 'Tablet'),
(2, 'Puyerasd'),
(3, 'Botol'),
(4, 'Syrup'),
(5, 'Serbuk'),
(6, 'Injeksi'),
(7, 'Suppositoria'),
(8, 'Salep'),
(9, 'Krim'),
(10, 'Gel'),
(11, 'Kaplet'),
(12, 'Kapsul');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` int(11) NOT NULL,
  `gol_obat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_gol`, `gol_obat`) VALUES
(1, 'Anak - Anak'),
(2, 'Remaja'),
(3, 'Dewasa'),
(4, 'Semua');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_obat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_obat`) VALUES
(1, 'Analgetik'),
(2, 'Antibiotik'),
(3, 'Anti Inflamasi'),
(4, 'Anti Hemorrhagi');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `id_gol` int(11) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_bentuk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(15) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `id_gol`, `nama_obat`, `id_jenis`, `id_bentuk`, `harga`, `stok`, `unit`, `img`) VALUES
(1, 2, 'Acyclovir 400', 4, 1, 31500, 39, 'Box (50)', '366-1.jpg'),
(2, 4, 'Biolincom Tab 500mg', 1, 1, 554000, 300, 'Box (100)', '922-2.jpeg'),
(3, 4, 'Canicol 500mg', 1, 1, 190000, 100, 'Box (100)', '596-3.jpeg'),
(4, 4, 'Cefadroxil Cap', 1, 12, 98000, 300, 'Box (100)', '384-4.jpg'),
(5, 4, 'Cefat Cap 500mg', 1, 12, 1195000, 389, 'Box (100)', '256-5.jpg'),
(6, 4, 'Cefixime 100mg', 4, 12, 88000, 150, 'Box (50)', '580-6.jpeg'),
(7, 4, 'Ciprofloxacin 500mg', 1, 1, 53600, 299, 'Box (100)', '747-7.jpg'),
(8, 4, 'Clamixin Tab', 2, 1, 407000, 30, 'Box (30)', '642-8.jpg'),
(9, 1, 'Combantrin 250mg', 3, 1, 1280000, 400, 'Box (100)', '900-9.png'),
(10, 4, 'Cotrim 480mg', 4, 1, 50000, 300, 'Box (100)', '9-10.png'),
(11, 4, 'Cotrim Forte 960mg', 1, 1, 70000, 300, 'Box (100)', '955-11.jpg'),
(12, 4, 'Dionicol 500', 2, 12, 120000, 300, 'Box (100)', '539-12.jpeg'),
(13, 4, 'Duramycin 500', 1, 1, 200000, 300, 'Box (100)', '451-13.jpg'),
(14, 4, 'Griseofulvin Tab 500', 3, 1, 156000, 200, 'Box (100)', '486-14.jpeg'),
(15, 4, 'Intermoxil 500mg', 1, 1, 336500, 300, 'Box (100)', '162-15.jpg'),
(16, 4, 'Ketoconazole Tab', 2, 1, 26000, 100, 'Box (50)', '1117261942_16.jpg'),
(17, 4, 'Novachlor 250mg', 2, 1, 68500, 250, 'Box (50)', '38282606_17.jpg'),
(18, 4, 'Novamox', 4, 1, 56000, 700, 'Box (50)', '171629744_18.jpg'),
(19, 4, 'Prazina Tab', 3, 1, 215600, 250, 'Box (100)', '1528457280_19.jpg'),
(20, 4, 'Pritalinc 500mg', 3, 1, 139000, 250, 'Box (100)', '1590239122_20.jpg'),
(21, 4, 'Rifamtibi 450mg', 4, 1, 500000, 250, 'Box (100)', '2137520715_21.jpeg'),
(22, 4, 'Rifamtibi 600mg', 3, 1, 650000, 200, 'Box (100)', '127339737_22.jpeg'),
(23, 4, 'Trogyl Tab 500mg', 4, 1, 92400, 250, 'Box (50)', '726304802_23.jpg'),
(24, 4, 'Uresix Tab', 2, 1, 95000, 150, 'Box (100)', '1807577382_24.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bentuk`
--
ALTER TABLE `bentuk`
  ADD PRIMARY KEY (`id_bentuk`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_bentuk` (`id_bentuk`),
  ADD KEY `id_gol` (`id_gol`),
  ADD KEY `obat_ibfk_3` (`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bentuk`
--
ALTER TABLE `bentuk`
  MODIFY `id_bentuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_bentuk`) REFERENCES `bentuk` (`id_bentuk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `obat_ibfk_2` FOREIGN KEY (`id_gol`) REFERENCES `golongan` (`id_gol`) ON UPDATE CASCADE,
  ADD CONSTRAINT `obat_ibfk_3` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
