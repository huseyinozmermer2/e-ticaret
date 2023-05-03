-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 Mar 2023, 18:37:22
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

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
  `ayar_id` int NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_url` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_il` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_instagram` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ayar_telegram` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ayar_smtphost` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`ayar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_telegram`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'evyeburadalogo-2.png', 'https://www.evyeburada.com/', 'Real Granit Evye – Evye Burada | Granit Eviye | En Uygun ve Kaliteli Evye Modelleri Burada |', 'Evye Burada | Granit Evye | En Uygun ve Kaliteli Evye Modelleri Burada | | Real Granit | Teka |Franke | Ukinox | Dominox | Artenova |', 'Evye Burada | Granit Evye | En Uygun ve Kaliteli E', 'https://www.evyeburada.com/', '0 216 371 61 42g', '0 216 371 61 42.', '0 216 441 27 02', 'info@osmanlisanayi.com', 'Maltepe', 'İstanbul', 'Atatürk Caddesi Küçük Papatya Çıkmazı Sokak No:5-A', '7 x 24 açık eticaret scripti', 'ayar_maps_api', 'ayar_analystic', 'https://static.zdassets.com/ekr/snippet.js?key=397a5d71-16d7-4741-81aa-0c4ab68f2380', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com/', 'https://telegram.me/', 'ss', 'g', 'g', 'f', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banka`
--

DROP TABLE IF EXISTS `banka`;
CREATE TABLE IF NOT EXISTS `banka` (
  `banka_id` int NOT NULL AUTO_INCREMENT,
  `banka_ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `banka_iban` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `banka_hesapadsoyad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `banka_durum` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`banka_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `banka`
--

INSERT INTO `banka` (`banka_id`, `banka_ad`, `banka_iban`, `banka_hesapadsoyad`, `banka_durum`) VALUES
(1, 'Garanti Bankası', 'TR98755656564564546', 'Emrah Yüksel', '1'),
(2, 'Yapı Kredi', 'TR45646545646545646465546', 'Emrah Yüksel', '1'),
(3, 'Vakıfbank', 'TR455645645646546465465', 'Emrah Yüksel', '1'),
(5, 'Ziraat Bankası', 'TR45646545646awrwerwerwer', 'Emrah Yüksel', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int NOT NULL,
  `hakkimizda_baslik` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_icerik` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(1, 'Hakkımızda', 'Yaklaşık 35 yıllık ticari geçmişe sahip olan şirket ortaklarımız tarafından 1990 yılında Osmanlı Sanayi Ürünleri Pazarlama Tic. Ltd. Şti. ünvanı ile İstanbul da kurulmuştur. <br>Şirketimiz 1990 yılından beri pazarlama alanında, inşaat sektörünün ileri gelen markalarının seçkin ve kaliteli ürünlerini geniş, dinamik, tecrübeli ve çalışmayı ilke edinen kadrosu ile sürdürmektedir.<br> Şirketimiz İnşaat Sektöründe (Hırdavat ve Yapı Kimyasalları) çağın gerektirdiği teknolojik yenilikleri yakından takip edip bünyesinde uygulayan, müşteri memnuyetini ön planda tutan halka hizmeti hakka hizmet kabul eden bir anlayışla yoluna devam etmektedir.', 'I4ukAUOCnHA', 'Hakkımızda Vizyon', 'Hakkımızda Misyon');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kategori_ust` int NOT NULL,
  `kategori_seourl` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kategori_sira` int NOT NULL,
  `kategori_durum` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`, `kategori_durum`) VALUES
(1, 'Real Granit Evye', 8, 'real-granit-evye', 1, '1'),
(2, 'Teka Evye', 8, 'teka-evye', 2, '1'),
(3, 'Franke Evye', 8, 'franke-evye', 3, '1'),
(4, 'Ukinox Granit Evye', 8, 'ukinox-granit-evye', 4, '1'),
(5, 'Dominox Evye', 8, 'dominox-evye', 5, '1'),
(6, 'Artenova Evye', 8, 'artenova-evye', 6, '1'),
(7, 'Anasayfa', 0, 'anasayfa', 1, '1'),
(8, 'Ürünlerimiz', 0, 'urunlerimiz', 2, '1'),
(9, 'Hakkımızda', 0, 'hakkimizda', 3, '1'),
(10, 'İletişim', 0, 'iletisim', 4, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kullanici_mail` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_tel` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_firma` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kullanici_ulke` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kullanici_adres` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_durum` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`kullanici_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_adsoyad`, `kullanici_mail`, `kullanici_tel`, `kullanici_password`, `kullanici_firma`, `kullanici_ulke`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2017-07-08 15:21:45', '', '1', 'Admin Admin', 'admin@gmail.com', '05430001122', '0330c52976796b87f863b0e8f7b8ee55', '', '', 'adnan', 'İstanbul', 'Topkapı', '', '5', 1),
(7, '2023-03-24 12:02:16', '', '1', 'Kullanıcı Kullanıcı', 'kullanici@gmail.com', '05439541000', '0330c52976796b87f863b0e8f7b8ee55', '', '', '', '', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_ust` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_ad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_detay` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_url` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_sira` int NOT NULL,
  `menu_durum` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_seourl` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(1, '', 'Ödeme ve Teslimat', 'Ödeme ve Teslimat&amp;<br>1) Banka Havalesi veya EFT (Elektronik Fon Transferi) yaparak <br>Akbank, Finasbank, Garanti Bankası, T.İş Bankası ve Yapı Kredi bankası hesaplarımızdan (TL) herhangi birine yapabilirsiniz <br>2) Sitemiz üzerinden kredi kartlarınız ile <br>Her türlü kredi kartınıza online tek ödeme ya da Akbankdan online taksit imkânlarımızdan yararlanabilirsiniz. Online ödemelerinizde siparişiniz sonunda kredi kartınızdan tutar çekim işlemi gerçekleşecektir. Muhtemel sipariş iptali veya stok sorunları nedeniyle sipariş iptallerinde kredi kartınıza para iadesi 3 iş günü içerisinde yapılacaktır. <br>3) Sipariş Bedeli İadesi <br> Siparişlerinizin olası sebeplerle iptali durumunda; Osmanlı Sanayi Ürünleri Pazarlama Ticaret Limited Şirketi üç iş günü içerisinde ürün bedelini hesabınıza ve/veya kredi kartınıza iade eder. Ancak, banka hesap bilgilerinizi ve/veya kredi kartı bilgilerinizi doğru ve eksiksiz olarak şirketimiz finans yetkililerine bildirmeniz gerekmektedir.<br>4) Teslimat <br>Sipariş etmiş olduğunuz ürünleri aynı gün kargoya teslim etmeye gayret ediyoruz. Temini zaman alan ürünler için kargo teslim süresi ürün detayında belirtildiği gibi 3 iş günüdür. Gecikmesi muhtemel teslimat durumunda size bilgi verilecektir. <br>Ürün teslimatının aksamadan gerçekleştirilebilmesi için lütfen gün içinde bulunduğunuz yerin adresini teslimat adresi olarak bildiriniz.<br> Talepleriniz sipariş sonunda belirlemiş olduğunuz teslimat tipine göre hazırlanmak üzere işleme alınacaktır. İstanbul merkezli şirketimizden ürünler XXXXXXXX kargo firmasıyla gönderilecektir. Siparişleriniz onaylandıktan sonra en geç 2 (iki) iş günü sonunda Kargo firmasına teslim edilir.<br>  Müşteri temsilcimize danışarak değişik teslimat şartları konusunda görüşebilirsiniz. Ayrıca kargo teslimatları sadece Türkiye için geçerlidir.<br>5) Ödeme Takibi <br> Söz konusu sistem herhangi bir sorun nedeni ile işlemi gerçekleştiremiyorsa ödeme sayfası sonucunda ziyaretçimiz bu durumdan haberdar edilmektedir. <br>Belirtilen adreste herhangi bir hata durumunda teslimatı gerçekleşemeyen sipariş ile ilgili olarak siparişi veren ile bağlantı kurulmaktadır. <br> Ziyaretçimiz tarafından belirtilen e-posta adresinin geçerliliği siparişin aktarılmasını takiben gönderilen otomatik e-posta ile teyit edilmektedir. <br> Teslimatın gerçekleşmesi konusunda müşteri kadar kredi kartı sistemini kullandığımız bankaya karşı da sorumluluğumuz söz konusudur. <br> Lütfen dikkat ediniz! <br> Sevkiyat sırasında zarar gördüğünü düşündüğünüz paketleri, teslim aldığınız firma yetkilisi önünde açıp kontrol ediniz. Eğer üründe herhangi bir zarar olduğunu düşünüyorsanız kargo firmasına tutanak tutturularak ürünü teslim almayınız. <br> Ürün teslim alındıktan sonra kargo firmasının görevini tam olarak yerine getirdiği kabul edilmektedir. <br> Ürün hasarlı ise: <br>Hazırlamış olduğunuz tutanağı en kısa zamanda 0216 216 15 53 numaralı fax’a gönderin ve durumu info@osmanlisanayi.com mail adresine bildiriniz. <br> Bu işlemleri gerçekleştirdiğiniz takdirde paketinizle ilgili çalışmalara başlayarak, en kısa zamanda teslimatın tekrarlanmasını sağlayacağız. <br> Bu e-posta içinde ürünü neden iade etmek istediğinizi kısaca açıklarsanız ürün ile ilgili çalışmalarımızda bize yardımcı olmuş olursunuz.', '', 1, '1', 'odeme-ve-teslimat'),
(2, '', 'İptal İade Şartları', 'TÜKETİCİ HAKLARI – CAYMA – İPTAL İADE KOŞULLARI <br> GENEL: <br>1.Kullanmakta olduğunuz web sitesi üzerinden elektronik ortamda sipariş verdiğiniz takdirde, size sunulan ön bilgilendirme formunu ve mesafeli satış sözleşmesini kabul etmiş sayılırsınız. <br>2.Alıcılar, satın aldıkları ürünün satış ve teslimi ile ilgili olarak 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği (RG:27.11.2014/29188) hükümleri ile yürürlükteki diğer yasalara tabidir.<br>3.Ürün sevkiyat masrafı olan kargo ücretleri alıcılar tarafından ödenecektir.<br>4.Satın alınan her bir ürün, 30 günlük yasal süreyi aşmamak kaydı ile alıcının gösterdiği adresteki kişi ve/veya kuruluşa teslim edilir. <br>Bu süre içinde ürün teslim edilmez ise, Alıcılar sözleşmeyi sona erdirebilir.<br>5.Satın alınan ürün, eksiksiz ve siparişte belirtilen niteliklere uygun ve varsa garanti belgesi, kullanım klavuzu gibi belgelerle teslim edilmek zorundadır.<br>6.Satın alınan ürünün satılmasının imkansızlaşması durumunda, satıcı bu durumu öğrendiğinden itibaren 3 gün içinde yazılı olarak alıcıya bu durumu bildirmek zorundadır. <br> 14 gün içinde de toplam bedel Alıcı’ya iade edilmek zorundadır.<br> SATIN ALINAN ÜRÜN BEDELİ ÖDENMEZ İSE:<br>7.Alıcı, satın aldığı ürün bedelini ödemez veya banka kayıtlarında iptal ederse, Satıcının ürünü teslim yükümlülüğü sona erer. <br>KREDİ KARTININ YETKİSİZ KULLANIMI İLE YAPILAN ALIŞVERİŞLER: <br>8.Ürün teslim edildikten sonra, alıcının ödeme yaptığı kredi kartının yetkisiz kişiler tarafından haksız olarak kullanıldığı tespit edilirse ve satılan ürün bedeli ilgili banka veya finans kuruluşu tarafından Satıcı’ya ödenmez ise, Alıcı, sözleşme konusu ürünü 3 gün içerisinde nakliye gideri SATICI’ya ait olacak şekilde SATICI’ya iade etmek zorundadır. <br> ÖNGÖRÜLEMEYEN SEBEPLERLE ÜRÜN SÜRESİNDE TESLİM EDİLEMEZ İSE:<br>9.Satıcı’nın öngöremeyeceği mücbir sebepler oluşursa ve ürün süresinde teslim edilemez ise, durum Alıcı’ya bildirilir. Alıcı, siparişin iptalini, ürünün benzeri ile değiştirilmesini veya engel ortadan kalkana dek teslimatın ertelenmesini talep edebilir.<br> Alıcı siparişi iptal ederse; ödemeyi nakit ile yapmış ise iptalinden itibaren 14 gün içinde kendisine nakden bu ücret ödenir.<br> Alıcı, ödemeyi kredi kartı ile yapmış ise ve iptal ederse, bu iptalden itibaren yine 14 gün içinde ürün bedeli bankaya iade edilir, ancak bankanın alıcının hesabına 2-3 hafta içerisinde aktarması olasıdır.<br>ALICININ ÜRÜNÜ KONTROL ETME YÜKÜMLÜLÜĞÜ:<br>10.Alıcı, sözleşme konusu mal/hizmeti teslim almadan önce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı ve ayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. <br>Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul edilecektir. <br>ALICI , Teslimden sonra mal/hizmeti özenle korunmak zorundadır. <br>Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır. Ürünle birlikte Fatura da iade edilmelidir.<br>CAYMA HAKKI:<br>11.ALICI; satın aldığı ürünün kendisine veya gösterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on dört) gün içerisinde, SATICI’ya aşağıdaki iletişim bilgileri üzerinden bildirmek şartıyla hiçbir hukuki ve cezai sorumluluk üstlenmeksizin ve hiçbir gerekçe göstermeksizin malı reddederek sözleşmeden cayma hakkını kullanabilir.<br>12.SATICININ CAYMA HAKKI BİLDİRİMİ YAPILACAK İLETİŞİM BİLGİLERİ: <br> ŞİRKETADI/UNVANI: Osmanlı Sanayi Ürünleri Paz.Tic Ltd . Şti. <br>ADRES: Atatürk Caddesi Papatya Çıkmazı Sokak No:5-A Maltepe-İstanbul <br>EPOSTA:info@osmanlisanayi.com <br>TEL:0216 371 61 42 <br>FAKS: 0216 216 15 53 <br>CAYMA HAKKININ SÜRESİ:13.Alıcı, satın aldığı eğer bir hizmet ise, bu 14 günlük süre sözleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı süresi sona ermeden önce, tüketicinin onayı ile hizmetin ifasına başlanan hizmet sözleşmelerinde cayma hakkı kullanılamaz.<br>14.Cayma hakkının kullanımından kaynaklanan masraflar SATICI’ ya aittir.<br>15.Cayma hakkının kullanılması için 14 (ondört) günlük süre içinde SATICI’ ya iadeli taahhütlü posta, faks veya eposta ile yazılı bildirimde bulunulması ve ürünün işbu sözleşmede düzenlenen “Cayma Hakkı Kullanılamayacak Ürünler” hükümleri çerçevesinde kullanılmamış olması şarttır.<br>CAYMA HAKKININ KULLANIMI:<br>16. 3. kişiye veya ALICI’ ya teslim edilen ürünün faturası, (İade edilmek istenen ürünün faturası kurumsal ise, iade ederken kurumun düzenlemiş olduğu iade faturası ile birlikte gönderilmesi gerekmektedir. Faturası kurumlar adına düzenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)<br>17.İade formu, İade edilecek ürünlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.<br>İADE KOŞULLARI:18.SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en geç 10 günlük süre içerisinde toplam bedeli ve ALICI’yı borç altına sokan belgeleri ALICI’ ya iade etmek ve 20 günlük süre içerisinde malı iade almakla yükümlüdür.<br>19.ALICI’ nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imkânsızlaşırsa ALICI kusuru oranında SATICI’ nın zararlarını tazmin etmekle yükümlüdür. Ancak cayma hakkı süresi içinde malın veya ürünün usulüne uygun kullanılması sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir. <br>20.Cayma hakkının kullanılması nedeniyle SATICI tarafından düzenlenen kampanya limit tutarının altına düşülmesi halinde kampanya kapsamında faydalanılan indirim miktarı iptal edilir.<br>CAYMA HAKKI KULLANILAMAYACAK ÜRÜNLER: <br>21.ALICI’nın isteği veya açıkça kişisel ihtiyaçları doğrultusunda hazırlanan ve geri gönderilmeye müsait olmayan, iç giyim alt parçaları, mayo ve bikini altları, makyaj malzemeleri, tek kullanımlık ürünler, çabuk bozulma tehlikesi olan veya son kullanma tarihi geçme ihtimali olan mallar, ALICI’ya teslim edilmesinin ardından ALICI tarafından ambalajı açıldığı takdirde iade edilmesi sağlık ve hijyen açısından uygun olmayan ürünler, teslim edildikten sonra başka ürünlerle karışan ve doğası gereği ayrıştırılması mümkün olmayan ürünler, Abonelik sözleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi süreli yayınlara ilişkin mallar, Elektronik ortamda anında ifa edilen hizmetler veya tüketiciye anında teslim edilen gayrimaddi mallar, ile ses veya görüntü kayıtlarının, kitap, dijital içerik, yazılım programlarının, veri kaydedebilme ve veri depolama cihazlarının, bilgisayar sarf malzemelerinin, ambalajının ALICI tarafından açılmış olması halinde iadesi Yönetmelik gereği mümkün değildir. <br>Ayrıca Cayma hakkı süresi sona ermeden önce, tüketicinin onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması da Yönetmelik gereği mümkün değildir.<br>22.Kozmetik ve kişisel bakım ürünleri, iç giyim ürünleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve kasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi için ambalajlarının açılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları gerekir.<br>TEMERRÜT HALİ VE HUKUKİ SONUÇLARI <br>23.ALICI, ödeme işlemlerini kredi kartı ile yaptığı durumda temerrüde düştüğü takdirde, kart sahibi banka ile arasındaki kredi kartı sözleşmesi çerçevesinde faiz ödeyeceğini ve bankaya karşı sorumlu olacağını kabul, beyan ve taahhüt eder. <br>Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve vekâlet ücretini ALICI’dan talep edebilir ve her koşulda ALICI’nın borcundan dolayı temerrüde düşmesi halinde, ALICI, borcun gecikmeli ifasından dolayı SATICI’nın uğradığı zarar ve ziyanını ödeyeceğini kabul eder. <br>ÖDEME VE TESLİMAT <br>24.Banka Havalesi veya EFT (Elektronik Fon Transferi) yaparak, …………, ………, bankası hesaplarımızdan (TL) herhangi birine yapabilirsiniz.<br>25.Sitemiz üzerinden kredi kartlarınız ile, Her türlü kredi kartınıza online tek ödeme ya da online taksit imkânlarından yararlanabilirsiniz. Online ödemelerinizde siparişiniz sonunda kredi kartınızdan tutar çekim işlemi gerçekleşecektir.', '', 2, '1', 'iptal-iade-sartlari'),
(3, '', 'Gizlilik ve Güvenlik', 'GİZLİLİK VE GÜVENLİK POLİTİKASI <br>Mağazamızda verilen tüm servisler ve Atatürk Cad.Papatya Çıkmazı Sokak No:5-A Maltepe-İstanbul adresinde kayıtlı Osmanlı Sanayi Ürünleri Paz. Ltd. Şti. firmamıza aittir ve firmamız tarafından işletilir.<br>Firmamız, çeşitli amaçlarla kişisel veriler toplayabilir. Aşağıda, toplanan kişisel verilerin nasıl ve ne şekilde toplandığı, bu verilerin nasıl ve ne şekilde korunduğu belirtilmiştir.<br>Üyelik veya Mağazamız üzerindeki çeşitli form ve anketlerin doldurulması suretiyle üyelerin kendileriyle ilgili bir takım kişisel bilgileri (isim-soy isim, firma bilgileri, telefon, adres veya e-posta adresleri gibi) Mağazamız tarafından işin doğası gereği toplanmaktadır.<br>Firmamız bazı dönemlerde müşterilerine ve üyelerine kampanya bilgileri, yeni ürünler hakkında bilgiler, promosyon teklifleri gönderebilir. <br>Üyelerimiz bu gibi bilgileri alıp almama konusunda her türlü seçimi üye olurken yapabilir, sonrasında üye girişi yaptıktan sonra hesap bilgileri bölümünden bu seçimi değiştirilebilir ya da kendisine gelen bilgilendirme iletisindeki linkle bildirim yapabilir.<br>Mağazamız üzerinden veya eposta ile gerçekleştirilen onay sürecinde, üyelerimiz tarafından mağazamıza elektronik ortamdan iletilen kişisel bilgiler, Üyelerimiz ile yaptığımız “Kullanıcı Sözleşmesi” ile belirlenen amaçlar ve kapsam dışında üçüncü kişilere açıklanmayacaktır.<br>Sistemle ilgili sorunların tanımlanması ve verilen hizmet ile ilgili çıkabilecek sorunların veya uyuşmazlıkların hızla çözülmesi için, Firmamız, üyelerinin IP adresini kaydetmekte ve bunu kullanmaktadır. IP adresleri, kullanıcıları genel bir şekilde tanımlamak ve kapsamlı demografik bilgi toplamak amacıyla da kullanılabilir.<br>Firmamız, Üyelik Sözleşmesi ile belirlenen amaçlar ve kapsam dışında da, talep edilen bilgileri kendisi veya işbirliği içinde olduğu kişiler tarafından doğrudan pazarlama yapmak amacıyla kullanabilir. <br>Kişisel bilgiler, gerektiğinde kullanıcıyla temas kurmak için de kullanılabilir. Firmamız tarafından talep edilen bilgiler veya kullanıcı tarafından sağlanan bilgiler veya Mağazamız üzerinden yapılan işlemlerle ilgili bilgiler; Firmamız ve işbirliği içinde olduğu kişiler tarafından, “Üyelik Sözleşmesi” ile belirlenen amaçlar ve kapsam dışında da, üyelerimizin kimliği ifşa edilmeden çeşitli istatistiksel değerlendirmeler, veri tabanı oluşturma ve pazar araştırmalarında kullanılabilir.<br>Firmamız, gizli bilgileri kesinlikle özel ve gizli tutmayı, bunu bir sır saklama yükümü olarak addetmeyi ve gizliliğin sağlanması ve sürdürülmesi, gizli bilginin tamamının veya herhangi bir kısmının kamu alanına girmesini veya yetkisiz kullanımını veya üçüncü bir kişiye ifşasını önlemek için gerekli tüm tedbirleri almayı ve gerekli özeni göstermeyi taahhüt etmektedir.<br>KREDİ KARTI GÜVENLİĞİ <br> Firmamız, alışveriş sitelerimizden alışveriş yapan kredi kartı sahiplerinin güvenliğini ilk planda tutmaktadır. Kredi kartı bilgileriniz hiçbir şekilde sistemimizde saklanmamaktadır. <br>İşlemler sürecine girdiğinizde güvenli bir sitede olduğunuzu anlamak için dikkat etmeniz gereken iki şey vardır. Bunlardan biri tarayıcınızın en alt satırında bulunan bir anahtar ya da kilit simgesidir. <br>Bu güvenli bir internet sayfasında olduğunuzu gösterir ve her türlü bilgileriniz şifrelenerek korunur. Bu bilgiler, ancak satış işlemleri sürecine bağlı olarak ve verdiğiniz talimat istikametinde kullanılır. <br>Alışveriş sırasında kullanılan kredi kartı ile ilgili bilgiler alışveriş sitelerimizden bağımsız olarak 128 bit SSL (Secure Sockets Layer) protokolü ile şifrelenip sorgulanmak üzere ilgili bankaya ulaştırılır. Kartın kullanılabilirliği onaylandığı takdirde alışverişe devam edilir. Kartla ilgili hiçbir bilgi tarafımızdan görüntülenemediğinden ve kaydedilmediğinden, üçüncü şahısların herhangi bir koşulda bu bilgileri ele geçirmesi engellenmiş olur.<br>Online olarak kredi kartı ile verilen siparişlerin ödeme/fatura/teslimat adresi bilgilerinin güvenilirliği firmamiz tarafından Kredi Kartları Dolandırıcılığı’na karşı denetlenmektedir. Bu yüzden, alışveriş sitelerimizden ilk defa sipariş veren müşterilerin siparişlerinin tedarik ve teslimat aşamasına gelebilmesi için öncelikle finansal ve adres/telefon bilgilerinin doğruluğunun onaylanması gereklidir. Bu bilgilerin kontrolü için gerekirse kredi kartı sahibi müşteri ile veya ilgili banka ile irtibata geçilmektedir.<br>Üye olurken verdiğiniz tüm bilgilere sadece siz ulaşabilir ve siz değiştirebilirsiniz. Üye giriş bilgilerinizi güvenli koruduğunuz takdirde başkalarının sizinle ilgili bilgilere ulaşması ve bunları değiştirmesi mümkün değildir. Bu amaçla, üyelik işlemleri sırasında 128 bit SSL güvenlik alanı içinde hareket edilir. Bu sistem kırılması mümkün olmayan bir uluslararası bir şifreleme standardıdır.<br> Bilgi hattı veya müşteri hizmetleri servisi bulunan ve açık adres ve telefon bilgilerinin belirtildiği İnternet alışveriş siteleri günümüzde daha fazla tercih edilmektedir. <br>Bu sayede aklınıza takılan bütün konular hakkında detaylı bilgi alabilir, online alışveriş hizmeti sağlayan firmanın güvenirliği konusunda daha sağlıklı bilgi edinebilirsiniz.<br>Not: İnternet alışveriş sitelerinde firmanın açık adresinin ve telefonun yer almasına dikkat edilmesini tavsiye ediyoruz. Alışveriş yapacaksanız alışverişinizi yapmadan ürünü aldığınız mağazanın bütün telefon / adres bilgilerini not edin. Eğer güvenmiyorsanız alışverişten önce telefon ederek teyit edin. Firmamıza ait tüm online alışveriş sitelerimizde firmamıza dair tüm bilgiler ve firma yeri belirtilmiştir.<br>MAİL ORDER KREDİ KART BİLGİLERİ GÜVENLİĞİ <br>Kredi kartı mail-order yöntemi ile bize göndereceğiniz kimlik ve kredi kart bilgileriniz firmamız tarafından gizlilik prensibine göre saklanacaktır. Bu bilgiler olası banka ile oluşubilecek kredi kartından para çekim itirazlarına karşı 60 gün süre ile bekletilip daha sonrasında imha edilmektedir. Sipariş ettiğiniz ürünlerin bedeli karşılığında bize göndereceğiniz tarafınızdan onaylı mail-order formu bedeli dışında herhangi bir bedelin kartınızdan çekilmesi halinde doğal olarak bankaya itiraz edebilir ve bu tutarın ödenmesini engelleyebileceğiniz için bir risk oluşturmamaktadır.<br>ÜÇÜNCÜ TARAF WEB SİTELERİ VE UYGULAMALAR<br>Mağazamız, web sitesi dâhilinde başka sitelere link verebilir. Firmamız, bu linkler vasıtasıyla erişilen sitelerin gizlilik uygulamaları ve içeriklerine yönelik herhangi bir sorumluluk taşımamaktadır. Firmamıza ait sitede yayınlanan reklamlar, reklamcılık yapan iş ortaklarımız aracılığı ile kullanıcılarımıza dağıtılır. İş bu sözleşmedeki Gizlilik Politikası Prensipleri, sadece Mağazamızın kullanımına ilişkindir, üçüncü taraf web sitelerini kapsamaz.<br>İSTİSNAİ HALLER<br>Aşağıda belirtilen sınırlı hallerde Firmamız, işbu “Gizlilik Politikası” hükümleri dışında kullanıcılara ait bilgileri üçüncü kişilere açıklayabilir. Bu durumlar sınırlı sayıda olmak üzere;<br>1.Kanun, Kanun Hükmünde Kararname, Yönetmelik v.b. yetkili hukuki otorite tarafından çıkarılan ve yürürlükte olan hukuk kurallarının getirdiği zorunluluklara uymak;<br>2.Mağazamızın kullanıcılarla akdettiği “Üyelik Sözleşmesi”‘nin ve diğer sözleşmelerin gereklerini yerine getirmek ve bunları uygulamaya koymak amacıyla;<br>3.Yetkili idari ve adli otorite tarafından usulüne göre yürütülen bir araştırma veya soruşturmanın yürütümü amacıyla kullanıcılarla ilgili bilgi talep edilmesi;<br>4.Kullanıcıların hakları veya güvenliklerini korumak için bilgi vermenin gerekli olduğu hallerdir. <br>E-POSTA GÜVENLİĞİ <br>Mağazamızın Müşteri Hizmetleri’ne, herhangi bir siparişinizle ilgili olarak göndereceğiniz e-postalarda, asla kredi kartı numaranızı veya şifrelerinizi yazmayınız. E-postalarda yer alan bilgiler üçüncü şahıslar tarafından görülebilir. Firmamız e-postalarınızdan aktarılan bilgilerin güvenliğini hiçbir koşulda garanti edemez.<br>TARAYICI ÇEREZLERİ<br>Firmamız, mağazamızı ziyaret eden kullanıcılar ve kullanıcıların web sitesini kullanımı hakkındaki bilgileri teknik bir iletişim dosyası (Çerez-Cookie) kullanarak elde edebilir. Bahsi geçen teknik iletişim dosyaları, ana bellekte saklanmak üzere bir internet sitesinin kullanıcının tarayıcısına (browser) gönderdiği küçük metin dosyalarıdır. Teknik iletişim dosyası site hakkında durum ve tercihleri saklayarak İnternet’in kullanımını kolaylaştırır.<br>Teknik iletişim dosyası, siteyi kaç kişinin ziyaret ettiğini, bir kişinin siteyi hangi amaçla, kaç kez ziyaret ettiğini ve ne kadar sitede kaldıkları hakkında istatistiksel bilgileri elde etmeye ve kullanıcılar için özel tasarlanmış kullanıcı sayfalarından dinamik olarak reklam ve içerik üretilmesine yardımcı olur. Teknik iletişim dosyası, ana bellekte veya e-postanızdan veri veya başkaca herhangi bir kişisel bilgi almak için tasarlanmamıştır. Tarayıcıların pek çoğu başta teknik iletişim dosyasını kabul eder biçimde tasarlanmıştır ancak kullanıcılar dilerse teknik iletişim dosyasının gelmemesi veya teknik iletişim dosyasının gönderildiğinde uyarı verilmesini sağlayacak biçimde ayarları değiştirebilirler.Firmamız, işbu “Gizlilik Politikası” hükümlerini dilediği zaman sitede yayınlamak veya kullanıcılara elektronik posta göndermek veya sitesinde yayınlamak suretiyle değiştirebilir. <br>Gizlilik Politikası hükümleri değiştiği takdirde, yayınlandığı tarihte yürürlük kazanır.Gizlilik politikamız ile ilgili her türlü soru ve önerileriniz için ……………….. adresine email gönderebilirsiniz. <br>Firmamız’a ait aşağıdaki iletişim bilgilerinden ulaşabilirsiniz.<br>Firma Ünvanı: Osmanlı Sanayi Ürünleri Paz. Ltd. Şti.<br>Adres: Atatürk Cad.Papatya Çıkmazı Sokak No:5-A Maltepe-İstanbul <br>Eposta: info@osmanlisanayi.com<br>Tel: 0216 371 61 42', '', 3, '1', 'gizlilik-ve-guvenlik'),
(4, '', 'Mesafeli Satış Sözleşmesi', 'MESAFELİ SATIŞ SÖZLEŞMESİ<br>1.TARAFLAR <br>İşbu Sözleşme aşağıdaki taraflar arasında aşağıda belirtilen hüküm ve şartlar çerçevesinde imzalanmıştır. <br>A.‘ALICI’ ; (sözleşmede bundan sonra “ALICI” olarak anılacaktır) <br>B.‘SATICI’ ; (sözleşmede bundan sonra “SATICI” olarak anılacaktır)<br>AD- SOYAD: OSMANLI SANAYİ ÜRÜNLERİ PAZARLAMA TİC.LTD.ŞTİ. <br>ADRES: Atatürk Caddesi Papatya Çıkmazı Sokak No:5-A Maltepe-İstanbul <br>İş bu sözleşmeyi kabul etmekle ALICI, sözleşme konusu siparişi onayladığı takdirde sipariş konusu bedeli ve varsa kargo ücreti, vergi gibi belirtilen ek ücretleri ödeme yükümlülüğü altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.<br>2.TANIMLAR <br>İşbu sözleşmenin uygulanmasında ve yorumlanmasında aşağıda yazılı terimler karşılarındaki yazılı açıklamaları ifade edeceklerdir.<br>BAKAN: Gümrük ve Ticaret Bakanı’nı,<br>BAKANLIK: Gümrük ve Ticaret Bakanlığı’nı,<br>KANUN: 6502 sayılı Tüketicinin Korunması Hakkında Kanun’u,<br>YÖNETMELİK: Mesafeli Sözleşmeler Yönetmeliği’ni (RG:27.11.2014/29188)<br>HİZMET: Bir ücret veya menfaat karşılığında yapılan ya da yapılması taahhüt edilen mal sağlama dışındaki her türlü tüketici işleminin konusunu ,<br>SATICI: Ticari veya mesleki faaliyetleri kapsamında tüketiciye mal sunan veya mal sunan adına veya hesabına hareket eden şirketi,<br>ALICI: Bir mal veya hizmeti ticari veya mesleki olmayan amaçlarla edinen, kullanan veya yararlanan gerçek ya da tüzel kişiyi,<br>SİTE: SATICI’ya ait internet sitesini,<br>SİPARİŞ VEREN: Bir mal veya hizmeti SATICI’ya ait internet sitesi üzerinden talep eden gerçek ya da tüzel kişiyi,<br>TARAFLAR: SATICI ve ALICI’yı,<br>SÖZLEŞME: SATICI ve ALICI arasında akdedilen işbu sözleşmeyi,<br>MAL: Alışverişe konu olan taşınır eşyayı ve elektronik ortamda kullanılmak üzere hazırlanan yazılım, ses, görüntü ve benzeri gayri maddi malları ifade eder.<br>3.KONU <br>İşbu Sözleşme, ALICI’nın, SATICI’ya ait internet sitesi üzerinden elektronik ortamda siparişini verdiği aşağıda nitelikleri ve satış fiyatı belirtilen ürünün satışı ve teslimi ile ilgili olarak 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmelere Dair Yönetmelik hükümleri gereğince tarafların hak ve yükümlülüklerini düzenler. <br>Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. <br>İlan edilen fiyatlar ve vaatler güncelleme yapılana ve değiştirilene kadar geçerlidir. Süreli olarak ilan edilen fiyatlar ise belirtilen süre sonuna kadar geçerlidir. <br>4. SATICI BİLGİLERİ <br>Ünvanı : OSMANLI SANAYİ ÜRÜNLERİ PAZARLAMA TİC. LTD. ŞTİ. <br>Adres : Atatürk Caddesi Papatya Çıkmazı Sokak No:5-A Maltepe-İstanbul <br>Telefon : 0216 371 61 42 <br>Faks : 0216 216 15 53<br>Eposta : info@osmanlisanayi.com <br>5. ALICI BİLGİLERİ <br>Teslim edilecek kişi <br>Teslimat Adresi<br> Telefon<br>Faks<br>Eposta/kullanıcı adı<br>6. SİPARİŞ VEREN KİŞİ BİLGİLERİ <br>Ad/Soyad/Unvan<br>Adres<br>Telefon<br>Faks<br>Eposta/kullanıcı adı<br>7. SÖZLEŞME KONUSU ÜRÜN/ÜRÜNLER BİLGİLERİ<br>1. Malın /Ürün/Ürünlerin/ Hizmetin temel özelliklerini (türü, miktarı, marka/modeli, rengi, adedi) SATICI’ya ait internet sitesinde yayınlanmaktadır. Satıcı tarafından kampanya düzenlenmiş ise ilgili ürünün temel özelliklerini kampanya süresince inceleyebilirsiniz. Kampanya tarihine kadar geçerlidir.<br>7.2. Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler güncelleme yapılana ve değiştirilene kadar geçerlidir. Süreli olarak ilan edilen fiyatlar ise belirtilen süre sonuna kadar geçerlidir.<br>7.3. Sözleşme konusu mal ya da hizmetin tüm vergiler dâhil satış fiyatı aşağıda gösterilmiştir.<br>Ürün Açıklaması <br>Adet Birim Fiyatı <br>Ara Toplam(KDV Dahil)<br>Kargo Tutarı <br>Toplam :Ödeme Şekli ve Planı <br>Teslimat Adresi <br>Teslim Edilecek kişi<br>Fatura Adresi<br>Sipariş Tarihi<br>Teslimat tarihi<br>Teslim şekli <br>7.4. Ürün sevkiyat masrafı olan kargo ücreti ALICI tarafından ödenecektir.<br>8. FATURA BİLGİLERİ<br>Ad/Soyad/Unvan<br>Adres<br>Telefon<br>Faks<br>Eposta/kullanıcı adı<br>Fatura teslim : Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte teslim edilecektir.<br>9. GENEL HÜKÜMLER <br>9.1. ALICI, SATICI’ya ait internet sitesinde sözleşme konusu ürünün temel nitelikleri, satış fiyatı ve ödeme şekli ile teslimata ilişkin ön bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve taahhüt eder.<br> ALICI’nın; Ön Bilgilendirmeyi elektronik ortamda teyit etmesi, mesafeli satış sözleşmesinin kurulmasından evvel, SATICI tarafından ALICI’ ya verilmesi gereken adresi, siparişi verilen ürünlere ait temel özellikleri, ürünlerin vergiler dâhil fiyatını, ödeme ve teslimat bilgilerini de doğru ve eksiksiz olarak edindiğini kabul, beyan ve taahhüt eder.<br>9.2. Sözleşme konusu her bir ürün, 30 günlük yasal süreyi aşmamak kaydı ile ALICI’ nın yerleşim yeri uzaklığına bağlı olarak internet sitesindeki ön bilgiler kısmında belirtilen süre zarfında ALICI veya ALICI’nın gösterdiği adresteki kişi ve/veya kuruluşa teslim edilir. <br>Bu süre içinde ürünün ALICI’ya teslim edilememesi durumunda, ALICI’nın sözleşmeyi feshetme hakkı saklıdır.<br>9.3. SATICI, Sözleşme konusu ürünü eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri, kullanım kılavuzları işin gereği olan bilgi ve belgeler ile teslim etmeyi, her türlü ayıptan arî olarak yasal mevzuat gereklerine göre sağlam, standartlara uygun bir şekilde işi doğruluk ve dürüstlük esasları dâhilinde ifa etmeyi, hizmet kalitesini koruyup yükseltmeyi, işin ifası sırasında gerekli dikkat ve özeni göstermeyi, ihtiyat ve öngörü ile hareket etmeyi kabul, beyan ve taahhüt eder.<br>9.4. SATICI, sözleşmeden doğan ifa yükümlülüğünün süresi dolmadan ALICI’yı bilgilendirmek ve açıkça onayını almak suretiyle eşit kalite ve fiyatta farklı bir ürün tedarik edebilir.<br>9.5. SATICI, sipariş konusu ürün veya hizmetin yerine getirilmesinin imkânsızlaşması halinde sözleşme konusu yükümlülüklerini yerine getiremezse, bu durumu, öğrendiği tarihten itibaren 3 gün içinde yazılı olarak tüketiciye bildireceğini, 14 günlük süre içinde toplam bedeli ALICI’ya iade edeceğini kabul, beyan ve taahhüt eder.<br>9.6. ALICI, Sözleşme konusu ürünün teslimatı için işbu Sözleşme’yi elektronik ortamda teyit edeceğini, herhangi bir nedenle sözleşme konusu ürün bedelinin ödenmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI’nın sözleşme konusu ürünü teslim yükümlülüğünün sona ereceğini kabul, beyan ve taahhüt eder.<br>9.7. ALICI, Sözleşme konusu ürünün ALICI veya ALICI’nın gösterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra ALICI’ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda sözleşme konusu ürün bedelinin ilgili banka veya finans kuruluşu tarafından SATICI’ya ödenmemesi halinde, ALICI Sözleşme konusu ürünü 3 gün içerisinde nakliye gideri SATICI’ya ait olacak şekilde SATICI’ya iade edeceğini kabul, beyan ve taahhüt eder.<br>9.8. SATICI, tarafların iradesi dışında gelişen, önceden öngörülemeyen ve tarafların borçlarını yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması gibi mücbir sebepler halleri nedeni ile sözleşme konusu ürünü süresi içinde teslim edemez ise, durumu ALICI’ya bildireceğini kabul, beyan ve taahhüt eder. ALICI da siparişin iptal edilmesini, sözleşme konusu ürünün varsa emsali ile değiştirilmesini ve/veya teslimat süresinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini SATICI’dan talep etme hakkını haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI’nın nakit ile yaptığı ödemelerde, ürün tutarı 14 gün içinde kendisine nakden ve defaten ödenir. ALICI’nın kredi kartı ile yaptığı ödemelerde ise, ürün tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 gün içerisinde ilgili bankaya iade edilir. ALICI, SATICI tarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama sürecin 2 ile 3 haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI’nın hesaplarına yansıması halinin tamamen banka işlem süreci ile ilgili olduğundan, ALICI, olası gecikmeler için SATICI’yı sorumlu tutamayacağını kabul, beyan ve taahhüt eder.<br>9.9. SATICININ, ALICI tarafından siteye kayıt formunda belirtilen veya daha sonra kendisi tarafından güncellenen adresi, e-posta adresi, sabit ve mobil telefon hatları ve diğer iletişim bilgileri üzerinden mektup, e-posta, SMS, telefon görüşmesi ve diğer yollarla iletişim, pazarlama, bildirim ve diğer amaçlarla ALICI’ya ulaşma hakkı bulunmaktadır. ALICI, işbu sözleşmeyi kabul etmekle SATICI’nın kendisine yönelik yukarıda belirtilen iletişim faaliyetlerinde bulunabileceğini kabul ve beyan etmektedir.<br>9.10. ALICI, sözleşme konusu mal/hizmeti teslim almadan önce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı ve ayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul edilecektir. Teslimden sonra mal/hizmetin özenle korunması borcu, ALICI’ya aittir. Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır. Fatura iade edilmelidir.<br>9.11. ALICI ile sipariş esnasında kullanılan kredi kartı hamilinin aynı kişi olmaması veya ürünün ALICI’ya tesliminden evvel, siparişte kullanılan kredi kartına ilişkin güvenlik açığı tespit edilmesi halinde, SATICI, kredi kartı hamiline ilişkin kimlik ve iletişim bilgilerini, siparişte kullanılan kredi kartının bir önceki aya ait ekstresini yahut kart hamilinin bankasından kredi kartının kendisine ait olduğuna ilişkin yazıyı ibraz etmesini ALICI’dan talep edebilir.<br>ALICI’nın talebe konu bilgi/belgeleri temin etmesine kadar geçecek sürede sipariş dondurulacak olup, mezkur taleplerin 24 saat içerisinde karşılanmaması halinde ise SATICI, siparişi iptal etme hakkını haizdir.<br>9.12. ALICI, SATICI’ya ait internet sitesine üye olurken verdiği kişisel ve diğer sair bilgilerin gerçeğe uygun olduğunu, SATICI’nın bu bilgilerin gerçeğe aykırılığı nedeniyle uğrayacağı tüm zararları, SATICI’nın ilk bildirimi üzerine derhal, nakden ve defaten tazmin edeceğini beyan ve taahhüt eder.<br>9.13. ALICI, SATICI’ya ait internet sitesini kullanırken yasal mevzuat hükümlerine riayet etmeyi ve bunları ihlal etmemeyi baştan kabul ve taahhüt eder. Aksi takdirde, doğacak tüm hukuki ve cezai yükümlülükler tamamen ve münhasıran ALICI’yı bağlayacaktır.<br>9.14. ALICI, SATICI’ya ait internet sitesini hiçbir şekilde kamu düzenini bozucu, genel ahlaka aykırı, başkalarını rahatsız ve taciz edici şekilde, yasalara aykırı bir amaç için, başkalarının maddi ve manevi haklarına tecavüz edecek şekilde kullanamaz. Ayrıca, üye başkalarının hizmetleri kullanmasını önleyici veya zorlaştırıcı faaliyet (spam, virus, truva atı, vb.) işlemlerde bulunamaz.<br>9.15. SATICI’ya ait internet sitesinin üzerinden, SATICI’nın kendi kontrolünde olmayan ve/veya başkaca üçüncü kişilerin sahip olduğu ve/veya işlettiği başka web sitelerine ve/veya başka içeriklere link verilebilir. Bu linkler ALICI’ya yönlenme kolaylığı sağlamak amacıyla konmuş olup herhangi bir web sitesini veya o siteyi işleten kişiyi desteklememekte ve Link verilen web sitesinin içerdiği bilgilere yönelik herhangi bir garanti niteliği taşımamaktadır.<br>9.16. İşbu sözleşme içerisinde sayılan maddelerden bir ya da birkaçını ihlal eden üye işbu ihlal nedeniyle cezai ve hukuki olarak şahsen sorumlu olup, SATICI’yı bu ihlallerin hukuki ve cezai sonuçlarından ari tutacaktır. Ayrıca; işbu ihlal nedeniyle, olayın hukuk alanına intikal ettirilmesi halinde, SATICI’nın üyeye karşı üyelik sözleşmesine uyulmamasından dolayı tazminat talebinde bulunma hakkı saklıdır.<br>10. CAYMA HAKKI <br>10.1. ALICI; mesafeli sözleşmenin mal satışına ilişkin olması durumunda, ürünün kendisine veya gösterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on dört) gün içerisinde, SATICI’ya bildirmek şartıyla hiçbir hukuki ve cezai sorumluluk üstlenmeksizin ve hiçbir gerekçe göstermeksizin malı reddederek sözleşmeden cayma hakkını kullanabilir. Hizmet sunumuna ilişkin mesafeli sözleşmelerde ise, bu süre sözleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı süresi sona ermeden önce, tüketicinin onayı ile hizmetin ifasına başlanan hizmet sözleşmelerinde cayma hakkı kullanılamaz. Cayma hakkının kullanımından kaynaklanan masraflar SATICI’ ya aittir. ALICI, iş bu sözleşmeyi kabul etmekle, cayma hakkı konusunda bilgilendirildiğini peşinen kabul eder.<br>10.2. Cayma hakkının kullanılması için 14 (ondört) günlük süre içinde SATICI’ ya iadeli taahhütlü posta, faks veya eposta ile yazılı bildirimde bulunulması ve ürünün işbu sözleşmede düzenlenen “Cayma Hakkı Kullanılamayacak Ürünler” hükümleri çerçevesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde, <br>a) 3. kişiye veya ALICI’ ya teslim edilen ürünün faturası, (İade edilmek istenen ürünün faturası kurumsal ise, iade ederken kurumun düzenlemiş olduğu iade faturası ile birlikte gönderilmesi gerekmektedir. Faturası kurumlar adına düzenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.) <br>b) İade formu, <br>c) İade edilecek ürünlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir. <br>d) SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en geç 10 günlük süre içerisinde toplam bedeli ve ALICI’yı borç altına sokan belgeleri ALICI’ ya iade etmek ve 20 günlük süre içerisinde malı iade almakla yükümlüdür. <br>e) ALICI’ nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imkânsızlaşırsa ALICI kusuru oranında SATICI’ nın zararlarını tazmin etmekle yükümlüdür. Ancak cayma hakkı süresi içinde malın veya ürünün usulüne uygun kullanılması sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir. <br>f) Cayma hakkının kullanılması nedeniyle SATICI tarafından düzenlenen kampanya limit tutarının altına düşülmesi halinde kampanya kapsamında faydalanılan indirim miktarı iptal edilir. <br>11. CAYMA HAKKI KULLANILAMAYACAK ÜRÜNLER <br>ALICI’nın isteği veya açıkça kişisel ihtiyaçları doğrultusunda hazırlanan ve geri gönderilmeye müsait olmayan, iç giyim alt parçaları, mayo ve bikini altları, makyaj malzemeleri, tek kullanımlık ürünler, çabuk bozulma tehlikesi olan veya son kullanma tarihi geçme ihtimali olan mallar, ALICI’ya teslim edilmesinin ardından ALICI tarafından ambalajı açıldığı takdirde iade edilmesi sağlık ve hijyen açısından uygun olmayan ürünler, teslim edildikten sonra başka ürünlerle karışan ve doğası gereği ayrıştırılması mümkün olmayan ürünler, Abonelik sözleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi süreli yayınlara ilişkin mallar, Elektronik ortamda anında ifa edilen hizmetler veya tüketiciye anında teslim edilen gayrimaddi mallar, ile ses veya görüntü kayıtlarının, kitap, dijital içerik, yazılım programlarının, veri kaydedebilme ve veri depolama cihazlarının, bilgisayar sarf malzemelerinin, ambalajının ALICI tarafından açılmış olması halinde iadesi Yönetmelik gereği mümkün değildir. <br>Ayrıca Cayma hakkı süresi sona ermeden önce, tüketicinin onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması da Yönetmelik gereği mümkün değildir.Kozmetik ve kişisel bakım ürünleri, iç giyim ürünleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve kasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi için ambalajlarının açılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları gerekir.<br>12. TEMERRÜT HALİ VE HUKUKİ SONUÇLARI <br>ALICI, ödeme işlemlerini kredi kartı ile yaptığı durumda temerrüde düştüğü takdirde, kart sahibi banka ile arasındaki kredi kartı sözleşmesi çerçevesinde faiz ödeyeceğini ve bankaya karşı sorumlu olacağını kabul, beyan ve taahhüt eder. Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve vekâlet ücretini ALICI’dan talep edebilir ve her koşulda ALICI’nın borcundan dolayı temerrüde düşmesi halinde, ALICI, borcun gecikmeli ifasından dolayı SATICI’nın uğradığı zarar ve ziyanını ödeyeceğini kabul, beyan ve taahhüt eder <br>13. YETKİLİ MAHKEME <br>İşbu sözleşmeden doğan uyuşmazlıklarda şikayet ve itirazlar, aşağıdaki kanunda belirtilen parasal sınırlar dâhilinde tüketicinin yerleşim yerinin bulunduğu veya tüketici işleminin yapıldığı yerdeki tüketici sorunları hakem heyetine veya tüketici mahkemesine yapılacaktır. Parasal sınıra ilişkin bilgiler aşağıdadır:01/01/2017 tarihinden itibaren geçerli olmak üzere, 2017 yılı için tüketici hakem heyetlerine yapılacak başvurularda değeri:<br>a) 2.400 (iki bin dört yüz) Türk Lirasının altında bulunan uyuşmazlıklarda ilçe tüketici hakem heyetleri,<br>b) Büyükşehir statüsünde olan illerde 2.400 (iki bin dört yüz) Türk Lirası ile 3.610 (üç bin altı yüz on) Türk Lirası arasındaki uyuşmazlıklarda il tüketici hakem heyetleri,<br>c) Büyükşehir statüsünde olmayan illerin merkezlerinde 3.610 (üç bin altı yüz on) Türk Lirasının altında bulunan uyuşmazlıklarda il tüketici hakem heyetleri,<br>ç) Büyükşehir statüsünde olmayan illere bağlı ilçelerde 2.400 (iki bin dört yüz) Türk Lirası ile 3.610 (üç bin altı yüz on) Türk Lirası arasındaki uyuşmazlıklarda il tüketici hakem heyetleri görevli kılınmışlardır.İşbu Sözleşme ticari amaçlarla yapılmaktadır.<br>14. YÜRÜRLÜK <br>ALICI, Site üzerinden verdiği siparişe ait ödemeyi gerçekleştirdiğinde işbu sözleşmenin tüm şartlarını kabul etmiş sayılır. <br>SATICI, siparişin gerçekleşmesi öncesinde işbu sözleşmenin sitede ALICI tarafından okunup kabul edildiğine dair onay alacak şekilde gerekli yazılımsal düzenlemeleri yapmakla yükümlüdür.<br>SATICI: OSMANLI SANAYİ ÜRÜNLERİ PAZARLAMA TİC.LTD.ŞTİ.ALICI:TARİH:', '', 4, '1', 'mesafeli-satis-sozlesmesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

DROP TABLE IF EXISTS `sepet`;
CREATE TABLE IF NOT EXISTS `sepet` (
  `sepet_id` int NOT NULL AUTO_INCREMENT,
  `kullanici_id` int NOT NULL,
  `urun_id` int NOT NULL,
  `urun_adet` int NOT NULL,
  `urun_renk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sepet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `kullanici_id`, `urun_id`, `urun_adet`, `urun_renk`) VALUES
(13, 1, 7, 1, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

DROP TABLE IF EXISTS `siparis`;
CREATE TABLE IF NOT EXISTS `siparis` (
  `siparis_id` int NOT NULL AUTO_INCREMENT,
  `siparis_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `siparis_no` int DEFAULT NULL,
  `kullanici_id` int NOT NULL,
  `siparis_toplam` float(9,2) NOT NULL,
  `siparis_tip` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `siparis_banka` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `siparis_odeme` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`siparis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=750018 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_zaman`, `siparis_no`, `kullanici_id`, `siparis_toplam`, `siparis_tip`, `siparis_banka`, `siparis_odeme`) VALUES
(750016, '2023-03-26 09:59:48', NULL, 7, 3290.00, 'Kredi Kartı', '', '0'),
(750017, '2023-03-26 10:00:36', NULL, 7, 3290.00, 'Banka havalesi/EFT', '', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

DROP TABLE IF EXISTS `siparis_detay`;
CREATE TABLE IF NOT EXISTS `siparis_detay` (
  `siparisdetay_id` int NOT NULL AUTO_INCREMENT,
  `siparis_id` int NOT NULL,
  `urun_id` int NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int NOT NULL,
  PRIMARY KEY (`siparisdetay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparisdetay_id`, `siparis_id`, `urun_id`, `urun_fiyat`, `urun_adet`) VALUES
(11, 750012, 4, 25.00, 1),
(12, 750012, 5, 95.00, 1),
(13, 750013, 5, 3000.00, 1),
(14, 750013, 17, 2600.00, 1),
(15, 750014, 1, 2350.00, 1),
(16, 750014, 8, 2900.00, 1),
(17, 750015, 2, 1820.00, 2),
(18, 750016, 1, 1645.00, 2),
(19, 750017, 1, 1645.00, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `urun_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `kategori_id` int NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_kategori` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urun_ad` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `urun_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urun_seourl` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `urun_stokkodu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urun_fiyat` int NOT NULL,
  `urun_indirim` int NOT NULL,
  `urun_keyword` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `urun_stok` int NOT NULL,
  `urun_ebat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urun_yukseklik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urun_montaj` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urun_olcu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urun_durum` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '1',
  `urun_onecikar` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  `urun_ozel` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  `urun_yeni` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  `urun_menu` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  `urun_alt` int NOT NULL,
  `urun_slider` enum('0','1') COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `kategori_id`, `urun_zaman`, `urun_kategori`, `urun_ad`, `urun_aciklama`, `urun_seourl`, `urun_stokkodu`, `urun_fiyat`, `urun_indirim`, `urun_keyword`, `urun_stok`, `urun_ebat`, `urun_yukseklik`, `urun_montaj`, `urun_olcu`, `urun_durum`, `urun_onecikar`, `urun_ozel`, `urun_yeni`, `urun_menu`, `urun_alt`, `urun_slider`) VALUES
(1, 1, '2017-07-19 16:42:08', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone E Serisi ', '', '', 'E-002', 2350, 30, 'Granit Eviye, Real Stone, E Serisi, E 002', 8, '520X430 mm', '185 mm', 'Tezgah Altı', '500X410 mm', '1', '1', '0', '0', '0', 0, '0'),
(2, 1, '2017-07-19 17:28:47', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone E Serisi ', '', '', 'E-003', 2600, 30, 'Granit Eviye Real Stone E Serisi E 003', 10, '545X410 mm', '190 mm', 'Tezgah Altı', '525X390 mm', '1', '1', '0', '0', '0', 0, '0'),
(3, 1, '2017-07-19 17:30:01', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone E Serisi', '', '', 'E-004', 2000, 30, 'Granit Eviye Real Stone E Serisi – E 004', 10, '420X420 mm', '185 mm', 'Tezgah Altı', '400X400 mm', '1', '1', '0', '0', '0', 0, '0'),
(4, 1, '2017-07-19 16:42:08', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone E Serisi ', '', '', 'E-001', 2300, 30, 'Granit Eviye Real Stone E Serisi E 001', 0, '510×390 mm', '190 mm', 'Tezgah Altı', '490×370 mm', '1', '1', '0', '0', '0', 0, '0'),
(5, 1, '2017-07-19 17:28:47', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone K Serisi ', '', '', 'K-002', 3000, 30, 'Granit Eviye Real Stone K Serisi – K 002', 0, '595X505 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '540×485 mm', '1', '1', '0', '0', '0', 0, '0'),
(6, 1, '2017-07-19 17:30:01', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone K Serisi ', '', '', 'K-001', 2900, 30, 'Granit Eviye Real Stone K Serisi – K 001', 0, '560X505 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '540×485 mm', '1', '0', '1', '0', '0', 0, '0'),
(7, 1, '2017-07-19 16:42:08', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone K Serisi ', '', '', 'K-003', 3100, 30, 'Granit Eviye Real Stone K Serisi – K 003', 0, '785 X 495 MM', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '765×475 mm', '1', '0', '1', '0', '0', 0, '0'),
(8, 1, '2017-07-19 17:28:47', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone K Serisi ', '', '', 'K-004', 2900, 30, 'Granit Eviye Real Stone K Serisi – K 004', 0, '550X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '530x480 mm', '1', '0', '1', '0', '0', 0, '0'),
(9, 1, '2017-07-19 17:30:01', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone K Serisi ', '', '', 'K-011', 2900, 30, 'Granit Eviye Real Stone K Serisi – K 011', 0, '560X460 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '540×440 mm', '1', '0', '1', '0', '0', 0, '0'),
(10, 1, '2017-07-19 16:42:08', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone K Serisi ', '', '', 'K-012', 3000, 30, 'Granit Eviye Real Stone K Serisi – K 012', 0, '595 X460 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '575x480 mm', '1', '0', '1', '0', '0', 0, '0'),
(11, 1, '2017-07-19 17:28:47', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone Pro Serisi ', '', '', 'P-001', 3500, 30, 'Granit Eviye Real Stone Pro Serisi – P 001', 0, '860X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '840×480 mm', '1', '0', '0', '1', '0', 0, '0'),
(12, 1, '2017-07-19 17:30:01', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone Pro Serisi ', '', '', 'P-002', 3600, 30, 'Granit Eviye Real Stone Pro Serisi – P 002', 0, '1.000X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '980×480 mm', '1', '0', '0', '1', '0', 0, '0'),
(13, 1, '2023-03-05 19:10:59', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone Pro Serisi ', '', '', 'P-009', 4500, 30, 'Granit Eviye Real Stone Pro Serisi – P 009', 0, '860X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '840×480 mm', '1', '0', '0', '1', '0', 0, '0'),
(14, 1, '2023-03-06 11:52:46', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone Pro Serisi ', '', '', 'P-010', 4500, 30, 'Granit Eviye Real Stone Pro Serisi – P 010', 0, '860X440 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '840×480 mm', '1', '0', '0', '1', '0', 0, '0'),
(15, 1, '2023-03-06 12:27:55', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone Pro Serisi ', '', '', 'P-018', 3800, 30, 'Granit Eviye Real Stone Pro Serisi – P 018', 0, '665×455 mm', '200 mm', 'Tezgah Altı,Tezgah Üstü,Tezgaha Sıfır', '590×385 mm', '1', '0', '0', '1', '0', 0, '0'),
(16, 1, '2023-03-06 13:23:25', 'REAL GRANİT EVYE', 'Granit Eviye Real Stone Y Serisi ', '', '', 'Y-001', 2300, 30, 'Granit Eviye Real Stone Y Serisi – Y 001', 0, 'Q465 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', 'Q445 mm', '1', '0', '0', '1', '0', 0, '0'),
(17, 1, '2023-03-06 13:26:58', 'REAL GRANİT EVYE', 'Real Granit Eviye K Serisi ', '', '', 'K-005', 2600, 30, 'Real Granit Eviye K Serisi – K005', 0, '500×455 mm', '210 mm', 'Tezgah Altı', '450×405mm', '1', '0', '0', '1', '0', 0, '0'),
(18, 1, '2023-03-06 13:26:58', 'REAL GRANİT EVYE', 'Real Granit Eviye Pro Serisi ', '', '', 'P-011', 3100, 30, 'Real Granit Eviye Pro Serisi – P 011', 0, '860×435 mm', '200 mm', 'Tezgah Üstü, Tezgaha Sıfır', '840x410 mm', '1', '0', '0', '1', '0', 0, '0'),
(19, 1, '2023-03-06 13:30:24', 'REAL GRANİT EVYE', 'Real Granit Eviye Pro Serisi ', '', '', 'P-016', 4600, 30, 'Real Granit Eviye Pro Serisi – P 016', 0, '765×455 mm', '200 mm', 'Tezgah Altı,Tezgah Üstü,Tezgaha Sıfır', '690×385 mm', '1', '0', '0', '1', '0', 0, '0'),
(20, 1, '2023-03-06 13:30:24', 'REAL GRANİT EVYE', 'Real Granit Eviye Pro Serisi ', '', '', 'P-017', 4600, 30, 'Real Granit Eviye Pro Serisi – P 017', 0, '770×460 mm', '200 mm', 'Tezgah Altı , Tezgah Üstü', '695×390 mm', '1', '0', '0', '1', '0', 0, '0'),
(21, 1, '2023-03-06 13:33:07', 'REAL GRANİT EVYE', 'Real Granit Eviye Pro Serisi ', '', '', 'P-019', 4600, 30, 'Real Granit Eviye Pro Serisi – P 019', 0, '840×445 mm', '200 mm', 'Tezgah Altı,Tezgah Üstü,Tezgaha Sıfır', '770×375 mm', '1', '0', '0', '0', '1', 0, '0'),
(22, 1, '2023-03-06 13:33:07', 'REAL GRANİT EVYE', 'Real Stone Granit Eviye K Serisi ', '', '', 'K-013', 3100, 30, 'Real Stone Granit Eviye K Serisi K 013', 0, '785X400 MM', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '765×450 mm', '1', '0', '0', '0', '0', 0, '0'),
(23, 1, '2023-03-06 13:35:58', 'REAL GRANİT EVYE', 'Real Stone Granit Eviye Pro Serisi ', '', '', 'P-004', 3400, 30, 'Real Stone Granit Eviye Pro Serisi – P 004', 0, '860×500 mm', '210 mm', 'Tezgah Üstü,Tezgaha Sıfır', '840×480 mm', '1', '0', '0', '0', '0', 0, '0'),
(24, 1, '2023-03-06 13:35:58', 'REAL GRANİT EVYE', 'Real Stone Granit Eviye Pro Serisi ', '', '', 'P-005', 3600, 30, 'Real Stone Granit Eviye Pro Serisi – P 005', 0, '1.000X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '980×480 mm', '1', '0', '0', '0', '0', 0, '0'),
(25, 1, '2023-03-06 13:38:51', 'REAL GRANİT EVYE', 'Real Stone Granit Eviye Pro Serisi ', '', '', 'P-006', 3500, 30, 'Real Stone Granit Eviye Pro Serisi – P 006', 0, '860X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '840×480 mm', '1', '0', '0', '0', '0', 0, '0'),
(26, 1, '2023-03-06 13:38:51', 'REAL GRANİT EVYE', 'Real Stone Granit Eviye Pro Serisi ', '', '', 'P-007', 3600, 30, 'Real Stone Granit Eviye Pro Serisi – P007', 0, '1.000X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '980×480 mm', '1', '0', '0', '0', '0', 0, '0'),
(27, 1, '2023-03-06 13:43:08', 'REAL GRANİT EVYE', 'Real Stone Granit Eviye Pro Serisi ', '', '', 'P-008', 3800, 30, 'Real Stone Granit Eviye Pro Serisi – P008', 0, '1.000X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '', '1', '0', '0', '0', '0', 0, '0'),
(28, 1, '2023-03-06 13:43:08', 'REAL GRANİT EVYE', 'Real Stone Granit Eviye Pro Serisi ', '', '', 'P-003', 3800, 30, 'Real Stone Granit Eviye Pro Serisi P003', 0, '1.000X500 mm', '185 mm', 'Tezgah Üstü, Tezgaha Sıfır', '980×480 mm', '1', '0', '0', '0', '0', 0, '0'),
(29, 0, '2023-03-26 16:23:00', '', 'SUMMER 2022', 'Save up to 70%', '', '', 0, 0, 'Save up to 70%', 0, '', '', '', '', '1', '0', '0', '0', '', 0, '1'),
(30, 0, '2023-03-26 16:23:00', '', 'SUMMER 2022', 'Save up to 70%', '', '', 0, 0, 'Save up to 70%', 0, '', '', '', '', '1', '0', '0', '0', '', 0, '1'),
(31, 0, '2023-03-26 16:23:00', '', 'SUMMER 2022', 'Save up to 70%', '', '', 0, 0, 'Save up to 70%', 0, '', '', '', '', '1', '0', '0', '0', '', 0, '1'),
(32, 0, '2023-03-26 17:25:06', '', 'Fashion Month <br>Ready in Capital <br>Shop', 'Lorem ipsum dolor sit amet consectetur adipiscing elit dolor', '', '', 0, 0, '', 0, '', '', '', '', '1', '0', '0', '0', '', 1, ''),
(33, 0, '2023-03-26 17:25:06', '', 'Fashion Month <br>Ready in Capital <br>Shop', 'Lorem ipsum dolor sit amet consectetur adipiscing elit dolor', '', '', 0, 0, '', 0, '', '', '', '', '1', '0', '0', '0', '', 1, ''),
(34, 0, '2023-03-26 17:25:06', '', 'Fashion Month<br>\nReady in Capital<br>\nShop', 'Lorem ipsum dolor sit amet consectetur adipiscing elit dolor', '', '', 0, 0, '', 0, '', '', '', '', '1', '0', '0', '0', '', 2, ''),
(35, 0, '2023-03-26 17:25:06', '', 'Fashion Month<br>\nReady in Capital<br>\nShop', 'Lorem ipsum dolor sit amet consectetur adipiscing elit dolor', '', '', 0, 0, '', 0, '', '', '', '', '1', '0', '0', '0', '', 2, ''),
(36, 0, '2023-03-26 20:34:41', '', 'New Season Sale', '40% OFF', '', '', 0, 0, '', 0, '', '', '', '', '1', '0', '0', '0', '0', 3, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunfoto`
--

DROP TABLE IF EXISTS `urunfoto`;
CREATE TABLE IF NOT EXISTS `urunfoto` (
  `urunfoto_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `urun_id` int NOT NULL,
  `urunfoto_resimyol` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urunfoto_resimyol2` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `urunfoto_sira` int NOT NULL,
  PRIMARY KEY (`urunfoto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `urunfoto`
--

INSERT INTO `urunfoto` (`urunfoto_id`, `urun_id`, `urunfoto_resimyol`, `urunfoto_resimyol2`, `urunfoto_sira`) VALUES
(1, 1, '2022/12/e001-c-2.jpg', '2022/12/e001-w-2.jpg', 1),
(2, 1, '2022/12/e001-c-2.jpg', '', 1),
(3, 1, '2022/12/e001-w-2.jpg', '', 2),
(4, 1, '2022/12/e001-c-2.jpg', '', 3),
(5, 2, '2022/12/e003-beyaz-granit-eviye.png', '2022/12/e003-beyaz-granit-eviye.png', 1),
(6, 2, '2022/12/e003-beyaz-granit-eviye.png', '', 2),
(7, 2, '2022/12/Ekran-Goruntusu-137.png', '', 3),
(8, 2, '2022/12/Ekran-Goruntusu-138.png', '', 4),
(9, 3, '2022/12/Ekran-Goruntusu-143.png', '2022/12/Ekran-Goruntusu-143.png', 1),
(10, 4, '2022/12/e001-b-2.jpg', '2022/12/e001-c-2.jpg', 1),
(11, 4, '2022/12/e001-b-2.jpg', '', 1),
(12, 4, '2022/12/e001-c-2.jpg', '', 2),
(13, 4, '2022/12/e001-g-2-800x800-1.jpg', '', 3),
(14, 4, '2022/12/e001-w-2.jpg', '', 4),
(15, 5, '2022/12/real-stone-granit-eviye-k-002-beyaz-1.jpg', '2022/12/real-stone-granit-eviye-k-002-antrasit-800x510-1.jpg', 1),
(16, 5, '2022/12/real-stone-granit-eviye-k-002-beyaz-1.jpg', '', 1),
(17, 5, '2022/12/real-stone-granit-eviye-k-002-antrasit-800x510-1.jpg', '', 2),
(18, 5, '2022/12/real-stone-granit-eviye-k-002-siyah.jpg', '', 3),
(19, 5, '2022/12/real-stone-granit-eviye-k-002-krerm-800x510-1.jpg', '', 4),
(20, 6, '2022/12/real-stone-granit-eviye-evye-k-001-antrasit.jpg', '2022/12/real-stone-granit-eviye-evye-k-001-beyaz.jpg', 1),
(21, 6, '2022/12/real-stone-granit-eviye-evye-k-001-antrasit.jpg', '', 1),
(22, 6, '2022/12/real-stone-granit-eviye-evye-k-001-beyaz.jpg', '', 2),
(23, 6, '2022/12/real-stone-granit-eviye-evye-k-001-krerm-800x510-1.jpg', '', 3),
(24, 6, '2022/12/real-stone-granit-eviye-evye-k-001-siyah.jpg', '', 4),
(25, 7, '2022/12/real-stone-granit-eviye-k-003-beyaz.jpg', '2022/12/real-stone-granit-eviye-k-003-antrasit.jpg', 1),
(26, 7, '2022/12/real-stone-granit-eviye-k-003-beyaz.jpg', '', 1),
(27, 7, '2022/12/real-stone-granit-eviye-k-003-antrasit.jpg', '', 2),
(28, 7, '2022/12/real-stone-granit-eviye-k-003-gri-800x510-1.jpg', '', 3),
(29, 7, '2022/12/real-stone-granit-eviye-k-003-krerm-800x510-1.jpg', '', 4),
(30, 8, '2022/12/real-stone-granit-eviye-k-004-siyah.jpg', '2022/12/real-stone-granit-eviye-k-004-beyaz.jpg', 1),
(31, 8, '2022/12/real-stone-granit-eviye-k-004-siyah.jpg', '', 1),
(32, 8, '2022/12/real-stone-granit-eviye-k-004-beyaz.jpg', '', 2),
(33, 8, '2022/12/real-stone-granit-eviye-k-004-gri.jpg', '', 3),
(34, 8, '2022/12/real-stone-granit-eviye-k-004-krerm-800x510-1.jpg', '', 4),
(35, 9, '2022/12/real-stone-granit-eviye-evye-lavabo-k-011-antrasit.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-k-011-beyaz.jpg', 1),
(36, 9, '2022/12/real-stone-granit-eviye-evye-lavabo-k-011-antrasit.jpg', '', 1),
(37, 9, '2022/12/real-stone-granit-eviye-evye-lavabo-k-011-beyaz.jpg', '', 2),
(38, 9, '2022/12/real-stone-granit-eviye-evye-lavabo-k-011-gri.jpg', '', 3),
(39, 9, '2022/12/real-stone-granit-eviye-evye-lavabo-k-011-krerm-800x510-1.jpg', '', 4),
(40, 10, '2022/12/real-stone-granit-eviye-evye-lavabo-k-012-beyaz.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-k-012-siyah.jpg', 1),
(41, 10, '2022/12/real-stone-granit-eviye-evye-lavabo-k-012-siyah.jpg', '', 2),
(42, 10, '2022/12/real-stone-granit-eviye-evye-lavabo-k-012-siyah.jpg', '', 3),
(43, 10, '2022/12/real-stone-granit-eviye-evye-lavabo-k-012-gri.jpg', '', 4),
(44, 10, '2022/12/real-stone-granit-eviye-evye-lavabo-k-012-krerm-800x510-1.jpg', '', 5),
(45, 10, '2022/12/real-stone-granit-eviye-evye-lavabo-k-012-siyah.jpg', '', 6),
(46, 11, '2022/12/pro-001.jpg', '2022/12/REAL-GRANIT-EVIYE-PRO-SERISI-–-P001-5.jpg', 1),
(47, 11, '2022/12/pro-001.jpg', '', 2),
(48, 11, '2022/12/REAL-GRANIT-EVIYE-PRO-SERISI-–-P001-5.jpg', '', 3),
(49, 11, '2022/12/REAL-GRANIT-EVIYE-PRO-SERISI-–-P001-7.jpg', '', 4),
(50, 11, '2022/12/REAL-GRANIT-EVIYE-PRO-SERISI-–-P001-6.jpg', '', 5),
(51, 12, '2022/12/pro2-8.jpg', '2022/12/pro2-7.jpg', 1),
(52, 12, '2022/12/pro2-8.jpg', '', 2),
(53, 12, '2022/12/pro2-7.jpg', '', 3),
(54, 12, '2022/12/pro2-5.jpg', '', 4),
(55, 12, '2022/12/pro2-3.jpg', '', 5),
(56, 12, '2022/12/pro2-2.jpg', '', 6),
(57, 13, '2022/12/real-stone-granit-eviye-evye-lavabo-p-009-antrasit.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-p009-olcu.jpg', 1),
(58, 13, '2022/12/real-stone-granit-eviye-evye-lavabo-p-009-antrasit.jpg', '', 2),
(59, 13, '2022/12/real-stone-granit-eviye-evye-lavabo-p009-olcu.jpg', '', 3),
(60, 13, '2022/12/real-stone-granit-eviye-evye-lavabo-p-009-siyah.jpg', '', 4),
(61, 13, '2022/12/real-stone-granit-eviye-evye-lavabo-p-009-krem.jpg', '', 5),
(62, 13, '2022/12/real-stone-granit-eviye-evye-lavabo-p-009-beyaz.jpg', '', 6),
(63, 14, '2022/12/real-stone-granit-eviye-evye-lavabo-p-010-beyaz.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-p-010-gri-800x510-1.jpg', 1),
(64, 14, '2022/12/real-stone-granit-eviye-evye-lavabo-p-010-beyaz.jpg', '', 2),
(65, 14, '2022/12/real-stone-granit-eviye-evye-lavabo-p-010-gri-800x510-1.jpg', '', 3),
(66, 14, '2022/12/real-stone-granit-eviye-evye-lavabo-p-010-siyah-800x510-1.jpg', '', 4),
(67, 14, '2022/12/real-stone-granit-eviye-evye-lavabo-p-010-antrasit-800x510-1.jpg', '', 5),
(68, 14, '2022/12/real-stone-granit-eviye-evye-lavabo-p-010-krem-800x510-1.jpg', '', 6),
(69, 15, '2022/12/p018beyaz.jpg', '2022/12/p018siyah.jpg', 1),
(70, 15, '2022/12/p018beyaz.jpg', '', 2),
(71, 15, '2022/12/p018siyah.jpg', '', 3),
(72, 15, '2022/12/p019gri.jpg', '', 4),
(73, 15, '2022/12/p018krem.jpg', '', 5),
(74, 15, '2022/12/p018antrasit.jpg', '', 6),
(75, 16, '2022/12/real-stone-granit-eviye-evye-lavabo-y-001-siyah.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-y-001-beyaz-1.jpg', 1),
(76, 16, '2022/12/real-stone-granit-eviye-evye-lavabo-y-001-siyah.jpg', '', 2),
(77, 16, '2022/12/real-stone-granit-eviye-evye-lavabo-y-001-beyaz-1.jpg', '', 3),
(78, 16, '2022/12/real-stone-granit-eviye-evye-lavabo-y-001-krerm.jpg', '', 4),
(79, 16, '2022/12/real-stone-granit-eviye-evye-lavabo-y-001-gri-800x510-1.jpg', '', 5),
(80, 16, '2022/12/real-stone-granit-eviye-evye-lavabo-y-001-antrasit-1.jpg', '', 6),
(81, 17, '2022/12/k011siyah.jpg', '2022/12/Ekran-Resmi-2022-01-31-09.51.05.png', 1),
(82, 17, '2022/12/k011siyah.jpg', '', 2),
(83, 17, '2022/12/Ekran-Resmi-2022-01-31-09.51.05.png', '', 3),
(84, 18, '2022/12/pro71-600x383-1.jpeg', '2022/12/pro67-600x383-1.jpeg', 1),
(85, 18, '2022/12/pro71-600x383-1.jpeg', '', 2),
(86, 18, '2022/12/pro67-600x383-1.jpeg', '', 3),
(87, 18, '2022/12/pro61-1-600x383-1.jpeg', '', 4),
(88, 18, '2022/12/pro70-600x383-1.jpeg', '', 5),
(89, 18, '2022/12/pro70-600x383-1.jpeg', '', 6),
(90, 19, '2022/12/granitevyep016siyah.jpg', '2022/12/Ekran-Resmi-2022-01-09-20.50.28.png', 1),
(91, 19, '2022/12/granitevyep016siyah.jpg', '', 2),
(92, 19, '2022/12/Ekran-Resmi-2022-01-09-20.50.28.png', '', 3),
(93, 20, '2022/12/granitevyep017siyah.jpg', '2022/12/Ekran-Resmi-2022-01-09-20.57.42.png', 1),
(94, 20, '2022/12/granitevyep017siyah.jpg', '', 2),
(95, 20, '2022/12/Ekran-Resmi-2022-01-09-20.57.42.png', '', 3),
(96, 21, '2022/12/granitevyep019siyah.jpg', '2022/12/Ekran-Resmi-2022-01-09-21.00.39.png', 1),
(97, 21, '2022/12/granitevyep019siyah.jpg', '', 2),
(98, 21, '2022/12/Ekran-Resmi-2022-01-09-21.00.39.png', '', 3),
(99, 22, '2022/12/real-stone-granit-eviye-evye-lavabo-k-013-beyaz.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-k-013-gri.jpg', 1),
(100, 22, '2022/12/real-stone-granit-eviye-evye-lavabo-k-013-beyaz.jpg', '', 2),
(101, 22, '2022/12/real-stone-granit-eviye-evye-lavabo-k-013-gri.jpg', '', 3),
(102, 22, '2022/12/real-stone-granit-eviye-evye-lavabo-k-013-antrasit-800x510-1.jpg', '', 4),
(103, 22, '2022/12/real-stone-granit-eviye-evye-lavabo-k-013-krerm-800x510-1.jpg', '', 5),
(104, 22, '2022/12/real-stone-granit-eviye-evye-lavabo-k-013-siyah-800x510-1.jpg', '', 6),
(105, 23, '2022/12/p004-1.jpg', '2022/12/pro4.jpg', 1),
(106, 23, '2022/12/p004-1.jpg', '', 2),
(107, 23, '2022/12/pro4.jpg', '', 3),
(108, 23, '2022/12/pro3.jpg', '', 4),
(109, 23, '2022/12/pro4-2.jpg', '', 5),
(110, 23, '2022/12/real-stone-granit-eviye-evye-lavabo-p-004-krem.jpg', '', 6),
(111, 24, '2022/12/p0051.jpg', '2022/12/pro57.jpg', 1),
(112, 24, '2022/12/p0051.jpg', '', 2),
(113, 24, '2022/12/pro57.jpg', '', 3),
(114, 24, '2022/12/pro58.jpg', '', 4),
(115, 24, '2022/12/pro56.jpg', '', 5),
(116, 24, '2022/12/pro55.jpg', '', 6),
(117, 25, '2022/12/pro61.jpg', '2022/12/pro67.jpg', 1),
(118, 25, '2022/12/pro61.jpg', '', 2),
(119, 25, '2022/12/pro67.jpg', '', 3),
(120, 25, '2022/12/pro69.jpg', '', 4),
(121, 25, '2022/12/pro70.jpg', '', 5),
(122, 25, '2022/12/pro71.jpg', '', 6),
(123, 26, '2022/12/real-stone-granit-eviye-evye-lavabo-p-007-beyaz.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-p-007-siyah.jpg', 1),
(124, 26, '2022/12/real-stone-granit-eviye-evye-lavabo-p-007-beyaz.jpg', '', 2),
(125, 26, '2022/12/real-stone-granit-eviye-evye-lavabo-p-007-siyah.jpg', '', 3),
(126, 26, '2022/12/real-stone-granit-eviye-evye-lavabo-p-007-gri.jpg', '', 4),
(127, 26, '2022/12/real-stone-granit-eviye-evye-lavabo-p-007-krem.jpg', '', 5),
(128, 26, '2022/12/real-stone-granit-eviye-evye-lavabo-p-007-antrasit-800x510-1.jpg', '', 6),
(129, 27, '2022/12/real-stone-granit-eviye-evye-lavabo-p-008-siyah.jpg', '2022/12/real-stone-granit-eviye-evye-lavabo-p008-olcu.jpg', 1),
(130, 27, '2022/12/real-stone-granit-eviye-evye-lavabo-p-008-siyah.jpg', '', 2),
(131, 27, '2022/12/real-stone-granit-eviye-evye-lavabo-p008-olcu.jpg', '', 3),
(132, 27, '2022/12/real-stone-granit-eviye-evye-lavabo-p-008-gri.jpg', '', 4),
(133, 27, '2022/12/real-stone-granit-eviye-evye-lavabo-p-008-beyaz-1.jpg', '', 5),
(134, 27, '2022/12/real-stone-granit-eviye-evye-lavabo-p-008-antrasit.jpg', '', 6),
(135, 28, '2022/12/real-stone-granit-eviye-pro-serisi-p-003-beyaz.jpg', '2022/12/real-stone-granit-eviye-pro-serisi-p-003-antrasit.jpg', 1),
(136, 28, '2022/12/real-stone-granit-eviye-pro-serisi-p-003-beyaz.jpg', '', 2),
(137, 28, '2022/12/real-stone-granit-eviye-pro-serisi-p-003-krem-800x510-1.jpg', '', 3),
(138, 28, '2022/12/real-stone-granit-eviye-pro-serisi-p-003-beyaz.jpg', '', 4),
(139, 29, '2021/8/eviyegranit.png', '', 0),
(140, 29, '2021/8/eviyegranit.png', '', 0),
(141, 29, '2021/8/eviyegranit.png', '', 0),
(142, 30, '2021/8/evyeslider1.png', '', 1),
(143, 30, '2021/8/evyeslider1.png', '', 2),
(144, 30, '2021/8/evyeslider1.png', '', 3),
(145, 31, '2021/8/slttse.jpeg', '', 1),
(146, 31, '2021/8/slttse.jpeg', '', 2),
(147, 31, '2021/8/slttse.jpeg', '', 3),
(148, 32, '2022/10/batarya.png', '', 1),
(149, 32, '2022/10/batarya.png', '', 2),
(150, 32, '2022/10/batarya.png', '', 3),
(151, 32, '2022/10/batarya.png', '', 4),
(152, 33, '2022/10/asd.png', '', 1),
(153, 33, '2022/10/asd.png', '', 2),
(154, 33, '2022/10/asd.png', '', 3),
(155, 34, '2022/10/asd.png', '', 1),
(156, 34, '2022/10/asd.png', '', 2),
(157, 34, '2022/10/asd.png', '', 3),
(158, 35, '2022/10/asdiii.png', '', 1),
(159, 35, '2022/10/asdiii.png', '', 2),
(160, 35, '2022/10/asdiii.png', '', 3),
(161, 36, '2021/8/evyeslider1.png', '', 1),
(162, 36, '2021/8/evyeslider1.png', '', 2),
(163, 36, '2021/8/evyeslider1.png', '', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorum_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `kullanici_id` int NOT NULL,
  `urun_id` int NOT NULL,
  `yorum_detay` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `yorum_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `yorum_ad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yorum_onay` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT '0',
  PRIMARY KEY (`yorum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
