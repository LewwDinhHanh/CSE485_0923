-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 05:16 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tek4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(108, 'admin1', 'hanhkk0909@gmail.com', '1234'),
(110, 'Enoch Kunkler', 'ekunkler0@mail.ru', 'yX7\'nFja,OV<('),
(111, 'Ardra Golding', 'agolding1@tuttocitta.it', 'pS0.?/G4`E'),
(112, 'Marti McGrah', 'mmcgrah2@360.cn', 'rA0)`9_|*omVOf'),
(113, 'Lianne McMurthy', 'lmcmurthy3@latimes.com', 'pN5?`la>x4$&(F'),
(114, 'Charmine Sabben', 'csabben4@squidoo.com', 'hY5|XyzHFDOJ\"up'),
(115, 'Cassandre Durward', 'cdurward5@icq.com', 'iM2,sHMTL_g'),
(116, 'Killian Matteoni', 'kmatteoni6@seesaa.net', 'zZ8$BUpXcvM2'),
(117, 'Brockie Dumke', 'bdumke7@samsung.com', 'rJ6/#{a(A,'),
(118, 'Elvin Peracco', 'eperacco8@furl.net', 'aO9{6WJ\'zyj!'),
(119, 'Thom Gaggen', 'tgaggen9@dropbox.com', 'lP5>4vh9SU'),
(122, 'B20DCAT035', 'baonam090911@gmail.com', '$2y$10$.5DPC6Yz09xfFPlyjrESLuRV3DGIrWoiQs34KerCzRC');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
