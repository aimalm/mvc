<?php 
require 'includes/header.php'; 
?>
<link rel="stylesheet" href="View/style/style.css">

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
<div class="login-form">


<form class="row g-3" action="login.php" method="post">
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
  </div>
  <div class="col-md-6">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="password">
  </div>

  </form>
  
</div>

<?php require 'includes/footer.php'; ?>
