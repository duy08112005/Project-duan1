<style>
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Layout chung */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin: 20px 0;
}

.row.formtitle h1 {
    font-size: 28px;
    font-weight: bold;
    color: #4A90E2;
    text-align: center;
    margin-bottom: 20px;
}

/* Style for buttons */
.btn {
    padding: 12px 24px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    margin: 10px 5px;
}

.btn-primary {
    background-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

.btn-danger {
    background-color: #dc3545;
}

.btn-danger:hover {
    background-color: #b02a37;
    transform: translateY(-2px);
}

.btn-warning {
    background-color: #ffc107;
    color: #212529;
}

.btn-warning:hover {
    background-color: #e0a800;
    transform: translateY(-2px);
}

/* Table styles */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.table thead {
    background-color: #f8f9fa;
    color: #495057;
    text-align: left;
    font-weight: bold;
}

.table th, .table td {
    padding: 15px;
    border-bottom: 1px solid #dee2e6;
    font-size: 16px;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tbody tr:hover {
    background-color: #e9ecef;
}

.table td {
    color: #343a40;
    vertical-align: middle;
}

/* Form content style */
.row.formcontent {
    padding: 30px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Add responsiveness for small screens */
@media (max-width: 768px) {
    .row {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        margin: 10px 0;
    }
}
</style>

<div class="container">
    <div class="row">
        <div class="formtitle">
            <h1>Danh Sách Loại Hàng Hóa</h1>
        </div>
        <div class="text-center mb-3">
            <a href="?act=create"><button class="btn btn-primary">Thêm Mới</button></a>
        </div>
    </div>

    <div class="row formcontent">
        <form action="" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tên Loại</th>
                        <th scope="col">Mã Loại</th>
                        <th scope="col">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; foreach ($result as $category) { ?>
                    <tr>
                        <th scope="row"><?= ++$i ?></th>
                        <td><?= htmlspecialchars($category->category_id) ?></td>
                        <td><?= htmlspecialchars($category->name) ?></td>
                        <td>
                            <a href="index.php?act=delete_category&id=<?= $category->category_id ?>">
                                <button type="button" class="btn btn-danger" onclick="return confirm('Xóa Danh Mục?')">XÓA</button>
                            </a>
                            <a href="index.php?act=update_category&id=<?= $category->category_id ?>">
                                <button type="button" class="btn btn-warning">SỬA</button>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
