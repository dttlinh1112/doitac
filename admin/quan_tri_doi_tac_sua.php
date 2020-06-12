<!DOCTYPE html>
<html>
<head>
	<title>Sửa đối tác</title>
</head>
<body>
	<h1 style="text-align: center; font-weight: bold; color: red; padding-bottom: 20px;">SỬA ĐỐI TÁC</h1>
	<?php 
		// 1. Chuỗi kết nối đến CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "doi_tac_db");

		// 2. Lẫy ra được ID muốn xóa
		$id_doi_tac = $_GET["id"];

		// 3. Viết câu lệnh SQL để lấy giáo viên có ID như trên
		$sql = "
			SELECT * FROM `tbl_doi_tac` WHERE id_doi_tac='".$id_doi_tac."'
		";

		// 4. Thực hiện truy vấn để lấy dữ liệu
		$doi_tac = mysqli_query($ket_noi, $sql);

		// 5. Hiển thị dữ liệu lên Website
		$row = mysqli_fetch_array($doi_tac);
	;?>
	<form action="./quan_tri_doi_tac_sua_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p>
			Tên đối tác <br>
			<input type="text" name="txtTenDoiTac" value="<?php echo $row['ten_doi_tac'];?>" style="width: 100%;">
		</p>
		<p>
			Ảnh minh họa <br>
			<input type="file" name="txtAnh" style="width: 100%;">
		</p>
		<p>
			<img src="../img/<?php 
					if ($row["anh"]<>"") {
						echo $row["anh"];
					} else {
						echo "no_image.png";
					}
				;?>" width="180px" height="auto">
		</p>
		<p>
			Giới thiệu <br>
			<textarea type="text" name="txtGioiThieu" value="<?php echo $row['gioi_thieu'];?>" style="width: 100%;"></textarea>
		</p>
		<p>
			Email <br>
			<input type="text" name="txtEmail" style="width: 100% " value="<?php echo $row['email'];?>">
		</p>
		<p>
			Số điện thoại <br>
			<input type="text" name="txtDienThoai" value="<?php echo $row['dien_thoai'];?>" style="width: 100%;">
		</p>
		<p>
			Địa chỉ <br>
			<input type="text" name="txtDiaChi" value="<?php echo $row['dia_chi'];?>" style="width: 100%;">
		</p>

		<p>
			Ghi chú <br>
			<input type="text" name="txtGhiChu" value="<?php echo $row['ghi_chu'];?>" style="width: 100%;">
		</p>
		
		<button type="submit">Cập nhật</button>
		<input type="hidden" name="txtID" value="<?php echo $row['id_doi_tac'];?>">
	</form>
</body>
</html>