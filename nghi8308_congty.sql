-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 05, 2020 lúc 03:23 PM
-- Phiên bản máy phục vụ: 5.6.47-cll-lve
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nghi8308_congty`
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
  `diachi` varchar(100) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`id`, `tencongty`, `slugcongty`, `logo`, `nganhnghe`, `nhanvien`, `luotdanhgia`, `tongsao`, `rate`, `diachi`, `thoigian`) VALUES
(45, 'Luvina Software', 'luvina-software', 'luvina-software-logo.jpg', 'Sản phẩm', '301-500', 0, 0, 0, '106 Hoang Quoc Viet\n  Cau Giay\n  Ha Noi', '2020-03-05 01:48:09'),
(46, 'Robert Bosch Engineering And Business Solutions', 'robert-bosch-engineering-and-business-solutions', 'robert-bosch-engineering-and-business-solutions-logo.jpg', 'Sản phẩm', '301-500', 0, 0, 0, '364 Cong Hoa\n  Tan Binh\n  Ho Chi Minh', '2020-03-05 01:48:27'),
(47, 'Glass Egg', 'glass-egg', 'glass-egg-logo.jpg', 'Dịch vụ', '301-500', 0, 0, 0, '9  Doan Van Bo\n  District 4\n  Ho Chi Minh', '2020-03-05 01:48:49'),
(48, 'Giao Hàng Tiết Kiệm', 'giao-hng-tiet-kiem', 'giao-hang-ti-t-ki-m-logo.png', 'Sản phẩm', '1000+', 0, 0, 0, '55 K2, Cầu Diễn\n  Nam Tu Liem\n  Ha Noi', '2020-03-05 01:49:06'),
(49, 'Line Technology Vietnam', 'line-technology-vietnam', 'line-viet-nam-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, '54 Nguyen Chi Thanh\n  Dong Da\n  Ha Noi', '2020-03-05 01:49:46'),
(50, 'Sao Mai Soft', 'sao-mai-soft', 'sao-mai-soft-logo.png', 'Dịch vụ', '1-50', 0, 0, 0, '389 Trường Chinh\n  Thanh Xuan\n  Ha Noi', '2020-03-05 01:51:38'),
(52, 'EMG Education', 'emg-education', 'emg-education-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, '41 Nguyen Thi Minh Khai\n  District 1\n  Ho Chi Minh', '2020-03-05 02:42:53');

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
(18, 6, 17, '[{\"replyer\":\"Bác nói đúng vãi, tặng 1 like\",\"reaction\":\"LIKE\",\"noidung\":\"Bác nói đúng vãi, tặng 1 like\",\"thoigian\":\"2020-03-01 15:59:41\"},{\"replyer\":\"Review nhảm nhí, dislike\",\"reaction\":\"LIKE\",\"noidung\":\"Review nhảm nhí, dislike\",\"thoigian\":\"2020-03-01 16:10:56\"}]'),
(19, 27, 31, '[{\"replyer\":\"Cuong Doan\",\"reaction\":\"LIKE\",\"noidung\":\"Cuong Doan Cuong DoanCuong DoanCuong DoanCuong Doan\",\"thoigian\":\"2020-03-03 11:10:08\"}]'),
(20, 11, 54, '[{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:19:49\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:20:13\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:23:00\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:29:41\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:30:09\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:35:38\"}]'),
(21, 11, 53, '[{\"replyer\":\"cuối nè thề luôn\",\"reaction\":\"HATE\",\"noidung\":\"cuối nè thề luôncuối nè thề luôn\",\"thoigian\":\"2020-03-03 15:37:04\"},{\"replyer\":\"xóa dùm đi\",\"reaction\":\"DELETE\",\"noidung\":\"Xóa review này giùm!\",\"thoigian\":\"2020-03-03 15:37:20\"},{\"replyer\":\"Bác nói đúng vãi, tặng 1 like\",\"reaction\":\"HATE\",\"noidung\":\"Bác nói đúng vãi, tặng 1 like\",\"thoigian\":\"2020-03-03 19:07:04\"}]'),
(22, 11, 45, '[{\"replyer\":\"admin đập chai\",\"reaction\":\"LIKE\",\"noidung\":\"admin đập chai\",\"thoigian\":\"2020-03-03 15:44:52\"}]'),
(23, 16, 56, '[{\"replyer\":\"Cuong Doan\",\"reaction\":\"DELETE\",\"noidung\":\"Cuong Doan\",\"thoigian\":\"2020-03-03 19:52:51\"}]');

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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(0, 'viettxt@gmail.com', '9ffe76c47d51bbe9faee835b9b04ddba');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
