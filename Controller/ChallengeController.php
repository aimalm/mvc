<?php

declare(strict_types=1);

class ChallengeController
{
    public $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function render(array $GET, array $POST)
    {
        if(isset($_POST['createChallengeBtn'])) {
            $startDate=$_POST['challengeStartDate'];
            $endDate=$_POST['challengeEndDate'];
            $title=$_POST['challengeTitle'];
            $description=$_POST['challengeDescription'];
            $mediaFile = $_FILES['mediaFile']['name'];

            $sql = 'INSERT INTO challenge(startDate, endDate, challengeTitle, challengeDescription, challengeMedia) VALUES(?,?,?,?,?)';
            $result = $this->databaseManager->connection->prepare($sql);
            $result->execute([$startDate, $endDate, $title, $description,$mediaFile]);

            // the path to store the uploaded image
            $target = './View/images/'.basename($_FILES['mediaFile']['name']);

            // move the uploaded media file into the images folder
            if (move_uploaded_file($_FILES['mediaFile']['tmp_name'], $target)) {
                echo "Image uploaded succesfully";
            } else {
                echo "There was a problem uploading the image";
            }

            

        }

       



        //load the view
        require './View/challenge.php';
    }
}