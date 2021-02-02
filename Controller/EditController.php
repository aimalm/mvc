<?php
declare(strict_types = 1);

class EditController
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
    
        if(isset($_POST['editbtn'])){

            $firstName=$_POST['firstName'];
            $lastName=$_POST['lastName'];
            $password=$_POST['password'];
            $profilePicture=$_POST['profilePicture'];
        
        
        $sql="UPDATE gFRodNTslo.user SET firstName ='$firstName', lastName='$lastName', password='$password', profilePicture='$profilePicture' WHERE id='$id' ";
        $statement=$this->databaseManager->connection->query($sql);
        $result=statement->fetch(PDO::FETCH_OBJ);

        var_dump($result);

        header('Location: View/info.php');
        }
    
        require 'View/edit.php';

    }
    


}