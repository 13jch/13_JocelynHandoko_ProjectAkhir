-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Nov 2025 pada 03.35
-- Versi server: 8.0.43
-- Versi PHP: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datas`
--

CREATE TABLE `datas` (
  `city` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `continent` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `season` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `transport` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desc1` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_datas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datas`
--

INSERT INTO `datas` (`city`, `country`, `continent`, `season`, `transport`, `desc1`, `id_datas`) VALUES
('Surabaya', 'Indonesia', 'c', 'd', 'jet', 'f', 7),
('sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 9),
('Surabaya', 'sds', 'sds', 'sd', 'sdaaa', 'sd', 10),
('london', 'uk', 'europe', 'winter', 'helicopter', 'gf', 14),
('j', 'j', 'h', 'oi', 'i', 'g', 15),
('s', 's', 'uh', 'hio', 'jo', 'skjnk', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`full_name`, `email`, `age`, `username`, `password`) VALUES
('Jocelyn', 'as', 13, 'abc', '$2y$10$95s37G8zvUqWK4VOQeTZf.RrsQwJh9tOY0c730QIRqvBAQsSIQKiG'),
('aa', '1a3jch.handoko@gmail.com', 12, '12aa', '$2y$10$15m0GpiOzJjtpxbLTN0Yk.Dg5IH3qbjtIN6HNY4C.hqOcYJLw3.6i'),
('Jocelyn', '13jch.handoko@gmail.com', 17, 'j13', '$2y$10$3SDHVKcMLFoWia1Tae6uIOITvz85GOsCQUHMX/LOVjqveBqbfswrS'),
('Andrew w', '2023070943@student.pppkpetra.sch.id', 80, 'dur', '$2y$10$wI9J0D3a4gWyeVJVWVh5YutcIEuqO9tt80P7UYikywUWwJKV4fhS2'),
('asd', 'asd', 5, 'asdasd', '$2y$10$W5EZY5vi7LlYVD5ywTQHau4BFTe2p/.283ig.Ar47oNVe3B48.s6S');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id_datas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datas`
--
ALTER TABLE `datas`
  MODIFY `id_datas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
