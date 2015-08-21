-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2015 at 10:16 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(120) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(1, '2015-08-13 14:16:07', 'Penipuan Modus Call Center Palsu', '<strong>PEKALONGAN</strong>&nbsp;&ndash; Nasib apes menimpa Nurohmah (37), warga Dekoro, Kelurahan Setono, Kecamatan Pekalongan Timur, Kota Pekalongan, kemarin. Uang dalam rekening tabungannya sebesar Rp2.799.775 raib ke rekening pelaku penipuan bermodus call center palsu sebuah bank. Kepada polisi, korban yang merupakan ibu rumah tangga itu melaporkan bahwa peristiwa tersebut ia alami sekira pukul 07.30 WIB.&nbsp;<br /><br />Berawal ketika dirinya akan melakukan transaksi di counter ATM sebuah bank dikompleks Pasar Grosir Setono, Jalan Dr Sutomo, Pekalongan Timur. &acirc;&euro;&oelig;Ternyata ATMnya bermasalah, tidak bisa untuk bertransaksi,&acirc;&euro; katanya kepada polisi. Selanjutnya, Nurohmah segera menelpon nomor call center yang terpasang di konter ATM tersebut. Ia tak menyadari kalau ternyata nomor tersebut adalah palsu. Korban menceritakan permasalahan yang dialami, dan dijawab bahwa permasalahan tersebut akan ditangani segera. Sesaat kemudian, Nurohmah mendapat telepon dari orang tak dikenal, mengaku sebagai petugas bank.&nbsp;<br /><br />Melalui sambungan telepon, orang tersebut mengarahkan korban untuk kembali ke ATM tadi dan melakukan edit ulang data korban supaya ATM korban bisa digunakan lagi. Korban diarahkan memencet angka-angka dan tombol tertentu di mesin ATM tersebut. Ternyata, tanpa disadari, korban telah melakukan transfer uang dari rekeningnya ke nomor rekening tertentu. Korban baru menyadari telah menjadi korban penipuan setelah melihat saldo tabungannya berkurang. Korban ternyata telah mentransfer uang sebesar Rp2.779.775 ke nomor rekening yang diarahkan pelaku. Akibat kejadian itu, korban melaporkan kasus penipuan yang dialaminya ke Satreskrim Polres Pekalongan Kota. Kasus ini masih dalam penyelidikan lebih lanjut oleh pihak kepolisian. (way)', 'penipuan_modus_call_center_palsu_36230.jpg'),
(2, '2015-08-14 01:07:10', 'RI Gunakan Thorium Untuk Reaktor ke-4 di Serpong', '<strong arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" jakarta="" strong="" span="">Jakarta -</strong>Pemerintah dan Badan Tenaga Nuklir Nasional (BATAN) saat ini sedang membangun reaktor nuklir terbaru atau yang ke-4 di Serpong, Banten. Nantinya reaktor yang ditargetkan selesai dan beroperasi 2019 tersebut juga akan menggunakan bahan bakar thorium (nuklir hijau).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Nantinya reaktor kita yang baru dalam program Reaktor Daya Eksperimental (RDE) kapasitas 30 mega watt (MW) juga menggunakan thorium, jadi rektor ini bisa uranium juga thorium," ungkap Kepala BATAN Djarot Sulistio Wisnubroto, kepada&nbsp;</span>, Selasa (11/8/2015).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" strong="" /><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />Djarot mengatakan, salah satu alasan mengapa BATAN juga mengembangkan thorium, karena cadangan thorium di Indonesia jauh lebih banyak dibandingkan uranium.<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Cadangan Thorium di Indonesia mencapai 70.000 ton, atau 4 kali lebih banyak daripada cadangan uranium kita," ungkapnya.</span><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" ia="" mengakui="" penggunaan="" thorium="" untuk="" listrik="" jauh="" lebih="" aman="" dibandingkan="" dengan="" menggunakan="" uranium="" span="" br=""><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />"Walau sama-sama mengandung radiasi, thorium memang jauh lebih aman daripada uranium. Karena thorium tidak bisa digunakan jadi senjata seperti uranium," tutup Djarot.</span>', 'ri_gunakan_thorium_untuk_reaktor_ke-4_di_serpong_82647.jpg'),
(3, '2015-08-13 14:16:07', 'Penipuan Modus Call Center Palsu', '<strong>PEKALONGAN</strong>&nbsp;&ndash; Nasib apes menimpa Nurohmah (37), warga Dekoro, Kelurahan Setono, Kecamatan Pekalongan Timur, Kota Pekalongan, kemarin. Uang dalam rekening tabungannya sebesar Rp2.799.775 raib ke rekening pelaku penipuan bermodus call center palsu sebuah bank. Kepada polisi, korban yang merupakan ibu rumah tangga itu melaporkan bahwa peristiwa tersebut ia alami sekira pukul 07.30 WIB.&nbsp;<br /><br />Berawal ketika dirinya akan melakukan transaksi di counter ATM sebuah bank dikompleks Pasar Grosir Setono, Jalan Dr Sutomo, Pekalongan Timur. &acirc;&euro;&oelig;Ternyata ATMnya bermasalah, tidak bisa untuk bertransaksi,&acirc;&euro; katanya kepada polisi. Selanjutnya, Nurohmah segera menelpon nomor call center yang terpasang di konter ATM tersebut. Ia tak menyadari kalau ternyata nomor tersebut adalah palsu. Korban menceritakan permasalahan yang dialami, dan dijawab bahwa permasalahan tersebut akan ditangani segera. Sesaat kemudian, Nurohmah mendapat telepon dari orang tak dikenal, mengaku sebagai petugas bank.&nbsp;<br /><br />Melalui sambungan telepon, orang tersebut mengarahkan korban untuk kembali ke ATM tadi dan melakukan edit ulang data korban supaya ATM korban bisa digunakan lagi. Korban diarahkan memencet angka-angka dan tombol tertentu di mesin ATM tersebut. Ternyata, tanpa disadari, korban telah melakukan transfer uang dari rekeningnya ke nomor rekening tertentu. Korban baru menyadari telah menjadi korban penipuan setelah melihat saldo tabungannya berkurang. Korban ternyata telah mentransfer uang sebesar Rp2.779.775 ke nomor rekening yang diarahkan pelaku. Akibat kejadian itu, korban melaporkan kasus penipuan yang dialaminya ke Satreskrim Polres Pekalongan Kota. Kasus ini masih dalam penyelidikan lebih lanjut oleh pihak kepolisian. (way)', 'penipuan_modus_call_center_palsu_36230.jpg'),
(4, '2015-08-14 01:07:10', 'RI Gunakan Thorium Untuk Reaktor ke-4 di Serpong', '<strong arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" jakarta="" strong="" span="">Jakarta -</strong>Pemerintah dan Badan Tenaga Nuklir Nasional (BATAN) saat ini sedang membangun reaktor nuklir terbaru atau yang ke-4 di Serpong, Banten. Nantinya reaktor yang ditargetkan selesai dan beroperasi 2019 tersebut juga akan menggunakan bahan bakar thorium (nuklir hijau).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Nantinya reaktor kita yang baru dalam program Reaktor Daya Eksperimental (RDE) kapasitas 30 mega watt (MW) juga menggunakan thorium, jadi rektor ini bisa uranium juga thorium," ungkap Kepala BATAN Djarot Sulistio Wisnubroto, kepada&nbsp;</span>, Selasa (11/8/2015).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" strong="" /><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />Djarot mengatakan, salah satu alasan mengapa BATAN juga mengembangkan thorium, karena cadangan thorium di Indonesia jauh lebih banyak dibandingkan uranium.<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Cadangan Thorium di Indonesia mencapai 70.000 ton, atau 4 kali lebih banyak daripada cadangan uranium kita," ungkapnya.</span><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" ia="" mengakui="" penggunaan="" thorium="" untuk="" listrik="" jauh="" lebih="" aman="" dibandingkan="" dengan="" menggunakan="" uranium="" span="" br=""><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />"Walau sama-sama mengandung radiasi, thorium memang jauh lebih aman daripada uranium. Karena thorium tidak bisa digunakan jadi senjata seperti uranium," tutup Djarot.</span>', 'ri_gunakan_thorium_untuk_reaktor_ke-4_di_serpong_82647.jpg'),
(5, '2015-08-13 14:16:07', 'Penipuan Modus Call Center Palsu', '<strong>PEKALONGAN</strong>&nbsp;&ndash; Nasib apes menimpa Nurohmah (37), warga Dekoro, Kelurahan Setono, Kecamatan Pekalongan Timur, Kota Pekalongan, kemarin. Uang dalam rekening tabungannya sebesar Rp2.799.775 raib ke rekening pelaku penipuan bermodus call center palsu sebuah bank. Kepada polisi, korban yang merupakan ibu rumah tangga itu melaporkan bahwa peristiwa tersebut ia alami sekira pukul 07.30 WIB.&nbsp;<br /><br />Berawal ketika dirinya akan melakukan transaksi di counter ATM sebuah bank dikompleks Pasar Grosir Setono, Jalan Dr Sutomo, Pekalongan Timur. &acirc;&euro;&oelig;Ternyata ATMnya bermasalah, tidak bisa untuk bertransaksi,&acirc;&euro; katanya kepada polisi. Selanjutnya, Nurohmah segera menelpon nomor call center yang terpasang di konter ATM tersebut. Ia tak menyadari kalau ternyata nomor tersebut adalah palsu. Korban menceritakan permasalahan yang dialami, dan dijawab bahwa permasalahan tersebut akan ditangani segera. Sesaat kemudian, Nurohmah mendapat telepon dari orang tak dikenal, mengaku sebagai petugas bank.&nbsp;<br /><br />Melalui sambungan telepon, orang tersebut mengarahkan korban untuk kembali ke ATM tadi dan melakukan edit ulang data korban supaya ATM korban bisa digunakan lagi. Korban diarahkan memencet angka-angka dan tombol tertentu di mesin ATM tersebut. Ternyata, tanpa disadari, korban telah melakukan transfer uang dari rekeningnya ke nomor rekening tertentu. Korban baru menyadari telah menjadi korban penipuan setelah melihat saldo tabungannya berkurang. Korban ternyata telah mentransfer uang sebesar Rp2.779.775 ke nomor rekening yang diarahkan pelaku. Akibat kejadian itu, korban melaporkan kasus penipuan yang dialaminya ke Satreskrim Polres Pekalongan Kota. Kasus ini masih dalam penyelidikan lebih lanjut oleh pihak kepolisian. (way)', 'penipuan_modus_call_center_palsu_36230.jpg'),
(6, '2015-08-14 01:07:10', 'RI Gunakan Thorium Untuk Reaktor ke-4 di Serpong', '<strong arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" jakarta="" strong="" span="">Jakarta -</strong>Pemerintah dan Badan Tenaga Nuklir Nasional (BATAN) saat ini sedang membangun reaktor nuklir terbaru atau yang ke-4 di Serpong, Banten. Nantinya reaktor yang ditargetkan selesai dan beroperasi 2019 tersebut juga akan menggunakan bahan bakar thorium (nuklir hijau).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Nantinya reaktor kita yang baru dalam program Reaktor Daya Eksperimental (RDE) kapasitas 30 mega watt (MW) juga menggunakan thorium, jadi rektor ini bisa uranium juga thorium," ungkap Kepala BATAN Djarot Sulistio Wisnubroto, kepada&nbsp;</span>, Selasa (11/8/2015).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" strong="" /><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />Djarot mengatakan, salah satu alasan mengapa BATAN juga mengembangkan thorium, karena cadangan thorium di Indonesia jauh lebih banyak dibandingkan uranium.<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Cadangan Thorium di Indonesia mencapai 70.000 ton, atau 4 kali lebih banyak daripada cadangan uranium kita," ungkapnya.</span><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" ia="" mengakui="" penggunaan="" thorium="" untuk="" listrik="" jauh="" lebih="" aman="" dibandingkan="" dengan="" menggunakan="" uranium="" span="" br=""><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />"Walau sama-sama mengandung radiasi, thorium memang jauh lebih aman daripada uranium. Karena thorium tidak bisa digunakan jadi senjata seperti uranium," tutup Djarot.</span>', 'ri_gunakan_thorium_untuk_reaktor_ke-4_di_serpong_82647.jpg'),
(7, '2015-08-13 14:16:07', 'Penipuan Modus Call Center Palsu', '<div style="line-height: 20px;"><strong>PEKALONGAN</strong>&nbsp;&ndash; Nasib apes menimpa Nurohmah (37), warga Dekoro, Kelurahan Setono, Kecamatan Pekalongan Timur, Kota Pekalongan, kemarin. Uang dalam rekening tabungannya sebesar Rp2.799.775 raib ke rekening pelaku penipuan bermodus call center palsu sebuah bank. Kepada polisi, korban yang merupakan ibu rumah tangga itu melaporkan bahwa peristiwa tersebut ia alami sekira pukul 07.30 WIB.&nbsp;<br /><br />Berawal ketika dirinya akan melakukan transaksi di counter ATM sebuah bank dikompleks Pasar Grosir Setono, Jalan Dr Sutomo, Pekalongan Timur. &acirc;&euro;&oelig;Ternyata ATMnya bermasalah, tidak bisa untuk bertransaksi,&acirc;&euro; katanya kepada polisi. Selanjutnya, Nurohmah segera menelpon nomor call center yang terpasang di konter ATM tersebut. Ia tak menyadari kalau ternyata nomor tersebut adalah palsu. Korban menceritakan permasalahan yang dialami, dan dijawab bahwa permasalahan tersebut akan ditangani segera. Sesaat kemudian, Nurohmah mendapat telepon dari orang tak dikenal, mengaku sebagai petugas bank.&nbsp;<br /><br />Melalui sambungan telepon, orang tersebut mengarahkan korban untuk kembali ke ATM tadi dan melakukan edit ulang data korban supaya ATM korban bisa digunakan lagi. Korban diarahkan memencet angka-angka dan tombol tertentu di mesin ATM tersebut. Ternyata, tanpa disadari, korban telah melakukan transfer uang dari rekeningnya ke nomor rekening tertentu. Korban baru menyadari telah menjadi korban penipuan setelah melihat saldo tabungannya berkurang. Korban ternyata telah mentransfer uang sebesar Rp2.779.775 ke nomor rekening yang diarahkan pelaku. Akibat kejadian itu, korban melaporkan kasus penipuan yang dialaminya ke Satreskrim Polres Pekalongan Kota. Kasus ini masih dalam penyelidikan lebih lanjut oleh pihak kepolisian. (way)</div>', 'penipuan_modus_call_center_palsu_36230.jpg'),
(8, '2015-08-13 14:16:07', 'Penipuan Modus Call Center Palsu', '<strong>PEKALONGAN</strong>&nbsp;&ndash; Nasib apes menimpa Nurohmah (37), warga Dekoro, Kelurahan Setono, Kecamatan Pekalongan Timur, Kota Pekalongan, kemarin. Uang dalam rekening tabungannya sebesar Rp2.799.775 raib ke rekening pelaku penipuan bermodus call center palsu sebuah bank. Kepada polisi, korban yang merupakan ibu rumah tangga itu melaporkan bahwa peristiwa tersebut ia alami sekira pukul 07.30 WIB.&nbsp;<br /><br />Berawal ketika dirinya akan melakukan transaksi di counter ATM sebuah bank dikompleks Pasar Grosir Setono, Jalan Dr Sutomo, Pekalongan Timur. &acirc;&euro;&oelig;Ternyata ATMnya bermasalah, tidak bisa untuk bertransaksi,&acirc;&euro; katanya kepada polisi. Selanjutnya, Nurohmah segera menelpon nomor call center yang terpasang di konter ATM tersebut. Ia tak menyadari kalau ternyata nomor tersebut adalah palsu. Korban menceritakan permasalahan yang dialami, dan dijawab bahwa permasalahan tersebut akan ditangani segera. Sesaat kemudian, Nurohmah mendapat telepon dari orang tak dikenal, mengaku sebagai petugas bank.&nbsp;<br /><br />Melalui sambungan telepon, orang tersebut mengarahkan korban untuk kembali ke ATM tadi dan melakukan edit ulang data korban supaya ATM korban bisa digunakan lagi. Korban diarahkan memencet angka-angka dan tombol tertentu di mesin ATM tersebut. Ternyata, tanpa disadari, korban telah melakukan transfer uang dari rekeningnya ke nomor rekening tertentu. Korban baru menyadari telah menjadi korban penipuan setelah melihat saldo tabungannya berkurang. Korban ternyata telah mentransfer uang sebesar Rp2.779.775 ke nomor rekening yang diarahkan pelaku. Akibat kejadian itu, korban melaporkan kasus penipuan yang dialaminya ke Satreskrim Polres Pekalongan Kota. Kasus ini masih dalam penyelidikan lebih lanjut oleh pihak kepolisian. (way)', 'penipuan_modus_call_center_palsu_36230.jpg'),
(9, '2015-08-13 14:16:07', 'Penipuan Modus Call Center Palsu', '<strong>PEKALONGAN</strong>&nbsp;&ndash; Nasib apes menimpa Nurohmah (37), warga Dekoro, Kelurahan Setono, Kecamatan Pekalongan Timur, Kota Pekalongan, kemarin. Uang dalam rekening tabungannya sebesar Rp2.799.775 raib ke rekening pelaku penipuan bermodus call center palsu sebuah bank. Kepada polisi, korban yang merupakan ibu rumah tangga itu melaporkan bahwa peristiwa tersebut ia alami sekira pukul 07.30 WIB.&nbsp;<br /><br />Berawal ketika dirinya akan melakukan transaksi di counter ATM sebuah bank dikompleks Pasar Grosir Setono, Jalan Dr Sutomo, Pekalongan Timur. &acirc;&euro;&oelig;Ternyata ATMnya bermasalah, tidak bisa untuk bertransaksi,&acirc;&euro; katanya kepada polisi. Selanjutnya, Nurohmah segera menelpon nomor call center yang terpasang di konter ATM tersebut. Ia tak menyadari kalau ternyata nomor tersebut adalah palsu. Korban menceritakan permasalahan yang dialami, dan dijawab bahwa permasalahan tersebut akan ditangani segera. Sesaat kemudian, Nurohmah mendapat telepon dari orang tak dikenal, mengaku sebagai petugas bank.&nbsp;<br /><br />Melalui sambungan telepon, orang tersebut mengarahkan korban untuk kembali ke ATM tadi dan melakukan edit ulang data korban supaya ATM korban bisa digunakan lagi. Korban diarahkan memencet angka-angka dan tombol tertentu di mesin ATM tersebut. Ternyata, tanpa disadari, korban telah melakukan transfer uang dari rekeningnya ke nomor rekening tertentu. Korban baru menyadari telah menjadi korban penipuan setelah melihat saldo tabungannya berkurang. Korban ternyata telah mentransfer uang sebesar Rp2.779.775 ke nomor rekening yang diarahkan pelaku. Akibat kejadian itu, korban melaporkan kasus penipuan yang dialaminya ke Satreskrim Polres Pekalongan Kota. Kasus ini masih dalam penyelidikan lebih lanjut oleh pihak kepolisian. (way)', 'penipuan_modus_call_center_palsu_36230.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE IF NOT EXISTS `tb_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `alamat`, `kode_pos`, `telp`, `fax`, `email`, `website`) VALUES
(1, 'Akademi Komunitas Negeri Pekalongan', 'Jl. Sisingamangaraja, Sitoluama\nLaguboti, Toba Samosir\nSumatera Utara, Indonesia', '53414', '(0285) 5565162', '(0285) 5565163', 'akn@ac.id', 'http://www.akn.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tb_info_pendaftaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_journal`
--

CREATE TABLE IF NOT EXISTS `tb_journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_journal_category` int(11) NOT NULL,
  `waktu_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal` date NOT NULL,
  `penulis` text NOT NULL,
  `judul` text NOT NULL,
  `abstract_id` text NOT NULL,
  `keywords_id` text NOT NULL,
  `abstract_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_journal_category` (`id_journal_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_journal`
--

INSERT INTO `tb_journal` (`id`, `id_journal_category`, `waktu_upload`, `tanggal`, `penulis`, `judul`, `abstract_id`, `keywords_id`, `abstract_en`, `keywords_en`, `file`) VALUES
(5, 1, '2015-08-18 13:30:00', '2015-08-18', 'Arvin Nizar 05523238; Heru Setiawan 05523200', 'Skematika CInta dengan Algoritma Genetik', '<p><strong>Indonesia</strong> Those workarounds aren`t suitable though, the old behaviour would persist the existing date. If you add additional javascript to try and catch blank and restore it, the external code would have to manually shadow the date value in the component.</p>\n<p>The current situation goes against end-user expectations too: if you have a datepicker combo to select start/end date ranges for example and a user brings up the dialog, but then changes his mind and doesn`t want to change the already selected date there are two logical options: either they will click outside on the dialog, or they will reselect the value they had already selected. This used to result in expected behaviour for the end user, but now it doesn`t anymore.</p>', 'Selecting same date twice clears the underlying field xxx', '<p style="text-align: left;">English Those workarounds aren`t suitable though, the old behaviour would persist the existing date. If you add additional javascript to try and catch blank and restore it, the external code would have to manually shadow the date value in the component.</p>\n<p style="text-align: left;">The current situation goes against end-user expectations too: if you have a datepicker combo to select start/end date ranges for example and a user brings up the dialog, but then changes his mind and doesn`t want to change the already selected date there are two logical options: either they will click outside on the dialog, or they will reselect the value they had already selected. This used to result in expected behaviour for the end user, but now it doesn`t anymore.</p>', 'Selecting same date twice clears the underlying field yyy', 'skematika_cinta_dengan_algoritma_genetik_67620.pdf'),
(6, 1, '2015-08-18 13:30:00', '2015-08-18', 'Arvin Nizar 05523238; Heru Setiawan 05523200', 'Skematika CInta dengan Algoritma Genetik', '<p><strong>Indonesia</strong> Those workarounds aren`t suitable though, the old behaviour would persist the existing date. If you add additional javascript to try and catch blank and restore it, the external code would have to manually shadow the date value in the component.</p>\r\n<p>The current situation goes against end-user expectations too: if you have a datepicker combo to select start/end date ranges for example and a user brings up the dialog, but then changes his mind and doesn`t want to change the already selected date there are two logical options: either they will click outside on the dialog, or they will reselect the value they had already selected. This used to result in expected behaviour for the end user, but now it doesn`t anymore.</p>', 'Selecting same date twice clears the underlying field xxx', '<p style="text-align: left;">English Those workarounds aren`t suitable though, the old behaviour would persist the existing date. If you add additional javascript to try and catch blank and restore it, the external code would have to manually shadow the date value in the component.</p>\r\n<p style="text-align: left;">The current situation goes against end-user expectations too: if you have a datepicker combo to select start/end date ranges for example and a user brings up the dialog, but then changes his mind and doesn`t want to change the already selected date there are two logical options: either they will click outside on the dialog, or they will reselect the value they had already selected. This used to result in expected behaviour for the end user, but now it doesn`t anymore.</p>', 'Selecting same date twice clears the underlying field yyy', 'skematika_cinta_dengan_algoritma_genetik_67620.pdf'),
(7, 1, '2015-08-18 13:30:00', '2015-08-18', 'Arvin Nizar 05523238; Heru Setiawan 05523200', 'Skematika CInta dengan Algoritma Genetik', '<p><strong>Indonesia</strong> Those workarounds aren`t suitable though, the old behaviour would persist the existing date. If you add additional javascript to try and catch blank and restore it, the external code would have to manually shadow the date value in the component.</p>\r\n<p>The current situation goes against end-user expectations too: if you have a datepicker combo to select start/end date ranges for example and a user brings up the dialog, but then changes his mind and doesn`t want to change the already selected date there are two logical options: either they will click outside on the dialog, or they will reselect the value they had already selected. This used to result in expected behaviour for the end user, but now it doesn`t anymore.</p>', 'Selecting same date twice clears the underlying field xxx', '<p style="text-align: left;">English Those workarounds aren`t suitable though, the old behaviour would persist the existing date. If you add additional javascript to try and catch blank and restore it, the external code would have to manually shadow the date value in the component.</p>\r\n<p style="text-align: left;">The current situation goes against end-user expectations too: if you have a datepicker combo to select start/end date ranges for example and a user brings up the dialog, but then changes his mind and doesn`t want to change the already selected date there are two logical options: either they will click outside on the dialog, or they will reselect the value they had already selected. This used to result in expected behaviour for the end user, but now it doesn`t anymore.</p>', 'Selecting same date twice clears the underlying field yyy', 'skematika_cinta_dengan_algoritma_genetik_67620.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_journal_category`
--

CREATE TABLE IF NOT EXISTS `tb_journal_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_journal_category`
--

INSERT INTO `tb_journal_category` (`id`, `nama`) VALUES
(1, 'Teknik Komputer'),
(2, 'Ilmu Sosial'),
(3, 'Ekonomi'),
(5, 'Sastra, Bahasa, dan Senix');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kemhsan`
--

CREATE TABLE IF NOT EXISTS `tb_kemhsan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(120) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_kemhsan`
--

INSERT INTO `tb_kemhsan` (`id`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(1, '2015-08-19 14:13:45', 'Kegiatan Kemahasiswaan', '<div class="centerwidget">\n<div id="ugm-content">\n<div id="ugm-content">\n<div class="node" id="node-3314">\n<div class="content clear-block">\n<div class="content clear-block">\n<h3>Tingkat Universitas</h3>\n<ul class="list1">\n<li>Organisasi kemahasiswaan di Akademi Komunitas Negeri adalah wahana dan sarana pengembangan diri serta aspirasi mahasiswa Akademi Komunitas Negeri ke arah perluasan wawasan dan peningkatan kecendikiawanan serta integritas kepribadian</li>\n<li>Keluarga Mahasiswa Akademi Komunitas Negeri, disingkat KM UGM adalah organisasi kemahasiswaan di Akademi Komunitas Negeri.</li>\n<li>Organisasi Kemahasiswaan terdiri atas :\n<ul class="list2">\n<li>BadanKelengkapan Keluarga Mahasiswa Universitas Gadjah<br /><br />Mada yang meliputi :\n<ul class="list2">\n<li>Kongres Mahasiswa Akademi Komunitas Negeri selanjutnya disingkat KMU.</li>\n<li>Senat Mahasiswa Akademi Komunitas Negeri selanjutnya disingkat SMU.</li>\n<li>Badan Eksekutif Mahasiswa Akademi Komunitas Negeri<br /><br />selanjutnya disingkat BEMU.</li>\n<li>Senat Mahasiswa Fakultas selanjutnya disingkat SMF.</li>\n<li>Badan Eksekutif Mahasiswa Fakultas selanjutnya disingkat<br />\n<p>BEMF.</p>\n</li>\n<li>Himpunan Mahasiswa Jurusan selanjutnya disingkat HMJ.</li>\n</ul>\n</li>\n<li>Unit Kegiatan Mahasiswa (UKM)</li>\n</ul>\n</li>\n<li>Tugas pokok :\n<ul>\n<li>Kongres Mahasiswa adalah perwujudan kedaulatan tertinggi Keluarga Mahasiswa Akademi Komunitas Negeri yang berada di tangan seluruh mahasiswa Akademi Komunitas Negeri dan setiap tahun mengadakan Sidang Umum Kongres.\n<ul class="list2">\n<li>Tugas Sidang Umum Kongres :\n<ul>\n<li>Menetapkan AD/ART KM UGM</li>\n<li>Menetapkan GBHK KM UGM</li>\n<li>Memilih dan menetapkan Ketua Kongres Mahasiswa dan sekaligussebagai Ketua SM UGM</li>\n<li>Memilih dan mengangkat ketua formatur sekaligus juga sebagai ketua BEM UGM yang berasal<br /><br />dari salah seorang Maid Formatur hasil Pemilihan Raya</li>\n<li>Menetapkan Maid Formatur lainnya</li>\n</ul>\n</li>\n<li>Tugas Senat Mahasiswa Akademi Komunitas Negeri :\n<ul class="list2">\n<li>Mengawasi Badan Eksekutif Mahasiswa Universitas</li>\n<li>Menyerap dan merumuskan aspirasi anggota Keluarga Mahasiswa Akademi Komunitas Negeri<br /><br />dan menyalurkan kepada BEMU</li>\n<li>Mengeluarkan memorandum satu dan dua apabila BEMU tidak melaksanakan tugasnya atau<br />\n<p>menyimpang dari kebijaksanaan KMU</p>\n</li>\n<li>Menjalin koordinasi dengan lembaga legislatif di tingkat Fakultas</li>\n</ul>\n</li>\n<li>Tugas Badan Eksekutif Mahasiswa Universitas :\n<ul class="list2">\n<li>Melaksanakan segala ketetapan KMU</li>\n<li>Mewakili mahasiswa Akademi Komunitas Negeri baik ke dalam maupun keluar UGM</li>\n<li>Menjunjung tinggi AD dan ART KM UGM</li>\n</ul>\n</li>\n<li>Tugas pokok dan fungsi UKM :\n<ul class="list2">\n<li>Tugas pokok UKM merencanakan dan melaksanakan kegiatan ekstra kurikuler di tingkat perguruan tinggi dalam bidang tertentu sesuai dengan tugas dan tanggung jawabnya</li>\n<li>Fungsi UKM sebagai wahana merencanakan, melaksanakan dan mengembangkan kegiatan ekstra kurikuler di tingkat perguruan tinggi yang bersifat penalaran dan keilmuan, minat dan kegemaran, kesejahteraan mahasiswa serta pengabdian kepada masyarakat.</li>\n</ul>\n</li>\n</ul>\n</li>\n</ul>\n</li>\n</ul>\n<h3>Tingkat Fakultas</h3>\n<ul class="list2">\n<li>Badan Kelengkapan Keluarga Mahasiswa Akademi Komunitas Negeri di tingkat Fakultas terdiri dari :\n<ul class="list2">\n<li>Senat Mahasiswa Fakultas disingkat SMF.</li>\n<li>Badan Eksekutif Mahasiswa Fakultas disingkat BEMF; dan</li>\n<li>Himpunan Mahasiswa Jurusan disingkat HMJ, khusus bagi<br /><br />fakultas yang mempunyai jurusan.</li>\n</ul>\n</li>\n<li>SMF mempunyai tugas pokok melaksanakan segala ketetapan SPSMF; membuat keputusan-keputusan yang dianggap perlu dalam pelaksanaan GBHK mahasiswa Fakultas; mewakili mahasiswa Fakultas baik ke dalam maupun ke luar Fakultas; dan melaksanakan rapat kerja bersama HMJ sebulan sekali.</li>\n<li>BEMF mempunyai tugas merencanakan dan melaksanakan kegiatan yang berkaitan dengan jurusannya di bawah koordinasi BEMF berdasarkan SPSMF. BEMF berfungsi sebagai pelaksanaan kegiatan di tingkat kejurusan.</li>\n<li>Tugas dan fungsi HMJ. HMJ berfungsi sebagai pelaksanaan kegiatan di tingkat jurusan yang mempunyai tugas merencanakan dan melaksanakan kegiatan yang berkaitan dengan jurusannya di bawah koordinasi BEMF berdasarkan SPSMF.</li>\n</ul>\n</div>\n</div>\n<div class="clear"></div>\n</div>\n<div id="fb-root"></div>\n<fb:like href="../id/node/2311-acordian" send="true" width="500" show_faces="true" font="tahoma"></fb:like></div>\n</div>\n</div>', 'kegiatan_kemahasiswaan_86261.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE IF NOT EXISTS `tb_prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL,
  `urutan` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id`, `link`, `judul`, `keterangan`, `aktif`, `urutan`) VALUES
(1, 'Rekaya Perangkat Lunak', 'Rekayasa Perangkat Lunak - RPL', '<p><span>Program Studi D-IV Teknik Informatika&nbsp; (Prodi D-IV TI) adalah program studi yang dikelola oleh Institut Teknologi Del yang berdiri pada tahun 2012 sesuai SK No. 238/E/O/2012 tertanggal 6 Juli 2012 dengan nama Program Studi Teknik Informatika. Program studi ini berlokasi di Jl. Sisingamangaraja, Desa Sitoluama, Kecamatan Laguboti, Toba Samosir, Propinsi Sumatera Utara berjarak kurang lebih 200 km (lima jam perjalanan mobil) dari Medan sebagai Ibukota Propinsi Sumatera Utara.</span></p>\n<p><span>Sesuai SK Menteri No NOMOR 232/U/2000, Program diploma IV (D-IV) diarahkan pada hasil lulusan yang menguasai kemampuan dalam melaksanakan pekerjaan yang kompleks, dengan dasar kemampuan profesional tertentu, termasuk ketrampilan merencanakan, melaksanakan kegiatan, memecahkan masalah dengan tanggungjawab mandiri pada tingkat tertentu, memiliki ketrampilan manajerial, serta mampu mengikuti perkembangan, pengetahuan, dan teknologi di dalam bidang keahliannva.</span></p>\n<p><span>Secara umum, kompetensi lulusan Prodi Teknik Informatika D4 Konsentrasi Rekayasa Perangkat Lunak yaitu:</span></p>\n<ol start="1">\n<li><span>Memiliki kemampuan serta keterampilan dalam membangun sebuah perangkat lunak berkualitas tinggi dengan mengikuti proses perekayasaan (<em>software development life cycle</em>) yang benar dilengkapi dengan dokumentasi yang baik.</span></li>\n<li><span>Memiliki inisiatif serta kreativitas dalam mengkaji ataupun menyelesaikan setiap kasus serta mengemasnya menjadi informasi yang komunikatif.</span></li>\n<li><span>Mampu mengikuti perkembangan teknologi, melaksanakan pekerjaan yang lebih kompleks dengan kemampuan analisis yang lebih tajam</span></li>\n<li><span>Memiliki kemampuan manajerial serta kemampuan untuk merencanakan, melaksanakan dan memecahkan masalah dengan mandiri</span></li>\n<li><span>Mempunyai <em>softskill</em> yang sesuai yaitu disiplin dan sikap kerja yang profesional.</span></li>\n</ol>\n<p><span>Kompetensi lulusan D-IV konsentrasi Rekayasa Perangkat Lunak yang rinci dibagi menjadi dua kompetensi, yaitu:</span></p>\n<ol>\n<li><span>Kompetensi domain pengetahuan Rekayasa Perangkat Lunak:</span>\n<ul>\n<li><span>Mampu mengidentifikasi kebutuhan perangkat lunak berdasarkan hasil analisis dan desain yang baik untuk sistem/aplikasi yang berskala besar.</span></li>\n<li><span>Mampu mengembangkan perangkat lunak dengan arahan dari arsitek perangkat lunak (<em>software architect</em>)</span></li>\n<li><span>Mampu mengaplikasikan kemampuan mumpuni dalam hal pengetahuan dan pengaplikasian rekayasa perangkat lunak dan memahami isu profesional yang penting sebagai dasar yang membentuk perilaku seorang <em>software engineer</em>.mempunyai kemampuan desain solusi yang sesuai untuk berbagai domain aplikasi menggunakan pendekatan rekayasa perangkat lunak dan mampu mengintegrasikan masalah etika, sosial, hukum, dan ekonomi.</span></li>\n</ul>\n</li>\n<li><span>Kompetensi manajerial, kepemimpinan, dan kewirausahaan</span>\n<ul>\n<li><span>mempunyai kemandirian yang lebih baik dari lulusan D3.</span></li>\n<li><span>mampu untuk bekerja secara individual maupun dalam tim untuk mengembangkan dan menghasilkan software dan artifaknya dengan kualitas yang baik.</span></li>\n<li><span>mempunyai kemampuan untuk menyelesaikan proyek dengan permasalahan yang ada, menemukan kompromi dengan keterbatasan biaya, waktu, pengetahuan, sistem yang berjalan dan organisasi.</span></li>\n<li><span>mampu menunjukkan pemahaman dan penghargaan akan pentingnya negosiasi, kebiasaan kerja yang efektif, kepemimpinan, dan komunikasi yang baik dengan stakeholder di suatu lingkungan pengembangan perangkat lunak tertentu.</span></li>\n<li><span>memiliki kemampuan untuk belajar model, teknik, dan teknologi yang baru dan menghargai perlunya pengembangan profesional yang berkelanjutan.</span></li>\n</ul>\n</li>\n</ol>', 'Ya', 1),
(2, 'Teknik Mesin / Mekatronika', 'Teknik Mesin / Mekatronika', '<p>Mempersiapkan lulusan untuk menjadi tenaga perekayasa yang bertanggung jawab dalam proses perancangan, pengembangan, aplikasi dan operasi dalam bidak telekomunikasi, sistem kontrol, proses signal digital dan sistem komputer.</p>\n<p>Target Lulusan :</p>\n<p>Mempunyai kompetensi untuk :</p>\n<ul  square;">\n<li>Menerapkan ilmu pengetahuan dasar dan prinsip rekayasa di bidang Teknik Elektro.</li>\n<li>Memformulasikan dan menganalisis permasalahan serta mengembangkan suatu sistem penyelesaian yang menerapkan Ilmu Pengetahuan dan Teknologi bidang Telekomunikasi dan Elektronika.</li>\n<li>Merancang sistem di bidang Telekomunikasi dan Elektronika.</li>\n<li>Menerapkan secara sistematis, tahapan-tahapan, metode-metode dan konsep-konsep yang diperlukan dalam bidang Teknik Elektro untuk tujuan mengatasi permasalahan di masyarakat dan dunia industri.</li>\n</ul>', 'Ya', 2),
(3, 'Teknik Kimia', 'Teknik Kimia', '<p>Mempersiapkan lulusan untuk menjadi tenaga perekayasa yang bertanggung jawab dalam proses perancangan, pengembangan, aplikasi dan operasi dalam bidak telekomunikasi, sistem kontrol, proses signal digital dan sistem komputer.</p>\r\n<p>Target Lulusan :</p>\r\n<p>Mempunyai kompetensi untuk :</p>\r\n<ul  square;">\r\n<li>Menerapkan ilmu pengetahuan dasar dan prinsip rekayasa di bidang Teknik Elektro.</li>\r\n<li>Memformulasikan dan menganalisis permasalahan serta mengembangkan suatu sistem penyelesaian yang menerapkan Ilmu Pengetahuan dan Teknologi bidang Telekomunikasi dan Elektronika.</li>\r\n<li>Merancang sistem di bidang Telekomunikasi dan Elektronika.</li>\r\n<li>Menerapkan secara sistematis, tahapan-tahapan, metode-metode dan konsep-konsep yang diperlukan dalam bidang Teknik Elektro untuk tujuan mengatasi permasalahan di masyarakat dan dunia industri.</li>\r\n</ul>', 'Ya', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE IF NOT EXISTS `tb_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL,
  `urutan` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id`, `link`, `judul`, `keterangan`, `aktif`, `urutan`) VALUES
(1, 'Brief History', 'Sejarah AKN', '<p align="justify">In 1945, a general assembly meeting of the Masjoemi (Majelis Sjoero Moeslimin Indonesia ) was held. The meeting was attended by some of the leading political figures of the day including Dr. Muhammad Hatta (the first Vice President of Indonesia), Mohammad Natsir, Mohammad Roem, and Wachid Hasyim. One of the decisions of this meeting was the establishment of Sekolah Tinggi Islam ( STI-Islamic Higher School ) by those leading figures, who became the institution`s founders. STI began operating on July 28, 1945 and developed into a university called Universitas Islam Indonesia (UII) on November 3, 1947 to respond to the growing demand for a higher education that integrates general knowledge with spiritual teachings.</p>\n<p align="justify">Initially, UII had four faculties: the Faculty of Religion, Faculty of Law, Faculty of Education, and Faculty of Economics, which began operations in June 1948. About seven months later, UII was forced to close due to the Dutch military invasion. Many students and staff members joined the Indonesian military force to repel the Dutch invasion. In the early 1950s, shortly after the war, UII had to move its classes from place to place around the city of Yogyakarta , even using part of the Sultan`s Palace and some of the faculty members` houses as classrooms.</p>\n<p align="justify">UII saw much improvement between 1961 &iquest; 1970 under the leadership of Prof. Mr. R.H.A. Kasmat Bahuwinangun (1960-1963) and Prof. Dr. Dr. Sardjito (1964-1970). During his term in office, Prof. Mr. R.H.A. Kasmat Bahuwinangun helped develop UII`s Faculty of Islamic Studies and Faculty of Tarbiyah as well as expanding to Purwokerto to establish the Faculty of Law and Syari`ah.</p>\n<p align="justify">From 1964 to 1970, under the leadership of Dr. Sardjito (a leading medical doctor in Indonesia ), UII expanded to encompass 22 faculties, five were located in Yogyakarta and the rest were scattered in three provinces: Central Java (Solo, Klaten, and Purwokerto); and West and North Sulawesi (Gorontalo). The areas of study offered were Economics, Law, Islamic Law (Syari`ah), Islamic Education (Tarbiyah), Engineering, Medicine, Veterinary Medicine, and Pharmacy. However, when government regulations prevented UII from maintaining educational activities outside Yogyakarta , UII had to close its branch campuses. Some of them became associated with local institutions, including the Faculty of Medicine, which was closed in 1975.</p>\n<p align="justify">In the early 1970s to 1982, UII saw extensive physical development of its offices and faculty buildings, beginning with the current central office on busy Cik di Tiro Street . This construction was then followed by the development of three other campuses located throughout the city. During this period, several of UII`s faculties started to acquire the accreditation status and also initiated collaboration with both national and international entities, including Gadjah Mada University , King Abdul Azis University of Saudi Arabia, and The Asia Foundation.</p>\n<p align="justify">Since the beginning of the 1990s until recently, UII has been developing the integrated campus located in Sleman regency, in the northern part of the province of Yogyakarta . Most of UII`s faculties and buildings will eventually be located on these 25 hectares of land. As of the first quarter in 2007, UII has 8 faculties with a wide range of programs to offer from diploma programs to doctorate programs to profession training programs as well as a system of supporting institutions.</p>', 'Ya', 0),
(2, 'Logo dan Artinya', 'Logo dan Artinya', '<img src="assets/img/container/logo-uii.jpg" alt="Logo UII" width="100" height="135" style="float: left; margin-right: 5px;" />Blue means determination or trustworthiness. It means that UII will create trusted and wise graduates.Yellowish gold means an expectation and a symbol of education. It means that UII will engender graduates expected by the nation who will maintain and spread knowledge through Islamic education.<br /><br />White means sincere, honest and persevering. It means that the graduates UII produces are those who are honest and loyal to the country and nation, and persistent and faithful to Allah the Almighty, in line with Islamic teachings and pleas.The meaning of the logo of the Islamic University of Indonesia is:The shield shape means endurance and resistence. It means that UII will sustain the name as one of the universities being able to produce good graduates.<br /><br />The middle shape distilir as a mosque dome.It symbolizes that Indonesia culture is in line with Islamic values.The five-petal flower can mean Pancasila, which can also mean the five pillars of Islam.The pistil forming a trisula.It symbolizes what so called Tri Dharma Perguruan Tinggi (the three basic goals of higher education).<br /><br />The tip of the trisula which looks like a pen is a symbol of education.The middle sepal is a picture of a book which is Al-Qur`an.The lowest part of the sepal is two crutches.These two crutches symbolize two Islamic creeds (syahadat). So, the symbols in the middle as a whole exemplify the goal of UII which is based on Islamic values and Pancasila.While, the shape of pyramidal ship is the door of a mosque below the petal is meant to be the Islamic culture.', 'Ya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sambutan`
--

CREATE TABLE IF NOT EXISTS `tb_sambutan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(120) NOT NULL,
  `link` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id`, `tanggal`, `judul`, `link`, `isi`, `gambar`) VALUES
(1, '2015-08-13 14:16:07', 'Rektor AKN Kajen', 'Arvin Nizar S. Kom M.Kom', 'Institut Teknologi Del (IT Del) merupakan pengembangan Politeknik Informatika Del (PI Del)yang didirikan pada tahun 2001 oleh Yayasan Del. Kampus IT Del sendiri sudah di resmikan oleh Presiden Republik Indonesia Dr. Susilo Bambang Yudhoyono pada tahun 2004. Hal ini menandakan bahwa keinginan Yayasan Del untuk mengembangkan PI Del menjadi Institut sudah lama. IT Del secara resmi berdiri bersamaan dengan keluarnya izin dari Kementerian Pendidikan dan Kebudayaan pada bulan Agustus 2013.\n\nPada awalnya PI Del mempunyai tiga Program Studi Diploma III yaitu Teknik Informatika, Manajemen Informatika, dan Teknik Komputer serta satu Program DIV Teknik Informatika. Seiring dengan perkembangan ilmu pengetahuan dan teknologi khususnya teknologi informasi dimana kebutuhan tenaga ahli dibidang ini terus meningkat dan adanya keinginan yayasan Del untuk lebih berkontribusi kepada bangsa melalui pendidikan, serta besarnya keinginan masyarakat untuk memperoleh pendidikan yang lebih tinggi maka yayasan Del mengembangkan PI Del menjadi IT Del.\nSesuai dengan SK Menteri Pendidikan dan Kebudayaan RI No.266/E/O/2013, tentang Penetapan Perubahan Bentuk PI Del menjadi IT Del, maka IT Del mempunyai 3 fakultas yaitu Fakultas Teknik Informatika dan Elektro, Fakultas Teknologi Industri, dan Fakultas Bioteknologi. Adapun Program Studi di samping DIII dan DIV yang sudah ada, akan dibuka secara bertahap Program Studi Sarjana yang meliputi Teknik Informatika, Teknik Elektro, Teknik Bioproses, dan Manajemen Rekayasa. Diharapkan pada tahun depan 2014 akan dibuka Program Studi Sarjana Teknik Informatika dan Manajemen Rekayasa, sementara Program Studi Sarjana Teknik Bioproses dan Reknik Elektro dapat dibuka pada tahun 2015.\n\nMeskipun dengan pengembangan ini yang pada gilirannya akan meningkatkan jumlah mahasiswa, namun komitmen kami untuk menyediakan pendidikan berkualitas tinggi tidak pernah berubah. Kualitas dan kuantitas tenaga dosen dan tenaga kependidikan senantiasa ditingkatkan melalui studi lanjut dan pelatihan. Berbagai fasilitas sarana dan prasarana yang berkaitan dengan peningkatan kualitas pendidikan dan penelitian akan dibangun.\n\nKualitas pengajaran dan penelitian dosen ditingkatkan melalui kerjasama yang sudah dilakukan baik dengan institusi pendidikan maupun dengan industri. Pusat pusat penelitian akan didirikan sehingga diharapkan dapat menjadi tempat dosen untuk merealisasikan kepakarannya sehingga memberikan kontribusi yang signifikan kepada masyarakat.\nAkhir kata kami mengucapkan terimakasih banyak kepada orang tua mahasiswa yang telah mempercayakan institusi ini sebagai tempat untuk menimba ilmu bagi putra-putrinya. Kami akan selalu menjaga kepercayaan ini sebaik baiknya.\n\nRektor Institut Teknologi Del,\n\nProf. Dr. Roberd Saragih, MT.', 'c2x.jpg'),
(2, '2015-08-14 01:07:10', 'Pendiri dan Pembina AKN', 'Andi Derris S.E M.E', 'Pekerjaan rumah yang mendesak bagi Indonesia saat ini adalah menyiapkan generasi baru, generasi manusia Indonesia yang siap menghadapi persaingan global. Generasi baru yang  dimaksud adalah generasi yang memiliki akhlak mulia, beriman teguh, kreatif dan inovatif, mempunyai semangat juang dan berpendidikan. Atau dengan motto yang selalu kita pakai di kampus ini yaitu ‘marTuhan, marroha, marbisuk” yang artinya  berTuhan, berhati nurani, bijaksana.\n\nBerdasarkan latar belakang ini, saya berinisiatif membangun sebuah Sekolah Politeknik (PoIiteknik Informatika Del) di tepi Danau Toba sejak tahun 2001. Sekolah ini dibangun di sebuah desa kecil, Sitoluama, Laguboti, Kabupaten Toba Samosir, Sumatera Utara, persis di tepi Danau Toba. Desa yang berjarak lebih dari 200 km dari kota Medan atau 10 km dari Balige, berpenduduk 200.000 jiwa dengan pendapatan per kapita Rp 1.000.000.\n\nBukan tanpa maksud sekolah ini dibangun di daerah terpencil. Visi saya tidak hanya untuk memberikan sumbangsih terbaik untuk memperkuat daya saing bangsa dalam bidang teknologi informasi, bioteknologi dan bisnis, tetapi juga untuk mewujudkan kesejahteraan masyarakat sekitar. Saya percaya bahwa pemerataan di bidang ekonomi dimulai dari pemerataan di bidang pendidikan.\n\nSaya bersyukur bahwa dalam 12 tahun berjalan, dedikasi dan kerja keras seluruh civitas akademik membuahkan prestasi menggembirakan. Saat ini Politeknik Informatika Del (PI Del) telah dikembangkan secara kelembagaan dan berganti nama menjadi Institut Teknologi Del (IT Del). Sesuai dengan nama baru yang dipakai, kami telah memperluas cakupan bidang pendidikan di bidang bioteknologi dan bisnis. Fasilitas pendukung pun terus kami kembangkan, termasuk 10 Ha lahan yang telah disiapkan untuk menunjang pendidikan di bidang pertanian dan peternakan.\n\nDengan semangat yang terus diperbaharui, saya mengucapkan terima kasih kepada seluruh civitas akademik IT Del dan masyarakat Indonesia yang memberikan kepercayaan kepada kampus ini. Menciptakan alumni yang berkualitas dan berkompeten bukan satu-satunya cita-cita kami. Yang paling penting bagi kami adalah tegaknya kepentingan nasional dalam persaingan global.\n\nSaya berharap website ini merupakan pintu masuk ke dunia maya, menjadi media untuk menunjukkan eksistensi IT Del sekaligus menghubungkan kita dengan dunia luar.\n\n \n\nViva Institut Teknologi Del', 'bupati-pekalongan-amat-antono.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE IF NOT EXISTS `tb_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(120) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(1, '2015-08-13 14:16:07', 'Kampus Sementara AKN Kajen', '<strong>PEKALONGAN</strong>&nbsp;&ndash; Nasib apes menimpa Nurohmah (37), warga Dekoro, Kelurahan Setono, Kecamatan Pekalongan Timur, Kota Pekalongan, kemarin. Uang dalam rekening tabungannya sebesar Rp2.799.775 raib ke rekening pelaku penipuan bermodus call center palsu sebuah bank. Kepada polisi, korban yang merupakan ibu rumah tangga itu melaporkan bahwa peristiwa tersebut ia alami sekira pukul 07.30 WIB.&nbsp;<br /><br />Berawal ketika dirinya akan melakukan transaksi di counter ATM sebuah bank dikompleks Pasar Grosir Setono, Jalan Dr Sutomo, Pekalongan Timur. &acirc;&euro;&oelig;Ternyata ATMnya bermasalah, tidak bisa untuk bertransaksi,&acirc;&euro; katanya kepada polisi. Selanjutnya, Nurohmah segera menelpon nomor call center yang terpasang di konter ATM tersebut. Ia tak menyadari kalau ternyata nomor tersebut adalah palsu. Korban menceritakan permasalahan yang dialami, dan dijawab bahwa permasalahan tersebut akan ditangani segera. Sesaat kemudian, Nurohmah mendapat telepon dari orang tak dikenal, mengaku sebagai petugas bank.&nbsp;<br /><br />Melalui sambungan telepon, orang tersebut mengarahkan korban untuk kembali ke ATM tadi dan melakukan edit ulang data korban supaya ATM korban bisa digunakan lagi. Korban diarahkan memencet angka-angka dan tombol tertentu di mesin ATM tersebut. Ternyata, tanpa disadari, korban telah melakukan transfer uang dari rekeningnya ke nomor rekening tertentu. Korban baru menyadari telah menjadi korban penipuan setelah melihat saldo tabungannya berkurang. Korban ternyata telah mentransfer uang sebesar Rp2.779.775 ke nomor rekening yang diarahkan pelaku. Akibat kejadian itu, korban melaporkan kasus penipuan yang dialaminya ke Satreskrim Polres Pekalongan Kota. Kasus ini masih dalam penyelidikan lebih lanjut oleh pihak kepolisian. (way)', 'kampussementara-edit.jpg'),
(2, '2015-08-14 01:07:10', 'Bupati Launch AKN Kajen', '<strong arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" jakarta="" strong="" span="">Jakarta -</strong>Pemerintah dan Badan Tenaga Nuklir Nasional (BATAN) saat ini sedang membangun reaktor nuklir terbaru atau yang ke-4 di Serpong, Banten. Nantinya reaktor yang ditargetkan selesai dan beroperasi 2019 tersebut juga akan menggunakan bahan bakar thorium (nuklir hijau).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Nantinya reaktor kita yang baru dalam program Reaktor Daya Eksperimental (RDE) kapasitas 30 mega watt (MW) juga menggunakan thorium, jadi rektor ini bisa uranium juga thorium," ungkap Kepala BATAN Djarot Sulistio Wisnubroto, kepada&nbsp;</span>, Selasa (11/8/2015).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" strong="" /><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />Djarot mengatakan, salah satu alasan mengapa BATAN juga mengembangkan thorium, karena cadangan thorium di Indonesia jauh lebih banyak dibandingkan uranium.<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Cadangan Thorium di Indonesia mencapai 70.000 ton, atau 4 kali lebih banyak daripada cadangan uranium kita," ungkapnya.</span><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" ia="" mengakui="" penggunaan="" thorium="" untuk="" listrik="" jauh="" lebih="" aman="" dibandingkan="" dengan="" menggunakan="" uranium="" span="" br=""><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />"Walau sama-sama mengandung radiasi, thorium memang jauh lebih aman daripada uranium. Karena thorium tidak bisa digunakan jadi senjata seperti uranium," tutup Djarot.</span>', 'bupatilaunchingAKN-edit.jpg'),
(3, '2015-08-14 01:07:10', 'Pelantikan Mahasiswa Baru TA 2014/2015', '<strong arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" jakarta="" strong="" span="">Jakarta -</strong>Pemerintah dan Badan Tenaga Nuklir Nasional (BATAN) saat ini sedang membangun reaktor nuklir terbaru atau yang ke-4 di Serpong, Banten. Nantinya reaktor yang ditargetkan selesai dan beroperasi 2019 tersebut juga akan menggunakan bahan bakar thorium (nuklir hijau).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Nantinya reaktor kita yang baru dalam program Reaktor Daya Eksperimental (RDE) kapasitas 30 mega watt (MW) juga menggunakan thorium, jadi rektor ini bisa uranium juga thorium," ungkap Kepala BATAN Djarot Sulistio Wisnubroto, kepada&nbsp;</span>, Selasa (11/8/2015).<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" strong="" /><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />Djarot mengatakan, salah satu alasan mengapa BATAN juga mengembangkan thorium, karena cadangan thorium di Indonesia jauh lebih banyak dibandingkan uranium.<br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="">"Cadangan Thorium di Indonesia mencapai 70.000 ton, atau 4 kali lebih banyak daripada cadangan uranium kita," ungkapnya.</span><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" br="" /><span arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" ia="" mengakui="" penggunaan="" thorium="" untuk="" listrik="" jauh="" lebih="" aman="" dibandingkan="" dengan="" menggunakan="" uranium="" span="" br=""><br arial="" helvetica="" sans-serif="" font-size:="" 13px="" line-height:="" 18="" 2000007629395px="" span="" />"Walau sama-sama mengandung radiasi, thorium memang jauh lebih aman daripada uranium. Karena thorium tidak bisa digunakan jadi senjata seperti uranium," tutup Djarot.</span>', 'pelantikanolehbupati-edit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_user_group` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `id_user_group` (`id_user_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `username`, `password`, `id_user_group`) VALUES
(1, 'Axel Fabianski', 'axel', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_journal`
--
ALTER TABLE `tb_journal`
  ADD CONSTRAINT `tb_journal_ibfk_1` FOREIGN KEY (`id_journal_category`) REFERENCES `tb_journal_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
