-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Haz 2021, 20:43:15
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `caytakip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bahçe`
--

CREATE TABLE `bahçe` (
  `id` int(11) NOT NULL,
  `bahçe` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firma`
--

CREATE TABLE `firma` (
  `id` int(11) NOT NULL,
  `firma` varchar(32) NOT NULL,
  `Çfiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `firma`
--

INSERT INTO `firma` (`id`, `firma`, `Çfiyat`) VALUES
(0, 'Çaykur', 8.4),
(15, 'Raprit', 0),
(18, 'Raprit', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `harcamatürleri`
--

CREATE TABLE `harcamatürleri` (
  `id` int(11) NOT NULL,
  `harcamatürleri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcı`
--

CREATE TABLE `kullanıcı` (
  `idKullanıcı` int(11) NOT NULL,
  `İsim` varchar(200) NOT NULL,
  `Şifre` int(255) NOT NULL,
  `Eposta` varchar(200) NOT NULL,
  `Şehir` varchar(200) NOT NULL,
  `köy` varchar(255) NOT NULL,
  `Telefon` bigint(32) NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanıcı`
--

INSERT INTO `kullanıcı` (`idKullanıcı`, `İsim`, `Şifre`, `Eposta`, `Şehir`, `köy`, `Telefon`, `Admin`) VALUES
(15, 'admin', 0, 'mertcan@hotmail.com', 'Trabzon ', 'Sürmene', 5413592617, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `GönderilmişOlan` varchar(255) NOT NULL,
  `Bekleyen` varchar(255) NOT NULL,
  `Gönderen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanıcı`
--
ALTER TABLE `kullanıcı`
  ADD PRIMARY KEY (`idKullanıcı`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanıcı`
--
ALTER TABLE `kullanıcı`
  MODIFY `idKullanıcı` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
