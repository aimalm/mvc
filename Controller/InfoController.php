<?php
declare(strict_types = 1);

class InfoController
{
    public $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    

    public function render(array $GET, array $POST)
    {
       
        $challenges = $this->databaseManager->getChallenges();
        foreach($challenges as $x){
           $challenge = $x;
           
        }
        require 'View/info.php';

    }
}

// class ChallengeCardController
// {
//     private $databaseManager;

//     public function __construct(DatabaseManager $databaseManager)
//     {
//         $this->databaseManager = $databaseManager;
//     }

//     public function createCard()
//     {
       
                    
//             // $user = "SELECT * FROM user";
//             // $stm = $this->databaseManager->connection->query($user);
//             // //$result= $stm->execute();
//             // $result = $stm->fetch(PDO::FETCH_ASSOC);
//             // $userArray = $result;
//             // echo "<pre>";
//             //     var_dump($userArray['id']);
//             // echo "</pre>";
//             echo "hi";
   
//     }

//     public function render(array $GET, array $POST)
//     {
//         $this->createCard();
//         require './View/includes/challengeCard.php';
//     }
// }