<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="View/images/favicon.png">
    <title>Shenanigans - Challenge Your Friends</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <?php
                            if (isset($_GET['profile'])) { ?>
                                <!-- <a class="navbar-brand" href="../../index.php">Shenanigans</a> -->
                                <a class="navbar-brand" href="index.php">
                                    <img src="assets/logo/logo.png" width="150" height="25" alt="">
                                </a>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                    <a class="nav-link" href="index.php">Log out</a>
                                    </li>
                                    
                                    <li>
                                    <a class="nav-link" href="index.php?page=update"><img src="assets/icons/update.png" width="15px"></a>
                                    <!-- http://localhost/becode-the-mountain/mvc/index.php?page=update -->
                                    </li>                                    
                                </ul>
                                <?php
                                //exit();
                            }
                            else
                            {?>
                                <!-- <a class="navbar-brand" href="index.php">Shenanigans</a> -->
                                <a class="navbar-brand" href="index.php">
                                    <img src="View/images/logo.png" width="150" height="25" alt="">
                                </a>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?page=login">Log in</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?page=signup">Sign up</a>
                                    </li>
                                </ul>
                            <?php
                            }?>
                </div>
            </div>
        </nav>
    </header>

    <style>
        .logo_container img{
            height: 50px;
            width: auto;
        }
        

     </style>
