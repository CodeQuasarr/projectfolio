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

        if(!empty($_POST["capchat"]) && $_POST["capchat"] === "JE TE PRENDS")
        {
            $_SESSION["alert"] = [
                "message" => "Votre message a bien été envoyé"
            ];
            mail("dsanyaronke@gmail.com", "{$email} - {$nom} - {$numero}","{$msg}");
        } else {
            $_SESSION["alert"] = [
                "message" => "Votre message n'a pas été envoyé"
            ];
        }
        header('Location:/');

        
    }
}
