<?php
declare(strict_types = 1);


class SignupController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
    
        //  $login=new LoginModel($databaseManager);
        //  $login->login();

        if(isset($_POST['login'])){

            $name=$_POST['name'];
            $lastName=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $profilePicture=$_POST['profilepic'];
        }
        
        //load the view
        require 'View/sign_up.php';
        
    }
    
}