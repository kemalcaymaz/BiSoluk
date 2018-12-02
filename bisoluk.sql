-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 02 Ara 2018, 20:15:19
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bisoluk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `destekform`
--

DROP TABLE IF EXISTS `destekform`;
CREATE TABLE IF NOT EXISTS `destekform` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `isim` varchar(40) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `teis` varchar(10) NOT NULL,
  `urun` varchar(40) NOT NULL,
  `miktar` int(5) NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `destekform`
--

INSERT INTO `destekform` (`id`, `isim`, `mail`, `telefon`, `teis`, `urun`, `miktar`, `tarih`) VALUES
(1, 'Kemal Çaymaz', 'kemal.caymaz@stu.bahcesehir.edu.tr', '4545151', 'mail', '', 15, '2018-12-02 20:32:11'),
(2, 'Kemal Çaymaz', 'kemal.caymaz@stu.bahcesehir.edu.tr', '4545151', 'mail', 'Seçilen ürün: Kitap', 15, '2018-12-02 20:33:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

DROP TABLE IF EXISTS `duyurular`;
CREATE TABLE IF NOT EXISTS `duyurular` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Baslik` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `KisaMetin` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `UzunMetin` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Gorsel` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Konum` int(11) DEFAULT NULL,
  `Tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`ID`, `Baslik`, `KisaMetin`, `UzunMetin`, `Gorsel`, `Konum`, `Tarih`) VALUES
(1, 'Hedef Noktası: Sakarya', 'Olam Progıda firmasının desteği ile 30 Kasım - 3 Aralık arasında gerçekleştireceğimiz bu dönemin ilk projesi Sakarya Kocaali\'de bulunan Kirazlı İlk-Orta okuluna olacaktır. Bu süreçte bize kitap ve diğer konularda destek olmak isterseniz iletişim formu doldurabilir veya iletisim@baubisoluk.org adresine mail atabilirsiniz.', 'Olam Progıda firmasının desteği ile 30 Kasım - 3 Aralık arasında gerçekleştireceğimiz bu dönemin ilk projesi Sakarya Kocaali\'de bulunan Kirazlı İlk-Orta okuluna olacaktır. Bu süreçte bize kitap ve diğer konularda destek olmak isterseniz iletişim formu doldurabilir veya iletisim@baubisoluk.org adresine mail atabilirsiniz.', 'resources/images/kitap-destegi-duyuru.jpeg', 1, '2018-11-29 13:55:41'),
(2, 'Hedef Noktası: Artvin', 'Bahçeşehir Üniversitesi öğrenci dekanlığının da desteği ile yıl içinde gerçekleştireceğimiz projelerden bir tanesi Artvin Macahal\'de bulunan okula olacaktır. Bu süreçte bize destek olmak isterseniz iletişim formu doldurabilir veya iletisim@baubisoluk.org adresine mail atabilirsiniz.', 'Bahçeşehir Üniversitesi öğrenci dekanlığının da desteği ile yıl içinde gerçekleştireceğimiz projelerden bir tanesi Artvin Macahal\'de bulunan okula olacaktır. Bu süreçte bize destek olmak isterseniz iletişim formu doldurabilir veya iletisim@baubisoluk.org adresine mail atabilirsiniz.', 'resources/home-page-images/duyuru/artvin_duyuru.jpg', 2, '2018-11-29 13:55:41'),
(3, 'Hedef Noktası: Muğla', 'Bahçeşehir Üniversitesi öğrenci dekanlığının da desteği ile yıl içinde gerçekleştireceğimiz projelerden bir tanesi Muğla Hisarönü\'nde bulunan okula olacaktır. Bu süreçte bize destek olmak isterseniz iletişim formu doldurabilir veya iletisim@baubisoluk.org adresine mail atabilirsiniz.', 'Bahçeşehir Üniversitesi öğrenci dekanlığının da desteği ile yıl içinde gerçekleştireceğimiz projelerden bir tanesi Muğla Hisarönü\'nde bulunan okula olacaktır. Bu süreçte bize destek olmak isterseniz iletişim formu doldurabilir veya iletisim@baubisoluk.org adresine mail atabilirsiniz.', 'resources/home-page-images/duyuru/mugla_duyuru.jpg', 3, '2018-11-29 13:56:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footerform`
--

DROP TABLE IF EXISTS `footerform`;
CREATE TABLE IF NOT EXISTS `footerform` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `isim` varchar(40) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `konu` varchar(20) DEFAULT NULL,
  `ileti` text NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `footerform`
--

INSERT INTO `footerform` (`id`, `isim`, `mail`, `konu`, `ileti`, `tarih`) VALUES
(1, 'Myname', 'blabla@blabla.com', 'oneri', 'Deneme metni', '2018-12-02 19:12:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

DROP TABLE IF EXISTS `haberler`;
CREATE TABLE IF NOT EXISTS `haberler` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(40) NOT NULL,
  `kisametin` text NOT NULL,
  `uzunmetin` text NOT NULL,
  `gorsel` text NOT NULL,
  `Konum` int(1) DEFAULT NULL,
  `Tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`ID`, `baslik`, `kisametin`, `uzunmetin`, `gorsel`, `Konum`, `Tarih`) VALUES
(1, '23 Nisan Etkinliği', 'Bi\'Soluk üyelerinin katıldığı etkinliğimizde, cezaevinde ebeveyninin yanında kalan çocuklarla 23 Nisan\'ı kutlamak bir araya geldik. Onlara oyun parkı götürüp oyunlar oynayarak kendi günlerini daha mutlu geçirmelerini amaçladık.', 'Bi\'Soluk üyelerinin katıldığı etkinliğimizde, cezaevinde ebeveyninin yanında kalan çocuklarla 23 Nisan\'ı kutlamak bir araya geldik. Onlara oyun parkı götürüp oyunlar oynayarak kendi günlerini daha mutlu geçirmelerini amaçladık.', 'resources/home-page-images/haber/haber_23nisan.jpg', 1, '2018-11-29 00:37:20'),
(2, 'Deneme123', 'deneme metni', '23 Nisan\'da gerçekleştireceğimiz proje için bütçe toplamak amacıyla gerçekleştirdiğimiz kermes bugün tamamlandı. Destek veren üye, öğrenci ve çalışanlara teşekkürlerimizi sunuyoruz.', 'resources/home-page-images/haber/23_nisan_kermes_habe_tlwsZ.jpg', 2, '2018-11-29 00:37:20'),
(3, 'Bi\'Soluk Kayseri\'de', 'Her yıl gerçekleştirdiğimiz Anadolu Çiçekleri projesi kapsamında bu yıl Kayseri Yahyalı\'da bulunan Büyükçakır İlkokulu ve Büyükçakır Ortaokuluna ortak olarak kullanabilecekleri sosyal aktivite sınıfının yapımı tamamlandı. Bu projeye emek ve destek vermiş olan herkese teşekkürlerimizi sunarız.', 'Her yıl gerçekleştirdiğimiz Anadolu Çiçekleri projesi kapsamında bu yıl Kayseri Yahyalı\'da bulunan Büyükçakır İlkokulu ve Büyükçakır Ortaokuluna ortak olarak kullanabilecekleri sosyal aktivite sınıfının yapımı tamamlandı. Bu projeye emek ve destek vermiş olan herkese teşekkürlerimizi sunarız.', 'resources/home-page-images/haber/kayseri_proje_resim__Igrgn.jpg', 3, '2018-11-29 00:39:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `gorsel` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `alternatif` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(11) DEFAULT '1',
  `aktif` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `gorsel`, `alternatif`, `sira`, `aktif`) VALUES
(1, 'resources/home-page-images/slider/23nisan.jpg', '23 Nisan Kutlaması', 1, 1),
(2, 'resources/home-page-images/slider/kayseri.jpg', 'Kayseri Projesi', 2, 1),
(3, 'resources/home-page-images/slider/kayseri1.jpg', 'Kayseri Projesi', 3, 1),
(4, 'resources/home-page-images/slider/1533983471204_763843.jpg', 'Çorbada Tuzun Olsun', 4, 1),
(5, 'resources/home-page-images/slider/1533983473142_956314.jpg', 'Amasya Projesi', 5, 1),
(6, 'resources/home-page-images/slider/1533983471113_683862.jpg', 'Malatya Projesi', 6, 1),
(7, 'resources/home-page-images/slider/Konya.jpg', 'Konya Projesi', 7, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urundestek`
--

DROP TABLE IF EXISTS `urundestek`;
CREATE TABLE IF NOT EXISTS `urundestek` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `isim` varchar(40) NOT NULL,
  `bekleyen` int(5) NOT NULL,
  `islemde` int(5) NOT NULL,
  `tamamlanan` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
