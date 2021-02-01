<?php

declare(strict_types=1);

class LoginController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public $databaseManager;
    public $loginErr;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
    public function login()
    {

        if (isset($_POST['loginbtn'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];


            $sql = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
            $result = $this->databaseManager->connection->query($sql);
            $result->execute([$email, $password]);
            //var_dump($result->email);
            foreach ($result as $user) {
                //var_dump($em['email']);
                if ($email === $user['email'] && $password === $user['password']) {
                    session_start();
                    $_SESSION["email"] = "$email";
                    $_SESSION["password"] = "$password";
                    $_SESSION["uid"] = "{$user['id']}";
                    echo $user['firstName'];
                    
                    header("Location: View/info.php/?profile={$user['id']}");
                    //exit();
                } 
                else 
                {
                    echo "wrong";
                    header('Location: View/sign_Up.php');

                    //$this->loginErr = "wrong password or email";
                }
            }
        }
    }

    public function render(array $GET, array $POST)
    {

        //  $login=new LoginModel($databaseManager);
        //  $login->login();
        $this->login();



        require 'View/login.php';
    }
}
