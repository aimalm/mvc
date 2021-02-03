<?php

declare(strict_types = 1);

session_start();

class UpdateController{

    public $databaseManager;
 
    

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    

    public function update(){
        
        // //SELECT
        
        $id=$_SESSION["uid"];
        $sql = "SELECT * FROM user WHERE id=83";
        $result = $this->databaseManager->database->prepare($sql);
        $result->execute();
        $resultArray=$result->fetch();

        var_dump($id);
        
        if(isset($_POST['update'])){
            // echo 'hi';
            // $_SESSION['ses_firstname']=$_POST['firstName'];
            // $firstName=$_SESSION['ses_firstname'];
            // $_SESSION['ses_lastname']=$_POST['lastName'];
            // $lastName=$_SESSION['ses_lastname'];
            // $_SESSION['ses_password']=$_POST['password'];
            // $password=$_SESSION['ses_password'];
            // $_SESSION['ses_profilepicture']=$_POST['profilepicture'];
            // $profilePicture=$_SESSION['ses_profilepicture'];

            // $id=$_SESSION["uid"];
            // var_dump($_SESSION);
            // $sqlForUpdate="UPDATE user SET firstName ='$firstName', lastName='$lastName', password='$password',profilePicture='$profilePicture' WHERE id='$id' ";
            // $statement=$this->databaseManager->connection->prepare($sqlForUpdate);
            // $statement->execute();
        
            // var_dump($statement);




        // header("Location: ./View/info.php/?profile={$_SESSION["uid"]}");

        }
    }
    
    public function render(array $GET, array $POST)
    {
        $this->update();
        require 'View/update.php';

    }
}