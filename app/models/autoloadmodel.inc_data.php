<?php
    spl_autoload_register(function($class){
        if (is_file("app/model/$class/$class" . "Model.php")) {
            require "app/model/$class/$class" . "Model.php";
        }
    });
?>