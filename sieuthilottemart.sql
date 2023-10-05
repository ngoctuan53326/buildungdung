-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2023 lúc 06:11 PM
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
-- Cơ sở dữ liệu: `sieuthilottemart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `id_customer` bigint(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `note`, `status`, `created_at`, `updated_at`) VALUES
(16, 19, '2023-09-13', 6900, 'zfghdsh', 'Đang chuẩn bị hàng', '2023-09-13 07:26:30', '2023-09-13 07:26:30'),
(17, 20, '2023-09-13', 2300, 'dfhzm', 'Đang chuẩn bị hàng', '2023-09-13 09:13:25', '2023-09-13 09:13:25'),
(18, 21, '2023-09-13', 2300, 'gh', 'Đang chuẩn bị hàng', '2023-09-13 09:28:32', '2023-09-13 09:28:32'),
(19, 22, '2023-09-13', 1100, 'vinh', 'Đang chuẩn bị hàng', '2023-09-13 09:32:18', '2023-09-13 09:32:18'),
(20, 23, '2023-09-13', 1100, 'dag', 'Đang chuẩn bị hàng', '2023-09-13 09:48:26', '2023-09-13 09:48:26'),
(21, 24, '2023-09-13', 1100, 'csafg', 'Đang chuẩn bị hàng', '2023-09-13 09:49:58', '2023-09-13 09:49:58'),
(22, 25, '2023-09-13', 1100, 'dg', 'Đang chuẩn bị hàng', '2023-09-13 10:00:21', '2023-09-13 10:00:21'),
(23, 26, '2023-09-13', 1100, 'sFG', 'Đang chuẩn bị hàng', '2023-09-13 10:01:02', '2023-09-13 10:01:02'),
(24, 27, '2023-09-13', 1100, 'dv', 'Đang chuẩn bị hàng', '2023-09-13 10:13:28', '2023-09-13 10:13:28'),
(25, 28, '2023-09-13', 1100, 'dv', 'Đang chuẩn bị hàng', '2023-09-13 10:19:28', '2023-09-13 10:19:28'),
(26, 29, '2023-09-13', 1100, 'fxyj', 'Đang chuẩn bị hàng', '2023-09-13 10:19:43', '2023-09-13 10:19:43'),
(27, 30, '2023-09-13', 1100, 'fxyj', 'Đang chuẩn bị hàng', '2023-09-13 10:20:01', '2023-09-13 10:20:01'),
(28, 31, '2023-09-13', 1100, 'vds', 'Đang chuẩn bị hàng', '2023-09-13 10:33:46', '2023-09-13 10:33:46'),
(29, 32, '2023-09-13', 1200, 'sDV', 'Đang chuẩn bị hàng', '2023-09-13 10:34:11', '2023-09-13 10:34:11'),
(30, 33, '2023-09-13', 1100, 'à', 'Đang chuẩn bị hàng', '2023-09-13 10:36:29', '2023-09-13 10:36:29'),
(31, 34, '2023-09-13', 1100, 'à', 'Đang chuẩn bị hàng', '2023-09-13 10:37:28', '2023-09-13 10:37:28'),
(32, 35, '2023-09-14', 4000, 'dsg', 'đã hủy đơn hàng', '2023-09-14 02:19:07', '2023-09-13 19:19:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(20, 16, 64, 3, 1200, '2023-09-13 07:26:30', '2023-09-13 07:26:30'),
(19, 16, 63, 3, 1100, '2023-09-13 07:26:30', '2023-09-13 07:26:30'),
(26, 20, 63, 1, 1100, '2023-09-13 09:48:26', '2023-09-13 09:48:26'),
(25, 19, 63, 1, 1100, '2023-09-13 09:32:18', '2023-09-13 09:32:18'),
(24, 18, 64, 1, 1200, '2023-09-13 09:28:32', '2023-09-13 09:28:32'),
(23, 18, 63, 1, 1100, '2023-09-13 09:28:32', '2023-09-13 09:28:32'),
(22, 17, 64, 1, 1200, '2023-09-13 09:13:25', '2023-09-13 09:13:25'),
(21, 17, 63, 1, 1100, '2023-09-13 09:13:25', '2023-09-13 09:13:25'),
(27, 21, 63, 1, 1100, '2023-09-13 09:49:58', '2023-09-13 09:49:58'),
(28, 22, 63, 1, 1100, '2023-09-13 10:00:21', '2023-09-13 10:00:21'),
(29, 23, 63, 1, 1100, '2023-09-13 10:01:02', '2023-09-13 10:01:02'),
(30, 24, 63, 1, 1100, '2023-09-13 10:13:28', '2023-09-13 10:13:28'),
(31, 25, 63, 1, 1100, '2023-09-13 10:19:28', '2023-09-13 10:19:28'),
(32, 26, 63, 1, 1100, '2023-09-13 10:19:43', '2023-09-13 10:19:43'),
(33, 27, 63, 1, 1100, '2023-09-13 10:20:01', '2023-09-13 10:20:01'),
(34, 28, 63, 1, 1100, '2023-09-13 10:33:46', '2023-09-13 10:33:46'),
(35, 29, 64, 1, 1200, '2023-09-13 10:34:11', '2023-09-13 10:34:11'),
(36, 30, 63, 1, 1100, '2023-09-13 10:36:29', '2023-09-13 10:36:29'),
(37, 31, 63, 1, 1100, '2023-09-13 10:37:28', '2023-09-13 10:37:28'),
(38, 32, 77, 1, 4000, '2023-09-13 19:16:51', '2023-09-13 19:16:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `ho` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL,
  `trangthai` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `ho`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `trangthai`, `created_at`, `updated_at`) VALUES
(16, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'zfghdsh', 'Chưa liên hệ', '2023-09-21 03:24:30', '2023-09-13 07:07:37'),
(17, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'zfghdsh', 'Chưa liên hệ', '2023-09-21 03:24:36', '2023-09-13 07:21:16'),
(18, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'zfghdsh', 'Chưa liên hệ', '2023-09-21 03:24:40', '2023-09-13 07:21:43'),
(19, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'zfghdsh', 'Chưa liên hệ', '2023-09-21 03:24:45', '2023-09-13 07:26:30'),
(20, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'dfhzm', 'Chưa liên hệ', '2023-09-21 03:24:49', '2023-09-13 09:13:25'),
(21, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'gh', 'Chưa liên hệ', '2023-09-21 03:24:52', '2023-09-13 09:28:32'),
(22, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'vinh', 'Chưa liên hệ', '2023-09-21 03:24:56', '2023-09-13 09:32:18'),
(23, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'dag', 'Chưa liên hệ', '2023-09-21 03:25:01', '2023-09-13 09:48:26'),
(24, 'Huỳnh', 'dv', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'csafg', 'Chưa liên hệ', '2023-09-21 03:25:04', '2023-09-13 09:49:58'),
(25, 'Huỳnh', 'dzfb', 'DSG', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'dg', 'Chưa liên hệ', '2023-09-21 03:25:07', '2023-09-13 10:00:21'),
(26, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'sFG', 'Chưa liên hệ', '2023-09-21 03:25:10', '2023-09-13 10:01:02'),
(27, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'dv', 'Chưa liên hệ', '2023-09-21 03:25:12', '2023-09-13 10:13:28'),
(28, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'dv', 'Chưa liên hệ', '2023-09-21 03:25:13', '2023-09-13 10:19:28'),
(29, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'fxyj', 'Chưa liên hệ', '2023-09-21 03:25:16', '2023-09-13 10:19:43'),
(30, 'Huỳnh', 'Tuấn', 'nam', 'daytao0905@gmail.com', 'sdffdf', '0333501375', 'fxyj', 'Chưa liên hệ', '2023-09-21 03:25:19', '2023-09-13 10:20:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangtonkhos`
--

CREATE TABLE `hangtonkhos` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hangtonkhos`
--

INSERT INTO `hangtonkhos` (`id`, `tensp`, `id_type`, `soluong`, `ngaynhap`, `created_at`, `updated_at`) VALUES
(1, 'Bếp gas nhà bếp', 2, 10, '2023-10-01', '2023-10-04 02:16:34', '2023-10-03 20:28:56'),
(2, 'Lò nướng nhà bếp', 2, 8, '2023-10-02', '2023-10-04 02:16:34', '2023-10-04 02:27:07'),
(3, 'Bàn ăn nhà bếp', 2, 15, '2023-10-03', '2023-10-04 02:16:34', '2023-10-04 02:27:11'),
(4, 'Tủ lạnh công nghiệp', 3, 5, '2023-10-04', '2023-10-04 02:16:34', '2023-10-04 02:27:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadons`
--

CREATE TABLE `hoadons` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) DEFAULT NULL,
  `thanhtien` decimal(10,2) DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadons`
--

INSERT INTO `hoadons` (`id`, `tenkh`, `thanhtien`, `ngay`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', 2500000.00, '2023-10-03', '2023-10-04 01:14:13', '2023-10-04 01:14:13'),
(2, 'Trần Thị B', 1800000.00, '2023-10-04', '2023-10-04 01:14:13', '2023-10-04 01:14:13'),
(3, 'Lê Minh C', 3200000.00, '2023-10-05', '2023-10-04 01:14:13', '2023-10-04 01:14:13'),
(4, 'Phạm Hữu D', 1000000.00, '2023-10-06', '2023-10-04 01:14:13', '2023-10-04 01:14:13'),
(5, 'Nguyễn Thị E', 2700000.00, '2023-10-07', '2023-10-04 01:14:13', '2023-10-04 01:14:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhes`
--

CREATE TABLE `lienhes` (
  `id` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhes`
--

INSERT INTO `lienhes` (`id`, `email`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'daytao0905@gmail.com', 'tuấn', '123123', '2023-09-21 20:35:38', '2023-09-21 20:35:38'),
(2, 'daytao0905@gmail.c', 'Tuấn', '123123', '2023-09-26 18:28:11', '2023-09-26 18:28:11'),
(3, 'quANGLINHKSZ@GMAIL.com', 'Linh', '123123', '2023-09-26 18:40:15', '2023-09-26 18:40:15'),
(4, 'daytao0905@GMAIL.com', 'Tuấn', '123123', '2023-09-26 18:40:29', '2023-09-26 18:40:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcaps`
--

CREATE TABLE `nhacungcaps` (
  `id` int(11) NOT NULL,
  `tenncc` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `SDT` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcaps`
--

INSERT INTO `nhacungcaps` (`id`, `tenncc`, `address`, `SDT`, `email`, `created_at`, `updated_at`) VALUES
(1, 'CJ Group', 'Địa chỉ CJ Group', '0123456789', 'cjgroup@example.com', '2023-10-04 01:03:33', '2023-10-03 18:06:50'),
(2, 'Lotte Confectionery', 'Địa chỉ Lotte Confectionery', '0987654321', 'lotte@example.com', '2023-10-04 01:03:33', '2023-10-04 01:03:33'),
(3, 'Samsung Electronics', 'Địa chỉ Samsung Electronics', '0369845127', 'samsung@example.com', '2023-10-04 01:03:33', '2023-10-04 01:03:33'),
(4, 'LG Electronics', 'Địa chỉ LG Electronics', '0312478963', 'lg@example.com', '2023-10-04 01:03:33', '2023-10-04 01:03:33'),
(5, 'The Face Shop', 'Địa chỉ The Face Shop', '0258741369', 'thefaceshop@example.com', '2023-10-04 01:03:33', '2023-10-04 01:03:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `new` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(8, 'Bếp gas nhà bếp', 2, 'Bếp ga nhà bếp có thiết kế gọn gàng với bề mặt bằng thép không gỉ hoặc kính chịu nhiệt, bốn bếp đốt khác nhau để nấu nướng đa dạng, các nút điều khiển riêng lẻ cho mỗi bếp để điều chỉnh nhiệt độ, hệ thống đánh lửa tự động, rỉ nấu bằng gang hoặc thép không gỉ, tính năng an toàn bao gồm khóa trẻ em và cảm biến tự động ngắt nguồn gas, hoạt động bằng gas tự nhiên hoặc gas hóa lỏng, và dễ dàng vệ sinh để duy trì sự sạch sẽ và hiệu suất tốt.', 500000, 450000, '1.jpeg', 'cái', 0, '2023-09-19 02:43:35', '2023-09-19 02:43:35'),
(9, 'Bếp từ điện', 2, 'Bếp từ điện có bề mặt phẳng làm bằng kính chịu nhiệt hoặc chất liệu tương tự, với các vùng nấu được đánh dấu trên bề mặt, điều khiển nhiệt độ và thời gian bằng các nút hoặc cảm ứng, cho phép người dùng điều chỉnh nhiệt độ một cách chính xác và dễ dàng vệ sinh bề mặt kính, làm cho nó trở thành lựa chọn phổ biến trong các căn bếp hiện đại.', 600000, 550000, '2.jpeg', 'cái', 1, '2023-09-19 02:43:35', '2023-09-19 02:43:35'),
(10, 'Lò nướng nhà bếp', 2, 'Lò nướng nhà bếp là một thiết bị chức năng quan trọng trong việc nấu ăn, với một không gian lớn bên trong để nướng, nấu thực phẩm.', 700000, 650000, '3.jpeg', 'cái', 0, '2023-09-19 02:43:35', '2023-09-19 02:43:35'),
(11, 'Máy rửa bát', 2, 'Máy rửa bát là một thiết bị hiện đại và tiện dụng trong nhà bếp, được thiết kế để tự động làm sạch và rửa sạch bát đĩa, đồ dùng ăn uống, và các công cụ nấu nướng, giúp tiết kiệm thời gian và công sức cho việc vệ sinh sau bữa ăn.', 400000, 380000, '4.jpeg', 'cái', 1, '2023-09-19 02:43:35', '2023-09-19 02:43:35'),
(12, 'Bàn ăn nhà bếp', 2, 'Bàn ăn nhà bếp là một mảng không thể thiếu trong không gian nấu ăn của gia đình, nơi mọi người tụ họp để thực đơn, trò chuyện, và tận hưởng bữa ăn cùng nhau.', 300000, 280000, '5.jpg', 'cái', 0, '2023-09-19 02:43:35', '2023-09-19 02:43:35'),
(13, 'Tủ bếp', 2, 'Tủ bếp là một thành phần quan trọng trong không gian nhà bếp, nó cung cấp không chỉ chỗ để lưu trữ và tổ chức các dụng cụ nấu ăn, bát đĩa, và thực phẩm mà còn đóng vai trò quan trọng trong thiết kế và thẩm mỹ tổng thể của căn bếp.', 1200000, 1100000, '6.jpeg', 'cái', 1, '2023-09-19 02:43:35', '2023-09-19 02:43:35'),
(15, 'Tủ lạnh công nghiệp', 3, 'Tủ lạnh công nghiệp là một thiết bị lớn và mạnh mẽ được sử dụng trong môi trường kinh doanh, như nhà hàng, khách sạn, siêu thị hoặc nhà máy thực phẩm, để bảo quản và làm lạnh hàng loạt thực phẩm và đồ uống trong một không gian lớn và có khả năng duy trì nhiệt độ ổn định để đảm bảo an toàn thực phẩm.', 1500000, 1400000, '7.jpg', 'cái', 1, '2023-09-19 02:43:48', '2023-09-19 02:43:48'),
(16, 'Tủ đông công nghiệp', 3, 'Tủ đông công nghiệp là một thiết bị lớn, được thiết kế chuyên dụng trong các môi trường kinh doanh như siêu thị, nhà hàng, nhà máy thực phẩm, và nhà hàng tiệc cưới, để bảo quản đông lạnh hiệu quả các loại thực phẩm đóng gói trong môi trường có nhiệt độ thấp và ổn định, giúp bảo tồn thực phẩm lâu dài và đảm bảo chất lượng.', 1800000, 1600000, '8.jpeg', 'cái', 0, '2023-09-19 02:43:48', '2023-09-19 02:43:48'),
(17, 'Tủ mát công nghiệp', 3, 'Tủ mát công nghiệp là một thiết bị lớn và chuyên dụng được sử dụng trong các môi trường kinh doanh như siêu thị, cửa hàng thực phẩm, nhà hàng và nhà máy thực phẩm để bảo quản các sản phẩm thực phẩm tươi sống và đóng gói ở nhiệt độ thấp hơn nhiệt độ phòng. Thiết bị này giúp duy trì chất lượng và an toàn thực phẩm trong khoảng thời gian dài và cung cấp không gian lưu trữ rộng rãi cho các sản phẩm lạnh.', 1700000, 1500000, '9.jpeg', 'cái', 1, '2023-09-19 02:43:48', '2023-09-19 02:43:48'),
(18, 'Bàn làm việc lạnh', 3, 'Bàn làm việc lạnh là một thiết bị công nghiệp được thiết kế để giữ cho không gian làm việc hoặc làm việc trên bề mặt bàn duy trì nhiệt độ thấp hơn nhiệt độ phòng. Điều này thường được sử dụng trong các môi trường công nghiệp như các phòng làm việc yêu cầu sự làm mát để bảo quản sản phẩm nhạy cảm với nhiệt độ như trong ngành công nghiệp y học hoặc nghiên cứu. Bàn làm việc lạnh giúp duy trì sự ổn định của các mẫu thử, sản phẩm y học, hoặc các quá trình làm việc đòi hỏi nhiệt độ thấp để đảm bảo hiệu suất và an toàn.', 800000, 750000, '10.jpeg', 'cái', 0, '2023-09-19 02:43:48', '2023-09-19 02:43:48'),
(19, 'Máy làm đá lạnh', 3, 'Máy làm đá lạnh là một thiết bị điện tử tiện ích trong nhà bếp hoặc trong môi trường thương mại, được thiết kế để tạo ra đá lạnh theo nhu cầu. Thiết bị này hoạt động bằng cách lấy nước và làm lạnh nó trong các ngăn đá, sau đó tạo ra các viên đá hoặc viên viên đá, tùy thuộc vào thiết kế của máy. Đá này có thể được sử dụng để làm mát đồ uống hoặc bảo quản thực phẩm tươi sống, đồ đông lạnh, hoặc để phục vụ trong các môi trường ẩm mà đá lạnh được yêu cầu.', 300000, 280000, '11.jpeg', 'cái', 1, '2023-09-19 02:43:48', '2023-09-19 02:43:48'),
(20, 'Tủ trưng bày đá lạnh', 3, 'Tủ trưng bày đá lạnh là một thiết bị thương mại hoặc gia đình có chức năng chứa và trưng bày đá lạnh một cách hiển thị và thuận tiện. Thường được thiết kế với một hoặc nhiều ngăn chứa đá lạnh, tủ này có cửa kính hoặc màn hình trong suốt để người sử dụng có thể thấy rõ đá lạnh bên trong. Thường được sử dụng trong các môi trường như nhà hàng, quán cà phê, cửa hàng thực phẩm hoặc gia đình để giữ đá lạnh sẵn sàng cho việc phục vụ đồ uống và làm mát thực phẩm.', 600000, 550000, '12.jpeg', 'cái', 0, '2023-09-19 02:43:48', '2023-09-19 02:43:48'),
(21, 'Tủ trưng bày thực phẩm lạnh', 3, 'Tủ trưng bày thực phẩm lạnh là một thiết bị thương mại hoặc gia đình được thiết kế để hiển thị và bảo quản thực phẩm lạnh một cách hấp dẫn và hiệu quả. Thường có cửa kính hoặc màn hình trong suốt để khách hàng hoặc người sử dụng có thể nhìn thấy thực phẩm bên trong mà không cần mở cửa. Tủ trưng bày này thường được sử dụng tại các nhà hàng, siêu thị, cửa hàng thực phẩm hoặc quán ăn để trưng bày đồ ăn như thịt, cá, sản phẩm nước ép, hoặc bất kỳ thực phẩm lạnh nào mà cần được giữ ở nhiệt độ thấp để bảo quản chất lượng và đảm bảo an toàn cho người tiêu dùng.', 700000, 650000, '13.jpg', 'cái', 1, '2023-09-19 02:43:48', '2023-09-19 02:43:48'),
(22, 'Bồn nước inox', 1, 'Bồn nước inox là một loại thiết bị chứa nước được làm từ thép không gỉ (inox). Bồn này thường có một thiết kế chắc chắn và bề mặt bóng, mịn, chống gỉ sét, và có khả năng chịu được tác động của nước và các hạt bẩn trong môi trường.', 300000, 280000, '14.jpeg', 'cái', 0, '2023-09-19 02:43:59', '2023-09-19 02:43:59'),
(23, 'Bồn tắm inox', 1, 'Bồn tắm inox là một thiết bị tạo điều kiện thuận lợi cho việc tắm rửa và thư giãn trong không gian phòng tắm. Được làm từ chất liệu thép không gỉ (inox), bồn tắm này thường có một thiết kế chắc chắn, bề mặt bóng, mịn và chống ăn mòn.', 400000, 380000, '15.jpeg', 'cái', 1, '2023-09-19 02:43:59', '2023-09-19 02:43:59'),
(24, 'Gương trang điểm inox', 1, 'Gương trang điểm inox là một loại gương được làm từ chất liệu thép không gỉ (inox) và được thiết kế đặc biệt để sử dụng trong quá trình trang điểm và làm đẹp. Gương này thường có một khung và bề mặt phản xạ chất lượng cao để tái tạo hình ảnh một cách rõ nét và chính xác.', 150000, 140000, '16.jpeg', 'cái', 0, '2023-09-19 02:43:59', '2023-09-19 02:43:59'),
(25, 'Cầu thang inox', 1, 'Cầu thang inox là một loại cầu thang được làm từ thép không gỉ (inox), và nó thường được thiết kế để cung cấp một lối đi chắc chắn và bền bỉ giữa các tầng hoặc khu vực trong các công trình dân dụng hoặc thương mại. Cầu thang inox có bề mặt bóng, mịn, chống ăn mòn và khả năng chịu được các yếu tố môi trường bên ngoài.\r\n\r\n', 800000, 750000, '17.jpeg', 'cái', 1, '2023-09-19 02:43:59', '2023-09-19 02:43:59'),
(26, 'Lan can inox', 1, 'Lan can inox là một thành phần kiến trúc được làm từ thép không gỉ (inox), thường được sử dụng để bảo vệ và làm đẹp cho các ban công, cầu thang, hoặc các khu vực trên cao trong các công trình dân dụng hoặc thương mại. Lan can inox có bề mặt bóng, mịn, chống ăn mòn và khả năng chịu được các yếu tố môi trường bên ngoài.', 200000, 180000, '18.jpeg', 'cái', 0, '2023-09-19 02:43:59', '2023-09-19 02:43:59'),
(27, 'Cửa inox', 1, 'Cửa inox là một loại cửa được làm từ thép không gỉ (inox), với bề mặt sáng bóng và chống ăn mòn. Các cửa inox thường có thiết kế chắc chắn và đa dạng, có thể là cửa mở cửa sổ hoặc cửa cánh, có thể sử dụng trong nhiều mô hình thiết kế kiến trúc khác nhau.', 1200000, 1100000, '19.jpeg', 'cái', 1, '2023-09-19 02:43:59', '2023-09-19 02:43:59'),
(28, 'Bồn rửa tay tự động inox', 1, 'Bồn rửa tay tự động inox là một thiết bị vệ sinh được làm từ thép không gỉ (inox) và được thiết kế đặc biệt để sử dụng trong việc rửa tay một cách tự động và tiện lợi. Bồn rửa tay này thường có thiết kế hiện đại, với bề mặt sáng bóng, mịn, và chống ăn mòn.', 500000, 450000, '20.jpeg', 'cái', 0, '2023-09-19 02:43:59', '2023-09-19 02:43:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` bigint(11) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `uudai` varchar(200) NOT NULL,
  `gia` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`, `name`, `uudai`, `gia`, `created_at`, `updated_at`) VALUES
(1, '', 'slider_1.jpg', 'Red Mi Y1', 'LED Selfie-light | Fingerprint sensor | Dedicated microSD card slot Snapdragon 435 octa-core processor ', 139, NULL, NULL),
(2, '', 'slider_2.jpg', 'Google Pixel 2', 'The latest Qualcomm Snapdragon 835 processor | Water-resistant metal unibody | Up to 7 hours of battery. ', 938, NULL, NULL),
(3, '', 'slider_3.jpg', 'Iphone 8 plus ', '5.5 inch Retina HD Display | 12MP wide-angle cameras| 64 GB & 256 GB ROM Memory', 760, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Thiết bị inox công nghiệp', 'Mô tả về thiết bị inox công nghiệp', 'link_anh_1.jpg', '2023-09-19 02:35:30', '2023-09-19 02:35:30'),
(2, 'Thiết bị nhà bếp', 'Mô tả về thiết bị nhà bếp', 'link_anh_2.jpg', '2023-09-19 02:35:30', '2023-09-19 02:35:30'),
(3, 'Thiết bị trữ lạnh', 'Mô tả về thiết bị trữ lạnh', 'link_anh_3.jpg', '2023-09-19 02:35:30', '2023-09-19 02:35:30'),
(4, 'Sản phẩm khác', 'Mô tả về sản phẩm khác', 'link_anh_4.jpg', '2023-09-19 02:35:30', '2023-09-19 02:35:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Huỳnh Ngọc Tuấn', 'a2@gmail.com', '$2y$10$4cirlVx4rCXIn.kbkQY0T.a.2.6LOEjxFECe1e4IkxLMZqO2KS9C2', '0333501375', 'sdffdf', 1, NULL, '2023-09-11 10:35:05', '2023-09-13 00:42:27'),
(11, 'Huỳnh Văn Bin', 'bindzvippro@gmail.com', '$2y$10$gtfPOjZ5qa56lu0UTv0Mqu6ayLh62Ja8v/PwyUNhSWb/Ut/98.FLi', '0333501375', 'sdffdf', 3, NULL, '2023-09-11 19:49:52', '2023-09-11 19:49:52'),
(12, 'Linh', 'quanglinhksz@gmail.com', '$2y$10$fTTaSljcz4t4LSROYC5gsOl4okvpREapcy0tLrsdsK3BjLp1ih19C', '0333501375', 'sdffdf', 3, NULL, '2023-09-13 08:23:57', '2023-09-13 08:23:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hangtonkhos`
--
ALTER TABLE `hangtonkhos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadons`
--
ALTER TABLE `hoadons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhes`
--
ALTER TABLE `lienhes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcaps`
--
ALTER TABLE `nhacungcaps`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `hangtonkhos`
--
ALTER TABLE `hangtonkhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoadons`
--
ALTER TABLE `hoadons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lienhes`
--
ALTER TABLE `lienhes`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhacungcaps`
--
ALTER TABLE `nhacungcaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
