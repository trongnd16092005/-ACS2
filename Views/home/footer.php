<!-- footer.php -->
<footer>
    <div class="container-footer">
        <dip class="wrapper-footer">
            <div class="footer-widget">
                <a href="#">
                <?php
    // Kiểm tra đường dẫn tương đối trước, nếu không có thì dùng đường dẫn tuyệt đối
                if (file_exists('../img/logo.jpg')) {
                    $logo_path = '../img/logo.jpg';
                } elseif (file_exists('img/logo.jpg')) {
                    $logo_path = 'img/logo.jpg';
                } else {
                    $logo_path = ''; // Nếu không tìm thấy file, có thể hiển thị thông báo hoặc đường dẫn mặc định
                }
                ?>
               <img src="<?php echo $logo_path; ?>" class="logo-footer" alt="Logo">
                </a>
                <p class="desc">
                    HARAVAN
                </p>
                <ul class="socials">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100035922248326">
                             <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/yn.1695?igsh=MXRiOHRzMDQ0dm0xOA%3D%3D&utm_source=qr">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Quick link</h6>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Testimonial</a></li>
                    <li><a href="#">Contact</a></li>    
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Service</h6>
                <ul class="links">
                    <li><a href="#">Service1</a></li>
                    <li><a href="#">Service2</a></li>
                    <li><a href="#">Service3</a></li>
                    <li><a href="#">Service4</a></li>
                    <li><a href="#">Service5</a></li>    
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Support link</h6>
                <ul class="links">
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </dip>
        <div class="copyright-wrapper">
            <p>&copy; 2024 Haravan | All Rights Reserved.</p>
        </div>
    </div>
</footer>
