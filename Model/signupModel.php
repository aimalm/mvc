<?php
declare(strict_types=1);

class SignupModel

{
    private $databaseManager;

    public function __construct( $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }


    public function login( array $POST) 
    {   
        
        $sql="INSERT INTO user (`firstName`, `lastName`, `email`, `password`, `profilePicture`) VALUES ('$name', '$lastName','$email', '$password', '$profilePicture')";
        $this->databaseManager->connection->query($sql);
        return $this->databaseManager;
        // header("Location: index.php?page=login");
        }
    }

