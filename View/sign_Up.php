<?php require 'includes/header.php'?>

<div class="position">
    <div class="signup-container">
        <h1>Sign up</h1><br>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" name="name" placeholder="Enter your first name...">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Enter your last name...">
            </div>
            <div class="mb-3">
                <label for="email_signup" class="form-label">Email</label>
                <input type="text" class="form-control" id="email_signup" name="email" placeholder="Enter your email address...">
            </div>
            <div class="mb-3">
                <label for="pass_signup" class="form-label">Password</label>
                <input type="text" class="form-control" id="pass_signup" name="password" placeholder="Enter your password...">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="pass_signup" name="passwordrepeat" placeholder="Confirm your password...">
            </div>
            <button type="submit" class="btn btn-outline-secondary" id="signup" name="signup">Sign up</button>
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
    }

    .signup-container {
        width: 320px;
    }

    h1 {
        margin-top: 10px;
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

