<?php require 'includes/header.php'?>

<div class="position">
    <div class="login-container">
        <h1>Log in</h1><br>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email_login" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_login" name="email" placeholder="Enter your email address...">
                <!-- <div id="emailWarning" class="form-text">Error message</div> -->
            </div>
            <div class="mb-3">
                <label for="pass_login" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass_login" name="password" placeholder="Enter your password...">
                <!-- <div id="passWarning" class="form-text">Your password is invalid.</div> -->
            </div>
            <button type="submit" class="btn btn-outline-secondary" id="loginbtn" name="loginbtn">Log in</button>
        </form>
    </div>
</div> 

<style>
    body {
        height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
    }

    .position {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-container {
        width: 320px;
    }

    h1 {
        text-align: center;
        font-size: 50px;
    }

    button {
        width: 100px;
    }  

    footer {
        text-align: center;
        margin-bottom: 5px;
    }
</style>

<?php require 'includes/footer.php'?>
 