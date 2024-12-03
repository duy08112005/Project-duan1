
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

    <!-- Map Begin -->
    
    <!-- Map End -->

    <!-- Contact Section Begin -->
    
        <div class="container">
        <h2 style="text-align: center; margin-bottom: 20px;">ĐĂNG KÝ TÀI KHOẢN</h2>
        <div class="form-box" style="max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <form class="row g-3" action="client.php?act=dk" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Tên Đăng nhập</label>
    <input type="text" class="form-control" name="userName">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Số điện thoại</label>
    <input type="number" class="form-control" name="tel" placeholder="Nhập số điện thoại">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Địa chỉ email</label>
    <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email">
  </div>
  <div class="col-12" style="margin-top: 20px;">
    <button type="submit" class="btn btn-primary" name="submit">Đăng ký</button>
  </div>
  <div class="col-12" style="margin-top: 20px;">
   <a href="client.php?act=login"><input type="button" value="Đăng Nhập" class="btn btn-success"></a>
  </div>
  <div class="mb-3">
    <p><?= htmlspecialchars($err) ?></p>
  </div>
  <div>
    <p><?= htmlspecialchars($success) ?></p>
  </div>
</form>
        </div>

   
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    
    
    <!-- Footer Section End -->

    <!-- Search Begin -->
   