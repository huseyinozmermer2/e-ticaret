-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Kas 2022, 11:36:48
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `e-ticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

DROP TABLE IF EXISTS `ayar`;
CREATE TABLE IF NOT EXISTS `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_logo2` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ayar_url` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`ayar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_logo2`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_instagram`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'New Design', 'logo_antep_baklavasi.png', '', 'Gaziantep Baklavaları', 'Gaziantep&#039;in gerçek tadı. Fıstığı, şerbeti, kaymağıyla, baklavanın standardını belirleyen lezzet.', 'gaziantep, baklava, şerbet, tatlı, kaymak', 'Gaziantep Baklavaları', '0850 840 80 76', '0850 840 80 76', '0850 840 80 76', 'admin@gmail.com', 'Bornova', 'İzmir', 'Sarıyer mah Ahmetinan mah.', '7 x 24 açık eticaret scripti', 'ayar_maps_api', 'ayar_analystic.', 'ayar_zopima', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'mail.alanadiniz.com', 'User', 'password', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banka`
--

DROP TABLE IF EXISTS `banka`;
CREATE TABLE IF NOT EXISTS `banka` (
  `banka_id` int(11) NOT NULL AUTO_INCREMENT,
  `banka_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_iban` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_hesapadsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`banka_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banka`
--

INSERT INTO `banka` (`banka_id`, `banka_ad`, `banka_iban`, `banka_hesapadsoyad`, `banka_durum`) VALUES
(1, 'Garanti Bankası', 'TR98755656564564546', '', '1'),
(2, 'Yapı Kredi', 'TR45646545646545646465546', '', '1'),
(3, 'Vakıfbank', 'TR455645645646546465465', '', '1'),
(5, 'Ziraat Bankası', 'TR45646545646awrwerwerwer', '', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `BlogID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `BlogTarih` varchar(50) NOT NULL,
  `BlogImage` varchar(50) NOT NULL,
  `BlogBaslik` varchar(50) NOT NULL,
  `BlogUst` varchar(100) NOT NULL,
  `BlogAlticerik` varchar(1000) NOT NULL,
  `BlogAlticerik2` varchar(1000) NOT NULL,
  `BlogAlticerik3` varchar(300) NOT NULL,
  `BlogAlticerik4` varchar(250) NOT NULL,
  `BlogAlticerik5` varchar(300) NOT NULL,
  `BlogAlticerik6` text NOT NULL,
  PRIMARY KEY (`BlogID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`BlogID`, `BlogTarih`, `BlogImage`, `BlogBaslik`, `BlogUst`, `BlogAlticerik`, `BlogAlticerik2`, `BlogAlticerik3`, `BlogAlticerik4`, `BlogAlticerik5`, `BlogAlticerik6`) VALUES
(1, '16 Şubat 2022', 'Baklavayı_Neden_Bu_Kadar_Çok_Seviyoruz.jpg', 'Baklava Hakkında', 'BAKLAVAYI NEDEN BU KADAR ÇOK SEVİYORUZ?', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hakkimizda_ust` varchar(100) NOT NULL,
  `hakkimizda_usticerik` varchar(1000) NOT NULL,
  `hakkimizda_alt` varchar(100) NOT NULL,
  `hakkimizda_altt` varchar(100) NOT NULL,
  `hakkimizda_alticerik` varchar(1000) NOT NULL,
  `hakkimizda_alt2` varchar(100) NOT NULL,
  `hakkimizda_alticerik2` varchar(1000) NOT NULL,
  `hakkimizda_alt3` varchar(100) NOT NULL,
  `hakkimizda_alticerik3` varchar(300) NOT NULL,
  `hakkimizda_alt4` varchar(100) NOT NULL,
  `hakkimizda_alticerik4` varchar(250) NOT NULL,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_ust`, `hakkimizda_usticerik`, `hakkimizda_alt`, `hakkimizda_altt`, `hakkimizda_alticerik`, `hakkimizda_alt2`, `hakkimizda_alticerik2`, `hakkimizda_alt3`, `hakkimizda_alticerik3`, `hakkimizda_alt4`, `hakkimizda_alticerik4`) VALUES
(1, 'ANTEP&#039;İN İLK BAKLAVACISI', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam debitis necessitatibus expedita rerum ex cupiditate voluptatibus nostrum iusto quos? Laudantium fuga magni consequuntur libero velit vel eum iure autem harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sequi sunt error, animi pariatur voluptates doloremque, sint deleniti quisquam consectetur fugiat iusto saepe dolorum? Vitae officiis maiores at praesentium eligendi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eaque soluta ipsa dignissimos sint placeat et in eius minus. Minima est ab fugiat pariatur eligendi eaque earum nisi numquam ullam.', 'MANİFESTOMUZ.', 'En iyi baklava en iyi dostluk elçisidir.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'En iyi baklava Gaziantep&#039;te yapılır.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'En iyi baklava en iyi malzemeyle yapılır.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!', 'En iyi baklava en iyi ustalarca yapılır.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(2) DEFAULT NULL,
  `kategori_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`, `kategori_durum`) VALUES
(2, 'Kurabiye', 0, 'kurabiye', 1, '1'),
(3, 'Baklava', 0, 'baklava', 2, '1'),
(4, 'Tatlı', 0, 'tatli', 3, '1'),
(5, 'Börek', 0, 'borek', 4, '1'),
(6, 'Fıstık', 0, 'fistik', 5, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_tc` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_il` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`kullanici_id`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2017-07-08 15:21:45', '', '12345678910', 'admin@gmail.com', NULL, 'e3db72cddb1a34c9f3031ee0cd9ab521', 'admin', '', '', '', '', '5', 1),
(2, '2017-07-16 17:37:27', '', '12345678910', 'kullanici@gmail.com', '', 'e3db72cddb1a34c9f3031ee0cd9ab521', 'kullanici', 'kenan Mah.', 'İstanbul', 'Beyoğlu', '', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_ust` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_sira` int(2) DEFAULT NULL,
  `menu_kategori` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `menu_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_kategori`, `menu_durum`, `menu_seourl`) VALUES
(1, NULL, 'Ürünlerimiz', '', 'index', 1, 'menu', '1', 'urunlerimiz'),
(2, NULL, 'Hakkımızda', '', 'hakkimizda', 2, 'menu', '1', 'hakkimizda'),
(3, NULL, 'Üretim', '', 'uretim', 3, 'menu', '1', 'uretim'),
(4, NULL, 'Blog', '', 'blog', 4, 'menu', '1', 'blog'),
(5, NULL, 'İletişim', '', 'iletisim', 5, 'menu', '1', 'iletisim'),
(6, NULL, 'KVVK Bilgilendirmesi', 'Bu internet sitesine girmeniz veya bu internet sitesindeki herhangi bir bilgiyi kullanmanız aşağıdaki koşulları kabul ettiğiniz anlamına gelir.Bu internet sitesine girilmesi, sitenin ya da sitedeki bilgilerin ve diğer verilerin programların vs. kullanılması sebebiyle, sözleşmenin ihlali, haksız fiil, ya da başkaca sebeplere binaen, doğabilecek doğrudan ya da dolaylı hiçbir zarardan Ömer Güllü (“omergullu.com.tr”) sorumlu değildir. omergullu.com.tr, sözleşmenin ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin kesintiye uğraması, hata, ihmal, kesinti hususunda herhangi bir sorumluluk kabul etmez.omergullu.com.tr işbu site ve site uzantısında mevcut her tür hizmet, ürün, siteyi kullanma koşulları ile sitede sunulan bilgileri önceden bir ihtara gerek olmaksızın değiştirme, siteyi yeniden organize etme, yayını durdurma hakkını saklı tutar. Değişiklikler sitede yayım anında yürürlüğe girer. Sitenin kullanımı ya da siteye giriş ile bu değişiklikler de kabul edilmiş sayılır. Bu koşullar link verilen diğer web sayfaları için de geçerlidir.omergullu.com.tr’nın, kullanıcı tarafından siteye kayıt formunda belirtilen veya daha sonra kendisi tarafından güncellenen adresi, e-posta adresi, sabit ve mobil telefon hatları ve diğer iletişim bilgileri üzerinden mektup, e-posta, SMS, telefon görüşmesi ve diğer yollarla kullanıcıya iletişim, pazarlama, bildirim ve diğer amaçlarla kullanıcıya ulaşma hakkı bulunmaktadır. Kullanıcı işbu sözleşmeyi kabul etmekle aksine bir yazılı bildirimi olmadığı müddetçe omergullu.com.tr’nın kendisine yönelik yukarıda belirtilen iletişim faaliyetlerinde bulunabileceğini kabul ve beyan etmektedir.Kullanıcı bilgileri, ancak resmi makamlarca usulü dairesinde bu bilgilerin talep edilmesi halinde ve yürürlükteki emredici mevzuat hükümleri gereğince resmi makamlara açıklama yapmak zorunda olduğu durumlarda resmi makamlara açıklanabilecektir.omergullu.com.tr, sözleşmenin ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin kesintiye uğraması, hata, ihmal, kesinti, silinme, kayıp, işlemin veya iletişimin gecikmesi, bilgisayar virüsü, iletişim hatası, hırsızlık, imha veya izinsiz olarak kayıtlara girilmesi, değiştirilmesi veya kullanılması hususunda herhangi bir sorumluluk kabul etmez.Bu internet sitesi omergullu.com.tr’nın kontrolü altında olmayan başka internet sitelerine bağlantı veya referans içerebilir. omergullu.com.tr, bu sitelerin içerikleri veya içerdikleri diğer bağlantılardan sorumlu değildir.omergullu.com.tr bu internet sitesinin genel görünüm ve dizaynı ile internet sitesindeki tüm bilgi, resim, omergullu.com.tr markası ve diğer markalar, omergullu.com.tr alan adı, logo, ikon, demonstratif, yazılı, elektronik, grafik veya makinede okunabilir şekilde sunulan teknik veriler, bilgisayar yazılımları, uygulanan satış sistemi, iş metodu ve iş modeli de dahil tüm materyallerin (“Materyaller”) ve bunlara ilişkin fikri ve sınai mülkiyet haklarının sahibi veya lisans sahibidir ve yasal koruma altındadır. Internet sitesinde bulunan hiçbir Materyal; önceden izin alınmadan ve kaynak gösterilmeden, kod ve yazılım da dahil olmak üzere, değiştirilemez, kopyalanamaz, çoğaltılamaz, başka bir lisana çevrilemez, yeniden yayımlanamaz, başka bir bilgisayara yüklenemez, postalanamaz, iletilemez, sunulamaz ya da dağıtılamaz. Internet sitesinin bütünü veya bir kısmı başka bir internet sitesinde izinsiz olarak kullanılamaz. Aksine hareketler hukuki ve cezai sorumluluğu gerektirir. omergullu.com.tr’nın burada açıkça belirtilmeyen diğer tüm hakları saklıdır.omergullu.com.tr, dilediği zaman bu yasal uyarı sayfasının içeriğini güncelleme yetkisini saklı tutmaktadır ve kullanıcılarına siteye her girişte yasal uyarı sayfasını ziyaret etmelerini tavsiye etmektedir.', '', 6, 'hakkimizda', '1', 'kvvk-bilgilendirmesi'),
(7, NULL, 'Gizlilik Bildirimi', 'Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası’nın Amacıİşbu Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası;Tantavi Mahallesi Estergon Caddesi Exen İstanbul F Blok No:24 F/161 Ümraniye/İstanbul&amp;nbsp;adresinde mukim PİADOR SAĞLIK ÜRÜNLERİ A.Ş.&amp;nbsp;(“Propia” ya da “Şirket”)’in; işbu internet sitesi, mobil web, mobil uygulama siteler aracılığıyla ve sair yollarla ne tür kişisel veriler topladığını,Bu kişisel verilerin nasıl ve ne amaçla kullanıldığını,Şirketimiz’in bu kişisel verileri kimlerle paylaşabileceğini,Şirketimiz’in internet sitesi, mobil web siteleri, mobil uygulama ve sair yollarla topladığı kişisel veriler ile ilgili olarak kullanıcılarının/üyelerinin/müşterilerinin haklarının neler olduğunu ve bu hakları nasıl kullanabileceklerini,Çerez’ler (Cookie) hakkında bilgilendirmeyi,Ticari elektronik ileti alma konusunda bilgilendirmeyi içermektedir.&amp;nbsp;&amp;nbsp;Kişisel Verilerin Korunması Hakkında Bilgilendirme6698 sayılı Kişisel Verilerin Korunması Kanunu [&quot;KVKK&quot;] uyarınca; aşağıda belirtilen işleme amacı ile bağlantılı ve sınırlı olacak şekilde kullanıcıların/üyelerin/müşterilerin [&quot;Kullanıcı/Üye] Şirketimiz ile paylaşmış olduğu işbu Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası’nda belirtilen kişisel verilerinin, işlenmelerini gerektiren amaç çerçevesinde kaydedilecek, depolanacak, muhafaza edilecek, değiştirilecek, yeniden düzenlenecek, kanunen bu kişisel verileri talep etmeye yetkili olan kurumlar ile paylaşılacak, KVKK’nın öngördüğü hallerde ve koşullarda, yurt içi veya yurt dışında üçüncü kişilere aktarılacak, devredilebilecek, elde edilebilir hale getirilecek, sınıflandırılabilecek ve KVKK’da sayılan sair şekillerde işlenebilecek olduğunu bildiririz.&amp;nbsp;&amp;nbsp;&amp;nbsp;İşlenen Kişisel Veriler, Kişisel Veri İşleme Amacı ve DayanağıKullanıcı/Üye’ye ait ad, soyadı, doğum tarihi, cep telefonu numarası, sabit telefon numarası, e-posta adresi, adres, sayfaya ilişkin trafik bilgileri; sosyal medya hesaplarıyla bağlanılması durumunda Kullanıcı/Üye’nin o kanallar aracılığıyla paylaşılmasına onay verdiği bilgiler gibi Kullanıcı/Üye’yi doğrudan veya dolaylı olarak tanımlamaya yönelik kişisel veriler [&quot;Kişisel Veriler&quot;], Kullanıcı/Üye’ye daha iyi hizmet verebilmek, Kullanıcı/Üye ile sözleşme akdetmek, Kullanıcı/Üye’ye verilen hizmetin devamı ve iyileştirilmesi, satış, pazarlama ve ticari iletişim yapılabilmesi, satış sonrası hizmetler, varsa abonelik süreci ve buna bağlı operasyonel faaliyetlerin yürütülmesi/devam etmesi, istatistiki çalışmalar ve pazar araştırması yapılabilmesi gibi amaçlarla işlenebilmektedir. Söz konusu Kişisel Veriler’in diğer işlenme amaçları, 5651 Sayılı İnternet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen Suçlarla Mücadele Edilmesi Hakkında Kanun ve ilgili ikincil mevzuat, 6563 Sayılı Elektronik Ticaretin Düzenlenmesi Hakkında Kanun ve ilgili ikincil mevzuat, 6112 Sayılı Radyo ve Televizyonların Kuruluş ve Yayın Hizmetleri Hakkında Kanun başta olmak üzere Radyo Televizyon Üst Kurulu mevzuatı, 5846 Sayılı Fikir ve Sanat Eserleri Kanunu, 5237 Sayılı Türk Ceza Kanunu ilgili diğer yasal düzenlemeler uyarınca Kullanıcı/Üye’ye ait Kişisel Veriler’i işlemek; elektronik veya kağıt ortamında işleme amacı doğrultusunda tüm kayıt ve belgeleri düzenlemek; ilgili düzenleyici kurumlar ve diğer otoritelerce öngörülen bilgi saklama, raporlama, bilgilendirme ve bilgi paylaşma yükümlülüklerine uymaktır. Kişisel Veriler; Kullanıcı/Üye’ye daha iyi hizmet verebilmemiz adına Kullanıcı/Üye’lerin gerekli olduğu durumlarda açık rızalarına istinaden, yasal düzenlemeler uyarınca veri işleme amacı ve hukuki sebepler ile sınırlı olarak, bağlı ortaklıklarımıza ve/veya doğrudan/dolaylı yurtiçi/yurtdışı iştiraklerimize, Şirketimiz’in faaliyetlerini yürütmek üzere ilgili sözleşmeler kapsamında hizmet aldığı ya da işbirliği yaptığı yurt içi veya yurt dışındaki üçüncü kişilere aktarılabilecek, işbu Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası ile belirlenen amaçlar ve kapsam dışında kullanılmamak kaydı ile KVKK’nın öngördüğü hallerde veri güvenliğine ilişkin tedbirler de alınarak; KVKK’da sayılan şekillerde işlenebilecektir. Kullanıcı/Üye’ye ait Kişisel Veriler ile gezinme ve trafik bilgileri; güvenlik ve yasalar karşısındaki yükümlülüğümüzü ifa etmek amacıyla (suçla mücadele, devlet ve kamu güvenliğinin tehdidi benzeri ve fakat bununla sınırlı olmamak üzere yasal veya idari olarak bildirim veya bilgi verme yükümlülüğümüzün mevcut olduğu durumlarda) yasal olarak bu bilgileri talep etmeye yetkili olan ilgili kurum ve kuruluşlar ile paylaşılabilecektir.&amp;nbsp;&amp;nbsp;Kişisel Verilerle İlgili HaklarKullanıcı/Üye, işlenen Kişisel Verileri’nin neler olduğunu ve işlenip işlenmediğini, işleme amacı doğrultusunda kullanılıp kullanılmadığını öğrenebilir, verileri işlenmişse bu hususta bilgi talep edebilir, yurt içi veya yurt dışında Kişisel Veriler’in aktarıldığı üçüncü kişileri öğrenebilir, eksik veya yanlış işlenen Kişisel Veriler söz konusu ise veya işlenen Kişisel Verileri’nde herhangi bir değişiklik olması durumunda bu verilerin düzeltilmesini, değiştirilmesini, güncellenmesini, KVKK’nın 7. maddesinde öngörülen şartlar çerçevesinde silinmesini/yok edilmesini veya anonim hale getirilmesini, bu işlemlerin (eksik veya yanlış işlenen Kişisel Verileri söz konusu ise, bu verilerin düzeltilmesini veya KVKK’nın 7. maddesinde öngörülen şartlar çerçevesinde silinmesini/yok edilmesini veya anonim hale getirilmesini) Kişisel Veriler’in aktarıldığı üçüncü kişilere bildirilmesini talep edebilir; işlenen verilerin münhasıran otomatik sistemler ile analiz edilmesi nedeniyle aleyhine bir sonucun ortaya çıkmasına itiraz edebilir ve Kişisel Veriler’in kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep edebilir. Kullanıcı/Üye, bu kapsamdaki haklarını KVKK md. 13/f.1 uyarınca:Websitesinde yer alan e-posta adresine, Kullanıcı/Üye’ye ait güvenli elektronik imza ile imzalanmış bir e-posta göndermek(aynı zamanda Şirketimiz’e hitaben yazılan “word veya pdf.” formatındaki bir dosya da güvenli e-imza ile imzalanarak gönderilebilir);Şirketimizin kayıtlı e-posta adresine, Kullanıcı/Üye’ye ait güvenli elektronik imza ile imzalanmış bir e-posta göndermek veyaKargo ile ıslak imzasını taşıyan bir dilekçe göndermek suretiyle Şirketimiz’e başvuru yaparak, taleplerini iletebilir.&amp;nbsp;&amp;nbsp;Kişisel Veri Saklama Süresi&amp;nbsp;Şirketimiz, KVKK uyarınca işlediği Kişisel Verileri yalnızca ilgili mevzuatta öngörülen veya mevzuatta bir süre öngörülmemiş ise kişisel veri işleme amacının gerektirdiği süre kadar muhafaza eder. Tutulan veriler verinin işlenmesini gerektiren sebepler sona erdikten sonra silinir, yok edilir veya anonim hale getirilir. Örnek vermek gerekirse 6563 Sayılı Elektronik Ticaretin Düzenlenmesi Hakkında Kanun ile buna bağlı yönetmelik uyarınca Kişisel Veriler’in pazarlama veya tanıtım amaçları için kullanılacağına ilişkin Kullanıcı/Üye’nin onayının geri alındığı durumlarda, Kişisel Veriler’in kayıtları bu tarihten itibaren 1 yıl saklanır. Ticari elektronik iletinin içeriği ve gönderiye ilişkin diğer her türlü kayıt ise gerektiğinde ilgili bakanlığa sunulmak üzere 3 yıl saklanır. 5651 Sayılı İnternet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen Suçlarla Mücadele Edilmesi Hakkında Kanun uyarınca ise işlediğimiz trafik verileri 2 yıl saklanır ve süre bittikten sonra anonim hale getirilir. Her halükarda Kişisel Veriler’in birden fazla sebeple işlenmiş olması halinde, söz konusu verinin işlenmesini gerektiren tüm nedenler ortadan kalktığında ilgili veri silinir, yok edilir veya anonim hale getirilir.&amp;nbsp;Çerez (Cookie) KullanımıŞirketimiz, internet sitesi, ve mobilweb ziyaretçilerine daha iyi hizmet verebilmek amacıyla ve yasal yükümlülüğü çerçevesinde, işbu “Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası” ile belirlenen amaçlar ve kapsam dışında kullanılmamak kaydı ile Kullanıcı/Üye gezinme bilgilerini işleyebilecektir.&amp;nbsp;Çerezler, Kullanıcı/Üye’nin söz konusu internet sitesini ziyaret ettiğinde veya mobilweb üzerinden bağlandığında, Kullanıcı/Üye’nin internet tarayıcısı tarafından yüklenen ve bilgisayarı, cep telefonu veya tabletinde saklanan küçük bilgi parçacıklarını içeren metin dosyalarıdır.Şirketimiz, söz konusu internet sitesi ve mobilweb bulunan çerezleri günlük dosyaları, boş gif dosyaları ve/veya üçüncü taraf kaynakları yoluyla topladığı bilgileri Kullanıcı/Üye’nin tercihleri ile ilgili bir özet oluşturmak amacıyla depolar ve bu amaçla 3. kişilerle paylaşabilir. Şirketimiz, söz konusu internet sitesi ve mobilweb üzerinden, Kullanıcı/Üye’ye özel tanıtım yapmak, promosyonlar ve pazarlama teklifleri sunmak, söz konusu mecraların içeriğini Kullanıcı/Üye’ye göre iyileştirmek ve/veya tercihlerini belirlemek amacıyla; Kullanıcı/Üye’nin söz konusu mecralar üzerinde gezinme bilgilerini ve/veya bu mecralar üzerindeki kullanım geçmişini izleyebilmektedir. Buna ek olarak, çevrimiçi ve çevrimdışı olarak toplanan bilgiler gibi farklı yöntemlerle veya farklı zamanlarda bu mecralar üzerinde Kullanıcı/Üye’den toplanan bilgileri eşleştirebilir ve bu bilgileri üçüncü taraflar gibi başka kaynaklardan alınan bilgilerle birlikte kullanabilir. Söz konusu eşleştirme ve kullanma, yalnızca işbu Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası ile belirlenen amaçlar ve kapsam dahilinde kalacak olup sadece bu amaçlar dahilinde 3. kişilerle paylaşılabilecektir.&amp;nbsp;&amp;nbsp;Çerez ÇeşitleriŞirketimiz, internet sitesi ve mobilweb oturum çerezleri ve kalıcı çerezler kullanmaktadır. Oturum kimliği çerezi, Kullanıcı/Üye tarayıcılarını kapattığında sona erer. Kalıcı çerez ise Kullanıcı/Üye’ye ait sabit diskte uzun bir süre kalır. Kullanıcı/Üye, internet tarayıcılarının &quot;yardım&quot; dosyasında verilen talimatları&amp;nbsp;izleyerek veya &amp;nbsp;&quot;www.allaboutcookies.org&quot;&amp;nbsp;veya&amp;nbsp;&quot;www.youronlinechoices.eu&quot;&amp;nbsp;adresini ziyaret&amp;nbsp;ederek kalıcı çerezleri kaldırabilir ve hem oturum çerezlerini hem de kalıcı çerezleri reddedebilir. Kullanıcı/Üye kalıcı çerezleri veya oturum çerezlerini reddetmesi halinde, söz konusu web sitesini ve mobilwebi kullanmaya devam edebilir, fakat söz konusu mecraların tüm işlevlerine erişemeyebilir veya erişimi sınırlı olabilir.&amp;nbsp;&amp;nbsp;Çerezler Nasıl Kullanılmaktadır?Çerezler, Kullanıcı/Üye’nin yaptığı tercihleri hatırlamak ve web sitesi /mobilweb kullanımlarını kişiselleştirmek için kullanılır. Bu kullanım:Kullanıcı/Üye parolasını kaydeden ve internet sitesi/mobilweb oturumunun sürekli açık kalmasını sağlayan, böylece Kullanıcı/Üye’nin her ziyaretinde birden fazla kez parola girme zahmetinden kurtaran çerezleri veSöz konusu internet sitesine/mobilwebe daha sonraki ziyaretinde Kullanıcı/Üye’yi hatırlayan ve tanıyan çerezleri&amp;nbsp;Kullanıcı/Üye’nin söz konusu internet sitesine/mobilwebenereden bağlandığı, internet sitesi/mobilweb üzerinde hangi içeriği görüntülediği ve ziyaretinin süresi gibi web sitesini/mobilwebi uygulamayı nasıl kullandığının izlenmesi dahil olmak üzere; internet sitesini/mobilwebi nasıl kullandığını belirlemek için kullanılır.Kullanıcı/Üye’ye ait ilgi alanlarına ve Kullanıcı/Üye’ye daha uygun içerik ve reklamları sunmak için, diğer bir ifade ile hedeflenmiş reklam/tanıtım amacıyla kullanılır. Bu şekilde, internet sitesini ve mobilwebi kullandığında Kullanıcı/Üye’ye daha uygun içerikleri, kişiye özel kampanya ve ürünleri sunar ve daha önceden istemediğini belirttiği içerik veya fırsatları bir daha Kullanıcı/Üye’nin dikkatine sunmaz. Söz konusu internet sitesi, çerezler yoluyla elde edilen bilgileri topladığımız Kişisel Veriler’le eşleştirir.&amp;nbsp;Söz konusu internet sitesi üçüncü taraf çerezlerini reklam ve yeniden hedefleme için nasıl kullanmaktadır?&amp;nbsp;Söz konusu internet sitesi çerezleri ayrıca arama motorlarını, internet sitesi veya mobilwebi ve/veya internet sitesinin reklam verdiği internet sitelerini ziyaret ettiği vakit Kullanıcı/Üye’nin ilgisini çekebileceğini düşündüğü reklamları Kullanıcı/Üye’ye sunabilmek için “reklam teknolojisini” devreye sokmak amacıyla kullanabilir. Reklam teknolojisi, Kullanıcı/Üye’ye özel reklamlar sunabilmek için web sitesine/mobilwebe ve internet sitesinin reklam verdiği web sitelerine/mobilwebe uygulama Kullanıcı/Üye’nin yaptığı önceki ziyaretlerle ilgili bilgileri kullanır. Bu reklamları sunarken, internet sitesinin/mobilwebin Kullanıcı/Üye’yi tanıyabilmesi amacıyla Kullanıcı/Üye’nin tarayıcısına benzersiz bir üçüncü taraf çerezi yerleştirilebilir. Kullanıcı/Üye, internet tarayıcısının &quot;yardım&quot; dosyasında verilen talimatları izleyerek veya&amp;nbsp;&quot;www.allaboutcookies.org&quot;&amp;nbsp;veya&amp;nbsp;&quot;www.youronlinechoices.eu&quot;&amp;nbsp; adresini ziyaret ederek kalıcı çerezleri kaldırabilir ve hem oturum çerezlerini hem de kalıcı çerezleri reddedebilir. Kullanıcı/Üye, kalıcı çerezleri veya oturum çerezlerini reddederse, internet sitesini, mobilweb’i veya mobil uygulamayı kullanmaya devam edebilir, fakat internet sitesinin, mobilweb ve mobil uygulamanın tüm işlevlerine erişemeyebilir veya erişimi sınırlı olabilir.&amp;nbsp;&amp;nbsp;Kişisel Verilerin Korunmasına İlişkin ÖnlemlerKişisel Veriler’in korunması Şirketimiz için önemli bir konudur. Kişisel Veriler’e yetkisiz erişim veya bu bilgilerin kaybı, hatalı kullanımı, ifşa edilmesi, değiştirilmesi veya imha edilmesine karşı Kullanıcı/Üye’yi korumak için gerekli teknik ve idari her türlü önlemi almaktayız. Kişisel Veriler’i işlerken genel kabul görmüş güvenlik teknolojisi standartlarını kullanmaktayız.Kişisel Veriler’i gizli tutmayı, gizliliğin sağlanması ve güvenliği için gerekli teknik ve idari her türlü tedbiri almayı ve gerekli özeni göstermeyi taahhüt etmekteyiz. Gerekli bilgi güvenliği önlemlerini almamıza karşın, Şirketimiz’e ait internet sitesine, mobilwebe ve sisteme yapılan saldırılar sonucunda Kişisel Veriler’in zarar görmesi veya üçüncü kişilerin eline geçmesi durumunda, bu durumu derhal sizlere ve Kişisel Verileri Koruma Kurulu’na bildirir ve gerekli önlemleri alırız.&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Gizlilik, Kişisel Verilerin Korunması Politikası ve Çerez Politikası’nda Yapılacak Değişiklikler&amp;nbsp;İşbu Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası’nda zaman zaman değişiklik yapılabilir. Bu değişiklikler, değiştirilmiş yeni Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası’nın internet sitesinde/webmobilde yayınlanmasıyla birlikte derhal geçerlilik kazanır. Bu sebeple Kullanıcı/Üye’nin işbu metni periyodik olarak gözden geçirmesini öneririz. Kullanıcı/Üye, varsa Kişisel Bilgileri de içeren üyelik bilgilerini ve iletişim tercihlerini her zaman internet sitesinde yer alan iletişim bilgilerinden Şirketimiz’e ulaşarak da iletebilir. Talepler en kısa sürede değerlendirilerek uygulamaya alınacaktır.&amp;nbsp;Uygulanacak Hukuk, Yetkili Mahkeme ve İcra Daireleriİşbu Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası, Türkiye Cumhuriyeti kanunlarına tabidir. Gizlilik, Kişisel Verilerin Korunması ve Çerez Politikası’nın uygulanmasından doğabilecek her türlü uyuşmazlığın çözümünde İstanbul Merkez Mahkeme ve İcra Daireleri yetkilidir.&amp;nbsp;İletişim İzni&amp;nbsp;Kullanıcı/Üye’nin Şirketimiz ile paylaşmış olduğu Kişisel Veriler; satış-pazarlama amacıyla, çerez politikamızda belirttiğimiz şekilde diğer şirketlerden topladığımız bilgiler ile birleştirerek hizmetlerimizin içerik ve tanıtımlarımızın geliştirilmesi ve kişileştirilmesi veya yeni hizmetler sunabilmek amacıyla ve her türlü iletişim mesajlarının gönderilmesi amacıyla Şirketimiz kullanabilir. Bu veriler, aynı zamanda sadece Kullanıcı/Üye’ye sağlanacak hizmetlerin kusursuz sunulabilmesi, olası gönderilerinizin sağlıklı şekilde teslim edilmesi, telefon, sms ve/veya e-posta yoluyla bildirimlerimizin zamanında ulaştırılabilmesi amacıyla, sözleşme ilişkisi içinde olduğumuz, veri güvenliği konusundaki hassasiyetimizi paylaşan, ilgili mevzuat hükümlerine riayet eden 3. kişilerle, yalnızca ihtiyaç durumunda ve gerekli ölçüde paylaşılacaktır. Kullanıcı/ Üye, pazarlama amaçlı bu tanıtımları almamak veya söz konusu reklam-kişiselleştirme, yeniden hedefleme uygulamalarında yer almak istemediği takdirde, taleplerini her zaman internet sitesinde yer alan iletişim bilgilerinden Şirketimiz’e ulaşarak da iletebilir.', '', 7, 'hakkimizda', '1', 'gizlilik-bildirimi'),
(8, NULL, 'Güvenli Alışveriş', 'Güvenlik Öğeleriİnternet gibi herkese açık ağ ortamlarında dolaşan hassas bilgilerin, kötü niyetli kişilerin eline geçmesine engel olmak için her ödeme sisteminin, güvenlikle ilgili olarak yerine getirmesi gereken bazı zorunluluklar vardır. Bunların başlıcaları;Gizlilik (Confidentiality)İşlem bilgilerinin, üçüncü kişiler tarafından değil, sadece doğru kişi ya da kuruluş tarafından görülebilmesi: Kredi kartı numarasının başkaları tarafından ele geçirilmesine engel olmak için,Bilgi Bütünlüğü (Integrity of Data)Bilginin; kaynağında üretildiği şekliyle, değişmeden, alıcıya ulaşmasını sağlamak: Satın alma bedeli gibi, alınan ürüne ya da hizmete ilişkin ödeme bilgilerin değiştirilmemesi için,Kimliğin Kanıtlanması (Authentication)Kredi kartının geçerliliğinin, kart sahibi ve mağazanın kimliklerinin doğruluğunun kanıtlanması: Kredi kartı bilgilerinin gönderen kişinin kart sahibi olduğunun doğrulanması için,İnkar Edememe (Non-Repudiation)Alıcının ya da satıcının, yaptığı işlem sonrası, o işlemi yaptığını inkar edememesi,olarak özetlenebilir.omergullu.com.tr, yukarıda adı geçen güvenlik öğelerini, seçtiğiniz banka ile yapmış olduğu e-ticaret sözleşmesiyle sağlamaktadır.VISA ve MASTERCARD kuralları çerçevesinde Bankalararası Kart Merkezi&#039;nin (BKM) aldığı kurallara göre Mail Order ve Elektronik Ticaret işlemleri yapan tüm firmalar için kart sahibinden CVV2/CVC2 güvenlik kodu numarası alınması zorunlu hale getirilmiştir. Bu yöntem hem sizi hem de bankaları oluşabilecek risklerden koruma amacını taşımaktadır. CVV2/CVC2 güvenlik kodu, kredi kartının arka yüzündeki imza panelinde yer alan, kart numarasının en sağ kısmındaki üç haneli numaradır. Kartın fiziki olarak bulunmadığı ortamlarda işlem yapılıyorsa güvenlik kodu kullanılmalıdır. Bu sebeple alışverişleriniz sırasında sizden kredi kartı numaranızla birlikte üç haneli CVV2/CVC2 numaranız da istenecektir. Güvenlik kodu numarası uygulaması ile ulusal ve uluslararası kart kabul kurallarının gereksinimlerini tam olarak karşılayarak minimize ediyor ve sizlere daha güvenli bir alışveriş ortamı sunuyoruz.SSL (Secure Sockets Layer)SSL, web (Internet ağı) üzerindeki iletişim güvenliği için kullanılan ve bilgi transferinin gizliliğini ve bütünlüğünü sağlayan güvenlik protokolüdür. Internet ağ sayfaları ve tarayıcılar tarafından yaygın olarak desteklenen SSL, müşteri ve mağaza arasındaki mesajların şifrelenmesini ve sadece doğru adreste deşifre edilmesini sağlar.Netscape Communications Corporation tarafından geliştirilen SSL teknolojisinde hem istemci (bilgi alan), hem de sunucu (bilgi gönderen) bilgisayarda bir doğrulama (Authentication–Kimliğin Kanıtlanması, iki bilgisayarın karşılıklı olarak birbirini tanıması) mekanizması kullanılır.SSL, bir internet işleminde rol alan partilerin kimliklerinin doğruluğunu kanıtlamak için dijital sertifikalar kullanmaktadır. Dijital sertifika sahibi, kendisine gönderilecek mesajı şifrelemesi için diğer partiye sertifikası ile birlikte şifreleme anahtarını gönderir. Sertifika ile gönderilen anahtar ile şifrelenen mesaj ancak sertifika sahibi tarafından deşifre edilebileceğinden mesajın doğru kişi tarafından okunması sağlanır.SSL, şifreleme sistemi olarak Açık Anahtar Şifreleme Yöntemi&#039;ni kullanır. Bu yöntem sayesinde SSL web (Internet ağı) üzerindeki iletişimde hem transfer edilen bilginin gizliliğini ve bütünlüğünü sağlamakta, hem de istemci ve sunucunun kimliklerini doğrulamaktadır. Ancak SSL, işlemi gerçekleştiren kişinin kredi kartı sahibi olduğunu kanıtlayamamakta ve mağazanın kredi kartı bilgilerine girişini engelleyememektedir.omergullu.com.tr, SSL Güvenlik Sistemini, GlobalSign firması ile yapmış olduğu 128-bitlik SSL şifreleme anlaşmasıyla sağlamaktadır.omergullu.com.tr Internet Ağ Sayfasında Çevrimiçi Alışveriş Neden Güvenlidir?omergullu.com.tr Çevrimiçi Alışveriş Sistemi, teknolojinin getirdiği en son yenilik ve gelişmelerle beraber sahip olunabilecek çok yüksek bir güvenlik sistemi ile güçlendirilmiştir. omergullu.com.tr, internet üzerinden yaptığınız alışverişlerin gizliliğini sağlar, bu sebeple omergullu.com.tr Online Alışveriş Sistemi ile yaptığınız işlemlerde, sadece 128-bitlik SSL 3.0 şifreleme kullanan yeni nesil tarayıcılar kullanılmaktadır.128-bitlik SSL 3.0 şifreleme, şimdiye kadar başka sistemlerde kullanılan 40-bitlik SSL şifrelemeden karşılaştırılamayacak kadar daha yüksek bir güvenlik sunmaktadır. Bu güvenlik para transferi söz konusu olan tüm işlemler için son derece gereklidir.omergullu.com.tr Online Alışveriş Sistemi&#039;nde vermiş olduğunuz siparişte kullandığınız kredi kartı bilgileri, sizin bilgisayarınızda şifrelenecek ve bu bilgiler sadece seçtiğiniz bankanın POSNET sistemine ulaştıklarında çözülebilecek ve işleme konulacaktır. İnternet üzerinde şifreleme amacıyla yaygın bir şekilde kullanılan 128-bitlik SSL 3.0 şifreleme teknolojisi, seçtiğiniz banka POSNET sistemi ve bilgisayarınız arasındaki iletişimi şifrelemekte kullanılmaktadır.SSL 3.0/128-bit Nedir ve Nasıl Çalışır?128-bitlik SSL 3.0 şifreleme, internete erişmekte kullanılan en yeni internet tarayıcılarında uygulanan bir şifreleme teknolojisidir. 128-bitlik SSL 3.0 şifreleme sayesinde seçtiğiniz banka İnternet Bankacılığı ile kurduğunuz iletişim her seferinde 128 haneli bir rakamdan oluşan yeni bir şifre ile şifrelenecektir.Ödeme Aşaması&#039;na geçildiğinde kullanmakta olduğunuz internet tarayıcılarının seçtiğiniz banka ile SSL-tabanlı şifreleme kullanan bir bağlantı kurduğunu şu şekilde anlayabilirsiniz:SSL Göstergesi - Internet Explorer&amp;amp;nbsp;SSL Göstergesi - SafariSSL Göstergesi - Mozilla Firefox&amp;amp;nbsp;SSL Göstergesi - Google ChromeŞirketimizin almış olduğu bütün bu önlemlere rağmen gerek şirketimiz ağ sayfası ve gerekse banka sisteminde oluşacak saldırılardan kaynaklanan zarardan sorumlu tutulamaz.', '', 8, 'hakkimizda', '1', 'guvenli-alisveris'),
(9, NULL, 'Üyelik İşlemeri', 'Sitemizde indirimli alışveriş yapabilmek için sitemize üye olmanız gerekiyor. Bunun için bir form doldurmanız ve kendinize ait bir şifre seçmeniz yeterli.Üye olmadan da alışveriş yapabilirsiniz fakat sitemizdeki çeşitli avantajlarımızdan (Eski ve yeni siparişlerin takibi, indirim ve kampanyalardan erken haberdar olma vb.) faydalanmak için üye olmanız gerekmektedir.Üyelikten ayrılmak için &quot;İletişim&quot; sayfasına gitmeniz ve buradaki &quot;İletişim formu&quot; ile iptal isteğinizi ve üyelik bilgilerinizi bize göndermeniz yeterlidir.Eğer şifrenizi unuttuysanız Şifre Hatırlat sayfamızı kullanarak kısa sürede şifrenize ulaşabilirsiniz.Herhangi bir nedenle şifrenizi değiştirmek istiyorsanız &quot;Üyelik İşlemleri&quot; sayfasına girerek buradaki &quot;Şifremi değiştirmek istiyorum&quot;a tıklamanız yeterli. Gelen sayfada yeni şifrenizi yazarak &quot;Gönder&quot;&amp;nbsp;düğmesine tıkladığınız takdirde değişiklik gerçekleşmiş olacaktır.Üyelerimizin bilgileri kesinlikle üye onayı olmadan üçüncü şahıslara verilmez.', '', 9, 'yardim', '1', 'uyelik-islemeri'),
(10, NULL, 'Sipariş İşlemleri', 'Cumartesi, pazar veya resmi tatil günleri yapılan siparişler tatil gününden sonraki ilk iş günü işleme alınarak sevkiyat yapılacaktır.Sitemizden yurtdışı ve KKTC&#039; ye sipariş verilememektedir.&amp;nbsp;Faturanız teslimat adresiniz esas alınarak siparişinizin içinde gönderilecektir. Türkiye Cumhuriyeti sınırları içinde yapılacak olan alışverişlerde, liste fiyatlarına KDV dahildir ve faturalandırma da KDV dahil olarak yapılır. Türkiye Cumhuriyeti sınırları dışından yapılacak alışverişlerde, ilgili ülkenin vergi yasaları geçerlidir. Teslimat sırasında ulusal ya da yerel otoriteler tarafından belirlenmiş ek vergiler ortaya çıkabilir.Her ürünün yanındaki &quot;Sepete Ekle&quot; düğmesini tıklayarak sipariş verebilirsiniz. Siparişlerinizi alışveriş sepetinizde biriktirebilir, adetlerini değiştirebilir ya da bazılarından vazgeçebilirsiniz. Alışveriş sepetinizden çıkartmak istediğiniz ürünlerin adetlerini sıfırlamanız gerekir. Bu işlemden sonra &quot;Yeniden Hesapla&quot; düğmesine basarak alışveriş sepetinizin son durumunu görebilirsiniz. Sepetinizdeki ürünler kesin sipariş anlamına gelmez. Ancak &quot;Satın Alıyorum&quot; düğmesini tıkladıktan sonra satın alma işlemi başlar.Sitemizden verdiğiniz siparişlerde, &quot;Teslimat Bilgileri &quot; kısmında &quot;Yeni Teslimat/Fatura&quot; kısımları dikkatle doldurulmalıdır. Siparişlerinizi, belirlediğiniz alternatif alıcıların ancak kimlik ibrazı karşılığında teslim alabileceğini unutmayınız.Siparişlerinizde kargo bedeli sistem tarafından otomatik hesaplanacaktır.', '', 10, 'yardim', '1', 'siparis-islemleri'),
(11, NULL, 'Teslimat İşlemleri', 'Teslimat şartlarıYurtiçi Kargo, Mng ve Gaziantep kalkışlı otobüs kargomuz bulunmaktadır. İstanbul ve Ankara siparişleri için MTN Ekspress ile 1 günde teslimat seçeneğimiz bulunmaktadır.&amp;nbsp;Diğer tüm illerimizde seçtiğiniz kargo şirketi ile en kısa sürede teslimatı sağlanmaktadır.İstanbul MTN ekpress ile Şile, Silivri, Çatalca, Kumburgaz, Polenezköy, Çerkezköy, Kilyos ve Adalar&#039;a&amp;nbsp;1 günde teslimat&amp;nbsp;gönderimi bulunmamaktadır.&amp;nbsp;Ankara MTN ekspress ile Gölbaşı, Pursaklar, Kahramankazan, Çubuk, Akyurt, Kalecik, Hasanoğlan, Nallıhan, Elmadağ, Kızılcahamam, Çamlıdere, Ayaş, Beypazarı, Güdül, Polatlı, Bala, Şereflikoçhisar, Evren, Haymana, Etimesgut (TOKİ Turkuaz ve Yapracık konutları) , Esenboğa Havalalanı, Sincan&#039;a (Temelli, Başkent Sanati OSB, Aşağıyurtçu, Yukarıyurtçu, Peçenek) 1 günde teslimat&amp;nbsp;gönderimi bulunmamaktadır.&amp;nbsp;Kurye ile&amp;nbsp;her gün saat 15:00&#039;den önce verilen siparişler aynı gün teslim edilir.&amp;nbsp;Sipariş dağıtımı Pazar günleri hariç saat 11:00&#039;de başlamaktadır.&amp;nbsp;(Bazı köy ve kasabalara haftanın belirli günleri teslimat yapılmaktadır.)Siparişinizin size en çabuk şekilde ulaşması için lütfen adres ve telefon bilgilerinizi mümkün olduğu kadar açık yazınız. Üyelik işlemleri sırasında bildirdiğiniz adres ile siparişinizin teslim edilmesini istediğiniz adres farklı ise sipariş formunu doldururken bu konuya dikkat ediniz.Teslim aldığınız paketi kargo görevlisinin yanında açıp, siparişinizi kontrol ediniz. Herhangi bir yanlışlık veya eksiklik gördüğünüz takdirde derhal bizimle irtibata geçiniz.Sitemizden alışveriş yapan siz kredi kartı sahiplerinin güvenliği için siparişinizi verdiğiniz andan itibaren ödeme / fatura bilgilerinin kontrolü gerçekleşmektedir. Bu yüzden, siparişinizin tedarik ve teslimat aşamasına gelebilmesi için öncelikle siparişinizin ödeme / fatura bilgilerinin doğruluğunun banka tarafından onaylanması gereklidir. Onayın sağlıklı olarak alınması halinde,&amp;nbsp;Gaziantep dışından Pazartesi, Salı ve Çarşamba günleri 15:00&#039;a kadar verilen siparişler aynı gün içinde kargoya verilir.. Siparişleriniz kargoya teslim edildikten sonra Gaziantep&amp;nbsp;içine en geç 2&amp;nbsp;iş günü, Gaziantep dışına en geç 3 iş günü içinde ulaştırılacaktır.İstanbul ve Ankara siparişleri ekspres hizmet ile gönderilebilmektedir. Cumartesi haricinde, haftanın her günü saat 15:00&#039;e kadar verilen siparişler, ertesi günü teslim edilmektedir.Türkiye Cumhuriyeti sınırları dışından verilen siparişlerde, size gönderilen takip numarası ile siparişinizin durumunu kontrol edebilirsiniz.', '', 11, 'yardim', '1', 'teslimat-islemleri'),
(12, NULL, 'İptal/İade İşlemleri', 'Siparişler, en geç aynı iş günü içerisinde saat 14:00&#039;a kadar iptal edilebilir. Saat 14:00&#039;den sonra verildiği için bir sonraki iş gününe sarkan siparişler ise bir sonraki gün saat 14.00&#039;e kadar iptal edilebilir. İptal işlemi (0342) 324 11 11 no.&#039;lu telefon veya musteri@.com.tr adresine isim, soyadı ve sipariş no bildirilerek yapılabilir.Aldığınız her ürün, üretici firmasının garantisi altındadır.&amp;nbsp;&amp;nbsp;Sevkiyat sırasında zarar gördüğünü düşündüğünüz paketleri teslim aldığınız firma yetkilisi önünde açıp kontrol ediniz. Eğer üründe herhangi bir zarar varsa kargo firmasına tutanak tuttururarak ürünü teslim almayınız. Ürün teslim alındıktan sonra kargo firmasının görevini tam olarak yerine getirdiğini kabul etmiş olduğunuzu unutmayınız&amp;nbsp;&amp;nbsp;Ambalajı açılmış, kullanılmış, tahrip edilmiş vesair şekildeki ürünlerin iadesi kabul edilmez.&amp;nbsp;&amp;nbsp;Müşteri ürünü, kendisine teslim edildiği andaki durumu ile geri vermekle ve kullanım söz konusu ise kullanma dolayısıyla malın ticari değerindeki kaybı tazminle yükümlüdür&amp;nbsp;&amp;nbsp;Müşterinin ürünü iade etmesi veya alışverişinden cayması halinde, iade edilen ürün Bize ulaştığı andan itibaren on (10) gün içerisinde ürün bedeli iade edilir. Kredi kartına ürün iade bedeli bankanız tarafından 2-6 hafta arasında yapılmaktadır. Bu sürede firmamızın tasarrufu bulunmamaktadır.&amp;nbsp;&amp;nbsp;Üründe ve ambalajında herhangi bir açılma, bozulma, kırılma, tahrip, yırtılma, kullanılma ve sair durumları tespit ettiği hallerde ve ürünün müşteriye teslim edildiği andaki hali ile iade edilememesi halinde ürünü iade almayacak ve bedelini iade etmeyecektir.&amp;nbsp;&amp;nbsp;Yukarıdaki şartlara uygun hallerde iade edilen ürünlerde kargo ücreti müşteri tarafından ödenecektir..&amp;nbsp;&amp;nbsp;Havale iadeleri 2 iş günü içinde Kredi Kartı iadeleri 3 iş günü içinde yapılacaktır. Bankanız kredi kartı iadelerini aynı gün hesabınıza yansıtmayabilir. Bu durumda bankanızın kredi kartı servisini aramanız gereklidir. Siparişinizle ilgili “İptal Edildi” uyarısı çıktıktan sonra tüm bedel kredi kartınıza veya havale yaptığınız bankanıza iade edilmektedir. Taksitli satışlarda yapılan iadeler bankanız tarafından kredi kartınıza her ay artı bakiye olarak yansıtılmaktadır.', '', 12, 'yardim', '1', 'iptal-iade-islemleri'),
(13, NULL, 'Kurabiye', '', 'kurabiye', 13, 'altmenu', '1', 'kurabiye'),
(14, NULL, 'Baklava', '', 'baklava', 14, 'altmenu', '1', 'baklava'),
(15, NULL, 'Tatlı', '', 'tatli', 15, 'altmenu', '1', 'tatli'),
(16, NULL, 'Börek', '', 'borek', 16, 'altmenu', '1', 'borek'),
(17, NULL, 'Fıstık', '', 'fistik', 17, 'altmenu', '1', 'fistik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

DROP TABLE IF EXISTS `sepet`;
CREATE TABLE IF NOT EXISTS `sepet` (
  `sepet_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_adet` int(3) NOT NULL,
  `urun_kg` float(9,2) NOT NULL,
  PRIMARY KEY (`sepet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `kullanici_id`, `urun_id`, `urun_adet`, `urun_kg`) VALUES
(14, 2, 13, 1, 1.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

DROP TABLE IF EXISTS `siparis`;
CREATE TABLE IF NOT EXISTS `siparis` (
  `siparis_id` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `siparis_no` int(11) DEFAULT NULL,
  `kullanici_id` int(11) NOT NULL,
  `siparis_toplam` float(9,2) NOT NULL,
  `siparis_tip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_banka` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_odeme` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`siparis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=750067 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_zaman`, `siparis_no`, `kullanici_id`, `siparis_toplam`, `siparis_tip`, `siparis_banka`, `siparis_odeme`) VALUES
(750064, '2022-11-12 13:20:40', NULL, 2, 2182.50, 'Banka Havalesi', 'Yapı Kredi', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

DROP TABLE IF EXISTS `siparis_detay`;
CREATE TABLE IF NOT EXISTS `siparis_detay` (
  `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int(3) NOT NULL,
  PRIMARY KEY (`siparisdetay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparisdetay_id`, `siparis_id`, `urun_id`, `urun_fiyat`, `urun_adet`) VALUES
(29, 750064, 14, 240.00, 1),
(30, 750064, 11, 1135.00, 1),
(31, 750064, 14, 240.00, 1),
(32, 750065, 15, 230.00, 1),
(33, 750066, 14, 240.00, 1),
(34, 750066, 6, 240.00, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uretim`
--

DROP TABLE IF EXISTS `uretim`;
CREATE TABLE IF NOT EXISTS `uretim` (
  `uretim_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uretim_foto` varchar(100) NOT NULL,
  `uretim_ad` varchar(255) NOT NULL,
  `uretim_baslik` varchar(100) NOT NULL,
  `uretim_icerik` varchar(1000) NOT NULL,
  PRIMARY KEY (`uretim_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uretim`
--

INSERT INTO `uretim` (`uretim_id`, `uretim_foto`, `uretim_ad`, `uretim_baslik`, `uretim_icerik`) VALUES
(1, 'dekupebaklava.jpg', '', 'GELENEKSEL YÖNTEMLERLE ÜRETİYORUZ.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo! Lorem, ipsum dolor sit amet consectetur adipisicing elit.'),
(2, 'varlik_39@3x.png', 'BAKLAVACILIĞIN OKULU BURASI', '1. BAKLAVACILIĞIN OKULU BURASI', 'Lorem ipsum ddolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!'),
(3, 'varlik_34@3x.png', 'TAŞ FIRINDA PİŞER, USTALIK İSTER', '2.TAŞ FIRINDA PİŞER, USTALIK İSTER', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!'),
(4, 'varlik_38@3x.png', 'UNU ÖZEL, YAĞI ÖZEL, KAYMAĞI ÖZEL', '3. UNU ÖZEL, YAĞI ÖZEL, KAYMAĞI ÖZEL', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!'),
(5, 'varlik_35@3x.png', 'ANTEP FISTIKLARININ EN GÜZELİ', '4. ANTEP FISTIKLARININ EN GÜZELİ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!'),
(6, 'varlik_37@3x.png', 'BEŞ DUYUYLA KALİTE TESTİ', '5. BEŞ DUYUYLA KALİTE TESTİ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!'),
(7, 'varlik_36@3x.png', 'BAKLAVA VE DAHA FAZLASI.', '6. BAKLAVA VE DAHA FAZLASI', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `urun_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `urun_foto` text,
  `kategori_id` int(11) NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_ad` varchar(300) DEFAULT NULL,
  `urun_seourl` varchar(250) DEFAULT NULL,
  `urun_detay` text,
  `urun_fiyat` float(9,2) DEFAULT NULL,
  `urun_video` varchar(50) DEFAULT NULL,
  `urun_keyword` varchar(250) DEFAULT NULL,
  `urun_stok` float(9,2) DEFAULT NULL,
  `urun_durum` enum('0','1') NOT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_foto`, `kategori_id`, `urun_zaman`, `urun_ad`, `urun_seourl`, `urun_detay`, `urun_fiyat`, `urun_video`, `urun_keyword`, `urun_stok`, `urun_durum`) VALUES
(1, 'baklava_tabak.jpg', 3, '2022-11-04 15:23:25', 'FISTIKLI YAŞ BAKLAVA', 'fistikli-yas-baklava', '', 260.00, '', 'baklava', 10.00, '1'),
(2, 'kuru_baklava_tabak.jpg', 3, '2022-11-04 15:23:25', 'FISTIKLI KURU BAKLAVA', 'fistikli-kuru-baklava', '', 260.00, '', 'baklava', 10.00, '1'),
(3, 'ozel_kare_baklava_tabak.jpg', 3, '2022-11-04 15:23:25', 'FISTIKLI ÖZEL KARE BAKLAVA', 'fistikli-ozel-kare-baklava', '', 320.00, '', 'baklava', 10.00, '1'),
(4, 'cevizli_baklava_tabak.jpg', 3, '2022-11-04 15:23:25', 'CEVİZLİ YAŞ BAKLAVA', 'cevizli-yas-baklava', '', 240.00, '', 'baklava', 10.00, '1'),
(5, 'fistikli_kurabiye_tabak.jpg', 2, '2022-11-04 15:23:25', 'FISTIKLI KURABİYE', 'fistikli-kurabiye', '', 320.00, '', 'kurabiye', 10.00, '1'),
(6, 'sade_kurabiye_tabak.jpg', 2, '2022-11-04 15:23:25', 'SADE KURABİYE', 'sade-kurabiye', '', 240.00, '', 'kurabiye', 10.00, '1'),
(7, 'burma_kadayif_tabak.jpg', 4, '2022-11-04 15:23:25', 'FISTIKLI BURMA KADAYIF', 'fistikli-burma-kadayif', '', 320.00, '', 'tatlı', 10.00, '1'),
(8, 'fistik_ezmesi_tabak.jpg', 4, '2022-11-04 15:23:25', 'FISTIK EZMESİ', 'fistik-ezmesi', '', 380.00, '', 'tatlı', 10.00, '1'),
(9, 'ozel_sobiyet_tabak.jpg', 4, '2022-11-04 15:23:25', 'FISTIKLI ÖZEL ŞÖBİYET', 'fistikli-ozel-sobiyet', '', 380.00, '', 'tatlı', 10.00, '1'),
(10, 'kare_fistik_ezmesi_tabak.jpg', 4, '2022-11-04 15:23:25', 'KARE FISTIK EZMESİ', 'kare-fistik-ezmesi', '', 380.00, '', 'tatlı', 10.00, '1'),
(11, 'dolama_tabak_1.jpg', 4, '2022-11-04 15:23:25', 'FISTIKLI DOLAMA', 'fistikli-dolama', '', 1135.00, '', 'tatlı', 10.00, '1'),
(12, 'yilbasi_tepsisi.jpeg', 4, '2022-11-04 15:23:25', 'YAZILI KARIŞIK TEPSİ', 'yazili-karisik-tepsi', '', 1135.00, '', 'tatlı', 10.00, '1'),
(13, 'sobiyet_tabak.jpg', 4, '2022-11-04 15:23:25', 'FISTIKLI ŞÖBİYET', 'fistikli-sobiyet', '', 320.00, '', 'tatlı', 10.00, '1'),
(14, 'peynirli_su_boregi_tabak.jpg', 5, '2022-11-04 15:23:25', 'ANTEP PEYNİRLİ SU BÖREĞİ', 'antep-peynirli-su-boregi', '', 240.00, '', 'börek', 10.00, '1'),
(15, 'tuzlu_antep_fistigi_1.jpg', 6, '2022-11-04 15:23:25', 'TUZLU ANTEP FISTIĞI', 'tuzlu-antep-fistigi', '', 230.00, '', 'fıstık', 10.00, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
