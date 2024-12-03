<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .sidebar {
    width: 250px;
    background-image: url('../upload/a.jpg');   
    background-size: cover;
    background-position: center;
    color: #fff;
    position: fixed;
    height: 100%;
    padding: 20px 15px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    background-color: rgba(0, 0, 0, 0.5); 
    background-blend-mode: darken;
}


/* Optional: You can add hover effects to the links for better interaction */
.sidebar a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #f8f9fa;
}


        .sidebar h3 {
            color: #f8f9fa;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .sidebar a {
            color: #ddd;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: red;
            color: #fff;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 1.75rem;
            font-weight: bold;
            flex-grow: 1;
        }

        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #fff;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #343a40;
        }

        .card-body img {
            max-width: 100%;
            max-height: 150px;
            object-fit: contain;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
                <h3>Admin Panel</h3>
                <a href="index.php?act=tk">Trang chủ</a>
                <a href="index.php?act=create">Danh mục</a>
                <a href="index.php?act=add-product">Hàng hóa</a>
                <a href="index.php?act=list-user">Khách hàng</a>
                <a href="index.php?act=dsbl">Bình luận</a>
                
</div>

<div class="content">
    <div class="header">
        <h1>Welcome, Admin</h1>
    </div>

    

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</html>

       