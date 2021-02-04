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
                <p> <?php  echo $_SESSION["signUpErr"]; ?> </p>
            </div>
            <div class="mb-3">
                <label for="pass_signup" class="form-label">Password</label>
                <input type="text" class="form-control" id="pass_signup" name="password" placeholder="Enter your password...">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="pass_signup" name="passwordrepeat" placeholder="Confirm your password...">
                <p> <?php  echo $_SESSION["passErr"]; ?> </p>
            </div>
            <button type="submit" class="btn btn-outline-secondary" id="signup" name="signup">Sign up</button>
        </form>
    </div>
</div><br>
<style>
    body {
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .position {
        display: flex;
        justify-content: center;
    }

    .signup-container {
        width: 320px;
    }

    h1 {
        text-align: center;
        font-size: 50px;
    }

    .btn {
        background-color: #F15A24 !important;
        border: #F15A24;
        color: #FFFFFF !important;
        width: 100px;
    }

    button:hover {
        background-color: #DB4A1A !important;
    }

    footer {
        text-align: center;
        margin-bottom: 5px;
    }

</style>



<!-- <div class="login-form">

  <form class="row g-3" action="" method="post" >

    <input type="name" name="name" class="form-control" placeholder="Name" >

    <input type="lastname" name="lastname" class="form-control" placeholder="Last name"  >

    <input type="email" name="email" class="form-control" placeholder="E-mail adress" >
  
    <input type="password" name="password" class="form-control"placeholder="Password"  >

    <input type="password" name="passwordrepeat" class="form-control"  placeholder="Repeat Password">

    <input type="text" name="profilepic" class="form-control"  >

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      <span> I read and agree to </span><a href="#">Terms and Conditions</a>.
      </label>
    </div>
  
    <div class="col-11">
     <span>Already have an account ?</span> <a href='#'>Login</a>
    </div> 

   <button type="submit" class="signup" name="signup">Sign Up </button>

  </form>
  
</div>
</div> -->

<?php require 'includes/footer.php'?>


