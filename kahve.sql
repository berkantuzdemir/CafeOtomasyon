-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Haz 2020, 22:20:46
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kahve`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_url` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_fax` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_bakım` enum('0','1') COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_fax`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakım`) VALUES
(0, 'dimg/20471logo.png', '', 'May The Coffee Be With You', 'Her gün işe şu iki şeyin hayaliyle gideriz; arkadaşlarımızla mükemmel kahveyi paylaşmak ve dünyanın biraz daha güzelleşmesine katkıda bulunmak.', 'coffee,star wars,espresso,americano,macciato', 'Bilal Beygo', '01231231234', '01231231234', '01231231234', 'example@example.com', 'Merkez', 'Kırıkkale', 'In a far far away galaxy...', '8 gün 25 saat açık', 'ayar_maps1', 'ayar_analystic1', 'ayar_zopim1', 'https://www.facebook.com', 'https://www.twitter.com', '', '', 'alanadiniz.com', 'user', 'password', '467', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkımızda`
--

CREATE TABLE `hakkımızda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_referans` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `hakkımızda`
--

INSERT INTO `hakkımızda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`, `hakkimizda_referans`) VALUES
(0, 'Hakkımızda', '<p>Bir misafir mağazamıza gelir ve Star Wars Coffee baristasından bir i&ccedil;ecek alır; bu olay t&uuml;m d&uuml;nya genelinde her hafta milyonlarca kez yaşanır ancak her biri benzersiz bir deneyimdir.Bu yalnızca bir andır: tezgahın &uuml;zerinden uzanan bir el, ona doğru uzanan diğer ele bir fincan sunar. Ancak bu misafirlerimiz ile &ccedil;alışanlarımız arasında kurulan &ouml;nemli bir bağdır.D&uuml;nyanın&nbsp;en y&uuml;ksek kaliteli kahvesini&nbsp;sunmaktan, misafirlerimizle ve i&ccedil;inde bulunduğumuz toplumlarla kurduğumuz ilişkilere kadar, işimizin her par&ccedil;asında kurulan bu bağı g&uuml;&ccedil;lendirmek i&ccedil;in &ccedil;alışıyoruz. 1971&rsquo;de tek bir mağaza ile hizmet vermeye&nbsp;başladığımız&nbsp;&nbsp;g&uuml;nden itibaren, bulunduğumuz her işte biraz daha iyisini yapabilmek ve &nbsp;i&ccedil;inde bulunduğumuz toplumlara katkıda bulunabilmek i&ccedil;in &ccedil;aba sarf ettik.</p>\r\n', '_JBwni63Ye8', 'Türkiye\'nin En Sevilen ve Saygı Duyulan Kahve Şirketi Olmak', 'İlham veren ve insan ruhunu zenginleştiren bir marka olmak. Her seferinde bizimle ilk tanışmanız ve ilk kahveniz olabileceğini düşünerek servis veriyoruz.', 'Sürekli farklı bölgelerden gelen çekirdekleri araştırıp, denemeler yapıp, en uygun olanlarını seçip özenle kavuruyoruz. Her kavurmamızda kahvenin yöresel ve kendi karakteristik tadlarını ortaya çıkarmak önceliğimiz. Kavrulma aşamasında kullandığımız yazılımla sürekli olarak aynı kavurma derecesi ve tadım notlarına sahip kahveleri sizlere sunmaya devam ediyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_resim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(147, '2020-04-26 14:43:38', '', '131321132123', '', 'example@example.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'Bilal Beygo', '', '', '', '', '5', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `kategor_id` int(11) NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `urun_ad` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_seourl` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_img_path` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_fiyat` float NOT NULL,
  `urun_video` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_keyword` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_durum` enum('0','1') COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `kategor_id`, `urun_zaman`, `urun_ad`, `urun_seourl`, `urun_detay`, `urun_img_path`, `urun_fiyat`, `urun_video`, `urun_keyword`, `urun_stok`, `urun_durum`) VALUES
(2, 0, '2020-05-29 19:08:50', 'Espresso', '', 'Harmonik tat ve yoğun kremaya sahip espresso çeşitleri ile kahvenin keyfini çıkarın', 'img/portfolio/espresso.jpg', 10, '', 'espresso', 1000, '1'),
(3, 0, '2020-05-29 21:01:12', 'Caramel Macchiato', '', 'Özel harman çekirdeklerimizden elde edilen Espresso üzerine vanilya şurubu ve buharda ısıtılmış köpüklü süt eklenerek, karamel sosla süslenen kahvemiz.', 'img/portfolio/caramel-macchiato.jpg', 10, '', 'caramel,macchiato', 100, '1'),
(4, 0, '2020-05-29 21:01:12', 'Caffe Latte', '', 'İtalya muhtemelen dünyanın en ünlü ve sevilen kahve kültürünün anavatanıdır. İtalya\'da gün, keyfi bisküvilerle çıkarılan caffè latte ile başlar.', 'img/portfolio/caffe-latte.jpg', 10, '', 'latte,coffee', 100, '1'),
(5, 0, '2020-05-29 21:01:12', 'Mocha', '', 'Kahvenin zengin aroması ile leziz çikolatanın tadı gibi iki harika lezzetin bir araya gelmesiyle hazırlanan mocha, oldukça popüler bir espresso bazlı kahvemizdir.', 'img/portfolio/mocha.jpg', 10, '', 'mocha,coffee', 100, '1'),
(7, 0, '2020-05-29 21:01:12', 'White Chocolate Mocha', '', 'Kaliteli kahvemiz, köpüğü ve beyaz çikolata aromasıyla White Chocolate Mocha size lezzetli ve yumuşak bir içim sunuyor.', 'img/portfolio/wmocha.jpg', 10, '', 'mocha,white,chocolate,coffee', 100, '1'),
(8, 0, '2020-05-29 21:01:12', 'Cappuccino', '', 'Cappuccinonun dayanılmaz köpüğüne ulaşmak daha kolay. İtalya\'dan gelen bu lezzeti bize uğrayıp bir deneyin.', 'img/portfolio/cappucino.jpg', 10, '', 'cappucino,coffee', 100, '1'),
(9, 0, '2020-05-29 21:01:12', 'Earl Grey', '', 'Adı ne kadar griyi anımsatsa da bu çayın tadı hiç de o tonlarda değil. Ekşi, leziz ve canlandırıcı aromasıyla Earl Grey, klasik siyah çayın limon ve bergamot aroması eklenmiş hali.', 'img/portfolio/earl-grey.png', 10, '', 'earl,grey,tea', 100, '1'),
(10, 0, '2020-05-29 21:01:12', 'Hot Chocolate', '', 'Soğuk havalarda “sıcacık” Hot Chocolate ile ısınırken samimi ortamımızda saatlerin nasıl geçtiğini anlamayacaksınız.', 'img/portfolio/hot-choco.png', 10, '', 'hot,chocolate,cocoa', 100, '1'),
(11, 0, '2020-05-29 21:01:12', 'Frappuccino', '', 'Frappuccino ile ‪yazı yudumla‬, nerede olursan ol, yazı doyasıya yaşa!', 'img/portfolio/coffee-frappuccino.jpg', 10, '', 'coffee,frap,frappuccino', 100, '1'),
(12, 0, '2020-05-29 21:01:12', 'Strawberry Frappuccino', '', 'Dünyanın en kaliteli kahve çekirdeklerinden hazırladığı içecekleriyle misafirlerine her mevsim farklı deneyimler sunan Star Wars Cafe’nin Frappuccino ailesine yeni katılan Strawberry Frappuccino ile yaz, daha tatlı, serin ve lezzetli geçecek.', 'img/portfolio/straw-frap.jpg', 10, '', 'straw,coffee,frap,frappuccino', 100, '1'),
(13, 0, '2020-05-29 21:01:12', 'Cool Lime', '', 'Cool Lime da menümüze girdiğine göre yaz boyu cafemizdesin galiba. Soğuk,lezzetli kokusu, limon ve nane aroması ile enfes içeceğimiz. Aşşşırı ferahlatıcı!!! ', 'img/portfolio/cool-lime.jpg', 10, '', 'coffee,cool,lime,lemon,ice,summer', 100, '1'),
(14, 0, '2020-05-29 21:01:12', 'Türk Kahvesi', '', 'Geleneksel Türk kahvesinin çağrıştırdığı muhabbet, dostluk, rahatlık, huzur ve keyfi sizinle cafemizde yaşamak isteriz. ', 'img/portfolio/turkish-coffee.jpg', 10, '', 'coffee,turkish,coffee', 100, '1'),
(15, 0, '2020-05-29 21:01:12', 'Filtre Kahve', '', 'Filtre kahve, günümüzde en fazla tüketilen kahve türlerinden bir tanesidir. Lezzetinin yanı sıra yağ yakması, metabolizmayı hızlandırması, pratik olması, doğal olması, enerji vermesi ve sağlığa olan faydaları sebebiyle insanlar tarafından sıkça tercih ediliyor.', 'img/portfolio/filter-coffee.jpg', 10, '', 'coffee,filter', 100, '1'),
(16, 0, '2020-05-29 21:01:12', 'Milkshake', '', 'Süt içmenin en eğlenceli yolu olan Milkshake çeşitleri, içine kattığımız sevgimizle beraber sizi bekliyor.', 'img/portfolio/milkshake.jpg', 10, '', 'coffee,milkshake', 100, '1'),
(17, 0, '2020-05-29 21:01:12', 'Americano', '', 'Americano, kahvenin içime hazır en saf hallerinden biri olan espressonun su ilave edilerek seyreltilmesiyle hazırlanan ve oldukça yaygın olarak tüketilen bir kahvemizdir.', 'img/portfolio/americano.jpg', 10, '', 'coffee,americano', 100, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hakkımızda`
--
ALTER TABLE `hakkımızda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
