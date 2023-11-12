-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 06:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evodis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `kode_kategori` int(2) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`kode_kategori`, `nama_kategori`) VALUES
(1, 'Oil'),
(2, 'Candle'),
(3, 'Linen Spray'),
(4, 'Air Freshener Refill'),
(5, 'Aromatheraphy Roll On');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_kategori` int(2) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `desc_produk` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `pict_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_kategori`, `nama_produk`, `desc_produk`, `harga`, `stok`, `pict_product`) VALUES
(101, 1, 'Melaleuca', 'Ekstrak Tea Tree', 70000, 99, '../img/1.png'),
(102, 1, 'Pelargonium', 'Ekstrak Geranium', 100000, 80, '../img/2.png'),
(103, 1, 'Citrus Sinesis', 'Ekstrak Citrus', 60000, 99, '../img/3.png'),
(104, 1, 'Copaifera', 'Ekstrak Copaiba', 90000, 99, '../img/4.png'),
(105, 1, 'Mentha Spicata', 'Ekstrak Spearmint', 96000, 98, '../img/5.png'),
(106, 1, 'Purify', 'Cleansing Blend', 78000, 99, '../img/6.png'),
(107, 1, 'Serenity', 'Bunga Lavender, Calming, relaxing scent ', 120000, 99, '../img/8.png'),
(108, 1, 'Lemon', 'Fresh dan Citrusy Aroma', 68000, 99, '../img/7.png'),
(109, 1, 'Breathe', 'Peppermint, Eucalyptus, Tea Tree, Lemon', 82000, 99, '../img/10.png'),
(110, 1, 'DigestZen', 'Spicy, Sweet, dan Minty Aroma', 88000, 99, '../img/9.png'),
(111, 1, 'Travel kit', 'The Travel Kit is ideal for long car rides and vacations.', 228000, 20, '../img/11.png'),
(201, 2, 'Sweet Vanilla', 'Sweet, Soft, Calming, Vanilla', 43000, 99, '../img/candle-10.png'),
(202, 2, 'Lavender', 'Aroma Calm dan Relax Bunga Lavender', 43000, 99, '../img/candle-9.png'),
(203, 2, 'White Jasmine', 'Aroma Bunga Melati', 43000, 99, '../img/candle-8.png'),
(204, 2, 'Rose', 'Soft, Relax, Aroma Bunga Mawar', 43000, 99, '../img/candle-4.png'),
(205, 2, 'Ocean Breeze', 'Calm, Relax, Aroma Segar Suasana Pantai', 43000, 99, '../img/candle-7.png'),
(206, 2, 'Rainy Day', 'Strong dan Aroma Tanah Segar Mirip Bau Hujan', 43000, 99, '../img/candle-5.png'),
(207, 2, 'Green Tea', 'Aroma Fresh Mint Teh Hijau', 43000, 99, '../img/candle-3.png'),
(208, 2, 'Bakery', 'Sweet, Strong, Aroma Toko Roti', 43000, 99, '../img/candle-6.png'),
(209, 2, 'Pappermint', 'Fresh dan Mint', 43000, 99, '../img/candle-1.png'),
(210, 2, 'Lemongrass', 'Aroma Fresh Daun Serai', 43000, 99, '../img/candle-2.png'),
(211, 2, 'Dream Kit', 'Get 6 Candles For 1 Box', 200000, 99, '../img/candle-kit.png'),
(301, 3, 'La Bonne Nuit', 'Sweed dan Musky', 54000, 99, '../img/spray-1.png'),
(302, 3, 'Le Reveur', 'Sweet dan Fresh', 54000, 99, '../img/spray-3.png'),
(303, 3, 'Belle Ame', 'White Lily, Powdery, Fresh', 54000, 99, '../img/spray-2.png'),
(304, 3, 'Fleur De Lis', 'Bunga Lily dan Vibes Cheerful Girly', 54000, 99, '../img/spray-4.png'),
(305, 3, 'Vanille Nue', 'Aroma Vanilla', 86000, 99, '../img/spray-8.png'),
(306, 3, 'Maggie Noir', 'Sweet Vanilla dan Spicy', 86000, 99, '../img/spray-9.png'),
(307, 3, 'Bon Bon Doux', 'Sweet Candy', 86000, 99, '../img/spray-6.png'),
(308, 3, 'Modemoiselle', 'Elegant Fresh and Not Sweet', 86000, 99, '../img/spray-5.png'),
(309, 3, 'Un Jardin Fleuri', 'Floral dan Woody', 54000, 99, '../img/spray-10.png'),
(310, 3, 'La Brise en Eden', 'Green Tea dan White Floral', 86000, 99, '../img/spray-7.png'),
(401, 4, 'Fresh Green', 'Air Freshener Refill', 46000, 99, '../img/refill-1.png'),
(402, 4, 'Lemongrass', 'Air Freshener Refill', 46000, 99, '../img/refill-2.png'),
(403, 4, 'Sweet Room', 'Air Freshener Refill', 46000, 99, '../img/refill-3.png'),
(404, 4, 'Aromatika', 'Air Freshener Refill', 46000, 99, '../img/refill-4.png'),
(405, 4, 'Citronella', 'Air Freshener Refill', 46000, 99, '../img/refill-5.png'),
(406, 4, 'Sea Breeze', 'Air Freshener Refill', 46000, 99, '../img/refill-6.png'),
(407, 4, 'Orange Fresh', 'Air Freshener Refill', 46000, 99, '../img/refill-7.png'),
(408, 4, 'Apel', 'Air Freshener Refill', 46000, 99, '../img/refill-8.png'),
(409, 4, 'Woody Classic', 'Air Freshener Refill', 46000, 99, '../img/refill-9.png'),
(410, 4, 'Pink Rose', 'Air Freshener Refill', 46000, 99, '../img/refill-10.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(14) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `ttl`, `jenis_kelamin`, `alamat`, `no_tlp`, `password`, `picture`) VALUES
(1, 'Wang Jackson', 'Jackson28@gmail.com', '1994-03-28', 'Laki-Laki', 'Jalan Brawijaya No.24', '082408749201', '12345', ''),
(3, 'Yunita Bunga', 'Bunga@gmail.com', '1999-10-14', 'Perempuan', 'Jl. Cibogo No.29', '081188775490', 'ayoayo', ''),
(4, 'Bagas Alex', 'Bagas77@gmail.com', '2002-10-01', 'Laki-Laki', 'Jl. Bogor No.07', '084528477023', 'abcd', ''),
(5, 'Angel Lieta', 'Angel@gmail.com', '2001-12-19', 'Perempuan', 'Jl. Surya Sumantri No.112', '089730678291', 'qwerty', ''),
(6, 'Shelyhan Rahim', 'Shelyhan@gmail.com', '2001-11-07', 'Perempuan', 'Jl. Sukabumi No.24', '085798253607', 'zxcv', ''),
(7, 'Felix ', 'felix@GMAIL.COM', '2001-10-04', 'Laki-Laki', 'Jl Bandung', '08111112222', '123', ''),
(8, 'Yunita Indri Sarah', 'yunita@gmail.com', '1998-02-03', 'Perempuan', 'Jl. PIK', '0899900098', 'lololo', '../view/upload/user-Yunita.jpg'),
(9, 'Choi Woo Shik', 'wooshik@gmail.com', '1990-03-26', 'Laki-Laki', 'Jl. Seoul', '08556622728', 'ajaaja', '../view/upload/user-Choi.jpg'),
(10, 'Bae Suzy', 'Suzy@gmail.com', '1994-03-17', 'Perempuan', 'Jl. Dipatiukur', '0824567884268', '123455', 'user-Suzy.jpg'),
(11, 'Ennik Somi Douma', 'somi@gmail.com', '2001-03-09', 'Perempuan', 'Jl. Pesona', '089762392108', 'xoxo', '../view/upload/user-Somi.jpg'),
(12, 'Jasmine Mawar', 'jasmine@gmail.com', '1995-07-05', 'Perempuan', 'Jl. Subang', '08655778856', 'lalala', '../view/upload/user-Jasmine.jpg'),
(24, 'Khori Yusmanindar', 'khori@gmail.com', '1963-06-17', 'Perempuan', 'Jl. Warung Kiara', '08776252438', 'lulu', '../view/upload/user-Khori.jpg'),
(30, 'Radit Ahmad', 'radit@gmail.com', '1985-11-12', 'Laki-Laki', 'Jl. Setiabudi', '081625453782', '123', '../view/upload/user-1.jpg'),
(35, 'Yuta Michael', 'yuta@gmail.com', '1999-02-02', 'Laki-Laki', 'Jl. Tokyo', '0853794686', '123', 'user-Yuta.jpg'),
(37, 'Tuan Mark', 'mark@gmail.com', '1993-09-04', 'Laki-Laki', 'Jl. Los Angeles', '145298723', 'agahsae', 'user-Mark.jpg'),
(101, 'Admin', 'admin_evodis@gmail.com', '1990-11-13', 'Laki-Laki', 'Rahasia', 'Rahasia', 'admin123*', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kode_produk_kategori_produk` (`kode_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk_Produk` (`id_produk`),
  ADD KEY `id_user_User` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `kode_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=512;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2324;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kode_kategori_Produk` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori_produk` (`kode_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_produk_Produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_User` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
