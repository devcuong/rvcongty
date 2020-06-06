-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2020 lúc 08:22 PM
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
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `tieudevideo` varchar(100) NOT NULL,
  `slugvideo` varchar(100) NOT NULL,
  `playlist` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `videoid` varchar(11) NOT NULL,
  `thoiluong` varchar(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `tieudevideo`, `slugvideo`, `playlist`, `url`, `videoid`, `thoiluong`, `luotxem`, `thoigian`) VALUES
(9, 'Quản trị nhân lực - Bài 1: Hoạch định nguồn nhân lực', 'quan-tri-nhan-luc-bai-1-hoach-dinh-nguon-nhan-luc', 3, 'https://www.youtube.com/watch?v=4OeTSzfIZ28', '4OeTSzfIZ28', '30:43', 16, '2020-06-03 21:22:53'),
(10, 'Quản trị nhân lực - Bài 3: Tuyển dụng', 'quan-tri-nhan-luc-bai-3-tuyen-dung', 3, 'https://www.youtube.com/watch?v=cKjkIlfnfgE', 'cKjkIlfnfgE', '1:44:50', 6, '2020-06-03 21:23:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
