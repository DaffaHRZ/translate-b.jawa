-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_kamus_Sheet1`
--

DROP TABLE IF EXISTS `data_kamus_Sheet1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_kamus_Sheet1` (
  `No` varchar(5) DEFAULT NULL,
  `Bahasa Indonesia` varchar(18) DEFAULT NULL,
  `Bahasa Jawa Ngoko` varchar(13) DEFAULT NULL,
  `Bahasa Krama Inggil` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_kamus_Sheet1`
--

LOCK TABLES `data_kamus_Sheet1` WRITE;
/*!40000 ALTER TABLE `data_kamus_Sheet1` DISABLE KEYS */;
INSERT INTO `data_kamus_Sheet1` VALUES ('1.0','Ada','Ana','Wonten'),('2.0','agama','agama','agami'),('3.0','Air','Banyu','Toya'),('4.0','air','banyu','toya'),('5.0','akan','arep','kersa'),('6.0','ambil','jupuk','pundhut'),('7.0','Anak','Lare/Putra','Putro'),('8.0','Apa','Opo','Menopo'),('9.0','Apa Kabar','Piyekabare','Pripun/Kadospundi'),('10.0','Api','Geni','Brama'),('11.0','Atas','Nduwur','Nginggil'),('12.0','ayah','bapak','rama'),('13.0','Bagaimana','Piye','Kadhospundi'),('14.0','Bahagia','Seneng','Rahayu'),('15.0','Baik','Apik','Sae'),('16.0','bangun','gugah','wungu'),('17.0','Banyak','Akeh','Kathah'),('18.0','Barangkali','Menowo','Menawi'),('19.0','Baru','Anyar','Enggal'),('20.0','Bawa','gawa','asta'),('21.0','Bawah','Ngisor','Ngandhap'),('22.0','bebek','bebek','kambangan'),('23.0','belakang','Mburi','Wingking'),('24.0','Beli','Tuku','Tumbas'),('25.0','Belum','Durung','Dereng'),('26.0','benar','bener','leres'),('27.0','berangakat','mangkat','tindak'),('28.0','Berapa','Piro','Pinten'),('29.0','beras','beras','uwos'),('30.0','Berhenti','Mangdheg','Kendhel'),('31.0','Berjalan','Mlaku',' Mlampah'),('32.0','bersedia','gelem','purun'),('33.0','Besar','Gedhe','Ageng'),('34.0','Besok','Sesuk','Mbenjang'),('35.0','betah','krasan','kraos'),('36.0','Betul','Bener','Leres'),('37.0','Bicara','Omong','Ngendika/Ngendiko'),('38.0','bilang','kandha','ngendika'),('39.0','Bisa','Iso','Saget'),('40.0','bunga','kembang','sekar'),('41.0','Cantik/Indah','Apik','Endah'),('42.0','celana','kathok','lancingan'),('43.0','cerita','carita','cariyos'),('44.0','Cinta','Seneng','Tresna/Tresno'),('45.0','cipta','gawe','damel'),('46.0','dahulu','biyen','rumiyin'),('47.0','dapat','isa','saged'),('48.0','Dari','Seko','Saking'),('49.0','Datang','Teko','Rawuh'),('50.0','Dekat','Cedak','Cerak'),('51.0','Dengar','Krungu','Miereng'),('52.0','Dia','Deweke','Piyambakipun'),('53.0','Dimana','Ngendhi','Wonten Pundhi'),('54.0','Dingin','Adem','Asrep'),('55.0','Disini','Nangkene','Wontenmriki'),('56.0','Dua','Loro','Kalih'),('57.0','Duduk','Lungguh','Lenggah/Pinarak'),('58.0','Empat','Papat','Sekawan'),('59.0','eyang','embah','eyang'),('60.0','gajah','gajah','liman'),('61.0','gelang','gelang','binggel'),('62.0','gemuk','lemu','lema'),('63.0','gula','gula','gendis'),('64.0','harimau','macan','sima'),('65.0','hilang','ilang','ical'),('66.0','Ibu','Ibu','Ibu'),('67.0','ikut','melu','nderek'),('68.0','ingat','eling','emut'),('69.0','Ini','Iki','Meniko'),('70.0','itu','kuwi','punika'),('71.0','jadi','dadi','dados'),('72.0','Jalan','Dalan','Mergi'),('73.0','Jangan','Ojo','Ampun'),('74.0','Jauh','Adoh','Tebih'),('75.0','Jelek','Elek','Kirangsae'),('76.0','jeruk','jeruk','jeram'),('77.0','kaget','keget','kejot'),('78.0','kain','jarit','nyamping'),('79.0','kakak','kakang','raka'),('80.0','Kalau/Jika','Menowo','Menawi'),('81.0','Kami','Awake dhewe','Kito'),('82.0','Kamu','Kowe','Panjenengan'),('83.0','Kanan','Tengen','Tengen'),('84.0','Kapan','Kapan','njing napa'),('85.0','Karena','Sebabe/Mergo','Amargi'),('86.0','Kasi','Wenehi','Paringi'),('87.0','kayu','kayu','kajeng'),('88.0','Ke','Dateng','Dateng'),('89.0','Kecil','Cilik','Alit'),('90.0','keluar','metu','miyos'),('91.0','Kemarin','Wingi','Kolowingi'),('92.0','keramas','kramas','jamas'),('93.0','keris','keris','wangkingan'),('94.0','Kira-Kira','Kiro-Kiro','Kinten-Kinten'),('95.0','Kiri','Kiwo','Kiwo'),('96.0','kuat','kuwat','kiyat'),('97.0','kurang','kurang','kirang'),('98.0','lahir','lair','miyos'),('99.0','laki-laki','lanang','kakung'),('100.0','Lapar','Ngelih','Luwe');
/*!40000 ALTER TABLE `data_kamus_Sheet1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-22 15:20:25
