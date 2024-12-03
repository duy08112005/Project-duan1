<?php
     // Đoạn mã để đăng xuất
session_start();
session_unset(); // Xóa tất cả session variables
session_destroy(); // Hủy session
header("Location: login.php"); // Chuyển hướng về trang đăng nhập
exit();

?>