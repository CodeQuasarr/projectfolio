<?php

namespace App;
class Autoload {
    
    /**
     * webRun othoload the all class we call
     *
     * @return void
     */
    public static function webRun()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class)
    {
        $class = str_replace(__NAMESPACE__ . '\\', '',$class);
        $class = str_replace('\\', '/', $class);

        $path =  __DIR__.'/App/'.$class .'.php' ;

        if(file_exists($path))
        {
            require_once $path;
        }
        else {
            die("La page n'existe pas");
        }
    }
}