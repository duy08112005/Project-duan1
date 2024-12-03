<?php
// Initialize variables for error and success messages
$err = "";
$success = "";
$categoryName = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get input values
    $categoryName = trim($_POST['category_name']);

    // Validate category name
    if (strlen($categoryName) < 3) {
        $err = "Vui lòng nhập tên loại hợp lệ (ít nhất 3 ký tự).";
    } else {
        $success = "Thêm loại hàng hóa thành công!";
    }
}
?>

<style>
    /* Custom Styles */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
    }

    .formtitle h1 {
        font-size: 2.5rem;
        font-weight: 600;
        color: #007bff;
    }

    .formcontent {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .formcontent input, .formcontent button {
        border-radius: 8px;
    }

    .alert {
        margin-bottom: 20px;
    }

    .btn-primary, .btn-success {
        padding: 12px 24px;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 500;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="formtitle text-center mb-4">
                <h1 class="text-primary">Thêm mới loại hàng hóa</h1>
            </div>
            <div class="formcontent">

                <!-- Display error or success message -->
                <?php if ($err): ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?= $err ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?= $success ?>
                    </div>
                <?php endif; ?>

                <form id="createCategoryForm" action="index.php?act=create" method="post" novalidate>
                    <div class="mb-3">
                        <label for="categoryId" class="form-label">Mã Loại</label>
                        <input
                            type="text"
                            id="categoryId"
                            class="form-control"
                            name="cate-id"
                            disabled
                            placeholder="Tự động tạo mã"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Tên Loại</label>
                        <input
                            type="text"
                            id="categoryName"
                            class="form-control <?= $err ? 'is-invalid' : '' ?>"
                            name="category_name"
                            value="<?= htmlspecialchars($categoryName) ?>"
                            required
                        >
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Thêm Mới</button>
                        <a href="index.php?act=list" class="btn btn-success">Danh Sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
