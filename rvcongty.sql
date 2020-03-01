-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2020 lúc 01:30 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rvcongty`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `id` int(11) NOT NULL,
  `tencongty` varchar(100) NOT NULL,
  `slugcongty` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `nganhnghe` varchar(100) NOT NULL,
  `nhanvien` varchar(50) NOT NULL,
  `luotdanhgia` int(11) NOT NULL,
  `tongsao` int(11) NOT NULL,
  `rate` float NOT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`id`, `tencongty`, `slugcongty`, `logo`, `nganhnghe`, `nhanvien`, `luotdanhgia`, `tongsao`, `rate`, `diachi`) VALUES
(6, 'Thiên Việt JSC', 'thien-viet-jsc', 'thien-vi-t-jsc-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, 'number 5, hiep thanh 31, hiep thanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `congty` int(11) NOT NULL,
  `idreview` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reply`
--

INSERT INTO `reply` (`id`, `congty`, `idreview`, `data`) VALUES
(18, 6, 17, '[{\"replyer\":\"Bác nói đúng vãi, tặng 1 like\",\"reaction\":\"LIKE\",\"noidung\":\"Bác nói đúng vãi, tặng 1 like\",\"thoigian\":\"2020-03-01 15:59:41\"},{\"replyer\":\"Review nhảm nhí, dislike\",\"reaction\":\"LIKE\",\"noidung\":\"Review nhảm nhí, dislike\",\"thoigian\":\"2020-03-01 16:10:56\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `reviewer` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `rate` int(1) NOT NULL,
  `noidung` text NOT NULL,
  `congty` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `reviewer`, `position`, `rate`, `noidung`, `congty`, `thoigian`) VALUES
(17, 'ok', 'abcdef ghg', 3, 'abcdef ghgabcdef ghgabcdef ghg', 6, '2020-03-01 15:59:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
