<?php require 'includes/header.php'?>
<?php include './includes/subMenu.php' ?>
    <section>

        <p><a href="index.php">Back to homepage</a></p>
        <?php    
        session_start();
        
        var_dump($_SESSION["email"]);
 ?>



    </section>
<?php require 'includes/footer.php'?>