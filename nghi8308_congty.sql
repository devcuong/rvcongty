-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 04, 2020 lúc 11:55 PM
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
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`id`, `tencongty`, `slugcongty`, `logo`, `nganhnghe`, `nhanvien`, `luotdanhgia`, `tongsao`, `rate`, `diachi`) VALUES
(28, 'Luxstay', 'luxstay', 'luxstay-logo.png', 'Sản phẩm', '1-50', 2, 8, 4, '68 Duong Dinh Nghe\n  Cau Giay\n  Ha Noi'),
(29, 'DFS Vietnam LLC', 'dfs-vietnam-llc', 'dfs-vietnam-llc-logo.jpg', 'Sản phẩm', '1000+', 1, 5, 5, 'Ho Chi Minh'),
(30, 'Manteiv Group | Skyads', 'manteiv-group-skyads', 'manteiv-group-skyads.png', 'Sản phẩm', '1-50', 1, 1, 1, 'Thanh Xuan, Ha Noi'),
(32, 'Expertrans Global', 'expertrans-global', 'expertrans-global-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, '19  Trần Quang Diệu\n  Dong Da\n  Ha Noi'),
(33, 'WASHIN ENGINE', 'washin-engine', 'washin-engine-logo.PNG', 'Dịch vụ', '1-50', 0, 0, 0, '264 Le Van Sy\n  District 3\n  Ho Chi Minh'),
(34, 'FPT Software', 'fpt-software', 'fpt-software-logo.png', 'Dịch vụ', '1000+', 0, 0, 0, 'FPT Software Đường D1 Phường Tân Phú \n  District 9\n  Ho Chi Minh'),
(35, 'MOR', 'mor', 'mor-logo.png', 'Dịch vụ', '51-150', 0, 0, 0, '451 Tô Hiến Thành\n  District 10\n  Ho Chi Minh'),
(36, 'BELL Technology JSC', 'bell-technology-jsc', 'bell-technology-jsc.jpg', 'Sản phẩm', '1-50', 0, 0, 0, 'District 11, Ho Chi Minh'),
(37, 'RIKKEISOFT', 'rikkeisoft', 'rikkeisoft-logo.png', 'Dịch vụ', '501-1000', 0, 0, 0, 'HH3 Building, Me Tri Street\n  Nam Tu Liem\n  Ha Noi'),
(38, 'BUCA', 'buca', 'buca-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, '68 Nguyen Co Thach\n  Nam Tu Liem\n  Ha Noi'),
(39, 'Gameloft', 'gameloft', 'gameloft-logo.jpg', 'Sản phẩm', '301-500', 0, 0, 0, '364 Cong Hoa\n  Tan Binh\n  Ho Chi Minh'),
(40, 'Samsung Vietnam Mobile R&D Center', 'samsung-vietnam-mobile-rd-center', 'samsung-vietnam-mobile-r-d-center-logo.png', 'Sản phẩm', '301-500', 0, 0, 0, '1 Pham Van Bach\n  Cau Giay\n  Ha Noi');

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

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `reviewer`, `position`, `rate`, `noidung`, `congty`, `thoigian`) VALUES
(58, 'Ẩn Danh', 'Dev', 3, 'startup luôn nhiều khó khăn phải vượt qua, luxstay sẽ thành công, ủng hộ công ty. Đã theo dõi cty từ lâu, mỗi năm vẫn phát triển thần tốc cho dù bộ máy còn nhiều vấn đề. Công ty có nhiều người giỏi nhưng chưa liên kết tốt, đặc biệt là văn phòng ở 2 miền. hi vọng theo thời gian sẽ ngày càng tốt lên\r\n', 28, '2020-03-04 16:08:31'),
(59, 'Ẩn Danh', 'Dev', 5, 'Luxstay là một tâp thể nhiệt huyết và năng động, Một môi trường Startup đáng để các bạn trẻ trau dồi và cống hiến.\r\n', 28, '2020-03-04 16:13:45'),
(60, 'tui nè', 'CB', 5, 'v_v Làm cho CB của DFS ạ, cty tuyệt vời lắm em nói be bé vậy thôi.\r\n', 29, '2020-03-04 18:15:27'),
(61, 'Ẩn Danh', 'Dev', 1, 'Nói chung là như lol, cty gì mà lương k trả cho nv, nợ đầm nợ đìa, nói chung là thất đức, làm ăn sẽ k có lộc, sớm phá sản.\r\n', 30, '2020-03-04 18:57:16');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
