<?php
    // Xử lý tham số `page` từ URL
    $page = isset($_GET['page']) ? $_GET['page'] : 'default';

    // Kiểm tra và include tệp tùy thuộc vào giá trị của `page`
    if ($page === 'file3') {
        // Sử dụng __DIR__ để lấy đường dẫn tuyệt đối từ thư mục hiện tại (Models)
        include __DIR__ . '/../Views/profile/profile000.php';  // Đảm bảo đường dẫn chính xác từ Models tới Views/profile
    } else {
        include __DIR__ . '/../Views/Slide/slide.php';  // Đường dẫn tới Slide
        include __DIR__ . '/../Views/home/product_list.php';  // Đường dẫn tới product_list
    }
?>
