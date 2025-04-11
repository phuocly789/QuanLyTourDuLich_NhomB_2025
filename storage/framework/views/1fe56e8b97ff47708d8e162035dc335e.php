<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ Đơn Giản</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Chào mừng đến với Trang Chủ</h1>
    </header>

    <main>
        <p>Đây là một trang web đơn giản được viết bằng PHP.</p>
        <p>Hôm nay là: <b><?php echo date("d/m/Y"); ?></b></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Trang Chủ PHP</p>
    </footer>
</body>
</html>
<?php /**PATH D:\BE2\laravel11-app\resources\views/welcome.blade.php ENDPATH**/ ?>