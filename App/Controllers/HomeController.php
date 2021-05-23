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



        mail("dsanyaronke@gmail.com", "{$email} - {$nom} - {$numero}","{$msg}");

        $_SESSION["alert"] = [
            "message" => "Votre message a bien été envoyé"
        ];
        //header('Location:/');
        echo "<pre>";
        if(!empty($_POST["capchat"]) && $_POST["capchat"] === "JE TE PRENDS")
            var_dump($_POST);

        
    }
}
