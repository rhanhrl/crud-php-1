/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.5.5-10.4.6-MariaDB : Database - dbsiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbsiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbsiswa`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`agama`,`alamat`,`no_telepon`) values ('123','agus','semarang','2021-01-10','Laki-laki','Islam','test','123'),('12345','Raden Ajeng Ayu Hanum Trihapsa','Ngayojoakrto Hadiningrat','2021-01-10','Perempuan','Islam','Panembahan Senopati Raya 60,Yogyakarta','02746728293'),('1430511056','HAMZAH MAULANA PRATAMA','Jakarta','2000-02-01','Laki-laki','Islam','Jalan Gatot Subroto No. 10, Sukabumi','085758857775'),('1730511026','ALFRIDA SALSA FEBIOLA','Jakarta','1998-05-02','Laki-laki','Islam','Jalan Raya Cissat  No. 15, Cisaat Sukabumi','085789892909'),('1830511002','HANDIKA FEBRIAN','Purwokerto','1999-05-15','Laki-laki','Islam','Sukaraja Sukabumi','085669919769'),('1830511003','TAUFIQ HIDAYATULLAH','Sukabumi','1999-12-19','Laki-laki','Islam','Jalan Radin Intan No. 77, Karang Tengah, Sukabumi','089977955772'),('1830511055','MUTIARA DEWI MUSLIMAH','Bandung','1999-03-16','Laki-laki','Islam','Jalan Ciluto Cisande','081922919212'),('1830511120','RHEZA FAHRY ABDILLAH','Jakarta','1995-06-06','Perempuan','Islam','Jalan Ahmad Yani,Sukabumi','081388955767'),('1830521019','DITO ADITYA','Manado','2001-01-20','Laki-laki','Islam','Jalan Pemuda Sukabumi','081269962201');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
