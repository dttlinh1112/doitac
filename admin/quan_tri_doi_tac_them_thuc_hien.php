<?php 
				//1. tạo chuỗi kết nối đến csdl
				$ket_noi= mysqli_connect("localhost","root","","doi_tac_db");
				mysqli_set_charset($ket_noi, 'UTF8'); 
				// 2.lấy ra dữ liệu để insert
				$ten_doi_tac= $_POST["txtTenDoiTac"];
				$gioi_thieu= $_POST["txtGioiThieu"];
				$email= $_POST["txtEmail"];
				$dien_thoai= $_POST["txtDienThoai"];
				$dia_chi= $_POST["txtDiaChi"];
				$ghi_chu= $_POST["txtGhiChu"];
				//lấy ra thông tin ảnh minh họa
				$anh_minh_hoa = "../img/".basename($_FILES["txtAnh"]["name"]);
				$file_anh_tam = $_FILES["txtAnh"]["tmp_name"];
				$thuc_hien_luu_anh = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
				if (!$thuc_hien_luu_anh) {
					$anh_minh_hoa = NULL;
				}
				// echo $tieu_de; exit();
				//3. Viết câu lệnh SQL để xóa được ID m=như trên lấy ra a dữ liệu mong muốn
				$sql="INSERT INTO `tbl_doi_tac`(`id_doi_tac`, `ten_doi_tac`, `gioi_thieu`, `email`, `dien_thoai`, `dia_chi`, `anh`, `ghi_chu`) VALUES (NULL,'".$ten_doi_tac."','".$gioi_thieu."','".$email."','".$dien_thoai."','".$dia_chi."','".$anh_minh_hoa."',NULL)
				";	
				//4 thực hiện truy vấn đẻ lấy ra dữ liệu mong muốn
				mysqli_query($ket_noi, $sql);
				// //5. thông báo việc xóa được thành công và quay trở lại trang quản trị
				echo 
					"<script type='text/javascript'>
					window.alert('Bạn đã thêm mới đối tác thành công.');
					</script>";
		// Chuyển người dùng vào trang quản trị 
				echo 
					"<script type='text/javascript'>
					window.location.href = './quan_tri_doi_tac.php'
					</script>";	
;?>