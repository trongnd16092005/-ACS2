<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> <!-- Đường dẫn đến tệp CSS trong thư mục Views -->
    <script src="js/script.js"></script> <!-- Đảm bảo bạn có tập script.js để xử lý AJAX -->
</head>

<body>
    <?php include "home/navbar.php" ?>
    <?php include 'home/header.php'; ?>   <!-- Đường dẫn đến header -->
    
    <!-- Main content area -->
    <main style="height: 3000px;">
        <div id="main-content">
            <?php
                // Xử lý tham số `page` từ URL để quyết định nội dung hiển thị
                $page = isset($_GET['page']) ? $_GET['page'] : 'default';

                // Hiển thị nội dung tùy thuộc vào giá trị của `$page`
                if ($page === 'file3') {
                    include 'profile/profile000.php'; // Hiển thị file3
                } else {
                    include "Slide/slide.php"; // Hiển thị mặc định
                    include "home/product_list.php";
                }
            ?>
        </div>
    </main>
    
    <footer>
        <?php include 'home/footer.php'; ?>   <!-- Đường dẫn đến footer -->
    </footer>
</body>

</html>
