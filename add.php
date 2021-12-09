<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm</title>
    <link rel="stylesheet" type="text/css" href="../khoiduoi/bang.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
		<h2 class='text-center'>Thêm nhân viên</h2>
		<form action="xulynv.php" method="post">
			<div class="form-group">
				<label for="manv">Mã nhân viên:</label>
				<input type="text" class="form-control" id="manv">
			</div>
			<div class="form-group">
				<label for="tennv">Tên nhân viên:</label>
				<input type="text" class="form-control" id="tennv">
			</div>
			<div class="form-group">
				<label for="birth">Ngày sinh:</label>
				<input type="text" class="form-control" id="birth">
			</div>
			<div class="form-group">
				<label for="address">Địa chỉ:</label>
				<input type="text" class="form-control" id="address">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="phone">Điện thoại:</label>
				<input type="text" class="form-control" id="phone">
			</div>
			<button type="submit" class="btn btn-success">Thêm</button>
			<button type="button" class="btn btn-success">Quay lại</button>
		</form>
	</center>   
</body>
</html>