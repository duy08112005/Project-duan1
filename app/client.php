<?php

// 1. Nhúng các file cần thiết
session_start();
include "controller/controller.php";
include "model/Admin.php";
include "model/AdminQuery.php";
include "header.php";
include "footer.php";



// 2. Lấy các giá trị cần thiết từ đường dẫn url
// Lấy giá trị "act" từ đường dẫn url
$act = "";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}

// Lấy giá trị "id" từ đường dẫn url
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
// Kiểm tra xem giỏ hàng đã có chưa, nếu chưa thì tạo mới
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// 3. Kiểm tra giá trị "act" và gọi xuống controller tương ứng
switch ($act) {
    case "":
        // Điều hướng sang trang mặc định (trang danh sách) nếu người dùng không truyền "act"
        include "view/home.php";
        break;

    case "sign-in":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $Ctrl = new adminController();
        $Ctrl->createAcc();
        break;

    case "login":
        // Gọi xuống controller để xử lý logic
       $Ctrl = new adminController();
       $Ctrl->login();
        break;

    case "log-out":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $Ctrl = new adminController();
        $Ctrl->logout();
        break;

    

    case "book-update":
        // Gọi xuống controller để xử lý logic và hiển thị file view
  //      $cilentCtrl= new ClientController();
        $cilentCtrl->showUpdate($id);
        break;

    default:
        // Hiển thị "trang 404 fage not found" nếu giá trị "act" không nằm trong danh sách phía trên.
        // Lưu ý: Gặp lỗi này phải kiểm tra ngay giá trị act trên đường dẫn url, xem xem có gõ sai chính tả không. Chứ gõ sai chính tả thì buồn lắm luôn...
        include "view/404.php";
        break;
}
