<?php 
	function alertMessage($msg)
	{
		echo "<script>";
		echo "alert('Lỗi trùng khóa');";
		echo "</script>";
		return true;
	}

	echo json_encode($_POST);
	//Lấy dữ liệu từ form
	$ma = $_POST['txtmanv'];
	$ten = $_POST['txttennv'];
	$ngays = $_POST['txtngaysinh'];
	$dc = $_POST['txtdiachi'];
	$mail = $_POST['txtemail'];
	$dt = $_POST['txtdienthoai'];

	//Tạo mới tà liệu XML
	$doc = new DOMDocument ('1.0','utf-8');
	$doc->load('nv.xml'); //Nạp tài liệu XML vào đối tượng $doc

	//Truy xuất node gốc
	$root = $doc->documentElement; //danhsach
	$list = $root->getElementsByTagName("nhanvien");
	$flag =0;
	foreach($list as $nv)
	{
		echo $nv->item(0)->nodeValue;
		if($nv->nodeValue == $ma)
		{
			
			break;
		}
	}

	// header("location:formnv.php");
?>