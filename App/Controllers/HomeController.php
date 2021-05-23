<?php
namespace App\Controllers;
require "App/Core/phpmailer/PHPMailer.php";
require "App/Core/phpmailer/Exception.php";
require "App/Core/phpmailer/SMTP.php";



use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

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
            

            $mail = new PHPMailer(true); // appel de php mailer avec l'exeption a true
            try {
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // info sur le debug           
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->Port = "587";

                // charset
                $mail->CharSet = "UTF-8";
                // destinataire
                $mail->addAddress("dsanyaronke@gmail.com");
                // expediteur
                $mail->setFrom($email);

                // contenu
                $mail->Subject ="{$numero}";
                $mail->Body = "{$msg}";

                // envoi du message
                $mail->send();

                $_SESSION["alert"] = [
                    "message" => "Merci, votre message a bien été envoyé !"
                ];

            } catch (Exception) {
                $_SESSION["alert"] = [
                    "message" => "Votre message n'a pas pu être envoyé"
                ];
            }
        } else {
            $_SESSION["alert"] = [
                "message" => "Votre message n'a pas pu être envoyé"
            ];
        }
        header('Location:/');
        die();

        
    }
}
