-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 15, 2017 lúc 03:35 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myfamilydb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` int(3) UNSIGNED NOT NULL,
  `relationship` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birth` date DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`id`, `relationship`, `name`, `Birth`, `phone`, `address`) VALUES
(2, 'Chá»‹', 'Nguyá»…n Thanh PhÆ°Æ¡ng', '1991-08-11', '0987542080', 'SÃ i Äá»“ng Long BiÃªn HÃ  Ná»™i'),
(15, 'Máº¹', 'Tráº§n ThÃºy HÃ ', '1959-11-23', '0166592125', 'SÃ i Äá»“ng Long BiÃªn HÃ  Ná»™i'),
(17, 'Ã”ng Ngoáº¡i', 'Tráº§n Sá»¹ QuÃ½', '0000-00-00', '1663538393', 'May10,SÃ i Äá»“ng, Long BiÃªn, HÃ  Ná»™i'),
(22, 'Bá»‘', 'Nguyá»…n Quang ChÃ­nh', '1959-12-03', '988132550', 'SÃ i Äá»“ng Long BiÃªn HÃ  Ná»™i'),
(23, 'tÃ´i', 'Nguyá»…n ThÃ nh Nam', '1995-03-26', '01663602085', 'SÃ i Äá»“ng Long BiÃªn HÃ  Ná»™i');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
