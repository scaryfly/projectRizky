-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 09:53 AM
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
(1, 'gambar/Yellow and Black Circles Photography Logo.png', 'test judul berita pertama', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div id=\"output\" class=\"page-generator__output js-generator-output\">\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Habitant morbi tristique senectus et netus et malesuada. At auctor urna nunc id. Nisl pretium fusce id velit ut tortor pretium viverra. Imperdiet sed euismod nisi porta lorem. Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Vel fringilla est ullamcorper eget nulla facilisi. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Amet nisl purus in mollis. Elit at imperdiet dui accumsan sit amet. Tempor commodo ullamcorper a lacus vestibulum sed. Consectetur adipiscing elit duis tristique sollicitudin. Cursus vitae congue mauris rhoncus aenean vel elit scelerisque mauris.</p>\r\n<p>Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Nisi lacus sed viverra tellus in hac. Duis ultricies lacus sed turpis tincidunt id aliquet risus feugiat. In ante metus dictum at tempor commodo ullamcorper. Nulla pharetra diam sit amet nisl suscipit. Augue mauris augue neque gravida. Tellus rutrum tellus pellentesque eu tincidunt tortor. Mi quis hendrerit dolor magna eget est lorem. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. At auctor urna nunc id cursus metus.</p>\r\n<p>Suspendisse in est ante in nibh mauris. Lorem ipsum dolor sit amet. Felis imperdiet proin fermentum leo. Condimentum lacinia quis vel eros donec ac odio. Iaculis eu non diam phasellus vestibulum lorem sed risus. Elementum curabitur vitae nunc sed velit dignissim sodales. Ullamcorper velit sed ullamcorper morbi. Lacus suspendisse faucibus interdum posuere. Mattis rhoncus urna neque viverra justo nec ultrices. Sagittis eu volutpat odio facilisis mauris sit amet. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Ac felis donec et odio pellentesque diam volutpat. Sed id semper risus in hendrerit gravida rutrum. Enim ut sem viverra aliquet eget sit. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Sed lectus vestibulum mattis ullamcorper velit. Ut aliquam purus sit amet luctus venenatis lectus magna fringilla.</p>\r\n<p>Fusce ut placerat orci nulla. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Erat pellentesque adipiscing commodo elit at imperdiet dui accumsan. Dui nunc mattis enim ut. Vestibulum lectus mauris ultrices eros. Tristique senectus et netus et malesuada fames ac turpis. Et malesuada fames ac turpis egestas maecenas pharetra. Morbi quis commodo odio aenean sed adipiscing diam. Lobortis feugiat vivamus at augue eget arcu dictum varius. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Elit ut aliquam purus sit amet luctus venenatis. Tincidunt augue interdum velit euismod in pellentesque massa placerat. Pellentesque adipiscing commodo elit at imperdiet. Elementum curabitur vitae nunc sed velit. Condimentum id venenatis a condimentum vitae sapien pellentesque. Sit amet mattis vulputate enim nulla aliquet. Ut consequat semper viverra nam libero justo laoreet sit amet. Porttitor massa id neque aliquam vestibulum morbi blandit cursus. Sagittis nisl rhoncus mattis rhoncus urna. Platea dictumst quisque sagittis purus sit amet volutpat consequat mauris.</p>\r\n<p>Sapien pellentesque habitant morbi tristique. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis. Tortor posuere ac ut consequat semper viverra nam libero justo. Est ante in nibh mauris cursus. Elit duis tristique sollicitudin nibh. Commodo viverra maecenas accumsan lacus vel facilisis. Lectus nulla at volutpat diam ut. Sed faucibus turpis in eu mi bibendum neque egestas. Platea dictumst quisque sagittis purus sit amet volutpat consequat. Senectus et netus et malesuada fames ac turpis egestas integer. Molestie nunc non blandit massa. Bibendum ut tristique et egestas quis ipsum. Malesuada fames ac turpis egestas. Ultrices sagittis orci a scelerisque. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Placerat vestibulum lectus mauris ultrices eros in cursus.</p>\r\n<p>Condimentum id venenatis a condimentum vitae sapien. Quam viverra orci sagittis eu. Sit amet porttitor eget dolor morbi non arcu risus. Sapien eget mi proin sed libero enim sed. Urna molestie at elementum eu facilisis sed odio. Venenatis urna cursus eget nunc scelerisque viverra mauris in. A lacus vestibulum sed arcu non. Leo urna molestie at elementum eu facilisis. Pulvinar pellentesque habitant morbi tristique senectus et netus et. Nunc mattis enim ut tellus elementum sagittis. Eu ultrices vitae auctor eu. Adipiscing enim eu turpis egestas pretium aenean pharetra. Cursus risus at ultrices mi tempus imperdiet nulla. At urna condimentum mattis pellentesque id nibh tortor. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Erat imperdiet sed euismod nisi. Sed adipiscing diam donec adipiscing tristique risus nec. Nisl nunc mi ipsum faucibus vitae aliquet. Dui id ornare arcu odio ut sem nulla pharetra.</p>\r\n<p>Id aliquet risus feugiat in ante metus dictum at. Faucibus a pellentesque sit amet porttitor. Risus commodo viverra maecenas accumsan lacus vel facilisis. Est lorem ipsum dolor sit. Ac tortor vitae purus faucibus ornare suspendisse sed. Accumsan tortor posuere ac ut consequat semper viverra nam. Venenatis tellus in metus vulputate eu scelerisque felis. Donec enim diam vulputate ut pharetra sit amet aliquam id. Morbi tincidunt ornare massa eget egestas purus. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Convallis a cras semper auctor neque vitae. Et netus et malesuada fames ac turpis egestas integer. Suscipit adipiscing bibendum est ultricies.</p>\r\n</div>\r\n</body>\r\n</html>', '2021-01-14'),
(13, 'gambar/SINGKONG JAEN.png', 'singkong', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel facilisis volutpat est velit egestas dui id. Tempor orci dapibus ultrices in iaculis nunc. Pharetra convallis posuere morbi leo. Et ultrices neque ornare aenean euismod elementum nisi quis eleifend. Dignissim suspendisse in est ante in nibh. Quis ipsum suspendisse ultrices gravida. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Elit sed vulputate mi sit amet mauris commodo quis imperdiet. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Tincidunt augue interdum velit euismod in pellentesque. Urna neque viverra justo nec. Senectus et netus et malesuada fames ac turpis egestas. Senectus et netus et malesuada. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula. Platea dictumst quisque sagittis purus sit. Facilisi morbi tempus iaculis urna.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et. Etiam sit amet nisl purus in mollis nunc sed id. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Id faucibus nisl tincidunt eget nullam non. Ut lectus arcu bibendum at varius vel pharetra. Ut enim blandit volutpat maecenas volutpat. Mi sit amet mauris commodo quis imperdiet massa tincidunt nunc. Turpis egestas maecenas pharetra convallis posuere morbi leo. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Phasellus egestas tellus rutrum tellus pellentesque. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Mauris vitae ultricies leo integer malesuada nunc vel risus. Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Enim nunc faucibus a pellentesque sit amet porttitor. Vitae et leo duis ut diam quam.', '2020-10-17'),
(20, 'gambar/world.png', 'test', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><em>Lorem ipsum dolor sit amet</em>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Massa placerat duis ultricies lacus. Aliquet porttitor lacus luctus accumsan tortor posuere ac. Egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices dui. Purus non enim praesent elementum facilisis leo vel fringilla est. Nisl vel pretium lectus quam. Sit amet purus gravida quis blandit turpis cursus. Tellus elementum sagittis vitae et.</p>\r\n<p>Leo integer malesuada nunc vel risus commodo. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Amet mauris commodo quis imperdiet. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Nisl tincidunt eget nullam non nisi. Pulvinar neque laoreet suspendisse interdum. Sapien pellentesque habitant morbi tristique senectus et netus. Nisi scelerisque eu ultrices vitae auctor. Elementum integer enim neque volutpat ac tincidunt vitae. Nec sagittis aliquam malesuada bibendum arcu vitae elementum. Velit dignissim sodales ut eu sem.</p>\r\n</body>\r\n</html>', '2021-01-14'),
(21, 'gambar/world.png', 'test', '<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><em>Lorem ipsum dolor sit amet</em>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Massa placerat duis ultricies lacus. Aliquet porttitor lacus luctus accumsan tortor posuere ac. Egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices dui. Purus non enim praesent elementum facilisis leo vel fringilla est. Nisl vel pretium lectus quam. Sit amet purus gravida quis blandit turpis cursus. Tellus elementum sagittis vitae et.</p>\r\n</body>\r\n</html>>', '2021-01-14'),
(22, 'gambar/home.png', 'home', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div id=\"output\" class=\"page-generator__output js-generator-output\">\r\n<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit eget gravida cum sociis natoque penatibus. Neque convallis a cras semper auctor neque vitae tempus quam. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. In nisl nisi scelerisque eu ultrices vitae. Dui ut ornare lectus sit amet est placerat in egestas. Tempor orci eu lobortis elementum nibh tellus molestie. Lacus vel facilisis volutpat est velit egestas dui. Varius morbi enim nunc faucibus a pellentesque sit amet. Mattis enim ut tellus elementum sagittis vitae. Fermentum et sollicitudin ac orci. Nunc sed augue lacus viverra vitae congue eu consequat ac. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Cursus mattis molestie a iaculis at. Cum sociis natoque penatibus et magnis dis parturient.</p>\r\n<p>Mollis nunc sed id semper risus in hendrerit. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Pretium nibh ipsum consequat nisl vel pretium lectus. Convallis convallis tellus id interdum velit laoreet id donec. Velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Enim blandit volutpat maecenas volutpat blandit aliquam. Dictum fusce ut placerat orci nulla pellentesque dignissim enim sit. Convallis posuere morbi leo urna molestie at. <em> Aliquet bibendum</em> enim facilisis gravida neque convallis a. Diam phasellus vestibulum lorem sed risus ultricies. Donec ac odio tempor orci dapibus. Sed faucibus turpis in eu mi bibendum neque egestas.</p>\r\n<p>Tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Semper viverra nam libero justo laoreet sit amet cursus. Nulla pellentesque dignissim enim sit amet venenatis urna cursus. Sed augue lacus viverra vitae congue eu consequat ac. Mauris commodo quis imperdiet massa. Tristique senectus et netus et malesuada fames ac turpis. Vulputate dignissim suspendisse in est. Nisl pretium fusce id velit ut tortor. Varius quam quisque id diam vel quam elementum. Egestas quis ipsum suspendisse ultrices. Justo donec enim diam vulputate ut pharetra. Nulla facilisi nullam vehicula ipsum a arcu. Tortor posuere ac ut consequat semper. Euismod nisi porta lorem mollis aliquam ut porttitor leo. Vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor.</p>\r\n<p>Aliquet lectus proin nibh nisl. Sodales ut eu sem integer. Feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Pellentesque pulvinar pellentesque habitant morbi tristique senectus. At tempor commodo ullamcorper a lacus. In fermentum et sollicitudin ac. Vulputate enim nulla aliquet porttitor lacus. Nibh tellus molestie nunc non blandit massa enim. Ut eu sem integer vitae justo. A pellentesque sit amet porttitor eget dolor morbi non. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Donec massa sapien faucibus et molestie ac feugiat. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>\r\n</div>\r\n</body>\r\n</html>', '2021-01-14'),
(23, 'gambar/x-logo.png', 'logo', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div id=\"output\" class=\"page-generator__output js-generator-output\">\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong> Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Nulla at volutpat diam ut. Eu ultrices vitae auctor eu augue ut lectus arcu bibendum. Nulla aliquet porttitor lacus luctus accumsan tortor posuere ac. Nunc lobortis mattis aliquam faucibus purus in. Aliquet eget sit amet tellus cras. Arcu cursus euismod quis viverra nibh cras pulvinar. Morbi tristique senectus et netus et malesuada fames ac turpis.</p>\r\n<p>Luctus accumsan tortor posuere ac ut consequat semper. Dictum fusce ut placerat orci nulla pellentesque dignissim. Faucibus turpis in eu mi bibendum neque egestas congue. In egestas erat imperdiet sed euismod nisi porta lorem. Quisque egestas diam in arcu cursus euismod quis viverra. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Elit at imperdiet dui accumsan. Diam maecenas sed enim ut sem. Donec ultrices tincidunt arcu non sodales neque sodales. Ut ornare lectus sit amet est placerat in egestas.</p>\r\n<p>Amet venenatis urna cursus eget nunc scelerisque viverra mauris in. Sit amet nisl purus in. Amet dictum sit amet justo donec enim diam vulputate. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Augue eget arcu dictum varius. Lectus magna fringilla urna porttitor. Tincidunt ornare massa eget egestas. Purus faucibus ornare suspendisse sed nisi lacus sed. Ante in nibh mauris cursus mattis molestie a. Id diam maecenas ultricies mi eget mauris. Condimentum mattis pellentesque id nibh tortor id. Odio aenean sed adipiscing diam. Porta lorem mollis aliquam ut porttitor leo a. Amet cursus sit amet dictum sit. Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Non arcu risus quis varius. Metus vulputate eu scelerisque felis imperdiet proin fermentum. Vitae proin sagittis nisl rhoncus mattis rhoncus. Sit amet tellus cras adipiscing enim eu. Sed enim ut sem viverra.</p>\r\n<p>Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Euismod quis viverra nibh cras pulvinar. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Urna condimentum mattis pellentesque id nibh tortor id aliquet. Ut consequat semper viverra nam libero justo laoreet sit. Sodales ut eu sem integer vitae. In eu mi bibendum neque egestas congue. Et malesuada fames ac turpis. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus. Ornare arcu odio ut sem nulla pharetra. Sit amet dictum sit amet justo donec enim diam. Placerat in egestas erat imperdiet sed euismod nisi. At varius vel pharetra vel turpis. Malesuada pellentesque elit eget gravida cum sociis natoque penatibus et. Porttitor rhoncus dolor purus non enim praesent elementum facilisis.</p>\r\n<p>Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Eros donec ac odio tempor orci dapibus. Vitae tortor condimentum lacinia quis vel. Ut sem nulla pharetra diam sit amet. Sit amet venenatis urna cursus eget nunc. Integer eget aliquet nibh praesent tristique magna sit. Sed libero enim sed faucibus turpis in. Viverra accumsan in nisl nisi. Integer quis auctor elit sed vulputate. Imperdiet proin fermentum leo vel. Nunc scelerisque viverra mauris in aliquam sem fringilla. Sapien pellentesque habitant morbi tristique senectus et netus et.</p>\r\n<p>Ac turpis egestas sed tempus urna et pharetra. Vitae suscipit tellus mauris a. Odio euismod lacinia at quis. Eu sem integer vitae justo eget magna. Consectetur lorem donec massa sapien faucibus et. Eget mi proin sed libero enim sed faucibus turpis in. Tellus orci ac auctor augue mauris augue. Cras ornare arcu dui vivamus arcu. Neque sodales ut etiam sit amet nisl purus in. Ipsum consequat nisl vel pretium. Lobortis scelerisque fermentum dui faucibus in. Adipiscing bibendum est ultricies integer quis auctor.</p>\r\n</div>\r\n</body>\r\n</html>', '2021-01-14'),
(24, 'gambar/x-logo.png', 'test gambar baru', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Test</p>\r\n</body>\r\n</html>', '2021-01-14'),
(25, 'gambar/default', '', '', '2021-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbgalery`
--

CREATE TABLE `tbgalery` (
  `id_galery` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelayananinformasi`
--

CREATE TABLE `tb_pelayananinformasi` (
  `id_beritaPelayananInformasi` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'admin test', 'admin@admin.com', '123', 'admin', 'laki-laki', '08123456789', 'jl. imam bonjol denpasar');

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
  ADD PRIMARY KEY (`id_jasa`);

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
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `tb_pelayananinformasi`
--
ALTER TABLE `tb_pelayananinformasi`
  ADD PRIMARY KEY (`id_beritaPelayananInformasi`);

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbgalery`
--
ALTER TABLE `tbgalery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategorijasa`
--
ALTER TABLE `tb_kategorijasa`
  MODIFY `id_kategoriJasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategorikunjungan`
--
ALTER TABLE `tb_kategorikunjungan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelayananinformasi`
--
ALTER TABLE `tb_pelayananinformasi`
  MODIFY `id_beritaPelayananInformasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
