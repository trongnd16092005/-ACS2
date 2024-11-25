<script src="js/script.js"></script>

<header class="head">
    <div class="header-bottom d-flex justify-content-between align-items-center">
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
        <div class="container">
	<div class="row">
        <div class="col-md-6">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
          <!-- Nút giỏ hàng và đăng nhập -->
           <div class="col-md-6">
          <div class="d-flex align-items-center">
            <button name="giohang" class="btn  ms-2" id="cart-btn">
                <i class="fas fa-shopping-cart"></i>
            </button>
            <button name="dangnhap" class="btn btn-dark ms-2" id="signin-btn">
                <a href="login/login.php" class="text-white text-decoration-none">Sign In</a>
            </button>
            
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="profile-pic">
            <i class="fas fa-user-circle"></i>
                     </div>
         <!-- You can also use icon as follows: -->
           <!--  <i class="fas fa-user"></i> -->
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
                <a class="dropdown-item" href="javascript:void(0);" onclick="loadPage('file3')">
                    <i class="fas fa-sliders-h fa-fw"></i> Account
                </a>
            </li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
          </ul>
        </div>
        
    </div>
    </div>
</div>
</div>
      
</header>
