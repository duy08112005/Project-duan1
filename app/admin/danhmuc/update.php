<?php
// Khởi tạo các biến thông báo lỗi và thành công
$err = "";
$success = "";

// Giả định dữ liệu đã tồn tại
$category = (object) [
    'category_id' => '123',
    'name' => 'Hàng hóa mẫu'
];

// Xử lý khi người dùng submit form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy giá trị từ input
    $categoryName = trim($_POST['category_name'] ?? '');

    // Validate trường "Tên Loại"
    if (empty($categoryName)) {
        $err = "Tên loại không được để trống.";
    } elseif (strlen($categoryName) < 3) {
        $err = "Tên loại phải có ít nhất 3 ký tự.";
    } else {
        // Xử lý cập nhật vào cơ sở dữ liệu
        // Giả lập thành công
        $success = "Cập nhật loại hàng hóa thành công!";
        $category->name = $categoryName; // Cập nhật dữ liệu hiển thị
    }
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="#" method="post">
            <div class="mb-3">
                <label for="cate-id" class="form-label">Mã Loại</label>
                <input type="text" class="form-control" name="cate-id" id="cate-id" 
                       value="<?= htmlspecialchars($category->category_id) ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="category_name" class="form-label">Tên Loại</label>
                <input type="text" class="form-control" name="category_name" id="category_name" 
                       value="<?= htmlspecialchars($category->name) ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Chỉnh Sửa</button>
            <a href="index.php?act=list" class="btn btn-success">Danh Sách</a>
            <div>
                <?php if ($err): ?>
                    <p class="error"><?= htmlspecialchars($err) ?></p>
                <?php endif; ?>
                <?php if ($success): ?>
                    <p class="success"><?= htmlspecialchars($success) ?></p>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>
