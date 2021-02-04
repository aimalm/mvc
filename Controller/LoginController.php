<?php

declare(strict_types=1);

class LoginController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public $databaseManager;
    public $loginErr;
    public $log = 5;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
    public function login()
    {
         
            $_SESSION["loginErr"] ="";

        //header('Location: View/sign_Up.php');
        if (isset($_POST['loginbtn'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];


            $user = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
            $stm = $this->databaseManager->connection->query($user);
            //$result= $stm->execute();
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            $userArray = $result;
            echo "<pre>";
                //var_dump($result['email']);
            echo "</pre>";



                //var_dump($em['email']);
                if ($userArray) {
                    session_start();
                    $_SESSION["email"] = "$email";
                    $_SESSION["password"] = "$password";
                    $_SESSION["uid"] = "{$result['id']}";
                    //echo $user['firstName'];
                    
                    header("Location: index.php?page=info&profile={$_SESSION["uid"]}");
                    //exit();
                } 
                else 
                {               
         
                    $_SESSION["loginErr"] = "* Wrong password or email";
                }
        }
    }

    public function render(array $GET, array $POST)
    {
        $this->login();
        require './View/login.php';
    }
}
