<!-- index.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Cơ Bản với PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="\fontawesome-free-5.15.4-web\fontawesome-free-5.15.4-web\css\all.min.css">
    <link rel="stylesheet" href="../css/style.css"> <!-- Đường dẫn đến tệp CSS trong thư mục Views -->
</head>

<body>
    <?php include '../home/header.php'; ?>   <!-- Đường dẫn đến header -->
                                           <!-- Đường dẫn đến navbar -->

    <main>
        <h2>Chào mừng đến với website của chúng tôi</h2>
        <p>Đây là phần nội dung chính của trang web.</p>
    </main>

    <?php include '../home/footer.php'; ?>   <!-- Đường dẫn đến footer -->
</body>
</html>
