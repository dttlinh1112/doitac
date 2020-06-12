
<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới đối tác</title>
</head>
<body>
	<h1 style="text-align: center; font-weight: bold; color: red; padding-bottom: 20px;">THÊM MỚI ĐỐI TÁC</h1>

	<form action="./quan_tri_doi_tac_them_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p>
			Tên đối tác <br>
			<input type="text" name="txtTenDoiTac" style="width: 100%;">
		</p>
		<p>
			Ảnh minh họa <br>
			<input type="file" name="txtAnh" style="width: 100%;">
		</p>
		<p>
			Giới thiệu <br>
			<textarea type="text" name="txtGioiThieu" style="width: 100%;"></textarea> 
		</p>
		<p>
			Email <br>
			<input type="text" name="txtEmail" style="width: 100%;">
		</p>
		<p>
			Số điện thoại <br>
			<input type="text" name="txtDienThoai" style="width: 100%;">
		</p>
		<p>
			Địa chỉ <br>
			<input type="text" name="txtDiaChi" style="width: 100%;">
		</p>
		<p>
			Ghi chú <br>
			<input type="text" name="txtGhiChu" style="width: 100%;">
		</p>
		<button type="submit">Thêm mới</button>
	</form>
</body>
</html>