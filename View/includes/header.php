<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="View/style/style.css">
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <?php
                            if (isset($_GET['profile'])) { ?>
                            <!-- this link should take you back to the main profile page instead of the homepage-->
                                <a class="navbar-brand" href="../../index.php">Shenanigans</a>
                                <li class="nav-item">
                                <a class="nav-link" href="../../index.php">Log out</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../index.php?page=challenge">Challenge</a>
                                </li>
                                <li>
                                <a class="nav-link" href="../../index.php?page=update">Update</a>
                                <!-- http://localhost/becode-the-mountain/mvc/index.php?page=update -->
                                </li>
                                <a class="nav-link" href="../../index.php?page=edit">Edit</a>

                                <?php
                                //exit();
                            }
                            else
                            {?>
                                <a class="navbar-brand" href="index.php">Shenanigans</a>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=login">Log in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=signup">Sign up</a>
                                </li>
                            <?php
                            }?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
