-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Feb 2023 pada 04.48
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_satwa_langka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE IF NOT EXISTS `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `email`, `alamat`, `no_hp`, `password`) VALUES
(1, 'ujang', 'ujangjangkrik@gmail.com', 'jln.A.H.Nasution.No 128', '08123456789', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_saran`
--

CREATE TABLE IF NOT EXISTS `tb_saran` (
`id_saran` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `saran` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_saran`
--

INSERT INTO `tb_saran` (`id_saran`, `nama`, `email`, `saran`) VALUES
(1, 'rs', 'rz@g', 'sdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_satwa`
--

CREATE TABLE IF NOT EXISTS `tb_satwa` (
  `id_satwa` int(100) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `biografi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_satwa`
--

INSERT INTO `tb_satwa` (`id_satwa`, `gambar`, `nama`, `biografi`) VALUES
(1, 'badak jawa.jpg', 'Badak Jawa', ' Badak Jawa (Rhinoceros sondaicus), disebut juga Badak sumbu [2], Badak sunda (sesuai dengan nama latinnya) atau badak bercula satu kecil, adalah sebuah anggota famili Rhinocerotidae dan merupakan salah satu dari lima spesies badak yang masih ada.'),
(2, 'Kanguru Pohon Wondiwoi.jpg', 'Kanguru Pohon Wondiwoi', '  Kanguru Pohon Wondiwoi adalah spesies mamalia dalam genus Dendrolagus. diketahui dari spesimen tunggal yang dikumpulkan pada tahun 1928. Satu-satunya spesimen yang diketahui adalah jantan dengan berat 9,25 kg. D. mayri ditemukan di Semenanjung Wondiwoi di Papua Barat '),
(3, 'Pesut Mahakam.jpg', 'Pesut Mahakam', 'Pesut mahakam adalah sejenis hewan mamalia yang sering disebut lumba-lumba air tawar yang berstatus terancam punah. Pesut ini dinamakan pesut mahakam karena banyak ditemukan di perairan Sungai Mahakam, tetapi kalangan peneliti barat lebih mengenal hewan ini dengan nama Irrawaddy Dolphin. \r\nJumlah : '),
(4, 'Macan tutul.jpg', 'Macan tutul', 'Macan tutul (Latin: Panthera pardus) atau Harimau Bintang adalah salah satu dari empat kucing besar. Hewan ini dikenal juga dengan sebutan harimau dahan karena kemampuannya memanjat. \r\nJumlah : tersisa 300 ekor termasuk yang hidup di gunung Muria Jepara Jawa tengah\r\n'),
(5, 'Badak Sumatra.jpg', 'Badak Sumatra', 'Badak sumatra, juga dikenal sebagai badak berambut atau badak Asia bercula dua, merupakan spesies langka dari famili Rhinocerotidae dan termasuk salah satu dari lima spesies badak yang masih lestari. Badak sumatra merupakan satu-satunya spesies yang tersisa dari genus Dicerorhinus. \r\nJumlah : popula'),
(6, 'Kura kura hutan Sumatera.jpg', 'Kura kura hutan Sumatera', 'Kura-kura Hutan Sulawesi (Leucocephalon yuwonoi) atau Sulawesi Forest Turtle; Kura-kura endemik sulawesi yang pernah terdaftar sebagai The World’s 25 Most Endangered Tortoises and Freshwater.\r\nJumlah : dengan populasi kurang dari 250 ekor.\r\n'),
(7, 'Elang Flores.jpg', 'Elang Flores', 'Elang Flores merupakan salah satu jenis raptor endemik yang dipunyai Indonesia dari keluarga Accipitridae dan Genus Nisaetus. Elang flores sebelumnya dianggap sebagai ras elang brontok tetapi Gjershaug et al menunjukkan bahwa perbedaan morfologis yang signifikan antara bentuk ini denga elang brontok'),
(8, 'Bawean.jpg', 'Bawean', 'bawean adalah sejenis rusa yang saat ini hanya ditemukan di Pulau Bawean di tengah Laut Jawa, Secara administratif pulau ini termasuk dalam Kabupaten Gresik, Provinsi Jawa Timur, Indonesia. Spesies ini tergolong langka dan diklasifikasikan sebagai "terancam punah" oleh Uni Internasional untuk Konser'),
(9, 'Burung cendrawasih.jpg', 'Burung cendrawasih', 'Burung Cenderawasih adalah anggota famili Paradisaeidae dari ordo Passeriformes. Cenderawasih biasanya ditemukan di Indonesia seperti di bagian Timur Papua, Papua Nugini, pulau-pulau selat Torres, dan Australia timur.\r\nJumlah : populasi burung Cenderawasih (P.apoda) adalah sebanyak 28 ekor\r\n'),
(10, 'Harimau Sumatera.jpg', 'Harimau Sumatera', 'Harimau adalah kucing terbesar di muka bumi. Harimau Sumatera merupakan salah satu sub-spesies harimau yang masih bertahan hidup hingga saat ini.\r\nJumlah : populasi harimau sumatera hanya sekitar 210 individu.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
 ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_saran`
--
ALTER TABLE `tb_saran`
 ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `tb_satwa`
--
ALTER TABLE `tb_satwa`
 ADD PRIMARY KEY (`id_satwa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_saran`
--
ALTER TABLE `tb_saran`
MODIFY `id_saran` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
