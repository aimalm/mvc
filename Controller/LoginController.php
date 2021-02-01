<?php
declare(strict_types = 1);

class LoginController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
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

        if(isset($_POST['loginbtn'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
        
        
        $sql="SELECT email,password FROM gFRodNTslo.user WHERE email ='$email' AND password='$password'";
        $result=$this->databaseManager->connection->query($sql);
        $result->execute([$email,$password]);
            var_dump($result);
        // if($email==)

        header('Location: View/info.php');
        }
    
        require 'View/login.php';

    }
    


}