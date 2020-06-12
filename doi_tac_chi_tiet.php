<!DOCTYPE html>
<html>
<head>
	<title>Đối tác chi tiết | 20A4040102</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<h1 style="color: red;">Chào mừng các bạn ghé thăm Website MIS</h1>
	<!-- <p style="text-align: right;" id="dieuhuong"><a href=".\index.html">Trang chủ</a> | <a href=".\gioi_thieu.php">Giới thiệu</a> | <a href=".\tin_tuc.html">Tin tức</a> | <a href=".\san_pham.php">Sản phẩm</a> | <a href=".\lien_he.html">Liên hệ</a></p> -->
	<?php 
	//0. Lấy dữliệu mã id_tin_tuc để thực hiện câu lệnh truy vấn
		$id_doi_tac= $_GET["id"]; 
		//1. tạo chuỗi kết nối đến csdl
				$ket_noi= mysqli_connect("localhost","root","","doi_tac_db");
				mysqli_set_charset($ket_noi, 'UTF8');
				//2. Viết câu lệnh SQL để lấy ra a dữ liệu mong muốn
				$sql="
				SELECT * FROM `tbl_doi_tac` WHERE id_doi_tac= '".$id_doi_tac."'
				";	
				// hướng dấn check câu lệnh sql khi cần
				//var_dump($sql); exit();
				//3 thực hiện truy vấn đẻ lấy ra dữ liệu mong muốn
				$noi_dung_doi_tac= mysqli_query($ket_noi, $sql);
				//4 hiển thị dữ liệu mong muốn
				while ($row= mysqli_fetch_array($noi_dung_doi_tac)) {
			;?>
			<h3>Tên đối tác: <?php echo $row["ten_doi_tac"];?></h3>
			<h3> Địa chỉ:<?php echo $row["dia_chi"];?></h3>
			<p style="text-align: center;">
			<img src="./img/<?php 
					if($row["anh"]<>""){
						echo $row["anh"];
					}
					else{
						echo"no_image.png";
					}
					 ?>" width="180px" height="auto"><p>
			<p><?php echo $row["gioi_thieu"];?></p>		
			<?php 
			}
	 ?> 
</body>
</html>