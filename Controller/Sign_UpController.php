<?php

declare(strict_types=1);

class SignupController
{
    public $databaseManager;
    public $signUpErr;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    

    public function render(array $GET, array $POST)
    {
        
        //  $login=new LoginModel($databaseManager);
        //  $login->login();
        $_SESSION["signUpErr"]="";
        $_SESSION["passErr"] = "";


        if (isset($_POST['signup'])) {
            $name = $_POST['name'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordrepeat = $_POST['passwordrepeat'];
            
            //$profilePicture = $_POST['profilepic'];

            $user = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
            $stm = $this->databaseManager->connection->query($user);
            //$result= $stm->execute();
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            $userArray = $result;

                //var_dump($em['email']);
                if ($userArray) {
                    $_SESSION["signUpErr"] = "Already an account is made with this email";

                   // exit();
                }else{
            
            $sql = "INSERT INTO user (`firstName`, `lastName`, `email`, `password`, `profilePicture`) VALUES ('$name', '$lastName','$email', '$password', '$profilePicture')";
            $result = $this->databaseManager->connection->query($sql);
            //$result->prepare($result);
            //$result->execute([$name,$lastName,$email,$password,$profilePicture]);

            header('Location: ./index.php?page=login');
            exit();
        }
        // password not match error
        if($password !== $passwordrepeat){
            $_SESSION["passErr"] = "Already an account is made with this email";

        }

        }



        //load the view
        require './View/sign_Up.php';
    }
}
