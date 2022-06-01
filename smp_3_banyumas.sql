-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2021 pada 16.47
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smp_3_banyumas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'smp3banyumas', '6cae2cf3f324c9f4d816af370e5c0f62'),
(5, NULL, '6cae2cf3f324c9f4d816af370e5c0f62'),
(6, NULL, '663971bcf86c6dc79d7ca6afc63392c3'),
(7, 'icha123', 'icha123'),
(8, 'icha123', '663971bcf86c6dc79d7ca6afc63392c3'),
(9, 'smp n 3 banyumas', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(255) DEFAULT NULL,
  `isi_agenda` varchar(500) DEFAULT NULL,
  `gambar_agenda` varchar(500) DEFAULT NULL,
  `penulis_agenda` varchar(255) DEFAULT NULL,
  `tgl_agenda` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `penulis`, `tanggal`) VALUES
(2, ' Jurnalistiqq di SMA 1 HARAPAN', 'REPUBLIKA.CO.ID, BANJARMASIN -- Banjir melanda wilayah Kota Banjarmasin di Kalimantan Selatan sejak 14 Januari 2021 telah menyebabkan 289 bangunan sekolah rusak menurut Dinas Pendidikan setempat.\r\n\r\nKepala Dinas Pendidikan Kota Banjarmasin Totok Agus Daryanto di Banjarmasin, Senin (25/1), memerinci, banjir berdampak pada 119 sekolah taman kanak-kanak (TK), 146 sekolah dasar (SD), dan 24 sekolah menengah pertama (SMP).\r\n\r\nMenurut dia, ada 31 bangunan sekolah yang rusak berat akibat banjir. Terdiri atas delapan sekolah TK, 21 SD, dan dua SMP. Sekolah-sekolah itu membutuhkan renovasi total setelah banjir.\r\n\r\nBangunan sekolah lain, ia mengatakan, mengalami kerusakan dalam kategori ringan hingga sedang. Totok mengatakan bahwa Dinas Pendidikan mendata kerusakan bangunan sekolah akibat banjir dan memperhitungkan kebutuhan dana untuk memperbaiki', 'artikel/', 'Admin 1', '2021-01-27'),
(3, 'Beasiswa bagi Peraih Medali Olimpiade Sains', 'Direktur Jenderal Pendidikan Menengah Kementerian Pendidikan dan Kebudayaan (Kemdikbud) Ahmad Jazidie mengatakan, semua peraih medali olimpiade sains berhak mendapatkan beasiswa dari pemerintah. Hal itu dijamin Kemdikbud lewat Peraturan Menteri Pendidikan Nasional Nomor 62/2009 tentang pemberian beasiswa kepada peserta didik jenjang pendidikan menengah dan tinggi peraih medali Olimpiade Sains Internasional.\r\n\r\nSyaratnya tidak boleh dobel. Sepanjang dia belum dapat beasiswa dari pihak lain, pasti bisa dapat dari pemerintah, kata Jazidie di Jakarta, Jumat (25/7).', 'artikel/', 'Admin', '2021-01-27'),
(4, 'tes', 'tes', 'artikel/g2.jpg', 'Admin', '2018-09-27'),
(5, 'apapun', 'Kosong', 'artikel/', 'Admin', '2021-01-27'),
(7, 'lala', 'bjbja jbjkbdkja jbjba ', 'artikel/SMPN3.jpg', 'llmalmsa', '2021-01-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `isi_berita` text CHARACTER SET latin1 DEFAULT NULL,
  `gambar_berita` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `penulis_berita` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama`, `deskripsi`) VALUES
(2, 'PMR', 'tes'),
(3, 'Sepak Bola', 'tes'),
(4, 'Pramuka', 'Pramuka dilaksnakan pada hari sabtu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `judul_fasilitas` varchar(500) DEFAULT NULL,
  `isi_fasilitas` text DEFAULT NULL,
  `gambar_fasilitas` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `berkas` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `alamat`, `id_mapel`, `jabatan`, `foto`) VALUES
(16, 'Kusumo', 'rt 03 rw 01 desa kejawar banyumas', NULL, 'waka kesiswaan', 'galeriguru/pass.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama`) VALUES
(2, 'IPA-Fisika'),
(3, 'IPS - Sejarah'),
(4, 'Bahasa Indonesia'),
(5, 'Kesenian'),
(6, 'Pendidikan Kewarganegaraan'),
(7, 'Bimbingan Konseling');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` varchar(500) DEFAULT NULL,
  `gambar_pengumuman` varchar(500) DEFAULT NULL,
  `penulis_pengumuman` varchar(255) DEFAULT NULL,
  `tgl_pengumuman` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb`
--

CREATE TABLE `ppdb` (
  `id_ppdb` int(11) NOT NULL,
  `judul_ppdb` varchar(255) DEFAULT NULL,
  `isi_ppdb` text DEFAULT NULL,
  `gambar_ppdb` varchar(500) DEFAULT NULL,
  `penulis_ppdb` varchar(255) DEFAULT NULL,
  `tgl_ppdb` date DEFAULT NULL,
  `file_ppdb` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_pres` int(11) NOT NULL,
  `gambar_pres` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `nama_pres` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `juara_pres` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `lomba_pres` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `tingkat_pres` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `tahun_pres` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `isi`, `gambar`) VALUES
(1, 'contoh sejarah', 'SMA Negeri 1 Harapan berdiri sejak tanggal 1 November tahun 1877. Terletak di Jalan Bodjong 149 (Jl. Pemuda 149). Mula-mula adalah HBS (Hogere Bunger School). Pada tahun 1930 dipergunakan untuk untuk HBS dan AMS (Algemene Meddelbare School), kemudian tahun 1937 HBS pindah di jalan Oei Tong Ham (sekarang Jl Menteri Supeno No. 1 / SMU 1 Harapan), sedangkan bangunan di jalan Bodjong dipergunakan untuk AMS dan MULO.Pada zaman pendudukan Jepang bangunan ini dipergunakan untuk SMT (Sekolah Menengah Tinggi).', 'profil/SMPN3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `angkatan` int(5) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `jenis_kelamin`, `angkatan`, `alamat`, `kelas`) VALUES
(1, 13782738, 'Dani Purnama', 'Laki-Laki', 2014, 'Bandung', 'III'),
(2, 13782738, 'Dani Purnama', 'Laki-Laki', 2014, 'Bandung', 'III');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gambar_staff` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `judul_struktur` varchar(500) DEFAULT NULL,
  `isi_struktur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`id_ppdb`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_pres`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `id_ppdb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_pres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
