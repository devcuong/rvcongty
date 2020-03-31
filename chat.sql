-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2020 lúc 06:40 PM
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
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `congty` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL,
  `noidung` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`id`, `congty`, `thoigian`, `noidung`) VALUES
(2, 219, '', '[{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:26:13\",\"noidung\":\"ok\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"},{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:29:18\",\"noidung\":\"tin thu 2\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"},{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:34:31\",\"noidung\":\"oh ye\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"},{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:36:43\",\"noidung\":\"ok\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"}]');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
