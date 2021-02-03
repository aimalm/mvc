<?php

declare(strict_types = 1);


class UpdateController{

    public $databaseManager;
 
    

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    

    public function update(){
        
        //SELECT

        $id=$_SESSION["uid"];
        $sql = "SELECT * FROM user WHERE id='$id' ";
        $result = $this->databaseManager->connection->query($sql); //prepare can also be used instead of query
        // $result->execute();
        $resultArray=$result->fetch();
        // var_dump($resultArray);
        $_SESSION['firstName']=$resultArray['firstName'];
        $_SESSION['lastName']=$resultArray['lastName'];
        $_SESSION['password']=$resultArray['password'];
        $_SESSION['profilepicture']=$resultArray['profilePicture'];
        
        // UPDATE 
        
        if(isset($_POST['update'])){
            $_SESSION['firstName']=$_POST['firstName'];
            $firstName=$_SESSION['firstName'];
            $_SESSION['lastName']=$_POST['lastName'];
            $lastName=$_SESSION['lastName'];
            $_SESSION['password']=$_POST['password'];
            $password=$_SESSION['password'];
            $_SESSION['profilepicture']=$_POST['profilepicture'];
            $profilepicture=$_SESSION['profilepicture'];
            $id=$_SESSION["uid"];

            // var_dump($_SESSION);
            $sqlForUpdate="UPDATE user SET firstName ='$firstName', lastName='$lastName', password='$password',profilepicture='$profilepicture' WHERE id='$id' ";
            $statement=$this->databaseManager->connection->prepare($sqlForUpdate);
            $statement->execute();
        
            // var_dump($statement);

            //DISPLAY ERROR FOR EMPTY FIELDS


            if(!empty($_POST['firstName'] &&  $_POST['lastName'] && $_POST['password']  && $_POST['profilepicture'] )){
            echo 'Your changes are successfully saved!';
            // var_dump($_POST['firstName']);
            }else{
                $_SESSION['showerror']='Required to fill in all the areas!';

            }
        
            
            //UPLOAD PROFILE IMAGE 

            if(isset($_POST['imagebutton'])){
               $target= ".View/images/".basename($_FILES['profilepicture']['name']);
                $profilePic=$_FILES['profilepicture']['name'];

                $sqlForImage="INSERT INTO user ( profilePicture) VALUES ('$profilePic')";
                $statement=$this->databaseManager->connection->prepare($sqlForImage);
                $statement->execute();

                if(move_uploaded_file($_FILES['profilePic']['tmp_name'],$target)){
                    echo "Profile picture has been changed succesfully";
                 } else {
                echo "There is a problem uploading the image!";
                }

            }

            //DISPLAY PROFILE IMAGE

            $sqlForDisplayImg="SELECT * FROM user ";
            $statement=$this->databaseManager->connection->query($sqlForDisplayImg);
            $statement->bindParam(1, $_GET['id']);
            $statement->execute();
             
            // to verify if a record is found
            $num = $statement->rowCount();
             
            if( $num ){
                // if found
                $row = $statement->fetch(PDO::FETCH_ASSOC);
                var_dump($row);
                // specify header with content type,
                // you can do header("Content-type: image/jpg"); for jpg,
                // header("Content-type: image/gif"); for gif, etc.
                header("Content-type: image/jpg");
                
                //display the image data
                print $row['profilePicture'];
                exit;
            }else{
                //if no image found with the given id,
                //load/query your default image here
            }





        
        // header("Location: ./View/info.php/?profile={$_SESSION["uid"]}");

        }
    }
    
    public function render(array $GET, array $POST)
    {
        $this->update();
        require 'View/update.php';

    }
}