<?php 

require 'includes/header.php';

?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <h1>Challenge your friends and create lifelong memories</h1><br>
    <h3>Hurry up and get started!</h3><br>
    <form action="index.php?page=signup" method="post">
        <button type="submit" class="btn btn-outline-secondary btn-lg" id="loginbtn" name="loginbtn">Sign up</button>
    </form>
</section>
<style>
    body {
        height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
    }

    section {
        text-align: center;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h3 {
        color: grey;
    }

    footer {
        text-align: center;
        margin-bottom: 5px;
    }

</style>


<?php require 'includes/footer.php'?>