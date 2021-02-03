<?php

declare(strict_types = 1);


class UpdateController{

    public $statement;
    public $databaseManager;
    

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function render(array $GET, array $POST)
    {
        if(isset($_POST['update'])){
            echo 'hi';

            $firstName=$_POST['firstName'];
            $lastName=$_POST['lastName'];
            $password=$_POST['password'];
            $profilePicture=$_POST['profilepicture'];
            session_start();
            $id=$_SESSION["uid"];

            $sqlForUpdate="UPDATE user SET firstName ='$firstName', lastName='$lastName', password='$password',profilePicture='$profilePicture' WHERE id='$id' ";
            $statement=$this->databaseManager->connection->prepare($sqlForUpdate);
             var_dump($statement);
            // $statement = $connection->prepare($sqlForUpdate);
            $statement->execute();

            // $result=$this->statement->fetch();

            //no empty value error handling 

        }







        // header("Location: ./View/info.php/?profile={$_SESSION["uid"]}");



        require 'View/update.php';






    
    }
}