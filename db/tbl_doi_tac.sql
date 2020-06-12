-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2020 lúc 10:57 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doi_tac_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_doi_tac`
--

CREATE TABLE `tbl_doi_tac` (
  `id_doi_tac` int(11) NOT NULL,
  `ten_doi_tac` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` int(11) NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_doi_tac`
--

INSERT INTO `tbl_doi_tac` (`id_doi_tac`, `ten_doi_tac`, `gioi_thieu`, `email`, `dien_thoai`, `dia_chi`, `anh`, `ghi_chu`) VALUES
(2, 'idocNet', 'Được thành lập năm 2008 bởi các kỹ sư tâm huyết với ngành công nghệ thông tin, trong thời gian vừa qua chúng tôi đã và đang khẳng định mình là một nhà cung cấp các giải pháp công nghệ thông tin toàn diện có vị thế tại Việt Nam.\r\n\r\nBằng việc nghiên cứu tỉ mỉ từng nhu cầu, đặc điểm của khách hàng và áp dụng các tiến bộ công nghệ mới nhất cùng với sự đầu tư mạnh mẽ vào dịch vụ sau bán hàng, idocNet tin tưởng rằng giá trị lớn nhất mà idocNet tạo ra đó là đem đến cho các doanh nghiệp một người đồng hành tin cậy trên chặng đường phát triển bền vững.', 'idocnet@gmail.com', 24444444, 'Hà Nội', 'idocnet.jpg', ''),
(3, 'FSS', 'Công ty cổ phần giải pháp phần mềm tài chính (FSS) được thành lập ngày 18/03/2008 bởi các chuyên gia đã có nhiều năm kinh nghiệm trong việc phát triển và triển khai giải pháp công nghệ thông tin cho các đơn vị hoạt động trong lĩnh vực tài chính, ngân hàng, chứng khoán tại Việt Nam và khu vực.Sau hơn 10 năm hoạt động, với một đội ngũ hơn 160 chuyên gia làm việc trong lĩnh vực phần mềm, FSS đã trở thành một trong những công ty phần mềm tài chính – ngân hàng hàng đầu tại Việt Nam và được nhiều khách hàng tin tưởng, lựa chọn. Khách hàng của FSS bao gồm các ngân hàng và các công ty chứng khoán lớn như BIDV, TechcomBank, VPBank, MBBank, VNDirect, VCBS, BSC, BVSC,…Với phương châm hoạt động dựa trên sự cam kết lâu dài, tính chuyên nghiệp cao và hiểu biết sâu sắc nhu cầu khách hàng, FSS luôn nỗ lực hết mình để mang lại sự thành công và lợi ích lâu dài cho khách hàng.', 'fss@gmail.com', 24888666, 'Hoàn Kiếm', 'fss.jpg', ''),
(4, 'Sapo', 'Được thành lập ngày 20/08/2008, với niềm đam mê và khát vọng thành công cùng hướng đi rõ ràng, Sapo nhanh chóng khẳng định được vị trí hàng đầu trong lĩnh vực bán lẻ và TMĐT với 2 sản phẩm chủ đạo là Bizweb và Sapo. Đến tháng 4/2018, Bizweb và Sapo hợp nhất với nhau, trở thành Nền tảng quản lý và bán hàng đa kênh được sử dụng nhiều nhất Việt Nam. Tính đến tháng 12/2019 Sapo đã có 67,000 khách hàng lựa chọn sử dụng.Hiện tại, Sapo đang mang đến cho các doanh nghiệp bán lẻ một nền tảng quản lý và bán hàng tổng thể từ online đến offline với Sapo POS - Phần mềm quản lý bán hàng, Sapo GO - Giải pháp quản lý bán hàng online dành riêng cho nhà bán hàng trên Facebook và sàn TMĐT, Sapo FnB - Phần mềm quản lý nhà hàng, quán cafe, Sapo Web - Giải pháp thiết kế website bán hàng và Sapo Omnichannel - giải pháp quản lý và bán hàng từ Online đến OfflineTrong hành trình 11 năm phát triển (từ năm 2008 - 2019), Sapo luôn cố gắng nỗ lực với mục tiêu cao là mang lại sự hài lòng cho các khách hàng thông qua những sản phẩm và giải pháp công nghệ tối ưu nhất vào bán hàng. Đồng thời, chúng tôi không ngừng nghiên cứu và tiên phong trong các giải pháp công nghệ mới góp phần khẳng định vị thế của mình.', 'sapo@gmail.com', 24999333, 'Thanh Xuân', 'sapo.jpg', ''),
(5, 'Tibco', 'TIBCO Software là một trong những nhà cung cấp phần mềm hạ tầng CNTT hàng đầu thế giới. Các giải pháp được phát triển dựa trên nền tảng công nghệ mới là điện toán đám mây (cloud computing) hay theo nhu cầu (on premise) của các khách hàng. Hiện TIBCO có hơn 4000 khách hàng trên toàn cầu. Tại Việt Nam, Ngân hàng TMCP Công thương Việt Nam (VietinBank) là ngân hàng đầu tiên áp dụng giải pháp quản lý quy trình kinh doanh và giải pháp kiến trúc định hướng cho dịch vụ của TIBCO.', 'tibco@gmail.com', 29999999, 'Hà Nam', 'tibco.jpg', NULL),
(6, '1C Vietnam', 'Được thành lập từ năm 1991, công ty 1C đã phát triển nhanh chóng và mạnh mẽ nhờ phát triển và cung cấp các giải pháp phần mềm cũng như các dịch vụ hỗ trợ cho doanh nghiệp. Với hơn 30 năm kinh nghiệm, công ty 1C luôn phấn đấu để cải thiện cả về chất lượng sản phẩm và dịch vụ.Danh tiếng đã được khẳng định ở thị trường Nga và Đông Âu, công ty 1C đã mở rộng thị trường của mình ra quốc tế. 1C Việt Nam được thành lập với vai trò là công ty con của 1C.', '1cvietnam@gmail.com', 34888333, 'Hà Tây', '1c.jpg', ''),
(7, 'Robusta', 'Công ty TNHH Công nghệ và Đào tạo Robusta xin gửi đến Quý khách hàng và Quý Đối tác lời chào trân trọng nhất.  Thành lập vào tháng 5 năm 2010, Robusta đã nhanh chóng trở thành nơi đào tạo CNTT chuyên sâu, chất lượng quốc tế hàng đầu tại Việt Nam với thế mạnh về đào tạo những công nghệ mới nhất như: Ảo hóa và Điện toán đám mây, Big Data, Bảo mật, Công nghệ 4.0, Blockchain ...  Với sự phát triển không ngừng, được sự tin tưởng và hợp tác của nhiều đối tác hàng đầu thế giới, Robusta đã trở thành đối tác đào tạo Ủy quyền đầu tiên của VMware tại Việt Nam. Hiện tại Robusta là đối tác ủy quyền đào tạo của nhiều hãng công nghệ lớn trên thế giới như Microsoft, DellEMC, RedHat, (ISC)², EC-Council, Citrix, CompTIA, DevOps,...', 'robusta@gmail.com', 36666444, 'Hào Nam', '../img/robusta.jpg', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_doi_tac`
--
ALTER TABLE `tbl_doi_tac`
  ADD PRIMARY KEY (`id_doi_tac`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_doi_tac`
--
ALTER TABLE `tbl_doi_tac`
  MODIFY `id_doi_tac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
