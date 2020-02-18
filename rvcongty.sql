-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 18, 2020 lúc 01:09 PM
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
(1, 'Lien Viet Tech', 'lien-viet-tech', 'lien-viet-tech-logo.png', 'Sản phẩm', '51-150', 12, 42, 3.5, '109 Tran Hung Dao Hoan Kiem Ha Noi'),
(2, 'Keaz', 'keaz', 'keaz-logo.jpg', 'Sản phẩm', '1-50', 2, 6, 4.2, '220A-C Nguyễn Đình chiểu, phường 6 District 3 Ho Chi Minh'),
(3, 'Sakuko Việt Nam', 'sakuko-viet-nam', 'sakuko-vi-t-nam-logo.png', 'Sản phẩm', '1-50', 217, 760, 3.5, '1 Trung Yên Plaza Cau Giay Ha Noi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `idreview` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reply`
--

INSERT INTO `reply` (`id`, `idreview`, `data`) VALUES
(1, 1, '[{\"replyer\":\"John\",\"likeordislike\":1,\"noidung\":\"New York\",\"thoigian\":\"1581958324485\"},{\"replyer\":\"John Wick\",\"likeordislike\":0,\"noidung\":\"New York\", \"thoigian\":\"1581958358520\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `reviewer` varchar(100) NOT NULL,
  `rate` int(1) NOT NULL,
  `noidung` text NOT NULL,
  `congty` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `reviewer`, `rate`, `noidung`, `congty`, `thoigian`) VALUES
(1, 'Nguyễn Khắc Thành (DEV quèn)  \r\n', 5, 'Có nhiều gái xinh và dễ thương. Công ty tuyệt với, đuổi cũng méo đi.\r\n', 1, '1581955907004'),
(2, 'Ẩn danh  \r\n', 1, 'công ty max coi thường thiết kế, làm việc nhốn nháo không có trình tự gì\r\ncông ty như cái chợ ai thích làm gì thì làm, nên tránh', 1, '1581956999796');

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
