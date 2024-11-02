<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
  
  
    
     
    
    <?php

    if (isset($_GET['code'])) {
        require_once "api/config/config.php";
        $client = configGoogle::createconfig();
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        echo "token ne";
        echo "<pre>";

        var_dump( $token); 
        echo "<pre>";
        $client->setAccessToken($token);
        $google_login_url = new Google\Service\Oauth2($client);

        $user_info = $google_login_url->userinfo->get();
        echo "user_info ne";
        echo "<pre>";
        var_dump( $user_info);
        echo "<pre>";
        foreach ($user_info as $key => $value) {
           echo $value;
        }
    }
    else {

        header("Location: view/login.php");
    }

  
?>
</body>
</html>
