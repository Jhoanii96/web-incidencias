<?php
    spl_autoload_register(function($class){
        if (is_file(DATA . "admin/$class" . ADD_DI . "php")) {
            require DATA . "admin/$class" . ADD_DI . "php";
        }
    });
?>