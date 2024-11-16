<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Sử dụng CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="css/style.css"> <!-- Đường dẫn đến tệp CSS trong thư mục Views -->

    <style>
        .cart-btn i {
            font-size: 30px; /* Kích thước icon */
            color: black; /* Màu sắc icon */
        }
    </style>
</head>

<body>
    <?php include "home/navbar.php" ?>
    <?php include 'home/header.php'; ?>   <!-- Đường dẫn đến header -->

    <script>
      window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    const scrollY = window.scrollY;

    if (scrollY >= 32) { // Tương đương 2em nếu 1em = 16px
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});
    </script>

    <main style="height: 2000px;">
        <h2>Chào mừng đến với website của chúng tôi</h2>
        <p>Đây là phần nội dung chính của trang web.</p>
    </main>

    <?php include 'home/footer.php'; ?>   <!-- Đường dẫn đến footer -->

</body>
</html>