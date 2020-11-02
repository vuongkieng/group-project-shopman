<?php

$uri = $_SERVER["REQUEST_URI"];
require("admin/header.php");

echo("<h1>File mẫu, đường dẫn uri: " . $uri . "</h1>");
echo("<h2>Xem cách cài .htaccess để cho mọi đường dẫn đều trỏ về index.php</h2>");
if ($uri === "/" || $uri === "/admin/") {
  require("admin/dashboard.html");
}
elseif ($uri === "/datakh") {
	require("admin/data_Khach_hang.html");
}
else {
  echo("Không tìm dc trang");
}


require("admin/footer.php");
?>
