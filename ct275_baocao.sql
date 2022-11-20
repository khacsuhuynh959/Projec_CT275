-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 10:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct275_baocao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` char(10) NOT NULL,
  `ten` varchar(200) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` tinyint(1) DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass_word` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `ten`, `ngaysinh`, `gioitinh`, `diachi`, `sdt`, `email`, `username`, `pass_word`) VALUES
('ad1', 'Huỳnh Khắc SỬ', '2000-12-10', 1, 'Trà Vinh', '0392096959', 'sub1809508@student.ctu.edu.vn', 'khacsu68', '12345'),
('ad2', 'Lương Thị Ni', '2000-01-19', 2, 'Bạc Liêu', '0835171897', 'nib1809497@student.ctu.edu.vn', 'ni4279', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `Ma_Don` char(8) NOT NULL,
  `Ma_SP` char(8) NOT NULL,
  `Ten_SP` varchar(200) DEFAULT NULL,
  `SoLuong` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`Ma_Don`, `Ma_SP`, `Ten_SP`, `SoLuong`) VALUES
('HD325624', 'KCN4', 'Kem Chống Nắng Skin1004 Cho Da Nhạy Cảm SPF 50+ 50ml\r\nMadagascar Centella Air-Fit Suncream Plus SPF50+ PA++++', 1),
('HD465041', 'KD1', 'Gel Dưỡng Megaduo Gel Giảm Mụn, Mờ Thâm 15g\r\nGel (Azelaic acid + AHA)', 1),
('HD669561', 'KCN4', 'Kem Chống Nắng Skin1004 Cho Da Nhạy Cảm SPF 50+ 50ml\r\nMadagascar Centella Air-Fit Suncream Plus SPF50+ PA++++', 1),
('HD723259', 'KCN4', 'Kem Chống Nắng Skin1004 Cho Da Nhạy Cảm SPF 50+ 50ml\r\nMadagascar Centella Air-Fit Suncream Plus SPF50+ PA++++', 1),
('HD756780', 'KCN3', 'Kem Dưỡng La Roche-Posay Làm Dịu, Hỗ Trợ Phục Hồi Da 40ml\r\nCicaplast Baume B5 Soothing Repairing Balm', 1),
('HD929609', 'KCN2', 'Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 60ml (Mẫu Mới 2022)\r\nPerfect UV Sunscreen Skincare Milk N SPF50+ PA++++ (New 2022)', 1),
('HD929609', 'KCN4', 'Kem Chống Nắng Skin1004 Cho Da Nhạy Cảm SPF 50+ 50ml\r\nMadagascar Centella Air-Fit Suncream Plus SPF50+ PA++++', 1),
('HD929609', 'SM1', 'Son Kem Lì 3CE Mịn Nhẹ #Live A Little - Đỏ Đất 4g\r\nCloud Lip Tint #Live A Little', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma_dm` char(10) NOT NULL,
  `ten` varchar(200) DEFAULT NULL,
  `anh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ma_dm`, `ten`, `anh`) VALUES
('KCN', 'Kem Chống Nắng', 'home_category_9_medium.jpg'),
('KD', 'Kem Dưỡng', 'home_category_4_medium.jpg'),
('SM', 'Son Môi', 'home_category_1_medium.jpg'),
('SRM', 'Sữa Rửa Mặt', 'home_category_5_medium.jpg'),
('TCD', 'Tinh Chất Dưỡng', 'home_category_2_medium.jpg'),
('TDC', 'Tẩy Da Chết', 'home_category_8_medium.jpg'),
('TPCN', 'Thực Phẩm Chức Năng', 'home_category_14_medium.jpg'),
('TT', 'Tẩy Trang', 'home_category_11_medium.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dia_chi_gh`
--

CREATE TABLE `dia_chi_gh` (
  `KH_Ma` char(8) NOT NULL,
  `DCGH` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dia_chi_gh`
--

INSERT INTO `dia_chi_gh` (`KH_Ma`, `DCGH`) VALUES
('KH000001', '68-hẻm 3T2-Xuân Khánh-Ninh Kiều-Cần Thơ'),
('KH273607', '111-không có-Hưng Lợi-Ninh Kiều-Cần Thơ'),
('KH734573', '68-không có-Xuân Khánh-Ninh Kiều-Cần Thơ');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `Ma_Don` char(8) NOT NULL,
  `KH_Ma` char(8) DEFAULT NULL,
  `TongTien` float DEFAULT NULL,
  `NgayDH` date DEFAULT NULL,
  `NgayGH` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`Ma_Don`, `KH_Ma`, `TongTien`, `NgayDH`, `NgayGH`) VALUES
('HD325624', 'KH273607', 285000, '2022-11-20', '2022-11-24'),
('HD465041', 'KH734573', 130000, '2022-11-20', '2022-11-24'),
('HD669561', 'KH000001', 285000, '2022-11-20', '2022-11-24'),
('HD723259', 'KH000001', 285000, '2022-11-19', '2022-11-23'),
('HD756780', 'KH000001', 315000, '2022-11-19', '2022-11-23'),
('HD929609', 'KH000001', 982000, '2022-11-20', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `KH_Ma` char(8) NOT NULL,
  `KH_Ten` varchar(100) NOT NULL,
  `KH_SDT` char(11) DEFAULT NULL,
  `KH_NgaySinh` date DEFAULT NULL,
  `KH_Username` varchar(100) DEFAULT NULL,
  `KH_Matkhau` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`KH_Ma`, `KH_Ten`, `KH_SDT`, `KH_NgaySinh`, `KH_Username`, `KH_Matkhau`) VALUES
('KH000001', 'Lương Thị Ni', '0832134279', '2000-01-19', 'ni4279', '12345'),
('KH273607', 'Nguyễn Trung Hậu', '0392096958', '2000-01-01', 'haub1809456', '12345'),
('KH411137', 'Huỳnh Khắc Sử', '0392096959', '2000-10-12', 'su6959', 'benthefc123'),
('KH480336', 'Lâm Thanh Khang', '0392096956', '2000-10-01', 'khangb1805123', '12345'),
('KH734573', 'Trần Nguyễn Hữu Dinh', '0392096957', '2000-12-10', 'dinhb1809442', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` char(10) NOT NULL,
  `ma_dm` char(10) NOT NULL,
  `ten_sp` varchar(200) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `gia` int(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `noidung` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ma_dm`, `ten_sp`, `so_luong`, `gia`, `anh`, `noidung`) VALUES
('KCN1', 'KCN', 'Kem Chống Nắng La Roche-Posay Kiểm Soát Dầu SPF50+ 50ml\r\nAnthelios Anti-Shine Gel-Cream Dry Touch Finish Mattifying Effect SPF50+', 60, 416000, 'promotions-auto-kem-chong-nang-la-roche-posay-kiem-soat-dau-spf50-50ml_MrZBNkkF5Vzig7rX_img_358x358_843626_fit_center.png', 'Kem Chống Nắng La Roche-Posay Anthelios Anti-Shine Gel-Cream Dry Touch Finish Mattifying Effect SPF50+ đến từ thương hiệu dược mỹ phẩm La Roche-Posay là sản phẩm kem chống nắng dành cho làn da dầu mụn, sở hữu công nghệ cải tiến XL-Protect cùng kết cấu kem gel dịu nhẹ & không nhờn rít, giúp ngăn ngừa tia UVA/UVB + tia hồng ngoại + tác hại từ ô nhiễm, bảo vệ toàn diện cho làn da luôn khỏe mạnh.'),
('KCN2', 'KCN', 'Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 60ml (Mẫu Mới 2022)\r\nPerfect UV Sunscreen Skincare Milk N SPF50+ PA++++ (New 2022)', 60, 449000, 'promotions-auto-sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-60ml_rbd9xxwecX5TRMmE_img_358x358_843626_fit_center.png', 'Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu Bảo Vệ Hoàn Hảo là sản phẩm chống nắng phiên bản mới nhất năm 2022 đến từ thương hiệu chống nắng dưỡng da ANESSA hàng đầu Nhật Bản suốt 21 năm liên tiếp, giúp chống lại tác hại của tia UV & bụi mịn tối ưu dưới mọi điều kiện sinh hoạt, kể cả thời tiết khắc nghiệt nhất. Sản phẩm đặc biệt phù hợp với làn da thiên dầu.\r\n\r\nAnessa Perfect UV Sunscreen Skincare Milk N SPF50+ PA++++ ứng dụng công nghệ Auto Booster và Very Water Resistant độc quyền từ thương hiệu ANESSA, giúp cho lớp màng chống UV trở nên bền vững hơn khi gặp NHIỆT ĐỘ CAO - ĐỘ ẨM - MỒ HÔI - NƯỚC - MA SÁT, đồng thời chống trôi trong nước lên đến 80 phút, chống bụi mịn PM.25 và chống dính cát. Ngoài ra, sự bổ sung của phức hợp 50% thành phần dưỡng da giúp ngăn ngừa lão hoá do tia UV hiệu quả và nuôi dưỡng da ẩm mịn.'),
('KCN3', 'KCN', 'Kem Dưỡng La Roche-Posay Làm Dịu, Hỗ Trợ Phục Hồi Da 40ml\r\nCicaplast Baume B5 Soothing Repairing Balm', 60, 285000, '285.000.png', 'Kem Dưỡng La Roche-Posay Cicaplast Baume B5 Soothing Repairing Balm là sản phẩm kem dưỡng dành cho da nhạy cảm đến từ thương hiệu La Roche-Posay, giúp dưỡng ẩm và làm dịu tình trạng da kích ứng, tổn thương, hỗ trợ phục hồi làn da. Sản phẩm được khuyên dùng sau các liệu trình điều trị thẩm mỹ & kích ứng da nhẹ ở người lớn, trẻ em và trẻ sơ sinh.'),
('KCN4', 'KCN', 'Kem Chống Nắng Skin1004 Cho Da Nhạy Cảm SPF 50+ 50ml\r\nMadagascar Centella Air-Fit Suncream Plus SPF50+ PA++++', 60, 255000, 'facebook-dynamic-kem-chong-nang-skin1004-cho-da-nhay-cam-spf-50-50ml-1646014098_img_358x358_843626_fit_center.jpg', 'Kem Chống Nắng Skin1004 Cho Da Nhạy Cảm 50ml là sản phẩm kem chống nắng đến từ thương hiệu mỹ phẩm Skin1004 của Hàn Quốc, là kem chống nắng vật lý với chiết xuất rau má và chất kem mỏng nhẹ có màu giúp che phủ nhẹ khuyết điểm cho da. Công thức đa năng vừa chống nắng vừa đều màu da lại dưỡng ẩm chính là sản phẩm mà những cô nàng da mụn hay da dầu nhạy cảm cần vì không cần sử dụng quá nhiều bước lỉnh kỉnh.\r\n\r\n\r\n\r\n'),
('KD1', 'KD', 'Gel Dưỡng Megaduo Gel Giảm Mụn, Mờ Thâm 15g\r\nGel (Azelaic acid + AHA)', 60, 100000, 'google-shopping-gel-duong-megaduo-gel-giam-mun-mo-tham-15g-1660619496_img_358x358_843626_fit_center.jpg', 'Gel Dưỡng Megaduo Giảm Mụn, Mờ Thâm 15g là sản phẩm gel dưỡng giảm mụn đến từ thương hiệu Gamma Chemicals của Việt Nam, với khả năng làm giảm tình trạng mụn đồng thời ngăn hình thành các vết thâm sau mụn và làm mờ các đốm thâm hiệu quả, an toàn lành tính cho mọi loại da. '),
('KD2', 'KD', 'Kem Dưỡng Ẩm Klairs Làm Dịu & Phục Hồi Da Ban Đêm 60ml\r\nMidnight Blue Calming Cream', 60, 367000, 'google-shopping-kem-duong-am-klairs-lam-diu-phuc-hoi-da-ban-dem-60ml_img_358x358_843626_fit_center.jpg', 'Kem Dưỡng Ẩm Klairs Làm Dịu & Phục Hồi Da Ban Đêm là một loại kem dưỡng dành cho da nhạy cảm đang được yêu thích đến từ thương hiệu Klairs của Hàn Quốc. Nổi bật với thành phần Guaiazulene được chiết xuất từ dầu hoa cúc tạo màu xanh dịu mát tự nhiên, giúp làm dịu da kích ứng, nhạy cảm vô cùng hiệu quả. Cộng với chiết xuất rau má cấp ẩm, làm dịu da và hỗ trợ phục hồi da mụn rất tốt.'),
('KD3', 'KD', 'Kem Dưỡng Obagi Retinol 0.5% Ngăn Ngừa Lão Hoá Da 28g\r\nRetinol 0.5 Cream', 60, 1149000, 'top_fb_ads_422207968_050722-1656991298_img_358x358_843626_fit_center.jpg', 'Obagi 360 Retinol Cream là sản phẩm kem dưỡng da trẻ hoá, ngừa mụn nổi tiếng từ thương hiệu dược mỹ phẩm Obagi Medical. Công thức với hàm lượng Retinol 0.5% / Retinol 1% hoạt động hiệu quả trên mọi làn da, đặc biệt là da dầu, giúp cải thiện các vấn đề về da như mụn, dầu thừa, lão hoá; mang đến cho bạn làn da mịn màng và tươi trẻ.'),
('KD4', 'KD', 'Kem Dưỡng Ẩm Klairs Làm Dịu & Phục Hồi Da Ban Đêm 30ml\r\nMidnight Blue Calming Cream', 60, 289000, 'google-shopping-kem-duong-am-klairs-lam-diu-phuc-hoi-da-ban-dem-30ml-1_img_358x358_843626_fit_center.jpg', 'Kem Dưỡng Ẩm Klairs Làm Dịu & Phục Hồi Da Ban Đêm là một loại kem dưỡng dành cho da nhạy cảm đang được yêu thích đến từ thương hiệu Klairs của Hàn Quốc. Nổi bật với thành phần Guaiazulene được chiết xuất từ dầu hoa cúc tạo màu xanh dịu mát tự nhiên, giúp làm dịu da kích ứng, nhạy cảm vô cùng hiệu quả. Cộng với chiết xuất rau má cấp ẩm, làm dịu da và hỗ trợ phục hồi da mụn rất tốt.'),
('SM1', 'SM', 'Son Kem Lì 3CE Mịn Nhẹ #Live A Little - Đỏ Đất 4g\r\nCloud Lip Tint #Live A Little', 20, 248000, 'son-kem-sieu-li-3ce-live-a-little-mau-do-dat-4g_img_358x358_843626_fit_center.jpg', '\"Nhẹ như áng mây, mềm mại và mịn màng\" chính là Son Kem Lì 3CE Cloud Lip Tint đến từ thương hiệu 3CE của Hàn Quốc. Cây son vuông dài và đầu nắp ánh kim sang trọng luôn là sự lựa chọn hàng đầu bởi sức hấp dẫn khó cưỡng từ chất liệu đến thiết kế. Chất son kem mềm mại, sau khi khô lại không quá lì mà vẫn có giữ được độ trơn mịn cho đôi môi.'),
('SM2', 'SM', 'Son Kem Lì 3CE Mịn Nhẹ #Needful - Đỏ Gạch 4g\r\nCloud Lip Tint #Needful', 20, 248000, 'son-kem-sieu-li-3ce-needful-mau-do-gach-4g_img_358x358_843626_fit_center.jpg', '\"Nhẹ như áng mây, mềm mại và mịn màng\" chính là Son Kem Lì 3CE Cloud Lip Tint đến từ thương hiệu 3CE của Hàn Quốc. Cây son vuông dài và đầu nắp ánh kim sang trọng luôn là sự lựa chọn hàng đầu bởi sức hấp dẫn khó cưỡng từ chất liệu đến thiết kế. Chất son kem mềm mại, sau khi khô lại không quá lì mà vẫn có giữ được độ trơn mịn cho đôi môi.'),
('SM3', 'SM', 'Son Kem Lì 3CE Sepia - Màu Đỏ Gạch Đậm 4.6g\r\nBlur Water Tint #Sepia\r\n', 20, 248000, 'son-kem-3ce-blur-water-tint-_sepia-mau-do-gach-4.6g-1_img_358x358_843626_fit_center.jpg', '3CE Blur Water Tint là dòng son tint dạng nước đến từ thương hiệu 3CE của Hàn Quốc. Với chất son trơn mịn, mọng nước ngay từ lần thoa đầu tiên, Blur Water Tint sẽ mang đến cho bạn một làn môi mềm mại, căng mọng, đầy vẻ hờn dỗi nũng nịu.'),
('SM4', 'SM', 'Son Thỏi Lì 3CE Vỏ Trong Suốt Red Muse - Màu Đỏ 3.5g\r\nSoft Matte Lipstick #Red Muse', 20, 295000, 'son-thoi-li-3ce-soft-matte-mau-_red-muse-3.5g-1_img_358x358_843626_fit_center.jpg', 'Son Thỏi Lì 3CE Vỏ Trong Suốt 3.5g là sản phẩm son môi đến từ thương hiệu mỹ phẩm 3CE của Hàn Quốc, kết cấu son mềm mại và nhẹ môi cùng sắc tố cao giúp lên màu chuẩn sắc ngay từ lần đầu tiên. Sản phẩm với thiết kế vỏ trong suốt độc đáo, lạ mắt và ấn tượng giúp bạn quan sát được màu son bên trong.'),
('SM5', 'SM', 'Son Thỏi Lì 3CE Vỏ Trong Suốt #Speak To Me - Đỏ Mận 3.5g\r\nSoft Matte Lipstick #Speak To Me', 60, 314000, 'son-thoi-li-3ce-vo-trong-suot-speak-to-me-hong-dam-3-5g-1_img_358x358_843626_fit_center.jpg', 'Son Thỏi Lì 3CE Vỏ Trong Suốt 3.5g là sản phẩm son môi đến từ thương hiệu mỹ phẩm 3CE của Hàn Quốc, kết cấu son mềm mại và nhẹ môi cùng sắc tố cao giúp lên màu chuẩn sắc ngay từ lần đầu tiên. Sản phẩm với thiết kế vỏ trong suốt độc đáo, lạ mắt và ấn tượng giúp bạn quan sát được màu son bên trong.'),
('SM6', 'SM', 'Son Lì Lâu Phai 3CE Màu 222 Step And Go\r\nMood Recipe Matte Lip Color', 60, 283000, 'son-li-lau-phai-3ce-mau-222-step-and-go_img_358x358_843626_fit_center.jpg', 'Son Thỏi Mịn Lì 3CE 3.5g là sản phẩm son môi đến từ thương hiệu mỹ phẩm nổi tiếng 3CE của Hàn Quốc, chất son dạng Primer matte tăng độ bám, giảm hiện tượng son trượt môi, tạo đường viền môi gọn gàng, không hề gây khó chịu hay nặng môi giúp môi thêm gợi cảm, thu hút.'),
('SM7', 'SM', 'Son Lì Lâu Phai 3CE Màu 220 Hit Me Up\r\nMood Recipe Matte Lip Color', 60, 295000, 'son-li-lau-phai-3ce-mau-220-hit-me-up_1_img_358x358_843626_fit_center.jpg', 'Son Thỏi Mịn Lì 3CE 3.5g là sản phẩm son môi đến từ thương hiệu mỹ phẩm nổi tiếng 3CE của Hàn Quốc, chất son dạng Primer matte tăng độ bám, giảm hiện tượng son trượt môi, tạo đường viền môi gọn gàng, không hề gây khó chịu hay nặng môi giúp môi thêm gợi cảm, thu hút.'),
('SRM1', 'SRM', 'Kem Rửa Mặt Hada Labo Sạch Sâu Dưỡng Ẩm 80g\r\nAdvanced Nourish Hyaluronic Acid Cleanser', 60, 52000, 'facebook-dynamic-kem-rua-mat-hada-labo-duong-am-toi-uu-80g-1668590002_img_358x358_843626_fit_center.jpg', 'Kem Rửa Mặt Hada Labo Sạch Sâu Dưỡng Ẩm Da là sản phẩm sữa rửa mặt nằm trong dòng dưỡng ẩm Advanced Nourish của Hada Labo, với kết cấu dạng kem tạo bọt mịn, nhẹ nhàng len lỏi sâu vào lỗ chân lông để loại bỏ bụi bẩn & bã nhờn, đồng thời kết hợp hệ dưỡng ẩm sâu HA, SHA, Nano HA giúp cung cấp độ ẩm cho da luôn ẩm mượt và sạch sâu suốt 36 giờ.'),
('SRM2', 'SRM', 'Gel Rửa Mặt Cosrx Tràm Trà, 0.5% BHA Có Độ pH Thấp 150ml\r\nLow pH Good Morning Gel Cleanser', 60, 128000, 'gel-rua-mat-cosrx-tram-tra-0-5-bha-co-do-ph-thap-150ml-1_img_358x358_843626_fit_center.jpg', 'Gel Rửa Mặt Cosrx Tràm Trà, 0.5% BHA Có Độ pH Thấp 150ml là dòng sữa rửa mặt đến từ thương hiệu mỹ phẩm Cosrx của Hàn Quốc, với độ pH lý tưởng 4.5 - 5.5 sản phẩm an toàn và dịu nhẹ trên mọi làn da ngay cả làn da nhạy cảm và da mụn. Gel rửa mặt chứa 0,5% BHA tự nhiên và chiết xuất tràm trà làm sạch sâu lỗ chân lông, hỗ trợ kháng khuẩn, làm sạch mụn đồng thời tẩy da chết nhẹ nhàng.'),
('SRM3', 'SRM', 'Sữa Rửa Mặt Simple Giúp Da Sạch Thoáng 150ml\r\nKind To Skin Refreshing Facial Wash Gel', 60, 78000, 'google-shopping-sua-rua-mat-simple-giup-da-sach-thoang-150ml-1652952400_img_358x358_843626_fit_center.jpg', 'Sữa Rửa Mặt Simple Refreshing Facial Wash là sản phẩm sữa rửa mặt dạng gel dành cho mọi loại da nổi tiếng của thương hiệu mỹ phẩm Simple. Với công thức dịu nhẹ không chứa xà phòng cùng thành phần Pro-Vitamin B5 và Vitamin E, sản phẩm giúp làm sạch da hiệu quả, cuốn đi chất nhờn, bụi bẩn và các tạp chất khác mà không gây kích ứng, cho da mềm mịn, đồng thời mang lại cảm giác tươi mát và sạch thoáng cho da.'),
('SRM4', 'SRM', 'Sữa Rửa Mặt Naruko Dạng Bùn Tràm Trà 120ml\r\nTea Tree Purifying Clay Mask & Cleanser In 1', 60, 165000, 'google-shopping-sua-rua-mat-naruko-dang-bun-tram-tra-120g_img_358x358_843626_fit_center.jpg', 'Sữa Rửa Mặt NARUKO 120ml là dòng sản phẩm đến từ thương hiệu mỹ phẩm thiên nhiên NARUKO nổi tiếng của Đài Loan, giúp làm sạch sâu lỗ chân lông và loại bỏ các tạp chất tồn đọng trên da, đồng thời chăm sóc da mặt dịu nhẹ cùng các chiết xuất tự nhiên như Tràm Trà, Hoa Hồng Nhung Rừng, Bạch Ngọc Lan, Ý Dĩ Nhân Đỏ,...'),
('TCD1', 'TCD', 'Tinh Chất L\'Oréal Professionnel Kích Thích Mọc Tóc 90ml\r\nSerioxyl Denser Hair', 60, 1198000, 'google-shopping-tinh-chat-l-oreal-professionnel-kich-thich-moc-toc-90ml_img_358x358_843626_fit_center.jpg', 'Tinh Chất L\'Oréal Professionnel Kích Thích Mọc Tóc 90ml là dòng tinh chất chăm sóc tóc đến từ thương hiệu mỹ phẩm cao cấp L\'Oréal Professionnel trực thuộc tập đoàn L’Oréal Việt Nam, với phân tử kích thích tóc mọc độc quyền Stemoxydine giúp mọc 1000 sợi tóc chỉ sau 6 tuần sử dụng, nuôi dưỡng nang tóc khỏe mạnh hỗ trợ mọc tóc nhanh chóng, mang đến mái tóc chắc khỏe, bồng bềnh.\r\n\r\nHiện sản phẩm Tinh Chất L\'Oréal Professionnel Kích Thích Mọc Tóc 90ml đã có mặt tại Hasaki.\r\n\r\n'),
('TCD3', 'TCD', 'Serum Dưỡng Tóc TRESemmé Vào Nếp Bóng Mượt 97ml\r\nKeratin Smooth Shine Serum', 60, 128000, 'google-shopping-serum-duong-toc-tresemme-vao-nep-bong-muot-97ml_1_img_358x358_843626_fit_center.jpg', 'Serum Dưỡng Tóc TRESemmé Keratin Smooth Shine Serum với 5 công dụng tuyệt vời trong cùng bộ sản phẩm: giúp tóc vào nếp, bóng mượt, mềm mại, giảm xơ và gỡ rối sẽ mang lại cho bạn mái tóc đẹp chuẩn sàn diễn mỗi ngày. Công thức chứa Tinh dầu dưỡng tóc Marula cùng dưỡng chất Keratin được các chuyên gia tin dùng trong việc tạo kiểu bởi khả năng giúp tóc vào nếp nhanh chóng, kết hợp với công nghệ chuyên sâu Pro Technology System cung cấp dưỡng chất chuyên biệt cho tóc mềm mại bóng mượt đến 72H.'),
('TCD4', 'TCD', 'Serum Dưỡng Tóc Ellips Vitamin Óng Mượt Hũ 50 viên\r\nHair Vitamin Moroccan Oil Smooth & Shiny Jar', 60, 138000, 'google-shopping-serum-duong-toc-ellips-vitamin-ong-muot-hu-50-vien-1655885400_img_358x358_843626_fit_center.jpg', 'Serum Dưỡng Tóc Ellips Hair Vitamin Moroccan Oil là sản phẩm dầu dưỡng tóc dạng viên độc đáo đến từ thương hiệu chăm sóc tóc Ellips của Indonesia. Công thức chứa hàm lượng dồi dào các dưỡng chất có lợi như Vitamin A,C,E, & Pro Vit B-5 cùng tinh dầu Moroccan Oil quý giá, giúp nuôi dưỡng cho mái tóc thật khoẻ mạnh và bóng mượt, hỗ trợ giảm thiểu các tổn thương gây ra do tác động của nhiệt độ cao.'),
('TCD5', 'TCD', 'Tinh Chất Dưỡng Tóc Cocoon Hỗ Trợ Phục Hồi & Bảo Vệ 70ml\r\nInca Inchi Hair Repair Serum', 60, 111000, 'google-shopping-tinh-chat-duong-toc-cocoon-ho-tro-phuc-hoi-bao-ve-70ml_img_358x358_843626_fit_center.jpg', 'Serum Hỗ Trợ Phục Hồi Tóc Cocoon Inca Inchi Hair Repair Serum 70ml là sản phẩm của thương hiệu Cocoon Việt Nam với thành phần tự nhiên an toàn cho da và tóc. Chiết xuất dầu sa-chi độc đáo và đặc biệt cho tóc óng khoẻ, mượt mà chỉ với vài giọt đậm đặc. Bạn sẽ cảm nhận được mái tóc suôn mềm, đầy sức sống chỉ sau một thời gian ngắn sử dụng sản phẩm.\r\n\r\n'),
('TDC1', 'TDC', 'Tẩy Tế Bào Chết Toàn Thân Cocoon Cà Phê Đắk Lắk 200ml\r\nDak Lak Coffee Body Polish', 60, 92000, 'facebook-dynamic-ca-phe-dak-lak-tay-da-chet-toan-than-cocoon-200ml_1_img_358x358_843626_fit_center.jpg', 'Tẩy Da Chết Toàn Thân Cocoon Cà Phê Đắk Lắk là dòng tẩy tế bào chết toàn thân từ thương hiệu mỹ phẩm Cocoon của Việt Nam là một trong những sản phẩm với thành phần tự nhiên có nguồn gốc trong nước như hạt cà phê Đắk Lắk nguyên chất xay nhuyễn, hòa quyện cùng bơ cacao Tiền Giang giúp loại bỏ tế bào chết hiệu quả, làm đều màu da, mang lại năng lượng, giúp da trở nên mềm mại và rạng rỡ giúp mang đến cho bạn sản phẩm thuần chay tốt nhất với niềm tự hào từ nguyên liệu thuần Việt.'),
('TDC2', 'TDC', 'Tẩy Da Chết Toàn Thân Exclusive Cosmetic Quế Hồi Cafe 380g\r\nGel Scrub Coffee & Cinnamon Cloves', 60, 74000, 'tay-da-chet-toan-than-eksklyuziv-kosmetik-que-hoi-380g-limited-edition-2022-1646791834_img_358x358_843626_fit_center.jpg', 'Tẩy Da Chết Toàn Thân Exclusive Cosmetic Gel Scrub 380g là dòng sản phẩm tẩy tế bào chết toàn thân đến từ thương hiệu mỹ phẩm Exclusive Cosmetic của Cộng Hòa Belarus với chiết xuất từ các thành phần thiên nhiên như cam, chanh, bưởi, trà xanh, quế hồi và cà phê loại bỏ nhẹ nhàng các tế bào chết, lớp sừng bong tróc trên da, đem lại làn da ẩm mịn, thúc đẩy quá trình tái tạo da'),
('TDC3', 'TDC', 'Gel Tẩy Tế Bào Chết Cure Cho Mặt Và Toàn Thân 250g\r\nNatural Aqua Gel', 60, 435000, 'google-shopping-gel-tay-te-bao-chet-cure-cho-mat-va-toan-than-250g-2_img_358x358_843626_fit_center (1).jpg', 'Gel Tẩy Tế Bào Chết Cure Cho Mặt Và Toàn Thân 250g là dòng tẩy tế bào chết đến từ thương hiệu mỹ phẩm Cure của Nhật Bản, với thành phần chứa 91% nước hydro cùng các chiết xuất từ thiên nhiên như lô hội, bạch quả, hương thảo vô cùng an toàn và lành tính trên mọi làn da. Sản phẩm có kết cấu dạng gel giúp lấy đi các tế bào chết, thâm sạm, xỉn màu, loại bỏ các bụi bẩn, dầu thừa đem lại làn da sáng mịn, đều màu.'),
('TDC4', 'TDC', 'Tẩy Da Chết Toàn Thân Exclusive Cosmetic Chanh Đào 380g\r\nGel Scrub Grapefruit Lime Apricot', 60, 99000, 'google-shopping-tay-da-chet-toan-than-eksklyuziv-kosmetik-chiet-xuat-chanh-dao-380g-1_img_358x358_843626_fit_center.jpg', 'Tẩy Da Chết Toàn Thân Exclusive Cosmetic Gel Scrub 380g là dòng sản phẩm tẩy tế bào chết toàn thân đến từ thương hiệu mỹ phẩm Exclusive Cosmetic của Cộng Hòa Belarus với chiết xuất từ các thành phần thiên nhiên như cam, chanh, bưởi, trà xanh, quế hồi và cà phê loại bỏ nhẹ nhàng các tế bào chết, lớp sừng bong tróc trên da, đem lại làn da ẩm mịn, thúc đẩy quá trình tái tạo da'),
('TPCN1', 'TPCN', 'Collagen Nước DHC Dưỡng Ẩm, Ngừa Lão Hoá (Hộp 10 Chai)\r\nCollagen Beauty 7000 Plus', 60, 850000, 'top_fb_ads_422202552_210522-1653112994_img_358x358_843626_fit_center.jpg', 'Collagen Nước DHC Beauty 7000 Plus đến từ thương hiệu thực phẩm chức năng DHC nổi tiếng của Nhật Bản là giải pháp lý tưởng dành cho những làn da đang có dấu hiệu lão hoá như khô ráp, chảy xệ, kém đàn hồi. Sản phẩm ứng dụng công nghệ độc quyền Beauty Plus sẽ đem đến cho bạn một trải nghiệm dưỡng da tươi trẻ bất ngờ. Bên cạnh việc bổ sung 7000mg collagen thủy phân từ cá, sản phẩm còn cung cấp thêm vitamin C, tiền chất HA và citrulline. Tất cả đều không chỉ là nguyên liệu làm đẹp quý giá mà còn là những \"món ăn\" bổ dưỡng để nâng cao sức khỏe.'),
('TPCN2', 'TPCN', 'Viên Uống Chống Nắng Heliocare 60 Viên\r\nCapsulas Oral', 60, 907000, 'google-shopping-vien-uong-chong-nang-heliocare-60-vien_img_358x358_843626_fit_center.jpg', 'Viên Uống Chống Nắng HELIOCARE là sản phẩm chống nắng đường uống từ thương hiệu mỹ phẩm HELIOCARE nổi tiếng tại Tây Ban Nha. Với thành phần chính chiết xuất từ dương xỉ, viên uống làm đẹp da này sẽ giúp cung cấp khả năng bảo vệ đồng nhất và toàn diện trước tác động của ánh nắng mặt trời, giảm thiểu các tổn thương do tia UV gây ra, giúp ngăn ngừa da lão hóa và mang đến làn da đẹp, khỏe mạnh cho người sử dụng. '),
('TPCN3', 'TPCN', 'Thực Phẩm Bảo Vệ Sức Khỏe Blossomy Nghệ Collagen 50mlx10\r\nBlossomy Curcumin & Collagen Giúp Da Sáng Đẹp Và Dạ Dày Khỏe', 60, 354000, 'tem-phu-thuc-pham-bao-ve-suc-khoe-blossomy-50ml-x-10-chai_img_358x358_843626_fit_center.jpg', 'Blossomy là dòng sản phẩm thực phẩm bảo vệ sức khỏe dạng nước uống thuộc Rohto Health Science – nhãn hiệu thực phẩm chức năng chăm sóc sức khỏe của công ty Rohto-Mentholatum Việt Nam dựa trên nguyên lý kết hợp tinh hoa thiên nhiên cùng khoa học hiện đại Nhật Bản. Với phương châm “Sức khỏe của người tiêu dùng là điều quan trọng nhất”, Rohto Health Science cam kết mang tới những sản phẩm an toàn, minh bạch giúp cải thiện sức khỏe và sắc đẹp của người tiêu dùng Việt.\r\n\r\n '),
('TPCN4', 'TPCN', 'Bột Uống Collagen Naris ITOH Dưỡng Sáng Da 2gX30 Gói\r\nITOH Sapril Collagen', 60, 297000, 'google-shopping-bot-uong-collagen-naris-itoh-duong-sang-da-2gx30-goi_img_358x358_843626_fit_center.jpg', 'Bột Collagen Dưỡng Da Vị Xoài Naris Cosmetic Sapril Collagen là dòng sản phẩm collagen của thương hiệu Naris nổi tiếng ở Nhật Bản, rất được chị em phụ nữ ở Nhật Bản tin dùng, nay đã có mặt tại Hasaki. Sản phẩm giúp bổ sung hàm lượng collagen cần thiết cho cơ thể giúp hỗ trợ duy trì sự săn chắc, đàn hồi và khỏe mạnh cho làn da. Ngoài ra, sản phẩm còn hỗ trợ làm giảm các biểu hiện và giúp làm chậm tiến trình da lão hóa, giúp da sáng và ẩm mịn.'),
('TT1', 'TT', 'Bông tẩy Trang 100% Cotton Thổ Nhĩ Kỳ Ipek Klasik Cotton Pads', 60, 101000, '4678_3ec593f56b4f4e5380cae252857dc211_1024x1024_de017ecd50b344f8a80d7a8d8e90585a_1024x1024.webp', 'Bông Tẩy Trang Ipek Klasik là sản phẩm bông tẩy trang đến từ thương hiệu Ipek có thiết kế với lớp bông dạng tròn, mềm giúp bạn nhẹ nhàng chăm sóc làn da khi tẩy trang hoặc khi thoa nước hoa hồng.'),
('TT2', 'TT', 'Bông Tẩy Trang Làm Sạch Sâu 3 In 1 L\'Oreal Micellar Water Deep Cleansing', 60, 148000, 'ang-ceiba-100-chat-lieu-cotton-140-mieng_img_800x800_eb97c5_fit_center_c4b9fedf98bf4962a83a57fa9ba788e4_1024x1024.jpg', 'Bông Tẩy Trang 100% Cotton Ceiba Tree là dòng bông tẩy trang đến từ thương hiệu Ceiba, sử dụng nguồn nguyên liệu 100% cotton tự nhiên, sạch và tinh khiết, không sử dụng chất tẩy trắng hay các tạp chất để sơ chế bông tẩy trang tạo độ an toàn và dịu nhẹ cho làn da nhạy cảm, mặt bông mềm mịn mang đến cảm giác mềm mại dễ chịu trên da khi sử dụng'),
('TT3', 'TT', 'Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm Công Nghệ Micellar Sensibio H2O', 60, 389000, '11_45ab677b7f1a4d3c8445a1a7bb1c12d4_1024x1024.jpg', 'Nước Tẩy Trang Cho Da Nhạy Cảm Công Nghệ Micellar Bioderma Sensibio H2O là nước tẩy trang dạng micellar đến từ thương hiệu Bioderma giúp nhẹ nhàng làm sạch bụi bẩn và các lớp trang điểm trên da (kể cả vùng mắt và môi) hông cần rửa lại bằng nước với công nghệ Micellar và các chiết xuất từ thiên nhiên giúp giảm thiểu kha năng kích ứng và làm dịu da hiệu qu'),
('TT4', 'TT', 'Bông Tẩy Trang Hình Tròn Aritaum Round Cotton Pads - 80 miếng', 60, 28000, '1_ad48f8ab2bc241318f38387b606356f9_1024x1024.jpg', 'Bông Tẩy Trang Hình Tròn Aritaum Round Cotton Pads là dòng bông tẩy trang  thuộc thương hiệu Aritaum với 100% thành phần Cotton tạo nên lớp bông dạng tròn mềm mịn giúp nhẹ nhàng làm sạch bụi bẩn hoặc lớp trang điểm mà vẫn mang đến cảm giác mềm mại dễ chịu cho làn da\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD PRIMARY KEY (`Ma_Don`,`Ma_SP`),
  ADD KEY `Ma_SP` (`Ma_SP`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma_dm`);

--
-- Indexes for table `dia_chi_gh`
--
ALTER TABLE `dia_chi_gh`
  ADD PRIMARY KEY (`KH_Ma`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`Ma_Don`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`KH_Ma`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_dm` (`ma_dm`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD CONSTRAINT `ct_don_hang_ibfk_1` FOREIGN KEY (`Ma_Don`) REFERENCES `don_hang` (`Ma_Don`),
  ADD CONSTRAINT `ct_don_hang_ibfk_2` FOREIGN KEY (`Ma_SP`) REFERENCES `san_pham` (`ma_sp`);

--
-- Constraints for table `dia_chi_gh`
--
ALTER TABLE `dia_chi_gh`
  ADD CONSTRAINT `dia_chi_gh_ibfk_1` FOREIGN KEY (`KH_Ma`) REFERENCES `khachhang` (`KH_Ma`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_dm`) REFERENCES `danh_muc` (`ma_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
