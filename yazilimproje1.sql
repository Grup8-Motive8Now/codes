-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 May 2023, 15:47:56
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yazilimproje1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` bigint(20) UNSIGNED NOT NULL,
  `doctor` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `doctor`, `date`, `time`, `id`) VALUES
(2, 'Uzman1', '2023-05-09', '19:39:00', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telnumber` bigint(20) NOT NULL,
  `birthdate` date NOT NULL,
  `cinsiyet` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adres` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `surname`, `email`, `telnumber`, `birthdate`, `cinsiyet`, `adres`) VALUES
(2, 'dsa', 'dsa', '', '', '', 123, '2023-05-02', '', ''),
(3, 'asd', 'asd', '', '', '', 123, '2023-05-01', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`),
  ADD KEY `id` (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `name` (`name`),
  ADD KEY `surname` (`surname`),
  ADD KEY `email` (`email`),
  ADD KEY `telnumber` (`telnumber`),
  ADD KEY `birthdate` (`birthdate`),
  ADD KEY `cinsiyet` (`cinsiyet`),
  ADD KEY `adres` (`adres`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `randevu`
--
ALTER TABLE `randevu`
  ADD CONSTRAINT `randevu_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
