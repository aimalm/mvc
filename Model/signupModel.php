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
        
       
        // header("Location: index.php?page=login");
        }
    }

