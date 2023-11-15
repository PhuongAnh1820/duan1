-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 04:39 AM
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
-- Cơ sở dữ liệu: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(23, 'yyyy', 1, 8, '08:52:48pm 27/10/2023'),
(24, 'Mẫu đẹp quá shop ơi', 1, 8, '08:53:07pm 27/10/2023'),
(25, 'Mua', 1, 22, '08:53:25pm 27/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_danhmuc`) VALUES
(4, 'Máy ảnh '),
(5, 'Ống kính'),
(6, 'Máy quay '),
(8, 'Tai nghe'),
(9, 'Máy nghe MP3'),
(10, 'Loa không dây'),
(28, 'Máy ảnh'),
(34, 'Bàn phím');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `name_sp` varchar(255) NOT NULL,
  `image_sp` varchar(255) NOT NULL,
  `price_sp` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `mota` text NOT NULL,
  `iddm` int(11) NOT NULL,
  `dacdiem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `name_sp`, `image_sp`, `price_sp`, `luotxem`, `mota`, `iddm`, `dacdiem`) VALUES
(7, '[NHẬP MYSONY200, GIẢM THÊM 200K] Máy ảnh kỹ thuật số ống kính rời ZV-E10\r\n', 'h1.webp', 50990000, 100, 'Model: ILCE-7CM2/BQAP2\r\n', 6, '<strong>LOẠI CẢM BIẾN</strong><br>\r\nCảm biến Exmor RS CMOS loại 1.0 (13,2 mm x 8,8 mm), tỷ lệ khung hình 3:2 <br><br>\r\n\r\n<strong>SỐ LƯỢNG ĐIỂM ẢNH (HIỆU DỤNG</strong><br>\r\nKhoảng 20,1 Megapixel<br><br>\r\n\r\n<strong>ĐỘ NHẠY ISO (ẢNH TĨNH)(CHỈ SỐ PHƠI SÁNG ĐỀ XUẤT)</strong><br>\r\nTự động (Tiêu chuẩn ISO 125-6400), 125/160/200/250/320/400/500/640/800/1000/1250/1600/2000/2500/3200/4000/5000/6400/8000/10000/12800 (Có thể mở rộng đến ISO 80/100)<br><br>\r\n\r\n<strong>ĐỘ NHẠY ISO (PHIM)</strong><br>\r\nTự động: (Tiêu chuẩn ISO 125-ISO 6400), 125/160/200/250/320/400/500/640/800/1000/1250/1600/2000/2500/3200/4000/5000/6400/8000/10000/12800<br><br>'),
(8, '[NHẬP MYSONY200, GIẢM THÊM 200K] Máy ảnh kỹ thuật số ống kính rời ZV-E10 (BDOMS)\r\n', 'h2.webp', 17490000, 77, 'Model: ZV-E10L/WQAP2\r\n', 6, ''),
(9, '[NHẬP MYSONY200, GIẢM THÊM 200K] Máy ảnh ống kính E-mount Alpha 6400 sử dụng Cảm biến APS-C', 'h3.webp', 27690000, 9, 'Model: ILCE-6400M/BAP9', 5, ''),
(10, 'Ống kính FE 14 mm F1.8 GM', 'h4.webp', 36990000, 9, 'Model: SEL14F1', 8, '\"'),
(11, 'Tai nghe không dây WH-CH520', 'h4.webp', 1290000, 29, 'Model', 6, '\"'),
(12, 'RX100 IV - Bậc thầy tốc độ với cảm biến CMOS xếp chồng loại 1.0 có tích hợp bộ nhớ\r\n\r\n', 'h6.webp', 22990000, 67, 'Model: DSC-RX100M4\r\n', 5, ''),
(14, '[NHẬP MYSONY200, GIẢM THÊM 200K] Tai nghe không dây WH-CH720N\r\n', 'h8.webp', 9870000, 177, 'Model: WH-CH720N\r\n', 5, ''),
(15, 'Ống kính FE 200-600 mm F5.6-6.3 G OSS\r\n', 'h9.webp', 42000000, 8, 'Model: SEL200600G\r\n', 10, ''),
(22, 'Loa không dây di động XB100 (BDOMS)', 'h7.webp', 7800000, 0, 'Model: SRS-XB100/LCE\r\n', 9, ''),
(23, 'Loa không dây di động XB100 (BDOMS)', 'h10.webp', 480000, 0, 'Model: SEL14F1', 10, '- Âm nhạc là bản nhạc nền cho cuộc sống của chúng ta, và chúng tôi muốn bạn có thể tận hưởng mọi giai điệu yêu thích dù bạn ở bất cứ nơi đâu. Nên chúng tôi đã gói gọn âm thanh rõ nét và mạnh mẽ trong một thân loa di động. Nếu bạn yêu âm nhạc hay và thích nghe nhạc cùng bạn bè, thì XB100 chính là người bạn đồng hành hoàn hảo.\r\n- XB100 có thời gian sử dụng pin lên đến 16 giờ để bạn và bạn bè có thể nghe nhạc cả ngày lẫn đêm. Phần trăm lượng pin còn lại hiển thị rõ ràng trên điện thoại thông minh khi XB100 được kết nối, giúp bạn biết khi nào cần sạc lại.\r\n- Thiết kế lệch tâm và cân bằng trọng lượng được tối ưu hóa, giúp nâng cao độ trong trẻo và mang đến âm thanh rõ nét ngay ở âm lượng cao.A = Màng loa thườngB = Màng loa lệch tâm\r\n\r\n\r\n\r\n\"'),
(24, 'Loa không dây di động XB100 (BDOMS)', 'h1.webp', 1398000, 0, 'Model: ILCE-6400M/BAP9', 9, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_ngdung` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_ngdung`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'anh123', '1234', 'anhh24570@gmail.com', 'Hà Nam', '0342755585', 1),
(11, 'anh123', '99999', 'anhh24570@gmail.com', 'Ninh Binh', '0342755585', 1),
(16, 'phanh', '44', 'anhh24570@gmail.com', '777', '0888888888', 0),
(17, 'phanh', '44', 'anhh24570@gmail.com', '777', '0', 0),
(18, 'anh123', '2', 'anhh24570@gmail.com', 'Yên Khánh,Ninh Bình', '0342755585', 2),
(19, 'linh456', '999', 'anhntpph37065@fpt.edu.vn', 'Ninh Bình, Hà Nội', '7', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_ngdung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_ngdung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
