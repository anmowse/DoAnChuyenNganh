<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <?php
    require_once "../api/config/config.php" ;
    $client = configGoogle::createconfig();
    $google_login_url = $client->createAuthUrl(); // Tạo URL đăng nhập Google
    ?>

    <a href="<?php echo $google_login_url; ?>">Đăng nhập bằng Google</a>
</body>
</html>
