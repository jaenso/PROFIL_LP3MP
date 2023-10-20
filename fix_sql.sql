/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.28-MariaDB : Database - lp3mp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lp3mp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `lp3mp`;

/*Table structure for table `dok_lp3mp` */

DROP TABLE IF EXISTS `dok_lp3mp`;

CREATE TABLE `dok_lp3mp` (
  `id_dok` int(4) NOT NULL AUTO_INCREMENT,
  `nama` text DEFAULT NULL,
  `format` varchar(128) DEFAULT NULL,
  `link` text DEFAULT NULL,
  PRIMARY KEY (`id_dok`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `dok_lp3mp` */

insert  into `dok_lp3mp`(`id_dok`,`nama`,`format`,`link`) values 
(2,'Buku Panduan AMI SPMI','pdf.png','https://drive.google.com/file/d/1OI8y4g82jyfEt_UJPnO3VPUevx3wh23z/view?usp=share_link'),
(4,'Buku Panduan SKPL-UPR (Survei Kepuasan Pengguna Layanan)','pdf.png','https://drive.google.com/file/d/1_RX51BmHUA2VX3Lw5QcOq1azF5iIbrpo/view?usp=share_link'),
(5,'PANDUAN KURIKULUM PENDUKUNG MBKM UPR 2022','pdf.png','https://drive.google.com/file/d/1nWjRsu--X-7A2EsvYZ0Y2UPCzK58sev4/view?usp=share_link'),
(6,'Panduan Penyusunan Kurikulum Pendidikan Tinggi','pdf.png','https://drive.google.com/file/d/1Mh-p7DUabF8MRi9ifRvgWxR9TUTKQ6TR/view?usp=share_link'),
(7,'Panduan Umum Ekuivalensi Mata Kuliah dan Konversi Nilai','pdf.png','https://drive.google.com/file/d/10ClP9Mjnbjn-GAl_7IeSTI7yRzWBBdYq/view?usp=share_link'),
(8,'Profil LP3MP UPR 3 Agustus 2023 Rollis','pdf.png','https://drive.google.com/file/d/115u-uywbbt2ooMOoaoLD13OWQPhyBPxF/view?usp=share_link');

/*Table structure for table `dok_sertifikat` */

DROP TABLE IF EXISTS `dok_sertifikat`;

CREATE TABLE `dok_sertifikat` (
  `id_dok` int(4) NOT NULL AUTO_INCREMENT,
  `p_studi` varchar(256) DEFAULT NULL,
  `strata` varchar(128) DEFAULT NULL,
  `no_sk` varchar(256) DEFAULT NULL,
  `peringkat` varchar(128) DEFAULT NULL,
  `tgl_kadaluarsa` varchar(128) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `fakultas` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_dok`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `dok_sertifikat` */

insert  into `dok_sertifikat`(`id_dok`,`p_studi`,`strata`,`no_sk`,`peringkat`,`tgl_kadaluarsa`,`status`,`link`,`keterangan`,`fakultas`) values 
(58,'Agribisnis','S1','8907/SK/BAN-PT/Ak-PPJ/S/VI/2021','B','11/Jun/2026','Masih Berlaku','https://drive.google.com/file/d/1FCgMg2_xZf1MKx8yNypqdyfiWZ-OWly8/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FAPERTA'),
(59,'Agroteknologi','S1','217/SK/BAN-PT/Akred/S/I/2021','B','30/Dec/2025','Masih Berlaku','https://drive.google.com/file/d/1JlCjr8vWTOG08n7JzcYOjEw9ekcRQ7mf/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FAPERTA'),
(60,'Budidaya Perairan','S1','3491/SK/BAN-PT/Akred-PMT/S/VI/2022','Baik Sekali','7/Jun/2027','Masih Berlaku','https://drive.google.com/file/d/1rFLJOkdHDrYAQgGXbS1QTnl6eKbci_hc/view?usp=share_link','BAN-PT : IPEPA (Standar 9)','FAPERTA'),
(61,'Kehutanan','S2','Belum Terakreditasi',NULL,NULL,NULL,NULL,NULL,'PASCASARJANA'),
(62,'Manajemen Sumber Daya Perairan','S1','10233/SK/BAN-PT/Ak-PPJ/S/VIII/2021','B','19/Aug/2026','Masih Berlaku','https://drive.google.com/file/d/1E-uW6eFQasapXZOLxjrNmzUNT8IAJ5fR/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FAPERTA'),
(63,'Peternakan','S1','3281/SK/BAN-PT/Akred/S/XII/2018','B','12/Dec/2023','Masih Berlaku','https://drive.google.com/file/d/12kp6L1LBYVkIFF0TLG5xeEtIG6XrGuiU/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7) Telah Lolos Pemantauan Akreditasi Tahap 1','FAPERTA'),
(64,'Teknologi Hasil Perikanan','S1','2266/SK/BAN-PT/Akred/S/VII/2019','B','9/Jul/2024','Masih Berlaku','https://drive.google.com/file/d/15wJFw_lE30TtmL-evGGpsrDZkJBNX5-4/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7) Telah Lolos Pemantauan Akreditasi Tahap 1','FAPERTA'),
(65,'Teknologi Industri Pertanian','S1','6501/SK/BAN-PT/Ak.KP/S/IX/2022','Baik','18/Aug/2025','Masih Berlaku','https://drive.google.com/file/d/1M81lcCsmRxq3z2wNyphKsY402LfwtgV_/view?usp=share_link','BAN-PT : ISK','FAPERTA'),
(66,'Akuntansi','S2','Belum Terakreditasi',NULL,NULL,NULL,NULL,'Prodi Baru','FEB'),
(67,'Ekonomi Pembangunan','S1','6771/SK/BAN-PT/Akred/S/X/2020','Baik Sekali','27/10/2025','Masih Berlaku','https://drive.google.com/file/d/11zXwDRRJwaJ1XJM2LP3e9tE-spriJ5fY/view?usp=share_link','BAN-PT : Reakreditasi (Standar 9)','FEB'),
(68,'Manajemen','S2','497/DE/A.5/AR.10/VI/2023','Baik Sekali','23/Jun/2028','Masih Berlaku','https://drive.google.com/file/d/1HOp_yaBkCjRugsfTjFYl2ILqdl2BaUmb/view?usp=drive_link','LAMEMBA : Reakredditasi (Standar 9)','FEB'),
(69,'Ilmu Ekonomi','S2','1023/SK/BAN-PT/Ak-PPJ/M/II/2021','B','19/02/2026','Masih Berlaku','https://drive.google.com/file/d/1igzloZ9OAWu9MD3tmmb5piZzeVsmbbQS/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FEB'),
(70,'Ilmu Manajemen','S3','Belum Terakreditasi',NULL,NULL,NULL,NULL,'Prodi Baru','FEB'),
(71,'Ilmu Hukum','S2','6506/SK/BAN-PT/Ak.KP/M/IX/2022','Baik','12/Jan/2026','Masih Berlaku','https://drive.google.com/file/d/134npXLQbJVmi350j1DMBV2pgW3B_MLcz/view?usp=share_link','BAN-PT : ISK','FH'),
(72,'Ilmu Administrasi Negara','S1','3191/SK/BAN-PT/Akred/S/VIII/2019','A','27/Aug/2024','Masih Berlaku','https://drive.google.com/file/d/1PmPQSwzj4djtI9bshKUvGj7T7cqWomHM/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','FISIP'),
(73,'Ilmu Pemerintahan','S1','5134/SK/BAN-PT/Akred/S/IX/2020','A','1/Sep/2025','Masih Berlaku','https://drive.google.com/file/d/1Pa0yh2poVYF9M1ACzMoY3ILTFfE5xWkf/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','FISIP'),
(74,'Sosiologi','S1','2986/SK/BAN-PT/Akred/S/VIII/2019','B','13/Aug/2024','Masih Berlaku','https://drive.google.com/file/d/1dPfq8LHiwGZDpt5-YNPAzrTNcWsFaOZE/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','FISIP'),
(75,'Dokter','Profesi','0423/LAM-PTKes/Akr/Pro/VIII/2019','B','24/Aug/2024','Masih Berlaku','https://drive.google.com/file/d/1WVslXtzq1OZmsVHRd8YKmmk7MUwfyW9Z/view?usp=share_link','LAM-PTKes : Reakreditasi (Standar 7)','FK'),
(76,'Kedokteran','S1','0422/LAM-PTKes/Akr/Sar/VIII/2019','B','24/Aug/2024','Masih Berlaku','https://drive.google.com/file/d/1jNVlx-BuviqNsk63zO1ylV1wYEAMkW4-/view?usp=share_link','LAM-PTKes : Reakreditasi (Standar 7)','FK'),
(77,'Teknologi Laboratorium Medis','D4','Belum Terakreditasi',NULL,NULL,NULL,NULL,'Prodi Baru','FK'),
(78,'PPG','Profesi','451/SK/LAMDIK/Ak/P/IV/2023','Baik Sekali','6/Sep/2027','Masih Berlaku','https://drive.google.com/file/d/1VApzCLZv5ukZTGqVWXFA0QH3fs284u2x/view?usp=share_link','LAMDIK : Reakreditasi (Standar 9)','FKIP'),
(79,'Bimbingan Dan Konseling','S1','13881/SK/BAN-PT/Ak-PPJ/S/XII/2021','B','11/Jan/2027','Masih Berlaku','https://drive.google.com/file/d/1iSPrgRTn7ygw1WS5UjpyZaIMD3rcR5LO/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FKIP'),
(80,'Manajemen Pendidikan','S1','5374/SK/BAN-PT/Ak-PPJ/S/IX/2020','B','4/Sep/2025','Masih Berlaku','https://drive.google.com/file/d/1nsHesqJLsvIZwYRaYw-KpN1mkShZVYqL/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FKIP'),
(81,'Pendidikan Bahasa Dan Sastra Indonesia','S1','1973/SK/BAN-PT/Ak-PPJ/S/III/2020','B','29/Mar/2025','Masih Berlaku','https://drive.google.com/file/d/1ZkbXHz-yR0GZkbi4gcURHgvMmJMBDcgG/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FKIP'),
(82,'Pendidikan Bahasa Inggris','S2','797/SK/BAN-PT/Akred/M/IV/2019','B','9/Apr/2024','Masih Berlaku','https://drive.google.com/file/d/19qs_-hEDSjWXAJ9E-ZgNw4freYjfkS3_/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','PASCASARJANA'),
(83,'Pendidikan Biologi','S2','1145/SK/BAN-PT/Ak.KP/M/III/2023','Baik Sekali','23/Apr/2024','Masih Berlaku','https://drive.google.com/file/d/12ZDpwmh9zJx3Qs1wt_cogBQSGcfYXm1z/view?usp=share_link','BAN-PT : ISK','PASCASARJANA'),
(84,'Pendidikan Ekonomi','S2','515/SK/LAMDIK/Ak/M/VI/2023','Baik','28/Nov/2027','Masih Berlaku','https://drive.google.com/file/d/1UILTI0ssXbpQ3NBsVsO-eghBxZb49OaB/view?usp=drive_link','LAMDIK : Reakreditasi (Standar 9)','PASCASARJANA'),
(85,'Pendidikan Fisika','S1','4422/SK/BAN-PT/Ak-PPJ/S/VIII/2020','B','2/Aug/2025','Masih Berlaku','https://drive.google.com/file/d/1VdBMpgW1bwD2exYFE46pncPmTTxDoDyi/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FKIP'),
(86,'Pendidikan Guru Pendidikan Anak Usia Dini','S1','575/SK/BAN-PT/Ak/S/II/2023','Baik Sekali','22/Feb/2028','Masih Berlaku','https://drive.google.com/file/d/1_0tXfvlXTnzaAYeF_95tjHVR_csVsYQG/view?usp=share_link','BAN-PT : Reakreditasi (Standar 9)','FKIP'),
(87,'Pendidikan Guru Sekolah Dasar','S1','1163/SK/BAN-PT/Akred-PMT/S/II/2022','Baik Sekali','22/Feb/2027','Masih Berlaku','https://drive.google.com/file/d/1cBB2Mc_m-tjH3IV2hQZ0KxNY479I-Kg5/view?usp=share_link','BAN-PT : Reakreditasi (Standar 9)','FKIP'),
(88,'Pendidikan Jasmani, Kesehatan Dan Rekreasi','S1','6501/SK/BAN-PT/Akred/S/X/2020','B','14/10/2025','Masih Berlaku','https://drive.google.com/file/d/1cGZ8pTFMsxfS92oWylc0PgMsLTRZp3VM/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','FKIP'),
(89,'Pendidikan Kimia','S2','9705/SK/BAN-PT/Akred/M/VII/2021','Baik Sekali','21/Jul/2026','Masih Berlaku','https://drive.google.com/file/d/1LOunR7LWVA76FW1kqWtzNPWYAIwennwJ/view?usp=share_link','BAN-PT : Reakreditasi (Standar 9)','PASCASARJANA'),
(90,'Pendidikan Luar Sekolah','S2','725/SK/BAN-PT/Akred/M/II/2021','Baik Sekali','9/Feb/2026','Masih Berlaku','https://drive.google.com/file/d/1_-Wjxvy80b7kJGixoa12ZxNtQnrt9WFl/view?usp=share_link','BAN-PT : Reakreditasi (Standar 9)','PASCASARJANA'),
(91,'Pendidikan Matematika','S1','789/SK/LAMDIK/Ak/S/VII/2023','Baik Sekali','17/Jul/2028','Masih Berlaku','https://drive.google.com/file/d/1uLNmmOqgcUt-UVTMX_-9GjxymxOhxIO2/view?usp=drive_link','LAMDIK : Reakreditasi (Standar 9)','FKIP'),
(92,'Pendidikan Pancasila Dan Kewarganegaraan','S1','2414/SK/BAN-PT/Ak-PPJ/S/IV/2020','B','11/Apr/2025','Masih Berlaku','https://drive.google.com/file/d/1Q6_HJMDoJ_z0ikRQjrkCi7fqDp7FGZPk/view?usp=share_link','BAN-PT : Perpanjangan (Standar 7)','FKIP'),
(93,'Pendidikan Seni Drama Tari Dan Musik','S1','7093/SK/BAN-PT/Akred/S/XI/2020','B','4/Nov/2025','Masih Berlaku','https://drive.google.com/file/d/1_IRM8LQmR51hBP7KU_-TjO15g6GAnSdk/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','FKIP'),
(94,'Pendidikan Teknik Bangunan','S1','3460/SK/BAN-PT/Akred/S/VI/2022','Baik Sekali','7/Jun/2027','Masih Berlaku','https://drive.google.com/file/d/1ZxxLwEzv9XIlqp85a-e87jP4CEsGyG0z/view?usp=share_link','BAN-PT : Reakreditasi (Standar 9)','FKIP'),
(95,'Pendidikan Teknik Mesin','S1','466/SK/LAMDIK/Ak/S/X/2022','Baik Sekali','31/Oct/2027','Masih Berlaku','https://drive.google.com/file/d/1puGygXj3g25ImHH40dP1T7845sHdlza_/view?usp=share_link','LAMDIK : Reakreditasi (Standar 9)','FKIP'),
(96,'Teknologi Pendidikan','S1','771/SK/LAMDIK/Ak/s/VII/2023','Baik Sekali','6/Jun/2028','Masih Berlaku','https://drive.google.com/file/d/13c7lgm5ky2t48mbxLCC4Lp9jXL7fgUZw/view?usp=drive_link','LAMDIK : Reakreditasi (Standar 9)','FKIP'),
(97,'Biologi','S1','3015/SK/BAN-PT/Akred/S/V/2021','Baik','18/May/2026','Masih Berlaku','https://drive.google.com/file/d/1Sr56myiHtyr3FEPwE5qIvUA8VDCRvnmz/view?usp=share_link','BAN-PT : Akreditasi Pertama (Standar 9)','FMIPA'),
(98,'Fisika','S1','2272/SK/BAN-PT/Akred/S/IV/2021','Baik','20/Apr/2026','Masih Berlaku','https://drive.google.com/file/d/10OJMX15zKrFaKv1k4k0PLBSJUpxkGLbZ/view?usp=share_link','BAN-PT : Akreditasi Pertama (Standar 9)','FMIPA'),
(99,'Kimia','S1','2667/SK/BAN-PT/Akred/S/V/20214/5','Baik','4/May/2026','Masih Berlaku','https://drive.google.com/file/d/1gBwVQGuaZiKwpN_Gd1BfZARQ5_JFvd-K/view?usp=share_link','BAN-PT : Akreditasi Pertama (Standar 9)','FMIPA'),
(100,'Matematika','S1','Belum Terakreditasi',NULL,NULL,NULL,'-','Prodi Baru','FMIPA'),
(101,'Farmasi','S1','Belum Terakreditasi',NULL,NULL,NULL,'-','Prodi Baru','FMIPA'),
(102,'Arsitektur','S1','956/SK/BAN-PT/Akred/S/IV/2019','B','16/Apr/2024','Masih Berlaku','https://drive.google.com/file/d/15otBldP23s-v5ErwEa-KBop_cr-nBUt0/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7) Telah Lolos Pemantauan Akreditasi Tahap 1','FT'),
(103,'Teknik Informatika','S1','1627/SK/BAN-PT/Akred/S/V/2019','B','21/May/2024','Masih Berlaku','https://drive.google.com/file/d/1mGUktYvhI--UQpolZIrH3xT24q4GyOxH/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','FT'),
(104,'Teknik Pertambangan','S1','1197/SK/BAN-PT/Akred/S/IV/2019','B','23/Apr/2024','Masih Berlaku','https://drive.google.com/file/d/1hOtnmzzdf3N6ux75PcvlbFGeV7onamfE/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','FT'),
(105,'Teknik Sipil','S1','2605/SK/BAN-PT/AK-ISK/S/IV/2022','Baik Sekali','30/Sep/2026','Masih Berlaku','https://drive.google.com/file/d/1kaS6jrtYptdqbEfiGP9GJbevEl6P3ytR/view?usp=share_link','BAN-PT : ISK','FT'),
(106,'Pendidikan Dasar','S2','4589/SK/BAN-PT/Ak/M/VII/2022','Baik Sekali','19/Jul/2027','Masih Berlaku','https://drive.google.com/file/d/1-MiFSJYGWQhemRPPQpfbiQ7rp5_ry6IA/view?usp=share_link','BAN-PT : Reakreditasi (Standar 9)','PASCASARJANA'),
(107,'Pendidikan Ilmu Pengetahuan Sosial','S2','765/SK/LAMDIK/Ak/M/VII/2023','Baik','17/Oct/2027','Masih Berlaku','https://drive.google.com/file/d/1s2HbwwDGztSvha9Z0Un8F36iuBanSs4-/view?usp=drive_link','LAMDIK : Reakreditasi (Standar 9)','PASCASARJANA'),
(108,'Pengelolaan Sumberdaya Alam Dan Lingkungan','S2','3893/SK/BAN-PT/Ak.Ppj/M/IX/2023','Baik Sekali','15/Nov/2027','Masih Berlaku','https://drive.google.com/file/d/1U2FkOYBBHYfzIBeRtB9sEZyCqdzWYsNF/view?usp=sharing','BAN-PT : Reakreditasi (Standar 9)','PASCASARJANA'),
(109,'Perencanaan Wilayah Dan Kota','S2','Belum Terakreditasi',NULL,NULL,NULL,'-','Prodi Baru','PASCASARJANA'),
(110,'Ilmu Lingkungan','S3','4915/SK/BAN-PT/Akred/D/VIII/2020','B','25/Aug/2025','Masih Berlaku','https://drive.google.com/file/d/18GZima2wj7M981BRkoCaBm_9OMkhSGNg/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','PASCASARJANA');

/*Table structure for table `informasi` */

DROP TABLE IF EXISTS `informasi`;

CREATE TABLE `informasi` (
  `id_informasi` int(4) NOT NULL AUTO_INCREMENT,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id_kategori` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_informasi`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `informasi` */

insert  into `informasi`(`id_informasi`,`judul`,`isi`,`id_kategori`) values 
(5,'VISI','<p>Untuk menjamin proses pencapaian mutu universitas dalam hal pengembangan pembelajaran dan Penjaminan mutu pendidikan agar berjalan dengan baik, maka perlu pembentukan pusat-pusat pada LP3MP dengan Surat Keputusan Rektor Universitas Palangka Raya.</p>',7),
(7,'SEJARAH','<p>Bertolak dari komitmen Pemerintah dan Universitas Palangka Raya untuk peningkatan mutu berkelanjutan dan menghasilkan lulusan yang memiliki kompetensi yang tinggi maka pada tahun 2006 dibentuklah Badan Penjaminan Mutu Universitas Palangka Raya. Pengelola unit ini didukung oleh tenaga akademik yang berasal dari semua fakultas di lingkungan Universitas Palangka Raya.</p><p>Sejarah perkembangan Universitas Palangka Raya untuk terus melaksanakan peningkatan kualitas pendidikan, dan sesuai amanat Undang-Undang Republik Indonesia Nomor 12 Tahun 2012 tentang Pendidikan Tinggi yang menyatakan bahwa Kurikulum Pendidikan Tinggi (KPT) merupakan pedoman penyelenggaraan kegiatan pembelajaran untuk mencapai tujuan Pendidikan tinggi dan penjaminan mutu (quality assurance) Pendidikan melalui Sistem Penjaminan Mutu Internal (SPMI) bagi seluruh Perguruan Tinggi, maka pada tahun 2015 dibentuk Lembaga Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan (LP3MP) Universitas Palangka Raya (UPR) Berdasarkan Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia Nomor 47 Tahun 2015 tentang Organisasi dan Tata Kerja Universitas Palangka Raya Pasal 81 Lembaga Pengembangan Pembelajaran dan Penjamin Mutu Pendidikan Sebagaimana di maksud dalam Pasal 71 hurup b mempunyai tugas melaksanakan koordinasi pelaksanaan, pemantauan dan evaluasi kegiatan peningkatan dan pengembangan pembelajaran dan penjaminan mutu pendidikan. Agar kegiatan bisa berjalan dengan baik, diperlukan perencanaan dan rincian tugas yang jelas. </p><p>Dalam melaksanakan tugas sebagaimana di maksud dalam pasal 81, Lembaga Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p><ol><li>menyusun rencana program dan anggaran Lembaga;</li><li>perlaksanaan peningkatan dan pelaksanaan pembelajaran;</li><li>pelaksanaan pengembangan sytem penjamin mutu<br>Pendidikan;</li><li>koordinasi pelaksanaan kegiatan peningkatan<br>pembelajaran, pengembangan pembelajaran, dan<br>penjamin mutu Pendidikan;</li><li>pemantauan dan evaluasi peningkatan pembelajaran<br>pengembangan pembelajaran dan penjamin mutu<br>Pendidikan; dan</li><li>pelaksanaan urusan administrasi lembaga.</li></ol><p>Untuk menjamin proses pencapaian mutu universitas dalam hal pengembangan pembelajaran dan Penjaminan mutu pendidikan agar berjalan dengan baik, maka perlu pembentukan pusat-pusat pada LP3MP dengan Surat Keputusan Rektor Universitas Palangka Raya.</p>',3),
(9,'STUDI PUSAT','<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolorum odit ducimus officia sunt in tempore! Consectetur magni dolores ratione nulla iure impedit natus molestiae, aspernatur sunt dolore aliquid illo debitis unde iusto qui fugiat commodi similique, laborum aperiam doloribus reprehenderit accusantium! Molestiae enim error, iure iste amet, perspiciatis id cumque at cum vel, tempore aliquam? Tenetur omnis beatae sit.</strong></p><p> </p><p><i><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolorum odit ducimus officia sunt in tempore! Consectetur magni dolores ratione nulla iure impedit natus molestiae, aspernatur sunt dolore aliquid illo debitis unde iusto qui fugiat commodi similique, laborum aperiam doloribus reprehenderit accusantium! Molestiae enim error, iure iste amet, perspiciatis id cumque at cum vel, tempore aliquam? Tenetur omnis beatae sit.</strong></i></p><p> </p><p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolorum odit ducimus officia sunt in tempore! Consectetur magni dolores ratione nulla iure impedit natus molestiae, aspernatur sunt dolore aliquid illo debitis unde iusto qui fugiat commodi similique, laborum aperiam doloribus reprehenderit accusantium! Molestiae enim error, iure iste amet, perspiciatis id cumque at cum vel, tempore aliquam? Tenetur omnis beatae sit.</i></p><p> </p><p><a href=\"https://www.youtube.com/watch?v=geGJAesPJB0&t=332s\"><i>https://www.youtube.com/watch?v=geGJAesPJB0&t=332s</i></a></p>',5),
(15,'MISI','<p>Membangun dan mengembangkan sistem informasi pembelajaran dan penjaminan mutu, berbasis ICT menuju efisiensi dan professional</p><ol><li>Melaksanakan penjaminan mutu bidang akademik,<br>penelitian dan pengabdian kepada masyarakat<br>minimal sesuai dengan Standar Nasional Pendidikan<br>Tinggi dan kebutuhan masyarakat kini dan akan<br>datang.</li><li>Memberikan dukungan dan melakukan Monitoring terhadap layanan pendidikan yang berkualitas</li><li>Menyelenggarakan sistem penjaminan mutu internal secara profesional, optimal, transparan, akuntabel dan berkelanjutan.</li><li>Meningkatkan upaya perbaikan mutu berkelanjutan melalui Audit Mutu Internal secara efisien dan efektif.</li><li>Meningkatkan kualitas Akreditasi Perguruan Tinggi dan Program Studi.</li><li>Mendorong Sinergitas Institusional yang berorientasi pada pencapaian standart Mutu</li></ol>',8),
(17,'Pusat Studi','<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolorum odit ducimus officia sunt in tempore! Consectetur magni dolores ratione nulla iure impedit natus molestiae, aspernatur sunt dolore aliquid illo debitis unde iusto qui fugiat commodi similique, laborum aperiam doloribus reprehenderit accusantium! Molestiae enim error, iure iste amet, perspiciatis id cumque at cum vel, tempore aliquam? Tenetur omnis beatae sit.</strong></p><p> </p><p><a href=\"https://www.youtube.com/watch?v=geGJAesPJB0&t=332s\"><i>https://www.youtube.com/watch?v=geGJAesPJB0&t=332s</i></a></p>',6),
(18,'TUJUAN','<ol><li>Meningkatkan kualitas pembelajaran di Universitas Palangka Raya melalui pengembangan kurikulum, bahan ajar, dan e-learning yang didukung sistem teknologi informasi dan komunikasi.</li><li>Meningkatkan dan menstandardisasikan kurikulum, rencana pembelajaran, proses belajar mengajar, dan evaluasi pembelajaran dengan mengacu pada KKNI dan SN DIKTI.</li><li>Meningkatkan Monitoring dan Evaluasi untuk menjamin layanan pendidikan yang berkualitas.</li><li>Meningkatkan sinergisme dan profesionalisme dosen, tenaga pendidik, dan pejabat struktural, dalam melaksanakan budaya mutu.</li><li>Menjamin keterlaksanaan Sistem Penjaminan Mutu Internal (SPMI), yang terencana, terarah, dan berkelanjutan.</li><li>Meningkatkan status akreditasi di tingkat program studi dan akreditasi institusi.</li><li>Menjadikan center of knowledge and resources sharing pembelajaran inovatif dan kreatif.</li><li>Menerapkan Sinergitas Institusional Yang Berorientasi pada Pencapaian Standar Mutu.</li><li>Meningkatkan penyebarluasan, pelatihan, lokakarya, workshop, monitoring dan evaluasi secara berkelanjutan tentang strategi, metode serta media pembelajaran yang mampu untuk meningkatkan kualitas pendidikan.</li><li>Meningkatkan dan Mengembangkan Sistem Informasi Pembelajaran dan Penjaminan Mutu Berbasis ICT.</li></ol><p><br> </p>',9);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`kategori`) values 
(1,'berita'),
(2,'pengumuman'),
(3,'sejarah'),
(4,'panduan_peraturan'),
(5,'pusat_studi'),
(6,'pengelola'),
(7,'visi'),
(8,'misi'),
(9,'tujuan');

/*Table structure for table `konten` */

DROP TABLE IF EXISTS `konten`;

CREATE TABLE `konten` (
  `id_konten` int(4) NOT NULL AUTO_INCREMENT,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_konten`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `konten_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `konten` */

insert  into `konten`(`id_konten`,`judul`,`isi`,`id_kategori`,`tanggal`,`gambar`) values 
(1,'Tenun Masal Test','Tenun Masal Test',NULL,'2023-09-16','d9ce28b5e83830d310b915a825c80acf.png'),
(2,'1234','<p>1234</p>',2,'2023-10-12','d274800d1f3b3688242a7051540018b1.png'),
(7,'1','<p>1</p>',2,'2023-09-14',NULL),
(9,'1234','<p><i><strong>Lorem ipsum dolor sit amet consectetur m.</strong></i></p>',1,'2023-10-12','94a4b301768ae951b17c9a3df8653c8e.png'),
(10,'Polda Metro Jaya Panggil Firli Bahuri terkait Kasus Pemerasan SYL Pukul 14.00','<p>Jakarta, 20 Oktober 2023 - Polda Metro Jaya akan memanggil Komisaris Jenderal Polisi Firli Bahuri untuk dimintai keterangan terkait kasus pemerasan yang melibatkan nama mantan Gubernur DKI Jakarta, Anies Baswedan, yang dikenal dengan inisial SYL (Sahabat Yayat Lestari). Panggilan ini dijadwalkan akan berlangsung pada pukul 14.00 waktu setempat.</p><p>Kasus pemerasan yang mencuat ke permukaan beberapa minggu lalu telah menarik perhatian publik. SYL, seorang pengusaha sukses yang memiliki hubungan dekat dengan Anies Baswedan, mengklaim bahwa dirinya menjadi korban pemerasan oleh sejumlah pihak yang mengancam akan membongkar hubungannya dengan Anies. Dalam surat pengaduan yang ia ajukan ke Polda Metro Jaya, SYL mengungkapkan bahwa ia telah diancam akan menghadapi masalah hukum jika tidak memenuhi tuntutan para pemeras.</p><p>Penyidik Polda Metro Jaya segera memulai penyelidikan atas kasus ini dan telah mengumpulkan sejumlah bukti serta keterangan dari berbagai pihak yang terlibat. Pemanggilan terhadap Firli Bahuri, yang saat ini menjabat sebagai Kepala Badan Reserse Kriminal (Kabareskrim) Polri, dilakukan dalam rangka mendalami peran serta keterlibatannya dalam perkara ini.</p><p>Firli Bahuri adalah salah satu perwira tinggi kepolisian yang dikenal dekat dengan Anies Baswedan. Sejumlah sumber mengindikasikan bahwa Firli Bahuri mungkin memiliki informasi penting terkait kasus pemerasan ini, yang mempengaruhi reputasi Anies serta hubungan antara SYL dan pihak-pihak yang mengancamnya.</p><p>Panggilan terhadap Firli Bahuri pada pukul 14.00 di Polda Metro Jaya diharapkan akan memberikan gambaran lebih jelas terkait perkembangan kasus ini. Publik dan media massa diharapkan akan memantau dengan cermat proses pemeriksaan ini, yang bisa menjadi babak penting dalam penyelidikan kasus pemerasan yang terus berkembang ini.</p><p>Polda Metro Jaya menegaskan bahwa mereka akan mengusut kasus ini secara tuntas dan profesional, tanpa ada intervensi dari pihak mana pun, untuk mengungkap kebenaran dan menegakkan hukum sesuai dengan prosedur yang berlaku.</p>',1,'2023-10-20','f372790b7cfe201b68e570b03e1f038b.jpg'),
(13,'Pelaksanaan','4123123',1,'2023-09-16','b491a68d1c8bc2971fe80514d0f1f014.png'),
(22,'jkgkjgkb','kjlho',2,'2023-09-16','a211a7d56527819c1bd789f5550e2fda.png'),
(23,'Tenun Masal Test','asdasd',2,'2023-09-16','45fb6d2549838730dc7830df9f832bdb.jpg'),
(38,'123','<p>123</p>',1,'2023-09-20','56af0970e26c7e3081847d9710039a31.png');

/*Table structure for table `tokoh` */

DROP TABLE IF EXISTS `tokoh`;

CREATE TABLE `tokoh` (
  `id_tokoh` int(4) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) DEFAULT NULL,
  `nama` text DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `golongan` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_kategori` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_tokoh`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tokoh_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tokoh` */

insert  into `tokoh`(`id_tokoh`,`gambar`,`nama`,`nip`,`golongan`,`email`,`deskripsi`,`id_kategori`) values 
(1,NULL,'dr. Nawan','1','III-C','nawan@lppm.upr.ac.id','nawan@lppm.upr.ac.id',6),
(2,NULL,'dr. Joshua','2','III-C','joshua@lppm.upr.ac.id','joshua@lppm.upr.ac.id',5);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `id_role` int(4) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`image`,`id_role`,`is_active`,`date_created`) values 
(5,'pengunjung Joshua','pengunjung','$2y$10$gmgZpLilNTHkyCLTgJ6hquO9BiHGiwa3IV3hXZFMJ9PUwsDHtrI/e','default.jpg',2,1,1695018726),
(6,'admin Joshua','admin','$2y$10$E6ZbwkJebBO9INz6U1BDeOurEmYySywgm6rTlbaSnkb2ojUGnku/a','default.jpg',1,1,1695018778),
(12,'TEST','test','$2y$10$S3HBb57ngJIEPm.6torb/eUuU830ELfBLpHWUX/Zr8N7lk3b5OQ6K','default.jpg',2,1,1695052995),
(13,'1234','1234','$2y$10$ZgqSH2rcUVmfg5lezaxIFeggqk05Jm0ax3Ts6EaBRJAwwJCI1ZQ9K','default.jpg',2,NULL,1697208017);

/*Table structure for table `website` */

DROP TABLE IF EXISTS `website`;

CREATE TABLE `website` (
  `id_website` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `background` text DEFAULT NULL,
  `feb` text DEFAULT NULL,
  `fkip` text DEFAULT NULL,
  `fp` text DEFAULT NULL,
  `ft` text DEFAULT NULL,
  `fh` text DEFAULT NULL,
  `fisip` text DEFAULT NULL,
  `fk` text DEFAULT NULL,
  `fmipa` text DEFAULT NULL,
  `pps` text DEFAULT NULL,
  `tik` text DEFAULT NULL,
  `bahasa` text DEFAULT NULL,
  `perpustakaan` text DEFAULT NULL,
  `gambut` text DEFAULT NULL,
  `terpadu` text DEFAULT NULL,
  `lppm` text DEFAULT NULL,
  PRIMARY KEY (`id_website`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `website` */

insert  into `website`(`id_website`,`nama`,`deskripsi`,`logo`,`background`,`feb`,`fkip`,`fp`,`ft`,`fh`,`fisip`,`fk`,`fmipa`,`pps`,`tik`,`bahasa`,`perpustakaan`,`gambut`,`terpadu`,`lppm`) values 
(1,'123','23','Page_Home.png','pdf.png','123','1','123','123','123','123','123','123','123','123','123','123','123','123','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
