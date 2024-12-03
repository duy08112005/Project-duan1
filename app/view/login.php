<?php
// Initialize variables for error and success messages
$err = $success = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Simple validation (you can replace this with a real database check)
    if (empty($username) || empty($password)) {
        $err = "Username and password are required!";
    } else {
        // Here you would typically check the credentials against a database
        // For this example, let's use a hardcoded username and password
        $stored_username = "user123";
        $stored_password = "password123"; // Example: password in plain text (replace with hashed password in real applications)

        // Check if the username and password match
        if ($username === $stored_username && $password === $stored_password) {
            $success = "Login successful! Welcome, " . htmlspecialchars($username) . ".";
        } else {
            $err = "Invalid username or password!";
        }
    }
}
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./shop.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li class="active"><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
               
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Contact Section Begin -->
    
    <div class="container">
    <!-- Tiêu đề -->
    <h1 style="text-align: center; margin-bottom: 20px;">ĐĂNG NHẬP</h1>

    <!-- Form đăng nhập trong box -->
    <div class="form-box" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="username"  placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="password"  placeholder="Nhập mật khẩu" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
            </div>
            <div class="mt-3">
                <p class="text-danger"><?= htmlspecialchars($err ?? '') ?></p>
                <p class="text-success"><?= htmlspecialchars($success ?? '') ?></p>
            </div>
        </form>
    </div>
</div>

   
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    
    <!-- Footer Section End -->

    <!-- Search Begin -->
     <style>
        
     </style>
</body>
