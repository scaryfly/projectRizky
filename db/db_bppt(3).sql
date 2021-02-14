-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 04:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bppt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbberita`
--

CREATE TABLE `tbberita` (
  `id_berita` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `berita` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbberita`
--

INSERT INTO `tbberita` (`id_berita`, `gambar`, `judul`, `berita`, `tgl_upload`) VALUES
(28, 'gambar/e8e92c84ddf0ccba55ab.JPG', 'Peresmian Alat Peringatan Dini Tsunami Ina TEWS 2019', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Denpasar, Rabu (11/12), Peresmian Alat Peringatan Dini Tsunami Ina TEWS (Indonesia Tsunami Early Warning System) </span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">oleh Menteri Riset dan Teknologi/Kepala BRIN Bambang PS Brodjonegoro dan Kepala BPPT Hammam Riza di kantor BTIKK (Balai Teknologi Industri Kreatif Keramik) Bali,</span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"> serta penyerahan souvenir barong yang dihasilkan oleh BTIKK (Balai Teknologi Industri Kreatif Keramik) dari kepala BPPT untuk diberikan kepada Menristek/kepala BRIN</span></p>\r\n<p>artikel lengkap&nbsp;<a href=\"https://www.bppt.go.id/layanan-informasi-publik/3798-bppt-luncurkan-alat-penditeksi-dini-tsunami\">BPPT INAtews</a></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><img src=\"https://btikk.bppt.go.id/images/Boedjonegoro.JPG\" alt=\"\" width=\"962\" height=\"641\" /></span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><img src=\"https://btikk.bppt.go.id/images/Hammam.JPG\" alt=\"\" width=\"966\" height=\"644\" /></span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><img src=\"https://btikk.bppt.go.id/images/kunjungan-ke-produksi.jpeg\" alt=\"\" width=\"967\" height=\"725\" /></span></p>\r\n</body>\r\n</html>', '2021-01-30'),
(29, 'gambar/f3578b130aeb585d6760.jpg', 'BTIKK ikut berpatisipasi dalam Temu Karya Nasional Gelar Teknologi Tepat Guna (TTG) XX dan Pekan Inovasi Perkembangan Desa dan Kelurahan Tahun 2018 di Taman Budaya Garuda Wisnu Kencana (GWK), Bali (21/10/2018) ', '<head>\r\n</head>\r\n<body>\r\n<div>\r\n<p>Pameran Teknologi Tepat Guna 2018</p>\r\n<p>Kabupaten Badung, Bali tahun ini menjadi tuan rumah penyelenggaraan Temu Karya Nasional Gelar Teknologi Tepat Guna (TTG) XX dan Pekan Inovasi Desa dan Kelurahan (PINDESKEL) yang berlangsung pada 18-21 Oktober 2018.</p>\r\n<p>Bertemakan \"Melalui Inovasi dan Gelar Teknologi Tepat Guna Kita Wujudkan Desa yang Maju Mandiri dan Sejahtera,\" tahun ini Gelar TTG dan Temu Karya Nasional dibuka secara resmi oleh Presiden RI, Joko Widodo dan dihadiri sejumlah gub<span class=\"text_exposed_show\">enur se-Indonesia.</span></p>\r\n<p>Badan Pengkajian dan Penerapan Teknologi (BPPT), berpartisipasi mengikuti Pameran Teknologi Tepat Guna 2018 di GWK Badung, Bali.</p>\r\n<p>BPPT kali ini menampilkan beberapa inovasi yang dimiliki, antara lain Penerapan Teknologi E-Voting, Teknologi Industri Keramik, Produksi Mie dan Beras Sagu, dan Pangan Darurat.</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://btikk.bppt.go.id/images/temukarya191018-12.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://btikk.bppt.go.id/images/temukarya191018-123.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img title=\"TTG1\" src=\"https://btikk.bppt.go.id/images/temukarya191018-1234.jpg\" alt=\"TTG1\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>BTIKK ikut berpatisipasi dalam Pameran Pembangunan Provinsi Bali 2018</strong></p>\r\n<p>BTIKK ikut berpatisipasi dalam Pameran Pembangunan Provinsi Bali 2018 yang dibuka oleh Gubernur Bali Made Mangku Pastika di dampingi Ny. Ayu Pastika di Taman Budaya Provinsi Bali (14/8). Kegiatan ini digelar serangkaian memperingati hari jadi ke-60 Provinsi Bali dan HUT ke-73 Kemerdekaan RI. Pameran Pembangunan Provinsi Bali 2018 Di jadwalkan berlangsung 14 hingga 23 Agustus 2018, Pameran diikuti 162 peserta dari Instansi Vertikal, OPD Pemprov, Kabupaten/ Kota, BUMN, BUMD, Perguruan Tinggi Negeri dan Swasta se-Bali</p>\r\n<p>Adapun partisipasi BTIKK dalam Pameran Pembangunan Provinsi Bali 2018 dengan menampilkan hasil-hasil kegiatan yang dilakukan oleh Balai , kajian kajian dibidang bahan baku serta proses pembuatan keramik untuk menambah wawasan kepada masyarakat luas dalam produk keramik, disisi lain BTGIKK juga menyelengarakan lomba Keramik Kreatif untuk souvenir berbasis budaya daerah yang diikuti oleh kalangan pelajar Sekolah Menengah Kejuruan dan kalangan Mahasiswa</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://btikk.bppt.go.id/images/38999940_155668861991109_8349714790507085824_n.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://btikk.bppt.go.id/images/WhatsApp-Image-2018-08-18-at-13.00.08.jpeg\" alt=\"\" width=\"959\" height=\"719\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<img src=\"https://btikk.bppt.go.id/images/WhatsApp-Image-2018-08-17-at-13.02.13.jpeg\" alt=\"\" width=\"957\" height=\"717\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://btikk.bppt.go.id/images/WhatsApp-Image-2018-08-17-at-13.03.30.jpeg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</body>\r\n</html>>>', '2021-01-30'),
(30, 'gambar/d2c91c29026e0b9105c9.jpg', 'Kegiatan survey dan koordinasi BTIKK dengan ukm di dusun klipoh kecamatan Borobudur, kabupaten Magelang, Jawa Tengah', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desa Wisata Klipoh adalah objek wisata kerajinan pembuatan gerabah secara tradisional. Klipoh merupakan nama dusun yang terletak di desa Karanganyar, kecamatan Borobudur, kabupaten Magelang, Jawa Tengah. Klipoh berada di dekat objek wisata Candi Borobudur, kegiatan dan proses pembuatan gerabah yang diwariskan secara turun-temurun terukir pada salah satu relief <span class=\"text_exposed_show\">Borobudur. Diperkirakan tradisi pembuatan gerabah di Klipoh telah ada sebelum pembuatan Candi Borobudur.<br />Sejak tahun 2000 Dusun Klipoh mulai dikunjungi wisatawan, salah satu fasilitas penunjang berupa galeri komunitas diresmikan pada bulan Mei 2014 yang dibangun atas kerjasama UNESCO bersama desa Karang anyar. Wisatawan dapat mengikuti kegiatan melihat proses pembuatan dan mencoba sendiri membuat gerabah. Beberapa hotel disekitar kawasan Candi Borobudur memiliki paket kunjungan ke dusun Klipoh.<br />Proses pembuatan gerabah di Klipoh menggunakan teknik yang masih sederhana berdasarkan pengetahuan yang diwariskan secara turun-temurun. Pembuatan gerabah melalui berbagai proses antara lain: pembentukan gerabah, proses pengeringan dengan bantuan sinar matahari dengan cara dijemur, dan proses pembakaran. Sekitar 80% penduduk Klipoh berprofesi sebagai pengrajin gerabah.</span></p>\r\n</body>\r\n</html>', '2021-01-30'),
(31, 'gambar/7d920ffb5ba7f6923261.jpg', 'Penyerahan Sertifikat ISO 9001:2015, kepada Balai Industri Kreatif Keramik BPPT Menuju Pelayanan Teknologi Berstandar Nasional', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style=\"text-align: justify;\"><strong><em>Balai Teknologi Industri Kreatif Keramik Badan Pengkajian dan Penerapan Teknologi (BTIKK BPPT) menerima Sertifikat SNI ISO 9001 : 2015 Quality Management Systems Requirements yang diberikan oleh PT. Sucofindo guna peningkatan kualitas pelayanan jasa teknologi dan pembinaan perajin kreatif keramik di Denpasar, Bali (06/04).</em></strong></p>\r\n<p style=\"text-align: justify;\"><strong><em>Guna membawa pelayanan jasa teknologi yang dimiliki oleh BTIKK BPPT sesuai standar nasional, Kepala BPPT Unggul Priyanto yang hadir menyaksikan kegiatan ini menyambut baik penerimaan sertifikat SNI ISO ini. Sebagai bentuk dukungan terhadap BTIKK, Kepala BPPT pun telah merevitalisasi peralatan lab yang ada guna memaksimalkan pelayanan jasa yang ada.</em></strong></p>\r\n<p style=\"text-align: justify;\">&ldquo;Saya kira revitalisasi alat-alat yang sudah lama ini memang perlu dilakukan karena umurnya yang sudah cukup lama. Namun, jangan hanya fokus terhadap peralatan saja. Alat hanya hardware, sedangkan yang utama adalah softwarenya. Orang-orang didalamnya juga perlu memberikan kualitas yang baik untuk hasil yang maksimal&rdquo;</p>\r\n<p style=\"text-align: justify;\">Sementara itu, Deputi Bidang Pengkajian Kebijakan Teknologi (PKT) BPPT dalam sambutannya menanggapi penerimaan sertifikat SNI ISO menaruh harapan adanya standarisasi nasional ISO SNI 9001, 2015 sebagai batu loncatan untuk peningkatan pelayanan yang dilakukan BTIKK.</p>\r\n<p style=\"text-align: justify;\">&ldquo;Setelah ini diharapkan kita mampu mengejar ISO 1702 sehingga hasil pengujiannya dapat menjadi standar Internasional&rdquo;.</p>\r\n<p style=\"text-align: justify;\">Kepala Balai Teknologi Industri Kreatif Keramik (BTIKK) BPPT Djatmiko Adi, juga menyampaikan rasa terima kasihnya kepada Kepala BPPT atas diberikannya bantuan revitalisasi alat yang sangat dibutuhkan. Diperolehnya sertifikat ISO 9001:2015 ini menjadi pacuan untuk memaksimalkan kinerja BTIKK.</p>\r\n</body>\r\n</html>', '2021-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbgalery`
--

CREATE TABLE `tbgalery` (
  `id_galery` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbgalery`
--

INSERT INTO `tbgalery` (`id_galery`, `judul`, `foto`) VALUES
(3, 'Pra Raker BPPT 2017 ', 'gambar/9712ef3fbba44543f062.JPG'),
(4, 'Pra Raker BPPT 2017 ', 'gambar/866eb30b0d280eb6ef66.JPG'),
(5, 'Pra Raker BPPT 2017 ', 'gambar/487b03d8cb8430035abf.JPG'),
(6, 'Pra Raker BPPT 2017 ', 'gambar/c6467f2b4e47bbb17ad6.JPG'),
(7, 'Raker BPPT 2017 ', 'gambar/ca0c21e46e40427ea2fa.JPG'),
(8, 'Raker BPPT 2017 ', 'gambar/e9dfe80967a8de6994ce.JPG'),
(9, 'Raker BPPT 2017 ', 'gambar/54b674e4676d5a954240.JPG'),
(10, 'Raker BPPT 2017 ', 'gambar/7debd1bb27525d6fb3ed.JPG'),
(11, 'Dirgahayu RI ke 72 ', 'gambar/0c5ca7c17c9b2d6349bc.JPG'),
(12, 'Dirgahayu RI ke 72 ', 'gambar/20170817-hut72_09.JPG'),
(13, 'Dirgahayu RI ke 72 ', 'gambar/614378a8464be2ea5949.JPG'),
(14, 'Dirgahayu RI ke 72 ', 'gambar/ded628059b1837c10ac4.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jasa`
--

CREATE TABLE `tb_jasa` (
  `id_jasa` int(11) NOT NULL,
  `id_tipe_jasa` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `notlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jasa`
--

INSERT INTO `tb_jasa` (`id_jasa`, `id_tipe_jasa`, `nama_instansi`, `notlp`, `email`, `tgl`) VALUES
(5, 1, 'test', '123', 'test@test.com', '2021-01-18'),
(6, 1, 'test', '', 'test@test.com', '2021-01-30'),
(7, 1, 'test', '13213123', 'test@test.com', '2021-01-30'),
(8, 2, 'test 2', '213123213', 'test@test.com', '2021-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategorijasa`
--

CREATE TABLE `tb_kategorijasa` (
  `id_kategoriJasa` int(11) NOT NULL,
  `tipe_jasa` varchar(255) NOT NULL,
  `biaya` float NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategorijasa`
--

INSERT INTO `tb_kategorijasa` (`id_kategoriJasa`, `tipe_jasa`, `biaya`, `ket`) VALUES
(1, 'test jasa', 5000000, 'test keterangan jasa'),
(2, 'test jasa 2', 5000000000, 'lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategorikunjungan`
--

CREATE TABLE `tb_kategorikunjungan` (
  `id_kategori` int(11) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `biaya` float NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategorikunjungan`
--

INSERT INTO `tb_kategorikunjungan` (`id_kategori`, `jenjang`, `biaya`, `ket`) VALUES
(1, 'test baru', 150000, 'test keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kunjungan`
--

CREATE TABLE `tb_kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `notlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `perihal_kunjungan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kunjungan`
--

INSERT INTO `tb_kunjungan` (`id_kunjungan`, `id_kategori`, `nama_instansi`, `notlp`, `email`, `tgl_kunjungan`, `perihal_kunjungan`) VALUES
(1, 1, 'test', '123', 'test@test.com', '2021-01-18', 'test'),
(2, 1, 'test', '123213', 'test@test.com', '2021-01-01', 'test test test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelayananinformasi`
--

CREATE TABLE `tb_pelayananinformasi` (
  `id_pelayananInformasi` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `informasi` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelayananjasa`
--

CREATE TABLE `tb_pelayananjasa` (
  `id_pelayananJasa` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `informasi_jasa` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sambutan`
--

CREATE TABLE `tb_sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id_sambutan`, `nama`, `jabatan`, `gambar`, `deskripsi`) VALUES
(1, 'test baru 2', 'test', 'gambar/x-logo.png', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div id=\"output\" class=\"page-generator__output js-generator-output\">\r\n<p><em><strong>Lorem ipsum dolor sit amet</strong></em>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl suscipit adipiscing bibendum est ultricies integer quis. Mauris augue neque gravida in fermentum et sollicitudin ac. Vel quam elementum pulvinar etiam non quam lacus suspendisse faucibus. Nisl pretium fusce id velit. Pellentesque habitant morbi tristique senectus et netus et. Nulla facilisi cras fermentum odio eu feugiat pretium. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Et ultrices neque ornare aenean euismod elementum nisi quis eleifend. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Amet purus gravida quis blandit turpis cursus in hac. Et tortor at risus viverra adipiscing at in. Sem nulla pharetra diam sit. Tristique magna sit amet purus.</p>\r\n</div>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `id_visiMisi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`id_visiMisi`, `visi`, `misi`) VALUES
(4, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ol>\r\n<li>\r\n<h3><span style=\"color: #000000; font-family: Arial, sans-serif; font-size: 14.0pt;\">Menyiapkan SDM yang handal di bidang Teknologi Industri Kreatif Keramik</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style=\"color: #000000; font-family: Arial, sans-serif; font-size: 14.0pt;\">Mengembangkan teknologi di bidang Industri Kreatif Keramik</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style=\"color: #000000; font-family: Arial, sans-serif; font-size: 14.0pt;\">Menyediakan informasi teknologi di bidang Industri Kreatif Keramik</span></h3>\r\n</li>\r\n<li>\r\n<h3><span style=\"color: #000000; font-family: Arial, sans-serif; font-size: 14.0pt;\">Menjadi mitra industri kreatif keramik dalam peningkatan mutu dan desain</span></h3>\r\n</li>\r\n</ol>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong><em><span style=\"color: #000000; font-family: Arial, sans-serif; font-size: 14.0pt;\">\"Menjadi Pusat Unggulan Teknologi dengan mengutamakan kemitraan dan pemanfaatan hasil rekayasa teknologi secara maksimum\"</span></em></strong></p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `username`, `jenis_kelamin`, `telp`, `alamat`) VALUES
(1, 'admin test', 'admin@admin.com', '123', 'admin', 'laki-laki', '08123456789', 'jl. imam bonjol denpasar'),
(2, 'test', 'test@test.com', '$2y$10$USMJOSc9eijVzAw1TskwgO.QBzTwTwouwxWYtXltiGSqGmAElDnNK', 'test', 'laki-laki', '123123121', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbberita`
--
ALTER TABLE `tbberita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbgalery`
--
ALTER TABLE `tbgalery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  ADD PRIMARY KEY (`id_jasa`),
  ADD KEY `id_tipe_jasa` (`id_tipe_jasa`);

--
-- Indexes for table `tb_kategorijasa`
--
ALTER TABLE `tb_kategorijasa`
  ADD PRIMARY KEY (`id_kategoriJasa`);

--
-- Indexes for table `tb_kategorikunjungan`
--
ALTER TABLE `tb_kategorikunjungan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_pelayananinformasi`
--
ALTER TABLE `tb_pelayananinformasi`
  ADD PRIMARY KEY (`id_pelayananInformasi`);

--
-- Indexes for table `tb_pelayananjasa`
--
ALTER TABLE `tb_pelayananjasa`
  ADD PRIMARY KEY (`id_pelayananJasa`);

--
-- Indexes for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id_visiMisi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbberita`
--
ALTER TABLE `tbberita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbgalery`
--
ALTER TABLE `tbgalery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kategorijasa`
--
ALTER TABLE `tb_kategorijasa`
  MODIFY `id_kategoriJasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategorikunjungan`
--
ALTER TABLE `tb_kategorikunjungan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelayananinformasi`
--
ALTER TABLE `tb_pelayananinformasi`
  MODIFY `id_pelayananInformasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelayananjasa`
--
ALTER TABLE `tb_pelayananjasa`
  MODIFY `id_pelayananJasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id_visiMisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  ADD CONSTRAINT `tb_jasa_ibfk_1` FOREIGN KEY (`id_tipe_jasa`) REFERENCES `tb_kategorijasa` (`id_kategoriJasa`);

--
-- Constraints for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD CONSTRAINT `tb_kunjungan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategorikunjungan` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
