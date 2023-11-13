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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(110,'Ilmu Lingkungan','S3','4915/SK/BAN-PT/Akred/D/VIII/2020','B','25/Aug/2025','Masih Berlaku','https://drive.google.com/file/d/18GZima2wj7M981BRkoCaBm_9OMkhSGNg/view?usp=share_link','BAN-PT : Reakreditasi (Standar 7)','PASCASARJANA'),
(112,'lama','lama','lama','lama','2023-10-20','lama','lama','123','123');

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
(7,'SEJARAH','<p>Bertolak dari komitmen Pemerintah dan Universitas Palangka Raya untuk peningkatan mutu berkelanjutan dan menghasilkan lulusan yang memiliki kompetensi yang tinggi maka pada tahun 2006 dibentuklah Badan Penjaminan Mutu Universitas Palangka Raya. Pengelola unit ini didukung oleh tenaga akademik yang berasal dari semua fakultas di lingkungan Universitas Palangka Raya.</p><p>Sejarah perkembangan Universitas Palangka Raya untuk terus melaksanakan peningkatan kualitas pendidikan, dan sesuai amanat Undang-Undang Republik Indonesia Nomor 12 Tahun 2012 tentang Pendidikan Tinggi yang menyatakan bahwa Kurikulum Pendidikan Tinggi (KPT) merupakan pedoman penyelenggaraan kegiatan pembelajaran untuk mencapai tujuan Pendidikan tinggi dan penjaminan mutu (quality assurance) Pendidikan melalui Sistem Penjaminan Mutu Internal (SPMI) bagi seluruh Perguruan Tinggi, maka pada tahun 2015 dibentuk Lembaga Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan (LP3MP) Universitas Palangka Raya (UPR) Berdasarkan Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia Nomor 47 Tahun 2015 tentang Organisasi dan Tata Kerja Universitas Palangka Raya Pasal 81 Lembaga Pengembangan Pembelajaran dan Penjamin Mutu Pendidikan Sebagaimana di maksud dalam Pasal 71 hurup b mempunyai tugas melaksanakan koordinasi pelaksanaan, pemantauan dan evaluasi kegiatan peningkatan dan pengembangan pembelajaran dan penjaminan mutu pendidikan. Agar kegiatan bisa berjalan dengan baik, diperlukan perencanaan dan rincian tugas yang jelas. </p><p>Dalam melaksanakan tugas sebagaimana di maksud dalam pasal 81, Lembaga Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p><ol><li>Menyusun rencana program dan anggaran Lembaga;</li><li>Perlaksanaan peningkatan dan pelaksanaan pembelajaran;</li><li>Pelaksanaan pengembangan sytem penjamin mutu<br>Pendidikan;</li><li>Koordinasi pelaksanaan kegiatan peningkatan<br>pembelajaran, pengembangan pembelajaran, dan<br>penjamin mutu Pendidikan;</li><li>Pemantauan dan evaluasi peningkatan pembelajaran<br>pengembangan pembelajaran dan penjamin mutu<br>Pendidikan; dan</li><li>Pelaksanaan urusan administrasi lembaga.</li></ol><p>Untuk menjamin proses pencapaian mutu universitas dalam hal pengembangan pembelajaran dan Penjaminan mutu pendidikan agar berjalan dengan baik, maka perlu pembentukan pusat-pusat pada LP3MP dengan Surat Keputusan Rektor Universitas Palangka Raya.</p>',3),
(9,'Koordinator Pusat','<h4>TUGAS POKOK</h4><ol><li>Menyusun kegiatan dan program kerja bidang manajemen mutu.</li><li>Mengkoordinir penyusunan dan pengembangan dokumen formal penjaminan mutu akademik dan non akademik (kebijakan SPMI, manual SPMI, standar SPMI, dan Formulir SPMI) di lingkungan Universitas Palartika Raya.</li><li>Mengkoordinir penyusunan dan pengembangan panduan dan/atau Standar Operasional Prosedur (SOP) berkaitan dengan manajemen mutu.</li><li>Menyusun dan mengembangkan instrumen Audit Mutu Internal (AMI) dan Rapat Tinjauan Manajemen (RTM).</li><li>Mengkoordinir pelaksanaan dan pelaporan Audit Mutu<br>Internal (AMI), dan Rapat Tinjauan Manajemen (RTM).</li><li>Memonitor keterlaksanaan siklus penjaminan mutu atau siklus PPEPP (Penetapan Standar, Pelaksanaan Standar. Evaluasi Pelaksanaan Standar, Pengendalian Pelaksanaan Standar, dan Peningkatan Standar).</li><li>Mengkoordinir dan mengembangkan kegiatan-kegiatan extemal benchmarking dalam peningkatan mutu</li><li>Melakukan pendampingan kepada unsur-unsur pimpinan dan penjaminan mutu di tingkat fakultas dan/atau program studi dalam melaksanakan sistem penjaminan mutu.</li><li>Mendokumentasikan semua kegiatan pusat.</li><li>Membuat laporan pelaksanaan tugas.</li><li>Menjalankan tugas lain yang diberikan oleh Ketua Lembaga dan/atau Sekretaris Lembaga terkait dengan tugas pokok dan fungsi lembaga.</li></ol><h4>LAYANAN YANG DAPAT DIBERIKAN</h4><p><strong>✓</strong> Brainstorming Auditor<br><strong>✓ </strong>Pelayanan Audit Mutu Internal (AMI)<br><strong>✓ </strong>Pelatihan SPMI</p>',5),
(15,'MISI','<p>Membangun dan mengembangkan sistem informasi pembelajaran dan penjaminan mutu, berbasis ICT menuju efisiensi dan professional</p><ol><li>Melaksanakan penjaminan mutu bidang akademik,<br>penelitian dan pengabdian kepada masyarakat<br>minimal sesuai dengan Standar Nasional Pendidikan<br>Tinggi dan kebutuhan masyarakat kini dan akan<br>datang.</li><li>Memberikan dukungan dan melakukan Monitoring terhadap layanan pendidikan yang berkualitas</li><li>Menyelenggarakan sistem penjaminan mutu internal secara profesional, optimal, transparan, akuntabel dan berkelanjutan.</li><li>Meningkatkan upaya perbaikan mutu berkelanjutan melalui Audit Mutu Internal secara efisien dan efektif.</li><li>Meningkatkan kualitas Akreditasi Perguruan Tinggi dan Program Studi.</li><li>Mendorong Sinergitas Institusional yang berorientasi pada pencapaian standart Mutu</li></ol>',8),
(17,'Struktur Organisasi LP3MP','<h4><strong>Rumusan Tugas:</strong></h4><p>Pejabat Penanggungjawab Kegiatan adalah Pimpinan di Lembaga yang ditugaskan selaku penanggung jawab kegiatan PNBP non belanja modal Badan Layanan Umum (BLU) pada LP3MP UPR.</p><h4><strong>Rincian Tugas:</strong></h4><ol><li>Melaksanakan rencana kegiatan dan anggaran unit kerjanya yang telah ditetapkan dalam Rincian Kertas Kerja RKA-K/L dan DIPA.</li><li>Melakukan koordinasi dan pengendalian terhadap pelaksanaan kegiatan dan pengelolaan keuangan di unit kerjanya.</li><li>Memeriksa kebenaran material surat-surat bukti mengenai hak penagih.</li><li>Memeriksa kebenaran dokumen yang menjadi persyaratan/kelengkapan sehubungan ikatan/perjanjian pengadaan barang /jasa.</li><li>Meneliti ketersediaan dananya dan membebankan pengeluaran sesuai dengan mata anggaran pengeluaran yang bersangkutan;</li><li>Memeriksa keabsahan dokumen Surat Pertanggung Jawaban Kegiatan (SPJK) dan bukti-bukti pengeluaran atas pelaksanaan kegiatan di unit kerjanya.</li><li>Mengajukan pemintaan uang muka untuk kegiatan operasional kerja sesuai dengan ketentuan yang berlaku.</li><li>Mengajukan permintaan tagihan pembayaran atas pelaksanaan kegiatan di unit kerjanya (dokumen SPJK rampung) dengan surat pengantar yang ditujukan kepada KPA melalui Bendaharawan Pengeluaran.</li><li>Melakukan pemeriksaan keadaan kas PUMK sekurang-kurangnya 3 (tiga) bulan sekali.</li><li>Menyampaikan laporan bulanan pelaksanaan kegiatan dan keuangan unit kerjanya kepada KPA dan Bendaharawan Pengeluaran.</li><li>Memberikan bimbingan dan arahan tugas-tugas administratif kepada staf dan PUMK.</li><li>Menyimpan arsip dokumen Surat Pertanggung Jawaban Kegiatan (SPJK) dan laporan pelaksanaan kegiatan unit kerjanya.</li></ol>',6),
(18,'TUJUAN','<ol><li>Meningkatkan kualitas pembelajaran di Universitas Palangka Raya melalui pengembangan kurikulum, bahan ajar, dan e-learning yang didukung sistem teknologi informasi dan komunikasi.</li><li>Meningkatkan dan menstandardisasikan kurikulum, rencana pembelajaran, proses belajar mengajar, dan evaluasi pembelajaran dengan mengacu pada KKNI dan SN DIKTI.</li><li>Meningkatkan Monitoring dan Evaluasi untuk menjamin layanan pendidikan yang berkualitas.</li><li>Meningkatkan sinergisme dan profesionalisme dosen, tenaga pendidik, dan pejabat struktural, dalam melaksanakan budaya mutu.</li><li>Menjamin keterlaksanaan Sistem Penjaminan Mutu Internal (SPMI), yang terencana, terarah, dan berkelanjutan.</li><li>Meningkatkan status akreditasi di tingkat program studi dan akreditasi institusi.</li><li>Menjadikan center of knowledge and resources sharing pembelajaran inovatif dan kreatif.</li><li>Menerapkan Sinergitas Institusional Yang Berorientasi pada Pencapaian Standar Mutu.</li><li>Meningkatkan penyebarluasan, pelatihan, lokakarya, workshop, monitoring dan evaluasi secara berkelanjutan tentang strategi, metode serta media pembelajaran yang mampu untuk meningkatkan kualitas pendidikan.</li><li>Meningkatkan dan Mengembangkan Sistem Informasi Pembelajaran dan Penjaminan Mutu Berbasis ICT.</li></ol><p><br> </p>',9);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(9,'tujuan'),
(10,'pelatihan'),
(11,'benchmarking'),
(14,'mutu'),
(15,'akreditasi'),
(16,'kompetensi'),
(17,'mbkm'),
(18,'pangkalan_data');

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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `konten` */

insert  into `konten`(`id_konten`,`judul`,`isi`,`id_kategori`,`tanggal`,`gambar`) values 
(51,'DOSEN UPR LATIH IBU-IBU DAN KADER POSYANDU BUAT KIMCHI UNTUK ATASI STUNTING','<p>Empat dosen Fakultas Matematika Ilmu Pengetahuan Alam (FMIPA) dan Fakultas Kedokteran (FK) <a href=\"https://www.upr.ac.id/\">Universitas Palangka Raya (UPR)</a> berkolaborasi melatih ibu-ibu dan kader Posyandu wilayah RT 05/RW 013, Kelurahan Menteng membuat kimchi untuk mengatasi stunting. Kimchi merupakan sayuran fermentasi yang mengandung serat tinggi, probiotik, vitamin, dan mineral yang baik untuk kesehatan anak bawah lima tahun (Balita).</p><p>Keempat dosen yang melakukan <a href=\"https://lppm.upr.ac.id/\">pengabdian kepada masyarakat (PkM)</a> tersebut adalah Muh. Supwatul Hakim, S.Si, M.Sc (Ketua), Yuliana, S.Si, M.Biotek, Dwi Hermayantiningsih, S.Si, M.Sc dari FMIPA dan Hanasia, S.Pd, M. Biomed., dari Fakultas Kedokteran. Mereka dibantu dua mahasiswa Prodi Kimia FMIPA UPR dan satu mahasiswa dari Fakultas Kedokteran.</p><p>Muh. Supwatul Hakim, menjelaskan pengabdian kepada masyarakat ini membidik ibu-ibu dan kader Posyandu Melati, RT 05/RW 013 Kelurahan Menteng, Kota Palangka Raya, Provinsi Kalimantan Tengah. Posyandu Melati yang terdiri dari sebanyak 50 Balita dan ibu hamil tercatat aktif melakukan Posyandu pada setiap bulannya.</p><p>\"Daerah ini termasuk zona merah dengan kasus prevalensi stunting di Kota Palangka Raya. Berdasarkan data Posyandu bulan Juli 2023 ada sebanyak 30?lita mengalami pertumbuhan yang kurang dan berat badan berturut-turut tidak mengalami kenaikan,\" kata Muh. Supwatul Hakim di Palangka Raya, Rabu (18/10/2023).</p><p>Stunting, kata Hakim, merupakan masalah gizi yang terjadi akibat kekurangan nutrisi, terutama pada periode pertumbuhan awal anak. Tim PkM UPR berupaya melakukan pencegahan dan penanggulangan stunting. Kegiatannya, berupa penyuluhan kepada ibu Balita tentang pentingnya gizi seimbang dan asupan nutrisi yang diperlukan untuk pertumbuhan anak.</p><p>\"Kami memilih makanan kimchi sayuran untuk memenuhi gizi seimbang dan asupan nutrisi pada Balita. Sebab kimchi merupakan sayuran fermentasi yang mengandung serat tinggi, probiotik,vitamin, dan mineral yang baik untuk kesehatan Balita,\" kata Hakim.</p><p>Penyuluhan, tambah Hakim, memberikan informasi tentang manfaat kimchi sebagai makanan fermentasi yang mengandung probiotik dan nutrisi melimpah. Selanjutnya, para ibu Balita dilibatkan dalam pelatihan pembuatan kimchi secara benar agar menghasilkan produk yang aman dan bergizi.</p><p>Pelatihan ini ditujukan agar ibu Balita dapat memahami peran gizi seimbang untuk peningkatan status kesehatan Balita. Intervensi yang berhubungan dengan peningkatan gizi dan kesehatan seperti makanan bernutrisi tinggi dengan kalori tinggi juga harus diupayakan. \"Makanan fermentasi berbahan sumber daya lokal seperti sayur-sayuran dilaporkan memiliki nutrisi tinggi dan probiotik yang menyehatkan tubuh,\" katanya.</p>',1,'2023-11-06','8616e22ab2a2ea5247a4267a348a802f.jpg'),
(66,'Tenun Masal Test','<p>GG</p>',NULL,'2023-10-22','');

/*Table structure for table `tokoh` */

DROP TABLE IF EXISTS `tokoh`;

CREATE TABLE `tokoh` (
  `id_tokoh` int(4) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) DEFAULT NULL,
  `nama` text DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `kantor` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_kategori` int(4) DEFAULT NULL,
  `jabatan` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_tokoh`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tokoh_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tokoh` */

insert  into `tokoh`(`id_tokoh`,`gambar`,`nama`,`nip`,`kantor`,`deskripsi`,`id_kategori`,`jabatan`) values 
(1,'21200ac6955432edfe8f5a9a026e233a.png','Dr. Berkat, S.P., M.Si.','197011221994031001','-','-',6,'Ketua LP3MP'),
(19,'75ae98a84f393640abdd3be5d0c87d19.png','Dr. Noor Hamidah, S.T., M.UP.','197602242005012001','-','-',6,'Sekretaris LP3M'),
(20,'ac3e1db6a06e27fd7dc8e5a1cf662621.png','pusat studi','123423','pusat studi','pusat studi',7,NULL),
(21,'541d63d37912d59b14389c6a575fd35f.png','pusat studi','1234123','pusat studi','pusat studi',7,NULL),
(22,'4a4393e7c30eaf973edaa2fa1c05686d.png','123412314','123412314','123412314','123412314',NULL,NULL),
(26,'da746ba33be78c73838d04b289474608.png','Saptami Utami Evi, S.Pi., M.P.','197202232008102002','-','-',6,'Sub Koordinator Bidang Umum'),
(27,'aa1ebe9f4188c581ef8d892799ed8e1a.png','Flora Chisyastita, S.Hut., M.Si','198603302009102001','-','-',6,'PUMK LP3MP'),
(28,'ff6a184e6938774d8cd73c066d0dac15.png','Suprayitno ,S.AN., M.AP.','199001012018031001','Jl. Hendrik Timang K','-',5,'Koordinator Pusat Manajemen Mutu');

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
  PRIMARY KEY (`id_website`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `website` */

insert  into `website`(`id_website`,`nama`,`deskripsi`,`logo`,`background`) values 
(1,'form baru','test','7673dfd01ba8812487c560cd034f6cf1.jpg','bd7652843c290c1359414a3ef1c53413.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
