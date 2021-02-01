<?php
declare(strict_types=1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require_once './Model/config.php';
require_once './Model/DatabaseManager.php';
require 'Model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();
$query = $databaseManager->connection->query("SELECT * FROM user");
//var_dump($query);
//$result = $query->fetchAll();
foreach ($query as $id){
    ?> 
<h1> <?php echo $id["firstName"];
 ?> </h1>
<?php


}



$controller = new HomepageController($databaseManager);
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();

}


$controller->render($_GET, $_POST);
//$controller->getId();
?>