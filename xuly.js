function add() {
	location.href = "add.html";
}

function fillData(e) {
	const manv = e.getAttribute("data-manv");
	const tennv = e.getAttribute("data-tennv");
	const ngaySinh = e.getAttribute("data-ngaysinh");
	const diaChi = e.getAttribute("data-diachi");
	const email = e.getAttribute("data-email");
	const dienThoai = e.getAttribute("data-dienthoai");
	location.href = "edit.html?manv=" + manv + "&tennv=" + tennv + "&ngaySinh=" + ngaySinh + "&diaChi=" + diaChi + "&email=" + email + "&dienThoai=" + dienThoai;
}

function remove(e) {
	const manv = e.getAttribute("data-manv");
	
}