-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2019 pada 12.09
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmjti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `tgl_update` datetime NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `kunjungan` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_user`, `judul`, `tgl_buat`, `tgl_update`, `gambar`, `isi`, `kategori`, `kunjungan`, `status`) VALUES
(1, 2, 'Sharing Biro SI', '2019-08-03 17:00:00', '2019-08-03 08:00:00', 'Biro SI Pertemuan 4 (1).jpg', 'Biro Sistem Informasi merupakan salah satu Biro dari Departemen Keilmuan. Setiap pada hari Selasa dan Kamis, Biro SI diadakan rutin di Gedung Teknologi Informasi Polije.', 'Proker', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `isi` text NOT NULL,
  `tgl_komentar` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `isi`, `tgl_komentar`, `status`) VALUES
(1, 1, 'Ipeeeeeeeh', 'ipeh@gmail.com', 'Jadi pengen ikutan.', '2019-08-04 12:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `departemen` varchar(25) NOT NULL,
  `biro` varchar(30) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `semester` int(1) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nim`, `nama`, `username`, `password`, `foto`, `email`, `no_hp`, `jabatan`, `departemen`, `biro`, `prodi`, `semester`, `level`) VALUES
(1, 'E31170703', 'Lintang Baskoro Cahyo', 'lintang', '123', 'lintang.jpg', 'lintang@gmail.com', '+6289695356691', 'CO', 'Administrasi', 'Sarana dan Prasarana', 'MIF', 5, 1),
(2, 'E31170704', 'Syarifah Aini', 'ipeh', '123', 'ipeh.jpg', 'syarifahaini0912@gmail.com', '+6289695356694', 'Anggota', 'Keilmuan', 'Sistem Informasi', 'MIF', 5, 2),
(3, 'E31180701', 'Taufik', 'taufik', '123', 'taufik.jpg', 'taufik@gmail.com', '+682331588636', 'Ketua', 'Keilmuan', 'Sistem Informasi', 'TIF', 3, 2),
(4, 'E31160702', 'Dayu Agastya Ranii', 'dayu', '123', 'dayu.jpg', 'dayu@gmail.com', '085233882855', 'Ketua Himpunan', '', '', 'TIF', 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
