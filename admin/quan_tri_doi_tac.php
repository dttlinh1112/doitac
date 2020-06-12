<!DOCTYPE html>
<html>
<head>
	<title>Quản trị đối tác</title>
</head>
<body>
	<h1 style="text-align: center; font-weight: bold; color: red; padding-bottom: 30px;">QUẢN TRỊ ĐỐI TÁC</h1>
	<p style="text-align: right; font-weight: bold;"><a href="quan_tri_doi_tac_them.php">Thêm mới</a></p>
	<table>
		<tr>
			<td style="font-weight: bold; text-align: center;">STT</td>
			<td style="font-weight: bold; text-align: center;">Tên đối tác</td>
			<td style="font-weight: bold; text-align: center;">Ảnh minh họa</td>
			<td style="font-weight: bold; text-align: center;">Email</td>
			<td style="font-weight: bold; text-align: center;">Điện thoại</td>
			<td style="font-weight: bold; text-align: center;">Địa chỉ</td>
			<td style="font-weight: bold; text-align: center;">Ghi chú</td>
			<td style="font-weight: bold; text-align: center;" colspan="2">Hiệu chỉnh</td>
		</tr>
		<?php 
			// 1. Chuỗi kết nối đến CSDL
			$ket_noi = mysqli_connect("localhost", "root", "", "doi_tac_db");

			// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
			$sql = "
				SELECT *
				FROM tbl_doi_tac
				ORDER BY id_doi_tac DESC
			";

			// 3. Thực hiện truy vấn để lấy ra các dữ liệu mong muốn
			$noi_dung_doi_tac = mysqli_query($ket_noi, $sql);

			// 4. Hiển thị dữ liệu mong muốn
			$i=0;
			while ($row = mysqli_fetch_array($noi_dung_doi_tac)) {
				$i++;
		;?>
		<tr>
			<td><?php echo $i;?></td>
			<td>
				<img src="../img/<?php 
						if ($row["anh"]<>"") {
							echo $row["anh"];
						} else {
							echo "no_image.png";
						}
					;?>" width="180px" height="auto">
			</td>
			<td>
				<a href="../doi_tac_chi_tiet.php?id=<?php echo $row["id_doi_tac"];?>"s><?php echo $row["ten_doi_tac"];?></a>
			</td>
			<td>
				<a href="../doi_tac_chi_tiet.php?id=<?php echo $row["id_doi_tac"];?>"s><?php echo $row["email"];?></a>
			</td>
			<td>
				<a href="../doi_tac_chi_tiet.php?id=<?php echo $row["id_doi_tac"];?>"s><?php echo $row["dien_thoai"];?></a>
			</td>
			<td>
				<a href="../doi_tac_chi_tiet.php?id=<?php echo $row["id_doi_tac"];?>"s><?php echo $row["dia_chi"];?></a>
			</td>
			<td>
				<a href="../doi_tac_chi_tiet.php?id=<?php echo $row["id_doi_tac"];?>"s><?php echo $row["ghi_chu"];?></a>
			</td>
			<td>
				<a href="quan_tri_doi_tac_sua.php?id=<?php echo $row["id_doi_tac"];?>">Sửa</a>
			</td>
			<td>
				<a href="quan_tri_doi_tac_xoa.php?id=<?php echo $row["id_doi_tac"];?>">Xóa</a>
			</td>
		</tr>
		<?php
			}
		;?>
	</table>
</body>
</html>