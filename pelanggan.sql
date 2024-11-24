-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2024 pada 10.12
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `penjualan3sib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
    `id_pelanggan` int(11) NOT NULL,
    `nama_pelanggan` varchar(40) DEFAULT NULL,
    `alamat` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO
    `pelanggan` (
        `id_pelanggan`,
        `nama_pelanggan`,
        `alamat`
    )
VALUES (
        101,
        'Rahman',
        'Jl. Merdeka No. 10. Padang'
    ),
    (
        102,
        'Siti Aisyah',
        'Jl. Raya No. 5. Bukit Tinggi'
    ),
    (
        103,
        'Amrin',
        'Jl. Khatib Sulaiman No. 1'
    ),
    (
        104,
        'Joni Anwar',
        'Jl. A. Yani No. 1212'
    ),
    (
        105,
        'Utari Rahman',
        'Jl, Khatib Sulaiman No. 1'
    ),
    (
        106,
        'Ahmad Rahman Joni',
        'Jl. A. Yani No. 1212'
    ),
    (
        107,
        'Rahman',
        'Jl. Khatib Sulaiman'
    );

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan` ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan` MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 108;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;