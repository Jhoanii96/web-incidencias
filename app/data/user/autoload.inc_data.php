<?php
    spl_autoload_register(function($class){
        if (is_file(DATA . "user/$class" . ADD_DI . "php")) {
            require DATA . "user/$class" . ADD_DI . "php";
        }
    });
?>