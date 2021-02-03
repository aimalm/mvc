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

        if (isset($_POST['signup'])) {
            $name = $_POST['name'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$profilePicture = $_POST['profilepic'];

            $sqlTocheckDuplicates = "SELECT * FROM user WHERE email ='$email'";
            $result = $this->databaseManager->connection->query($sqlTocheckDuplicates);

            foreach ($result as $user) {
                //var_dump($em['email']);
                if ($email === $user['email']) {
                    $this->signUpErr = "Already an account is made with this email";

                    exit();
                }
            }
            $sql = "INSERT INTO user (`firstName`, `lastName`, `email`, `password`, `profilePicture`) VALUES ('$name', '$lastName','$email', '$password', '$profilePicture')";
            $result = $this->databaseManager->connection->query($sql);
            //$result->prepare($result);
            //$result->execute([$name,$lastName,$email,$password,$profilePicture]);

            header('Location: ./index.php?page=login');
            exit();

        }



        //load the view
        require './View/sign_Up.php';
    }
}
