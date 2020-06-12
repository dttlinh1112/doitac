<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "doi_tac_db");

	// 2. Lẫy dữ liệu để cập nhật tin tức
	$id_doi_tac = $_POST["txtID"];
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
	if(!$thuc_hien_luu_anh) {
		$anh_minh_hoa = NULL;
	}

	// 3. Viết câu lệnh SQL để cập nhật giáo viên có ID như trên
	if($anh_minh_hoa == NULL)
	{
		$sql = "
		     UPDATE `tbl_doi_tac`
		     SET `ten_doi_tac`='".$ten_doi_tac."',`gioi_thieu`='".$gioi_thieu."',`email`='".$email."',`dien_thoai`='".$dien_thoai."',`dia_chi`='".$dia_chi."',`ghi_chu`='".$ghi_chu."' WHERE `id_doi_tac` = '".$id_doi_tac."' 
		";
	} else {
		$sql = "
			 UPDATE `tbl_doi_tac`
		     SET `ten_doi_tac`='".$ten_doi_tac."',`gioi_thieu`='".$gioi_thieu."',`email`='".$email."',`dien_thoai`='".$dien_thoai."',`dia_chi`='".$dia_chi."',`anh`='".$anh_minh_hoa."',`ghi_chu`='".$ghi_chu."' WHERE `id_doi_tac` = '".$id_doi_tac."' 
		";
	}

	// 4. Thực hiện truy vấn để thêm mới dữ liệu
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc thêm mới đối tác thành công & quay trở lại trang quản lý đối tác
		// Thông báo cho người dùng biết thông tin đối tác đã được thêm mới thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật thông tin đối tác thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị đối tác
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './quan_tri_doi_tac.php'
			</script>
		";
;?>