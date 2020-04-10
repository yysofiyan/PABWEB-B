/*
SQLyog Professional v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - db_sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sekolah` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sekolah`;

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_siswa` */

insert  into `tbl_siswa`(`nis`,`nama`,`tempat_lahir`,`tgl_lahir`,`jenis_kelamin`,`agama`,`alamat`,`no_hp`,`foto`) values ('12345','Marwah','Sumedang','2000-03-20','Perempuan','Islam','Sumedang','083727188288','marwah.jpg'),('12356','Radhian','Sumedang','2000-04-23','Laki-laki','Islam','Sumedang','0811111111111','aeng.jpeg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
