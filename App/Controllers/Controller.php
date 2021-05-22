<?php
namespace App\Controllers;

class Controller {

    public function render(string $title, string $description, string $path, $data = [], string $layout = "default")
    {
        $title = $title; 
        $description = $description; 

        //  extraction of our database tables
        extract($data);
        //  load page 
        ob_start();

        require_once "App/Views/$path.view.php";
        $contents = ob_get_clean();
        // require_once "../App/Views/template/alert.php";
        require_once "App/Views/layout/$layout.php";

    }
}