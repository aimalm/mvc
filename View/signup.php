<?php 
require 'includes/header.php'; 
?>

<link rel="stylesheet" href="View/style/style.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

<div class="signup-form">
<h1> Sign Up Now </h1>

<form class="row g-3" action="signup.php" method="post">
  <div class="col-md-6">
    <!-- <label class="form-label">Email</label> -->
    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="E-mail">
  </div>
  <div class="col-md-6">
    <!-- <label class="form-label">Username</label> -->
    <input type="username" name="username" class="form-control" id="inputusername4" placeholder="Username">
  </div>
  <div class="col-md-6">
    <!-- <label class="form-label">Password</label> -->
    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
  </div>
  <div class="col-md-6">
    <!-- <label class="form-label">Repeat Password</label> -->
    <input type="password" name="passwordrepeat" class="form-control" id="inputPasswordRepeat4" placeholder="Repeat Password">
  </div>
  <div class="col-11">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       <span> I read and agree to </span><a href="#">Terms and Conditions</a>.
      </label>
    </div>
  <div class="col-12">
    <button type="submit" name="signup" class="btn btn-primary">CREATE ACCOUNT</button>
  </div> 
  <div class="col-11">
    <span>Already have an account ?</span> <a href='#'>Login</a>
  </div> 




  </form>
  
  </div>

<!-- <?php require 'includes/footer.php'; ?> -->
 