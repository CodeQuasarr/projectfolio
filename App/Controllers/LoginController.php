<?php

namespace App\Controllers;

use App\config\Config;
use App\Models\LoginModel;

class LoginController extends Controller{

    
    /**
     * login page
     *
     * @return void
     */
    public function login()
    {
        return $this->render(title:"login", description:"login page", path:"backend/login");
    }

    public function traitementLogin()
    {
        echo "<pre>";
        $userModel = new LoginModel;
        $username = $userModel->findBy(['username' =>filter_var($_POST["username"], FILTER_SANITIZE_STRING)])->fetch();
        
        if(!$username)
        {
            
            header('Location:/login');
        }
        $user = $userModel->hydrate($username);
        var_dump($userModel);
        var_dump($username);
        //  check if we get valid password
        if (password_verify(($_POST["password"]), $user->getPassword()))
        {
            echo "oui";
            header('Location:/admin/dashboard');
        }
        //echo password_hash("motdepasseinncorect", PASSWORD_DEFAULT);

        
    }
}