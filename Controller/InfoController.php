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
        //load the view
        require 'View/info.php';

    }
}