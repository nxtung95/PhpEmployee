<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../khoiduoi/bang.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="xuly.js"></script>
</head>
<body>
    <center>
		<?php 
			$doc = new DOMDocument ("1.0","utf_8");
			$doc -> load("nv.xml");
			$list = $doc -> getElementsByTagName("nhanvien");
			echo "<h2>Danh sách nhân viên</h2>";
			echo "<table id='customers' class='table w-75'>";
			echo "<tr><th>Mã nhân viên</th><th>Tên nhân viên</th><th>Ngày sinh</th><th>Địa chỉ</th><th>Email</th><th>Điện thoại</th><th></th><th></th></tr>";
			foreach ($list as $key) {
				$a = $key->getElementsByTagName("manv");
				$b = $key->getElementsByTagName("tennv");
				$c = $key->getElementsByTagName("ngaysinh");
				$d = $key->getElementsByTagName("diachi");
				$e = $key->getElementsByTagName("email");
				$f = $key->getElementsByTagName("dienthoai");
				
				echo "<tr>";	
				echo "<td name='manv'>".$a->item(0)->nodeValue."</td>";
				echo "<td name='tennv'>".$b->item(0)->nodeValue."</td>";
				echo "<td name='ngaysinh'>".$c->item(0)->nodeValue."</td>";
				echo "<td name='diachi'>".$d->item(0)->nodeValue."</td>";
				echo "<td name='email'>".$e->item(0)->nodeValue."</td>";
				echo "<td name='dienthoai'>".$f->item(0)->nodeValue."</td>";
				echo "<td><button type='button' class='btn btn-success' onclick='fillData(this)' 
				data-manv='" . $a->item(0)->nodeValue . "' data-tennv='" . $b->item(0)->nodeValue 
				. "' data-ngaysinh='" . $c->item(0)->nodeValue . "' data-diachi='" . $d->item(0)->nodeValue . "' data-email='" . $e->item(0)->nodeValue . "' data-dienthoai='" . $f->item(0)->nodeValue . "'>
				Sửa</button></td>";
				echo "<td><button type='button' class='btn btn-success' data-manv='" . $a->item(0)->nodeValue . "' onclick='remove(this)'>Xóa</button></td>";
				echo "</tr>";
			}
			echo "</table>";
		?>
	</center>
	<center class='text-center'>
		<button type='button' class='btn btn-success' onclick="add()">Thêm</button>
		<button type='button' class='btn btn-success'>Xuất file json</button>
	</center>
	 <script>
		// function add() {
			// location.href = "add.html";
		// }
		
		// function fillData(e) {
			// const manv = e.getAttribute("data-manv");
			// const tennv = e.getAttribute("data-tennv");
			// const ngaySinh = e.getAttribute("data-ngaysinh");
			// const diaChi = e.getAttribute("data-diachi");
			// const email = e.getAttribute("data-email");
			// const dienThoai = e.getAttribute("data-dienthoai");
			// location.href = "edit.html";
		// }
		
		// function remove(e) {
			// const manv = e.getAttribute("data-manv");
			
		// }
 	// </script>
</body>
</html>