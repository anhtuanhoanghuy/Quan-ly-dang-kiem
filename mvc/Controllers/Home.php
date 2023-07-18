<?php
//Trang chủ
    class Home extends Controller {
        public static function showMainPage() {
            if ($_SESSION["account"] == "1") {
                $show = parent :: view("MainPage", 
                ["Page" => "HomePage"]);
            } else {
                $show = parent :: view("RegistrationMainPage", 
                ["Page" => "HomePage"]);
            }
        }
    }



?>