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
require 'Controller/LoginController.php';
require 'Controller/Sign_UpController.php';
require 'Model/signupModel.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

$controller = new HomepageController($databaseManager);
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();

}

// if(isset($_GET['page']) && $_GET['page'] === 'login') {
//      $controller = new LoginController();


if(isset($_GET['page']) && $_GET['page'] === 'signup') {
    $controller = new SignupController($databaseManager);
}


$controller->render($_GET, $_POST);

?>
