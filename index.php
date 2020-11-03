<?php

$uri = $_SERVER["REQUEST_URI"];
require("admin/header.php");


if ($uri === "/" || $uri === "/admin/") {
  require("admin/dashboard.html");
}
elseif ($uri === "/danhmucsp") {
	require("admin/hang_hoa1.html");
}
elseif ($uri === "/thietlapgia") {
	require("admin/thietlapgia.html");
}
elseif ($uri === "/kiemkho") {
	require("admin/kiemkho.html");
}
elseif ($uri === "/donhang") {
	require("admin/dondathang.html");
}
elseif ($uri === "/hoadon") {
	require("admin/hoa_don1.html");
}
elseif ($uri === "/nhaphang") {
	require("admin/nhap_hang.html");
}
elseif ($uri === "/khachhang") {
	require("admin/khachhang.html");
}
elseif ($uri === "/ncc") {
	require("admin/nhacungcap.html");
}
elseif ($uri === "/nhanvien") {
	require("admin/nhanvien.html");
}
elseif ($uri === "/bangluong") {
	require("admin/tinh_luong.html");
}
elseif ($uri === "/soquy") {
	require("admin/soquy.html");
}


else {
  echo("Không tìm dc trang");
}


require("admin/footer.php");
?>
