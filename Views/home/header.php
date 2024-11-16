<header>
    <div class="header-bottom">
        <!-- Phần logo -->
        <div class="logo">
            <?php
            // Kiểm tra đường dẫn tương đối trước, nếu không có thì dùng đường dẫn tuyệt đối
            if (file_exists('../img/logo.jpg')) {
                $logo_path = '../img/logo.jpg';
            } elseif (file_exists('img/logo.jpg')) {
                $logo_path = 'img/logo.jpg';
            } else {
                $logo_path = '/ĐACS2/img/default-logo.jpg'; // Đường dẫn ảnh mặc định (nếu có)
            }
            ?>
            <img src="<?php echo $logo_path; ?>" alt="Logo" height="40">
        </div>

        <!-- Phần thanh tìm kiếm -->
        <div class="search d-flex">
            <form action="search.php" method="GET" class="d-flex">
                <input type="text" name="query" placeholder="Tìm kiếm..." class="search-input form-control col-lg-8 col-md-6 col-sm-8 col-10">
                <button type="submit" class="search-btn btn btn-dark ms-2"><i class="fas fa-search"></i></button>
            </form>
            <!-- Nút giỏ hàng với lớp .cart-btn -->
            <button name="giohang" class="cart-btn btn"><i class="fas fa-shopping-cart"></i></button>
            <button name="dangnhap" class="signin-btn btn btn-dark ms-2"><a href="login/login.php">Sign In</a></button>
        </div>
    </div>
</header>