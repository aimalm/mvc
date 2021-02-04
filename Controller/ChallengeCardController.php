<?php
declare(strict_types = 1);






class ChallengeCardController
{
    private $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function createCard()
    {
       
        
            echo "hi";
            var_dump($this->connection);
   
    }

    public function render(array $GET, array $POST)
    {
        $this->createCard();
        require './View/includes/challengeCard.php';
    }
}
