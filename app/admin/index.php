<?php
// 1. Nhúng các file cần thiết
include "../controller/controller.php";
include "../model/admin.php";
include "../model/adminQuery.php";
include "header.php";

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


// 3. Kiểm tra giá trị "act" và gọi xuống controller tương ứng
switch ($act) {
    // case "":
    //     // Điều hướng sang trang mặc định (trang danh sách) nếu người dùng không truyền "act"
    //     header("Location:index.php");
    //     break;

    case "list":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $Ctrl = new adminController();
        $Ctrl->showList();
        break;

    case "delete_category":
        // Gọi xuống controller để xử lý logic
        $Ctrl = new adminController();
        $Ctrl->delete($id);
        break;

    case "create":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $Ctrl = new adminController();
        $Ctrl->showCreate();
        break;

    case "book-detail":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $Ctrl = new adminController();
        $Ctrl->showDetail($id);
        break;

    case "update_category":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $Ctrl = new adminController();
        $Ctrl->showUpdate($id);
        break;


    case "list-user":
            // Gọi xuống controller để xử lý logic và hiển thị file view
            $Ctrl = new adminController();
            $Ctrl->showListUser();
            break;    

    case "add-user":
                // Gọi xuống controller để xử lý logic và hiển thị file view
                $Ctrl = new adminController();
                $Ctrl->showCreateUser();
                break;   
                
    case  "delete-user":
           
        $Ctrl = new adminController();
        $Ctrl->showDeleteUser($id);
        break; 
    case "update-user":
        $Ctrl = new adminController();
        $Ctrl->showUpdateUser($id);
        break; 
    case "add-product" :
        $Ctrl = new adminController();
        $Ctrl->showCreateProdcut();
        break; 

        case "list-product":
            // Gọi xuống controller để xử lý logic và hiển thị file view
            $Ctrl = new adminController();
            $Ctrl->showListProduct();
            break;
        case "delete-product" :
            $Ctrl = new adminController();
            $Ctrl->showDeleteProduct($id);
            break;
        case "update-product"  :
            $Ctrl = new adminController();
            $Ctrl->showUpdateProduct($id);
            break;
        
         
    default:
        include "home.php";
        break;
}
