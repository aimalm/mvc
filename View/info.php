<?php require 'View/includes/header.php'?>
<?php include 'View/includes/subMenu.php' ?>


<?php
//  require_once './Model/config1.php';
//  require_once './Model/DatabaseManager.php';
// require 'Controller/InfoController.php';
//  require 'Controller/ChallengeCardController.php';

//  $controller = new InfoController($databaseManager);

//  $this->databaseManagertwo = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
//  $databaseManagertwo->connect();
//  $controller2 = new InfoController($databaseManagertwo);
//     $controller2 = new ChallengeCardController($databaseManagertwo);

?>

    <section style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 sideBar">
                <ul>
                       
                    <li>
                        <div class="sideIcon">
                            <a href="index.php?page=challenge"><img src="assets/icons/Icon_right.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="sideIcon"><a href=""><img src="assets/icons/Icon_left.png" alt=""> </a></div>
                    </li>
                    <li>
                        <div class="sideIcon"><a href=""><img src="assets/icons/pending.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="sideIcon"><a href=""><img src="assets/icons/Favorite.png" alt=""></a></div>
                    </li>
                </ul>
                </div>
                <div class="col contentSection">
                    <?php require 'includes/challengeCard.php';?>
                </div>
            </div>
        </div>

    </section>
<style>
    .sideIcon img{
        height: auto;
        width: 40px;
    }
    .contentSection{
        background-color: gray;
    }
    .sideBar ul{
        position: fixed;
        display: flex;
        flex-direction: column;
        list-style-type: none;
        

    }
    .sideBar ul li{
        padding: 15px;

    }
    #searchField {
        border-radius: 5px;
        border: 3px solid transparent;
        margin-left: 5px;
    }

    #searchField:focus { 
    outline: none;
    border-color: #CCE5FF;
    box-shadow: 0 0 10px #CCE5FF;
    }
</style>

<?php require 'includes/footer.php'?>