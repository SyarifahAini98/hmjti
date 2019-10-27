-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Okt 2019 pada 10.31
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_penulisan` datetime NOT NULL,
  `tgl_update` datetime NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `kunjungan` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `tgl_penulisan`, `tgl_update`, `gambar`, `isi`, `kunjungan`, `status`, `id_user`, `id_kategori`) VALUES
(1, 'EPIM (Expo Dan Pekan Ilmiah Mahasiswa) 2018', '2019-08-11 08:00:00', '2019-08-11 08:00:00', 'Banner EPIM.png', 'EPIM 2018\r\n\r\nEPIM (Expo Dan Pekan Ilmiah Mahasiswa) 2018 merupakan kegiatan tahunan ke-3 yang diselenggarakan oleh Himpunan Mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Jember dengan tema "Build a Great Indonesia With Technology for Substainable Develobment Goals 2030".Pada pelaksanaan EPIM 2018 terdapat beberapa acara diantaranya :\r\n\r\n    Seminar Nasional\r\n    Expo Produk IT\r\n    Lomba IT\r\n    TCP IT (Technopreneur Cup Program IT)\r\n    AOM (Malam Puncak Penganugrahan)\r\n\r\n\r\n\r\nTujuan EPIM 2018\r\n\r\nTujuan dari kegiatan EPIM adalah untuk meningkatkan peran aktif generasi bangsa Indonesia khususnya dari kalangan pelajar dalam menciptakan ide-ide kreatif dan inovatif guna memajukan Indonesia dalam bidang teknologi informasi.\r\n\r\nSeminar Nasional\r\n\r\nSeminar Nasional merupakan salah satu acara dari serangkaian kegiatan EPIM (Expo dan Pekan Ilmiah Mahasiswa) 2018 yang diselenggarakan oleh Himpunan Mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Jember. Konsep acara Seminar Nasional dihadiri oleh peserta dari akademisi, praktisi di seluruh Indonesia yang dikemas dalam satu tempat didalam GOR Perjuangan 45 Politeknik Negeri Jember dengan pemateri sebagai berikut :\r\n\r\n\r\nExpo Produk IT\r\n\r\nExpo Produk IT merupakan salah satu acara dari serangkaian kegiatan EPIM (Expo dan Pekan Ilmiah Mahasiswa) 2018 yang diselenggarakan oleh Himpunan Mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Jember. Konsep acara Expo produk IT menyajikan berbagai macam hasil karya generasi anak bangsa yang berasal dari Mahasiswa Jurusan teknologi Informasi Politeknik Negeri Jember dan produk dari para startup yang ada di Indonesia.\r\n\r\n\r\nAOM (Art Of Manunggalan)\r\n\r\nAOM adalah Art Of Manunggalan yang merupakan acara malam puncak penganugrahan dari kegiatan EPIM 2018. Acara ini ditujukan untuk memberikan aprsiasi kepada seluruh peserta yang berprestasi dan mendapatkan penghargaan pada setiap serangkaian acara EPIM. AOM juga menjadi ajang penyaluran minat dan bakat mahasiswa dalam bidang kesenian untuk menampilkan suguhan terbaik kepada para pengunjung dan peserta EPIM 2018.\r\n', 0, 1, 11, 2),
(2, 'Sharing Biro', '2019-08-11 09:00:00', '2019-08-11 09:00:00', 'Biro SI Pertemuan 4 (1).jpg', 'Sharing Biro merupakan salah satu kegiatan rutin dari Departemen Keilmuan.', 0, 1, 10, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biro`
--

CREATE TABLE `tbl_biro` (
  `id_biro` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `biro` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_biro`
--

INSERT INTO `tbl_biro` (`id_biro`, `id_departemen`, `biro`) VALUES
(1, 1, 'Kesekretariatan'),
(2, 1, 'Sarpras'),
(3, 2, 'Sistem Informasi'),
(4, 2, 'Multimedia'),
(5, 2, 'Jaringan'),
(6, 2, 'Hardware'),
(7, 2, 'Game Development'),
(8, 3, 'Pengembangan KWU'),
(9, 3, 'Usaha Mandiri'),
(10, 4, 'Internal TIF'),
(11, 4, 'Internal TKK'),
(12, 4, 'Internal MIF'),
(13, 4, 'Kominfo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_departemen`
--

CREATE TABLE `tbl_departemen` (
  `id_departemen` int(11) NOT NULL,
  `departemen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_departemen`
--

INSERT INTO `tbl_departemen` (`id_departemen`, `departemen`) VALUES
(1, 'Administrasi'),
(2, 'Keilmuan'),
(3, 'Kewirausahaan'),
(4, 'Perhubungan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_komentar`
--

CREATE TABLE `tbl_detail_komentar` (
  `id_berita` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_user`
--

CREATE TABLE `tbl_detail_user` (
  `id_user` int(11) NOT NULL,
  `id_biro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_user`
--

INSERT INTO `tbl_detail_user` (`id_user`, `id_biro`) VALUES
(7, 1),
(8, 1),
(9, 2),
(11, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Ketua Himpunan'),
(2, 'Wakil Ketua Himpunan'),
(3, 'Sekretaris 1'),
(4, 'Sekretaris 2'),
(5, 'Bendahara'),
(6, 'Kepala Dep. Administrasi'),
(7, 'CO Biro Kesekretariatan'),
(8, 'Biro Kesekretariatan'),
(9, 'CO Biro Sarpras'),
(10, 'Kepala Dep. Keilmuan'),
(11, 'CO Biro Sistem Informasi'),
(12, 'CO Biro Multimedia'),
(13, 'Biro Multimedia'),
(14, 'CO Biro Jaringan'),
(15, 'CO Biro Hardware'),
(16, 'CO Biro Game Development'),
(17, 'Kepala Dep. Kewirausahaan'),
(18, 'CO Biro Pengembangan KWU'),
(19, 'Biro Pengembangan KWU'),
(20, 'CO Biro Usaha Mandiri'),
(21, 'Kepala Dep. Perhubungan'),
(22, 'Biro Internal TIF'),
(23, 'Biro Internal TKK'),
(24, 'Biro Internal MIF'),
(25, 'CO Biro Kominfo'),
(26, 'Biro Kominfo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_berita`
--

CREATE TABLE `tbl_kategori_berita` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori_berita`
--

INSERT INTO `tbl_kategori_berita` (`id_kategori`, `kategori`) VALUES
(1, 'berita'),
(2, 'event');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `nama`, `email`, `isi`, `tanggal`, `status`) VALUES
(1, 'Syarifah Aini', 'ipeh@gmail.com', 'Jadi pengen ikutan min.', '2019-08-12 10:00:00', 1),
(2, 'Gung', 'gung@gmail.com', 'Acaranya luar biasa sekali.', '2019-08-12 09:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prodi` int(11) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_prodi`, `prodi`) VALUES
(1, 'D4 Teknik Informatika'),
(2, 'D3 Manajemen Informatika'),
(3, 'D3 Teknik Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nim` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `semester` int(1) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nim`, `nama`, `username`, `password`, `foto`, `email`, `no_telp`, `semester`, `id_prodi`, `id_jabatan`) VALUES
(1, 'E41171605', 'Muhammad Andys Saputra', 'andys', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 1),
(2, 'E31170937', 'Lintang Baskoro Cahyo', 'lintang', '123', 'Lintang Baskoro Cahyo.png', 'email@gmail.com', '089', 4, 2, 2),
(3, 'E31180786', 'Nur Widiyanti', 'E31180786', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 2, 3),
(4, 'E31181097', 'Rizky Nurwinda', 'E31181097', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 2, 4),
(5, 'E31180575', 'Ellen Melinda Putri A.S', 'E31180575', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 2, 5),
(6, 'E41171600', 'Lafic Imarega Dwiputra', 'E41171600', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 6),
(7, 'E31170858', 'Diana Maulidiyyah', 'E31170858', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 2, 7),
(8, 'E31181391', 'An Nisa Safitri', 'E31181391', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 1, 8),
(9, 'E41180853', 'Deni Hidayatullah', 'E41180853', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 1, 9),
(10, 'E31170653', 'Putri Yayang Y.', 'E31170653', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 2, 10),
(11, 'E41180417', 'Agung Wahyu G', 'E41180417', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 1, 11),
(12, 'E41171762', 'Moh. Fani Fadilah', 'E41171762', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 12),
(13, 'E31170618', 'Achmad Ghalib R.A', 'E31170618', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 2, 13),
(14, 'E41180749', 'M. Hanafi Abror', 'E41180749', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 1, 14),
(15, 'E32170261', 'Muhammad Kholil', 'E32170261', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 15),
(16, 'E31171317', 'Irvan Junaidi', 'E31171317', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 2, 16),
(17, 'E31170325', 'Novita Ayu Agustin', 'E31170325', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 2, 17),
(18, 'E41171843', 'Okta Rohmatun N', 'E41171843', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 18),
(19, 'E31171866', 'Imron Sholehuddin', 'E31171866', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 2, 19),
(20, 'E41171829', 'Mega Silvia', 'E41171829', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 20),
(21, 'E41171754', 'David Bristi Antara', 'E41171754', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 21),
(22, 'E41180434', 'Ratna Dwi K.S', 'E41180434', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 1, 22),
(23, 'E32170636', 'Evita Rizky Maharani S', 'E32170636', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 3, 23),
(24, 'E31180370', 'Aidatul Fakhirah', 'E31180370', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 2, 24),
(25, 'E41171892', 'Akbar Maulana T.K', 'E41171892', '123', 'foto.jpg', 'email@gmail.com', '089', 4, 1, 25),
(26, 'E41180679', 'Mochamad Satria Maulana ', 'E41180679', '123', 'foto.jpg', 'email@gmail.com', '089', 2, 1, 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_biro`
--
ALTER TABLE `tbl_biro`
  ADD PRIMARY KEY (`id_biro`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tbl_detail_komentar`
--
ALTER TABLE `tbl_detail_komentar`
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_komentar` (`id_komentar`);

--
-- Indexes for table `tbl_detail_user`
--
ALTER TABLE `tbl_detail_user`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_biro` (`id_biro`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `index_user` (`nim`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_prodi` (`id_prodi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_biro`
--
ALTER TABLE `tbl_biro`
  MODIFY `id_biro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD CONSTRAINT `tbl_berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_berita` (`id_kategori`),
  ADD CONSTRAINT `tbl_berita_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_biro`
--
ALTER TABLE `tbl_biro`
  ADD CONSTRAINT `tbl_biro_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `tbl_departemen` (`id_departemen`);

--
-- Ketidakleluasaan untuk tabel `tbl_detail_komentar`
--
ALTER TABLE `tbl_detail_komentar`
  ADD CONSTRAINT `tbl_detail_komentar_ibfk_1` FOREIGN KEY (`id_komentar`) REFERENCES `tbl_komentar` (`id_komentar`),
  ADD CONSTRAINT `tbl_detail_komentar_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `tbl_berita` (`id_berita`);

--
-- Ketidakleluasaan untuk tabel `tbl_detail_user`
--
ALTER TABLE `tbl_detail_user`
  ADD CONSTRAINT `tbl_detail_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_detail_user_ibfk_2` FOREIGN KEY (`id_biro`) REFERENCES `tbl_biro` (`id_biro`);

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tbl_prodi` (`id_prodi`),
  ADD CONSTRAINT `tbl_user_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tbl_jabatan` (`id_jabatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
