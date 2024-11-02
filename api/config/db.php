<?php 

class database{
    private static $host = "localhost";
    private static $db_name = "qlbanquanao";
    private static $user = "root";
    private static $pass = "";
    private static $conn ;

    public static function  getConnection(){
        self::$conn = null;
        try {
            self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$user, self::$pass);
            self::$conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Kết nối không thành công: " . $exception->getMessage();
        }
        return self::$conn;
    }
  
    }

       
     
?>