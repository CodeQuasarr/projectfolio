<?php

namespace App\Controllers;

class HomeController extends Controller
{


    public function home()
    {
        $this->render(title: "home", description: "home page", path: "frontend/home");
    }

    public function reciveMsgFromContact()
    {
        $nom = htmlentities($_POST["name"]);
        $numero = htmlentities($_POST["phone"]);
        $email = htmlentities($_POST["email"]);
        $msg = ($_POST["message"]);
        mail('dsanyaronke@gmail.com', "$nom - $numero ", "email : $email Message : $msg");

        $_SESSION["alert"] = [
            "message" => "Votre message est envoyé"
        ];
        header('Location:/projectfolio');

        
    }
}
