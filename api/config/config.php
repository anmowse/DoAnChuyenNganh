<?php
require_once __DIR__ . '/../../autoloadMain.php'; 
define("GOOGLE_CLIENT_ID", "473929490647-5cg7r22g0gs3klt4jrbtogcsneqa52bt.apps.googleusercontent.com");
define("GOOGLE_CLIENT_SECRET", "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");
define("GOOGLE_REDIRECT_URI", "http://localhost:6006/index.php");

class configGoogle{
    private static $client; 
    // còn static thì nó sẽ dùng chính cái lớp mà được kế thừa bở cái lớp cha của lớp đó và có static 
     //ví dụ có 1 lớp parent có biến static và có 1 lớp child cũng có biến static ta có thể dùng biến của lớp con để dùng cho lớp cha
    public static function createconfig()
    { 
        if(self::$client === null){
            self::$client = new Google_Client(); // self ở đây có nghĩa là nó sẽ dùng biến $client ở chính cái lớp của nó
            self::$client->setHttpClient(new GuzzleHttp\Client(['verify' => false])); // phải có dòng này vì thiếu chứng chỉ ssl vì url không phải là https
            self::$client->setClientId(GOOGLE_CLIENT_ID);
            self::$client->setClientSecret(GOOGLE_CLIENT_SECRET);
            self::$client->setRedirectUri(GOOGLE_REDIRECT_URI);
            
            self::$client->addScope("email");
            self::$client->addScope("profile");
            
        }
        return self::$client;

    }


}





?>