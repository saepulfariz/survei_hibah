-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 21.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `survei_hibah`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `tb_administrasi`
--
CREATE TABLE `tb_administrasi` (
  `id_administrasi` int(11) NOT NULL,
  `id_survei` int(11) NOT NULL,
  `indentitas` text NOT NULL,
  `latar_belakang` text NOT NULL,
  `maksud_tujuan` text NOT NULL,
  `rincian_kegiatan` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data untuk tabel `tb_administrasi`
--
INSERT INTO
  `tb_administrasi` (
    `id_administrasi`,
    `id_survei`,
    `indentitas`,
    `latar_belakang`,
    `maksud_tujuan`,
    `rincian_kegiatan`
  )
VALUES
  (2, 5, 'asd', 'asd', 'asd', 'asd'),
  (3, 6, 'alamat', 'kjkj', 'kjkj', 'ksksk');

-- --------------------------------------------------------
--
-- Struktur dari tabel `tb_administrasi_rab`
--
CREATE TABLE `tb_administrasi_rab` (
  `id_rab` int(11) NOT NULL,
  `id_survei` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data untuk tabel `tb_administrasi_rab`
--
INSERT INTO
  `tb_administrasi_rab` (
    `id_rab`,
    `id_survei`,
    `nama`,
    `qty`,
    `harga`,
    `total`
  )
VALUES
  (7, 5, 'rokok', 12, 15000, 180000),
  (8, 5, 'bensin', 3, 10000, 30000),
  (9, 6, 'bensin', 2, 10000, 20000),
  (10, 6, 'gula', 1, 10000, 10000),
  (12, 5, 'gula', 2, 7000, 14000);

-- --------------------------------------------------------
--
-- Struktur dari tabel `tb_rekomendasi`
--
CREATE TABLE `tb_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `id_survei` int(11) NOT NULL,
  `usulan` int(11) NOT NULL,
  `rekomendasi` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data untuk tabel `tb_rekomendasi`
--
INSERT INTO
  `tb_rekomendasi` (
    `id_rekomendasi`,
    `id_survei`,
    `usulan`,
    `rekomendasi`
  )
VALUES
  (2, 5, 170000, 500000),
  (3, 6, 30000, 90000);

-- --------------------------------------------------------
--
-- Struktur dari tabel `tb_role`
--
CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(128) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data untuk tabel `tb_role`
--
INSERT INTO
  `tb_role` (`id_role`, `nama_role`)
VALUES
  (1, 'Admin'),
  (2, 'Tim survei'),
  (3, 'Kepala Bidang');

-- --------------------------------------------------------
--
-- Struktur dari tabel `tb_survei`
--
CREATE TABLE `tb_survei` (
  `id_survei` int(11) NOT NULL,
  `ket_lembaga` enum('Lembaga', 'Ormas', 'Kelompok') NOT NULL,
  `nama_lembaga` varchar(128) NOT NULL,
  `alamat_lembaga` varchar(256) NOT NULL,
  `ketua_nama` varchar(128) NOT NULL,
  `sekretaris_nama` varchar(128) NOT NULL,
  `bendahara_nama` varchar(128) NOT NULL,
  `label_ketua` enum('Pimpinan', 'Ketua') NOT NULL,
  `ketua_nik` varchar(128) NOT NULL,
  `sekretaris_nik` varchar(128) NOT NULL,
  `bendahara_nik` varchar(128) NOT NULL,
  `legalitas` enum(
    'SkMenkumham',
    'Surat Ket Terdaftar',
    'ijin operasional',
    'Piagam'
  ) NOT NULL,
  `nomor_legalitas` varchar(128) NOT NULL,
  `tanggal_legalitas` date NOT NULL,
  `status_tanah` enum('Hak Milik', 'Wakaf', 'Sewa', 'Lainnya') NOT NULL,
  `surat_penyataan_keaslian_nomor` varchar(128) NOT NULL,
  `surat_keterangan_domisili_nomor` varchar(128) NOT NULL,
  `tidak_dapat_hibah_tahun_lalu` varchar(128) NOT NULL,
  `no_bjb` varchar(128) NOT NULL,
  `nama_bjb` varchar(128) NOT NULL,
  `no_npwp` varchar(128) NOT NULL,
  `nama_npwp` varchar(128) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `is_valid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data untuk tabel `tb_survei`
--
INSERT INTO
  `tb_survei` (
    `id_survei`,
    `ket_lembaga`,
    `nama_lembaga`,
    `alamat_lembaga`,
    `ketua_nama`,
    `sekretaris_nama`,
    `bendahara_nama`,
    `label_ketua`,
    `ketua_nik`,
    `sekretaris_nik`,
    `bendahara_nik`,
    `legalitas`,
    `nomor_legalitas`,
    `tanggal_legalitas`,
    `status_tanah`,
    `surat_penyataan_keaslian_nomor`,
    `surat_keterangan_domisili_nomor`,
    `tidak_dapat_hibah_tahun_lalu`,
    `no_bjb`,
    `nama_bjb`,
    `no_npwp`,
    `nama_npwp`,
    `no_hp`,
    `is_valid`,
    `cid`,
    `uid`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    5,
    'Ormas',
    'sads',
    'asdas',
    'asdas',
    'sad',
    'asd',
    'Ketua',
    'asdas',
    'asd',
    'asd',
    'SkMenkumham',
    'sadas',
    '2023-04-25',
    'Hak Milik',
    'asd',
    'asd',
    'asd',
    'asd',
    'asd',
    'asd',
    'sad',
    'asd',
    1,
    1,
    1,
    '2023-04-24 23:08:27',
    '2023-04-24 23:08:27'
  ),
  (
    6,
    'Lembaga',
    'lembagakakak',
    'kssk galau',
    'sksk',
    'aku',
    'jkjk',
    'Pimpinan',
    '388383',
    '73838',
    '8798',
    'SkMenkumham',
    '91891',
    '2023-05-03',
    'Hak Milik',
    '8ks',
    '88u',
    'mns',
    '98393',
    'mnama',
    '98982',
    'smsn',
    '8282',
    0,
    1,
    1,
    '2023-05-03 13:09:32',
    '2023-05-04 18:49:38'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `tb_user`
--
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `nip` varchar(128) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--
INSERT INTO
  `tb_user` (
    `id_user`,
    `id_role`,
    `username`,
    `password`,
    `nama_lengkap`,
    `nip`,
    `email`,
    `is_active`
  )
VALUES
  (
    1,
    1,
    'admin',
    '$2y$10$QmLk0sElng3TbWn7goOumOJ2pvu4A2P2MeipjAbdVu6caZG2cZ/MC',
    'admin ajah akak',
    '782929292',
    'admin@gmail.com',
    1
  ),
  (
    5,
    3,
    'karjono',
    '$2y$10$usWsWKO/JATAtaXqltLU9Ogd4HfGSDvrohcUPw4KxmaMBgq8AI5k2',
    'karjono ajah kali',
    '567899',
    'karjono@gmail.com',
    1
  );

--
-- Indexes for dumped tables
--
--
-- Indeks untuk tabel `tb_administrasi`
--
ALTER TABLE
  `tb_administrasi`
ADD
  PRIMARY KEY (`id_administrasi`);

--
-- Indeks untuk tabel `tb_administrasi_rab`
--
ALTER TABLE
  `tb_administrasi_rab`
ADD
  PRIMARY KEY (`id_rab`);

--
-- Indeks untuk tabel `tb_rekomendasi`
--
ALTER TABLE
  `tb_rekomendasi`
ADD
  PRIMARY KEY (`id_rekomendasi`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE
  `tb_role`
ADD
  PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tb_survei`
--
ALTER TABLE
  `tb_survei`
ADD
  PRIMARY KEY (`id_survei`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE
  `tb_user`
ADD
  PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `tb_administrasi`
--
ALTER TABLE
  `tb_administrasi`
MODIFY
  `id_administrasi` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT untuk tabel `tb_administrasi_rab`
--
ALTER TABLE
  `tb_administrasi_rab`
MODIFY
  `id_rab` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 13;

--
-- AUTO_INCREMENT untuk tabel `tb_rekomendasi`
--
ALTER TABLE
  `tb_rekomendasi`
MODIFY
  `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE
  `tb_role`
MODIFY
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT untuk tabel `tb_survei`
--
ALTER TABLE
  `tb_survei`
MODIFY
  `id_survei` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE
  `tb_user`
MODIFY
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;