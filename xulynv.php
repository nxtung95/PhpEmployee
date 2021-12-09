<?php 
	function existNote($par,$s)
	{
		$list = $par->childNodes;
		foreach($list as $n)
		{
			if($n->nodeName ===$s)
			{
				return 1;
			}
		}
		return 0;
	}
	function alertMessage($msg)
	{
		echo "<script>";
		echo "alert('Lỗi trùng khóa');";
		echo "</script>";
		return true;
	}

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
	foreach($list as $manv)
	{
		if($manv->nodeValue==$ma)
		{
			$flag=1;//tồn tại
			//echo "sinh viên đã tồn tại";
			break;
		}
	}
	if($flag==0)
	{
		//tạo node "nhanvien"
		$nhanvien_node = $doc->createElement('nhanvien');
		$manv_node = $doc->createElement('manv');
		$manv_node->nodeValue = $ma;
		$tennv_node = $doc->createElement('tennv');
		$tennv_node->nodeValue = $ten;
		$ngaysinh_node = $doc->createElement('ngaysinh');
		$ngaysinh_node->nodeValue = $ngays;
		$diachi_node = $doc->createElement('diachi');
		$diachi_node->nodeValue = $dc;
		$email_node = $doc->createElement('email');
		$email_node->nodeValue = $mail;
		$dienthoai_node = $doc->createElement('dienthoai');
		$dienthoai_node->nodeValue = $dt;

		//Thêm node "manv" và node "tennv",... vào node "nhanvien"
		$nhanvien_node->appendChild($manv_node);
		$nhanvien_node->appendChild($tennv_node);
		$nhanvien_node->appendChild($ngaysinh_node);
		$nhanvien_node->appendChild($diachi_node);
		$nhanvien_node->appendChild($email_node);
		$nhanvien_node->appendChild($dienthoai_node);

		//Thêm thẻ nhanvien vao root
		$root->appendChild($nhanvien_node);

		//Lưu cập nhật
		$doc->save('nv.xml');

		//Chỉnh định dạng ngắt dòng khi thêm dữ liệu vào XML Document sử dụng simple xml
		$xml = simplexml_load_file('nv.xml');
		$doc->preserveWhiteSpace = true;
		$doc->formatOutput = true;
		$doc->loadXML($xml->asXML(), LIBXML_NOBLANKS);


		//Lưu cập nhật
		$doc->save('nv.xml');

	}

	header("location:formnv.php");
?>