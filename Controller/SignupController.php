<?php
declare(strict_types = 1);

class SignupController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        echo 'hey';
        //load the view
        require 'View/signup.php';

    }
}