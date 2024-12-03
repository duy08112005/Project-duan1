<body>
    <!-- Page Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu -->
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
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt="Search"></a>
            <a href="#"><img src="img/icon/heart.png" alt="Wishlist"></a>
            <a href="#"><img src="img/icon/cart.png" alt="Cart"> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>

    <!-- Header -->
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
                                <a href="?act=mybill">Bill</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
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
                        <a href="./index.html"><img src="img/logo.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li class="active"><a href="./shop.html">Shop</a></li>
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
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt="Search"></a>
                        <a href="#"><img src="img/icon/heart.png" alt="Wishlist"></a>
                        <a href="#"><img src="img/icon/cart.png" alt="Cart"> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Section -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="client.php?act=billconfirm" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="checkout__input">
                                <p>Tên <span>*</span></p>
                                <input type="text" value="<?=$bill->bill_name?>">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ <span>*</span></p>
                                <input type="text" placeholder="Street Address" value="<?=$bill->bill_address?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số Điện Thoại <span>*</span></p>
                                        <input type="text" value="<?=$bill->bill_tel?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email <span>*</span></p>
                                        <input type="text" value="<?=$bill->bill_email?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Phương thức thanh toán <span>*</span></p>
                                <input type="text" value="<?=$bill->bill_pttt == 1 ? 'Payment' : ($bill->bill_pttt == 2 ? 'Credit' : ($bill->bill_pttt == 3 ? 'COD' : 'Không xác định'))?>">
                            </div>
                            <div class="checkout__input">
                                <p>Ngày đặt hàng <span>*</span></p>
                                <input type="text" value="<?=$bill->create_date?>">
                            </div>
                            <?php if (!isset($_SESSION['user'])): ?>
                                <div class="checkout__input__checkbox">
                                    <label for="acc">
                                        Create an account?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <?php 
                                    $sum = 0;
                                    foreach ($loadCartDetail as $value): 
                                        $total = $value['price'] * $value['quantity'];
                                        $sum += $total;
                                    ?>
                                        <li><?=$value['quantity']?>. <?=$value['name']?> <span>$<?=$total?></span></li>
                                    <?php endforeach; ?>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span>$<?=$sum?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Add Footer Content -->
            </div>
        </div>
    </footer>

    <!-- Search -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here...">
            </form>
        </div>
    </div>

    <!-- JS -->
    <script>
        document.getElementById('acc').addEventListener('change', function () {
            if (this.checked) {
                window.location.href = "client.php?act=sign-in";
            }
        });
    </script>
</body>
