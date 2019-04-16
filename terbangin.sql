-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2019 pada 03.36
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terbangin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('l','p','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `email`, `gender`) VALUES
(235, 'paijo', 'kedungbanteng', '12345', 'canisanie@sfs.fs', 'p'),
(236, 'alfai', 'asvb', '1234567', 'akhdan@gduis.da', 'p'),
(247, 'Candra Ibra Sanie', 'Klapagading RT 04/09', '082242029077', 'canisanie@gmail.com', 'l'),
(248, 'Alif Gibran Imawan', 'Gerduren RT 07/01', '085726842874', 'aligghibran@gmail.com', 'l'),
(249, 'Candra Ibra Sanie', 'Kepalagading', '082242029077', 'canisanie@gmail.com', 'l'),
(250, 'Endah Prasetyowati', 'Wangon RT 07/02', '07482584582', 'endahpra@yahoo.com', 'p'),
(251, 'Adam Chandara', 'roya buntu', '07482584582', 'endahdpra@yahoo.com', 'p'),
(252, 'Candra Ibra Sanie', 'Klakdpsjf', '082242029077', 'canisanie@gmail.com', 'l'),
(253, 'Adam Chandara', 'cilacap jos', '082242029077', 'canisanie@sfs.fs', 'l');

-- --------------------------------------------------------

--
-- Struktur dari tabel `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `reservation_id` int(10) DEFAULT NULL,
  `seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `passengers`
--

INSERT INTO `passengers` (`id`, `customer_id`, `reservation_id`, `seat`) VALUES
(95, NULL, 98, 1),
(96, NULL, 99, 2),
(97, NULL, 99, 14),
(98, NULL, 99, 3),
(99, NULL, 100, 10),
(100, NULL, 100, 12),
(101, 235, 101, 4),
(102, 236, 101, 5),
(103, NULL, 102, 7),
(104, NULL, 102, 8),
(105, NULL, 103, 1),
(106, NULL, 103, 15),
(107, NULL, 104, 9),
(108, NULL, 104, 13),
(109, NULL, 105, 15),
(110, NULL, 105, 6),
(111, NULL, 106, 0),
(112, NULL, 106, 11),
(113, 247, 107, 1),
(114, 248, 107, 2),
(115, 249, 108, 1),
(116, 250, 109, 3),
(117, 251, 110, 7),
(118, 252, 110, 8),
(119, 253, 111, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `reservation_code` varchar(8) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) DEFAULT NULL,
  `rute_id` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `proof_of_payment` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_date`, `user_id`, `rute_id`, `status`, `proof_of_payment`) VALUES
(98, 'JO86114', '2018-02-25 05:27:06', NULL, NULL, 1, NULL),
(99, 'JO44769', '2019-04-14 07:40:48', 25, NULL, 1, NULL),
(100, 'JO95364', '2019-04-14 07:45:33', 25, NULL, 1, 'ab67d4498adec5adbee62f093518051d4af513f034f97cdf123af37b984d95cd.jpeg'),
(101, 'JO17397', '2019-04-14 10:08:27', 25, NULL, 1, '7ec49e8cbcc409c41413ac88f7456ec85a0a981198eb6241db2b0d8baf930cf9.jpeg'),
(102, 'JO20788', '2019-04-14 10:16:41', 26, NULL, 1, 'e332b3abb4a8ec836aeac2ecf4157ca2db1113be3b6a9e2be66e7a35d6bc72b3.jpg'),
(103, 'JO69375', '2019-04-14 13:35:09', 26, NULL, 0, NULL),
(104, 'JO77980', '2019-04-14 13:36:03', 26, NULL, 0, NULL),
(105, 'JO36557', '2019-04-14 13:36:45', 26, NULL, 0, '3e9a0174a4281e9c516e849901aa554df32d873c461f1c049f4f321411367ef4.jpeg'),
(106, 'JO48475', '2019-04-14 23:54:31', 25, NULL, 1, 'f732e7bf2daeb2bd8dd682307ca5defdc2d35b116330a45effa4bb4a34575ba3.jpeg'),
(107, 'JO36451', '2019-04-16 01:02:08', 26, 14, 1, '205645ac823374529ec4201349fda19efb6ed24022ee3e00c6b82e2621b8ada7.jpeg'),
(108, 'JO87554', '2019-04-16 01:05:20', 26, 12, 1, '9e86b0c1bd37b0126faf3258d9822918a88a0a83d04ef5b38e360fecc9ffe7bc.jpg'),
(109, 'JO91854', '2019-04-16 01:06:35', 26, 14, 1, '5de87ece84ebb39c9aa0909751eb4d9813afc1bd99f1c7a362c68e6882a358ac.jpeg'),
(110, 'JO58179', '2019-04-16 01:30:18', 26, 14, 1, 'b667dcb235d877f01994fa3ee653ab81dc75476a8afd95793acbc8a41cdbb39c.jpeg'),
(111, 'TER98335', '2019-04-16 01:32:06', 26, 16, 1, 'dcf580c1ed9350df63a005849bb780beb128b6e8865b855d41310a4676044b93.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `depart` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `arrive` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `class` enum('Ekonomi','Bisnis','Eksekutif') NOT NULL,
  `transportation_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `depart`, `arrive`, `rute_from`, `rute_to`, `price`, `class`, `transportation_id`) VALUES
(12, '2019-04-16 00:47:32', '2019-04-16 03:47:34', 'Jakarta', 'Bali', 1600000, 'Ekonomi', 3),
(13, '2019-04-16 00:48:06', '2019-04-16 02:48:08', 'Jakarta', 'Bali', 2000000, 'Bisnis', 3),
(14, '2019-04-16 00:48:32', '2019-04-16 01:48:33', 'Jakarta', 'Bali', 3000000, 'Eksekutif', 3),
(15, '2019-04-17 00:48:59', '2019-04-17 03:49:11', 'Jakarta', 'Bali', 1600000, 'Ekonomi', 3),
(16, '2019-04-17 00:49:36', '2019-04-17 02:49:39', 'Jakarta', 'Bali', 2000000, 'Bisnis', 3),
(17, '2019-04-17 00:50:19', '2019-04-17 01:50:21', 'Jakarta', 'Bali', 3000000, 'Eksekutif', 3),
(18, '2019-04-16 00:51:00', '2019-04-16 03:51:02', 'Jakarta', 'Bali', 1200000, 'Ekonomi', 4),
(19, '2019-04-16 00:51:26', '2019-04-16 02:51:27', 'Jakarta', 'Bali', 1600000, 'Bisnis', 4),
(20, '2019-04-16 00:51:43', '2019-04-16 01:51:45', 'Jakarta', 'Bali', 2500000, 'Eksekutif', 4),
(21, '2019-04-17 00:52:20', '2019-04-17 03:52:22', 'Jakarta', 'Bali', 1200000, 'Ekonomi', 4),
(22, '2019-04-17 00:52:37', '2019-04-17 02:52:41', 'Jakarta', 'Bali', 1600000, 'Bisnis', 4),
(23, '2019-04-17 00:53:01', '2019-04-17 01:53:04', 'Jakarta', 'Bali', 2500000, 'Eksekutif', 4),
(24, '2019-04-16 00:53:25', '2019-04-16 03:53:26', 'Jakarta', 'Bali', 1500000, 'Ekonomi', 5),
(25, '2019-04-16 00:53:51', '2019-04-16 01:53:52', 'Jakarta', 'Bali', 3000000, 'Eksekutif', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id` int(10) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`) VALUES
(3, 'Garuda Airlines', 'The best Airplane in Town', '100'),
(4, 'Air Asia', 'Plane for everyone', '50'),
(5, 'BatikAir', 'Jos Markojos pokoke', '75');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(25, '3103116246', '$2y$10$esx1zESHYlSvpuP6C5JqhecUsxgRWCQvgjmmrftNkShfDvY3WfGUi', 2),
(26, 'Candra Ibra Sanie', '$2y$10$1E//1/9XCJrJ2RpeKWkTaOc8TmzdZC6zmLna8GcC/O.2BtuBWVfpq', 1),
(27, 'Adam', '$2y$10$RGdfP7DZ4BpLIOKtNImGuOhjb4mZESTTtw/Olr9UTKIb6FvOOZ8MG', 1),
(28, '123', '$2y$10$7IXneBUqIibJOwv8XhV/q.lBsHcjhug1joIIaaatx79xFU4Zq6m1e', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `passengers_ibfk_2` (`reservation_id`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_id` (`rute_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_id` (`transportation_id`);

--
-- Indeks untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT untuk tabel `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`rute_id`) REFERENCES `rute` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`transportation_id`) REFERENCES `transportation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
