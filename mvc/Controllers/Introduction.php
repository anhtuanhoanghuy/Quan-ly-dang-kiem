<!-- Hiển thị trang giới thiệu -->
<?php
    class Introduction extends Controller {
        public static function showMainPage() {
            if ($_SESSION["account"] == "1") {
                $show = parent :: view("MainPage", 
                ["Page" => "Introduction"]);
            } else {
                $show = parent :: view("RegistrationMainPage", 
                ["Page" => "Introduction"]);
            }
        }
    }
?>