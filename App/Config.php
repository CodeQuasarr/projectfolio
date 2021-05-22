<?php

namespace App\config;

class Config {

    public static function validConnexionForm()
    {
        if (!empty($_POST['username']) && isset($_POST["username"])) {
            return true;
        }
        return false;
    }
}