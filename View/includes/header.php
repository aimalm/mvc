


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
    <header>
    <?php
    if(isset($_GET['profile'])) { ?>
        <p><a href="../../index.php">Log Out</a></p>
        <?php
        //exit();

    } 
    else
    {
        ?>
        <p><a href="index.php?page=info">About</a></p>
        <p><a href="index.php?page=signup">Sign up </a></p>
        <p><a href="index.php?page=login">Log in</a></p>

        <?php
    } ?>
    </header>
