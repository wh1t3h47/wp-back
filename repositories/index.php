<?php

class EcommerceRepository
{
    public static function install()
    {
        require_once "./install/index.php";
    }

    public static function uninstall()
    {
        require_once "./uninstall/index.php";
    }
}
