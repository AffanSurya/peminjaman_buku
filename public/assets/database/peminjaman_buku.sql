-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2023 pada 04.29
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `jenis_kelamin`, `no_telepon`, `email`, `alamat`) VALUES
(7, 'Anji ', 'Laki-laki', '082737427394', 'asda1@sicas.com', 'Madiun'),
(8, 'Sasa si', 'Perempuan', '082974616123', 'asda3@sicas.com', 'Madiun'),
(9, 'Alam', 'Laki-laki', '082737427394', 'asda1@sicas.com', 'Madiun'),
(11, 'Wisnu Utama', 'Perempuan', '08283746172', 'asda4@sicas.com', 'Madiun'),
(12, 'Wali', 'Laki-laki', '08273645198', 'asda4@sicas.com', 'Madiun'),
(14, 'Nara', 'Perempuan', '85357975', 'asda1@sicas.com', 'Solo'),
(15, 'Akil', 'Laki-laki', '08247461834', 'asda4@sicas.com', 'Pacitan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `judul`, `pengarang`, `penerbit`) VALUES
('107-882-5', 'Akuntansi Pengantar 1', 'Supardi', 'Gava Media'),
('111-234', 'One Piece', 'Eiichiro Oda', 'Shonen Jump'),
('128-365-6', 'Bangsa gagal ; Mencari identitas kebangsaan', 'Nasruddin Anshoriy', 'LKiS'),
('23125-758', 'dfeq', 'Supardi', 'Gramedia'),
('234-341', 'Bawang Merah', 'Sisa', 'Gramedia'),
('293-215-7', 'A-Z Psikologi : Berbagai kumpulan topik Psikologi', 'Zainul Anwar', 'Andi Offset'),
('328-808-6', 'Buku Ajar Tumbuh Kembang Remaja & Permasalahanya', 'Soetjiningsih', 'Sagung Seto'),
('328-876-5', 'Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu', 'Samsulhadi', 'Sagung Seto'),
('338-125-1', 'Biografi Gus Dur ; The Authorized Biography of KH. Abdurrahman Wahid (Soft Cover)', 'Greg Barton', 'LKiS'),
('338-171-X', 'Islam Agama ramah perempuan; Pembelaan kiai pesantren', 'Husein Muhammad', 'LKiS'),
('867-404-1', 'Aplikasi Praktis Asuhan Keperawatan Keluarga', 'Komang Ayu Heni', 'Sagung Seto'),
('867-451-5', 'Dasar Dasar Uroginekologi', 'Pribakti B', 'Sagung Seto'),
('867-468-3', 'Keanekaragaman klinik peny. Trofoblas gestasional', 'Djamhoer M', 'Sagung Seto'),
('867-497-3', 'Cedera Kepala', 'M. Z. Arifin', 'Sagung Seto'),
('896-636-8', 'Islam Jawa; Kesalehan Normatif Versus Kebatinan', 'Mark R. Woodward', 'LKiS'),
('896-651-1', 'Islam Sasak ; Wetu telu versus waktu lima', 'Erni Budiwanti', 'LKiS'),
('896-678-3', 'Hantu Digoel; Politik Pengamanan Politik Zaman Kolonial', 'Takashi Shiraishi', 'LKiS'),
('896-679-1', 'Islam Pasar Keadilan; Artikulasi Lokal, Kapitalisme, dan Demokrasi', 'Robert W. Hefner', 'LKiS'),
('978-602', 'Etnografi Pengobatan; Praktik Budaya peramuan & sugesti komunitas adat Tau Taa Vana', 'Alie Humaedi', 'LKiS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `kode_sewa` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL DEFAULT 5000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`kode_sewa`, `id_anggota`, `isbn`, `tgl_sewa`, `tgl_kembali`, `status`, `harga`) VALUES
(7, 9, '128-365-6', '2023-06-18', '2023-06-18', 'Dikembalikan', 5000),
(8, 9, '111-234', '2023-06-18', '2023-07-18', 'Dikembalikan', 150000),
(9, 11, '867-451-5', '2023-07-18', '2023-10-18', 'Dikembalikan', 460000),
(10, 9, '328-876-5', '2023-06-18', '0000-00-00', 'Disewa', 5000);

--
-- Trigger `sewa`
--
DELIMITER $$
CREATE TRIGGER `trigger_update_harga` BEFORE UPDATE ON `sewa` FOR EACH ROW BEGIN
	IF NEW.tgl_kembali = OLD.tgl_sewa THEN
    SET NEW.harga = 5000;
    ELSE
    SET NEW.harga = 5000 * DATEDIFF(NEW.tgl_kembali, OLD.tgl_sewa);
    END IF;

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`kode_sewa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `kode_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
