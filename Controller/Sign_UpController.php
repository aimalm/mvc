<?php
declare(strict_types = 1);

class SignupController
{
    public $databaseManager;
   
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function render(array $GET, array $POST)
    {
    
        //  $login=new LoginModel($databaseManager);
        //  $login->login();

        if(isset($_POST['signup'])){
            $name=$_POST['name'];
            $lastName=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $profilePicture=$_POST['profilepic'];
        
        $sql="INSERT INTO user (`firstName`, `lastName`, `email`, `password`, `profilePicture`) VALUES ('$name', '$lastName','$email', '$password', '$profilePicture')";
        $result=$this->databaseManager->connection->query($sql);
        $result->execute([$name,$lastName,$email,$password,$profilePicture]);

        header('Location: View/login.php');
        }
        

        
        //load the view
        require 'View/sign_up.php';
        
    }
    
}