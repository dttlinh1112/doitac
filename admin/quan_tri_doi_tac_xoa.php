<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "doi_tac_db");

	// 2. Lẫy ra được ID muốn xóa
	$id_doi_tac = $_GET["id"];

	// 3. Viết câu lệnh SQL để xóa đối tác có ID như trên
	$sql = "
		DELETE
		FROM tbl_doi_tac
		WHERE id_doi_tac='".$id_doi_tac."'
	";

	// 4. Thực hiện truy vấn để xóa dữ liệu
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc xóa đối tác thành công & quay trở lại trang quản lý đối tác
		// Thông báo cho người dùng biết thông tin đối tác đã được xóa thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã xóa đối tác thành công.');
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